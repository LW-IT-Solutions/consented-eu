<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Settings;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
?>
<section class="section">
    <div class="container container--narrow">
        <h1 class="mb-3" style="font-size:var(--text-2xl)"><?= $this->t('site.legal.privacy.title') ?></h1>
        <p class="lead mb-5">
            <?= $this->t('site.legal.privacy.lead') ?>
        </p>

        <?php if ($this->locale() !== 'de'): ?>
            <p class="small muted mb-5"><?= $this->t('site.legal.translation_note') ?></p>
        <?php endif; ?>

        <?php if (!Settings::imprintComplete()): ?>
            <div class="alert alert--warning mb-5">
                <span class="alert__icon"><?= Icon::render('alert', 18) ?></span>
                <div class="alert__body">
                    <div class="alert__title"><?= $this->t('site.legal.privacy.incomplete_title') ?></div>
                    <?= $this->tr('site.legal.privacy.incomplete_text') ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="card mb-5">
            <div class="card__header"><span class="card__title">1. <?= $this->t('site.legal.privacy.s1_title') ?></span></div>
            <div class="card__body">
                <?php if (Settings::get('operator_name') !== ''): ?>
                    <p class="mb-1 strong">
                        <?= $this->e(trim(Settings::get('operator_name') . ' ' . Settings::get('operator_legal_form'))) ?>
                    </p>
                    <?php if (Settings::get('operator_street') !== ''): ?>
                        <p class="mb-1"><?= $this->e(Settings::get('operator_street')) ?></p>
                        <p class="mb-1">
                            <?= $this->e(trim(Settings::get('operator_zip') . ' ' . Settings::get('operator_city'))) ?>,
                            <?= $this->e(Settings::get('operator_country')) ?>
                        </p>
                    <?php endif; ?>
                    <p class="mb-0">
                        <a href="mailto:<?= $this->e(Settings::get('operator_email')) ?>">
                            <?= $this->e(Settings::get('operator_email')) ?>
                        </a>
                    </p>
                <?php else: ?>
                    <p class="muted small mb-0"><em><?= $this->t('site.legal.details_pending') ?></em></p>
                <?php endif; ?>

                <?php if (Settings::get('operator_dpo') !== ''): ?>
                    <p class="small muted mt-4 mb-0">
                        <?= $this->t('site.legal.privacy.dpo_label') ?>: <?= $this->e(Settings::get('operator_dpo')) ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>

        <div class="card mb-5">
            <div class="card__header"><span class="card__title">2. <?= $this->t('site.legal.privacy.s2_title') ?></span></div>
            <div class="card__body stack">
                <p><strong><?= $this->t('site.legal.privacy.label_data') ?>:</strong>
                    <?= $this->t('site.legal.privacy.s2_data') ?></p>
                <p><strong><?= $this->t('site.legal.privacy.label_purpose_basis') ?>:</strong>
                    <?= $this->t('site.legal.privacy.s2_purpose') ?></p>
                <p><strong><?= $this->t('site.legal.privacy.label_retention') ?>:</strong>
                    <?= $this->t('site.legal.privacy.s2_retention') ?></p>
                <p class="mb-0"><strong><?= $this->t('site.legal.privacy.label_cookies') ?>:</strong>
                    <?= $this->tr('site.legal.privacy.s2_cookies') ?></p>
            </div>
        </div>

        <div class="card mb-5">
            <div class="card__header">
                <span class="card__title">3. <?= $this->t('site.legal.privacy.s3_title') ?></span>
            </div>
            <div class="card__body stack">
                <p><?= $this->t('site.legal.privacy.s3_intro') ?></p>
                <p><strong><?= $this->t('site.legal.privacy.label_stored') ?>:</strong>
                    <?= $this->t('site.legal.privacy.s3_stored') ?></p>
                <p><strong><?= $this->t('site.legal.privacy.label_not_stored') ?>:</strong>
                    <?= $this->t('site.legal.privacy.s3_not_stored') ?></p>
                <p><strong><?= $this->t('site.legal.privacy.label_purpose') ?>:</strong>
                    <?= $this->t('site.legal.privacy.s3_purpose') ?></p>
                <p><strong><?= $this->t('site.legal.privacy.label_retention') ?>:</strong>
                    <?= $this->t('site.legal.privacy.s3_retention') ?></p>
                <p class="mb-0"><strong><?= $this->t('site.legal.privacy.label_access_deletion') ?>:</strong>
                    <?= $this->t('site.legal.privacy.s3_lookup_before') ?>
                    <a href="<?= $this->e(Url::to('/consent-lookup')) ?>"><?= $this->t('site.legal.privacy.s3_lookup_link') ?></a>
                    <?= $this->t('site.legal.privacy.s3_lookup_after') ?></p>
            </div>
        </div>

        <div class="card mb-5">
            <div class="card__header"><span class="card__title">4. <?= $this->t('site.legal.privacy.s4_title') ?></span></div>
            <div class="card__body stack">
                <p><?= $this->t('site.legal.privacy.s4_hosting') ?></p>
                <p class="mb-0"><?= $this->t('site.legal.privacy.s4_third_parties') ?></p>
            </div>
        </div>

        <div class="card">
            <div class="card__header"><span class="card__title">5. <?= $this->t('site.legal.privacy.s5_title') ?></span></div>
            <div class="card__body stack">
                <p><?= $this->t('site.legal.privacy.s5_rights') ?></p>
                <p class="mb-0">
                    <?= $this->t('site.legal.privacy.s5_complaint') ?><?php if (Settings::get('operator_supervisory_authority') !== ''): ?>.
                    <?= $this->t('site.legal.privacy.s5_authority') ?>: <?= $this->e(Settings::get('operator_supervisory_authority')) ?><?php endif; ?>.
                </p>
            </div>
        </div>
    </div>
</section>
