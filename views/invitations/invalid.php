<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
?>
<div class="empty__icon mb-5"><?= Icon::render('alert', 26) ?></div>

<h1 class="auth__title"><?= $this->t('invite.invalid.title') ?></h1>
<p class="auth__sub">
    <?= $this->t('invite.invalid.text') ?>
</p>

<a class="btn btn--primary btn--block" href="<?= $this->e(Url::to('/login')) ?>"><?= $this->t('invite.invalid.to_login') ?></a>
<a class="btn btn--ghost btn--block mt-3" href="<?= $this->e(Url::to('/')) ?>"><?= $this->t('invite.invalid.to_home') ?></a>
