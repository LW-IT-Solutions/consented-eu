<?php

declare(strict_types=1);

use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var string $tab */
$tab = $tab ?? '';

$items = [
    'mail'      => ['/admin/settings/mail',      'admin.settings.tab_mail'],
    'operator'  => ['/admin/settings/operator',  'admin.settings.tab_operator'],
    'instance'  => ['/admin/settings/instance',  'admin.settings.tab_instance'],
    'retention' => ['/admin/settings/retention', 'admin.settings.tab_retention'],
];
?>
<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->t('admin.settings.title') ?></h1>
        <p class="page-head__sub"><?= $this->t('admin.settings.subtitle') ?></p>
    </div>
</div>

<nav class="tabs" aria-label="<?= $this->t('admin.settings.title') ?>">
    <?php foreach ($items as $key => [$path, $labelKey]): ?>
        <a class="tab" href="<?= $this->e(Url::to($path)) ?>"
           <?= $tab === $key ? 'aria-current="page"' : '' ?>><?= $this->t($labelKey) ?></a>
    <?php endforeach; ?>
</nav>
