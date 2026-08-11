<?php

declare(strict_types=1);

namespace Consented\Property;

/**
 * Translations for the free-text fields of the DPS catalogue.
 *
 * A lookup table, not a message catalogue: the key is the German original as
 * it stands in `dps_catalog.json`, the value is its translation. There are no
 * invented identifiers to keep in sync, and a catalogue entry whose German
 * text is edited simply falls back to German until it is translated again —
 * which is the right failure. A stale translation of a corrected text would be
 * worse than an untranslated one, because nothing about it looks wrong.
 *
 * Only `purposes` and `cookies[].purpose` are covered. `data_collected` is
 * rendered nowhere — neither in the banner nor in the declaration — and 175
 * further strings were left untranslated once that was measured rather than
 * assumed.
 *
 * Durations do not belong here either. They are structured values and are
 * rendered by `Duration::localise()` from unit words, so "12 months" needs one
 * word per language rather than one entry per distinct duration.
 *
 * Unlike `lang/banner/`, these files are part of the repository. The catalogue
 * is ODbL 1.0; a translated version of its contents is a derivative database,
 * and ODbL 4.4 requires it to be offered under the same licence once it is
 * used publicly. The banner texts are MIT-licensed code and may be withheld.
 * The difference is the licence of the source, not a preference of ours.
 */
final class CatalogText
{
    /**
     * German original => translation, for one language.
     *
     * @return array<string,string>
     */
    public static function overlay(string $locale): array
    {
        /** @var array<string,array<string,string>> $cache */
        static $cache = [];

        if (array_key_exists($locale, $cache)) {
            return $cache[$locale];
        }

        // Der Sprachcode landet in einem Dateipfad. Zwei Kleinbuchstaben,
        // sonst nichts — sonst waere `../../` ein gueltiger "Sprachcode".
        if (preg_match('/^[a-z]{2}$/', $locale) !== 1) {
            return $cache[$locale] = [];
        }

        $file = CONSENTED_ROOT . '/lang/catalog/' . $locale . '.php';

        if (!is_file($file)) {
            return $cache[$locale] = [];
        }

        $loaded = require $file;

        if (!is_array($loaded)) {
            return $cache[$locale] = [];
        }

        $out = [];

        foreach ($loaded as $german => $translated) {
            if (is_string($german) && is_string($translated)
                && $german !== '' && $translated !== '') {
                $out[$german] = $translated;
            }
        }

        return $cache[$locale] = $out;
    }

    /**
     * One field in one language, falling back to the German original.
     *
     * The lookup normalises whitespace because the translation files were
     * built from normalised source strings, and a catalogue entry that gained
     * a line break should not silently lose its translation.
     */
    public static function translate(string $german, string $locale): string
    {
        $german = trim($german);

        if ($german === '') {
            return '';
        }

        $overlay = self::overlay($locale);

        if (isset($overlay[$german])) {
            return $overlay[$german];
        }

        $normalised = (string) preg_replace('/\s+/u', ' ', $german);

        return $overlay[$normalised] ?? $german;
    }

    /**
     * A field as a plain string when every language agrees, otherwise a map.
     *
     * Same shape as `ConfigBuilder::localiseDurations()` produces, and the
     * runtime's `localised()` already reads both. Emitting a string for the
     * unanimous case matters: a property with one language would otherwise
     * ship a one-entry object for every purpose in its bundle.
     *
     * @param  list<string>        $languages
     * @return string|array<string,string>
     */
    public static function localise(string $german, array $languages): string|array
    {
        $german = trim($german);

        if ($german === '' || $languages === []) {
            return $german;
        }

        $map = [];

        foreach ($languages as $code) {
            $map[$code] = self::translate($german, $code);
        }

        return count(array_unique($map)) === 1 ? (string) reset($map) : $map;
    }

    /** @return list<string> languages that ship a translation file */
    public static function languages(): array
    {
        static $cache = null;

        if ($cache !== null) {
            return $cache;
        }

        $out = [];

        foreach (glob(CONSENTED_ROOT . '/lang/catalog/*.php') ?: [] as $file) {
            $code = basename($file, '.php');

            if (preg_match('/^[a-z]{2}$/', $code) === 1) {
                $out[] = $code;
            }
        }

        sort($out);

        return $cache = $out;
    }
}
