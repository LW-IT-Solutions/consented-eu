<?php

declare(strict_types=1);

namespace Consented\Auth;

use Consented\Core\Clock;
use Consented\Core\Db;
use Consented\Core\Demo;
use Consented\Core\Hash;
use Consented\Core\Uuid;

final class User
{
    /** @param array<string,mixed> $row */
    private function __construct(private array $row)
    {
    }

    public static function find(int $id): ?self
    {
        $row = Db::first('SELECT * FROM users WHERE id = :id AND deleted_at IS NULL', ['id' => $id]);

        return $row === null ? null : new self($row);
    }

    public static function findByEmail(string $email): ?self
    {
        $row = Db::first(
            'SELECT * FROM users WHERE email = :email AND deleted_at IS NULL',
            ['email' => strtolower(trim($email))]
        );

        return $row === null ? null : new self($row);
    }

    public static function findByPublicId(string $publicId): ?self
    {
        $row = Db::first(
            'SELECT * FROM users WHERE public_id = :pid AND deleted_at IS NULL',
            ['pid' => $publicId]
        );

        return $row === null ? null : new self($row);
    }

    public static function create(string $email, string $password, string $name, string $locale = 'de'): self
    {
        $now = Clock::now();

        $id = Db::insert('users', [
            'public_id'         => Uuid::v7(),
            'email'             => strtolower(trim($email)),
            'password_hash'     => Hash::password($password),
            'name'              => $name,
            'locale'            => $locale,
            'terms_accepted_at' => $now,
            'created_at'        => $now,
            'updated_at'        => $now,
        ]);

        $user = self::find($id);

        if ($user === null) {
            throw new \RuntimeException('User row vanished immediately after insert.');
        }

        return $user;
    }

    public function id(): int
    {
        return (int) $this->row['id'];
    }

    public function publicId(): string
    {
        return (string) $this->row['public_id'];
    }

    public function email(): string
    {
        return (string) $this->row['email'];
    }

    public function name(): string
    {
        $name = (string) $this->row['name'];

        return $name === '' ? explode('@', $this->email())[0] : $name;
    }

    public function locale(): string
    {
        return (string) $this->row['locale'];
    }

    public function isVerified(): bool
    {
        return $this->row['email_verified_at'] !== null;
    }

    /**
     * Instance administrator.
     *
     * Deliberately separate from the per-property "owner" role: owning a
     * property never grants sight of anything outside it, and being an admin
     * is not something a customer can reach by any in-app action.
     */
    public function isAdmin(): bool
    {
        return (bool) ($this->row['is_admin'] ?? false);
    }

    public function isLocked(): bool
    {
        $until = $this->row['locked_until'];

        return is_string($until) && !Clock::isPast($until);
    }

    public function lockedUntil(): ?string
    {
        $until = $this->row['locked_until'];

        return is_string($until) ? $until : null;
    }

    public function verifyPassword(string $plain): bool
    {
        return Hash::verifyPassword($plain, (string) $this->row['password_hash']);
    }

    /**
     * Rehashes transparently when the cost parameters change, so raising the
     * Argon2 cost later upgrades existing accounts on their next login.
     */
    public function rehashIfNeeded(string $plain): void
    {
        if (Hash::passwordNeedsRehash((string) $this->row['password_hash'])) {
            $this->update(['password_hash' => Hash::password($plain)]);
        }
    }

    public function setPassword(string $plain): void
    {
        $this->update([
            'password_hash'      => Hash::password($plain),
            'failed_login_count' => 0,
            'locked_until'       => null,
        ]);

        // The admin overview warns while a demonstration account still accepts
        // its published password. That check is cached because it is expensive,
        // so a password change has to drop the cache — otherwise the operator
        // fixes the problem and the alarm keeps going for another five minutes.
        Demo::invalidate();
    }

    public function markVerified(): void
    {
        if (!$this->isVerified()) {
            $this->update(['email_verified_at' => Clock::now()]);
        }
    }

    /**
     * Übernimmt eine neue Adresse, deren Besitz nachgewiesen ist.
     *
     * Nur aus VerificationController::verify() aufzurufen, also nach dem Klick
     * auf den Link, der an genau diese Adresse ging. Ein Aufruf ohne diesen
     * Nachweis würde den ganzen Ablauf entwerten.
     *
     * `email_verified_at` wird mitgesetzt: die neue Adresse ist in derselben
     * Sekunde bestätigt, in der sie gilt. Sie danach als unbestätigt zu führen
     * würde das Konto in die Verifikationsschranke schicken, obwohl der Nachweis
     * gerade erbracht wurde.
     */
    public function changeEmail(string $email): void
    {
        $this->update([
            'email'             => strtolower(trim($email)),
            'email_verified_at' => Clock::now(),
        ]);

        // Wie bei setPassword(): der Demo-Zwischenspeicher hält Kontodaten und
        // muss die Änderung mitbekommen.
        Demo::invalidate();
    }

    public function recordLogin(): void
    {
        $this->update([
            'last_login_at'      => Clock::now(),
            'failed_login_count' => 0,
            'locked_until'       => null,
        ]);
    }

    /**
     * Progressive lockout after repeated failures on one account.
     *
     * This is per account, deliberately in addition to the per-IP limit: an
     * attacker spraying one password across many accounts from a botnet
     * defeats IP limiting alone.
     */
    public function recordFailedLogin(): void
    {
        $count = (int) $this->row['failed_login_count'] + 1;

        $lockSeconds = match (true) {
            $count >= 10 => 3600,
            $count >= 7  => 900,
            $count >= 5  => 300,
            default      => 0,
        };

        $this->update([
            'failed_login_count' => $count,
            'locked_until'       => $lockSeconds > 0 ? Clock::in($lockSeconds) : null,
        ]);
    }

    /** @param array<string,mixed> $data */
    public function update(array $data): void
    {
        $data['updated_at'] = Clock::now();

        Db::update('users', $data, ['id' => $this->id()]);

        $this->row = array_merge($this->row, $data);
    }

    /** @return array<string,mixed> */
    public function toArray(): array
    {
        return [
            'public_id' => $this->publicId(),
            'email'     => $this->email(),
            'name'      => $this->name(),
            'locale'    => $this->locale(),
            'verified'  => $this->isVerified(),
        ];
    }

    /**
     * Organisations this user belongs to.
     *
     * @return list<array<string,mixed>>
     */
    public function organizations(): array
    {
        return Db::all(
            'SELECT o.*, m.role AS member_role
               FROM organizations o
               JOIN organization_members m ON m.org_id = o.id
              WHERE m.user_id = :uid AND o.deleted_at IS NULL
              ORDER BY o.name',
            ['uid' => $this->id()]
        );
    }
}
