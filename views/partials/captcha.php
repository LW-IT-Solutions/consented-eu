<?php

declare(strict_types=1);

use Consented\Core\Captcha;
use Consented\Core\Csp;

/** @var \Consented\Core\View $this */
/** @var string $formId  id of the form to protect */
/** @var string $action  must match what the controller verifies */

/*
 * reCAPTCHA v3 für ein Formular.
 *
 * Einzubinden NACH dem Formular; das Formular braucht ein verstecktes Feld
 * `g-recaptcha-response` und der zugehörige Controller muss vorher
 * `Csp::allowCaptcha()` gerufen haben, sonst verwirft die Politik den Rahmen.
 *
 * Ohne Schlüssel passiert hier gar nichts. Das ist der einzige Ausschalter:
 * ein zweiter, boolescher, würde irgendwann anders stehen als dieser.
 */
if (!Captcha::active()) {
    return;
}

$nonce = Csp::nonce();
?>
<script nonce="<?= $this->e($nonce) ?>"
        src="https://www.google.com/recaptcha/api.js?render=<?= $this->e(rawurlencode(Captcha::siteKey())) ?>"
        async defer></script>

<script nonce="<?= $this->e($nonce) ?>">
(function () {
    'use strict';

    var form = document.getElementById(<?= json_encode($formId, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?>);
    var field = form && form.querySelector('input[name="g-recaptcha-response"]');

    if (!form || !field) { return; }

    var sending = false;

    /*
     * Absenden gewinnt immer.
     *
     * Der Knopf haelt das Formular nur so lange auf, wie das Holen des Tokens
     * dauert — laengstens aber WAIT_MS. Danach geht die Anfrage ohne Token
     * hinaus, und der Server sieht "konnte nicht pruefen" statt "Bot".
     *
     * Ohne diese Schranke waere jeder, der Google blockiert oder ein
     * Werbefilter benutzt, dauerhaft ausgesperrt — bei einem Kontaktformular
     * ausgerechnet die Person, die eine Stoerung melden will. Der Schutz sitzt
     * in der Ratenbegrenzung des Servers; das Captcha ist der billige Filter
     * davor, nicht das Tor.
     */
    var WAIT_MS = 3000;

    form.addEventListener('submit', function (event) {
        if (sending) { return; }

        event.preventDefault();
        sending = true;

        var done = false;

        var go = function () {
            if (done) { return; }
            done = true;
            form.submit();
        };

        window.setTimeout(go, WAIT_MS);

        try {
            grecaptcha.ready(function () {
                grecaptcha
                    .execute(<?= json_encode(Captcha::siteKey(), JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?>, {
                        action: <?= json_encode($action, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?>
                    })
                    .then(function (token) { field.value = token; go(); }, go);
            });
        } catch (e) {
            // grecaptcha gibt es nicht — Skript blockiert oder nicht geladen.
            go();
        }
    });
}());
</script>
