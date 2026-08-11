<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Str;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var \Consented\Auth\User|null $currentUser */
$currentUser = $currentUser ?? null;
$property    = $property ?? null;
$activeNav   = $activeNav ?? '';
?>
<!doctype html>
<html lang="<?= $this->e($this->locale()) ?>">
<head>
<?php $this->include('partials/head', ['title' => $title ?? null, 'noindex' => true]); ?>
</head>
<body>
<?php /* Eigenes Banner. Muss vor allen anderen Skripten stehen, damit der
         Stub blockieren kann, bevor etwas Blockierbares startet. */ ?>
<?= \Consented\Site\SelfEmbed::tags() ?>
<a class="skip-link" href="#main"><?= $this->t('layout.skip_to_content') ?></a>

<div class="app">
    <header class="topbar">
        <a class="brand" href="<?= $this->e(Url::to('/dashboard')) ?>">
            <span class="brand__mark" style="color:var(--accent)"><?= Icon::starsRing(26, 1.45) ?></span>
            consented<span class="brand__tld">.eu</span>
        </a>

        <?php if ($property !== null): ?>
            <span class="subtle" aria-hidden="true"><?= Icon::render('chevron-right', 16) ?></span>
            <a href="<?= $this->e(Url::to('/properties/' . $property['public_id'])) ?>"
               class="small strong truncate" style="max-width:220px">
                <?= $this->e($property['name']) ?>
            </a>
        <?php endif; ?>

        <span class="spacer"></span>

        <?php /* Rechts, vor Sprache und Theme — dieselbe Stelle wie in
                 MousePlayerDev. Fuehrt auf eine eigene Seite statt in ein
                 Modal: ein Modal braucht einen Klick-Handler, und die CSP
                 hier laeuft ohne 'unsafe-inline' und ohne 'unsafe-hashes' —
                 ein onclick-Attribut wuerde stillschweigend verworfen. */ ?>
        <a class="btn btn--ghost btn--sm" href="<?= $this->e(Url::withQuery('/kontakt', ['from' => Url::current()])) ?>"
           title="<?= $this->t('inquiry.nav_title') ?>" aria-label="<?= $this->t('inquiry.nav_title') ?>">
            <?= Icon::render('help', 17) ?>
        </a>

        <?php $this->include('partials/lang-switch', ['compact' => true]); ?>
        <?php $this->include('partials/theme-toggle'); ?>

        <?php if ($currentUser !== null): ?>
            <div class="row row--tight row--nowrap">
                <a href="<?= $this->e(Url::to('/account')) ?>" class="btn btn--ghost btn--sm"
                   title="<?= $this->e($currentUser->email()) ?>">
                    <span class="property-card__avatar" style="width:26px;height:26px;font-size:11px;border-radius:var(--radius-sm)">
                        <?= $this->e(Str::initials($currentUser->name())) ?>
                    </span>
                    <span class="truncate" style="max-width:130px"><?= $this->e($currentUser->name()) ?></span>
                </a>
                <form method="post" action="<?= $this->e(Url::to('/logout')) ?>" style="display:inline">
                    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                    <button type="submit" class="btn btn--ghost btn--sm" aria-label="<?= $this->t('nav.logout') ?>">
                        <?= Icon::render('logout', 17) ?>
                    </button>
                </form>
            </div>
        <?php endif; ?>
    </header>

    <div class="app__body">
        <nav class="sidebar" aria-label="<?= $this->t('nav.main') ?>">
            <?php if ($property === null): ?>
                <div class="sidebar__group">
                    <div class="sidebar__label"><?= $this->t('nav.group_overview') ?></div>
                    <a class="navlink" href="<?= $this->e(Url::to('/dashboard')) ?>"
                       <?= $activeNav === 'dashboard' ? 'aria-current="page"' : '' ?>>
                        <span class="navlink__icon"><?= Icon::render('home', 18) ?></span> <?= $this->t('nav.dashboard') ?>
                    </a>
                    <a class="navlink" href="<?= $this->e(Url::to('/properties')) ?>"
                       <?= $activeNav === 'properties' ? 'aria-current="page"' : '' ?>>
                        <span class="navlink__icon"><?= Icon::render('layers', 18) ?></span> <?= $this->t('nav.properties') ?>
                    </a>
                </div>
                <div class="sidebar__group">
                    <div class="sidebar__label"><?= $this->t('nav.group_account') ?></div>
                    <a class="navlink" href="<?= $this->e(Url::to('/account')) ?>"
                       <?= $activeNav === 'account' ? 'aria-current="page"' : '' ?>>
                        <span class="navlink__icon"><?= Icon::render('settings', 18) ?></span> <?= $this->t('nav.settings') ?>
                    </a>
                    <a class="navlink" href="<?= $this->e(Url::to('/docs')) ?>">
                        <span class="navlink__icon"><?= Icon::render('book', 18) ?></span> <?= $this->t('nav.docs') ?>
                    </a>
                </div>
                <?php if ($currentUser !== null && $currentUser->isAdmin()): ?>
                    <div class="sidebar__group">
                        <div class="sidebar__label"><?= $this->t('nav.group_instance') ?></div>
                        <a class="navlink" href="<?= $this->e(Url::to('/admin')) ?>">
                            <span class="navlink__icon" style="color:var(--c-accent-600)">
                                <?= Icon::render('shield', 18) ?>
                            </span> <?= $this->t('nav.admin') ?>
                        </a>
                    </div>
                <?php endif; ?>
            <?php else: ?>
                <?php
                $base  = Url::to('/properties/' . $property['public_id']);
                $items = [
                    ['overview',   '',              'grid',      'nav.property.overview'],
                    ['integration', '/integration', 'code',      'nav.property.integration'],
                    ['services',   '/services',     'database',  'nav.property.services'],
                    ['design',     '/design',       'palette',   'nav.property.design'],
                    ['texts',      '/texts',        'file-text', 'nav.property.texts'],
                    ['languages',  '/languages',    'languages', 'nav.property.languages'],
                    ['domains',    '/domains',      'globe',     'nav.property.domains'],
                    ['members',    '/members',      'users',     'nav.property.members'],
                    ['settings',   '/settings',     'sliders',   'nav.property.settings'],
                ];
                ?>
                <div class="sidebar__group">
                    <div class="sidebar__label"><?= $this->t('nav.group_property') ?></div>
                    <?php foreach ($items as [$key, $suffix, $icon, $label]): ?>
                        <a class="navlink" href="<?= $this->e($base . $suffix) ?>"
                           <?= $activeNav === $key ? 'aria-current="page"' : '' ?>>
                            <span class="navlink__icon"><?= Icon::render($icon, 18) ?></span> <?= $this->t($label) ?>
                        </a>
                    <?php endforeach; ?>
                </div>
                <div class="sidebar__group">
                    <div class="sidebar__label"><?= $this->t('common.back') ?></div>
                    <a class="navlink" href="<?= $this->e(Url::to('/properties')) ?>">
                        <span class="navlink__icon"><?= Icon::render('layers', 18) ?></span> <?= $this->t('nav.all_properties') ?>
                    </a>
                </div>
            <?php endif; ?>
        </nav>

        <main class="main" id="main">
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
