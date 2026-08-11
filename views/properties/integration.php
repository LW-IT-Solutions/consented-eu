<?php

declare(strict_types=1);

use Consented\Core\Csp;
use Consented\Core\Icon;
use Consented\Core\Lang;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var string $snippet */
/** @var list<array<string,mixed>> $services */
/** @var list<string> $patterns */
$base = '/properties/' . $property['public_id'];
?>
<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->t('property.integration.title') ?></h1>
        <p class="page-head__sub"><?= $this->tr('property.integration.intro') ?></p>
    </div>
</div>

<?php if (!$published): ?>
    <div class="alert alert--warning mb-5">
        <span class="alert__icon"><?= Icon::render('alert', 18) ?></span>
        <div class="alert__body">
            <div class="alert__title"><?= $this->t('property.integration.unpublished_title') ?></div>
            <?= $this->tr('property.integration.unpublished_text', ['url' => Url::to($base)]) ?>
        </div>
    </div>
<?php endif; ?>

<?php if (!$verified && $domains !== []): ?>
    <div class="alert alert--info mb-5">
        <span class="alert__icon"><?= Icon::render('info', 18) ?></span>
        <div class="alert__body">
            <?= $this->tr('property.integration.unverified_text', ['url' => Url::to($base . '/domains')]) ?>
        </div>
    </div>
<?php endif; ?>

<div class="card mb-5">
    <div class="card__header">
        <span class="card__title"><?= $this->t('property.integration.step1_title') ?></span>
        <span class="badge badge--info"><?= $this->tr('property.integration.step1_badge') ?></span>
    </div>
    <div class="card__body">
        <div class="code">
            <button type="button" class="code-copy" data-copy-target="snippet"><?= $this->t('common.copy') ?></button>
<pre id="snippet"><?= $this->e($snippet) ?></pre>
        </div>

        <?php
        /*
         * Der Loader liest seine Konfiguration von seinem eigenen Script-Tag —
         * er läuft, bevor das Property-Bundle existiert, und hat keine andere
         * Quelle. Damit ändert sich das Snippet mit den Diensten und mit dem
         * Consent-Mode-Schalter, und wer es nicht neu einfügt, blockiert nach
         * altem Stand weiter, ohne dass es auffällt. Das muss hier stehen und
         * nicht nur in docs/OPEN_QUESTIONS.md.
         */
        ?>
        <div class="alert alert--info mt-4">
            <span class="alert__icon"><?= Icon::render('info', 18) ?></span>
            <div class="alert__body">
                <?= $this->tr('property.integration.repaste_text', [
                    'url' => Url::to($base . '/services'),
                ]) ?>
            </div>
        </div>

        <p class="help mt-3">
            <?= $this->tr('property.integration.step1_help') ?>
        </p>
    </div>
</div>

<div class="card mb-5">
    <div class="card__header"><span class="card__title"><?= $this->t('property.integration.step2_title') ?></span></div>
    <div class="card__body">
        <p class="small mb-4">
            <?= $this->t('property.integration.step2_text') ?>
        </p>

        <?php if ($services === []): ?>
            <p class="small muted mb-0"><?= $this->t('property.integration.no_services') ?></p>
        <?php else: ?>
            <?php foreach ($services as $service): ?>
                <?php if (!empty($service['essential'])) { continue; } ?>
                <div class="mb-4">
                    <p class="small strong mb-2"><?= $this->e($service['name']) ?></p>
                    <div class="code">
                        <button type="button" class="code-copy"
                                data-copy-target="blk-<?= $this->e($service['id']) ?>"><?= $this->t('common.copy') ?></button>
<pre id="blk-<?= $this->e($service['id']) ?>">&lt;script type="text/plain" data-consented="<?= $this->e($service['id']) ?>"&gt;
  // <?= $this->t('property.integration.code_comment') ?>

&lt;/script&gt;</pre>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<div class="card mb-5">
    <div class="card__header"><span class="card__title"><?= $this->t('property.integration.step3_title') ?></span></div>
    <div class="card__body">
        <p class="small mb-4">
            <?= $this->tr('property.integration.step3_text') ?>
        </p>
        <div class="code">
            <button type="button" class="code-copy" data-copy-target="footer-link"><?= $this->t('common.copy') ?></button>
<pre id="footer-link">&lt;a href="#" data-consented-open&gt;<?= $this->t('property.integration.footer_link_label') ?>&lt;/a&gt;</pre>
        </div>
    </div>
</div>

<div class="card mb-5">
    <div class="card__header"><span class="card__title"><?= $this->t('property.integration.step4_title') ?></span></div>
    <div class="card__body">
        <div class="code">
            <button type="button" class="code-copy" data-copy-target="api"><?= $this->t('common.copy') ?></button>
<pre id="api">Consented.ready(function (state) { /* … */ });
Consented.openSettings();
Consented.acceptAll();
Consented.denyAll();
Consented.withdraw();
Consented.getConsent();              // <?= $this->t('property.integration.api_comment_state') ?>

Consented.hasConsent('<?= $this->e($services[0]['id'] ?? Lang::get('property.integration.service_id_sample')) ?>');  // <?= $this->t('property.integration.api_comment_service') ?>

Consented.getConsentId();            // <?= $this->t('property.integration.api_comment_proof') ?>

Consented.on('change', function (s) { /* … */ });</pre>
        </div>
        <p class="help mt-3">
            <?= $this->tr('property.integration.step4_help') ?>
        </p>
    </div>
</div>

<?php if ($patterns !== []): ?>
<div class="card">
    <div class="card__header">
        <span class="card__title"><?= $this->t('property.integration.patterns_title') ?></span>
        <span class="badge"><?= $this->e((string) count($patterns)) ?></span>
    </div>
    <div class="card__body">
        <p class="small mb-3">
            <?= $this->tr('property.integration.patterns_text') ?>
        </p>
        <div class="row row--tight">
            <?php foreach ($patterns as $pattern): ?>
                <code class="badge mono"><?= $this->e($pattern) ?></code>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endif; ?>

<?php
/*
 * Cookie-Erklärung.
 *
 * Steht hier und nicht auf einer eigenen Seite, weil es dasselbe ist wie oben:
 * ein Schnipsel, den der Kunde in seine Seite einfügt. Nur an einer anderen
 * Stelle — in der Datenschutzerklärung statt im <head>.
 *
 * Sichtbar nur bei veröffentlichter Property. Die Erklärung entsteht aus dem
 * veröffentlichten Schnappschuss; vor der ersten Veröffentlichung gibt es
 * nichts zu zeigen, und ein Schnipsel anzubieten, der 404 liefert, wäre
 * schlimmer als keiner.
 */
?>
<?php if ($published): ?>
<div class="card mb-5">
    <div class="card__header">
        <span class="card__title"><?= $this->t('property.integration.declaration_title') ?></span>
        <a class="small" href="<?= $this->e($declarationUrl) ?>" target="_blank" rel="noopener">
            <?= $this->t('property.integration.declaration_preview') ?> <?= Icon::render('arrow-right', 14) ?>
        </a>
    </div>
    <div class="card__body">
        <p class="small mb-4"><?= $this->tr('property.integration.declaration_text') ?></p>

        <?php if (count($languages) > 1): ?>
            <div class="field" style="max-width:260px">
                <label class="label" for="cd-lang"><?= $this->t('property.integration.declaration_language') ?></label>
                <select class="select" id="cd-lang">
                    <?php foreach ($languages as $code): ?>
                        <option value="<?= $this->e($code) ?>" <?= $code === $defaultLanguage ? 'selected' : '' ?>>
                            <?= $this->e($catalogue[$code] ?? $code) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        <?php endif; ?>

        <div class="code">
            <button type="button" class="code-copy" data-copy-target="cd-snippet"><?= $this->t('common.copy') ?></button>
<pre id="cd-snippet"><?= $this->e($declarationSnippet) ?></pre>
        </div>

        <p class="help mt-3"><?= $this->tr('property.integration.declaration_help') ?></p>

        <?php if ($primaryDomain === null): ?>
            <?php /* Über die Hälfte der Katalog-Cookies trägt den Platzhalter
                     `.<domain>` als Host. Ohne Domain bleibt die Spalte leer,
                     und das soll der Betreiber erfahren, bevor sein Besucher
                     eine Tabelle mit Gedankenstrichen liest. */ ?>
            <div class="notice notice--warning mt-4">
                <p class="mb-0">
                    <?= $this->tr('property.integration.declaration_no_domain', [
                        'url' => Url::to($base . '/domains'),
                    ]) ?>
                </p>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>

<?php $this->start('scripts'); ?>
<script nonce="<?= $this->e(Csp::nonce()) ?>">
document.addEventListener('click', function (e) {
    var btn = e.target.closest('[data-copy-target]');
    if (!btn) return;
    var el = document.getElementById(btn.getAttribute('data-copy-target'));
    if (!el) return;
    navigator.clipboard.writeText(el.innerText).then(function () {
        var t = btn.textContent;
        btn.textContent = <?= $this->js(Lang::get('common.copied')) ?>;
        setTimeout(function () { btn.textContent = t; }, 1800);
    });
});

/*
 * Sprachwahl fuer die Cookie-Erklaerung.
 *
 * Ersetzt nur den lang-Parameter im gerenderten Schnipsel, statt ihn im Browser
 * neu zusammenzubauen: so bleibt das Format an einer Stelle, naemlich im
 * Controller, der ihn erzeugt.
 */
var cdLang = document.getElementById('cd-lang');
if (cdLang) {
    cdLang.addEventListener('change', function () {
        var pre = document.getElementById('cd-snippet');
        if (pre) { pre.textContent = pre.textContent.replace(/lang=[A-Za-z-]+/g, 'lang=' + cdLang.value); }
    });
}
</script>
<?php $this->end(); ?>
