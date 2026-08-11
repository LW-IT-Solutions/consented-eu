<?php

declare(strict_types=1);

use Consented\Auth\Permission;
use Consented\Core\Icon;
use Consented\Core\Lang;
use Consented\Core\Str;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var list<array<string,mixed>> $members */
/** @var list<array<string,mixed>> $invitations */
/** @var list<string> $roles */
$base = '/properties/' . $property['public_id'];
?>
<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->t('property.members.title') ?></h1>
        <p class="page-head__sub"><?= $this->t('property.members.intro') ?></p>
    </div>
</div>

<?php if ($canManage): ?>
<div class="card mb-5">
    <div class="card__header"><span class="card__title"><?= $this->t('property.members.invite_title') ?></span></div>
    <form method="post" action="<?= $this->e(Url::to($base . '/members/invite')) ?>">
        <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
        <div class="card__body">
            <div class="row row--top">
                <div style="flex:2 1 260px">
                    <label class="label" for="email"><?= $this->t('common.email') ?></label>
                    <input class="input" type="email" id="email" name="email" required
                           placeholder="<?= $this->t('property.members.invite_placeholder') ?>" autocapitalize="none">
                </div>
                <div style="flex:1 1 180px">
                    <label class="label" for="role"><?= $this->t('property.members.role') ?></label>
                    <select class="select" id="role" name="role">
                        <?php foreach ($roles as $r): ?>
                            <option value="<?= $this->e($r) ?>" <?= $r === 'editor' ? 'selected' : '' ?>>
                                <?= $this->e(Permission::label($r)) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div style="flex:0 0 auto;padding-top:26px">
                    <button type="submit" class="btn btn--primary">
                        <?= Icon::render('user-plus', 17) ?> <?= $this->t('property.members.invite_button') ?>
                    </button>
                </div>
            </div>
            <p class="help mt-3">
                <?= $this->t('property.members.invite_help') ?>
            </p>
        </div>
    </form>
</div>
<?php endif; ?>

<div class="card mb-5">
    <div class="card__header">
        <span class="card__title"><?= $this->t('property.members.access_title') ?></span>
        <span class="small muted"><?= $this->t('property.members.person_count', ['count' => $this->number(count($members))]) ?></span>
    </div>
    <div class="table-wrap">
        <table class="table">
            <thead>
                <tr>
                    <th><?= $this->t('property.members.col_person') ?></th>
                    <th><?= $this->t('property.members.role') ?></th>
                    <th><?= $this->t('property.members.col_last_active') ?></th>
                    <th class="table__actions"><?= $this->t('common.action') ?></th>
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
                                    <span class="strong small" style="display:block"><?= $this->e($m['name']) ?></span>
                                    <span class="tiny muted"><?= $this->e($m['email']) ?></span>
                                </span>
                            </div>
                        </td>
                        <td>
                            <?php if ($canManage && $m['role'] !== 'owner' && $m['public_id'] !== ($currentUser?->publicId() ?? '')): ?>
                                <?php /* The submit button is always visible. It used to hide
                                         behind <noscript> while an onchange handler did the
                                         work — but the handler is an inline script and the
                                         CSP discards it, so with JavaScript enabled there
                                         was no way at all to change a role. Submitting a
                                         select on change is also hostile to keyboard users,
                                         who pass through every option on the way down. */ ?>
                                <form method="post" class="row" style="gap:var(--space-2);align-items:center"
                                      action="<?= $this->e(Url::to($base . '/members/' . $m['public_id'] . '/role')) ?>">
                                    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                                    <label class="visually-hidden" for="role-<?= $this->e($m['public_id']) ?>">
                                        <?= $this->t('property.members.role_for', ['name' => (string) $m['email']]) ?>
                                    </label>
                                    <select class="select" name="role" id="role-<?= $this->e($m['public_id']) ?>"
                                            style="min-height:36px;font-size:var(--text-xs);max-width:170px">
                                        <?php foreach ($roles as $r): ?>
                                            <option value="<?= $this->e($r) ?>" <?= $m['role'] === $r ? 'selected' : '' ?>>
                                                <?= $this->e(Permission::label($r)) ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <button type="submit" class="btn btn--sm btn--secondary"><?= $this->t('common.save') ?></button>
                                </form>
                            <?php else: ?>
                                <span class="badge<?= $m['role'] === 'owner' ? ' badge--info' : '' ?>">
                                    <?= $this->e(Permission::label((string) $m['role'])) ?>
                                </span>
                            <?php endif; ?>
                            <?php if (empty($m['direct_grant'])): ?>
                                <div class="tiny muted mt-2"><?= $this->t('property.members.via_organization') ?></div>
                            <?php endif; ?>
                        </td>
                        <td class="tiny muted"><?= $this->e($this->date($m['last_login_at'] ?? null)) ?></td>
                        <td class="table__actions">
                            <?php if ($canManage && $m['role'] !== 'owner' && $m['public_id'] !== ($currentUser?->publicId() ?? '')): ?>
                                <form method="post"
                                      action="<?= $this->e(Url::to($base . '/members/' . $m['public_id'] . '/remove')) ?>"
                                      data-confirm="<?= $this->e(Lang::get('property.members.confirm_remove')) ?>">
                                    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                                    <button type="submit" class="btn btn--ghost btn--sm" aria-label="<?= $this->t('property.members.remove_access') ?>">
                                        <?= Icon::render('trash', 16) ?>
                                    </button>
                                </form>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php if ($invitations !== []): ?>
<div class="card mb-5">
    <div class="card__header"><span class="card__title"><?= $this->t('property.members.invitations_title') ?></span></div>
    <div class="table-wrap">
        <table class="table">
            <thead>
                <tr>
                    <th><?= $this->t('property.members.col_email') ?></th>
                    <th><?= $this->t('property.members.role') ?></th>
                    <th><?= $this->t('property.members.col_expires') ?></th>
                    <th class="table__actions"><?= $this->t('common.action') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($invitations as $i): ?>
                    <tr>
                        <td class="small"><?= $this->e($i['email']) ?></td>
                        <td><span class="badge"><?= $this->e(Permission::label((string) $i['role'])) ?></span></td>
                        <td class="tiny muted"><?= $this->e($this->date((string) $i['expires_at'])) ?></td>
                        <td class="table__actions">
                            <?php if ($canManage): ?>
                                <form method="post"
                                      action="<?= $this->e(Url::to($base . '/invitations/' . $i['public_id'] . '/revoke')) ?>">
                                    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                                    <button type="submit" class="btn btn--ghost btn--sm"><?= $this->t('property.members.revoke') ?></button>
                                </form>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php endif; ?>

<div class="card">
    <div class="card__header"><span class="card__title"><?= $this->t('property.members.roles_title') ?></span></div>
    <div class="table-wrap">
        <table class="table compare">
            <thead>
                <tr>
                    <th><?= $this->t('common.action') ?></th>
                    <th><?= $this->t('property.members.role_owner') ?></th>
                    <th><?= $this->t('property.members.role_admin') ?></th>
                    <th><?= $this->t('property.members.role_editor') ?></th>
                    <th><?= $this->t('property.members.role_viewer') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $matrix = [
                    ['property.members.cap_delete_property', Permission::DELETE_PROPERTY],
                    ['property.members.cap_manage_members',  Permission::MANAGE_MEMBERS],
                    ['property.members.cap_edit_property',   Permission::EDIT_PROPERTY],
                    ['property.members.cap_publish',         Permission::PUBLISH_PROPERTY],
                    ['property.members.cap_view_analytics',  Permission::VIEW_ANALYTICS],
                    /*
                     * „Einwilligungsprotokoll exportieren" stand hier mit grünem
                     * Haken für drei Rollen. Es gibt keinen Export — kein
                     * Endpunkt, kein Content-Disposition, keine Zeile. Das Recht
                     * Permission::EXPORT_CONSENTS bleibt vergeben, aber diese
                     * Tabelle sagt dem Kunden, was er kann, und darf ihm nichts
                     * zusagen, was das Produkt nicht hat (CLAUDE.md Regel 7).
                     *
                     * Die Zeile kommt zurück, sobald entschieden ist, ob es den
                     * Export gibt — siehe docs/OPEN_QUESTIONS.md.
                     */
                ];
                foreach ($matrix as [$label, $ability]):
                ?>
                    <tr>
                        <th scope="row" style="font-weight:600;color:var(--text-strong);background:none;
                                   text-transform:none;letter-spacing:normal;font-size:var(--text-sm)">
                            <?= $this->t($label) ?>
                        </th>
                        <?php foreach (['owner', 'admin', 'editor', 'viewer'] as $r): ?>
                            <td>
                                <?php if (in_array($ability, Permission::abilitiesFor($r), true)): ?>
                                    <span style="color:var(--c-success-600)"><?= Icon::render('check', 17) ?></span>
                                    <span class="visually-hidden"><?= $this->t('common.yes') ?></span>
                                <?php else: ?>
                                    <span class="subtle">–</span>
                                    <span class="visually-hidden"><?= $this->t('common.no') ?></span>
                                <?php endif; ?>
                            </td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
