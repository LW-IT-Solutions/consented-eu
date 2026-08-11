<?php

declare(strict_types=1);

namespace Consented\Core;

final class Url
{
    private static ?string $base = null;

    /**
     * Base path the application is mounted under.
     *
     * Normally "" (document root). During development the app is also
     * reachable at /ConsentedEU/public, so links have to carry that prefix or
     * every navigation would escape the app.
     */
    public static function base(): string
    {
        if (self::$base !== null) {
            return self::$base;
        }

        $script = str_replace('\\', '/', (string) ($_SERVER['SCRIPT_NAME'] ?? ''));
        $dir    = rtrim(dirname($script), '/');

        self::$base = ($dir === '' || $dir === '/') ? '' : $dir;

        return self::$base;
    }

    public static function to(string $path = '/'): string
    {
        return self::base() . '/' . ltrim($path, '/');
    }

    /** Absolute URL — used in e-mails, where a relative path is useless. */
    public static function absolute(string $path = '/'): string
    {
        $base = rtrim((string) Env::get('APP_URL', ''), '/');

        if ($base === '') {
            $scheme = (($_SERVER['HTTPS'] ?? 'off') !== 'off') ? 'https' : 'http';
            $host   = (string) ($_SERVER['HTTP_HOST'] ?? 'localhost');
            $base   = $scheme . '://' . $host . self::base();
        }

        return $base . '/' . ltrim($path, '/');
    }

    /**
     * The page being rendered, as an absolute URL on our own origin.
     *
     * Used by the contact link so an enquiry can say which page it came from.
     * The path comes out of `REQUEST_URI`, which is the visitor's to shape, so
     * two things happen to it: the query string is dropped — it may hold a
     * token or a search term that has no business in a support ticket — and
     * anything outside a conservative path alphabet collapses to `/`.
     *
     * The origin is never taken from the request. It comes from `absolute()`,
     * so a forged Host header cannot make this point somewhere else.
     */
    public static function current(): string
    {
        $uri  = (string) ($_SERVER['REQUEST_URI'] ?? '/');
        $path = (string) (parse_url($uri, PHP_URL_PATH) ?: '/');

        if (!preg_match('~^/[A-Za-z0-9/_.\-]*$~', $path)) {
            $path = '/';
        }

        return self::absolute($path);
    }

    /** Base URL the CMP runtime and property configs are served from. */
    public static function cdn(string $path = '/'): string
    {
        $base = rtrim((string) Env::get('CDN_URL', (string) Env::get('APP_URL', '')), '/');

        if ($base === '') {
            return self::absolute($path);
        }

        return $base . '/' . ltrim($path, '/');
    }

    /**
     * Aktuelle Seite in einer anderen Sprache.
     *
     * Bewusst als GET-Link statt als Formular: der Sprachwechsel ist idempotent
     * und muss auch ohne JavaScript und ohne CSRF-Token funktionieren.
     */
    public static function withLang(string $code): string
    {
        $uri  = (string) ($_SERVER['REQUEST_URI'] ?? '/');
        $path = parse_url($uri, PHP_URL_PATH);
        $path = is_string($path) ? $path : '/';

        parse_str((string) parse_url($uri, PHP_URL_QUERY), $query);
        $query['lang'] = $code;

        return $path . '?' . http_build_query($query);
    }

    /** @param array<string,string|int|null> $params */
    public static function withQuery(string $path, array $params): string
    {
        $filtered = array_filter($params, static fn ($v): bool => $v !== null && $v !== '');

        if ($filtered === []) {
            return self::to($path);
        }

        return self::to($path) . '?' . http_build_query($filtered);
    }
}
