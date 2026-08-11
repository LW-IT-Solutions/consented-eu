<?php

declare(strict_types=1);

use Consented\Core\Icon;
use Consented\Core\Lang;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var list<array<string,mixed>> $domains */
$base = '/properties/' . $property['public_id'];
?>
<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->t('property.domains.title') ?></h1>
        <p class="page-head__sub">
            <?= $this->t('property.domains.intro') ?>
        </p>
    </div>
</div>

<?php if ($canEdit): ?>
<div class="card mb-5">
    <div class="card__header"><span class="card__title"><?= $this->t('property.domains.add_title') ?></span></div>
    <form method="post" action="<?= $this->e(Url::to($base . '/domains')) ?>">
        <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
        <div class="card__body">
            <div class="row row--top">
                <div style="flex:1 1 280px">
                    <label class="label" for="domain"><?= $this->t('property.domains.field_domain') ?></label>
                    <div class="input-group">
                        <span class="input-group__prefix">https://</span>
                        <input class="input" type="text" id="domain" name="domain" required
                               placeholder="example.com" autocapitalize="none" spellcheck="false">
                    </div>
                </div>
                <div style="flex:0 0 auto;padding-top:26px">
                    <button type="submit" class="btn btn--primary"><?= $this->t('common.add') ?></button>
                </div>
            </div>
            <label class="checkbox mt-3">
                <input type="checkbox" name="include_subdomains" value="1" checked>
                <span><?= $this->tr('property.domains.include_subdomains') ?></span>
            </label>
        </div>
    </form>
</div>
<?php endif; ?>

<?php if ($domains === []): ?>
    <div class="card">
        <div class="empty">
            <div class="empty__icon"><?= Icon::render('globe', 26) ?></div>
            <h2 class="empty__title"><?= $this->t('property.domains.empty_title') ?></h2>
            <p class="empty__text">
                <?= $this->t('property.domains.empty_text') ?>
            </p>
        </div>
    </div>
<?php else: ?>
    <?php foreach ($domains as $d): ?>
        <div class="card mb-4">
            <div class="card__body">
                <div class="row row--between row--top">
                    <div style="min-width:0">
                        <div class="row row--tight">
                            <span class="strong"><?= $this->e($d['domain']) ?></span>
                            <?php if ((int) $d['is_primary'] === 1): ?>
                                <span class="badge badge--info"><?= $this->t('property.domains.badge_primary') ?></span>
                            <?php endif; ?>
                            <?php if ($d['verified_at'] !== null): ?>
                                <span class="badge badge--success">
                                    <?= Icon::render('check', 12) ?> <?= $this->t('property.domains.badge_verified') ?>
                                </span>
                            <?php else: ?>
                                <span class="badge badge--warning"><?= $this->t('property.domains.badge_unverified') ?></span>
                            <?php endif; ?>
                        </div>
                        <p class="tiny muted mt-2 mb-0">
                            <?php if ($d['verified_at'] !== null): ?>
                                <?= $this->t('property.domains.verified_on', [
                                    'date'   => $this->date((string) $d['verified_at']),
                                    'method' => $d['verification_method'] === 'dns'
                                        ? Lang::get('property.domains.method_dns')
                                        : Lang::get('property.domains.method_file'),
                                ]) ?>
                            <?php else: ?>
                                <?= $this->t('property.domains.added_on', [
                                    'date' => $this->date((string) $d['created_at']),
                                ]) ?>
                            <?php endif; ?>
                            <?php if ((int) $d['include_subdomains'] === 1): ?>
                                · <?= $this->t('property.domains.incl_subdomains') ?>
                            <?php endif; ?>
                        </p>
                    </div>

                    <?php if ($canEdit): ?>
                        <div class="btn-group">
                            <?php if ((int) $d['is_primary'] !== 1): ?>
                                <form method="post" action="<?= $this->e(Url::to($base . '/domains/' . $d['public_id'] . '/primary')) ?>">
                                    <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                                    <button type="submit" class="btn btn--ghost btn--sm"><?= $this->t('property.domains.set_primary') ?></button>
                                </form>
                            <?php endif; ?>
                            <form method="post" action="<?= $this->e(Url::to($base . '/domains/' . $d['public_id'] . '/verify')) ?>">
                                <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                                <button type="submit" class="btn btn--secondary btn--sm">
                                    <?= Icon::render('refresh', 15) ?> <?= $this->t('property.domains.check_now') ?>
                                </button>
                            </form>
                            <form method="post" action="<?= $this->e(Url::to($base . '/domains/' . $d['public_id'] . '/delete')) ?>"
                                  data-confirm="<?= $this->e(Lang::get('property.domains.confirm_delete')) ?>">
                                <input type="hidden" name="_csrf" value="<?= $this->e($csrf ?? '') ?>">
                                <button type="submit" class="btn btn--ghost btn--sm" aria-label="<?= $this->t('common.remove') ?>">
                                    <?= Icon::render('trash', 16) ?>
                                </button>
                            </form>
                        </div>
                    <?php endif; ?>
                </div>

                <?php if ($d['verified_at'] === null): ?>
                    <hr>
                    <p class="small strong mb-3"><?= $this->t('property.domains.verify_intro') ?></p>

                    <p class="small mb-2"><?= $this->tr('property.domains.verify_dns', ['domain' => $d['domain']]) ?></p>
                    <div class="code mb-4">
                        <button type="button" class="code-copy" data-copy-target="dns-<?= $this->e($d['public_id']) ?>"><?= $this->t('common.copy') ?></button>
<pre id="dns-<?= $this->e($d['public_id']) ?>"><?= $this->e($d['verification_token']) ?></pre>
                    </div>

                    <p class="small mb-2"><?= $this->tr('property.domains.verify_file', ['domain' => $d['domain']]) ?></p>
                    <div class="code">
                        <button type="button" class="code-copy" data-copy-target="file-<?= $this->e($d['public_id']) ?>"><?= $this->t('common.copy') ?></button>
<pre id="file-<?= $this->e($d['public_id']) ?>"><?= $this->e($d['verification_token']) ?></pre>
                    </div>

                    <?php if ($d['last_checked_at'] !== null): ?>
                        <p class="tiny muted mt-3 mb-0">
                            <?= $this->t('property.domains.last_checked', [
                                'date' => $this->date((string) $d['last_checked_at']),
                            ]) ?>
                        </p>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<?php $this->start('scripts'); ?>
<script nonce="<?= $this->e(\Consented\Core\Csp::nonce()) ?>">
document.addEventListener('click', function (e) {
    var btn = e.target.closest('[data-copy-target]');
    if (!btn) return;
    var el = document.getElementById(btn.getAttribute('data-copy-target'));
    if (!el) return;
    navigator.clipboard.writeText(el.innerText.trim()).then(function () {
        var t = btn.textContent;
        btn.textContent = <?= $this->js(Lang::get('common.copied')) ?>;
        setTimeout(function () { btn.textContent = t; }, 1800);
    });
});
</script>
<?php $this->end(); ?>
