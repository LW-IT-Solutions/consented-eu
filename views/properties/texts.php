<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var string $language */
/** @var array<string,list<string>> $groups */
/** @var array<string,string> $defaults */
/** @var array<string,string> $custom */
$base = '/properties/' . $property['public_id'];

$customCount = count($custom);
$longKeys    = ['banner_description', 'modal_description', 'about_text',
                'category_essential_description', 'category_functional_description',
                'category_analytics_description', 'category_marketing_description'];
?>
<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->t('property.texts.title') ?></h1>
        <p class="page-head__sub">
            <?= $this->t('property.texts.subtitle') ?>
        </p>
    </div>
</div>

<div class="tabs">
    <?php foreach ($languages as $row): ?>
        <?php $code = (string) $row['language_code']; ?>
        <a class="tab" href="<?= $this->e(Url::to($base . '/texts?lang=' . urlencode($code))) ?>"
           <?= $code === $language ? 'aria-current="page"' : '' ?>>
            <?= $this->e($catalogue[$code] ?? $code) ?>
            <?php if ((int) $row['is_default'] === 1): ?>
                <span class="badge badge--info"><?= $this->t('common.default') ?></span>
            <?php endif; ?>
        </a>
    <?php endforeach; ?>
</div>

<div class="row row--between mb-4">
    <p class="small muted mb-0">
        <?php if ($customCount === 0): ?>
            <?= $this->t('property.texts.all_default') ?>
        <?php else: ?>
            <?= $this->tr('property.texts.custom_count', [
                'count' => $customCount,
                'total' => count($defaults),
            ]) ?>
        <?php endif; ?>
    </p>
    <?php if ($canEdit && $customCount > 0): ?>
        <form method="post" action="<?= $this->e(Url::to($base . '/texts/reset')) ?>"
              data-confirm="<?= $this->t('property.texts.reset_confirm') ?>">
            <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
            <input type="hidden" name="lang" value="<?= $this->e($language) ?>">
            <button type="submit" class="btn btn--ghost btn--sm">
                <?= Icon::render('refresh', 15) ?> <?= $this->t('property.texts.reset_all') ?>
            </button>
        </form>
    <?php endif; ?>
</div>

<form method="post" action="<?= $this->e(Url::to($base . '/texts')) ?>">
    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
    <input type="hidden" name="lang" value="<?= $this->e($language) ?>">

    <?php foreach ($groups as $groupLabel => $keys): ?>
        <div class="card mb-5">
            <div class="card__header"><span class="card__title"><?= $this->e($groupLabel) ?></span></div>
            <div class="card__body">
                <?php foreach ($keys as $key): ?>
                    <?php
                    $default    = $defaults[$key] ?? '';
                    $value      = $custom[$key] ?? $default;
                    $isCustom   = isset($custom[$key]);
                    $isLong     = in_array($key, $longKeys, true);
                    ?>
                    <div class="field">
                        <div class="row row--between" style="margin-bottom:6px">
                            <label class="label mb-0" for="text_<?= $this->e($key) ?>" style="margin-bottom:0">
                                <code class="tiny"><?= $this->e($key) ?></code>
                                <?php if ($isCustom): ?>
                                    <span class="badge badge--accent"><?= $this->t('property.texts.badge_custom') ?></span>
                                <?php endif; ?>
                            </label>
                        </div>

                        <?php if ($isLong): ?>
                            <textarea class="textarea" id="text_<?= $this->e($key) ?>"
                                      name="text_<?= $this->e($key) ?>" rows="3"
                                      <?= $canEdit ? '' : 'readonly' ?>><?= $this->e($value) ?></textarea>
                        <?php else: ?>
                            <input class="input" type="text" id="text_<?= $this->e($key) ?>"
                                   name="text_<?= $this->e($key) ?>" value="<?= $this->e($value) ?>"
                                   <?= $canEdit ? '' : 'readonly' ?>>
                        <?php endif; ?>

                        <?php if ($isCustom): ?>
                            <p class="help">
                                <?= $this->t('property.texts.default_prefix') ?>
                                <span class="muted"><?= $this->e(mb_strimwidth($default, 0, 140, '…')) ?></span>
                            </p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>

    <?php if ($canEdit): ?>
        <div class="card">
            <div class="card__body">
                <div class="row row--between">
                    <p class="small muted mb-0" style="max-width:52ch">
                        <?= $this->t('property.texts.allowed_html') ?>
                        <code>a</code>, <code>strong</code>, <code>em</code>,
                        <code>br</code>, <code>ul</code>, <code>li</code>, <code>p</code>, <code>span</code>.
                        <?= $this->t('property.texts.placeholders') ?>
                        <code>{{company}}</code>, <code>{{privacy_policy_url}}</code>,
                        <code>{{service_count}}</code>, <code>{{category_count}}</code>.
                    </p>
                    <button type="submit" class="btn btn--primary"><?= $this->t('property.texts.save') ?></button>
                </div>
            </div>
        </div>
    <?php endif; ?>
</form>
