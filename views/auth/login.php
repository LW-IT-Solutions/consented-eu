<?php

declare(strict_types=1);

use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var array<string,list<string>> $errors */
/** @var array<string,mixed> $old */
$errors = $errors ?? [];
$old    = $old ?? [];
?>
<h1 class="auth__title"><?= $this->t('auth.login.title') ?></h1>
<p class="auth__sub"><?= $this->t('auth.login.subtitle') ?></p>

<form method="post" action="<?= $this->e(Url::to('/login')) ?>" id="form-login" novalidate>
    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
        <input type="hidden" name="g-recaptcha-response" value="">

    <div class="field">
        <label class="label" for="email"><?= $this->t('common.email') ?></label>
        <input class="input" type="email" id="email" name="email" required
               autocomplete="username" autocapitalize="none" spellcheck="false" autofocus
               value="<?= $this->e($old['email'] ?? '') ?>"
               <?= isset($errors['email']) ? 'aria-invalid="true" aria-describedby="email-error"' : '' ?>>
        <?php if (isset($errors['email'][0])): ?>
            <p class="error-text" id="email-error"><?= $this->e($errors['email'][0]) ?></p>
        <?php endif; ?>
    </div>

    <div class="field">
        <div class="row row--between" style="margin-bottom:8px">
            <label class="label mb-0" for="password" style="margin-bottom:0"><?= $this->t('common.password') ?></label>
            <a class="tiny" href="<?= $this->e(Url::to('/forgot-password')) ?>"><?= $this->t('auth.login.forgot_link') ?></a>
        </div>
        <input class="input" type="password" id="password" name="password" required
               autocomplete="current-password"
               <?= isset($errors['password']) ? 'aria-invalid="true"' : '' ?>>
        <?php if (isset($errors['password'][0])): ?>
            <p class="error-text"><?= $this->e($errors['password'][0]) ?></p>
        <?php endif; ?>
    </div>

    <div class="field">
        <label class="checkbox">
            <input type="checkbox" name="remember" value="1" <?= !empty($old['remember']) ? 'checked' : '' ?>>
            <span><?= $this->t('auth.login.remember') ?> <span class="subtle"><?= $this->t('auth.login.remember_hint') ?></span></span>
        </label>
    </div>

    <button type="submit" class="btn btn--primary btn--block btn--lg"><?= $this->t('auth.login.submit') ?></button>
</form>

<div class="divider"><?= $this->t('auth.login.no_account') ?></div>

<a class="btn btn--secondary btn--block" href="<?= $this->e(Url::to('/register')) ?>">
    <?= $this->t('auth.login.create_account') ?>
</a>

<p class="tiny muted mt-5 center">
    <?= $this->t('auth.login.free_note') ?>
</p>

<?php $this->include('partials/captcha', ['formId' => 'form-login', 'action' => \Consented\Auth\AuthCaptcha::LOGIN]); ?>
