<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
?>
<!doctype html>
<html lang="<?= $this->e($this->locale()) ?>">
<head>
<?php $this->include('partials/head', ['title' => $title ?? null, 'noindex' => true]); ?>
</head>
<body>
<?php /* Eigenes Banner. Muss vor allen anderen Skripten stehen, damit der
         Stub blockieren kann, bevor etwas Blockierbares startet. */ ?>
<?= \Consented\Site\SelfEmbed::tags() ?>
<div class="auth">
    <div class="auth__main">
        <div class="auth__inner">
            <a class="brand mb-6" href="<?= $this->e(Url::to('/')) ?>" style="display:inline-flex">
                <span class="brand__mark" style="color:var(--accent)"><?= Icon::starsRing(26, 1.45) ?></span>
                consented<span class="brand__tld">.eu</span>
            </a>

            <?= $this->section('content') ?>

            <div style="margin-top:28px;text-align:center">
                <?php $this->include('partials/lang-switch', ['compact' => true]); ?>
            </div>
        </div>
    </div>

    <aside class="auth__aside" aria-hidden="true">
        <div class="auth__decor"><?= Icon::starsRing(320, 14) ?></div>
        <h2><?= $this->t('layout.auth.headline') ?></h2>
        <p><?= $this->t('layout.auth.lead') ?></p>
        <ul>
            <li><?= Icon::render('check', 18) ?><span><?= $this->t('layout.auth.point_tcf') ?></span></li>
            <li><?= Icon::render('check', 18) ?><span><?= $this->t('layout.auth.point_blocking') ?></span></li>
            <li><?= Icon::render('check', 18) ?><span><?= $this->t('layout.auth.point_log') ?></span></li>
            <li><?= Icon::render('check', 18) ?><span><?= $this->t('layout.auth.point_open') ?></span></li>
        </ul>
    </aside>
</div>

<?php $this->include('partials/flashes', ['flashes' => $flashes ?? []]); ?>
<?= $this->section('scripts') ?>
</body>
</html>
