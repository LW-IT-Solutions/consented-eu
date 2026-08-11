<?php

declare(strict_types=1);

namespace Consented\Site;

use Consented\Core\Csp;
use Consented\Core\Settings;
use Consented\Core\Url;
use Consented\Property\ConfigBuilder;
use Consented\Property\Property;

/**
 * Unser eigenes Banner auf unseren eigenen Seiten.
 *
 * Eine CMP, die auf der Seite ihres Anbieters fehlt, ist ein Argument gegen sich
 * selbst. Deshalb bindet die Instanz eine ihrer eigenen Properties ein — welche,
 * sagt die Einstellung `self_cmp_property`. Ist sie leer, passiert nichts; das
 * ist die Vorgabe, weil ein Self-Hoster erst eine Property haben muss.
 *
 * Der Ausschnitt entsteht aus denselben Quellen wie der, den die
 * Integrationsseite dem Betreiber zeigt — `Url::cdn()` für die Adressen,
 * `ConfigBuilder::stubPatterns()` für die Blockliste. Eine zweite,
 * handgepflegte Kopie im Layout wäre nach dem ersten neuen Dienst falsch, ohne
 * dass es jemand merkt.
 */
final class SelfEmbed
{
    /**
     * Die Blockliste kostet mehrere Abfragen, das Ergebnis ändert sich nur beim
     * Veröffentlichen. Auf einem Raspberry Pi ist das der Unterschied zwischen
     * „unmerklich" und „auf jeder Seite".
     */
    private const TTL_SECONDS = 300;

    private static ?string $patterns = null;

    /**
     * Die zwei Script-Tags, oder eine leere Zeichenkette.
     *
     * Der Nonce wird bewusst NICHT zwischengespeichert: er gilt für genau einen
     * Request, und ein zwischengespeicherter Nonce wäre ein stillschweigend
     * abgeschaltetes CSP.
     */
    public static function tags(): string
    {
        $publicId = trim((string) Settings::get('self_cmp_property', ''));

        if ($publicId === '') {
            return '';
        }

        $patterns = self::patterns($publicId);

        if ($patterns === null) {
            return '';
        }

        $nonce = htmlspecialchars(Csp::nonce(), ENT_QUOTES, 'UTF-8');
        $stub  = htmlspecialchars(Url::cdn('/sdk/dist/stub.js'), ENT_QUOTES, 'UTF-8');
        $cmp   = htmlspecialchars(Url::cdn('/p/' . $publicId . '/cmp.js'), ENT_QUOTES, 'UTF-8');
        $block = $patterns === ''
            ? ''
            : ' data-block="' . htmlspecialchars($patterns, ENT_QUOTES, 'UTF-8') . '"';

        // Der Stub steht ohne async und als erstes: er muss die Muster kennen,
        // bevor irgendein blockierbares Skript startet. Das Bundle darf async
        // nachkommen, es entscheidet nur noch, was freigegeben wird.
        return '<!-- consented.eu -->' . "\n"
            . '<script nonce="' . $nonce . '" src="' . $stub . '"' . $block . '></script>' . "\n"
            . '<script nonce="' . $nonce . '" async src="' . $cmp . '"></script>' . "\n";
    }

    /**
     * Blockliste der Property, oder null wenn sie nicht ausgeliefert werden soll.
     *
     * Eine leere Zeichenkette ist ein gültiges Ergebnis: eine Property, die nur
     * notwendige Dienste führt, hat nichts zu blocken und bekommt das Attribut
     * dann gar nicht.
     */
    private static function patterns(string $publicId): ?string
    {
        if (self::$patterns !== null) {
            return self::$patterns === "\0" ? null : self::$patterns;
        }

        $file   = self::cacheFile();
        $cached = self::fromCache($file);

        if ($cached !== null) {
            self::$patterns = $cached;

            return $cached === "\0" ? null : $cached;
        }

        $value = self::build($publicId);

        self::$patterns = $value ?? "\0";

        @file_put_contents($file, self::$patterns, LOCK_EX);

        return $value;
    }

    private static function build(string $publicId): ?string
    {
        $property = Property::findByPublicId($publicId);

        if ($property === null) {
            return null;
        }

        // Ein nicht veröffentlichtes Banner hat keine Konfiguration, ein
        // stillgelegtes soll keine ausliefern. In beiden Fällen ist das Snippet
        // besser abwesend als kaputt.
        if ($property->status() !== 'live' || $property->configVersion() < 1) {
            return null;
        }

        return implode('|', ConfigBuilder::stubPatterns($property));
    }

    private static function fromCache(string $file): ?string
    {
        if (!is_file($file) || (time() - (int) @filemtime($file)) > self::TTL_SECONDS) {
            return null;
        }

        $raw = @file_get_contents($file);

        return $raw === false ? null : $raw;
    }

    /** Nach dem Veröffentlichen oder einer Änderung der Einstellung aufrufen. */
    public static function invalidate(): void
    {
        self::$patterns = null;
        @unlink(self::cacheFile());
    }

    private static function cacheFile(): string
    {
        $dir = CONSENTED_ROOT . '/storage/cache';

        if (!is_dir($dir)) {
            @mkdir($dir, 0775, true);
        }

        return $dir . '/self-embed';
    }
}
