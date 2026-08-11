<?php

declare(strict_types=1);

namespace Consented\Org;

use Consented\Auth\Permission;
use Consented\Auth\User;
use Consented\Core\Audit;
use Consented\Core\Clock;
use Consented\Core\Controller;
use Consented\Core\Db;
use Consented\Core\Hash;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\Session;
use Consented\Property\Property;

final class InvitationController extends Controller
{
    public function show(Request $request): Response
    {
        $invitation = $this->lookup($request->param('token'));

        if ($invitation === null) {
            return $this->view('invitations/invalid', [
                'title' => __('invite.invalid.page_title'),
            ], 'layouts/auth');
        }

        $property = $invitation['property_id'] === null
            ? null
            : Property::find((int) $invitation['property_id']);

        $user = $this->user();

        return $this->view('invitations/show', [
            'title'      => __('invite.show.page_title'),
            'invitation' => $invitation,
            'property'   => $property,
            'roleLabel'  => Permission::label((string) $invitation['role']),
            'roleInfo'   => Permission::description((string) $invitation['role']),
            'token'      => $request->param('token'),
            // Accepting with the wrong account silently would give the wrong
            // person access, so the mismatch is surfaced instead.
            'mismatch'   => $user !== null && $user->email() !== $invitation['email'],
            'needsLogin' => $user === null,
        ], 'layouts/auth');
    }

    public function accept(Request $request): Response
    {
        $token      = $request->param('token');
        $invitation = $this->lookup($token);

        if ($invitation === null) {
            $this->flash('error', __('flash.invite.expired'));

            return $this->redirect('/login');
        }

        $user = $this->user();

        if ($user === null) {
            // Send them through registration or login, then straight back here.
            Session::instance()->put('_intended', '/invitations/' . $token);

            $existing = User::findByEmail((string) $invitation['email']);

            $this->flash(
                'info',
                $existing === null
                    ? __('flash.invite.register_first')
                    : __('flash.invite.login_first')
            );

            return $this->redirect($existing === null ? '/register' : '/login');
        }

        if ($user->email() !== $invitation['email']) {
            $this->flash(
                'error',
                __('flash.invite.wrong_account', ['email' => (string) $invitation['email']])
            );

            return $this->redirect('/dashboard');
        }

        $propertyId = $invitation['property_id'] === null ? null : (int) $invitation['property_id'];
        $property   = $propertyId === null ? null : Property::find($propertyId);

        if ($property === null) {
            $this->flash('error', __('flash.invite.property_gone'));

            return $this->redirect('/dashboard');
        }

        Db::transaction(function () use ($invitation, $user, $property): void {
            $now = Clock::now();

            Db::run(
                'INSERT INTO property_users (property_id, user_id, role, created_at, updated_at)
                      VALUES (:p, :u, :r, :now, :now2)
                 ON DUPLICATE KEY UPDATE role = VALUES(role), updated_at = VALUES(updated_at)',
                [
                    'p' => $property->id(), 'u' => $user->id(),
                    'r' => (string) $invitation['role'], 'now' => $now, 'now2' => $now,
                ]
            );

            Db::update('invitations', [
                'accepted_at' => $now,
                'updated_at'  => $now,
            ], ['id' => $invitation['id']]);
        });

        Permission::forget($user->id());

        // Accepting an invitation proves control of the mailbox, which is the
        // same thing the verification mail proves.
        $user->markVerified();

        Audit::log(
            Audit::ACTION_MEMBER_JOINED,
            $user->id(),
            $property->orgId(),
            $property->id(),
            'user',
            $user->publicId(),
            ['role' => $invitation['role']],
            $request->ip()
        );

        $this->flash('success', __('flash.invite.accepted', ['property' => $property->name()]));

        return $this->redirect('/properties/' . $property->publicId());
    }

    /** @return array<string,mixed>|null */
    private function lookup(string $token): ?array
    {
        if ($token === '') {
            return null;
        }

        $row = Db::first(
            'SELECT * FROM invitations WHERE token_hash = :h LIMIT 1',
            ['h' => Hash::token($token)]
        );

        if ($row === null) {
            return null;
        }

        if ($row['accepted_at'] !== null || $row['revoked_at'] !== null) {
            return null;
        }

        if (Clock::isPast((string) $row['expires_at'])) {
            return null;
        }

        return $row;
    }
}
