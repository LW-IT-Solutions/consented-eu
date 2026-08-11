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
<div style="min-height:100vh;display:flex;flex-direction:column">
    <header class="container" style="padding-top:24px">
        <a class="brand" href="<?= $this->e(Url::to('/')) ?>">
            <span class="brand__mark" style="color:var(--accent)"><?= Icon::starsRing(26, 1.45) ?></span>
            consented<span class="brand__tld">.eu</span>
        </a>
    </header>

    <main style="flex:1 1 auto;display:grid;place-items:center;padding:48px 20px">
        <div class="container container--narrow">
            <?= $this->section('content') ?>
        </div>
    </main>
</div>

<?php $this->include('partials/flashes', ['flashes' => $flashes ?? []]); ?>
</body>
</html>
