<?php

declare(strict_types=1);

namespace Consented\Property;

use Consented\Auth\Permission;
use Consented\Core\Clock;
use Consented\Core\Db;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\Sanitizer;

final class TextController extends PropertyPageController
{
    public function index(Request $request): Response
    {
        $property = $this->property($request);

        $language = (string) $request->input('lang', $property->defaultLanguage());
        if (!in_array($language, $property->enabledLanguageCodes(), true)) {
            $language = $property->defaultLanguage();
        }

        $custom   = $property->customTexts()[$language] ?? [];
        $defaults = Defaults::textsFor($language);

        $groups = [
            __('property.texts.group_banner') => ['banner_title', 'banner_description', 'btn_accept_all',
                'btn_reject_all', 'btn_settings'],
            __('property.texts.group_details') => ['modal_title', 'modal_description', 'btn_save',
                'btn_withdraw', 'btn_open_settings', 'tab_categories', 'tab_advanced', 'tab_about', 'about_text'],
            __('property.texts.group_categories') => ['category_essential_name', 'category_essential_description',
                'category_functional_name', 'category_functional_description',
                'category_analytics_name', 'category_analytics_description',
                'category_marketing_name', 'category_marketing_description'],
            __('property.texts.group_labels') => ['label_always_active', 'label_essential', 'label_services_count',
                'label_provider', 'label_retention', 'label_legal_basis', 'label_third_country',
                'label_yes', 'label_cookie_name', 'label_cookie_host', 'label_cookie_duration',
                'label_cookie_purpose', 'label_show_details', 'label_hide_details',
                'label_show_services', 'label_hide_services',
                'label_privacy_policy', 'label_consent_id', 'label_state_from',
                'link_privacy_policy', 'link_imprint',
                // Only ever spoken, never shown. Editable all the same: a key
                // that update() would skip because index() never rendered it
                // would be the one string an operator cannot reach.
                'sr_saved', 'sr_withdrawn'],
            __('property.texts.group_declaration') => [
                'declaration_title', 'declaration_intro', 'declaration_empty',
                'declaration_no_cookies',
                'legal_basis_consent', 'legal_basis_legitimate_interest',
                'legal_basis_contract'],
            // Die gezählten Einheiten tragen ihre Pluralformen mit `|`
            // getrennt. Wer sie hier bearbeitet, muss die Anzahl der Formen
            // seiner Sprache treffen — eine zu wenig lässt die Zelle leer.
            __('property.texts.group_duration') => [
                'duration_second', 'duration_minute', 'duration_hour', 'duration_day',
                'duration_week', 'duration_month', 'duration_year',
                'duration_session', 'duration_persistent', 'duration_unknown',
                'duration_varies', 'duration_upto'],
        ];

        return $this->propertyView('properties/texts', $property, 'texts', [
            'language'  => $language,
            'languages' => $property->languages(),
            'catalogue' => Defaults::languages(),
            'groups'    => $groups,
            'defaults'  => $defaults,
            'custom'    => $custom,
        ]);
    }

    public function update(Request $request): Response
    {
        $property = $this->property($request, Permission::EDIT_PROPERTY);

        $language = (string) $request->input('lang', $property->defaultLanguage());
        if (!in_array($language, $property->enabledLanguageCodes(), true)) {
            $language = $property->defaultLanguage();
        }

        $defaults = Defaults::textsFor($language);
        $user     = $this->requireUser();
        $changed  = 0;

        foreach (Defaults::textKeys() as $key) {
            $submitted = $request->input('text_' . $key);

            if ($submitted === null) {
                continue;
            }

            $value = Sanitizer::html($submitted);

            // Identical to the shipped default: drop the override so the key
            // keeps tracking future improvements to that default.
            if ($value === '' || $value === $defaults[$key]) {
                $deleted = Db::run(
                    'DELETE FROM property_texts WHERE property_id = :p AND language_code = :l AND text_key = :k',
                    ['p' => $property->id(), 'l' => $language, 'k' => $key]
                )->rowCount();

                $changed += $deleted;
                continue;
            }

            Db::run(
                'INSERT INTO property_texts
                    (property_id, language_code, text_key, value, is_customized, updated_by, created_at, updated_at)
                 VALUES (:p, :l, :k, :v, 1, :u, :now, :now2)
                 ON DUPLICATE KEY UPDATE
                    value = VALUES(value), is_customized = 1,
                    updated_by = VALUES(updated_by), updated_at = VALUES(updated_at)',
                [
                    'p' => $property->id(), 'l' => $language, 'k' => $key, 'v' => $value,
                    'u' => $user->id(), 'now' => Clock::now(), 'now2' => Clock::now(),
                ]
            );

            $changed++;
        }

        $this->flash('success', $changed > 0 ? __('flash.text.saved') : __('flash.common.no_changes'));

        return $this->redirect($this->propertyUrl($property, '/texts?lang=' . urlencode($language)));
    }

    public function reset(Request $request): Response
    {
        $property = $this->property($request, Permission::EDIT_PROPERTY);

        $language = (string) $request->input('lang', $property->defaultLanguage());
        $key      = (string) $request->input('key', '');

        if ($key !== '') {
            Db::run(
                'DELETE FROM property_texts WHERE property_id = :p AND language_code = :l AND text_key = :k',
                ['p' => $property->id(), 'l' => $language, 'k' => $key]
            );
            $this->flash('success', __('flash.text.reset_one'));
        } else {
            Db::run(
                'DELETE FROM property_texts WHERE property_id = :p AND language_code = :l',
                ['p' => $property->id(), 'l' => $language]
            );
            $this->flash('success', __('flash.text.reset_all'));
        }

        return $this->redirect($this->propertyUrl($property, '/texts?lang=' . urlencode($language)));
    }
}
