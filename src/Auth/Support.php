<?php

declare(strict_types=1);

namespace Consented\Auth;

use Consented\Core\Audit;
use Consented\Core\Db;
use Consented\Core\Session;

/**
 * Support access: an instance administrator working inside a customer's property.
 *
 * WHY THIS EXISTS RATHER THAN AN is_admin BYPASS IN Permission::roleFor()
 *
 * The operator needs the full set of options on a foreign property — every mask
 * the customer has, not a read-only copy of them. The cheap way to get there is
 * one line in roleFor() that says "administrators may do anything". That line
 * would be permanently on for every administrator on every property, with no
 * record of why any particular change was made and no way for the customer to
 * tell an operator edit from their own.
 *
 * So the capability is the same and the exposure is not: an administrator opens
 * access to ONE property, on purpose, with a reason, for a limited time. While
 * it is open every page in the customer area carries a banner, every write
 * lands in the audit log with the property attached, and the entry and exit are
 * logged too. Closing the browser is not required — the grant expires.
 *
 * What it grants: the 'owner' role, which is the whole matrix. "Full range of
 * options" was the requirement and anything narrower would be a different
 * feature wearing its name.
 */
final class Support
{
    /** How long one grant lasts. Long enough to work, short enough to forget about. */
    public const TTL_SECONDS = 3600;

    private const KEY = '_support';

    /**
     * Momentaufnahme für die Dauer einer Anfrage.
     *
     * null = noch nicht aufgelöst; ['grant' => null] = aufgelöst, nichts offen.
     * Die Unterscheidung ist nötig, weil "nichts offen" ein gültiges Ergebnis
     * ist und nicht jedes Mal neu ermittelt werden soll.
     *
     * @var array{grant: array<string,mixed>|null}|null
     */
    private static ?array $snapshot = null;

    /**
     * Opens access to one property.
     *
     * Callers must have established that the actor is an instance administrator
     * — this class does not re-check that, because it has no business deciding
     * who is one.
     */
    public static function start(User $actor, int $propertyId, string $publicId, string $reason, string $name = ''): void
    {
        // Eine laufende Freigabe wird ordentlich beendet, nicht überschrieben.
        // Sonst stünde im Prüfpfad ein 'started' ohne 'ended', und wie lange
        // die erste Freigabe offen war, ließe sich nachträglich nicht sagen.
        //
        // Eine bereits erloschene (until = 0) wird übergangen: ihr Ende steht
        // schon im Protokoll, ein zweiter Eintrag wäre eine Erfindung.
        $previous = self::raw();

        if ($previous !== null && $previous['until'] > 0) {
            self::stop($actor);
        }

        $until = time() + self::TTL_SECONDS;

        Session::instance()->put(self::KEY, [
            'property_id' => $propertyId,
            'public_id'   => $publicId,
            'name'        => mb_substr($name, 0, 160),
            'user_id'     => $actor->id(),
            'until'       => $until,
            'reason'      => mb_substr(trim($reason), 0, 200),
        ]);

        self::$snapshot = null;

        // The per-request role cache was populated before the grant existed.
        Permission::forget($actor->id(), $propertyId);

        $orgId = Db::value('SELECT org_id FROM properties WHERE id = :pid', ['pid' => $propertyId]);

        Audit::log(
            'admin.support_started',
            $actor->id(),
            is_numeric($orgId) ? (int) $orgId : null,
            $propertyId,
            'property',
            $publicId,
            ['reason' => mb_substr(trim($reason), 0, 200), 'until' => gmdate('Y-m-d H:i:s', $until)],
            null
        );
    }

    /** Closes access early. Silent when nothing was open. */
    public static function stop(?User $actor = null): void
    {
        $grant = self::raw();

        // Abgelaufen zurückschreiben statt löschen.
        //
        // Session::commit() schreibt den Payload als Ganzes zurück, ohne ihn
        // vorher neu zu lesen. Zwei gleichzeitige Anfragen derselben Sitzung —
        // ein hängender Tab genügt — würden ein reines forget() überschreiben
        // und die Freigabe wieder auferstehen lassen. Ein zurückgeschriebener
        // Grant mit until = 0 überlebt dieses Rennen: er kommt vielleicht
        // zurück, ist dann aber abgelaufen.
        if ($grant === null) {
            Session::instance()->forget(self::KEY);
        } else {
            Session::instance()->put(self::KEY, ['until' => 0] + $grant);
            Permission::forget($grant['user_id'], $grant['property_id']);
        }

        self::$snapshot = null;

        if ($grant === null || $actor === null) {
            return;
        }

        Audit::log(
            'admin.support_ended',
            $actor->id(),
            null,
            (int) $grant['property_id'],
            'property',
            (string) $grant['public_id'],
            null,
            null
        );
    }

    /**
     * The active grant, or null.
     *
     * Expiry is checked on every read rather than by a cleanup job: the session
     * belongs to the administrator, so nobody else would ever come along to
     * clear it, and an expired grant that still answers would be the whole
     * point of the time limit undone.
     *
     * @return array{property_id:int,public_id:string,user_id:int,until:int,reason:string}|null
     */
    public static function active(): ?array
    {
        // Genau einmal pro Anfrage auflösen.
        //
        // Vorher wurde zweimal gegen die Uhr geprüft: einmal bei der
        // Autorisierung über Permission::roleFor(), einmal am Ende bei der
        // Protokollierung. Lief die Freigabe dazwischen ab — und bei 3600
        // Sekunden trifft das irgendwann genau einen Request —, wurde die
        // Änderung ausgeführt und nicht festgehalten. Die Momentaufnahme
        // schließt dieses Fenster.
        if (self::$snapshot !== null) {
            return self::$snapshot['grant'];
        }

        $grant = self::raw();

        self::$snapshot = ['grant' => null];

        if ($grant === null) {
            return null;
        }

        if ($grant['until'] <= time()) {
            self::expire($grant);

            return null;
        }

        // Der Inhaber muss die Rolle, die die Freigabe begründet, noch haben.
        //
        // Ohne diese Prüfung überlebt die Freigabe den Entzug des Adminrechts
        // um bis zu eine Stunde: /admin/ wäre zu, der Kundenbereich offen.
        // Das ist genau der Fall, für den ein Betreiber den Entzug benutzt.
        $stillAdmin = Db::value(
            'SELECT 1 FROM users
              WHERE id = :id AND is_admin = 1 AND deleted_at IS NULL AND suspended_at IS NULL',
            ['id' => $grant['user_id']]
        );

        if ($stillAdmin === null || $stillAdmin === false) {
            self::expire($grant);

            return null;
        }

        self::$snapshot = ['grant' => $grant];

        return $grant;
    }

    /**
     * Beendet eine Freigabe, die von selbst erloschen ist.
     *
     * Auch das gehört in den Prüfpfad: ohne diesen Eintrag stünde im Protokoll
     * ein 'started' ohne Gegenstück, und wie lange die Freigabe tatsächlich
     * offen war, ließe sich nur raten.
     *
     * @param array{property_id:int,public_id:string,user_id:int,until:int,reason:string,name:string} $grant
     */
    private static function expire(array $grant): void
    {
        Session::instance()->put(self::KEY, ['until' => 0] + $grant);
        Permission::forget($grant['user_id'], $grant['property_id']);
        self::$snapshot = ['grant' => null];

        // Nur einmal protokollieren, nicht bei jedem Folgeaufruf.
        if ($grant['until'] === 0) {
            return;
        }

        Audit::log(
            'admin.support_expired',
            $grant['user_id'],
            null,
            $grant['property_id'],
            'property',
            $grant['public_id'],
            ['reason' => $grant['reason']],
            null
        );
    }

    /**
     * Does this user hold an open grant on this property right now?
     *
     * The user id is compared, not assumed. Session::instance() is the current
     * request's session, but roleFor() takes a user id as an argument and a
     * caller could pass someone else's — in which case the answer is no.
     */
    public static function covers(int $userId, int $propertyId): bool
    {
        $grant = self::active();

        return $grant !== null
            && $grant['user_id'] === $userId
            && $grant['property_id'] === $propertyId;
    }

    /** Seconds left on the grant, 0 when there is none. */
    public static function remaining(): int
    {
        $grant = self::active();

        return $grant === null ? 0 : max(0, $grant['until'] - time());
    }

    /**
     * @return array{property_id:int,public_id:string,user_id:int,until:int,reason:string}|null
     */
    private static function raw(): ?array
    {
        $grant = Session::instance()->get(self::KEY);

        if (!is_array($grant)
            || !isset($grant['property_id'], $grant['public_id'], $grant['user_id'], $grant['until'])) {
            return null;
        }

        return [
            'property_id' => (int) $grant['property_id'],
            'public_id'   => (string) $grant['public_id'],
            'name'        => (string) ($grant['name'] ?? ''),
            'user_id'     => (int) $grant['user_id'],
            'until'       => (int) $grant['until'],
            'reason'      => (string) ($grant['reason'] ?? ''),
        ];
    }

    /** Expiry as a UTC timestamp for display, null when nothing is open. */
    public static function expiresAt(): ?string
    {
        $grant = self::active();

        return $grant === null ? null : gmdate('Y-m-d H:i:s', $grant['until']);
    }
}
