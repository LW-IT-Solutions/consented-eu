<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var int $status */
/** @var string $message */
$exception = $exception ?? null;

$headlineKey = match ($status) {
    404     => 'error.headline_404',
    403     => 'error.headline_403',
    401     => 'error.headline_401',
    405     => 'error.headline_405',
    429     => 'error.headline_429',
    500     => 'error.headline_500',
    default => null,
};
?>
<div class="center">
    <div class="empty__icon" style="width:64px;height:64px;margin-bottom:24px">
        <?= Icon::render($status >= 500 ? 'alert' : 'info', 28) ?>
    </div>

    <p class="eyebrow" style="justify-content:center"><?= $this->e((string) $status) ?></p>
    <h1 class="mb-3" style="font-size:var(--text-xl)"><?= $headlineKey !== null
        ? $this->t($headlineKey)
        : $this->t('error.headline_generic', ['status' => $status]) ?></h1>
    <p class="lead mb-6" style="max-width:44ch;margin-inline:auto"><?= $this->e($message) ?></p>

    <div class="btn-group" style="justify-content:center">
        <a class="btn btn--primary" href="<?= $this->e(Url::to('/')) ?>"><?= $this->t('error.to_home') ?></a>
        <a class="btn btn--secondary" href="<?= $this->e(Url::to('/dashboard')) ?>"><?= $this->t('error.to_dashboard') ?></a>
    </div>
</div>

<?php if ($exception instanceof \Throwable): ?>
    <div class="card mt-6" style="text-align:left">
        <div class="card__header">
            <span class="card__title"><?= $this->t('error.debug_title') ?></span>
        </div>
        <div class="card__body">
            <p class="small strong mb-2"><?= $this->e($exception::class) ?></p>
            <p class="small mb-4"><?= $this->e($exception->getMessage()) ?></p>
            <p class="tiny mono muted mb-4">
                <?= $this->e($exception->getFile()) ?>:<?= $this->e((string) $exception->getLine()) ?>
            </p>
            <div class="code"><pre><?= $this->e($exception->getTraceAsString()) ?></pre></div>
        </div>
    </div>
<?php endif; ?>
