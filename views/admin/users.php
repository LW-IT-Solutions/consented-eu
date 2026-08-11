<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Lang;
use Consented\Core\Str;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var list<array<string,mixed>> $users */
/** @var \Consented\Core\Paginator|null $pager */
$pager = $pager ?? null;
$total = $pager === null ? count($users) : $pager->total();
?>
<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->t('admin.users.title') ?></h1>
        <p class="page-head__sub"><?= $this->t('admin.users.subtitle', ['count' => $this->number($total)]) ?></p>
    </div>
</div>

<form method="get" action="<?= $this->e(Url::to('/admin/users')) ?>" class="card mb-5">
    <div class="card__body row">
        <input class="input" type="search" name="q" style="flex:1 1 260px"
               placeholder="<?= $this->t('admin.users.search_placeholder') ?>" value="<?= $this->e($query) ?>">
        <button type="submit" class="btn btn--secondary"><?= Icon::render('search', 17) ?> <?= $this->t('common.search') ?></button>
    </div>
</form>

<div class="card card--flush">
    <div class="table-wrap">
        <table class="table">
            <thead>
                <tr>
                    <th><?= $this->t('admin.users.col_user') ?></th>
                    <th><?= $this->t('common.status') ?></th>
                    <th><?= $this->t('admin.users.col_access') ?></th>
                    <th><?= $this->t('admin.users.col_last_login') ?></th>
                    <th class="table__actions"><?= $this->t('common.action') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $u): ?>
                    <tr>
                        <td>
                            <div class="row row--tight row--nowrap">
                                <span class="property-card__avatar"
                                      style="width:32px;height:32px;font-size:11px;border-radius:var(--radius-sm)">
                                    <?= $this->e(Str::initials((string) $u['name'])) ?>
                                </span>
                                <span style="min-width:0">
                                    <a class="strong small" style="display:block"
                                       href="<?= $this->e(Url::to('/admin/users/' . $u['public_id'])) ?>"
                                       title="<?= $this->t('admin.users.open_detail') ?>">
                                        <?= $this->e($u['name']) ?>
                                    </a>
                                    <span class="tiny muted break-all"><?= $this->e($u['email']) ?></span>
                                </span>
                            </div>
                        </td>
                        <td>
                            <?php if ((int) $u['is_admin'] === 1): ?>
                                <span class="badge badge--accent"><?= $this->t('admin.users.badge_admin') ?></span>
                            <?php endif; ?>
                            <?php if ($u['email_verified_at'] === null): ?>
                                <span class="badge badge--warning"><?= $this->t('admin.users.badge_unverified') ?></span>
                            <?php else: ?>
                                <span class="badge badge--success"><?= $this->t('admin.users.badge_verified') ?></span>
                            <?php endif; ?>
                            <?php if ($u['locked_until'] !== null): ?>
                                <span class="badge badge--danger"><?= $this->t('admin.users.badge_locked') ?></span>
                            <?php endif; ?>
                            <?php if (($u['suspended_at'] ?? null) !== null): ?>
                                <span class="badge badge--danger"><?= $this->t('admin.users.badge_suspended') ?></span>
                            <?php endif; ?>
                        </td>
                        <td class="tiny muted">
                            <?= $this->t('admin.users.access_summary', [
                                'orgs'       => (string) $u['orgs'],
                                'properties' => (string) $u['direct_properties'],
                            ]) ?>
                        </td>
                        <td class="tiny muted"><?= $this->e($this->date($u['last_login_at'] ?? null)) ?></td>
                        <td class="table__actions">
                            <div class="btn-group" style="justify-content:flex-end">
                                <?php if ($u['email_verified_at'] === null): ?>
                                    <form method="post"
                                          action="<?= $this->e(Url::to('/admin/users/' . $u['public_id'] . '/verify')) ?>">
                                        <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                                        <button type="submit" class="btn btn--ghost btn--sm"
                                                title="<?= $this->t('admin.users.action_verify') ?>">
                                            <?= Icon::render('check', 16) ?>
                                        </button>
                                    </form>
                                <?php endif; ?>

                                <form method="post"
                                      action="<?= $this->e(Url::to('/admin/users/' . $u['public_id'] . '/admin')) ?>">
                                    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                                    <button type="submit" class="btn btn--ghost btn--sm"
                                            title="<?= $this->t((int) $u['is_admin'] === 1 ? 'admin.users.action_demote' : 'admin.users.action_promote') ?>">
                                        <?= Icon::render((int) $u['is_admin'] === 1 ? 'lock' : 'shield', 16) ?>
                                    </button>
                                </form>

                                <form method="post"
                                      action="<?= $this->e(Url::to('/admin/users/' . $u['public_id'] . '/delete')) ?>"
                                      data-confirm="<?= $this->e(Lang::get('admin.users.confirm_delete', [
                                          'email' => (string) $u['email'],
                                      ])) ?>">
                                    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                                    <button type="submit" class="btn btn--ghost btn--sm" title="<?= $this->t('common.delete') ?>">
                                        <?= Icon::render('trash', 16) ?>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php $this->include('partials/pager', ['pager' => $pager, 'query' => ['q' => $query]]); ?>

<p class="tiny muted mt-4"><?= $this->tr('admin.users.delete_note') ?></p>
