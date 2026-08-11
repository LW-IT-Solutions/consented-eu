<?php

declare(strict_types=1);

namespace Consented\Auth;

use Consented\Core\Audit;
use Consented\Core\Controller;
use Consented\Core\Clock;
use Consented\Core\Csp;
use Consented\Core\Db;
use Consented\Core\Env;
use Consented\Core\Exception\HttpException;
use Consented\Core\Hash;
use Consented\Core\Lang;
use Consented\Core\Mail;
use Consented\Core\RateLimiter;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\Session;
use Consented\Core\Settings;
use Consented\Core\Str;
use Consented\Core\Url;
use Consented\Org\Organization;

final class RegisterController extends Controller
{
    public function show(Request $request): Response
    {
        $this->guardRegistrationOpen();

        Csp::allowCaptcha();

        return $this->view('auth/register', [
            'title'      => __('auth.register.page_title'),
            'inviteHint' => $request->input('invite'),
        ], 'layouts/auth');
    }

    public function register(Request $request): Response
    {
        $this->guardRegistrationOpen();

        $key = 'register:ip:' . $request->ip();

        if (RateLimiter::tooManyAttempts($key, 10)) {
            $this->flash('error', __('flash.auth.register_throttled'));

            return $this->redirect('/register');
        }

        RateLimiter::hit($key, 3600);

        // Nur ein nachgewiesener Bot wird abgewiesen. Die Begruendung fuer
        // diese Richtung steht einmal in AuthCaptcha und nicht hier.
        if (AuthCaptcha::rejects($request, AuthCaptcha::REGISTER)) {
            $this->flash('error', __('flash.auth.captcha_failed'));

            return $this->redirect('/register');
        }


        $validator = $this->validate($request->post, [
            'name'         => 'required|max:120',
            'email'        => 'required|email',
            'password'     => 'required|password|confirmed',
            'terms'        => 'required|accepted',
            'company'      => 'max:200',
        ], '/register');

        $email = strtolower($validator->string('email'));

        // Im Einladungsmodus trägt die Einladung genau eine Adresse. Ohne diese
        // Prüfung wäre jeder gültige Einladungslink ein Generalschlüssel: der
        // Empfänger könnte damit beliebig viele Konten auf fremde Adressen
        // anlegen, und der Modus hieße nur so.
        $invited = $this->pendingInvitationEmail();

        if (Settings::registrationMode() === 'invite' && $invited !== null && $email !== strtolower($invited)) {
            $this->flash('error', __('flash.auth.register_email_mismatch', ['email' => $invited]));

            return $this->redirect('/register');
        }

        // Never reveal that the address is taken. The account owner gets an
        // e-mail telling them someone tried; the visitor sees the same
        // "check your inbox" screen either way.
        if (User::findByEmail($email) !== null) {
            $this->sendDuplicateNotice($email);

            Session::instance()->put('_pending_email', $email);

            return $this->redirect('/verify-email');
        }

        $user = Db::transaction(function () use ($validator, $email, $request): User {
            // The language the form was filled out in becomes the account
            // language; hard-coding 'de' would flip a new account back to
            // German on the very next request, because the stored preference
            // outranks the cookie in Lang::boot().
            $user = User::create(
                $email,
                (string) ($request->post['password'] ?? ''),
                $validator->string('name'),
                Lang::current()
            );

            $company = $validator->string('company');
            Organization::createForUser($user, $company !== '' ? $company : $validator->string('name'));

            return $user;
        });

        Audit::log(Audit::ACTION_REGISTER, $user->id(), null, null, 'user', $user->publicId(), null, $request->ip());

        VerificationController::issueToken($user);

        $session = Session::instance();
        $session->login($user->id());
        $session->put('_pending_email', $email);

        $this->flash('success', __('flash.auth.register_success'));

        return $this->redirect('/verify-email');
    }

    /**
     * Registrierung nur, wenn dieser Host sie anbietet.
     *
     * Zwei unabhängige Gründe, sie zu schließen: die Installation hat sie per
     * ALLOW_REGISTRATION abgeschaltet, oder dieser Host zeigt noch die
     * Vorschauseite. Im zweiten Fall wäre eine erreichbare Anmeldung ein
     * Widerspruch zur Aussage „demnächst verfügbar" — und dev.consented.eu
     * bleibt davon unberührt, weil das Flag pro vhost gesetzt wird.
     */
    private function guardRegistrationOpen(): void
    {
        // Die Umgebung schlägt die Einstellung. ALLOW_REGISTRATION=0 in der
        // .env ist die Aussage des Betreibers der Maschine; wer nur den
        // Admin-Bereich erreicht, soll sie nicht überstimmen können.
        if (!Env::bool('ALLOW_REGISTRATION', true)) {
            throw new HttpException(403, __('error.registration_disabled'));
        }

        if (Env::bool('CE_COMING_SOON') || Settings::bool('coming_soon')) {
            throw new HttpException(404);
        }

        // Serverseitig, nicht nur als versteckter Link: „geschlossen" muss auch
        // dann greifen, wenn jemand das Formular direkt anspricht.
        $mode = Settings::registrationMode();

        if ($mode === 'closed') {
            throw new HttpException(403, __('error.registration_disabled'));
        }

        // Im Einladungsmodus bleibt genau ein Weg offen. Eine Einladung schickt
        // den Empfänger nämlich selbst hierher (InvitationController::accept
        // leitet auf /register um, wenn es das Konto noch nicht gibt) — ein
        // pauschaler Riegel würde also ausgerechnet den Fall aussperren, für
        // den es diesen Modus gibt.
        if ($mode === 'invite' && $this->pendingInvitationEmail() === null) {
            throw new HttpException(403, __('error.registration_invite_only'));
        }
    }

    /**
     * Adresse der offenen Einladung, für die diese Sitzung gerade registriert.
     *
     * InvitationController::accept legt '_intended' auf /invitations/{token},
     * bevor es hierher umleitet. Der Token wird hier erneut gegen die Datenbank
     * geprüft und nicht geglaubt: '_intended' ist Sitzungsinhalt, und ein
     * abgelaufener oder zurückgezogener Token darf keine Registrierung tragen.
     */
    private function pendingInvitationEmail(): ?string
    {
        $intended = (string) Session::instance()->get('_intended', '');

        if (!preg_match('~^/invitations/([A-Za-z0-9._-]{16,})$~', $intended, $m)) {
            return null;
        }

        $row = Db::first(
            'SELECT email FROM invitations
              WHERE token_hash = :h
                AND accepted_at IS NULL
                AND revoked_at IS NULL
                AND expires_at > :now
              LIMIT 1',
            ['h' => Hash::token($m[1]), 'now' => Clock::now()]
        );

        return $row === null ? null : (string) $row['email'];
    }

    private function sendDuplicateNotice(string $email): void
    {
        $user = User::findByEmail($email);

        if ($user === null) {
            return;
        }

        Mail::send(
            $email,
            __('mail.duplicate_signup.subject'),
            Mail::layout(
                __('mail.duplicate_signup.heading'),
                __('mail.duplicate_signup.body'),
                __('mail.duplicate_signup.cta'),
                Url::absolute('/login')
            )
        );
    }

    /** Slug helper shared with the organisation bootstrap. */
    public static function uniqueOrgSlug(string $name): string
    {
        return Str::uniqueSlug(
            $name,
            static fn (string $slug): bool =>
                Db::value('SELECT 1 FROM organizations WHERE slug = :s', ['s' => $slug]) !== null,
            80
        );
    }
}
