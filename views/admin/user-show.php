<?php

declare(strict_types=1);

use Consented\Auth\Permission;
use Consented\Core\Icon;
use Consented\Core\Lang;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var array<string,mixed> $account */
/** @var list<array<string,mixed>> $orgs */
/** @var list<array<string,mixed>> $properties */
/** @var list<array<string,mixed>> $invitations */
/** @var list<array<string,mixed>> $sessions */
$suspended = $account['suspended_at'] !== null;
$base      = '/admin/users/' . $account['public_id'];
?>
<div class="page-head">
    <div>
        <a class="tiny muted" href="<?= $this->e(Url::to('/admin/users')) ?>">
            ← <?= $this->t('admin.user.back_to_list') ?>
        </a>
        <h1 class="page-head__title"><?= $this->e($account['name']) ?></h1>
        <p class="page-head__sub break-all"><?= $this->e($account['email']) ?></p>
    </div>
    <div class="row row--tight">
        <?php if ((int) $account['is_admin'] === 1): ?>
            <span class="badge badge--accent"><?= $this->t('admin.users.badge_admin') ?></span>
        <?php endif; ?>
        <?php if ($account['email_verified_at'] === null): ?>
            <span class="badge badge--warning"><?= $this->t('admin.users.badge_unverified') ?></span>
        <?php else: ?>
            <span class="badge badge--success"><?= $this->t('admin.users.badge_verified') ?></span>
        <?php endif; ?>
        <?php if ($account['locked_until'] !== null): ?>
            <span class="badge badge--danger"><?= $this->t('admin.users.badge_locked') ?></span>
        <?php endif; ?>
        <?php if ($suspended): ?>
            <span class="badge badge--danger"><?= $this->t('admin.users.badge_suspended') ?></span>
        <?php endif; ?>
    </div>
</div>

<?php if ($suspended): ?>
    <div class="alert alert--danger mb-5">
        <span class="alert__icon"><?= Icon::render('lock', 18) ?></span>
        <div class="alert__body">
            <span class="alert__title">
                <?= $this->t('admin.user.suspended_since', ['date' => $this->date((string) $account['suspended_at'])]) ?>
            </span>
            <?php if ($account['suspended_reason'] !== null && $account['suspended_reason'] !== ''): ?>
                <?= $this->t('admin.user.suspended_reason') ?>: <?= $this->e($account['suspended_reason']) ?>
            <?php else: ?>
                <?= $this->t('admin.user.suspended_no_reason') ?>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<div class="grid grid--2 mb-5">
    <div class="card">
        <div class="card__header"><span class="card__title"><?= $this->t('admin.user.master_data') ?></span></div>
        <div class="table-wrap">
            <table class="table">
                <tbody>
                    <tr>
                        <td class="small muted nowrap"><?= $this->t('common.name') ?></td>
                        <td class="small"><?= $this->e($account['name']) ?></td>
                    </tr>
                    <tr>
                        <td class="small muted nowrap"><?= $this->t('common.email') ?></td>
                        <td class="small break-all"><?= $this->e($account['email']) ?></td>
                    </tr>
                    <tr>
                        <td class="small muted nowrap"><?= $this->t('admin.user.field_public_id') ?></td>
                        <td class="tiny mono break-all"><?= $this->e($account['public_id']) ?></td>
                    </tr>
                    <tr>
                        <td class="small muted nowrap"><?= $this->t('common.language') ?></td>
                        <td class="small mono"><?= $this->e($account['locale']) ?></td>
                    </tr>
                    <tr>
                        <td class="small muted nowrap"><?= $this->t('admin.user.field_registered') ?></td>
                        <td class="small tnum"><?= $this->e($this->date((string) $account['created_at'])) ?></td>
                    </tr>
                    <tr>
                        <td class="small muted nowrap"><?= $this->t('admin.user.field_terms_accepted') ?></td>
                        <td class="small tnum"><?= $this->e($this->date($account['terms_accepted_at'] ?? null)) ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card__header"><span class="card__title"><?= $this->t('admin.user.security_title') ?></span></div>
        <div class="table-wrap">
            <table class="table">
                <tbody>
                    <tr>
                        <td class="small muted nowrap"><?= $this->t('admin.user.field_verified') ?></td>
                        <td class="small tnum">
                            <?= $account['email_verified_at'] === null
                                ? $this->t('admin.user.not_verified')
                                : $this->e($this->date((string) $account['email_verified_at'])) ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="small muted nowrap"><?= $this->t('admin.user.field_admin') ?></td>
                        <td class="small">
                            <?= $this->t((int) $account['is_admin'] === 1 ? 'common.yes' : 'common.no') ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="small muted nowrap"><?= $this->t('admin.user.field_totp') ?></td>
                        <td class="small">
                            <?= $this->t((int) ($account['totp_enabled'] ?? 0) === 1
                                ? 'admin.user.totp_on'
                                : 'admin.user.totp_off') ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="small muted nowrap"><?= $this->t('admin.users.col_last_login') ?></td>
                        <td class="small tnum"><?= $this->e($this->date($account['last_login_at'] ?? null)) ?></td>
                    </tr>
                    <tr>
                        <td class="small muted nowrap"><?= $this->t('admin.user.field_failed_logins') ?></td>
                        <td class="small tnum"><?= $this->e((string) $account['failed_login_count']) ?></td>
                    </tr>
                    <tr>
                        <td class="small muted nowrap"><?= $this->t('admin.user.field_locked_until') ?></td>
                        <td class="small tnum"><?= $this->e($this->date($account['locked_until'] ?? null)) ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card__footer tiny muted"><?= $this->t('admin.user.secrets_note') ?></div>
    </div>
</div>

<div class="card mb-5">
    <div class="card__header">
        <span class="card__title"><?= $this->t('admin.user.actions_title') ?></span>
    </div>
    <div class="card__body">
        <div class="row row--top" style="gap:var(--space-5)">
            <div style="flex:1 1 300px">
                <p class="strong small mb-2"><?= $this->t('admin.user.credentials_title') ?></p>
                <div class="btn-group mb-3">
                    <?php if ($account['email_verified_at'] === null): ?>
                        <form method="post" action="<?= $this->e(Url::to($base . '/resend-verification')) ?>">
                            <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                            <button type="submit" class="btn btn--secondary btn--sm">
                                <?= Icon::render('mail', 16) ?> <?= $this->t('admin.user.resend_verification') ?>
                            </button>
                        </form>
                    <?php endif; ?>

                    <?php /* Die Adresse reist als verstecktes Feld mit, weil der
                             öffentliche Reset-Ablauf sie dort liest. Der Controller
                             vergleicht sie mit dem Konto aus der URL und lehnt ab,
                             wenn sie abweicht. */ ?>
                    <form method="post" action="<?= $this->e(Url::to($base . '/send-reset')) ?>"
                          data-confirm="<?= $this->e(Lang::get('admin.user.send_reset_confirm', [
                              'email' => (string) $account['email'],
                          ])) ?>">
                        <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                        <input type="hidden" name="email" value="<?= $this->e($account['email']) ?>">
                        <button type="submit" class="btn btn--secondary btn--sm">
                            <?= Icon::render('refresh', 16) ?> <?= $this->t('admin.user.send_reset') ?>
                        </button>
                    </form>
                </div>
                <p class="help mb-0"><?= $this->t('admin.user.credentials_help') ?></p>
            </div>

            <div style="flex:1 1 300px">
                <p class="strong small mb-2"><?= $this->t('admin.user.access_control_title') ?></p>
                <?php if ($suspended): ?>
                    <form method="post" action="<?= $this->e(Url::to($base . '/suspend')) ?>" class="mb-3"
                          data-confirm="<?= $this->e(Lang::get('admin.user.unsuspend_confirm', [
                              'email' => (string) $account['email'],
                          ])) ?>">
                        <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                        <button type="submit" class="btn btn--secondary btn--sm">
                            <?= Icon::render('check', 16) ?> <?= $this->t('admin.user.unsuspend') ?>
                        </button>
                    </form>
                <?php else: ?>
                    <form method="post" action="<?= $this->e(Url::to($base . '/suspend')) ?>" class="mb-3"
                          data-confirm="<?= $this->e(Lang::get('admin.user.suspend_confirm', [
                              'email' => (string) $account['email'],
                          ])) ?>">
                        <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                        <div class="field">
                            <label class="label" for="reason"><?= $this->t('admin.user.suspend_reason_label') ?></label>
                            <input class="input" type="text" id="reason" name="reason" maxlength="255"
                                   placeholder="<?= $this->t('admin.user.suspend_reason_placeholder') ?>">
                        </div>
                        <button type="submit" class="btn btn--danger btn--sm">
                            <?= Icon::render('lock', 16) ?> <?= $this->t('admin.user.suspend') ?>
                        </button>
                    </form>
                <?php endif; ?>
                <p class="help mb-0"><?= $this->t('admin.user.suspend_help') ?></p>
            </div>
        </div>
    </div>
    <div class="card__footer tiny muted"><?= $this->t('admin.user.no_impersonation') ?></div>
</div>

<div class="card mb-5">
    <div class="card__header">
        <span class="card__title"><?= $this->t('admin.user.orgs_title') ?></span>
    </div>
    <?php if ($orgs === []): ?>
        <div class="card__body"><p class="small muted mb-0"><?= $this->t('admin.user.orgs_empty') ?></p></div>
    <?php else: ?>
        <div class="table-wrap">
            <table class="table">
                <thead>
                    <tr>
                        <th><?= $this->t('admin.user.col_org') ?></th>
                        <th><?= $this->t('admin.user.col_role') ?></th>
                        <th><?= $this->t('admin.org.stat_properties') ?></th>
                        <th><?= $this->t('admin.user.col_member_since') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orgs as $o): ?>
                        <tr>
                            <td>
                                <a class="strong small" href="<?= $this->e(Url::to('/admin/orgs/' . $o['public_id'])) ?>">
                                    <?= $this->e($o['name']) ?>
                                </a>
                            </td>
                            <td>
                                <span class="badge<?= (string) $o['role'] === 'owner' ? ' badge--info' : '' ?>">
                                    <?= $this->e(Permission::label((string) $o['role'])) ?>
                                </span>
                                <?php if (!empty($o['is_owner'])): ?>
                                    <span class="badge badge--info"><?= $this->t('admin.user.badge_org_owner') ?></span>
                                <?php endif; ?>
                            </td>
                            <td class="tnum"><?= $this->e((string) $o['properties']) ?></td>
                            <td class="tiny muted tnum"><?= $this->e($this->date((string) $o['created_at'])) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
    <div class="card__footer tiny muted"><?= $this->t('admin.user.processor_note') ?></div>
</div>

<div class="card mb-5">
    <div class="card__header">
        <span class="card__title"><?= $this->t('admin.user.properties_title') ?></span>
    </div>
    <?php if ($properties === []): ?>
        <div class="card__body"><p class="small muted mb-0"><?= $this->t('admin.user.properties_empty') ?></p></div>
    <?php else: ?>
        <div class="table-wrap">
            <table class="table">
                <thead>
                    <tr>
                        <th><?= $this->t('admin.user.col_property') ?></th>
                        <th><?= $this->t('admin.user.col_org') ?></th>
                        <th><?= $this->t('admin.user.col_role') ?></th>
                        <th><?= $this->t('common.status') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($properties as $p): ?>
                        <tr>
                            <td>
                                <a class="strong small" href="<?= $this->e(Url::to('/properties/' . $p['public_id'])) ?>">
                                    <?= $this->e($p['name']) ?>
                                </a>
                            </td>
                            <td class="small">
                                <a href="<?= $this->e(Url::to('/admin/orgs/' . $p['org_public_id'])) ?>">
                                    <?= $this->e($p['org_name']) ?>
                                </a>
                            </td>
                            <td><span class="badge"><?= $this->e(Permission::label((string) $p['role'])) ?></span></td>
                            <td class="tiny muted"><?= $this->e((string) $p['status']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>

<div class="card mb-5">
    <div class="card__header">
        <span class="card__title"><?= $this->t('admin.user.invitations_title') ?></span>
    </div>
    <?php if ($invitations === []): ?>
        <div class="card__body"><p class="small muted mb-0"><?= $this->t('admin.user.invitations_empty') ?></p></div>
    <?php else: ?>
        <div class="table-wrap">
            <table class="table">
                <thead>
                    <tr>
                        <th><?= $this->t('admin.user.col_target') ?></th>
                        <th><?= $this->t('admin.user.col_role') ?></th>
                        <th><?= $this->t('admin.user.col_expires') ?></th>
                        <th class="table__actions"><?= $this->t('common.action') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($invitations as $i): ?>
                        <tr>
                            <td class="small">
                                <?= $this->e($i['property_name'] ?? $i['org_name'] ?? '—') ?>
                                <div class="tiny muted">
                                    <?= $this->t($i['property_name'] === null
                                        ? 'admin.org.target_org'
                                        : 'admin.org.target_property') ?>
                                </div>
                            </td>
                            <td><span class="badge"><?= $this->e(Permission::label((string) $i['role'])) ?></span></td>
                            <td class="tiny muted tnum"><?= $this->e($this->date((string) $i['expires_at'])) ?></td>
                            <td class="table__actions">
                                <form method="post"
                                      action="<?= $this->e(Url::to('/admin/invitations/' . $i['public_id'] . '/revoke')) ?>"
                                      data-confirm="<?= $this->e(Lang::get('admin.org.revoke_confirm', [
                                          'email' => (string) $i['email'],
                                      ])) ?>">
                                    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                                    <button type="submit" class="btn btn--ghost btn--sm">
                                        <?= $this->t('admin.org.revoke') ?>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>

<div class="card">
    <div class="card__header">
        <span class="card__title"><?= $this->t('admin.user.sessions_title') ?></span>
        <?php if ($sessions !== []): ?>
            <form method="post" action="<?= $this->e(Url::to($base . '/sessions/revoke')) ?>"
                  data-confirm="<?= $this->e(Lang::get('admin.user.sessions_revoke_confirm', [
                      'email' => (string) $account['email'],
                  ])) ?>">
                <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                <button type="submit" class="btn btn--danger btn--sm">
                    <?= Icon::render('logout', 15) ?> <?= $this->t('admin.user.sessions_revoke') ?>
                </button>
            </form>
        <?php endif; ?>
    </div>
    <?php if ($sessions === []): ?>
        <div class="card__body"><p class="small muted mb-0"><?= $this->t('admin.user.sessions_empty') ?></p></div>
    <?php else: ?>
        <div class="table-wrap">
            <table class="table">
                <thead>
                    <tr>
                        <th><?= $this->t('account.sessions.col_device') ?></th>
                        <th><?= $this->t('admin.user.col_ip_hash') ?></th>
                        <th><?= $this->t('account.sessions.col_last_seen') ?></th>
                        <th><?= $this->t('account.sessions.col_expires') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($sessions as $s): ?>
                        <?php
                        $family = trim((string) ($s['user_agent_family'] ?? ''));
                        $ipHash = (string) ($s['ip_hash'] ?? '');
                        ?>
                        <tr>
                            <td>
                                <span class="small"><?= $family !== ''
                                    ? $this->e($family)
                                    : $this->t('account.sessions.device_unknown') ?></span>
                                <?php if ((int) $s['remembered'] === 1): ?>
                                    <span class="badge"><?= $this->t('account.sessions.remembered') ?></span>
                                <?php endif; ?>
                            </td>
                            <?php /* Nur die ersten Stellen des HMAC. Genug, um zwei
                                     Sitzungen zu vergleichen, zu wenig, um daraus
                                     etwas über die Adresse zu erfahren. */ ?>
                            <td class="tiny mono muted">
                                <?= $ipHash === '' ? '—' : $this->e(substr($ipHash, 0, 12)) ?>
                            </td>
                            <td class="tiny muted tnum"><?= $this->e($this->date((string) $s['last_seen_at'])) ?></td>
                            <td class="tiny muted tnum"><?= $this->e($this->date((string) $s['expires_at'])) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
    <div class="card__footer tiny muted"><?= $this->t('admin.user.ip_note') ?></div>
</div>
