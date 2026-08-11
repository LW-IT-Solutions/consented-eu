<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Str;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var array<string,mixed> $p */
$href      = Url::to('/properties/' . $p['public_id']);
$consents  = (int) $p['consents_7d'];
$accepts   = (int) $p['accepts_7d'];
$rate      = $consents > 0 ? ($accepts / $consents) * 100 : null;
$published = (int) $p['config_version'] > 0;

if (!$published) {
    $status = ['badge' => 'badge', 'label' => 'property.card.status_draft'];
} elseif ($p['first_consent_at'] === null) {
    $status = ['badge' => 'badge badge--warning', 'label' => 'property.card.status_not_integrated'];
} else {
    $status = ['badge' => 'badge badge--success', 'label' => 'property.card.status_live'];
}
?>
<article class="card card--interactive property-card">
    <div class="property-card__top">
        <span class="property-card__avatar"><?= $this->e(Str::initials((string) $p['name'])) ?></span>
        <div style="flex:1 1 auto;min-width:0">
            <div class="row row--between row--tight" style="flex-wrap:nowrap;gap:8px">
                <a class="property-card__name truncate" href="<?= $this->e($href) ?>">
                    <?= $this->e($p['name']) ?>
                </a>
                <span class="<?= $this->e($status['badge']) ?>"><?= $this->t($status['label']) ?></span>
            </div>
            <div class="property-card__domain">
                <?php if ($p['primary_domain'] !== null): ?>
                    <?= $this->e($p['primary_domain']) ?>
                <?php else: ?>
                    <span class="subtle"><?= $this->t('property.card.no_domain') ?></span>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <dl class="property-card__stats">
        <div class="property-card__stat">
            <dt><?= $this->t('property.card.consents_7d') ?></dt>
            <dd><?= $this->number($consents) ?></dd>
        </div>
        <div class="property-card__stat">
            <dt><?= $this->t('property.card.accept_rate') ?></dt>
            <dd><?= $rate === null ? '—' : $this->e(number_format($rate, 0, ',', '.')) . '&nbsp;%' ?></dd>
        </div>
        <div class="property-card__stat">
            <dt><?= $this->t('property.card.services') ?></dt>
            <dd><?= $this->number((int) $p['service_count']) ?></dd>
        </div>
    </dl>
</article>
