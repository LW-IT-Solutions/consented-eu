<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;
use Consented\Property\Defaults;

/** @var \Consented\Core\View $this */
/** @var array<string,mixed> $settings */
$base = '/properties/' . $property['public_id'];
?>
<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->t('property.settings.title') ?></h1>
        <p class="page-head__sub"><?= $this->t('property.settings.intro') ?></p>
    </div>
</div>

<form method="post" action="<?= $this->e(Url::to($base . '/settings')) ?>" style="max-width:760px">
    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">

    <div class="card mb-5">
        <div class="card__header"><span class="card__title"><?= $this->t('property.settings.section_general') ?></span></div>
        <div class="card__body">
            <div class="field">
                <label class="label" for="name"><?= $this->t('property.settings.field_name') ?></label>
                <input class="input" type="text" id="name" name="name" required
                       value="<?= $this->e($property['name']) ?>" <?= $canEdit ? '' : 'readonly' ?>>
            </div>
            <div class="grid grid--2" style="gap:var(--space-4)">
                <div class="field">
                    <label class="label" for="privacyPolicyUrl"><?= $this->t('property.settings.field_privacy_url') ?></label>
                    <input class="input" type="url" id="privacyPolicyUrl" name="privacyPolicyUrl"
                           placeholder="<?= $this->t('property.settings.placeholder_privacy_url') ?>"
                           value="<?= $this->e((string) $settings['privacyPolicyUrl']) ?>" <?= $canEdit ? '' : 'readonly' ?>>
                    <p class="help"><?= $this->tr('property.settings.help_privacy_url') ?></p>
                </div>
                <div class="field">
                    <label class="label" for="imprintUrl"><?= $this->t('property.settings.field_imprint_url') ?></label>
                    <input class="input" type="url" id="imprintUrl" name="imprintUrl"
                           placeholder="<?= $this->t('property.settings.placeholder_imprint_url') ?>"
                           value="<?= $this->e((string) $settings['imprintUrl']) ?>" <?= $canEdit ? '' : 'readonly' ?>>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-5">
        <div class="card__header"><span class="card__title"><?= $this->t('property.settings.section_consent') ?></span></div>
        <div class="card__body">
            <div class="grid grid--2" style="gap:var(--space-4)">
                <div class="field">
                    <label class="label" for="consentLifetimeDays"><?= $this->t('property.settings.field_lifetime') ?></label>
                    <input class="input" type="number" id="consentLifetimeDays" name="consentLifetimeDays"
                           min="1" max="730" value="<?= $this->e((string) $settings['consentLifetimeDays']) ?>"
                           <?= $canEdit ? '' : 'readonly' ?>>
                    <p class="help">
                        <?= $this->t('property.settings.help_lifetime') ?>
                    </p>
                </div>
                <div class="field">
                    <label class="label" for="storage"><?= $this->t('property.settings.field_storage') ?></label>
                    <select class="select" id="storage" name="storage" <?= $canEdit ? '' : 'disabled' ?>>
                        <option value="cookie" <?= $settings['storage'] === 'cookie' ? 'selected' : '' ?>>
                            <?= $this->t('property.settings.storage_cookie') ?>
                        </option>
                        <option value="localstorage" <?= $settings['storage'] === 'localstorage' ? 'selected' : '' ?>>
                            localStorage
                        </option>
                        <option value="both" <?= $settings['storage'] === 'both' ? 'selected' : '' ?>>
                            <?= $this->t('property.settings.storage_both') ?>
                        </option>
                    </select>
                    <p class="help">
                        <?= $this->t('property.settings.help_storage') ?>
                    </p>
                </div>
            </div>

            <label class="checkbox">
                <input type="checkbox" name="crossSubdomain" value="1"
                       <?= !empty($settings['crossSubdomain']) ? 'checked' : '' ?> <?= $canEdit ? '' : 'disabled' ?>>
                <span><?= $this->t('property.settings.cross_subdomain') ?></span>
            </label>
            <label class="checkbox">
                <input type="checkbox" name="repromptOnChange" value="1"
                       <?= !empty($settings['repromptOnChange']) ? 'checked' : '' ?> <?= $canEdit ? '' : 'disabled' ?>>
                <span>
                    <?= $this->t('property.settings.reprompt') ?>
                    <span class="help" style="display:block">
                        <?= $this->t('property.settings.reprompt_help') ?>
                    </span>
                </span>
            </label>
            <label class="checkbox">
                <input type="checkbox" name="respectGpc" value="1"
                       <?= !empty($settings['respectGpc']) ? 'checked' : '' ?> <?= $canEdit ? '' : 'disabled' ?>>
                <span>
                    <?= $this->t('property.settings.gpc') ?>
                    <span class="help" style="display:block">
                        <?= $this->t('property.settings.gpc_help') ?>
                    </span>
                </span>
            </label>
        </div>
    </div>

    <div class="card mb-5">
        <div class="card__header"><span class="card__title"><?= $this->t('property.settings.section_banner') ?></span></div>
        <div class="card__body">
            <label class="checkbox">
                <input type="checkbox" name="showRejectAll" value="1"
                       <?= !empty($settings['showRejectAll']) ? 'checked' : '' ?> <?= $canEdit ? '' : 'disabled' ?>>
                <span>
                    <?= $this->t('property.settings.reject_all') ?>
                    <span class="help" style="display:block">
                        <?= $this->t('property.settings.reject_all_help') ?>
                    </span>
                </span>
            </label>
            <label class="checkbox">
                <input type="checkbox" name="showRelaunch" value="1"
                       <?= !empty($settings['showRelaunch']) ? 'checked' : '' ?> <?= $canEdit ? '' : 'disabled' ?>>
                <span>
                    <?= $this->t('property.settings.relaunch') ?>
                    <span class="help" style="display:block">
                        <?= $this->tr('property.settings.relaunch_help') ?>
                    </span>
                </span>
            </label>
            <div class="field" style="max-width:260px">
                <label class="label" for="relaunchPosition"><?= $this->t('property.settings.field_relaunch_position') ?></label>
                <select class="select" id="relaunchPosition" name="relaunchPosition" <?= $canEdit ? '' : 'disabled' ?>>
                    <option value="left" <?= $settings['relaunchPosition'] === 'left' ? 'selected' : '' ?>><?= $this->t('property.settings.position_left') ?></option>
                    <option value="right" <?= $settings['relaunchPosition'] === 'right' ? 'selected' : '' ?>><?= $this->t('property.settings.position_right') ?></option>
                </select>
            </div>
            <div class="field" style="max-width:260px;margin-bottom:0">
                <label class="label" for="languageDetection"><?= $this->t('property.settings.field_language_detection') ?></label>
                <select class="select" id="languageDetection" name="languageDetection" <?= $canEdit ? '' : 'disabled' ?>>
                    <option value="browser" <?= $settings['languageDetection'] === 'browser' ? 'selected' : '' ?>>
                        <?= $this->t('property.settings.detect_browser') ?>
                    </option>
                    <option value="html" <?= $settings['languageDetection'] === 'html' ? 'selected' : '' ?>>
                        <?= $this->t('property.settings.detect_html') ?>
                    </option>
                    <option value="default" <?= $settings['languageDetection'] === 'default' ? 'selected' : '' ?>>
                        <?= $this->t('property.settings.detect_default') ?>
                    </option>
                </select>
            </div>
        </div>
    </div>

    <div class="card mb-5">
        <div class="card__header"><span class="card__title">Google Consent Mode v2</span></div>
        <div class="card__body">
            <label class="checkbox">
                <input type="checkbox" name="googleConsentMode" value="1"
                       <?= !empty($settings['googleConsentMode']) ? 'checked' : '' ?> <?= $canEdit ? '' : 'disabled' ?>>
                <span><?= $this->t('property.settings.gcm_enable') ?></span>
            </label>
            <p class="help"><?= $this->t('property.settings.gcm_enable_help') ?></p>

            <?php
            /*
             * Kein Basic/Advanced-Schalter.
             *
             * Hier stand eine Auswahl, die nichts bewirkte: „Basic" wurde
             * gespeichert und erreichte den Browser nie. Sie kommt auch nicht
             * wieder, denn es gibt nichts zu schalten — ob Googles Tag vor der
             * Einwilligung lädt, entscheidet allein, ob es als Dienst blockiert
             * ist. Das ist die Dienstliste, nicht diese Seite. Ein zweiter Ort
             * für dieselbe Entscheidung wäre ein Ort, an dem beide auseinander
             * laufen.
             */
            ?>
            <div class="notice mt-4">
                <p class="mb-0">
                    <?php /* Roh übergeben: tr() escaped die Ersetzungen selbst. */ ?>
                    <?= $this->tr('property.settings.gcm_mode_note', [
                        'link' => Url::to($base . '/services'),
                    ]) ?>
                </p>
            </div>

            <p class="small muted mb-0 mt-4">
                <?= $this->tr('property.settings.gcm_mapping') ?>
            </p>
        </div>
    </div>

    <div class="card mb-5">
        <div class="card__header">
            <span class="card__title"><?= $this->t('property.settings.section_datalayer') ?></span>
        </div>
        <div class="card__body">
            <label class="checkbox">
                <input type="checkbox" name="dataLayerEnabled" value="1"
                       <?= ($settings['dataLayerEnabled'] ?? true) ? 'checked' : '' ?> <?= $canEdit ? '' : 'disabled' ?>>
                <span><?= $this->t('property.settings.datalayer_enable') ?>
                    <span class="help" style="display:block">
                        <?= $this->tr('property.settings.datalayer_enable_help') ?>
                    </span>
                </span>
            </label>

            <div class="grid grid--2" style="margin-top:var(--space-4)">
                <div class="field">
                    <label class="label" for="dataLayerEventReady">
                        <?= $this->t('property.settings.datalayer_event_ready') ?>
                    </label>
                    <input class="input" type="text" id="dataLayerEventReady" name="dataLayerEventReady"
                           value="<?= $this->e((string) ($settings['dataLayerEventReady'] ?? 'consented_ready')) ?>"
                           pattern="[a-z][a-z0-9_]{0,39}" <?= $canEdit ? '' : 'disabled' ?>>
                </div>
                <div class="field">
                    <label class="label" for="dataLayerEventUpdate">
                        <?= $this->t('property.settings.datalayer_event_update') ?>
                    </label>
                    <input class="input" type="text" id="dataLayerEventUpdate" name="dataLayerEventUpdate"
                           value="<?= $this->e((string) ($settings['dataLayerEventUpdate'] ?? 'consented_update')) ?>"
                           pattern="[a-z][a-z0-9_]{0,39}" <?= $canEdit ? '' : 'disabled' ?>>
                </div>
            </div>
            <p class="help"><?= $this->tr('property.settings.datalayer_events_help') ?></p>

            <div class="grid grid--2">
                <div class="field">
                    <label class="label" for="dataLayerEventWithdrawn">
                        <?= $this->t('property.settings.datalayer_event_withdrawn') ?>
                    </label>
                    <input class="input" type="text" id="dataLayerEventWithdrawn" name="dataLayerEventWithdrawn"
                           value="<?= $this->e((string) ($settings['dataLayerEventWithdrawn'] ?? '')) ?>"
                           placeholder="consented_withdrawn"
                           pattern="[a-z][a-z0-9_]{0,39}" <?= $canEdit ? '' : 'disabled' ?>>
                    <p class="help"><?= $this->t('property.settings.datalayer_event_withdrawn_help') ?></p>
                </div>
                <div class="field">
                    <label class="label" for="dataLayerCategoryEvents">
                        <?= $this->t('property.settings.datalayer_categories') ?>
                    </label>
                    <select class="select" id="dataLayerCategoryEvents" name="dataLayerCategoryEvents"
                            <?= $canEdit ? '' : 'disabled' ?>>
                        <?php foreach (Defaults::categoryEventModes() as $value => $labelKey): ?>
                            <option value="<?= $this->e($value) ?>"
                                <?= ($settings['dataLayerCategoryEvents'] ?? 'off') === $value ? 'selected' : '' ?>>
                                <?= $this->t($labelKey) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <p class="help"><?= $this->tr('property.settings.datalayer_categories_help') ?></p>
                </div>
            </div>

            <label class="checkbox">
                <input type="checkbox" name="dataLayerFlatKeys" value="1"
                       <?= !empty($settings['dataLayerFlatKeys']) ? 'checked' : '' ?> <?= $canEdit ? '' : 'disabled' ?>>
                <span><?= $this->t('property.settings.datalayer_flat') ?>
                    <span class="help" style="display:block">
                        <?= $this->tr('property.settings.datalayer_flat_help') ?>
                    </span>
                </span>
            </label>

            <label class="checkbox">
                <input type="checkbox" name="dataLayerGoogleSignals" value="1"
                       <?= !empty($settings['dataLayerGoogleSignals']) ? 'checked' : '' ?> <?= $canEdit ? '' : 'disabled' ?>>
                <span><?= $this->t('property.settings.datalayer_signals') ?>
                    <span class="help" style="display:block">
                        <?= $this->tr('property.settings.datalayer_signals_help') ?>
                    </span>
                </span>
            </label>

            <label class="checkbox">
                <input type="checkbox" name="dataLayerUiEvents" value="1"
                       <?= !empty($settings['dataLayerUiEvents']) ? 'checked' : '' ?> <?= $canEdit ? '' : 'disabled' ?>>
                <span><?= $this->t('property.settings.datalayer_ui') ?>
                    <span class="help" style="display:block">
                        <?= $this->tr('property.settings.datalayer_ui_help') ?>
                    </span>
                </span>
            </label>

            <div class="field" style="margin:var(--space-4) 0 0">
                <label class="label" for="dataLayerName">
                    <?= $this->t('property.settings.datalayer_name') ?>
                </label>
                <input class="input" type="text" id="dataLayerName" name="dataLayerName"
                       value="<?= $this->e((string) ($settings['dataLayerName'] ?? 'dataLayer')) ?>"
                       <?= $canEdit ? '' : 'disabled' ?>>
                <p class="help"><?= $this->tr('property.settings.datalayer_name_help') ?></p>
            </div>
        </div>
    </div>

    <div class="card mb-5">
        <div class="card__header">
            <span class="card__title">IAB TCF v2.2</span>
            <span class="badge badge--warning"><?= $this->t('property.settings.tcf_badge') ?></span>
        </div>
        <div class="card__body">
            <p class="small muted mb-0">
                <?= $this->tr('property.settings.tcf_note') ?>
            </p>
        </div>
    </div>

    <?php if ($canEdit): ?>
        <div class="row row--end mb-6">
            <button type="submit" class="btn btn--primary"><?= $this->t('property.settings.submit') ?></button>
        </div>
    <?php endif; ?>
</form>

<?php if ($canDelete): ?>
    <div class="card" style="max-width:760px;border-color:color-mix(in srgb, var(--c-danger-600) 35%, transparent)">
        <div class="card__header">
            <span class="card__title" style="color:var(--c-danger-600)"><?= $this->t('property.settings.delete_title') ?></span>
        </div>
        <form method="post" action="<?= $this->e(Url::to($base . '/delete')) ?>">
            <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
            <div class="card__body">
                <p class="small mb-4">
                    <?= $this->t('property.settings.delete_text') ?>
                </p>
                <div class="field" style="max-width:380px;margin-bottom:0">
                    <label class="label" for="confirm">
                        <?= $this->t('property.settings.delete_confirm_label', ['name' => $property['name']]) ?>
                    </label>
                    <input class="input" type="text" id="confirm" name="confirm" autocomplete="off">
                </div>
            </div>
            <div class="card__footer row row--end">
                <button type="submit" class="btn btn--danger">
                    <?= Icon::render('trash', 17) ?> <?= $this->t('property.settings.delete_title') ?>
                </button>
            </div>
        </form>
    </div>
<?php endif; ?>
