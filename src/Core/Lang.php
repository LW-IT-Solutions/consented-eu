<?php

declare(strict_types=1);

namespace Consented\Core;

/**
 * Oberflächensprache von Dashboard und Marketing-Seiten.
 *
 * Nicht zu verwechseln mit den Banner-Texten einer Property: die liegen in
 * `property_texts` und werden vom Property-Betreiber gepflegt. Hier geht es um
 * die Sprache der Anwendung selbst.
 *
 * Kataloge sind flache PHP-Arrays unter lang/<code>.php. Flach statt
 * verschachtelt, weil sich so mit einem Blick prüfen lässt, welche Schlüssel
 * einer Sprache fehlen — und PHP-Arrays statt JSON, weil OPcache sie im
 * kompilierten Zustand hält und kein Parsen pro Request nötig ist.
 */
final class Lang
{
    public const DEFAULT_LOCALE = 'de';

    private const COOKIE   = 'ce_lang';
    private const LIFETIME = 31536000; // 1 Jahr

    /**
     * Pluralklassen je Sprache, auf Ganzzahlen reduziert.
     *
     * Deutsch und Englisch unterscheiden nur Eins von Nicht-Eins; Polnisch
     * kennt zusätzlich `few`. Die Regel selbst steht in pluralIndex() — hier
     * steht nur, wie viele Formen ein Katalogwert haben muss.
     *
     * @var array<string,int>
     */
    /**
     * Anzahl der Pluralformen je Sprache, nach CLDR (Kardinalzahlen, ganze
     * Zahlen). Muss zu pluralIndex() passen: die Methode gibt Indizes von 0 bis
     * FORMS-1 zurück, und `bin/lang-sync --check` zählt genau diese Zahl.
     *
     * Nicht aufgeführte Sprachen bekommen zwei Formen — das ist die Regel für
     * Deutsch, Englisch und den größten Teil der Liste.
     */
    private const PLURAL_FORMS = [
        'ja' => 1, 'zh' => 1,                                    // keine Unterscheidung
        'pl' => 3, 'cs' => 3, 'sk' => 3,                         // one | few | other
        'hr' => 3, 'sr' => 3, 'ru' => 3, 'uk' => 3,              // one | few | many
        'lt' => 3, 'lv' => 3, 'ro' => 3,                         // eigene Regeln, drei Klassen
        'sl' => 4,                                               // one | two | few | other
        'mt' => 5, 'ga' => 5,                                    // fünf Klassen
    ];

    /** @var array<string,string> Code => Eigenbezeichnung */
    private const AVAILABLE = [
        'de' => 'Deutsch',
        'en' => 'English',
        'pl' => 'Polski',
    ];

    private static string $locale = self::DEFAULT_LOCALE;

    /** @var array<string,array<string,string>> */
    private static array $catalogues = [];

    /** @var array<string,true> Fehlende Schlüssel dieses Requests */
    private static array $missing = [];

    /** @return array<string,string> */
    /**
     * Sprachen, die diese Instanz anbietet.
     *
     * AVAILABLE ist, was das Repository mitbringt; die Einstellung ist, was der
     * Betreiber davon anschaltet. Eine Sprache abzuschalten heißt, sie aus der
     * Umschaltung zu nehmen — der Katalog bleibt liegen, damit ein späteres
     * Wiederanschalten nichts kostet.
     *
     * Der try/catch deckt den Fall ab, dass die Einstellungstabelle noch nicht
     * existiert: die Sprachwahl passiert früh im Request, und eine fehlende
     * Migration darf keine weiße Seite ergeben.
     *
     * @return array<string,string>
     */
    public static function available(): array
    {
        try {
            $enabled = Settings::uiLanguages();
        } catch (\Throwable) {
            return self::AVAILABLE;
        }

        $out = array_intersect_key(self::AVAILABLE, array_flip($enabled));

        return $out === [] ? self::AVAILABLE : $out;
    }

    /** Alle mitgelieferten Kataloge, unabhängig von der Einstellung. */
    public static function shipped(): array
    {
        return self::AVAILABLE;
    }

    public static function isSupported(string $code): bool
    {
        return isset(self::AVAILABLE[$code]);
    }

    public static function current(): string
    {
        return self::$locale;
    }

    public static function name(?string $code = null): string
    {
        return self::AVAILABLE[$code ?? self::$locale] ?? $code ?? '';
    }

    /**
     * Bestimmt die Sprache für diesen Request.
     *
     * Reihenfolge: expliziter Wechsel über ?lang= schlägt alles, danach die
     * gespeicherte Präferenz des angemeldeten Kontos, dann das Cookie, dann
     * der Accept-Language-Header des Browsers.
     */
    public static function boot(Request $request, ?int $userId = null): void
    {
        $explicit = $request->input('lang');

        if (is_string($explicit) && self::isSupported($explicit)) {
            self::use($explicit, $request, $userId);

            return;
        }

        if ($userId !== null) {
            $stored = Db::value('SELECT locale FROM users WHERE id = :id', ['id' => $userId]);
            if (is_string($stored) && self::isSupported($stored)) {
                self::$locale = $stored;

                return;
            }
        }

        $cookie = $_COOKIE[self::COOKIE] ?? null;
        if (is_string($cookie) && self::isSupported($cookie)) {
            self::$locale = $cookie;

            return;
        }

        self::$locale = self::fromAcceptLanguage($request);
    }

    /** Setzt die Sprache und merkt sie sich dauerhaft. */
    public static function use(string $code, Request $request, ?int $userId = null): void
    {
        if (!self::isSupported($code)) {
            return;
        }

        self::$locale = $code;

        if (!headers_sent()) {
            setcookie(self::COOKIE, $code, [
                'expires'  => time() + self::LIFETIME,
                'path'     => '/',
                'secure'   => $request->isSecure(),
                'httponly' => false, // Kein Geheimnis; darf clientseitig lesbar sein.
                'samesite' => 'Lax',
            ]);
        }

        if ($userId !== null) {
            try {
                Db::update('users', ['locale' => $code, 'updated_at' => Clock::now()], ['id' => $userId]);
            } catch (\Throwable) {
                // Eine nicht gespeicherte Präferenz darf den Request nicht kippen.
            }
        }
    }

    /**
     * Wertet Accept-Language aus.
     *
     * Regionalvarianten werden auf die Basissprache abgebildet: pl-PL ist für
     * unsere Zwecke pl. Die Gewichtung (q=) wird berücksichtigt, weil Browser
     * mehrere Sprachen in Präferenzreihenfolge senden.
     */
    private static function fromAcceptLanguage(Request $request): string
    {
        $header = $request->header('accept-language');

        if ($header === null || $header === '') {
            return self::DEFAULT_LOCALE;
        }

        $candidates = [];

        foreach (explode(',', $header) as $part) {
            $bits    = explode(';', trim($part));
            $tag     = strtolower(trim($bits[0]));
            $quality = 1.0;

            if (isset($bits[1]) && str_starts_with(trim($bits[1]), 'q=')) {
                $quality = (float) substr(trim($bits[1]), 2);
            }

            $base = explode('-', $tag)[0];

            if (self::isSupported($base) && !isset($candidates[$base])) {
                $candidates[$base] = $quality;
            }
        }

        if ($candidates === []) {
            return self::DEFAULT_LOCALE;
        }

        arsort($candidates);

        return (string) array_key_first($candidates);
    }

    /**
     * Übersetzt einen Schlüssel.
     *
     * Platzhalter werden als :name geschrieben. Der Katalogtext gilt als
     * vertrauenswürdig (er stammt aus dem Repository), eingesetzte Werte
     * dagegen nicht — die escapen die Aufrufer in der View über t() bzw.
     * werden in tr() explizit escaped.
     *
     * @param array<string,string|int> $replace
     */
    public static function get(string $key, array $replace = []): string
    {
        $locale = self::$locale;
        $text   = self::lookup($key, $locale);

        if ($text === null && $locale !== self::DEFAULT_LOCALE) {
            $text   = self::lookup($key, self::DEFAULT_LOCALE);
            $locale = self::DEFAULT_LOCALE;
        }

        if ($text === null) {
            // Sichtbar scheitern statt leer ausgeben: ein fehlender Schlüssel
            // soll auffallen, nicht ein Loch in der Seite hinterlassen.
            self::$missing[$key] = true;

            return $key;
        }

        return self::substitute(self::choose($text, $locale, $replace), $replace);
    }

    /**
     * Einen Schlüssel in einer bestimmten Sprache auflösen, nicht in der
     * aktuellen.
     *
     * Gebraucht für Inhalte, deren Sprache nicht die der Oberfläche ist: die
     * Vorschau auf der Startseite zeigt das Banner in einer wählbaren Sprache,
     * und die Platzhalterseite darin soll dieselbe sprechen — sonst steht auf
     * einer englischen Vorschau ein deutscher Absatz.
     *
     * Fällt wie get() auf die Referenzsprache zurück und gibt bei einem
     * fehlenden Schlüssel dessen Namen aus, damit die Lücke auffällt.
     *
     * @param array<string,string|int> $replace
     */
    public static function inLocale(string $locale, string $key, array $replace = []): string
    {
        $text = self::lookup($key, $locale);

        if ($text === null) {
            $text   = self::lookup($key, self::DEFAULT_LOCALE);
            $locale = self::DEFAULT_LOCALE;
        }

        if ($text === null) {
            self::$missing[$key] = true;

            return $key;
        }

        return self::substitute(self::choose($text, $locale, $replace), $replace);
    }

    /**
     * Setzt die Platzhalter ein.
     *
     * @param array<string,string|int> $replace
     */
    private static function substitute(string $text, array $replace): string
    {
        if ($replace === []) {
            return $text;
        }

        $search = [];
        $values = [];

        foreach ($replace as $name => $value) {
            $search[] = ':' . $name;
            $values[] = (string) $value;
        }

        return str_replace($search, $values, $text);
    }

    /**
     * Wählt die Pluralform.
     *
     * Pluralformen stehen im Katalog durch `|` getrennt, in CLDR-Reihenfolge:
     * Deutsch und Englisch zwei Formen (one|other), Polnisch drei
     * (one|few|many). Ein Wert ohne `|` ist kein Pluralwert und geht unberührt
     * durch — das ist der Grund, warum die übrigen Schlüssel nichts merken.
     *
     * Die Form wird nach der Sprache gewählt, aus der der Text tatsächlich
     * stammt, nicht nach der eingestellten. Fehlt ein polnischer Schlüssel und
     * greift der Rückfall auf Deutsch, hat der Text zwei Formen — mit der
     * polnischen Regel gewählt käme Index 2 heraus, den es nicht gibt.
     *
     * @param array<string,string|int> $replace
     */
    /**
     * Die passende Pluralform aus einem Wert mit `|`-getrennten Formen.
     *
     * Öffentlich, weil die Bannertexte eine zweite Ebene sind: sie stehen nicht
     * in `lang/*.php`, sondern in `Defaults::texts()` und den Sprachauflagen,
     * werden also nicht über `get()` aufgelöst. Die Cookie-Laufzeiten brauchen
     * dieselbe Formwahl — und die Regel dafür soll genau einmal existieren.
     *
     * Ein Wert ohne `|` kommt unverändert zurück. Fehlt die passende Form, gilt
     * die letzte: eine Sprache mit zu wenigen Formen liefert dann eine
     * grammatisch schiefe Angabe, aber keine leere Zelle.
     */
    public static function plural(string $value, string $locale, int $count): string
    {
        if (!str_contains($value, '|')) {
            return $value;
        }

        $forms = explode('|', $value);

        return $forms[self::pluralIndex($locale, $count)] ?? $forms[count($forms) - 1];
    }

    private static function choose(string $text, string $locale, array $replace): string
    {
        if (!str_contains($text, '|')) {
            return $text;
        }

        $forms = explode('|', $text);
        $last  = $forms[count($forms) - 1];
        $count = self::countOf($replace);

        if ($count === null) {
            // Ein Pluralwert ohne :count ist ein Fehler an der Aufrufstelle.
            // Die generische Form ist das am wenigsten Falsche, solange er
            // noch nicht gefunden ist.
            return $last;
        }

        return $forms[self::pluralIndex($locale, $count)] ?? $last;
    }

    /**
     * Die Zahl, nach der die Form gewählt wird.
     *
     * Die Aufrufstellen übergeben teils eine rohe Zahl, teils die Ausgabe von
     * View::number() — also „1.234" mit Tausendertrennzeichen. Für die
     * Formwahl müssen die Trenner wieder heraus, sonst wäre „1.234" eine 1
     * und stünde im Singular.
     *
     * @param array<string,string|int> $replace
     */
    private static function countOf(array $replace): ?int
    {
        $value = $replace['count'] ?? null;

        if ($value === null) {
            return null;
        }

        if (is_int($value)) {
            return $value;
        }

        $digits = preg_replace('/\D+/', '', (string) $value);

        return ($digits === null || $digits === '') ? null : (int) $digits;
    }

    /**
     * Wie viele Pluralformen eine Sprache braucht.
     *
     * Gebraucht von `bin/lang-sync --check`: die Abdeckung dort zählt einen
     * Schlüssel als übersetzt, sobald er nicht leer ist, und sieht deshalb
     * nicht, wenn eine polnische Zeile nur zwei der drei Formen trägt.
     */
    public static function pluralForms(string $locale): int
    {
        return self::PLURAL_FORMS[$locale] ?? 2;
    }

    /**
     * CLDR-Pluralklasse als Index, auf Ganzzahlen reduziert.
     *
     * Eine Anzahl in dieser Oberfläche ist nie gebrochen, deshalb fehlen die
     * Bedingungen für Dezimalstellen. Polnisch ist der Grund, warum es diese
     * Methode überhaupt gibt: 2 bis 4 nehmen `few`, aber 12 bis 14 nicht —
     * und 22 bis 24 wieder doch.
     *
     * Die Regeln unten stammen aus den CLDR-Pluralregeln (Kardinalzahlen) und
     * decken die Sprachen ab, die `Defaults::languages()` anbietet. Sie stehen
     * hier und nirgends sonst — insbesondere nicht in JavaScript. Wer eine
     * Anzahl clientseitig ändert, lässt den Server den Satz rendern.
     *
     * Ohne sie fällt jede Sprache auf „n === 1" zurück, und das ist für die
     * halbe Liste schlicht falsch: Tschechisch braucht „2 roky" gegen „5 let",
     * Slowenisch unterscheidet zusätzlich den Dual, Litauisch kennt eine eigene
     * Klasse für 11 bis 19, und Maltesisch hat fünf Formen.
     */
    private static function pluralIndex(string $locale, int $count): int
    {
        $n      = abs($count);
        $mod10  = $n % 10;
        $mod100 = $n % 100;

        switch ($locale) {
            // one | few | many — 2 bis 4, aber nicht 12 bis 14.
            case 'cs':
            case 'sk':
                // Tschechisch und Slowakisch: nur die blanke 1, dann 2–4.
                if ($n === 1) {
                    return 0;
                }

                return ($n >= 2 && $n <= 4) ? 1 : 2;

            case 'hr':
            case 'sr':
            case 'ru':
            case 'uk':
                if ($mod10 === 1 && $mod100 !== 11) {
                    return 0; // one
                }

                if ($mod10 >= 2 && $mod10 <= 4 && ($mod100 < 12 || $mod100 > 14)) {
                    return 1; // few
                }

                return 2; // many

            // one | two | few | other — Slowenisch zählt den Dual mit.
            case 'sl':
                if ($mod100 === 1) {
                    return 0;
                }

                if ($mod100 === 2) {
                    return 1;
                }

                return ($mod100 === 3 || $mod100 === 4) ? 2 : 3;

            // one | few | other — Litauisch: 11 bis 19 fallen heraus.
            case 'lt':
                if ($mod10 === 1 && ($mod100 < 11 || $mod100 > 19)) {
                    return 0;
                }

                if ($mod10 >= 2 && $mod10 <= 9 && ($mod100 < 11 || $mod100 > 19)) {
                    return 1;
                }

                return 2;

            // zero | one | other — Lettisch hat eine eigene Nullklasse.
            case 'lv':
                if ($mod10 === 0 || ($mod100 >= 11 && $mod100 <= 19)) {
                    return 0;
                }

                return ($mod10 === 1 && $mod100 !== 11) ? 1 : 2;

            // one | few | other — Rumänisch: 0 und 2..19 nehmen `few`.
            case 'ro':
                if ($n === 1) {
                    return 0;
                }

                return ($n === 0 || ($mod100 >= 1 && $mod100 <= 19)) ? 1 : 2;

            // one | two | few | many | other
            case 'mt':
                if ($n === 1) {
                    return 0;
                }

                if ($n === 2) {
                    return 1;
                }

                if ($n === 0 || ($mod100 >= 3 && $mod100 <= 10)) {
                    return 2;
                }

                return ($mod100 >= 11 && $mod100 <= 19) ? 3 : 4;

            // one | two | few | many | other — Irisch.
            case 'ga':
                if ($n === 1) {
                    return 0;
                }

                if ($n === 2) {
                    return 1;
                }

                if ($n >= 3 && $n <= 6) {
                    return 2;
                }

                return ($n >= 7 && $n <= 10) ? 3 : 4;

            // Keine Pluralunterscheidung: eine Form für jede Anzahl. Nur diese
            // beiden — Türkisch und Ungarisch bilden nach dem Zahlwort zwar
            // keinen Plural, CLDR führt für sie aber trotzdem zwei Klassen, und
            // die Oberfläche formuliert bei „1" oft anders als bei „5".
            case 'ja':
            case 'zh':
                return 0;
        }

        if ($locale === 'pl') {
            if ($n === 1) {
                return 0; // one
            }

            $mod10  = $n % 10;
            $mod100 = $n % 100;

            if ($mod10 >= 2 && $mod10 <= 4 && ($mod100 < 12 || $mod100 > 14)) {
                return 1; // few
            }

            return 2; // many
        }

        return $n === 1 ? 0 : 1; // one | other
    }

    public static function has(string $key): bool
    {
        return self::lookup($key, self::$locale) !== null
            || self::lookup($key, self::DEFAULT_LOCALE) !== null;
    }

    private static function lookup(string $key, string $locale): ?string
    {
        $catalogue = self::catalogue($locale);
        $value     = $catalogue[$key] ?? null;

        return ($value === null || $value === '') ? null : $value;
    }

    /** @return array<string,string> */
    public static function catalogue(string $locale): array
    {
        if (isset(self::$catalogues[$locale])) {
            return self::$catalogues[$locale];
        }

        $file = CONSENTED_ROOT . '/lang/' . $locale . '.php';

        if (!is_file($file)) {
            self::$catalogues[$locale] = [];

            return [];
        }

        /** @var mixed $loaded */
        $loaded = require $file;

        self::$catalogues[$locale] = is_array($loaded) ? $loaded : [];

        return self::$catalogues[$locale];
    }

    /**
     * Schlüssel, die in diesem Request nicht gefunden wurden.
     *
     * Die Administration zeigt sie an, damit Lücken auffallen, bevor ein
     * Nutzer sie sieht.
     *
     * @return list<string>
     */
    public static function missing(): array
    {
        return array_keys(self::$missing);
    }

    /**
     * Abdeckung je Sprache, gemessen am deutschen Katalog.
     *
     * @return array<string,array{translated:int,total:int,percent:int,missing:list<string>}>
     */
    public static function coverage(): array
    {
        $reference = self::catalogue(self::DEFAULT_LOCALE);
        $total     = count($reference);
        $report    = [];

        foreach (array_keys(self::AVAILABLE) as $code) {
            $catalogue = self::catalogue($code);
            $missing   = [];

            foreach (array_keys($reference) as $key) {
                if (!isset($catalogue[$key]) || $catalogue[$key] === '') {
                    $missing[] = $key;
                }
            }

            $translated = $total - count($missing);

            $report[$code] = [
                'translated' => $translated,
                'total'      => $total,
                'percent'    => $total > 0 ? (int) round($translated / $total * 100) : 100,
                'missing'    => $missing,
            ];
        }

        return $report;
    }

    /** Nur für Tests und CLI. */
    public static function forceLocale(string $code): void
    {
        if (self::isSupported($code)) {
            self::$locale = $code;
        }
    }
}
