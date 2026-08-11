<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Settings;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
$s        = static fn (string $k): string => Settings::get($k);
$complete = Settings::imprintComplete();

$name = trim($s('operator_name') . ' ' . $s('operator_legal_form'));
?>
<section class="section">
    <div class="container container--narrow">
        <h1 class="mb-5" style="font-size:var(--text-2xl)"><?= $this->t('legal.imprint') ?></h1>

        <?php if ($this->locale() !== 'de'): ?>
            <p class="small muted mb-5"><?= $this->t('site.legal.translation_note') ?></p>
        <?php endif; ?>

        <?php if (!$complete): ?>
            <div class="alert alert--warning mb-5">
                <span class="alert__icon"><?= Icon::render('alert', 18) ?></span>
                <div class="alert__body">
                    <div class="alert__title"><?= $this->t('site.legal.imprint.incomplete_title') ?></div>
                    <?= $this->tr('site.legal.imprint.incomplete_text') ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="card mb-5">
            <div class="card__header"><span class="card__title"><?= $this->t('site.legal.imprint.section_ddg') ?></span></div>
            <div class="card__body">
                <?php if ($name !== ''): ?>
                    <p class="mb-1 strong"><?= $this->e($name) ?></p>
                <?php endif; ?>
                <?php if ($s('operator_street') !== ''): ?>
                    <p class="mb-1"><?= $this->e($s('operator_street')) ?></p>
                <?php endif; ?>
                <?php if ($s('operator_zip') !== '' || $s('operator_city') !== ''): ?>
                    <p class="mb-1"><?= $this->e(trim($s('operator_zip') . ' ' . $s('operator_city'))) ?></p>
                <?php endif; ?>
                <?php if ($s('operator_country') !== ''): ?>
                    <p class="mb-0"><?= $this->e($s('operator_country')) ?></p>
                <?php endif; ?>
                <?php if (!$complete): ?>
                    <p class="small muted mb-0"><em><?= $this->t('site.legal.details_pending') ?></em></p>
                <?php endif; ?>
            </div>
        </div>

        <?php if ($s('operator_represented_by') !== ''): ?>
            <div class="card mb-5">
                <div class="card__header"><span class="card__title"><?= $this->t('site.legal.imprint.represented_by') ?></span></div>
                <div class="card__body"><p class="mb-0"><?= $this->e($s('operator_represented_by')) ?></p></div>
            </div>
        <?php endif; ?>

        <div class="card mb-5">
            <div class="card__header"><span class="card__title"><?= $this->t('site.legal.imprint.contact') ?></span></div>
            <div class="card__body">
                <?php if ($s('operator_email') !== ''): ?>
                    <p class="mb-1">
                        <?= $this->t('site.legal.imprint.email_label') ?>:
                        <a href="mailto:<?= $this->e($s('operator_email')) ?>"><?= $this->e($s('operator_email')) ?></a>
                    </p>
                <?php endif; ?>
                <?php if ($s('operator_phone') !== ''): ?>
                    <p class="mb-0"><?= $this->t('site.legal.imprint.phone_label') ?>: <?= $this->e($s('operator_phone')) ?></p>
                <?php endif; ?>
            </div>
        </div>

        <?php if ($s('operator_register_court') !== '' || $s('operator_register_number') !== ''): ?>
            <div class="card mb-5">
                <div class="card__header"><span class="card__title"><?= $this->t('site.legal.imprint.register') ?></span></div>
                <div class="card__body">
                    <?php if ($s('operator_register_court') !== ''): ?>
                        <p class="mb-1"><?= $this->t('site.legal.imprint.register_court') ?>: <?= $this->e($s('operator_register_court')) ?></p>
                    <?php endif; ?>
                    <?php if ($s('operator_register_number') !== ''): ?>
                        <p class="mb-0"><?= $this->t('site.legal.imprint.register_number') ?>: <?= $this->e($s('operator_register_number')) ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($s('operator_vat_id') !== ''): ?>
            <div class="card mb-5">
                <div class="card__header">
                    <span class="card__title"><?= $this->t('site.legal.imprint.vat_id') ?></span>
                </div>
                <div class="card__body">
                    <p class="mb-0">
                        <?= $this->e($s('operator_vat_id')) ?>
                        <span class="small muted"><?= $this->t('site.legal.imprint.vat_note') ?></span>
                    </p>
                </div>
            </div>
        <?php endif; ?>

        <div class="card mb-5">
            <div class="card__header"><span class="card__title"><?= $this->t('site.legal.imprint.dispute') ?></span></div>
            <div class="card__body stack">
                <p>
                    <?= $this->t('site.legal.imprint.dispute_platform') ?>
                    <a href="https://ec.europa.eu/consumers/odr/" target="_blank" rel="noopener noreferrer">ec.europa.eu/consumers/odr</a>.
                </p>
                <p class="mb-0">
                    <?= $this->t('site.legal.imprint.dispute_participation') ?>
                </p>
            </div>
        </div>

        <div class="card">
            <div class="card__header"><span class="card__title"><?= $this->t('site.legal.imprint.liability') ?></span></div>
            <div class="card__body stack">
                <p>
                    <?= $this->t('site.legal.imprint.liability_content') ?>
                </p>
                <p class="mb-0">
                    <?= $this->t('site.legal.imprint.liability_links') ?>
                </p>
            </div>
        </div>
    </div>
</section>
