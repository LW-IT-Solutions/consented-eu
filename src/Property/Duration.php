<?php

declare(strict_types=1);

namespace Consented\Property;

use Consented\Core\Lang;

/**
 * Eine Laufzeit — erkannt, strukturiert gehalten, je Sprache ausgegeben.
 *
 * WARUM DAS NICHT ÜBERSETZT WIRD
 * ------------------------------
 * Der Katalog führte Laufzeiten als freien Text, und der war ein Gemisch: die
 * gepflegten Einträge deutsch („2 Jahre"), die importierten englisch („1 year"),
 * dazu „session" neben „Session" und „1 year" neben „1 Year". Gemessen an 2288
 * Vorkommen: 227 verschiedene Schreibweisen für im Grunde ein Dutzend Angaben.
 *
 * Diese Zeichenketten in 30 Sprachen zu übersetzen wäre der falsche Weg
 * gewesen — 227 × 30 Übersetzungen, und die nächste Schreibweise, die jemand
 * einträgt, fehlt wieder. Eine Dauer ist keine Prosa, sondern eine Zahl mit
 * einer Einheit. Als solche gespeichert braucht sie sieben Einheitenwörter je
 * Sprache und stimmt danach für jede Zahl, auch für eine, die heute noch
 * nirgends steht.
 *
 * 93 Prozent der Cookie-Laufzeiten und 84 Prozent der Aufbewahrungsfristen
 * lassen sich so erfassen. Der Rest bleibt freier Text und geht durch die
 * gewöhnliche Übersetzung — „bis zum Widerruf" ist keine Dauer.
 *
 * WO DIE PLURALREGEL LIEGT
 * ------------------------
 * In `Lang`, und nur dort. Diese Klasse fragt `Lang::plural()`; sie kennt selbst
 * keine Sprache. Das ist auch der Grund, warum hier gerendert wird und nicht im
 * Browser: die CLDR-Regeln stehen bewusst nicht in JavaScript.
 */
final class Duration
{
    /** Einheiten, die gezählt werden. Reihenfolge = Länge, aufsteigend. */
    private const UNITS = ['second', 'minute', 'hour', 'day', 'week', 'month', 'year'];

    /**
     * Schreibweisen, die auf eine Einheit führen.
     *
     * Deutsch und Englisch, weil der Bestand aus diesen beiden Quellen stammt.
     * Wer den Katalog aus einer dritten Sprache befüllt, erweitert hier — oder
     * trägt die Dauer gleich strukturiert ein.
     */
    private const ALIASES = [
        'second' => ['second', 'seconds', 'sec', 'secs', 'sekunde', 'sekunden'],
        'minute' => ['minute', 'minutes', 'min', 'mins', 'minuten'],
        'hour'   => ['hour', 'hours', 'hrs', 'stunde', 'stunden'],
        'day'    => ['day', 'days', 'tag', 'tage', 'tagen'],
        'week'   => ['week', 'weeks', 'woche', 'wochen'],
        'month'  => ['month', 'months', 'monat', 'monate', 'monaten'],
        'year'   => ['year', 'years', 'jahr', 'jahre', 'jahren'],
    ];

    /** Laufzeiten ohne Zahl. */
    private const SESSION = [
        'session', 'sitzung', 'session cookie', 'browser session', 'sitzungsende',
        'end of session', 'end of session (browser)', 'end of browser session',
        'bis zum sitzungsende', 'sitzungscookie',
    ];

    private const PERSISTENT = [
        'persistent', 'permanent', 'forever', 'unbegrenzt', 'never', 'nie', 'unlimited',
    ];

    private const UNKNOWN = [
        'unknown', 'unbekannt', 'n/a', 'na', '-', '–', 'keine angabe', 'undefined',
    ];

    private const VARIES = ['varies', 'variable', 'unterschiedlich', 'verschieden'];

    /** Vorsätze, die eine Obergrenze anzeigen statt einer festen Dauer. */
    private const UPTO = ['up to', 'bis zu', 'max', 'max.', 'maximal', 'ca.', 'etwa', 'about'];

    /**
     * Freien Text in eine strukturierte Dauer überführen.
     *
     * Gibt null zurück, wenn der Text keine Dauer beschreibt. Das ist kein
     * Fehler, sondern der erwartete Ausgang für „bis zum Widerruf" oder „siehe
     * Datenschutzerklärung des Anbieters" — solche Angaben bleiben Text.
     *
     * @return array{kind:string,value?:int,unit?:string,upto?:bool}|null
     */
    public static function parse(string $text): ?array
    {
        $raw = trim($text);

        if ($raw === '') {
            return null;
        }

        $norm = self::normalise($raw);

        foreach ([
            'session'    => self::SESSION,
            'persistent' => self::PERSISTENT,
            'unknown'    => self::UNKNOWN,
            'varies'     => self::VARIES,
        ] as $kind => $words) {
            if (in_array($norm, $words, true)) {
                return ['kind' => $kind];
            }
        }

        $upto = false;

        foreach (self::UPTO as $prefix) {
            if (str_starts_with($norm, $prefix . ' ')) {
                $norm = trim(substr($norm, strlen($prefix) + 1));
                $upto = true;
                break;
            }
        }

        if (preg_match('/^(\d+)\s*([a-zäöüß]+)$/u', $norm, $m) !== 1) {
            return null;
        }

        foreach (self::ALIASES as $unit => $aliases) {
            if (in_array($m[2], $aliases, true)) {
                $out = ['kind' => 'duration', 'value' => (int) $m[1], 'unit' => $unit];

                if ($upto) {
                    $out['upto'] = true;
                }

                return $out;
            }
        }

        return null;
    }

    /**
     * Eine strukturierte Dauer in einer Sprache ausgeben.
     *
     * `$texts` ist der aufgelöste Bannertext-Satz dieser Sprache, also die
     * Ausgabe von `Defaults::textsFor()`. Fehlt ein Einheitenwort, fällt die
     * Ausgabe auf die englische Vorgabe zurück, damit nie eine leere Zelle
     * entsteht.
     *
     * @param array{kind:string,value?:int,unit?:string,upto?:bool} $duration
     * @param array<string,string>                                  $texts
     */
    public static function render(array $duration, string $locale, array $texts): string
    {
        $kind = $duration['kind'] ?? '';

        if ($kind !== 'duration') {
            return self::word($texts, 'duration_' . $kind, $kind);
        }

        $value = (int) ($duration['value'] ?? 0);
        $unit  = (string) ($duration['unit'] ?? '');

        if (!in_array($unit, self::UNITS, true)) {
            return '';
        }

        $word = Lang::plural(
            self::word($texts, 'duration_' . $unit, $unit),
            $locale,
            $value
        );

        $out = $value . ' ' . $word;

        if (!empty($duration['upto'])) {
            $pattern = self::word($texts, 'duration_upto', ':duration');
            $out     = str_replace(':duration', $out, $pattern);
        }

        return $out;
    }

    /**
     * Freien Text direkt in einer Sprache ausgeben, wenn er eine Dauer ist.
     *
     * Der bequeme Weg für Aufrufer, die noch unstrukturierte Werte halten:
     * erkennt der Parser eine Dauer, kommt sie übersetzt zurück, sonst der
     * Text unverändert. Damit bleibt „bis zum Widerruf" stehen, während aus
     * „1 year" je nach Sprache „1 Jahr" oder „1 rok" wird.
     *
     * @param array<string,string> $texts
     */
    public static function localise(string $text, string $locale, array $texts): string
    {
        $parsed = self::parse($text);

        return $parsed === null ? $text : self::render($parsed, $locale, $texts);
    }

    /** @param array<string,string> $texts */
    private static function word(array $texts, string $key, string $fallback): string
    {
        $value = trim((string) ($texts[$key] ?? ''));

        return $value !== '' ? $value : $fallback;
    }

    /**
     * Kleinschreibung, Punkt am Ende weg, Mehrfachleerzeichen zusammen.
     *
     * Deckt die Schreibvarianten ab, die im Bestand tatsächlich vorkommen:
     * „Session" neben „session", „1 Year" neben „1 year", „30 days." mit Punkt.
     */
    private static function normalise(string $text): string
    {
        $out = mb_strtolower(trim($text));
        $out = rtrim($out, " \t\n\r\0\x0B.");

        return (string) preg_replace('/\s+/u', ' ', $out);
    }
}
