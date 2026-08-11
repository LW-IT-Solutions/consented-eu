<?php

declare(strict_types=1);

namespace Consented\Property;

use Consented\Core\Controller;
use Consented\Core\Db;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Org\Organization;

final class DashboardController extends Controller
{
    public function index(Request $request): Response
    {
        $user       = $this->requireUser();
        $properties = Property::accessibleTo($user->id());

        return $this->view('dashboard/index', [
            'title'         => 'Dashboard',
            'activeNav'     => 'dashboard',
            'properties'    => $properties,
            'organization'  => Organization::primaryFor($user),
            'needsVerify'   => !$user->isVerified(),
            'alerts'        => $this->alerts($properties),
            'totals'        => $this->totals($properties),
        ]);
    }

    /**
     * Things that are wrong right now and can be acted on.
     *
     * Deliberately not a generic notification feed: an alert here always names
     * one property and one next step.
     *
     * @param  list<array<string,mixed>> $properties
     * @return list<array{level:string,text:string,href:string,label:string}>
     */
    private function alerts(array $properties): array
    {
        $alerts = [];

        foreach ($properties as $p) {
            $base = '/properties/' . $p['public_id'];

            if ((int) $p['config_version'] === 0) {
                $alerts[] = [
                    'level' => 'info',
                    'text'  => sprintf('„%s" ist noch nicht veröffentlicht.', $p['name']),
                    'href'  => $base,
                    'label' => 'Jetzt veröffentlichen',
                ];
                continue;
            }

            if ((int) $p['domain_count'] === 0) {
                $alerts[] = [
                    'level' => 'warning',
                    'text'  => sprintf('„%s" hat keine Domain hinterlegt — die Konfiguration wird nicht ausgeliefert.', $p['name']),
                    'href'  => $base . '/domains',
                    'label' => 'Domain hinzufügen',
                ];
                continue;
            }

            if ($p['first_consent_at'] === null) {
                $alerts[] = [
                    'level' => 'warning',
                    'text'  => sprintf('„%s" hat noch keine Einwilligung empfangen. Ist der Code eingebaut?', $p['name']),
                    'href'  => $base . '/integration',
                    'label' => 'Einbindung prüfen',
                ];
                continue;
            }

            // Live, integrated, then silent for three days — usually a
            // deployment that dropped the snippet.
            if ($p['last_consent_at'] !== null && strtotime((string) $p['last_consent_at'] . ' UTC') < time() - 3 * 86400) {
                $alerts[] = [
                    'level' => 'warning',
                    'text'  => sprintf('„%s" hat seit drei Tagen keine Einwilligung mehr empfangen.', $p['name']),
                    'href'  => $base . '/integration',
                    'label' => 'Einbindung prüfen',
                ];
            }
        }

        return $alerts;
    }

    /**
     * @param  list<array<string,mixed>> $properties
     * @return array{consents:int,accepts:int,rate:float,live:int}
     */
    private function totals(array $properties): array
    {
        $consents = 0;
        $accepts  = 0;
        $live     = 0;

        foreach ($properties as $p) {
            $consents += (int) $p['consents_7d'];
            $accepts  += (int) $p['accepts_7d'];
            if ($p['status'] === 'live' && (int) $p['config_version'] > 0) {
                $live++;
            }
        }

        return [
            'consents' => $consents,
            'accepts'  => $accepts,
            'rate'     => $consents > 0 ? ($accepts / $consents) * 100 : 0.0,
            'live'     => $live,
        ];
    }
}
