<?php

declare(strict_types=1);

namespace Consented\Core;

/**
 * reCAPTCHA v3 — the invisible, score-based variant.
 *
 * v3 shows nothing and asks nothing. It observes the session and returns a
 * score between 0.0 and 1.0, and the site decides where to draw the line.
 * That matters for this project in particular: a puzzle that has to be solved
 * before a contact form is a barrier, and we would rather not build one.
 *
 * The off switch is an empty key. There is deliberately no separate boolean
 * setting and no "disabled in development" branch: two switches for one
 * question always drift, and the branch that skips verification is exactly the
 * branch nobody notices staying on in production.
 *
 * The visitor's IP is never sent along. Google's API accepts an optional
 * `remoteip`, and passing it would hand a plaintext address to a third party —
 * which is the thing rule 4 exists to prevent. It is not an oversight; the
 * score is computed from the token either way.
 */
final class Captcha
{
    private const VERIFY_URL = 'https://www.google.com/recaptcha/api/siteverify';

    /** Google's own recommendation when a site has no data of its own yet. */
    private const DEFAULT_MIN_SCORE = 0.5;

    public static function siteKey(): string
    {
        return trim((string) Env::get('RECAPTCHA_SITE_KEY', ''));
    }

    private static function secret(): string
    {
        return trim((string) Env::get('RECAPTCHA_SECRET', ''));
    }

    /**
     * Whether a page should load the script and verify at all.
     *
     * Both halves are required. A site key without a secret would render the
     * widget and then wave every submission through — the appearance of a
     * protection without the protection, which is worse than neither.
     */
    public static function active(): bool
    {
        return self::siteKey() !== '' && self::secret() !== '';
    }

    public static function minScore(): float
    {
        $raw = (float) Env::get('RECAPTCHA_MIN_SCORE', (string) self::DEFAULT_MIN_SCORE);

        // A threshold outside the range would either block everyone or nobody,
        // and both look like the feature working until someone checks.
        return ($raw > 0.0 && $raw <= 1.0) ? $raw : self::DEFAULT_MIN_SCORE;
    }

    /**
     * Verify one token for one expected action.
     *
     * `$expectedAction` is checked against what Google reports. Without it, a
     * token minted on a harmless page — a contact form, say — could be replayed
     * against the login form, because the site key is the same for the whole
     * site. Checking it costs one comparison.
     *
     * The hostname in the answer is deliberately not checked: reCAPTCHA keys
     * are already bound to their domains in Google's console, and a second
     * check here would break every self-hoster who runs the same code on a
     * domain we cannot know.
     */
    public static function verify(string $token, string $expectedAction): CaptchaCheck
    {
        if (!self::active()) {
            return CaptchaCheck::unavailable('not_configured');
        }

        if ($token === '') {
            // No token means the browser never ran the script — an old tab, a
            // blocked request, or a plain POST from a script. Not evidence of
            // a bot on its own, so the caller still decides.
            return CaptchaCheck::unavailable('no_token');
        }

        $body = Http::postForm(self::VERIFY_URL, [
            'secret'   => self::secret(),
            'response' => $token,
        ]);

        if ($body === null) {
            return CaptchaCheck::unavailable('unreachable');
        }

        $data = json_decode($body, true);

        if (!is_array($data)) {
            return CaptchaCheck::unavailable('unreadable');
        }

        if (($data['success'] ?? false) !== true) {
            $codes = $data['error-codes'] ?? [];
            $first = is_array($codes) && $codes !== [] ? (string) reset($codes) : 'rejected';

            // Two of Google's error codes say something about us, not about the
            // visitor: a wrong or missing secret is a misconfiguration, and
            // punishing the visitor for it would hide the real fault.
            if (in_array($first, ['invalid-input-secret', 'missing-input-secret'], true)) {
                return CaptchaCheck::unavailable($first);
            }

            return CaptchaCheck::bot(null, $first);
        }

        $action = isset($data['action']) ? (string) $data['action'] : '';

        if ($action !== $expectedAction) {
            return CaptchaCheck::bot(null, 'action_mismatch');
        }

        // v3 always returns a score; a missing one means we are not talking to
        // v3 and should not pretend to have measured anything.
        if (!isset($data['score']) || !is_numeric($data['score'])) {
            return CaptchaCheck::unavailable('no_score');
        }

        $score = (float) $data['score'];

        return $score >= self::minScore()
            ? CaptchaCheck::human($score)
            : CaptchaCheck::bot($score, 'low_score');
    }
}
