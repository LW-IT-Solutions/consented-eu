<?php

declare(strict_types=1);

namespace Consented\Auth;

use Consented\Core\Captcha;
use Consented\Core\Request;

/**
 * What a captcha result means for the three doors into an account.
 *
 * One place, on purpose. MousePlayer keeps this decision in five copies, and
 * they have already drifted: three of them block when Google is unreachable,
 * one lets the request through, and only the last one says why. With no shared
 * timeout, an outage at Google there means every login hangs for a minute and
 * then tells the person they look like a bot.
 *
 * Our decision, once, with the reason:
 *
 *   - Proven bot (`isBot`) — refuse. Google answered, and the answer was no.
 *   - Could not check — let it through. That is not evidence of anything, and
 *     the rate limiter is the real barrier at these three doors: five attempts
 *     per address and per IP, then a lockout. A captcha that cannot be reached
 *     must not be able to lock every account out of the product; for the login
 *     of a consent tool, "nobody gets in today" is a worse failure than "a bot
 *     had to get past the rate limit as well".
 *
 * A door where the damage is bigger than a failed login — deleting an account,
 * moving money — would decide the other way, and should say so at its own call
 * site rather than change this one.
 */
final class AuthCaptcha
{
    public const LOGIN = 'login';
    public const REGISTER = 'register';
    public const PASSWORD_RESET = 'password_reset';

    /**
     * True only with positive evidence that this was a bot.
     */
    public static function rejects(Request $request, string $action): bool
    {
        return Captcha::verify(
            (string) $request->input('g-recaptcha-response', ''),
            $action
        )->isBot();
    }
}
