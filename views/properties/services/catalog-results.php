<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/*
 * The result list of the service catalogue, rendered both by the full page and
 * by the live-search endpoint. One template on purpose: a second copy for the
 * AJAX response would mean the escaping rule holds at one of two places, and
 * the two would drift the first time a field is added.
 *
 * Expects: $entries, $attached, $base, $csrf.
 */

/** @var \Consented\Core\View $this */
/** @var list<array<string,mixed>> $entries */
/** @var array<int,bool> $attached */
/** @var string $base */
?>
<?php /* The live search must not choose the plural form itself — that rule
         lives in Lang and nowhere else, and Polish needs three forms where
         German needs two. So the server ships the finished sentence together
         with the result set and the script only moves it into place. A
         <template> is the right carrier: not rendered, not announced, and its
         markup survives intact. */ ?>
<template id="catalog-sub-html"><?= $this->tr('property.services.catalog_subtitle', ['count' => $this->number(count($entries))]) ?></template>
<?php if ($entries === []): ?>
    <div class="card">
        <div class="empty">
            <div class="empty__icon"><?= Icon::render('search', 26) ?></div>
            <h2 class="empty__title"><?= $this->t('property.services.catalog_empty_title') ?></h2>
            <p class="empty__text">
                <?= $this->t('property.services.catalog_empty_text') ?>
            </p>
            <a class="btn btn--primary" href="<?= $this->e(Url::to($base . '/services/custom')) ?>">
                <?= $this->t('property.services.catalog_empty_cta') ?>
            </a>
        </div>
    </div>
<?php else: ?>
    <?php /* grid--3, nicht grid--2: die Rasterklassen begrenzen jetzt wirklich
             auf die Zahl im Namen, und zwei Spalten machen die Karten bei bis zu
             200 Einträgen unnötig breit und die Liste unnötig lang. Drei trifft
             die Breite dieser Karten. */ ?>
    <div class="grid grid--3">
        <?php foreach ($entries as $entry): ?>
            <?php
            $cookies  = json_decode((string) $entry['cookies'], true) ?: [];
            $purposes = json_decode((string) $entry['purposes'], true) ?: [];
            $isOn     = isset($attached[(int) $entry['id']]);

            /*
             * Deliberately not keyed on review_status: 373 of 374 entries are
             * "draft" because the review workflow has never run, so a badge for
             * it would sit on almost every card and mean nothing. These two
             * fields are different — without them the operator cannot fulfil
             * their own Art. 13 duty, and they are missing on 12% of entries.
             */
            $gaps = ((string) ($entry['privacy_policy_url'] ?? '')) === ''
                 || ((string) ($entry['data_retention'] ?? '')) === '';
            ?>
            <article class="card">
                <div class="card__body">
                    <div class="row row--between row--top mb-3">
                        <div style="min-width:0">
                            <h3 style="font-size:var(--text-md);margin-bottom:2px">
                                <?= $this->e($entry['name']) ?>
                            </h3>
                            <p class="tiny muted mb-0">
                                <?= $this->e($entry['provider']) ?>
                                <?php if ($entry['provider_country'] !== null): ?>
                                    · <?= $this->e($entry['provider_country']) ?>
                                <?php endif; ?>
                            </p>
                        </div>
                        <span class="badge badge--info"><?= $this->e($entry['category']) ?></span>
                    </div>

                    <p class="small muted mb-3">
                        <?= $this->e(is_array($purposes) ? implode(', ', $purposes) : '') ?>
                    </p>

                    <div class="row row--tight tiny muted mb-4">
                        <span><?= $this->t('property.services.cookie_count', ['count' => count($cookies)]) ?></span>
                        <?php if ((int) $entry['third_country'] === 1): ?>
                            <span class="badge badge--warning"><?= $this->t('property.services.third_country_transfer') ?></span>
                        <?php endif; ?>
                        <?php if ($entry['tcf_vendor_id'] !== null): ?>
                            <span class="badge"><?= $this->t('property.services.tcf_vendor', ['id' => (string) $entry['tcf_vendor_id']]) ?></span>
                        <?php endif; ?>
                        <?php if ($gaps): ?>
                            <span class="badge" title="<?= $this->t('property.services.incomplete_hint') ?>">
                                <?= $this->t('property.services.incomplete') ?>
                            </span>
                        <?php endif; ?>
                    </div>

                    <?php if ($isOn): ?>
                        <button class="btn btn--secondary btn--block" disabled>
                            <?= Icon::render('check', 17) ?> <?= $this->t('property.services.already_added') ?>
                        </button>
                    <?php else: ?>
                        <form method="post" action="<?= $this->e(Url::to($base . '/services/add')) ?>">
                            <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                            <input type="hidden" name="catalog_id" value="<?= $this->e((string) $entry['id']) ?>">
                            <button type="submit" class="btn btn--primary btn--block">
                                <?= Icon::render('plus', 17) ?> <?= $this->t('common.add') ?>
                            </button>
                        </form>
                    <?php endif; ?>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
