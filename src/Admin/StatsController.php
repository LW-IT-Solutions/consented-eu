<?php

declare(strict_types=1);

namespace Consented\Admin;

use Consented\Core\Controller;
use Consented\Core\Db;
use Consented\Core\Request;
use Consented\Core\Response;

/**
 * Instanzweite Statistik.
 *
 * Diese Seite besitzt nur, was nirgends sonst steht. Der Admin-Bereich führt
 * bereits über vierzig Kennzahlen: /admin ist die Landeseite mit den vier
 * Bestandszahlen, /admin/properties ist die Rangliste nach Volumen,
 * /admin/properties/{id} zeigt Quote und Aufteilung je Property,
 * /admin/catalog die Prüfstatistik des Katalogs, /admin/system alles über die
 * Installation. Das hier zu wiederholen hätte zwei Wahrheiten mit zwei Fenstern
 * erzeugt.
 *
 * Geblieben sind vier Dinge: der instanzweite Zulauf über die Zeit (umgezogen
 * von /admin/system, weil er Daten beschreibt und nicht die Installation), das
 * Wachstum je Monat, der Anteil der Entscheidungen als Aggregat, und die Nutzung
 * der Katalogdienste über alle Properties — die einzige dieser Zahlen, die
 * vorher gar nicht existierte.
 */
final class StatsController extends Controller
{
    /** Tage in der Zulaufreihe. */
    private const WINDOW_DAYS = 30;

    /** Monate in den Wachstumsreihen. */
    private const GROWTH_MONTHS = 12;

    /**
     * Kleinste Grundmenge, über der eine Quote ausgegeben wird.
     *
     * Darunter steht die absolute Zahl. Der Grund ist nicht Statistik, sondern
     * Datenschutz: bei dreizehn gespeicherten Einwilligungen ist „8 Prozent"
     * eine Aussage über einen einzelnen Menschen, und die Seite ist für den
     * Instanz-Betreiber gedacht, nicht für eine Einzelfallakte.
     */
    private const MIN_BASIS = 20;

    public function show(Request $request): Response
    {
        return $this->view('admin/stats', [
            'title'     => __('admin.stats.page_title'),
            'activeNav' => 'admin.stats',
            'stock'     => $this->stock(),
            'flow'      => $this->flow(),
            'growth'    => $this->growth(),
            'services'  => $this->serviceUsage(),
            'minBasis'  => self::MIN_BASIS,
            'window'    => self::WINDOW_DAYS,
        ]);
    }

    /**
     * Bestand und Signale, vorberechnet vom Worker.
     *
     * Kein Scan im Request: die Zahlen stehen in stats_counters, geschrieben vom
     * Nachtlauf. Läuft der Worker nicht, ist `computedAt` leer — und dann sagt
     * die Seite das, statt eine Null als Messung auszugeben.
     *
     * @return array<string,mixed>
     */
    private function stock(): array
    {
        $rows = Db::all(
            'SELECT metric, value, computed_at FROM stats_counters WHERE metric LIKE :p',
            ['p' => 'consents.%']
        );

        $out        = [];
        $computedAt = null;

        foreach ($rows as $row) {
            $key       = substr((string) $row['metric'], strlen('consents.'));
            $out[$key] = (int) $row['value'];
            $computedAt ??= (string) $row['computed_at'];
        }

        return [
            'values'     => $out,
            'computedAt' => $computedAt,
            // first_ever ist der Lebenszeitwert. Ob überhaupt je etwas erfasst
            // wurde, darf nicht aus einem 30-Tage-Fenster abgeleitet werden —
            // auf einer Instanz, deren Verkehr älter ist, wäre „noch nichts
            // erfasst" falsch.
            'everRecorded' => ($out['first_ever'] ?? 0) > 0,
            'firstEver'    => ($out['first_ever'] ?? 0) > 0 ? (int) $out['first_ever'] : null,
            'lastEver'     => ($out['last_ever'] ?? 0) > 0 ? (int) $out['last_ever'] : null,
        ];
    }

    /**
     * Entscheidungen je Tag, aus der fortgeschriebenen Tagesreihe.
     *
     * Lücken werden gefüllt, damit die Reihe gleich lang ist wie das Fenster —
     * ein Tag ohne Entscheidung ist eine Null und keine fehlende Zeile.
     *
     * @return array<string,mixed>
     */
    private function flow(): array
    {
        $since = gmdate('Y-m-d', time() - (self::WINDOW_DAYS - 1) * 86400);

        $rows = Db::all(
            'SELECT bucket, metric, value FROM stats_daily
              WHERE bucket >= :since AND metric LIKE :p
              ORDER BY bucket',
            ['since' => $since, 'p' => 'decisions.%']
        );

        $byDate = [];

        foreach ($rows as $row) {
            $action = substr((string) $row['metric'], strlen('decisions.'));
            $byDate[(string) $row['bucket']][$action] = (int) $row['value'];
        }

        $series = [];
        $totals = ['accept_all' => 0, 'reject_all' => 0, 'save_selection' => 0, 'withdraw' => 0];
        $peak   = 0;

        for ($i = self::WINDOW_DAYS - 1; $i >= 0; $i--) {
            $date = gmdate('Y-m-d', time() - $i * 86400);
            $day  = $byDate[$date] ?? [];

            $decisions = 0;

            foreach (array_keys($totals) as $action) {
                $count             = (int) ($day[$action] ?? 0);
                $totals[$action]  += $count;
                $decisions        += $count;
            }

            $series[] = ['date' => $date, 'decisions' => $decisions] + $day;
            $peak     = max($peak, $decisions);
        }

        return [
            'series'    => $series,
            'totals'    => $totals,
            'decisions' => array_sum($totals),
            'peak'      => $peak,
        ];
    }

    /**
     * Neuanmeldungen und neue Properties je Monat.
     *
     * Diese beiden Tabellen wachsen mit der Zahl der Kunden, nicht mit dem
     * Verkehr — hier live zu zählen bleibt auch auf einem Pi billig, anders als
     * bei den Einwilligungen.
     *
     * @return array<string,mixed>
     */
    private function growth(): array
    {
        $since = gmdate('Y-m-01', strtotime('-' . (self::GROWTH_MONTHS - 1) . ' months') ?: time());

        $users = $this->monthly(
            'SELECT DATE_FORMAT(created_at, \'%Y-%m\') AS m, COUNT(*) AS c
               FROM users WHERE deleted_at IS NULL AND created_at >= :since
              GROUP BY m',
            $since
        );

        $properties = $this->monthly(
            'SELECT DATE_FORMAT(created_at, \'%Y-%m\') AS m, COUNT(*) AS c
               FROM properties WHERE deleted_at IS NULL AND created_at >= :since
              GROUP BY m',
            $since
        );

        $published = $this->monthly(
            'SELECT DATE_FORMAT(published_at, \'%Y-%m\') AS m, COUNT(*) AS c
               FROM property_versions WHERE published_at >= :since
              GROUP BY m',
            $since
        );

        $months = [];

        for ($i = self::GROWTH_MONTHS - 1; $i >= 0; $i--) {
            $key      = gmdate('Y-m', strtotime('-' . $i . ' months') ?: time());
            $months[] = [
                'month'      => $key,
                'users'      => $users[$key] ?? 0,
                'properties' => $properties[$key] ?? 0,
                'published'  => $published[$key] ?? 0,
            ];
        }

        $peak = 0;

        foreach ($months as $month) {
            $peak = max($peak, $month['users'], $month['properties'], $month['published']);
        }

        return ['months' => $months, 'peak' => $peak];
    }

    /** @return array<string,int> */
    private function monthly(string $sql, string $since): array
    {
        $out = [];

        foreach (Db::all($sql, ['since' => $since]) as $row) {
            $out[(string) $row['m']] = (int) $row['c'];
        }

        return $out;
    }

    /**
     * Welche Katalogdienste über alle Properties hinweg eingebunden sind.
     *
     * Die einzige Zahl dieser Seite, die es vorher nirgends gab: der Katalog
     * zeigt je Eintrag, wie viele Properties ihn benutzen, aber nichts über die
     * Verteilung. Wächst mit der Zahl der Kunden, nicht mit dem Verkehr.
     *
     * @return list<array<string,mixed>>
     */
    private function serviceUsage(): array
    {
        return Db::all(
            'SELECT c.dps_id, c.name, c.category, c.review_status,
                    COUNT(DISTINCT d.property_id) AS properties
               FROM property_dps d
               JOIN dps_catalog c ON c.id = d.dps_catalog_id
              WHERE d.is_custom = 0
              GROUP BY c.id, c.dps_id, c.name, c.category, c.review_status
              ORDER BY properties DESC, c.name
              LIMIT 15'
        );
    }
}
