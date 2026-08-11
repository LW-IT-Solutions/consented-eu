<?php

declare(strict_types=1);

use Consented\Core\Csp;
use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var list<array<string,mixed>> $entries */
/** @var array<int,bool> $attached */
$base = '/properties/' . $property['public_id'];

$categories = ['' => 'property.services.cat_all', 'essential' => 'property.services.cat_essential',
               'functional' => 'property.services.cat_functional',
               'analytics' => 'property.services.cat_analytics', 'marketing' => 'property.services.cat_marketing'];
?>
<div class="breadcrumb">
    <a href="<?= $this->e(Url::to($base . '/services')) ?>"><?= $this->t('property.services.title') ?></a>
    <?= Icon::render('chevron-right', 13) ?>
    <span><?= $this->t('property.services.catalog') ?></span>
</div>

<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->t('property.services.catalog_title') ?></h1>
        <p class="page-head__sub" id="catalog-sub">
            <?= $this->tr('property.services.catalog_subtitle', ['count' => $this->number(count($entries))]) ?>
        </p>
    </div>
</div>

<?php /* Stays a real GET form: without JavaScript the button submits and the
         page reloads with the same results. The script below only removes the
         detour. */ ?>
<form method="get" action="<?= $this->e(Url::to($base . '/services/catalog')) ?>" class="card mb-5"
      id="catalog-form" data-search="<?= $this->e(Url::to($base . '/services/catalog/search')) ?>">
    <div class="card__body row">
        <div style="flex:1 1 260px">
            <label class="visually-hidden" for="q"><?= $this->t('common.search') ?></label>
            <input class="input" type="search" id="q" name="q" placeholder="<?= $this->t('property.services.search_placeholder') ?>"
                   value="<?= $this->e($query) ?>" autocomplete="off">
        </div>
        <div style="flex:0 1 200px">
            <label class="visually-hidden" for="category"><?= $this->t('property.services.category') ?></label>
            <select class="select" id="category" name="category">
                <?php foreach ($categories as $key => $labelKey): ?>
                    <option value="<?= $this->e($key) ?>" <?= $category === $key ? 'selected' : '' ?>>
                        <?= $this->t($labelKey) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn--secondary"><?= Icon::render('search', 17) ?> <?= $this->t('common.search') ?></button>
    </div>
</form>

<div id="catalog-results" aria-live="polite" aria-busy="false">
    <?php $this->include('properties/services/catalog-results', [
        'entries'  => $entries,
        'attached' => $attached,
        'base'     => $base,
        'csrf'     => $csrf ?? '',
    ]); ?>
</div>

<?php $this->start('scripts'); ?>
<script nonce="<?= $this->e(Csp::nonce()) ?>">
(function () {
    'use strict';

    var form    = document.getElementById('catalog-form');
    var results = document.getElementById('catalog-results');
    var sub     = document.getElementById('catalog-sub');

    if (!form || !results || !window.fetch) { return; }

    var input    = form.querySelector('#q');
    var category = form.querySelector('#category');
    var endpoint = form.getAttribute('data-search');

    var timer   = null;
    var current = 0;

    function query() {
        var params = new URLSearchParams();
        params.set('q', input ? input.value : '');
        params.set('category', category ? category.value : '');
        return params.toString();
    }

    function run() {
        var qs = query();

        /* Responses can arrive out of order — typing "goo" fires three
           requests and the shortest one is not necessarily the slowest. Only
           the newest sequence number is allowed to paint. */
        var seq = ++current;

        results.setAttribute('aria-busy', 'true');

        fetch(endpoint + '?' + qs, {
            credentials: 'same-origin',
            headers: { 'Accept': 'text/html' }
        }).then(function (response) {
            if (!response.ok) { throw new Error('HTTP ' + response.status); }
            return response.text();
        }).then(function (html) {
            if (seq !== current) { return; }

            results.innerHTML = html;
            results.setAttribute('aria-busy', 'false');

            /* The server already picked the right plural form and wrote the
               whole sentence into a <template>. Moving it is all there is to
               do — no counting, no form selection, no wording in here. */
            var rendered = results.querySelector('#catalog-sub-html');

            if (sub && rendered) {
                sub.innerHTML = rendered.innerHTML;
            }

            /* Keeps reload and bookmark honest without adding a history entry
               per keystroke. */
            if (window.history && window.history.replaceState) {
                window.history.replaceState(null, '', form.getAttribute('action') + '?' + qs);
            }
        }).catch(function () {
            if (seq !== current) { return; }

            /* Leave the last good list standing. A search that briefly fails
               is less confusing than an empty page, and the submit button is
               still there to retry the whole thing. */
            results.setAttribute('aria-busy', 'false');
        });
    }

    function schedule() {
        if (timer) { window.clearTimeout(timer); }
        timer = window.setTimeout(run, 250);
    }

    if (input) { input.addEventListener('input', schedule); }
    if (category) { category.addEventListener('change', run); }

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        if (timer) { window.clearTimeout(timer); }
        run();
    });
})();
</script>
<?php $this->end(); ?>
