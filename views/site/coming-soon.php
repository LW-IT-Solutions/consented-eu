<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Lang;
use Consented\Core\Settings;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
$note    = trim((string) ($note ?? ''));
$contact = Settings::get('operator_email');
$current = Lang::current();

$cards = [
    ['shield-check', 'banner'],
    ['zap',          'blocking'],
    ['lock',         'privacy'],
    ['server',       'source'],
];
?>
<?php $this->start('styles'); ?>
<style>
/* Eigene Bühne: feste Farben statt Design-Tokens, damit die Startseite
   unabhängig vom Theme und vom Zustand des Stylesheet-Caches immer gleich
   aussieht. */
*, *::before, *::after { box-sizing: border-box; }

:root {
    --ink:        #EAEEF7;
    --ink-muted:  #98A4BD;
    /* 5.4:1 auf dem Seitenhintergrund. #6B7793 sah ruhiger aus, lag mit
       4.39:1 aber knapp unter WCAG AA — bei einer Seite, die nichts anderes
       zu tun hat als lesbar zu sein, ist das der falsche Kompromiss. */
    --ink-faint:  #7A86A2;
    --gold:       #F2C230;
    --line:       rgba(255, 255, 255, .09);
    --panel:      rgba(255, 255, 255, .035);
}

html { -webkit-text-size-adjust: 100%; }

body {
    margin: 0;
    min-height: 100vh;
    min-height: 100svh;
    display: grid;
    place-items: center;
    padding: 40px 24px;
    background:
        radial-gradient(90rem 50rem at 50% -20%, #17306B 0%, transparent 58%),
        radial-gradient(60rem 40rem at 85% 110%, #123056 0%, transparent 55%),
        #070B14;
    color: var(--ink);
    font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                 "Helvetica Neue", Arial, sans-serif;
    font-size: 16px;
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.wrap { width: 100%; max-width: 660px; text-align: center; }

/* Sternenring mit Lichtkranz. */
.mark {
    display: inline-grid;
    place-items: center;
    width: 92px;
    height: 92px;
    border-radius: 50%;
    color: var(--gold);
    background: radial-gradient(circle, rgba(242, 194, 48, .16) 0%, transparent 68%);
    box-shadow: inset 0 0 0 1px rgba(242, 194, 48, .22),
                0 0 60px rgba(242, 194, 48, .13);
}

.badge {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    margin-top: 30px;
    padding: 6px 15px 6px 11px;
    border: 1px solid var(--line);
    border-radius: 999px;
    background: var(--panel);
    font-size: 12px;
    font-weight: 650;
    letter-spacing: .09em;
    text-transform: uppercase;
    color: var(--ink-muted);
}
.badge i {
    width: 7px; height: 7px;
    border-radius: 50%;
    background: #34D399;
    box-shadow: 0 0 0 3px rgba(52, 211, 153, .18);
}

h1 {
    margin: 22px 0 0;
    font-size: clamp(40px, 8vw, 66px);
    line-height: 1.02;
    letter-spacing: -0.04em;
    font-weight: 800;
}
/* Hier bewusst OHNE den negativen Rand, den .brand__tld in app.css setzt.
   Die Korrektur ist dort nötig, weil das Logo bei 16px steht und der Punkt
   sichtbar Seitenluft mitbringt. Diese Überschrift läuft bis 66px und trägt
   schon -0.04em Laufweite — da schließt das „.eu" von selbst auf, und ein
   weiterer Zug ließe die Zeichen aneinanderkleben. */
h1 span { color: var(--ink-faint); font-weight: 700; }

.lead {
    margin: 18px auto 0;
    max-width: 50ch;
    font-size: 17px;
    line-height: 1.65;
    color: var(--ink-muted);
}

.note {
    margin: 24px auto 0;
    max-width: 46ch;
    padding: 12px 18px;
    border: 1px solid rgba(242, 194, 48, .22);
    border-radius: 12px;
    background: rgba(242, 194, 48, .07);
    font-size: 14px;
    color: #F4D687;
}

.grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 12px;
    margin-top: 44px;
    text-align: left;
}

.card {
    display: flex;
    gap: 13px;
    align-items: flex-start;
    padding: 18px;
    border: 1px solid var(--line);
    border-radius: 14px;
    background: var(--panel);
}
.card svg { flex: 0 0 auto; color: var(--gold); margin-top: 2px; opacity: .92; }
.card b {
    display: block;
    font-size: 14px;
    font-weight: 650;
    color: var(--ink);
    margin-bottom: 3px;
    letter-spacing: -0.005em;
}
.card p { margin: 0; font-size: 13px; line-height: 1.55; color: var(--ink-muted); }

.foot {
    margin-top: 40px;
    padding-top: 24px;
    border-top: 1px solid var(--line);
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 8px 20px;
    font-size: 13px;
    color: var(--ink-faint);
}
.foot a { color: var(--ink-muted); text-decoration: none; }
.foot a:hover { color: var(--ink); text-decoration: underline; }

.langs {
    display: inline-flex;
    gap: 3px;
    margin-top: 26px;
    padding: 4px;
    border: 1px solid var(--line);
    border-radius: 10px;
    background: var(--panel);
}
.langs a, .langs span {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 40px;
    min-height: 30px;
    border-radius: 7px;
    font-size: 12px;
    font-weight: 650;
    letter-spacing: .04em;
    text-decoration: none;
    color: var(--ink-faint);
}
.langs a:hover { color: var(--ink); background: rgba(255, 255, 255, .05); }
.langs [aria-current] { color: #0A1020; background: var(--gold); }

:focus-visible { outline: 2px solid var(--gold); outline-offset: 3px; border-radius: 6px; }

@media (max-width: 620px) {
    body { padding: 32px 18px; }
    .grid { grid-template-columns: 1fr; margin-top: 34px; }
    .foot { gap: 6px 14px; }
}

@media (prefers-reduced-motion: reduce) {
    *, *::before, *::after { transition: none !important; animation: none !important; }
}

/* Wer den Systemmodus auf hell stellt, bekommt trotzdem diese Bühne — eine
   Launch-Seite mit zwei Erscheinungsbildern zu pflegen lohnt nicht. Wichtig
   ist nur, dass die Kontraste hier ohnehin über AA liegen. */

.foot-net { margin-top: 4px; align-items: baseline; }
.foot-net > span:first-child { text-transform: uppercase; letter-spacing: .06em; opacity: .65; }
.foot-net a { font-weight: 600; }
</style>
<?php $this->end(); ?>

<main class="wrap">
    <span class="mark"><?= Icon::starsRing(54, 2.7) ?></span>

    <div>
        <span class="badge"><i aria-hidden="true"></i><?= $this->t('coming_soon.badge') ?></span>
    </div>

    <h1>consented<span>.eu</span></h1>

    <p class="lead"><?= $this->t('coming_soon.lead') ?></p>

    <?php if ($note !== ''): ?>
        <p class="note"><?= $this->e($note) ?></p>
    <?php endif; ?>

    <div class="grid">
        <?php foreach ($cards as [$icon, $key]): ?>
            <div class="card">
                <?= Icon::render($icon, 19) ?>
                <div>
                    <b><?= $this->t('coming_soon.card_' . $key . '_title') ?></b>
                    <p><?= $this->t('coming_soon.card_' . $key . '_text') ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="foot">
        <span>&copy; <?= date('Y') ?> consented.eu</span>
        <a href="<?= $this->e(Url::to('/legal/imprint')) ?>"><?= $this->t('legal.imprint') ?></a>
        <a href="<?= $this->e(Url::to('/legal/privacy')) ?>"><?= $this->t('legal.privacy') ?></a>
        <a href="<?= $this->e(Url::to('/consent-lookup')) ?>"><?= $this->t('legal.consent_lookup') ?></a>
        <?php if ($contact !== ''): ?>
            <a href="mailto:<?= $this->e($contact) ?>"><?= $this->t('coming_soon.contact') ?></a>
        <?php endif; ?>
    </div>

    <?php
    // Gemeinsame Projektliste aus /var/www/html/links.php.
    $csAlle = is_readable('/var/www/html/links.php') ? include '/var/www/html/links.php' : array();
    $csProj = (is_array($csAlle) && function_exists('lwit_liste')) ? lwit_liste($csAlle, 'consented', $this->locale()) : array();
    if ($csProj): ?>
    <div class="foot foot-net">
        <span><?= $this->e(lwit_titel($this->locale())) ?></span>
<?php foreach ($csProj as $pr): ?>        <a href="<?= $this->e($pr['url']) ?>" rel="noopener"><?= $this->e($pr['name']) ?></a>
<?php endforeach; ?>    </div>
    <?php endif; ?>

    <nav class="langs" aria-label="<?= $this->t('lang.switch_label') ?>">
        <?php foreach (Lang::available() as $code => $name): ?>
            <?php if ($code === $current): ?>
                <span aria-current="true" title="<?= $this->e($name) ?>"><?= $this->e(strtoupper($code)) ?></span>
            <?php else: ?>
                <a href="<?= $this->e(Url::withLang($code)) ?>" hreflang="<?= $this->e($code) ?>"
                   title="<?= $this->e($name) ?>" rel="nofollow"><?= $this->e(strtoupper($code)) ?></a>
            <?php endif; ?>
        <?php endforeach; ?>
    </nav>
</main>
