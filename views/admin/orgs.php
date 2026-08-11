<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var list<array<string,mixed>> $orgs */
/** @var string $query */
/** @var \Consented\Core\Paginator|null $pager */
$pager = $pager ?? null;
$total = $pager === null ? count($orgs) : $pager->total();
?>
<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->t('admin.orgs.title') ?></h1>
        <p class="page-head__sub"><?= $this->t('admin.orgs.subtitle', ['count' => $this->number($total)]) ?></p>
    </div>
</div>

<form method="get" action="<?= $this->e(Url::to('/admin/orgs')) ?>" class="card mb-5">
    <div class="card__body row">
        <input class="input" type="search" name="q" style="flex:1 1 260px"
               placeholder="<?= $this->t('admin.orgs.search_placeholder') ?>" value="<?= $this->e($query) ?>">
        <button type="submit" class="btn btn--secondary">
            <?= Icon::render('search', 17) ?> <?= $this->t('common.search') ?>
        </button>
    </div>
</form>

<?php if ($orgs === []): ?>
    <div class="card">
        <div class="empty">
            <div class="empty__icon"><?= Icon::render('globe', 26) ?></div>
            <h2 class="empty__title"><?= $this->t('admin.orgs.empty_title') ?></h2>
            <p class="empty__text"><?= $this->t('admin.orgs.empty_text') ?></p>
        </div>
    </div>
<?php else: ?>
    <div class="card card--flush">
        <div class="table-wrap">
            <table class="table">
                <thead>
                    <tr>
                        <th><?= $this->t('admin.orgs.col_org') ?></th>
                        <th><?= $this->t('admin.orgs.col_owner') ?></th>
                        <th><?= $this->t('admin.orgs.col_members') ?></th>
                        <th><?= $this->t('admin.orgs.col_properties') ?></th>
                        <th><?= $this->t('admin.orgs.col_created') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orgs as $o): ?>
                        <tr>
                            <td>
                                <a class="strong small" href="<?= $this->e(Url::to('/admin/orgs/' . $o['public_id'])) ?>">
                                    <?= $this->e($o['name']) ?>
                                </a>
                                <div class="tiny muted mono"><?= $this->e($o['slug']) ?></div>
                            </td>
                            <td>
                                <?php if ($o['owner_public_id'] === null): ?>
                                    <span class="tiny muted"><?= $this->t('admin.orgs.owner_missing') ?></span>
                                <?php else: ?>
                                    <a class="small" href="<?= $this->e(Url::to('/admin/users/' . $o['owner_public_id'])) ?>">
                                        <?= $this->e($o['owner_name']) ?>
                                    </a>
                                    <div class="tiny muted break-all"><?= $this->e($o['owner_email']) ?></div>
                                <?php endif; ?>
                            </td>
                            <td class="tnum"><?= $this->e((string) $o['members']) ?></td>
                            <td class="tnum"><?= $this->e((string) $o['properties']) ?></td>
                            <td class="tiny muted tnum"><?= $this->e($this->date((string) $o['created_at'])) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php $this->include('partials/pager', ['pager' => $pager, 'query' => ['q' => $query]]); ?>
<?php endif; ?>

<p class="tiny muted mt-4"><?= $this->t('admin.orgs.processor_note') ?></p>
