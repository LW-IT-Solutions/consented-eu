<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;
use Consented\Property\Consents;

/** @var \Consented\Core\View $this */
/** @var array<string,mixed> $property */
/** @var list<array{key:string,label:string,done:bool,href:string}> $checklist */
/** @var array<string,mixed> $stats */
$base      = '/properties/' . $property['public_id'];
$published = (int) $property['config_version'] > 0;
$openSteps = 0;
foreach ($checklist as $step) {
    if (!$step['done']) { $openSteps++; }
}
?>
<div class="page-head">
    <div>
        <div class="breadcrumb">
            <a href="<?= $this->e(Url::to('/properties')) ?>"><?= $this->t('property.index.title') ?></a>
            <?= Icon::render('chevron-right', 13) ?>
            <span><?= $this->e($property['name']) ?></span>
        </div>
        <h1 class="page-head__title"><?= $this->e($property['name']) ?></h1>
        <p class="page-head__sub">
            <?php if ($published): ?>
                <?= $this->t('property.show.version_live', ['version' => (string) $property['config_version']]) ?>
                <?php if ($hasChanges): ?>
                    · <span style="color:var(--c-warning-600);font-weight:600"><?= $this->t('property.show.unpublished_changes') ?></span>
                <?php endif; ?>
            <?php else: ?>
                <?= $this->t('property.show.draft') ?>
            <?php endif; ?>
        </p>
    </div>

    <div class="btn-group">
        <a class="btn btn--secondary" href="<?= $this->e(Url::to($base . '/integration')) ?>">
            <?= Icon::render('code', 17) ?> <?= $this->t('property.show.get_code') ?>
        </a>
        <?php if ($canPublish): ?>
            <form method="post" action="<?= $this->e(Url::to($base . '/publish')) ?>">
                <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                <button type="submit" class="btn btn--primary"
                        <?= (!$hasChanges && $published) ? 'disabled title="' . $this->t('property.show.nothing_to_publish') . '"' : '' ?>>
                    <?= Icon::render('zap', 17) ?>
                    <?= $published ? $this->t('property.show.publish_changes') : $this->t('property.show.publish') ?>
                </button>
            </form>
        <?php endif; ?>
    </div>
</div>

<?php if ($openSteps > 0): ?>
<div class="card mb-5">
    <div class="card__header">
        <span class="card__title"><?= $this->t('property.show.setup_open', ['count' => (string) $openSteps]) ?></span>
        <span class="small muted"><?= $this->e((string) (count($checklist) - $openSteps)) ?>/<?= $this->e((string) count($checklist)) ?></span>
    </div>
    <div class="card__body">
        <div class="meter mb-4">
            <div class="meter__fill meter__fill--success"
                 style="width:<?= $this->e((string) round((count($checklist) - $openSteps) / count($checklist) * 100)) ?>%"></div>
        </div>
        <ul class="checklist">
            <?php foreach ($checklist as $step): ?>
                <li data-done="<?= $step['done'] ? '1' : '0' ?>">
                    <span class="checklist__mark"><?= Icon::render('check', 13) ?></span>
                    <span class="checklist__text"><?= $this->e($step['label']) ?></span>
                    <?php if (!$step['done']): ?>
                        <a class="btn btn--subtle btn--sm" href="<?= $this->e(Url::to($step['href'])) ?>">
                            <?= $this->t('property.show.step_action') ?>
                        </a>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php endif; ?>

<div class="grid grid--4 mb-5">
    <div class="card stat">
        <div class="stat__label"><?= $this->t('property.stat.consents_label') ?></div>
        <div class="stat__value"><?= $this->number($stats['total']) ?></div>
        <div class="stat__meta" style="color:var(--accent)">
            <?= Consents::sparkline($stats['days'], 110, 26) ?>
        </div>
    </div>
    <div class="card stat">
        <div class="stat__label"><?= $this->t('property.stat.rate_label') ?></div>
        <div class="stat__value">
            <?= $stats['total'] > 0 ? $this->e(number_format($stats['rate'], 1, ',', '.')) . '&nbsp;%' : '—' ?>
        </div>
        <div class="stat__meta">
            <?= $this->t('property.stat.rate_meta', [
                'accepted' => $this->number($stats['accept_all']),
                'rejected' => $this->number($stats['reject_all']),
            ]) ?>
        </div>
    </div>
    <div class="card stat">
        <div class="stat__label"><?= $this->t('property.nav.services') ?></div>
        <div class="stat__value"><?= $this->number($serviceCount) ?></div>
        <div class="stat__meta">
            <a href="<?= $this->e(Url::to($base . '/services')) ?>"><?= $this->t('property.show.manage') ?> →</a>
        </div>
    </div>
    <div class="card stat">
        <div class="stat__label"><?= $this->t('property.stat.domains_languages_label') ?></div>
        <div class="stat__value"><?= $this->number($domainCount) ?> / <?= $this->number(count($languages)) ?></div>
        <div class="stat__meta">
            <a href="<?= $this->e(Url::to($base . '/domains')) ?>"><?= $this->t('property.nav.domains') ?> →</a>
        </div>
    </div>
</div>

<div class="grid grid--2">
    <div class="card">
        <div class="card__header"><span class="card__title"><?= $this->t('property.show.quick_access') ?></span></div>
        <div class="card__body">
            <div class="grid" style="grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:var(--space-3)">
                <?php
                $links = [
                    ['/services',  'database',  'property.nav.services'],
                    ['/design',    'palette',   'property.nav.design'],
                    ['/texts',     'file-text', 'property.nav.texts'],
                    ['/languages', 'languages', 'property.nav.languages'],
                    ['/domains',   'globe',     'property.nav.domains'],
                    ['/members',   'users',     'property.nav.members'],
                ];
                foreach ($links as [$suffix, $icon, $labelKey]):
                ?>
                    <a class="btn btn--secondary" style="justify-content:flex-start"
                       href="<?= $this->e(Url::to($base . $suffix)) ?>">
                        <?= Icon::render($icon, 17) ?> <?= $this->t($labelKey) ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card__header"><span class="card__title"><?= $this->t('property.show.releases') ?></span></div>
        <?php if ($versions === []): ?>
            <div class="card__body">
                <p class="small muted mb-0">
                    <?= $this->t('property.show.releases_empty') ?>
                </p>
            </div>
        <?php else: ?>
            <div class="table-wrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th><?= $this->t('property.show.col_version') ?></th>
                            <th><?= $this->t('property.show.col_published_at') ?></th>
                            <th><?= $this->t('property.show.col_published_by') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($versions as $v): ?>
                            <tr>
                                <td class="tnum strong">v<?= $this->e((string) $v['version']) ?></td>
                                <td class="small"><?= $this->e($this->date((string) $v['published_at'])) ?></td>
                                <td class="small muted"><?= $this->e($v['published_by_name'] ?? '—') ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>
