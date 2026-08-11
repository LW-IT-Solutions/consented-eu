<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var array<string,mixed> $entry */
/** @var array<string,mixed>|null $verifier */
/** @var list<string> $purposes */
/** @var list<string> $dataCollected */
/** @var list<string> $technologies */
/** @var list<string> $patterns */
/** @var list<string> $gcmSignals */
/** @var list<array<string,string>> $cookies */
/** @var string|null $evidence */
/** @var int $usage */

$base     = '/admin/catalog/' . (string) $entry['public_id'];
$verified = $entry['review_status'] === 'verified';
$isActive = (int) $entry['is_active'] === 1;

// Row-label column: the shared .table th is uppercase and nowrap, which suits a
// header row but not a 25-character German label.
$labelStyle = 'width:250px;white-space:normal;vertical-align:top';

/** Prints a value, or an em dash when the field was never filled in. */
$value = function (mixed $raw): string {
    $text = is_string($raw) ? trim($raw) : (is_scalar($raw) ? (string) $raw : '');

    return $text === '' ? '—' : $this->e($text);
};
?>
<div class="breadcrumb">
    <a href="<?= $this->e(Url::to('/admin/catalog')) ?>"><?= $this->t('admin.catalog.title') ?></a>
    <?= Icon::render('chevron-right', 13) ?>
    <span><?= $this->e($entry['name']) ?></span>
</div>

<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->e($entry['name']) ?></h1>
        <p class="page-head__sub">
            <span class="mono"><?= $this->e($entry['dps_id']) ?></span>
            · <span class="badge"><?= $this->e($entry['category']) ?></span>
            <?php if ($verified): ?>
                <span class="badge badge--success"><?= $this->t('admin.catalog.status_verified') ?></span>
            <?php elseif ($entry['review_status'] === 'stale'): ?>
                <span class="badge badge--warning"><?= $this->t('admin.catalog.status_stale') ?></span>
            <?php else: ?>
                <span class="badge"><?= $this->t('admin.catalog.status_draft') ?></span>
            <?php endif; ?>
            <?php if (!$isActive): ?>
                <span class="badge badge--danger"><?= $this->t('common.inactive') ?></span>
            <?php endif; ?>
        </p>
    </div>
    <div class="btn-group">
        <a class="btn btn--secondary" href="<?= $this->e(Url::to($base . '/edit')) ?>">
            <?= Icon::render('edit', 17) ?> <?= $this->t('common.edit') ?>
        </a>
    </div>
</div>

<?php if ($usage > 0): ?>
    <div class="alert alert--info mb-5">
        <span class="alert__icon"><?= Icon::render('layers', 18) ?></span>
        <div class="alert__body">
            <?= $this->t('admin.catalog.in_use_note', ['count' => $this->number($usage)]) ?>
        </div>
    </div>
<?php else: ?>
    <p class="tiny muted mb-4"><?= $this->t('admin.catalog.in_use_none') ?></p>
<?php endif; ?>

<!-- Stammdaten ------------------------------------------------------------- -->
<div class="card card--flush mb-5">
    <div class="card__header"><span class="card__title"><?= $this->t('admin.catalog.section_basics') ?></span></div>
    <div class="table-wrap">
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('admin.catalog.field_dps_id') ?></th>
                    <td class="mono"><?= $this->e($entry['dps_id']) ?></td>
                </tr>
                <tr>
                    <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('common.name') ?></th>
                    <td><?= $value($entry['name']) ?></td>
                </tr>
                <tr>
                    <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('admin.catalog.col_provider') ?></th>
                    <td>
                        <?= $value($entry['provider']) ?>
                        <?php if ($entry['provider_country'] !== null): ?>
                            <span class="badge"><?= $this->e($entry['provider_country']) ?></span>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('admin.catalog.col_category') ?></th>
                    <td><span class="badge"><?= $this->e($entry['category']) ?></span></td>
                </tr>
                <tr>
                    <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('admin.catalog.field_legal_basis') ?></th>
                    <td><?= $this->t('admin.catalog.legal_basis_' . (string) $entry['legal_basis']) ?></td>
                </tr>
                <tr>
                    <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('admin.catalog.field_retention') ?></th>
                    <td><?= $value($entry['data_retention']) ?></td>
                </tr>
                <tr>
                    <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('admin.catalog.col_third_country') ?></th>
                    <td>
                        <?php if ((int) $entry['third_country'] === 1): ?>
                            <span class="badge badge--warning"><?= $this->t('admin.catalog.third_country_yes') ?></span>
                        <?php else: ?>
                            <span class="muted"><?= $this->t('admin.catalog.third_country_no') ?></span>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('admin.catalog.field_privacy_url') ?></th>
                    <td class="break-all">
                        <?php if ((string) $entry['privacy_policy_url'] !== ''): ?>
                            <a href="<?= $this->e((string) $entry['privacy_policy_url']) ?>"
                               target="_blank" rel="noopener nofollow">
                                <?= $this->e((string) $entry['privacy_policy_url']) ?>
                                <?= Icon::render('external', 12) ?>
                            </a>
                        <?php else: ?>—<?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('admin.catalog.field_opt_out_url') ?></th>
                    <td class="break-all">
                        <?php if ((string) $entry['opt_out_url'] !== ''): ?>
                            <a href="<?= $this->e((string) $entry['opt_out_url']) ?>"
                               target="_blank" rel="noopener nofollow">
                                <?= $this->e((string) $entry['opt_out_url']) ?>
                                <?= Icon::render('external', 12) ?>
                            </a>
                        <?php else: ?>—<?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('admin.catalog.field_tcf_vendor_id') ?></th>
                    <td class="mono tnum"><?= $value($entry['tcf_vendor_id']) ?></td>
                </tr>
                <tr>
                    <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('admin.catalog.field_google_ac_id') ?></th>
                    <td class="mono tnum"><?= $value($entry['google_ac_id']) ?></td>
                </tr>
                <tr>
                    <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('admin.catalog.field_gcm_signals') ?></th>
                    <td>
                        <?php if ($gcmSignals === []): ?>
                            <span class="muted"><?= $this->t('common.none') ?></span>
                        <?php else: ?>
                            <?php foreach ($gcmSignals as $signal): ?>
                                <span class="badge badge--info mono"><?= $this->e($signal) ?></span>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('admin.catalog.field_created_at') ?></th>
                    <td class="tiny muted">
                        <?= $this->e($this->date($entry['created_at'] ?? null)) ?>
                        · <?= $this->t('admin.catalog.field_updated_at') ?>
                        <?= $this->e($this->date($entry['updated_at'] ?? null)) ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Zwecke, Daten, Technologien -------------------------------------------- -->
<div class="grid grid--3 mb-5">
    <?php
    $lists = [
        ['admin.catalog.section_purposes',   $purposes],
        ['admin.catalog.section_data',       $dataCollected],
        ['admin.catalog.section_technologies', $technologies],
    ];
    foreach ($lists as [$labelKey, $items]):
    ?>
        <div class="card">
            <div class="card__header"><span class="card__title"><?= $this->t($labelKey) ?></span></div>
            <div class="card__body">
                <?php if ($items === []): ?>
                    <p class="muted small mb-0"><?= $this->t('common.none') ?></p>
                <?php else: ?>
                    <ul class="checklist">
                        <?php foreach ($items as $item): ?>
                            <li class="small"><?= $this->e($item) ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- Cookies ---------------------------------------------------------------- -->
<div class="card card--flush mb-5">
    <div class="card__header">
        <span class="card__title"><?= $this->t('admin.catalog.section_cookies') ?></span>
        <span class="badge"><?= $this->e((string) count($cookies)) ?></span>
    </div>
    <?php if ($cookies === []): ?>
        <div class="card__body">
            <p class="muted small mb-0"><?= $this->t('admin.catalog.no_cookies') ?></p>
        </div>
    <?php else: ?>
        <div class="table-wrap">
            <table class="table">
                <thead>
                    <tr>
                        <th><?= $this->t('common.name') ?></th>
                        <th><?= $this->t('admin.catalog.cookie_host') ?></th>
                        <th><?= $this->t('admin.catalog.cookie_type') ?></th>
                        <th><?= $this->t('admin.catalog.cookie_duration') ?></th>
                        <th><?= $this->t('admin.catalog.cookie_purpose') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cookies as $cookie): ?>
                        <tr>
                            <td class="mono small break-all"><?= $this->e($cookie['name']) ?></td>
                            <td class="mono tiny muted break-all"><?= $value($cookie['host']) ?></td>
                            <td class="tiny muted"><?= $value($cookie['type']) ?></td>
                            <td class="tiny muted nowrap"><?= $value($cookie['duration']) ?></td>
                            <td class="small"><?= $value($cookie['purpose']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>

<!-- Blocking-Muster -------------------------------------------------------- -->
<div class="card mb-5">
    <div class="card__header">
        <span class="card__title"><?= $this->t('admin.catalog.section_blocking') ?></span>
        <span class="badge"><?= $this->e((string) count($patterns)) ?></span>
    </div>
    <div class="card__body">
        <?php if ($patterns === []): ?>
            <p class="small mb-0" style="color:var(--c-warning-600)">
                <?= $this->t('admin.catalog.no_pattern_detail') ?>
            </p>
        <?php else: ?>
            <ul class="checklist mb-4">
                <?php foreach ($patterns as $p): ?>
                    <li class="mono small break-all"><?= $this->e($p) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <div class="table-wrap">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('admin.catalog.field_pattern_source_type') ?></th>
                        <td>
                            <?php if ($entry['pattern_source_type'] === null): ?>
                                <span class="badge badge--warning"><?= $this->t('admin.catalog.pattern_unproven') ?></span>
                            <?php else: ?>
                                <span class="mono small"><?= $this->e((string) $entry['pattern_source_type']) ?></span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('admin.catalog.field_pattern_source_url') ?></th>
                        <td class="break-all">
                            <?php if ($entry['pattern_source_url'] !== null && (string) $entry['pattern_source_url'] !== ''): ?>
                                <a href="<?= $this->e((string) $entry['pattern_source_url']) ?>"
                                   target="_blank" rel="noopener nofollow">
                                    <?= $this->e((string) $entry['pattern_source_url']) ?>
                                    <?= Icon::render('external', 12) ?>
                                </a>
                            <?php else: ?>—<?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('admin.catalog.field_pattern_verified_at') ?></th>
                        <td class="tiny muted"><?= $this->e($this->date($entry['pattern_verified_at'] ?? null)) ?></td>
                    </tr>
                    <tr>
                        <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('admin.catalog.field_evidence') ?></th>
                        <td>
                            <?php if ($evidence === 'endpoint'): ?>
                                <span class="badge badge--success"><?= $this->t('admin.catalog.evidence_endpoint') ?></span>
                            <?php elseif ($evidence === 'host'): ?>
                                <span class="badge badge--warning"><?= $this->t('admin.catalog.evidence_host') ?></span>
                            <?php else: ?>
                                <span class="muted small"><?= $this->t('admin.catalog.evidence_none') ?></span>
                            <?php endif; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Herkunft der Stammdaten ------------------------------------------------ -->
<div class="card card--flush mb-5">
    <div class="card__header"><span class="card__title"><?= $this->t('admin.catalog.section_provenance') ?></span></div>
    <div class="table-wrap">
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('admin.catalog.field_source_type') ?></th>
                    <td>
                        <?php if ($entry['source_type'] === null): ?>
                            <span class="badge badge--danger"><?= $this->t('admin.catalog.provenance_missing') ?></span>
                        <?php else: ?>
                            <span class="mono small"><?= $this->e((string) $entry['source_type']) ?></span>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('admin.catalog.field_source_license') ?></th>
                    <td>
                        <?php if ($entry['source_license'] === null || (string) $entry['source_license'] === ''): ?>
                            <span class="badge badge--danger"><?= $this->t('admin.catalog.provenance_missing') ?></span>
                        <?php else: ?>
                            <span class="mono small"><?= $this->e((string) $entry['source_license']) ?></span>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('admin.catalog.field_source_url') ?></th>
                    <td class="break-all">
                        <?php if ($entry['source_url'] !== null && (string) $entry['source_url'] !== ''): ?>
                            <a href="<?= $this->e((string) $entry['source_url']) ?>"
                               target="_blank" rel="noopener nofollow">
                                <?= $this->e((string) $entry['source_url']) ?>
                                <?= Icon::render('external', 12) ?>
                            </a>
                        <?php elseif ((string) $entry['source_license'] === 'public-fact'): ?>
                            <span class="muted small"><?= $this->t('admin.catalog.source_url_public_fact') ?></span>
                        <?php else: ?>
                            <span class="badge badge--danger"><?= $this->t('admin.catalog.provenance_missing') ?></span>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('admin.catalog.field_source_retrieved_at') ?></th>
                    <td class="tiny muted"><?= $this->e($this->date($entry['source_retrieved_at'] ?? null, 'd.m.Y')) ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Prüfung ---------------------------------------------------------------- -->
<div class="card mb-5">
    <div class="card__header"><span class="card__title"><?= $this->t('admin.catalog.section_review') ?></span></div>
    <div class="card__body">
        <div class="alert alert--info mb-4">
            <span class="alert__icon"><?= Icon::render('info', 18) ?></span>
            <div class="alert__body"><?= $this->tr('admin.catalog.review_effect_note') ?></div>
        </div>

        <div class="table-wrap mb-4">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('common.status') ?></th>
                        <td><?= $this->t('admin.catalog.status_' . (string) $entry['review_status']) ?></td>
                    </tr>
                    <tr>
                        <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('admin.catalog.field_verified_by') ?></th>
                        <td class="small">
                            <?php if ($verifier === null): ?>
                                <span class="muted"><?= $this->t('admin.catalog.not_verified_yet') ?></span>
                            <?php else: ?>
                                <?= $this->e((string) $verifier['name']) ?>
                                <span class="tiny muted break-all"><?= $this->e((string) $verifier['email']) ?></span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('admin.catalog.field_verified_at') ?></th>
                        <td class="tiny muted"><?= $this->e($this->date($entry['verified_at'] ?? null)) ?></td>
                    </tr>
                    <tr>
                        <th scope="row" style="<?= $labelStyle ?>"><?= $this->t('admin.catalog.field_review_notes') ?></th>
                        <td class="small" style="white-space:pre-line">
                            <?= $value($entry['review_notes']) ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row">
            <form method="post" action="<?= $this->e(Url::to($base . '/verify')) ?>">
                <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                <button type="submit" class="btn btn--secondary btn--sm">
                    <?= Icon::render($verified ? 'x' : 'check', 16) ?>
                    <?= $verified ? $this->t('admin.catalog.unverify') : $this->t('admin.catalog.verify') ?>
                </button>
            </form>
            <span class="tiny muted"><?= $this->t('admin.catalog.verify_returns_to_list') ?></span>
        </div>
    </div>
</div>

<!-- Verfügbarkeit ---------------------------------------------------------- -->
<div class="card mb-5">
    <div class="card__header"><span class="card__title"><?= $this->t('admin.catalog.section_availability') ?></span></div>
    <div class="card__body">
        <p class="help mb-4"><?= $this->tr('admin.catalog.active_effect_note') ?></p>

        <form method="post" action="<?= $this->e(Url::to($base . '/active')) ?>"
              <?php if ($isActive && $usage > 0): ?>
                  data-confirm="<?= $this->t('admin.catalog.confirm_deactivate_in_use', ['count' => $this->number($usage)]) ?>"
              <?php endif; ?>>
            <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
            <button type="submit" class="btn <?= $isActive ? 'btn--danger' : 'btn--primary' ?> btn--sm">
                <?= Icon::render($isActive ? 'x' : 'check', 16) ?>
                <?= $isActive ? $this->t('admin.catalog.deactivate') : $this->t('admin.catalog.activate') ?>
            </button>
        </form>

        <p class="tiny muted mt-3"><?= $this->t('admin.catalog.no_hard_delete') ?></p>
    </div>
</div>
