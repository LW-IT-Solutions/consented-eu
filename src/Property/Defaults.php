<?php

declare(strict_types=1);

namespace Consented\Property;

/**
 * Shipped defaults: text catalogue, categories, design presets, languages.
 *
 * A property stores only what it overrides. Everything else resolves here at
 * publish time, so improving a default improves every property that never
 * touched that key.
 */
final class Defaults
{
    /**
     * The full text key catalogue with usable German and English copy.
     *
     * The wording is intentionally plain and specific. "We use cookies to
     * improve your experience" is not a lawful basis for anything; naming what
     * happens and who it goes to is.
     *
     * @return array<string,array<string,string>> key => [locale => text]
     */
    public static function texts(): array
    {
        return [
            'banner_title' => [
                'de' => 'Datenschutz-Einstellungen',
                'en' => 'Privacy settings',
            ],
            'banner_description' => [
                'de' => 'Wir verwenden Cookies und ähnliche Technologien. Einige sind für den Betrieb '
                    . 'der Website notwendig, andere helfen uns bei Statistik und Marketing. Du '
                    . 'entscheidest, was eingesetzt wird — und kannst das jederzeit ändern. '
                    . 'Mehr dazu in unserer <a href="{{privacy_policy_url}}">Datenschutzerklärung</a>.',
                'en' => 'We use cookies and similar technologies. Some are required to run this site, '
                    . 'others help us with statistics and marketing. You decide what is used, and you '
                    . 'can change it at any time. See our '
                    . '<a href="{{privacy_policy_url}}">privacy policy</a> for details.',
            ],
            'btn_accept_all'  => ['de' => 'Alle akzeptieren', 'en' => 'Accept all'],
            'btn_reject_all'  => ['de' => 'Alle ablehnen',    'en' => 'Reject all'],
            'btn_settings'    => ['de' => 'Mehr Informationen', 'en' => 'More information'],
            'btn_save'        => ['de' => 'Auswahl speichern','en' => 'Save selection'],
            'btn_withdraw'    => ['de' => 'Einwilligung widerrufen', 'en' => 'Withdraw consent'],
            'btn_open_settings' => [
                'de' => 'Datenschutz-Einstellungen öffnen',
                'en' => 'Open privacy settings',
            ],

            'modal_title' => [
                'de' => 'Datenschutz-Einstellungen',
                'en' => 'Privacy settings',
            ],
            'modal_description' => [
                'de' => 'Hier siehst du alle Dienste, die auf dieser Website eingesetzt werden können. '
                    . 'Aktiviere nur, womit du einverstanden bist.',
                'en' => 'Here are all services this website may use. Enable only what you agree to.',
            ],

            'tab_categories' => ['de' => 'Kategorien', 'en' => 'Categories'],
            // The per-service list. Called "Advanced" rather than "Services"
            // because it is the deeper level, reached from the categories.
            'tab_advanced'   => ['de' => 'Erweitert',  'en' => 'Advanced'],
            'tab_about'      => ['de' => 'Über',       'en' => 'About'],

            'category_essential_name' => ['de' => 'Notwendig', 'en' => 'Essential'],
            'category_essential_description' => [
                'de' => 'Diese Dienste sind für den Betrieb der Website erforderlich, etwa für '
                    . 'Sicherheit, Formularübermittlung und das Speichern deiner Datenschutz-Auswahl. '
                    . 'Sie lassen sich nicht abschalten.',
                'en' => 'Required to run the website — security, form submission and remembering your '
                    . 'privacy choices. These cannot be switched off.',
            ],
            'category_functional_name' => ['de' => 'Funktional', 'en' => 'Functional'],
            'category_functional_description' => [
                'de' => 'Ermöglichen zusätzliche Funktionen wie Videos, Karten oder Chat. Ohne diese '
                    . 'Dienste bleiben einzelne Inhalte leer.',
                'en' => 'Enable extra functionality such as videos, maps or chat. Without them some '
                    . 'content stays empty.',
            ],
            'category_analytics_name' => ['de' => 'Statistik', 'en' => 'Analytics'],
            'category_analytics_description' => [
                'de' => 'Helfen uns zu verstehen, wie die Website genutzt wird. Die Auswertung erfolgt '
                    . 'zusammengefasst und dient dazu, Inhalte und Technik zu verbessern.',
                'en' => 'Help us understand how the site is used. Evaluation is aggregated and serves '
                    . 'to improve content and technology.',
            ],
            'category_marketing_name' => ['de' => 'Marketing', 'en' => 'Marketing'],
            'category_marketing_description' => [
                'de' => 'Werden verwendet, um Werbung auszuspielen, die für dich relevanter ist, und '
                    . 'um deren Wirksamkeit zu messen. Dabei können Daten an Dritte übermittelt werden.',
                'en' => 'Used to show advertising that is more relevant to you and to measure its '
                    . 'effectiveness. Data may be transferred to third parties.',
            ],

            'label_always_active'  => ['de' => 'Immer aktiv',   'en' => 'Always active'],
            'label_essential'      => ['de' => 'Notwendig',     'en' => 'Essential'],
            'label_services_count' => ['de' => 'Dienste',       'en' => 'services'],
            'label_provider'       => ['de' => 'Anbieter',      'en' => 'Provider'],
            'label_retention'      => ['de' => 'Speicherdauer', 'en' => 'Retention'],
            'label_legal_basis'    => ['de' => 'Rechtsgrundlage', 'en' => 'Legal basis'],
            'label_third_country'  => ['de' => 'Drittlandtransfer', 'en' => 'Third-country transfer'],
            'label_yes'            => ['de' => 'ja',            'en' => 'yes'],
            'label_cookie_name'    => ['de' => 'Name',          'en' => 'Name'],
            'label_cookie_host'    => ['de' => 'Host',          'en' => 'Host'],
            'label_cookie_duration'=> ['de' => 'Laufzeit',      'en' => 'Duration'],
            'label_cookie_purpose' => ['de' => 'Zweck',         'en' => 'Purpose'],
            'label_show_details'   => ['de' => 'Details anzeigen', 'en' => 'Show details'],
            'label_hide_details'   => ['de' => 'Details ausblenden', 'en' => 'Hide details'],
            'label_show_services'  => ['de' => 'einzeln einstellen', 'en' => 'configure individually'],
            'label_hide_services'  => ['de' => 'Liste schließen', 'en' => 'close list'],
            'label_privacy_policy' => ['de' => 'Datenschutzerklärung', 'en' => 'Privacy policy'],
            'label_consent_id'     => ['de' => 'Deine Einwilligungs-ID', 'en' => 'Your consent ID'],
            'label_state_from'     => ['de' => 'Stand',         'en' => 'as of'],

            'link_privacy_policy'  => ['de' => 'Datenschutzerklärung', 'en' => 'Privacy policy'],
            'link_imprint'         => ['de' => 'Impressum',     'en' => 'Legal notice'],

            /*
             * Rechtsgrundlagen als Text.
             *
             * Der Katalog speichert einen Enum-Wert, und Banner wie Erklärung
             * zeigten ihn wörtlich an — „legitimate_interest" stand so im
             * Dialog. Die drei Werte, die der Katalog kennt, bekommen hier einen
             * Satz mit Fundstelle; ein unbekannter Wert fällt auf sich selbst
             * zurück, damit eine Erweiterung des Katalogs nichts verschluckt.
             */
            'legal_basis_consent' => [
                'de' => 'Einwilligung (Art. 6 Abs. 1 lit. a DSGVO)',
                'en' => 'Consent (Art. 6(1)(a) GDPR)',
            ],
            'legal_basis_legitimate_interest' => [
                'de' => 'Berechtigtes Interesse (Art. 6 Abs. 1 lit. f DSGVO)',
                'en' => 'Legitimate interest (Art. 6(1)(f) GDPR)',
            ],
            'legal_basis_contract' => [
                'de' => 'Vertragserfüllung (Art. 6 Abs. 1 lit. b DSGVO)',
                'en' => 'Performance of a contract (Art. 6(1)(b) GDPR)',
            ],

            /*
             * Zeiteinheiten für die Laufzeitspalte.
             *
             * Die gezählten Einheiten tragen ihre Pluralformen durch `|`
             * getrennt, in der Reihenfolge der Klassenindizes aus
             * Lang::pluralIndex(). Deutsch und Englisch haben zwei Formen;
             * Polnisch drei, Slowenisch vier, Maltesisch fünf — die stehen in
             * den Sprachauflagen.
             *
             * Sie sind Bannertexte und keine Oberflächentexte, weil sie im
             * Banner erscheinen und ein Betreiber sie überschreiben können
             * soll. Gerendert wird serverseitig von Duration; die Zahl davor
             * setzt der Code, deshalb steht hier nur das Wort.
             */
            'duration_second' => ['de' => 'Sekunde|Sekunden', 'en' => 'second|seconds'],
            'duration_minute' => ['de' => 'Minute|Minuten',   'en' => 'minute|minutes'],
            'duration_hour'   => ['de' => 'Stunde|Stunden',   'en' => 'hour|hours'],
            'duration_day'    => ['de' => 'Tag|Tage',         'en' => 'day|days'],
            'duration_week'   => ['de' => 'Woche|Wochen',     'en' => 'week|weeks'],
            'duration_month'  => ['de' => 'Monat|Monate',     'en' => 'month|months'],
            'duration_year'   => ['de' => 'Jahr|Jahre',       'en' => 'year|years'],

            'duration_session'    => ['de' => 'Sitzung',         'en' => 'Session'],
            'duration_persistent' => ['de' => 'unbegrenzt',      'en' => 'persistent'],
            // „nicht angegeben" und nicht „unbekannt": der Anbieter nennt
            // keine Laufzeit — das ist eine Aussage über seine Doku, nicht
            // über unser Wissen.
            'duration_unknown'    => ['de' => 'nicht angegeben', 'en' => 'not stated'],
            'duration_varies'     => ['de' => 'unterschiedlich', 'en' => 'varies'],
            'duration_upto'       => ['de' => 'bis zu :duration', 'en' => 'up to :duration'],

            /* Cookie-Erklärung zum Einbetten in die Datenschutzerklärung. */
            'declaration_title' => [
                'de' => 'Cookies und Dienste auf dieser Website',
                'en' => 'Cookies and services on this website',
            ],
            'declaration_intro' => [
                'de' => 'Diese Übersicht listet alle Dienste, die auf dieser Website eingesetzt '
                    . 'werden können, mit ihrem Zweck, ihrer Rechtsgrundlage und den Cookies, die '
                    . 'sie setzen. Bis auf die notwendigen Dienste wird keiner davon ohne deine '
                    . 'Einwilligung geladen. Du kannst deine Auswahl jederzeit ändern.',
                'en' => 'This overview lists every service this website may use, with its purpose, '
                    . 'its legal basis and the cookies it sets. Apart from the essential ones, none '
                    . 'of them loads without your consent. You can change your selection at any time.',
            ],
            'declaration_empty' => [
                'de' => 'Für diese Website sind derzeit keine Dienste eingetragen.',
                'en' => 'No services are currently listed for this website.',
            ],
            'declaration_no_cookies' => [
                'de' => 'Setzt keine eigenen Cookies.',
                'en' => 'Sets no cookies of its own.',
            ],

            /*
             * Spoken confirmations, never displayed.
             *
             * For a sighted visitor the confirmation is the dialog closing. A
             * screen reader does not report that, so without these two the click
             * had no perceivable result at all. They go through the same
             * override mechanism as every other text — an operator who words
             * their banner differently should be able to word these too.
             */
            'sr_saved'     => [
                'de' => 'Deine Auswahl wurde gespeichert.',
                'en' => 'Your selection has been saved.',
            ],
            'sr_withdrawn' => [
                'de' => 'Deine Einwilligung wurde widerrufen.',
                'en' => 'Your consent has been withdrawn.',
            ],

            'about_text' => [
                'de' => 'Deine Auswahl wird in einem Cookie auf diesem Gerät gespeichert und '
                    . 'zusammen mit einem Zeitstempel protokolliert, damit {{company}} die '
                    . 'Einwilligung nachweisen kann. Es wird keine Klartext-IP gespeichert. '
                    . 'Du kannst deine Entscheidung jederzeit über diesen Dialog ändern oder widerrufen.',
                'en' => 'Your selection is stored in a cookie on this device and logged with a '
                    . 'timestamp so that {{company}} can demonstrate consent. No plain-text IP '
                    . 'address is stored. You can change or withdraw your decision at any time '
                    . 'through this dialog.',
            ],
        ];
    }

    /** @return list<string> */
    public static function textKeys(): array
    {
        return array_keys(self::texts());
    }

    /**
     * Resolved catalogue for one locale, falling back to English then German.
     *
     * @return array<string,string>
     */
    public static function textsFor(string $locale): array
    {
        $overlay = self::bannerOverlay($locale);
        $out     = [];

        foreach (self::texts() as $key => $translations) {
            // Die Auflage gewinnt, dann die Sprache selbst, dann Englisch,
            // dann Deutsch. Ein fehlender Schlüssel in einer Auflage faellt
            // damit einzeln zurueck und reisst nicht die ganze Sprache mit.
            $out[$key] = $overlay[$key]
                ?? $translations[$locale]
                ?? $translations['en']
                ?? $translations['de']
                ?? '';
        }

        return $out;
    }

    /**
     * Zusätzliche Bannersprachen aus `lang/banner/<code>.php`.
     *
     * Mitgeliefert sind Deutsch und Englisch — sie stehen oben in texts() und
     * sind redaktionell geprüft. Alles weitere liegt als Auflage in einem
     * eigenen Verzeichnis, aus zwei Gründen:
     *
     *  - Eine Installation kann eine Sprache ergänzen, ohne diese Datei zu
     *    patchen. Ein Betreiber, der Niederländisch braucht, legt eine Datei an
     *    und ist fertig; beim nächsten Update gibt es keinen Konflikt.
     *  - Der Betreiber dieser Instanz kann eigene Sprachpakete pflegen, ohne sie
     *    weiterzugeben. Das Verzeichnis steht in `.gitignore`.
     *
     * Die Datei gibt ein Array `schlüssel => text` zurück und darf unvollständig
     * sein. Was fehlt, fällt auf Englisch zurück.
     *
     * @return array<string,string>
     */
    public static function bannerOverlay(string $locale): array
    {
        /** @var array<string,array<string,string>> $cache */
        static $cache = [];

        if (array_key_exists($locale, $cache)) {
            return $cache[$locale];
        }

        // Der Sprachcode landet in einem Dateipfad. Nur zwei Kleinbuchstaben,
        // sonst nichts — sonst waere `../../` ein gueltiger "Sprachcode".
        if (preg_match('/^[a-z]{2}$/', $locale) !== 1) {
            return $cache[$locale] = [];
        }

        $file = CONSENTED_ROOT . '/lang/banner/' . $locale . '.php';

        if (!is_file($file)) {
            return $cache[$locale] = [];
        }

        $loaded = require $file;

        if (!is_array($loaded)) {
            return $cache[$locale] = [];
        }

        $known = self::texts();
        $out   = [];

        foreach ($loaded as $key => $value) {
            // Nur bekannte Schlüssel und nur Zeichenketten. Eine Auflage darf
            // keine neuen Textschlüssel erfinden — die gäbe es nirgends im
            // Code, und sie würden still nichts tun.
            if (is_string($key) && is_string($value) && $value !== '' && isset($known[$key])) {
                $out[$key] = $value;
            }
        }

        return $cache[$locale] = $out;
    }

    /**
     * @return list<array{key:string,required:bool,default:bool,sort:int,gcm:list<string>}>
     */
    public static function categories(): array
    {
        return [
            ['key' => 'essential',  'required' => true,  'default' => true,  'sort' => 0,
             'gcm' => ['security_storage']],
            ['key' => 'functional', 'required' => false, 'default' => false, 'sort' => 1,
             'gcm' => ['functionality_storage', 'personalization_storage']],
            ['key' => 'analytics',  'required' => false, 'default' => false, 'sort' => 2,
             'gcm' => ['analytics_storage']],
            ['key' => 'marketing',  'required' => false, 'default' => false, 'sort' => 3,
             'gcm' => ['ad_storage', 'ad_user_data', 'ad_personalization']],
        ];
    }

    /**
     * Google Consent Mode signal => category key.
     *
     * @return array<string,string>
     */
    public static function gcmMapping(): array
    {
        return [
            'security_storage'        => 'essential',
            'functionality_storage'   => 'functional',
            'personalization_storage' => 'functional',
            'analytics_storage'       => 'analytics',
            'ad_storage'              => 'marketing',
            'ad_user_data'            => 'marketing',
            'ad_personalization'      => 'marketing',
        ];
    }

    /** @return array<string,mixed> */
    public static function settings(): array
    {
        return [
            'consentLifetimeDays' => 365,
            'storage'             => 'cookie',
            'crossSubdomain'      => true,
            'showRejectAll'       => true,
            'showRelaunch'        => true,
            'relaunchPosition'    => 'left',
            'repromptOnChange'    => true,
            'respectGpc'          => true,
            /*
             * Setzt der Loader die Consent-Mode-Signale und aktualisiert die
             * Runtime sie nach der Entscheidung?
             *
             * Hier standen zwei weitere Schlüssel, beide ohne Wirkung, beide
             * entfernt statt versprochen:
             *
             *   gcmWaitForUpdate  eine Konstante des Loaders (500 ms). Kein
             *                     Formular hat sie je angeboten, also gehört sie
             *                     in stub.js, wo sie benutzt wird.
             *   gcmMode           „Basic" wurde gespeichert und erreichte den
             *                     Browser nie. Es gibt auch nichts zu schalten:
             *                     ob Googles Tag vor der Einwilligung lädt,
             *                     entscheidet die Dienstliste über das
             *                     Blocking-Muster, nicht eine Einstellung hier.
             */
            'googleConsentMode'   => true,
            // No implied consent. Treating a scroll as agreement has been
            // rejected by the CJEU (Planet49) and the EDPB guidelines; the
            // setting exists only so the UI can show it is deliberately off.
            'impliedConsent'      => false,
            'tcfEnabled'          => false,
            'privacyPolicyUrl'    => '',
            'imprintUrl'          => '',
            'languageDetection'   => 'browser',

            /*
             * dataLayer. Die Vorgaben sind genau das Verhalten von vor diesen
             * Schaltern: die zwei Ereignisse unter ihren bisherigen Namen, nichts
             * darüber hinaus. Weicht ein Wert vom undefined-Fallback in cmp.js
             * ab, würde eine Property beim nächsten Veröffentlichen aus fremdem
             * Anlass plötzlich anders senden.
             *
             * `dataLayerEnabled` ist der einzige neue Schalter mit Vorgabe true,
             * weil das Pushen heute schon passiert. Abschalten ist die neue
             * Fähigkeit, nicht Einschalten.
             */
            'dataLayerEnabled'        => true,
            'dataLayerName'           => 'dataLayer',
            'dataLayerEventReady'     => 'consented_ready',
            'dataLayerEventUpdate'    => 'consented_update',
            'dataLayerEventWithdrawn' => '',
            'dataLayerCategoryEvents' => 'off',
            'dataLayerFlatKeys'       => false,
            'dataLayerGoogleSignals'  => false,
            'dataLayerUiEvents'       => false,
        ];
    }

    public const DEFAULT_CATEGORY_EVENTS = 'off';

    /**
     * Ob und wie je Kategorie ein eigenes Ereignis entsteht.
     *
     * Die drei Stufen sind bewusst nicht vier: es gibt kein „nur denied". Ein
     * Betreiber, der ausschließlich Ablehnungen in die Tag-Schicht schickt, baut
     * eine Auswertung, in der Einwilligung nicht vorkommt — das ist keine
     * Konfiguration, das ist ein Messfehler.
     *
     * `pending` erzeugt in keiner Stufe ein Ereignis. „Noch nicht abgelehnt"
     * darf sich nicht als Erlaubnis triggern lassen.
     *
     * @return array<string,string> Wert => Sprachschlüssel
     */
    public static function categoryEventModes(): array
    {
        return [
            'off'            => 'property.settings.datalayer_cat_off',
            'granted'        => 'property.settings.datalayer_cat_granted',
            'granted_denied' => 'property.settings.datalayer_cat_both',
        ];
    }

    public static function categoryEvents(?string $value): string
    {
        return array_key_exists((string) $value, self::categoryEventModes())
            ? (string) $value
            : self::DEFAULT_CATEGORY_EVENTS;
    }

    /**
     * Ereignisnamen, die wir uns selbst vorbehalten.
     *
     * Grund, und er ist kein Stilfrage: die abgeleiteten Namen
     * `consented_granted_<kategorie>` und `consented_denied_<kategorie>` sollen
     * in GTM bedeuten „für diese Kategorie liegt eine Entscheidung vor". Dürfte
     * ein Betreiber das Boot-Ereignis `consented_granted_analytics` nennen,
     * feuerte dieser Trigger bei jedem Erstbesucher — mit `consented: null`,
     * also ohne jede Einwilligung. Ein Tag daran wäre dann genau das, was das
     * Produkt ausschließt.
     *
     * Deshalb ist der Namensraum gesperrt, und zwar an beiden Prüfstellen: hier
     * und in `dlEventName()` in cmp.js, die für Schnappschüsse zuständig ist,
     * die diese Prüfung nie gesehen haben.
     */
    private const RESERVED_EVENT_PREFIXES = ['consented_granted_', 'consented_denied_'];

    /** @var list<string> */
    private const RESERVED_EVENT_NAMES = ['consented_banner_shown', 'consented_settings_opened'];

    /**
     * Prüft einen Ereignisnamen und gibt sonst die Vorgabe zurück.
     *
     * Der Wert landet als `event`-Schlüssel im dataLayer, wo GTM ihn wörtlich
     * vergleicht. Also Kleinbuchstaben, Ziffern und Unterstriche — kein Punkt,
     * weil GTM darin einen Pfad sieht, und kein Leerzeichen.
     */
    public static function dataLayerEventName(?string $value, string $fallback): string
    {
        $name = strtolower(trim((string) $value));

        if (preg_match('/^[a-z][a-z0-9_]{0,39}$/', $name) !== 1) {
            return $fallback;
        }

        foreach (self::RESERVED_EVENT_PREFIXES as $prefix) {
            if (str_starts_with($name, $prefix)) {
                return $fallback;
            }
        }

        return in_array($name, self::RESERVED_EVENT_NAMES, true) ? $fallback : $name;
    }

    /**
     * Name des dataLayer-Arrays.
     *
     * Der Wert wird als Eigenschaft von `window` gelesen, deshalb ein
     * Identifier und keine Punkt-Pfade.
     *
     * Die Blockliste steht hier nicht als Sicherheitsgrenze — wer die
     * Einstellung setzt, ist angemeldet und darf seine eigene Property
     * konfigurieren. Sie steht da, weil ein Tippfehler sonst die Seite des
     * Kunden zerlegt: `location` ist ein gültiger Identifier, und eine Zuweisung
     * darauf navigiert. Die Runtime fängt das zusätzlich ab (`dlPush()` schreibt
     * nie über einen belegten Namen), aber ein Wert, der nachweislich Schaden
     * anrichtet, soll das Formular gar nicht erst verlassen.
     */
    public static function dataLayerName(?string $value): string
    {
        $name = trim((string) $value);

        if (preg_match('/^[A-Za-z_$][A-Za-z0-9_$]{0,63}$/', $name) !== 1) {
            return 'dataLayer';
        }

        return in_array(strtolower($name), self::FORBIDDEN_GLOBALS, true) ? 'dataLayer' : $name;
    }

    /**
     * Namen, die auf `window` schon belegt sind und dort Schaden anrichten.
     *
     * `location` löst eine Navigation aus, `document`, `top`, `parent`, `window`
     * und `frames` sind schreibgeschützt und werfen im strict mode, `name`,
     * `self`, `length` und `origin` nehmen die Zuweisung an und machen aus dem
     * Array eine Zeichenkette. Alle drei Ausgänge enden ohne Banner.
     *
     * @var list<string>
     */
    private const FORBIDDEN_GLOBALS = [
        '__proto__', 'constructor', 'prototype', 'hasownproperty',
        'location', 'document', 'window', 'self', 'top', 'parent', 'frames',
        'name', 'length', 'origin', 'history', 'navigator', 'closed', 'status',
        'opener', 'localstorage', 'sessionstorage', 'console', 'alert',
    ];

    /**
     * Design token presets.
     *
     * @return array<string,array{label:string,tokens:array<string,string>,layout:string}>
     */
    public static function presets(): array
    {
        return [
            'eu_official' => [
                'label'  => 'EU Official',
                'layout' => 'banner_bottom',
                'tokens' => [
                    'primary'     => '#1B4BB8',
                    'primaryText' => '#FFFFFF',
                    'background'  => '#FFFFFF',
                    'text'        => '#10131A',
                    'textMuted'   => '#4A5163',
                    'link'        => '#143A8C',
                    'toggleOn'    => '#0E7A57',
                    'radius'      => '14px',
                    'buttonRadius'=> '9px',
                    'maxWidth'    => '560px',
                ],
            ],
            'minimal_light' => [
                'label'  => 'Minimal Light',
                'layout' => 'banner_bottom',
                'tokens' => [
                    'primary'     => '#10131A',
                    'primaryText' => '#FFFFFF',
                    'background'  => '#FFFFFF',
                    'text'        => '#10131A',
                    'textMuted'   => '#5A6273',
                    'link'        => '#10131A',
                    'toggleOn'    => '#10131A',
                    'radius'      => '8px',
                    'buttonRadius'=> '6px',
                    'maxWidth'    => '520px',
                ],
            ],
            'dark' => [
                'label'  => 'Dark',
                'layout' => 'modal_center',
                'tokens' => [
                    'primary'     => '#3D6FE0',
                    'primaryText' => '#FFFFFF',
                    'background'  => '#141924',
                    'heading'     => '#F2F4F8',
                    'text'        => '#C6CCD9',
                    'textMuted'   => '#9AA3B4',
                    'textSubtle'  => '#7A8393',
                    'link'        => '#7FA5F5',
                    'border'      => 'rgba(255,255,255,.12)',
                    'border2'     => 'rgba(255,255,255,.22)',
                    'footerBg'    => 'rgba(255,255,255,.03)',
                    'badgeBg'     => 'rgba(255,255,255,.08)',
                    'toggleOff'   => '#3A4358',
                    'toggleOn'    => '#0E7A57',
                    'radius'      => '14px',
                    'buttonRadius'=> '9px',
                    'maxWidth'    => '560px',
                ],
            ],
            'high_contrast' => [
                'label'  => 'High Contrast',
                'layout' => 'modal_center',
                'tokens' => [
                    'primary'     => '#000000',
                    'primaryText' => '#FFFFFF',
                    'background'  => '#FFFFFF',
                    'text'        => '#000000',
                    'textMuted'   => '#1A1A1A',
                    'textSubtle'  => '#333333',
                    'link'        => '#0000CC',
                    'border'      => '#000000',
                    'border2'     => '#000000',
                    'toggleOn'    => '#006644',
                    'toggleOff'   => '#767676',
                    'radius'      => '0px',
                    'buttonRadius'=> '0px',
                    'maxWidth'    => '600px',
                ],
            ],
            // Centred dark card floating above the bottom edge.
            //
            // Note on the buttons: "Alle ablehnen" gets the same filled
            // treatment as "Alle akzeptieren". A ghost-styled decline next to
            // a coloured accept is the single most criticised dark pattern in
            // consent UIs, so the shipped preset does not do it. Both colours
            // remain editable if a property insists.
            'dark_box' => [
                'label'  => 'Dark Box (unten)',
                'layout' => 'box_bottom',
                'tokens' => [
                    'primary'     => '#2BA3E3',
                    'primaryText' => '#0F1419',
                    'background'  => '#2A2F37',
                    'heading'     => '#FFFFFF',
                    'text'        => '#D6DAE0',
                    'textMuted'   => '#B4BAC4',
                    'textSubtle'  => '#9097A1',
                    'link'        => '#6FC5F5',
                    'border'      => 'rgba(255,255,255,.10)',
                    'border2'     => 'rgba(255,255,255,.28)',
                    'footerBg'    => 'rgba(255,255,255,.03)',
                    'badgeBg'     => 'rgba(255,255,255,.08)',
                    'subtleBg'    => 'rgba(255,255,255,.03)',
                    'toggleOff'   => '#4A515C',
                    'toggleOn'    => '#2BA3E3',
                    'backdropColor' => 'rgba(8,12,20,.45)',
                    'radius'      => '10px',
                    'buttonRadius' => '6px',
                    'boxWidth'    => '1060px',
                    'boxOffset'   => '24px',
                    'padding'     => '26px 30px',
                    'titleSize'   => '16px',
                    'bodySize'    => '14px',
                ],
            ],
            'compact_bar' => [
                'label'  => 'Compact Bar',
                'layout' => 'banner_bottom',
                'tokens' => [
                    'primary'     => '#0E7A57',
                    'primaryText' => '#FFFFFF',
                    'background'  => '#FFFFFF',
                    'text'        => '#10131A',
                    'textMuted'   => '#4A5163',
                    'link'        => '#0E7A57',
                    'toggleOn'    => '#0E7A57',
                    'radius'      => '0px',
                    'buttonRadius'=> '6px',
                    'padding'     => '12px 20px',
                    'titleSize'   => '15px',
                    'bodySize'    => '13px',
                ],
            ],

            /*
             * Dark Wide — nach einer Vorlage des Betreibers gebaut.
             *
             * Breite, freistehende Karte am unteren Rand auf dunklem Grund,
             * heller Blauakzent mit dunkler Schrift darauf, Überschrift in
             * derselben Größe wie der Fließtext (in der Vorlage gibt es keinen
             * abgesetzten Titel, der erste Satz ist Teil des Textes).
             *
             * EINE ABWEICHUNG VON DER VORLAGE, ABSICHTLICH:
             *
             * Dort ist „Accept Cookies" eine gefüllte blaue Fläche und
             * „Decline" nur ein Umriss. Das ist unterschiedliche visuelle
             * Gewichtung von Annehmen und Ablehnen — genau das, was CLAUDE.md
             * Regel 8 verbietet, und was Aufsichtsbehörden und Gerichte in der
             * EU regelmäßig als unzulässig behandeln. Ein Preset, das im
             * Produkt mitgeliefert wird, macht daraus einen Klick für jeden
             * Nutzer; deshalb tragen beide Knöpfe hier dieselbe Füllung.
             *
             * Kein Preset setzt deshalb `rejectBg` oder `rejectText`. Die
             * Runtime fällt für den Ablehnen-Knopf auf `primary` bzw.
             * `primaryText` zurück (cmp.js, `.ce-btn--reject`), und damit ist
             * die Gleichheit der beiden Knöpfe strukturell statt kopiert.
             *
             * Vorher standen die Werte doppelt drin, und das ging so schief:
             * ein Preset schrieb rejectBg auf sein eigenes Blau, der Betreiber
             * änderte danach `primary` auf Grün — und weil die Farbmaske kein
             * Feld für rejectBg hat, blieb Ablehnen blau, während Akzeptieren
             * grün wurde. Genau die unterschiedliche Gewichtung, die dieser
             * Kommentar verhindern sollte, entstand durch ihn.
             *
             * Ein Feld dafür gibt es absichtlich nicht: es hätte keinen anderen
             * Zweck, als Regel 8 zu unterlaufen.
             */
            'dark_wide' => [
                'label'  => 'Dark Wide',
                'layout' => 'box_bottom',
                // Wie in der Vorlage: Akzeptieren zuerst, Info zuletzt.
                // Die Gewichtung bleibt gleich, nur die Position wechselt.
                'buttonOrder' => 'accept,reject,settings',
                'tokens' => [
                    'primary'     => '#29ABE2',
                    // Dunkle Schrift auf hellem Blau: 7,07:1. Weiß darauf käme
                    // nur auf 2,3:1 und wäre nicht lesbar.
                    'primaryText' => '#0F1419',
                    'background'  => '#1A1D21',
                    'heading'     => '#D7DBE1',
                    'text'        => '#C9CED6',
                    'textMuted'   => '#C9CED6',
                    'textSubtle'  => '#A6ACB5',
                    'link'        => '#29ABE2',
                    'border'      => 'rgba(255,255,255,.10)',
                    'border2'     => 'rgba(255,255,255,.20)',
                    'footerBg'    => 'rgba(255,255,255,.03)',
                    'badgeBg'     => 'rgba(255,255,255,.07)',
                    'toggleOff'   => '#3A4048',
                    'toggleOn'    => '#29ABE2',
                    'radius'      => '16px',
                    'buttonRadius'=> '6px',
                    // Deutlich breiter als die übrigen Presets: die Vorlage
                    // nutzt fast die ganze Fensterbreite, und bei 560px würde
                    // aus der breiten Karte eine schmale Box.
                    'maxWidth'    => '1180px',
                    'padding'     => '22px 26px',
                    'titleSize'   => '15px',
                    'bodySize'    => '15px',
                ],
            ],
        ];
    }

    /** @return array<string,string> */
    public static function layouts(): array
    {
        return [
            'box_bottom'    => 'Box unten (zentriert)',
            'banner_bottom' => 'Banner unten (volle Breite)',
            'banner_top'    => 'Banner oben (volle Breite)',
            'modal_center'  => 'Overlay-Modal (zentriert)',
            'modal_slide'   => 'Slide-in (Ecke)',
        ];
    }

    public const DEFAULT_BUTTON_ORDER = 'settings,reject,accept';

    /**
     * Reihenfolgen, in denen die drei Knöpfe stehen dürfen.
     *
     * Alle sechs Permutationen, nicht weniger: welche davon passt, hängt vom
     * Layout, von der Leserichtung und vom Geschmack des Betreibers ab, und
     * eine Auswahl davon zu verbieten wäre bloß unsere Meinung als Sperre.
     *
     * Aber auch nicht mehr — keine freie Sortierung. Der Wert kommt vom Client,
     * die Liste ist die Prüfung, und aus einer geschlossenen Liste kann keine
     * Kombination entstehen, die es nicht geben soll.
     *
     * Die Schlüssel müssen mit ORDERS in public/sdk/dist/cmp.js übereinstimmen.
     *
     * Was hier ausdrücklich NICHT einstellbar ist: die Gewichtung. Ablehnen und
     * Akzeptieren tragen dieselbe Fläche, egal in welcher Reihenfolge sie
     * stehen (CLAUDE.md Regel 8). Reihenfolge ist Gestaltung, unterschiedliche
     * Prominenz ist ein Dark Pattern.
     *
     * @return array<string,string> Wert => Beschriftung mit Platzhaltern
     */
    public static function buttonOrders(): array
    {
        return [
            'settings,reject,accept' => ':settings · :reject · :accept',
            'settings,accept,reject' => ':settings · :accept · :reject',
            'reject,accept,settings' => ':reject · :accept · :settings',
            'accept,reject,settings' => ':accept · :reject · :settings',
            'reject,settings,accept' => ':reject · :settings · :accept',
            'accept,settings,reject' => ':accept · :settings · :reject',
        ];
    }

    /** Prüft einen eingehenden Wert und gibt sonst die Vorgabe zurück. */
    public static function buttonOrder(?string $value): string
    {
        return array_key_exists((string) $value, self::buttonOrders())
            ? (string) $value
            : self::DEFAULT_BUTTON_ORDER;
    }

    public const DEFAULT_SCROLLBAR = 'subtle';

    /**
     * Aussehen der Scrollbalken im Dialog.
     *
     * Betrifft nur das Aussehen, nie die Bedienbarkeit: alle drei Varianten
     * bleiben scrollbar, mit Rad, Tastatur und Zeigegerät. Ein „aus", das den
     * Balken verschwinden lässt, gibt es absichtlich nicht — im Dienste-Reiter
     * steht die Liste, in der jemand einzelne Dienste abwählt, und einen
     * Hinweis darauf zu verstecken, dass die Liste weitergeht, wäre genau die
     * Sorte Gestaltung, die CLAUDE.md Regel 8 verbietet.
     *
     * @return array<string,string> Wert => Sprachschlüssel
     */
    public static function scrollbars(): array
    {
        return [
            'subtle' => 'property.design.scrollbar_subtle',
            'strong' => 'property.design.scrollbar_strong',
            'native' => 'property.design.scrollbar_native',
        ];
    }

    public static function scrollbar(?string $value): string
    {
        return array_key_exists((string) $value, self::scrollbars())
            ? (string) $value
            : self::DEFAULT_SCROLLBAR;
    }

    /**
     * Language catalogue: the 24 EU official languages plus the ones European
     * sites most often need on top.
     *
     * @return array<string,string>
     */
    public static function languages(): array
    {
        return [
            'bg' => 'Български', 'cs' => 'Čeština', 'da' => 'Dansk', 'de' => 'Deutsch',
            'el' => 'Ελληνικά', 'en' => 'English', 'es' => 'Español', 'et' => 'Eesti',
            'fi' => 'Suomi', 'fr' => 'Français', 'ga' => 'Gaeilge', 'hr' => 'Hrvatski',
            'hu' => 'Magyar', 'it' => 'Italiano', 'lt' => 'Lietuvių', 'lv' => 'Latviešu',
            'mt' => 'Malti', 'nl' => 'Nederlands', 'pl' => 'Polski', 'pt' => 'Português',
            'ro' => 'Română', 'sk' => 'Slovenčina', 'sl' => 'Slovenščina', 'sv' => 'Svenska',
            'is' => 'Íslenska', 'no' => 'Norsk', 'tr' => 'Türkçe', 'uk' => 'Українська',
            'ru' => 'Русский', 'sr' => 'Srpski', 'ja' => '日本語', 'zh' => '中文',
        ];
    }

    /** Languages we ship default texts for. Everything else starts untranslated. */
    public static function translatedLanguages(): array
    {
        static $cache = null;

        if ($cache !== null) {
            return $cache;
        }

        $out = self::reviewedLanguages();

        foreach (array_keys(self::languages()) as $code) {
            if (!in_array($code, $out, true) && self::bannerOverlay($code) !== []) {
                $out[] = $code;
            }
        }

        return $cache = $out;
    }

    /**
     * Sprachen, deren Bannertexte ein Mensch gelesen und freigegeben hat.
     *
     * Der Unterschied zu translatedLanguages() ist kein Formalismus. Ein
     * Bannertext holt eine Einwilligung ein; eine unglückliche Formulierung
     * kann sie unwirksam machen. Maschinell erstellte Sprachpakete sind
     * auswählbar — aber die Oberfläche muss sagen, dass sie ungeprüft sind,
     * sonst verkauft das Produkt eine Sicherheit, die es nicht hat.
     *
     * Wer ein Paket juristisch prüfen lässt, trägt den Code hier nach.
     *
     * @return list<string>
     */
    public static function reviewedLanguages(): array
    {
        return ['de', 'en'];
    }
}
