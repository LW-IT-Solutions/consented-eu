<?php

declare(strict_types=1);

namespace Consented\Core;

/**
 * Append-only audit trail.
 *
 * Every permission change and every published configuration lands here. Under
 * Art. 5(2) GDPR we have to be able to show who changed what and when, and
 * "the customer says they did not click accept" is a question this table has
 * to be able to answer months later.
 */
final class Audit
{
    public const ACTION_LOGIN             = 'auth.login';
    public const ACTION_LOGIN_FAILED      = 'auth.login_failed';
    public const ACTION_LOGOUT            = 'auth.logout';
    public const ACTION_REGISTER          = 'auth.register';
    public const ACTION_PASSWORD_RESET    = 'auth.password_reset';
    public const ACTION_EMAIL_VERIFIED    = 'auth.email_verified';
    // Eigene Aktion, nicht email_verified mitbenutzt: der Prüfpfad soll
    // unterscheiden, ob eine Adresse bestätigt oder ausgetauscht wurde. Der
    // Diff hält die alte und die neue Adresse.
    public const ACTION_EMAIL_CHANGED     = 'auth.email_changed';
    public const ACTION_EMAIL_CHANGE_REQUESTED = 'auth.email_change_requested';
    public const ACTION_PROPERTY_CREATED  = 'property.created';
    public const ACTION_PROPERTY_UPDATED  = 'property.updated';
    public const ACTION_PROPERTY_DELETED  = 'property.deleted';
    public const ACTION_CONFIG_PUBLISHED  = 'property.published';
    public const ACTION_MEMBER_INVITED    = 'member.invited';
    public const ACTION_MEMBER_JOINED     = 'member.joined';
    public const ACTION_MEMBER_ROLE       = 'member.role_changed';
    public const ACTION_MEMBER_REMOVED    = 'member.removed';
    public const ACTION_INVITE_REVOKED    = 'member.invite_revoked';
    public const ACTION_DOMAIN_ADDED      = 'domain.added';
    public const ACTION_DOMAIN_VERIFIED   = 'domain.verified';
    public const ACTION_DOMAIN_REMOVED    = 'domain.removed';

    /** @param array<string,mixed>|null $diff */
    public static function log(
        string $action,
        ?int $actorUserId = null,
        ?int $orgId = null,
        ?int $propertyId = null,
        ?string $subjectType = null,
        ?string $subjectId = null,
        ?array $diff = null,
        ?string $ip = null,
    ): void {
        try {
            Db::insert('audit_log', [
                'public_id'      => Uuid::v7(),
                'actor_user_id'  => $actorUserId,
                'org_id'         => $orgId,
                'property_id'    => $propertyId,
                'action'         => $action,
                'subject_type'   => $subjectType,
                'subject_id'     => $subjectId,
                'diff'           => $diff === null ? null : json_encode($diff, JSON_UNESCAPED_UNICODE),
                'ip_hash'        => $ip === null ? null : Hash::ip($ip),
                'created_at'     => Clock::now(),
            ]);
        } catch (\Throwable $e) {
            // An audit write must never take the request down with it, but a
            // silently missing audit trail is its own problem — so it goes to
            // the error log where monitoring can see it.
            error_log('[consented] audit write failed: ' . $e->getMessage());
        }
    }

    /**
     * Produces a compact before/after diff for the audit entry.
     *
     * @param  array<string,mixed> $before
     * @param  array<string,mixed> $after
     * @return array<string,array{from:mixed,to:mixed}>
     */
    public static function diff(array $before, array $after): array
    {
        $diff = [];

        foreach ($after as $key => $newValue) {
            $oldValue = $before[$key] ?? null;

            if ($oldValue === $newValue) {
                continue;
            }

            // Secrets never enter the audit log, only the fact they changed.
            if (in_array($key, ['password', 'password_hash', 'totp_secret', 'token_hash'], true)) {
                $diff[$key] = ['from' => '***', 'to' => '***'];
                continue;
            }

            $diff[$key] = ['from' => $oldValue, 'to' => $newValue];
        }

        return $diff;
    }
}
