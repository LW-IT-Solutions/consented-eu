<?php

declare(strict_types=1);

namespace Consented\Auth;

use Consented\Core\Audit;
use Consented\Core\Controller;
use Consented\Core\Csp;
use Consented\Core\Db;
use Consented\Core\Exception\HttpException;
use Consented\Core\RateLimiter;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\Session;
use Consented\Core\Url;

final class LoginController extends Controller
{
    private const MAX_PER_IP      = 20;
    private const MAX_PER_ACCOUNT = 8;
    private const WINDOW          = 900;

    public function show(Request $request): Response
    {
        Csp::allowCaptcha();

        return $this->view('auth/login', [
            'title' => __('auth.login.page_title'),
        ], 'layouts/auth');
    }

    public function login(Request $request): Response
    {
        $email    = strtolower((string) $request->input('email', ''));
        $password = (string) $request->input('password', '');
        $remember = $request->boolean('remember');

        $ipKey    = 'login:ip:' . $request->ip();
        $emailKey = 'login:email:' . $email;

        if (RateLimiter::tooManyAttempts($ipKey, self::MAX_PER_IP)) {
            return $this->throttled($request, $ipKey);
        }

        if ($email !== '' && RateLimiter::tooManyAttempts($emailKey, self::MAX_PER_ACCOUNT)) {
            return $this->throttled($request, $emailKey);
        }


        // Nur ein nachgewiesener Bot wird abgewiesen. Die Begruendung fuer
        // diese Richtung steht einmal in AuthCaptcha und nicht hier.
        if (AuthCaptcha::rejects($request, AuthCaptcha::LOGIN)) {
            $this->flash('error', __('flash.auth.captcha_failed'));

            return $this->redirect('/login');
        }

        $user = $email === '' ? null : User::findByEmail($email);

        // One generic message for every failure mode. Saying "no such account"
        // would turn this form into an account-existence oracle.
        if ($user === null || !$user->verifyPassword($password)) {
            RateLimiter::hit($ipKey, self::WINDOW);
            if ($email !== '') {
                RateLimiter::hit($emailKey, self::WINDOW);
            }

            $user?->recordFailedLogin();

            Audit::log(
                Audit::ACTION_LOGIN_FAILED,
                $user?->id(),
                null,
                null,
                'user',
                $user?->publicId(),
                null,
                $request->ip()
            );

            $this->flash('error', __('flash.auth.invalid_credentials'));
            Session::instance()->flashInput(['email' => $email]);

            return $this->redirect('/login');
        }

        // A suspension is the operator's own block on an account and is kept in
        // its own column: locked_until belongs to the automatic lockout and is
        // cleared by every successful login and every password reset.
        $suspended = Db::value(
            'SELECT suspended_at FROM users WHERE id = :uid',
            ['uid' => $user->id()]
        ) !== null;

        if ($user->isLocked() || $suspended) {
            $this->flash('error', __($suspended ? 'flash.auth.account_suspended' : 'flash.auth.account_locked'));

            return $this->redirect('/login');
        }

        $user->rehashIfNeeded($password);

        RateLimiter::clear($ipKey);
        RateLimiter::clear($emailKey);

        $session = Session::instance();
        $intended = $session->get('_intended');

        $session->login($user->id(), $remember);
        $user->recordLogin();

        Audit::log(Audit::ACTION_LOGIN, $user->id(), null, null, 'user', $user->publicId(), null, $request->ip());

        $target = is_string($intended) && str_starts_with($intended, '/') ? $intended : '/dashboard';

        return $this->redirect($target);
    }

    public function logout(Request $request): Response
    {
        $session = Session::instance();
        $userId  = $session->userId();

        if ($userId !== null) {
            Audit::log(Audit::ACTION_LOGOUT, $userId, null, null, 'user', null, null, $request->ip());
        }

        $session->logout();

        return Response::redirect(Url::to('/'));
    }

    /** Ends every other session for this user — the "sign out everywhere" button. */
    public function logoutOtherDevices(Request $request): Response
    {
        $user    = $this->requireUser();
        $session = Session::instance();

        Session::logoutAllFor($user->id(), $session->currentId());

        $this->flash('success', __('flash.auth.other_devices_signed_out'));

        return $this->redirect('/account');
    }

    private function throttled(Request $request, string $key): Response
    {
        $seconds = RateLimiter::availableIn($key);
        $minutes = (int) ceil($seconds / 60);

        if ($request->wantsJson()) {
            throw new HttpException(429);
        }

        $this->flash('error', __('flash.auth.login_throttled', ['minutes' => $minutes]));

        return $this->redirect('/login');
    }
}
