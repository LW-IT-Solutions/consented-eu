<?php

declare(strict_types=1);

use Consented\Core\Csp;
use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */

/*
 * Die Sprache, in der die Doku gerade gelesen wird, geht ins Beispiel.
 *
 * `?lang=` wählt die Sprache der Cookie-Erklärung, nicht die der Doku — aber
 * `?lang=de` auf einer englischen Seite liest sich wie ein Fehler im Beispiel.
 * Wer hier auf Polnisch liest, will polnisch sehen.
 */
$exampleLang = $this->locale();
?>
<section class="section">
    <div class="container container--narrow">
        <div class="section__head">
            <p class="eyebrow" style="justify-content:center"><?= Icon::render('book', 15) ?> <?= $this->t('site.docs.eyebrow') ?></p>
            <h1 class="mt-3" style="font-size:var(--text-2xl)"><?= $this->t('site.docs.title') ?></h1>
        </div>

        <div class="card mb-5">
            <div class="card__header"><span class="card__title"><?= $this->t('site.docs.step1_title') ?></span></div>
            <div class="card__body">
                <p class="small mb-4">
                    <?= $this->tr('site.docs.step1_intro') ?>
                </p>
                <div class="code">
                    <button type="button" class="code-copy" data-copy-target="snip"><?= $this->t('common.copy') ?></button>
<pre id="snip">&lt;<span class="tok-tag">script</span> <span class="tok-attr">src</span>=<span class="tok-str">"https://consented.eu/sdk/dist/stub.js"</span>
        <span class="tok-attr">data-block</span>=<span class="tok-str">"googletagmanager.com/gtag|connect.facebook.net"</span>&gt;&lt;/<span class="tok-tag">script</span>&gt;
&lt;<span class="tok-tag">script</span> <span class="tok-attr">async</span> <span class="tok-attr">src</span>=<span class="tok-str">"https://consented.eu/p/<?= $this->t('site.docs.code_property_id') ?>/cmp.js"</span>&gt;&lt;/<span class="tok-tag">script</span>&gt;</pre>
                </div>
                <p class="help mt-3">
                    <?= $this->tr('site.docs.step1_help') ?>
                </p>
            </div>
        </div>

        <div class="card mb-5">
            <div class="card__header"><span class="card__title"><?= $this->t('site.docs.step2_title') ?></span></div>
            <div class="card__body">
                <p class="small mb-3"><?= $this->tr('site.docs.step2_declarative') ?></p>
                <div class="code mb-4">
<pre>&lt;<span class="tok-tag">script</span> <span class="tok-attr">type</span>=<span class="tok-str">"text/plain"</span> <span class="tok-attr">data-consented</span>=<span class="tok-str">"google-analytics-4"</span>&gt;
  gtag(<span class="tok-str">'config'</span>, <span class="tok-str">'G-XXXXXXX'</span>);
&lt;/<span class="tok-tag">script</span>&gt;</pre>
                </div>

                <p class="small mb-3"><?= $this->tr('site.docs.step2_pattern') ?></p>
                <p class="small muted mb-3">
                    <?= $this->tr('site.docs.step2_pattern_text') ?>
                </p>

                <?php
                /*
                 * Die Grenze der Musterblockade gehört hierher, nicht nur in
                 * docs/OPEN_QUESTIONS.md.
                 *
                 * Beide Wege standen hier als gleichwertig da. Sie sind es
                 * nicht: bei Markup, das der Parser verarbeitet, kommt der Stub
                 * vor dem Abruf dazwischen — bei einem Skript, das per
                 * appendChild ins Dokument kommt, ist das ein Rennen, das der
                 * Observer nicht garantiert gewinnt. Wer das nicht weiß, hält
                 * die Musterblockade für einen Ersatz des deklarativen Wegs.
                 */
                ?>
                <div class="alert alert--info">
                    <span class="alert__icon"><?= Icon::render('info', 18) ?></span>
                    <div class="alert__body">
                        <?= $this->tr('site.docs.step2_pattern_limit') ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-5">
            <div class="card__header"><span class="card__title"><?= $this->t('site.docs.step3_title') ?></span></div>
            <div class="card__body">
                <div class="code">
<pre><span class="tok-cmt">// <?= $this->t('site.docs.code_ready') ?></span>
Consented.ready(<span class="tok-tag">function</span> (state) {
  <span class="tok-tag">if</span> (state &amp;&amp; state.services[<span class="tok-str">'google-analytics-4'</span>]) { startTracking(); }
});

<span class="tok-cmt">// <?= $this->t('site.docs.code_change') ?></span>
Consented.on(<span class="tok-str">'change'</span>, <span class="tok-tag">function</span> (state) { console.log(state); });

<span class="tok-cmt">// <?= $this->t('site.docs.code_open') ?></span>
Consented.openSettings();

<span class="tok-cmt">// <?= $this->t('site.docs.code_proof') ?></span>
Consented.getConsentId();</pre>
                </div>
            </div>
        </div>

        <div class="card mb-5">
            <div class="card__header"><span class="card__title"><?= $this->t('site.docs.step4_title') ?></span></div>
            <div class="card__body">
                <div class="table-wrap">
                    <table class="table">
                        <thead><tr><th><?= $this->t('site.docs.col_event') ?></th><th><?= $this->t('site.docs.col_when') ?></th></tr></thead>
                        <tbody>
                            <tr><td><code>consented_ready</code></td><td><?= $this->t('site.docs.event_ready') ?></td></tr>
                            <tr><td><code>consented_update</code></td><td><?= $this->t('site.docs.event_update') ?></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card mb-5">
            <div class="card__header"><span class="card__title"><?= $this->t('site.docs.step5_title') ?></span></div>
            <div class="card__body">
                <p class="small mb-4">
                    <?= $this->tr('site.docs.step5_intro') ?>
                </p>
                <div class="code">
                    <button type="button" class="code-copy" data-copy-target="snip-cd"><?= $this->t('common.copy') ?></button>
<pre id="snip-cd">&lt;<span class="tok-tag">div</span> <span class="tok-attr">id</span>=<span class="tok-str">"consented-cookie-declaration"</span>&gt;&lt;/<span class="tok-tag">div</span>&gt;
&lt;<span class="tok-tag">script</span> <span class="tok-attr">src</span>=<span class="tok-str">"https://consented.eu/p/<?= $this->t('site.docs.code_property_id') ?>/cookies.js?lang=<?= $this->e($exampleLang) ?>"</span>&gt;&lt;/<span class="tok-tag">script</span>&gt;</pre>
                </div>
                <p class="help mt-3">
                    <?= $this->tr('site.docs.step5_help') ?>
                </p>

                <p class="small mb-2 mt-4"><?= $this->tr('site.docs.step5_page') ?></p>
                <div class="code">
<pre>https://consented.eu/p/<?= $this->t('site.docs.code_property_id') ?>/cookies?lang=<?= $this->e($exampleLang) ?></pre>
                </div>

                <p class="help mt-3 mb-0">
                    <?= $this->tr('site.docs.step5_source') ?>
                </p>
            </div>
        </div>

        <div class="card">
            <div class="card__header"><span class="card__title"><?= $this->t('site.docs.rights_title') ?></span></div>
            <div class="card__body">
                <p class="small mb-3">
                    <?= $this->t('site.docs.rights_text') ?>
                </p>
                <div class="code">
<pre>GET    /api/v1/consent/{consentId}
DELETE /api/v1/consent/{consentId}</pre>
                </div>
                <p class="help mt-3">
                    <?= $this->tr('site.docs.rights_link', ['url' => Url::to('/consent-lookup')]) ?>
                </p>
            </div>
        </div>
    </div>
</section>

<?php $this->start('scripts'); ?>
<script nonce="<?= $this->e(Csp::nonce()) ?>">
(function () {
    var copiedLabel = <?= $this->js($this->tr('common.copied')) ?>;

    document.addEventListener('click', function (e) {
        var btn = e.target.closest('[data-copy-target]');
        if (!btn) return;
        var el = document.getElementById(btn.getAttribute('data-copy-target'));
        if (!el) return;
        navigator.clipboard.writeText(el.innerText).then(function () {
            var t = btn.textContent;
            btn.textContent = copiedLabel;
            setTimeout(function () { btn.textContent = t; }, 1800);
        });
    });
})();
</script>
<?php $this->end(); ?>
