<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var list<array<string,mixed>> $entries */
/** @var \Consented\Core\Paginator $pager */
/** @var array<string,string> $filters */
/** @var list<array<string,mixed>> $actors */
/** @var list<array<string,mixed>> $types */
/** @var list<array<string,mixed>> $actions */
$hasFilter = implode('', array_values($filters)) !== '';
?>
<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->t('admin.audit.title') ?></h1>
        <p class="page-head__sub">
            <?= $this->t('admin.audit.subtitle', ['count' => $this->number($pager->total())]) ?>
        </p>
    </div>
</div>

<form method="get" action="<?= $this->e(Url::to('/admin/audit')) ?>" class="card mb-5">
    <div class="card__body">
        <div class="row mb-4">
            <select class="select" name="actor" style="flex:1 1 220px"
                    aria-label="<?= $this->t('admin.audit.filter_actor') ?>">
                <option value=""><?= $this->t('admin.audit.all_actors') ?></option>
                <?php foreach ($actors as $a): ?>
                    <option value="<?= $this->e($a['public_id']) ?>"
                        <?= $filters['actor'] === (string) $a['public_id'] ? 'selected' : '' ?>>
                        <?= $this->e($a['name']) ?> · <?= $this->e($a['email']) ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <select class="select" name="type" style="flex:0 1 190px"
                    aria-label="<?= $this->t('admin.audit.filter_type') ?>">
                <option value=""><?= $this->t('admin.audit.all_types') ?></option>
                <?php foreach ($types as $t): ?>
                    <option value="<?= $this->e($t['subject_type']) ?>"
                        <?= $filters['type'] === (string) $t['subject_type'] ? 'selected' : '' ?>>
                        <?= $this->e($t['subject_type']) ?> (<?= $this->e((string) $t['n']) ?>)
                    </option>
                <?php endforeach; ?>
            </select>

            <select class="select" name="action" style="flex:0 1 240px"
                    aria-label="<?= $this->t('admin.audit.filter_action') ?>">
                <option value=""><?= $this->t('admin.audit.all_actions') ?></option>
                <?php foreach ($actions as $ac): ?>
                    <option value="<?= $this->e($ac['action']) ?>"
                        <?= $filters['action'] === (string) $ac['action'] ? 'selected' : '' ?>>
                        <?= $this->e($ac['action']) ?> (<?= $this->e((string) $ac['n']) ?>)
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="row">
            <label class="tiny muted nowrap" for="audit-from"><?= $this->t('admin.audit.from') ?></label>
            <input class="input" type="date" id="audit-from" name="from" style="flex:0 1 160px"
                   value="<?= $this->e($filters['from']) ?>">

            <label class="tiny muted nowrap" for="audit-to"><?= $this->t('admin.audit.to') ?></label>
            <input class="input" type="date" id="audit-to" name="to" style="flex:0 1 160px"
                   value="<?= $this->e($filters['to']) ?>">

            <input class="input" type="search" name="q" style="flex:1 1 220px"
                   placeholder="<?= $this->t('admin.audit.search_placeholder') ?>"
                   value="<?= $this->e($filters['q']) ?>">

            <button type="submit" class="btn btn--secondary">
                <?= Icon::render('search', 17) ?> <?= $this->t('common.search') ?>
            </button>

            <?php if ($hasFilter): ?>
                <a class="btn btn--ghost" href="<?= $this->e(Url::to('/admin/audit')) ?>">
                    <?= $this->t('admin.audit.filter_reset') ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</form>

<?php if ($entries === []): ?>
    <div class="card">
        <div class="card__body">
            <p class="small muted mb-0"><?= $this->t('admin.audit.empty') ?></p>
        </div>
    </div>
<?php else: ?>
    <div class="card card--flush">
        <div class="table-wrap">
            <table class="table">
                <thead>
                    <tr>
                        <th><?= $this->t('admin.audit.col_time') ?></th>
                        <th><?= $this->t('admin.audit.col_actor') ?></th>
                        <th><?= $this->t('common.action') ?></th>
                        <th><?= $this->t('admin.audit.col_subject') ?></th>
                        <th><?= $this->t('admin.audit.col_change') ?></th>
                        <th><?= $this->t('admin.audit.col_ip') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($entries as $entry): ?>
                        <tr>
                            <td class="tiny muted nowrap tnum">
                                <?= $this->e($this->date((string) $entry['created_at'])) ?>
                            </td>
                            <td>
                                <?php if ($entry['actor_name'] === null): ?>
                                    <span class="tiny muted"><?= $this->t('admin.audit.actor_system') ?></span>
                                <?php else: ?>
                                    <span class="small strong" style="display:block">
                                        <?= $this->e($entry['actor_name']) ?>
                                    </span>
                                    <span class="tiny muted break-all"><?= $this->e($entry['actor_email']) ?></span>
                                <?php endif; ?>
                            </td>
                            <td><span class="tiny mono nowrap"><?= $this->e($entry['action']) ?></span></td>
                            <td>
                                <?php if ($entry['subject_type'] !== null && $entry['subject_type'] !== ''): ?>
                                    <span class="badge"><?= $this->e($entry['subject_type']) ?></span>
                                <?php endif; ?>
                                <?php if ($entry['subject_id'] !== null && $entry['subject_id'] !== ''): ?>
                                    <span class="tiny mono muted break-all" style="display:block">
                                        <?= $this->e($entry['subject_id']) ?>
                                    </span>
                                <?php endif; ?>
                                <?php if ($entry['property_name'] !== null): ?>
                                    <span class="tiny muted" style="display:block">
                                        <?= $this->e($entry['property_name']) ?>
                                    </span>
                                <?php elseif ($entry['org_name'] !== null): ?>
                                    <span class="tiny muted" style="display:block">
                                        <?= $this->e($entry['org_name']) ?>
                                    </span>
                                <?php endif; ?>
                            </td>
                            <td style="min-width:220px">
                                <?php if ($entry['changes'] === []): ?>
                                    <span class="tiny subtle"><?= $this->t('admin.audit.no_change') ?></span>
                                <?php else: ?>
                                    <div class="stack-sm">
                                        <?php foreach ($entry['changes'] as $change): ?>
                                            <div>
                                                <span class="tiny mono strong" style="display:block">
                                                    <?= $this->e($change['field']) ?>
                                                </span>
                                                <?php if ($change['masked']): ?>
                                                    <span class="tiny subtle">
                                                        <?= $this->t('admin.audit.value_masked') ?>
                                                    </span>
                                                <?php else: ?>
                                                    <?php if ($change['has_from']): ?>
                                                        <span class="tiny muted" style="display:block">
                                                            <?= $this->t('admin.audit.value_before') ?>
                                                            <?php if ($change['from'] === null): ?>
                                                                <span class="subtle"><?= $this->t('admin.audit.value_none') ?></span>
                                                            <?php elseif ($change['from'] === ''): ?>
                                                                <span class="subtle"><?= $this->t('admin.audit.value_empty') ?></span>
                                                            <?php else: ?>
                                                                <span class="break-all"><?= $this->e($change['from']) ?></span>
                                                            <?php endif; ?>
                                                        </span>
                                                    <?php endif; ?>
                                                    <span class="tiny" style="display:block">
                                                        <?= $this->t('admin.audit.value_after') ?>
                                                        <?php if ($change['to'] === null): ?>
                                                            <span class="subtle"><?= $this->t('admin.audit.value_none') ?></span>
                                                        <?php elseif ($change['to'] === ''): ?>
                                                            <span class="subtle"><?= $this->t('admin.audit.value_empty') ?></span>
                                                        <?php else: ?>
                                                            <span class="break-all strong"><?= $this->e($change['to']) ?></span>
                                                        <?php endif; ?>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </td>
                            <td class="tiny mono subtle nowrap">
                                <?php if ($entry['ip_hash'] === null || $entry['ip_hash'] === ''): ?>
                                    —
                                <?php else: ?>
                                    <?= $this->e(substr((string) $entry['ip_hash'], 0, 12)) ?>…
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php $this->include('partials/pager', ['pager' => $pager, 'query' => $filters]); ?>
<?php endif; ?>

<p class="tiny muted mt-4"><?= $this->t('admin.audit.ip_note') ?></p>
<p class="tiny muted"><?= $this->t('admin.audit.append_only_note') ?></p>
