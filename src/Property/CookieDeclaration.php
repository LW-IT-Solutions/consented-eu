<?php

declare(strict_types=1);

namespace Consented\Property;

use Consented\Core\Sanitizer;

/**
 * The cookie declaration of one property, resolved and ready to render.
 *
 * Built from the published snapshot and from nothing else. A declaration is a
 * statement about what a visitor's browser actually meets, so it has to describe
 * what ships — not what somebody is currently editing in the dashboard. A draft
 * that names a service the site does not load yet would be as wrong as one that
 * omits a service the site does load.
 *
 * Everything here is public: the same snapshot is already downloadable without
 * authentication at /p/{id}/config/{version}.json, because the browser of every
 * visitor needs it. This class adds no data, it only makes it readable.
 */
final class CookieDeclaration
{
    /**
     * @return array<string,mixed>|null  null when the property has nothing published
     */
    public static function build(Property $property, ?string $requested = null): ?array
    {
        $version = $property->configVersion();
        $config  = $property->publishedConfig($version);

        if ($config === null) {
            return null;
        }

        $languages = self::languages($config);
        $language  = in_array($requested, $languages, true)
            ? (string) $requested
            : (string) ($config['defaultLanguage'] ?? 'de');

        $texts    = self::texts($config, $language);
        $domain   = $property->primaryDomain();
        $services = is_array($config['services'] ?? null) ? $config['services'] : [];

        $groups      = self::groups($config, $services, $texts, $domain, $language);
        $cookieCount = 0;

        foreach ($groups as $group) {
            foreach ($group['services'] as $service) {
                $cookieCount += count($service['cookies']);
            }
        }

        return [
            'propertyName' => $property->name(),
            'domain'       => $domain,
            'language'     => $language,
            'languages'    => $languages,
            'version'      => $version,
            'publishedAt'  => $property->versionPublishedAt($version),
            'texts'        => $texts,
            'groups'       => $groups,
            'serviceCount' => count($services),
            'cookieCount'  => $cookieCount,
        ];
    }

    /**
     * @param  array<string,mixed> $config
     * @return list<string>
     */
    private static function languages(array $config): array
    {
        $languages = $config['languages'] ?? null;

        if (is_array($languages) && $languages !== []) {
            return array_values(array_map('strval', $languages));
        }

        return [(string) ($config['defaultLanguage'] ?? 'de')];
    }

    /**
     * Frozen texts on top, shipped defaults underneath.
     *
     * The snapshot carries the texts as they were merged when the property was
     * published, which means a key added to the product afterwards is simply
     * absent — and an empty heading in a legal document is worse than a German
     * default inside an English declaration. So the defaults fill the gaps and
     * the frozen values win wherever they exist.
     *
     * The defaults have to take the same path the snapshot's texts already took:
     * placeholders first, sanitiser second. Skipping it would leave a literal
     * `{{company}}` in a text that is on its way to a customer's legal page, and
     * skipping the sanitiser would treat our own defaults as more trustworthy
     * than an operator's — a distinction that has a habit of being wrong later.
     *
     * @param  array<string,mixed> $config
     * @return array<string,string>
     */
    private static function texts(array $config, string $language): array
    {
        $placeholders = [];

        foreach ((array) ($config['placeholders'] ?? []) as $name => $value) {
            $placeholders[(string) $name] = (string) $value;
        }

        $defaults = [];

        foreach (Defaults::textsFor($language) as $key => $value) {
            $defaults[$key] = Sanitizer::html(ConfigBuilder::interpolate($value, $placeholders));
        }

        $frozen = $config['texts'][$language] ?? [];

        return array_merge($defaults, is_array($frozen) ? $frozen : []);
    }

    /**
     * Services grouped by category, in the order the property defined.
     *
     * Two rules that differ from the banner on purpose:
     *
     *  - A category with no services is skipped, exactly as in the dialog. An
     *    empty heading claims nothing and helps nobody.
     *  - A service whose category no longer exists is NOT dropped. `category_key`
     *    is a column on property_dps, not a foreign key into dps_categories, so a
     *    deleted category leaves its services behind. They still load on the
     *    site, and a declaration that silently omits a loaded service is the one
     *    failure this page must not have. They keep their own key as a heading,
     *    the same fallback the dialog uses.
     *
     * @param  array<string,mixed>       $config
     * @param  list<array<string,mixed>> $services
     * @param  array<string,string>      $texts
     * @return list<array<string,mixed>>
     */
    private static function groups(array $config, array $services, array $texts, ?string $domain, string $locale): array
    {
        $order    = [];
        $required = [];

        foreach ((array) ($config['categories'] ?? []) as $category) {
            if (!is_array($category) || !isset($category['key'])) {
                continue;
            }

            $key            = (string) $category['key'];
            $order[]        = $key;
            $required[$key] = (bool) ($category['required'] ?? false);
        }

        // Any category a service claims but the property no longer lists.
        foreach ($services as $service) {
            $key = (string) ($service['category'] ?? '');

            if ($key !== '' && !in_array($key, $order, true)) {
                $order[] = $key;
            }
        }

        $groups = [];

        foreach ($order as $key) {
            $members = [];

            foreach ($services as $service) {
                if ((string) ($service['category'] ?? '') === $key) {
                    $members[] = self::service($service, $texts, $domain, $locale);
                }
            }

            if ($members === []) {
                continue;
            }

            $groups[] = [
                'key'         => $key,
                'name'        => $texts['category_' . $key . '_name'] ?? $key,
                'description' => $texts['category_' . $key . '_description'] ?? '',
                'required'    => $required[$key] ?? false,
                'services'    => $members,
            ];
        }

        return $groups;
    }

    /**
     * @param  array<string,mixed>  $service
     * @param  array<string,string> $texts
     * @return array<string,mixed>
     */
    private static function service(array $service, array $texts, ?string $domain, string $locale): array
    {
        $cookies = [];

        foreach ((array) ($service['cookies'] ?? []) as $cookie) {
            if (!is_array($cookie)) {
                continue;
            }

            $cookies[] = [
                'name'     => (string) ($cookie['name'] ?? ''),
                'host'     => self::host((string) ($cookie['host'] ?? ''), $domain),
                'duration' => self::pick($cookie['duration'] ?? '', $locale),
                // The catalogue uses `purpose`; older custom entries use
                // `description`. The dialog accepts both, so this does too.
                'purpose'  => (string) ($cookie['purpose'] ?? $cookie['description'] ?? ''),
            ];
        }

        return [
            'id'              => (string) ($service['id'] ?? ''),
            'name'            => (string) ($service['name'] ?? ''),
            'provider'        => (string) ($service['provider'] ?? ''),
            'providerCountry' => (string) ($service['providerCountry'] ?? ''),
            'purpose'         => (string) ($service['purpose'] ?? ''),
            'description'     => (string) ($service['description'] ?? ''),
            'retention'       => self::pick($service['retention'] ?? '', $locale),
            'legalBasis'      => self::legalBasis((string) ($service['legalBasis'] ?? ''), $texts),
            'privacyUrl'      => self::privacyUrl((string) ($service['privacyUrl'] ?? '')),
            'thirdCountry'    => (bool) ($service['thirdCountry'] ?? false),
            'essential'       => (bool) ($service['essential'] ?? false),
            'cookies'         => $cookies,
        ];
    }

    /**
     * Ein Feld, das je Sprache verschieden sein darf.
     *
     * ConfigBuilder legt Laufzeiten entweder als Zeichenkette ab — dann ist der
     * Wert in allen Sprachen derselbe — oder als Karte je Sprachcode. Beide
     * Formen muessen hier ankommen duerfen: veroeffentlichte Schnappschuesse
     * sind eingefroren, und die aelteren tragen durchweg Zeichenketten.
     *
     * Ohne die Unterscheidung wuerde eine Karte per (string) zu "Array" — und
     * stuende so in der Datenschutzerklaerung eines Kunden.
     */
    private static function pick(mixed $value, string $locale): string
    {
        if (is_string($value)) {
            return $value;
        }

        if (!is_array($value) || $value === []) {
            return '';
        }

        foreach ([$locale, 'en', 'de'] as $code) {
            if (isset($value[$code]) && is_string($value[$code])) {
                return $value[$code];
            }
        }

        $first = reset($value);

        return is_string($first) ? $first : '';
    }

    /**
     * `.<domain>` is the catalogue's way of saying "the site's own domain".
     *
     * More than half of the catalogue's cookie entries carry it, because the
     * host of a first-party cookie is not something a catalogue can know. The
     * dialog renders the placeholder literally, which reads like a bug; here it
     * becomes the property's primary domain.
     *
     * Without a domain on file there is nothing true to put in the cell, so it
     * stays empty and the view shows a dash. Inventing `example.com` or leaving
     * `<domain>` standing would both be worse than saying nothing.
     *
     * A leading dot means a domain cookie, valid for the domain and everything
     * under it. Such a cookie is practically never scoped to the `www` label,
     * because then it would not apply on the apex — so `www.` comes off in that
     * case. A host without the dot is host-only and takes the domain verbatim.
     *
     * Worth being clear about what this value is: the catalogue's statement with
     * the property's domain filled in, not a measurement. Whether that cookie
     * really carries that host on that site is something only a scan of the live
     * page could say.
     */
    private static function host(string $host, ?string $domain): string
    {
        if (!str_contains($host, '<domain>')) {
            return $host;
        }

        if ($domain === null || $domain === '') {
            return '';
        }

        if (str_starts_with($host, '.') && str_starts_with($domain, 'www.')) {
            $domain = substr($domain, 4);
        }

        return str_replace('<domain>', $domain, $host);
    }

    /**
     * @param array<string,string> $texts
     */
    private static function legalBasis(string $value, array $texts): string
    {
        if ($value === '') {
            return '';
        }

        // Unknown values fall back to themselves. A catalogue that grows a
        // fourth legal basis should show something ugly, not nothing.
        return $texts['legal_basis_' . $value] ?? $value;
    }

    /**
     * Only http(s) survives.
     *
     * The value comes from the catalogue or from an operator's override, and it
     * lands in an href on a page we render. `javascript:` and `data:` have no
     * business being a provider's privacy policy.
     */
    private static function privacyUrl(string $url): string
    {
        if ($url === '') {
            return '';
        }

        $scheme = strtolower((string) parse_url($url, PHP_URL_SCHEME));

        return in_array($scheme, ['http', 'https'], true) ? $url : '';
    }
}
