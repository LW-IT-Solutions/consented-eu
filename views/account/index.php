<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var list<array<string,mixed>> $sessions */
$errors = $errors ?? [];
$old    = $old ?? [];
?>
<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->t('account.index.title') ?></h1>
        <p class="page-head__sub"><?= $this->t('account.index.subtitle') ?></p>
    </div>
</div>

<div style="max-width:720px">
    <div class="card mb-5">
        <div class="card__header"><span class="card__title"><?= $this->t('account.profile.title') ?></span></div>
        <form method="post" action="<?= $this->e(Url::to('/account')) ?>">
            <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
            <div class="card__body">
                <div class="field">
                    <label class="label" for="name"><?= $this->t('common.name') ?></label>
                    <input class="input" type="text" id="name" name="name" required
                           value="<?= $this->e($currentUser?->name() ?? '') ?>">
                </div>
                <div class="field">
                    <label class="label" for="company"><?= $this->t('account.profile.company_label') ?></label>
                    <input class="input" type="text" id="company" name="company"
                           value="<?= $this->e($organization?->name() ?? '') ?>">
                    <p class="help"><?= $this->tr('account.profile.company_help') ?></p>
                </div>
            </div>
            <div class="card__footer row row--end">
                <button type="submit" class="btn btn--primary"><?= $this->t('common.save') ?></button>
            </div>
        </form>
    </div>

    <?php /* Eigene Karte, nicht im Profilformular: der Wechsel braucht das
             aktuelle Passwort und geht an eine andere Route. Zwei Formulare
             ineinander gibt es in HTML nicht. */ ?>
    <div class="card mb-5">
        <div class="card__header">
            <span class="card__title"><?= $this->t('account.email.title') ?></span>
        </div>

        <div class="card__body" style="padding-bottom:0">
            <p class="mb-0">
                <strong><?= $this->e($currentUser?->email() ?? '') ?></strong>
                <?php if ($currentUser?->isVerified()): ?>
                    <span class="badge badge--success"><?= $this->t('account.profile.email_verified') ?></span>
                <?php endif; ?>
            </p>
            <p class="help"><?= $this->t('account.email.help') ?></p>
        </div>

        <?php if ($pendingEmail !== null): ?>
            <div class="card__body" style="padding-top:0">
                <div class="notice notice--warning">
                    <p class="mb-2">
                        <?= $this->tr('account.email.pending', ['email' => $pendingEmail]) ?>
                    </p>
                    <p class="tiny muted mb-0"><?= $this->t('account.email.pending_help') ?></p>
                </div>
            </div>
            <?php /* Steht vor dem Wechselformular, damit es nicht darin liegt. */ ?>
            <div class="card__body row row--end" style="padding-top:0">
                <form method="post" action="<?= $this->e(Url::to('/account/email/cancel')) ?>">
                    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                    <button type="submit" class="btn btn--ghost btn--sm">
                        <?= $this->t('account.email.cancel') ?>
                    </button>
                </form>
            </div>
        <?php endif; ?>

        <form method="post" action="<?= $this->e(Url::to('/account/email')) ?>">
            <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
            <div class="card__body" style="padding-top:0">
                <div class="grid grid--2">
                    <div class="field">
                        <label class="label" for="new_email"><?= $this->t('account.email.new_label') ?></label>
                        <input class="input" type="email" id="new_email" name="email" required
                               autocomplete="email" value="<?= $this->e($old['email'] ?? '') ?>">
                    </div>
                    <div class="field">
                        <label class="label" for="email_password">
                            <?= $this->t('account.email.password_label') ?>
                        </label>
                        <input class="input" type="password" id="email_password" name="current_password"
                               required autocomplete="current-password">
                    </div>
                </div>
            </div>
            <div class="card__footer row row--end">
                <button type="submit" class="btn btn--secondary"><?= $this->t('account.email.submit') ?></button>
            </div>
        </form>
    </div>

    <div class="card mb-5">
        <div class="card__header"><span class="card__title"><?= $this->t('account.password.title') ?></span></div>
        <form method="post" action="<?= $this->e(Url::to('/account/password')) ?>">
            <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
            <div class="card__body">
                <div class="field">
                    <label class="label" for="current_password"><?= $this->t('account.password.current_label') ?></label>
                    <input class="input" type="password" id="current_password" name="current_password"
                           required autocomplete="current-password">
                </div>
                <div class="grid grid--2" style="gap:var(--space-4)">
                    <div class="field">
                        <label class="label" for="password"><?= $this->t('account.password.new_label') ?></label>
                        <input class="input" type="password" id="password" name="password"
                               required autocomplete="new-password" minlength="12"
                               <?= isset($errors['password']) ? 'aria-invalid="true"' : '' ?>>
                        <?php if (isset($errors['password'][0])): ?>
                            <p class="error-text"><?= $this->e($errors['password'][0]) ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="field">
                        <label class="label" for="password_confirmation"><?= $this->t('account.password.confirm_label') ?></label>
                        <input class="input" type="password" id="password_confirmation"
                               name="password_confirmation" required autocomplete="new-password">
                        <?php if (isset($errors['password_confirmation'][0])): ?>
                            <p class="error-text"><?= $this->e($errors['password_confirmation'][0]) ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <p class="help mb-0"><?= $this->t('account.password.help') ?></p>
            </div>
            <div class="card__footer row row--end">
                <button type="submit" class="btn btn--primary"><?= $this->t('account.password.submit') ?></button>
            </div>
        </form>
    </div>

    <div class="card">
        <div class="card__header">
            <span class="card__title"><?= $this->t('account.sessions.title') ?></span>
            <?php if (count($sessions) > 1): ?>
                <form method="post" action="<?= $this->e(Url::to('/account/sessions/revoke')) ?>">
                    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                    <button type="submit" class="btn btn--secondary btn--sm">
                        <?= Icon::render('logout', 15) ?> <?= $this->t('account.sessions.revoke_others') ?>
                    </button>
                </form>
            <?php endif; ?>
        </div>
        <div class="table-wrap">
            <table class="table">
                <thead>
                    <tr>
                        <th><?= $this->t('account.sessions.col_device') ?></th>
                        <th><?= $this->t('account.sessions.col_last_seen') ?></th>
                        <th><?= $this->t('account.sessions.col_expires') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($sessions as $s): ?>
                        <?php $family = trim((string) ($s['user_agent_family'] ?? '')); ?>
                        <tr>
                            <td>
                                <span class="small"><?= $family !== ''
                                    ? $this->e($family)
                                    : $this->t('account.sessions.device_unknown') ?></span>
                                <?php if ((int) $s['id'] === $currentId): ?>
                                    <span class="badge badge--success"><?= $this->t('account.sessions.this_device') ?></span>
                                <?php endif; ?>
                                <?php if ((int) $s['remembered'] === 1): ?>
                                    <span class="badge"><?= $this->t('account.sessions.remembered') ?></span>
                                <?php endif; ?>
                            </td>
                            <td class="tiny muted"><?= $this->e($this->date((string) $s['last_seen_at'])) ?></td>
                            <td class="tiny muted"><?= $this->e($this->date((string) $s['expires_at'])) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="card__footer tiny muted">
            <?= $this->t('account.sessions.privacy_note') ?>
        </div>
    </div>
</div>
