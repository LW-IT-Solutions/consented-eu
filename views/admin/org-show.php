<?php

declare(strict_types=1);

use Consented\Auth\Permission;
use Consented\Core\Icon;
use Consented\Core\Lang;
use Consented\Core\Str;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var array<string,mixed> $org */
/** @var list<array<string,mixed>> $members */
/** @var list<array<string,mixed>> $properties */
/** @var list<array<string,mixed>> $invitations */
/** @var int $consentsMonth */
/** @var string $monthStart */
?>
<div class="page-head">
    <div>
        <a class="tiny muted" href="<?= $this->e(Url::to('/admin/orgs')) ?>">
            ← <?= $this->t('admin.org.back_to_list') ?>
        </a>
        <h1 class="page-head__title"><?= $this->e($org['name']) ?></h1>
        <p class="page-head__sub mono"><?= $this->e($org['slug']) ?></p>
    </div>
</div>

<div class="grid grid--3 mb-5">
    <div class="card stat">
        <div class="stat__label"><?= $this->t('admin.org.stat_members') ?></div>
        <div class="stat__value"><?= $this->number(count($members)) ?></div>
        <div class="stat__meta"><?= $this->t('admin.org.stat_members_meta') ?></div>
    </div>
    <div class="card stat">
        <div class="stat__label"><?= $this->t('admin.org.stat_properties') ?></div>
        <div class="stat__value"><?= $this->number(count($properties)) ?></div>
        <div class="stat__meta"><?= $this->t('admin.org.stat_properties_meta') ?></div>
    </div>
    <div class="card stat">
        <div class="stat__label"><?= $this->t('admin.org.stat_consents_month') ?></div>
        <div class="stat__value"><?= $this->number($consentsMonth) ?></div>
        <div class="stat__meta">
            <?= $this->t('admin.org.stat_consents_month_meta', ['date' => $this->date($monthStart, 'd.m.Y')]) ?>
        </div>
    </div>
</div>

<div class="card mb-5">
    <div class="card__header"><span class="card__title"><?= $this->t('admin.org.master_data') ?></span></div>
    <div class="table-wrap">
        <table class="table">
            <tbody>
                <tr>
                    <td class="small muted nowrap"><?= $this->t('common.name') ?></td>
                    <td class="small"><?= $this->e($org['name']) ?></td>
                </tr>
                <tr>
                    <td class="small muted nowrap"><?= $this->t('admin.org.field_legal_name') ?></td>
                    <td class="small">
                        <?= (string) $org['legal_name'] === ''
                            ? $this->t('common.none')
                            : $this->e($org['legal_name']) ?>
                    </td>
                </tr>
                <tr>
                    <td class="small muted nowrap"><?= $this->t('admin.org.field_public_id') ?></td>
                    <td class="tiny mono break-all"><?= $this->e($org['public_id']) ?></td>
                </tr>
                <tr>
                    <td class="small muted nowrap"><?= $this->t('admin.org.field_country') ?></td>
                    <td class="small mono">
                        <?= $org['country_code'] === null ? '—' : $this->e($org['country_code']) ?>
                    </td>
                </tr>
                <tr>
                    <td class="small muted nowrap"><?= $this->t('admin.org.field_owner') ?></td>
                    <td class="small">
                        <?php if ($org['owner_public_id'] === null): ?>
                            <span class="muted"><?= $this->t('admin.orgs.owner_missing') ?></span>
                        <?php else: ?>
                            <a href="<?= $this->e(Url::to('/admin/users/' . $org['owner_public_id'])) ?>">
                                <?= $this->e($org['owner_name']) ?>
                            </a>
                            <span class="tiny muted break-all">· <?= $this->e($org['owner_email']) ?></span>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td class="small muted nowrap"><?= $this->t('admin.org.field_created') ?></td>
                    <td class="small tnum"><?= $this->e($this->date((string) $org['created_at'])) ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="card mb-5">
    <div class="card__header">
        <span class="card__title"><?= $this->t('admin.org.members_title') ?></span>
        <span class="small muted"><?= $this->number(count($members)) ?></span>
    </div>
    <?php if ($members === []): ?>
        <div class="card__body"><p class="small muted mb-0"><?= $this->t('admin.org.members_empty') ?></p></div>
    <?php else: ?>
        <div class="table-wrap">
            <table class="table">
                <thead>
                    <tr>
                        <th><?= $this->t('admin.org.col_member') ?></th>
                        <th><?= $this->t('admin.org.col_role') ?></th>
                        <th><?= $this->t('admin.users.col_last_login') ?></th>
                        <th><?= $this->t('admin.org.col_joined') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($members as $m): ?>
                        <tr>
                            <td>
                                <div class="row row--tight row--nowrap">
                                    <span class="property-card__avatar"
                                          style="width:32px;height:32px;font-size:11px;border-radius:var(--radius-sm)">
                                        <?= $this->e(Str::initials((string) $m['name'])) ?>
                                    </span>
                                    <span style="min-width:0">
                                        <a class="strong small" style="display:block"
                                           href="<?= $this->e(Url::to('/admin/users/' . $m['public_id'])) ?>">
                                            <?= $this->e($m['name']) ?>
                                        </a>
                                        <span class="tiny muted break-all"><?= $this->e($m['email']) ?></span>
                                    </span>
                                </div>
                            </td>
                            <td>
                                <span class="badge<?= (string) $m['role'] === 'owner' ? ' badge--info' : '' ?>">
                                    <?= $this->e(Permission::label((string) $m['role'])) ?>
                                </span>
                                <?php if ($m['suspended_at'] !== null): ?>
                                    <span class="badge badge--danger"><?= $this->t('admin.users.badge_suspended') ?></span>
                                <?php endif; ?>
                            </td>
                            <td class="tiny muted tnum"><?= $this->e($this->date($m['last_login_at'] ?? null)) ?></td>
                            <td class="tiny muted tnum"><?= $this->e($this->date((string) $m['created_at'])) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
    <div class="card__footer tiny muted"><?= $this->t('admin.org.members_readonly') ?></div>
</div>

<div class="card mb-5">
    <div class="card__header"><span class="card__title"><?= $this->t('admin.org.properties_title') ?></span></div>
    <?php if ($properties === []): ?>
        <div class="card__body"><p class="small muted mb-0"><?= $this->t('admin.org.properties_empty') ?></p></div>
    <?php else: ?>
        <div class="table-wrap">
            <table class="table">
                <thead>
                    <tr>
                        <th><?= $this->t('admin.org.col_property') ?></th>
                        <th><?= $this->t('common.status') ?></th>
                        <th><?= $this->t('admin.org.col_consents_month') ?></th>
                        <th><?= $this->t('admin.org.col_last_consent') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($properties as $p): ?>
                        <tr>
                            <td>
                                <a class="strong small" href="<?= $this->e(Url::to('/properties/' . $p['public_id'])) ?>">
                                    <?= $this->e($p['name']) ?>
                                </a>
                                <div class="tiny muted">v<?= $this->e((string) $p['config_version']) ?></div>
                            </td>
                            <td><span class="badge"><?= $this->e((string) $p['status']) ?></span></td>
                            <td class="tnum strong"><?= $this->number((int) $p['consents_month']) ?></td>
                            <td class="tiny muted tnum"><?= $this->e($this->date($p['last_consent_at'] ?? null)) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>

<div class="card">
    <div class="card__header"><span class="card__title"><?= $this->t('admin.org.invitations_title') ?></span></div>
    <?php if ($invitations === []): ?>
        <div class="card__body"><p class="small muted mb-0"><?= $this->t('admin.org.invitations_empty') ?></p></div>
    <?php else: ?>
        <div class="table-wrap">
            <table class="table">
                <thead>
                    <tr>
                        <th><?= $this->t('common.email') ?></th>
                        <th><?= $this->t('admin.org.col_target') ?></th>
                        <th><?= $this->t('admin.org.col_role') ?></th>
                        <th><?= $this->t('admin.org.col_invited_by') ?></th>
                        <th><?= $this->t('admin.org.col_expires') ?></th>
                        <th class="table__actions"><?= $this->t('common.action') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($invitations as $i): ?>
                        <tr>
                            <td class="small break-all"><?= $this->e($i['email']) ?></td>
                            <td class="small">
                                <?php if ($i['property_name'] === null): ?>
                                    <?= $this->t('admin.org.target_org') ?>
                                <?php else: ?>
                                    <?= $this->e($i['property_name']) ?>
                                    <div class="tiny muted"><?= $this->t('admin.org.target_property') ?></div>
                                <?php endif; ?>
                            </td>
                            <td><span class="badge"><?= $this->e(Permission::label((string) $i['role'])) ?></span></td>
                            <td class="tiny muted break-all"><?= $this->e($i['invited_by_email'] ?? '—') ?></td>
                            <td class="tiny muted tnum"><?= $this->e($this->date((string) $i['expires_at'])) ?></td>
                            <td class="table__actions">
                                <form method="post"
                                      action="<?= $this->e(Url::to('/admin/invitations/' . $i['public_id'] . '/revoke')) ?>"
                                      data-confirm="<?= $this->e(Lang::get('admin.org.revoke_confirm', [
                                          'email' => (string) $i['email'],
                                      ])) ?>">
                                    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                                    <button type="submit" class="btn btn--ghost btn--sm">
                                        <?= Icon::render('x', 16) ?> <?= $this->t('admin.org.revoke') ?>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
    <div class="card__footer tiny muted"><?= $this->t('admin.org.revoke_note') ?></div>
</div>
