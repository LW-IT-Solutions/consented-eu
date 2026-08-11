<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Lang;
use Consented\Core\Url;
use Consented\Property\Consents;

/** @var \Consented\Core\View $this */
/** @var array<string,mixed> $property */
/** @var list<array<string,mixed>> $domains */
/** @var list<array{name:string,provider:string,dps_id:string,category:string,essential:bool,enabled:bool,custom:bool,third_country:bool,review_status:?string}> $services */
/** @var list<array<string,mixed>> $languages */
/** @var array<string,mixed>|null $design */
/** @var list<array<string,mixed>> $versions */
/** @var array<string,mixed> $stats */
/** @var int $statsDays */
/** @var string|null $publishedAt */
/** @var array{state:string,level:string,domainEnforced:bool} $delivery */
/** @var string $cmpUrl */
$base      = '/admin/properties/' . (string) $property['public_id'];
$isDeleted = $property['deleted_at'] !== null;
$isPaused  = $property['suspended_at'] !== null;

// Läuft auf GENAU DIESE Property schon eine Freigabe? Dann statt des
// Öffnen-Formulars zeigen, was offen ist — sonst öffnet man aus Versehen eine
// zweite und der Prüfpfad trägt zwei Einträge für einen Vorgang.
$grant       = \Consented\Auth\Support::active();
$grantIsHere = $grant !== null && $grant['public_id'] === (string) $property['public_id'];
?>
<div class="page-head">
    <div>
        <div class="breadcrumb">
            <a href="<?= $this->e(Url::to('/admin/properties')) ?>"><?= $this->t('admin.properties.title') ?></a>
            <?= Icon::render('chevron-right', 13) ?>
            <span><?= $this->e($property['name']) ?></span>
        </div>
        <h1 class="page-head__title"><?= $this->e($property['name']) ?></h1>
        <p class="page-head__sub mono tiny break-all"><?= $this->e($property['public_id']) ?></p>
    </div>

    <div class="btn-group">
        <?php if (!$isDeleted): ?>
            <a class="btn btn--secondary" href="<?= $this->e(Url::to($base . '/config')) ?>">
                <?= Icon::render('code', 17) ?> <?= $this->t('admin.property.action_config') ?>
            </a>

            <form method="post" action="<?= $this->e(Url::to($base . '/suspend')) ?>"
                  data-confirm="<?= $this->e(Lang::get($isPaused
                      ? 'admin.property.confirm_release'
                      : 'admin.property.confirm_suspend')) ?>">
                <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                <button type="submit" class="btn <?= $isPaused ? 'btn--primary' : 'btn--danger' ?>">
                    <?= Icon::render($isPaused ? 'refresh' : 'lock', 17) ?>
                    <?= $isPaused
                        ? $this->t('admin.property.action_release')
                        : $this->t('admin.property.action_suspend') ?>
                </button>
            </form>
        <?php else: ?>
            <form method="post" action="<?= $this->e(Url::to($base . '/restore')) ?>"
                  data-confirm="<?= $this->e(Lang::get('admin.property.confirm_restore')) ?>">
                <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                <button type="submit" class="btn btn--secondary">
                    <?= Icon::render('refresh', 17) ?> <?= $this->t('admin.property.action_restore') ?>
                </button>
            </form>
        <?php endif; ?>
    </div>
</div>

<?php if (!$isDeleted && $grantIsHere): ?>
    <div class="card mb-5">
        <div class="card__header">
            <span class="card__title"><?= $this->t('admin.property.support_open_title') ?></span>
        </div>
        <div class="card__body row" style="gap:var(--space-3);align-items:center">
            <span style="flex:1 1 320px">
                <?= $this->t('admin.property.support_open_body', [
                    'minutes' => (string) (int) ceil(\Consented\Auth\Support::remaining() / 60),
                    'reason'  => $grant['reason'],
                ]) ?>
            </span>
            <a class="btn btn--primary btn--sm" href="<?= $this->e(Url::to('/properties/' . (string) $property['public_id'])) ?>">
                <?= Icon::render('arrow-right', 16) ?> <?= $this->t('admin.property.support_goto') ?>
            </a>
        </div>
    </div>
<?php elseif (!$isDeleted): ?>
    <?php /*
        Der Sprung in die Kundenmasken. Der Grund ist ein Pflichtfeld und kein
        Freitext aus Höflichkeit: die Änderung selbst steht später im Prüfpfad,
        ihr Anlass steht nirgends sonst.
    */ ?>
    <div class="card mb-5">
        <div class="card__header">
            <span class="card__title"><?= $this->t('admin.property.support_title') ?></span>
        </div>
        <form method="post" action="<?= $this->e(Url::to($base . '/support')) ?>"
              data-confirm="<?= $this->e(Lang::get('admin.property.support_confirm')) ?>">
            <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
            <div class="card__body">
                <p class="help mb-3"><?= $this->tr('admin.property.support_help') ?></p>
                <div class="row row--top">
                    <div style="flex:1 1 320px">
                        <label class="label" for="support-reason">
                            <?= $this->t('admin.property.support_reason') ?>
                        </label>
                        <input class="input" type="text" id="support-reason" name="reason"
                               minlength="5" maxlength="200" required
                               placeholder="<?= $this->t('admin.property.support_reason_placeholder') ?>">
                    </div>
                    <div style="flex:0 0 auto;padding-top:26px">
                        <button type="submit" class="btn btn--primary">
                            <?= Icon::render('edit', 17) ?> <?= $this->t('admin.property.support_start') ?>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php endif; ?>

<div class="alert alert--info mb-5">
    <span class="alert__icon"><?= Icon::render('shield', 18) ?></span>
    <div class="alert__body"><?= $this->tr('admin.property.boundary_note') ?></div>
</div>

<?php if ($isDeleted): ?>
    <div class="alert alert--danger mb-5">
        <span class="alert__icon"><?= Icon::render('trash', 18) ?></span>
        <div class="alert__body">
            <?= $this->t('admin.property.deleted_note', [
                'date' => $this->date($property['deleted_at']),
            ]) ?>
        </div>
    </div>
<?php endif; ?>

<div class="alert alert--<?= $this->e($delivery['level']) ?> mb-5">
    <span class="alert__icon"><?= Icon::render($delivery['state'] === 'ok' ? 'zap' : 'alert', 18) ?></span>
    <div class="alert__body">
        <span class="alert__title"><?= $this->t('admin.property.delivery_title') ?></span>
        <?= $this->t('admin.property.delivery_' . $delivery['state'], [
            'version' => (string) $property['config_version'],
        ]) ?>
        <div class="tiny muted mt-2">
            <?= $delivery['domainEnforced']
                ? $this->t('admin.property.delivery_domain_note')
                : $this->t('admin.property.delivery_domain_open') ?>
        </div>
        <div class="tiny mono muted break-all mt-2"><?= $this->e($cmpUrl) ?></div>
    </div>
</div>

<?php
/*
 * Three figures, not five.
 *
 * `consent_stats_daily` also carries `impressions` and `no_interaction`, and
 * neither can be shown honestly today. bin/worker fills `impressions` with
 * COUNT(*) over `consents`, so it counts stored decisions rather than banner
 * views, and it writes `no_interaction` as a literal 0 that the ON DUPLICATE
 * KEY UPDATE never touches — the ingest has no impression event, so a visitor
 * who ignores the banner leaves no row to count. A card labelled "Impressionen"
 * over the first number, and a figure that is always zero next to it, would
 * both claim a measurement this installation does not make.
 */
?>
<div class="grid grid--3 mb-5">
    <div class="card stat">
        <div class="stat__label"><?= $this->t('admin.property.stat_decisions', ['days' => (string) $statsDays]) ?></div>
        <div class="stat__value"><?= $this->number((int) $stats['decisions']) ?></div>
        <div class="stat__meta" style="color:var(--accent)">
            <?= Consents::sparkline($stats['days'], 110, 26) ?>
        </div>
    </div>
    <div class="card stat">
        <div class="stat__label"><?= $this->t('admin.property.stat_accept_rate') ?></div>
        <div class="stat__value">
            <?= (int) $stats['decisions'] > 0
                ? $this->e(number_format((float) $stats['rate'], 1, ',', '.')) . '&nbsp;%'
                : '—' ?>
        </div>
        <div class="stat__meta">
            <?= $this->t('admin.property.stat_split', [
                'accepted' => $this->number((int) $stats['accept_all']),
                'rejected' => $this->number((int) $stats['reject_all']),
                'custom'   => $this->number((int) $stats['custom_save']),
            ]) ?>
        </div>
    </div>
    <div class="card stat">
        <div class="stat__label"><?= $this->t('admin.property.stat_withdrawals') ?></div>
        <div class="stat__value"><?= $this->number((int) $stats['withdrawals']) ?></div>
        <div class="stat__meta"><?= $this->t('admin.property.stat_withdrawals_meta') ?></div>
    </div>
</div>

<?php if ($stats['recorded'] !== true): ?>
    <div class="alert alert--warning mb-5">
        <span class="alert__icon"><?= Icon::render('clock', 18) ?></span>
        <div class="alert__body"><?= $this->t('admin.property.stats_empty') ?></div>
    </div>
<?php endif; ?>

<p class="tiny muted mb-5"><?= $this->t('admin.property.stats_note', ['days' => (string) $statsDays]) ?></p>

<div class="grid grid--2 mb-5">
    <div class="card card--flush">
        <div class="card__header"><span class="card__title"><?= $this->t('admin.property.section_master') ?></span></div>
        <div class="table-wrap">
            <table class="table">
                <tbody>
                    <tr>
                        <th><?= $this->t('admin.property.field_public_id') ?></th>
                        <td class="mono tiny break-all"><?= $this->e($property['public_id']) ?></td>
                    </tr>
                    <tr>
                        <th><?= $this->t('admin.property.field_slug') ?></th>
                        <td class="mono tiny"><?= $this->e($property['slug']) ?></td>
                    </tr>
                    <tr>
                        <th><?= $this->t('common.status') ?></th>
                        <td><span class="badge"><?= $this->t('admin.properties.status_' . (string) $property['status']) ?></span></td>
                    </tr>
                    <tr>
                        <th><?= $this->t('admin.property.field_version') ?></th>
                        <td class="tnum">
                            v<?= $this->e((string) $property['config_version']) ?>
                            <span class="tiny muted">· <?= $this->e($this->date($publishedAt)) ?></span>
                        </td>
                    </tr>
                    <tr>
                        <th><?= $this->t('admin.property.field_default_language') ?></th>
                        <td class="mono tiny"><?= $this->e($property['default_language']) ?></td>
                    </tr>
                    <tr>
                        <th><?= $this->t('admin.property.field_timezone') ?></th>
                        <td class="tiny"><?= $this->e($property['timezone']) ?></td>
                    </tr>
                    <tr>
                        <th><?= $this->t('admin.property.field_created') ?></th>
                        <td class="tiny muted"><?= $this->e($this->date($property['created_at'])) ?></td>
                    </tr>
                    <tr>
                        <th><?= $this->t('admin.property.field_updated') ?></th>
                        <td class="tiny muted"><?= $this->e($this->date($property['updated_at'])) ?></td>
                    </tr>
                    <tr>
                        <th><?= $this->t('admin.property.field_first_consent') ?></th>
                        <td class="tiny muted"><?= $this->e($this->date($property['first_consent_at'])) ?></td>
                    </tr>
                    <tr>
                        <th><?= $this->t('admin.property.field_last_consent') ?></th>
                        <td class="tiny muted"><?= $this->e($this->date($property['last_consent_at'])) ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="stack">
        <div class="card card--flush">
            <div class="card__header"><span class="card__title"><?= $this->t('admin.property.section_org') ?></span></div>
            <div class="table-wrap">
                <table class="table">
                    <tbody>
                        <tr>
                            <th><?= $this->t('admin.property.field_org') ?></th>
                            <td>
                                <a href="<?= $this->e(Url::to('/admin/orgs/' . $property['org_public_id'])) ?>">
                                    <?= $this->e($property['org_name']) ?>
                                </a>
                                <?php if ($property['org_deleted_at'] !== null): ?>
                                    <span class="badge badge--danger"><?= $this->t('admin.properties.badge_deleted') ?></span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <th><?= $this->t('admin.property.field_legal_name') ?></th>
                            <td class="small"><?= $this->e(($property['org_legal_name'] ?? '') !== '' ? $property['org_legal_name'] : '—') ?></td>
                        </tr>
                        <tr>
                            <th><?= $this->t('admin.property.field_country') ?></th>
                            <td class="mono tiny"><?= $this->e($property['org_country'] ?? '—') ?></td>
                        </tr>
                        <tr>
                            <th><?= $this->t('admin.property.field_owner') ?></th>
                            <td>
                                <span class="small strong" style="display:block"><?= $this->e($property['owner_name'] ?? '—') ?></span>
                                <span class="tiny muted break-all"><?= $this->e($property['owner_email'] ?? '—') ?></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card card--flush">
            <div class="card__header"><span class="card__title"><?= $this->t('admin.property.section_design') ?></span></div>
            <?php if ($design === null): ?>
                <div class="card__body"><p class="small muted mb-0"><?= $this->t('admin.property.no_design') ?></p></div>
            <?php else: ?>
                <div class="table-wrap">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th><?= $this->t('admin.property.field_layout') ?></th>
                                <td class="mono tiny"><?= $this->e($design['layout']) ?> · <?= $this->e($design['position']) ?></td>
                            </tr>
                            <tr>
                                <th><?= $this->t('admin.property.field_preset') ?></th>
                                <td class="mono tiny"><?= $this->e($design['preset']) ?></td>
                            </tr>
                            <tr>
                                <th><?= $this->t('admin.property.field_backdrop') ?></th>
                                <td class="tiny">
                                    <?= (int) $design['backdrop'] === 1 ? $this->t('common.yes') : $this->t('common.no') ?>
                                    <?php if ((int) $design['backdrop_blur'] === 1): ?>
                                        · <?= $this->t('admin.property.backdrop_blur') ?>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th><?= $this->t('admin.property.field_logo') ?></th>
                                <td class="tiny muted break-all"><?= $this->e($design['logo_path'] ?? '—') ?></td>
                            </tr>
                            <tr>
                                <th><?= $this->t('admin.property.field_custom_css') ?></th>
                                <td class="tiny muted">
                                    <?= (int) $design['custom_css_length'] > 0
                                        ? $this->t('admin.property.custom_css_chars', [
                                            'count' => $this->number((int) $design['custom_css_length']),
                                          ])
                                        : $this->t('common.none') ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="card card--flush mb-5">
    <div class="card__header">
        <span class="card__title"><?= $this->t('admin.property.section_domains') ?></span>
        <span class="small muted"><?= $this->e((string) count($domains)) ?></span>
    </div>
    <?php if ($domains === []): ?>
        <div class="card__body"><p class="small muted mb-0"><?= $this->t('admin.property.no_domains') ?></p></div>
    <?php else: ?>
        <div class="table-wrap">
            <table class="table">
                <thead>
                    <tr>
                        <th><?= $this->t('admin.property.col_domain') ?></th>
                        <th><?= $this->t('admin.property.col_verified') ?></th>
                        <th><?= $this->t('admin.property.col_checked') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($domains as $d): ?>
                        <tr>
                            <td>
                                <span class="small strong break-all"><?= $this->e($d['domain']) ?></span>
                                <?php if ((int) $d['is_primary'] === 1): ?>
                                    <span class="badge badge--info"><?= $this->t('admin.property.badge_primary') ?></span>
                                <?php endif; ?>
                                <?php if ((int) $d['include_subdomains'] === 1): ?>
                                    <span class="badge"><?= $this->t('admin.property.badge_subdomains') ?></span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if ($d['verified_at'] !== null): ?>
                                    <span class="badge badge--success"><?= $this->t('admin.property.badge_verified') ?></span>
                                    <div class="tiny muted">
                                        <?= $this->e($this->date($d['verified_at'])) ?>
                                        · <?= $this->e($d['verification_method'] ?? '—') ?>
                                    </div>
                                <?php else: ?>
                                    <span class="badge badge--warning"><?= $this->t('admin.property.badge_unverified') ?></span>
                                <?php endif; ?>
                            </td>
                            <td class="tiny muted"><?= $this->e($this->date($d['last_checked_at'])) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>

<div class="card card--flush mb-5">
    <div class="card__header">
        <span class="card__title"><?= $this->t('admin.property.section_services') ?></span>
        <span class="small muted"><?= $this->e((string) count($services)) ?></span>
    </div>
    <?php if ($services === []): ?>
        <div class="card__body"><p class="small muted mb-0"><?= $this->t('admin.property.no_services') ?></p></div>
    <?php else: ?>
        <div class="table-wrap">
            <table class="table">
                <thead>
                    <tr>
                        <th><?= $this->t('admin.property.col_service') ?></th>
                        <th><?= $this->t('admin.property.col_category') ?></th>
                        <th><?= $this->t('admin.property.col_origin') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($services as $s): ?>
                        <tr>
                            <td>
                                <span class="small strong" style="display:block">
                                    <?= $this->e($s['name'] !== '' ? $s['name'] : '—') ?>
                                </span>
                                <span class="tiny muted"><?= $this->e($s['provider']) ?></span>
                                <?php if (!$s['enabled']): ?>
                                    <span class="badge badge--warning"><?= $this->t('admin.property.badge_disabled') ?></span>
                                <?php endif; ?>
                                <?php if ($s['third_country']): ?>
                                    <span class="badge badge--warning"><?= $this->t('admin.property.badge_third_country') ?></span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <span class="badge"><?= $this->e($s['category']) ?></span>
                                <?php if ($s['essential']): ?>
                                    <span class="badge badge--info"><?= $this->t('admin.property.badge_essential') ?></span>
                                <?php endif; ?>
                            </td>
                            <td class="tiny muted">
                                <?php if ($s['custom']): ?>
                                    <?= $this->t('admin.property.badge_custom') ?>
                                <?php else: ?>
                                    <span class="mono break-all"><?= $this->e($s['dps_id'] !== '' ? $s['dps_id'] : '—') ?></span>
                                    <?php if ($s['review_status'] !== null && $s['review_status'] !== 'verified'): ?>
                                        <span class="badge badge--warning"><?= $this->e($s['review_status']) ?></span>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>

<div class="grid grid--2">
    <div class="card card--flush">
        <div class="card__header"><span class="card__title"><?= $this->t('admin.property.section_languages') ?></span></div>
        <div class="table-wrap">
            <table class="table">
                <thead>
                    <tr>
                        <th><?= $this->t('admin.property.col_language') ?></th>
                        <th><?= $this->t('common.status') ?></th>
                        <th><?= $this->t('admin.property.col_completion') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($languages as $l): ?>
                        <tr>
                            <td>
                                <span class="mono small"><?= $this->e($l['language_code']) ?></span>
                                <?php if ((int) $l['is_default'] === 1): ?>
                                    <span class="badge badge--info"><?= $this->t('common.default') ?></span>
                                <?php endif; ?>
                            </td>
                            <td class="tiny muted">
                                <?= (int) $l['is_enabled'] === 1
                                    ? $this->t('common.active')
                                    : $this->t('common.inactive') ?>
                            </td>
                            <td class="tnum tiny"><?= $this->e((string) $l['completion_percent']) ?>&nbsp;%</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card card--flush">
        <div class="card__header"><span class="card__title"><?= $this->t('admin.property.section_versions') ?></span></div>
        <?php if ($versions === []): ?>
            <div class="card__body"><p class="small muted mb-0"><?= $this->t('admin.property.no_versions') ?></p></div>
        <?php else: ?>
            <div class="table-wrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th><?= $this->t('admin.property.col_version') ?></th>
                            <th><?= $this->t('admin.property.col_published_at') ?></th>
                            <th><?= $this->t('admin.property.col_published_by') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($versions as $v): ?>
                            <tr>
                                <td class="tnum strong">v<?= $this->e((string) $v['version']) ?></td>
                                <td class="tiny"><?= $this->e($this->date($v['published_at'])) ?></td>
                                <td class="tiny muted"><?= $this->e($v['published_by_name'] ?? '—') ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>

<p class="tiny muted mt-4"><?= $this->t('admin.property.no_records_note') ?></p>
