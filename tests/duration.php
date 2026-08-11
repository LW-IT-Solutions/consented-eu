<?php

declare(strict_types=1);

/**
 * Laufzeiten erkennen und ausgeben.
 *
 * Die Eingaben unten sind keine erfundenen Beispiele, sondern Schreibweisen,
 * die im Katalog tatsächlich vorkommen — samt der Unsauberkeiten, die ihn zu
 * einem Gemisch gemacht haben: „Session" neben „session", „1 Year" neben
 * „1 year", Punkte am Ende, deutsche und englische Einheiten nebeneinander.
 *
 * Der zweite Block prüft die Ausgabe. Wichtig daran ist die Pluralform: bei
 * „5 Jahre" gegen „5 lat" gegen „5 let" entscheidet sich, ob die Cookie-Tabelle
 * in einer Sprache grammatisch richtig ist.
 */

use Consented\Property\Duration;

require dirname(__DIR__) . '/bootstrap.php';

$fehler = [];
$n      = 0;

/** Erkennung: Eingabe => erwartetes Ergebnis (null = kein Treffer, bleibt Text). */
$erkennung = [
    '2 years'      => ['kind' => 'duration', 'value' => 2, 'unit' => 'year'],
    '1 year'       => ['kind' => 'duration', 'value' => 1, 'unit' => 'year'],
    '1 Year'       => ['kind' => 'duration', 'value' => 1, 'unit' => 'year'],
    '2 Jahre'      => ['kind' => 'duration', 'value' => 2, 'unit' => 'year'],
    '30 days.'     => ['kind' => 'duration', 'value' => 30, 'unit' => 'day'],
    '24 Stunden'   => ['kind' => 'duration', 'value' => 24, 'unit' => 'hour'],
    '13 months'    => ['kind' => 'duration', 'value' => 13, 'unit' => 'month'],
    '30 minutes'   => ['kind' => 'duration', 'value' => 30, 'unit' => 'minute'],
    '60 seconds'   => ['kind' => 'duration', 'value' => 60, 'unit' => 'second'],
    '2 weeks'      => ['kind' => 'duration', 'value' => 2, 'unit' => 'week'],
    'up to 30 days' => ['kind' => 'duration', 'value' => 30, 'unit' => 'day', 'upto' => true],
    'bis zu 30 Tage' => ['kind' => 'duration', 'value' => 30, 'unit' => 'day', 'upto' => true],
    'session'      => ['kind' => 'session'],
    'Session'      => ['kind' => 'session'],
    'End of session (browser)' => ['kind' => 'session'],
    'forever'      => ['kind' => 'persistent'],
    'Unlimited'    => ['kind' => 'persistent'],
    'Unknown'      => ['kind' => 'unknown'],
    'undefined'    => ['kind' => 'unknown'],
    'Varies'       => ['kind' => 'varies'],
    // Kein Treffer, und das ist richtig so: die Angabe sagt mehr als eine Dauer.
    '13 Monate ab der letzten Verwendung' => null,
    'bis zum Widerruf'                    => null,
    'von der Browserrichtlinie bestimmt'  => null,
    ''                                    => null,
];

foreach ($erkennung as $eingabe => $soll) {
    $n++;
    $ist = Duration::parse((string) $eingabe);

    if ($ist !== $soll) {
        $fehler[] = sprintf(
            "parse('%s'): %s, erwartet %s",
            $eingabe,
            json_encode($ist, JSON_UNESCAPED_UNICODE),
            json_encode($soll, JSON_UNESCAPED_UNICODE)
        );
    }
}

/**
 * Ausgabe mit Pluralformen.
 *
 * Die Einheitenwörter kommen hier direkt mit, damit der Test nicht davon
 * abhängt, welche Sprachauflagen eine Installation zufällig mitbringt.
 */
$woerter = [
    'de' => ['duration_year' => 'Jahr|Jahre', 'duration_day' => 'Tag|Tage',
             'duration_session' => 'Sitzung', 'duration_upto' => 'bis zu :duration'],
    'en' => ['duration_year' => 'year|years', 'duration_day' => 'day|days',
             'duration_session' => 'Session', 'duration_upto' => 'up to :duration'],
    'pl' => ['duration_year' => 'rok|lata|lat', 'duration_day' => 'dzień|dni|dni',
             'duration_session' => 'Sesja', 'duration_upto' => 'do :duration'],
    'cs' => ['duration_year' => 'rok|roky|let'],
];

$ausgabe = [
    ['de', ['kind' => 'duration', 'value' => 1, 'unit' => 'year'], '1 Jahr'],
    ['de', ['kind' => 'duration', 'value' => 2, 'unit' => 'year'], '2 Jahre'],
    ['en', ['kind' => 'duration', 'value' => 1, 'unit' => 'year'], '1 year'],
    ['en', ['kind' => 'duration', 'value' => 5, 'unit' => 'year'], '5 years'],
    // Polnisch: 1 one, 2 few, 5 many, 12 many (nicht few!), 22 wieder few.
    ['pl', ['kind' => 'duration', 'value' => 1, 'unit' => 'year'], '1 rok'],
    ['pl', ['kind' => 'duration', 'value' => 2, 'unit' => 'year'], '2 lata'],
    ['pl', ['kind' => 'duration', 'value' => 5, 'unit' => 'year'], '5 lat'],
    ['pl', ['kind' => 'duration', 'value' => 12, 'unit' => 'year'], '12 lat'],
    ['pl', ['kind' => 'duration', 'value' => 22, 'unit' => 'year'], '22 lata'],
    // Tschechisch: 1 one, 2-4 few, ab 5 die dritte Form.
    ['cs', ['kind' => 'duration', 'value' => 1, 'unit' => 'year'], '1 rok'],
    ['cs', ['kind' => 'duration', 'value' => 3, 'unit' => 'year'], '3 roky'],
    ['cs', ['kind' => 'duration', 'value' => 5, 'unit' => 'year'], '5 let'],
    ['de', ['kind' => 'session'], 'Sitzung'],
    ['en', ['kind' => 'session'], 'Session'],
    ['de', ['kind' => 'duration', 'value' => 30, 'unit' => 'day', 'upto' => true], 'bis zu 30 Tage'],
    ['en', ['kind' => 'duration', 'value' => 30, 'unit' => 'day', 'upto' => true], 'up to 30 days'],
];

foreach ($ausgabe as [$locale, $duration, $soll]) {
    $n++;
    $ist = Duration::render($duration, $locale, $woerter[$locale] ?? []);

    if ($ist !== $soll) {
        $fehler[] = "render({$locale}, " . json_encode($duration) . "): '{$ist}', erwartet '{$soll}'";
    }
}

/* localise() lässt stehen, was keine Dauer ist. */
foreach ([
    ['1 year', 'de', '1 Jahr'],
    ['bis zum Widerruf', 'de', 'bis zum Widerruf'],
    ['Session', 'de', 'Sitzung'],
] as [$eingabe, $locale, $soll]) {
    $n++;
    $ist = Duration::localise($eingabe, $locale, $woerter[$locale]);

    if ($ist !== $soll) {
        $fehler[] = "localise('{$eingabe}', {$locale}): '{$ist}', erwartet '{$soll}'";
    }
}

if ($fehler !== []) {
    fwrite(STDERR, 'duration: ' . count($fehler) . " Fehler\n");

    foreach (array_slice($fehler, 0, 12) as $line) {
        fwrite(STDERR, "  {$line}\n");
    }

    exit(1);
}

fwrite(STDOUT, "duration: {$n} Zusicherungen, alle erfuellt\n");
