<?php

declare(strict_types=1);

use Consented\Core\Csp;
use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var array<string,mixed>|null $entry */
/** @var list<string> $categories */
/** @var list<string> $legalBases */
/** @var list<string> $sources */
/** @var list<string> $licenses */
/** @var list<string> $gcmAll */
/** @var int $usage */

$isEdit = $entry !== null;
$old    = $old ?? [];
$action = $isEdit ? '/admin/catalog/' . (string) $entry['public_id'] . '/edit' : '/admin/catalog/new';
$cancel = $isEdit ? '/admin/catalog/' . (string) $entry['public_id'] : '/admin/catalog';

/** Value for a scalar field: rejected input wins over the stored row. */
$v = static function (string $key, mixed $fallback = '') use ($old, $entry): string {
    if (array_key_exists($key, $old) && !is_array($old[$key])) {
        return (string) $old[$key];
    }

    if ($entry !== null && array_key_exists($key, $entry) && is_scalar($entry[$key])) {
        return (string) $entry[$key];
    }

    return is_scalar($fallback) ? (string) $fallback : '';
};

/**
 * A JSON list column rendered as one value per line in a textarea.
 *
 * Column and form field do not always share a name — the blocking patterns are
 * posted as "patterns" — and rejected input is keyed by the field name. Both
 * have to be passed, otherwise a refused save silently replaces what the
 * operator just typed with the stored value.
 */
$lines = static function (string $column, ?string $field = null) use ($old, $entry): string {
    $field ??= $column;

    if (array_key_exists($field, $old) && !is_array($old[$field])) {
        return (string) $old[$field];
    }

    $decoded = $entry === null ? null : json_decode((string) ($entry[$column] ?? '[]'), true);

    if (!is_array($decoded)) {
        return '';
    }

    return implode("\n", array_map('strval', array_filter($decoded, 'is_scalar')));
};

$checked = static function (string $key, bool $fallback) use ($old): bool {
    // A form was posted at least once when any key is present; an unchecked box
    // sends nothing, so its absence in a non-empty $old means "off".
    return $old === [] ? $fallback : array_key_exists($key, $old);
};

// Cookie rows: rejected input first, then the stored table, then one blank row
// to clone from.
$cookieRows = [];
if (isset($old['cookie_name']) && is_array($old['cookie_name'])) {
    foreach ($old['cookie_name'] as $i => $name) {
        $cookieRows[] = [
            'name'     => is_scalar($name) ? (string) $name : '',
            'host'     => (string) ($old['cookie_host'][$i] ?? ''),
            'type'     => (string) ($old['cookie_type'][$i] ?? ''),
            'duration' => (string) ($old['cookie_duration'][$i] ?? ''),
            'purpose'  => (string) ($old['cookie_purpose'][$i] ?? ''),
        ];
    }
} elseif ($isEdit) {
    $stored = json_decode((string) ($entry['cookies'] ?? '[]'), true);
    foreach (is_array($stored) ? $stored : [] as $cookie) {
        if (!is_array($cookie)) {
            continue;
        }
        $cookieRows[] = [
            'name'     => (string) ($cookie['name'] ?? ''),
            'host'     => (string) ($cookie['host'] ?? ''),
            'type'     => (string) ($cookie['type'] ?? ''),
            'duration' => (string) ($cookie['duration'] ?? ''),
            'purpose'  => (string) ($cookie['purpose'] ?? $cookie['description'] ?? ''),
        ];
    }
}
if ($cookieRows === []) {
    $cookieRows[] = ['name' => '', 'host' => '', 'type' => '', 'duration' => '', 'purpose' => ''];
}

// Selected GCM signals.
$gcmSelected = [];
if (isset($old['gcm_signals']) && is_array($old['gcm_signals'])) {
    $gcmSelected = array_map('strval', array_filter($old['gcm_signals'], 'is_scalar'));
} elseif ($isEdit) {
    $decoded     = json_decode((string) ($entry['gcm_signals'] ?? '[]'), true);
    $gcmSelected = is_array($decoded) ? array_map('strval', array_filter($decoded, 'is_scalar')) : [];
}

// A DATETIME in the column, a date in the input.
$dateValue = static function (string $key) use ($v): string {
    return substr($v($key), 0, 10);
};
?>
<div class="breadcrumb">
    <a href="<?= $this->e(Url::to('/admin/catalog')) ?>"><?= $this->t('admin.catalog.title') ?></a>
    <?= Icon::render('chevron-right', 13) ?>
    <?php if ($isEdit): ?>
        <a href="<?= $this->e(Url::to($cancel)) ?>"><?= $this->e($entry['name']) ?></a>
        <?= Icon::render('chevron-right', 13) ?>
        <span><?= $this->t('common.edit') ?></span>
    <?php else: ?>
        <span><?= $this->t('admin.catalog.new_entry') ?></span>
    <?php endif; ?>
</div>

<div class="page-head">
    <div>
        <h1 class="page-head__title">
            <?= $isEdit ? $this->t('admin.catalog.edit_heading') : $this->t('admin.catalog.new_heading') ?>
        </h1>
        <p class="page-head__sub"><?= $this->t('admin.catalog.form_subtitle') ?></p>
    </div>
</div>

<?php if ($isEdit && $usage > 0): ?>
    <div class="alert alert--warning mb-5">
        <span class="alert__icon"><?= Icon::render('alert', 18) ?></span>
        <div class="alert__body">
            <strong><?= $this->t('admin.catalog.live_warning_title', ['count' => $this->number($usage)]) ?></strong><br>
            <?= $this->tr('admin.catalog.live_warning_body') ?>
        </div>
    </div>
<?php endif; ?>

<form method="post" action="<?= $this->e(Url::to($action)) ?>" style="max-width:880px" novalidate>
    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">

    <!-- Stammdaten --------------------------------------------------------- -->
    <div class="card mb-5">
        <div class="card__header"><span class="card__title"><?= $this->t('admin.catalog.section_basics') ?></span></div>
        <div class="card__body">
            <div class="field">
                <label class="label" for="dps_id"><?= $this->t('admin.catalog.field_dps_id') ?></label>
                <?php if ($isEdit): ?>
                    <input class="input mono" type="text" id="dps_id" value="<?= $this->e($entry['dps_id']) ?>"
                           readonly disabled>
                    <p class="help"><?= $this->tr('admin.catalog.dps_id_locked_help') ?></p>
                <?php else: ?>
                    <input class="input mono" type="text" id="dps_id" name="dps_id" required
                           maxlength="80" pattern="[a-z0-9][a-z0-9\-]{1,78}[a-z0-9]"
                           placeholder="matomo-cloud" value="<?= $this->e($v('dps_id')) ?>">
                    <p class="help"><?= $this->tr('admin.catalog.dps_id_help') ?></p>
                <?php endif; ?>
            </div>

            <div class="grid grid--2" style="gap:var(--space-4)">
                <div class="field">
                    <label class="label" for="name"><?= $this->t('common.name') ?></label>
                    <input class="input" type="text" id="name" name="name" required maxlength="160"
                           value="<?= $this->e($v('name')) ?>">
                </div>
                <div class="field">
                    <label class="label" for="provider"><?= $this->t('admin.catalog.col_provider') ?></label>
                    <input class="input" type="text" id="provider" name="provider" maxlength="160"
                           placeholder="Matomo SAS" value="<?= $this->e($v('provider')) ?>">
                </div>
            </div>

            <div class="grid grid--3" style="gap:var(--space-4)">
                <div class="field">
                    <label class="label" for="category"><?= $this->t('admin.catalog.col_category') ?></label>
                    <select class="select" id="category" name="category">
                        <?php $selectedCategory = $v('category', 'functional'); ?>
                        <?php foreach ($categories as $c): ?>
                            <option value="<?= $this->e($c) ?>" <?= $selectedCategory === $c ? 'selected' : '' ?>>
                                <?= $this->e($c) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="field">
                    <label class="label" for="legal_basis"><?= $this->t('admin.catalog.field_legal_basis') ?></label>
                    <select class="select" id="legal_basis" name="legal_basis">
                        <?php $selectedBasis = $v('legal_basis', 'consent'); ?>
                        <?php foreach ($legalBases as $b): ?>
                            <option value="<?= $this->e($b) ?>" <?= $selectedBasis === $b ? 'selected' : '' ?>>
                                <?= $this->t('admin.catalog.legal_basis_' . $b) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="field">
                    <label class="label" for="provider_country"><?= $this->t('admin.catalog.field_provider_country') ?></label>
                    <input class="input" type="text" id="provider_country" name="provider_country"
                           maxlength="2" placeholder="IE" value="<?= $this->e($v('provider_country')) ?>">
                </div>
            </div>

            <div class="field">
                <label class="label" for="purposes"><?= $this->t('admin.catalog.section_purposes') ?></label>
                <textarea class="textarea" id="purposes" name="purposes" rows="4"
                          placeholder="<?= $this->t('admin.catalog.one_per_line') ?>"><?= $this->e($lines('purposes')) ?></textarea>
                <p class="help"><?= $this->t('admin.catalog.purposes_help') ?></p>
            </div>

            <div class="field">
                <label class="label" for="data_collected"><?= $this->t('admin.catalog.section_data') ?></label>
                <textarea class="textarea" id="data_collected" name="data_collected" rows="4"
                          placeholder="<?= $this->t('admin.catalog.one_per_line') ?>"><?= $this->e($lines('data_collected')) ?></textarea>
            </div>

            <div class="grid grid--2" style="gap:var(--space-4)">
                <div class="field">
                    <label class="label" for="data_retention"><?= $this->t('admin.catalog.field_retention') ?></label>
                    <input class="input" type="text" id="data_retention" name="data_retention" maxlength="160"
                           placeholder="bis zu 14 Monate" value="<?= $this->e($v('data_retention')) ?>">
                </div>
                <div class="field">
                    <label class="label" for="technologies"><?= $this->t('admin.catalog.section_technologies') ?></label>
                    <textarea class="textarea" id="technologies" name="technologies" rows="2"
                              placeholder="<?= $this->t('admin.catalog.one_per_line') ?>"><?= $this->e($lines('technologies')) ?></textarea>
                </div>
            </div>

            <div class="grid grid--2" style="gap:var(--space-4)">
                <div class="field">
                    <label class="label" for="privacy_policy_url"><?= $this->t('admin.catalog.field_privacy_url') ?></label>
                    <input class="input" type="url" id="privacy_policy_url" name="privacy_policy_url"
                           maxlength="500" placeholder="https://…" value="<?= $this->e($v('privacy_policy_url')) ?>">
                </div>
                <div class="field">
                    <label class="label" for="opt_out_url"><?= $this->t('admin.catalog.field_opt_out_url') ?></label>
                    <input class="input" type="url" id="opt_out_url" name="opt_out_url"
                           maxlength="500" placeholder="https://…" value="<?= $this->e($v('opt_out_url')) ?>">
                </div>
            </div>

            <div class="grid grid--2" style="gap:var(--space-4)">
                <div class="field">
                    <label class="label" for="tcf_vendor_id"><?= $this->t('admin.catalog.field_tcf_vendor_id') ?></label>
                    <input class="input tnum" type="text" inputmode="numeric" id="tcf_vendor_id"
                           name="tcf_vendor_id" value="<?= $this->e($v('tcf_vendor_id')) ?>">
                </div>
                <div class="field">
                    <label class="label" for="google_ac_id"><?= $this->t('admin.catalog.field_google_ac_id') ?></label>
                    <input class="input tnum" type="text" inputmode="numeric" id="google_ac_id"
                           name="google_ac_id" value="<?= $this->e($v('google_ac_id')) ?>">
                </div>
            </div>

            <div class="field">
                <label class="checkbox">
                    <input type="checkbox" name="third_country" value="1"
                           <?= $checked('third_country', $isEdit && (int) $entry['third_country'] === 1) ? 'checked' : '' ?>>
                    <span><?= $this->t('admin.catalog.check_third_country') ?></span>
                </label>
                <?php if (!$isEdit): ?>
                    <label class="checkbox">
                        <input type="checkbox" name="is_active" value="1"
                               <?= $checked('is_active', true) ? 'checked' : '' ?>>
                        <span>
                            <?= $this->t('admin.catalog.check_is_active') ?>
                            <span class="help" style="display:block;margin-top:2px">
                                <?= $this->t('admin.catalog.check_is_active_help') ?>
                            </span>
                        </span>
                    </label>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Google Consent Mode ------------------------------------------------ -->
    <div class="card mb-5">
        <div class="card__header"><span class="card__title"><?= $this->t('admin.catalog.field_gcm_signals') ?></span></div>
        <div class="card__body">
            <div class="grid grid--2" style="gap:var(--space-2)">
                <?php foreach ($gcmAll as $signal): ?>
                    <label class="checkbox">
                        <input type="checkbox" name="gcm_signals[]" value="<?= $this->e($signal) ?>"
                               <?= in_array($signal, $gcmSelected, true) ? 'checked' : '' ?>>
                        <span class="mono small"><?= $this->e($signal) ?></span>
                    </label>
                <?php endforeach; ?>
            </div>
            <p class="help"><?= $this->t('admin.catalog.gcm_help') ?></p>
        </div>
    </div>

    <!-- Cookies ------------------------------------------------------------ -->
    <div class="card mb-5">
        <div class="card__header">
            <span class="card__title"><?= $this->t('admin.catalog.section_cookies') ?></span>
            <button type="button" class="btn btn--secondary btn--sm" id="add-cookie">
                <?= Icon::render('plus', 15) ?> <?= $this->t('admin.catalog.add_row') ?>
            </button>
        </div>
        <div class="card__body">
            <div id="cookie-rows">
                <?php foreach ($cookieRows as $cookie): ?>
                    <div class="row row--tight mb-2" data-cookie-row>
                        <input class="input mono" style="flex:1 1 130px" name="cookie_name[]"
                               placeholder="<?= $this->t('common.name') ?>" value="<?= $this->e($cookie['name']) ?>">
                        <input class="input mono" style="flex:1 1 120px" name="cookie_host[]"
                               placeholder="<?= $this->t('admin.catalog.cookie_host') ?>" value="<?= $this->e($cookie['host']) ?>">
                        <input class="input" style="flex:0 1 90px" name="cookie_type[]"
                               placeholder="<?= $this->t('admin.catalog.cookie_type') ?>" value="<?= $this->e($cookie['type']) ?>">
                        <input class="input" style="flex:1 1 110px" name="cookie_duration[]"
                               placeholder="<?= $this->t('admin.catalog.cookie_duration') ?>" value="<?= $this->e($cookie['duration']) ?>">
                        <input class="input" style="flex:2 1 170px" name="cookie_purpose[]"
                               placeholder="<?= $this->t('admin.catalog.cookie_purpose') ?>" value="<?= $this->e($cookie['purpose']) ?>">
                        <button type="button" class="btn btn--ghost btn--sm" data-remove-row
                                aria-label="<?= $this->t('admin.catalog.remove_row') ?>">
                            <?= Icon::render('trash', 16) ?>
                        </button>
                    </div>
                <?php endforeach; ?>
            </div>
            <p class="help"><?= $this->t('admin.catalog.cookies_help') ?></p>
        </div>
    </div>

    <!-- Blocking-Muster ---------------------------------------------------- -->
    <div class="card mb-5">
        <div class="card__header"><span class="card__title"><?= $this->t('admin.catalog.section_blocking') ?></span></div>
        <div class="card__body">
            <div class="field">
                <label class="label" for="patterns"><?= $this->t('admin.catalog.field_patterns') ?></label>
                <textarea class="textarea mono" id="patterns" name="patterns" rows="4" style="font-size:13px"
                          placeholder="connect.facebook.net/en_US/fbevents.js"><?= $this->e($lines('blocking_pattern', 'patterns')) ?></textarea>
                <p class="help"><?= $this->tr('admin.catalog.patterns_help') ?></p>
            </div>

            <div class="grid grid--2" style="gap:var(--space-4)">
                <div class="field">
                    <label class="label" for="pattern_source_type"><?= $this->t('admin.catalog.field_pattern_source_type') ?></label>
                    <select class="select" id="pattern_source_type" name="pattern_source_type">
                        <?php $selectedPatternSource = $v('pattern_source_type'); ?>
                        <option value=""><?= $this->t('admin.catalog.source_type_none') ?></option>
                        <?php foreach ($sources as $s): ?>
                            <option value="<?= $this->e($s) ?>" <?= $selectedPatternSource === $s ? 'selected' : '' ?>>
                                <?= $this->e($s) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="field">
                    <label class="label" for="pattern_source_url"><?= $this->t('admin.catalog.field_pattern_source_url') ?></label>
                    <input class="input" type="url" id="pattern_source_url" name="pattern_source_url"
                           maxlength="512" placeholder="https://connect.facebook.net/en_US/fbevents.js"
                           value="<?= $this->e($v('pattern_source_url')) ?>">
                    <p class="help"><?= $this->t('admin.catalog.pattern_source_url_help') ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Herkunft ----------------------------------------------------------- -->
    <div class="card mb-5">
        <div class="card__header"><span class="card__title"><?= $this->t('admin.catalog.section_provenance') ?></span></div>
        <div class="card__body">
            <div class="alert alert--info mb-4">
                <span class="alert__icon"><?= Icon::render('shield', 18) ?></span>
                <div class="alert__body"><?= $this->tr('admin.catalog.provenance_required_note') ?></div>
            </div>

            <div class="grid grid--2" style="gap:var(--space-4)">
                <div class="field">
                    <label class="label" for="source_type"><?= $this->t('admin.catalog.field_source_type') ?></label>
                    <select class="select" id="source_type" name="source_type" required>
                        <?php $selectedSource = $v('source_type'); ?>
                        <option value="" <?= $selectedSource === '' ? 'selected' : '' ?>>
                            <?= $this->t('admin.catalog.please_choose') ?>
                        </option>
                        <?php foreach ($sources as $s): ?>
                            <option value="<?= $this->e($s) ?>" <?= $selectedSource === $s ? 'selected' : '' ?>>
                                <?= $this->e($s) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="field">
                    <label class="label" for="source_license"><?= $this->t('admin.catalog.field_source_license') ?></label>
                    <select class="select" id="source_license" name="source_license" required>
                        <?php $selectedLicense = $v('source_license'); ?>
                        <option value="" <?= $selectedLicense === '' ? 'selected' : '' ?>>
                            <?= $this->t('admin.catalog.please_choose') ?>
                        </option>
                        <?php foreach ($licenses as $l): ?>
                            <option value="<?= $this->e($l) ?>" <?= $selectedLicense === $l ? 'selected' : '' ?>>
                                <?= $this->e($l) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <p class="help"><?= $this->tr('admin.catalog.license_help') ?></p>
                </div>
            </div>

            <div class="field">
                <label class="label" for="source_url"><?= $this->t('admin.catalog.field_source_url') ?></label>
                <input class="input" type="url" id="source_url" name="source_url" maxlength="512"
                       placeholder="https://…" value="<?= $this->e($v('source_url')) ?>">
                <p class="help"><?= $this->t('admin.catalog.source_url_help') ?></p>
            </div>

            <div class="field">
                <label class="label" for="source_retrieved_at"><?= $this->t('admin.catalog.field_source_retrieved_at') ?></label>
                <input class="input" type="date" id="source_retrieved_at" name="source_retrieved_at"
                       value="<?= $this->e($dateValue('source_retrieved_at')) ?>">
                <p class="help"><?= $this->t('admin.catalog.retrieved_at_help') ?></p>
            </div>

            <div class="field">
                <label class="label" for="review_notes"><?= $this->t('admin.catalog.field_review_notes') ?></label>
                <textarea class="textarea" id="review_notes" name="review_notes" rows="4"><?= $this->e($v('review_notes')) ?></textarea>
                <p class="help"><?= $this->tr('admin.catalog.review_notes_help') ?></p>
            </div>
        </div>
    </div>

    <div class="row row--between">
        <a class="btn btn--ghost" href="<?= $this->e(Url::to($cancel)) ?>"><?= $this->t('common.cancel') ?></a>
        <button type="submit" class="btn btn--primary">
            <?= $isEdit ? $this->t('common.save') : $this->t('admin.catalog.create_entry') ?>
        </button>
    </div>
</form>

<?php $this->start('scripts'); ?>
<script nonce="<?= $this->e(Csp::nonce()) ?>">
(function () {
    var rows = document.getElementById('cookie-rows');
    var add  = document.getElementById('add-cookie');
    if (!rows || !add) { return; }

    add.addEventListener('click', function () {
        var template = rows.querySelector('[data-cookie-row]');
        if (!template) { return; }

        var clone = template.cloneNode(true);
        clone.querySelectorAll('input').forEach(function (input) { input.value = ''; });
        rows.appendChild(clone);
        clone.querySelector('input').focus();
    });

    rows.addEventListener('click', function (event) {
        var button = event.target.closest('[data-remove-row]');
        if (!button) { return; }

        var row = button.closest('[data-cookie-row]');
        if (!row) { return; }

        // Always keep one row so there is something left to clone from.
        if (rows.querySelectorAll('[data-cookie-row]').length > 1) {
            row.remove();
        } else {
            row.querySelectorAll('input').forEach(function (input) { input.value = ''; });
        }
    });
})();
</script>
<?php $this->end(); ?>
