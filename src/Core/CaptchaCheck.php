<?php

declare(strict_types=1);

namespace Consented\Core;

/**
 * The outcome of one captcha verification — with three answers, not two.
 *
 * This class exists because of a failure mode worth naming. If verification
 * collapses "the service said no" and "the service did not answer" into a
 * single false, then an outage at Google becomes an outage here: every login
 * is refused, and the message the person reads says they look like a bot.
 *
 * So the third state is the point. `BOT` is evidence. `UNAVAILABLE` is the
 * absence of evidence, and what to do about it is a property of the protected
 * action, not of the captcha — a contact form can afford to wave it through
 * behind a rate limit, a payment could not. Every caller decides for itself,
 * and has to say why in a comment.
 */
final class CaptchaCheck
{
    /** Verified, and the score cleared the threshold. */
    public const HUMAN = 'human';

    /** Verified, and rejected: token invalid, wrong action, or score too low. */
    public const BOT = 'bot';

    /** Not verified: not configured, unreachable, or an unreadable answer. */
    public const UNAVAILABLE = 'unavailable';

    private function __construct(
        public readonly string $verdict,
        public readonly ?float $score,
        /** Short machine-readable cause, for the log and the admin list. */
        public readonly string $detail,
    ) {
    }

    public static function human(float $score): self
    {
        return new self(self::HUMAN, $score, '');
    }

    public static function bot(?float $score, string $detail): self
    {
        return new self(self::BOT, $score, $detail);
    }

    public static function unavailable(string $detail): self
    {
        return new self(self::UNAVAILABLE, null, $detail);
    }

    /** True only with positive evidence of a bot. Never true on an outage. */
    public function isBot(): bool
    {
        return $this->verdict === self::BOT;
    }

    public function couldNotCheck(): bool
    {
        return $this->verdict === self::UNAVAILABLE;
    }
}
