<?php

declare(strict_types=1);

namespace Consented\Admin;

use Consented\Auth\PasswordResetController;
use Consented\Auth\User;
use Consented\Auth\VerificationController;
use Consented\Core\Audit;
use Consented\Core\Clock;
use Consented\Core\Controller;
use Consented\Core\Db;
use Consented\Core\Exception\HttpException;
use Consented\Core\Paginator;
use Consented\Core\RateLimiter;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\Sanitizer;
use Consented\Core\Session;
use Consented\Core\Str;

/**
 * Accounts and organisations, seen from the instance operator's side.
 *
 * Split off from AdminController because this is the part of the admin area
 * that looks at other people's data. Two rules shape every route below.
 *
 * There is no impersonation. Nothing here signs in as somebody else and no
 * route reveals or sets a password. The operator can start the ordinary reset
 * flow; the link then goes to the account's own address, where it belongs.
 *
 * And the operator is a processor, not a controller (Art. 28 GDPR). He may see
 * a customer's memberships and roles — that is what running the service
 * requires — but he does not change them. The write actions here are the ones
 * a processor legitimately holds: ending sessions, blocking an account,
 * pulling an invitation token that is still valid.
 */
final class AccountAdminController extends Controller
{
    /* ------------------------------------------------------------------ users */

    public function users(Request $request): Response
    {
        $query = trim((string) $request->input('q', ''));

        // The only dynamic part is a fixed fragment chosen by a condition; the
        // search term itself travels as a bound parameter.
        $where  = 'WHERE u.deleted_at IS NULL';
        $params = [];

        if ($query !== '') {
            $where .= ' AND (u.email LIKE :q OR u.name LIKE :q2)';
            $params['q']  = '%' . $query . '%';
            $params['q2'] = '%' . $query . '%';
        }

        $total = (int) Db::value('SELECT COUNT(*) FROM users u ' . $where, $params);
        $pager = Paginator::fromRequest($request, $total);

        // Columns are named one by one on purpose. `u.*` would carry
        // password_hash, totp_secret and recovery_codes into the view scope for
        // every row, where a later json_encode would put them on the page.
        $users = Db::all(
            'SELECT u.public_id, u.email, u.name, u.is_admin, u.email_verified_at,
                    u.last_login_at, u.locked_until, u.suspended_at,
                    (SELECT COUNT(*) FROM property_users pu WHERE pu.user_id = u.id) AS direct_properties,
                    (SELECT COUNT(*) FROM organization_members m WHERE m.user_id = u.id) AS orgs
               FROM users u ' . $where . '
              ORDER BY u.id DESC
              LIMIT :limit OFFSET :offset',
            $params + $pager->bindings()
        );

        return $this->view('admin/users', [
            'title'     => __('admin.users.title'),
            'activeNav' => 'admin.users',
            'users'     => $users,
            'query'     => $query,
            'pager'     => $pager,
        ], 'layouts/admin');
    }

    public function showUser(Request $request): Response
    {
        $account = $this->account($request);
        $userId  = (int) $account['id'];

        return $this->view('admin/user-show', [
            'title'       => __('admin.user.page_title', ['name' => (string) $account['email']]),
            'activeNav'   => 'admin.users',
            'account'     => $account,
            'orgs'        => $this->membershipsOf($userId),
            'properties'  => $this->propertyGrantsOf($userId),
            'invitations' => $this->openInvitationsFor((string) $account['email']),
            'sessions'    => $this->sessionsOf($userId),
        ], 'layouts/admin');
    }

    /**
     * Ends every session of one account.
     *
     * The operator has no way to change a password and no way to sign in as
     * somebody else, so this is his only lever when an account is reported as
     * compromised. Same mechanism as the "sign out everywhere" button in
     * /account, only aimed at a foreign account.
     */
    public function revokeSessions(Request $request): Response
    {
        $actor   = $this->requireUser();
        $account = $this->account($request);
        $userId  = (int) $account['id'];

        // Aimed at one's own account this would otherwise end the request that
        // is running it. The current session stays, exactly as it does in
        // LoginController::logoutOtherDevices.
        $keep = $userId === $actor->id() ? Session::instance()->currentId() : null;

        // Counted with the same predicate the delete uses, so the number in the
        // message is the number of sessions that actually ended — otherwise the
        // operator's own surviving session would be counted as revoked.
        $count = $keep === null
            ? (int) Db::value(
                'SELECT COUNT(*) FROM sessions WHERE user_id = :uid',
                ['uid' => $userId]
            )
            : (int) Db::value(
                'SELECT COUNT(*) FROM sessions WHERE user_id = :uid AND id <> :keep',
                ['uid' => $userId, 'keep' => $keep]
            );

        Session::logoutAllFor($userId, $keep);

        Audit::log(
            'admin.sessions_revoked',
            $actor->id(),
            null,
            null,
            'user',
            (string) $account['public_id'],
            ['sessions' => $count],
            $request->ip()
        );

        $this->flash($count > 0 ? 'success' : 'info', $count > 0
            ? __('flash.admin.sessions_revoked', ['count' => (string) $count, 'email' => (string) $account['email']])
            : __('flash.admin.sessions_none', ['email' => (string) $account['email']]));

        return $this->redirect('/admin/users/' . $account['public_id']);
    }

    /**
     * Suspends an account, or lifts the suspension again.
     *
     * Suspension is this instance's replacement for deleting a person. Deleting
     * releases the e-mail address and blanks the row, which leaves every audit
     * entry pointing at a shell, and for an organisation owner it is refused
     * outright because organizations.owner_user_id is RESTRICT. Suspending
     * takes the access away immediately, keeps the evidence intact and is
     * reversible — which matters, because the operator acts on a suspicion he
     * usually cannot verify himself.
     */
    public function suspend(Request $request): Response
    {
        $actor   = $this->requireUser();
        $account = $this->account($request);
        $userId  = (int) $account['id'];

        if ($userId === $actor->id()) {
            $this->flash('error', __('flash.admin.self_suspend'));

            return $this->redirect('/admin/users/' . $account['public_id']);
        }

        $suspend = $account['suspended_at'] === null;
        $reason  = Str::truncate(Sanitizer::text((string) $request->input('reason', '')), 255);

        $applied = Db::transaction(static function () use ($userId, $suspend, $reason): bool {
            // Re-read the flag under the lock: the row was loaded before the
            // transaction opened, so its copy may already be stale.
            $isAdmin = (int) Db::value(
                'SELECT is_admin FROM users WHERE id = :uid FOR UPDATE',
                ['uid' => $userId]
            ) === 1;

            if ($suspend && $isAdmin && !self::otherAdminsRemain($userId)) {
                return false;
            }

            Db::update('users', [
                'suspended_at'     => $suspend ? Clock::now() : null,
                'suspended_reason' => $suspend && $reason !== '' ? $reason : null,
                'updated_at'       => Clock::now(),
            ], ['id' => $userId]);

            // A suspension that leaves the open sessions running is not one:
            // the login check only bites on the next sign-in, and a session
            // cookie lives up to thirty days.
            if ($suspend) {
                Session::logoutAllFor($userId);
            }

            return true;
        });

        if ($applied !== true) {
            $this->flash('error', __('flash.admin.last_admin'));

            return $this->redirect('/admin/users/' . $account['public_id']);
        }

        Audit::log(
            $suspend ? 'admin.user_suspended' : 'admin.user_unsuspended',
            $actor->id(),
            null,
            null,
            'user',
            (string) $account['public_id'],
            $suspend ? ['reason' => $reason] : null,
            $request->ip()
        );

        $this->flash('success', __(
            $suspend ? 'flash.admin.user_suspended' : 'flash.admin.user_unsuspended',
            ['email' => (string) $account['email']]
        ));

        return $this->redirect('/admin/users/' . $account['public_id']);
    }

    /**
     * Issues a fresh verification link through the ordinary flow.
     *
     * Shares the rate-limit budget with the user's own resend button, so the
     * admin page cannot be turned into a way around it.
     */
    public function resendVerification(Request $request): Response
    {
        $actor   = $this->requireUser();
        $account = $this->account($request);

        if ($account['email_verified_at'] !== null) {
            $this->flash('info', __('flash.admin.already_verified', ['email' => (string) $account['email']]));

            return $this->redirect('/admin/users/' . $account['public_id']);
        }

        $target = User::findByPublicId((string) $account['public_id']);

        if ($target === null) {
            throw new HttpException(404);
        }

        $key = 'verify:resend:' . $target->id();

        if (RateLimiter::tooManyAttempts($key, 5)) {
            $this->flash('error', __('flash.admin.resend_throttled'));

            return $this->redirect('/admin/users/' . $account['public_id']);
        }

        RateLimiter::hit($key, 900);

        VerificationController::issueToken($target);

        Audit::log(
            'admin.verification_resent',
            $actor->id(),
            null,
            null,
            'user',
            $target->publicId(),
            null,
            $request->ip()
        );

        $this->flash('success', __('flash.admin.verification_resent', ['email' => $target->email()]));

        return $this->redirect('/admin/users/' . $account['public_id']);
    }

    /**
     * Starts the public password-reset flow for one account.
     *
     * Deliberately no second sending path: the request is handed to the
     * controller that owns the flow, so the token TTL, the invalidation of
     * older tokens, the rate limits and the mail are the ones the public form
     * produces. Its redirect is discarded — the operator belongs back on the
     * account page, not on /forgot-password.
     *
     * The form carries the address as a hidden field because that is where the
     * shared flow reads its input. It is not trusted: a value that does not
     * match the account in the URL is refused rather than sent to.
     */
    public function sendReset(Request $request): Response
    {
        $actor   = $this->requireUser();
        $account = $this->account($request);

        $posted = strtolower((string) $request->input('email', ''));

        if ($posted !== strtolower((string) $account['email'])) {
            throw new HttpException(422, __('error.reset_target_mismatch'));
        }

        $session  = Session::instance();
        $existing = $session->takeFlashes();

        (new PasswordResetController())->sendLink($request);

        // sendLink talks to the person who forgot their own password: it leaves
        // a "check your inbox" notice and parks the address in the session for
        // the /forgot-password screen. Neither belongs on an operator's screen,
        // and the address is a customer's — so both go again here, and the
        // notices that were already pending are put back.
        $session->takeFlashes();
        $session->forget('_pending_email');

        foreach ($existing as $flash) {
            $session->flash($flash['type'], $flash['message']);
        }

        Audit::log(
            'admin.password_reset_sent',
            $actor->id(),
            null,
            null,
            'user',
            (string) $account['public_id'],
            null,
            $request->ip()
        );

        $this->flash('success', __('flash.admin.reset_started', ['email' => (string) $account['email']]));

        return $this->redirect('/admin/users/' . $account['public_id']);
    }

    /* ---------------------------------------------------------- organisations */

    public function orgs(Request $request): Response
    {
        $query = trim((string) $request->input('q', ''));

        $from   = 'FROM organizations o LEFT JOIN users u ON u.id = o.owner_user_id WHERE o.deleted_at IS NULL';
        $params = [];

        if ($query !== '') {
            $from .= ' AND (o.name LIKE :q OR o.slug LIKE :q2 OR u.email LIKE :q3)';
            $params['q'] = $params['q2'] = $params['q3'] = '%' . $query . '%';
        }

        $total = (int) Db::value('SELECT COUNT(*) ' . $from, $params);
        $pager = Paginator::fromRequest($request, $total);

        $orgs = Db::all(
            'SELECT o.public_id, o.name, o.slug, o.country_code, o.created_at,
                    u.public_id AS owner_public_id, u.email AS owner_email, u.name AS owner_name,
                    (SELECT COUNT(*) FROM organization_members m WHERE m.org_id = o.id) AS members,
                    (SELECT COUNT(*) FROM properties p WHERE p.org_id = o.id AND p.deleted_at IS NULL) AS properties
             ' . $from . '
              ORDER BY o.name
              LIMIT :limit OFFSET :offset',
            $params + $pager->bindings()
        );

        return $this->view('admin/orgs', [
            'title'     => __('admin.orgs.title'),
            'activeNav' => 'admin.orgs',
            'orgs'      => $orgs,
            'query'     => $query,
            'pager'     => $pager,
        ], 'layouts/admin');
    }

    public function showOrg(Request $request): Response
    {
        $org = Db::first(
            'SELECT o.id, o.public_id, o.name, o.slug, o.legal_name, o.country_code,
                    o.created_at, o.updated_at,
                    u.public_id AS owner_public_id, u.email AS owner_email, u.name AS owner_name
               FROM organizations o
          LEFT JOIN users u ON u.id = o.owner_user_id
              WHERE o.public_id = :oid AND o.deleted_at IS NULL',
            ['oid' => $request->param('oid')]
        );

        if ($org === null) {
            throw new HttpException(404);
        }

        $orgId      = (int) $org['id'];
        $monthStart = gmdate('Y-m-01 00:00:00');

        $properties = Db::all(
            'SELECT p.public_id, p.name, p.status, p.config_version, p.last_consent_at,
                    (SELECT COUNT(*) FROM consents c
                      WHERE c.property_id = p.id AND c.created_at >= :from) AS consents_month
               FROM properties p
              WHERE p.org_id = :oid AND p.deleted_at IS NULL
              ORDER BY p.name',
            ['from' => $monthStart, 'oid' => $orgId]
        );

        $consentsMonth = 0;
        foreach ($properties as $property) {
            $consentsMonth += (int) $property['consents_month'];
        }

        return $this->view('admin/org-show', [
            'title'         => __('admin.org.page_title', ['name' => (string) $org['name']]),
            'activeNav'     => 'admin.orgs',
            'org'           => $org,
            'members'       => $this->membersOf($orgId),
            'properties'    => $properties,
            'invitations'   => $this->openInvitationsOf($orgId),
            'consentsMonth' => $consentsMonth,
            'monthStart'    => $monthStart,
        ], 'layouts/admin');
    }

    /**
     * Withdraws an invitation that has not been accepted yet.
     *
     * This is the one membership-adjacent write the operator does have, and the
     * line is deliberate: an accepted membership is the organisation's own
     * decision and stays untouched, but an outstanding invitation is a working
     * access link sitting in somebody's inbox. Revoking one takes nothing away
     * from anybody — it closes a door that has not been used.
     */
    public function revokeInvitation(Request $request): Response
    {
        $invitation = Db::first(
            'SELECT i.id, i.public_id, i.email, i.org_id, i.property_id,
                    COALESCE(o.public_id, po.public_id) AS org_public_id,
                    COALESCE(o.id, po.id) AS resolved_org_id
               FROM invitations i
          LEFT JOIN organizations o  ON o.id = i.org_id
          LEFT JOIN properties p     ON p.id = i.property_id
          LEFT JOIN organizations po ON po.id = p.org_id
              WHERE i.public_id = :iid
                AND i.accepted_at IS NULL
                AND i.revoked_at IS NULL',
            ['iid' => $request->param('iid')]
        );

        if ($invitation === null) {
            throw new HttpException(404);
        }

        Db::update('invitations', [
            'revoked_at' => Clock::now(),
            'updated_at' => Clock::now(),
        ], ['id' => $invitation['id']]);

        Audit::log(
            Audit::ACTION_INVITE_REVOKED,
            $this->requireUser()->id(),
            $invitation['resolved_org_id'] === null ? null : (int) $invitation['resolved_org_id'],
            $invitation['property_id'] === null ? null : (int) $invitation['property_id'],
            'invitation',
            (string) $invitation['email'],
            ['by' => 'instance_admin'],
            $request->ip()
        );

        $this->flash('success', __('flash.admin.invitation_revoked', ['email' => (string) $invitation['email']]));

        // Deterministic target instead of the Referer: the header is optional,
        // strippable and not something a redirect should depend on.
        return $this->redirect($invitation['org_public_id'] === null
            ? '/admin/orgs'
            : '/admin/orgs/' . $invitation['org_public_id']);
    }

    /* --------------------------------------------------------------- fetching */

    /**
     * One account by its public id.
     *
     * password_hash, totp_secret and recovery_codes are never in this list.
     * totp_enabled is — the flag says whether 2FA is on, the secret stays put.
     *
     * @return array<string,mixed>
     */
    private function account(Request $request): array
    {
        $row = Db::first(
            'SELECT id, public_id, email, name, locale, is_admin,
                    email_verified_at, totp_enabled, last_login_at, failed_login_count,
                    locked_until, suspended_at, suspended_reason,
                    terms_accepted_at, created_at, updated_at
               FROM users
              WHERE public_id = :uid AND deleted_at IS NULL',
            ['uid' => $request->param('uid')]
        );

        if ($row === null) {
            throw new HttpException(404);
        }

        return $row;
    }

    /** @return list<array<string,mixed>> */
    private function membershipsOf(int $userId): array
    {
        return Db::all(
            'SELECT o.public_id, o.name, m.role, m.created_at,
                    (o.owner_user_id = :uid) AS is_owner,
                    (SELECT COUNT(*) FROM properties p
                      WHERE p.org_id = o.id AND p.deleted_at IS NULL) AS properties
               FROM organization_members m
               JOIN organizations o ON o.id = m.org_id
              WHERE m.user_id = :uid2 AND o.deleted_at IS NULL
              ORDER BY o.name',
            ['uid' => $userId, 'uid2' => $userId]
        );
    }

    /** @return list<array<string,mixed>> */
    private function propertyGrantsOf(int $userId): array
    {
        return Db::all(
            'SELECT p.public_id, p.name, p.status, pu.role, pu.created_at,
                    o.name AS org_name, o.public_id AS org_public_id
               FROM property_users pu
               JOIN properties p    ON p.id = pu.property_id
               JOIN organizations o ON o.id = p.org_id
              WHERE pu.user_id = :uid AND p.deleted_at IS NULL
              ORDER BY o.name, p.name',
            ['uid' => $userId]
        );
    }

    /**
     * Invitations still open for one address.
     *
     * Keyed on the e-mail, not on a user id: an invitation is addressed to an
     * inbox and exists before, and independently of, any account.
     *
     * @return list<array<string,mixed>>
     */
    private function openInvitationsFor(string $email): array
    {
        return Db::all(
            'SELECT i.public_id, i.email, i.role, i.created_at, i.expires_at,
                    o.name AS org_name, p.name AS property_name
               FROM invitations i
          LEFT JOIN organizations o ON o.id = i.org_id
          LEFT JOIN properties p    ON p.id = i.property_id
              WHERE i.email = :email
                AND i.accepted_at IS NULL
                AND i.revoked_at IS NULL
                AND i.expires_at > :now
              ORDER BY i.created_at DESC',
            ['email' => $email, 'now' => Clock::now()]
        );
    }

    /**
     * Live sessions of one account.
     *
     * ip_hash comes along so the view can print a short prefix. The column is
     * an HMAC with a rotating pepper — there is no plain address anywhere in
     * this table, and the prefix is enough to tell two devices apart without
     * being enough to reconstruct anything.
     *
     * @return list<array<string,mixed>>
     */
    private function sessionsOf(int $userId): array
    {
        return Db::all(
            'SELECT public_id, user_agent_family, ip_hash, remembered,
                    last_seen_at, expires_at, created_at
               FROM sessions
              WHERE user_id = :uid AND expires_at > :now
              ORDER BY last_seen_at DESC',
            ['uid' => $userId, 'now' => Clock::now()]
        );
    }

    /** @return list<array<string,mixed>> */
    private function membersOf(int $orgId): array
    {
        return Db::all(
            'SELECT u.public_id, u.name, u.email, u.last_login_at, u.suspended_at,
                    m.role, m.created_at,
                    (o.owner_user_id = u.id) AS is_owner
               FROM organization_members m
               JOIN organizations o ON o.id = m.org_id
               JOIN users u         ON u.id = m.user_id
              WHERE m.org_id = :oid AND u.deleted_at IS NULL
              ORDER BY FIELD(m.role, \'owner\', \'admin\', \'member\'), u.name',
            ['oid' => $orgId]
        );
    }

    /**
     * Open invitations of an organisation, including those aimed at one of its
     * properties — from the operator's side both are outstanding access to the
     * same customer.
     *
     * @return list<array<string,mixed>>
     */
    private function openInvitationsOf(int $orgId): array
    {
        return Db::all(
            'SELECT i.public_id, i.email, i.role, i.created_at, i.expires_at,
                    p.name AS property_name, inviter.email AS invited_by_email
               FROM invitations i
          LEFT JOIN properties p  ON p.id = i.property_id
          LEFT JOIN users inviter ON inviter.id = i.invited_by
              WHERE (i.org_id = :oid OR p.org_id = :oid2)
                AND i.accepted_at IS NULL
                AND i.revoked_at IS NULL
                AND i.expires_at > :now
              ORDER BY i.created_at DESC',
            ['oid' => $orgId, 'oid2' => $orgId, 'now' => Clock::now()]
        );
    }

    /**
     * Is there at least one administrator left besides this one?
     *
     * The same guard AdminController applies before demoting or deleting,
     * repeated here because suspending the last administrator locks the
     * instance out of /admin just as thoroughly — and unlike a demotion, a
     * suspension cannot be undone from inside the application afterwards.
     *
     * Must run inside a transaction. The FOR UPDATE is the point: a plain COUNT
     * would let two administrators suspend each other at the same time, each
     * reading a count of two and each believing the other remains.
     */
    private static function otherAdminsRemain(int $exceptUserId): bool
    {
        $rows = Db::all(
            'SELECT id FROM users
              WHERE is_admin = 1 AND deleted_at IS NULL AND suspended_at IS NULL AND id <> :uid
              LIMIT 1
              FOR UPDATE',
            ['uid' => $exceptUserId]
        );

        return $rows !== [];
    }
}
