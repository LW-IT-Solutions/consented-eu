<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Session;
use Consented\Core\Url;
use Consented\Core\Project;

/** @var \Consented\Core\View $this */
$loggedIn = Session::instance()->isAuthenticated();
?>
<!doctype html>
<html lang="<?= $this->e($this->locale()) ?>">
<head>
<?php $this->include('partials/head', ['title' => $title ?? null, 'description' => $description ?? null]); ?>
<script type="application/ld+json" nonce="<?= $this->e(\Consented\Core\Csp::nonce()) ?>">
<?= $this->js([
    '@context'        => 'https://schema.org',
    '@type'           => 'SoftwareApplication',
    'name'            => 'consented.eu',
    'applicationCategory' => 'BusinessApplication',
    'operatingSystem' => 'Web, Linux (self-hosted)',
    'description'     => $this->tr('meta.schema_description'),
    'offers'          => ['@type' => 'Offer', 'price' => '0', 'priceCurrency' => 'EUR'],
]) ?>
</script>
</head>
<body>
<?php /* Eigenes Banner. Muss vor allen anderen Skripten stehen, damit der
         Stub blockieren kann, bevor etwas Blockierbares startet. */ ?>
<?= \Consented\Site\SelfEmbed::tags() ?>
<a class="skip-link" href="#main"><?= $this->t('layout.skip_to_content') ?></a>

<nav class="marketing-nav" aria-label="<?= $this->t('nav.main') ?>">
    <div class="container marketing-nav__inner">
        <a class="brand" href="<?= $this->e(Url::to('/')) ?>">
            <span class="brand__mark" style="color:var(--accent)"><?= Icon::starsRing(28, 1.5) ?></span>
            consented<span class="brand__tld">.eu</span>
        </a>

        <div class="marketing-nav__links">
            <a href="<?= $this->e(Url::to('/features')) ?>"><?= $this->t('nav.features') ?></a>
            <a href="<?= $this->e(Url::to('/self-hosting')) ?>"><?= $this->t('nav.self_hosting') ?></a>
            <a href="<?= $this->e(Url::to('/docs')) ?>"><?= $this->t('nav.docs') ?></a>
        </div>

        <span class="spacer"></span>

        <?php $this->include('partials/lang-switch', ['compact' => true]); ?>
        <?php $this->include('partials/theme-toggle'); ?>

        <?php if ($loggedIn): ?>
            <a class="btn btn--primary btn--sm" href="<?= $this->e(Url::to('/dashboard')) ?>"><?= $this->t('nav.to_dashboard') ?></a>
        <?php else: ?>
            <a class="btn btn--ghost btn--sm" href="<?= $this->e(Url::to('/login')) ?>"><?= $this->t('nav.login') ?></a>
            <a class="btn btn--primary btn--sm" href="<?= $this->e(Url::to('/register')) ?>"><?= $this->t('nav.get_started') ?></a>
        <?php endif; ?>
    </div>
</nav>

<main id="main">
    <?= $this->section('content') ?>
</main>

<footer class="site-footer">
    <div class="container">
        <div class="grid grid--4">
            <div>
                <a class="brand mb-3" href="<?= $this->e(Url::to('/')) ?>" style="display:inline-flex">
                    <span class="brand__mark" style="color:var(--accent)"><?= Icon::starsRing(24, 1.35) ?></span>
                    consented<span class="brand__tld">.eu</span>
                </a>
                <p class="small muted" style="max-width:30ch">
                    <?= $this->t('footer.tagline') ?>
                </p>
            </div>
            <div>
                <h4><?= $this->t('footer.product') ?></h4>
                <ul>
                    <li><a href="<?= $this->e(Url::to('/features')) ?>"><?= $this->t('nav.features') ?></a></li>
                    <li><a href="<?= $this->e(Url::to('/self-hosting')) ?>"><?= $this->t('nav.self_hosting') ?></a></li>
                    <li><a href="<?= $this->e(Url::to('/docs')) ?>"><?= $this->t('nav.docs') ?></a></li>
                    <li><a href="<?= $this->e(Project::REPO_URL) ?>" target="_blank" rel="noopener"><?= $this->t('footer.github') ?></a></li>
                    <li><a href="<?= $this->e(Url::to('/register')) ?>"><?= $this->t('nav.get_started') ?></a></li>
                </ul>
            </div>
            <div>
                <h4><?= $this->t('footer.legal') ?></h4>
                <ul>
                    <li><a href="<?= $this->e(Url::to('/legal/imprint')) ?>"><?= $this->t('legal.imprint') ?></a></li>
                    <li><a href="<?= $this->e(Url::to('/legal/privacy')) ?>"><?= $this->t('legal.privacy') ?></a></li>
                    <li><a href="<?= $this->e(Url::to('/legal/terms')) ?>"><?= $this->t('legal.terms') ?></a></li>
                    <li><a href="<?= $this->e(Url::to('/legal/dpa')) ?>"><?= $this->t('legal.dpa') ?></a></li>
                </ul>
            </div>
            <div>
                <h4><?= $this->t('footer.data_subject_rights') ?></h4>
                <ul>
                    <li><a href="<?= $this->e(Url::to('/consent-lookup')) ?>"><?= $this->t('legal.consent_lookup') ?></a></li>
                    <li><a href="#" data-consented-open><?= $this->t('footer.cookie_settings') ?></a></li>
                </ul>
            </div>
        </div>

        <div class="site-footer__bottom">
            <span>&copy; <?= date('Y') ?> consented.eu</span>
            <span>
                <?= $this->t('footer.own_cmp') ?>
                <a href="#" data-consented-open><?= $this->t('footer.change_settings') ?></a>.
            </span>
        </div>

        <?php
        // Gemeinsame Projektliste aus /var/www/html/links.php -- eine Datei
        // fuer alle Seiten. Faellt sie weg, bleibt der Block leer.
        $ceAlle = is_readable('/var/www/html/links.php') ? include '/var/www/html/links.php' : array();
        $ceProj = (is_array($ceAlle) && function_exists('lwit_liste')) ? lwit_liste($ceAlle, 'consented', $this->locale()) : array();
        if ($ceProj): ?>
        <div class="site-footer__net">
            <span class="site-footer__net-label"><?= $this->e(lwit_titel($this->locale())) ?></span>
            <ul>
<?php foreach ($ceProj as $pr): ?>                <li><a href="<?= $this->e($pr['url']) ?>" rel="noopener"><?= $this->e($pr['name']) ?></a><?php if ($pr['text'] !== ''): ?> <span><?= $this->e($pr['text']) ?></span><?php endif; ?></li>
<?php endforeach; ?>            </ul>
        </div>
        <?php endif; ?>
    </div>
</footer>

<?php $this->include('partials/flashes', ['flashes' => $flashes ?? []]); ?>
<?= $this->section('scripts') ?>
</body>
</html>
