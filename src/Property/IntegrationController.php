<?php

declare(strict_types=1);

namespace Consented\Property;

use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\Url;

final class IntegrationController extends PropertyPageController
{
    public function show(Request $request): Response
    {
        $property = $this->property($request);

        $publicId = $property->publicId();
        $patterns = ConfigBuilder::stubPatterns($property);
        $services = ConfigBuilder::build($property, max(1, $property->configVersion()))['services'];
        $noGcm    = ($property->settings()['googleConsentMode'] ?? true) === false;

        $languages = $property->enabledLanguageCodes();
        $language  = $property->defaultLanguage();

        return $this->propertyView('properties/integration', $property, 'integration', [
            'publicId'   => $publicId,
            'stubUrl'    => Url::cdn('/sdk/dist/stub.js'),
            'cmpUrl'     => Url::cdn('/p/' . $publicId . '/cmp.js'),
            'snippet'    => $this->snippet($publicId, $patterns, $noGcm),
            'services'   => $services,
            'patterns'   => $patterns,
            'published'  => $property->isPublished(),
            'verified'   => $property->hasVerifiedDomain(),
            'domains'    => $property->domains(),

            // Cookie-Erklärung
            'declarationUrl'     => Url::cdn('/p/' . $publicId . '/cookies?lang=' . $language),
            'declarationSnippet' => $this->declarationSnippet($publicId, $language),
            'languages'          => $languages,
            'defaultLanguage'    => $language,
            'catalogue'          => Defaults::languages(),
            'primaryDomain'      => $property->primaryDomain(),
        ]);
    }

    /**
     * Der Einbett-Schnipsel für die Cookie-Erklärung.
     *
     * Zwei Zeilen, und die erste ist optional: liegt kein Zielelement vor, setzt
     * sich die Erklärung an die Stelle des Skript-Tags. Sie steht trotzdem im
     * Schnipsel, weil ein benanntes Element das ist, was ein Redaktionssystem
     * ohne Skript-Unterstützung im Inhaltsfeld noch durchlässt.
     *
     * Kein `async` und kein `defer`: das Skript braucht `document.currentScript`,
     * um sich selbst zu finden, und es rendert nichts, was den Seitenaufbau
     * blockiert — die Erklärung steht in einer Datenschutzerklärung, nicht im
     * kritischen Pfad.
     */
    private function declarationSnippet(string $publicId, string $language): string
    {
        return '<div id="consented-cookie-declaration"></div>' . "\n"
            . '<script src="' . Url::cdn('/p/' . $publicId . '/cookies.js?lang=' . $language) . '"></script>';
    }

    /**
     * The copy-paste snippet.
     *
     * The stub is a separate file rather than inlined markup because a strict
     * CSP on the customer's site would block an inline script; a src'd file
     * only needs the host allow-listed once.
     *
     * Both attributes have to travel on the tag rather than in the per-property
     * bundle: the loader runs before that bundle exists. The price is that the
     * snippet changes whenever the services or the Consent-Mode switch change,
     * and the customer has to paste it again — which the page says out loud
     * right next to it.
     *
     * @param list<string> $patterns
     */
    private function snippet(string $publicId, array $patterns, bool $noGcm = false): string
    {
        $attrs = '';

        if ($patterns !== []) {
            $attrs .= "\n        data-block=\"" . htmlspecialchars(implode('|', $patterns), ENT_QUOTES) . '"';
        }

        if ($noGcm) {
            $attrs .= "\n        data-no-gcm=\"1\"";
        }

        return '<!-- consented.eu — muss vor allen anderen Skripten stehen -->' . "\n"
            . '<script src="' . Url::cdn('/sdk/dist/stub.js') . '"' . $attrs . '></script>' . "\n"
            . '<script async src="' . Url::cdn('/p/' . $publicId . '/cmp.js') . '"></script>';
    }
}
