<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var array<string,int> $counts */
/** @var list<array{level:string,label:string,detail:string}> $health */
?>
<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->t('admin.overview.title') ?></h1>
        <p class="page-head__sub"><?= $this->t('admin.overview.subtitle') ?></p>
    </div>
</div>

<div class="grid grid--4 mb-6">
    <div class="card stat">
        <div class="stat__label"><?= $this->t('admin.overview.stat_users') ?></div>
        <div class="stat__value"><?= $this->number($counts['users']) ?></div>
        <div class="stat__meta">
            <?php if ($counts['unverified'] > 0): ?>
                <?= $this->t('admin.overview.stat_users_unverified', ['count' => $this->number($counts['unverified'])]) ?>
            <?php else: ?>
                <?= $this->t('admin.overview.stat_users_all_verified') ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="card stat">
        <div class="stat__label"><?= $this->t('admin.overview.stat_properties') ?></div>
        <div class="stat__value"><?= $this->number($counts['properties']) ?></div>
        <div class="stat__meta"><?= $this->t('admin.overview.stat_properties_live', ['count' => $this->number($counts['live'])]) ?></div>
    </div>
    <div class="card stat">
        <div class="stat__label"><?= $this->t('admin.overview.stat_consents') ?></div>
        <div class="stat__value"><?= $this->number($counts['consents']) ?></div>
        <div class="stat__meta"><?= $this->t('admin.overview.stat_consents_meta') ?></div>
    </div>
    <div class="card stat">
        <div class="stat__label"><?= $this->t('admin.overview.stat_sessions') ?></div>
        <div class="stat__value"><?= $this->number($counts['sessions']) ?></div>
        <div class="stat__meta"><?= $this->t('admin.overview.stat_sessions_orgs', ['count' => $this->number($counts['orgs'])]) ?></div>
    </div>
</div>

<div class="grid grid--2">
    <div class="card">
        <div class="card__header"><span class="card__title"><?= $this->t('admin.overview.health_title') ?></span></div>
        <div class="card__body" style="padding:0">
            <?php foreach ($health as $i => $h): ?>
                <?php
                [$colour, $icon] = match ($h['level']) {
                    'ok'    => ['var(--c-success-600)', 'check'],
                    'warn'  => ['var(--c-warning-600)', 'alert'],
                    'error' => ['var(--c-danger-600)', 'alert'],
                    default => ['var(--text-subtle)', 'info'],
                };
                ?>
                <div class="row row--top" style="gap:var(--space-3);padding:var(--space-4) var(--space-5);
                     <?= $i > 0 ? 'border-top:1px solid var(--border)' : '' ?>">
                    <span style="color:<?= $colour ?>;flex:0 0 auto;margin-top:1px">
                        <?= Icon::render($icon, 17) ?>
                    </span>
                    <span style="flex:1 1 auto;min-width:0">
                        <span class="strong small" style="display:block"><?= $this->e($h['label']) ?></span>
                        <span class="tiny muted"><?= $this->e($h['detail']) ?></span>
                    </span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="card">
        <div class="card__header">
            <span class="card__title"><?= $this->t('admin.overview.recent_title') ?></span>
            <a class="small" href="<?= $this->e(Url::to('/admin/users')) ?>"><?= $this->t('admin.overview.recent_all') ?> →</a>
        </div>
        <?php if ($recent === []): ?>
            <div class="card__body"><p class="small muted mb-0"><?= $this->t('admin.overview.recent_empty') ?></p></div>
        <?php else: ?>
            <div class="table-wrap">
                <table class="table">
                    <thead><tr>
                        <th><?= $this->t('admin.users.col_user') ?></th>
                        <th><?= $this->t('common.status') ?></th>
                        <th><?= $this->t('admin.overview.col_registered') ?></th>
                    </tr></thead>
                    <tbody>
                        <?php foreach ($recent as $u): ?>
                            <tr>
                                <td>
                                    <span class="small strong" style="display:block"><?= $this->e($u['name']) ?></span>
                                    <span class="tiny muted"><?= $this->e($u['email']) ?></span>
                                </td>
                                <td>
                                    <?php if ((int) $u['is_admin'] === 1): ?>
                                        <span class="badge badge--accent"><?= $this->t('admin.users.badge_admin') ?></span>
                                    <?php elseif ($u['email_verified_at'] === null): ?>
                                        <span class="badge badge--warning"><?= $this->t('admin.users.badge_unverified') ?></span>
                                    <?php else: ?>
                                        <span class="badge badge--success"><?= $this->t('admin.users.badge_verified') ?></span>
                                    <?php endif; ?>
                                </td>
                                <td class="tiny muted"><?= $this->e($this->date((string) $u['created_at'])) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php if ($failedMail > 0): ?>
    <div class="alert alert--warning mt-5">
        <span class="alert__icon"><?= Icon::render('mail', 18) ?></span>
        <div class="alert__body row row--between">
            <span><?= $this->t('admin.overview.failed_mail', ['count' => $this->number($failedMail)]) ?></span>
            <a class="strong small" href="<?= $this->e(Url::to('/admin/mail')) ?>"><?= $this->t('admin.overview.failed_mail_link') ?> →</a>
        </div>
    </div>
<?php endif; ?>
