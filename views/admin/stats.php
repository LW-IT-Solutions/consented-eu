<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var array<string,mixed> $stock */
/** @var array<string,mixed> $flow */
/** @var array<string,mixed> $growth */
/** @var list<array<string,mixed>> $services */

$values = $stock['values'];
$held   = (int) ($values['held'] ?? 0);

/*
 * Quoten nur über einer Grundmenge, und 0 von 0 ist keine Quote.
 *
 * Gibt null zurück, nicht 0. Ein Balken bei 0 Prozent behauptet eine gemessene
 * Aufteilung; bei leerem Nenner gibt es keine. Die Ansicht lässt den Block dann
 * weg, statt Nullbalken zu zeichnen.
 */
$share = static function (int $part, int $whole) use ($minBasis): ?int {
    if ($whole < $minBasis || $whole === 0) {
        return null;
    }

    return (int) round($part / $whole * 100);
};

$actions = [
    'accept_all'     => 'admin.stats.action_accept',
    'reject_all'     => 'admin.stats.action_reject',
    'save_selection' => 'admin.stats.action_custom',
    'withdraw'       => 'admin.stats.action_withdraw',
];
?>
<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->t('admin.stats.title') ?></h1>
        <p class="page-head__sub"><?= $this->tr('admin.stats.subtitle') ?></p>
    </div>
</div>

<?php if ($stock['computedAt'] === null): ?>
    <div class="notice notice--warning mb-5">
        <p class="mb-0">
            <?= $this->tr('admin.stats.no_worker', ['link' => $this->e(Url::to('/admin/system'))]) ?>
        </p>
    </div>
<?php endif; ?>

<!-- Bestand ---------------------------------------------------------------- -->
<div class="card mb-5">
    <div class="card__header">
        <span class="card__title"><?= $this->t('admin.stats.stock_title') ?></span>
        <?php if ($stock['computedAt'] !== null): ?>
            <span class="tiny muted">
                <?= $this->t('admin.stats.computed_at', ['at' => $this->date($stock['computedAt'])]) ?>
            </span>
        <?php endif; ?>
    </div>
    <div class="card__body">
        <?php if (!$stock['everRecorded']): ?>
            <p class="mb-0"><?= $this->t('admin.stats.never_recorded') ?></p>
        <?php else: ?>
            <div class="grid grid--3 mb-4">
                <div class="stat">
                    <div class="stat__label"><?= $this->t('admin.stats.tile_held') ?></div>
                    <div class="stat__value"><?= $this->number($held) ?></div>
                    <div class="stat__meta"><?= $this->t('admin.stats.tile_held_meta') ?></div>
                </div>
                <div class="stat">
                    <div class="stat__label"><?= $this->t('admin.stats.tile_first') ?></div>
                    <div class="stat__value" style="font-size:var(--text-md)">
                        <?= $this->e(gmdate('d.m.Y', (int) $stock['firstEver'])) ?>
                    </div>
                    <div class="stat__meta">
                        <?= $this->t('admin.stats.tile_last', ['at' => gmdate('d.m.Y', (int) $stock['lastEver'])]) ?>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat__label"><?= $this->t('admin.stats.tile_gpc') ?></div>
                    <div class="stat__value"><?= $this->number((int) ($values['gpc'] ?? 0)) ?></div>
                    <div class="stat__meta"><?= $this->t('admin.stats.tile_gpc_meta') ?></div>
                </div>
            </div>

            <?php /* Die Aufteilung nur, wenn die Grundmenge sie trägt. Darunter
                     stehen die absoluten Zahlen — dieselbe Information, ohne
                     eine Quote über eine Handvoll Menschen. */ ?>
            <?php $anyShare = $share(1, $held) !== null; ?>
            <table class="table table--compact">
                <thead>
                    <tr>
                        <th><?= $this->t('admin.stats.col_action') ?></th>
                        <th class="right"><?= $this->t('admin.stats.col_count') ?></th>
                        <?php if ($anyShare): ?>
                            <th style="width:40%"><?= $this->t('admin.stats.col_share') ?></th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($actions as $key => $labelKey): ?>
                        <?php
                        $count   = (int) ($values[$key] ?? 0);
                        $percent = $share($count, $held);
                        ?>
                        <tr>
                            <td><?= $this->t($labelKey) ?></td>
                            <td class="right tnum"><?= $this->number($count) ?></td>
                            <?php if ($anyShare): ?>
                                <td>
                                    <div class="meter" role="img"
                                         aria-label="<?= $this->t('admin.stats.share_aria', [
                                             'label' => $this->t($labelKey),
                                             'count' => (string) $count,
                                             'total' => (string) $held,
                                         ]) ?>">
                                        <div class="meter__fill" style="width:<?= (int) $percent ?>%"></div>
                                    </div>
                                    <span class="tiny muted"><?= (int) $percent ?> %</span>
                                </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                    <?php foreach (['auto_expire', 'implicit'] as $rare): ?>
                        <?php if ((int) ($values[$rare] ?? 0) > 0): ?>
                            <tr>
                                <td><?= $this->t('admin.stats.action_' . $rare) ?></td>
                                <td class="right tnum"><?= $this->number((int) $values[$rare]) ?></td>
                                <?php if ($anyShare): ?><td></td><?php endif; ?>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <?php if (!$anyShare): ?>
                <p class="help mb-0"><?= $this->t('admin.stats.basis_low', ['min' => (string) $minBasis]) ?></p>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <div class="card__footer tiny muted">
        <?= $this->tr('admin.stats.stock_help') ?>
    </div>
</div>

<!-- Zulauf ----------------------------------------------------------------- -->
<div class="card mb-5">
    <div class="card__header">
        <span class="card__title">
            <?= $this->t('admin.stats.flow_title', ['days' => (string) $window]) ?>
        </span>
        <span class="tiny muted">
            <?= $this->t('admin.stats.flow_total', ['count' => $this->number((int) $flow['decisions'])]) ?>
        </span>
    </div>
    <div class="card__body">
        <?php if ((int) $flow['decisions'] === 0): ?>
            <p class="mb-0"><?= $this->t('admin.stats.window_empty', ['days' => (string) $window]) ?></p>
        <?php else: ?>
            <?php /* Handgeschriebene Balken aus reinem CSS. Das Projekt bringt
                     keine Diagrammbibliothek mit, und für eine Reihe aus dreißig
                     Zahlen ist eine auch nicht nötig. */ ?>
            <div class="row row--tight" style="align-items:flex-end;height:120px;gap:3px">
                <?php foreach ($flow['series'] as $day): ?>
                    <?php
                    $h = (int) $flow['peak'] > 0
                        ? max(2, (int) round($day['decisions'] / (int) $flow['peak'] * 110))
                        : 2;
                    ?>
                    <div style="flex:1 1 0;display:flex;flex-direction:column;justify-content:flex-end;height:100%"
                         title="<?= $this->e(gmdate('d.m.Y', strtotime($day['date']) ?: time())) ?>: <?= (int) $day['decisions'] ?>">
                        <div style="height:<?= $h ?>px;border-radius:3px 3px 0 0;
                                    background:var(--<?= $day['decisions'] > 0 ? 'accent' : 'border' ?>)"></div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row row--between tiny muted" style="margin-top:6px">
                <span><?= $this->e(gmdate('d.m.', strtotime($flow['series'][0]['date']) ?: time())) ?></span>
                <span><?= $this->t('admin.stats.flow_peak', ['count' => (string) $flow['peak']]) ?></span>
                <span><?= $this->e(gmdate('d.m.', strtotime(end($flow['series'])['date']) ?: time())) ?></span>
            </div>

            <table class="table table--compact" style="margin-top:var(--space-4)">
                <tbody>
                    <?php foreach ($actions as $key => $labelKey): ?>
                        <tr>
                            <td><?= $this->t($labelKey) ?></td>
                            <td class="right tnum"><?= $this->number((int) $flow['totals'][$key]) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
    <div class="card__footer tiny muted">
        <?= $this->tr('admin.stats.flow_help') ?>
    </div>
</div>

<!-- Wachstum --------------------------------------------------------------- -->
<div class="card mb-5">
    <div class="card__header">
        <span class="card__title"><?= $this->t('admin.stats.growth_title') ?></span>
    </div>
    <div class="card__body" style="padding-bottom:0">
        <table class="table table--compact">
            <thead>
                <tr>
                    <th><?= $this->t('admin.stats.col_month') ?></th>
                    <th class="right"><?= $this->t('admin.stats.col_users') ?></th>
                    <th class="right"><?= $this->t('admin.stats.col_properties') ?></th>
                    <th class="right"><?= $this->t('admin.stats.col_published') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($growth['months'] as $month): ?>
                    <tr>
                        <td class="mono tiny nowrap"><?= $this->e($month['month']) ?></td>
                        <td class="right tnum"><?= $month['users'] > 0 ? $this->number($month['users']) : '·' ?></td>
                        <td class="right tnum"><?= $month['properties'] > 0 ? $this->number($month['properties']) : '·' ?></td>
                        <td class="right tnum"><?= $month['published'] > 0 ? $this->number($month['published']) : '·' ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="card__footer tiny muted"><?= $this->t('admin.stats.growth_help') ?></div>
</div>

<!-- Dienstnutzung ---------------------------------------------------------- -->
<div class="card">
    <div class="card__header">
        <span class="card__title"><?= $this->t('admin.stats.services_title') ?></span>
    </div>
    <div class="card__body" style="padding-bottom:0">
        <?php if ($services === []): ?>
            <p class="mb-0"><?= $this->t('admin.stats.services_empty') ?></p>
        <?php else: ?>
            <table class="table table--compact">
                <thead>
                    <tr>
                        <th><?= $this->t('admin.stats.col_service') ?></th>
                        <th><?= $this->t('admin.stats.col_category') ?></th>
                        <th class="right"><?= $this->t('admin.stats.col_used_by') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($services as $service): ?>
                        <tr>
                            <td>
                                <a href="<?= $this->e(Url::to('/admin/catalog?q=' . urlencode((string) $service['dps_id']))) ?>">
                                    <?= $this->e($service['name']) ?>
                                </a>
                                <?php if (($service['review_status'] ?? '') === 'draft'): ?>
                                    <span class="badge"><?= $this->t('admin.stats.draft') ?></span>
                                <?php endif; ?>
                            </td>
                            <td class="tiny muted"><?= $this->e($service['category']) ?></td>
                            <td class="right tnum"><?= $this->number((int) $service['properties']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
    <div class="card__footer tiny muted"><?= $this->t('admin.stats.services_help') ?></div>
</div>
