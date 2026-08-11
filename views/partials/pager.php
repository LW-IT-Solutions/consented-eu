<?php

declare(strict_types=1);

use Consented\Core\Paginator;

/** @var \Consented\Core\View $this */
/** @var Paginator|null $pager */
/** @var array<string,mixed> $query */
$pager = $pager ?? null;
$query = $query ?? [];

// A single page needs no navigation, and the row counter on its own would only
// repeat what the list already shows.
if (!$pager instanceof Paginator || $pager->pages() < 2) {
    return;
}
?>
<nav class="row row--between mt-4" aria-label="<?= $this->t('common.pager.label') ?>">
    <span class="tiny muted tnum">
        <?= $this->t('common.pager.range', [
            'start' => $this->number($pager->from()),
            'end'   => $this->number($pager->to()),
            'total' => $this->number($pager->total()),
        ]) ?>
    </span>

    <span class="row row--tight">
        <?php if ($pager->hasPrev()): ?>
            <a class="btn btn--ghost btn--sm" href="<?= $this->e($pager->url(1, $query)) ?>">
                <?= $this->t('common.pager.first') ?>
            </a>
            <a class="btn btn--secondary btn--sm" rel="prev"
               href="<?= $this->e($pager->url($pager->page() - 1, $query)) ?>">
                <?= $this->t('common.pager.prev') ?>
            </a>
        <?php else: ?>
            <span class="btn btn--ghost btn--sm" aria-disabled="true"><?= $this->t('common.pager.first') ?></span>
            <span class="btn btn--secondary btn--sm" aria-disabled="true"><?= $this->t('common.pager.prev') ?></span>
        <?php endif; ?>

        <span class="tiny muted tnum nowrap" aria-current="page">
            <?= $this->t('common.pager.page_of', [
                'page'  => $this->number($pager->page()),
                'total' => $this->number($pager->pages()),
            ]) ?>
        </span>

        <?php if ($pager->hasNext()): ?>
            <a class="btn btn--secondary btn--sm" rel="next"
               href="<?= $this->e($pager->url($pager->page() + 1, $query)) ?>">
                <?= $this->t('common.pager.next') ?>
            </a>
            <a class="btn btn--ghost btn--sm" href="<?= $this->e($pager->url($pager->pages(), $query)) ?>">
                <?= $this->t('common.pager.last') ?>
            </a>
        <?php else: ?>
            <span class="btn btn--secondary btn--sm" aria-disabled="true"><?= $this->t('common.pager.next') ?></span>
            <span class="btn btn--ghost btn--sm" aria-disabled="true"><?= $this->t('common.pager.last') ?></span>
        <?php endif; ?>
    </span>
</nav>
