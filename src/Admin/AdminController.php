<?php

declare(strict_types=1);

namespace Consented\Admin;

use Consented\Auth\User;
use Consented\Core\Audit;
use Consented\Core\Clock;
use Consented\Core\Controller;
use Consented\Core\Db;
use Consented\Core\Demo;
use Consented\Core\Env;
use Consented\Core\Exception\HttpException;
use Consented\Core\Mail;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\Sanitizer;
use Consented\Core\Session;
use Consented\Core\Settings;
use Consented\Core\Uuid;

/**
 * Instance administration.
 *
 * Everything here is scoped to the operator of this installation, not to a
 * customer. It is the only place in the application that reads across
 * organisation boundaries, which is why it sits behind its own middleware
 * rather than a role check inside the normal controllers.
 */
final class AdminController extends Controller
{
    public function overview(Request $request): Response
    {
        return $this->view('admin/overview', [
            'title'     => __('admin.overview.title'),
            'activeNav' => 'admin.overview',
            'counts'    => $this->counts(),
            'health'    => $this->health(),
            'recent'    => Db::all(
                'SELECT public_id, email, name, created_at, email_verified_at, is_admin
                   FROM users WHERE deleted_at IS NULL ORDER BY id DESC LIMIT 8'
            ),
            'failedMail' => (int) Db::value(
                'SELECT COUNT(*) FROM mail_log WHERE status <> :s',
                ['s' => 'sent']
            ),
        ], 'layouts/admin');
    }

    public function toggleAdmin(Request $request): Response
    {
        $actor  = $this->requireUser();
        $target = User::findByPublicId($request->param('uid'));

        if ($target === null) {
            throw new HttpException(404);
        }

        if ($target->id() === $actor->id()) {
            $this->flash('error', __('flash.admin.self_admin_revoke'));

            return $this->redirect('/admin/users');
        }

        $makeAdmin = !$target->isAdmin();

        // Never let the last administrator disappear — the instance would have
        // no way back into /admin except through the database.
        $applied = Db::transaction(static function () use ($target, $makeAdmin): bool {
            if (!$makeAdmin && !self::otherAdminsRemain($target->id())) {
                return false;
            }

            $target->update(['is_admin' => $makeAdmin ? 1 : 0]);

            // Beim Entzug alle Sitzungen beenden, wie beim Sperren auch.
            //
            // Sonst wirkt die Degradierung nur auf /admin/: eine laufende
            // Support-Freigabe stützt sich auf die Sitzung und gäbe dem gerade
            // Degradierten noch bis zu eine Stunde vollen Schreibzugriff auf
            // eine fremde Kunden-Property. Der Entzug ist aber genau das
            // Werkzeug, das man in dieser Lage greift.
            if (!$makeAdmin) {
                Session::logoutAllFor($target->id());
            }

            return true;
        });

        if ($applied !== true) {
            $this->flash('error', __('flash.admin.last_admin'));

            return $this->redirect('/admin/users');
        }

        Audit::log(
            'admin.role_changed',
            $actor->id(),
            null,
            null,
            'user',
            $target->publicId(),
            ['is_admin' => $makeAdmin],
            $request->ip()
        );

        $this->flash('success', $makeAdmin
            ? __('flash.admin.granted', ['email' => $target->email()])
            : __('flash.admin.revoked', ['email' => $target->email()]));

        return $this->redirect('/admin/users');
    }

    public function verifyUser(Request $request): Response
    {
        $target = User::findByPublicId($request->param('uid'));

        if ($target === null) {
            throw new HttpException(404);
        }

        $target->markVerified();

        Audit::log(
            'admin.user_verified',
            $this->requireUser()->id(),
            null,
            null,
            'user',
            $target->publicId(),
            null,
            $request->ip()
        );

        $this->flash('success', __('flash.admin.user_verified', ['email' => $target->email()]));

        return $this->redirect('/admin/users');
    }

    public function deleteUser(Request $request): Response
    {
        $actor  = $this->requireUser();
        $target = User::findByPublicId($request->param('uid'));

        if ($target === null) {
            throw new HttpException(404);
        }

        if ($target->id() === $actor->id()) {
            $this->flash('error', __('flash.admin.self_delete'));

            return $this->redirect('/admin/users');
        }

        // An organisation owner cannot simply vanish: organizations.owner_user_id
        // is RESTRICT, and the properties underneath would be orphaned.
        $ownsOrg = Db::value(
            'SELECT COUNT(*) FROM organizations WHERE owner_user_id = :uid AND deleted_at IS NULL',
            ['uid' => $target->id()]
        );

        if ((int) $ownsOrg > 0) {
            $this->flash('error', __('flash.admin.user_owns_org'));

            return $this->redirect('/admin/users');
        }

        $email = $target->email();

        // Deleting an administrator is a demotion plus a deletion, so it needs
        // the same guard as revoking the flag. Without it two administrators
        // could delete each other in parallel and leave the instance with none.
        $applied = Db::transaction(static function () use ($target): bool {
            // Re-read the flag under the lock. The User object was loaded before
            // the transaction opened, so its copy may already be stale.
            $isAdmin = (int) Db::value(
                'SELECT is_admin FROM users WHERE id = :uid FOR UPDATE',
                ['uid' => $target->id()]
            ) === 1;

            if ($isAdmin && !self::otherAdminsRemain($target->id())) {
                return false;
            }

            // Soft delete plus e-mail release: the address must be reusable, but
            // the row stays so audit entries keep pointing somewhere real.
            $target->update([
                'deleted_at' => Clock::now(),
                'email'      => 'deleted+' . Uuid::v7() . '@invalid',
                'is_admin'   => 0,
            ]);

            Db::run('DELETE FROM sessions WHERE user_id = :uid', ['uid' => $target->id()]);

            return true;
        });

        if ($applied !== true) {
            $this->flash('error', __('flash.admin.last_admin'));

            return $this->redirect('/admin/users');
        }

        Audit::log(
            'admin.user_deleted',
            $actor->id(),
            null,
            null,
            'user',
            $target->publicId(),
            ['email' => $email],
            $request->ip()
        );

        $this->flash('success', __('flash.admin.user_deleted', ['email' => $email]));

        return $this->redirect('/admin/users');
    }

    /**
     * Setzt einen Katalogeintrag auf geprüft.
     *
     * Erst damit darf er im öffentlichen Katalog erscheinen (PROJECT_BRIEF 6.5).
     * Wer prüft, wird festgehalten — die dokumentierte Prüfleistung ist Teil
     * dessen, was unser eigenes Datenbankrecht begründet.
     */
    public function verifyCatalogEntry(Request $request): Response
    {
        $actor = $this->requireUser();
        $entry = Db::first(
            'SELECT id, dps_id, review_status FROM dps_catalog WHERE public_id = :p',
            ['p' => $request->param('cid')]
        );

        if ($entry === null) {
            throw new HttpException(404);
        }

        $verify = $entry['review_status'] !== 'verified';

        Db::update('dps_catalog', [
            'review_status' => $verify ? 'verified' : 'draft',
            'verified_by'   => $verify ? $actor->id() : null,
            'verified_at'   => $verify ? Clock::now() : null,
            'updated_at'    => Clock::now(),
        ], ['id' => $entry['id']]);

        Audit::log(
            'admin.catalog_reviewed',
            $actor->id(),
            null,
            null,
            'dps_catalog',
            (string) $entry['dps_id'],
            ['review_status' => $verify ? 'verified' : 'draft'],
            $request->ip()
        );

        $this->flash('success', __($verify ? 'flash.admin.catalog_verified' : 'flash.admin.catalog_unverified', [
            'name' => (string) $entry['dps_id'],
        ]));

        return $this->redirect('/admin/catalog');
    }

    /* ----------------------------------------------------------------- mail log */

    public function mail(Request $request): Response
    {
        $status = (string) $request->input('status', '');

        $sql    = 'SELECT public_id, recipient, subject, status, error, created_at FROM mail_log';
        $params = [];

        if (in_array($status, ['sent', 'failed', 'suppressed'], true)) {
            $sql .= ' WHERE status = :s';
            $params['s'] = $status;
        }

        $sql .= ' ORDER BY id DESC LIMIT 100';

        return $this->view('admin/mail', [
            'title'     => __('admin.mail.title'),
            'activeNav' => 'admin.mail',
            'messages'  => Db::all($sql, $params),
            'status'    => $status,
            'enabled'   => Settings::bool('mail_enabled'),
        ], 'layouts/admin');
    }

    /**
     * Renders one logged message.
     *
     * Sandboxed and served with a restrictive policy: the body is our own
     * template, but it is still stored HTML being replayed, and an admin page
     * is the wrong place to be relaxed about that.
     */
    /**
     * A stored message may carry a working password-reset or verification link.
     * Two things follow from that, and neither is optional.
     *
     * The link is redacted before it reaches the browser. The log exists so an
     * operator without a working MTA can see THAT a mail went out and what it
     * said — not so anyone with admin access can take over an account without
     * touching the victim's mailbox. Redacting on display is the second line;
     * the first is not writing the token at all, which the mailer handles.
     *
     * And opening a message is recorded. Every other write in this controller
     * leaves an audit entry, and reading someone's mail body is more sensitive
     * than most of them.
     */
    public function mailBody(Request $request): Response
    {
        $actor = $this->requireUser();

        $row = Db::first(
            'SELECT id, public_id, recipient, subject, body_html FROM mail_log WHERE public_id = :pid',
            ['pid' => (string) $request->param('mid')]
        );

        if ($row === null) {
            throw new HttpException(404);
        }

        Audit::log(
            'admin.mail_body_viewed',
            $actor->id(),
            null,
            null,
            'mail_log',
            (string) $row['public_id'],
            ['recipient' => (string) $row['recipient'], 'subject' => (string) $row['subject']],
            $request->ip()
        );

        return Response::html(self::redactTokens((string) $row['body_html']))
            ->withHeader('Content-Security-Policy', "default-src 'none'; style-src 'unsafe-inline'; img-src data:")
            ->withHeader('Cache-Control', 'no-store')
            ->withHeader('Referrer-Policy', 'no-referrer');
    }

    /**
     * Blanks the secret part of any single-use link in a stored message.
     *
     * Matches the routes that carry a token in the path — /reset-password/…,
     * /verify-email/… and /invitations/… — and keeps the surrounding text
     * intact so the operator still sees the mail as the recipient saw it.
     */
    private static function redactTokens(string $html): string
    {
        return (string) preg_replace(
            '~(/(?:reset-password|verify-email|invitations)/)[A-Za-z0-9._-]{8,}~',
            '$1[' . __('admin.mail.token_redacted') . ']',
            $html
        );
    }

    public function sendTestMail(Request $request): Response
    {
        $user = $this->requireUser();

        $ok = Mail::send(
            $user->email(),
            __('admin.test_mail.subject'),
            Mail::layout(
                __('admin.test_mail.heading'),
                '<p>' . __('admin.test_mail.body') . '</p>',
                __('admin.test_mail.cta'),
                \Consented\Core\Url::absolute('/admin')
            )
        );

        $this->flash(
            $ok ? 'success' : 'warning',
            $ok
                ? __('flash.admin.test_mail_sent', ['email' => $user->email()])
                : __('flash.admin.test_mail_failed')
        );

        return $this->redirect('/admin/mail');
    }

    /* -------------------------------------------------------------------- data */

    /**
     * Is there at least one administrator left besides this one?
     *
     * Must run inside a transaction. The FOR UPDATE is the point of the method:
     * a plain COUNT would let two administrators demote or delete each other at
     * the same time, each reading a count of two and each believing the other
     * remains. The row lock serialises them, so the second one sees the truth.
     */
    private static function otherAdminsRemain(int $exceptUserId): bool
    {
        // suspended_at gehört in die Bedingung: ein gesperrter Administrator
        // kann sich nicht anmelden, zählt also nicht als verbleibender Weg in
        // den Admin-Bereich. Ohne diese Zeile lässt sich die Instanz aussperren,
        // indem man erst alle anderen Administratoren sperrt und dann sich
        // selbst degradiert.
        $rows = Db::all(
            'SELECT id FROM users
              WHERE is_admin = 1
                AND deleted_at IS NULL
                AND suspended_at IS NULL
                AND id <> :uid
              LIMIT 1
              FOR UPDATE',
            ['uid' => $exceptUserId]
        );

        return $rows !== [];
    }

    /** @return array<string,int> */
    private function counts(): array
    {
        return [
            'users'      => (int) Db::value('SELECT COUNT(*) FROM users WHERE deleted_at IS NULL'),
            'unverified' => (int) Db::value('SELECT COUNT(*) FROM users WHERE deleted_at IS NULL AND email_verified_at IS NULL'),
            'orgs'       => (int) Db::value('SELECT COUNT(*) FROM organizations WHERE deleted_at IS NULL'),
            'properties' => (int) Db::value('SELECT COUNT(*) FROM properties WHERE deleted_at IS NULL'),
            'live'       => (int) Db::value("SELECT COUNT(*) FROM properties WHERE deleted_at IS NULL AND status = 'live'"),
            'consents'   => (int) Db::value('SELECT COUNT(*) FROM consents'),
            // 'catalog' entfernt: die Zahl wurde nie gerendert und kostete
            // auf jedem Aufruf der Uebersicht einen COUNT(*) ueber 354 Zeilen.
            // Der Katalogzaehler steht auf /admin/catalog, wo die Filter
            // daneben auf dieselben Zahlen wirken.
            'sessions'   => (int) Db::value('SELECT COUNT(*) FROM sessions WHERE expires_at > :now', ['now' => Clock::now()]),
        ];
    }

    /**
     * Things that are wrong with this installation right now.
     *
     * @return list<array{level:string,label:string,detail:string}>
     */
    private function health(): array
    {
        $out = [];

        // First, because nothing else matters while it is true: bin/seed-demo
        // leaves accounts whose password is printed in the script and in the
        // documentation. On a reachable instance that is an open door, and the
        // door is an administrator one.
        $demo = Demo::liveAccounts();

        if ($demo !== []) {
            $out[] = [
                'level'  => 'error',
                'label'  => __('admin.health.demo_accounts'),
                'detail' => __('admin.health.demo_accounts_detail', ['accounts' => implode(', ', $demo)]),
            ];
        }

        $out[] = [
            'level'  => Settings::bool('mail_enabled') ? 'ok' : 'warn',
            'label'  => __('admin.health.mail'),
            'detail' => Settings::bool('mail_enabled')
                ? __('admin.health.mail_on')
                : __('admin.health.mail_off'),
        ];

        $out[] = [
            'level'  => Settings::imprintComplete() ? 'ok' : 'warn',
            'label'  => __('legal.imprint'),
            'detail' => Settings::imprintComplete()
                ? __('admin.health.imprint_ok')
                : __('admin.health.imprint_incomplete'),
        ];

        $pepper = Env::get('IP_HASH_PEPPER', '');
        $out[]  = [
            'level'  => ($pepper !== null && $pepper !== '') ? 'ok' : 'error',
            'label'  => __('admin.health.ip_pepper'),
            'detail' => ($pepper !== null && $pepper !== '')
                ? __('admin.health.ip_pepper_ok')
                : __('admin.health.ip_pepper_missing'),
        ];

        $redisOn = (string) Env::get('REDIS_HOST', '') !== '';
        $out[]   = [
            'level'  => 'ok',
            'label'  => __('admin.health.rate_limit'),
            'detail' => $redisOn ? __('admin.health.rate_limit_redis') : __('admin.health.rate_limit_db'),
        ];

        $lastWorker = Db::value('SELECT MAX(updated_at) FROM consent_stats_daily');
        $out[]      = [
            'level'  => 'info',
            'label'  => __('admin.health.worker'),
            'detail' => is_string($lastWorker)
                ? __('admin.health.worker_last_run', ['time' => $lastWorker])
                : __('admin.health.worker_never'),
        ];

        $out[] = [
            'level'  => 'info',
            'label'  => __('admin.health.environment'),
            'detail' => __('admin.health.environment_detail', [
                'env' => (string) Env::get('APP_ENV', 'prod'),
                'php' => PHP_VERSION,
            ]),
        ];

        return $out;
    }
}
