<?php

declare(strict_types=1);

namespace Consented\Property;

use Consented\Core\Clock;
use Consented\Core\Db;

/**
 * Read-side queries over the consent log.
 *
 * These run directly on `consents` because the volumes in this deployment are
 * small. The daily rollup table exists for when they are not; when a property
 * outgrows this, the summary switches to `consent_stats_daily` without the
 * callers changing.
 */
final class Consents
{
    /**
     * @return array{total:int,accept_all:int,reject_all:int,custom:int,withdraw:int,rate:float,days:list<array{date:string,count:int,accepts:int}>}
     */
    public static function summary(int $propertyId, int $days = 7): array
    {
        $since = Clock::ago($days * 86400);

        $rows = Db::all(
            'SELECT action, COUNT(*) AS n
               FROM consents
              WHERE property_id = :pid AND created_at >= :since
              GROUP BY action',
            ['pid' => $propertyId, 'since' => $since]
        );

        $byAction = [];
        $total    = 0;

        foreach ($rows as $row) {
            $byAction[(string) $row['action']] = (int) $row['n'];
            $total += (int) $row['n'];
        }

        $daily = Db::all(
            'SELECT DATE(created_at) AS d,
                    COUNT(*) AS n,
                    SUM(action = \'accept_all\') AS accepts
               FROM consents
              WHERE property_id = :pid AND created_at >= :since
              GROUP BY DATE(created_at)
              ORDER BY d',
            ['pid' => $propertyId, 'since' => $since]
        );

        $indexed = [];
        foreach ($daily as $row) {
            $indexed[(string) $row['d']] = ['count' => (int) $row['n'], 'accepts' => (int) $row['accepts']];
        }

        // Fill the gaps so a sparkline does not silently compress quiet days.
        $series = [];
        for ($i = $days - 1; $i >= 0; $i--) {
            $date = gmdate('Y-m-d', time() - $i * 86400);
            $series[] = [
                'date'    => $date,
                'count'   => $indexed[$date]['count'] ?? 0,
                'accepts' => $indexed[$date]['accepts'] ?? 0,
            ];
        }

        $accept = $byAction['accept_all'] ?? 0;

        return [
            'total'      => $total,
            'accept_all' => $accept,
            'reject_all' => $byAction['reject_all'] ?? 0,
            'custom'     => $byAction['save_selection'] ?? 0,
            'withdraw'   => $byAction['withdraw'] ?? 0,
            'rate'       => $total > 0 ? ($accept / $total) * 100 : 0.0,
            'days'       => $series,
        ];
    }

    /**
     * Renders a sparkline as inline SVG.
     *
     * Written by hand rather than pulling in a charting library: this is a
     * polyline over at most 30 points, and a 60 KB dependency for that would
     * be the single largest asset in the dashboard.
     *
     * @param list<array{date:string,count:int,accepts:int}> $series
     */
    public static function sparkline(array $series, int $width = 120, int $height = 28): string
    {
        if ($series === []) {
            return '';
        }

        $max = 1;
        foreach ($series as $point) {
            $max = max($max, $point['count']);
        }

        $step   = count($series) > 1 ? $width / (count($series) - 1) : $width;
        $points = [];

        foreach ($series as $i => $point) {
            $x = $i * $step;
            $y = $height - ($point['count'] / $max) * ($height - 4) - 2;
            $points[] = sprintf('%.1f,%.1f', $x, $y);
        }

        $line = implode(' ', $points);
        $area = $line . sprintf(' %.1f,%d 0,%d', $width, $height, $height);

        return sprintf(
            '<svg width="%d" height="%d" viewBox="0 0 %d %d" fill="none" aria-hidden="true" '
            . 'preserveAspectRatio="none" style="display:block">'
            . '<polygon points="%s" fill="currentColor" opacity=".12"/>'
            . '<polyline points="%s" stroke="currentColor" stroke-width="1.5" '
            . 'stroke-linejoin="round" stroke-linecap="round" fill="none"/></svg>',
            $width,
            $height,
            $width,
            $height,
            $area,
            $line
        );
    }

    /**
     * Records one consent and its append-only history entry.
     *
     * @param array<string,mixed> $data
     */
    public static function record(array $data): void
    {
        Db::transaction(static function () use ($data): void {
            $now = Clock::now();

            $existing = Db::first(
                'SELECT id, created_at FROM consents WHERE consent_id = :cid',
                ['cid' => $data['consent_id']]
            );

            if ($existing === null) {
                Db::insert('consents', array_merge($data, [
                    'created_at' => $now,
                    'updated_at' => $now,
                ]));
            } else {
                // The current-state row is updated, but the previous state is
                // never lost: it is already an immutable row in consent_events.
                Db::update('consents', array_merge($data, ['updated_at' => $now]), ['id' => $existing['id']]);
            }

            Db::insert('consent_events', [
                'consent_id'     => $data['consent_id'],
                'property_id'    => $data['property_id'],
                'config_version' => $data['config_version'],
                'action'         => $data['action'],
                'decisions'      => $data['decisions'],
                'tc_string'      => $data['tc_string'] ?? null,
                'ip_hash'        => $data['ip_hash'] ?? null,
                'created_at'     => $now,
            ]);

            Db::run(
                'UPDATE properties
                    SET first_consent_at = COALESCE(first_consent_at, :now),
                        last_consent_at  = :now2
                  WHERE id = :pid',
                ['now' => $now, 'now2' => $now, 'pid' => $data['property_id']]
            );
        });
    }
}
