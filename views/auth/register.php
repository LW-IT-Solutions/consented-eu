<?php

declare(strict_types=1);

use Consented\Core\Csp;
use Consented\Core\Url;
use Consented\Core\Validator;

/** @var \Consented\Core\View $this */
$errors = $errors ?? [];
$old    = $old ?? [];
$pwMin  = Validator::PASSWORD_MIN_LENGTH;

/*
 * Texte für die Passwort-Anzeige unten: das Skript braucht sie als JS-Strings,
 * deshalb hier einmal übersetzt und weiter unten als JSON eingebettet.
 *
 * `remaining` ist eine Liste, nicht ein Muster mit Platzhalter. Die Zahl kennt
 * nur der Browser — sie ändert sich mit jedem Tastendruck —, und eine
 * Pluralform darf trotzdem nicht in JavaScript gewählt werden: die Regel steht
 * in Lang und soll dort bleiben. Weil der Bereich beschränkt ist (1 bis
 * PASSWORD_MIN_LENGTH − 1), rendert der Server einfach jeden Satz einmal, und
 * das Skript greift über den Index zu. Elf kurze Zeichenketten gegen eine
 * zweite Kopie der polnischen Pluralregel.
 */
$remaining = [];

for ($n = 1; $n < $pwMin; $n++) {
    $remaining[$n] = $this->tr('auth.register.password_remaining', ['count' => $n]);
}

$pwText = [
    'hint'      => $this->tr('auth.register.password_hint'),
    'remaining' => $remaining,
    'good'      => $this->tr('auth.register.password_good'),
    'fair'      => $this->tr('auth.register.password_fair'),
];
?>
<h1 class="auth__title"><?= $this->t('auth.register.title') ?></h1>
<p class="auth__sub"><?= $this->t('auth.register.subtitle') ?></p>

<form method="post" action="<?= $this->e(Url::to('/register')) ?>" id="form-register" novalidate>
    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
        <input type="hidden" name="g-recaptcha-response" value="">

    <div class="field">
        <label class="label" for="name"><?= $this->t('common.name') ?></label>
        <input class="input" type="text" id="name" name="name" required autocomplete="name" autofocus
               value="<?= $this->e($old['name'] ?? '') ?>"
               <?= isset($errors['name']) ? 'aria-invalid="true"' : '' ?>>
        <?php if (isset($errors['name'][0])): ?>
            <p class="error-text"><?= $this->e($errors['name'][0]) ?></p>
        <?php endif; ?>
    </div>

    <div class="field">
        <label class="label" for="company">
            <?= $this->t('auth.register.company') ?> <span class="label__optional">— <?= $this->t('common.optional') ?></span>
        </label>
        <input class="input" type="text" id="company" name="company" autocomplete="organization"
               value="<?= $this->e($old['company'] ?? '') ?>">
        <p class="help"><?= $this->tr('auth.register.company_help') ?></p>
    </div>

    <div class="field">
        <label class="label" for="email"><?= $this->t('common.email') ?></label>
        <input class="input" type="email" id="email" name="email" required
               autocomplete="username" autocapitalize="none" spellcheck="false"
               value="<?= $this->e($old['email'] ?? '') ?>"
               <?= isset($errors['email']) ? 'aria-invalid="true"' : '' ?>>
        <?php if (isset($errors['email'][0])): ?>
            <p class="error-text"><?= $this->e($errors['email'][0]) ?></p>
        <?php endif; ?>
    </div>

    <div class="field">
        <label class="label" for="password"><?= $this->t('common.password') ?></label>
        <input class="input" type="password" id="password" name="password" required
               autocomplete="new-password" minlength="<?= $pwMin ?>"
               <?= isset($errors['password']) ? 'aria-invalid="true"' : '' ?>>
        <div class="meter mt-2" aria-hidden="true">
            <div class="meter__fill" id="pw-meter" style="width:0"></div>
        </div>
        <p class="help" id="pw-hint"><?= $this->t('auth.register.password_hint') ?></p>
        <?php if (isset($errors['password'][0])): ?>
            <p class="error-text"><?= $this->e($errors['password'][0]) ?></p>
        <?php endif; ?>
    </div>

    <div class="field">
        <label class="label" for="password_confirmation"><?= $this->t('auth.password_confirm') ?></label>
        <input class="input" type="password" id="password_confirmation" name="password_confirmation" required
               autocomplete="new-password"
               <?= isset($errors['password_confirmation']) ? 'aria-invalid="true"' : '' ?>>
        <?php if (isset($errors['password_confirmation'][0])): ?>
            <p class="error-text"><?= $this->e($errors['password_confirmation'][0]) ?></p>
        <?php endif; ?>
    </div>

    <div class="field">
        <label class="checkbox">
            <input type="checkbox" name="terms" value="1" required>
            <span>
                <?= $this->tr('auth.register.terms_accept', [
                    'terms_url'   => Url::to('/legal/terms'),
                    'privacy_url' => Url::to('/legal/privacy'),
                ]) ?>
            </span>
        </label>
        <?php if (isset($errors['terms'][0])): ?>
            <p class="error-text"><?= $this->e($errors['terms'][0]) ?></p>
        <?php endif; ?>
    </div>

    <button type="submit" class="btn btn--primary btn--block btn--lg"><?= $this->t('auth.register.submit') ?></button>
</form>

<div class="divider"><?= $this->t('auth.register.have_account') ?></div>

<a class="btn btn--secondary btn--block" href="<?= $this->e(Url::to('/login')) ?>"><?= $this->t('auth.login.submit') ?></a>

<script nonce="<?= $this->e(Csp::nonce()) ?>">
(function () {
    var TEXT  = <?= json_encode($pwText, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_THROW_ON_ERROR) ?>;
    var PW_MIN = <?= (int) $pwMin ?>;
    var input = document.getElementById('password');
    var meter = document.getElementById('pw-meter');
    var hint  = document.getElementById('pw-hint');
    if (!input || !meter) return;

    // Rough client-side feedback only. The authoritative check is server-side
    // in Validator::checkPassword — this exists so the user is not surprised
    // by a rejection after submitting.
    function score(v) {
        if (!v) return 0;
        var s = Math.min(v.length / 20, 1) * 60;
        if (/[a-z]/.test(v) && /[A-Z]/.test(v)) s += 10;
        if (/\d/.test(v)) s += 10;
        if (/[^A-Za-z0-9]/.test(v)) s += 10;
        if (new Set(v).size > 8) s += 10;
        return Math.min(Math.round(s), 100);
    }

    input.addEventListener('input', function () {
        var s = score(input.value);
        meter.style.width = s + '%';
        meter.className = 'meter__fill' + (s >= 70 ? ' meter__fill--success' : (s >= 40 ? ' meter__fill--warning' : ''));

        if (input.value.length === 0) {
            hint.textContent = TEXT.hint;
        } else if (input.value.length < PW_MIN) {
            /* Der Server hat jeden Satz schon fertig übersetzt und in die
               richtige Pluralform gebracht — hier wird nur nachgeschlagen. */
            hint.textContent = TEXT.remaining[PW_MIN - input.value.length] || '';
        } else {
            hint.textContent = s >= 70 ? TEXT.good : TEXT.fair;
        }
    });
})();
</script>

<?php $this->include('partials/captcha', ['formId' => 'form-register', 'action' => \Consented\Auth\AuthCaptcha::REGISTER]); ?>
