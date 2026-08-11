<?php

declare(strict_types=1);

namespace Consented\Core;

/**
 * Instance settings, stored in the database rather than in .env.
 *
 * Same approach as MousePlayer's `site_settings`: values an operator changes
 * during normal operation — sender address, imprint details — belong in a
 * table they can edit from the admin interface, not in a file that requires a
 * deployment. Secrets stay in .env, where they are not readable through the
 * application.
 *
 * That last sentence is a hard boundary, not a preference. `SMTP_PASSWORD` is
 * therefore the one mail setting this class does not know: everything about
 * the connection is configurable at /admin/settings/mail, the credential is
 * not. The interface only reports whether it is present.
 */
final class Settings
{
    /** Accepted values for `mail_transport`. */
    public const TRANSPORTS = ['mail', 'smtp'];

    /** Accepted values for `smtp_encryption`. */
    public const ENCRYPTIONS = ['none', 'tls', 'ssl'];

    /** Accepted values for `registration_mode`. */
    public const REGISTRATION_MODES = ['open', 'invite', 'closed'];

    /** Retention keys the housekeeping worker acts on. */
    public const RETENTION_KEYS = [
        'retention_consent_days',
        'retention_mail_log_days',
        'retention_audit_log_days',
    ];

    /**
     * Keys whose *value* must never reach the audit log.
     *
     * Credentials and personal data. The audit entry still records that the
     * field changed and whether it went from empty to filled — that is what
     * Art. 5(2) GDPR needs — but the postal address of the operator does not
     * have to be copied into a second, longer-lived table to prove it.
     */
    private const AUDIT_MASKED = [
        'smtp_from_email',
        'smtp_username',
        'operator_name',
        'operator_street',
        'operator_zip',
        'operator_city',
        'operator_email',
        'operator_phone',
        'operator_represented_by',
        'operator_register_number',
        'operator_vat_id',
        'operator_dpo',
    ];

    /** @var array<string,string>|null */
    private static ?array $cache = null;

    /**
     * Defaults for every known key.
     *
     * The keys are the contract: the admin form, the legal pages, the mailer
     * and the housekeeping worker all read from here, so an unset value
     * degrades to something sensible instead of an empty page. `all()` starts
     * from this array and only overwrites what the table actually holds, so a
     * newly added key needs no migration — the default answers until someone
     * saves the form once.
     *
     * @return array<string,string>
     */
    public static function defaults(): array
    {
        return [
            // --- Mail -------------------------------------------------------
            'smtp_from_email'   => 'noreply@consented.eu',
            'smtp_from_name'    => 'consented.eu',
            'mail_enabled'      => '0',

            // "mail" hands the message to the host MTA through PHP's mail();
            // "smtp" talks to a mail server directly. The second exists because
            // a self-hoster without an MTA otherwise cannot get a single
            // verification mail out, and without that no confirmed address and
            // no property.
            'mail_transport'    => 'mail',
            'smtp_host'         => '',
            'smtp_port'         => '587',
            'smtp_encryption'   => 'tls',
            'smtp_auth'         => '1',
            'smtp_username'     => '',
            // No smtp_password here, deliberately. See the class comment.

            // --- Operator (Impressum, § 5 DDG) ------------------------------
            'operator_name'     => '',
            'operator_legal_form' => '',
            'operator_street'   => '',
            'operator_zip'      => '',
            'operator_city'     => '',
            'operator_country'  => 'Deutschland',
            'operator_email'    => 'contact@lukaswojcik.com',
            'operator_phone'    => '',
            'operator_represented_by' => '',
            'operator_register_court' => '',
            'operator_register_number' => '',
            'operator_vat_id'   => '',
            'operator_dpo'      => '',
            'operator_supervisory_authority' => '',

            // --- Site -------------------------------------------------------
            'coming_soon'       => '0',
            'launch_note'       => '',

            // --- Instance ---------------------------------------------------
            // Defaults reproduce what the code did while these were hard-wired,
            // so upgrading an existing installation changes nothing until the
            // operator changes something.
            'registration_mode'           => 'open',
            'require_email_verification'  => '1',
            'session_idle_hours'          => '2',   // Session::LIFETIME, 7200 s
            'remember_lifetime_days'      => '30',  // Session::REMEMBER_LIFETIME
            'consent_rate_limit_per_hour' => '60',  // ConsentApiController
            'ui_languages'                => 'de,en,pl',
            // Öffentliche Kennung der Property, deren Banner diese Instanz auf
            // ihren eigenen Seiten ausspielt. Leer = keines. Muss veröffentlicht
            // sein, sonst bleibt das Snippet aus (siehe Site\SelfEmbed).
            'self_cmp_property'           => '',
            // Blendet die Hinweise auf maschinell erstellte Sprachpakete ein.
            // Aus, weil der Hinweis auf jeder Sprachseite jeder Property
            // erscheint und dort nichts sagt, was der Betreiber nicht schon
            // weiss — wer ihn braucht, schaltet ihn an.
            'review_notices'              => '0',

            // --- Retention --------------------------------------------------
            // 0 means "keep forever". The consent window matches the previous
            // CONSENT_RETENTION_MONTHS=36; the two logs were never pruned, so
            // their honest default is 0.
            'retention_consent_days'   => '1095',
            'retention_mail_log_days'  => '0',
            'retention_audit_log_days' => '0',
        ];
    }

    /** @return array<string,string> */
    public static function all(): array
    {
        if (self::$cache !== null) {
            return self::$cache;
        }

        $values = self::defaults();

        try {
            foreach (Db::all('SELECT setting_key, setting_value FROM site_settings') as $row) {
                $key = (string) $row['setting_key'];
                // Unknown keys are ignored: the defaults array is the contract,
                // and a stale row must not resurrect a removed setting.
                if (array_key_exists($key, $values)) {
                    $values[$key] = (string) ($row['setting_value'] ?? '');
                }
            }
        } catch (\Throwable) {
            // Before the migration has run, defaults are the correct answer.
        }

        self::$cache = $values;

        return $values;
    }

    public static function get(string $key, string $default = ''): string
    {
        $value = self::all()[$key] ?? $default;

        return $value === '' ? $default : $value;
    }

    public static function bool(string $key): bool
    {
        return in_array(strtolower(self::get($key, '0')), ['1', 'true', 'yes', 'on'], true);
    }

    /**
     * Numeric setting.
     *
     * A stored "0" is a real answer ("never delete"), not a missing value, so
     * it must survive — which is why this does not route through get()'s
     * empty-string fallback for anything but a genuinely empty field.
     */
    public static function int(string $key, int $default = 0): int
    {
        $value = self::all()[$key] ?? '';

        return is_numeric($value) ? (int) $value : $default;
    }

    /**
     * Setting constrained to a fixed set of values.
     *
     * A value that is no longer valid — an enum narrowed in a later release —
     * falls back rather than reaching the caller, because every caller of this
     * would otherwise need the same guard.
     *
     * @param list<string> $allowed
     */
    public static function oneOf(string $key, array $allowed, string $fallback): string
    {
        $value = self::get($key, $fallback);

        return in_array($value, $allowed, true) ? $value : $fallback;
    }

    public static function set(string $key, string $value): void
    {
        if (!array_key_exists($key, self::defaults())) {
            throw new \InvalidArgumentException("Unknown setting: {$key}");
        }

        Db::run(
            'INSERT INTO site_settings (setting_key, setting_value, updated_at)
                  VALUES (:k, :v, :now)
             ON DUPLICATE KEY UPDATE setting_value = VALUES(setting_value), updated_at = VALUES(updated_at)',
            ['k' => $key, 'v' => $value, 'now' => Clock::now()]
        );

        self::$cache = null;
    }

    /** @param array<string,string> $values */
    public static function setMany(array $values): void
    {
        $known = self::defaults();

        Db::transaction(static function () use ($values, $known): void {
            foreach ($values as $key => $value) {
                if (array_key_exists($key, $known)) {
                    self::set($key, $value);
                }
            }
        });

        self::$cache = null;
    }

    /**
     * Before/after entries for the audit log, with sensitive values withheld.
     *
     * Unchanged keys are dropped so a saved form that changed one field does
     * not produce a diff listing all seventeen.
     *
     * @param  array<string,string> $before full snapshot, normally all()
     * @param  array<string,string> $after  only the keys the form submitted
     * @return array<string,array{from:string,to:string}>
     */
    public static function auditDiff(array $before, array $after): array
    {
        $diff = [];

        foreach ($after as $key => $new) {
            $old = $before[$key] ?? '';

            if ($old === $new) {
                continue;
            }

            $diff[$key] = in_array($key, self::AUDIT_MASKED, true)
                ? ['from' => self::mask($old), 'to' => self::mask($new)]
                : ['from' => $old, 'to' => $new];
        }

        return $diff;
    }

    /** Records whether a value was present, never what it was. */
    private static function mask(string $value): string
    {
        return $value === '' ? '' : '***';
    }

    /* ------------------------------------------------------------- instance */

    public static function registrationMode(): string
    {
        return self::oneOf('registration_mode', self::REGISTRATION_MODES, 'open');
    }

    /**
     * May a visitor sign up on their own?
     *
     * False for both "invite" and "closed" — an invitation carries its own
     * token and does not go through the public registration form.
     */
    public static function registrationOpen(): bool
    {
        return self::registrationMode() === 'open';
    }

    /** Idle session lifetime in seconds, clamped to something survivable. */
    public static function sessionLifetimeSeconds(): int
    {
        return max(1, min(720, self::int('session_idle_hours', 2))) * 3600;
    }

    /** Lifetime of a "remember me" session in seconds. */
    public static function rememberLifetimeSeconds(): int
    {
        return max(1, min(365, self::int('remember_lifetime_days', 30))) * 86400;
    }

    /**
     * Consent writes allowed per property and IP inside one hour.
     *
     * Named for the window the endpoint actually uses (3600 s), not for a
     * minute — the limiter is a fixed window, and calling it "per minute"
     * would make an operator set it sixty times too low.
     */
    public static function consentRateLimit(): int
    {
        return max(1, self::int('consent_rate_limit_per_hour', 60));
    }

    /**
     * Interface languages the operator has switched on.
     *
     * The reference locale is always in the list. Lang::get() falls back to it
     * for every key a translation is missing, so an instance without it would
     * answer with raw key names instead of text.
     *
     * @return list<string>
     */
    public static function uiLanguages(): array
    {
        $codes = [];

        foreach (explode(',', self::get('ui_languages', 'de')) as $code) {
            $code = trim($code);

            if ($code !== '' && Lang::isSupported($code) && !in_array($code, $codes, true)) {
                $codes[] = $code;
            }
        }

        if (!in_array(Lang::DEFAULT_LOCALE, $codes, true)) {
            array_unshift($codes, Lang::DEFAULT_LOCALE);
        }

        return $codes;
    }

    public static function languageEnabled(string $code): bool
    {
        return in_array($code, self::uiLanguages(), true);
    }

    /* ------------------------------------------------------------ retention */

    /**
     * Retention window in days for one log, 0 meaning "keep forever".
     *
     * Note what is missing: there is no retention key for `property_versions`,
     * and there must not be one. That table is the audit trail that lets us
     * reconstruct which banner configuration a given consent was given under.
     * Deleting a version turns every consent recorded against it into an
     * unprovable claim, which is the opposite of what the log is for.
     */
    public static function retentionDays(string $key): int
    {
        if (!in_array($key, self::RETENTION_KEYS, true)) {
            throw new \InvalidArgumentException("Unknown retention setting: {$key}");
        }

        return max(0, self::int($key));
    }

    /* --------------------------------------------------------------- legal */

    /**
     * True once the operator has entered enough to make the imprint lawful.
     *
     * § 5 DDG needs name, a physical address and a way to contact them
     * electronically. Without those the imprint page says so rather than
     * pretending to be complete.
     */
    public static function imprintComplete(): bool
    {
        foreach (['operator_name', 'operator_street', 'operator_zip', 'operator_city', 'operator_email'] as $key) {
            if (self::get($key) === '') {
                return false;
            }
        }

        return true;
    }

    /** Single-line postal address, empty parts skipped. */
    public static function operatorAddressLine(): string
    {
        $parts = array_filter([
            self::get('operator_name'),
            self::get('operator_street'),
            trim(self::get('operator_zip') . ' ' . self::get('operator_city')),
            self::get('operator_country'),
        ], static fn (string $p): bool => $p !== '');

        return implode(', ', $parts);
    }

    public static function forget(): void
    {
        self::$cache = null;
    }
}
