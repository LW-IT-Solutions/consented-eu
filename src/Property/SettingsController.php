<?php

declare(strict_types=1);

namespace Consented\Property;

use Consented\Auth\Permission;
use Consented\Core\Audit;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\Sanitizer;

final class SettingsController extends PropertyPageController
{
    public function show(Request $request): Response
    {
        $property = $this->property($request);

        return $this->propertyView('properties/settings', $property, 'settings', [
            'settings' => $property->settings(),
        ]);
    }

    public function update(Request $request): Response
    {
        $property = $this->property($request, Permission::EDIT_PROPERTY);
        $before   = $property->settings();

        $this->validate($request->post, [
            'name'             => 'required|max:160',
            'privacyPolicyUrl' => 'url',
            'imprintUrl'       => 'url',
            'consentLifetimeDays' => 'int|between:1,730',
        ], $this->propertyUrl($property, '/settings'));

        $property->update(['name' => Sanitizer::text((string) $request->input('name', $property->name()))]);

        $property->mergeSettings([
            'privacyPolicyUrl'    => (string) $request->input('privacyPolicyUrl', ''),
            'imprintUrl'          => (string) $request->input('imprintUrl', ''),
            'consentLifetimeDays' => max(1, min(730, (int) $request->input('consentLifetimeDays', '365'))),
            'storage'             => in_array($request->input('storage'), ['cookie', 'localstorage', 'both'], true)
                ? (string) $request->input('storage') : 'cookie',
            'crossSubdomain'      => $request->boolean('crossSubdomain'),
            'showRejectAll'       => $request->boolean('showRejectAll'),
            'showRelaunch'        => $request->boolean('showRelaunch'),
            'relaunchPosition'    => $request->input('relaunchPosition') === 'right' ? 'right' : 'left',
            'repromptOnChange'    => $request->boolean('repromptOnChange'),
            'respectGpc'          => $request->boolean('respectGpc'),
            // gcmMode ist absichtlich weg. Der Schalter erreichte den Browser
            // nie, und er kommt nicht zurück: ob Googles Tag vor der
            // Einwilligung lädt, hängt daran, ob es als Dienst blockiert ist.
            // Alte Werte bleiben unschädlich in der settings-JSON liegen,
            // weil runtimeSettings() eine Positivliste ist.
            'googleConsentMode'   => $request->boolean('googleConsentMode'),
            'languageDetection'   => in_array($request->input('languageDetection'), ['browser', 'html', 'default'], true)
                ? (string) $request->input('languageDetection') : 'browser',

            /*
             * dataLayer. Die zwei Ereignisnamen gehen durch denselben Validator
             * wie in der Runtime; ein unzulässiger Wert fällt auf die Vorgabe
             * zurück, statt gespeichert und später doppelt geprüft zu werden.
             *
             * Anschließend die Kollisionsprüfung: tragen beide denselben Namen,
             * wären Boot und Änderung in GTM nicht unterscheidbar. Der zweite
             * fällt dann auf seine Vorgabe.
             */
            'dataLayerEnabled'     => $request->boolean('dataLayerEnabled'),
            'dataLayerName'        => Defaults::dataLayerName((string) $request->input('dataLayerName', '')),
            'dataLayerEventReady'  => Defaults::dataLayerEventName(
                (string) $request->input('dataLayerEventReady', ''),
                'consented_ready'
            ),
            'dataLayerEventUpdate' => $this->distinctEventName($request),
            // Leeres Feld = Ereignis aus. Deshalb der Sonderfall vor dem
            // Validator, der sonst auf eine Vorgabe heben wuerde.
            'dataLayerEventWithdrawn' => $this->eventNames($request)['withdrawn'],
            'dataLayerCategoryEvents' => Defaults::categoryEvents(
                (string) $request->input('dataLayerCategoryEvents', 'off')
            ),
            'dataLayerFlatKeys'      => $request->boolean('dataLayerFlatKeys'),
            'dataLayerGoogleSignals' => $request->boolean('dataLayerGoogleSignals'),
            'dataLayerUiEvents'      => $request->boolean('dataLayerUiEvents'),
            // Never settable from the form. Implied consent is not lawful in
            // the EEA, so the only way to turn it on would be editing the
            // database by hand — deliberately.
            'impliedConsent'      => false,
        ]);

        Audit::log(
            Audit::ACTION_PROPERTY_UPDATED,
            $this->requireUser()->id(),
            $property->orgId(),
            $property->id(),
            'property',
            $property->publicId(),
            Audit::diff($before, $property->settings()),
            $request->ip()
        );

        $this->flash('success', __('flash.settings.saved_publish_hint'));

        return $this->redirect($this->propertyUrl($property, '/settings'));
    }

    /**
     * Der Name des Aenderungs-Ereignisses, garantiert verschieden vom Boot-Namen.
     *
     * Tragen beide denselben Namen, kann ein GTM-Trigger nicht unterscheiden, ob
     * gerade eine Seite geladen wurde oder jemand seine Entscheidung geaendert
     * hat. Der zweite faellt dann auf seine Vorgabe zurueck — lieber ein Name,
     * den der Betreiber nicht gewaehlt hat, als zwei, die dasselbe bedeuten.
     */
    private function distinctEventName(Request $request): string
    {
        return $this->eventNames($request)['update'];
    }

    /**
     * Die drei Ereignisnamen, garantiert paarweise verschieden.
     *
     * Dreifach und nicht nur ready gegen update: setzt jemand den Boot-Namen auf
     * den des Widerrufs, feuert ein Aufräum-Tag bei jedem Seitenaufruf und löscht
     * Cookies, die niemand entzogen hat. Der spätere Name weicht, weil der
     * frühere in der Maske darüber steht — was zuerst gelesen wird, bleibt.
     *
     * @return array{ready:string,update:string,withdrawn:string}
     */
    private function eventNames(Request $request): array
    {
        $ready = Defaults::dataLayerEventName(
            (string) $request->input('dataLayerEventReady', ''),
            'consented_ready'
        );

        $update = Defaults::dataLayerEventName(
            (string) $request->input('dataLayerEventUpdate', ''),
            'consented_update'
        );

        if ($update === $ready) {
            $update = 'consented_update';
        }

        $raw = trim((string) $request->input('dataLayerEventWithdrawn', ''));
        $withdrawn = $raw === '' ? '' : Defaults::dataLayerEventName($raw, '');

        // Kollidiert der Widerruf, wird er abgeschaltet statt auf einen Namen
        // gesetzt, den der Betreiber nicht gewählt hat: ein Ereignis, das er
        // nicht erwartet, wäre schlimmer als keines.
        if ($withdrawn !== '' && ($withdrawn === $ready || $withdrawn === $update)) {
            $withdrawn = '';
        }

        return ['ready' => $ready, 'update' => $update, 'withdrawn' => $withdrawn];
    }
}
