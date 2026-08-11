<?php

declare(strict_types=1);

namespace Consented\Core;

final class Request
{
    /** @var array<string,string> */
    private array $headers;

    /** @var array<string,mixed> */
    private array $json = [];

    private bool $jsonParsed = false;

    /** @var array<string,string> */
    public array $params = [];

    private function __construct(
        public readonly string $method,
        public readonly string $path,
        /** @var array<string,mixed> */
        public readonly array $query,
        /** @var array<string,mixed> */
        public readonly array $post,
        public readonly string $rawBody,
    ) {
        $this->headers = self::collectHeaders();
    }

    public static function capture(): self
    {
        $method = strtoupper((string) ($_SERVER['REQUEST_METHOD'] ?? 'GET'));

        // Browsers cannot issue PUT/PATCH/DELETE from a form. Progressive
        // enhancement requires those flows to work without JS, so honour
        // _method on POST only.
        if ($method === 'POST' && isset($_POST['_method'])) {
            $override = strtoupper((string) $_POST['_method']);
            if (in_array($override, ['PUT', 'PATCH', 'DELETE'], true)) {
                $method = $override;
            }
        }

        $uri  = (string) ($_SERVER['REQUEST_URI'] ?? '/');
        $path = parse_url($uri, PHP_URL_PATH);
        $path = is_string($path) ? $path : '/';
        $path = '/' . trim(rawurldecode($path), '/');

        // Serving from a subdirectory (e.g. /ConsentedEU/public) during
        // development: strip the script's own directory from the path.
        $base = rtrim(str_replace('\\', '/', dirname((string) ($_SERVER['SCRIPT_NAME'] ?? ''))), '/');
        if ($base !== '' && $base !== '/' && str_starts_with($path, $base)) {
            $path = '/' . ltrim(substr($path, strlen($base)), '/');
        }

        $body = file_get_contents('php://input');

        return new self(
            $method,
            $path === '' ? '/' : $path,
            $_GET,
            $_POST,
            $body === false ? '' : $body,
        );
    }

    /** @return array<string,string> */
    private static function collectHeaders(): array
    {
        $headers = [];
        foreach ($_SERVER as $key => $value) {
            if (!is_string($value)) {
                continue;
            }
            if (str_starts_with((string) $key, 'HTTP_')) {
                $name           = strtolower(str_replace('_', '-', substr((string) $key, 5)));
                $headers[$name] = $value;
            }
        }

        foreach (['CONTENT_TYPE' => 'content-type', 'CONTENT_LENGTH' => 'content-length'] as $server => $name) {
            if (isset($_SERVER[$server]) && is_string($_SERVER[$server])) {
                $headers[$name] = $_SERVER[$server];
            }
        }

        return $headers;
    }

    public function header(string $name): ?string
    {
        return $this->headers[strtolower($name)] ?? null;
    }

    public function host(): string
    {
        return strtolower((string) ($this->header('host') ?? ($_SERVER['SERVER_NAME'] ?? 'localhost')));
    }

    public function isSecure(): bool
    {
        if (($_SERVER['HTTPS'] ?? '') !== '' && ($_SERVER['HTTPS'] ?? 'off') !== 'off') {
            return true;
        }

        return $this->header('x-forwarded-proto') === 'https';
    }

    public function isJson(): bool
    {
        return str_contains((string) $this->header('content-type'), 'application/json');
    }

    public function wantsJson(): bool
    {
        return $this->isJson() || str_contains((string) $this->header('accept'), 'application/json');
    }

    /** @return array<string,mixed> */
    public function jsonBody(): array
    {
        if (!$this->jsonParsed) {
            $this->jsonParsed = true;
            if ($this->rawBody !== '') {
                $decoded = json_decode($this->rawBody, true);
                if (is_array($decoded)) {
                    /** @var array<string,mixed> $decoded */
                    $this->json = $decoded;
                }
            }
        }

        return $this->json;
    }

    public function input(string $key, ?string $default = null): ?string
    {
        $value = $this->post[$key] ?? $this->query[$key] ?? $this->jsonBody()[$key] ?? null;

        if (is_array($value)) {
            return $default;
        }

        return $value === null ? $default : trim((string) $value);
    }

    /** @return list<string> */
    public function inputArray(string $key): array
    {
        $value = $this->post[$key] ?? $this->query[$key] ?? $this->jsonBody()[$key] ?? [];

        if (!is_array($value)) {
            return [];
        }

        $out = [];
        foreach ($value as $item) {
            if (is_scalar($item)) {
                $out[] = (string) $item;
            }
        }

        return $out;
    }

    public function boolean(string $key): bool
    {
        $value = $this->input($key);

        return $value !== null && in_array(strtolower($value), ['1', 'true', 'on', 'yes'], true);
    }

    public function param(string $key, string $default = ''): string
    {
        return $this->params[$key] ?? $default;
    }

    public function ip(): string
    {
        // No proxy in front of this deployment, so REMOTE_ADDR is authoritative.
        // If you put one there, whitelist it and read X-Forwarded-For here —
        // never trust the header unconditionally, it is client-controlled.
        return (string) ($_SERVER['REMOTE_ADDR'] ?? '0.0.0.0');
    }

    public function userAgent(): string
    {
        return substr((string) ($this->header('user-agent') ?? ''), 0, 512);
    }

    public function origin(): ?string
    {
        return $this->header('origin');
    }

    public function url(): string
    {
        return rtrim((string) Env::get('APP_URL', ''), '/') . $this->path;
    }
}
