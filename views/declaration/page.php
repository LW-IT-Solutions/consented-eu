<?php

declare(strict_types=1);

/**
 * Die Cookie-Erklärung als eigenständige, verlinkbare Seite.
 *
 * Bewusst ohne unser Seitengerüst und ohne unsere Marke. Was hier steht, ist
 * die Aussage des Kunden über seine eigene Website; sie in unser Layout mit
 * unserem Logo und unserer Navigation zu setzen würde den Eindruck erzeugen,
 * consented.eu erkläre die Cookies fremder Seiten. Ein schmales, neutrales
 * Dokument, das sich drucken lässt — nicht mehr.
 *
 * Kein Verweis zurück auf uns, auch kein „powered by". Wer wissen will, woher
 * die Seite kommt, sieht die Domain.
 *
 * @var \Consented\Core\View $this
 * @var array<string,mixed>  $declaration
 * @var \Consented\Property\Property $property
 */

$d = $declaration;
?>
<!doctype html>
<html lang="<?= $this->e($d['language']) ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
/*
 * noindex doppelt: als Kopfzeile im Controller und hier als Meta-Element.
 *
 * Diese Seite trägt den Rechtstext des Kunden auf unserer Domain. Indexiert
 * könnte sie seine eigene Datenschutzerklärung überholen, und dann lesen seine
 * Besucher seine Cookie-Erklärung auf einer fremden Seite.
 */
?>
<meta name="robots" content="noindex, nofollow">
<title><?= $this->e($d['texts']['declaration_title'] ?? 'Cookies') ?> — <?= $this->e($d['domain'] ?? $d['propertyName']) ?></title>
<style>
:root{color-scheme:light dark}
html{-webkit-text-size-adjust:100%}
body{margin:0;padding:2.5rem 1.25rem 4rem;font:16px/1.6 system-ui,-apple-system,"Segoe UI",Roboto,sans-serif;
    color:#16181d;background:#fff}
main{max-width:52rem;margin:0 auto}
h1{font-size:1.7rem;line-height:1.25;margin:0 0 .6em}
h3{font-size:1.15rem;margin:1.6em 0 .3em}
h4{font-size:1rem;margin:0 0 .25em}
a{color:inherit;text-decoration:underline}
code{font-family:ui-monospace,SFMono-Regular,Menlo,monospace;font-size:.92em}
.consented-cd__site{font-size:.9rem;opacity:.7;margin:0 0 2rem}
@media (prefers-color-scheme:dark){
    body{color:#e7e9ee;background:#14161a}
}
@media print{
    body{padding:0;color:#000;background:#fff}
    .consented-cd__service{break-inside:avoid}
}
</style>
</head>
<body>
<main>
    <p class="consented-cd__site"><?= $this->e($d['domain'] ?? $d['propertyName']) ?></p>
    <?php $this->include('declaration/fragment', ['declaration' => $d, 'embedded' => false]); ?>
</main>
</body>
</html>
