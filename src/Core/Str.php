<?php

declare(strict_types=1);

namespace Consented\Core;

final class Str
{
    public static function slug(string $value, int $maxLength = 64): string
    {
        $value = mb_strtolower(trim($value), 'UTF-8');

        $replacements = [
            'ä' => 'ae', 'ö' => 'oe', 'ü' => 'ue', 'ß' => 'ss',
            'á' => 'a', 'à' => 'a', 'â' => 'a', 'ã' => 'a', 'å' => 'a',
            'é' => 'e', 'è' => 'e', 'ê' => 'e', 'ë' => 'e',
            'í' => 'i', 'ì' => 'i', 'î' => 'i', 'ï' => 'i',
            'ó' => 'o', 'ò' => 'o', 'ô' => 'o', 'õ' => 'o', 'ø' => 'o',
            'ú' => 'u', 'ù' => 'u', 'û' => 'u',
            'ñ' => 'n', 'ç' => 'c', 'ł' => 'l', 'ś' => 's', 'ź' => 'z',
            'ż' => 'z', 'ć' => 'c', 'ę' => 'e', 'ą' => 'a', 'ń' => 'n',
        ];

        $value = strtr($value, $replacements);
        $value = preg_replace('/[^a-z0-9]+/', '-', $value) ?? '';
        $value = trim($value, '-');

        if ($value === '') {
            $value = 'item';
        }

        return substr($value, 0, $maxLength);
    }

    /** Appends -2, -3, … until $exists() reports the slug is free. */
    public static function uniqueSlug(string $base, callable $exists, int $maxLength = 64): string
    {
        $slug = self::slug($base, $maxLength);

        if (!$exists($slug)) {
            return $slug;
        }

        for ($i = 2; $i < 1000; $i++) {
            $suffix    = '-' . $i;
            $candidate = substr($slug, 0, $maxLength - strlen($suffix)) . $suffix;

            if (!$exists($candidate)) {
                return $candidate;
            }
        }

        return substr($slug, 0, $maxLength - 9) . '-' . bin2hex(random_bytes(4));
    }

    public static function normaliseDomain(string $domain): string
    {
        $domain = strtolower(trim($domain));
        $domain = preg_replace('#^https?://#', '', $domain) ?? $domain;
        $domain = preg_replace('#/.*$#', '', $domain) ?? $domain;
        $domain = preg_replace('#:\d+$#', '', $domain) ?? $domain;

        return trim($domain, '.');
    }

    public static function initials(string $name): string
    {
        $parts    = preg_split('/\s+/', trim($name)) ?: [];
        $initials = '';

        foreach (array_slice($parts, 0, 2) as $part) {
            if ($part !== '') {
                $initials .= mb_strtoupper(mb_substr($part, 0, 1));
            }
        }

        return $initials === '' ? '?' : $initials;
    }

    public static function maskEmail(string $email): string
    {
        $at = strpos($email, '@');
        if ($at === false || $at < 1) {
            return '***';
        }

        $local  = substr($email, 0, $at);
        $domain = substr($email, $at);
        $keep   = min(2, strlen($local));

        return substr($local, 0, $keep) . str_repeat('*', max(1, strlen($local) - $keep)) . $domain;
    }

    public static function truncate(string $value, int $length): string
    {
        return mb_strlen($value) <= $length ? $value : mb_substr($value, 0, $length - 1) . '…';
    }
}
