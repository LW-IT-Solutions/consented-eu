<?php

declare(strict_types=1);

use Consented\Core\Url;

/** @var \Consented\Core\View $this */
$old = $old ?? [];
?>
<h1 class="auth__title"><?= $this->t('auth.forgot.title') ?></h1>
<p class="auth__sub">
    <?= $this->t('auth.forgot.subtitle') ?>
</p>

<form method="post" action="<?= $this->e(Url::to('/forgot-password')) ?>" id="form-password-reset" novalidate>
    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
        <input type="hidden" name="g-recaptcha-response" value="">

    <div class="field">
        <label class="label" for="email"><?= $this->t('common.email') ?></label>
        <input class="input" type="email" id="email" name="email" required autofocus
               autocomplete="username" autocapitalize="none" spellcheck="false"
               value="<?= $this->e($old['email'] ?? '') ?>">
    </div>

    <button type="submit" class="btn btn--primary btn--block btn--lg"><?= $this->t('auth.forgot.submit') ?></button>
</form>

<p class="tiny muted mt-5">
    <?= $this->t('auth.forgot.note') ?>
</p>

<div class="divider"><?= $this->t('common.or') ?></div>

<a class="btn btn--secondary btn--block" href="<?= $this->e(Url::to('/login')) ?>"><?= $this->t('auth.forgot.back_to_login') ?></a>

<?php $this->include('partials/captcha', ['formId' => 'form-password-reset', 'action' => \Consented\Auth\AuthCaptcha::PASSWORD_RESET]); ?>
