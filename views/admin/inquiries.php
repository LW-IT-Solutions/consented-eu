<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;
use Consented\Site\Inquiry;

/** @var \Consented\Core\View $this */
/** @var list<array<string,mixed>> $rows */
/** @var array<string,int> $counts */
/** @var int $total */
/** @var string $status */
/** @var \Consented\Core\Paginator $pager */
/** @var bool $signalOn */
/** @var bool $captchaOn */

$filters = [
    ''            => __('admin.inquiries.filter_all'),
    'new'         => __('admin.inquiries.status_new'),
    'in_progress' => __('admin.inquiries.status_in_progress'),
    'done'        => __('admin.inquiries.status_done'),
];

$badge = ['new' => 'badge--warning', 'in_progress' => 'badge--info', 'done' => 'badge--success'];
?>
<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->t('admin.inquiries.title') ?></h1>
        <p class="page-head__sub">
            <?= $this->t('admin.inquiries.subtitle', ['count' => $this->number($total)]) ?>
        </p>
    </div>
</div>

<?php /* Ein stiller Ausfall der Nebenwege faellt nur hier auf. */ ?>
<?php if (!$signalOn): ?>
    <div class="alert alert--info mb-3">
        <span class="alert__icon"><?= Icon::render('info', 18) ?></span>
        <div class="alert__body"><?= $this->t('admin.inquiries.telegram_off') ?></div>
    </div>
<?php endif; ?>

<?php if (!$captchaOn): ?>
    <div class="alert alert--warning mb-3">
        <span class="alert__icon"><?= Icon::render('alert', 18) ?></span>
        <div class="alert__body"><?= $this->t('admin.inquiries.captcha_off') ?></div>
    </div>
<?php endif; ?>

<div class="row row--tight mb-4">
    <?php foreach ($filters as $key => $label): ?>
        <a class="btn btn--sm <?= $status === $key ? 'btn--secondary' : 'btn--ghost' ?>"
           href="<?= $this->e(Url::withQuery('/admin/inquiries', ['status' => $key])) ?>">
            <?= $this->e($label) ?>
            <?php if ($key !== ''): ?>
                <span class="tiny muted"><?= $this->number($counts[$key] ?? 0) ?></span>
            <?php endif; ?>
        </a>
    <?php endforeach; ?>
</div>

<?php if ($rows === []): ?>
    <div class="card"><div class="card__body">
        <p class="muted center"><?= $this->t('admin.inquiries.empty') ?></p>
    </div></div>
<?php else: ?>
    <div class="stack">
        <?php foreach ($rows as $row): ?>
            <?php
            $id    = (string) $row['public_id'];
            $state = (string) $row['status'];
            ?>
            <div class="card">
                <div class="card__header">
                    <span class="card__title">
                        <?= $this->e($row['email']) ?>
                        <span class="badge <?= $badge[$state] ?? '' ?>" style="margin-left:6px">
                            <?= $this->t('admin.inquiries.status_' . $state) ?>
                        </span>
                    </span>
                    <span class="small muted">
                        <?= $this->e($this->date($row['created_at'])) ?>
                        · <?= $this->t('inquiry.topic_' . $row['topic']) ?>
                    </span>
                </div>

                <div class="card__body">
                    <?php /* Zeilenumbrueche uebernimmt CSS, nicht nl2br: so bleibt
                             der Text durchgehend escaped und es entsteht kein
                             Markup, das jemand spaeter fuer erlaubt haelt. */ ?>
                    <p style="white-space:pre-wrap"><?= $this->e($row['message']) ?></p>

                    <div class="row row--tight tiny muted mt-3" style="flex-wrap:wrap;gap:var(--space-3)">
                        <span>
                            <?= $row['user_id'] === null
                                ? $this->t('admin.inquiries.anonymous')
                                : $this->t('admin.inquiries.registered') ?>
                        </span>

                        <span>
                            <?= $this->t('admin.inquiries.score') ?>:
                            <?php if ($row['captcha_score'] === null): ?>
                                <span title="<?= $this->e(__('admin.inquiries.score_unknown_help')) ?>">
                                    <?= $this->t('admin.inquiries.score_unknown') ?>
                                </span>
                            <?php else: ?>
                                <?= $this->e((string) $row['captcha_score']) ?>
                            <?php endif; ?>
                        </span>

                        <?php if ((string) $row['source_url'] !== ''): ?>
                            <span>
                                <?= $this->t('admin.inquiries.from_page') ?>:
                                <?php /* Bewusst kein Link. Der Wert kommt aus einem
                                         versteckten Feld und gehoert dem Absender;
                                         als Klickziel im Adminbereich waere er ein
                                         Angriffsweg, als Text ist er eine Angabe. */ ?>
                                <code><?= $this->e($row['source_url']) ?></code>
                            </span>
                        <?php endif; ?>

                        <?php if ($row['handler_email'] !== null): ?>
                            <span><?= $this->t('admin.inquiries.handled_by', [
                                'email' => (string) $row['handler_email'],
                            ]) ?></span>
                        <?php endif; ?>

                        <span><code><?= $this->e(substr($id, 0, 8)) ?></code></span>
                    </div>

                    <div class="row row--tight mt-3">
                        <?php foreach (['in_progress' => 'take', 'done' => 'finish', 'new' => 'reopen'] as $to => $label): ?>
                            <?php if ($state === $to) { continue; } ?>
                            <form method="post"
                                  action="<?= $this->e(Url::to('/admin/inquiries/' . $id . '/status')) ?>">
                                <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                                <input type="hidden" name="status" value="<?= $this->e($to) ?>">
                                <button type="submit" class="btn btn--sm btn--ghost">
                                    <?= $this->t('admin.inquiries.' . $label) ?>
                                </button>
                            </form>
                        <?php endforeach; ?>

                        <form method="post"
                              action="<?= $this->e(Url::to('/admin/inquiries/' . $id . '/delete')) ?>"
                              data-confirm="<?= $this->e(__('admin.inquiries.delete_confirm')) ?>">
                            <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                            <button type="submit" class="btn btn--sm btn--ghost text-danger">
                                <?= $this->t('admin.inquiries.delete') ?>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <?php $this->include('partials/pager', ['pager' => $pager, 'query' => ['status' => $status]]); ?>
<?php endif; ?>
