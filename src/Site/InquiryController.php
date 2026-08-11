<?php

declare(strict_types=1);

namespace Consented\Site;

use Consented\Core\Captcha;
use Consented\Core\Controller;
use Consented\Core\Csp;
use Consented\Core\Hash;
use Consented\Core\Lang;
use Consented\Core\RateLimiter;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\Sanitizer;
use Consented\Core\Signal;

/**
 * The contact form.
 *
 * A page, not a modal. A modal would need a click handler, and the dashboard
 * runs without 'unsafe-inline' and without 'unsafe-hashes' — an `onclick`
 * attribute is silently discarded. A page also survives a reload, can be
 * linked to from an error page, and works with the keyboard without anybody
 * having to build a focus trap.
 *
 * Open to anonymous senders on purpose. Somebody who cannot log in is exactly
 * the person who most needs to reach us.
 */
final class InquiryController extends Controller
{
    /** Per hour and IP. Generous for a human, useless for a flood. */
    private const MAX_PER_HOUR = 5;
    private const WINDOW = 3600;

    /** The action name reCAPTCHA reports back; checked server-side. */
    public const CAPTCHA_ACTION = 'inquiry';

    public function form(Request $request): Response
    {
        Csp::allowCaptcha();

        return $this->view('site/inquiry', [
            'title'    => __('inquiry.title'),
            'topics'   => Inquiry::TOPICS,
            'prefill'  => $this->user()?->email() ?? '',
            'from'     => (string) ($request->query['from'] ?? ''),
            'siteKey'  => Captcha::siteKey(),
            'action'   => self::CAPTCHA_ACTION,
        ], 'layouts/marketing');
    }

    public function store(Request $request): Response
    {
        $ipKey = 'inquiry:' . Hash::ip($request->ip());

        if (RateLimiter::tooManyAttempts($ipKey, self::MAX_PER_HOUR)) {
            $this->flash('error', __('inquiry.throttled'));

            return $this->redirect('/kontakt');
        }

        /*
         * Honigtopf.
         *
         * Ein Feld, das eine Person nie sieht und nie ausfüllt. Es ist keine
         * Sicherheitsgrenze — wer es kennt, umgeht es —, aber es kostet nichts
         * und nimmt den Formularrobotern die einfachste Runde ab, bevor
         * überhaupt eine Anfrage an Google geht.
         *
         * Die Antwort ist bewusst dieselbe wie bei Erfolg. Ein "du bist ein
         * Bot" wäre eine Rückmeldung, aus der sich der nächste Versuch
         * verbessern lässt.
         */
        if (trim((string) $request->input('website', '')) !== '') {
            RateLimiter::hit($ipKey, self::WINDOW);

            return $this->accepted();
        }

        $this->validate($request->post, [
            'email'   => 'required|email|max:190',
            'topic'   => 'required|in:' . implode(',', Inquiry::TOPICS),
            'message' => 'required|min:10|max:' . Inquiry::MESSAGE_MAX,
        ], '/kontakt');

        $check = Captcha::verify(
            (string) $request->input('g-recaptcha-response', ''),
            self::CAPTCHA_ACTION
        );

        /*
         * Nur nachgewiesene Bots werden abgewiesen.
         *
         * `couldNotCheck()` heißt, dass Google nicht erreichbar war, nicht
         * konfiguriert ist oder etwas Unlesbares geantwortet hat. Daraus einen
         * Abweis zu machen hieße: fällt Google aus, kann uns niemand mehr
         * erreichen — und ausgerechnet die Störungsmeldung käme nicht durch.
         *
         * Die Ratenbegrenzung oben ist hier die eigentliche Grenze; das
         * Captcha ist der billigere Filter davor. Dass nicht geprüft werden
         * konnte, wird als NULL gespeichert und im Admin angezeigt, damit eine
         * stille Dauerstörung auffällt.
         */
        if ($check->isBot()) {
            RateLimiter::hit($ipKey, self::WINDOW);
            $this->flash('error', __('inquiry.captcha_failed'));

            return $this->redirect('/kontakt');
        }

        RateLimiter::hit($ipKey, self::WINDOW);

        Inquiry::create([
            'user_id'       => $this->user()?->id(),
            'email'         => strtolower(trim((string) $request->input('email', ''))),
            'topic'         => (string) $request->input('topic', 'other'),
            'message'       => Sanitizer::text((string) $request->input('message', '')),
            'source_url'    => (string) $request->input('source_url', ''),
            'locale'        => Lang::current(),
            // Regel 4: nie eine Klartext-IP. Der Hash trägt die
            // Missbrauchserkennung und sonst nichts.
            'ip_hash'       => Hash::ip($request->ip()),
            'user_agent'    => $request->userAgent(),
            'captcha_score' => $check->score,
        ]);

        /*
         * Erst dauerhaft speichern, dann klingeln.
         *
         * Andersherum könnte eine Anfrage gemeldet werden, die es nicht in die
         * Datenbank geschafft hat — und der Betreiber sucht etwas, das nicht
         * da ist. Das Ergebnis des Signals ändert die Antwort an den Absender
         * nicht: seine Anfrage liegt vor, ob Telegram erreichbar war oder nicht.
         */
        Signal::supportRequest();

        return $this->accepted();
    }

    private function accepted(): Response
    {
        $this->flash('success', __('inquiry.received'));

        return $this->redirect('/kontakt');
    }
}
