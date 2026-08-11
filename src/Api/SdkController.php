<?php

declare(strict_types=1);

namespace Consented\Api;

use Consented\Auth\Permission;
use Consented\Core\Exception\HttpException;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\Session;
use Consented\Property\ConfigBuilder;
use Consented\Property\Property;

/**
 * Delivery of the browser runtime and property configuration.
 *
 * Everything here is public, unauthenticated and served to third-party
 * websites, so none of it touches the session or trusts a request header for
 * anything but caching.
 */
final class SdkController
{
    /**
     * The runtime with the property's configuration inlined.
     *
     * One request, not two. Inlining costs shared caching of cmp.js across
     * properties, and buys the thing that actually matters: a returning
     * visitor's blocked scripts are released without waiting for a second
     * round trip, which is where a banner visibly delays a page.
     */
    public function runtime(Request $request): Response
    {
        $property = Property::findByPublicId($request->param('publicId'));

        if ($property === null) {
            return $this->emptyRuntime('Unbekannte Property-ID.');
        }

        // A suspended property delivers no banner and releases no scripts.
        //
        // Read from `suspended_at`, not from `status`. status belongs to the
        // customer's own state machine and Property::publish() sets it back to
        // 'live' unconditionally — a suspension expressed through status would
        // be undone by the next click on "publish", silently.
        //
        // The consent endpoint deliberately keeps working while this is set:
        // a visitor whose decision is already stored must be able to withdraw
        // it, and suspending a customer's account is not a reason to take away
        // someone else's right to object. The immutable /config/{version}.json
        // stays reachable for the same reason — it is the record of what a
        // visitor was shown, not an active delivery.
        if ($property->isSuspended()) {
            return $this->emptyRuntime(
                'Diese Property ist stillgelegt. Es wird kein Banner ausgeliefert und es werden keine '
                . 'blockierten Skripte freigegeben. Bereits erteilte Einwilligungen bleiben gespeichert '
                . 'und lassen sich weiterhin widerrufen. Bitte den Betreiber dieser consented.eu-Instanz '
                . 'kontaktieren.'
            );
        }

        if (!$property->isPublished()) {
            return $this->emptyRuntime(
                'Diese Property wurde noch nicht veröffentlicht. Im Dashboard auf „Veröffentlichen" klicken.'
            );
        }

        if (!$this->allowedReferer($request, $property)) {
            return $this->emptyRuntime(
                'Diese Domain ist für diese consented.eu-Property nicht freigegeben. '
                . 'Domain im Dashboard hinzufügen und verifizieren.'
            );
        }

        $config = $property->publishedConfig($property->configVersion());

        if ($config === null) {
            return $this->emptyRuntime('Konfiguration nicht gefunden.');
        }

        $runtime = @file_get_contents(CONSENTED_ROOT . '/public/sdk/dist/cmp.js');

        if ($runtime === false) {
            throw new HttpException(500, 'Runtime bundle missing.');
        }

        $body = 'window.__CONSENTED_CONFIG__=' . json_encode(
            $config,
            JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG
        ) . ";\n" . $runtime;

        $etag = '"' . substr(hash('sha256', $body), 0, 32) . '"';

        if ($request->header('if-none-match') === $etag) {
            return Response::text('', 304)
                ->withHeader('ETag', $etag)
                ->withHeader('Cache-Control', 'public, max-age=300, stale-while-revalidate=3600');
        }

        return Response::javascript($body)
            ->withHeader('ETag', $etag)
            // Short max-age because this URL is stable while its content
            // changes on publish. The immutable copy lives at the versioned
            // config URL for anyone who wants to cache forever.
            ->withHeader('Cache-Control', 'public, max-age=300, stale-while-revalidate=3600')
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('X-Content-Type-Options', 'nosniff');
    }

    /**
     * Versioned, immutable configuration JSON.
     *
     * Cross-origin, so CORS applies and the Origin header is trustworthy —
     * this is where domain enforcement is actually reliable.
     */
    public function config(Request $request): Response
    {
        $property = Property::findByPublicId($request->param('publicId'));

        if ($property === null) {
            throw new HttpException(404);
        }

        $version = (int) $request->param('version');
        $config  = $property->publishedConfig($version);

        if ($config === null) {
            throw new HttpException(404);
        }

        $response = Response::json($config)
            ->withHeader('Cache-Control', 'public, max-age=31536000, immutable')
            ->withHeader('X-Content-Type-Options', 'nosniff');

        $origin = $request->origin();

        if ($origin !== null && $origin !== '') {
            if (!$this->originAllowed($origin, $property)) {
                throw new HttpException(403, 'Origin not allowed for this property.');
            }

            $response = $response
                ->withHeader('Access-Control-Allow-Origin', $origin)
                ->withHeader('Vary', 'Origin');
        }

        return $response;
    }

    /**
     * Unpublished configuration for the dashboard's design preview.
     *
     * The only authenticated endpoint in this controller: it exposes the
     * working draft, which nobody outside the property may see.
     */
    public function preview(Request $request): Response
    {
        $userId = Session::instance()->userId();

        if ($userId === null) {
            throw new HttpException(401);
        }

        $property = Property::findByPublicId($request->param('publicId'));

        if ($property === null || !Permission::allows($userId, $property->id(), Permission::VIEW_PROPERTY)) {
            throw new HttpException(404);
        }

        return Response::json(ConfigBuilder::build($property, $property->configVersion()))
            ->withHeader('Cache-Control', 'no-store');
    }

    /**
     * A runtime that does nothing but explain itself in the console.
     *
     * Returning 404 here would leave the site owner with a silent failure and
     * no idea why the banner never appeared.
     */
    private function emptyRuntime(string $reason): Response
    {
        $message = json_encode('[consented.eu] ' . $reason, JSON_UNESCAPED_UNICODE);

        return Response::javascript("(function(){try{console.warn({$message});}catch(e){}})();")
            ->withHeader('Cache-Control', 'public, max-age=60')
            ->withHeader('Access-Control-Allow-Origin', '*');
    }

    /**
     * Referer check for the script tag.
     *
     * A <script src> sends no Origin, so Referer is all there is. It is
     * client-controlled and therefore not a security boundary — it stops
     * casual copying of a snippet onto another site, nothing more. The real
     * boundary is on the consent endpoint, where Origin is reliable.
     *
     * Fails open when the property has no verified domain yet, so a new
     * property can be tested before DNS is set up.
     */
    private function allowedReferer(Request $request, Property $property): bool
    {
        if (!$property->hasVerifiedDomain()) {
            return true;
        }

        $referer = $request->header('referer');

        if ($referer === null || $referer === '') {
            // Referrer-Policy: no-referrer is common and legitimate.
            return true;
        }

        $host = parse_url($referer, PHP_URL_HOST);

        return is_string($host) && $this->hostMatchesProperty($host, $property);
    }

    private function originAllowed(string $origin, Property $property): bool
    {
        if (!$property->hasVerifiedDomain()) {
            return true;
        }

        $host = parse_url($origin, PHP_URL_HOST);

        return is_string($host) && $this->hostMatchesProperty($host, $property);
    }

    private function hostMatchesProperty(string $host, Property $property): bool
    {
        $host = strtolower($host);

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
