<?php

declare(strict_types=1);

namespace Consented\Property;

use Consented\Auth\Permission;
use Consented\Core\Clock;
use Consented\Core\Db;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\Sanitizer;

final class DesignController extends PropertyPageController
{
    /**
     * Token keys the editor exposes, mapped to their catalogue key.
     *
     * Anything not listed here is ignored on save.
     */
    /**
     * Geprüfte Token-Überschreibungen aus den `token_*`-Feldern.
     *
     * Wird von zwei Stellen benutzt: vom Speichern hier und von der
     * Live-Vorschau, die dieselben Feldnamen an /demo/frame schickt. Deshalb
     * öffentlich und deshalb an einer Stelle — Tokens landen unverändert in
     * einem Stylesheet, und eine zweite Kopie dieser Muster wäre genau der Ort,
     * an dem eine Farbe aus einer URL ungeprüft dort ankommt.
     *
     * Was nicht auf das Muster passt, wird verworfen und nicht korrigiert: der
     * bisherige Wert ist immer eine gültige Farbe, ein halb getippter
     * Hexwert wäre keine.
     *
     * @param  array<string,mixed> $base
     * @return array<string,mixed>
     */
    public static function tokensFromRequest(Request $request, array $base = []): array
    {
        $out = $base;

        foreach (array_keys(self::COLOR_TOKENS) as $key) {
            $value = (string) $request->input('token_' . $key, '');

            if (preg_match('/^#(?:[0-9a-fA-F]{3}|[0-9a-fA-F]{6})$/', $value) === 1) {
                $out[$key] = strtoupper($value);
            }
        }

        foreach (['radius', 'buttonRadius', 'maxWidth'] as $key) {
            $value = trim((string) $request->input('token_' . $key, ''));

            if (preg_match('/^\d{1,4}(px|rem|%)$/', $value) === 1) {
                $out[$key] = $value;
            }
        }

        return $out;
    }

    private const COLOR_TOKENS = [
        'primary'     => 'property.design.token_primary',
        'primaryText' => 'property.design.token_primary_text',
        'background'  => 'property.design.token_background',
        'heading'     => 'property.design.token_heading',
        'text'        => 'property.design.token_text',
        'textMuted'   => 'property.design.token_text_muted',
        'link'        => 'property.design.token_link',
        'toggleOn'    => 'property.design.token_toggle_on',
    ];

    /**
     * Token key => label, in the current interface language.
     *
     * @return array<string,string>
     */
    private static function colorTokens(): array
    {
        $out = [];

        foreach (self::COLOR_TOKENS as $key => $catalogueKey) {
            $out[$key] = __($catalogueKey);
        }

        return $out;
    }

    public function show(Request $request): Response
    {
        $property = $this->property($request);
        $design   = $property->design() ?? [];

        $tokens = json_decode((string) ($design['tokens'] ?? '{}'), true);
        if (!is_array($tokens)) {
            $tokens = Defaults::presets()['eu_official']['tokens'];
        }

        return $this->propertyView('properties/design', $property, 'design', [
            'design'      => $design,
            'tokens'      => $tokens,
            'colorTokens' => self::colorTokens(),
            'presets'     => Defaults::presets(),
            'layouts'     => Defaults::layouts(),
            'buttonOrders' => Defaults::buttonOrders(),
            'buttonOrder'  => Defaults::buttonOrder($design['button_order'] ?? null),
            'scrollbars'  => Defaults::scrollbars(),
            'scrollbar'   => Defaults::scrollbar($design['scrollbar'] ?? null),
            'contrast'    => $this->contrastReport($tokens),
        ]);
    }

    public function update(Request $request): Response
    {
        $property = $this->property($request, Permission::EDIT_PROPERTY);
        $design   = $property->design() ?? [];

        // The preset key arrives as the value of the clicked button. It used to
        // sit in a hidden field that an onclick handler filled — which the CSP
        // discards, so no preset was ever applied.
        $preset = (string) $request->input('apply_preset', '');

        if ($preset !== '' && isset(Defaults::presets()[$preset])) {
            $definition = Defaults::presets()[$preset];

            Db::update('property_design', [
                'preset'     => $preset,
                'layout'     => $definition['layout'],
                'tokens'     => (string) json_encode($definition['tokens']),
                'backdrop'   => str_starts_with($definition['layout'], 'modal') ? 1 : 0,
                // Ein Preset darf eine Reihenfolge mitbringen; bringt es keine,
                // bleibt die des Betreibers stehen statt auf die Vorgabe zu
                // springen — ein Farbwechsel soll seine Anordnung nicht kippen.
                'button_order' => Defaults::buttonOrder(
                    $definition['buttonOrder'] ?? ($design['button_order'] ?? null)
                ),
                'updated_at' => Clock::now(),
            ], ['property_id' => $property->id()]);

            $this->flash('success', __('flash.design.preset_applied', ['name' => (string) $definition['label']]));

            return $this->redirect($this->propertyUrl($property, '/design'));
        }

        $tokens = json_decode((string) ($design['tokens'] ?? '{}'), true);
        if (!is_array($tokens)) {
            $tokens = [];
        }

        $tokens = self::tokensFromRequest($request, $tokens);

        $layout = (string) $request->input('layout', (string) ($design['layout'] ?? 'banner_bottom'));
        if (!array_key_exists($layout, Defaults::layouts())) {
            $layout = 'banner_bottom';
        }

        Db::update('property_design', [
            'layout'        => $layout,
            // Ungueltige Werte fallen auf die Vorgabe zurueck statt einen
            // Knopf zu verlieren: ein Tippfehler in der Konfiguration darf
            // den Besucher nicht den Ablehnen-Knopf kosten.
            'button_order'  => Defaults::buttonOrder($request->input('button_order')),
            'scrollbar'     => Defaults::scrollbar($request->input('scrollbar')),
            'tokens'        => (string) json_encode($tokens),
            'custom_css'    => Sanitizer::css((string) $request->input('custom_css', '')),
            'backdrop'      => $request->boolean('backdrop') ? 1 : 0,
            'backdrop_blur' => $request->boolean('backdrop_blur') ? 1 : 0,
            'preset'        => 'custom',
            'updated_at'    => Clock::now(),
        ], ['property_id' => $property->id()]);

        $this->flash('success', __('flash.design.saved_publish_hint'));

        return $this->redirect($this->propertyUrl($property, '/design'));
    }

    /**
     * WCAG contrast check for the combinations a visitor actually reads.
     *
     * The banner is the one part of a site that every visitor is forced to
     * interact with, so failing AA there is worse than failing it anywhere else.
     *
     * @param  array<string,mixed> $tokens
     * @return list<array{label:string,ratio:float,passes:bool,large:bool}>
     */
    private function contrastReport(array $tokens): array
    {
        $bg      = (string) ($tokens['background'] ?? '#FFFFFF');
        $pairs   = [
            [__('property.design.contrast_text'),      (string) ($tokens['text'] ?? '#10131A'), $bg, false],
            [__('property.design.contrast_text_muted'), (string) ($tokens['textMuted'] ?? '#4A5163'), $bg, false],
            [__('property.design.contrast_heading'),   (string) ($tokens['heading'] ?? $tokens['text'] ?? '#10131A'), $bg, true],
            [__('property.design.contrast_link'),      (string) ($tokens['link'] ?? '#1B4BB8'), $bg, false],
            [__('property.design.contrast_button'),    (string) ($tokens['primaryText'] ?? '#FFFFFF'),
                                                       (string) ($tokens['primary'] ?? '#1B4BB8'), false],
        ];

        $report = [];

        foreach ($pairs as [$label, $fg, $background, $large]) {
            $ratio = self::contrastRatio($fg, $background);

            $report[] = [
                'label'  => $label,
                'ratio'  => $ratio,
                'passes' => $ratio >= ($large ? 3.0 : 4.5),
                'large'  => $large,
            ];
        }

        return $report;
    }

    public static function contrastRatio(string $foreground, string $background): float
    {
        $l1 = self::relativeLuminance($foreground);
        $l2 = self::relativeLuminance($background);

        $lighter = max($l1, $l2);
        $darker  = min($l1, $l2);

        return round(($lighter + 0.05) / ($darker + 0.05), 2);
    }

    private static function relativeLuminance(string $hex): float
    {
        $hex = ltrim(trim($hex), '#');

        if (strlen($hex) === 3) {
            $hex = $hex[0] . $hex[0] . $hex[1] . $hex[1] . $hex[2] . $hex[2];
        }

        if (strlen($hex) < 6 || preg_match('/^[0-9a-fA-F]{6}$/', substr($hex, 0, 6)) !== 1) {
            return 1.0; // Unparseable colour: treat as white so we do not claim a pass.
        }

        $channels = [];
        foreach ([0, 2, 4] as $offset) {
            $value = hexdec(substr($hex, $offset, 2)) / 255;
            $channels[] = $value <= 0.03928
                ? $value / 12.92
                : (($value + 0.055) / 1.055) ** 2.4;
        }

        return 0.2126 * $channels[0] + 0.7152 * $channels[1] + 0.0722 * $channels[2];
    }
}
