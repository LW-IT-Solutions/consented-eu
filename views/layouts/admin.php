<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Str;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
$activeNav = $activeNav ?? '';

/*
 * Grouped rather than one flat list. Six entries were a list; ten need an
 * order the eye can hold — who uses the instance, what runs on it, and how it
 * is configured. The group label is a heading, not a link: nothing here is a
 * landing page for a section.
 */
$groups = [
    [null, [
        ['admin.overview',   '/admin',            'grid',      'nav.admin.overview'],
    ]],
    ['nav.admin.group_accounts', [
        ['admin.users',      '/admin/users',      'users',     'nav.admin.users'],
        ['admin.orgs',       '/admin/orgs',       'globe',     'nav.admin.orgs'],
        ['admin.properties', '/admin/properties', 'layers',    'nav.admin.properties'],
    ]],
    ['nav.admin.group_content', [
        ['admin.catalog',    '/admin/catalog',    'database',  'nav.admin.catalog'],
    ]],
    ['nav.admin.group_operations', [
        ['admin.inquiries',  '/admin/inquiries',  'help',      'nav.admin.inquiries'],
        ['admin.mail',       '/admin/mail',       'mail',      'nav.admin.mail'],
        ['admin.stats',      '/admin/stats',      'grid',      'nav.admin.stats'],
        ['admin.audit',      '/admin/audit',      'file-text', 'nav.admin.audit'],
        ['admin.system',     '/admin/system',     'server',    'nav.admin.system'],
    ]],
    ['nav.admin.group_config', [
        ['admin.settings',   '/admin/settings',   'sliders',   'nav.admin.settings'],
    ]],
];
?>
<!doctype html>
<html lang="<?= $this->e($this->locale()) ?>">
<head>
<?php $this->include('partials/head', ['title' => ($title ?? '') . ' · ' . $this->tr('nav.admin'), 'noindex' => true]); ?>
</head>
<body>
<?php /* Eigenes Banner. Muss vor allen anderen Skripten stehen, damit der
         Stub blockieren kann, bevor etwas Blockierbares startet. */ ?>
<?= \Consented\Site\SelfEmbed::tags() ?>
<a class="skip-link" href="#main"><?= $this->t('layout.skip_to_content') ?></a>

<div class="app">
    <header class="topbar" style="border-bottom-color:var(--c-accent-500)">
        <a class="brand" href="<?= $this->e(Url::to('/admin')) ?>">
            <span class="brand__mark" style="color:var(--c-accent-600)"><?= Icon::starsRing(26, 1.45) ?></span>
            consented<span class="brand__tld">.eu</span>
        </a>
        <span class="badge badge--accent"><?= $this->t('nav.admin') ?></span>

        <span class="spacer"></span>

        <a class="btn btn--ghost btn--sm" href="<?= $this->e(Url::to('/dashboard')) ?>">
            <?= Icon::render('home', 17) ?> <?= $this->t('nav.to_dashboard') ?>
        </a>

        <?php $this->include('partials/lang-switch', ['compact' => true]); ?>
        <?php $this->include('partials/theme-toggle'); ?>

        <?php if ($currentUser !== null): ?>
            <form method="post" action="<?= $this->e(Url::to('/logout')) ?>" style="display:inline">
                <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                <button type="submit" class="btn btn--ghost btn--sm" aria-label="<?= $this->t('nav.logout') ?>">
                    <?= Icon::render('logout', 17) ?>
                </button>
            </form>
        <?php endif; ?>
    </header>

    <div class="app__body">
        <nav class="sidebar" aria-label="<?= $this->t('nav.admin') ?>">
            <div class="sidebar__group">
                <div class="sidebar__label"><?= $this->t('nav.group_instance') ?></div>
                <?php foreach ($groups as [$groupLabel, $items]): ?>
                    <?php if ($groupLabel !== null): ?>
                        <div class="navgroup" role="presentation"><?= $this->t($groupLabel) ?></div>
                    <?php endif; ?>
                    <?php foreach ($items as [$key, $path, $icon, $label]): ?>
                        <a class="navlink" href="<?= $this->e(Url::to($path)) ?>"
                           <?= $activeNav === $key ? 'aria-current="page"' : '' ?>>
                            <span class="navlink__icon"><?= Icon::render($icon, 18) ?></span> <?= $this->t($label) ?>
                        </a>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </nav>

        <main class="main" id="main">
            <?php /* Auch hier: sonst sieht der Betreiber im Admin-Bereich nicht,
                     dass in einem Kundenkonto noch eine Freigabe offen steht. */ ?>
            <?php $this->include('partials/support-banner', [
                'csrf'     => $csrf ?? '',
                'property' => $property ?? null,
            ]); ?>
            <?= $this->section('content') ?>
        </main>
    </div>
</div>

<?php $this->include('partials/flashes', ['flashes' => $flashes ?? []]); ?>
<?= $this->section('scripts') ?>
</body>
</html>
