<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var string $publicId */
/** @var string $name */
/** @var int $version */
/** @var bool $suspended */
/** @var string|null $delivered */
/** @var string $working */
/** @var bool $differs */
/** @var list<string> $patterns */
/** @var string $cmpUrl */
/** @var string|null $configUrl */
$base = '/admin/properties/' . $publicId;
?>
<div class="page-head">
    <div>
        <div class="breadcrumb">
            <a href="<?= $this->e(Url::to('/admin/properties')) ?>"><?= $this->t('admin.properties.title') ?></a>
            <?= Icon::render('chevron-right', 13) ?>
            <a href="<?= $this->e(Url::to($base)) ?>"><?= $this->e($name) ?></a>
            <?= Icon::render('chevron-right', 13) ?>
            <span><?= $this->t('admin.property.config_title') ?></span>
        </div>
        <h1 class="page-head__title"><?= $this->t('admin.property.config_title') ?></h1>
        <p class="page-head__sub"><?= $this->t('admin.property.config_lead') ?></p>
    </div>

    <div class="btn-group">
        <a class="btn btn--secondary" href="<?= $this->e(Url::to($base)) ?>">
            <?= Icon::render('chevron-right', 17) ?> <?= $this->t('common.back') ?>
        </a>
    </div>
</div>

<div class="alert alert--info mb-5">
    <span class="alert__icon"><?= Icon::render('eye', 18) ?></span>
    <div class="alert__body"><?= $this->tr('admin.property.config_read_only') ?></div>
</div>

<?php if ($suspended): ?>
    <div class="alert alert--warning mb-5">
        <span class="alert__icon"><?= Icon::render('lock', 18) ?></span>
        <div class="alert__body"><?= $this->t('admin.property.config_suspended') ?></div>
    </div>
<?php endif; ?>

<div class="card mb-5">
    <div class="card__header"><span class="card__title"><?= $this->t('admin.property.config_urls') ?></span></div>
    <div class="card__body">
        <p class="tiny muted mb-2"><?= $this->t('admin.property.config_url_runtime') ?></p>
        <p class="mono small break-all mb-4"><?= $this->e($cmpUrl) ?></p>

        <?php if ($configUrl !== null): ?>
            <p class="tiny muted mb-2"><?= $this->t('admin.property.config_url_json') ?></p>
            <p class="mono small break-all mb-0"><?= $this->e($configUrl) ?></p>
        <?php else: ?>
            <p class="tiny muted mb-0"><?= $this->t('admin.property.config_url_none') ?></p>
        <?php endif; ?>
    </div>
</div>

<div class="card mb-5">
    <div class="card__header">
        <span class="card__title"><?= $this->t('admin.property.config_patterns') ?></span>
        <span class="small muted"><?= $this->e((string) count($patterns)) ?></span>
    </div>
    <div class="card__body">
        <p class="help mb-4"><?= $this->t('admin.property.config_patterns_lead') ?></p>
        <?php if ($patterns === []): ?>
            <p class="small muted mb-0"><?= $this->t('admin.property.config_patterns_none') ?></p>
        <?php else: ?>
            <div class="code"><pre><?= $this->e('data-block="' . implode('|', $patterns) . '"') ?></pre></div>
        <?php endif; ?>
    </div>
</div>

<div class="card mb-5">
    <div class="card__header">
        <span class="card__title">
            <?php if ($delivered !== null): ?>
                <?= $this->t('admin.property.config_delivered', ['version' => (string) $version]) ?>
            <?php else: ?>
                <?= $this->t('admin.property.config_working') ?>
            <?php endif; ?>
        </span>
    </div>
    <div class="card__body">
        <?php if ($delivered === null): ?>
            <p class="help mb-4"><?= $this->t('admin.property.config_none') ?></p>
            <div class="code" style="max-height:70vh;overflow:auto"><pre><?= $this->e($working) ?></pre></div>
        <?php else: ?>
            <p class="help mb-4"><?= $this->t('admin.property.config_delivered_lead') ?></p>
            <div class="code" style="max-height:70vh;overflow:auto"><pre><?= $this->e($delivered) ?></pre></div>
        <?php endif; ?>
    </div>
</div>

<?php if ($delivered !== null): ?>
    <div class="card">
        <div class="card__header">
            <span class="card__title"><?= $this->t('admin.property.config_working') ?></span>
            <?php if ($differs): ?>
                <span class="badge badge--warning"><?= $this->t('admin.property.config_differs_badge') ?></span>
            <?php else: ?>
                <span class="badge badge--success"><?= $this->t('admin.property.config_same_badge') ?></span>
            <?php endif; ?>
        </div>
        <div class="card__body">
            <?php if ($differs): ?>
                <p class="help mb-4"><?= $this->t('admin.property.config_differs') ?></p>
                <div class="code" style="max-height:70vh;overflow:auto"><pre><?= $this->e($working) ?></pre></div>
            <?php else: ?>
                <p class="small muted mb-0"><?= $this->t('admin.property.config_same') ?></p>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
