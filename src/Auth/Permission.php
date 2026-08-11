<?php

declare(strict_types=1);

namespace Consented\Auth;

use Consented\Core\Db;

/**
 * The authoritative role/permission matrix.
 *
 * Every access decision in the application goes through this class. It is the
 * single place the matrix in docs/ROLES.md is expressed as code, so the two
 * cannot drift apart without a test failing.
 */
final class Permission
{
    // Property-scoped abilities.
    public const VIEW_PROPERTY     = 'property.view';
    public const EDIT_PROPERTY     = 'property.edit';
    public const PUBLISH_PROPERTY  = 'property.publish';
    public const DELETE_PROPERTY   = 'property.delete';
    public const MANAGE_MEMBERS    = 'members.manage';
    public const VIEW_ANALYTICS    = 'analytics.view';

    /*
     * Reserved, not yet backed by a feature.
     *
     * The ability is assigned to owner, admin and support, but nothing in the
     * tree exports anything — there is no route, no Content-Disposition, no
     * fputcsv. It stays defined so the role model does not have to be reshuffled
     * later, and it is deliberately absent from the customer-facing capability
     * matrix in views/properties/members.php: a green tick there is a promise.
     *
     * Whether the export happens at all is an open decision, because
     * docs/DECISIONS.md rules out per-record access for the account holder while
     * Art. 7(1) puts the burden of proof on them. See docs/OPEN_QUESTIONS.md.
     */
    public const EXPORT_CONSENTS   = 'consents.export';
    public const TRANSFER_OWNER    = 'property.transfer';

    /** @var array<string,list<string>> */
    private const MATRIX = [
        'owner' => [
            self::VIEW_PROPERTY, self::EDIT_PROPERTY, self::PUBLISH_PROPERTY,
            self::DELETE_PROPERTY, self::MANAGE_MEMBERS, self::VIEW_ANALYTICS,
            self::EXPORT_CONSENTS, self::TRANSFER_OWNER,
        ],
        'admin' => [
            self::VIEW_PROPERTY, self::EDIT_PROPERTY, self::PUBLISH_PROPERTY,
            self::MANAGE_MEMBERS, self::VIEW_ANALYTICS, self::EXPORT_CONSENTS,
        ],
        'editor' => [
            self::VIEW_PROPERTY, self::EDIT_PROPERTY, self::PUBLISH_PROPERTY,
            self::VIEW_ANALYTICS,
        ],
        'viewer' => [
            self::VIEW_PROPERTY, self::VIEW_ANALYTICS,
        ],

        /*
         * Instanz-Betreiber während einer Support-Freigabe (src/Auth/Support.php).
         *
         * Alles, was die Property betrifft — aber NICHT, wer Zugriff auf sie hat.
         * Der Unterschied ist der ganze Sinn der Zeitbegrenzung: MANAGE_MEMBERS
         * erlaubt einen Schreibzugriff auf property_users, und diese Tabelle
         * fragt roleFor() an erster Stelle ab. Ein einziger POST auf
         * /properties/{id}/members/{uid}/role hätte aus einer Freigabe über
         * 60 Minuten einen dauerhaften Zugang gemacht — ohne Banner, ohne
         * Ablauf, ohne support_write-Eintrag. Die Frist wäre Dekoration gewesen.
         *
         * TRANSFER_OWNER fehlt aus demselben Grund. DELETE_PROPERTY ist dabei,
         * weil es ein Soft-Delete ist und der Admin-Bereich es zurücknehmen kann.
         *
         * Wer als Betreiber Mitglieder ändern muss, tut das im Admin-Bereich
         * unter der eigenen Rolle — dort ist es eine eigene, protokollierte
         * Handlung und nicht ein Nebeneffekt einer Support-Sitzung.
         */
        'support' => [
            self::VIEW_PROPERTY, self::EDIT_PROPERTY, self::PUBLISH_PROPERTY,
            self::DELETE_PROPERTY, self::VIEW_ANALYTICS, self::EXPORT_CONSENTS,
        ],
    ];

    /** @var array<int,array<int,string|null>> user id => property id => role */
    private static array $cache = [];

    public static function roleFor(int $userId, int $propertyId): ?string
    {
        if (isset(self::$cache[$userId][$propertyId])) {
            return self::$cache[$userId][$propertyId];
        }

        // A direct property grant wins; otherwise the organisation membership
        // is mapped onto a property role.
        $role = Db::value(
            'SELECT role FROM property_users WHERE user_id = :uid AND property_id = :pid',
            ['uid' => $userId, 'pid' => $propertyId]
        );

        if (!is_string($role)) {
            $orgRole = Db::value(
                'SELECT m.role
                   FROM organization_members m
                   JOIN properties p ON p.org_id = m.org_id
                  WHERE m.user_id = :uid AND p.id = :pid AND p.deleted_at IS NULL',
                ['uid' => $userId, 'pid' => $propertyId]
            );

            $role = match ($orgRole) {
                'owner'  => 'owner',
                'admin'  => 'admin',
                'member' => 'editor',
                default  => null,
            };
        }

        // Support-Zugriff des Instanz-Administrators.
        //
        // Bewusst NICHT "wer is_admin hat, darf alles": das wäre dauerhaft an,
        // für jeden Administrator auf jeder Property, ohne Anlass und ohne
        // Spur. Stattdessen greift hier nur eine ausdrücklich geöffnete,
        // befristete Freigabe auf GENAU DIESE Property, die Support::start()
        // protokolliert hat. Sie steht am Ende, nicht am Anfang: eine echte
        // Mitgliedschaft geht vor, damit ein Administrator, der zugleich
        // Kunde ist, in seiner eigenen Rolle arbeitet und nicht versehentlich
        // eine Support-Sitzung protokolliert.
        if ($role === null && Support::covers($userId, $propertyId)) {
            $role = 'support';
        }

        self::$cache[$userId][$propertyId] = is_string($role) ? $role : null;

        return self::$cache[$userId][$propertyId];
    }

    public static function allows(int $userId, int $propertyId, string $ability): bool
    {
        $role = self::roleFor($userId, $propertyId);

        if ($role === null) {
            return false;
        }

        return in_array($ability, self::MATRIX[$role] ?? [], true);
    }

    /** @return list<string> */
    public static function abilitiesFor(string $role): array
    {
        return self::MATRIX[$role] ?? [];
    }

    /** @return list<string> */
    public static function roles(): array
    {
        return array_keys(self::MATRIX);
    }

    /** Roles that may be assigned through the UI — owner is transferred, not granted. */
    public static function assignableRoles(): array
    {
        return ['admin', 'editor', 'viewer'];
    }

    public static function label(string $role): string
    {
        return match ($role) {
            'owner'  => __('role.owner.label'),
            'admin'  => __('role.admin.label'),
            'editor' => __('role.editor.label'),
            'viewer' => __('role.viewer.label'),
            'member' => __('role.member.label'),
            'support' => __('role.support.label'),
            default  => $role,
        };
    }

    public static function description(string $role): string
    {
        return match ($role) {
            'owner'  => __('role.owner.description'),
            'admin'  => __('role.admin.description'),
            'editor' => __('role.editor.description'),
            'viewer' => __('role.viewer.description'),
            'support' => __('role.support.description'),
            default  => '',
        };
    }

    /** Clears the per-request cache after a role change. */
    public static function forget(int $userId, ?int $propertyId = null): void
    {
        if ($propertyId === null) {
            unset(self::$cache[$userId]);

            return;
        }

        unset(self::$cache[$userId][$propertyId]);
    }
}
