<?php

declare(strict_types=1);

namespace Consented\Property;

use Consented\Auth\Permission;
use Consented\Core\Clock;
use Consented\Core\Db;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\Settings;

final class LanguageController extends PropertyPageController
{
    public function index(Request $request): Response
    {
        $property = $this->property($request);

        return $this->propertyView('properties/languages', $property, 'languages', [
            'active'    => $property->languages(),
            'catalogue' => Defaults::languages(),
            'shipped'   => Defaults::translatedLanguages(),
            // Getrennt von `shipped`: mitgeliefert heißt nicht geprüft. Ein
            // Bannertext holt eine Einwilligung ein, und eine maschinell
            // erstellte Fassung darf in der Auswahl nicht aussehen wie eine,
            // die ein Mensch freigegeben hat.
            'reviewed'  => Defaults::reviewedLanguages(),
            // Ob der Unterschied auch angezeigt wird, entscheidet die Instanz.
            // Der Hinweis stand auf der Sprachseite jeder Property und wiederholte
            // dort eine Einschraenkung, die fuer jeden Bannertext gilt — auch fuer
            // die selbst geschriebenen. Wer ihn sehen will, schaltet ihn im
            // Admin-Bereich an; die Unterscheidung im Code bleibt unberuehrt.
            'showReview' => Settings::bool('review_notices'),
            'completion' => $this->completion($property),
        ]);
    }

    public function update(Request $request): Response
    {
        $property = $this->property($request, Permission::EDIT_PROPERTY);

        $enabled = $request->inputArray('languages');
        $default = (string) $request->input('default_language', $property->defaultLanguage());

        $catalogue = Defaults::languages();

        $enabled = array_values(array_filter(
            $enabled,
            static fn (string $code): bool => isset($catalogue[$code])
        ));

        // The default language must always ship, otherwise a visitor whose
        // language we do not have would get an empty banner.
        if (!isset($catalogue[$default])) {
            $default = 'de';
        }
        if (!in_array($default, $enabled, true)) {
            $enabled[] = $default;
        }

        Db::transaction(function () use ($property, $enabled, $default): void {
            $now = Clock::now();

            // Positional parameters throughout: a variable-length IN list
            // cannot be mixed with named placeholders in one PDO statement.
            $placeholders = implode(',', array_fill(0, count($enabled), '?'));
            Db::run(
                "DELETE FROM property_languages WHERE property_id = ? AND language_code NOT IN ({$placeholders})",
                array_merge([$property->id()], $enabled)
            );

            foreach ($enabled as $i => $code) {
                Db::run(
                    'INSERT INTO property_languages
                        (property_id, language_code, is_default, is_enabled, completion_percent, sort_order, created_at, updated_at)
                     VALUES (:p, :c, :d, 1, 0, :s, :now, :now2)
                     ON DUPLICATE KEY UPDATE
                        is_default = VALUES(is_default),
                        is_enabled = 1,
                        sort_order = VALUES(sort_order),
                        updated_at = VALUES(updated_at)',
                    [
                        'p' => $property->id(), 'c' => $code,
                        'd' => $code === $default ? 1 : 0, 's' => $i,
                        'now' => $now, 'now2' => $now,
                    ]
                );
            }

            $property->update(['default_language' => $default]);
        });

        $this->recalculateCompletion($property);

        $this->flash('success', __('flash.language.saved'));

        return $this->redirect($this->propertyUrl($property, '/languages'));
    }

    /**
     * Share of text keys that have a value for each language.
     *
     * Shipped languages start at 100 %; anything else starts empty and fills
     * up as the customer translates, so the gap is visible rather than
     * silently falling back.
     *
     * @return array<string,int>
     */
    private function completion(Property $property): array
    {
        $total  = count(Defaults::textKeys());
        $custom = $property->customTexts();
        $out    = [];

        foreach ($property->languages() as $row) {
            $code = (string) $row['language_code'];

            if (in_array($code, Defaults::translatedLanguages(), true)) {
                $out[$code] = 100;
                continue;
            }

            $filled     = count($custom[$code] ?? []);
            $out[$code] = $total > 0 ? (int) round($filled / $total * 100) : 0;
        }

        return $out;
    }

    private function recalculateCompletion(Property $property): void
    {
        foreach ($this->completion($property) as $code => $percent) {
            Db::run(
                'UPDATE property_languages SET completion_percent = :c, updated_at = :now
                  WHERE property_id = :p AND language_code = :code',
                ['c' => $percent, 'now' => Clock::now(), 'p' => $property->id(), 'code' => $code]
            );
        }
    }
}
