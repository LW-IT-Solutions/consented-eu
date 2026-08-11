<?php

declare(strict_types=1);

use Consented\Core\Csp;
use Consented\Core\Icon;

/** @var \Consented\Core\View $this */
/** @var list<array{type:string,message:string}> $flashes */
$flashes = $flashes ?? [];

if ($flashes === []) {
    return;
}
?>
<div class="toasts" role="status" aria-live="polite">
    <?php foreach ($flashes as $flash): ?>
        <?php
        $type = in_array($flash['type'], ['success', 'error', 'warning', 'info'], true) ? $flash['type'] : 'info';
        $icon = match ($type) {
            'success' => 'check',
            'error'   => 'alert',
            'warning' => 'alert',
            default   => 'info',
        };
        ?>
        <div class="toast toast--<?= $this->e($type) ?>">
            <span style="flex:0 0 auto;margin-top:1px"><?= Icon::render($icon, 18) ?></span>
            <span style="flex:1 1 auto"><?= $this->e($flash['message']) ?></span>
            <button type="button" class="toast__close" data-dismiss aria-label="<?= $this->t('layout.dismiss_message') ?>">&times;</button>
        </div>
    <?php endforeach; ?>
</div>
<script nonce="<?= $this->e(Csp::nonce()) ?>">
(function () {
    var wrap = document.querySelector('.toasts');
    if (!wrap) return;

    wrap.addEventListener('click', function (e) {
        var btn = e.target.closest('[data-dismiss]');
        if (btn) btn.closest('.toast').remove();
    });

    // Auto-dismiss, but never for errors: those are the ones the user
    // actually has to read and act on.
    wrap.querySelectorAll('.toast:not(.toast--error)').forEach(function (toast) {
        setTimeout(function () {
            toast.style.transition = 'opacity .3s, transform .3s';
            toast.style.opacity = '0';
            toast.style.transform = 'translateX(16px)';
            setTimeout(function () { toast.remove(); }, 320);
        }, 6000);
    });
})();
</script>
