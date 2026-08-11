<?php

declare(strict_types=1);

use Consented\Core\Csp;
use Consented\Core\Icon;
use Consented\Core\Url;
use Consented\Core\Project;

/** @var \Consented\Core\View $this */
/** @var array{properties:int,consents:int,domains:int} $stats */
$stats = $stats ?? ['properties' => 0, 'consents' => 0, 'domains' => 0];

/**
 * Icon + Schlüsselstamm; die Texte stehen unter site.home.feature_<key>_title/_text.
 *
 * Hier stand „IAB TCF v2.2 — Vollständige __tcfapi-Implementierung, eigener
 * TC-String-Encoder, Vendor-Layer, Publisher Restrictions" an erster Stelle.
 * `__tcfapi` kommt im gesamten Code null mal vor. Ein Raster gelieferter
 * Funktionen ist der falsche Ort für etwas, das vorbereitet aber nicht da ist:
 * die Vergleichstabelle unten führt TCF als „in Vorbereitung", und /features
 * erklärt in einem eigenen Abschnitt, warum der Schalter aus bleibt, solange
 * keine CMP-ID von IAB Europe vorliegt. Beides bleibt, das Kästchen geht.
 */
$features = [
    ['zap',          'blocking'],
    ['chart',        'consent_mode'],
    ['languages',    'i18n'],
    ['palette',      'custom'],
    ['database',     'log'],
    ['server',       'selfhost'],
    ['lock',         'privacy'],
];

/**
 * Zeilenschlüssel, danach je Spalte: true, false oder ein Wertschlüssel.
 * Aufgelöst über site.home.compare_row_<key> bzw. site.home.compare_val_<key>.
 */
$comparison = [
    ['cost',      'free',      'paid_tiered', 'paid_tiered'],
    ['source',    true,        false,         false],
    ['selfhost',  true,        false,         false],
    ['domains',   'unlimited', 'per_plan',    'per_plan'],
    ['own_db',    true,        false,         false],
    ['tcf_cert',  'planned',   true,          true],
    // 'planned', nicht 'in_progress'. Vom Scanner existieren zwei leere Tabellen
    // aus Migration 0006 und ein Absatz in PLAN.md — kein Controller, kein
    // Worker, keine Zeile Code. „In Arbeit" auf der Startseite behauptete mehr
    // als die eigene Funktionsseite, die ihn unter planned_scanner führt, und
    // zwar nach außen.
    ['scanner',   'planned',   true,          true],
];
?>

<section class="hero">
    <div class="container">
        <div class="hero__grid">
            <div>
                <p class="eyebrow">
                    <?= Icon::render('shield-check', 15) ?> <?= $this->t('site.home.hero_eyebrow') ?>
                </p>

                <h1 class="display mt-3">
                    <?= $this->t('site.home.hero_title_line1') ?><br>
                    <span class="gradient-text"><?= $this->t('site.home.hero_title_line2') ?></span>
                </h1>

                <p class="lead mt-4" style="max-width:52ch">
                    <?= $this->t('site.home.hero_lead') ?>
                </p>

                <div class="btn-group mt-5">
                    <a class="btn btn--primary btn--lg" href="<?= $this->e(Url::to('/register')) ?>">
                        <?= $this->t('site.home.hero_cta_primary') ?> <?= Icon::render('arrow-right', 18) ?>
                    </a>
                    <a class="btn btn--secondary btn--lg" href="<?= $this->e(Url::to('/self-hosting')) ?>">
                        <?= Icon::render('server', 18) ?> <?= $this->t('site.home.hero_cta_selfhost') ?>
                    </a>
                    <a class="btn btn--ghost btn--lg" href="<?= $this->e(Project::REPO_URL) ?>"
                       target="_blank" rel="noopener">
                        <?= Icon::render('github', 18) ?> <?= $this->t('site.home.hero_cta_github') ?>
                    </a>
                </div>

                <ul class="hero__points">
                    <li><?= Icon::render('check', 17) ?><span><?= $this->t('site.home.hero_point_1') ?></span></li>
                    <li><?= Icon::render('check', 17) ?><span><?= $this->t('site.home.hero_point_2') ?></span></li>
                    <li><?= Icon::render('check', 17) ?><span><?= $this->t('site.home.hero_point_3') ?></span></li>
                </ul>
            </div>

            <div>
                <?php $this->include('site/partials/demo'); ?>
            </div>
        </div>
    </div>
</section>

<?php if ($stats['properties'] > 0 || $stats['consents'] > 0): ?>
<section class="section" style="padding-block:var(--space-6)">
    <div class="container">
        <div class="card">
            <div class="grid grid--3" style="gap:0">
                <div class="stat center">
                    <div class="stat__label"><?= $this->t('site.home.stat_properties') ?></div>
                    <div class="stat__value"><?= $this->number($stats['properties']) ?></div>
                </div>
                <div class="stat center" style="border-inline:1px solid var(--border)">
                    <div class="stat__label"><?= $this->t('site.home.stat_domains') ?></div>
                    <div class="stat__value"><?= $this->number($stats['domains']) ?></div>
                </div>
                <div class="stat center">
                    <div class="stat__label"><?= $this->t('site.home.stat_consents') ?></div>
                    <div class="stat__value"><?= $this->number($stats['consents']) ?></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="section section--tint" id="features">
    <div class="container">
        <div class="section__head">
            <p class="eyebrow" style="justify-content:center"><?= $this->t('site.home.features_eyebrow') ?></p>
            <h2 class="mt-3"><?= $this->t('site.home.features_title') ?></h2>
            <p class="lead">
                <?= $this->t('site.home.features_lead') ?>
            </p>
        </div>

        <div class="grid grid--3">
            <?php foreach ($features as [$icon, $key]): ?>
                <article class="feature">
                    <div class="feature__icon"><?= Icon::render($icon, 20) ?></div>
                    <h3><?= $this->t('site.home.feature_' . $key . '_title') ?></h3>
                    <p><?= $this->t('site.home.feature_' . $key . '_text') ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section">
    <div class="container container--narrow">
        <div class="section__head">
            <p class="eyebrow" style="justify-content:center"><?= $this->t('site.home.compare_eyebrow') ?></p>
            <h2 class="mt-3"><?= $this->t('site.home.compare_title') ?></h2>
            <p class="lead">
                <?= $this->t('site.home.compare_lead') ?>
            </p>
        </div>

        <div class="card card--flush">
            <div class="table-wrap">
                <table class="table compare">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->t('site.home.compare_col_feature') ?></th>
                            <th scope="col">consented.eu</th>
                            <th scope="col">Cookiebot</th>
                            <th scope="col">Usercentrics</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($comparison as $row): ?>
                            <tr>
                                <th scope="row" style="font-weight:600;color:var(--text-strong);background:none;
                                           text-transform:none;letter-spacing:normal;font-size:var(--text-sm)">
                                    <?= $this->t('site.home.compare_row_' . $row[0]) ?>
                                </th>
                                <?php foreach (array_slice($row, 1) as $cell): ?>
                                    <td>
                                        <?php if ($cell === true): ?>
                                            <span style="color:var(--c-success-600)"><?= Icon::render('check', 18) ?></span>
                                            <span class="visually-hidden"><?= $this->t('common.yes') ?></span>
                                        <?php elseif ($cell === false): ?>
                                            <span class="subtle"><?= Icon::render('x', 18) ?></span>
                                            <span class="visually-hidden"><?= $this->t('common.no') ?></span>
                                        <?php else: ?>
                                            <span class="small"><?= $this->t('site.home.compare_val_' . (string) $cell) ?></span>
                                        <?php endif; ?>
                                    </td>
                                <?php endforeach; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <p class="tiny muted mt-4 center">
            <?= $this->t('site.home.compare_note', ['date' => date('m/Y')]) ?>
        </p>
    </div>
</section>

<section class="section section--tint">
    <div class="container container--narrow">
        <div class="section__head">
            <p class="eyebrow" style="justify-content:center"><?= $this->t('site.home.free_eyebrow') ?></p>
            <h2 class="mt-3"><?= $this->t('site.home.free_title') ?></h2>
        </div>

        <div class="card">
            <div class="card__body stack">
                <p>
                    <?= $this->t('site.home.free_p1') ?>
                </p>
                <p>
                    <?= $this->t('site.home.free_p2') ?>
                </p>
                <p>
                    <?= $this->t('site.home.free_p3') ?>
                </p>
                <p class="small muted mb-0">
                    <?= $this->t('site.home.free_note') ?>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="grid grid--2" style="align-items:center;gap:var(--space-7)">
            <div>
                <p class="eyebrow"><?= Icon::render('server', 15) ?> <?= $this->t('site.home.selfhost_eyebrow') ?></p>
                <h2 class="mt-3"><?= $this->t('site.home.selfhost_title') ?></h2>
                <p class="lead mt-3">
                    <?= $this->t('site.home.selfhost_lead') ?>
                </p>
                <ul class="hero__points mt-4">
                    <li><?= Icon::render('check', 17) ?><span><?= $this->t('site.home.selfhost_point_1') ?></span></li>
                    <li><?= Icon::render('check', 17) ?><span><?= $this->t('site.home.selfhost_point_2') ?></span></li>
                    <li><?= Icon::render('check', 17) ?><span><?= $this->t('site.home.selfhost_point_3') ?></span></li>
                </ul>
                <a class="btn btn--secondary mt-5" href="<?= $this->e(Url::to('/self-hosting')) ?>">
                    <?= $this->t('site.home.selfhost_cta') ?> <?= Icon::render('arrow-right', 17) ?>
                </a>
            </div>

            <div class="code">
                <button type="button" class="code-copy" data-copy-target="selfhost-snippet"><?= $this->t('common.copy') ?></button>
<pre id="selfhost-snippet"><span class="tok-cmt"># <?= $this->t('site.home.code_clone') ?></span>
<?php /* Zeilenumbruch explizit: PHP verschluckt genau einen Newline direkt
         nach "?>", was in einem <pre>-Block zwei Zeilen zusammenklebt. */ ?>
git clone <?= $this->e(Project::CLONE_URL) . "\n" ?>
cd consented-eu

<span class="tok-cmt"># <?= $this->t('site.home.code_config') ?></span>
cp .env.example .env
$EDITOR .env

<span class="tok-cmt"># <?= $this->t('site.home.code_db') ?></span>
php bin/migrate
php bin/seed

<span class="tok-cmt"># <?= $this->t('site.home.code_docroot') ?></span></pre>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cta-band">
            <h2 style="font-size:var(--text-2xl)"><?= $this->t('site.home.cta_title') ?></h2>
            <p class="lead mt-3" style="max-width:48ch;margin-inline:auto;color:rgba(255,255,255,.82)">
                <?= $this->tr('site.home.cta_text') ?>
            </p>
            <div class="btn-group mt-5" style="justify-content:center">
                <a class="btn btn--secondary btn--lg" href="<?= $this->e(Url::to('/register')) ?>">
                    <?= $this->t('site.home.cta_register') ?>
                </a>
                <a class="btn btn--ghost btn--lg" href="<?= $this->e(Url::to('/docs')) ?>">
                    <?= $this->t('site.home.cta_docs') ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php $this->start('scripts'); ?>
<script nonce="<?= $this->e(Csp::nonce()) ?>">
document.addEventListener('click', function (e) {
    var btn = e.target.closest('[data-copy-target]');
    if (!btn) return;

    var el = document.getElementById(btn.getAttribute('data-copy-target'));
    if (!el) return;

    navigator.clipboard.writeText(el.innerText).then(function () {
        var original = btn.textContent;
        btn.textContent = <?= $this->js(__('common.copied')) ?>;
        setTimeout(function () { btn.textContent = original; }, 1800);
    });
});
</script>
<?php $this->end(); ?>
