<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Project;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var list<array<string,mixed>> $entries */
/** @var list<array<string,mixed>> $counts */

// Defaults keep the template renderable from AdminController::catalog() too,
// which predates the filters and the pager and hands in fewer variables.
$pager      = $pager ?? null;
$category   = $category ?? '';
$pattern    = $pattern ?? '';
$active     = $active ?? '';
$categories = $categories ?? [];
$sources    = $sources ?? ['primary_vendor_doc', 'open_cookie_database', 'gvl', 'google_atp', 'own_scan', 'community'];

$byStatus = [];
foreach ($counts as $row) {
    $byStatus[(string) $row['review_status']] = (int) $row['n'];
}
$total = array_sum($byStatus);

$filters = [
    'q'        => $query,
    'status'   => $status,
    'source'   => $source,
    'category' => $category,
    'pattern'  => $pattern,
    'active'   => $active,
];
?>
<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->t('admin.catalog.title') ?></h1>
        <p class="page-head__sub">
            <?= $this->t('admin.catalog.sub', [
                'total'    => $this->number($total),
                'verified' => $this->number($byStatus['verified'] ?? 0),
            ]) ?>
        </p>
    </div>
    <a class="btn btn--primary" href="<?= $this->e(Url::to('/admin/catalog/new')) ?>">
        <?= Icon::render('plus', 17) ?> <?= $this->t('admin.catalog.new_entry') ?>
    </a>
</div>

<div class="alert alert--info mb-5">
    <span class="alert__icon"><?= Icon::render('info', 18) ?></span>
    <div class="alert__body">
        <?= $this->tr('admin.catalog.provenance_note') ?>
    </div>
</div>

<?php if ($stale > 0): ?>
    <div class="alert alert--warning mb-5">
        <span class="alert__icon"><?= Icon::render('clock', 18) ?></span>
        <div class="alert__body"><?= $this->t('admin.catalog.stale_note', ['count' => (string) $stale]) ?></div>
    </div>
<?php endif; ?>

<form method="get" action="<?= $this->e(Url::to('/admin/catalog')) ?>" class="card mb-5">
    <div class="card__body row">
        <input class="input" type="search" name="q" style="flex:1 1 220px"
               aria-label="<?= $this->t('common.search') ?>"
               placeholder="<?= $this->t('admin.catalog.search_placeholder') ?>" value="<?= $this->e($query) ?>">

        <select class="select" name="status" style="flex:0 1 170px" aria-label="<?= $this->t('common.status') ?>">
            <option value=""><?= $this->t('admin.catalog.all_status') ?></option>
            <?php foreach (['draft', 'verified', 'stale'] as $s): ?>
                <option value="<?= $this->e($s) ?>" <?= $status === $s ? 'selected' : '' ?>>
                    <?= $this->t('admin.catalog.status_' . $s) ?> (<?= $this->e((string) ($byStatus[$s] ?? 0)) ?>)
                </option>
            <?php endforeach; ?>
        </select>

        <select class="select" name="category" style="flex:0 1 160px"
                aria-label="<?= $this->t('admin.catalog.col_category') ?>">
            <option value=""><?= $this->t('admin.catalog.all_categories') ?></option>
            <?php foreach ($categories as $c): ?>
                <option value="<?= $this->e($c) ?>" <?= $category === $c ? 'selected' : '' ?>>
                    <?= $this->e($c) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <select class="select" name="pattern" style="flex:0 1 190px"
                aria-label="<?= $this->t('admin.catalog.filter_pattern') ?>">
            <option value=""><?= $this->t('admin.catalog.filter_pattern') ?></option>
            <option value="with" <?= $pattern === 'with' ? 'selected' : '' ?>>
                <?= $this->t('admin.catalog.filter_pattern_with') ?>
            </option>
            <option value="without" <?= $pattern === 'without' ? 'selected' : '' ?>>
                <?= $this->t('admin.catalog.filter_pattern_without') ?>
            </option>
        </select>

        <select class="select" name="source" style="flex:0 1 200px"
                aria-label="<?= $this->t('admin.catalog.col_source') ?>">
            <option value=""><?= $this->t('admin.catalog.all_sources') ?></option>
            <?php foreach ($sources as $src): ?>
                <option value="<?= $this->e($src) ?>" <?= $source === $src ? 'selected' : '' ?>>
                    <?= $this->e($src) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <select class="select" name="active" style="flex:0 1 150px"
                aria-label="<?= $this->t('admin.catalog.filter_active') ?>">
            <option value=""><?= $this->t('admin.catalog.filter_active') ?></option>
            <option value="1" <?= $active === '1' ? 'selected' : '' ?>><?= $this->t('common.active') ?></option>
            <option value="0" <?= $active === '0' ? 'selected' : '' ?>><?= $this->t('common.inactive') ?></option>
        </select>

        <button type="submit" class="btn btn--secondary">
            <?= Icon::render('search', 17) ?> <?= $this->t('common.search') ?>
        </button>
    </div>
</form>

<?php if ($entries === []): ?>
    <div class="card">
        <div class="card__body empty">
            <div class="empty__icon"><?= Icon::render('database', 24) ?></div>
            <p class="empty__title"><?= $this->t('admin.catalog.empty_title') ?></p>
            <p class="empty__text"><?= $this->t('admin.catalog.empty_text') ?></p>
        </div>
    </div>
<?php else: ?>
    <div class="card card--flush">
        <div class="table-wrap">
            <table class="table">
                <thead>
                    <tr>
                        <th><?= $this->t('admin.catalog.col_service') ?></th>
                        <th><?= $this->t('admin.catalog.col_category') ?></th>
                        <th><?= $this->t('admin.catalog.col_data') ?></th>
                        <th><?= $this->t('admin.catalog.col_source') ?></th>
                        <th><?= $this->t('common.status') ?></th>
                        <th class="table__actions"><?= $this->t('common.action') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($entries as $e): ?>
                        <?php
                        $cookies  = json_decode((string) $e['cookies'], true) ?: [];
                        $patterns = json_decode((string) $e['blocking_pattern'], true) ?: [];
                        $verified = $e['review_status'] === 'verified';
                        $detail   = '/admin/catalog/' . (string) $e['public_id'];
                        ?>
                        <tr>
                            <td>
                                <a class="strong small" style="display:block"
                                   href="<?= $this->e(Url::to($detail)) ?>"><?= $this->e($e['name']) ?></a>
                                <span class="tiny muted mono"><?= $this->e($e['dps_id']) ?></span>
                                <?php if ((int) $e['in_use'] > 0): ?>
                                    <span class="badge badge--info"><?= $this->e((string) $e['in_use']) ?>×</span>
                                <?php endif; ?>
                                <?php if ((int) $e['is_active'] !== 1): ?>
                                    <span class="badge badge--warning"><?= $this->t('common.inactive') ?></span>
                                <?php endif; ?>
                            </td>
                            <td><span class="badge"><?= $this->e($e['category']) ?></span></td>
                            <td class="tiny muted nowrap">
                                <?= $this->e((string) count($cookies)) ?> <?= $this->t('admin.catalog.cookies') ?><br>
                                <?php if ($patterns === []): ?>
                                    <span style="color:var(--c-warning-600)"><?= $this->t('admin.catalog.no_pattern') ?></span>
                                <?php elseif ($e['pattern_source_type'] === null): ?>
                                    <span style="color:var(--c-warning-600)"
                                          title="<?= $this->t('admin.catalog.pattern_unproven') ?>">
                                        <?= $this->e((string) count($patterns)) ?>
                                        <?= $this->t('admin.catalog.patterns') ?> ⚠
                                    </span>
                                <?php else: ?>
                                    <span title="<?= $this->e(implode(' · ', array_map('strval', $patterns))) ?>">
                                        <?= $this->e((string) count($patterns)) ?>
                                        <?= $this->t('admin.catalog.patterns') ?>
                                    </span>
                                    <?php if ($e['pattern_source_url']): ?>
                                        <a href="<?= $this->e((string) $e['pattern_source_url']) ?>"
                                           target="_blank" rel="noopener nofollow"
                                           title="<?= $this->t('admin.catalog.pattern_proven') ?>">✓</a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </td>
                            <td class="tiny muted">
                                <?= $this->e((string) ($e['source_type'] ?? '—')) ?><br>
                                <span class="mono"><?= $this->e((string) ($e['source_license'] ?? '—')) ?></span>
                                <?php if ($e['source_url']): ?>
                                    · <a href="<?= $this->e((string) $e['source_url']) ?>" target="_blank"
                                         rel="noopener nofollow"><?= Icon::render('external', 12) ?></a>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if ($verified): ?>
                                    <span class="badge badge--success"><?= $this->t('admin.catalog.status_verified') ?></span>
                                <?php elseif ($e['review_status'] === 'stale'): ?>
                                    <span class="badge badge--warning"><?= $this->t('admin.catalog.status_stale') ?></span>
                                <?php else: ?>
                                    <span class="badge"><?= $this->t('admin.catalog.status_draft') ?></span>
                                <?php endif; ?>
                            </td>
                            <td class="table__actions">
                                <div class="btn-group" style="justify-content:flex-end">
                                    <a class="btn btn--ghost btn--sm" href="<?= $this->e(Url::to($detail)) ?>"
                                       title="<?= $this->t('admin.catalog.action_show') ?>">
                                        <?= Icon::render('eye', 16) ?>
                                    </a>
                                    <a class="btn btn--ghost btn--sm" href="<?= $this->e(Url::to($detail . '/edit')) ?>"
                                       title="<?= $this->t('common.edit') ?>">
                                        <?= Icon::render('edit', 16) ?>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php $this->include('partials/pager', ['pager' => $pager, 'query' => $filters]); ?>
<?php endif; ?>

<p class="tiny muted mt-4"><?= $this->tr('admin.catalog.footer_note') ?></p>
<p class="tiny muted">
    <?= $this->tr('admin.catalog.license_note') ?>
    <a href="<?= $this->e(Project::CATALOG_LICENSE_URL) ?>" target="_blank" rel="noopener">
        <?= $this->e(Project::CATALOG_LICENSE) ?> <?= Icon::render('external', 11) ?>
    </a>
</p>
