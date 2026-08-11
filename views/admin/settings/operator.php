<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var array<string,string> $settings */
/** @var bool $complete */
$old    = $old ?? [];
$errors = $errors ?? [];

$v = static function (string $key) use ($old, $settings): string {
    $value = $old[$key] ?? ($settings[$key] ?? '');

    return is_scalar($value) ? (string) $value : '';
};

// Every field here carries a max: rule, so every field can fail. Printing the
// message only for some of them left the rest with a flash that names a field
// the user then has to hunt for.
$invalid = static fn (string $key): string => isset($errors[$key]) ? ' aria-invalid="true"' : '';

$view = $this;
$err  = static function (string $key) use ($errors, $view): string {
    if (!isset($errors[$key][0])) {
        return '';
    }

    return '<p class="error-text">' . $view->e($errors[$key][0]) . '</p>';
};
?>
<?php $this->include('admin/settings/_nav', ['tab' => 'operator']); ?>

<form method="post" action="<?= $this->e(Url::to('/admin/settings/operator')) ?>" style="max-width:820px">
    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">

    <div class="card mb-5">
        <div class="card__header">
            <span class="card__title"><?= $this->t('admin.settings.operator_title') ?></span>
            <?php if ($complete): ?>
                <span class="badge badge--success"><?= $this->t('admin.settings.badge_complete') ?></span>
            <?php else: ?>
                <span class="badge badge--danger"><?= $this->t('admin.settings.badge_incomplete') ?></span>
            <?php endif; ?>
        </div>
        <div class="card__body">
            <div class="alert alert--info mb-4">
                <span class="alert__icon"><?= Icon::render('info', 18) ?></span>
                <div class="alert__body">
                    <?= $this->tr('admin.settings.operator_note', [
                        'imprint' => Url::to('/legal/imprint'),
                        'privacy' => Url::to('/legal/privacy'),
                        'dpa'     => Url::to('/legal/dpa'),
                    ]) ?>
                </div>
            </div>

            <div class="grid grid--2" style="gap:var(--space-4)">
                <div class="field">
                    <label class="label" for="operator_name">
                        <?= $this->t('admin.settings.operator_name') ?>
                        <span style="color:var(--c-danger-600)">*</span>
                    </label>
                    <input class="input" type="text" id="operator_name" name="operator_name"
                           value="<?= $this->e($v('operator_name')) ?>"
                           placeholder="<?= $this->t('admin.settings.operator_name_placeholder') ?>"
                           <?= isset($errors['operator_name']) ? 'aria-invalid="true"' : '' ?>>
                    <?php if (isset($errors['operator_name'][0])): ?>
                        <p class="error-text"><?= $this->e($errors['operator_name'][0]) ?></p>
                    <?php endif; ?>
                </div>
                <div class="field">
                    <label class="label" for="operator_legal_form">
                        <?= $this->t('admin.settings.operator_legal_form') ?>
                        <span class="label__optional">— <?= $this->t('admin.settings.hint_if_applicable') ?></span>
                    </label>
                    <input class="input" type="text" id="operator_legal_form" name="operator_legal_form"
                           value="<?= $this->e($v('operator_legal_form')) ?>"
                           placeholder="<?= $this->t('admin.settings.operator_legal_form_placeholder') ?>"
                           <?= $invalid('operator_legal_form') ?>>
                    <?= $err('operator_legal_form') ?>
                </div>
            </div>

            <div class="field">
                <label class="label" for="operator_street">
                    <?= $this->t('admin.settings.operator_street') ?>
                    <span style="color:var(--c-danger-600)">*</span>
                </label>
                <input class="input" type="text" id="operator_street" name="operator_street"
                       value="<?= $this->e($v('operator_street')) ?>"
                       <?= $invalid('operator_street') ?>>
                <?= $err('operator_street') ?>
            </div>

            <div class="grid grid--3" style="gap:var(--space-4)">
                <div class="field">
                    <label class="label" for="operator_zip">
                        <?= $this->t('admin.settings.operator_zip') ?>
                        <span style="color:var(--c-danger-600)">*</span>
                    </label>
                    <input class="input" type="text" id="operator_zip" name="operator_zip"
                           value="<?= $this->e($v('operator_zip')) ?>"
                           <?= $invalid('operator_zip') ?>>
                    <?= $err('operator_zip') ?>
                </div>
                <div class="field">
                    <label class="label" for="operator_city">
                        <?= $this->t('admin.settings.operator_city') ?>
                        <span style="color:var(--c-danger-600)">*</span>
                    </label>
                    <input class="input" type="text" id="operator_city" name="operator_city"
                           value="<?= $this->e($v('operator_city')) ?>"
                           <?= $invalid('operator_city') ?>>
                    <?= $err('operator_city') ?>
                </div>
                <div class="field">
                    <label class="label" for="operator_country"><?= $this->t('admin.settings.operator_country') ?></label>
                    <input class="input" type="text" id="operator_country" name="operator_country"
                           value="<?= $this->e($v('operator_country')) ?>"
                           <?= $invalid('operator_country') ?>>
                    <?= $err('operator_country') ?>
                </div>
            </div>

            <div class="grid grid--2" style="gap:var(--space-4)">
                <div class="field">
                    <label class="label" for="operator_email">
                        <?= $this->t('common.email') ?>
                        <span style="color:var(--c-danger-600)">*</span>
                    </label>
                    <input class="input" type="email" id="operator_email" name="operator_email"
                           value="<?= $this->e($v('operator_email')) ?>"
                           autocapitalize="none" spellcheck="false"
                           <?= isset($errors['operator_email']) ? 'aria-invalid="true"' : '' ?>>
                    <?php if (isset($errors['operator_email'][0])): ?>
                        <p class="error-text"><?= $this->e($errors['operator_email'][0]) ?></p>
                    <?php endif; ?>
                </div>
                <div class="field">
                    <label class="label" for="operator_phone">
                        <?= $this->t('admin.settings.operator_phone') ?>
                        <span class="label__optional">— <?= $this->t('common.optional') ?></span>
                    </label>
                    <input class="input" type="text" id="operator_phone" name="operator_phone"
                           value="<?= $this->e($v('operator_phone')) ?>"
                           <?= $invalid('operator_phone') ?>>
                    <?= $err('operator_phone') ?>
                </div>
            </div>

            <div class="grid grid--2" style="gap:var(--space-4)">
                <div class="field">
                    <label class="label" for="operator_represented_by">
                        <?= $this->t('admin.settings.operator_represented_by') ?>
                        <span class="label__optional">— <?= $this->t('admin.settings.hint_for_companies') ?></span>
                    </label>
                    <input class="input" type="text" id="operator_represented_by" name="operator_represented_by"
                           value="<?= $this->e($v('operator_represented_by')) ?>"
                           <?= $invalid('operator_represented_by') ?>>
                    <?= $err('operator_represented_by') ?>
                </div>
                <div class="field">
                    <label class="label" for="operator_vat_id">
                        <?= $this->t('admin.settings.operator_vat_id') ?>
                        <span class="label__optional">— <?= $this->t('admin.settings.hint_vat_law') ?></span>
                    </label>
                    <input class="input" type="text" id="operator_vat_id" name="operator_vat_id"
                           value="<?= $this->e($v('operator_vat_id')) ?>" placeholder="DE123456789"
                           <?= $invalid('operator_vat_id') ?>>
                    <?= $err('operator_vat_id') ?>
                </div>
            </div>

            <div class="grid grid--2" style="gap:var(--space-4)">
                <div class="field">
                    <label class="label" for="operator_register_court">
                        <?= $this->t('admin.settings.operator_register_court') ?>
                        <span class="label__optional">— <?= $this->t('admin.settings.hint_if_registered') ?></span>
                    </label>
                    <input class="input" type="text" id="operator_register_court" name="operator_register_court"
                           value="<?= $this->e($v('operator_register_court')) ?>"
                           <?= $invalid('operator_register_court') ?>>
                    <?= $err('operator_register_court') ?>
                </div>
                <div class="field">
                    <label class="label" for="operator_register_number">
                        <?= $this->t('admin.settings.operator_register_number') ?>
                        <span class="label__optional">— <?= $this->t('admin.settings.hint_if_registered') ?></span>
                    </label>
                    <input class="input" type="text" id="operator_register_number" name="operator_register_number"
                           value="<?= $this->e($v('operator_register_number')) ?>" placeholder="HRB 12345"
                           <?= $invalid('operator_register_number') ?>>
                    <?= $err('operator_register_number') ?>
                </div>
            </div>

            <div class="grid grid--2" style="gap:var(--space-4)">
                <div class="field">
                    <label class="label" for="operator_dpo">
                        <?= $this->t('admin.settings.operator_dpo') ?>
                        <span class="label__optional">— <?= $this->t('admin.settings.hint_if_appointed') ?></span>
                    </label>
                    <input class="input" type="text" id="operator_dpo" name="operator_dpo"
                           value="<?= $this->e($v('operator_dpo')) ?>"
                           <?= $invalid('operator_dpo') ?>>
                    <?= $err('operator_dpo') ?>
                </div>
                <div class="field" style="margin-bottom:0">
                    <label class="label" for="operator_supervisory_authority">
                        <?= $this->t('admin.settings.operator_authority') ?>
                        <span class="label__optional">— <?= $this->t('common.optional') ?></span>
                    </label>
                    <input class="input" type="text" id="operator_supervisory_authority"
                           name="operator_supervisory_authority"
                           value="<?= $this->e($v('operator_supervisory_authority')) ?>"
                           <?= $invalid('operator_supervisory_authority') ?>>
                    <?= $err('operator_supervisory_authority') ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row row--end">
        <button type="submit" class="btn btn--primary"><?= $this->t('admin.settings.submit') ?></button>
    </div>
</form>

<p class="tiny muted mt-4" style="max-width:820px"><?= $this->t('admin.settings.operator_audit_note') ?></p>
