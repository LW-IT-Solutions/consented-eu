<?php

declare(strict_types=1);

use Consented\Core\Lang;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/**
 * Sprachumschalter.
 *
 * Reine Links, kein JavaScript und kein Formular: der Wechsel ist idempotent
 * und muss auch dann funktionieren, wenn Skripte blockiert sind — was auf
 * einer Datenschutz-Website häufiger vorkommt als anderswo.
 */
$current = Lang::current();
$compact = $compact ?? false;
?>
<nav class="langswitch<?= $compact ? ' langswitch--compact' : '' ?>"
     aria-label="<?= $this->t('lang.switch_label') ?>">
    <?php foreach (Lang::available() as $code => $name): ?>
        <?php if ($code === $current): ?>
            <span class="langswitch__item" aria-current="true" title="<?= $this->e($name) ?>">
                <?= $this->e(strtoupper($code)) ?>
            </span>
        <?php else: ?>
            <a class="langswitch__item" href="<?= $this->e(Url::withLang($code)) ?>"
               hreflang="<?= $this->e($code) ?>" title="<?= $this->e($name) ?>"
               rel="nofollow">
                <?= $this->e(strtoupper($code)) ?>
            </a>
        <?php endif; ?>
    <?php endforeach; ?>
</nav>
