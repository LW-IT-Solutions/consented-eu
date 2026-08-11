<?php

declare(strict_types=1);

use Consented\Core\Csp;
use Consented\Core\Icon;
use Consented\Core\Url;
use Consented\Core\Project;

/** @var \Consented\Core\View $this */

$requirements = ['php', 'db', 'web', 'redis', 'nobuild'];
?>
<section class="section">
    <div class="container container--narrow">
        <div class="section__head">
            <p class="eyebrow" style="justify-content:center"><?= Icon::render('server', 15) ?> <?= $this->t('site.selfhosting.eyebrow') ?></p>
            <h1 class="mt-3" style="font-size:var(--text-2xl)"><?= $this->t('site.selfhosting.title') ?></h1>
            <p class="lead">
                <?= $this->t('site.selfhosting.lead') ?>
            </p>
        </div>

        <div class="card mb-5">
            <div class="card__header"><span class="card__title"><?= $this->t('site.selfhosting.req_title') ?></span></div>
            <div class="card__body">
                <ul class="hero__points" style="margin:0">
                    <?php foreach ($requirements as $key): ?>
                        <li><?= Icon::render('check', 17) ?><span><?= $this->tr('site.selfhosting.req_' . $key) ?></span></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="card mb-5">
            <div class="card__header"><span class="card__title"><?= $this->t('site.selfhosting.install_title') ?></span></div>
            <div class="card__body">
                <div class="code">
                    <button type="button" class="code-copy" data-copy-target="install"><?= $this->t('common.copy') ?></button>
<pre id="install"><span class="tok-cmt"># 1. <?= $this->t('site.selfhosting.code_clone') ?></span>
git clone <?= $this->e(Project::CLONE_URL) ?> /var/www/consented
cd /var/www/consented

<span class="tok-cmt"># 2. <?= $this->t('site.selfhosting.code_config') ?></span>
cp .env.example .env
php -r 'echo "APP_KEY=", base64_encode(random_bytes(32)), PHP_EOL;'
php -r 'echo "PASSWORD_PEPPER=", base64_encode(random_bytes(32)), PHP_EOL;'
php -r 'echo "IP_HASH_PEPPER=", base64_encode(random_bytes(32)), PHP_EOL;'
<span class="tok-cmt"># <?= $this->t('site.selfhosting.code_env_note') ?></span>

<span class="tok-cmt"># 3. <?= $this->t('site.selfhosting.code_db') ?></span>
php bin/migrate
php bin/seed

<span class="tok-cmt"># 4. <?= $this->t('site.selfhosting.code_permissions') ?></span>
chgrp -R www-data storage .env
chmod -R 775 storage
chmod 640 .env

<span class="tok-cmt"># 5. <?= $this->t('site.selfhosting.code_docroot') ?></span></pre>
                </div>
            </div>
        </div>

        <div class="card mb-5">
            <div class="card__header"><span class="card__title"><?= $this->t('site.selfhosting.apache_title') ?></span></div>
            <div class="card__body">
                <div class="code">
                    <button type="button" class="code-copy" data-copy-target="apache"><?= $this->t('common.copy') ?></button>
<pre id="apache">&lt;VirtualHost *:443&gt;
    ServerName consent.example.com
    DocumentRoot /var/www/consented/public

    &lt;Directory /var/www/consented/public&gt;
        Options -Indexes +FollowSymLinks
        AllowOverride All
        Require all granted
    &lt;/Directory&gt;

    SSLEngine on
    SSLCertificateFile    /etc/ssl/consent.example.com.cer
    SSLCertificateKeyFile /etc/ssl/consent.example.com.key
    Header always set Strict-Transport-Security "max-age=15768000"
&lt;/VirtualHost&gt;</pre>
                </div>
                <p class="help mt-3">
                    <?= $this->tr('site.selfhosting.apache_help') ?>
                </p>
            </div>
        </div>

        <div class="card mb-5">
            <div class="card__header"><span class="card__title"><?= $this->t('site.selfhosting.ops_title') ?></span></div>
            <div class="card__body">
                <div class="code">
                    <button type="button" class="code-copy" data-copy-target="cron"><?= $this->t('common.copy') ?></button>
<pre id="cron"><span class="tok-cmt"># <?= $this->t('site.selfhosting.code_cron') ?></span>
*/15 * * * * php /var/www/consented/bin/worker >/dev/null 2>&amp;1</pre>
                </div>
                <p class="help mt-3">
                    <?= $this->tr('site.selfhosting.ops_help') ?>
                </p>
            </div>
        </div>

        <div class="alert alert--info">
            <span class="alert__icon"><?= Icon::render('info', 18) ?></span>
            <div class="alert__body">
                <div class="alert__title"><?= $this->t('site.selfhosting.license_title') ?></div>
                <?= $this->tr('site.selfhosting.license_text') ?>
            </div>
        </div>
    </div>
</section>

<?php $this->start('scripts'); ?>
<script nonce="<?= $this->e(Csp::nonce()) ?>">
(function () {
    var copiedLabel = <?= $this->js($this->tr('common.copied')) ?>;

    document.addEventListener('click', function (e) {
        var btn = e.target.closest('[data-copy-target]');
        if (!btn) return;
        var el = document.getElementById(btn.getAttribute('data-copy-target'));
        if (!el) return;
        navigator.clipboard.writeText(el.innerText).then(function () {
            var t = btn.textContent;
            btn.textContent = copiedLabel;
            setTimeout(function () { btn.textContent = t; }, 1800);
        });
    });
})();
</script>
<?php $this->end(); ?>
