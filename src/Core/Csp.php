<?php

declare(strict_types=1);

namespace Consented\Core;

/**
 * Content Security Policy with per-request nonces.
 *
 * The dashboard runs without 'unsafe-inline'. Every inline <script> has to
 * carry nonce="<?= Csp::nonce() ?>" or it will not execute — which is the
 * point: an injected script tag has no way to guess the nonce.
 */
final class Csp
{
    private static ?string $nonce = null;

    /**
     * Ob diese Antwort reCAPTCHA laden darf.
     *
     * Aus, bis ein Controller es einschaltet. Google in die Politik jeder
     * Antwort zu schreiben waere bequem, aber die vier Seiten mit einem
     * Formular sind nicht der Grund, warum die Auslieferungsseite der CMP eine
     * enge Politik hat.
     *
     * script-src braucht nichts: dort steht bereits 'strict-dynamic', und ein
     * genonctes Skript darf seine eigenen Kindskripte nachladen. Gebraucht
     * werden nur der unsichtbare Challenge-Rahmen und das Abzeichen.
     */
    private static bool $captcha = false;

    public static function allowCaptcha(): void
    {
        self::$captcha = true;
    }

    public static function nonce(): string
    {
        if (self::$nonce === null) {
            self::$nonce = base64_encode(random_bytes(16));
        }

        return self::$nonce;
    }

    /**
     * Policy for dashboard and marketing pages.
     *
     * frame-src allows blob: because the design editor previews the banner in
     * a sandboxed iframe built from a blob URL — that is the real SDK running,
     * not a mock-up, which is worth the extra source.
     */
    public static function dashboardPolicy(): string
    {
        $nonce = "'nonce-" . self::nonce() . "'";

        $directives = [
            "default-src 'self'",
            "base-uri 'self'",
            "object-src 'none'",
            "frame-ancestors 'self'",
            "form-action 'self'",
            "script-src 'self' {$nonce} 'strict-dynamic'",
            // Bewusst OHNE Nonce.
            //
            // Sobald in einer Direktive ein Nonce steht, ignorieren
            // CSP-3-Browser 'unsafe-inline' vollständig. Für Skripte ist das
            // genau der Zweck. Für Styles wäre es fatal: ein Nonce lässt sich
            // an <style> hängen, aber nicht an ein style="..."-Attribut — die
            // Oberfläche verwendet über 200 davon, und alle würden verworfen.
            //
            // Der Gewinn wäre ohnehin gering: CSS-Injection ist ohne
            // Skriptausführung auf Exfiltration über Selektoren beschränkt,
            // während die Alternative bedeutet, jedes Layout-Detail in eine
            // Klasse auszulagern.
            "style-src 'self' 'unsafe-inline'",
            "img-src 'self' data: blob:" . (self::$captcha ? ' https://www.gstatic.com' : ''),
            "font-src 'self' data:",
            /*
             * Die Auslieferungsadresse der eigenen CMP muss hier stehen.
             *
             * Diese Instanz spielt ihr eigenes Banner auf ihren Seiten aus
             * (Site\SelfEmbed). Das Banner meldet die Entscheidung per
             * sendBeacon bzw. fetch an /api/v1/consent der Auslieferungsadresse
             * zurück. Auf der Apex-Domain ist das dieselbe Herkunft und 'self'
             * genügt; auf dev.* nicht — dort hätte connect-src 'self' den POST
             * verworfen, und das Ergebnis wäre das schlechtestmögliche gewesen:
             * ein sichtbares Banner, das keine Einwilligung speichern kann.
             *
             * Bewusst aus Env und nicht aus Settings: diese Methode läuft auf
             * jeder Antwort, auch auf Fehlerseiten, und darf die Datenbank nicht
             * brauchen. Doppelt genannte Quellen sind in CSP unschädlich.
             */
            "connect-src 'self'" . self::cmpOriginSuffix()
                . (self::$captcha ? ' https://www.google.com' : ''),
            "frame-src 'self' blob:" . (self::$captcha ? ' https://www.google.com' : ''),
        ];

        // Only over HTTPS. On a plain-HTTP development host this directive
        // would rewrite every asset URL to https:// and break the whole page.
        $isSecure = (($_SERVER['HTTPS'] ?? 'off') !== 'off')
            || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');

        if ($isSecure) {
            $directives[] = 'upgrade-insecure-requests';
        }

        return implode('; ', $directives);
    }

    /**
     * Die Herkunft, von der die eigene CMP ausgeliefert wird, als
     * connect-src-Zusatz — oder eine leere Zeichenkette.
     *
     * Nur Schema, Host und Port: CSP-Quellen tragen keinen Pfad, und ein Pfad
     * hier würde die Direktive ungültig machen, statt sie zu verengen.
     */
    private static function cmpOriginSuffix(): string
    {
        $base = (string) Env::get('CDN_URL', (string) Env::get('APP_URL', ''));

        if ($base === '') {
            return '';
        }

        $parts = parse_url($base);

        if (!is_array($parts) || !isset($parts['scheme'], $parts['host'])) {
            return '';
        }

        $origin = $parts['scheme'] . '://' . $parts['host'];

        if (isset($parts['port'])) {
            $origin .= ':' . $parts['port'];
        }

        return ' ' . $origin;
    }

    /**
     * Applies the headers every response gets, regardless of route.
     */
    public static function apply(Response $response, bool $withCsp = true): Response
    {
        if ($withCsp) {
            $response = $response->withHeader('Content-Security-Policy', self::dashboardPolicy());
        }

        return $response
            ->withHeader('X-Content-Type-Options', 'nosniff')
            ->withHeader('Referrer-Policy', 'strict-origin-when-cross-origin')
            ->withHeader('X-Frame-Options', 'SAMEORIGIN')
            ->withHeader(
                'Permissions-Policy',
                'geolocation=(), microphone=(), camera=(), payment=(), usb=(), interest-cohort=()'
            );
    }
}
