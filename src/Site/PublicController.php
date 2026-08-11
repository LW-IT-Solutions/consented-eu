<?php

declare(strict_types=1);

namespace Consented\Site;

use Consented\Core\Controller;
use Consented\Core\Db;
use Consented\Core\Env;
use Consented\Core\Exception\HttpException;
use Consented\Core\Lang;
use Consented\Core\Settings;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\Url;
use Consented\Property\Defaults;
use Consented\Property\DesignController;

final class PublicController extends Controller
{
    public function home(Request $request): Response
    {
        // Two independent switches. The vhost sets CE_COMING_SOON per host, so
        // the public domain can be a teaser while dev.consented.eu serves the
        // real thing from the same code and database. The database flag is the
        // instance-wide override for anyone without vhost access.
        if (Env::bool('CE_COMING_SOON') || Settings::bool('coming_soon')) {
            return $this->view('site/coming-soon', [
                'title'       => 'Demnächst verfügbar',
                'description' => 'consented.eu — freie Consent-Management-Plattform aus Europa. '
                    . 'Wir sind bald so weit.',
                'note'        => Settings::get('launch_note'),
            ], 'layouts/standalone');
        }

        return $this->view('site/home', [
            'title'       => null,
            'description' => 'Kostenlose Consent-Management-Plattform aus Europa: IAB TCF v2.2, '
                . 'Google Consent Mode v2, automatisches Script-Blocking und ein revisionssicheres '
                . 'Einwilligungsprotokoll. Gehostet oder selbst betrieben.',
            'stats'       => $this->publicStats(),
        ], 'layouts/marketing');
    }

    public function features(Request $request): Response
    {
        return $this->view('site/features', [
            'title' => 'Funktionen',
        ], 'layouts/marketing');
    }

    public function selfHosting(Request $request): Response
    {
        return $this->view('site/self-hosting', [
            'title' => 'Self-Hosting',
        ], 'layouts/marketing');
    }

    public function docs(Request $request): Response
    {
        return $this->view('site/docs', [
            'title' => 'Dokumentation',
        ], 'layouts/marketing');
    }

    public function legal(Request $request): Response
    {
        $page = $request->param('page');

        $known = [
            'imprint' => 'Impressum',
            'privacy' => 'Datenschutzerklärung',
            'terms'   => 'Nutzungsbedingungen',
            'dpa'     => 'Auftragsverarbeitungsvertrag',
        ];

        if (!isset($known[$page])) {
            throw new HttpException(404);
        }

        return $this->view('site/legal/' . $page, [
            'title' => $known[$page],
        ], 'layouts/marketing');
    }

    /**
     * Public self-service lookup for a consent ID.
     *
     * Art. 15 and 17 GDPR give the end user — the visitor of our customer's
     * site, not our customer — the right to see and delete their record. They
     * have no account here, so the consent ID printed in the banner is the
     * only handle they have.
     */
    public function consentLookup(Request $request): Response
    {
        return $this->view('site/consent-lookup', [
            'title' => 'Einwilligung nachschlagen',
        ], 'layouts/marketing');
    }

    /**
     * Sandboxed preview frame for the landing page demo.
     *
     * Renders a real page that loads the real cmp.js with a synthetic config.
     * It is a live instance of the product, not a screenshot or a rebuilt
     * imitation — so what a visitor plays with here is what they get.
     */
    public function demoFrame(Request $request): Response
    {
        $presets = Defaults::presets();

        $presetKey = (string) $request->input('preset', 'eu_official');
        $preset    = $presets[$presetKey] ?? $presets['eu_official'];

        $layout = (string) $request->input('layout', 'banner_bottom');
        if (!array_key_exists($layout, Defaults::layouts())) {
            $layout = 'banner_bottom';
        }

        $language = (string) $request->input('lang', 'de');
        if (!in_array($language, Defaults::translatedLanguages(), true)) {
            $language = 'de';
        }

        $texts = [];
        foreach (Defaults::translatedLanguages() as $locale) {
            $texts[$locale] = Defaults::textsFor($locale);
        }

        $buttonOrder = Defaults::buttonOrder($request->input('order'));
        $scrollbar   = Defaults::scrollbar($request->input('scrollbar'));

        $config = [
            'propertyId'      => 'demo',
            'version'         => 1,
            'variant'         => 'demo',
            'language'        => $language,
            'forceLanguage'   => $language,
            'defaultLanguage' => 'de',
            'languages'       => Defaults::translatedLanguages(),
            'layout'          => $layout,
            'buttonOrder'     => $buttonOrder,
            'scrollbar'       => $scrollbar,
            /*
             * Die Farben des Presets, überschrieben von dem, was in der
             * Designmaske gerade eingetippt ist.
             *
             * Vorher zeigte die Vorschau ausschließlich das Preset. Wer eine
             * Farbe änderte, sah nichts davon — die Antwort auf „sieht das gut
             * aus" kam erst nach dem Speichern und Veröffentlichen, also genau
             * dann, wenn sie nichts mehr nützt.
             *
             * Geprüft wird mit derselben Methode, die auch beim Speichern
             * greift; ungültige Werte fallen heraus, statt in das Stylesheet
             * des Frames zu wandern.
             */
            'tokens'          => DesignController::tokensFromRequest($request, $preset['tokens']),
            'customCss'       => '',
            'logo'            => null,
            // Full-width bars sit flush against the edge and read as part of
            // the page; a centred box or modal reads as a dialog and gets a
            // backdrop so the page behind it recedes.
            'backdrop'        => $layout !== 'banner_bottom' && $layout !== 'banner_top',
            'backdropBlur'    => $layout === 'box_bottom',
            'privacyPolicyUrl' => Url::absolute('/legal/privacy'),
            'imprintUrl'      => Url::absolute('/legal/imprint'),
            'placeholders'    => [
                'company'            => 'Beispiel GmbH',
                'privacy_policy_url' => Url::absolute('/legal/privacy'),
            ],
            'texts'      => $texts,
            'categories' => array_map(
                static fn (array $c): array => [
                    'key'      => $c['key'],
                    'required' => $c['required'],
                    'default'  => $c['default'],
                ],
                Defaults::categories()
            ),
            'services'   => self::demoServices(),
            'settings'   => array_merge(Defaults::settings(), [
                'gcmMapping'   => array_flip(Defaults::gcmMapping()),
                // Die Vorschau merkt sich nichts.
                //
                // Vorher schrieb sie ein echtes Cookie und hatte showRelaunch
                // abgeschaltet — nach einem Klick auf „Akzeptieren" war das
                // Banner weg, das Cookie sagte „erledigt", und nichts brachte
                // es zurück. Die Vorschau war nach einer Sekunde Benutzung tot.
                //
                // Jetzt: keine Speicherung, also erscheint das Banner bei jedem
                // Aufbau neu — und der Wiederöffnen-Knopf ist AN, damit man ohne
                // Neuladen zurückkommt und ihn gleich mitbeurteilen kann. Er ist
                // Teil des Produkts; ihn in der Vorschau zu verstecken hieß, ein
                // Element zu verbergen, das auf der Kundenseite sichtbar ist.
                'storage'      => 'none',
                'showRelaunch' => true,
                'respectGpc'   => false,
            ]),
            // The demo must never write into the real consent log.
            'endpoints'  => [],
        ];

        // Farbschema der umgebenden Seite. Ein iframe sieht das data-theme des
        // Elternfensters nicht, deshalb reicht die Seite es als Parameter durch.
        // Ohne Angabe hell — das ist auch das, was ein Suchmaschinen-Abruf oder
        // ein direkter Aufruf der Adresse bekommt.
        $frameTheme = (string) $request->input('theme', 'light') === 'dark' ? 'dark' : 'light';

        return Response::html(
            \Consented\Core\View::render('site/demo-frame', [
                'config'     => $config,
                'frameTheme' => $frameTheme,
                // Die Platzhaltertexte standen als deutsche Zeichenketten im
                // Template und blieben damit auch auf einer englischen Seite
                // deutsch.
                'mockTitle'  => Lang::inLocale($language, 'site.demo.mock_title'),
                'mockBody'   => Lang::inLocale($language, 'site.demo.mock_body'),
            ], null)
        );
    }

    /** @return list<array<string,mixed>> */
    private static function demoServices(): array
    {
        return [
            [
                'id' => 'consented-cmp', 'name' => 'consented.eu CMP', 'provider' => 'consented.eu',
                'category' => 'essential', 'essential' => true,
                'purpose' => 'Speichert deine Datenschutz-Auswahl, damit sie beim nächsten Besuch gilt.',
                'retention' => '12 Monate', 'legalBasis' => 'Berechtigtes Interesse / Pflicht',
                'cookies' => [
                    ['name' => 'consented', 'host' => 'diese Website', 'duration' => '12 Monate',
                     'purpose' => 'Gespeicherte Einwilligungsentscheidung'],
                ],
                'patterns' => [],
            ],
            [
                'id' => 'demo-analytics', 'name' => 'Beispiel-Statistik', 'provider' => 'Beispiel Analytics',
                'category' => 'analytics', 'essential' => false,
                'purpose' => 'Misst anonymisiert, welche Seiten aufgerufen werden.',
                'retention' => '14 Monate', 'legalBasis' => 'Einwilligung', 'thirdCountry' => false,
                'cookies' => [
                    ['name' => '_ga', 'host' => '.example.com', 'duration' => '2 Jahre',
                     'purpose' => 'Unterscheidung von Besuchern'],
                    ['name' => '_ga_XXXX', 'host' => '.example.com', 'duration' => '2 Jahre',
                     'purpose' => 'Sitzungsstatus'],
                ],
                'patterns' => ['googletagmanager.com/gtag'],
            ],
            [
                'id' => 'demo-video', 'name' => 'Video-Einbettung', 'provider' => 'Beispiel Video',
                'category' => 'functional', 'essential' => false,
                'purpose' => 'Erlaubt das Abspielen eingebetteter Videos direkt auf der Seite.',
                'retention' => 'Sitzung', 'legalBasis' => 'Einwilligung', 'thirdCountry' => true,
                'providerCountry' => 'US',
                'cookies' => [
                    ['name' => 'VISITOR_INFO1_LIVE', 'host' => '.youtube.com', 'duration' => '6 Monate',
                     'purpose' => 'Wiedergabeeinstellungen'],
                ],
                'patterns' => ['youtube.com/embed'],
            ],
            [
                'id' => 'demo-ads', 'name' => 'Werbenetzwerk', 'provider' => 'Beispiel Ads',
                'category' => 'marketing', 'essential' => false,
                'purpose' => 'Spielt personalisierte Werbung aus und misst deren Wirkung.',
                'retention' => '13 Monate', 'legalBasis' => 'Einwilligung', 'thirdCountry' => true,
                'providerCountry' => 'US',
                'cookies' => [
                    ['name' => '_fbp', 'host' => '.example.com', 'duration' => '3 Monate',
                     'purpose' => 'Zuordnung von Werbekontakten'],
                ],
                'patterns' => ['connect.facebook.net'],
            ],
        ];
    }

    /**
     * Aggregate counters for the landing page.
     *
     * Real numbers from this instance, never invented. A fresh install shows
     * zeroes and the template hides the block rather than printing a fiction.
     *
     * @return array{properties:int,consents:int,domains:int}
     */
    private function publicStats(): array
    {
        try {
            return [
                'properties' => (int) Db::value('SELECT COUNT(*) FROM properties WHERE deleted_at IS NULL'),
                'consents'   => (int) Db::value('SELECT COUNT(*) FROM consents'),
                'domains'    => (int) Db::value('SELECT COUNT(*) FROM property_domains WHERE verified_at IS NOT NULL'),
            ];
        } catch (\Throwable) {
            // The marketing page must render even if the database is down.
            return ['properties' => 0, 'consents' => 0, 'domains' => 0];
        }
    }
}
