<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var list<array<string,mixed>> $properties */
/** @var \Consented\Core\Paginator $pager */
/** @var array<string,mixed> $filters */
/** @var string $query */
/** @var string $status */
/** @var string $deleted */
/** @var string $sort */
$filtered = $query !== '' || $status !== '' || $deleted !== '';
?>
<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->t('admin.properties.title') ?></h1>
        <p class="page-head__sub"><?= $this->t('admin.properties.subtitle') ?></p>
    </div>
</div>

<form method="get" action="<?= $this->e(Url::to('/admin/properties')) ?>" class="card mb-5">
    <div class="card__body row">
        <input class="input" type="search" name="q" style="flex:1 1 240px"
               placeholder="<?= $this->t('admin.properties.search_placeholder') ?>"
               value="<?= $this->e($query) ?>">

        <select class="select" name="status" style="flex:0 1 170px"
                aria-label="<?= $this->t('common.status') ?>">
            <option value=""><?= $this->t('admin.properties.all_status') ?></option>
            <?php foreach (['draft', 'live', 'paused'] as $option): ?>
                <option value="<?= $this->e($option) ?>" <?= $status === $option ? 'selected' : '' ?>>
                    <?= $this->t('admin.properties.status_' . $option) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <select class="select" name="deleted" style="flex:0 1 180px"
                aria-label="<?= $this->t('admin.properties.deleted_label') ?>">
            <?php foreach (['' => 'deleted_active', 'with' => 'deleted_with', 'only' => 'deleted_only'] as $value => $key): ?>
                <option value="<?= $this->e($value) ?>" <?= $deleted === $value ? 'selected' : '' ?>>
                    <?= $this->t('admin.properties.' . $key) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <select class="select" name="sort" style="flex:0 1 200px"
                aria-label="<?= $this->t('admin.properties.sort_label') ?>">
            <?php foreach (['created', 'consents', 'active', 'name'] as $option): ?>
                <option value="<?= $this->e($option) ?>" <?= $sort === $option ? 'selected' : '' ?>>
                    <?= $this->t('admin.properties.sort_' . $option) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button type="submit" class="btn btn--secondary">
            <?= Icon::render('search', 17) ?> <?= $this->t('common.search') ?>
        </button>
    </div>
</form>

<?php if ($properties === []): ?>
    <div class="card">
        <div class="empty">
            <div class="empty__icon"><?= Icon::render('layers', 26) ?></div>
            <h2 class="empty__title">
                <?= $filtered
                    ? $this->t('admin.properties.no_match_title')
                    : $this->t('admin.properties.empty_title') ?>
            </h2>
            <p class="empty__text">
                <?= $filtered
                    ? $this->t('admin.properties.no_match_text')
                    : $this->t('admin.properties.empty_text') ?>
            </p>
            <?php if ($filtered): ?>
                <a class="btn btn--secondary" href="<?= $this->e(Url::to('/admin/properties')) ?>">
                    <?= $this->t('admin.properties.reset_filter') ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
<?php else: ?>
    <div class="card card--flush">
        <div class="table-wrap">
            <table class="table">
                <thead>
                    <tr>
                        <th><?= $this->t('admin.properties.col_property') ?></th>
                        <th><?= $this->t('admin.properties.col_org') ?></th>
                        <th><?= $this->t('common.status') ?></th>
                        <th><?= $this->t('admin.properties.col_domains') ?></th>
                        <th><?= $this->t('admin.properties.col_services') ?></th>
                        <th><?= $this->t('admin.properties.col_consents') ?></th>
                        <th><?= $this->t('admin.properties.col_last') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($properties as $p): ?>
                        <tr>
                            <td>
                                <a class="strong small"
                                   href="<?= $this->e(Url::to('/admin/properties/' . $p['public_id'])) ?>">
                                    <?= $this->e($p['name']) ?>
                                </a>
                                <div class="tiny muted break-all">
                                    <?= $this->e($p['primary_domain'] ?? $p['public_id']) ?>
                                </div>
                            </td>
                            <td>
                                <a class="small"
                                   href="<?= $this->e(Url::to('/admin/orgs/' . $p['org_public_id'])) ?>">
                                    <?= $this->e($p['org_name']) ?>
                                </a>
                                <div class="tiny muted break-all"><?= $this->e($p['owner_email'] ?? '—') ?></div>
                            </td>
                            <td>
                                <?php if ($p['deleted_at'] !== null): ?>
                                    <span class="badge badge--danger"><?= $this->t('admin.properties.badge_deleted') ?></span>
                                <?php elseif ((string) $p['status'] === 'paused'): ?>
                                    <span class="badge badge--warning"><?= $this->t('admin.properties.status_paused') ?></span>
                                <?php elseif ((int) $p['config_version'] === 0): ?>
                                    <span class="badge"><?= $this->t('admin.properties.status_draft') ?></span>
                                <?php elseif ($p['first_consent_at'] === null): ?>
                                    <span class="badge badge--warning"><?= $this->t('admin.properties.badge_not_integrated') ?></span>
                                <?php else: ?>
                                    <span class="badge badge--success"><?= $this->t('admin.properties.status_live') ?></span>
                                <?php endif; ?>
                                <div class="tiny muted mt-2">v<?= $this->e((string) $p['config_version']) ?></div>
                            </td>
                            <td class="tiny muted nowrap">
                                <?= $this->t('admin.properties.domains_verified', [
                                    'verified' => (string) $p['domains_verified'],
                                    'total'    => (string) $p['domains'],
                                ]) ?>
                            </td>
                            <td class="tnum"><?= $this->e((string) $p['services']) ?></td>
                            <td class="tnum strong"><?= $this->number((int) $p['consents']) ?></td>
                            <td class="tiny muted"><?= $this->e($this->date($p['last_consent_at'] ?? null)) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php $this->include('partials/pager', ['pager' => $pager, 'query' => $filters]); ?>
<?php endif; ?>

<p class="tiny muted mt-4"><?= $this->t('admin.properties.scope_note') ?></p>
