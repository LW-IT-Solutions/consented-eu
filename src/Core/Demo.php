<?php

declare(strict_types=1);

namespace Consented\Core;

use Consented\Auth\User;

/**
 * The demonstration accounts and the one thing that matters about them.
 *
 * These credentials are not a secret — `bin/seed-demo` prints them, and the
 * documentation names them. Keeping them in one place is what makes the health
 * check on the admin overview possible: it can only tell an operator that a
 * known password is still live if it knows which password to try.
 *
 * The check verifies rather than guesses by e-mail address. A warning that
 * stays up after the operator has fixed the problem teaches people to ignore
 * warnings, so this one disappears the moment the password is changed.
 */
final class Demo
{
    public const PASSWORD = 'claudetest123';

    /** @var list<string> */
    public const ACCOUNTS = ['admin@consented.eu', 'test@consented.eu'];

    /** How long a check result stays good. */
    private const CACHE_SECONDS = 300;

    /**
     * The result is cached in a file, not in site_settings.
     *
     * Settings::all() ignores keys that are not in defaults() — the defaults
     * array is that class's contract, and a cache is not a setting. A file
     * carries its own timestamp in the filesystem, needs no schema and no
     * migration, and is exactly as durable as this result needs to be.
     */
    private static function cacheFile(): string
    {
        return CONSENTED_ROOT . '/storage/cache/demo-accounts';
    }

    /**
     * Which demo accounts still accept the published password?
     *
     * @return list<string> e-mail addresses, empty when there is nothing to warn about
     */
    public static function liveAccounts(): array
    {
        $file = self::cacheFile();

        if (is_file($file) && (time() - (int) filemtime($file)) < self::CACHE_SECONDS) {
            $cached = trim((string) @file_get_contents($file));

            return $cached === '' ? [] : explode(',', $cached);
        }

        $found = self::probe();

        if (!is_dir(dirname($file))) {
            @mkdir(dirname($file), 0o775, true);
        }

        // A failed write costs a slow page, not a wrong answer — so it is not
        // worth an exception on a page whose job is to report problems.
        @file_put_contents($file, implode(',', $found), LOCK_EX);

        return $found;
    }

    /**
     * Forces the next call to check again.
     *
     * Called when a password changes, so the warning disappears as soon as the
     * operator has actually fixed it rather than up to five minutes later.
     */
    public static function invalidate(): void
    {
        @unlink(self::cacheFile());
    }

    /**
     * The actual verification. Two Argon2id comparisons, roughly 800 ms on
     * modest hardware — which is exactly why the result is cached rather than
     * recomputed on every page load of the admin overview.
     *
     * @return list<string>
     */
    private static function probe(): array
    {
        $found = [];

        foreach (self::ACCOUNTS as $email) {
            $user = User::findByEmail($email);

            if ($user !== null && $user->verifyPassword(self::PASSWORD)) {
                $found[] = $email;
            }
        }

        return $found;
    }
}
