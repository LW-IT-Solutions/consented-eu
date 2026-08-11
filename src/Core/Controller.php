<?php

declare(strict_types=1);

namespace Consented\Core;

use Consented\Auth\User;
use Consented\Core\Exception\HttpException;
use Consented\Core\Exception\ValidationException;

abstract class Controller
{
    /** @param array<string,mixed> $data */
    protected function view(string $template, array $data = [], ?string $layout = 'layouts/app'): Response
    {
        $session = Session::instance();

        $shared = [
            'currentUser' => $this->user(),
            'flashes'     => $session->takeFlashes(),
            'errors'      => $this->takeErrors(),
            'old'         => $session->oldInput(),
            'csrf'        => $session->csrfToken(),
        ];

        return Response::html(View::render($template, array_merge($shared, $data), $layout));
    }

    /** @return array<string,list<string>> */
    private function takeErrors(): array
    {
        /** @var array<string,list<string>> $errors */
        $errors = Session::instance()->pull('_errors', []);

        return $errors;
    }

    protected function redirect(string $path): Response
    {
        return Response::redirect(Url::to($path));
    }

    protected function back(Request $request): Response
    {
        $referer = $request->header('referer');

        if (is_string($referer) && $referer !== '') {
            $host = parse_url($referer, PHP_URL_HOST);
            // Only follow a Referer that points back at us — an open redirect
            // here would be handed straight to a phisher.
            if ($host === $request->host()) {
                return Response::redirect($referer);
            }
        }

        return $this->redirect('/dashboard');
    }

    protected function user(): ?User
    {
        $userId = Session::instance()->userId();

        return $userId === null ? null : User::find($userId);
    }

    protected function requireUser(): User
    {
        $user = $this->user();

        if ($user === null) {
            throw new HttpException(401);
        }

        return $user;
    }

    protected function flash(string $type, string $message): void
    {
        Session::instance()->flash($type, $message);
    }

    /**
     * @param  array<string,mixed>  $data
     * @param  array<string,string> $rules
     * @throws ValidationException
     */
    protected function validate(array $data, array $rules, ?string $redirectTo = null): Validator
    {
        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            throw ValidationException::fromValidator($validator, $redirectTo);
        }

        return $validator;
    }

    protected function abort(int $status, string $message = ''): never
    {
        throw new HttpException($status, $message);
    }
}
