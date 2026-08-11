<?php

declare(strict_types=1);

/**
 * Application bootstrap: autoloading, environment, error handling.
 *
 * Required by public/index.php and by every script in bin/.
 */

const CONSENTED_ROOT = __DIR__;

// --- PSR-4 autoloader (Consented\ => src/) ---------------------------------
spl_autoload_register(static function (string $class): void {
    $prefix = 'Consented\\';

    if (!str_starts_with($class, $prefix)) {
        return;
    }

    $relative = substr($class, strlen($prefix));
    $file     = CONSENTED_ROOT . '/src/' . str_replace('\\', '/', $relative) . '.php';

    if (is_file($file)) {
        require $file;
    }
});

use Consented\Core\Env;
use Consented\Core\Lang;
use Consented\Core\View;

/**
 * Übersetzt einen Schlüssel. Gibt den Rohtext des Katalogs zurück — in Views
 * bitte $this->t() (escaped) oder $this->tr() (Markup erlaubt) verwenden.
 *
 * @param array<string,string|int> $replace
 */
function __(string $key, array $replace = []): string
{
    return Lang::get($key, $replace);
}

Env::load(CONSENTED_ROOT . '/.env');

View::setRoot(CONSENTED_ROOT . '/views');

// --- Error handling --------------------------------------------------------
$isDev = Env::get('APP_ENV', 'prod') === 'dev';

error_reporting(E_ALL);
ini_set('display_errors', $isDev ? '1' : '0');
ini_set('log_errors', '1');

// Turn notices and warnings into exceptions so they cannot be ignored.
set_error_handler(static function (int $severity, string $message, string $file, int $line): bool {
    if ((error_reporting() & $severity) === 0) {
        return false;
    }

    throw new ErrorException($message, 0, $severity, $file, $line);
});

// A fatal error still has to produce a valid response, not a blank page.
register_shutdown_function(static function () use ($isDev): void {
    $error = error_get_last();

    if ($error === null || !in_array($error['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR], true)) {
        return;
    }

    error_log(sprintf('[consented] fatal: %s @ %s:%d', $error['message'], $error['file'], $error['line']));

    if (PHP_SAPI === 'cli' || headers_sent()) {
        return;
    }

    http_response_code(500);
    header('Content-Type: text/html; charset=utf-8');

    echo '<!doctype html><meta charset="utf-8"><title>Fehler</title>'
        . '<div style="font:16px/1.5 system-ui;padding:3rem;max-width:40rem;margin:auto">'
        . '<h1 style="font-size:1.25rem">Es ist ein Fehler aufgetreten.</h1>'
        . '<p>Wir konnten diese Seite nicht ausliefern. Bitte versuche es erneut.</p>'
        . ($isDev ? '<pre style="white-space:pre-wrap;background:#f5f5f5;padding:1rem;border-radius:.5rem">'
            . htmlspecialchars($error['message'] . "\n" . $error['file'] . ':' . $error['line'], ENT_QUOTES) . '</pre>' : '')
        . '</div>';
});

date_default_timezone_set('UTC');

mb_internal_encoding('UTF-8');
