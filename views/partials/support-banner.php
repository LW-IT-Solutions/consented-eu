<?php

declare(strict_types=1);

use Consented\Auth\Support;
use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var array<string,mixed>|null $property */

/*
 * Shown on every page while an administrator holds a support grant.
 *
 * Not dismissible and not subtle on purpose. The whole risk of this feature is
 * an operator who forgets which property they are looking at and edits the
 * wrong one, or who leaves the grant open and later mistakes a customer's
 * screen for their own.
 *
 * Two states, because they mean different things:
 *
 *   - on a page that belongs to the released property: "you are editing this"
 *   - anywhere else: "a grant is open, but not for this page". Saying "you are
 *     editing property X" on the account page would be a lie, and a banner that
 *     lies once gets ignored from then on.
 */
$grant = Support::active();

if ($grant === null) {
    return;
}

$minutes  = (int) ceil(Support::remaining() / 60);
$label    = $grant['name'] !== '' ? $grant['name'] : $grant['public_id'];
$onTarget = isset($property['public_id']) && (string) $property['public_id'] === $grant['public_id'];
?>
<div class="support-bar<?= $onTarget ? '' : ' support-bar--idle' ?>" role="status">
    <span class="support-bar__icon" aria-hidden="true"><?= Icon::render('shield', 17) ?></span>
    <span class="support-bar__text">
        <strong><?= $this->t('support.banner.title') ?></strong>
        <?php if ($onTarget): ?>
            <?= $this->t('support.banner.body', [
                'property' => $label,
                'minutes'  => (string) $minutes,
            ]) ?>
        <?php else: ?>
            <?= $this->t('support.banner.elsewhere', [
                'property' => $label,
                'minutes'  => (string) $minutes,
            ]) ?>
        <?php endif; ?>
        <?php if ($grant['reason'] !== ''): ?>
            <span class="support-bar__reason"><?= $this->e($grant['reason']) ?></span>
        <?php endif; ?>
    </span>
    <form method="post" action="<?= $this->e(Url::to('/support/end')) ?>" class="support-bar__action">
        <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
        <button type="submit" class="btn btn--sm btn--secondary"><?= $this->t('support.banner.end') ?></button>
    </form>
</div>
