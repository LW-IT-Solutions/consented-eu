<?php

declare(strict_types=1);

namespace Consented\Core;

/**
 * Fixed-window rate limiter.
 *
 * Uses Redis when configured and falls back to the database otherwise, because
 * the self-hosting story must not require Redis. Both backends behave
 * identically from the caller's point of view.
 */
final class RateLimiter
{
    private static ?\Redis $redis = null;

    private static bool $redisChecked = false;

    private static function redis(): ?\Redis
    {
        if (self::$redisChecked) {
            return self::$redis;
        }

        self::$redisChecked = true;

        $host = Env::get('REDIS_HOST', '');
        if ($host === null || $host === '' || !extension_loaded('redis')) {
            return null;
        }

        try {
            $redis = new \Redis();
            $redis->connect($host, Env::int('REDIS_PORT', 6379), 1.0);
            self::$redis = $redis;
        } catch (\Throwable) {
            self::$redis = null;
        }

        return self::$redis;
    }

    private static function key(string $key): string
    {
        return (string) Env::get('REDIS_PREFIX', 'consented:') . 'rl:' . hash('sha256', $key);
    }

    /** Records one attempt and returns the running count inside the window. */
    public static function hit(string $key, int $decaySeconds): int
    {
        $redis = self::redis();

        if ($redis !== null) {
            $redisKey = self::key($key);
            /** @var int $hits */
            $hits = $redis->incr($redisKey);
            if ($hits === 1) {
                $redis->expire($redisKey, $decaySeconds);
            }

            return $hits;
        }

        $hash = hash('sha256', $key);
        $now  = Clock::now();

        Db::run(
            'INSERT INTO rate_limits (key_hash, hits, reset_at, created_at)
                  VALUES (:k, 1, :reset, :now)
             ON DUPLICATE KEY UPDATE
                  hits     = IF(reset_at < :now2, 1, hits + 1),
                  reset_at = IF(reset_at < :now3, :reset2, reset_at)',
            [
                'k'      => $hash,
                'reset'  => Clock::in($decaySeconds),
                'reset2' => Clock::in($decaySeconds),
                'now'    => $now,
                'now2'   => $now,
                'now3'   => $now,
            ]
        );

        return (int) Db::value('SELECT hits FROM rate_limits WHERE key_hash = :k', ['k' => $hash]);
    }

    public static function tooManyAttempts(string $key, int $max): bool
    {
        return self::attempts($key) >= $max;
    }

    public static function attempts(string $key): int
    {
        $redis = self::redis();

        if ($redis !== null) {
            /** @var string|false $value */
            $value = $redis->get(self::key($key));

            return $value === false ? 0 : (int) $value;
        }

        $row = Db::first(
            'SELECT hits, reset_at FROM rate_limits WHERE key_hash = :k',
            ['k' => hash('sha256', $key)]
        );

        if ($row === null || Clock::isPast((string) $row['reset_at'])) {
            return 0;
        }

        return (int) $row['hits'];
    }

    /** Seconds until the window resets, for the Retry-After header. */
    public static function availableIn(string $key): int
    {
        $redis = self::redis();

        if ($redis !== null) {
            $ttl = $redis->ttl(self::key($key));

            return is_int($ttl) && $ttl > 0 ? $ttl : 0;
        }

        $resetAt = Db::value(
            'SELECT reset_at FROM rate_limits WHERE key_hash = :k',
            ['k' => hash('sha256', $key)]
        );

        if (!is_string($resetAt)) {
            return 0;
        }

        $seconds = strtotime($resetAt . ' UTC') - time();

        return max(0, $seconds);
    }

    public static function clear(string $key): void
    {
        $redis = self::redis();

        if ($redis !== null) {
            $redis->del(self::key($key));

            return;
        }

        Db::run('DELETE FROM rate_limits WHERE key_hash = :k', ['k' => hash('sha256', $key)]);
    }

    public static function purgeExpired(): int
    {
        if (self::redis() !== null) {
            return 0; // Redis expires keys itself.
        }

        return Db::run('DELETE FROM rate_limits WHERE reset_at < :now', ['now' => Clock::now()])->rowCount();
    }
}
