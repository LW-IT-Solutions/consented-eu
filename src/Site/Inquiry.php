<?php

declare(strict_types=1);

namespace Consented\Site;

use Consented\Core\Clock;
use Consented\Core\Db;
use Consented\Core\Uuid;

/**
 * One support enquiry from the contact form.
 *
 * Named `Inquiry` rather than `Support` on purpose: `Consented\Auth\Support`
 * already means an administrator's temporary access grant to somebody else's
 * property. Two names for two very different risks.
 */
final class Inquiry
{
    /**
     * The subjects on offer.
     *
     * English keys, translated labels. The value is what lands in the database
     * and what an operator later filters and counts by — a value that changes
     * with the sender's interface language would make that impossible.
     */
    public const TOPICS = ['question', 'bug', 'feature', 'account', 'privacy', 'other'];

    public const STATUSES = ['new', 'in_progress', 'done'];

    /** Enough for a real description, short enough to keep a form honest. */
    public const MESSAGE_MAX = 4000;

    /**
     * @param  array<string,mixed> $data
     * @return string              the public id of the new row
     */
    public static function create(array $data): string
    {
        $publicId = Uuid::v7();

        Db::insert('inquiries', [
            'public_id'     => $publicId,
            'user_id'       => $data['user_id'] ?? null,
            'email'         => (string) $data['email'],
            'topic'         => in_array($data['topic'] ?? '', self::TOPICS, true)
                ? (string) $data['topic']
                : 'other',
            'message'       => (string) $data['message'],
            'source_url'    => self::safeSourceUrl((string) ($data['source_url'] ?? '')),
            'locale'        => (string) ($data['locale'] ?? 'de'),
            'ip_hash'       => $data['ip_hash'] ?? null,
            'user_agent'    => mb_substr((string) ($data['user_agent'] ?? ''), 0, 255),
            'captcha_score' => $data['captcha_score'] ?? null,
            'status'        => 'new',
            'created_at'    => Clock::now(),
        ]);

        return $publicId;
    }

    /**
     * The page the form was sent from — or nothing.
     *
     * The value arrives in a hidden field and is therefore the sender's to
     * choose. It is never followed and never rendered as a link target without
     * escaping; it exists so that "the button does not work" can be matched to
     * a page. Anything that is not plain http(s) is dropped rather than
     * repaired: `javascript:` in a field an administrator later clicks is the
     * one outcome worth designing against.
     */
    private static function safeSourceUrl(string $url): string
    {
        if ($url === '' || !preg_match('~^https?://~i', $url)) {
            return '';
        }

        return mb_substr($url, 0, 512);
    }

    /**
     * @return array{rows: list<array<string,mixed>>, total: int}
     */
    public static function page(string $status, int $limit, int $offset): array
    {
        // Der einzige dynamische Teil ist ein fester Vergleichsausdruck aus
        // einer geschlossenen Liste — kein Wert aus der Anfrage erreicht das
        // SQL, der Status geht als Platzhalter mit (Regel 2).
        $filter = in_array($status, self::STATUSES, true) ? 'WHERE i.status = :status' : '';
        $params = $filter === '' ? [] : ['status' => $status];

        $total = (int) Db::value("SELECT COUNT(*) FROM inquiries i {$filter}", $params);

        $rows = Db::all(
            "SELECT i.*, u.email AS handler_email
               FROM inquiries i
          LEFT JOIN users u ON u.id = i.handled_by
              {$filter}
           ORDER BY i.created_at DESC, i.id DESC
              LIMIT {$limit} OFFSET {$offset}",
            $params
        );

        return ['rows' => $rows, 'total' => $total];
    }

    /** @return array<string,int> status => count */
    public static function counts(): array
    {
        $out = array_fill_keys(self::STATUSES, 0);

        foreach (Db::all('SELECT status, COUNT(*) AS n FROM inquiries GROUP BY status') as $row) {
            $out[(string) $row['status']] = (int) $row['n'];
        }

        return $out;
    }

    public static function findByPublicId(string $publicId): ?array
    {
        return Db::first(
            'SELECT i.*, u.email AS handler_email
               FROM inquiries i
          LEFT JOIN users u ON u.id = i.handled_by
              WHERE i.public_id = :p
              LIMIT 1',
            ['p' => $publicId]
        );
    }

    public static function setStatus(string $publicId, string $status, ?int $handlerId): bool
    {
        if (!in_array($status, self::STATUSES, true)) {
            return false;
        }

        return Db::update(
            'inquiries',
            [
                'status'     => $status,
                // Wer eine Anfrage zurück auf "neu" stellt, gibt sie ab: der
                // Bearbeiter gehört dann nicht mehr dran, sonst sieht eine
                // offene Anfrage aus wie eine betreute.
                'handled_by' => $status === 'new' ? null : $handlerId,
                'handled_at' => $status === 'new' ? null : Clock::now(),
            ],
            ['public_id' => $publicId]
        ) > 0;
    }

    public static function delete(string $publicId): bool
    {
        return Db::run('DELETE FROM inquiries WHERE public_id = :p', ['p' => $publicId])
            ->rowCount() > 0;
    }
}
