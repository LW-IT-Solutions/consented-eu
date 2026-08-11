<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var list<array<string,mixed>> $active */
/** @var array<string,string> $catalogue */
/** @var list<string> $shipped */
/** @var array<string,int> $completion */
/** @var bool $showReview */
$base = '/properties/' . $property['public_id'];

$activeCodes = [];
$defaultCode = $property['default_language'];
foreach ($active as $row) {
    $activeCodes[(string) $row['language_code']] = true;
}
?>
<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->t('property.languages.title') ?></h1>
        <p class="page-head__sub">
            <?= $this->t('property.languages.subtitle') ?>
        </p>
    </div>
</div>

<div class="alert alert--info mb-5">
    <span class="alert__icon"><?= Icon::render('info', 18) ?></span>
    <div class="alert__body">
        <?= $this->tr($showReview
            ? 'property.languages.shipped_note'
            : 'property.languages.shipped_note_plain') ?>
    </div>
</div>

<?php
/*
 * Der Warnhinweis erscheint nur, wenn es tatsächlich ungeprüfte Pakete gibt.
 *
 * Eine Installation, die nur Deutsch und Englisch mitbringt, soll keine Warnung
 * über etwas lesen, das bei ihr nicht vorkommt — sonst lernt man, Warnungen zu
 * überblättern.
 */
$unreviewed = array_values(array_diff($shipped, $reviewed));
?>
<?php if ($showReview && $unreviewed !== []): ?>
    <div class="alert alert--warning mb-5">
        <span class="alert__icon"><?= Icon::render('alert', 18) ?></span>
        <div class="alert__body">
            <?= $this->tr('property.languages.unreviewed_note', [
                'languages' => implode(', ', array_map(
                    static fn (string $c): string => ($catalogue[$c] ?? $c) . ' (' . $c . ')',
                    $unreviewed
                )),
            ]) ?>
        </div>
    </div>
<?php endif; ?>

<form method="post" action="<?= $this->e(Url::to($base . '/languages')) ?>">
    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">

    <div class="card mb-5">
        <div class="card__header">
            <span class="card__title"><?= $this->t('property.languages.default_title') ?></span>
        </div>
        <div class="card__body">
            <div class="field" style="max-width:320px;margin-bottom:0">
                <label class="label" for="default_language"><?= $this->t('property.languages.default_label') ?></label>
                <select class="select" id="default_language" name="default_language" <?= $canEdit ? '' : 'disabled' ?>>
                    <?php foreach ($catalogue as $code => $label): ?>
                        <option value="<?= $this->e($code) ?>" <?= $defaultCode === $code ? 'selected' : '' ?>>
                            <?= $this->e($label) ?> (<?= $this->e($code) ?>)
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card__header">
            <span class="card__title"><?= $this->t('property.languages.active_title') ?></span>
            <span class="small muted">
                <?= $this->t('property.languages.active_count', ['count' => $this->number(count($active))]) ?>
            </span>
        </div>
        <div class="card__body">
            <div class="grid" style="grid-template-columns:repeat(auto-fill,minmax(230px,1fr));gap:var(--space-2)">
                <?php foreach ($catalogue as $code => $label): ?>
                    <?php
                    $isActive   = isset($activeCodes[$code]);
                    $isShipped  = in_array($code, $shipped, true);
                    // Ohne eingeschalteten Hinweis traegt jedes mitgelieferte
                    // Paket dasselbe neutrale Abzeichen: "Texte enthalten" ist
                    // fuer alle wahr.
                    $isReviewed = !$showReview || in_array($code, $reviewed, true);
                    $percent    = $completion[$code] ?? ($isShipped ? 100 : 0);
                    ?>
                    <label class="checkbox" style="align-items:center;padding:var(--space-2);
                           border:1px solid var(--border);border-radius:var(--radius-sm)">
                        <input type="checkbox" name="languages[]" value="<?= $this->e($code) ?>"
                               <?= $isActive ? 'checked' : '' ?> <?= $canEdit ? '' : 'disabled' ?>>
                        <span style="flex:1 1 auto;min-width:0">
                            <span class="strong small"><?= $this->e($label) ?></span>
                            <span class="tiny muted"> · <?= $this->e($code) ?></span>
                            <?php if ($isShipped && $isReviewed): ?>
                                <span class="badge badge--success" style="margin-left:4px">
                                    <?= $this->t('property.languages.badge_shipped') ?>
                                </span>
                            <?php elseif ($isShipped): ?>
                                <?php /* Texte liegen bei, aber niemand hat sie freigegeben.
                                         Grün wäre hier eine Zusage, die das Produkt nicht
                                         einhalten kann. */ ?>
                                <span class="badge badge--warning" style="margin-left:4px">
                                    <?= $this->t('property.languages.badge_unreviewed') ?>
                                </span>
                            <?php elseif ($isActive): ?>
                                <span class="tiny muted" style="display:block">
                                    <?= $this->t('property.languages.percent_translated', ['percent' => $percent]) ?>
                                </span>
                            <?php endif; ?>
                        </span>
                    </label>
                <?php endforeach; ?>
            </div>
        </div>
        <?php if ($canEdit): ?>
            <div class="card__footer row row--end">
                <button type="submit" class="btn btn--primary"><?= $this->t('property.languages.save') ?></button>
            </div>
        <?php endif; ?>
    </div>
</form>

<?php if (count($active) > 0): ?>
<div class="card mt-5">
    <div class="card__header"><span class="card__title"><?= $this->t('property.languages.progress_title') ?></span></div>
    <div class="table-wrap">
        <table class="table">
            <thead>
                <tr>
                    <th><?= $this->t('common.language') ?></th>
                    <th><?= $this->t('property.languages.col_progress') ?></th>
                    <th class="table__actions"><?= $this->t('common.action') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($active as $row): ?>
                    <?php
                    $code    = (string) $row['language_code'];
                    $percent = $completion[$code] ?? 0;
                    ?>
                    <tr>
                        <td>
                            <span class="strong"><?= $this->e($catalogue[$code] ?? $code) ?></span>
                            <?php if ((int) $row['is_default'] === 1): ?>
                                <span class="badge badge--info"><?= $this->t('common.default') ?></span>
                            <?php endif; ?>
                        </td>
                        <td style="width:45%">
                            <div class="row row--tight row--nowrap">
                                <div class="meter" style="flex:1 1 auto">
                                    <div class="meter__fill <?= $percent >= 100 ? 'meter__fill--success' : '' ?>"
                                         style="width:<?= $this->e((string) $percent) ?>%"></div>
                                </div>
                                <span class="tnum tiny" style="flex:0 0 40px;text-align:right">
                                    <?= $this->e((string) $percent) ?>&nbsp;%
                                </span>
                            </div>
                        </td>
                        <td class="table__actions">
                            <a class="btn btn--ghost btn--sm"
                               href="<?= $this->e(Url::to($base . '/texts?lang=' . urlencode($code))) ?>">
                                <?= $this->t('property.languages.edit_texts') ?>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php endif; ?>
