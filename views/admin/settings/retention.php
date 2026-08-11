<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var array<string,string> $settings */
$old    = $old ?? [];
$errors = $errors ?? [];

$v = static function (string $key) use ($old, $settings): string {
    $value = $old[$key] ?? ($settings[$key] ?? '');

    return is_scalar($value) ? (string) $value : '';
};

$fields = [
    'retention_consent_days'   => ['admin.settings.retention_consent', 'admin.settings.retention_consent_help'],
    'retention_mail_log_days'  => ['admin.settings.retention_mail', 'admin.settings.retention_mail_help'],
    'retention_audit_log_days' => ['admin.settings.retention_audit', 'admin.settings.retention_audit_help'],
];
?>
<?php $this->include('admin/settings/_nav', ['tab' => 'retention']); ?>

<form method="post" action="<?= $this->e(Url::to('/admin/settings/retention')) ?>" style="max-width:820px">
    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">

    <div class="card mb-5">
        <div class="card__header"><span class="card__title"><?= $this->t('admin.settings.retention_title') ?></span></div>
        <div class="card__body">
            <?php
            /*
             * These three are applied by bin/worker on its next run. Consents
             * fall back to CONSENT_RETENTION_MONTHS from .env when the value
             * here is 0, so an installation that never touches this page keeps
             * behaving exactly as before.
             *
             * property_versions has no period on purpose: it is the record of
             * which configuration a consent was given under, and expiring it
             * would delete the evidence while keeping the consent.
             */
            ?>

            <?php foreach ($fields as $key => [$labelKey, $helpKey]): ?>
                <div class="field">
                    <label class="label" for="<?= $this->e($key) ?>">
                        <?= $this->t($labelKey) ?>
                        <span class="label__optional">— <?= $this->t('admin.settings.retention_unit') ?></span>
                    </label>
                    <input class="input" type="number" id="<?= $this->e($key) ?>" name="<?= $this->e($key) ?>"
                           min="0" max="36500" step="1" style="max-width:200px"
                           value="<?= $this->e($v($key)) ?>"
                           <?= isset($errors[$key]) ? 'aria-invalid="true"' : '' ?>>
                    <?php if (isset($errors[$key][0])): ?>
                        <p class="error-text"><?= $this->e($errors[$key][0]) ?></p>
                    <?php endif; ?>
                    <p class="help"><?= $this->t($helpKey) ?></p>
                    <?php if ($v($key) === '0'): ?>
                        <p class="help"><span class="badge badge--warning"><?= $this->t('admin.settings.retention_forever') ?></span></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>

            <p class="help mb-0"><?= $this->t('admin.settings.retention_zero_note') ?></p>
        </div>
    </div>

    <div class="card mb-5">
        <div class="card__header"><span class="card__title"><?= $this->t('admin.settings.retention_excluded_title') ?></span></div>
        <div class="card__body">
            <p class="mb-0"><?= $this->t('admin.settings.retention_excluded_note') ?></p>
        </div>
    </div>

    <div class="row row--end">
        <button type="submit" class="btn btn--primary"><?= $this->t('admin.settings.submit') ?></button>
    </div>
</form>

<p class="tiny muted mt-4" style="max-width:820px">
    <?= $this->tr('admin.settings.retention_consent_note', ['url' => Url::to('/admin/properties')]) ?>
</p>
