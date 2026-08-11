<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var list<array<string,mixed>> $properties */
/** @var list<array{level:string,text:string,href:string,label:string}> $alerts */
/** @var array{consents:int,accepts:int,rate:float,live:int} $totals */
?>
<div class="page-head">
    <div>
        <h1 class="page-head__title">
            <?= $this->t('dashboard.index.greeting', ['name' => $currentUser?->name() ?? '']) ?>
        </h1>
        <p class="page-head__sub">
            <?php if ($properties === []): ?>
                <?= $this->t('dashboard.index.sub_empty') ?>
            <?php else: ?>
                <?= $this->t('dashboard.index.sub_live', [
                    'live'  => $this->number($totals['live']),
                    'total' => $this->number(count($properties)),
                ]) ?>
            <?php endif; ?>
        </p>
    </div>
    <a class="btn btn--primary" href="<?= $this->e(Url::to('/properties/new')) ?>">
        <?= Icon::render('plus', 18) ?> <?= $this->t('property.action.new') ?>
    </a>
</div>

<?php if (!empty($needsVerify)): ?>
    <div class="alert alert--warning mb-5">
        <span class="alert__icon"><?= Icon::render('mail', 18) ?></span>
        <div class="alert__body">
            <div class="alert__title"><?= $this->t('dashboard.verify.title') ?></div>
            <?= $this->t('dashboard.verify.text') ?>
            <a href="<?= $this->e(Url::to('/verify-email')) ?>"><?= $this->t('dashboard.verify.link') ?></a>
        </div>
    </div>
<?php endif; ?>

<?php foreach ($alerts as $alert): ?>
    <div class="alert alert--<?= $this->e($alert['level']) ?> mb-3">
        <span class="alert__icon"><?= Icon::render($alert['level'] === 'warning' ? 'alert' : 'info', 18) ?></span>
        <div class="alert__body row row--between">
            <span><?= $this->e($alert['text']) ?></span>
            <a class="strong small" href="<?= $this->e(Url::to($alert['href'])) ?>">
                <?= $this->e($alert['label']) ?> →
            </a>
        </div>
    </div>
<?php endforeach; ?>

<?php if ($properties === []): ?>
    <div class="card mt-5">
        <div class="empty">
            <div class="empty__icon"><?= Icon::render('layers', 26) ?></div>
            <h2 class="empty__title"><?= $this->t('property.empty.title') ?></h2>
            <p class="empty__text">
                <?= $this->tr('dashboard.empty.text') ?>
            </p>
            <a class="btn btn--primary btn--lg" href="<?= $this->e(Url::to('/properties/new')) ?>">
                <?= Icon::render('plus', 18) ?> <?= $this->t('dashboard.empty.cta') ?>
            </a>
        </div>
    </div>
<?php else: ?>
    <div class="grid grid--4 mb-6">
        <div class="card stat">
            <div class="stat__label"><?= $this->t('dashboard.stat.consents_label') ?></div>
            <div class="stat__value"><?= $this->number($totals['consents']) ?></div>
            <div class="stat__meta"><?= $this->t('dashboard.stat.consents_meta') ?></div>
        </div>
        <div class="card stat">
            <div class="stat__label"><?= $this->t('dashboard.stat.rate_label') ?></div>
            <div class="stat__value">
                <?= $totals['consents'] > 0 ? $this->e(number_format($totals['rate'], 1, ',', '.')) . '&nbsp;%' : '—' ?>
            </div>
            <div class="stat__meta"><?= $this->t('dashboard.stat.rate_meta') ?></div>
        </div>
        <div class="card stat">
            <div class="stat__label"><?= $this->t('dashboard.stat.live_label') ?></div>
            <div class="stat__value"><?= $this->number($totals['live']) ?></div>
            <div class="stat__meta"><?= $this->t('dashboard.stat.live_meta') ?></div>
        </div>
        <div class="card stat">
            <div class="stat__label"><?= $this->t('dashboard.stat.cost_label') ?></div>
            <div class="stat__value"><?= $this->tr('dashboard.stat.cost_value') ?></div>
            <div class="stat__meta"><?= $this->t('dashboard.stat.cost_meta') ?></div>
        </div>
    </div>

    <h2 class="mb-4" style="font-size:var(--text-lg)"><?= $this->t('dashboard.index.properties_heading') ?></h2>

    <div class="grid grid--3">
        <?php foreach ($properties as $p): ?>
            <?php $this->include('partials/property-card', ['p' => $p]); ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
