<?php

declare(strict_types=1);

namespace Consented\Core;

/**
 * Transactional e-mail.
 *
 * Two ways out, chosen by the `mail_transport` setting:
 *
 *  - "mail"  hands the message to the host MTA through PHP's mail(), the way
 *    MousePlayer's send_mp_email() did.
 *  - "smtp"  speaks SMTP to a mail server directly. It exists because a
 *    self-hoster on shared hosting or in a container usually has no MTA, and
 *    without one they never receive a verification mail — no confirmed
 *    address, no property, no usable instance. Roughly a hundred lines of
 *    socket code is cheaper than the dependency that would otherwise be
 *    required to get the first user through the door.
 *
 * Around both:
 *
 *  - Every send is recorded in `mail_log` with its body, so a verification
 *    link is never lost even when delivery fails.
 *  - A master switch (`mail_enabled`). While it is off nothing is handed to a
 *    transport at all and messages are recorded as "suppressed" — the honest
 *    state for an instance whose mail service is not configured yet.
 *
 * The SMTP password is read from .env, never from `site_settings`: Settings
 * keeps secrets out of the database on purpose, and a credential that the
 * application can display is a credential an admin session can exfiltrate.
 */
final class Mail
{
    /** Seconds to wait for the connect and for each server reply. */
    private const SMTP_TIMEOUT = 15;

    /** Server replies are quoted into mail_log.error, which is VARCHAR(500). */
    private const MAX_REPLY_CHARS = 300;

    public static function send(string $to, string $subject, string $contentHtml): bool
    {
        return self::deliver($to, $subject, $contentHtml)['ok'];
    }

    /**
     * Same as send(), but hands back what happened.
     *
     * The admin test send needs the server's own answer to be of any use — an
     * operator can act on "535 authentication failed", not on "failed".
     *
     * @return array{ok:bool,status:string,error:string|null}
     */
    public static function deliver(string $to, string $subject, string $contentHtml): array
    {
        // Header injection defence: a newline in any of these would let a
        // crafted display name append arbitrary headers or a second recipient.
        $to        = self::stripBreaks($to);
        $subject   = self::stripBreaks($subject);
        $fromEmail = self::stripBreaks(Settings::get('smtp_from_email', 'noreply@consented.eu'));
        $fromName  = self::stripBreaks(Settings::get('smtp_from_name', (string) Env::get('APP_NAME', 'consented.eu')));

        $finalHtml = str_replace('{{CONTENT}}', $contentHtml, self::template());

        if (!Settings::bool('mail_enabled')) {
            $error = __('mail.error.disabled');
            self::record($to, $subject, $finalHtml, 'suppressed', $error);

            return ['ok' => false, 'status' => 'suppressed', 'error' => $error];
        }

        $error = self::transport() === 'smtp'
            ? self::sendViaSmtp($to, $subject, $finalHtml, $fromEmail, $fromName)
            : self::sendViaMta($to, $subject, $finalHtml, $fromEmail, $fromName);

        $status = $error === null ? 'sent' : 'failed';
        self::record($to, $subject, $finalHtml, $status, $error);

        return ['ok' => $error === null, 'status' => $status, 'error' => $error];
    }

    public static function transport(): string
    {
        return Settings::oneOf('mail_transport', Settings::TRANSPORTS, 'mail');
    }

    /**
     * Is the SMTP credential present in .env?
     *
     * The admin page shows this and nothing else about the password — whether
     * it is set is operational information, its value is not.
     */
    public static function smtpPasswordConfigured(): bool
    {
        return self::smtpPassword() !== '';
    }

    /**
     * SMTP password from .env, under either name.
     *
     * SMTP_PASSWORD is the documented one. SMTP_PASS is accepted because it is
     * what installations set up before this transport existed already carry —
     * silently ignoring it would mean authentication fails with a correct-looking
     * configuration, which is the worst kind of failure to debug.
     */
    private static function smtpPassword(): string
    {
        $password = (string) Env::get('SMTP_PASSWORD', '');

        return $password !== '' ? $password : (string) Env::get('SMTP_PASS', '');
    }

    /* ------------------------------------------------------------------ MTA */

    private static function sendViaMta(
        string $to,
        string $subject,
        string $html,
        string $fromEmail,
        string $fromName
    ): ?string {
        $headers = "MIME-Version: 1.0\r\n"
            . "Content-type: text/html; charset=utf-8\r\n"
            . 'From: ' . self::encodeHeader($fromName) . ' <' . $fromEmail . ">\r\n"
            . 'Reply-To: ' . $fromEmail . "\r\n"
            . 'X-Mailer: PHP/' . phpversion();

        $sent = @mail($to, self::encodeHeader($subject), $html, $headers);

        return $sent ? null : __('mail.error.mta');
    }

    /* ----------------------------------------------------------------- SMTP */

    /** @return string|null null on success, otherwise a message for the operator */
    private static function sendViaSmtp(
        string $to,
        string $subject,
        string $html,
        string $fromEmail,
        string $fromName
    ): ?string {
        $host       = Settings::get('smtp_host');
        $port       = Settings::int('smtp_port', 587);
        $encryption = Settings::oneOf('smtp_encryption', Settings::ENCRYPTIONS, 'tls');

        if ($host === '') {
            return __('mail.error.smtp_no_host');
        }

        $server = $host . ':' . $port;

        // "ssl" wraps the whole connection (implicit TLS, usually port 465);
        // "tls" connects in the clear and upgrades with STARTTLS (port 587).
        $address = ($encryption === 'ssl' ? 'ssl://' : 'tcp://') . $host . ':' . $port;

        $context = stream_context_create([
            'ssl' => [
                // Verified, not just encrypted. An unverified TLS session to a
                // mail server is an invitation to sit in the middle and read
                // password-reset links as they go past.
                'verify_peer'       => true,
                'verify_peer_name'  => true,
                'allow_self_signed' => false,
                'SNI_enabled'       => true,
                'peer_name'         => $host,
            ],
        ]);

        $errno  = 0;
        $errstr = '';

        $socket = @stream_socket_client(
            $address,
            $errno,
            $errstr,
            (float) self::SMTP_TIMEOUT,
            STREAM_CLIENT_CONNECT,
            $context
        );

        if ($socket === false) {
            return __('mail.error.smtp_connect', [
                'server' => $server,
                'reason' => self::clean($errstr !== '' ? $errstr : 'errno ' . $errno),
            ]);
        }

        stream_set_timeout($socket, self::SMTP_TIMEOUT);

        try {
            return self::smtpDialogue($socket, $server, $host, $encryption, $to, $subject, $html, $fromEmail, $fromName);
        } catch (\Throwable $e) {
            return __('mail.error.smtp_exception', [
                'server' => $server,
                'reason' => self::clean($e->getMessage()),
            ]);
        } finally {
            @fclose($socket);
        }
    }

    /**
     * The conversation itself: EHLO, optional STARTTLS, optional AUTH, then the
     * envelope and the message.
     *
     * @param  resource $socket
     * @return string|null null on success
     */
    private static function smtpDialogue(
        $socket,
        string $server,
        string $host,
        string $encryption,
        string $to,
        string $subject,
        string $html,
        string $fromEmail,
        string $fromName
    ): ?string {
        $greeting = self::smtpRead($socket);
        if ($greeting['code'] !== 220) {
            return self::smtpError('BANNER', $server, $greeting);
        }

        $helo = self::heloName($fromEmail);

        $ehlo = self::smtpCommand($socket, 'EHLO ' . $helo);
        if ($ehlo['code'] !== 250) {
            // A few very old servers only speak HELO. One extra round trip
            // keeps them usable; they simply advertise no extensions.
            $ehlo = self::smtpCommand($socket, 'HELO ' . $helo);
            if ($ehlo['code'] !== 250) {
                return self::smtpError('EHLO', $server, $ehlo);
            }
        }

        if ($encryption === 'tls') {
            $start = self::smtpCommand($socket, 'STARTTLS');
            if ($start['code'] !== 220) {
                return self::smtpError('STARTTLS', $server, $start);
            }

            // STREAM_CRYPTO_METHOD_TLS_CLIENT is TLS 1.0–1.2 only; PHP kept 1.3
            // out of it for backwards compatibility. Without the explicit OR a
            // server that offers nothing below TLS 1.3 cannot be reached.
            $method = STREAM_CRYPTO_METHOD_TLS_CLIENT;
            if (defined('STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT')) {
                $method |= STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT;
            }

            $crypto = @stream_socket_enable_crypto($socket, true, $method);
            if ($crypto !== true) {
                return __('mail.error.smtp_tls', ['server' => $server, 'host' => $host]);
            }

            // The capability list from before the upgrade cannot be trusted and
            // commonly differs, so it has to be asked for again on the
            // encrypted channel.
            $ehlo = self::smtpCommand($socket, 'EHLO ' . $helo);
            if ($ehlo['code'] !== 250) {
                return self::smtpError('EHLO', $server, $ehlo);
            }
        }

        if (Settings::bool('smtp_auth')) {
            $failure = self::smtpAuthenticate($socket, $server, $ehlo['text']);
            if ($failure !== null) {
                return $failure;
            }
        }

        $mailFrom = self::smtpCommand($socket, 'MAIL FROM:<' . $fromEmail . '>');
        if ($mailFrom['code'] !== 250) {
            return self::smtpError('MAIL FROM', $server, $mailFrom);
        }

        $rcpt = self::smtpCommand($socket, 'RCPT TO:<' . $to . '>');
        if (!in_array($rcpt['code'], [250, 251], true)) {
            return self::smtpError('RCPT TO', $server, $rcpt);
        }

        $data = self::smtpCommand($socket, 'DATA');
        if ($data['code'] !== 354) {
            return self::smtpError('DATA', $server, $data);
        }

        self::smtpWrite($socket, self::rfc822($to, $subject, $html, $fromEmail, $fromName) . "\r\n.\r\n");

        $accepted = self::smtpRead($socket);
        if ($accepted['code'] !== 250) {
            return self::smtpError('DATA (Abschluss)', $server, $accepted);
        }

        // Best effort: the message is already accepted, so a server that drops
        // the connection instead of answering QUIT changes nothing.
        self::smtpCommand($socket, 'QUIT');

        return null;
    }

    /**
     * @param  resource $socket
     * @param  string   $capabilities the EHLO response, for picking a mechanism
     * @return string|null null on success
     */
    private static function smtpAuthenticate($socket, string $server, string $capabilities): ?string
    {
        $username = Settings::get('smtp_username');
        $password = self::smtpPassword();

        if ($username === '' || $password === '') {
            return __('mail.error.smtp_no_credentials');
        }

        $mechanisms = self::authMechanisms($capabilities);

        // LOGIN first: it is the mechanism the widest range of servers accept,
        // and both are equally plaintext, so the choice is compatibility only.
        if (in_array('LOGIN', $mechanisms, true)) {
            $step = self::smtpCommand($socket, 'AUTH LOGIN');
            if ($step['code'] !== 334) {
                return self::smtpError('AUTH LOGIN', $server, $step);
            }

            $step = self::smtpCommand($socket, base64_encode($username));
            if ($step['code'] !== 334) {
                return self::smtpError('AUTH LOGIN (Benutzername)', $server, $step);
            }

            $step = self::smtpCommand($socket, base64_encode($password));
            if ($step['code'] !== 235) {
                return self::smtpError('AUTH LOGIN (Passwort)', $server, $step);
            }

            return null;
        }

        if (in_array('PLAIN', $mechanisms, true)) {
            $token = base64_encode("\0" . $username . "\0" . $password);

            $step = self::smtpCommand($socket, 'AUTH PLAIN ' . $token);
            if ($step['code'] !== 235) {
                return self::smtpError('AUTH PLAIN', $server, $step);
            }

            return null;
        }

        return __('mail.error.smtp_no_auth_method', ['server' => $server]);
    }

    /**
     * Mechanisms advertised on the EHLO response's AUTH line.
     *
     * Only that line counts. Searching the whole reply for the words "AUTH"
     * and "LOGIN" matched a hostname like login.example.com in the greeting and
     * made the client offer a mechanism the server had never announced.
     *
     * @param  string $capabilities smtpRead()'s joined reply, lines split by " / "
     * @return list<string>
     */
    private static function authMechanisms(string $capabilities): array
    {
        $mechanisms = [];

        foreach (explode(' / ', $capabilities) as $line) {
            // "250-AUTH LOGIN PLAIN" and the older "250-AUTH=LOGIN PLAIN".
            if (preg_match('/^\d{3}[ -]AUTH[ =]+(.*)$/i', trim($line), $matches) !== 1) {
                continue;
            }

            foreach (preg_split('/[\s=]+/', strtoupper(trim($matches[1]))) ?: [] as $name) {
                if ($name !== '' && !in_array($name, $mechanisms, true)) {
                    $mechanisms[] = $name;
                }
            }
        }

        return $mechanisms;
    }

    /**
     * @param  resource $socket
     * @return array{code:int,text:string,timeout:bool}
     */
    private static function smtpCommand($socket, string $command): array
    {
        self::smtpWrite($socket, $command . "\r\n");

        return self::smtpRead($socket);
    }

    /** @param resource $socket */
    private static function smtpWrite($socket, string $raw): void
    {
        $length  = strlen($raw);
        $written = 0;

        while ($written < $length) {
            $chunk = @fwrite($socket, substr($raw, $written));

            if ($chunk === false || $chunk === 0) {
                throw new \RuntimeException('write failed');
            }

            $written += $chunk;
        }
    }

    /**
     * Reads one reply, following the continuation lines of a multi-line answer.
     *
     * A reply line is "250 text" or, when more follow, "250-text"; the hyphen
     * in the fourth octet is the only marker.
     *
     * @param  resource $socket
     * @return array{code:int,text:string,timeout:bool}
     */
    private static function smtpRead($socket): array
    {
        $lines = [];

        while (true) {
            $line = @fgets($socket, 1024);

            if ($line === false) {
                $meta = stream_get_meta_data($socket);

                return ['code' => 0, 'text' => '', 'timeout' => ($meta['timed_out'] ?? false) === true];
            }

            $lines[] = rtrim($line, "\r\n");

            if (strlen($line) < 4 || $line[3] !== '-') {
                break;
            }
        }

        $last = $lines === [] ? '' : $lines[count($lines) - 1];

        return [
            'code'    => (int) substr($last, 0, 3),
            'text'    => implode(' / ', $lines),
            'timeout' => false,
        ];
    }

    /**
     * Turns a failed step into something an operator can act on.
     *
     * The reply code and the server's own words are the whole point: "Fehler"
     * tells nobody whether to fix DNS, the password or the firewall. The
     * command that was sent is never quoted — one of them carries the
     * base64-encoded password.
     *
     * @param array{code:int,text:string,timeout:bool} $reply
     */
    private static function smtpError(string $stage, string $server, array $reply): string
    {
        if ($reply['timeout']) {
            return __('mail.error.smtp_timeout', [
                'stage'   => $stage,
                'server'  => $server,
                'seconds' => (string) self::SMTP_TIMEOUT,
            ]);
        }

        if ($reply['code'] === 0) {
            return __('mail.error.smtp_closed', ['stage' => $stage, 'server' => $server]);
        }

        return __('mail.error.smtp', [
            'stage'  => $stage,
            'code'   => (string) $reply['code'],
            'server' => $server,
            'reply'  => self::clean($reply['text']),
        ]);
    }

    /**
     * The message as it goes over the wire.
     *
     * Quoted-printable rather than 8bit: SMTP caps a line at 1000 octets, and
     * Mail::layout() produces one long unbroken line of HTML that would sail
     * past that on a real message.
     */
    private static function rfc822(
        string $to,
        string $subject,
        string $html,
        string $fromEmail,
        string $fromName
    ): string {
        $domain = self::domainOf($fromEmail);

        $headers = [
            'Date: ' . gmdate('D, d M Y H:i:s') . ' +0000',
            'From: ' . self::encodeHeader($fromName) . ' <' . $fromEmail . '>',
            'To: ' . $to,
            'Subject: ' . self::encodeHeader($subject),
            'Message-ID: <' . bin2hex(random_bytes(12)) . '@' . $domain . '>',
            'Reply-To: ' . $fromEmail,
            'MIME-Version: 1.0',
            'Content-Type: text/html; charset=utf-8',
            'Content-Transfer-Encoding: quoted-printable',
            'X-Mailer: consented.eu',
        ];

        $body = quoted_printable_encode(self::normaliseBreaks($html));

        return implode("\r\n", $headers) . "\r\n\r\n" . self::dotStuff($body);
    }

    /**
     * Escapes a leading dot on every line.
     *
     * A line consisting of a single dot terminates DATA, so any line that
     * starts with one has to be doubled or the message truncates itself.
     */
    private static function dotStuff(string $body): string
    {
        $body = str_replace("\r\n.", "\r\n..", $body);

        return str_starts_with($body, '.') ? '.' . $body : $body;
    }

    private static function normaliseBreaks(string $text): string
    {
        return (string) preg_replace("/\r\n|\r|\n/", "\r\n", $text);
    }

    /**
     * Name announced in EHLO.
     *
     * Derived from APP_URL, because that is the host this instance actually
     * claims to be; several providers reject a greeting that does not resolve.
     */
    private static function heloName(string $fromEmail): string
    {
        $host = parse_url((string) Env::get('APP_URL', ''), PHP_URL_HOST);

        if (is_string($host) && $host !== '') {
            return $host;
        }

        return self::domainOf($fromEmail);
    }

    private static function domainOf(string $email): string
    {
        $at = strrpos($email, '@');

        if ($at === false) {
            return 'localhost';
        }

        $domain = substr($email, $at + 1);

        return $domain === '' ? 'localhost' : $domain;
    }

    /**
     * Makes a server's answer safe to store and display.
     *
     * Control characters out, and the encoding forced to UTF-8: replies are
     * supposed to be ASCII, but a misconfigured server sending Latin-1 would
     * otherwise produce a byte sequence that the utf8mb4 column rejects — and
     * the failed insert would take the diagnostic message with it.
     */
    private static function clean(string $text): string
    {
        $text = (string) preg_replace('/[\x00-\x1F\x7F]+/', ' ', $text);

        if (!mb_check_encoding($text, 'UTF-8')) {
            $text = mb_convert_encoding($text, 'UTF-8', 'ISO-8859-1');
        }

        return trim(mb_substr($text, 0, self::MAX_REPLY_CHARS));
    }

    private static function stripBreaks(string $value): string
    {
        return trim(str_replace(["\r", "\n", "\0"], '', $value));
    }

    /**
     * Subjects and display names may contain umlauts; raw UTF-8 in a header is
     * not valid, so anything outside printable ASCII gets RFC 2047 encoding.
     */
    private static function encodeHeader(string $value): string
    {
        if (preg_match('/^[\x20-\x7E]*$/', $value) === 1) {
            return $value;
        }

        return '=?UTF-8?B?' . base64_encode($value) . '?=';
    }

    private static function record(string $to, string $subject, string $html, string $status, ?string $error): void
    {
        try {
            Db::insert('mail_log', [
                'public_id'  => Uuid::v7(),
                'recipient'  => mb_substr($to, 0, 190),
                'subject'    => mb_substr($subject, 0, 255),
                'body_html'  => $html,
                'status'     => $status,
                'error'      => $error === null ? null : mb_substr($error, 0, 480),
                'created_at' => Clock::now(),
            ]);
        } catch (\Throwable $e) {
            // Never let bookkeeping break a registration.
            error_log('[consented] mail_log write failed: ' . $e->getMessage());
        }
    }

    /**
     * Global HTML shell. The message body replaces {{CONTENT}}.
     *
     * Table layout with inline styles, because that is still what survives
     * Outlook and Gmail intact.
     */
    private static function template(): string
    {
        $appName = htmlspecialchars(Settings::get('smtp_from_name', 'consented.eu'), ENT_QUOTES);
        $year    = gmdate('Y');
        $url     = htmlspecialchars(rtrim((string) Env::get('APP_URL', 'https://consented.eu'), '/'), ENT_QUOTES);

        return <<<HTML
<!doctype html>
<html lang="de"><head><meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1"></head>
<body style="margin:0;padding:0;background:#F7F8FB;">
<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#F7F8FB;padding:32px 16px">
<tr><td align="center">
  <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
         style="max-width:560px;background:#ffffff;border-radius:16px;border:1px solid #E3E6EC;
                font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Inter,Roboto,Helvetica,Arial,sans-serif">
    <tr><td style="padding:26px 32px 0;border-bottom:1px solid #E3E6EC">
      <a href="{$url}" style="text-decoration:none;color:#0A1E4A;font-size:17px;font-weight:700;
         letter-spacing:-0.01em;display:inline-block;padding-bottom:20px">{$appName}</a>
    </td></tr>
    <tr><td style="padding:28px 32px;font-size:15px;line-height:1.65;color:#3A4152">
      {{CONTENT}}
    </td></tr>
    <tr><td style="padding:0 32px 28px">
      <p style="margin:0;padding-top:18px;border-top:1px solid #E3E6EC;font-size:12px;
                line-height:1.6;color:#8A91A0">
        &copy; {$year} {$appName} — freie Consent-Management-Plattform.<br>
        Diese Nachricht wurde automatisch versendet.
      </p>
    </td></tr>
  </table>
</td></tr>
</table>
</body></html>
HTML;
    }

    /**
     * Builds the message body that goes into {{CONTENT}}.
     *
     * @param string      $heading   Headline
     * @param string      $bodyHtml  Already-safe HTML
     * @param string|null $ctaLabel  Button label, or null for no button
     * @param string|null $ctaUrl    Button target
     * @param string      $footNote  Small print under the button
     */
    public static function layout(
        string $heading,
        string $bodyHtml,
        ?string $ctaLabel = null,
        ?string $ctaUrl = null,
        string $footNote = ''
    ): string {
        $out = '<h1 style="margin:0 0 14px;font-size:21px;line-height:1.3;color:#10131A;font-weight:700">'
            . htmlspecialchars($heading, ENT_QUOTES) . '</h1>' . $bodyHtml;

        if ($ctaLabel !== null && $ctaUrl !== null) {
            $safeUrl = htmlspecialchars($ctaUrl, ENT_QUOTES);

            $out .= '<p style="margin:24px 0"><a href="' . $safeUrl . '" '
                . 'style="display:inline-block;background:#1B4BB8;color:#ffffff;text-decoration:none;'
                . 'padding:13px 26px;border-radius:8px;font-weight:600;font-size:15px">'
                . htmlspecialchars($ctaLabel, ENT_QUOTES) . '</a></p>'
                // The raw URL as a fallback: some clients strip the button, and
                // a verification mail whose link cannot be reached is useless.
                . '<p style="margin:0 0 20px;font-size:13px;color:#5A6273;line-height:1.6">'
                . 'Falls der Button nicht funktioniert, kopiere diesen Link in deinen Browser:<br>'
                . '<span style="color:#143A8C;word-break:break-all">' . $safeUrl . '</span></p>';
        }

        if ($footNote !== '') {
            $out .= '<p style="margin:0;font-size:13px;color:#5A6273;line-height:1.6">' . $footNote . '</p>';
        }

        return $out;
    }
}
