<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var list<array<string,mixed>> $messages */
/** @var bool $enabled */
?>
<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->t('admin.mail.title') ?></h1>
        <p class="page-head__sub"><?= $this->t('admin.mail.subtitle') ?></p>
    </div>
    <form method="post" action="<?= $this->e(Url::to('/admin/mail/test')) ?>">
        <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
        <button type="submit" class="btn btn--secondary">
            <?= Icon::render('mail', 17) ?> <?= $this->t('admin.mail.send_test') ?>
        </button>
    </form>
</div>

<?php if (!$enabled): ?>
    <div class="alert alert--warning mb-5">
        <span class="alert__icon"><?= Icon::render('alert', 18) ?></span>
        <div class="alert__body row row--between">
            <span><?= $this->tr('admin.mail.disabled_notice') ?></span>
            <a class="strong small" href="<?= $this->e(Url::to('/admin/settings')) ?>"><?= $this->t('admin.mail.enable_link') ?> →</a>
        </div>
    </div>
<?php endif; ?>

<div class="tabs">
    <?php
    $tabs = [
        ''           => 'common.all',
        'sent'       => 'admin.mail.tab_sent',
        'failed'     => 'admin.mail.tab_failed',
        'suppressed' => 'admin.mail.tab_suppressed',
    ];
    ?>
    <?php foreach ($tabs as $key => $labelKey): ?>
        <a class="tab" href="<?= $this->e(Url::withQuery('/admin/mail', ['status' => $key])) ?>"
           <?= $status === $key ? 'aria-current="page"' : '' ?>><?= $this->t($labelKey) ?></a>
    <?php endforeach; ?>
</div>

<?php if ($messages === []): ?>
    <div class="card">
        <div class="empty">
            <div class="empty__icon"><?= Icon::render('mail', 26) ?></div>
            <h2 class="empty__title"><?= $this->t('admin.mail.empty_title') ?></h2>
            <p class="empty__text"><?= $this->t('admin.mail.empty_text') ?></p>
        </div>
    </div>
<?php else: ?>
    <div class="card card--flush">
        <div class="table-wrap">
            <table class="table">
                <thead>
                    <tr>
                        <th><?= $this->t('admin.mail.col_recipient') ?></th>
                        <th><?= $this->t('admin.mail.col_subject') ?></th>
                        <th><?= $this->t('common.status') ?></th>
                        <th><?= $this->t('admin.mail.col_time') ?></th>
                        <th class="table__actions"><?= $this->t('admin.mail.col_content') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($messages as $m): ?>
                        <tr>
                            <td class="small break-all"><?= $this->e($m['recipient']) ?></td>
                            <td class="small"><?= $this->e($m['subject']) ?></td>
                            <td>
                                <?php
                                [$class, $labelKey] = match ($m['status']) {
                                    'sent'       => ['badge badge--success', 'admin.mail.status_sent'],
                                    'failed'     => ['badge badge--danger', 'admin.mail.status_failed'],
                                    default      => ['badge badge--warning', 'admin.mail.status_suppressed'],
                                };
                                ?>
                                <span class="<?= $this->e($class) ?>"><?= $this->t($labelKey) ?></span>
                                <?php if ($m['error'] !== null): ?>
                                    <div class="tiny muted mt-2"><?= $this->e($m['error']) ?></div>
                                <?php endif; ?>
                            </td>
                            <td class="tiny muted nowrap"><?= $this->e($this->date((string) $m['created_at'])) ?></td>
                            <td class="table__actions">
                                <a class="btn btn--ghost btn--sm" target="_blank" rel="noopener"
                                   href="<?= $this->e(Url::to('/admin/mail/' . $m['public_id'])) ?>">
                                    <?= Icon::render('eye', 16) ?> <?= $this->t('admin.mail.view') ?>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php endif; ?>

<p class="tiny muted mt-4"><?= $this->t('admin.mail.security_note') ?></p>
