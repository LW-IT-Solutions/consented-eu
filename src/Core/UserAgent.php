<?php

declare(strict_types=1);

namespace Consented\Core;

/**
 * Reduces a User-Agent string to a coarse family label.
 *
 * The consent log must be able to say "this consent came from Safari on iOS"
 * without storing a string that is precise enough to fingerprint a visitor.
 */
final class UserAgent
{
    public static function family(string $ua): string
    {
        $ua = strtolower($ua);

        if ($ua === '') {
            return 'unknown';
        }

        $browser = match (true) {
            str_contains($ua, 'edg/')                                  => 'Edge',
            str_contains($ua, 'opr/') || str_contains($ua, 'opera')    => 'Opera',
            str_contains($ua, 'firefox')                               => 'Firefox',
            str_contains($ua, 'chrome') || str_contains($ua, 'crios')  => 'Chrome',
            str_contains($ua, 'safari')                                => 'Safari',
            str_contains($ua, 'bot') || str_contains($ua, 'spider')    => 'Bot',
            default                                                    => 'Other',
        };

        $platform = match (true) {
            str_contains($ua, 'iphone') || str_contains($ua, 'ipad') => 'iOS',
            str_contains($ua, 'android')                             => 'Android',
            str_contains($ua, 'windows')                             => 'Windows',
            str_contains($ua, 'mac os')                              => 'macOS',
            str_contains($ua, 'linux')                               => 'Linux',
            default                                                  => 'Other',
        };

        return $browser . '/' . $platform;
    }

    public static function isMobile(string $ua): bool
    {
        $ua = strtolower($ua);

        return str_contains($ua, 'mobile') || str_contains($ua, 'android') || str_contains($ua, 'iphone');
    }
}
