<?php

declare(strict_types=1);

namespace Consented\Org;

use Consented\Auth\User;
use Consented\Core\Clock;
use Consented\Core\Db;
use Consented\Core\Str;
use Consented\Core\Uuid;

final class Organization
{
    /** @param array<string,mixed> $row */
    private function __construct(private array $row)
    {
    }

    public static function find(int $id): ?self
    {
        $row = Db::first('SELECT * FROM organizations WHERE id = :id AND deleted_at IS NULL', ['id' => $id]);

        return $row === null ? null : new self($row);
    }

    public static function findByPublicId(string $publicId): ?self
    {
        $row = Db::first(
            'SELECT * FROM organizations WHERE public_id = :pid AND deleted_at IS NULL',
            ['pid' => $publicId]
        );

        return $row === null ? null : new self($row);
    }

    /**
     * Every user gets an organisation at registration.
     *
     * Making organisations mandatory from day one means multi-user access and
     * agency workflows need no migration later — a solo user simply has an
     * organisation of one.
     */
    public static function createForUser(User $user, string $name): self
    {
        $now  = Clock::now();
        $slug = Str::uniqueSlug(
            $name,
            static fn (string $s): bool => Db::value('SELECT 1 FROM organizations WHERE slug = :s', ['s' => $s]) !== null,
            80
        );

        $id = Db::insert('organizations', [
            'public_id'     => Uuid::v7(),
            'name'          => $name,
            'slug'          => $slug,
            'owner_user_id' => $user->id(),
            'legal_name'    => $name,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);

        Db::insert('organization_members', [
            'org_id'     => $id,
            'user_id'    => $user->id(),
            'role'       => 'owner',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $org = self::find($id);

        if ($org === null) {
            throw new \RuntimeException('Organization row vanished immediately after insert.');
        }

        return $org;
    }

    /** The organisation a user works in by default. */
    public static function primaryFor(User $user): ?self
    {
        $row = Db::first(
            'SELECT o.*
               FROM organizations o
               JOIN organization_members m ON m.org_id = o.id
              WHERE m.user_id = :uid AND o.deleted_at IS NULL
              ORDER BY (m.role = \'owner\') DESC, o.id
              LIMIT 1',
            ['uid' => $user->id()]
        );

        return $row === null ? null : new self($row);
    }

    public function id(): int
    {
        return (int) $this->row['id'];
    }

    public function publicId(): string
    {
        return (string) $this->row['public_id'];
    }

    public function name(): string
    {
        return (string) $this->row['name'];
    }

    public function legalName(): string
    {
        $legal = (string) $this->row['legal_name'];

        return $legal === '' ? $this->name() : $legal;
    }

    public function slug(): string
    {
        return (string) $this->row['slug'];
    }

    public function ownerUserId(): int
    {
        return (int) $this->row['owner_user_id'];
    }

    public function roleOf(int $userId): ?string
    {
        $role = Db::value(
            'SELECT role FROM organization_members WHERE org_id = :oid AND user_id = :uid',
            ['oid' => $this->id(), 'uid' => $userId]
        );

        return is_string($role) ? $role : null;
    }

    public function hasMember(int $userId): bool
    {
        return $this->roleOf($userId) !== null;
    }

    /** @return list<array<string,mixed>> */
    public function members(): array
    {
        return Db::all(
            'SELECT u.id, u.public_id, u.email, u.name, u.last_login_at, m.role, m.created_at AS joined_at
               FROM organization_members m
               JOIN users u ON u.id = m.user_id
              WHERE m.org_id = :oid AND u.deleted_at IS NULL
              ORDER BY FIELD(m.role, \'owner\', \'admin\', \'member\'), u.name',
            ['oid' => $this->id()]
        );
    }

    public function addMember(int $userId, string $role = 'member'): void
    {
        $now = Clock::now();

        Db::run(
            'INSERT INTO organization_members (org_id, user_id, role, created_at, updated_at)
                  VALUES (:oid, :uid, :role, :now, :now2)
             ON DUPLICATE KEY UPDATE role = VALUES(role), updated_at = VALUES(updated_at)',
            ['oid' => $this->id(), 'uid' => $userId, 'role' => $role, 'now' => $now, 'now2' => $now]
        );
    }

    /** @param array<string,mixed> $data */
    public function update(array $data): void
    {
        $data['updated_at'] = Clock::now();

        Db::update('organizations', $data, ['id' => $this->id()]);

        $this->row = array_merge($this->row, $data);
    }
}
