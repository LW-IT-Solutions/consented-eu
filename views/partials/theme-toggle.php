<?php

declare(strict_types=1);

use Consented\Core\Csp;
use Consented\Core\Icon;

/** @var \Consented\Core\View $this */
?>
<button type="button" class="btn btn--ghost btn--sm" id="ce-theme-toggle"
        aria-label="<?= $this->t('layout.theme_toggle_aria') ?>" title="<?= $this->t('layout.theme_toggle') ?>">
    <span data-theme-icon="light" aria-hidden="true"><?= Icon::render('moon', 17) ?></span>
    <span data-theme-icon="dark" class="hidden" aria-hidden="true"><?= Icon::render('sun', 17) ?></span>
</button>
<script nonce="<?= $this->e(Csp::nonce()) ?>">
(function () {
    var btn = document.getElementById('ce-theme-toggle');
    if (!btn) return;

    var root = document.documentElement;

    function current() {
        var attr = root.getAttribute('data-theme');
        if (attr) return attr;
        return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    }

    function paint() {
        var dark = current() === 'dark';
        btn.querySelector('[data-theme-icon="light"]').classList.toggle('hidden', dark);
        btn.querySelector('[data-theme-icon="dark"]').classList.toggle('hidden', !dark);
    }

    btn.addEventListener('click', function () {
        var next = current() === 'dark' ? 'light' : 'dark';
        root.setAttribute('data-theme', next);
        try { localStorage.setItem('ce-theme', next); } catch (e) {}
        paint();
    });

    paint();
})();
</script>
