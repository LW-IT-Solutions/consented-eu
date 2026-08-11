<?php

declare(strict_types=1);

use Consented\Core\Settings;
use Consented\Core\Icon;

/** @var \Consented\Core\View $this */
?>
<section class="section">
    <div class="container container--narrow">
        <h1 class="mb-5" style="font-size:var(--text-2xl)"><?= $this->t('legal.terms') ?></h1>

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
                    <div class="alert__title"><?= $this->t('site.legal.terms.draft_title') ?></div>
                    <?= $this->t('site.legal.terms.draft_text') ?>
                    <?= $this->t('site.legal.terms.draft_file_label') ?>: <code>views/site/legal/terms.php</code>.
                </div>
            </div>
        <?php endif; ?>

        <div class="card">
            <div class="card__body stack-lg">
                <div>
                    <h2 style="font-size:var(--text-lg)" class="mb-2">1. <?= $this->t('site.legal.terms.s1_title') ?></h2>
                    <p class="mb-0"><?= $this->t('site.legal.terms.s1_text') ?></p>
                </div>

                <div>
                    <h2 style="font-size:var(--text-lg)" class="mb-2">2. <?= $this->t('site.legal.terms.s2_title') ?></h2>
                    <p class="mb-0"><?= $this->tr('site.legal.terms.s2_text') ?></p>
                </div>

                <div>
                    <h2 style="font-size:var(--text-lg)" class="mb-2">3. <?= $this->t('site.legal.terms.s3_title') ?></h2>
                    <p class="mb-0"><?= $this->t('site.legal.terms.s3_text') ?></p>
                </div>

                <div>
                    <h2 style="font-size:var(--text-lg)" class="mb-2">4. <?= $this->t('site.legal.terms.s4_title') ?></h2>
                    <p class="mb-0"><?= $this->t('site.legal.terms.s4_text') ?></p>
                </div>

                <div>
                    <h2 style="font-size:var(--text-lg)" class="mb-2">5. <?= $this->t('site.legal.terms.s5_title') ?></h2>
                    <p class="mb-0"><?= $this->t('site.legal.terms.s5_text') ?></p>
                </div>

                <div>
                    <h2 style="font-size:var(--text-lg)" class="mb-2">6. <?= $this->t('site.legal.terms.s6_title') ?></h2>
                    <p class="mb-0"><?= $this->t('site.legal.terms.s6_text') ?></p>
                </div>

                <div>
                    <h2 style="font-size:var(--text-lg)" class="mb-2">7. <?= $this->t('site.legal.terms.s7_title') ?></h2>
                    <p class="mb-0"><?= $this->t('site.legal.terms.s7_text') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
