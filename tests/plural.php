<?php

declare(strict_types=1);

/**
 * Pluralklassen gegen die CLDR-Regeln.
 *
 * Geprüft werden die Zahlen, an denen die Regeln brechen: 11 bis 14 in den
 * slawischen Sprachen, 21 und 22 als Rückkehr in die niedrige Klasse, der
 * Hunderterübergang bei 101 und 111, und die Null. Wer eine Regel anfasst,
 * merkt hier sofort, wenn er eine andere mitgenommen hat.
 *
 * Zusätzlich läuft für jede Sprache 0 bis 200 durch: kein Index darf je
 * außerhalb der in PLURAL_FORMS angegebenen Formenzahl liegen. Ein Index
 * daneben würde im Katalog eine leere Zeichenkette ausgeben statt eines Worts.
 */

use Consented\Core\Lang;

require dirname(__DIR__) . '/bootstrap.php';

/**
 * Erwartete Klassenindizes, aus den CLDR-Pluralregeln für Kardinalzahlen.
 *
 * @var array<string,array<int,int>>
 */
const ERWARTUNG = [
    'de' => [0 => 1, 1 => 0, 2 => 1, 5 => 1, 11 => 1, 21 => 1, 101 => 1],
    'en' => [0 => 1, 1 => 0, 2 => 1, 21 => 1],
    'pl' => [0 => 2, 1 => 0, 2 => 1, 4 => 1, 5 => 2, 11 => 2, 12 => 2, 14 => 2,
             15 => 2, 22 => 1, 24 => 1, 25 => 2, 112 => 2, 122 => 1],
    'cs' => [0 => 2, 1 => 0, 2 => 1, 4 => 1, 5 => 2, 11 => 2, 21 => 2, 22 => 2],
    'sk' => [1 => 0, 2 => 1, 4 => 1, 5 => 2, 21 => 2],
    'ru' => [0 => 2, 1 => 0, 2 => 1, 5 => 2, 11 => 2, 12 => 2, 21 => 0, 22 => 1,
             25 => 2, 101 => 0, 111 => 2],
    'uk' => [1 => 0, 2 => 1, 5 => 2, 11 => 2, 21 => 0],
    'hr' => [1 => 0, 2 => 1, 5 => 2, 11 => 2, 21 => 0, 101 => 0, 111 => 2],
    'sr' => [1 => 0, 2 => 1, 5 => 2, 21 => 0],
    'sl' => [1 => 0, 2 => 1, 3 => 2, 4 => 2, 5 => 3, 101 => 0, 102 => 1, 103 => 2],
    'lt' => [1 => 0, 2 => 1, 9 => 1, 10 => 2, 11 => 2, 19 => 2, 21 => 0, 22 => 1],
    'lv' => [0 => 0, 1 => 1, 2 => 2, 10 => 0, 11 => 0, 19 => 0, 20 => 0, 21 => 1,
             101 => 1, 111 => 0],
    'ro' => [0 => 1, 1 => 0, 2 => 1, 19 => 1, 20 => 2, 101 => 1, 120 => 2],
    'mt' => [0 => 2, 1 => 0, 2 => 1, 3 => 2, 10 => 2, 11 => 3, 19 => 3, 20 => 4],
    'ga' => [1 => 0, 2 => 1, 3 => 2, 6 => 2, 7 => 3, 10 => 3, 11 => 4],
    'ja' => [0 => 0, 1 => 0, 2 => 0, 100 => 0],
    'zh' => [1 => 0, 5 => 0],
    'tr' => [1 => 0, 2 => 1, 5 => 1],
    'hu' => [1 => 0, 2 => 1, 5 => 1],
];

$index = new ReflectionMethod(Lang::class, 'pluralIndex');
$index->setAccessible(true);

$geprueft = 0;
$fehler   = [];

foreach (ERWARTUNG as $locale => $faelle) {
    $formen = Lang::pluralForms($locale);

    foreach ($faelle as $n => $soll) {
        $geprueft++;
        $ist = $index->invoke(null, $locale, $n);

        if ($ist !== $soll) {
            $fehler[] = "{$locale} n={$n}: Klasse {$ist}, erwartet {$soll}";
        }
    }

    // Kein Index darf ausserhalb der Formenzahl liegen — auch nicht bei Zahlen,
    // an die beim Schreiben der Regel niemand gedacht hat.
    for ($n = 0; $n <= 200; $n++) {
        $geprueft++;
        $ist = $index->invoke(null, $locale, $n);

        if ($ist < 0 || $ist >= $formen) {
            $fehler[] = "{$locale} n={$n}: Index {$ist} ausserhalb von 0..{$formen}";
            break;
        }
    }
}

if ($fehler !== []) {
    fwrite(STDERR, "plural: " . count($fehler) . " Fehler\n");

    foreach (array_slice($fehler, 0, 10) as $line) {
        fwrite(STDERR, "  {$line}\n");
    }

    exit(1);
}

fwrite(STDOUT, sprintf(
    "plural: %d Zusicherungen ueber %d Sprachen, alle erfuellt\n",
    $geprueft,
    count(ERWARTUNG)
));
