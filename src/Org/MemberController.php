<?php

declare(strict_types=1);

namespace Consented\Org;

use Consented\Auth\Permission;
use Consented\Auth\User;
use Consented\Core\Audit;
use Consented\Core\Clock;
use Consented\Core\Db;
use Consented\Core\Exception\HttpException;
use Consented\Core\Hash;
use Consented\Core\Mail;
use Consented\Core\RateLimiter;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\Str;
use Consented\Core\Url;
use Consented\Core\Uuid;
use Consented\Property\PropertyPageController;

final class MemberController extends PropertyPageController
{
    private const INVITE_TTL = 604800; // 7 days

    public function index(Request $request): Response
    {
        $property = $this->property($request);

        return $this->propertyView('properties/members', $property, 'members', [
            'members'     => $this->members($property->id()),
            'invitations' => $this->pendingInvitations($property->id()),
            'roles'       => Permission::assignableRoles(),
        ]);
    }

    public function invite(Request $request): Response
    {
        $property = $this->property($request, Permission::MANAGE_MEMBERS);
        $actor    = $this->requireUser();

        $validator = $this->validate($request->post, [
            'email' => 'required|email',
            'role'  => 'required|in:admin,editor,viewer',
        ], $this->propertyUrl($property, '/members'));

        $email = strtolower($validator->string('email'));
        $role  = $validator->string('role');

        $key = 'invite:' . $property->id();
        if (RateLimiter::tooManyAttempts($key, 30)) {
            $this->flash('error', __('flash.member.invite_throttled'));

            return $this->redirect($this->propertyUrl($property, '/members'));
        }
        RateLimiter::hit($key, 3600);

        $existing = User::findByEmail($email);

        if ($existing !== null && Permission::roleFor($existing->id(), $property->id()) !== null) {
            $this->flash('info', __('flash.member.already_has_access'));

            return $this->redirect($this->propertyUrl($property, '/members'));
        }

        // Re-inviting replaces the outstanding invitation instead of stacking
        // a second valid token for the same address.
        Db::run(
            'UPDATE invitations SET revoked_at = :now
              WHERE property_id = :p AND email = :e AND accepted_at IS NULL AND revoked_at IS NULL',
            ['now' => Clock::now(), 'p' => $property->id(), 'e' => $email]
        );

        $token = Hash::randomToken(32);

        Db::insert('invitations', [
            'public_id'  => Uuid::v7(),
            'property_id' => $property->id(),
            'org_id'     => null,
            'email'      => $email,
            'role'       => $role,
            'token_hash' => Hash::token($token),
            'invited_by' => $actor->id(),
            'message'    => Str::truncate((string) $request->input('message', ''), 500),
            'expires_at' => Clock::in(self::INVITE_TTL),
            'created_at' => Clock::now(),
            'updated_at' => Clock::now(),
        ]);

        Mail::send(
            $email,
            __('mail.invitation.subject', [
                'inviter'  => $actor->name(),
                'property' => $property->name(),
            ]),
            Mail::layout(
                __('mail.invitation.heading'),
                // :role_description has to be substituted before :role —
                // Lang::get() replaces in array order, and ":role" matches the
                // start of ":role_description".
                __('mail.invitation.body', [
                    'role_description' => htmlspecialchars(Permission::description($role), ENT_QUOTES),
                    'inviter'          => htmlspecialchars($actor->name(), ENT_QUOTES),
                    'property'         => htmlspecialchars($property->name(), ENT_QUOTES),
                    'role'             => htmlspecialchars(Permission::label($role), ENT_QUOTES),
                ]),
                __('mail.invitation.cta'),
                Url::absolute('/invitations/' . $token),
                __('mail.invitation.footnote')
            )
        );

        Audit::log(
            Audit::ACTION_MEMBER_INVITED,
            $actor->id(),
            $property->orgId(),
            $property->id(),
            'invitation',
            $email,
            ['role' => $role],
            $request->ip()
        );

        $this->flash('success', __('flash.member.invitation_sent', ['email' => $email]));

        return $this->redirect($this->propertyUrl($property, '/members'));
    }

    public function changeRole(Request $request): Response
    {
        $property = $this->property($request, Permission::MANAGE_MEMBERS);
        $actor    = $this->requireUser();

        $target = User::findByPublicId($request->param('uid'));

        if ($target === null) {
            throw new HttpException(404);
        }

        $role = (string) $request->input('role', '');

        if (!in_array($role, Permission::assignableRoles(), true)) {
            throw new HttpException(422, __('error.unknown_role'));
        }

        $currentRole = Permission::roleFor($target->id(), $property->id());

        if ($currentRole === 'owner') {
            $this->flash('error', __('flash.member.owner_role_locked'));

            return $this->redirect($this->propertyUrl($property, '/members'));
        }

        if ($target->id() === $actor->id()) {
            $this->flash('error', __('flash.member.own_role_locked'));

            return $this->redirect($this->propertyUrl($property, '/members'));
        }

        $now = Clock::now();

        Db::run(
            'INSERT INTO property_users (property_id, user_id, role, created_at, updated_at)
                  VALUES (:p, :u, :r, :now, :now2)
             ON DUPLICATE KEY UPDATE role = VALUES(role), updated_at = VALUES(updated_at)',
            ['p' => $property->id(), 'u' => $target->id(), 'r' => $role, 'now' => $now, 'now2' => $now]
        );

        Permission::forget($target->id(), $property->id());

        Audit::log(
            Audit::ACTION_MEMBER_ROLE,
            $actor->id(),
            $property->orgId(),
            $property->id(),
            'user',
            $target->publicId(),
            ['from' => $currentRole, 'to' => $role],
            $request->ip()
        );

        $this->flash('success', __('flash.member.role_changed'));

        return $this->redirect($this->propertyUrl($property, '/members'));
    }

    public function remove(Request $request): Response
    {
        $property = $this->property($request, Permission::MANAGE_MEMBERS);
        $actor    = $this->requireUser();

        $target = User::findByPublicId($request->param('uid'));

        if ($target === null) {
            throw new HttpException(404);
        }

        if (Permission::roleFor($target->id(), $property->id()) === 'owner') {
            $this->flash('error', __('flash.member.owner_not_removable'));

            return $this->redirect($this->propertyUrl($property, '/members'));
        }

        Db::run(
            'DELETE FROM property_users WHERE property_id = :p AND user_id = :u',
            ['p' => $property->id(), 'u' => $target->id()]
        );

        Permission::forget($target->id(), $property->id());

        // An organisation member keeps implicit access through the org, so
        // removing only the property grant would look like it did nothing.
        if (Permission::roleFor($target->id(), $property->id()) !== null) {
            $this->flash('warning', __('flash.member.direct_access_removed'));
        } else {
            $this->flash('success', __('flash.member.access_revoked'));
        }

        Audit::log(
            Audit::ACTION_MEMBER_REMOVED,
            $actor->id(),
            $property->orgId(),
            $property->id(),
            'user',
            $target->publicId(),
            null,
            $request->ip()
        );

        return $this->redirect($this->propertyUrl($property, '/members'));
    }

    public function revokeInvitation(Request $request): Response
    {
        $property = $this->property($request, Permission::MANAGE_MEMBERS);

        $invitation = Db::first(
            'SELECT * FROM invitations WHERE property_id = :p AND public_id = :i',
            ['p' => $property->id(), 'i' => $request->param('iid')]
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
            $property->orgId(),
            $property->id(),
            'invitation',
            (string) $invitation['email'],
            null,
            $request->ip()
        );

        $this->flash('success', __('flash.member.invitation_revoked'));

        return $this->redirect($this->propertyUrl($property, '/members'));
    }

    /** @return list<array<string,mixed>> */
    private function members(int $propertyId): array
    {
        return Db::all(
            'SELECT u.public_id, u.name, u.email, u.last_login_at,
                    COALESCE(pu.role, CASE m.role
                        WHEN \'owner\'  THEN \'owner\'
                        WHEN \'admin\'  THEN \'admin\'
                        WHEN \'member\' THEN \'editor\'
                    END) AS role,
                    pu.role IS NOT NULL AS direct_grant
               FROM users u
          LEFT JOIN property_users pu ON pu.user_id = u.id AND pu.property_id = :pid
          LEFT JOIN organization_members m
                 ON m.user_id = u.id
                AND m.org_id = (SELECT org_id FROM properties WHERE id = :pid2)
              WHERE u.deleted_at IS NULL
                AND (pu.id IS NOT NULL OR m.id IS NOT NULL)
              ORDER BY FIELD(COALESCE(pu.role, m.role), \'owner\', \'admin\', \'editor\', \'member\', \'viewer\'), u.name',
            ['pid' => $propertyId, 'pid2' => $propertyId]
        );
    }

    /** @return list<array<string,mixed>> */
    private function pendingInvitations(int $propertyId): array
    {
        return Db::all(
            'SELECT i.*, u.name AS invited_by_name
               FROM invitations i
          LEFT JOIN users u ON u.id = i.invited_by
              WHERE i.property_id = :p
                AND i.accepted_at IS NULL
                AND i.revoked_at IS NULL
                AND i.expires_at > :now
              ORDER BY i.created_at DESC',
            ['p' => $propertyId, 'now' => Clock::now()]
        );
    }
}
