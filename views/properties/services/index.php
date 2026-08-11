<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var array<string,mixed> $property */
/** @var list<array<string,mixed>> $services */
/** @var list<array<string,mixed>> $resolved */
$base = '/properties/' . $property['public_id'];

$byId = [];
foreach ($resolved as $i => $r) {
    $byId[$i] = $r;
}
?>
<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->t('property.services.title') ?></h1>
        <p class="page-head__sub">
            <?= $this->t('property.services.subtitle') ?>
        </p>
    </div>
    <?php if ($canEdit): ?>
        <div class="btn-group">
            <a class="btn btn--secondary" href="<?= $this->e(Url::to($base . '/services/custom')) ?>">
                <?= Icon::render('plus', 17) ?> <?= $this->t('property.services.custom_service') ?>
            </a>
            <a class="btn btn--primary" href="<?= $this->e(Url::to($base . '/services/catalog')) ?>">
                <?= Icon::render('search', 17) ?> <?= $this->t('property.services.choose_from_catalog') ?>
            </a>
        </div>
    <?php endif; ?>
</div>

<?php if ($services === []): ?>
    <div class="card">
        <div class="empty">
            <div class="empty__icon"><?= Icon::render('database', 26) ?></div>
            <h2 class="empty__title"><?= $this->t('property.services.empty_title') ?></h2>
            <p class="empty__text">
                <?= $this->t('property.services.empty_text') ?>
            </p>
            <a class="btn btn--primary" href="<?= $this->e(Url::to($base . '/services/catalog')) ?>">
                <?= $this->t('property.services.empty_cta') ?>
            </a>
        </div>
    </div>
<?php else: ?>
    <div class="card card--flush">
        <div class="table-wrap">
            <table class="table">
                <thead>
                    <tr>
                        <th><?= $this->t('property.services.col_service') ?></th>
                        <th><?= $this->t('property.services.category') ?></th>
                        <th><?= $this->t('property.services.col_cookies') ?></th>
                        <th><?= $this->t('property.services.col_blocking') ?></th>
                        <th><?= $this->t('property.services.col_origin') ?></th>
                        <th class="table__actions"><?= $this->t('common.action') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($services as $i => $s): ?>
                        <?php $r = $byId[$i] ?? []; ?>
                        <tr>
                            <td>
                                <div class="strong"><?= $this->e($r['name'] ?? __('property.services.unnamed')) ?></div>
                                <div class="tiny muted">
                                    <?= $this->e($r['provider'] ?? '') ?>
                                    <?php if (!empty($r['thirdCountry'])): ?>
                                        · <span style="color:var(--c-warning-600)"><?= $this->t('property.services.third_country') ?><?php
                                            if (!empty($r['providerCountry'])) {
                                                echo ' (' . $this->e($r['providerCountry']) . ')';
                                            } ?></span>
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td>
                                <span class="badge<?= (int) $s['is_essential'] === 1 ? ' badge--info' : '' ?>">
                                    <?= $this->e($s['category_key']) ?>
                                </span>
                                <?php if ((int) $s['is_essential'] === 1): ?>
                                    <div class="tiny muted mt-2"><?= $this->t('property.services.not_deselectable') ?></div>
                                <?php endif; ?>
                            </td>
                            <td class="tnum"><?= $this->e((string) count($r['cookies'] ?? [])) ?></td>
                            <td>
                                <?php if (($r['patterns'] ?? []) === []): ?>
                                    <span class="tiny subtle"><?= $this->t('property.services.no_pattern') ?></span>
                                <?php else: ?>
                                    <span class="badge badge--success">
                                        <?= $this->t('property.services.pattern_count', ['count' => count($r['patterns'])]) ?>
                                    </span>
                                <?php endif; ?>
                            </td>
                            <td class="tiny muted">
                                <?= (int) $s['is_custom'] === 1
                                    ? $this->t('property.services.origin_custom')
                                    : $this->t('property.services.origin_catalog') ?>
                            </td>
                            <td class="table__actions">
                                <?php if ($canEdit): ?>
                                    <div class="btn-group">
                                        <a class="btn btn--ghost btn--sm"
                                           href="<?= $this->e(Url::to($base . '/services/' . $s['public_id'] . '/edit')) ?>"
                                           aria-label="<?= $this->t('common.edit') ?>"><?= Icon::render('edit', 16) ?></a>
                                        <form method="post"
                                              action="<?= $this->e(Url::to($base . '/services/' . $s['public_id'] . '/delete')) ?>"
                                              data-confirm="<?= $this->t('property.services.confirm_delete') ?>">
                                            <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                                            <button type="submit" class="btn btn--ghost btn--sm" aria-label="<?= $this->t('common.remove') ?>">
                                                <?= Icon::render('trash', 16) ?>
                                            </button>
                                        </form>
                                    </div>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="alert alert--info mt-5">
        <span class="alert__icon"><?= Icon::render('info', 18) ?></span>
        <div class="alert__body">
            <?= $this->tr('property.services.publish_hint', ['url' => Url::to($base)]) ?>
        </div>
    </div>
<?php endif; ?>
