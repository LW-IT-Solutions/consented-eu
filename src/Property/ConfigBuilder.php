<?php

declare(strict_types=1);

namespace Consented\Property;

use Consented\Core\Db;
use Consented\Core\Sanitizer;
use Consented\Core\Url;
use Consented\Org\Organization;

/**
 * Turns a property's database rows into the JSON the browser runtime consumes.
 *
 * This is the single place where "what is configured" becomes "what ships".
 * The design editor previews through it and the publish step freezes its
 * output, so a preview cannot diverge from what goes live.
 */
final class ConfigBuilder
{
    /** @return array<string,mixed> */
    public static function build(Property $property, int $version): array
    {
        $settings  = $property->settings();
        $design    = $property->design() ?? [];
        $languages = $property->enabledLanguageCodes();
        $org       = Organization::find($property->orgId());

        $tokens = json_decode((string) ($design['tokens'] ?? '{}'), true);
        if (!is_array($tokens)) {
            $tokens = Defaults::presets()['eu_official']['tokens'];
        }

        $placeholders = [
            'company'            => $org?->legalName() ?? $property->name(),
            'privacy_policy_url' => (string) ($settings['privacyPolicyUrl'] ?? ''),
            'imprint_url'        => (string) ($settings['imprintUrl'] ?? ''),
        ];

        $services = self::services($property);
        $texts    = self::texts($property, $languages, $placeholders);
        $services = self::localiseDurations($services, $languages, $texts);
        $services = self::localisePurposes($services, $languages);

        $placeholders['service_count']  = (string) count($services);
        $placeholders['category_count'] = (string) count($property->categories());

        return [
            'propertyId'      => $property->publicId(),
            'version'         => $version,
            'variant'         => 'default',
            'defaultLanguage' => $property->defaultLanguage(),
            'languages'       => $languages,
            'layout'          => (string) ($design['layout'] ?? 'banner_bottom'),
            'buttonOrder'     => Defaults::buttonOrder($design['button_order'] ?? null),
            'scrollbar'       => Defaults::scrollbar($design['scrollbar'] ?? null),
            'tokens'          => $tokens,
            'customCss'       => Sanitizer::css((string) ($design['custom_css'] ?? '')),
            'logo'            => $design['logo_path'] ?? null,
            'backdrop'        => (bool) ($design['backdrop'] ?? false),
            'backdropBlur'    => (bool) ($design['backdrop_blur'] ?? false),
            'privacyPolicyUrl' => (string) ($settings['privacyPolicyUrl'] ?? ''),
            'imprintUrl'      => (string) ($settings['imprintUrl'] ?? ''),
            'placeholders'    => $placeholders,
            'texts'           => $texts,
            'categories'      => self::categories($property),
            'services'        => $services,
            'settings'        => self::runtimeSettings($settings),
            'endpoints'       => [
                'consent' => Url::cdn('/api/v1/consent'),
            ],
        ];
    }

    /**
     * Merges shipped defaults with per-property overrides, per language.
     *
     * @param  list<string> $languages
     * @return array<string,array<string,string>>
     */
    private static function texts(Property $property, array $languages, array $placeholders): array
    {
        $custom = $property->customTexts();
        $out    = [];

        foreach ($languages as $code) {
            $base = Defaults::textsFor($code);

            foreach ($custom[$code] ?? [] as $key => $value) {
                $base[$key] = $value;
            }

            // Everything in the catalogue can contain a link to the privacy
            // policy, so it all goes through the whitelist sanitiser rather
            // than being escaped at render time in the SDK.
            foreach ($base as $key => $value) {
                $base[$key] = Sanitizer::html(self::interpolate($value, $placeholders));
            }

            $out[$code] = $base;
        }

        return $out;
    }

    /**
     * Setzt die {{platzhalter}} ein, bevor der Sanitizer den Text sieht.
     *
     * Die Reihenfolge ist der ganze Punkt. Vorher lief erst der Sanitizer und
     * die Ersetzung dann im Browser — nur schickt Sanitizer::html() den Text
     * durch DOMDocument, und libxml prozent-kodiert beim Zurückschreiben die
     * geschweiften Klammern in URI-Attributen. Aus
     * href="{{privacy_policy_url}}" wurde href="%7B%7Bprivacy_policy_url%7D%7D",
     * und die Regex in interpolate() fand nichts mehr: der Link im Banner zeigte
     * auf einen Pfad, der den Platzhalter wörtlich enthielt.
     *
     * Nebenbei ist es die sicherere Reihenfolge. Der Sanitizer prüft jetzt die
     * tatsächliche Adresse gegen seine Erlaubnisliste, vorher prüfte er eine
     * Zeichenkette, die noch keine war.
     *
     * interpolate() in cmp.js bleibt bestehen — für Texte, die ein Betreiber
     * selbst einträgt und die diesen Weg nicht nehmen.
     *
     * Öffentlich, weil CookieDeclaration mitgelieferte Vorgaben nachträglich
     * durch genau dieselbe Kette schicken muss: Schlüssel, die es beim letzten
     * Veröffentlichen noch nicht gab, fehlen im Schnappschuss, und ein zweiter
     * Platzhalter-Ersetzer wäre der Ort, an dem beide auseinander laufen.
     *
     * @param array<string,string> $placeholders
     */
    public static function interpolate(string $text, array $placeholders): string
    {
        if (!str_contains($text, '{{')) {
            return $text;
        }

        $search  = [];
        $replace = [];

        foreach ($placeholders as $name => $value) {
            $search[]  = '{{' . $name . '}}';
            $replace[] = (string) $value;
        }

        return str_replace($search, $replace, $text);
    }

    /** @return list<array<string,mixed>> */
    private static function categories(Property $property): array
    {
        $out = [];

        foreach ($property->categories() as $row) {
            $out[] = [
                'key'      => (string) $row['category_key'],
                'required' => (bool) $row['is_required'],
                'default'  => (bool) $row['default_state'],
            ];
        }

        return $out;
    }

    /**
     * Laufzeiten in die Sprachen der Property übersetzen.
     *
     * WARUM HIER UND NICHT IM BROWSER
     * Eine Laufzeit ist eine Zahl mit einer Einheit, und die Einheit braucht
     * die Pluralform der Zielsprache — im Polnischen „2 lata" gegen „5 lat",
     * im Tschechischen „3 roky" gegen „5 let". Die CLDR-Regeln dafür stehen in
     * `Lang` und ausdrücklich nicht in JavaScript. Also rendert der Server, und
     * das Banner bekommt einen fertigen Satz.
     *
     * WARUM DER TEXT ERHALTEN BLEIBT
     * Nur was `Duration` als Dauer erkennt, wird ersetzt. Alles andere — „13
     * Monate ab der letzten Verwendung", „bis zum Widerruf" — bleibt wörtlich
     * stehen: dort steckt eine Aussage, die eine Dauer nicht fasst.
     *
     * DIE FORM IM BUNDLE
     * Unterscheiden sich die Sprachen nicht, bleibt ein einfacher String. Erst
     * wenn sie es tun, wird daraus eine Karte `{"de":"2 Jahre","en":"2 years"}`.
     * Das hält das Bundle klein — die Mehrzahl der Werte ist freier Text und
     * damit in allen Sprachen gleich — und lässt jedes alte, eingefrorene
     * Schnappschuss-Bundle unverändert gültig, weil dort schlicht Strings
     * stehen. Die Runtime muss beides vertragen.
     *
     * @param  list<array<string,mixed>>            $services
     * @param  list<string>                         $languages
     * @param  array<string,array<string,string>>   $texts
     * @return list<array<string,mixed>>
     */
    /**
     * Zwecktexte je Sprache, aus dem uebersetzten Katalog.
     *
     * Dieselbe Bauform wie localiseDurations(): eine Zeichenkette, wenn alle
     * Sprachen denselben Wert tragen, sonst eine Karte je Sprachcode. Die
     * Laufzeit liest ueber localised() ohnehin beide Formen.
     *
     * Warum nur `purpose` und `cookies[].purpose`: das sind die Felder, die im
     * Banner und in der Cookie-Erklaerung wirklich erscheinen. `data_collected`
     * wird nirgends ausgegeben — nachgesehen, nicht vermutet —, und die 175
     * Zeichenketten dahinter sind deshalb nicht uebersetzt worden.
     *
     * `description` bleibt ebenfalls unberuehrt. Es traegt den Text, den der
     * Betreiber der Property selbst geschrieben hat; den maschinell zu
     * uebersetzen hiesse, seine Formulierung durch unsere zu ersetzen.
     *
     * @param  list<array<string,mixed>> $services
     * @param  list<string>              $languages
     * @return list<array<string,mixed>>
     */
    private static function localisePurposes(array $services, array $languages): array
    {
        if ($languages === []) {
            return $services;
        }

        foreach ($services as $i => $service) {
            $services[$i]['purpose'] = CatalogText::localise(
                (string) ($service['purpose'] ?? ''),
                $languages
            );

            foreach (($service['cookies'] ?? []) as $j => $cookie) {
                if (!is_array($cookie)) {
                    continue;
                }

                $services[$i]['cookies'][$j]['purpose'] = CatalogText::localise(
                    (string) ($cookie['purpose'] ?? ''),
                    $languages
                );
            }
        }

        return $services;
    }

    private static function localiseDurations(array $services, array $languages, array $texts): array
    {
        if ($languages === []) {
            return $services;
        }

        $field = static function (string $value) use ($languages, $texts): string|array {
            $value = trim($value);

            if ($value === '') {
                return '';
            }

            $out = [];

            foreach ($languages as $code) {
                $out[$code] = Duration::localise($value, $code, $texts[$code] ?? []);
            }

            // Alle gleich? Dann ist es kein übersetzbarer Wert, und ein String
            // sagt dasselbe in einem Bruchteil der Bytes.
            return count(array_unique($out)) === 1 ? reset($out) : $out;
        };

        foreach ($services as $i => $service) {
            $services[$i]['retention'] = $field((string) ($service['retention'] ?? ''));

            foreach (($service['cookies'] ?? []) as $j => $cookie) {
                if (!is_array($cookie)) {
                    continue;
                }

                $services[$i]['cookies'][$j]['duration'] = $field((string) ($cookie['duration'] ?? ''));
            }
        }

        return $services;
    }

    /**
     * Resolves each attached service into a flat runtime record.
     *
     * A catalogue entry supplies the base values, the property's overrides win
     * field by field. Custom services carry everything in `overrides`.
     *
     * @return list<array<string,mixed>>
     */
    private static function services(Property $property): array
    {
        $out = [];

        foreach ($property->services() as $row) {
            $overrides = json_decode((string) ($row['overrides'] ?? '{}'), true);
            if (!is_array($overrides)) {
                $overrides = [];
            }

            if ((int) $row['is_custom'] === 1) {
                $base = [
                    'name'            => '',
                    'provider'        => '',
                    'providerCountry' => null,
                    'purpose'         => '',
                    'description'     => '',
                    'retention'       => '',
                    'legalBasis'      => '',
                    'privacyUrl'      => '',
                    'thirdCountry'    => false,
                    'cookies'         => [],
                    'patterns'        => [],
                ];
                $id = 'custom-' . substr((string) $row['public_id'], 0, 8);
            } else {
                $catalogCookies = json_decode((string) ($row['catalog_cookies'] ?? '[]'), true);
                $catalogPattern = json_decode((string) ($row['catalog_pattern'] ?? '[]'), true);
                $purposes       = json_decode((string) ($row['purposes'] ?? '[]'), true);

                $base = [
                    'name'            => (string) ($row['catalog_name'] ?? ''),
                    'provider'        => (string) ($row['catalog_provider'] ?? ''),
                    'providerCountry' => $row['provider_country'] ?? null,
                    'purpose'         => is_array($purposes) ? implode(', ', $purposes) : (string) $purposes,
                    'description'     => '',
                    'retention'       => (string) ($row['data_retention'] ?? ''),
                    'legalBasis'      => (string) ($row['legal_basis'] ?? 'consent'),
                    'privacyUrl'      => (string) ($row['privacy_policy_url'] ?? ''),
                    'thirdCountry'    => (bool) ($row['third_country'] ?? false),
                    'cookies'         => is_array($catalogCookies) ? $catalogCookies : [],
                    'patterns'        => is_array($catalogPattern) ? $catalogPattern : [],
                ];
                $id = (string) ($row['dps_id'] ?? ('svc-' . $row['id']));
            }

            $merged = array_merge($base, array_intersect_key($overrides, $base + [
                'name' => null, 'provider' => null, 'purpose' => null, 'description' => null,
                'retention' => null, 'legalBasis' => null, 'privacyUrl' => null,
                'cookies' => null, 'patterns' => null, 'thirdCountry' => null,
                'providerCountry' => null,
            ]));

            $extraPatterns = json_decode((string) ($row['blocking_pattern'] ?? '[]'), true);
            if (is_array($extraPatterns) && $extraPatterns !== []) {
                $merged['patterns'] = array_values(array_unique(
                    array_merge(is_array($merged['patterns']) ? $merged['patterns'] : [], $extraPatterns)
                ));
            }

            $out[] = [
                'id'              => $id,
                'name'            => (string) $merged['name'],
                'provider'        => (string) $merged['provider'],
                'providerCountry' => $merged['providerCountry'],
                'category'        => (string) $row['category_key'],
                'essential'       => (bool) $row['is_essential'],
                'purpose'         => (string) $merged['purpose'],
                'description'     => (string) $merged['description'],
                'retention'       => (string) $merged['retention'],
                'legalBasis'      => (string) $merged['legalBasis'],
                'privacyUrl'      => (string) $merged['privacyUrl'],
                'thirdCountry'    => (bool) $merged['thirdCountry'],
                'cookies'         => is_array($merged['cookies']) ? array_values($merged['cookies']) : [],
                'patterns'        => is_array($merged['patterns']) ? array_values($merged['patterns']) : [],
            ];
        }

        return $out;
    }

    /**
     * The subset of settings the browser is allowed to see.
     *
     * Everything in here ships to every visitor of the customer's site, so it
     * is an explicit allow-list rather than the whole settings blob.
     *
     * @param  array<string,mixed> $settings
     * @return array<string,mixed>
     */
    private static function runtimeSettings(array $settings): array
    {
        $mapping = [];
        foreach (Defaults::gcmMapping() as $signal => $category) {
            $mapping[$signal] = $category;
        }

        return [
            'consentLifetimeDays' => (int) ($settings['consentLifetimeDays'] ?? 365),
            'storage'             => (string) ($settings['storage'] ?? 'cookie'),
            'crossSubdomain'      => (bool) ($settings['crossSubdomain'] ?? true),
            'showRejectAll'       => (bool) ($settings['showRejectAll'] ?? true),
            'showRelaunch'        => (bool) ($settings['showRelaunch'] ?? true),
            'relaunchPosition'    => (string) ($settings['relaunchPosition'] ?? 'left'),
            'repromptOnChange'    => (bool) ($settings['repromptOnChange'] ?? true),
            'respectGpc'          => (bool) ($settings['respectGpc'] ?? true),
            'googleConsentMode'   => (bool) ($settings['googleConsentMode'] ?? true),
            'gcmMapping'          => $mapping,
            'languageDetection'   => (string) ($settings['languageDetection'] ?? 'browser'),

            // Durch die Validatoren, nicht durchgereicht: ein Schnappschuss soll
            // keinen Wert tragen, den die Runtime dann noch prüfen müsste.
            'dataLayerEnabled'     => (bool) ($settings['dataLayerEnabled'] ?? true),
            'dataLayerName'        => Defaults::dataLayerName($settings['dataLayerName'] ?? null),
            'dataLayerEventReady'  => Defaults::dataLayerEventName(
                $settings['dataLayerEventReady'] ?? null,
                'consented_ready'
            ),
            'dataLayerEventUpdate' => Defaults::dataLayerEventName(
                $settings['dataLayerEventUpdate'] ?? null,
                'consented_update'
            ),
            // Leer bleibt leer: '' ist der Aus-Zustand des Widerrufsereignisses,
            // und dataLayerEventName() darf ihn nicht auf eine Vorgabe heben.
            'dataLayerEventWithdrawn' => trim((string) ($settings['dataLayerEventWithdrawn'] ?? '')) === ''
                ? ''
                : Defaults::dataLayerEventName($settings['dataLayerEventWithdrawn'], ''),
            'dataLayerCategoryEvents' => Defaults::categoryEvents($settings['dataLayerCategoryEvents'] ?? null),
            'dataLayerFlatKeys'       => (bool) ($settings['dataLayerFlatKeys'] ?? false),
            'dataLayerGoogleSignals'  => (bool) ($settings['dataLayerGoogleSignals'] ?? false),
            'dataLayerUiEvents'       => (bool) ($settings['dataLayerUiEvents'] ?? false),
        ];
    }

    /**
     * Blocking patterns for the inline stub's data-block attribute.
     *
     * The stub blocks before the config arrives, so it needs the patterns of
     * every non-essential service up front, in the snippet itself.
     *
     * @return list<string>
     */
    public static function stubPatterns(Property $property): array
    {
        $patterns = [];

        foreach (self::services($property) as $service) {
            if ($service['essential']) {
                continue;
            }
            foreach ($service['patterns'] as $pattern) {
                if (is_string($pattern) && $pattern !== '' && !str_contains($pattern, '|')) {
                    $patterns[] = $pattern;
                }
            }
        }

        return array_values(array_unique($patterns));
    }
}
