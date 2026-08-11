<?php

declare(strict_types=1);

namespace Consented\Catalog\Sources;

use Consented\Core\Str;

/**
 * Open Cookie Database (jkwakman/Open-Cookie-Database), Apache-2.0.
 *
 * Übernommen werden ausschließlich die in PROJECT_BRIEF 6.3 für diese Quelle
 * freigegebenen Felder: Cookie-Name, Domain, Kategorie, Laufzeit,
 * Wildcard-Flag, Data-Controller und Privacy-Link.
 *
 * Die `description`-Spalte der Quelle wird bewusst NICHT übernommen, obwohl
 * Apache-2.0 das erlauben würde. Regel 6.2 verlangt, dass jede Beschreibung
 * aus Primärquellen in unserer eigenen Struktur entsteht — und ein aus einem
 * fremden Katalog übernommener Satz bleibt erkennbar, auch wenn man ihn
 * umstellt. Der Zweck-Text wird stattdessen aus den beobachteten Kategorien
 * abgeleitet und ist als generiert gekennzeichnet, bis ihn jemand redigiert.
 */
final class OpenCookieDatabase implements Source
{
    private const URL = 'https://raw.githubusercontent.com/jkwakman/Open-Cookie-Database/master/open-cookie-database.json';

    public function __construct(private readonly ?string $localFile = null)
    {
    }

    public function sourceType(): string
    {
        return 'open_cookie_database';
    }

    public function license(): string
    {
        return 'Apache-2.0';
    }

    public function attribution(): string
    {
        return 'Cookie-Stammdaten aus der Open Cookie Database '
             . '(https://github.com/jkwakman/Open-Cookie-Database), lizenziert unter Apache-2.0. '
             . 'Beschreibungstexte stammen nicht aus dieser Quelle.';
    }

    public function sourceUrl(): string
    {
        return self::URL;
    }

    /**
     * OCD-Kategorie → unsere Kategorie.
     *
     * „Security“ und „Necessary“ landen bei essential, weil ein Cookie, ohne
     * das die Seite nicht sicher funktioniert, nicht abwählbar sein kann.
     */
    private const CATEGORY_MAP = [
        'necessary'       => 'essential',
        'security'        => 'essential',
        'functional'      => 'functional',
        'personalization' => 'functional',
        'analytics'       => 'analytics',
        'marketing'       => 'marketing',
    ];

    /** Bei Gleichstand entscheidet die invasivere Kategorie. */
    private const CATEGORY_RANK = ['essential' => 0, 'functional' => 1, 'analytics' => 2, 'marketing' => 3];

    /**
     * Bestimmt die Kategorie eines Dienstes aus den Kategorien seiner Cookies.
     *
     * Es gewinnt die häufigste, bei Gleichstand die invasivere. „Immer die
     * invasivste“ wäre naheliegend, ordnet aber Google Analytics als Marketing
     * ein, sobald ein einziges seiner 21 Cookies so markiert ist — fachlich
     * falsch und für den Besucher irreführend.
     *
     * Umgekehrt wird `essential` nur vergeben, wenn es die Mehrheit ist: ein
     * einzelnes Sicherheits-Cookie darf keinen Marketing-Dienst unabwählbar
     * machen.
     *
     * @param array<string,int> $counts
     */
    private function dominantCategory(array $counts): string
    {
        if ($counts === []) {
            return 'functional';
        }

        arsort($counts);
        $top = (int) reset($counts);

        $candidates = array_keys(array_filter($counts, static fn (int $n): bool => $n === $top));

        usort($candidates, static fn (string $a, string $b): int
            => self::CATEGORY_RANK[$b] <=> self::CATEGORY_RANK[$a]);

        return $candidates[0];
    }

    public function fetch(): iterable
    {
        $raw = $this->localFile !== null && is_file($this->localFile)
            ? file_get_contents($this->localFile)
            : file_get_contents(self::URL);

        if ($raw === false) {
            throw new \RuntimeException('Open Cookie Database konnte nicht gelesen werden.');
        }

        /** @var array<string,list<array<string,string>>>|null $data */
        $data = json_decode($raw, true);

        if (!is_array($data)) {
            throw new \RuntimeException('Open Cookie Database: ungültiges JSON.');
        }

        foreach ($data as $platform => $rows) {
            $platform = trim((string) $platform);

            if ($platform === '' || !is_array($rows) || $rows === []) {
                continue;
            }

            $counts     = [];
            $cookies    = [];
            $controller = '';
            $privacy    = '';

            foreach ($rows as $row) {
                if (!is_array($row)) {
                    continue;
                }

                $mapped = self::CATEGORY_MAP[strtolower(trim((string) ($row['category'] ?? '')))] ?? 'functional';
                $counts[$mapped] = ($counts[$mapped] ?? 0) + 1;

                $name = trim((string) ($row['cookie'] ?? ''));
                if ($name === '') {
                    continue;
                }

                $host = trim((string) ($row['domain'] ?? ''));
                $cookies[] = [
                    'name'     => $name,
                    'host'     => $host !== '' ? $host : 'Erstanbieter',
                    'type'     => 'http',
                    'duration' => trim((string) ($row['retentionPeriod'] ?? '')),
                    // Bewusst leer: siehe Klassenkommentar. Wird redaktionell gefüllt.
                    'purpose'  => '',
                    'wildcard' => ((string) ($row['wildcardMatch'] ?? '0')) === '1',
                ];

                if ($controller === '') {
                    $controller = trim((string) ($row['dataController'] ?? ''));
                }
                if ($privacy === '') {
                    $privacy = trim((string) ($row['privacyLink'] ?? ''));
                }
            }

            if ($cookies === []) {
                continue;
            }

            $category = $this->dominantCategory($counts);

            yield [
                'dps_id'             => Str::slug($platform, 80),
                'name'               => $platform,
                'provider'           => $controller !== '' ? $controller : $platform,
                'provider_country'   => null,
                'category'           => $category,
                'purposes'           => [$this->purposeFor($category)],
                'legal_basis'        => $category === 'essential' ? 'legitimate_interest' : 'consent',
                'data_collected'     => [],
                'data_retention'     => $this->longestRetention($cookies),
                'privacy_policy_url' => filter_var($privacy, FILTER_VALIDATE_URL) !== false ? $privacy : '',
                'cookies'            => $cookies,
                // Ohne belegtes Script-Muster bleibt die Liste leer. Ein
                // geratenes Muster würde entweder nichts blockieren oder die
                // falsche Ressource — beides schlimmer als kein Muster.
                'blocking_pattern'   => [],
                'gcm_signals'        => $this->gcmFor($category),
                'third_country'      => false,
                'source_url'         => self::URL,
                'review_notes'       => 'Cookie-Stammdaten aus der Open Cookie Database (Apache-2.0). '
                    . 'Zweck-Text automatisch aus den Cookie-Kategorien abgeleitet, noch nicht '
                    . 'redigiert. Anbieterland, Drittlandtransfer und Blocking-Muster fehlen und '
                    . 'sind aus der Primärquelle des Anbieters zu ergänzen.',
            ];
        }
    }

    /** Eigene Formulierung, aus der Kategorie abgeleitet — kein Fremdtext. */
    private function purposeFor(string $category): string
    {
        return match ($category) {
            'essential'  => 'Technisch erforderlich für Betrieb und Sicherheit der Website.',
            'analytics'  => 'Erfasst die Nutzung der Website zu Auswertungszwecken.',
            'marketing'  => 'Dient der Ausspielung und Messung von Werbung.',
            default      => 'Ermöglicht zusätzliche Funktionen der Website.',
        };
    }

    /** @param list<array<string,mixed>> $cookies */
    private function longestRetention(array $cookies): string
    {
        $best  = '';
        $score = -1;

        foreach ($cookies as $cookie) {
            $duration = strtolower((string) $cookie['duration']);
            $value    = match (true) {
                $duration === '' || $duration === 'session' => 0,
                str_contains($duration, 'year')             => 400,
                str_contains($duration, 'month')            => 30,
                str_contains($duration, 'day')              => 10,
                default                                     => 1,
            };

            if ($value > $score) {
                $score = $value;
                $best  = (string) $cookie['duration'];
            }
        }

        return $best;
    }

    /** @return list<string> */
    private function gcmFor(string $category): array
    {
        return match ($category) {
            'essential' => ['security_storage'],
            'analytics' => ['analytics_storage'],
            'marketing' => ['ad_storage', 'ad_user_data', 'ad_personalization'],
            default     => ['functionality_storage'],
        };
    }
}
