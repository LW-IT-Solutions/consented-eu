<?php

declare(strict_types=1);

use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var string $token */
$errors = $errors ?? [];
?>
<h1 class="auth__title"><?= $this->t('auth.reset.title') ?></h1>
<p class="auth__sub"><?= $this->t('auth.reset.subtitle') ?></p>

<form method="post" action="<?= $this->e(Url::to('/reset-password/' . $token)) ?>" novalidate>
    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">

    <div class="field">
        <label class="label" for="password"><?= $this->t('auth.reset.password_label') ?></label>
        <input class="input" type="password" id="password" name="password" required autofocus
               autocomplete="new-password" minlength="12"
               <?= isset($errors['password']) ? 'aria-invalid="true"' : '' ?>>
        <p class="help"><?= $this->t('auth.reset.password_help') ?></p>
        <?php if (isset($errors['password'][0])): ?>
            <p class="error-text"><?= $this->e($errors['password'][0]) ?></p>
        <?php endif; ?>
    </div>

    <div class="field">
        <label class="label" for="password_confirmation"><?= $this->t('auth.password_confirm') ?></label>
        <input class="input" type="password" id="password_confirmation" name="password_confirmation" required
               autocomplete="new-password"
               <?= isset($errors['password_confirmation']) ? 'aria-invalid="true"' : '' ?>>
        <?php if (isset($errors['password_confirmation'][0])): ?>
            <p class="error-text"><?= $this->e($errors['password_confirmation'][0]) ?></p>
        <?php endif; ?>
    </div>

    <button type="submit" class="btn btn--primary btn--block btn--lg"><?= $this->t('auth.reset.submit') ?></button>
</form>

<p class="tiny muted mt-5">
    <?= $this->t('auth.reset.note') ?>
</p>
