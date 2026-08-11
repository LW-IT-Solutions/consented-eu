<?php

declare(strict_types=1);

namespace Consented\Property;

use Consented\Auth\Permission;
use Consented\Core\Clock;
use Consented\Core\Db;
use Consented\Core\Str;
use Consented\Core\Uuid;

final class Property
{
    /** @param array<string,mixed> $row */
    private function __construct(private array $row)
    {
    }

    public static function find(int $id): ?self
    {
        $row = Db::first('SELECT * FROM properties WHERE id = :id AND deleted_at IS NULL', ['id' => $id]);

        return $row === null ? null : new self($row);
    }

    public static function findByPublicId(string $publicId): ?self
    {
        if (!Uuid::isValid($publicId)) {
            return null;
        }

        $row = Db::first(
            'SELECT * FROM properties WHERE public_id = :pid AND deleted_at IS NULL',
            ['pid' => $publicId]
        );

        return $row === null ? null : new self($row);
    }

    /**
     * Properties a user can see, with the counters the dashboard cards need.
     *
     * @return list<array<string,mixed>>
     */
    public static function accessibleTo(int $userId): array
    {
        return Db::all(
            'SELECT p.*,
                    o.name AS org_name,
                    (SELECT domain FROM property_domains d
                      WHERE d.property_id = p.id ORDER BY d.is_primary DESC, d.id LIMIT 1) AS primary_domain,
                    (SELECT COUNT(*) FROM property_domains d WHERE d.property_id = p.id) AS domain_count,
                    (SELECT COUNT(*) FROM property_dps s WHERE s.property_id = p.id) AS service_count,
                    (SELECT COUNT(*) FROM consents c
                      WHERE c.property_id = p.id AND c.created_at >= :since) AS consents_7d,
                    (SELECT COUNT(*) FROM consents c
                      WHERE c.property_id = p.id AND c.created_at >= :since2
                        AND c.action = \'accept_all\') AS accepts_7d
               FROM properties p
               JOIN organizations o ON o.id = p.org_id
              WHERE p.deleted_at IS NULL
                AND (
                    EXISTS (SELECT 1 FROM property_users pu
                             WHERE pu.property_id = p.id AND pu.user_id = :uid)
                 OR EXISTS (SELECT 1 FROM organization_members m
                             WHERE m.org_id = p.org_id AND m.user_id = :uid2)
                )
              ORDER BY p.created_at DESC',
            [
                'since'  => Clock::ago(7 * 86400),
                'since2' => Clock::ago(7 * 86400),
                'uid'    => $userId,
                'uid2'   => $userId,
            ]
        );
    }

    /**
     * Creates a property with a complete working default configuration.
     *
     * A new property is immediately publishable: standard categories, both
     * shipped languages, the default text catalogue and the consent-storage
     * service that every install needs. An empty shell that cannot be
     * published without ten more steps would be a worse starting point.
     */
    public static function create(int $orgId, int $userId, string $name, string $primaryDomain = ''): self
    {
        return Db::transaction(static function () use ($orgId, $userId, $name, $primaryDomain): self {
            $now  = Clock::now();
            $slug = Str::uniqueSlug(
                $name,
                static fn (string $s): bool => Db::value(
                    'SELECT 1 FROM properties WHERE org_id = :o AND slug = :s',
                    ['o' => $orgId, 's' => $s]
                ) !== null,
                80
            );

            $id = Db::insert('properties', [
                'public_id'        => Uuid::v7(),
                'org_id'           => $orgId,
                'name'             => $name,
                'slug'             => $slug,
                'status'           => 'draft',
                'default_language' => 'de',
                'config_version'   => 0,
                'settings'         => (string) json_encode(Defaults::settings()),
                'created_at'       => $now,
                'updated_at'       => $now,
            ]);

            Db::insert('property_users', [
                'property_id' => $id,
                'user_id'     => $userId,
                'role'        => 'owner',
                'created_at'  => $now,
                'updated_at'  => $now,
            ]);

            foreach (Defaults::categories() as $category) {
                Db::insert('dps_categories', [
                    'public_id'     => Uuid::v7(),
                    'property_id'   => $id,
                    'category_key'  => $category['key'],
                    'is_required'   => $category['required'] ? 1 : 0,
                    'default_state' => $category['default'] ? 1 : 0,
                    'sort_order'    => $category['sort'],
                    'gcm_signals'   => (string) json_encode($category['gcm']),
                    'created_at'    => $now,
                    'updated_at'    => $now,
                ]);
            }

            foreach (Defaults::translatedLanguages() as $i => $code) {
                Db::insert('property_languages', [
                    'property_id'        => $id,
                    'language_code'      => $code,
                    'is_default'         => $code === 'de' ? 1 : 0,
                    'is_enabled'         => 1,
                    'completion_percent' => 100,
                    'sort_order'         => $i,
                    'created_at'         => $now,
                    'updated_at'         => $now,
                ]);
            }

            Db::insert('property_design', [
                'property_id' => $id,
                'layout'      => 'banner_bottom',
                'tokens'      => (string) json_encode(Defaults::presets()['eu_official']['tokens']),
                'preset'      => 'eu_official',
                'backdrop'    => 0,
                'created_at'  => $now,
                'updated_at'  => $now,
            ]);

            // The CMP's own storage is a service like any other, so it shows up
            // in the second layer instead of being an invisible exception.
            Db::insert('property_dps', [
                'public_id'    => Uuid::v7(),
                'property_id'  => $id,
                'is_custom'    => 1,
                'category_key' => 'essential',
                'sort_order'   => 0,
                'is_essential' => 1,
                'overrides'    => (string) json_encode([
                    'name'       => 'consented.eu CMP',
                    'provider'   => 'consented.eu',
                    'purpose'    => 'Speichert die Datenschutz-Auswahl der Besucherin oder des Besuchers, '
                        . 'damit sie beim nächsten Besuch gilt, und protokolliert sie als Nachweis.',
                    'retention'  => '12 Monate',
                    'legalBasis' => 'Rechtliche Verpflichtung / berechtigtes Interesse',
                    'cookies'    => [[
                        'name'     => 'consented',
                        'host'     => 'Erstanbieter',
                        'duration' => '12 Monate',
                        'purpose'  => 'Gespeicherte Einwilligungsentscheidung',
                    ]],
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            if ($primaryDomain !== '') {
                Db::insert('property_domains', [
                    'public_id'          => Uuid::v7(),
                    'property_id'        => $id,
                    'domain'             => Str::normaliseDomain($primaryDomain),
                    'is_primary'         => 1,
                    'verification_token' => 'consented-verify=' . bin2hex(random_bytes(16)),
                    'created_at'         => $now,
                    'updated_at'         => $now,
                ]);
            }

            Permission::forget($userId);

            $property = self::find($id);
            if ($property === null) {
                throw new \RuntimeException('Property row vanished immediately after insert.');
            }

            return $property;
        });
    }

    /* ------------------------------------------------------------ accessors */

    public function id(): int
    {
        return (int) $this->row['id'];
    }

    public function publicId(): string
    {
        return (string) $this->row['public_id'];
    }

    public function orgId(): int
    {
        return (int) $this->row['org_id'];
    }

    public function name(): string
    {
        return (string) $this->row['name'];
    }

    public function status(): string
    {
        return (string) $this->row['status'];
    }

    /**
     * Stillgelegt durch den Betreiber dieser Instanz.
     *
     * Bewusst getrennt von status(): status gehört dem Kunden und wird beim
     * Veröffentlichen auf 'live' gesetzt, ohne zu fragen. Eine Stilllegung, die
     * dort mitgeschrieben würde, wäre nach dem nächsten Veröffentlichen weg.
     */
    public function isSuspended(): bool
    {
        return ($this->row['suspended_at'] ?? null) !== null;
    }

    public function suspensionReason(): string
    {
        return (string) ($this->row['suspended_reason'] ?? '');
    }

    public function defaultLanguage(): string
    {
        return (string) $this->row['default_language'];
    }

    public function configVersion(): int
    {
        return (int) $this->row['config_version'];
    }

    public function isPublished(): bool
    {
        return $this->configVersion() > 0;
    }

    /** @return array<string,mixed> */
    public function row(): array
    {
        return $this->row;
    }

    /** @return array<string,mixed> */
    public function settings(): array
    {
        $decoded = json_decode((string) ($this->row['settings'] ?? '{}'), true);

        return array_merge(Defaults::settings(), is_array($decoded) ? $decoded : []);
    }

    public function setting(string $key, mixed $default = null): mixed
    {
        return $this->settings()[$key] ?? $default;
    }

    /** @param array<string,mixed> $changes */
    public function mergeSettings(array $changes): void
    {
        $this->update(['settings' => (string) json_encode(array_merge($this->settings(), $changes))]);
    }

    /** @param array<string,mixed> $data */
    public function update(array $data): void
    {
        $data['updated_at'] = Clock::now();

        Db::update('properties', $data, ['id' => $this->id()]);

        $this->row = array_merge($this->row, $data);
    }

    public function softDelete(): void
    {
        $this->update(['deleted_at' => Clock::now(), 'status' => 'paused']);
    }

    /* -------------------------------------------------------- related tables */

    /** @return list<array<string,mixed>> */
    public function domains(): array
    {
        return Db::all(
            'SELECT * FROM property_domains WHERE property_id = :id ORDER BY is_primary DESC, domain',
            ['id' => $this->id()]
        );
    }

    public function primaryDomain(): ?string
    {
        $domain = Db::value(
            'SELECT domain FROM property_domains WHERE property_id = :id
              ORDER BY is_primary DESC, id LIMIT 1',
            ['id' => $this->id()]
        );

        return is_string($domain) ? $domain : null;
    }

    public function hasVerifiedDomain(): bool
    {
        return Db::value(
            'SELECT 1 FROM property_domains WHERE property_id = :id AND verified_at IS NOT NULL LIMIT 1',
            ['id' => $this->id()]
        ) !== null;
    }

    /** @return list<array<string,mixed>> */
    public function languages(): array
    {
        return Db::all(
            'SELECT * FROM property_languages WHERE property_id = :id ORDER BY is_default DESC, sort_order, language_code',
            ['id' => $this->id()]
        );
    }

    /** @return list<string> */
    public function enabledLanguageCodes(): array
    {
        $codes = [];
        foreach ($this->languages() as $row) {
            if ((int) $row['is_enabled'] === 1) {
                $codes[] = (string) $row['language_code'];
            }
        }

        return $codes === [] ? [$this->defaultLanguage()] : $codes;
    }

    /** @return list<array<string,mixed>> */
    public function categories(): array
    {
        return Db::all(
            'SELECT * FROM dps_categories WHERE property_id = :id ORDER BY sort_order, id',
            ['id' => $this->id()]
        );
    }

    /** @return list<array<string,mixed>> */
    public function services(): array
    {
        return Db::all(
            'SELECT pd.*, c.dps_id, c.name AS catalog_name, c.provider AS catalog_provider,
                    c.provider_country, c.purposes, c.legal_basis, c.data_retention,
                    c.privacy_policy_url, c.opt_out_url, c.cookies AS catalog_cookies,
                    c.blocking_pattern AS catalog_pattern, c.third_country, c.tcf_vendor_id
               FROM property_dps pd
          LEFT JOIN dps_catalog c ON c.id = pd.dps_catalog_id
              WHERE pd.property_id = :id
              ORDER BY pd.sort_order, pd.id',
            ['id' => $this->id()]
        );
    }

    /** @return array<string,mixed>|null */
    public function design(): ?array
    {
        return Db::first('SELECT * FROM property_design WHERE property_id = :id', ['id' => $this->id()]);
    }

    /**
     * Customised texts as [language][key] => value.
     *
     * @return array<string,array<string,string>>
     */
    public function customTexts(): array
    {
        $out = [];

        foreach (Db::all('SELECT language_code, text_key, value FROM property_texts WHERE property_id = :id',
                 ['id' => $this->id()]) as $row) {
            $out[(string) $row['language_code']][(string) $row['text_key']] = (string) $row['value'];
        }

        return $out;
    }

    /* ------------------------------------------------------------ publishing */

    /**
     * Freezes the current configuration as a new immutable version.
     *
     * The snapshot is what the runtime will fetch from a URL cached forever,
     * and it is also the record of what a visitor saw at a given time.
     */
    public function publish(int $userId, string $note = ''): int
    {
        return Db::transaction(function () use ($userId, $note): int {
            $version  = $this->configVersion() + 1;
            $snapshot = ConfigBuilder::build($this, $version);

            Db::insert('property_versions', [
                'property_id'  => $this->id(),
                'version'      => $version,
                'snapshot'     => (string) json_encode($snapshot, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                'note'         => $note,
                'published_by' => $userId,
                'published_at' => Clock::now(),
            ]);

            $this->update([
                'config_version' => $version,
                'status'         => 'live',
            ]);

            return $version;
        });
    }

    /** @return array<string,mixed>|null */
    /**
     * When a given version went live.
     *
     * The cookie declaration needs it as its "as of" date, and that date has to
     * come from the version it actually renders — not from the property's
     * updated_at, which moves on every draft edit and would date the declaration
     * to a change nobody has published.
     */
    public function versionPublishedAt(int $version): ?string
    {
        $at = Db::value(
            'SELECT published_at FROM property_versions WHERE property_id = :id AND version = :v',
            ['id' => $this->id(), 'v' => $version]
        );

        return is_string($at) ? $at : null;
    }

    public function publishedConfig(int $version): ?array
    {
        $snapshot = Db::value(
            'SELECT snapshot FROM property_versions WHERE property_id = :id AND version = :v',
            ['id' => $this->id(), 'v' => $version]
        );

        if (!is_string($snapshot)) {
            return null;
        }

        $decoded = json_decode($snapshot, true);

        if (!is_array($decoded)) {
            return null;
        }

        /*
         * Beim Ausliefern normalisieren, nicht im Archiv umschreiben.
         *
         * Presets schrieben früher `rejectBg` und `rejectText` als eigene Werte
         * mit. Änderte der Betreiber danach `primary`, blieb der Ablehnen-Knopf
         * auf der Preset-Farbe — unterschiedliche visuelle Gewichtung von
         * Annehmen und Ablehnen, also CLAUDE.md Regel 8. Ein Feld, um das
         * geradezuziehen, gab es nie.
         *
         * Die Presets setzen die beiden Schlüssel nicht mehr, und Migration
         * 0019 hat sie aus den Arbeitsständen entfernt. Veröffentlichte
         * Schnappschüsse bleiben unangetastet: sie sind der Nachweis, was ein
         * Besucher zu einem Zeitpunkt gesehen hat, und den umzuschreiben wäre
         * genau die Sorte Bequemlichkeit, die einen Nachweis wertlos macht.
         * Deshalb fällt der Wert hier heraus — die Runtime nimmt dann `primary`,
         * und bestehende Banner sind sofort richtig, ohne Neuveröffentlichung.
         */
        if (isset($decoded['tokens']) && is_array($decoded['tokens'])) {
            unset($decoded['tokens']['rejectBg'], $decoded['tokens']['rejectText']);
        }

        return $decoded;
    }

    /** @return list<array<string,mixed>> */
    public function versions(int $limit = 20): array
    {
        return Db::all(
            'SELECT v.version, v.note, v.published_at, u.name AS published_by_name
               FROM property_versions v
          LEFT JOIN users u ON u.id = v.published_by
              WHERE v.property_id = :id
              ORDER BY v.version DESC
              LIMIT ' . max(1, min(100, $limit)),
            ['id' => $this->id()]
        );
    }

    /**
     * True when the working configuration differs from what is published.
     *
     * Compared by content, not by a dirty flag: a flag would go stale the
     * moment anything writes to a child table without clearing it.
     */
    public function hasUnpublishedChanges(): bool
    {
        if (!$this->isPublished()) {
            return true;
        }

        $published = $this->publishedConfig($this->configVersion());
        if ($published === null) {
            return true;
        }

        $current = ConfigBuilder::build($this, $this->configVersion());

        return json_encode($current) !== json_encode($published);
    }

    /**
     * Onboarding checklist state.
     *
     * @return list<array{key:string,label:string,done:bool,href:string}>
     */
    public function checklist(): array
    {
        $base = '/properties/' . $this->publicId();

        $hasDomain   = $this->domains() !== [];
        $hasServices = count($this->services()) > 1;
        $received    = $this->row['first_consent_at'] !== null;

        return [
            ['key' => 'created', 'label' => 'Property angelegt', 'done' => true, 'href' => $base],
            ['key' => 'domain', 'label' => 'Domain hinterlegt', 'done' => $hasDomain, 'href' => $base . '/domains'],
            ['key' => 'services', 'label' => 'Dienste ausgewählt', 'done' => $hasServices, 'href' => $base . '/services'],
            ['key' => 'design', 'label' => 'Design angepasst', 'done' => ($this->design()['preset'] ?? '') !== 'eu_official' || $this->isPublished(), 'href' => $base . '/design'],
            ['key' => 'published', 'label' => 'Konfiguration veröffentlicht', 'done' => $this->isPublished(), 'href' => $base],
            ['key' => 'integrated', 'label' => 'Code eingebaut, erste Einwilligung empfangen', 'done' => $received, 'href' => $base . '/integration'],
        ];
    }
}
