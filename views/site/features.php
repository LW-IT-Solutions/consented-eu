<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */

$shipped = [
    'banner',
    'blocking',
    'consent_mode',
    'i18n',
    'services',
    'design',
    'log',
    'versioning',
    'domain',
    'roles',
    'rights',
    'selfhosting',
];

$planned = [
    'tcf',
    'scanner',
    'analytics',
    'ab_tests',
    'gpp',
    'twofa',
];
?>
<section class="section">
    <div class="container container--narrow">
        <div class="section__head">
            <p class="eyebrow" style="justify-content:center"><?= $this->t('site.features.eyebrow') ?></p>
            <h1 class="mt-3" style="font-size:var(--text-2xl)"><?= $this->t('site.features.title') ?></h1>
            <p class="lead">
                <?= $this->t('site.features.lead') ?>
            </p>
        </div>

        <h2 class="mb-4" style="font-size:var(--text-lg)">
            <span style="color:var(--c-success-600)"><?= Icon::render('check', 20) ?></span> <?= $this->t('site.features.shipped_heading') ?>
        </h2>
        <div class="card card--flush mb-6">
            <div class="card__body" style="padding:0">
                <?php foreach ($shipped as $i => $key): ?>
                    <div style="padding:var(--space-4) var(--space-5);<?= $i > 0 ? 'border-top:1px solid var(--border)' : '' ?>">
                        <p class="strong small mb-2"><?= $this->t('site.features.shipped_' . $key . '_title') ?></p>
                        <p class="small muted mb-0"><?= $this->tr('site.features.shipped_' . $key . '_text') ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <h2 class="mb-4" style="font-size:var(--text-lg)">
            <span class="subtle"><?= Icon::render('clock', 20) ?></span> <?= $this->t('site.features.planned_heading') ?>
        </h2>
        <div class="card card--flush mb-6">
            <div class="card__body" style="padding:0">
                <?php foreach ($planned as $i => $key): ?>
                    <div style="padding:var(--space-4) var(--space-5);<?= $i > 0 ? 'border-top:1px solid var(--border)' : '' ?>">
                        <p class="strong small mb-2">
                            <?= $this->t('site.features.planned_' . $key . '_title') ?>
                            <span class="badge badge--warning"><?= $this->t('site.features.badge_planned') ?></span>
                        </p>
                        <p class="small muted mb-0"><?= $this->tr('site.features.planned_' . $key . '_text') ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="alert alert--warning">
            <span class="alert__icon"><?= Icon::render('info', 18) ?></span>
            <div class="alert__body">
                <div class="alert__title"><?= $this->t('site.features.tcf_title') ?></div>
                <?= $this->t('site.features.tcf_text') ?>
            </div>
        </div>

        <div class="center mt-6">
            <a class="btn btn--primary btn--lg" href="<?= $this->e(Url::to('/register')) ?>">
                <?= $this->t('site.features.cta') ?>
            </a>
        </div>
    </div>
</section>
