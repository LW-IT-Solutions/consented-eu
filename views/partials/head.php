<?php

declare(strict_types=1);

use Consented\Core\Csp;
use Consented\Core\Lang;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
$pageTitle = isset($title) && $title !== '' ? $title . ' · consented.eu' : $this->t('meta.default_title');
$metaDesc  = $description ?? $this->t('meta.default_description');
?>
<?php /* hreflang, damit Suchmaschinen die Sprachfassungen zuordnen. */ ?>
<?php foreach (Lang::available() as $hrefLangCode => $hrefLangName): ?>
<link rel="alternate" hreflang="<?= $this->e($hrefLangCode) ?>" href="<?= $this->e(Url::withLang($hrefLangCode)) ?>">
<?php endforeach; ?>
<link rel="alternate" hreflang="x-default" href="<?= $this->e(Url::withLang(Lang::DEFAULT_LOCALE)) ?>">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title><?= $this->e($pageTitle) ?></title>
<meta name="description" content="<?= $this->e($metaDesc) ?>">
<meta name="color-scheme" content="light dark">
<?php
/*
 * Cache-Buster aus der Änderungszeit der Datei.
 *
 * Vorher stand hier ein festes ?v=1. Mit Cache-Control: max-age=604800 heißt
 * das: eine CSS-Änderung erreicht wiederkehrende Besucher erst nach sieben
 * Tagen. Die mtime ändert sich bei jedem Deployment von selbst.
 */
$cssFile    = CONSENTED_ROOT . '/public/assets/css/app.css';
$cssVersion = is_file($cssFile) ? (string) filemtime($cssFile) : '1';
?>
<link rel="stylesheet" href="<?= $this->e(Url::to('/assets/css/app.css')) ?>?v=<?= $this->e($cssVersion) ?>">
<link rel="icon" href="<?= $this->e(Url::to('/assets/favicon.svg')) ?>" type="image/svg+xml">

<?php if (!empty($noindex)): ?>
<meta name="robots" content="noindex, nofollow">
<?php endif; ?>

<meta property="og:type" content="website">
<meta property="og:site_name" content="consented.eu">
<meta property="og:title" content="<?= $this->e($pageTitle) ?>">
<meta property="og:description" content="<?= $this->e($metaDesc) ?>">

<?php /* Applied before first paint so a dark-mode user never sees a light flash. */ ?>
<script nonce="<?= $this->e(Csp::nonce()) ?>">
(function () {
    try {
        var stored = localStorage.getItem('ce-theme');
        if (stored === 'dark' || stored === 'light') {
            document.documentElement.setAttribute('data-theme', stored);
        }
    } catch (e) { /* storage blocked — fall back to prefers-color-scheme */ }
})();
</script>

<?php /*
   Confirmation before a destructive submit.
   This is delegated from `document` rather than written as an onsubmit
   attribute, because the CSP carries a nonce in script-src and no
   'unsafe-hashes' — an event-handler attribute is inline script under CSP 3
   and gets discarded. Every such handler in this project was silently dead,
   which meant the delete buttons submitted on the first click without asking.
   A nonce cannot be attached to an attribute, only to a <script> element,
   so the listener has to live here.
*/ ?>
<script nonce="<?= $this->e(Csp::nonce()) ?>">
(function () {
    document.addEventListener('submit', function (event) {
        var form = event.target;
        if (!form || !form.getAttribute) { return; }

        var question = form.getAttribute('data-confirm');
        if (!question) { return; }

        if (!window.confirm(question)) {
            event.preventDefault();
            return;
        }

        // Block the second click: a slow POST otherwise invites an impatient
        // double submit, and these are exactly the actions that must not run twice.
        var button = form.querySelector('button[type=submit], input[type=submit]');
        if (button) {
            window.setTimeout(function () { button.disabled = true; }, 0);
        }
    });
})();
</script>
