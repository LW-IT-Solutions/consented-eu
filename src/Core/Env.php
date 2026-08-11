<?php

declare(strict_types=1);

namespace Consented\Core;

/**
 * Minimal .env reader.
 *
 * Deliberately not vlucas/phpdotenv: we need ~40 lines of it, and a
 * self-hoster on shared hosting should not have to run composer.
 */
final class Env
{
    /** @var array<string,string> */
    private static array $vars = [];

    private static bool $loaded = false;

    public static function load(string $path): void
    {
        self::$loaded = true;

        if (!is_readable($path)) {
            return;
        }

        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if ($lines === false) {
            return;
        }

        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '' || $line[0] === '#') {
                continue;
            }

            $pos = strpos($line, '=');
            if ($pos === false) {
                continue;
            }

            $key   = trim(substr($line, 0, $pos));
            $value = trim(substr($line, $pos + 1));

            // Strip one layer of matching quotes.
            $len = strlen($value);
            if ($len >= 2) {
                $first = $value[0];
                $last  = $value[$len - 1];
                if (($first === '"' && $last === '"') || ($first === "'" && $last === "'")) {
                    $value = substr($value, 1, -1);
                }
            }

            self::$vars[$key] = $value;
        }
    }

    public static function get(string $key, ?string $default = null): ?string
    {
        if (!self::$loaded) {
            throw new \LogicException('Env::load() must run before Env::get().');
        }

        // Apache SetEnv / server environment wins over the file, so a vhost can
        // flip APP_ENV to dev without editing .env.
        $fromServer = $_SERVER[$key] ?? null;
        if (is_string($fromServer) && $fromServer !== '') {
            return $fromServer;
        }

        $value = self::$vars[$key] ?? null;

        return ($value === null || $value === '') ? $default : $value;
    }

    public static function require(string $key): string
    {
        $value = self::get($key);
        if ($value === null || $value === '') {
            throw new \RuntimeException(
                "Required environment variable {$key} is missing. See .env.example."
            );
        }

        return $value;
    }

    public static function bool(string $key, bool $default = false): bool
    {
        $value = self::get($key);
        if ($value === null) {
            return $default;
        }

        return in_array(strtolower($value), ['1', 'true', 'yes', 'on'], true);
    }

    public static function int(string $key, int $default = 0): int
    {
        $value = self::get($key);

        return ($value === null || !is_numeric($value)) ? $default : (int) $value;
    }
}
