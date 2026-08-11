<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var array<string,mixed> $invitation */
/** @var \Consented\Property\Property|null $propertyModel */
$propertyModel = $property ?? null;
?>
<div class="empty__icon mb-5"><?= Icon::render('user-plus', 26) ?></div>

<h1 class="auth__title"><?= $this->t('invite.show.title') ?></h1>
<p class="auth__sub">
    <?php if ($propertyModel !== null): ?>
        <?= $this->tr('invite.show.sub_property', [
            'property' => $propertyModel->name(),
            'role'     => $roleLabel,
        ]) ?>
    <?php else: ?>
        <?= $this->t('invite.show.sub_generic') ?>
    <?php endif; ?>
</p>

<div class="card mb-5">
    <div class="card__body">
        <p class="small mb-2">
            <span class="strong"><?= $this->t('invite.show.role_label') ?></span> <?= $this->e($roleLabel) ?>
        </p>
        <p class="small muted mb-3"><?= $this->e($roleInfo) ?></p>
        <p class="tiny muted mb-0">
            <?= $this->t('invite.show.meta', [
                'email' => $invitation['email'],
                'date'  => $this->date((string) $invitation['expires_at']),
            ]) ?>
        </p>
    </div>
</div>

<?php if (!empty($invitation['message'])): ?>
    <div class="alert alert--info mb-5">
        <span class="alert__icon"><?= Icon::render('mail', 18) ?></span>
        <div class="alert__body"><?= $this->e($invitation['message']) ?></div>
    </div>
<?php endif; ?>

<?php if (!empty($mismatch)): ?>
    <div class="alert alert--warning mb-5">
        <span class="alert__icon"><?= Icon::render('alert', 18) ?></span>
        <div class="alert__body">
            <?= $this->tr('invite.show.mismatch', ['email' => $invitation['email']]) ?>
        </div>
    </div>
<?php endif; ?>

<form method="post" action="<?= $this->e(Url::to('/invitations/' . $token . '/accept')) ?>">
    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
    <button type="submit" class="btn btn--primary btn--block btn--lg">
        <?= !empty($needsLogin)
            ? $this->t('invite.show.accept_login')
            : $this->t('invite.show.accept') ?>
    </button>
</form>

<p class="tiny muted mt-5 center">
    <?= $this->t('invite.show.scope_note') ?>
</p>
