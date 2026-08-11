<?php

declare(strict_types=1);

namespace Consented\Admin;

use Consented\Auth\Support;
use Consented\Core\Audit;
use Consented\Core\Clock;
use Consented\Core\Controller;
use Consented\Core\Db;
use Consented\Core\Exception\HttpException;
use Consented\Core\Paginator;
use Consented\Core\Request;
use Consented\Core\Sanitizer;
use Consented\Core\Response;
use Consented\Core\Url;
use Consented\Core\Uuid;
use Consented\Property\ConfigBuilder;
use Consented\Property\Property;

/**
 * Instance administration for properties owned by other organisations.
 *
 * Deliberately separate from the customer-facing property pages, and
 * deliberately narrower than they are.
 *
 * The customer pages behind /properties/{id} answer to Permission::roleFor(),
 * which knows property_users and organization_members and nothing else. An
 * instance administrator is normally a member of neither, so those pages 404
 * for them by default. This controller reaches across organisations because
 * that is its stated job, and it is mounted behind the 'admin' middleware
 * rather than behind a role check.
 *
 * WHAT IT SHOWS BY ITSELF
 *
 *   - A read-only view of a foreign property: configuration, domains, services,
 *     versions, and the config the SDK actually delivers.
 *   - Consent AGGREGATES only. A single consent record is the website visitor's
 *     own data — the account holder does not own it, and the instance operator
 *     has even less claim to it. That line stays where it is.
 *   - Two operational writes: taking a property out of delivery, and undoing a
 *     soft delete.
 *
 * WHAT IT UNLOCKS
 *
 *   Editing a foreign property in full is possible, but not from here and not
 *   silently. startSupport() opens a time-limited, logged grant (see
 *   Consented\Auth\Support) after which the administrator uses the customer's
 *   own masks — same forms, same validation, same publish path, no second
 *   implementation to keep in step. Every page then carries a banner, and every
 *   write lands in the audit log against that property.
 *
 *   This was a deliberate decision by the operator of this instance, against
 *   the narrower reading of the processor role. It is written down in
 *   docs/DECISIONS.md so that nobody has to guess later whether it was one.
 */
final class PropertyAdminController extends Controller
{
    private const PER_PAGE = 25;

    /** How far back the detail page's consent figures reach. */
    private const STATS_DAYS = 30;

    /**
     * Sort orders offered by the list.
     *
     * A fixed map from a request value to a constant SQL fragment. The request
     * never contributes a character to the statement — an unknown key falls
     * back to the default rather than being passed through.
     */
    private const SORTS = [
        'created'  => 'p.id DESC',
        'consents' => 'consents DESC, p.id DESC',
        'active'   => 'p.last_consent_at IS NULL, p.last_consent_at DESC, p.id DESC',
        'name'     => 'p.name ASC, p.id DESC',
    ];

    /* ------------------------------------------------------------------ list */

    public function index(Request $request): Response
    {
        $query   = trim((string) $request->input('q', ''));
        $status  = (string) $request->input('status', '');
        $deleted = (string) $request->input('deleted', '');
        $sort    = (string) $request->input('sort', 'created');

        if (!in_array($status, ['draft', 'live', 'paused'], true)) {
            $status = '';
        }

        if (!in_array($deleted, ['with', 'only'], true)) {
            $deleted = '';
        }

        if (!array_key_exists($sort, self::SORTS)) {
            $sort = 'created';
        }

        $conditions = [];
        $params     = [];

        // Soft-deleted rows stay out unless they are asked for by name. They
        // are still in the table because audit entries and consent records
        // point at them.
        if ($deleted === '') {
            $conditions[] = 'p.deleted_at IS NULL';
        } elseif ($deleted === 'only') {
            $conditions[] = 'p.deleted_at IS NOT NULL';
        }

        if ($status !== '') {
            $conditions[] = 'p.status = :st';
            $params['st'] = $status;
        }

        if ($query !== '') {
            $conditions[] = '(p.name LIKE :q
                              OR EXISTS (SELECT 1 FROM property_domains d
                                          WHERE d.property_id = p.id AND d.domain LIKE :q2))';
            $params['q']  = '%' . $query . '%';
            $params['q2'] = '%' . $query . '%';
        }

        $where = $conditions === [] ? '1=1' : implode(' AND ', $conditions);

        $total = (int) Db::value(
            'SELECT COUNT(*) FROM properties p WHERE ' . $where,
            $params
        );

        $pager = Paginator::fromRequest($request, $total, self::PER_PAGE);

        $properties = Db::all(
            'SELECT p.public_id, p.name, p.status, p.config_version, p.created_at,
                    p.deleted_at, p.first_consent_at, p.last_consent_at,
                    o.public_id AS org_public_id, o.name AS org_name,
                    u.email AS owner_email,
                    (SELECT d.domain FROM property_domains d
                      WHERE d.property_id = p.id
                      ORDER BY d.is_primary DESC, d.id LIMIT 1) AS primary_domain,
                    (SELECT COUNT(*) FROM property_domains d WHERE d.property_id = p.id) AS domains,
                    (SELECT COUNT(*) FROM property_domains d
                      WHERE d.property_id = p.id AND d.verified_at IS NOT NULL) AS domains_verified,
                    (SELECT COUNT(*) FROM property_dps s WHERE s.property_id = p.id) AS services,
                    (SELECT COUNT(*) FROM consents c WHERE c.property_id = p.id) AS consents
               FROM properties p
               JOIN organizations o ON o.id = p.org_id
          LEFT JOIN users u ON u.id = o.owner_user_id
              WHERE ' . $where . '
              ORDER BY ' . self::SORTS[$sort] . '
              LIMIT :limit OFFSET :offset',
            $params + $pager->bindings()
        );

        return $this->view('admin/properties', [
            'title'      => __('admin.properties.title'),
            'activeNav'  => 'admin.properties',
            'properties' => $properties,
            'pager'      => $pager,
            'query'      => $query,
            'status'     => $status,
            'deleted'    => $deleted,
            'sort'       => $sort,
            'filters'    => ['q' => $query, 'status' => $status, 'deleted' => $deleted, 'sort' => $sort],
        ], 'layouts/admin');
    }

    /* ---------------------------------------------------------------- detail */

    public function show(Request $request): Response
    {
        $property = $this->row($request);
        $id       = (int) $property['id'];

        $domains = Db::all(
            'SELECT public_id, domain, is_primary, include_subdomains, verified_at,
                    verification_method, last_checked_at, created_at
               FROM property_domains
              WHERE property_id = :id
              ORDER BY is_primary DESC, domain',
            ['id' => $id]
        );

        $languages = Db::all(
            'SELECT language_code, is_default, is_enabled, completion_percent
               FROM property_languages
              WHERE property_id = :id
              ORDER BY is_default DESC, sort_order, language_code',
            ['id' => $id]
        );

        $design = Db::first(
            "SELECT layout, position, preset, backdrop, backdrop_blur, animation, logo_path,
                    CHAR_LENGTH(COALESCE(custom_css, '')) AS custom_css_length
               FROM property_design
              WHERE property_id = :id",
            ['id' => $id]
        );

        $versions = Db::all(
            'SELECT v.version, v.note, v.published_at, u.name AS published_by_name
               FROM property_versions v
          LEFT JOIN users u ON u.id = v.published_by
              WHERE v.property_id = :id
              ORDER BY v.version DESC
              LIMIT 5',
            ['id' => $id]
        );

        $publishedAt = (int) $property['config_version'] > 0
            ? Db::value(
                'SELECT published_at FROM property_versions WHERE property_id = :id AND version = :v',
                ['id' => $id, 'v' => (int) $property['config_version']]
            )
            : null;

        $verifiedDomains = 0;
        foreach ($domains as $domain) {
            if ($domain['verified_at'] !== null) {
                $verifiedDomains++;
            }
        }

        return $this->view('admin/property-show', [
            'title'       => __('admin.property.title', ['name' => (string) $property['name']]),
            'activeNav'   => 'admin.properties',
            'property'    => $property,
            'domains'     => $domains,
            'services'    => $this->services($id),
            'languages'   => $languages,
            'design'      => $design,
            'versions'    => $versions,
            'publishedAt' => is_string($publishedAt) ? $publishedAt : null,
            'stats'       => $this->stats($id),
            'statsDays'   => self::STATS_DAYS,
            'delivery'    => $this->delivery($property, $verifiedDomains > 0),
            'cmpUrl'      => Url::cdn('/p/' . (string) $property['public_id'] . '/cmp.js'),
        ], 'layouts/admin');
    }

    /**
     * The configuration that actually ships, as JSON.
     *
     * The single most useful screen in support: "my banner looks wrong" is
     * almost always a question about what the browser received, and the answer
     * is never the working draft — it is the frozen snapshot of the published
     * version, which is what SdkController::runtime() inlines.
     *
     * So both are shown, labelled, and the difference is named. The banner is
     * not rendered and nothing is embedded in an iframe: this page must not
     * execute a customer's configuration, only display it.
     */
    public function config(Request $request): Response
    {
        // Property::findByPublicId() excludes soft-deleted rows, which is
        // correct here: a deleted property delivers nothing, so there is no
        // delivered configuration to show.
        $property = Property::findByPublicId($request->param('pid'));

        if ($property === null) {
            throw new HttpException(404);
        }

        $version   = $property->configVersion();
        $delivered = $version > 0 ? $property->publishedConfig($version) : null;
        $working   = ConfigBuilder::build($property, max(1, $version));

        // Reading a customer's full configuration is a processor action on
        // their data, so it is recorded — same reasoning as opening a stored
        // mail body in AdminController.
        Audit::log(
            'admin.property_config_viewed',
            $this->requireUser()->id(),
            $property->orgId(),
            $property->id(),
            'property',
            $property->publicId(),
            ['version' => $version],
            $request->ip()
        );

        return $this->view('admin/property-config', [
            'title'      => __('admin.property.config_title'),
            'activeNav'  => 'admin.properties',
            'publicId'   => $property->publicId(),
            'name'       => $property->name(),
            'version'    => $version,
            'suspended'  => $property->isSuspended(),
            'delivered'  => $delivered === null ? null : $this->pretty($delivered),
            'working'    => $this->pretty($working),
            'differs'    => $delivered !== null && json_encode($working) !== json_encode($delivered),
            'patterns'   => ConfigBuilder::stubPatterns($property),
            'cmpUrl'     => Url::cdn('/p/' . $property->publicId() . '/cmp.js'),
            'configUrl'  => $version > 0
                ? Url::cdn('/p/' . $property->publicId() . '/config/' . $version . '.json')
                : null,
        ], 'layouts/admin');
    }

    /* --------------------------------------------------------------- support */

    /**
     * Öffnet den Support-Zugriff auf diese Property und springt hinein.
     *
     * Danach stehen dem Administrator im Kundenbereich alle Masken offen —
     * Einstellungen, Domains, Sprachen, Texte, Design, Dienste, Mitglieder,
     * Veröffentlichen —, weil Permission::roleFor() ihm für die Dauer der
     * Freigabe die Rolle 'owner' zuspricht. Es entstehen dafür keine zweiten
     * Formulare: es sind dieselben Seiten, die der Kunde benutzt, und damit
     * dieselbe Validierung und dieselben Prüfungen.
     *
     * Der Grund ist Pflicht. Nicht als Formsache, sondern weil er das einzige
     * ist, was später erklärt, warum an einer fremden Konfiguration etwas
     * geändert wurde — die Änderung selbst steht im Prüfpfad, ihr Anlass nicht.
     */
    public function startSupport(Request $request): Response
    {
        $actor    = $this->requireUser();
        $property = $this->row($request);

        // Erst säubern, dann messen. Umgekehrt hätte reason="<br/>" die
        // Längenprüfung mit fünf Zeichen bestanden und wäre als leerer String
        // gespeichert worden — die Pflichtangabe wäre eine Formalie gewesen,
        // die sich mit einem einzigen Tag aushebeln lässt.
        $reason = Sanitizer::text((string) $request->input('reason', ''));

        if (mb_strlen($reason) < 5) {
            $this->flash('error', __('flash.admin.support_reason_required'));

            return $this->redirect('/admin/properties/' . (string) $property['public_id']);
        }

        if ($property['deleted_at'] !== null) {
            $this->flash('error', __('flash.admin.support_deleted'));

            return $this->redirect('/admin/properties/' . (string) $property['public_id']);
        }

        Support::start(
            $actor,
            (int) $property['id'],
            (string) $property['public_id'],
            $reason,
            (string) $property['name']
        );

        $this->flash('info', __('flash.admin.support_started', [
            'name'    => (string) $property['name'],
            'minutes' => (string) (int) round(Support::TTL_SECONDS / 60),
        ]));

        return $this->redirect('/properties/' . (string) $property['public_id']);
    }

    /**
     * Beendet den Support-Zugriff.
     *
     * Erreichbar aus dem Banner im Kundenbereich, deshalb hängt die Route in
     * der auth-Gruppe und nicht in der admin-Gruppe. Ein Nicht-Administrator
     * kann hier nichts anrichten: ohne offene Freigabe passiert nichts.
     */
    public function endSupport(Request $request): Response
    {
        $actor = $this->requireUser();
        $grant = Support::active();

        Support::stop($actor);

        if ($grant === null) {
            return $this->redirect('/dashboard');
        }

        $this->flash('success', __('flash.admin.support_ended'));

        return $this->redirect('/admin/properties/' . $grant['public_id']);
    }

    /* ---------------------------------------------------------------- writes */

    /**
     * Takes a property out of delivery, or puts it back.
     *
     * `properties.status` existed before this and was written on publish and
     * on soft delete, but nothing ever read it on the delivery path — so a
     * "paused" property kept serving its banner. SdkController::runtime() now
     * honours it. The consent endpoint deliberately does not: a visitor whose
     * consent is already stored must be able to withdraw it even while the
     * property is suspended, or suspension would take away a right that is not
     * ours to take.
     */
    public function suspend(Request $request): Response
    {
        $actor    = $this->requireUser();
        $property = $this->row($request);

        if ($property['deleted_at'] !== null) {
            $this->flash('error', __('flash.admin.property_deleted_suspend'));

            return $this->redirect('/admin/properties/' . (string) $property['public_id']);
        }

        // Geschrieben wird suspended_at, nicht status. status gehört dem
        // Kunden, und Property::publish() setzt ihn bedingungslos auf 'live' —
        // eine Stilllegung, die sich dort ausdrückt, wäre nach dem nächsten
        // Klick auf "Veröffentlichen" verschwunden, ohne dass es auffällt.
        $wasSuspended = $property['suspended_at'] !== null;
        $reason       = trim((string) $request->input('reason', ''));

        Db::update(
            'properties',
            $wasSuspended
                ? ['suspended_at' => null, 'suspended_reason' => null, 'updated_at' => Clock::now()]
                : [
                    'suspended_at'     => Clock::now(),
                    'suspended_reason' => $reason === '' ? null : mb_substr(Sanitizer::text($reason), 0, 255),
                    'updated_at'       => Clock::now(),
                ],
            ['id' => (int) $property['id']]
        );

        $was = $wasSuspended ? 'suspended' : 'active';
        $now = $wasSuspended ? 'active' : 'suspended';

        Audit::log(
            $now === 'suspended' ? 'admin.property_suspended' : 'admin.property_released',
            $actor->id(),
            (int) $property['org_id'],
            (int) $property['id'],
            'property',
            (string) $property['public_id'],
            Audit::diff(['status' => $was], ['status' => $now]),
            $request->ip()
        );

        $this->flash('success', __(
            $now === 'suspended' ? 'flash.admin.property_suspended' : 'flash.admin.property_released',
            ['name' => (string) $property['name']]
        ));

        return $this->redirect('/admin/properties/' . (string) $property['public_id']);
    }

    /**
     * Undoes a soft delete.
     *
     * The restored property comes back suspended, never live. We do not know
     * which state it was in before — softDelete() overwrote it with 'paused' —
     * and guessing "live" would put a banner back onto a stranger's website
     * without anyone deciding that it should be there.
     */
    public function restore(Request $request): Response
    {
        $actor    = $this->requireUser();
        $property = $this->row($request);

        if ($property['deleted_at'] === null) {
            $this->flash('error', __('flash.admin.property_not_deleted'));

            return $this->redirect('/admin/properties/' . (string) $property['public_id']);
        }

        // A property under a deleted organisation would be reachable from
        // nowhere and editable by nobody.
        if ($property['org_deleted_at'] !== null) {
            $this->flash('error', __('flash.admin.property_org_deleted'));

            return $this->redirect('/admin/properties/' . (string) $property['public_id']);
        }

        Db::update(
            'properties',
            ['deleted_at' => null, 'status' => 'paused', 'updated_at' => Clock::now()],
            ['id' => (int) $property['id']]
        );

        Audit::log(
            'admin.property_restored',
            $actor->id(),
            (int) $property['org_id'],
            (int) $property['id'],
            'property',
            (string) $property['public_id'],
            ['deleted_at' => ['from' => (string) $property['deleted_at'], 'to' => null], 'status' => 'paused'],
            $request->ip()
        );

        $this->flash('success', __('flash.admin.property_restored', ['name' => (string) $property['name']]));

        return $this->redirect('/admin/properties/' . (string) $property['public_id']);
    }

    /* ------------------------------------------------------------------ data */

    /**
     * The property row behind {pid}, soft-deleted ones included.
     *
     * Property::findByPublicId() filters `deleted_at IS NULL`, which is right
     * for every other caller and wrong for the one screen that has to offer a
     * restore button.
     *
     * @return array<string,mixed>
     */
    private function row(Request $request): array
    {
        $publicId = $request->param('pid');

        // Cheap guard before the query: {pid} matches any path segment, and a
        // LIKE-free equality on a CHAR(36) column has no business seeing a
        // 4 KB path.
        if (!Uuid::isValid($publicId)) {
            throw new HttpException(404);
        }

        $row = Db::first(
            'SELECT p.id, p.public_id, p.org_id, p.name, p.slug, p.timezone, p.status,
                    p.suspended_at, p.suspended_reason,
                    p.default_language, p.config_version, p.first_consent_at, p.last_consent_at,
                    p.created_at, p.updated_at, p.deleted_at,
                    o.public_id AS org_public_id, o.name AS org_name, o.legal_name AS org_legal_name,
                    o.country_code AS org_country, o.deleted_at AS org_deleted_at,
                    u.public_id AS owner_public_id, u.name AS owner_name, u.email AS owner_email
               FROM properties p
               JOIN organizations o ON o.id = p.org_id
          LEFT JOIN users u ON u.id = o.owner_user_id
              WHERE p.public_id = :pid',
            ['pid' => $publicId]
        );

        if ($row === null) {
            throw new HttpException(404);
        }

        return $row;
    }

    /**
     * Attached services, resolved far enough for a table.
     *
     * A custom service keeps its whole record in `overrides`, so the name and
     * provider have to be dug out of JSON here rather than in the template.
     *
     * @return list<array{name:string,provider:string,dps_id:string,category:string,essential:bool,enabled:bool,custom:bool,third_country:bool,review_status:?string}>
     */
    private function services(int $propertyId): array
    {
        $rows = Db::all(
            'SELECT pd.is_custom, pd.category_key, pd.is_essential, pd.is_enabled, pd.overrides,
                    c.dps_id, c.name AS catalog_name, c.provider AS catalog_provider,
                    c.third_country, c.review_status
               FROM property_dps pd
          LEFT JOIN dps_catalog c ON c.id = pd.dps_catalog_id
              WHERE pd.property_id = :id
              ORDER BY pd.sort_order, pd.id',
            ['id' => $propertyId]
        );

        $out = [];

        foreach ($rows as $row) {
            $overrides = json_decode((string) ($row['overrides'] ?? '{}'), true);
            if (!is_array($overrides)) {
                $overrides = [];
            }

            $custom = (int) $row['is_custom'] === 1;

            $out[] = [
                'name' => (string) ($overrides['name'] ?? ($row['catalog_name'] ?? '')),
                'provider' => (string) ($overrides['provider'] ?? ($row['catalog_provider'] ?? '')),
                'dps_id'        => (string) ($row['dps_id'] ?? ''),
                'category'      => (string) $row['category_key'],
                'essential'     => (int) $row['is_essential'] === 1,
                'enabled'       => (int) $row['is_enabled'] === 1,
                'custom'        => $custom,
                'third_country' => (int) ($row['third_country'] ?? 0) === 1,
                'review_status' => $row['review_status'] === null ? null : (string) $row['review_status'],
            ];
        }

        return $out;
    }

    /**
     * Consent figures for the last 30 days, from the daily rollup only.
     *
     * Never from `consents`: that table holds one row per visitor decision,
     * and an instance administrator has no reason to see rows. The rollup is
     * already aggregated over date, domain, language, country and layout, so
     * summing it cannot reconstruct an individual.
     *
     * `impressions` and `no_interaction` are summed for completeness but are
     * deliberately not put on the page. bin/worker sets `impressions` to
     * COUNT(*) over `consents`, which counts stored decisions and not banner
     * views, and writes `no_interaction` as a constant 0 — the ingest has no
     * impression event, so nothing can ever increment it. Whoever fills those
     * columns properly can surface them; until then they would be a number
     * that means something other than its label.
     *
     * @return array{days:list<array{date:string,count:int,accepts:int}>,impressions:int,accept_all:int,reject_all:int,custom_save:int,no_interaction:int,withdrawals:int,decisions:int,rate:float,recorded:bool}
     */
    private function stats(int $propertyId): array
    {
        $since = gmdate('Y-m-d', time() - (self::STATS_DAYS - 1) * 86400);

        $rows = Db::all(
            'SELECT stat_date,
                    SUM(impressions)    AS impressions,
                    SUM(accept_all)     AS accept_all,
                    SUM(reject_all)     AS reject_all,
                    SUM(custom_save)    AS custom_save,
                    SUM(no_interaction) AS no_interaction,
                    SUM(withdrawals)    AS withdrawals
               FROM consent_stats_daily
              WHERE property_id = :id AND stat_date >= :since
              GROUP BY stat_date
              ORDER BY stat_date',
            ['id' => $propertyId, 'since' => $since]
        );

        $totals = [
            'impressions'    => 0,
            'accept_all'     => 0,
            'reject_all'     => 0,
            'custom_save'    => 0,
            'no_interaction' => 0,
            'withdrawals'    => 0,
        ];

        $indexed = [];

        foreach ($rows as $row) {
            foreach (array_keys($totals) as $key) {
                $totals[$key] += (int) $row[$key];
            }

            $indexed[(string) $row['stat_date']] = [
                'count'   => (int) $row['accept_all'] + (int) $row['reject_all'] + (int) $row['custom_save'],
                'accepts' => (int) $row['accept_all'],
            ];
        }

        // Gaps are filled so a quiet day reads as a quiet day and not as a
        // missing point that the sparkline silently closes over.
        $series = [];
        for ($i = self::STATS_DAYS - 1; $i >= 0; $i--) {
            $date     = gmdate('Y-m-d', time() - $i * 86400);
            $series[] = [
                'date'    => $date,
                'count'   => $indexed[$date]['count'] ?? 0,
                'accepts' => $indexed[$date]['accepts'] ?? 0,
            ];
        }

        $decisions = $totals['accept_all'] + $totals['reject_all'] + $totals['custom_save'];

        return $totals + [
            'days'      => $series,
            'decisions' => $decisions,
            'rate'      => $decisions > 0 ? ($totals['accept_all'] / $decisions) * 100 : 0.0,
            'recorded'  => $rows !== [],
        ];
    }

    /**
     * What /p/{publicId}/cmp.js answers for this property right now.
     *
     * Mirrors the order of the guards in SdkController::runtime(). Support
     * questions start here, so the page says which guard fires rather than
     * leaving the operator to reason it out from four scattered fields.
     *
     * @param  array<string,mixed> $property
     * @return array{state:string,level:string,domainEnforced:bool}
     */
    private function delivery(array $property, bool $hasVerifiedDomain): array
    {
        $state = 'ok';

        if ($property['deleted_at'] !== null) {
            $state = 'deleted';
        } elseif ($property['suspended_at'] !== null) {
            $state = 'suspended';
        } elseif ((int) $property['config_version'] === 0) {
            $state = 'unpublished';
        } elseif (Db::value(
            'SELECT 1 FROM property_versions WHERE property_id = :id AND version = :v',
            ['id' => (int) $property['id'], 'v' => (int) $property['config_version']]
        ) === null) {
            $state = 'missing';
        }

        return [
            'state'          => $state,
            'level'          => $state === 'ok' ? 'success' : ($state === 'unpublished' ? 'info' : 'warning'),
            'domainEnforced' => $hasVerifiedDomain,
        ];
    }

    /** @param array<string,mixed> $config */
    private function pretty(array $config): string
    {
        $json = json_encode(
            $config,
            JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
        );

        return $json === false ? '' : $json;
    }
}
