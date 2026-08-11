<?php

declare(strict_types=1);

namespace Consented\Core;

/**
 * All timestamps are stored in UTC. Display is localised per user/property.
 */
final class Clock
{
    public static function now(): string
    {
        return gmdate('Y-m-d H:i:s');
    }

    public static function in(int $seconds): string
    {
        return gmdate('Y-m-d H:i:s', time() + $seconds);
    }

    public static function ago(int $seconds): string
    {
        return gmdate('Y-m-d H:i:s', time() - $seconds);
    }

    public static function isPast(?string $timestamp): bool
    {
        if ($timestamp === null || $timestamp === '') {
            return true;
        }

        return strtotime($timestamp . ' UTC') < time();
    }
}
