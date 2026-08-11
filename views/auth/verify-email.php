<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var string $email */
$devLink = $devLink ?? null;
?>
<div class="empty__icon mb-5"><?= Icon::render('mail', 26) ?></div>

<h1 class="auth__title"><?= $this->t('auth.verify.title') ?></h1>
<p class="auth__sub">
    <?= $this->tr('auth.verify.sent_to', [
        'email' => $email !== '' ? $email : $this->tr('auth.verify.your_email'),
    ]) ?>
</p>

<div class="alert alert--info mb-5">
    <span class="alert__icon"><?= Icon::render('info', 18) ?></span>
    <div class="alert__body">
        <?= $this->t('auth.verify.info') ?>
    </div>
</div>

<?php if (is_string($devLink) && $devLink !== ''): ?>
    <div class="alert alert--warning mb-5">
        <span class="alert__icon"><?= Icon::render('alert', 18) ?></span>
        <div class="alert__body">
            <div class="alert__title"><?= $this->t('auth.verify.dev_title') ?></div>
            <?= $this->tr('auth.verify.dev_note') ?>
            <a class="break-all" href="<?= $this->e($devLink) ?>"><?= $this->e($devLink) ?></a>
        </div>
    </div>
<?php endif; ?>

<form method="post" action="<?= $this->e(Url::to('/verify-email/resend')) ?>">
    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
    <button type="submit" class="btn btn--secondary btn--block"><?= $this->t('auth.verify.resend') ?></button>
</form>

<div class="divider"><?= $this->t('common.or') ?></div>

<a class="btn btn--primary btn--block" href="<?= $this->e(Url::to('/dashboard')) ?>"><?= $this->t('auth.verify.continue') ?></a>
