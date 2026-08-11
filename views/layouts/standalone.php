<?php

declare(strict_types=1);

use Consented\Core\Lang;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/**
 * Eigenständiges Layout ohne app.css.
 *
 * Für Seiten, die vor dem Login stehen und deshalb weder das Design-System
 * noch dessen Cache-Verhalten brauchen: die Seite bringt ihr komplettes CSS
 * selbst mit. Kein render-blockierender Request, keine Abhängigkeit von einer
 * Datei, die im Browser-Cache veralten kann.
 */
$pageTitle = ($title ?? '') !== '' ? $title . ' · consented.eu' : 'consented.eu';
?>
<!doctype html>
<html lang="<?= $this->e($this->locale()) ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title><?= $this->e($pageTitle) ?></title>
<meta name="description" content="<?= $this->e($description ?? '') ?>">
<meta name="theme-color" content="#0A1020">
<link rel="icon" href="<?= $this->e(Url::to('/assets/favicon.svg')) ?>" type="image/svg+xml">

<meta property="og:type" content="website">
<meta property="og:site_name" content="consented.eu">
<meta property="og:title" content="<?= $this->e($pageTitle) ?>">
<meta property="og:description" content="<?= $this->e($description ?? '') ?>">

<?php foreach (Lang::available() as $code => $name): ?>
<link rel="alternate" hreflang="<?= $this->e($code) ?>" href="<?= $this->e(Url::withLang($code)) ?>">
<?php endforeach; ?>
<link rel="alternate" hreflang="x-default" href="<?= $this->e(Url::withLang(Lang::DEFAULT_LOCALE)) ?>">

<?= $this->section('styles') ?>
</head>
<body>
<?php /* Eigenes Banner. Muss vor allen anderen Skripten stehen, damit der
         Stub blockieren kann, bevor etwas Blockierbares startet. */ ?>
<?= \Consented\Site\SelfEmbed::tags() ?>
<?= $this->section('content') ?>
</body>
</html>
