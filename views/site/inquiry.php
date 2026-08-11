<?php

declare(strict_types=1);

use Consented\Core\Captcha;
use Consented\Core\Icon;
use Consented\Core\Url;
use Consented\Site\Inquiry;

/** @var \Consented\Core\View $this */
/** @var list<string> $topics */
/** @var string $prefill */
/** @var string $from */
/** @var string $action */
$errors = $errors ?? [];
$old    = $old ?? [];
?>
<div class="container container--narrow section">

    <div class="page-head">
        <div>
            <h1 class="page-head__title"><?= $this->t('inquiry.title') ?></h1>
            <p class="page-head__sub"><?= $this->t('inquiry.subtitle') ?></p>
        </div>
    </div>

    <div class="card">
        <div class="card__body">
            <form method="post" id="inquiry-form" action="<?= $this->e(Url::to('/kontakt')) ?>" novalidate>
                <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                <input type="hidden" name="g-recaptcha-response" value="">

                <?php /* Woher abgeschickt wurde. Nur zur Zuordnung, wird nie gefolgt. */ ?>
                <input type="hidden" name="source_url" value="<?= $this->e($from) ?>">

                <?php
                /*
                 * Honigtopf. Aus dem Barrierefreiheitsbaum und aus dem Tabfluss
                 * genommen, nicht nur optisch versteckt: eine Person, die mit
                 * der Tastatur oder einem Screenreader arbeitet, darf hier nie
                 * landen. `display:none` allein wäre für manche Ausfüllhelfer
                 * kein Hindernis, deshalb zusätzlich autocomplete="off".
                 */
                ?>
                <div style="position:absolute;left:-9999px" aria-hidden="true">
                    <label for="website">Website</label>
                    <input type="text" id="website" name="website" tabindex="-1" autocomplete="off" value="">
                </div>

                <div class="field">
                    <label class="label" for="email"><?= $this->t('common.email') ?></label>
                    <input class="input" type="email" id="email" name="email" required
                           autocomplete="email" autocapitalize="none" spellcheck="false"
                           value="<?= $this->e($old['email'] ?? $prefill) ?>"
                           <?= isset($errors['email']) ? 'aria-invalid="true" aria-describedby="email-error"' : '' ?>>
                    <?php if (isset($errors['email'][0])): ?>
                        <p class="error-text" id="email-error"><?= $this->e($errors['email'][0]) ?></p>
                    <?php endif; ?>
                    <p class="help"><?= $this->t('inquiry.email_help') ?></p>
                </div>

                <div class="field">
                    <label class="label" for="topic"><?= $this->t('inquiry.topic') ?></label>
                    <select class="select" id="topic" name="topic">
                        <?php foreach ($topics as $topic): ?>
                            <option value="<?= $this->e($topic) ?>"
                                <?= ($old['topic'] ?? 'question') === $topic ? 'selected' : '' ?>>
                                <?= $this->t('inquiry.topic_' . $topic) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="field">
                    <label class="label" for="message"><?= $this->t('inquiry.message') ?></label>
                    <textarea class="input" id="message" name="message" rows="7" required
                              maxlength="<?= Inquiry::MESSAGE_MAX ?>"
                              <?= isset($errors['message']) ? 'aria-invalid="true" aria-describedby="message-error"' : '' ?>
                    ><?= $this->e($old['message'] ?? '') ?></textarea>
                    <?php if (isset($errors['message'][0])): ?>
                        <p class="error-text" id="message-error"><?= $this->e($errors['message'][0]) ?></p>
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn btn--primary btn--lg"><?= $this->t('inquiry.submit') ?></button>
            </form>
        </div>
    </div>

    <div class="alert alert--info mt-5">
        <span class="alert__icon"><?= Icon::render('info', 18) ?></span>
        <div class="alert__body">
            <?= $this->tr('inquiry.privacy_note', ['url' => Url::to('/legal/privacy')]) ?>
        </div>
    </div>

    <?php if (Captcha::active()): ?>
        <p class="tiny muted mt-3">
            <?php /* Von Google gefordert, wenn das Abzeichen nicht sichtbar wäre — und
                     ohnehin die ehrlichere Angabe: hier läuft fremder Code. */ ?>
            <?= $this->tr('inquiry.recaptcha_note') ?>
        </p>
    <?php endif; ?>
</div>

<?php $this->include('partials/captcha', ['formId' => 'inquiry-form', 'action' => $action]); ?>
