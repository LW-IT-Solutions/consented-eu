<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
$errors = $errors ?? [];
$old    = $old ?? [];
?>
<div class="breadcrumb">
    <a href="<?= $this->e(Url::to('/properties')) ?>"><?= $this->t('property.index.title') ?></a>
    <?= Icon::render('chevron-right', 13) ?>
    <span><?= $this->t('property.create.breadcrumb') ?></span>
</div>

<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->t('property.create.title') ?></h1>
        <p class="page-head__sub"><?= $this->t('property.create.sub') ?></p>
    </div>
</div>

<div style="max-width:620px">
    <form method="post" action="<?= $this->e(Url::to('/properties')) ?>" novalidate>
        <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">

        <div class="card">
            <div class="card__body">
                <div class="field">
                    <label class="label" for="name"><?= $this->t('property.create.name_label') ?></label>
                    <input class="input" type="text" id="name" name="name" required autofocus
                           placeholder="<?= $this->t('property.create.name_placeholder') ?>"
                           value="<?= $this->e($old['name'] ?? '') ?>"
                           <?= isset($errors['name']) ? 'aria-invalid="true"' : '' ?>>
                    <p class="help"><?= $this->t('property.create.name_help') ?></p>
                    <?php if (isset($errors['name'][0])): ?>
                        <p class="error-text"><?= $this->e($errors['name'][0]) ?></p>
                    <?php endif; ?>
                </div>

                <div class="field">
                    <label class="label" for="domain">
                        <?= $this->t('property.create.domain_label') ?>
                        <span class="label__optional">— <?= $this->t('common.optional') ?></span>
                    </label>
                    <div class="input-group">
                        <span class="input-group__prefix">https://</span>
                        <input class="input" type="text" id="domain" name="domain"
                               placeholder="example.com" autocapitalize="none" spellcheck="false"
                               value="<?= $this->e($old['domain'] ?? '') ?>"
                               <?= isset($errors['domain']) ? 'aria-invalid="true"' : '' ?>>
                    </div>
                    <p class="help">
                        <?= $this->tr('property.create.domain_help') ?>
                    </p>
                    <?php if (isset($errors['domain'][0])): ?>
                        <p class="error-text"><?= $this->e($errors['domain'][0]) ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="card__footer row row--between">
                <a class="btn btn--ghost" href="<?= $this->e(Url::to('/properties')) ?>"><?= $this->t('common.cancel') ?></a>
                <button type="submit" class="btn btn--primary"><?= $this->t('property.action.create') ?></button>
            </div>
        </div>
    </form>

    <div class="alert alert--info mt-5">
        <span class="alert__icon"><?= Icon::render('info', 18) ?></span>
        <div class="alert__body">
            <div class="alert__title"><?= $this->t('property.create.next_title') ?></div>
            <?= $this->t('property.create.next_text') ?>
        </div>
    </div>
</div>
