<?php

declare(strict_types=1);

use Consented\Core\Csp;
use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var array<string,mixed> $design */
/** @var array<string,mixed> $tokens */
/** @var array<string,string> $colorTokens */
/** @var array<string,array{label:string,tokens:array<string,string>,layout:string}> $presets */
/** @var array<string,string> $layouts */
/** @var array<string,string> $buttonOrders */
/** @var string $buttonOrder */
/** @var list<array{label:string,ratio:float,passes:bool,large:bool}> $contrast */
$base   = '/properties/' . $property['public_id'];
$failed = 0;
foreach ($contrast as $c) {
    if (!$c['passes']) { $failed++; }
}
?>
<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->t('property.design.title') ?></h1>
        <p class="page-head__sub">
            <?= $this->t('property.design.subtitle') ?>
        </p>
    </div>
</div>

<?php
/*
 * Die Vorschau steht oben und über die volle Breite.
 *
 * Vorher saß sie in einer 420 px schmalen Seitenspalte — und der Desktop-Knopf
 * setzte width:100%, also ebenfalls 420 px. Der Unterschied zwischen Desktop
 * und Mobil war damit nicht darstellbar, obwohl genau das die Frage ist, die
 * man an dieser Stelle hat: sieht das Banner auf einem Telefon noch gut aus.
 *
 * Der Preis ist, dass die Vorschau beim Scrollen nach unten aus dem Blick
 * gerät. Das ist verkraftbar, weil jedes Speichern die Seite neu lädt und man
 * dann wieder oben landet — und weil eine Fläche, in der ein 1100 px breites
 * Layout echt aussieht, mehr wert ist als eine, die immer sichtbar aber zu
 * klein zum Beurteilen ist.
 */
// A customised design has preset "custom", which the demo frame does not
// know — fall back to the neutral theme so the layout is still previewable.
$previewPreset = (string) ($design['preset'] ?? 'eu_official');
if (!isset($presets[$previewPreset])) {
    $previewPreset = 'eu_official';
}
?>
<div class="card mb-5">
    <div class="card__header" style="padding:var(--space-3) var(--space-5)">
        <span class="card__title" style="font-size:var(--text-sm)"><?= $this->t('property.design.preview_title') ?></span>
        <?php /* Ohne Symbole: der Icon-Satz hat weder Monitor noch Telefon, und
                 „Desktop" und „Mobil" sind als Wörter eindeutig. Ein Blitz oder
                 ein Raster daneben hätte nur geraten ausgesehen. */ ?>
        <div class="btn-group" role="group" aria-label="<?= $this->t('property.design.preview_viewport') ?>">
            <button type="button" class="btn btn--sm btn--secondary"
                    data-preview-width="100%" aria-pressed="true">
                <?= $this->t('property.design.preview_desktop') ?>
            </button>
            <button type="button" class="btn btn--sm btn--ghost"
                    data-preview-width="390px" aria-pressed="false">
                <?= $this->t('property.design.preview_mobile') ?>
            </button>
        </div>
    </div>

    <?php
    /*
     * Die Vorschau bekommt die gespeicherten Farben mit, nicht nur das Preset.
     *
     * Vorher standen hier nur layout, preset und order. Damit konnte die
     * Vorschau nach dem Speichern gar nichts anderes zeigen als das Preset —
     * und nach dem Veröffentlichen auch nicht. Das Skript unten schickt beim
     * Tippen dieselben Feldnamen; hier ist der Zustand, der ohne JavaScript
     * schon stimmt.
     *
     * Der Server prüft jeden `token_*`-Wert selbst, unbekannte Schlüssel fallen
     * dort heraus. Deshalb dürfen sie hier ungefiltert mitgehen.
     */
    $previewQuery = [
        'layout'    => (string) ($design['layout'] ?? 'box_bottom'),
        'preset'    => $previewPreset,
        'order'     => $buttonOrder,
        'scrollbar' => $scrollbar,
    ];

    foreach ($tokens as $tokenKey => $tokenValue) {
        if (is_string($tokenValue) || is_int($tokenValue)) {
            $previewQuery['token_' . $tokenKey] = (string) $tokenValue;
        }
    }
    ?>
    <div class="preview-stage">
        <iframe id="design-preview" class="preview-stage__frame"
                title="<?= $this->t('property.design.preview_iframe_title') ?>"
                src="<?= $this->e(Url::withQuery('/demo/frame', $previewQuery)) ?>"></iframe>
    </div>

    <div class="card__footer tiny">
        <?= $this->t('property.design.preview_note') ?>
    </div>
</div>

<?php /* Die Formularspalte begrenzt ihre Breite selbst. Über die volle Breite
         eines großen Bildschirms würde ein Farbfeld-Raster auseinanderlaufen und
         die Zeilen wären zu lang zum Lesen; die Vorschau darüber darf und soll
         dagegen so breit sein wie möglich. */ ?>
<div style="max-width:920px">
    <form method="post" action="<?= $this->e(Url::to($base . '/design')) ?>" id="design-form">
            <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">

            <div class="card mb-5">
                <div class="card__header"><span class="card__title"><?= $this->t('property.design.presets_title') ?></span></div>
                <div class="card__body">
                    <div class="grid" style="grid-template-columns:repeat(auto-fit,minmax(150px,1fr));gap:var(--space-2)">
                        <?php foreach ($presets as $key => $preset): ?>
                            <?php /* The key travels as the button's own value: a submit
                                     button posts its name/value pair, so no script has
                                     to fill a hidden field first. */ ?>
                            <button type="submit" name="apply_preset" value="<?= $this->e($key) ?>"
                                    class="btn btn--secondary" style="justify-content:flex-start"
                                    <?= $canEdit ? '' : 'disabled' ?>>
                                <span class="dot" style="background:<?= $this->e($preset['tokens']['primary']) ?>"></span>
                                <?= $this->e($preset['label']) ?>
                            </button>
                        <?php endforeach; ?>
                    </div>
                    <p class="help"><?= $this->t('property.design.presets_help') ?></p>
                </div>
            </div>

            <div class="card mb-5">
                <div class="card__header"><span class="card__title"><?= $this->t('property.design.layout_title') ?></span></div>
                <div class="card__body">
                    <div class="field">
                        <label class="label" for="layout"><?= $this->t('property.design.layout_label') ?></label>
                        <select class="select" id="layout" name="layout" <?= $canEdit ? '' : 'disabled' ?>>
                            <?php foreach ($layouts as $key => $label): ?>
                                <option value="<?= $this->e($key) ?>"
                                    <?= ($design['layout'] ?? '') === $key ? 'selected' : '' ?>>
                                    <?= $this->e($label) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <?php /* Die Beschriftungen zeigen die Knöpfe in der Reihenfolge,
                             in der sie erscheinen — dann muss niemand aus
                             „settings,reject,accept" erst ein Bild bauen. */ ?>
                    <div class="field">
                        <label class="label" for="button_order">
                            <?= $this->t('property.design.button_order_label') ?>
                        </label>
                        <select class="select" id="button_order" name="button_order" <?= $canEdit ? '' : 'disabled' ?>>
                            <?php foreach ($buttonOrders as $key => $pattern): ?>
                                <option value="<?= $this->e($key) ?>"
                                    <?= $buttonOrder === $key ? 'selected' : '' ?>>
                                    <?= $this->e(strtr($pattern, [
                                        ':settings' => $this->t('property.design.order_slot_settings'),
                                        ':reject'   => $this->t('property.design.order_slot_reject'),
                                        ':accept'   => $this->t('property.design.order_slot_accept'),
                                    ])) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <p class="help"><?= $this->tr('property.design.button_order_help') ?></p>
                    </div>

                    <div class="field">
                        <label class="label" for="scrollbar">
                            <?= $this->t('property.design.scrollbar_label') ?>
                        </label>
                        <select class="select" id="scrollbar" name="scrollbar" <?= $canEdit ? '' : 'disabled' ?>>
                            <?php foreach ($scrollbars as $key => $labelKey): ?>
                                <option value="<?= $this->e($key) ?>"
                                    <?= $scrollbar === $key ? 'selected' : '' ?>>
                                    <?= $this->t($labelKey) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <p class="help"><?= $this->t('property.design.scrollbar_help') ?></p>
                    </div>

                    <label class="checkbox">
                        <input type="checkbox" name="backdrop" value="1"
                               <?= (int) ($design['backdrop'] ?? 0) === 1 ? 'checked' : '' ?> <?= $canEdit ? '' : 'disabled' ?>>
                        <span><?= $this->t('property.design.backdrop_label') ?>
                            <span class="help" style="display:block">
                                <?= $this->t('property.design.backdrop_help') ?>
                            </span>
                        </span>
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="backdrop_blur" value="1"
                               <?= (int) ($design['backdrop_blur'] ?? 0) === 1 ? 'checked' : '' ?> <?= $canEdit ? '' : 'disabled' ?>>
                        <span><?= $this->t('property.design.backdrop_blur_label') ?></span>
                    </label>
                </div>
            </div>

            <div class="card mb-5">
                <div class="card__header"><span class="card__title"><?= $this->t('property.design.colors_title') ?></span></div>
                <div class="card__body">
                    <div class="grid grid--2" style="gap:var(--space-4)">
                        <?php foreach ($colorTokens as $key => $label): ?>
                            <?php $value = (string) ($tokens[$key] ?? '#FFFFFF'); ?>
                            <div class="field">
                                <label class="label" for="token_<?= $this->e($key) ?>"><?= $this->e($label) ?></label>
                                <div class="row row--tight row--nowrap">
                                    <input type="color" id="token_<?= $this->e($key) ?>_picker"
                                           value="<?= $this->e(substr($value, 0, 7)) ?>"
                                           data-sync="token_<?= $this->e($key) ?>"
                                           style="width:44px;height:44px;padding:2px;border:1px solid var(--border-strong);
                                                  border-radius:var(--radius-sm);background:none;cursor:pointer"
                                           aria-label="<?= $this->t('property.design.pick_color', ['name' => $label]) ?>"
                                           <?= $canEdit ? '' : 'disabled' ?>>
                                    <input class="input mono" type="text" id="token_<?= $this->e($key) ?>"
                                           name="token_<?= $this->e($key) ?>" value="<?= $this->e($value) ?>"
                                           pattern="#[0-9a-fA-F]{3,6}" style="text-transform:uppercase"
                                           <?= $canEdit ? '' : 'readonly' ?>>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid--3" style="gap:var(--space-4)">
                        <div class="field">
                            <label class="label" for="token_radius"><?= $this->t('property.design.radius_label') ?></label>
                            <input class="input" type="text" id="token_radius" name="token_radius"
                                   value="<?= $this->e((string) ($tokens['radius'] ?? '14px')) ?>" placeholder="14px">
                        </div>
                        <div class="field">
                            <label class="label" for="token_buttonRadius"><?= $this->t('property.design.button_radius_label') ?></label>
                            <input class="input" type="text" id="token_buttonRadius" name="token_buttonRadius"
                                   value="<?= $this->e((string) ($tokens['buttonRadius'] ?? '9px')) ?>" placeholder="9px">
                        </div>
                        <div class="field">
                            <label class="label" for="token_maxWidth"><?= $this->t('property.design.max_width_label') ?></label>
                            <input class="input" type="text" id="token_maxWidth" name="token_maxWidth"
                                   value="<?= $this->e((string) ($tokens['maxWidth'] ?? '560px')) ?>" placeholder="560px">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-5">
                <div class="card__header">
                    <span class="card__title"><?= $this->t('property.design.contrast_title') ?></span>
                    <?php if ($failed === 0): ?>
                        <span class="badge badge--success"><?= $this->t('property.design.contrast_all_pass') ?></span>
                    <?php else: ?>
                        <span class="badge badge--danger">
                            <?= $this->t('property.design.contrast_failed', ['count' => $failed]) ?>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="card__body">
                    <?php foreach ($contrast as $c): ?>
                        <div class="row row--between" style="padding:6px 0;border-bottom:1px solid var(--border)">
                            <span class="small"><?= $this->e($c['label']) ?></span>
                            <span class="row row--tight">
                                <span class="tnum small muted"><?= $this->e(number_format($c['ratio'], 2, ',', '')) ?>:1</span>
                                <?php if ($c['passes']): ?>
                                    <span class="badge badge--success"><?= $this->t('property.design.contrast_pass') ?></span>
                                <?php else: ?>
                                    <span class="badge badge--danger">
                                        &lt; <?= $c['large'] ? '3,0' : '4,5' ?>
                                    </span>
                                <?php endif; ?>
                            </span>
                        </div>
                    <?php endforeach; ?>
                    <?php if ($failed > 0): ?>
                        <p class="help mt-3">
                            <?= $this->t('property.design.contrast_hint') ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="card mb-5">
                <div class="card__header"><span class="card__title"><?= $this->t('property.design.custom_css_title') ?></span></div>
                <div class="card__body">
                    <div class="field" style="margin-bottom:0">
                        <label class="visually-hidden" for="custom_css"><?= $this->t('property.design.custom_css_title') ?></label>
                        <textarea class="textarea mono" id="custom_css" name="custom_css" rows="6"
                                  style="font-size:13px" placeholder=".ce-title { letter-spacing: -0.02em; }"
                                  <?= $canEdit ? '' : 'readonly' ?>><?= $this->e((string) ($design['custom_css'] ?? '')) ?></textarea>
                        <p class="help">
                            <?= $this->tr('property.design.custom_css_help') ?>
                        </p>
                    </div>
                </div>
            </div>

            <?php if ($canEdit): ?>
                <div class="row row--end">
                    <button type="submit" class="btn btn--primary"><?= $this->t('property.design.save') ?></button>
                </div>
            <?php endif; ?>
    </form>
</div>

<?php $this->start('scripts'); ?>
<script nonce="<?= $this->e(Csp::nonce()) ?>">
(function () {
    // Colour picker and hex field stay in sync in both directions.
    document.querySelectorAll('[data-sync]').forEach(function (picker) {
        var field = document.getElementById(picker.getAttribute('data-sync'));
        if (!field) return;

        picker.addEventListener('input', function () {
            field.value = picker.value.toUpperCase();

            /*
             * Ein programmatisch gesetztes .value löst kein input-Ereignis aus.
             * Genau daran hing die Live-Vorschau: wer den Farbwähler zog, änderte
             * das Textfeld, aber niemand erfuhr davon. Das Ereignis von Hand
             * auszulösen macht die Kopplung für alle Zuhörer sichtbar, statt die
             * Vorschau als weiteren Sonderfall hier anzuhängen.
             */
            field.dispatchEvent(new Event('input', { bubbles: true }));
        });
        field.addEventListener('input', function () {
            if (/^#[0-9a-fA-F]{6}$/.test(field.value)) { picker.value = field.value; }
        });
    });

    var frame  = document.getElementById('design-preview');
    var layout = document.getElementById('layout');
    var stage  = frame ? frame.parentNode : null;
    var root   = document.documentElement;

    if (!frame) { return; }

    function isDark() {
        var attr = root.getAttribute('data-theme');
        if (attr) { return attr === 'dark'; }

        return window.matchMedia('(prefers-color-scheme: dark)').matches;
    }

    /**
     * Setzt einen Parameter am Frame, ohne die übrigen zu verlieren.
     *
     * Die Vorschau trägt Layout, Preset und Farbschema gleichzeitig; ein
     * Neubau der URL aus dem Nichts hätte bei jeder Änderung die anderen zwei
     * zurückgesetzt.
     */
    function setParam(name, value) {
        var pair = {};
        pair[name] = value;
        setParams(pair);
    }

    /**
     * Setzt mehrere Parameter und lädt den Frame genau einmal neu.
     *
     * Die Farbmaske hat elf Felder. Einzeln gesetzt hätte jedes ein eigenes
     * Neuladen ausgelöst — auf einem Raspberry Pi elf Anfragen für eine
     * Änderung.
     */
    function setParams(pairs) {
        var url = new URL(frame.src, window.location.origin);

        for (var name in pairs) {
            if (Object.prototype.hasOwnProperty.call(pairs, name)) {
                url.searchParams.set(name, pairs[name]);
            }
        }

        frame.src = url.toString();
    }

    if (layout) {
        layout.addEventListener('change', function () { setParam('layout', layout.value); });
    }

    // Die Reihenfolge wirkt sofort in der Vorschau. Ohne das müsste man
    // speichern, um zu sehen, was man ausgewählt hat — und genau die Frage,
    // ob die Anordnung gut aussieht, beantwortet man vor dem Speichern.
    var order = document.getElementById('button_order');

    if (order) {
        order.addEventListener('change', function () { setParam('order', order.value); });
    }

    // Denselben Weg für die Scrollbalken. Sie zeigen sich erst, wenn die Liste
    // im Dialog länger ist als der Platz — deshalb öffnet die Vorschau den
    // Dienste-Reiter, sonst wählt man hier blind.
    var scrollbar = document.getElementById('scrollbar');

    if (scrollbar) {
        scrollbar.addEventListener('change', function () { setParam('scrollbar', scrollbar.value); });
    }

    /*
     * Farben und Maße wirken ebenfalls sofort.
     *
     * Vorher zeigte die Vorschau nur das Preset: wer eine Farbe änderte, sah
     * nichts davon, und die Frage „sieht das gut aus" ließ sich erst nach dem
     * Speichern beantworten. Die Feldnamen sind dieselben, die auch abgesendet
     * werden, und der Server prüft sie mit derselben Methode — hier wird nichts
     * über Farben entschieden, nur weitergegeben.
     */
    var tokenFields = document.querySelectorAll('[name^="token_"]');
    var tokenTimer  = null;

    function pushTokens() {
        var pairs = {};

        for (var i = 0; i < tokenFields.length; i++) {
            pairs[tokenFields[i].name] = tokenFields[i].value;
        }

        setParams(pairs);
    }

    for (var i = 0; i < tokenFields.length; i++) {
        // 'input' auch für die Farbwähler: sie feuern beim Ziehen fortlaufend,
        // deshalb entprellt. 'change' fängt das Verlassen des Textfeldes.
        tokenFields[i].addEventListener('input', function () {
            if (tokenTimer) { window.clearTimeout(tokenTimer); }
            tokenTimer = window.setTimeout(pushTokens, 350);
        });
        tokenFields[i].addEventListener('change', function () {
            if (tokenTimer) { window.clearTimeout(tokenTimer); }
            pushTokens();
        });
    }

    // Die Platzhalterseite im Frame folgt dem Farbschema der Oberfläche, das
    // Banner behält seine eigenen Farben — sonst leuchtet im Dunkelmodus ein
    // weißes Rechteck aus der Seite.
    if (isDark()) { setParam('theme', 'dark'); }

    if (window.MutationObserver) {
        var wasDark = isDark();

        new MutationObserver(function () {
            if (isDark() !== wasDark) {
                wasDark = isDark();
                setParam('theme', wasDark ? 'dark' : 'light');
            }
        }).observe(root, { attributes: true, attributeFilter: ['data-theme'] });
    }

    var widthButtons = document.querySelectorAll('[data-preview-width]');

    widthButtons.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var width = btn.getAttribute('data-preview-width');

            frame.style.width = width;

            // Die Bühne bekommt die Gerätedarstellung nur in der Mobilbreite:
            // ein zentriertes, hohes Rechteck mit Rahmen liest sich als Telefon,
            // dieselbe Behandlung über die volle Breite dagegen als Fehler.
            if (stage) { stage.classList.toggle('preview-stage--mobile', width !== '100%'); }

            widthButtons.forEach(function (other) {
                var active = other === btn;

                other.classList.toggle('btn--secondary', active);
                other.classList.toggle('btn--ghost', !active);
                other.setAttribute('aria-pressed', active ? 'true' : 'false');
            });
        });
    });
})();
</script>
<?php $this->end(); ?>
