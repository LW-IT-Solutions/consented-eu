<?php

declare(strict_types=1);

use Consented\Core\Csp;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var array<string,mixed> $config */
/** @var string $frameTheme 'dark' oder 'light' */
?>
<!doctype html>
<html lang="<?= $this->e($config['language']) ?>" data-frame-theme="<?= $this->e($frameTheme) ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="robots" content="noindex,nofollow">
<title>consented.eu — Vorschau</title>
<style>
    /*
     * Die Platzhalterseite folgt dem Farbschema der umgebenden Seite, das
     * Banner nicht.
     *
     * Das ist die ganze Idee: Was der Besucher beurteilen soll, ist das Banner
     * in dem Design, das er ausgewählt hat — ein helles Banner bleibt hell,
     * auch auf einer dunklen Seite. Die Fläche darunter ist dagegen nur Kulisse
     * und muss sich einfügen, sonst leuchtet im Dunkelmodus ein weißes Rechteck
     * aus der Seite heraus und sieht nach Fehler aus statt nach Vorschau.
     *
     * Das Schema kommt als Attribut vom Elternfenster, weil ein iframe den
     * data-theme-Umschalter der Seite nicht sehen kann. prefers-color-scheme
     * allein würde die manuelle Umschaltung ignorieren.
     */
    :root {
        --page:      #F7F8FB;
        --page-alt:  #EEF1F6;
        --ink:       #10131A;
        --ink-muted: #5A6273;
        --line:      #DFE4EC;
    }

    :root[data-frame-theme="dark"] {
        --page:      #0E1117;
        --page-alt:  #151A23;
        --ink:       #E8ECF3;
        --ink-muted: #9AA4B5;
        --line:      #232A36;
    }

    *, *::before, *::after { box-sizing: border-box; }

    /*
     * min-height statt height: mit height:100% plus Innenabstand ergab die
     * Seite 100 % + 48 px und der iframe zeigte einen Scrollbalken, der nichts
     * zu scrollen hatte.
     */
    html { height: 100%; }

    body {
        margin: 0;
        min-height: 100%;
        font: 15px/1.55 -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        color: var(--ink-muted);
        background:
            linear-gradient(var(--page), var(--page)) padding-box,
            repeating-linear-gradient(45deg, var(--page-alt) 0 10px, var(--page) 10px 20px);
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    /* Angedeutete Kopfzeile, damit die Fläche als Website lesbar ist und das
       Banner einen Bezug hat, an dem man seine Wirkung beurteilen kann. */
    .chrome {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 10px 14px;
        border-bottom: 1px solid var(--line);
        background: var(--page);
    }
    .chrome__dot {
        width: 9px; height: 9px; border-radius: 50%;
        background: var(--line);
        flex: 0 0 auto;
    }
    .chrome__bar {
        height: 8px; border-radius: 4px;
        background: var(--line);
    }
    .chrome__bar--wide { width: 46%; }
    .chrome__bar--narrow { width: 18%; margin-left: auto; }

    .stage {
        flex: 1 1 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 24px;
        text-align: center;
        min-height: 0;
    }

    .mock { max-width: 34ch; }
    .mock h1 { font-size: 15px; color: var(--ink); margin: 0 0 6px; }
    .mock p  { font-size: 13px; margin: 0; }

    /* Angedeutete Textzeilen unter der Überschrift — kostet nichts und macht
       aus der leeren Fläche eine Seite. */
    .lines { margin: 14px auto 0; display: grid; gap: 7px; max-width: 26ch; }
    .lines span { height: 7px; border-radius: 4px; background: var(--line); display: block; }
    .lines span:nth-child(2) { width: 82%; }
    .lines span:nth-child(3) { width: 64%; }

    /* Placeholder for a tracker that must not fire before consent. */
    .tracker { display: none; }

    @media (prefers-reduced-motion: reduce) {
        * { animation: none !important; transition: none !important; }
    }
</style>
</head>
<body>
    <div class="chrome" aria-hidden="true">
        <span class="chrome__dot"></span>
        <span class="chrome__bar chrome__bar--wide"></span>
        <span class="chrome__bar chrome__bar--narrow"></span>
    </div>

    <div class="stage">
        <div class="mock">
            <h1><?= $this->e($mockTitle) ?></h1>
            <p><?= $this->e($mockBody) ?></p>
            <div class="lines" aria-hidden="true"><span></span><span></span><span></span></div>
        </div>
    </div>

    <?php /* A blocked script, so the demo also demonstrates the blocking. */ ?>
    <script type="text/plain" data-consented="demo-analytics">
        window.parent.postMessage({ ce: 'demo-analytics-fired' }, '*');
    </script>

    <script nonce="<?= $this->e(Csp::nonce()) ?>">
        window.__CONSENTED_CONFIG__ = <?= $this->js($config) ?>;
    </script>
    <?php
    /*
     * Cache-Buster für die Runtime in der Vorschau.
     *
     * /sdk/dist/cmp.js wird per .htaccess mit max-age=604800 ausgeliefert — sieben
     * Tage, absichtlich, weil dieselbe Datei auf jeder Kundenwebsite liegt und
     * dort geteilt zwischengespeichert werden soll.
     *
     * Für die Vorschau ist genau das falsch: eine Änderung an der Runtime war
     * dort bis zu eine Woche unsichtbar, und man sucht den Fehler dann im Code,
     * der längst behoben ist. Genau das ist mit dem Fokusring der Überschrift
     * passiert.
     *
     * Die Kundenauslieferung bleibt unberührt — die läuft über
     * /p/{publicId}/cmp.js mit max-age=300 und ETag.
     */
    $runtimeFile    = CONSENTED_ROOT . '/public/sdk/dist/cmp.js';
    $runtimeVersion = is_file($runtimeFile) ? (string) filemtime($runtimeFile) : '1';
    ?>
    <script nonce="<?= $this->e(Csp::nonce()) ?>"
            src="<?= $this->e(Url::to('/sdk/dist/cmp.js')) ?>?v=<?= $this->e($runtimeVersion) ?>"></script>
</body>
</html>
