<?php

declare(strict_types=1);

namespace Consented\Core;

/**
 * Database-backed session.
 *
 * Not PHP's native session handler, because the product needs a device list
 * with "sign out everywhere" — which requires sessions to be enumerable and
 * revocable server-side.
 *
 * Rows are created lazily: an anonymous visitor who never submits a form and
 * never logs in does not get a database row.
 */
final class Session
{
    private const COOKIE           = 'ce_session';
    // Rückfallwerte. Sie greifen, solange die Instanz keine eigenen Werte
    // gesetzt hat, und wenn die Einstellungstabelle noch nicht existiert —
    // etwa beim allerersten Aufruf vor der Migration.
    private const LIFETIME          = 7200;       // 2 hours idle
    private const REMEMBER_LIFETIME = 2592000;    // 30 days

    private static ?self $instance = null;

    private ?int $id = null;

    private ?string $token = null;

    private ?int $userId = null;

    private bool $remembered = false;

    /** @var array<string,mixed> */
    private array $payload = [];

    private bool $dirty = false;

    private function __construct(private readonly Request $request)
    {
    }

    public static function boot(Request $request): self
    {
        $session = new self($request);
        $session->load();

        self::$instance = $session;

        return $session;
    }

    public static function instance(): self
    {
        if (self::$instance === null) {
            throw new \LogicException('Session::boot() must run first.');
        }

        return self::$instance;
    }

    private function load(): void
    {
        $cookie = $_COOKIE[self::COOKIE] ?? null;
        if (!is_string($cookie) || $cookie === '') {
            return;
        }

        $row = Db::first(
            'SELECT id, user_id, payload, remembered, expires_at
               FROM sessions
              WHERE token_hash = :hash
              LIMIT 1',
            ['hash' => Hash::token($cookie)]
        );

        if ($row === null) {
            return;
        }

        if (Clock::isPast((string) $row['expires_at'])) {
            Db::run('DELETE FROM sessions WHERE id = :id', ['id' => $row['id']]);

            return;
        }

        $this->id         = (int) $row['id'];
        $this->token      = $cookie;
        $this->userId     = $row['user_id'] === null ? null : (int) $row['user_id'];
        $this->remembered = (bool) $row['remembered'];

        $decoded = json_decode((string) $row['payload'], true);
        if (is_array($decoded)) {
            /** @var array<string,mixed> $decoded */
            $this->payload = $decoded;
        }

        // Sliding expiry, but only write once per minute to avoid a database
        // round trip on every asset-ish request.
        $lastSeen = isset($this->payload['_seen']) ? (int) $this->payload['_seen'] : 0;
        if (time() - $lastSeen > 60) {
            $this->payload['_seen'] = time();
            $this->dirty            = true;
        }
    }

    public function userId(): ?int
    {
        return $this->userId;
    }

    public function isAuthenticated(): bool
    {
        return $this->userId !== null;
    }

    public function get(string $key, mixed $default = null): mixed
    {
        return $this->payload[$key] ?? $default;
    }

    public function put(string $key, mixed $value): void
    {
        $this->payload[$key] = $value;
        $this->dirty         = true;
        $this->ensureExists();
    }

    public function forget(string $key): void
    {
        if (array_key_exists($key, $this->payload)) {
            unset($this->payload[$key]);
            $this->dirty = true;
        }
    }

    public function pull(string $key, mixed $default = null): mixed
    {
        $value = $this->get($key, $default);
        $this->forget($key);

        return $value;
    }

    public function flash(string $type, string $message): void
    {
        /** @var list<array{type:string,message:string}> $flashes */
        $flashes   = $this->get('_flash', []);
        $flashes[] = ['type' => $type, 'message' => $message];
        $this->put('_flash', $flashes);
    }

    /** @return list<array{type:string,message:string}> */
    public function takeFlashes(): array
    {
        /** @var list<array{type:string,message:string}> $flashes */
        $flashes = $this->pull('_flash', []);

        return $flashes;
    }

    /** Remembers form input so a failed POST can repopulate the form. */
    public function flashInput(array $input): void
    {
        unset($input['password'], $input['password_confirmation'], $input['_csrf'], $input['_method']);
        $this->put('_old', $input);
    }

    /** @return array<string,mixed> */
    public function oldInput(): array
    {
        /** @var array<string,mixed> $old */
        $old = $this->pull('_old', []);

        return $old;
    }

    public function csrfToken(): string
    {
        $token = $this->get('_csrf');
        if (!is_string($token) || $token === '') {
            $token = Hash::randomToken(32);
            $this->put('_csrf', $token);
        }

        return $token;
    }

    public function verifyCsrf(string $given): bool
    {
        $token = $this->get('_csrf');

        return is_string($token) && $token !== '' && Hash::equals($token, $given);
    }

    /**
     * Binds the session to a user. Rotates the token first, which is the
     * session-fixation defence: whatever identifier the visitor arrived with
     * stops being valid at the moment privileges change.
     */
    public function login(int $userId, bool $remember = false): void
    {
        $this->destroyRow();

        $this->id         = null;
        $this->token      = null;
        $this->userId     = $userId;
        $this->remembered = $remember;
        // Deliberately drop everything except a fresh CSRF token.
        $this->payload    = ['_csrf' => Hash::randomToken(32), '_seen' => time()];
        $this->dirty      = true;

        $this->ensureExists();
    }

    public function logout(): void
    {
        $this->destroyRow();

        $this->id      = null;
        $this->token   = null;
        $this->userId  = null;
        $this->payload = [];
        $this->dirty   = false;

        $this->clearCookie();
    }

    public static function logoutAllFor(int $userId, ?int $exceptSessionId = null): void
    {
        if ($exceptSessionId === null) {
            Db::run('DELETE FROM sessions WHERE user_id = :uid', ['uid' => $userId]);

            return;
        }

        Db::run(
            'DELETE FROM sessions WHERE user_id = :uid AND id <> :keep',
            ['uid' => $userId, 'keep' => $exceptSessionId]
        );
    }

    public function currentId(): ?int
    {
        return $this->id;
    }

    private function destroyRow(): void
    {
        if ($this->id !== null) {
            Db::run('DELETE FROM sessions WHERE id = :id', ['id' => $this->id]);
        }
    }

    private function ensureExists(): void
    {
        if ($this->id !== null) {
            return;
        }

        $this->token = Hash::randomToken(32);
        $lifetime    = $this->lifetimeSeconds();

        $this->id = Db::insert('sessions', [
            'public_id'         => Uuid::v7(),
            'user_id'           => $this->userId,
            'token_hash'        => Hash::token($this->token),
            'ip_hash'           => Hash::ip($this->request->ip()),
            'user_agent_hash'   => Hash::token($this->request->userAgent()),
            'user_agent_family' => UserAgent::family($this->request->userAgent()),
            'payload'           => (string) json_encode($this->payload),
            'remembered'        => $this->remembered ? 1 : 0,
            'last_seen_at'      => Clock::now(),
            'expires_at'        => Clock::in($lifetime),
            'created_at'        => Clock::now(),
            'updated_at'        => Clock::now(),
        ]);

        $this->sendCookie($lifetime);
        $this->dirty = false;
    }

    /**
     * How long this session stays valid, from the instance settings.
     *
     * Wrapped in a try/catch because Session::boot() runs before anything else
     * on every request, including the very first one on a database that has no
     * site_settings table yet. A configuration lookup must never be the reason
     * nobody can log in — the constants above are the answer when it fails.
     */
    private function lifetimeSeconds(): int
    {
        try {
            return $this->remembered
                ? Settings::rememberLifetimeSeconds()
                : Settings::sessionLifetimeSeconds();
        } catch (\Throwable) {
            return $this->remembered ? self::REMEMBER_LIFETIME : self::LIFETIME;
        }
    }

    /** Persists payload changes. Called once at the end of the request. */
    public function commit(): void
    {
        if (!$this->dirty || $this->id === null) {
            return;
        }

        $lifetime = $this->lifetimeSeconds();

        Db::update('sessions', [
            'payload'      => (string) json_encode($this->payload),
            'user_id'      => $this->userId,
            'last_seen_at' => Clock::now(),
            'expires_at'   => Clock::in($lifetime),
            'updated_at'   => Clock::now(),
        ], ['id' => $this->id]);

        $this->dirty = false;
    }

    private function sendCookie(int $lifetime): void
    {
        if (headers_sent() || $this->token === null) {
            return;
        }

        setcookie(self::COOKIE, $this->token, [
            'expires'  => $this->remembered ? time() + $lifetime : 0,
            'path'     => '/',
            'secure'   => $this->request->isSecure(),
            'httponly' => true,
            'samesite' => 'Lax',
        ]);
    }

    private function clearCookie(): void
    {
        if (headers_sent()) {
            return;
        }

        setcookie(self::COOKIE, '', [
            'expires'  => time() - 3600,
            'path'     => '/',
            'secure'   => $this->request->isSecure(),
            'httponly' => true,
            'samesite' => 'Lax',
        ]);
    }

    /** Housekeeping, called from bin/worker. */
    public static function purgeExpired(): int
    {
        return Db::run('DELETE FROM sessions WHERE expires_at < :now', ['now' => Clock::now()])->rowCount();
    }
}
