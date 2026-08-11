<?php

declare(strict_types=1);

namespace Consented\Core;

/**
 * The smallest outbound HTTP client this project needs.
 *
 * Two callers, both talking to one well-known endpoint each: the captcha
 * verifier and the Telegram signal. Neither needs redirects, cookies, streaming
 * or retries, so this is a form POST and nothing else.
 *
 * Why it exists at all rather than a `file_get_contents` in each place: a
 * stream context has no connect timeout, defaults to `default_socket_timeout`
 * (60 s), and offers no way to see *why* a request failed. A login form that
 * hangs for a minute because Google is unreachable — and then tells the person
 * they look like a bot — is a real failure mode, not a hypothetical one.
 *
 * TLS verification is set explicitly even though libcurl already defaults to
 * it. The default is one edited `php.ini` or one copied option block away from
 * being off, and these two requests carry a shared secret and a bot token.
 */
final class Http
{
    /** Never wait longer than this for the whole exchange. */
    public const TIMEOUT = 4;

    /**
     * POST an urlencoded form and return the raw body.
     *
     * Returns null for every kind of failure — DNS, TLS, timeout, or any
     * status outside 2xx. Callers must treat null as "I could not ask", which
     * is not the same as "the answer was no". Keeping those two apart is the
     * entire point of this return type.
     *
     * @param array<string,scalar> $fields
     */
    public static function postForm(string $url, array $fields, int $timeout = self::TIMEOUT): ?string
    {
        if (!function_exists('curl_init')) {
            return null;
        }

        $ch = curl_init();

        if ($ch === false) {
            return null;
        }

        curl_setopt_array($ch, [
            CURLOPT_URL            => $url,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => http_build_query($fields),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT        => $timeout,
            CURLOPT_CONNECTTIMEOUT => min(2, $timeout),
            // No redirect following. Both endpoints answer directly; a
            // redirect here would mean something changed that we should look
            // at, not something to chase with a secret in the body.
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_HTTPHEADER     => ['Content-Type: application/x-www-form-urlencoded'],
            CURLOPT_USERAGENT      => 'consented.eu',
        ]);

        $body   = curl_exec($ch);
        $status = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);

        curl_close($ch);

        if (!is_string($body) || $status < 200 || $status >= 300) {
            return null;
        }

        return $body;
    }
}
