<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Lang;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var array<string,string> $settings */
/** @var array<string,array{translated:int,total:int,percent:int,missing:list<string>}> $coverage */
/** @var array<string,string> $languages */
/** @var list<string> $active */
/** @var bool $envRegistrationOff */
/** @var bool $envComingSoon */
$old    = $old ?? [];
$errors = $errors ?? [];

$resubmit = $old !== [];

$v = static function (string $key) use ($old, $settings): string {
    $value = $old[$key] ?? ($settings[$key] ?? '');

    return is_scalar($value) ? (string) $value : '';
};

$on = static fn (string $key): bool => $resubmit
    ? array_key_exists($key, $old)
    : (($settings[$key] ?? '0') === '1');

// Same reasoning as $on(): on a resubmit the POST body is the truth. A user
// who cleared every box sends no ui_languages at all, and falling back to the
// stored list here would silently tick them again.
/** @var list<string> $checkedLanguages */
$checkedLanguages = $resubmit
    ? array_values(array_map('strval', is_array($old['ui_languages'] ?? null) ? $old['ui_languages'] : []))
    : $active;
?>
<?php $this->include('admin/settings/_nav', ['tab' => 'instance']); ?>

<form method="post" action="<?= $this->e(Url::to('/admin/settings/instance')) ?>" style="max-width:820px">
    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">

    <div class="card mb-5">
        <div class="card__header"><span class="card__title"><?= $this->t('admin.settings.access_title') ?></span></div>
        <div class="card__body">

            <?php if ($envRegistrationOff): ?>
                <div class="alert alert--warning mb-4">
                    <span class="alert__icon"><?= Icon::render('alert', 18) ?></span>
                    <div class="alert__body"><?= $this->t('admin.settings.env_registration_off') ?></div>
                </div>
            <?php endif; ?>

            <div class="field">
                <label class="label" for="registration_mode"><?= $this->t('admin.settings.registration_mode') ?></label>
                <select class="select" id="registration_mode" name="registration_mode">
                    <?php foreach (['open', 'invite', 'closed'] as $mode): ?>
                        <option value="<?= $this->e($mode) ?>" <?= $v('registration_mode') === $mode ? 'selected' : '' ?>>
                            <?= $this->t('admin.settings.registration_mode_' . $mode) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <?php if (isset($errors['registration_mode'][0])): ?>
                    <p class="error-text"><?= $this->e($errors['registration_mode'][0]) ?></p>
                <?php endif; ?>
                <p class="help"><?= $this->t('admin.settings.registration_mode_help') ?></p>
            </div>

            <label class="checkbox" style="margin-bottom:var(--space-3)">
                <input type="checkbox" name="require_email_verification" value="1"
                       <?= $on('require_email_verification') ? 'checked' : '' ?>>
                <span>
                    <strong><?= $this->t('admin.settings.require_verification') ?></strong>
                    <span class="help" style="display:block;margin-top:2px">
                        <?= $this->t('admin.settings.require_verification_help') ?>
                    </span>
                </span>
            </label>

            <label class="checkbox" style="margin-bottom:0">
                <input type="checkbox" name="review_notices" value="1"
                       <?= $on('review_notices') ? 'checked' : '' ?>>
                <span>
                    <strong><?= $this->t('admin.settings.review_notices') ?></strong>
                    <span class="help" style="display:block;margin-top:2px">
                        <?= $this->t('admin.settings.review_notices_help') ?>
                    </span>
                </span>
            </label>
        </div>
    </div>

    <div class="card mb-5">
        <div class="card__header"><span class="card__title"><?= $this->t('admin.settings.session_title') ?></span></div>
        <div class="card__body">

            <div class="grid grid--2" style="gap:var(--space-4)">
                <div class="field">
                    <label class="label" for="session_idle_hours"><?= $this->t('admin.settings.session_idle_hours') ?></label>
                    <input class="input" type="number" id="session_idle_hours" name="session_idle_hours"
                           min="1" max="720" value="<?= $this->e($v('session_idle_hours')) ?>"
                           <?= isset($errors['session_idle_hours']) ? 'aria-invalid="true"' : '' ?>>
                    <?php if (isset($errors['session_idle_hours'][0])): ?>
                        <p class="error-text"><?= $this->e($errors['session_idle_hours'][0]) ?></p>
                    <?php endif; ?>
                    <p class="help"><?= $this->t('admin.settings.session_idle_hours_help') ?></p>
                </div>
                <div class="field">
                    <label class="label" for="remember_lifetime_days"><?= $this->t('admin.settings.remember_days') ?></label>
                    <input class="input" type="number" id="remember_lifetime_days" name="remember_lifetime_days"
                           min="1" max="365" value="<?= $this->e($v('remember_lifetime_days')) ?>"
                           <?= isset($errors['remember_lifetime_days']) ? 'aria-invalid="true"' : '' ?>>
                    <?php if (isset($errors['remember_lifetime_days'][0])): ?>
                        <p class="error-text"><?= $this->e($errors['remember_lifetime_days'][0]) ?></p>
                    <?php endif; ?>
                    <p class="help"><?= $this->t('admin.settings.remember_days_help') ?></p>
                </div>
            </div>

            <div class="field" style="margin-bottom:0;max-width:340px">
                <label class="label" for="consent_rate_limit_per_hour">
                    <?= $this->t('admin.settings.consent_rate_limit') ?>
                </label>
                <input class="input" type="number" id="consent_rate_limit_per_hour" name="consent_rate_limit_per_hour"
                       min="1" max="100000" value="<?= $this->e($v('consent_rate_limit_per_hour')) ?>"
                       <?= isset($errors['consent_rate_limit_per_hour']) ? 'aria-invalid="true"' : '' ?>>
                <?php if (isset($errors['consent_rate_limit_per_hour'][0])): ?>
                    <p class="error-text"><?= $this->e($errors['consent_rate_limit_per_hour'][0]) ?></p>
                <?php endif; ?>
                <p class="help"><?= $this->t('admin.settings.consent_rate_limit_help') ?></p>
            </div>
        </div>
    </div>

    <div class="card mb-5">
        <div class="card__header"><span class="card__title"><?= $this->t('admin.settings.languages_title') ?></span></div>
        <div class="card__body">

            <p class="help mb-4"><?= $this->t('admin.settings.languages_help') ?></p>

            <?php foreach ($languages as $code => $name): ?>
                <?php
                $report    = $coverage[$code] ?? ['translated' => 0, 'total' => 0, 'percent' => 0];
                $isDefault = $code === Lang::DEFAULT_LOCALE;
                $percent   = (int) $report['percent'];
                ?>
                <div class="row row--between row--top mb-4">
                    <div style="flex:1 1 260px;min-width:0">
                        <?php if ($isDefault): ?>
                            <span class="strong small"><?= $this->e($name) ?></span>
                            <span class="badge badge--info"><?= $this->t('admin.settings.language_reference') ?></span>
                            <span class="help" style="display:block;margin-top:2px">
                                <?= $this->t('admin.settings.language_reference_help') ?>
                            </span>
                        <?php else: ?>
                            <label class="checkbox">
                                <input type="checkbox" name="ui_languages[]" value="<?= $this->e($code) ?>"
                                       <?= in_array($code, $checkedLanguages, true) ? 'checked' : '' ?>>
                                <span>
                                    <strong><?= $this->e($name) ?></strong>
                                    <span class="help" style="display:block;margin-top:2px">
                                        <?= $this->t('admin.settings.language_coverage', [
                                            'translated' => $this->number((int) $report['translated']),
                                            'total'      => $this->number((int) $report['total']),
                                        ]) ?>
                                    </span>
                                </span>
                            </label>
                        <?php endif; ?>
                    </div>
                    <div style="flex:0 1 200px;min-width:140px">
                        <div class="meter" role="img"
                             aria-label="<?= $this->t('admin.settings.language_coverage_aria', [
                                 'language' => $name,
                                 'percent'  => (string) $percent,
                             ]) ?>">
                            <div class="meter__fill<?= $percent >= 100 ? ' meter__fill--success' : ' meter__fill--warning' ?>"
                                 style="width:<?= $this->e((string) max(0, min(100, $percent))) ?>%"></div>
                        </div>
                        <span class="tiny muted tnum"><?= $this->percent((float) $percent, 0) ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="card mb-5">
        <div class="card__header"><span class="card__title"><?= $this->t('admin.settings.home_title') ?></span></div>
        <div class="card__body">
            <?php if ($envComingSoon): ?>
                <div class="alert alert--info mb-4">
                    <span class="alert__icon"><?= Icon::render('info', 18) ?></span>
                    <div class="alert__body"><?= $this->t('admin.settings.env_coming_soon') ?></div>
                </div>
            <?php endif; ?>

            <label class="checkbox mb-4">
                <input type="checkbox" name="coming_soon" value="1" <?= $on('coming_soon') ? 'checked' : '' ?>>
                <span>
                    <strong><?= $this->t('admin.settings.coming_soon_toggle') ?></strong>
                    <span class="help" style="display:block;margin-top:2px">
                        <?= $this->t('admin.settings.coming_soon_help') ?>
                    </span>
                </span>
            </label>

            <div class="field" style="margin-bottom:0">
                <label class="label" for="launch_note"><?= $this->t('admin.settings.launch_note_label') ?></label>
                <input class="input" type="text" id="launch_note" name="launch_note" maxlength="200"
                       value="<?= $this->e($v('launch_note')) ?>"
                       placeholder="<?= $this->t('admin.settings.launch_note_placeholder') ?>">
                <?php if (isset($errors['launch_note'][0])): ?>
                    <p class="error-text"><?= $this->e($errors['launch_note'][0]) ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="row row--end">
        <button type="submit" class="btn btn--primary"><?= $this->t('admin.settings.submit') ?></button>
    </div>
</form>
