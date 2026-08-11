<?php

declare(strict_types=1);

namespace Consented\Api;

use Consented\Core\Clock;
use Consented\Core\Db;
use Consented\Core\Exception\HttpException;
use Consented\Core\Hash;
use Consented\Core\RateLimiter;
use Consented\Core\Request;
use Consented\Core\Settings;
use Consented\Core\Response;
use Consented\Core\UserAgent;
use Consented\Core\Uuid;
use Consented\Property\Consents;
use Consented\Property\Property;

final class ConsentApiController
{
    private const MAX_BODY_BYTES = 32768;

    public function health(Request $request): Response
    {
        try {
            Db::value('SELECT 1');
            $db = true;
        } catch (\Throwable) {
            $db = false;
        }

        return Response::json(['ok' => $db, 'time' => Clock::now()], $db ? 200 : 503)
            ->withHeader('Cache-Control', 'no-store');
    }

    /**
     * CORS preflight for the ingest endpoint.
     *
     * Allows any origin: a preflight carries no payload, and refusing here
     * would only produce a console error on the customer's site. The actual
     * decision about whether to record anything happens in store().
     */
    public function preflight(Request $request): Response
    {
        $origin = $request->origin();

        return Response::noContent()
            ->withHeader('Access-Control-Allow-Origin', $origin !== null && $origin !== '' ? $origin : '*')
            ->withHeader('Access-Control-Allow-Methods', 'POST, GET, DELETE, OPTIONS')
            ->withHeader('Access-Control-Allow-Headers', 'Content-Type')
            ->withHeader('Access-Control-Max-Age', '86400')
            ->withHeader('Vary', 'Origin')
            ->withHeader('Cache-Control', 'no-store');
    }

    /**
     * Ingests one consent decision.
     *
     * Called by sendBeacon from the visitor's browser on the customer's site.
     * Everything in the payload is attacker-controlled, so property, domain
     * and every field are validated against the published configuration
     * rather than trusted.
     */
    public function store(Request $request): Response
    {
        if (strlen($request->rawBody) > self::MAX_BODY_BYTES) {
            throw new HttpException(413);
        }

        $payload = $request->jsonBody();

        $property = Property::findByPublicId((string) ($payload['propertyId'] ?? ''));

        if ($property === null || !$property->isPublished()) {
            // 204, not 404: this response goes to a visitor's browser on
            // someone else's website. It must never surface as an error there,
            // and it must not confirm whether an ID exists.
            return $this->accepted($request, $property);
        }

        $origin = $request->origin();
        if ($origin !== null && $origin !== '' && !$this->originAllowed($origin, $property)) {
            return $this->accepted($request, null);
        }

        // Per property and per IP: one browser cannot flood the log, and a
        // botnet cannot inflate one property's numbers cheaply either.
        //
        // Die Obergrenze ist einstellbar, weil sie vom Verkehr der Website
        // abhängt und nicht von uns: eine Seite mit vielen Sprachwechseln oder
        // einem Single-Page-Frontend erzeugt legitim mehr Ereignisse pro
        // Besucher als eine klassische Seite. Die Limits für Anmeldung,
        // Registrierung und Passwort-Reset bleiben dagegen fest — dort kann ein
        // Betreiber nur etwas falsch machen.
        $limitKey = 'consent:' . $property->id() . ':' . Hash::ip($request->ip());
        if (RateLimiter::tooManyAttempts($limitKey, Settings::consentRateLimit())) {
            return $this->accepted($request, $property);
        }
        RateLimiter::hit($limitKey, 3600);

        $consentId = (string) ($payload['consentId'] ?? '');
        if (!Uuid::isValid($consentId)) {
            $consentId = Uuid::v7();
        }

        $action = (string) ($payload['action'] ?? '');
        if (!in_array($action, ['accept_all', 'reject_all', 'save_selection', 'withdraw', 'auto_expire'], true)) {
            $action = 'save_selection';
        }

        $decisions = $this->sanitiseDecisions($payload['decisions'] ?? [], $property);

        $lifetimeDays = (int) $property->setting('consentLifetimeDays', 365);

        $domain = null;
        $urlHash = null;
        if (isset($payload['url']) && is_string($payload['url'])) {
            $host = parse_url($payload['url'], PHP_URL_HOST);
            if (is_string($host)) {
                $domain = strtolower(substr($host, 0, 253));
            }
            // The page URL is only ever stored hashed: a path can carry an
            // order number or a search term, and neither belongs in a log we
            // keep for three years.
            $urlHash = hash('sha256', $payload['url']);
        }

        Consents::record([
            'consent_id'          => $consentId,
            'property_id'         => $property->id(),
            'config_version'      => (int) ($payload['configVersion'] ?? $property->configVersion()),
            'tc_string'           => null,
            'ac_string'           => null,
            'gpp_string'          => null,
            'decisions'           => (string) json_encode($decisions, JSON_UNESCAPED_UNICODE),
            'action'              => $action,
            'ui_variant'          => substr((string) ($payload['uiVariant'] ?? 'default'), 0, 40),
            'language'            => substr((string) ($payload['language'] ?? ''), 0, 10),
            'country_code'        => $this->countryFromHeaders($request),
            'region_code'         => null,
            'gpc_signal'          => !empty($payload['gpc']) ? 1 : 0,
            'ip_hash'             => Hash::ip($request->ip()),
            'user_agent_family'   => UserAgent::family($request->userAgent()),
            'page_url_hash'       => $urlHash,
            'domain'              => $domain,
            'is_mobile'           => !empty($payload['isMobile']) ? 1 : 0,
            'time_to_decision_ms' => $this->positiveInt($payload['timeToDecisionMs'] ?? null),
            'expires_at'          => Clock::in($lifetimeDays * 86400),
        ]);

        return $this->accepted($request, $property, ['consentId' => $consentId]);
    }

    /**
     * Data-subject endpoint: GET returns the record, DELETE erases it.
     *
     * Authenticated by knowing the consent ID, which is a 128-bit random value
     * shown only to the person who gave the consent. There is no account to
     * log into — the visitor of our customer's site is not our user, but
     * Art. 15 and 17 still apply to them.
     */
    public function handle(Request $request): Response
    {
        $consentId = $request->param('consentId');

        if (!Uuid::isValid($consentId)) {
            throw new HttpException(404);
        }

        if ($request->method === 'OPTIONS') {
            return $this->accepted($request, null);
        }

        $row = Db::first('SELECT * FROM consents WHERE consent_id = :cid', ['cid' => $consentId]);

        if ($row === null) {
            throw new HttpException(404, 'Zu dieser Einwilligungs-ID gibt es keinen Eintrag.');
        }

        if ($request->method === 'DELETE') {
            Db::transaction(static function () use ($consentId): void {
                Db::run('DELETE FROM consent_events WHERE consent_id = :cid', ['cid' => $consentId]);
                Db::run('DELETE FROM consents WHERE consent_id = :cid', ['cid' => $consentId]);
            });

            return Response::json(['deleted' => true])->withHeader('Cache-Control', 'no-store');
        }

        $history = Db::all(
            'SELECT action, config_version, decisions, created_at
               FROM consent_events WHERE consent_id = :cid ORDER BY created_at',
            ['cid' => $consentId]
        );

        return Response::json([
            'consentId'     => $consentId,
            'action'        => $row['action'],
            'decisions'     => json_decode((string) $row['decisions'], true),
            'language'      => $row['language'],
            'domain'        => $row['domain'],
            'configVersion' => (int) $row['config_version'],
            'createdAt'     => $row['created_at'],
            'updatedAt'     => $row['updated_at'],
            'expiresAt'     => $row['expires_at'],
            'history'       => array_map(static fn (array $e): array => [
                'action'        => $e['action'],
                'configVersion' => (int) $e['config_version'],
                'decisions'     => json_decode((string) $e['decisions'], true),
                'at'            => $e['created_at'],
            ], $history),
            // Stated explicitly so the record itself shows what we hold.
            'storedPersonalData' => 'Es werden keine Klartext-IP, kein vollständiger User-Agent '
                . 'und keine seitenübergreifende Kennung gespeichert.',
        ])->withHeader('Cache-Control', 'no-store');
    }

    /**
     * Validates the submitted decisions against the published configuration.
     *
     * Keys that are not in the config are dropped, and required categories and
     * essential services are forced to true no matter what was sent — the log
     * has to reflect what the configuration actually permits.
     *
     * @return array{categories:array<string,bool>,services:array<string,bool>}
     */
    private function sanitiseDecisions(mixed $input, Property $property): array
    {
        $config = $property->publishedConfig($property->configVersion()) ?? [];

        $categories = [];
        $services   = [];

        $submittedCategories = is_array($input) && isset($input['categories']) && is_array($input['categories'])
            ? $input['categories'] : [];
        $submittedServices = is_array($input) && isset($input['services']) && is_array($input['services'])
            ? $input['services'] : [];

        foreach ($config['categories'] ?? [] as $category) {
            $key = (string) ($category['key'] ?? '');
            if ($key === '') {
                continue;
            }

            $categories[$key] = !empty($category['required'])
                ? true
                : !empty($submittedCategories[$key]);
        }

        foreach ($config['services'] ?? [] as $service) {
            $id = (string) ($service['id'] ?? '');
            if ($id === '') {
                continue;
            }

            $services[$id] = !empty($service['essential'])
                ? true
                : !empty($submittedServices[$id]);
        }

        return ['categories' => $categories, 'services' => $services];
    }

    private function positiveInt(mixed $value): ?int
    {
        if (!is_numeric($value)) {
            return null;
        }

        $int = (int) $value;

        // Cap at an hour: anything larger is a tab left open overnight and
        // would skew the average time-to-decision beyond usefulness.
        return ($int > 0 && $int < 3600000) ? $int : null;
    }

    /**
     * Country from a CDN header, if the deployment sits behind one.
     *
     * Never derived from the IP here: that would mean handling the address for
     * a purpose the visitor did not consent to, and we do not store it anyway.
     */
    private function countryFromHeaders(Request $request): ?string
    {
        foreach (['cf-ipcountry', 'x-geo-country', 'x-country-code'] as $header) {
            $value = $request->header($header);
            if (is_string($value) && preg_match('/^[A-Za-z]{2}$/', $value) === 1) {
                return strtoupper($value);
            }
        }

        return null;
    }

    /**
     * @param array<string,mixed> $data
     */
    private function accepted(Request $request, ?Property $property, array $data = []): Response
    {
        $response = $data === []
            ? Response::noContent()
            : Response::json($data, 200);

        $origin = $request->origin();

        if ($origin !== null && $origin !== '' && $property !== null && $this->originAllowed($origin, $property)) {
            $response = $response
                ->withHeader('Access-Control-Allow-Origin', $origin)
                ->withHeader('Access-Control-Allow-Methods', 'POST, GET, DELETE, OPTIONS')
                ->withHeader('Access-Control-Allow-Headers', 'Content-Type')
                ->withHeader('Access-Control-Max-Age', '86400')
                ->withHeader('Vary', 'Origin');
        }

        return $response->withHeader('Cache-Control', 'no-store');
    }

    private function originAllowed(string $origin, Property $property): bool
    {
        $host = parse_url($origin, PHP_URL_HOST);

        if (!is_string($host)) {
            return false;
        }

        $host = strtolower($host);

        // Before any domain is verified the property is still being set up;
        // refusing here would make the very first test impossible.
        if (!$property->hasVerifiedDomain()) {
            return true;
        }

        foreach ($property->domains() as $row) {
            if ($row['verified_at'] === null) {
                continue;
            }

            $domain = strtolower((string) $row['domain']);

            if ($host === $domain) {
                return true;
            }

            if ((int) $row['include_subdomains'] === 1 && str_ends_with($host, '.' . $domain)) {
                return true;
            }
        }

        return false;
    }
}
