<?php

declare(strict_types=1);

namespace Consented\Core\Exception;

final class HttpException extends \RuntimeException
{
    public function __construct(
        private readonly int $status,
        string $message = '',
    ) {
        parent::__construct($message === '' ? self::defaultMessage($status) : $message);
    }

    public function status(): int
    {
        return $this->status;
    }

    private static function defaultMessage(int $status): string
    {
        return match ($status) {
            400     => 'Bad request',
            401     => 'Authentication required',
            403     => 'You do not have permission to do that',
            404     => 'Page not found',
            405     => 'Method not allowed',
            409     => 'Conflict',
            413     => 'Payload too large',
            419     => 'Your session expired. Please try again.',
            422     => 'The submitted data is invalid',
            429     => 'Too many requests. Please slow down.',
            default => 'Something went wrong',
        };
    }
}
