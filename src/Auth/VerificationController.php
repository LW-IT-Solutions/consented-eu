<?php

declare(strict_types=1);

namespace Consented\Auth;

use Consented\Core\Audit;
use Consented\Core\Clock;
use Consented\Core\Controller;
use Consented\Core\Db;
use Consented\Core\Env;
use Consented\Core\Hash;
use Consented\Core\Mail;
use Consented\Core\RateLimiter;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\Session;
use Consented\Core\Url;

final class VerificationController extends Controller
{
    private const TTL = 86400; // 24 hours

    public function notice(Request $request): Response
    {
        $user = $this->user();

        if ($user !== null && $user->isVerified()) {
            return $this->redirect('/dashboard');
        }

        $pending = Session::instance()->get('_pending_email');

        return $this->view('auth/verify-email', [
            'title'   => __('auth.verify_email.page_title'),
            'email'   => $user?->email() ?? (is_string($pending) ? $pending : ''),
            // On a fresh install without SMTP the link only exists in the mail
            // log. Surfacing it in dev saves the operator from grepping.
            'devLink' => Env::get('APP_ENV') === 'dev' ? Session::instance()->get('_dev_verify_link') : null,
        ], 'layouts/auth');
    }

    public function verify(Request $request): Response
    {
        $token = (string) $request->param('token');

        $row = Db::first(
            'SELECT * FROM email_verifications WHERE token_hash = :hash LIMIT 1',
            ['hash' => Hash::token($token)]
        );

        if ($row === null || $row['used_at'] !== null || Clock::isPast((string) $row['expires_at'])) {
            $this->flash('error', __('flash.auth.verify_link_invalid'));

            return $this->redirect('/verify-email');
        }

        $user = User::find((int) $row['user_id']);

        if ($user === null) {
            $this->flash('error', __('flash.auth.verify_link_broken'));

            return $this->redirect('/login');
        }

        /*
         * Trägt der Token eine andere Adresse als das Konto, ist das ein
         * Adresswechsel. Erst hier wird er wirksam — vorher steht die neue
         * Adresse ausschließlich in dieser Zeile, das Konto behält seine alte,
         * und die Anmeldung funktioniert unverändert weiter.
         */
        $pending  = strtolower(trim((string) ($row['email'] ?? '')));
        $isChange = $pending !== '' && $pending !== strtolower($user->email());

        if ($isChange) {
            // Erneut prüfen, nicht nur beim Beantragen: zwischen Antrag und
            // Klick können Tage liegen, und in der Zeit kann sich jemand mit
            // genau dieser Adresse registriert haben.
            $taken = Db::value(
                'SELECT id FROM users WHERE LOWER(email) = :e AND id <> :id AND deleted_at IS NULL LIMIT 1',
                ['e' => $pending, 'id' => $user->id()]
            );

            if ($taken !== null) {
                Db::update('email_verifications', ['used_at' => Clock::now()], ['id' => $row['id']]);
                $this->flash('error', __('flash.account.email_taken_meanwhile'));

                return $this->redirect(Session::instance()->isAuthenticated() ? '/account' : '/login');
            }

            $previous = $user->email();

            Db::update('email_verifications', ['used_at' => Clock::now()], ['id' => $row['id']]);
            $user->changeEmail($pending);

            // Die alte Adresse erfährt, dass sie es nicht mehr ist. Wer sonst
            // ein Konto stillschweigend wegtragen könnte, hinterlässt so
            // wenigstens eine Spur beim rechtmäßigen Inhaber.
            Mail::send(
                $previous,
                __('mail.email_changed.subject'),
                Mail::layout(
                    __('mail.email_changed.heading'),
                    __('mail.email_changed.body', [
                        'old' => htmlspecialchars($previous, ENT_QUOTES),
                        'new' => htmlspecialchars($pending, ENT_QUOTES),
                    ]),
                    __('mail.email_changed.cta'),
                    Url::absolute('/forgot-password')
                )
            );

            Audit::log(
                Audit::ACTION_EMAIL_CHANGED,
                $user->id(),
                null,
                null,
                'user',
                $user->publicId(),
                Audit::diff(['email' => $previous], ['email' => $pending]),
                $request->ip()
            );

            $this->flash('success', __('flash.account.email_changed'));

            /*
             * Anders als bei der Erstbestätigung wird hier NICHT angemeldet.
             * Der Link ging an eine Adresse, die bis zu diesem Moment nicht die
             * des Kontos war; ihn zur zweiten Tür in eine Sitzung zu machen,
             * hätte keinen Nutzen — wer den Wechsel beantragt hat, war ohnehin
             * angemeldet und hat sein Passwort eingegeben.
             */
            return $this->redirect(Session::instance()->isAuthenticated() ? '/account' : '/login');
        }

        Db::update('email_verifications', ['used_at' => Clock::now()], ['id' => $row['id']]);
        $user->markVerified();

        Audit::log(
            Audit::ACTION_EMAIL_VERIFIED,
            $user->id(),
            null,
            null,
            'user',
            $user->publicId(),
            null,
            $request->ip()
        );

        // Verifying from a different browser than the one that registered is
        // normal (people click links in a mail app), so log them in here.
        //
        // Except when the account is suspended. LoginController refuses those,
        // and this is the second door into a session — without the same check
        // a suspended user only needs an unused verification link to get back in.
        $suspended = Db::value(
            'SELECT suspended_at FROM users WHERE id = :uid',
            ['uid' => $user->id()]
        );

        if ($suspended !== null) {
            $this->flash('error', __('flash.auth.account_suspended'));

            return $this->redirect('/login');
        }

        $session = Session::instance();
        if (!$session->isAuthenticated()) {
            $session->login($user->id());
        }

        $this->flash('success', __('flash.auth.email_verified'));

        return $this->redirect('/dashboard');
    }

    public function resend(Request $request): Response
    {
        $user = $this->requireUser();

        if ($user->isVerified()) {
            return $this->redirect('/dashboard');
        }

        $key = 'verify:resend:' . $user->id();

        if (RateLimiter::tooManyAttempts($key, 5)) {
            $this->flash('error', __('flash.auth.resend_throttled'));

            return $this->redirect('/verify-email');
        }

        RateLimiter::hit($key, 900);

        self::issueToken($user);

        $this->flash('success', __('flash.auth.verification_resent'));

        return $this->redirect('/verify-email');
    }

    /**
     * Issues a fresh verification token and mails it.
     *
     * Any earlier unused token for the same user is invalidated first, so a
     * link that leaked out of an old inbox cannot be replayed later.
     */
    public static function issueToken(User $user, ?string $target = null): void
    {
        /*
         * $target ist die Adresse, deren Besitz nachgewiesen werden soll. Ohne
         * Angabe ist das die aktuelle des Kontos — der Fall der Registrierung.
         * Mit Angabe ist es ein Adresswechsel: der Link geht dann an die NEUE
         * Adresse, denn nur ihr Empfang beweist, dass sie der Person gehört.
         *
         * Die Spalte `email` gab es in email_verifications von Anfang an, wurde
         * aber nie gelesen. verify() wertet sie jetzt aus.
         */
        $address = strtolower(trim($target ?? $user->email()));

        Db::run(
            'UPDATE email_verifications SET used_at = :now WHERE user_id = :uid AND used_at IS NULL',
            ['now' => Clock::now(), 'uid' => $user->id()]
        );

        $token = Hash::randomToken(32);

        Db::insert('email_verifications', [
            'user_id'    => $user->id(),
            'email'      => $address,
            'token_hash' => Hash::token($token),
            'expires_at' => Clock::in(self::TTL),
            'created_at' => Clock::now(),
        ]);

        $link = Url::absolute('/verify-email/' . $token);

        if (Env::get('APP_ENV') === 'dev') {
            Session::instance()->put('_dev_verify_link', $link);
        }

        Mail::send(
            $address,
            __('mail.verify_email.subject'),
            Mail::layout(
                __('mail.verify_email.heading'),
                __('mail.verify_email.body', [
                    'name' => htmlspecialchars($user->name(), ENT_QUOTES),
                ]),
                __('mail.verify_email.cta'),
                $link,
                __('mail.verify_email.footnote')
            )
        );
    }
}
