<?php

declare(strict_types=1);

use Consented\Core\Csp;
use Consented\Core\Url;
use Consented\Property\Defaults;

/** @var \Consented\Core\View $this */
$presets = Defaults::presets();
$layouts = Defaults::layouts();

/**
 * Die Demo startet in der Sprache der Oberfläche, soweit der Demo-Frame sie
 * kennt. Für alles andere greift dieselbe Rückfallsprache wie im Controller.
 */
$demoLang = in_array($this->locale(), Defaults::translatedLanguages(), true)
    ? $this->locale()
    : 'de';
?>
<div class="card" style="overflow:hidden">
    <div class="card__header" style="padding:var(--space-4) var(--space-5)">
        <span class="card__title" style="font-size:var(--text-sm)"><?= $this->t('site.demo.title') ?></span>
        <span class="badge badge--info"><?= $this->t('site.demo.badge') ?></span>
    </div>

    <div class="card__body" style="padding:var(--space-4) var(--space-5);border-bottom:1px solid var(--border)">
        <div class="grid" style="grid-template-columns:repeat(auto-fit,minmax(130px,1fr));gap:var(--space-3)">
            <div>
                <label class="label tiny" for="demo-layout"><?= $this->t('site.demo.layout') ?></label>
                <select class="select" id="demo-layout" style="min-height:38px;font-size:var(--text-xs)">
                    <?php foreach ($layouts as $key => $label): ?>
                        <option value="<?= $this->e($key) ?>"><?= $this->e($label) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label class="label tiny" for="demo-preset"><?= $this->t('site.demo.theme') ?></label>
                <select class="select" id="demo-preset" style="min-height:38px;font-size:var(--text-xs)">
                    <?php foreach ($presets as $key => $preset): ?>
                        <option value="<?= $this->e($key) ?>"><?= $this->e($preset['label']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label class="label tiny" for="demo-lang"><?= $this->t('common.language') ?></label>
                <select class="select" id="demo-lang" style="min-height:38px;font-size:var(--text-xs)">
                    <option value="de"<?= $demoLang === 'de' ? ' selected' : '' ?>><?= $this->t('lang.de') ?></option>
                    <option value="en"<?= $demoLang === 'en' ? ' selected' : '' ?>><?= $this->t('lang.en') ?></option>
                </select>
            </div>
        </div>
    </div>

    <div class="demo-stage">
        <?php /*
            Kein background:#fff mehr am iframe. Der Wert war fest verdrahtet
            und leuchtete im Dunkelmodus als weißes Rechteck aus der Seite —
            sowohl vor dem Laden als auch danach, weil die Platzhalterseite im
            Frame ebenfalls hell war. Beide folgen jetzt dem Farbschema; das
            BANNER dagegen behält seine gewählten Farben, denn genau das soll
            der Besucher beurteilen.
        */ ?>
        <iframe id="demo-frame"
                class="demo-stage__frame"
                title="<?= $this->t('site.demo.frame_title') ?>"
                src="<?= $this->e(Url::to('/demo/frame')) ?>?layout=box_bottom&preset=eu_official&lang=<?= $this->e($demoLang) ?>"
                loading="lazy"></iframe>
    </div>

    <div class="card__footer" style="font-size:var(--text-xs)">
        <?= $this->tr('site.demo.footnote') ?>
    </div>
</div>

<script nonce="<?= $this->e(Csp::nonce()) ?>">
(function () {
    var frame  = document.getElementById('demo-frame');
    var preset = document.getElementById('demo-preset');
    var base   = <?= $this->js(Url::to('/demo/frame')) ?>;
    if (!frame) return;

    var root = document.documentElement;

    function isDark() {
        var attr = root.getAttribute('data-theme');
        if (attr) { return attr === 'dark'; }

        return window.matchMedia('(prefers-color-scheme: dark)').matches;
    }

    function reload() {
        var params = new URLSearchParams({
            layout: document.getElementById('demo-layout').value,
            preset: preset.value,
            lang:   document.getElementById('demo-lang').value,
            theme:  isDark() ? 'dark' : 'light'
        });
        frame.src = base + '?' + params.toString();
    }

    ['demo-layout', 'demo-preset', 'demo-lang'].forEach(function (id) {
        var el = document.getElementById(id);
        if (el) { el.addEventListener('change', reload); }
    });

    // Im Dunkelmodus mit dem dunklen Banner starten.
    //
    // Ein heller Vorschau-Kasten ist im Dunkelmodus nicht falsch — so sieht das
    // Banner auf einer hellen Kundenseite eben aus —, aber als ERSTER Eindruck
    // führt er in die Irre: der Besucher denkt, die CMP könne nur hell. Die
    // Auswahl bleibt vollständig, es ändert sich nur, welche Fassung zuerst
    // gezeigt wird.
    if (isDark() && preset.querySelector('option[value="dark_box"]')) {
        preset.value = 'dark_box';
    }

    // Der Umschalter setzt data-theme am <html>; der Frame ist ein eigenes
    // Dokument und bekommt davon nichts mit. Deshalb wird er beim Wechsel neu
    // geladen — MutationObserver statt eines eigenen Ereignisses, damit der
    // Umschalter nichts über die Vorschau wissen muss.
    if (window.MutationObserver) {
        var last = isDark();

        new MutationObserver(function () {
            if (isDark() !== last) {
                last = isDark();
                reload();
            }
        }).observe(root, { attributes: true, attributeFilter: ['data-theme'] });
    }

    // Nur neu laden, wenn das Markup nicht schon das Richtige zeigt. Sonst
    // würde der Frame zweimal geladen und das loading="lazy" im Markup wäre
    // wirkungslos.
    if (isDark()) {
        reload();
    }
})();
</script>
