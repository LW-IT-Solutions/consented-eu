<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var list<array<string,mixed>> $properties */
?>
<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->t('property.index.title') ?></h1>
        <p class="page-head__sub"><?= $this->t('property.index.sub') ?></p>
    </div>
    <a class="btn btn--primary" href="<?= $this->e(Url::to('/properties/new')) ?>">
        <?= Icon::render('plus', 18) ?> <?= $this->t('property.action.new') ?>
    </a>
</div>

<?php if ($properties === []): ?>
    <div class="card">
        <div class="empty">
            <div class="empty__icon"><?= Icon::render('layers', 26) ?></div>
            <h2 class="empty__title"><?= $this->t('property.empty.title') ?></h2>
            <p class="empty__text"><?= $this->t('property.index.empty_text') ?></p>
            <a class="btn btn--primary" href="<?= $this->e(Url::to('/properties/new')) ?>"><?= $this->t('property.action.create') ?></a>
        </div>
    </div>
<?php else: ?>
    <div class="grid grid--3">
        <?php foreach ($properties as $p): ?>
            <?php $this->include('partials/property-card', ['p' => $p]); ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
