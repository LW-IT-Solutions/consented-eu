<?php

declare(strict_types=1);

use Consented\Core\Csp;
use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */

// Texte für das Skript unten. tr() liefert den rohen Katalogtext; die
// Kodierung für den <script>-Kontext übernimmt js().
$strings = [
    'granted'       => $this->tr('site.lookup.js_granted'),
    'denied'        => $this->tr('site.lookup.js_denied'),
    'categories'    => $this->tr('site.lookup.js_categories'),
    'services'      => $this->tr('site.lookup.js_services'),
    'recordTitle'   => $this->tr('site.lookup.js_record_title'),
    'labelId'       => $this->tr('site.lookup.js_label_id'),
    'labelCreated'  => $this->tr('site.lookup.js_label_created'),
    'labelUpdated'  => $this->tr('site.lookup.js_label_updated'),
    'labelDomain'   => $this->tr('site.lookup.js_label_domain'),
    'labelLanguage' => $this->tr('site.lookup.js_label_language'),
    'deleteButton'  => $this->tr('site.lookup.js_delete'),
    'deleteConfirm' => $this->tr('site.lookup.js_delete_confirm'),
    'deleted'       => $this->tr('site.lookup.js_deleted'),
    'deleteFailed'  => $this->tr('site.lookup.js_delete_failed'),
    'invalidId'     => $this->tr('site.lookup.js_invalid_id'),
    'notFound'      => $this->tr('site.lookup.js_not_found'),
];
?>
<section class="section">
    <div class="container container--narrow">
        <div class="section__head">
            <p class="eyebrow" style="justify-content:center"><?= Icon::render('search', 15) ?> <?= $this->t('site.lookup.eyebrow') ?></p>
            <h1 class="mt-3" style="font-size:var(--text-2xl)"><?= $this->t('legal.consent_lookup') ?></h1>
            <p class="lead">
                <?= $this->t('site.lookup.lead') ?>
            </p>
        </div>

        <div class="card mb-5">
            <div class="card__body">
                <div class="field" style="margin-bottom:0">
                    <label class="label" for="cid"><?= $this->t('site.lookup.field_id') ?></label>
                    <div class="row row--tight row--nowrap">
                        <input class="input mono" type="text" id="cid" style="flex:1 1 auto"
                               placeholder="00000000-0000-0000-0000-000000000000"
                               autocapitalize="none" spellcheck="false">
                        <button type="button" class="btn btn--primary" id="lookup"><?= $this->t('site.lookup.submit') ?></button>
                    </div>
                    <p class="help">
                        <?= $this->t('site.lookup.help') ?>
                    </p>
                </div>
            </div>
        </div>

        <div id="result" hidden></div>

        <div class="alert alert--info">
            <span class="alert__icon"><?= Icon::render('info', 18) ?></span>
            <div class="alert__body">
                <div class="alert__title"><?= $this->t('site.lookup.stored_title') ?></div>
                <?= $this->tr('site.lookup.stored_text') ?>
            </div>
        </div>
    </div>
</section>

<?php $this->start('scripts'); ?>
<script nonce="<?= $this->e(Csp::nonce()) ?>">
(function () {
    var input  = document.getElementById('cid');
    var button = document.getElementById('lookup');
    var result = document.getElementById('result');
    var apiBase = <?= $this->js(Url::to('/api/v1/consent/')) ?>;
    var T = <?= $this->js($strings) ?>;

    function esc(s) {
        return String(s == null ? '' : s).replace(/[&<>"']/g, function (c) {
            return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c];
        });
    }

    function show(html) {
        result.innerHTML = html;
        result.hidden = false;
    }

    function decisionRows(map, title) {
        var keys = Object.keys(map || {});
        if (!keys.length) return '';

        var rows = keys.map(function (k) {
            return '<tr><td class="mono small">' + esc(k) + '</td><td>' +
                (map[k]
                    ? '<span class="badge badge--success">' + esc(T.granted) + '</span>'
                    : '<span class="badge">' + esc(T.denied) + '</span>') +
                '</td></tr>';
        }).join('');

        return '<h3 class="mb-3 mt-5" style="font-size:var(--text-md)">' + esc(title) + '</h3>' +
               '<div class="table-wrap"><table class="table"><tbody>' + rows + '</tbody></table></div>';
    }

    function render(data) {
        show(
            '<div class="card mb-5"><div class="card__header">' +
            '<span class="card__title">' + esc(T.recordTitle) + '</span>' +
            '<span class="badge badge--info">' + esc(data.action) + '</span></div>' +
            '<div class="card__body">' +
            '<p class="small mb-2"><strong>' + esc(T.labelId) + ':</strong> <span class="mono">' + esc(data.consentId) + '</span></p>' +
            '<p class="small mb-2"><strong>' + esc(T.labelCreated) + ':</strong> ' + esc(data.createdAt) + ' UTC</p>' +
            '<p class="small mb-2"><strong>' + esc(T.labelUpdated) + ':</strong> ' + esc(data.updatedAt) + ' UTC</p>' +
            '<p class="small mb-2"><strong>' + esc(T.labelDomain) + ':</strong> ' + esc(data.domain || '—') + '</p>' +
            '<p class="small mb-0"><strong>' + esc(T.labelLanguage) + ':</strong> ' + esc(data.language || '—') + '</p>' +
            decisionRows(data.decisions && data.decisions.categories, T.categories) +
            decisionRows(data.decisions && data.decisions.services, T.services) +
            '<p class="small muted mt-5 mb-0">' + esc(data.storedPersonalData) + '</p>' +
            '</div><div class="card__footer row row--end">' +
            '<button type="button" class="btn btn--danger" id="delete-consent">' + esc(T.deleteButton) + '</button>' +
            '</div></div>'
        );

        document.getElementById('delete-consent').addEventListener('click', function () {
            if (!confirm(T.deleteConfirm)) {
                return;
            }

            fetch(apiBase + encodeURIComponent(data.consentId), { method: 'DELETE' })
                .then(function (r) { return r.ok ? r.json() : Promise.reject(r); })
                .then(function () {
                    show('<div class="alert alert--success"><div class="alert__body">' +
                         esc(T.deleted) + '</div></div>');
                })
                ['catch'](function () {
                    show('<div class="alert alert--error"><div class="alert__body">' +
                         esc(T.deleteFailed) + '</div></div>');
                });
        });
    }

    button.addEventListener('click', function () {
        var id = input.value.trim();

        if (!/^[0-9a-fA-F-]{36}$/.test(id)) {
            show('<div class="alert alert--warning"><div class="alert__body">' +
                 esc(T.invalidId) + '</div></div>');
            return;
        }

        fetch(apiBase + encodeURIComponent(id), { headers: { Accept: 'application/json' } })
            .then(function (r) { return r.ok ? r.json() : Promise.reject(r); })
            .then(render)
            ['catch'](function () {
                show('<div class="alert alert--warning"><div class="alert__body">' +
                     esc(T.notFound) + '</div></div>');
            });
    });

    input.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') { button.click(); }
    });
})();
</script>
<?php $this->end(); ?>
