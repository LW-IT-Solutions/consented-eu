<?php

declare(strict_types=1);

namespace Consented\Core;

use Consented\Auth\Support;
use Consented\Core\Exception\HttpException;
use Consented\Core\Exception\ValidationException;

final class Kernel
{
    private Router $router;

    public function __construct()
    {
        $this->router = new Router();
        $this->registerMiddleware();
    }

    public function router(): Router
    {
        return $this->router;
    }

    public function handle(Request $request): Response
    {
        // API and SDK routes manage their own headers (CORS, long-lived
        // caching, no CSP) — the dashboard policy would break them.
        $isPublicDelivery = str_starts_with($request->path, '/api/')
            || str_starts_with($request->path, '/p/')
            || str_starts_with($request->path, '/sdk/');

        // Bleibt null, wenn die Anfrage sauber durchläuft. Der finally-Block
        // unten hängt es an den Prüfpfad-Eintrag, damit ein Fehlversuch als
        // solcher erkennbar ist statt zu fehlen.
        $outcome = null;

        try {
            $session = Session::boot($request);

            // Nach der Session, weil die gespeicherte Sprache eines
            // angemeldeten Kontos Vorrang vor Cookie und Browserheader hat.
            Lang::boot($request, $session->userId());

            $response = $this->router->dispatch($request);
        } catch (ValidationException $e) {
            $outcome  = 'validation';
            $response = $this->renderValidationError($request, $e);
        } catch (HttpException $e) {
            $outcome  = $e->status();
            $response = $this->renderHttpError($request, $e->status(), $e->getMessage());
        } catch (\Throwable $e) {
            error_log('[consented] ' . $e::class . ': ' . $e->getMessage() . ' @ ' . $e->getFile() . ':' . $e->getLine());

            $outcome  = $e::class;
            $response = $this->renderServerError($request, $e);
        } finally {
            // Schreibzugriffe während einer Support-Freigabe werden hier
            // festgehalten, nicht in den einzelnen Controllern.
            //
            // Der Grund ist unangenehm, aber entscheidend: vier der acht
            // Kundenmasken — Design, Sprachen, Dienste, Texte — protokollieren
            // gar nichts, auch nicht für den Kunden selbst. Verließe sich die
            // Zusage „jede Änderung landet im Prüfpfad" auf sie, wäre sie für
            // die Hälfte der Masken schlicht falsch.
            //
            // Im finally, nicht im Erfolgspfad: ein Controller kann geschrieben
            // haben und danach in eine Ausnahme laufen. Dann ist die Änderung
            // in der Datenbank und der einzige Beleg dafür wäre verloren.
            //
            // Das ersetzt kein Feld-für-Feld-Diff. Es beantwortet die Frage,
            // die im Streitfall zuerst kommt: hat der Betreiber in diesem
            // Kundenkonto etwas verändert, wann, und mit welcher Begründung.
            $this->recordSupportWrite($request, $outcome);
        }

        try {
            Session::instance()->commit();
        } catch (\Throwable) {
            // A session that cannot be persisted must not blank the page.
        }

        return Csp::apply($response, !$isPublicDelivery);
    }

    /**
     * Hält einen Schreibzugriff fest, der unter einer Support-Freigabe lief.
     *
     * @param int|string|null $outcome Statuscode oder Ausnahmeklasse, wenn die
     *                                 Anfrage nicht sauber durchgelaufen ist
     */
    private function recordSupportWrite(Request $request, int|string|null $outcome): void
    {
        if (in_array($request->method, ['GET', 'HEAD', 'OPTIONS'], true)) {
            return;
        }

        $grant = Support::active();

        if ($grant === null) {
            return;
        }

        // Positiv gefiltert, nicht negativ.
        //
        // Vorher galt "alles außer /admin/ und /support/", und damit wurde JEDE
        // andere Schreibanfrage derselben Sitzung dieser Property zugerechnet —
        // auch ein Passwortwechsel unter /account oder Arbeit an einer eigenen
        // Property des Betreibers. Das ist zweimal falsch: es belastet die
        // Freigabe mit Vorgängen, die nichts mit ihr zu tun haben, und es
        // verdünnt den Prüfpfad genau dort, wo er scharf sein muss.
        if (!str_starts_with($request->path, '/properties/' . $grant['public_id'])) {
            return;
        }

        $diff = [
            'path'   => $request->path,
            'method' => $request->method,
            'reason' => $grant['reason'],
        ];

        // Ein Fehlversuch wird festgehalten, aber als solcher gekennzeichnet.
        // Ihn wegzulassen wäre bequem und falsch: ob eine Anfrage etwas
        // verändert hat, entscheidet der Controller, nicht der Statuscode.
        if ($outcome !== null) {
            $diff['outcome'] = is_int($outcome) ? 'HTTP ' . $outcome : $outcome;
        }

        Audit::log(
            'admin.support_write',
            $grant['user_id'],
            null,
            $grant['property_id'],
            'property',
            $grant['public_id'],
            $diff,
            $request->ip()
        );
    }

    private function registerMiddleware(): void
    {
        $this->router->registerMiddleware('auth', static function (Request $request, callable $next): Response {
            $session = Session::instance();

            if (!$session->isAuthenticated()) {
                if ($request->wantsJson()) {
                    throw new HttpException(401);
                }

                $session->put('_intended', $request->path);
                $session->flash('info', 'Bitte melde dich an, um fortzufahren.');

                return Response::redirect(Url::to('/login'));
            }

            return $next($request);
        });

        $this->router->registerMiddleware('guest', static function (Request $request, callable $next): Response {
            if (Session::instance()->isAuthenticated()) {
                return Response::redirect(Url::to('/dashboard'));
            }

            return $next($request);
        });

        $this->router->registerMiddleware('csrf', static function (Request $request, callable $next): Response {
            if (in_array($request->method, ['GET', 'HEAD', 'OPTIONS'], true)) {
                return $next($request);
            }

            $session = Session::instance();
            $token   = $request->input('_csrf') ?? $request->header('x-csrf-token') ?? '';

            if (!$session->verifyCsrf($token)) {
                throw new HttpException(419);
            }

            // Origin check on top of the token: defence in depth against a
            // token that leaked through some other channel.
            $origin = $request->origin();
            if ($origin !== null && $origin !== '') {
                $expected = rtrim((string) Env::get('APP_URL', ''), '/');
                $host     = parse_url($origin, PHP_URL_HOST);
                $appHost  = parse_url($expected, PHP_URL_HOST);

                // dev.consented.eu serves the same app; accept any host that
                // this request actually arrived on.
                if (is_string($host) && $host !== $appHost && $host !== $request->host()) {
                    throw new HttpException(403, 'Cross-origin request blocked.');
                }
            }

            return $next($request);
        });

        $this->router->registerMiddleware('admin', static function (Request $request, callable $next): Response {
            $userId = Session::instance()->userId();

            if ($userId === null) {
                Session::instance()->put('_intended', $request->path);

                return Response::redirect(Url::to('/login'));
            }

            $isAdmin = Db::value(
                'SELECT is_admin FROM users WHERE id = :id AND deleted_at IS NULL',
                ['id' => $userId]
            );

            // 404, not 403: a normal customer should not learn that an admin
            // area exists at this path.
            if ((int) $isAdmin !== 1) {
                throw new HttpException(404);
            }

            return $next($request);
        });

        $this->router->registerMiddleware('verified', static function (Request $request, callable $next): Response {
            $session = Session::instance();
            $userId  = $session->userId();

            if ($userId === null) {
                throw new HttpException(401);
            }

            $verified = Db::value('SELECT email_verified_at FROM users WHERE id = :id', ['id' => $userId]);

            if ($verified === null) {
                return Response::redirect(Url::to('/verify-email'));
            }

            return $next($request);
        });
    }

    private function renderValidationError(Request $request, ValidationException $e): Response
    {
        if ($request->wantsJson()) {
            return Response::json(['error' => 'validation_failed', 'errors' => $e->errors()], 422);
        }

        $session = Session::instance();
        $session->put('_errors', $e->errors());
        $session->flashInput($request->post);
        $session->flash('error', $e->getMessage());

        return Response::redirect($e->redirectTo() ?? Url::to($request->path));
    }

    private function renderHttpError(Request $request, int $status, string $message): Response
    {
        if ($request->wantsJson()) {
            return Response::json(['error' => $message], $status);
        }

        // 419 is a stale CSRF token: send the visitor back to the form with a
        // fresh one rather than showing an error page they cannot act on.
        if ($status === 419) {
            Session::instance()->flash('error', $message);

            return Response::redirect(Url::to($request->path));
        }

        return Response::html(
            View::render('errors/error', [
                'status'  => $status,
                'message' => $message,
            ], 'layouts/bare'),
            $status
        );
    }

    private function renderServerError(Request $request, \Throwable $e): Response
    {
        $isDev = Env::get('APP_ENV', 'prod') === 'dev';

        if ($request->wantsJson()) {
            return Response::json(
                $isDev
                    ? ['error' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()]
                    : ['error' => 'Internal server error'],
                500
            );
        }

        return Response::html(
            View::render('errors/error', [
                'status'    => 500,
                'message'   => 'Auf unserer Seite ist etwas schiefgelaufen.',
                'exception' => $isDev ? $e : null,
            ], 'layouts/bare'),
            500
        );
    }
}
