<?php

declare(strict_types=1);

namespace Consented\Org;

use Consented\Auth\User;
use Consented\Auth\VerificationController;
use Consented\Core\Audit;
use Consented\Core\Clock;
use Consented\Core\Controller;
use Consented\Core\Db;
use Consented\Core\Mail;
use Consented\Core\RateLimiter;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\Sanitizer;
use Consented\Core\Session;
use Consented\Core\Url;

final class AccountController extends Controller
{
    public function show(Request $request): Response
    {
        $user = $this->requireUser();

        return $this->view('account/index', [
            'title'        => __('account.index.page_title'),
            'activeNav'    => 'account',
            'organization' => Organization::primaryFor($user),
            'sessions'     => $this->sessions($user->id()),
            'currentId'    => Session::instance()->currentId(),
            'pendingEmail' => $this->pendingEmail($user),
        ]);
    }

    /**
     * Beantragt einen Adresswechsel.
     *
     * Wirksam wird er nicht hier, sondern erst mit dem Klick auf den Link, der
     * an die NEUE Adresse geht — nur ihr Empfang beweist, dass sie der Person
     * gehört. Bis dahin bleibt die alte Adresse die des Kontos, und die
     * Anmeldung funktioniert unverändert.
     */
    public function changeEmail(Request $request): Response
    {
        $user = $this->requireUser();

        /*
         * Das aktuelle Passwort, wie beim Passwortwechsel. Ohne das würde eine
         * übernommene Sitzung genügen, um das Konto wegzutragen: neue Adresse
         * eintragen, Link im eigenen Postfach klicken, fertig. Die Sitzung
         * allein darf dafür nicht reichen.
         */
        if (!$user->verifyPassword((string) $request->input('current_password', ''))) {
            $this->flash('error', __('flash.account.current_password_wrong'));

            return $this->redirect('/account');
        }

        $this->validate($request->post, ['email' => 'required|email|max:190'], '/account');

        $new = strtolower(trim((string) $request->input('email', '')));

        if ($new === strtolower($user->email())) {
            $this->flash('error', __('flash.account.email_unchanged'));

            return $this->redirect('/account');
        }

        /*
         * Vorprüfung, damit der Antrag nicht ins Leere läuft. Die verbindliche
         * Prüfung sitzt in VerificationController::verify(), weil zwischen
         * Antrag und Klick Tage liegen können.
         *
         * Bewusst dieselbe Meldung wie bei einer freien Adresse wäre hier
         * falsch herum gedacht: wer sein eigenes Konto verwaltet, soll erfahren,
         * dass die Adresse belegt ist. Ein Konten-Orakel entsteht dadurch nicht,
         * denn dieser Weg setzt eine Anmeldung und das Passwort voraus.
         */
        $taken = Db::value(
            'SELECT id FROM users WHERE LOWER(email) = :e AND id <> :id AND deleted_at IS NULL LIMIT 1',
            ['e' => $new, 'id' => $user->id()]
        );

        if ($taken !== null) {
            $this->flash('error', __('flash.account.email_taken'));

            return $this->redirect('/account');
        }

        $key = 'account:email:' . $user->id();

        if (RateLimiter::tooManyAttempts($key, 5)) {
            $this->flash('error', __('flash.account.email_throttled'));

            return $this->redirect('/account');
        }

        RateLimiter::hit($key, 3600);

        VerificationController::issueToken($user, $new);

        // Die alte Adresse erfährt vom Antrag, nicht erst vom Vollzug. Wer den
        // Antrag nicht gestellt hat, kann so noch reagieren, solange die
        // Adresse noch seine ist.
        Mail::send(
            $user->email(),
            __('mail.email_change_requested.subject'),
            Mail::layout(
                __('mail.email_change_requested.heading'),
                __('mail.email_change_requested.body', [
                    'new' => htmlspecialchars($new, ENT_QUOTES),
                ]),
                __('mail.email_change_requested.cta'),
                Url::absolute('/account')
            )
        );

        Audit::log(
            Audit::ACTION_EMAIL_CHANGE_REQUESTED,
            $user->id(),
            null,
            null,
            'user',
            $user->publicId(),
            Audit::diff(['email' => $user->email()], ['email' => $new]),
            $request->ip()
        );

        $this->flash('success', __('flash.account.email_change_requested', ['email' => $new]));

        return $this->redirect('/account');
    }

    /** Zieht einen offenen Antrag zurück, indem der Token verbraucht wird. */
    public function cancelEmailChange(Request $request): Response
    {
        $user = $this->requireUser();

        Db::run(
            'UPDATE email_verifications
                SET used_at = :now
              WHERE user_id = :uid AND used_at IS NULL AND LOWER(email) <> :current',
            ['now' => Clock::now(), 'uid' => $user->id(), 'current' => strtolower($user->email())]
        );

        $this->flash('success', __('flash.account.email_change_cancelled'));

        return $this->redirect('/account');
    }

    /** Die beantragte, noch nicht bestätigte Adresse — oder null. */
    private function pendingEmail(User $user): ?string
    {
        $row = Db::first(
            'SELECT email FROM email_verifications
              WHERE user_id = :uid AND used_at IS NULL AND expires_at > :now
                AND LOWER(email) <> :current
              ORDER BY id DESC LIMIT 1',
            ['uid' => $user->id(), 'now' => Clock::now(), 'current' => strtolower($user->email())]
        );

        return $row === null ? null : (string) $row['email'];
    }

    public function update(Request $request): Response
    {
        $user = $this->requireUser();

        $this->validate($request->post, [
            'name'    => 'required|max:120',
            'company' => 'max:200',
        ], '/account');

        $user->update(['name' => Sanitizer::text((string) $request->input('name', $user->name()))]);

        $company = Sanitizer::text((string) $request->input('company', ''));
        $org     = Organization::primaryFor($user);

        if ($org !== null && $company !== '' && $org->ownerUserId() === $user->id()) {
            $org->update(['name' => $company, 'legal_name' => $company]);
        }

        $this->flash('success', __('flash.account.updated'));

        return $this->redirect('/account');
    }

    public function changePassword(Request $request): Response
    {
        $user = $this->requireUser();

        $current = (string) $request->input('current_password', '');

        if (!$user->verifyPassword($current)) {
            $this->flash('error', __('flash.account.current_password_wrong'));

            return $this->redirect('/account');
        }

        $this->validate($request->post, [
            'password' => 'required|password|confirmed',
        ], '/account');

        $user->setPassword((string) ($request->post['password'] ?? ''));

        // Everything except the session doing the change: the point of a
        // password change is to lock out whoever else was signed in.
        Session::logoutAllFor($user->id(), Session::instance()->currentId());

        Mail::send(
            $user->email(),
            __('mail.password_changed.subject'),
            Mail::layout(
                __('mail.password_changed.heading'),
                __('mail.password_changed.body_after_change'),
                __('mail.password_changed.cta_reset'),
                Url::absolute('/forgot-password')
            )
        );

        $this->flash('success', __('flash.account.password_changed'));

        return $this->redirect('/account');
    }

    /** @return list<array<string,mixed>> */
    private function sessions(int $userId): array
    {
        return Db::all(
            'SELECT id, user_agent_family, remembered, last_seen_at, created_at, expires_at
               FROM sessions
              WHERE user_id = :uid AND expires_at > :now
              ORDER BY last_seen_at DESC
              LIMIT 25',
            ['uid' => $userId, 'now' => Clock::now()]
        );
    }
}
