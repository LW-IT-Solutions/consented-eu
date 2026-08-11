<?php

declare(strict_types=1);

namespace Consented\Core;

/**
 * Small rule-based validator.
 *
 * Rules are strings: "required|email|max:190". Every message goes through the
 * translation catalogue under validation.*, with the field label supplied as
 * the :field placeholder — so a rule produces one catalogue key regardless of
 * which field triggered it.
 */
final class Validator
{
    /**
     * Mindestlänge eines Passworts.
     *
     * Öffentlich, weil das Registrierungsformular sie braucht: es zeigt beim
     * Tippen an, wie viele Zeichen noch fehlen, und muss dafür dieselbe Grenze
     * kennen. Vorher stand die 12 als nackte Zahl in checkPassword() und
     * dreimal in views/auth/register.php.
     */
    public const PASSWORD_MIN_LENGTH = 12;

    /** @var array<string,list<string>> */
    private array $errors = [];

    /** @var array<string,mixed> */
    private array $valid = [];

    /**
     * @param array<string,mixed>  $data
     * @param array<string,string> $rules
     */
    public function __construct(
        private readonly array $data,
        private readonly array $rules,
    ) {
        $this->run();
    }

    /**
     * @param array<string,mixed>  $data
     * @param array<string,string> $rules
     */
    public static function make(array $data, array $rules): self
    {
        return new self($data, $rules);
    }

    private function run(): void
    {
        foreach ($this->rules as $field => $ruleString) {
            $value = $this->data[$field] ?? null;
            $value = is_string($value) ? trim($value) : $value;

            $rules    = explode('|', $ruleString);
            $optional = !in_array('required', $rules, true);

            if ($optional && ($value === null || $value === '')) {
                $this->valid[$field] = $value;
                continue;
            }

            foreach ($rules as $rule) {
                [$name, $arg] = array_pad(explode(':', $rule, 2), 2, null);

                if (!$this->check($field, (string) $name, $arg, $value)) {
                    break;
                }
            }

            if (!isset($this->errors[$field])) {
                $this->valid[$field] = $value;
            }
        }
    }

    private function check(string $field, string $rule, ?string $arg, mixed $value): bool
    {
        $label = $this->label($field);

        switch ($rule) {
            case 'required':
                if ($value === null || $value === '' || (is_array($value) && $value === [])) {
                    return $this->fail($field, __('validation.required', ['field' => $label]));
                }

                return true;

            case 'email':
                if (!is_string($value) || filter_var($value, FILTER_VALIDATE_EMAIL) === false) {
                    return $this->fail($field, __('validation.email'));
                }
                if (strlen($value) > 190) {
                    return $this->fail($field, __('validation.email_long'));
                }

                return true;

            case 'min':
                if (is_string($value) && mb_strlen($value) < (int) $arg) {
                    return $this->fail($field, __('validation.min', ['field' => $label, 'min' => (string) $arg]));
                }

                return true;

            case 'max':
                if (is_string($value) && mb_strlen($value) > (int) $arg) {
                    return $this->fail($field, __('validation.max', ['field' => $label, 'max' => (string) $arg]));
                }

                return true;

            case 'in':
                $allowed = explode(',', (string) $arg);
                if (!in_array((string) $value, $allowed, true)) {
                    return $this->fail($field, __('validation.in', ['field' => $label]));
                }

                return true;

            case 'url':
                if (!is_string($value) || filter_var($value, FILTER_VALIDATE_URL) === false) {
                    return $this->fail($field, __('validation.url', ['field' => $label]));
                }
                if (!preg_match('#^https?://#i', $value)) {
                    return $this->fail($field, __('validation.url_scheme', ['field' => $label]));
                }

                return true;

            case 'slug':
                if (!is_string($value) || preg_match('/^[a-z0-9][a-z0-9\-]{0,62}[a-z0-9]$/', $value) !== 1) {
                    return $this->fail($field, __('validation.slug', ['field' => $label]));
                }

                return true;

            case 'domain':
                if (!is_string($value) || !self::isDomain($value)) {
                    return $this->fail($field, __('validation.domain'));
                }

                return true;

            case 'hexcolor':
                if (!is_string($value) || preg_match('/^#(?:[0-9a-fA-F]{3}|[0-9a-fA-F]{6}|[0-9a-fA-F]{8})$/', $value) !== 1) {
                    return $this->fail($field, __('validation.hexcolor', ['field' => $label]));
                }

                return true;

            case 'int':
                if (!is_numeric($value) || (string) (int) $value !== (string) $value) {
                    return $this->fail($field, __('validation.int', ['field' => $label]));
                }

                return true;

            case 'between':
                [$lo, $hi] = array_pad(explode(',', (string) $arg), 2, '0');
                $number    = (int) $value;
                if ($number < (int) $lo || $number > (int) $hi) {
                    return $this->fail($field, __('validation.between', [
                        'field' => $label, 'min' => $lo, 'max' => $hi,
                    ]));
                }

                return true;

            case 'confirmed':
                $other = $this->data[$field . '_confirmation'] ?? null;
                if ($value !== $other) {
                    return $this->fail($field . '_confirmation', __('validation.confirmed'));
                }

                return true;

            case 'accepted':
                if (!in_array((string) $value, ['1', 'on', 'true', 'yes'], true)) {
                    return $this->fail($field, __('validation.accepted'));
                }

                return true;

            case 'password':
                return $this->checkPassword($field, is_string($value) ? $value : '');

            case 'langcode':
                if (!is_string($value) || preg_match('/^[a-z]{2}(-[A-Z]{2})?$/', $value) !== 1) {
                    return $this->fail($field, __('validation.langcode'));
                }

                return true;

            default:
                throw new \LogicException("Unknown validation rule: {$rule}");
        }
    }

    /**
     * Server-side strength check.
     *
     * Length is the dominant factor, so the rule is 12 characters minimum plus
     * a rejection list for the passwords that actually show up in credential
     * stuffing. No composition rules (one upper, one digit, one symbol) —
     * they push people towards Password1! and buy nothing.
     */
    private function checkPassword(string $field, string $value): bool
    {
        if (mb_strlen($value) < self::PASSWORD_MIN_LENGTH) {
            return $this->fail($field, __('validation.password_short'));
        }

        if (mb_strlen($value) > 256) {
            return $this->fail($field, __('validation.password_long'));
        }

        $normalised = strtolower($value);

        $common = [
            'password', 'passwort', 'qwertyuiop', 'qwertzuiop', '123456789012',
            'administrator', 'letmein12345', 'iloveyou1234', 'welcome12345',
            'consented.eu', 'changeme1234',
        ];

        foreach ($common as $bad) {
            if ($normalised === $bad || str_contains($normalised, $bad)) {
                return $this->fail($field, __('validation.password_guessable'));
            }
        }

        // A single character repeated, or a straight run like abcdefghijkl.
        if (preg_match('/^(.)\1+$/u', $value) === 1) {
            return $this->fail($field, 'Dieses Passwort ist zu leicht zu erraten. Bitte ein anderes wählen.');
        }

        if (count(array_unique(preg_split('//u', $value, -1, PREG_SPLIT_NO_EMPTY) ?: [])) < 5) {
            return $this->fail($field, __('validation.password_variety'));
        }

        return true;
    }

    public static function isDomain(string $value): bool
    {
        $value = strtolower(trim($value));

        if ($value === '' || strlen($value) > 253) {
            return false;
        }

        // Allow a single leading wildcard label.
        if (str_starts_with($value, '*.')) {
            $value = substr($value, 2);
        }

        if (str_contains($value, '/') || str_contains($value, ' ')) {
            return false;
        }

        return preg_match('/^(?:[a-z0-9](?:[a-z0-9\-]{0,61}[a-z0-9])?\.)+[a-z]{2,63}$/', $value) === 1;
    }

    /**
     * Feldbezeichnung für die Fehlermeldung.
     *
     * Bekannte Felder bekommen einen eigenen Katalogschlüssel, damit die
     * Meldung grammatikalisch stimmt — im Deutschen entscheidet das Genus über
     * den Artikel, im Polnischen zusätzlich über den Kasus.
     */
    private function label(string $field): string
    {
        $key = 'validation.field.' . $field;

        return Lang::has($key) ? __($key) : __('validation.field.generic', ['name' => $field]);
    }

    private function fail(string $field, string $message): bool
    {
        $this->errors[$field][] = $message;

        return false;
    }

    public function fails(): bool
    {
        return $this->errors !== [];
    }

    public function passes(): bool
    {
        return $this->errors === [];
    }

    /** @return array<string,list<string>> */
    public function errors(): array
    {
        return $this->errors;
    }

    public function firstError(): string
    {
        foreach ($this->errors as $messages) {
            if ($messages !== []) {
                return $messages[0];
            }
        }

        return '';
    }

    /** @return array<string,mixed> */
    public function validated(): array
    {
        return $this->valid;
    }

    public function string(string $field, string $default = ''): string
    {
        $value = $this->valid[$field] ?? $default;

        return is_string($value) ? $value : $default;
    }
}
