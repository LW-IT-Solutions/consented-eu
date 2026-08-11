<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var array<string,string> $settings */
/** @var string $transport */
/** @var bool $passwordIsSet */
$old    = $old ?? [];
$errors = $errors ?? [];

// After a rejected submit the form must show what was typed, not what is
// stored — otherwise a single bad field silently reverts the whole page.
$resubmit = $old !== [];

$v = static function (string $key) use ($old, $settings): string {
    $value = $old[$key] ?? ($settings[$key] ?? '');

    return is_scalar($value) ? (string) $value : '';
};

// An unticked checkbox is absent from the POST body, so on a resubmit the
// stored value is the wrong source: it would tick the box the user just cleared.
$on = static fn (string $key): bool => $resubmit
    ? array_key_exists($key, $old)
    : (($settings[$key] ?? '0') === '1');
?>
<?php $this->include('admin/settings/_nav', ['tab' => 'mail']); ?>

<form method="post" action="<?= $this->e(Url::to('/admin/settings/mail')) ?>" style="max-width:820px">
    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">

    <div class="card mb-5">
        <div class="card__header">
            <span class="card__title"><?= $this->t('admin.settings.mail_title') ?></span>
            <?php if ($on('mail_enabled')): ?>
                <span class="badge badge--success"><?= $this->t('common.active') ?></span>
            <?php else: ?>
                <span class="badge badge--warning"><?= $this->t('admin.settings.badge_disabled') ?></span>
            <?php endif; ?>
        </div>
        <div class="card__body">
            <label class="checkbox mb-4">
                <input type="checkbox" name="mail_enabled" value="1" <?= $on('mail_enabled') ? 'checked' : '' ?>>
                <span>
                    <strong><?= $this->t('admin.settings.mail_toggle') ?></strong>
                    <span class="help" style="display:block;margin-top:2px">
                        <?= $this->tr('admin.settings.mail_toggle_help', ['url' => Url::to('/admin/mail')]) ?>
                    </span>
                </span>
            </label>

            <div class="field">
                <label class="label" for="mail_transport"><?= $this->t('admin.settings.transport') ?></label>
                <select class="select" id="mail_transport" name="mail_transport">
                    <option value="mail" <?= $v('mail_transport') === 'mail' ? 'selected' : '' ?>>
                        <?= $this->t('admin.settings.transport_mail') ?>
                    </option>
                    <option value="smtp" <?= $v('mail_transport') === 'smtp' ? 'selected' : '' ?>>
                        <?= $this->t('admin.settings.transport_smtp') ?>
                    </option>
                </select>
                <?php if (isset($errors['mail_transport'][0])): ?>
                    <p class="error-text"><?= $this->e($errors['mail_transport'][0]) ?></p>
                <?php endif; ?>
                <p class="help"><?= $this->t('admin.settings.transport_help') ?></p>
            </div>

            <div class="grid grid--2" style="gap:var(--space-4)">
                <div class="field">
                    <label class="label" for="smtp_from_email"><?= $this->t('admin.settings.from_email') ?></label>
                    <input class="input" type="email" id="smtp_from_email" name="smtp_from_email"
                           value="<?= $this->e($v('smtp_from_email')) ?>" placeholder="noreply@consented.eu"
                           <?= isset($errors['smtp_from_email']) ? 'aria-invalid="true"' : '' ?>>
                    <?php if (isset($errors['smtp_from_email'][0])): ?>
                        <p class="error-text"><?= $this->e($errors['smtp_from_email'][0]) ?></p>
                    <?php endif; ?>
                </div>
                <div class="field">
                    <label class="label" for="smtp_from_name"><?= $this->t('admin.settings.from_name') ?></label>
                    <input class="input" type="text" id="smtp_from_name" name="smtp_from_name"
                           value="<?= $this->e($v('smtp_from_name')) ?>" placeholder="consented.eu"
                           <?= isset($errors['smtp_from_name']) ? 'aria-invalid="true"' : '' ?>>
                    <?php if (isset($errors['smtp_from_name'][0])): ?>
                        <p class="error-text"><?= $this->e($errors['smtp_from_name'][0]) ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <p class="help mb-0"><?= $this->t('admin.settings.mail_spf_note') ?></p>
        </div>
    </div>

    <div class="card mb-5">
        <div class="card__header">
            <span class="card__title"><?= $this->t('admin.settings.smtp_title') ?></span>
            <?php if ($v('mail_transport') !== 'smtp'): ?>
                <span class="badge"><?= $this->t('admin.settings.smtp_inactive') ?></span>
            <?php endif; ?>
        </div>
        <div class="card__body">
            <p class="help mb-4"><?= $this->t('admin.settings.smtp_help') ?></p>

            <div class="grid grid--3" style="gap:var(--space-4)">
                <div class="field" style="grid-column:span 2">
                    <label class="label" for="smtp_host"><?= $this->t('admin.settings.smtp_host') ?></label>
                    <input class="input" type="text" id="smtp_host" name="smtp_host"
                           value="<?= $this->e($v('smtp_host')) ?>" placeholder="mail.example.org"
                           autocapitalize="none" spellcheck="false"
                           <?= isset($errors['smtp_host']) ? 'aria-invalid="true"' : '' ?>>
                    <?php if (isset($errors['smtp_host'][0])): ?>
                        <p class="error-text"><?= $this->e($errors['smtp_host'][0]) ?></p>
                    <?php endif; ?>
                </div>
                <div class="field">
                    <label class="label" for="smtp_port"><?= $this->t('admin.settings.smtp_port') ?></label>
                    <input class="input" type="number" id="smtp_port" name="smtp_port" min="1" max="65535"
                           value="<?= $this->e($v('smtp_port')) ?>"
                           <?= isset($errors['smtp_port']) ? 'aria-invalid="true"' : '' ?>>
                    <?php if (isset($errors['smtp_port'][0])): ?>
                        <p class="error-text"><?= $this->e($errors['smtp_port'][0]) ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="field">
                <label class="label" for="smtp_encryption"><?= $this->t('admin.settings.smtp_encryption') ?></label>
                <select class="select" id="smtp_encryption" name="smtp_encryption">
                    <?php foreach (['tls', 'ssl', 'none'] as $mode): ?>
                        <option value="<?= $this->e($mode) ?>" <?= $v('smtp_encryption') === $mode ? 'selected' : '' ?>>
                            <?= $this->t('admin.settings.smtp_encryption_' . $mode) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <?php if (isset($errors['smtp_encryption'][0])): ?>
                    <p class="error-text"><?= $this->e($errors['smtp_encryption'][0]) ?></p>
                <?php endif; ?>
                <p class="help"><?= $this->t('admin.settings.smtp_encryption_help') ?></p>
            </div>

            <label class="checkbox mb-4">
                <input type="checkbox" name="smtp_auth" value="1" <?= $on('smtp_auth') ? 'checked' : '' ?>>
                <span>
                    <strong><?= $this->t('admin.settings.smtp_auth') ?></strong>
                    <span class="help" style="display:block;margin-top:2px">
                        <?= $this->t('admin.settings.smtp_auth_help') ?>
                    </span>
                </span>
            </label>

            <div class="field">
                <label class="label" for="smtp_username"><?= $this->t('admin.settings.smtp_username') ?></label>
                <input class="input" type="text" id="smtp_username" name="smtp_username"
                       value="<?= $this->e($v('smtp_username')) ?>" autocapitalize="none" spellcheck="false"
                       autocomplete="off"
                       <?= isset($errors['smtp_username']) ? 'aria-invalid="true"' : '' ?>>
                <?php if (isset($errors['smtp_username'][0])): ?>
                    <p class="error-text"><?= $this->e($errors['smtp_username'][0]) ?></p>
                <?php endif; ?>
            </div>

            <div class="alert <?= $passwordIsSet ? 'alert--success' : 'alert--warning' ?> mb-0">
                <span class="alert__icon"><?= Icon::render($passwordIsSet ? 'shield-check' : 'lock', 18) ?></span>
                <div class="alert__body">
                    <p class="alert__title">
                        <?= $passwordIsSet
                            ? $this->t('admin.settings.smtp_password_set')
                            : $this->t('admin.settings.smtp_password_unset') ?>
                    </p>
                    <p class="mb-2"><?= $this->t('admin.settings.smtp_password_note') ?></p>
                    <div class="code"><pre>SMTP_PASSWORD=…</pre></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row row--end">
        <button type="submit" class="btn btn--primary"><?= $this->t('admin.settings.submit') ?></button>
    </div>
</form>

<div class="card mt-6" style="max-width:820px">
    <div class="card__header">
        <span class="card__title"><?= $this->t('admin.settings.test_title') ?></span>
        <span class="badge badge--info mono"><?= $this->e($transport) ?></span>
    </div>
    <div class="card__body row row--between">
        <p class="help mb-0" style="flex:1 1 320px"><?= $this->t('admin.settings.test_help') ?></p>
        <form method="post" action="<?= $this->e(Url::to('/admin/settings/mail/test')) ?>">
            <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
            <button type="submit" class="btn btn--secondary">
                <?= Icon::render('mail', 17) ?> <?= $this->t('admin.mail.send_test') ?>
            </button>
        </form>
    </div>
</div>

<p class="tiny muted mt-4" style="max-width:820px">
    <?= $this->tr('admin.settings.mail_log_note', ['url' => Url::to('/admin/mail')]) ?>
</p>
