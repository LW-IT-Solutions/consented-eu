<?php

declare(strict_types=1);

namespace Consented\Auth;

use Consented\Core\Audit;
use Consented\Core\Clock;
use Consented\Core\Controller;
use Consented\Core\Csp;
use Consented\Core\Db;
use Consented\Core\Hash;
use Consented\Core\Mail;
use Consented\Core\RateLimiter;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\Session;
use Consented\Core\Url;

final class PasswordResetController extends Controller
{
    private const TTL = 3600; // 60 minutes

    public function showForgot(Request $request): Response
    {
        Csp::allowCaptcha();

        return $this->view('auth/forgot-password', [
            'title' => __('auth.forgot_password.page_title'),
        ], 'layouts/auth');
    }

    public function sendLink(Request $request): Response
    {
        $email = strtolower((string) $request->input('email', ''));

        $ipKey = 'pwreset:ip:' . $request->ip();

        // The confirmation screen is identical whether or not the address
        // exists, and the rate limit is applied before we look anything up, so
        // response timing does not leak account existence either.
        if (RateLimiter::tooManyAttempts($ipKey, 10)) {
            return $this->confirmation($email);
        }

        RateLimiter::hit($ipKey, 3600);

        // Dieselbe Bestaetigungsseite wie sonst auch: ein eigener Fehlertext
        // waere hier ein Signal, an dem sich ein Bot ausrichten kann, und die
        // Seite darf nichts ueber die Existenz des Kontos verraten.
        if (AuthCaptcha::rejects($request, AuthCaptcha::PASSWORD_RESET)) {
            return $this->confirmation($email);
        }

        if ($email === '' || filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            return $this->confirmation($email);
        }

        $user = User::findByEmail($email);

        if ($user !== null && !RateLimiter::tooManyAttempts('pwreset:user:' . $user->id(), 5)) {
            RateLimiter::hit('pwreset:user:' . $user->id(), 3600);

            // Invalidate any outstanding token: only the newest link works.
            Db::run(
                'UPDATE password_resets SET used_at = :now WHERE user_id = :uid AND used_at IS NULL',
                ['now' => Clock::now(), 'uid' => $user->id()]
            );

            $token = Hash::randomToken(32);

            Db::insert('password_resets', [
                'user_id'    => $user->id(),
                'token_hash' => Hash::token($token),
                'ip_hash'    => Hash::ip($request->ip()),
                'expires_at' => Clock::in(self::TTL),
                'created_at' => Clock::now(),
            ]);

            Mail::send(
                $user->email(),
                __('mail.password_reset.subject'),
                Mail::layout(
                    __('mail.password_reset.heading'),
                    __('mail.password_reset.body', [
                        'name' => htmlspecialchars($user->name(), ENT_QUOTES),
                    ]),
                    __('mail.password_reset.cta'),
                    Url::absolute('/reset-password/' . $token),
                    __('mail.password_reset.footnote')
                )
            );
        }

        return $this->confirmation($email);
    }

    private function confirmation(string $email): Response
    {
        Session::instance()->put('_pending_email', $email);
        $this->flash('success', __('flash.auth.reset_link_sent'));

        return $this->redirect('/forgot-password');
    }

    public function showReset(Request $request): Response
    {
        $token = (string) $request->param('token');

        if ($this->lookupToken($token) === null) {
            $this->flash('error', __('flash.auth.reset_link_invalid'));

            return $this->redirect('/forgot-password');
        }

        return $this->view('auth/reset-password', [
            'title' => __('auth.reset_password.page_title'),
            'token' => $token,
        ], 'layouts/auth');
    }

    public function reset(Request $request): Response
    {
        $token = (string) $request->param('token');
        $row   = $this->lookupToken($token);

        if ($row === null) {
            $this->flash('error', __('flash.auth.reset_link_invalid'));

            return $this->redirect('/forgot-password');
        }

        $this->validate($request->post, [
            'password' => 'required|password|confirmed',
        ], Url::to('/reset-password/' . $token));

        $user = User::find((int) $row['user_id']);

        if ($user === null) {
            $this->flash('error', __('flash.auth.reset_link_broken'));

            return $this->redirect('/forgot-password');
        }

        Db::transaction(function () use ($row, $user, $request): void {
            Db::update('password_resets', ['used_at' => Clock::now()], ['id' => $row['id']]);

            $user->setPassword((string) ($request->post['password'] ?? ''));

            // A password reset is the standard response to "my account was
            // taken over", so every existing session has to die with it.
            Session::logoutAllFor($user->id());
        });

        Audit::log(
            Audit::ACTION_PASSWORD_RESET,
            $user->id(),
            null,
            null,
            'user',
            $user->publicId(),
            null,
            $request->ip()
        );

        Mail::send(
            $user->email(),
            __('mail.password_changed.subject'),
            Mail::layout(
                __('mail.password_changed.heading'),
                __('mail.password_changed.body_after_reset'),
                __('mail.password_changed.cta_login'),
                Url::absolute('/login')
            )
        );

        $this->flash('success', __('flash.auth.password_reset_done'));

        return $this->redirect('/login');
    }

    /** @return array<string,mixed>|null */
    private function lookupToken(string $token): ?array
    {
        if ($token === '') {
            return null;
        }

        $row = Db::first(
            'SELECT * FROM password_resets WHERE token_hash = :hash LIMIT 1',
            ['hash' => Hash::token($token)]
        );

        if ($row === null || $row['used_at'] !== null || Clock::isPast((string) $row['expires_at'])) {
            return null;
        }

        return $row;
    }
}
