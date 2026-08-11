<?php

declare(strict_types=1);

use Consented\Core\Csp;
use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var array<string,mixed>|null $service */
/** @var list<array<string,mixed>> $categories */
$base = '/properties/' . $property['public_id'];

$isEdit    = $service !== null;
$overrides = $isEdit ? (json_decode((string) ($service['overrides'] ?? '{}'), true) ?: []) : [];
$patterns  = $isEdit ? (json_decode((string) ($service['blocking_pattern'] ?? '[]'), true) ?: []) : [];
$cookies   = $overrides['cookies'] ?? [];
$action    = $isEdit
    ? $base . '/services/' . $service['public_id'] . '/update'
    : $base . '/services/custom';

$v = static fn (string $key, string $default = ''): string => (string) ($overrides[$key] ?? $default);
?>
<div class="breadcrumb">
    <a href="<?= $this->e(Url::to($base . '/services')) ?>"><?= $this->t('property.services.title') ?></a>
    <?= Icon::render('chevron-right', 13) ?>
    <span><?= $isEdit ? $this->t('common.edit') : $this->t('property.services.custom_service') ?></span>
</div>

<div class="page-head">
    <div>
        <h1 class="page-head__title">
            <?= $isEdit ? $this->t('property.services.edit_title') : $this->t('property.services.custom_service') ?>
        </h1>
        <p class="page-head__sub">
            <?= $this->t('property.services.custom_subtitle') ?>
        </p>
    </div>
</div>

<form method="post" action="<?= $this->e(Url::to($action)) ?>" style="max-width:760px" novalidate>
    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">

    <div class="card mb-5">
        <div class="card__header"><span class="card__title"><?= $this->t('property.services.section_basics') ?></span></div>
        <div class="card__body">
            <div class="grid grid--2" style="gap:var(--space-4)">
                <div class="field">
                    <label class="label" for="name"><?= $this->t('property.services.field_name') ?></label>
                    <input class="input" type="text" id="name" name="name" required
                           value="<?= $this->e($v('name')) ?>" placeholder="<?= $this->t('property.services.field_name_placeholder') ?>">
                </div>
                <div class="field">
                    <label class="label" for="provider"><?= $this->t('property.services.field_provider') ?></label>
                    <input class="input" type="text" id="provider" name="provider"
                           value="<?= $this->e($v('provider')) ?>" placeholder="<?= $this->t('property.services.field_provider_placeholder') ?>">
                </div>
            </div>

            <div class="grid grid--3" style="gap:var(--space-4)">
                <div class="field">
                    <label class="label" for="category"><?= $this->t('property.services.category') ?></label>
                    <select class="select" id="category" name="category">
                        <?php foreach ($categories as $c): ?>
                            <option value="<?= $this->e($c['category_key']) ?>"
                                <?= ($isEdit && $service['category_key'] === $c['category_key']) ? 'selected' : '' ?>>
                                <?= $this->e($c['category_key']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="field">
                    <label class="label" for="providerCountry"><?= $this->t('property.services.field_provider_country') ?></label>
                    <input class="input" type="text" id="providerCountry" name="providerCountry"
                           maxlength="2" placeholder="<?= $this->t('property.services.field_provider_country_placeholder') ?>"
                           value="<?= $this->e($v('providerCountry')) ?>">
                </div>
                <div class="field">
                    <label class="label" for="legalBasis"><?= $this->t('property.services.field_legal_basis') ?></label>
                    <input class="input" type="text" id="legalBasis" name="legalBasis"
                           value="<?= $this->e($v('legalBasis', __('property.services.legal_basis_default'))) ?>">
                </div>
            </div>

            <div class="field">
                <label class="label" for="purpose"><?= $this->t('property.services.field_purpose') ?></label>
                <textarea class="textarea" id="purpose" name="purpose" required
                          placeholder="<?= $this->t('property.services.field_purpose_placeholder') ?>"><?= $this->e($v('purpose')) ?></textarea>
                <p class="help"><?= $this->t('property.services.field_purpose_help') ?></p>
            </div>

            <div class="grid grid--2" style="gap:var(--space-4)">
                <div class="field">
                    <label class="label" for="retention"><?= $this->t('property.services.field_retention') ?></label>
                    <input class="input" type="text" id="retention" name="retention"
                           placeholder="<?= $this->t('property.services.field_retention_placeholder') ?>" value="<?= $this->e($v('retention')) ?>">
                </div>
                <div class="field">
                    <label class="label" for="privacyUrl"><?= $this->t('property.services.field_privacy_url') ?></label>
                    <input class="input" type="url" id="privacyUrl" name="privacyUrl"
                           placeholder="https://…" value="<?= $this->e($v('privacyUrl')) ?>">
                </div>
            </div>

            <div class="field">
                <label class="checkbox">
                    <input type="checkbox" name="thirdCountry" value="1" <?= !empty($overrides['thirdCountry']) ? 'checked' : '' ?>>
                    <span><?= $this->t('property.services.check_third_country') ?></span>
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="essential" value="1"
                           <?= ($isEdit && (int) $service['is_essential'] === 1) ? 'checked' : '' ?>>
                    <span>
                        <?= $this->t('property.services.check_essential') ?>
                        <span class="help" style="display:block;margin-top:2px">
                            <?= $this->t('property.services.check_essential_help') ?>
                        </span>
                    </span>
                </label>
                <?php if ($isEdit): ?>
                    <label class="checkbox">
                        <input type="checkbox" name="enabled" value="1"
                               <?= (int) $service['is_enabled'] === 1 ? 'checked' : '' ?>>
                        <span><?= $this->t('property.services.check_enabled') ?></span>
                    </label>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="card mb-5">
        <div class="card__header">
            <span class="card__title"><?= $this->t('property.services.section_cookies') ?></span>
            <button type="button" class="btn btn--secondary btn--sm" id="add-cookie">
                <?= Icon::render('plus', 15) ?> <?= $this->t('property.services.add_row') ?>
            </button>
        </div>
        <div class="card__body">
            <div id="cookie-rows">
                <?php
                $rows = $cookies === [] ? [['name' => '', 'host' => '', 'duration' => '', 'purpose' => '']] : $cookies;
                foreach ($rows as $cookie):
                ?>
                    <div class="row row--tight mb-2" data-cookie-row>
                        <input class="input" style="flex:1 1 130px" name="cookie_name[]" placeholder="<?= $this->t('common.name') ?>"
                               value="<?= $this->e($cookie['name'] ?? '') ?>">
                        <input class="input" style="flex:1 1 130px" name="cookie_host[]" placeholder="<?= $this->t('property.services.cookie_host') ?>"
                               value="<?= $this->e($cookie['host'] ?? '') ?>">
                        <input class="input" style="flex:1 1 110px" name="cookie_duration[]" placeholder="<?= $this->t('property.services.cookie_duration') ?>"
                               value="<?= $this->e($cookie['duration'] ?? '') ?>">
                        <input class="input" style="flex:2 1 180px" name="cookie_purpose[]" placeholder="<?= $this->t('property.services.cookie_purpose') ?>"
                               value="<?= $this->e($cookie['purpose'] ?? '') ?>">
                        <button type="button" class="btn btn--ghost btn--sm" data-remove-row aria-label="<?= $this->t('property.services.remove_row') ?>">
                            <?= Icon::render('trash', 16) ?>
                        </button>
                    </div>
                <?php endforeach; ?>
            </div>
            <p class="help">
                <?= $this->t('property.services.cookies_help') ?>
            </p>
        </div>
    </div>

    <div class="card mb-5">
        <div class="card__header"><span class="card__title"><?= $this->t('property.services.section_blocking') ?></span></div>
        <div class="card__body">
            <div class="field">
                <label class="label" for="patterns"><?= $this->t('property.services.field_patterns') ?></label>
                <textarea class="textarea mono" id="patterns" name="patterns" style="font-size:13px"
                          placeholder="<?= $this->t('property.services.field_patterns_placeholder') ?>"><?= $this->e(implode("\n", $patterns)) ?></textarea>
                <p class="help">
                    <?= $this->tr('property.services.field_patterns_help') ?>
                </p>
            </div>
        </div>
    </div>

    <div class="row row--between">
        <a class="btn btn--ghost" href="<?= $this->e(Url::to($base . '/services')) ?>"><?= $this->t('common.cancel') ?></a>
        <button type="submit" class="btn btn--primary">
            <?= $isEdit ? $this->t('property.services.save_changes') : $this->t('property.services.create_service') ?>
        </button>
    </div>
</form>

<?php $this->start('scripts'); ?>
<script nonce="<?= $this->e(Csp::nonce()) ?>">
(function () {
    var rows = document.getElementById('cookie-rows');
    var add  = document.getElementById('add-cookie');
    if (!rows || !add) return;

    add.addEventListener('click', function () {
        var template = rows.querySelector('[data-cookie-row]');
        var clone = template.cloneNode(true);
        clone.querySelectorAll('input').forEach(function (i) { i.value = ''; });
        rows.appendChild(clone);
        clone.querySelector('input').focus();
    });

    rows.addEventListener('click', function (e) {
        var btn = e.target.closest('[data-remove-row]');
        if (!btn) return;

        // Always keep one row so there is something to clone from.
        if (rows.querySelectorAll('[data-cookie-row]').length > 1) {
            btn.closest('[data-cookie-row]').remove();
        } else {
            btn.closest('[data-cookie-row]').querySelectorAll('input').forEach(function (i) { i.value = ''; });
        }
    });
})();
</script>
<?php $this->end(); ?>
