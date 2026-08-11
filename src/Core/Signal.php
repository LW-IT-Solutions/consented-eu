<?php

declare(strict_types=1);

namespace Consented\Core;

/**
 * A doorbell over Telegram. Deliberately not a message.
 *
 * The whole design follows from one decision: the text is a constant and the
 * method takes no arguments. That is not minimalism for its own sake — it is
 * what keeps Telegram out of the data protection picture.
 *
 * Send "a new enquiry has arrived" and Telegram learns that something happened.
 * Send the address, the subject or a reference number and Telegram becomes a
 * recipient of personal data, which makes Messenger LLC a processor under
 * Art. 28 GDPR: contract, records, transfer assessment, and a line in our own
 * privacy policy. For a notification that only means "go and look", that is an
 * absurd price. The enquiry itself never leaves our database.
 *
 * `signature: void -> bool` is the enforcement. A method with no parameters
 * cannot be handed a name later "just this once", and `tests/signal.php`
 * checks the source of this file so the property is not merely a convention.
 *
 * Two things this deliberately does not do:
 *
 *  - No `parse_mode`. With no markup there is nothing to escape, and Telegram's
 *    MarkdownV2 escaping is a reliable source of mistakes.
 *  - No link back to the admin page. Building one would mean reading the host
 *    from the request, and the request is the attacker's to shape — a forged
 *    Host header would write someone else's destination into the operator's
 *    own alerting channel.
 */
final class Signal
{
    private const API = 'https://api.telegram.org/bot';

    /**
     * The entire message. No placeholders, no interpolation, ever.
     *
     * If you find yourself wanting to add something here, that is the moment to
     * read the class comment again.
     */
    private const SUPPORT_MESSAGE = 'Supportanfrage (consented.eu) eingegangen.';

    /** Short: nobody may wait on a doorbell. */
    private const TIMEOUT = 3;

    /**
     * Whether a signal can be sent at all.
     *
     * The presence of both values is the switch. There is no separate boolean,
     * because a configured channel that is switched off is a state nobody
     * remembers setting.
     */
    public static function configured(): bool
    {
        return self::token() !== '' && self::chatId() !== '';
    }

    /**
     * Ring the doorbell.
     *
     * Returns false when nothing was sent — unconfigured, unreachable, or
     * refused. The caller records that. Discarding the result is how an
     * alerting channel dies quietly and is noticed weeks later, when someone
     * wonders why no enquiry ever arrived.
     */
    public static function supportRequest(): bool
    {
        if (!self::configured()) {
            return false;
        }

        // The token sits in the path, not in a query string. Query strings end
        // up in access logs, proxy logs and error reports; a bot token there is
        // a credential written down in three places nobody audits.
        $url = self::API . self::token() . '/sendMessage';

        $body = Http::postForm($url, [
            'chat_id' => self::chatId(),
            'text'    => self::SUPPORT_MESSAGE,
        ], self::TIMEOUT);

        return $body !== null;
    }

    private static function token(): string
    {
        return trim((string) Env::get('TELEGRAM_BOT_TOKEN', ''));
    }

    private static function chatId(): string
    {
        return trim((string) Env::get('TELEGRAM_CHAT_ID', ''));
    }
}
