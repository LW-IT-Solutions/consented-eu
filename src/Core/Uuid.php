<?php

declare(strict_types=1);

namespace Consented\Core;

/**
 * UUIDv7 generator (RFC 9562).
 *
 * v7 is time-ordered, so public_id columns stay index-friendly as primary
 * lookup keys while never leaking a row count the way an auto-increment does.
 */
final class Uuid
{
    public static function v7(): string
    {
        $unixTsMs = (int) (microtime(true) * 1000);

        // 48 bits of millisecond timestamp, big endian.
        $timeHex = str_pad(dechex($unixTsMs), 12, '0', STR_PAD_LEFT);

        $random = random_bytes(10);

        // Version 7 in the high nibble of byte 6.
        $random[0] = chr((ord($random[0]) & 0x0F) | 0x70);
        // RFC 4122 variant in the two high bits of byte 8.
        $random[2] = chr((ord($random[2]) & 0x3F) | 0x80);

        $randomHex = bin2hex($random);

        return sprintf(
            '%s-%s-%s-%s-%s',
            substr($timeHex, 0, 8),
            substr($timeHex, 8, 4),
            substr($randomHex, 0, 4),
            substr($randomHex, 4, 4),
            substr($randomHex, 8, 12)
        );
    }

    public static function isValid(string $value): bool
    {
        return preg_match('/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/i', $value) === 1;
    }
}
