<?php

declare(strict_types=1);

/**
 * Wächter über das Telegram-Signal.
 *
 * Dieser Test prüft nicht, ob eine Nachricht ankommt. Er prüft, was überhaupt
 * in ihr stehen KANN.
 *
 * Der Grund ist eine Zusage: die Meldung an Telegram enthält keine
 * personenbezogenen Daten, deshalb ist Telegram kein Empfänger und damit kein
 * Auftragsverarbeiter nach Art. 28 DSGVO. Diese Zusage steht in der
 * Datenschutzerklärung. Sie hält aber nur so lange, wie niemand „nur die
 * Vorgangsnummer" oder „nur die Betreffzeile" hinzufügt — und genau das ist
 * eine Änderung von drei Zeichen, die in keinem Verhaltenstest auffällt,
 * solange der Versand weiterhin funktioniert.
 *
 * Ein Verhaltenstest kann das nicht leisten: er sieht eine gesendete Nachricht
 * und ist zufrieden. Deshalb liest dieser Test den Quelltext.
 *
 * Der Pfad kommt aus argv, damit sich der Wächter gegen eine absichtlich
 * kaputte Kopie richten lässt. Ein Wächter, von dem niemand weiß, ob er beißt,
 * ist eine grüne Zeile und kein Test.
 */

use Consented\Core\Signal;

require dirname(__DIR__) . '/bootstrap.php';

$pfad = $argv[1] ?? dirname(__DIR__) . '/src/Core/Signal.php';

if (!is_file($pfad)) {
    fwrite(STDERR, "Signal.php nicht gefunden: {$pfad}\n");
    exit(1);
}

$quelle  = (string) file_get_contents($pfad);
$fehler  = [];
$geprüft = 0;

/*
 * Für die Prüfungen auf verbotene Konstrukte zählt nur echter Code.
 *
 * Ohne diesen Schritt schlägt der Wächter beim eigenen Quelltext an: der
 * Klassenkommentar erklärt, warum es KEIN parse_mode gibt, und nennt es dabei.
 * Ein Test, der sich an der Begründung stört, erzieht dazu, Begründungen
 * wegzulassen — und die sind hier das Wertvollste an der Datei.
 */
$code = '';

foreach (token_get_all($quelle) as $t) {
    if (is_array($t) && in_array($t[0], [T_COMMENT, T_DOC_COMMENT], true)) {
        continue;
    }

    $code .= is_array($t) ? $t[1] : $t;
}

/** @param callable():bool $prüfung */
function behauptung(string $was, callable $prüfung): void
{
    global $fehler, $geprüft;
    $geprüft++;

    try {
        if ($prüfung() !== true) {
            $fehler[] = $was;
        }
    } catch (\Throwable $e) {
        $fehler[] = $was . ' (Ausnahme: ' . $e->getMessage() . ')';
    }
}

/* ------------------------------------------------------------------ 1. Form */

behauptung(
    'supportRequest() nimmt keine Parameter',
    static fn (): bool => (new ReflectionMethod(Signal::class, 'supportRequest'))
        ->getNumberOfParameters() === 0
);

behauptung(
    'Signal hat keine weitere öffentliche Sendemethode mit Parametern',
    static function (): bool {
        foreach ((new ReflectionClass(Signal::class))->getMethods(ReflectionMethod::IS_PUBLIC) as $m) {
            if ($m->getNumberOfParameters() > 0) {
                return false;
            }
        }

        return true;
    }
);

/* ------------------------------------- 2. Die Nachricht ist ein Literal      */

behauptung(
    'SUPPORT_MESSAGE ist genau ein String-Literal — keine Einsetzung, keine Verkettung',
    static function () use ($quelle): bool {
        $tokens = token_get_all($quelle);
        $n      = count($tokens);

        for ($i = 0; $i < $n; $i++) {
            $t = $tokens[$i];

            if (!is_array($t) || $t[0] !== T_STRING || $t[1] !== 'SUPPORT_MESSAGE') {
                continue;
            }

            // Ab hier: '=', genau ein Literal, ';'. Whitespace und Kommentare
            // werden übersprungen, alles andere ist ein Verstoß.
            $folge = [];

            for ($j = $i + 1; $j < $n && count($folge) < 3; $j++) {
                $x = $tokens[$j];

                if (is_array($x) && in_array($x[0], [T_WHITESPACE, T_COMMENT, T_DOC_COMMENT], true)) {
                    continue;
                }

                $folge[] = is_array($x) ? $x[0] : $x;
            }

            return $folge === ['=', T_CONSTANT_ENCAPSED_STRING, ';'];
        }

        return false;
    }
);

behauptung(
    'die Nachricht selbst enthält kein Dollarzeichen und keine geschweifte Klammer',
    static fn (): bool => !preg_match(
        '~\$|\{~',
        (string) (new ReflectionClassConstant(Signal::class, 'SUPPORT_MESSAGE'))->getValue()
    )
);

/* ---------------------------- 3. Nichts Fremdes kann die Nachricht erreichen */

behauptung(
    'kein Zugriff auf Superglobals in der ganzen Datei',
    static fn (): bool => !preg_match(
        '~\$_(GET|POST|REQUEST|SERVER|SESSION|COOKIE|FILES|ENV)\b~',
        $code
    )
);

behauptung(
    'das Feld text bekommt ausschließlich die Konstante',
    static function () use ($code): bool {
        if (!preg_match_all("~'text'\s*=>\s*([^,\n]+)~", $code, $m)) {
            return false;
        }

        foreach ($m[1] as $wert) {
            if (trim($wert) !== 'self::SUPPORT_MESSAGE') {
                return false;
            }
        }

        return count($m[1]) === 1;
    }
);

behauptung(
    'kein parse_mode — ohne Markup gibt es nichts zu maskieren',
    static fn (): bool => !str_contains($code, 'parse_mode')
);

behauptung(
    'kein Host aus der Anfrage im Signal',
    static fn (): bool => !preg_match('~HTTP_HOST|SERVER_NAME|Url::(to|absolute)~', $code)
);

/* ------------------------------------------ 4. Der Token bleibt aus dem Log */

behauptung(
    'der Bot-Token steht im Pfad, nicht in einem Query-String',
    static function () use ($code): bool {
        // Ein '?' irgendwo in der URL-Bildung wäre der Weg, auf dem der Token
        // in Zugriffs- und Proxy-Logs landet.
        return preg_match('~api\.telegram\.org[^\n]*\?~', $code) === 0
            && str_contains($code, "self::API . self::token() . '/sendMessage'");
    }
);

/* ------------------------------------------------------------- 5. Verhalten */

behauptung(
    'ohne Konfiguration wird nichts gesendet und false gemeldet',
    static function (): bool {
        // Der Testlauf hat keine Telegram-Konfiguration; ist doch eine gesetzt,
        // sagt configured() das, und dann ist diese Behauptung nicht prüfbar.
        if (Signal::configured()) {
            return true;
        }

        return Signal::supportRequest() === false;
    }
);

/* ------------------------------------------------------------------ Bericht */

if ($fehler !== []) {
    fwrite(STDERR, "Das Signal kann mehr transportieren als zugesagt:\n");

    foreach ($fehler as $f) {
        fwrite(STDERR, "  - {$f}\n");
    }

    fwrite(STDERR, "\nWenn das beabsichtigt ist, gehört zuerst die Datenschutzerklärung\n");
    fwrite(STDERR, "geändert und Telegram als Auftragsverarbeiter aufgenommen.\n");
    exit(1);
}

fwrite(STDOUT, "{$geprüft} Behauptungen über das Telegram-Signal halten.\n");
exit(0);
