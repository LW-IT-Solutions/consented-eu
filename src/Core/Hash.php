<?php

declare(strict_types=1);

namespace Consented\Core;

final class Hash
{
    /** Opaque lookup hash for tokens we store but must be able to find again. */
    public static function token(string $value): string
    {
        return hash('sha256', $value);
    }

    /**
     * Pseudonymised IP for the consent log.
     *
     * HMAC with a rotating pepper: we can prove two consents came from the same
     * visitor within one pepper epoch, but the raw address is never recoverable
     * and correlation stops the moment the pepper is rotated.
     */
    public static function ip(string $ip): string
    {
        $pepper = Env::get('IP_HASH_PEPPER', '');
        if ($pepper === null || $pepper === '') {
            // Fail closed: a missing pepper must not silently degrade to a
            // reversible hash of a 32-bit address space.
            throw new \RuntimeException('IP_HASH_PEPPER is not configured.');
        }

        return hash_hmac('sha256', $ip, $pepper);
    }

    public static function password(string $plain): string
    {
        return password_hash(self::pepper($plain), PASSWORD_ARGON2ID, [
            'memory_cost' => 65536,
            'time_cost'   => 4,
            'threads'     => 2,
        ]);
    }

    public static function verifyPassword(string $plain, string $hash): bool
    {
        return password_verify(self::pepper($plain), $hash);
    }

    public static function passwordNeedsRehash(string $hash): bool
    {
        return password_needs_rehash($hash, PASSWORD_ARGON2ID, [
            'memory_cost' => 65536,
            'time_cost'   => 4,
            'threads'     => 2,
        ]);
    }

    /**
     * Pre-hash with the pepper so the secret never reaches the Argon2 input
     * directly and the 72-byte bcrypt-style truncation concern cannot apply.
     */
    private static function pepper(string $plain): string
    {
        $pepper = Env::get('PASSWORD_PEPPER', '');

        return base64_encode(hash_hmac('sha256', $plain, (string) $pepper, true));
    }

    public static function randomToken(int $bytes = 32): string
    {
        return bin2hex(random_bytes($bytes));
    }

    /** Timing-safe comparison for anything secret. */
    public static function equals(string $known, string $given): bool
    {
        return hash_equals($known, $given);
    }
}
