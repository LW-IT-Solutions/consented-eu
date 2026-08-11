<?php

declare(strict_types=1);

namespace Consented\Core\Exception;

use Consented\Core\Validator;

final class ValidationException extends \RuntimeException
{
    /**
     * @param array<string,list<string>> $errors
     */
    public function __construct(
        private readonly array $errors,
        string $message = 'Bitte prüfe die markierten Felder.',
        private readonly ?string $redirectTo = null,
    ) {
        parent::__construct($message);
    }

    public static function fromValidator(Validator $validator, ?string $redirectTo = null): self
    {
        return new self($validator->errors(), $validator->firstError(), $redirectTo);
    }

    /** @return array<string,list<string>> */
    public function errors(): array
    {
        return $this->errors;
    }

    public function redirectTo(): ?string
    {
        return $this->redirectTo;
    }
}
