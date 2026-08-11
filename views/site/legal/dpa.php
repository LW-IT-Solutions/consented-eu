<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Settings;

/** @var \Consented\Core\View $this */
?>
<section class="section">
    <div class="container container--narrow">
        <h1 class="mb-3" style="font-size:var(--text-2xl)"><?= $this->t('site.legal.dpa.title') ?></h1>
        <p class="lead mb-5">
            <?= $this->t('site.legal.dpa.lead') ?>
        </p>

        <?php if ($this->locale() !== 'de'): ?>
            <p class="small muted mb-5"><?= $this->t('site.legal.translation_note') ?></p>
        <?php endif; ?>

<?php
        /*
         * Derselbe Schalter wie bei den Sprachpaketen: Der Kasten sagt, dass
         * unser mitgelieferter Text nicht anwaltlich geprueft ist. Das trifft
         * zu und aendert sich bei einem Pro-Bono-Projekt nicht — als Dauerbanner
         * auf einer oeffentlichen Seite hilft es aber niemandem bei einer
         * Entscheidung. Wer ihn zeigen will, schaltet review_notices ein.
         */
        ?>
        <?php if (Settings::bool('review_notices')): ?>
            <div class="alert alert--warning mb-5">
                <span class="alert__icon"><?= Icon::render('alert', 18) ?></span>
                <div class="alert__body">
                    <div class="alert__title"><?= $this->t('site.legal.dpa.draft_title') ?></div>
                    <?= $this->t('site.legal.dpa.draft_text') ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="card mb-5">
            <div class="card__header"><span class="card__title"><?= $this->t('site.legal.dpa.processor') ?></span></div>
            <div class="card__body">
                <?php if (Settings::get('operator_name') !== ''): ?>
                    <p class="mb-1 strong">
                        <?= $this->e(trim(Settings::get('operator_name') . ' ' . Settings::get('operator_legal_form'))) ?>
                    </p>
                    <p class="mb-1"><?= $this->e(Settings::operatorAddressLine()) ?></p>
                    <p class="mb-0">
                        <a href="mailto:<?= $this->e(Settings::get('operator_email')) ?>">
                            <?= $this->e(Settings::get('operator_email')) ?>
                        </a>
                    </p>
                <?php else: ?>
                    <p class="muted small mb-0"><em><?= $this->t('site.legal.details_pending') ?></em></p>
                <?php endif; ?>
                <p class="small muted mt-4 mb-0">
                    <?= $this->t('site.legal.dpa.controller_note') ?>
                </p>
            </div>
        </div>

        <div class="card mb-5">
            <div class="card__header"><span class="card__title"><?= $this->t('site.legal.dpa.subject') ?></span></div>
            <div class="card__body stack">
                <p><strong><?= $this->t('site.legal.dpa.label_nature_purpose') ?>:</strong>
                    <?= $this->t('site.legal.dpa.subject_nature') ?></p>
                <p><strong><?= $this->t('site.legal.dpa.label_data_subjects') ?>:</strong>
                    <?= $this->t('site.legal.dpa.subject_persons') ?></p>
                <p class="mb-0"><strong><?= $this->t('site.legal.dpa.label_data_categories') ?>:</strong>
                    <?= $this->t('site.legal.dpa.subject_data') ?></p>
            </div>
        </div>

        <div class="card mb-5">
            <div class="card__header"><span class="card__title"><?= $this->t('site.legal.dpa.tom') ?></span></div>
            <div class="card__body">
                <div class="table-wrap">
                    <table class="table">
                        <thead><tr><th><?= $this->t('site.legal.dpa.tom_col_measure') ?></th><th><?= $this->t('site.legal.dpa.tom_col_implementation') ?></th></tr></thead>
                        <tbody>
                            <tr><td><?= $this->t('site.legal.dpa.tom_pseudonymisation') ?></td>
                                <td><?= $this->t('site.legal.dpa.tom_pseudonymisation_text') ?></td></tr>
                            <tr><td><?= $this->t('site.legal.dpa.tom_encryption') ?></td>
                                <td><?= $this->t('site.legal.dpa.tom_encryption_text') ?></td></tr>
                            <tr><td><?= $this->t('site.legal.dpa.tom_access') ?></td>
                                <td><?= $this->t('site.legal.dpa.tom_access_text') ?></td></tr>
                            <tr><td><?= $this->t('site.legal.dpa.tom_passwords') ?></td>
                                <td><?= $this->t('site.legal.dpa.tom_passwords_text') ?></td></tr>
                            <tr><td><?= $this->t('site.legal.dpa.tom_input') ?></td>
                                <td><?= $this->t('site.legal.dpa.tom_input_text') ?></td></tr>
                            <tr><td><?= $this->t('site.legal.dpa.tom_separation') ?></td>
                                <td><?= $this->t('site.legal.dpa.tom_separation_text') ?></td></tr>
                            <tr><td><?= $this->t('site.legal.dpa.tom_resilience') ?></td>
                                <td><?= $this->t('site.legal.dpa.tom_resilience_text') ?></td></tr>
                            <tr><td><?= $this->t('site.legal.dpa.tom_deletion') ?></td>
                                <td><?= $this->t('site.legal.dpa.tom_deletion_text') ?></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card__header"><span class="card__title"><?= $this->t('site.legal.dpa.subprocessors') ?></span></div>
            <div class="card__body">
                <p class="mb-0">
                    <?= $this->t('site.legal.dpa.subprocessors_text') ?>
                </p>
            </div>
        </div>
    </div>
</section>
