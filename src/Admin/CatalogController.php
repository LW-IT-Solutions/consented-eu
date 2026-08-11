<?php

declare(strict_types=1);

namespace Consented\Admin;

use Consented\Core\Audit;
use Consented\Core\Clock;
use Consented\Core\Controller;
use Consented\Core\Db;
use Consented\Core\Exception\HttpException;
use Consented\Core\Paginator;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\Session;
use Consented\Core\Url;
use Consented\Core\Uuid;
use Consented\Property\Defaults;

/**
 * Editorial maintenance of the shared DPS catalogue.
 *
 * The catalogue is the one part of this project where a wrong entry can cost
 * money: every property that embeds a service reads its cookie table, its
 * retention period and its blocking patterns from here, and a visitor sees
 * those values in the banner. Two consequences run through this whole class.
 *
 * Provenance is not paperwork. bin/verify-catalog fails the release when an
 * entry cannot say where its data came from and under which licence, so the
 * forms refuse to save an entry that would break that gate later.
 *
 * And an edit is immediately live. ConfigBuilder reads the catalogue row on
 * every build rather than copying it into the property, so there is no draft
 * state between here and the banner — which is why the edit form leads with
 * the number of properties affected.
 */
final class CatalogController extends Controller
{
    /**
     * Exactly the columns the views need, named one by one.
     *
     * `SELECT *` would work here — dps_catalog holds no secrets — but the rule
     * that a column reaches a template only when someone typed its name is
     * worth more than the keystrokes it costs.
     */
    private const ENTRY_COLUMNS =
        'id, public_id, dps_id, name, provider, provider_country, category, purposes,
         legal_basis, data_collected, data_retention, privacy_policy_url, opt_out_url,
         cookies, technologies, blocking_pattern, pattern_source_type, pattern_source_url,
         pattern_verified_at, gcm_signals, tcf_vendor_id, google_ac_id, third_country,
         is_active, source_type, source_url, source_license, source_retrieved_at,
         review_status, verified_by, verified_at, review_notes, created_at, updated_at';

    /** Same shape the dps_id column is documented with: 3–80 chars, no leading or trailing hyphen. */
    private const DPS_ID_PATTERN = '/^[a-z0-9][a-z0-9-]{1,78}[a-z0-9]$/';

    /** The ENUM in 0009_catalog_provenance.sql — a value outside it would be silently truncated. */
    private const SOURCE_TYPES = [
        'primary_vendor_doc', 'gvl', 'google_atp', 'open_cookie_database', 'own_scan', 'community',
    ];

    /**
     * Copied from bin/import-dps ALLOWED_LICENSES.
     *
     * The blocked list from that file is deliberately not represented here:
     * a licence the importer would reject must not be offerable in a form, so
     * it is absent rather than disabled.
     */
    private const LICENSES = ['public-fact', 'Apache-2.0', 'MIT', 'CC0-1.0', 'CC-BY-4.0', 'ODbL-1.0'];

    /** Art. 6(1) GDPR, restricted to what can plausibly carry a third-party embed. */
    private const LEGAL_BASES = ['consent', 'legitimate_interest', 'contract', 'legal_obligation'];

    /** Columns holding JSON. Their content never goes into an audit diff. */
    private const JSON_COLUMNS = [
        'purposes', 'data_collected', 'cookies', 'technologies', 'blocking_pattern', 'gcm_signals',
    ];

    private const REVIEW_STATUSES = ['draft', 'verified', 'stale'];

    /* -------------------------------------------------------------------- list */

    public function index(Request $request): Response
    {
        $status   = (string) $request->input('status', '');
        $source   = (string) $request->input('source', '');
        $category = (string) $request->input('category', '');
        $pattern  = (string) $request->input('pattern', '');
        $active   = (string) $request->input('active', '');
        $query    = trim((string) $request->input('q', ''));

        $where  = ' WHERE 1=1';
        $params = [];

        if (in_array($status, self::REVIEW_STATUSES, true)) {
            $where .= ' AND c.review_status = :st';
            $params['st'] = $status;
        }

        if (in_array($source, self::SOURCE_TYPES, true)) {
            $where .= ' AND c.source_type = :src';
            $params['src'] = $source;
        }

        if (in_array($category, self::categories(), true)) {
            $where .= ' AND c.category = :cat';
            $params['cat'] = $category;
        }

        // The working list: 247 of 372 entries have no pattern, and finding them
        // is the whole reason this filter exists. An empty JSON array counts as
        // "none" — the column stores '[]', not NULL, once anything has touched it.
        if ($pattern === 'with') {
            $where .= " AND COALESCE(c.blocking_pattern, '[]') NOT IN ('[]', '')";
        } elseif ($pattern === 'without') {
            $where .= " AND COALESCE(c.blocking_pattern, '[]') IN ('[]', '')";
        }

        if ($active === '1' || $active === '0') {
            $where .= ' AND c.is_active = :act';
            $params['act'] = (int) $active;
        }

        if ($query !== '') {
            // The cookie JSON is searched too: people look for "_ga" far more
            // often than for the product name of the tool that sets it.
            $where .= ' AND (c.name LIKE :q OR c.provider LIKE :q2 OR c.dps_id LIKE :q3 OR c.cookies LIKE :q4)';
            $params['q'] = $params['q2'] = $params['q3'] = $params['q4'] = '%' . $query . '%';
        }

        $total = (int) Db::value('SELECT COUNT(*) FROM dps_catalog c' . $where, $params);
        $pager = Paginator::fromRequest($request, $total);

        $entries = Db::all(
            'SELECT c.public_id, c.dps_id, c.name, c.provider, c.category, c.review_status,
                    c.is_active, c.cookies, c.blocking_pattern, c.pattern_source_type,
                    c.pattern_source_url, c.source_type, c.source_url, c.source_license,
                    (SELECT COUNT(*) FROM property_dps pd WHERE pd.dps_catalog_id = c.id) AS in_use
               FROM dps_catalog c' . $where . '
              ORDER BY c.review_status, c.category, c.name
              LIMIT :limit OFFSET :offset',
            $params + $pager->bindings()
        );

        return $this->view('admin/catalog/index', [
            'title'      => __('admin.catalog.title'),
            'activeNav'  => 'admin.catalog',
            'entries'    => $entries,
            'pager'      => $pager,
            'status'     => $status,
            'source'     => $source,
            'category'   => $category,
            'pattern'    => $pattern,
            'active'     => $active,
            'query'      => $query,
            'categories' => self::categories(),
            'sources'    => self::SOURCE_TYPES,
            'counts'     => Db::all('SELECT review_status, COUNT(*) n FROM dps_catalog GROUP BY 1'),
            'stale'      => (int) Db::value(
                "SELECT COUNT(*) FROM dps_catalog
                  WHERE source_retrieved_at < DATE_SUB(NOW(), INTERVAL 12 MONTH)
                    AND review_status <> 'stale'"
            ),
        ], 'layouts/admin');
    }

    /* ------------------------------------------------------------------ detail */

    public function show(Request $request): Response
    {
        $entry = $this->entry($request->param('cid'));

        $verifier = null;
        if ($entry['verified_by'] !== null) {
            $verifier = Db::first(
                'SELECT name, email FROM users WHERE id = :id',
                ['id' => $entry['verified_by']]
            );
        }

        return $this->view('admin/catalog/show', [
            'title'         => (string) $entry['name'],
            'activeNav'     => 'admin.catalog',
            'entry'         => $this->publicRow($entry),
            'usage'         => $this->usage((int) $entry['id']),
            'verifier'      => $verifier,
            'purposes'      => self::decodeList($entry['purposes'] ?? null),
            'dataCollected' => self::decodeList($entry['data_collected'] ?? null),
            'technologies'  => self::decodeList($entry['technologies'] ?? null),
            'patterns'      => self::decodeList($entry['blocking_pattern'] ?? null),
            'gcmSignals'    => self::decodeList($entry['gcm_signals'] ?? null),
            'cookies'       => self::decodeCookies($entry['cookies'] ?? null),
            'evidence'      => self::evidenceLevel(
                $entry['review_notes'] === null ? null : (string) $entry['review_notes']
            ),
        ], 'layouts/admin');
    }

    /* -------------------------------------------------------------------- form */

    public function create(Request $request): Response
    {
        return $this->form(null);
    }

    public function edit(Request $request): Response
    {
        $entry = $this->entry($request->param('cid'));

        return $this->form($entry);
    }

    /** @param array<string,mixed>|null $entry */
    private function form(?array $entry): Response
    {
        return $this->view('admin/catalog/form', [
            'title'      => $entry === null
                ? __('admin.catalog.new_title')
                : __('admin.catalog.edit_title', ['name' => (string) $entry['name']]),
            'activeNav'  => 'admin.catalog',
            'entry'      => $entry === null ? null : $this->publicRow($entry),
            'usage'      => $entry === null ? 0 : $this->usage((int) $entry['id']),
            'categories' => self::categories(),
            'legalBases' => self::LEGAL_BASES,
            'sources'    => self::SOURCE_TYPES,
            'licenses'   => self::LICENSES,
            'gcmAll'     => self::gcmSignals(),
        ], 'layouts/admin');
    }

    /* ------------------------------------------------------------------ create */

    public function store(Request $request): Response
    {
        $actor = $this->requireUser();

        $this->validate($request->post, [
            'name'               => 'required|max:160',
            'provider'           => 'max:160',
            'data_retention'     => 'max:160',
            'privacy_policy_url' => 'url|max:500',
            'opt_out_url'        => 'url|max:500',
            'source_url'         => 'required|url|max:512',
            'pattern_source_url' => 'url|max:512',
            // Kernel sends the validation redirect out verbatim, unlike
            // Controller::redirect() — so the mount prefix has to be added here
            // or a subdirectory install lands outside the application.
        ], Url::to('/admin/catalog/new'));

        $dpsId = strtolower((string) $request->input('dps_id', ''));

        if (preg_match(self::DPS_ID_PATTERN, $dpsId) !== 1) {
            return $this->reject($request, '/admin/catalog/new', 'flash.admin.catalog_bad_dps_id');
        }

        if (Db::value('SELECT 1 FROM dps_catalog WHERE dps_id = :d', ['d' => $dpsId]) !== null) {
            return $this->reject($request, '/admin/catalog/new', 'flash.admin.catalog_dps_id_taken', [
                'id' => $dpsId,
            ]);
        }

        $payload = $this->payload($request);

        // On creation all four provenance fields are mandatory, source_url
        // included. There is no legacy excuse for a new entry, and an entry that
        // cannot name its source is worthless the moment someone disputes it.
        $missing = self::missingProvenance($payload, true);
        if ($missing !== []) {
            return $this->reject($request, '/admin/catalog/new', 'flash.admin.catalog_provenance_required', [
                'fields' => implode(', ', $missing),
            ]);
        }

        $now      = Clock::now();
        $publicId = Uuid::v7();

        $payload['pattern_verified_at'] = $payload['pattern_source_url'] === null ? null : $now;

        Db::insert('dps_catalog', $payload + [
            'public_id'     => $publicId,
            'dps_id'        => $dpsId,
            'is_active'     => $request->boolean('is_active') ? 1 : 0,
            // Never born verified: verification means a person compared the entry
            // against the primary source, and typing it in is not that.
            'review_status' => 'draft',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);

        Audit::log(
            'admin.catalog_created',
            $actor->id(),
            null,
            null,
            'dps_catalog',
            $dpsId,
            [
                'name'        => $payload['name'],
                'category'    => $payload['category'],
                'source_type' => $payload['source_type'],
            ],
            $request->ip()
        );

        $this->flash('success', __('flash.admin.catalog_created', ['name' => $payload['name']]));

        return $this->redirect('/admin/catalog/' . $publicId);
    }

    /* ------------------------------------------------------------------ update */

    public function update(Request $request): Response
    {
        $actor = $this->requireUser();
        $entry = $this->entry($request->param('cid'));
        $back  = '/admin/catalog/' . (string) $entry['public_id'] . '/edit';

        $this->validate($request->post, [
            'name'               => 'required|max:160',
            'provider'           => 'max:160',
            'data_retention'     => 'max:160',
            'privacy_policy_url' => 'url|max:500',
            'opt_out_url'        => 'url|max:500',
            'source_url'         => 'url|max:512',
            'pattern_source_url' => 'url|max:512',
            // See store(): $back stays unprefixed for reject(), which routes
            // through Controller::redirect() and adds the prefix itself.
        ], Url::to($back));

        $payload = $this->payload($request);

        // Softer than creation on one point only: bin/verify-catalog lets a
        // 'public-fact' entry through without a source URL, because for a plain
        // matter of fact — a cookie name — there often is no single page to cite.
        // Being stricter here than the release gate would lock the operator out
        // of the very entries that still need fixing.
        $missing = self::missingProvenance($payload, false);
        if ($missing !== []) {
            return $this->reject($request, $back, 'flash.admin.catalog_provenance_required', [
                'fields' => implode(', ', $missing),
            ]);
        }

        // The pattern's proof date belongs to the pattern, not to the row. It is
        // only touched when the patterns or their source actually moved, so a
        // save that changes the cookie table leaves a machine-verified date from
        // bin/import-patterns alone.
        $patternsMoved = $payload['blocking_pattern'] !== (string) ($entry['blocking_pattern'] ?? '[]')
            || $payload['pattern_source_url'] !== ($entry['pattern_source_url'] ?? null);

        if ($patternsMoved) {
            $payload['pattern_verified_at'] = $payload['pattern_source_url'] === null ? null : Clock::now();
        }

        $payload['updated_at'] = Clock::now();

        Db::update('dps_catalog', $payload, ['id' => $entry['id']]);

        Audit::log(
            'admin.catalog_updated',
            $actor->id(),
            null,
            null,
            'dps_catalog',
            (string) $entry['dps_id'],
            self::auditDiff($entry, $payload),
            $request->ip()
        );

        $this->flash('success', __('flash.admin.catalog_updated', ['name' => $payload['name']]));

        return $this->redirect('/admin/catalog/' . (string) $entry['public_id']);
    }

    /* ---------------------------------------------------------------- activate */

    /**
     * Turns an entry on or off.
     *
     * Deliberately not a delete. docs/OPEN_QUESTIONS.md lists 36 duplicates that
     * are meant to be retired this way, and a DELETE would take the audit trail's
     * subject and every property's reference with it — property_dps.dps_catalog_id
     * is ON DELETE SET NULL, so the service would survive as a nameless row.
     */
    public function toggleActive(Request $request): Response
    {
        $actor = $this->requireUser();
        $entry = $this->entry($request->param('cid'));

        $activate = (int) $entry['is_active'] !== 1;
        $usage    = $this->usage((int) $entry['id']);

        Db::update('dps_catalog', [
            'is_active'  => $activate ? 1 : 0,
            'updated_at' => Clock::now(),
        ], ['id' => $entry['id']]);

        Audit::log(
            'admin.catalog_active_changed',
            $actor->id(),
            null,
            null,
            'dps_catalog',
            (string) $entry['dps_id'],
            ['is_active' => $activate, 'properties_using' => $usage],
            $request->ip()
        );

        if ($activate) {
            $this->flash('success', __('flash.admin.catalog_activated', ['name' => (string) $entry['name']]));
        } elseif ($usage > 0) {
            // Not blocked, only stated. The operator may well want to retire a
            // duplicate that is still in use — they just have to know the number.
            $this->flash('warning', __('flash.admin.catalog_deactivated_in_use', [
                'name'  => (string) $entry['name'],
                'count' => $usage,
            ]));
        } else {
            $this->flash('success', __('flash.admin.catalog_deactivated', ['name' => (string) $entry['name']]));
        }

        return $this->redirect('/admin/catalog/' . (string) $entry['public_id']);
    }

    /* ------------------------------------------------------------------- input */

    /**
     * Everything the two forms write, already typed and clamped.
     *
     * @return array<string,mixed>
     */
    private function payload(Request $request): array
    {
        return [
            'name'                => self::plain((string) $request->input('name', ''), 160),
            'provider'            => self::plain((string) $request->input('provider', ''), 160),
            'provider_country'    => self::country((string) $request->input('provider_country', '')),
            'category'            => self::choose((string) $request->input('category', ''), self::categories(), 'functional'),
            'purposes'            => self::encode(self::lines((string) $request->input('purposes', ''))),
            'legal_basis'         => self::choose((string) $request->input('legal_basis', ''), self::LEGAL_BASES, 'consent'),
            'data_collected'      => self::encode(self::lines((string) $request->input('data_collected', ''))),
            'data_retention'      => self::plain((string) $request->input('data_retention', ''), 160),
            'privacy_policy_url'  => self::url((string) $request->input('privacy_policy_url', '')) ?? '',
            'opt_out_url'         => self::url((string) $request->input('opt_out_url', '')) ?? '',
            'cookies'             => self::encode(self::cookies($request)),
            'technologies'        => self::encode(self::lines((string) $request->input('technologies', ''))),
            'blocking_pattern'    => self::encode(self::lines((string) $request->input('patterns', ''))),
            'gcm_signals'         => self::encode(self::signals($request)),
            'tcf_vendor_id'       => self::unsigned((string) $request->input('tcf_vendor_id', '')),
            'google_ac_id'        => self::unsigned((string) $request->input('google_ac_id', '')),
            'third_country'       => $request->boolean('third_country') ? 1 : 0,
            'source_type'         => self::choose((string) $request->input('source_type', ''), self::SOURCE_TYPES, null),
            'source_url'          => self::url((string) $request->input('source_url', '')),
            'source_license'      => self::choose((string) $request->input('source_license', ''), self::LICENSES, null),
            'source_retrieved_at' => self::day((string) $request->input('source_retrieved_at', '')),
            'pattern_source_type' => self::choose((string) $request->input('pattern_source_type', ''), self::SOURCE_TYPES, null),
            'pattern_source_url'  => self::url((string) $request->input('pattern_source_url', '')),
            'review_notes'        => self::block((string) $request->input('review_notes', '')),
        ];
    }

    /**
     * Cookie rows arrive as parallel arrays from the repeatable fieldset, the
     * same shape ServiceController uses for custom services. A row without a
     * name is an empty row the browser sent along and is dropped.
     *
     * @return list<array<string,string>>
     */
    private static function cookies(Request $request): array
    {
        $names        = $request->inputArray('cookie_name');
        $hosts        = $request->inputArray('cookie_host');
        $types        = $request->inputArray('cookie_type');
        $durations    = $request->inputArray('cookie_duration');
        $purposes     = $request->inputArray('cookie_purpose');

        $out = [];

        foreach ($names as $i => $name) {
            $name = self::plain($name, 255);

            if ($name === '') {
                continue;
            }

            $out[] = [
                'name'     => $name,
                'host'     => self::plain($hosts[$i] ?? '', 255),
                'type'     => self::plain($types[$i] ?? '', 40),
                'duration' => self::plain($durations[$i] ?? '', 80),
                'purpose'  => self::plain($purposes[$i] ?? '', 500),
            ];
        }

        return $out;
    }

    /** @return list<string> */
    private static function signals(Request $request): array
    {
        $allowed = self::gcmSignals();
        $out     = [];

        foreach ($request->inputArray('gcm_signals') as $signal) {
            if (in_array($signal, $allowed, true) && !in_array($signal, $out, true)) {
                $out[] = $signal;
            }
        }

        return $out;
    }

    /**
     * One value per line, blanks and duplicates removed.
     *
     * @return list<string>
     */
    private static function lines(string $raw): array
    {
        $out = [];

        foreach (preg_split('/\R/', $raw) ?: [] as $line) {
            $line = self::plain($line, 512);

            if ($line !== '' && !in_array($line, $out, true)) {
                $out[] = $line;
            }
        }

        return $out;
    }

    /**
     * Trimmed single-line text.
     *
     * Deliberately not Sanitizer::text(): that runs strip_tags, and the
     * catalogue's own placeholders look like tags. A cookie host of
     * ".<domain>" or a name of "_ga_<container-id>" would come back as "." and
     * "_ga_" — silent data loss on every save, in exactly the field an operator
     * is least likely to re-read. Angle brackets here are data, and every path
     * out of this column escapes: the views through $this->e(), the delivered
     * configuration through json_encode.
     */
    private static function plain(string $value, int $max = 512): string
    {
        $clean = preg_replace('/[\x00-\x1F\x7F]+/', ' ', $value);

        return trim(mb_substr(is_string($clean) ? $clean : $value, 0, $max));
    }

    /** Multi-line plain text: line breaks survive, other control characters do not. */
    private static function block(string $value, int $max = 8000): string
    {
        $clean = preg_replace(
            '/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]+/',
            '',
            str_replace("\r\n", "\n", $value)
        );

        return trim(mb_substr(is_string($clean) ? $clean : $value, 0, $max));
    }

    /** @param array<int|string,mixed> $value */
    private static function encode(array $value): string
    {
        return (string) json_encode($value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }

    /**
     * @param  list<string> $allowed
     * @return string|null
     */
    private static function choose(string $value, array $allowed, ?string $fallback): ?string
    {
        return in_array($value, $allowed, true) ? $value : $fallback;
    }

    /**
     * ISO 3166-1 alpha-2, or nothing.
     *
     * Checked at full length before anything is cut: truncating "AUT" to two
     * characters would file an Austrian provider under Australia, and a wrong
     * country of establishment is exactly the kind of quiet error that only
     * surfaces in a data-transfer assessment.
     */
    private static function country(string $value): ?string
    {
        $value = strtoupper(self::plain($value, 16));

        return preg_match('/^[A-Z]{2}$/', $value) === 1 ? $value : null;
    }

    private static function url(string $value): ?string
    {
        $value = trim($value);

        if ($value === '' || mb_strlen($value) > 512) {
            return null;
        }

        if (filter_var($value, FILTER_VALIDATE_URL) === false || preg_match('#^https?://#i', $value) !== 1) {
            return null;
        }

        return $value;
    }

    private static function unsigned(string $value): ?int
    {
        return ctype_digit($value) && $value !== '' ? (int) $value : null;
    }

    /**
     * A date input, stored at midnight UTC.
     *
     * checkdate rather than DateTime::createFromFormat alone: the latter happily
     * rolls 2026-02-31 over into March, and a retrieval date nobody typed is
     * worse than none. A date in the future is not a retrieval date either.
     */
    private static function day(string $value): ?string
    {
        if (preg_match('/^(\d{4})-(\d{2})-(\d{2})$/', substr(trim($value), 0, 10), $m) !== 1) {
            return null;
        }

        if (!checkdate((int) $m[2], (int) $m[3], (int) $m[1])) {
            return null;
        }

        $stamp = $m[0] . ' 00:00:00';

        return $stamp > Clock::now() ? null : $stamp;
    }

    /* ------------------------------------------------------------- provenance */

    /**
     * Which mandatory provenance fields are still empty.
     *
     * @param  array<string,mixed> $payload
     * @return list<string>        human-readable field labels
     */
    private static function missingProvenance(array $payload, bool $requireUrl): array
    {
        $missing = [];

        if ($payload['source_type'] === null) {
            $missing[] = __('admin.catalog.field_source_type');
        }

        if ($payload['source_license'] === null) {
            $missing[] = __('admin.catalog.field_source_license');
        }

        if ($payload['source_retrieved_at'] === null) {
            $missing[] = __('admin.catalog.field_source_retrieved_at');
        }

        if ($payload['source_url'] === null && ($requireUrl || $payload['source_license'] !== 'public-fact')) {
            $missing[] = __('admin.catalog.field_source_url');
        }

        return $missing;
    }

    /**
     * Evidence level for the blocking pattern.
     *
     * bin/import-patterns writes one line of the form "… Belegstufe Ressource."
     * or "… Belegstufe Host, …" into review_notes. There is no column for it, so
     * the note is the only place the distinction exists — and the distinction
     * matters: a host that answers is weaker proof than the script itself.
     */
    private static function evidenceLevel(?string $notes): ?string
    {
        if ($notes === null || $notes === '') {
            return null;
        }

        if (preg_match('/Belegstufe\s+(Ressource|Host)/u', $notes, $m) !== 1) {
            return null;
        }

        return $m[1] === 'Ressource' ? 'endpoint' : 'host';
    }

    /* -------------------------------------------------------------------- data */

    /**
     * @return array<string,mixed>
     * @throws HttpException
     */
    private function entry(string $publicId): array
    {
        $row = Db::first(
            'SELECT ' . self::ENTRY_COLUMNS . ' FROM dps_catalog WHERE public_id = :p',
            ['p' => $publicId]
        );

        if ($row === null) {
            throw new HttpException(404);
        }

        return $row;
    }

    /**
     * The row without its internal key.
     *
     * A template cannot put an auto-increment id into a URL if the id never
     * reaches the template. Counting customers by counting up /admin/catalog/1,
     * 2, 3 stops being possible at the source rather than by review.
     *
     * @param  array<string,mixed> $row
     * @return array<string,mixed>
     */
    private function publicRow(array $row): array
    {
        unset($row['id'], $row['verified_by']);

        return $row;
    }

    private function usage(int $catalogId): int
    {
        return (int) Db::value(
            'SELECT COUNT(DISTINCT pd.property_id) FROM property_dps pd WHERE pd.dps_catalog_id = :cid',
            ['cid' => $catalogId]
        );
    }

    /**
     * @param  array<string,mixed> $before
     * @param  array<string,mixed> $after
     * @return array<string,mixed>
     */
    private static function auditDiff(array $before, array $after): array
    {
        $diff = Audit::diff($before, $after);

        // A cookie table or a pattern list serialised into the diff turns the
        // audit row into a wall of JSON nobody reads. That it changed is the
        // question the trail has to answer; what it now says is one click away.
        foreach (self::JSON_COLUMNS as $column) {
            if (array_key_exists($column, $diff)) {
                $diff[$column] = 'geändert';
            }
        }

        unset($diff['updated_at']);

        return $diff;
    }

    /**
     * @param  mixed $json
     * @return list<string>
     */
    private static function decodeList(mixed $json): array
    {
        $decoded = is_string($json) ? json_decode($json, true) : null;

        if (!is_array($decoded)) {
            return [];
        }

        $out = [];
        foreach ($decoded as $item) {
            if (is_scalar($item)) {
                $out[] = (string) $item;
            }
        }

        return $out;
    }

    /**
     * @param  mixed $json
     * @return list<array<string,string>>
     */
    private static function decodeCookies(mixed $json): array
    {
        $decoded = is_string($json) ? json_decode($json, true) : null;

        if (!is_array($decoded)) {
            return [];
        }

        $out = [];

        foreach ($decoded as $cookie) {
            if (!is_array($cookie)) {
                continue;
            }

            $out[] = [
                'name'     => is_scalar($cookie['name'] ?? null) ? (string) $cookie['name'] : '',
                'host'     => is_scalar($cookie['host'] ?? null) ? (string) $cookie['host'] : '',
                'type'     => is_scalar($cookie['type'] ?? null) ? (string) $cookie['type'] : '',
                'duration' => is_scalar($cookie['duration'] ?? null) ? (string) $cookie['duration'] : '',
                // The seed writes 'purpose', the column comment in 0004_dps.sql
                // says 'description'. Both exist in the data, so both are read.
                'purpose'  => is_scalar($cookie['purpose'] ?? null)
                    ? (string) $cookie['purpose']
                    : (is_scalar($cookie['description'] ?? null) ? (string) $cookie['description'] : ''),
            ];
        }

        return $out;
    }

    /** @return list<string> */
    private static function categories(): array
    {
        return array_map(
            static fn (array $c): string => (string) $c['key'],
            Defaults::categories()
        );
    }

    /** @return list<string> */
    private static function gcmSignals(): array
    {
        return array_keys(Defaults::gcmMapping());
    }

    /**
     * Sends the operator back to the form with their input intact.
     *
     * @param array<string,string|int> $replace
     */
    private function reject(Request $request, string $to, string $key, array $replace = []): Response
    {
        Session::instance()->flashInput($request->post);
        $this->flash('error', __($key, $replace));

        return $this->redirect($to);
    }
}
