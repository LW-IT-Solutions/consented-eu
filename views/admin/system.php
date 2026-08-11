<?php

declare(strict_types=1);

use Consented\Core\Csp;
use Consented\Core\Icon;
use Consented\Core\Url;

/** @var \Consented\Core\View $this */
/** @var array{rows:list<array{file:string,applied_at:?string}>,pending:int,orphans:list<string>,unavailable:bool} $migrations */
/** @var array{last_run:?string,summary:?string,age:?int,level:string,cron:string} $worker */
/** @var array{php:string,php_ok:bool,extensions:list<array{name:string,loaded:bool}>,missing:int} $runtime */
/** @var list<array{key:string,set:bool,required:bool}> $envKeys */
/** @var array{name:string,bytes:int,tables:list<array{name:string,rows:int,bytes:int}>,available:bool} $database */
/** @var array{path:string,exists:bool,writable:bool,bytes:int,files:int,free:?int,truncated:bool} $storage */
/** @var array{dump:string,files:string,restore_db:string,restore_files:string} $backup */

$size = static function (int $bytes): string {
    $units = ['B', 'KB', 'MB', 'GB', 'TB'];
    $step  = 0;
    $value = (float) $bytes;

    while ($value >= 1024.0 && $step < count($units) - 1) {
        $value /= 1024.0;
        $step++;
    }

    return number_format($value, $step === 0 ? 0 : 1, ',', '.') . ' ' . $units[$step];
};

$mark = static function (bool $ok): string {
    return $ok
        ? '<span style="color:var(--c-success-600)">' . Icon::render('check', 16) . '</span>'
        : '<span style="color:var(--c-danger-600)">' . Icon::render('x', 16) . '</span>';
};

$workerColour = match ($worker['level']) {
    'ok'    => 'var(--c-success-600)',
    'error' => 'var(--c-danger-600)',
    default => 'var(--c-warning-600)',
};
?>
<div class="page-head">
    <div>
        <h1 class="page-head__title"><?= $this->t('admin.system.title') ?></h1>
        <p class="page-head__sub"><?= $this->t('admin.system.subtitle') ?></p>
    </div>
</div>

<?php /* --------------------------------------------------------- migrations */ ?>
<div class="card mb-5">
    <div class="card__header">
        <span class="card__title"><?= $this->t('admin.system.migrations_title') ?></span>
        <?php if ($migrations['unavailable']): ?>
            <span class="badge badge--danger"><?= $this->t('admin.system.migrations_unavailable') ?></span>
        <?php elseif ($migrations['pending'] > 0): ?>
            <span class="badge badge--warning">
                <?= $this->t('admin.system.migrations_pending', ['count' => (string) $migrations['pending']]) ?>
            </span>
        <?php else: ?>
            <span class="badge badge--success"><?= $this->t('admin.system.migrations_current') ?></span>
        <?php endif; ?>
    </div>

    <?php if ($migrations['unavailable']): ?>
        <div class="card__body">
            <p class="small mb-0"><?= $this->t('admin.system.migrations_unavailable_help') ?></p>
        </div>
    <?php endif; ?>

    <div class="table-wrap">
        <table class="table">
            <thead>
                <tr>
                    <th><?= $this->t('admin.system.col_migration') ?></th>
                    <th><?= $this->t('common.status') ?></th>
                    <th><?= $this->t('admin.system.col_applied_at') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($migrations['rows'] as $m): ?>
                    <tr>
                        <td class="mono tiny"><?= $this->e($m['file']) ?></td>
                        <td>
                            <?php if ($m['applied_at'] === null): ?>
                                <span class="badge badge--warning"><?= $this->t('admin.system.migration_pending') ?></span>
                            <?php else: ?>
                                <span class="badge badge--success"><?= $this->t('admin.system.migration_applied') ?></span>
                            <?php endif; ?>
                        </td>
                        <td class="tiny muted nowrap"><?= $this->e($this->date($m['applied_at'])) ?></td>
                    </tr>
                <?php endforeach; ?>
                <?php foreach ($migrations['orphans'] as $orphan): ?>
                    <tr>
                        <td class="mono tiny"><?= $this->e($orphan) ?></td>
                        <td><span class="badge badge--danger"><?= $this->t('admin.system.migration_orphan') ?></span></td>
                        <td class="tiny muted"><?= $this->t('admin.system.migration_orphan_hint') ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="card__footer">
        <p class="help mb-0"><?= $this->t('admin.system.migrations_help') ?></p>
    </div>
</div>

<?php /* ------------------------------------------------------------- worker */ ?>
<div class="card mb-5">
    <div class="card__header">
        <span class="card__title"><?= $this->t('admin.system.worker_title') ?></span>
        <span class="badge" style="color:<?= $workerColour ?>">
            <?= $this->t('admin.system.worker_state_' . $worker['level']) ?>
        </span>
    </div>
    <div class="card__body">
        <div class="row row--top mb-4">
            <span style="color:<?= $workerColour ?>;flex:0 0 auto;margin-top:1px">
                <?= Icon::render($worker['level'] === 'ok' ? 'check' : 'alert', 18) ?>
            </span>
            <span style="flex:1 1 auto;min-width:0">
                <?php if ($worker['last_run'] === null): ?>
                    <span class="strong small" style="display:block"><?= $this->t('admin.system.worker_never') ?></span>
                    <span class="tiny muted"><?= $this->t('admin.system.worker_never_help') ?></span>
                <?php else: ?>
                    <span class="strong small" style="display:block">
                        <?= $this->t('admin.system.worker_last_run', [
                            'time' => $this->date($worker['last_run']),
                        ]) ?>
                    </span>
                    <span class="tiny muted">
                        <?php if ($worker['age'] !== null): ?>
                            <?= $this->t('admin.system.worker_age', [
                                'minutes' => $this->number((int) floor($worker['age'] / 60)),
                            ]) ?>
                        <?php endif; ?>
                    </span>
                <?php endif; ?>
            </span>
        </div>

        <?php if ($worker['summary'] !== null): ?>
            <p class="tiny muted mb-4">
                <span class="strong"><?= $this->t('admin.system.worker_summary') ?></span>
                <span class="mono break-all"><?= $this->e($worker['summary']) ?></span>
            </p>
        <?php endif; ?>

        <div class="code">
            <button type="button" class="code-copy" data-copy-target="worker-cron"><?= $this->t('common.copy') ?></button>
<pre id="worker-cron"><?= $this->e($worker['cron']) ?></pre>
        </div>
        <p class="help mt-3 mb-0"><?= $this->t('admin.system.worker_cron_help') ?></p>
    </div>
</div>

<?php /* -------------------------------------------------------- runtime/env */ ?>
<div class="grid grid--2 mb-5">
    <div class="card">
        <div class="card__header">
            <span class="card__title"><?= $this->t('admin.system.runtime_title') ?></span>
            <?php if ($runtime['missing'] > 0): ?>
                <span class="badge badge--danger">
                    <?= $this->t('admin.system.runtime_missing', ['count' => (string) $runtime['missing']]) ?>
                </span>
            <?php endif; ?>
        </div>
        <div class="card__body">
            <p class="small mb-4">
                <?= $mark($runtime['php_ok']) ?>
                <span class="strong">PHP <?= $this->e($runtime['php']) ?></span>
                <?php if (!$runtime['php_ok']): ?>
                    <span class="tiny muted"><?= $this->t('admin.system.php_too_old') ?></span>
                <?php endif; ?>
            </p>

            <div class="row row--tight">
                <?php foreach ($runtime['extensions'] as $ext): ?>
                    <span class="badge">
                        <?= $mark($ext['loaded']) ?> <span class="mono"><?= $this->e($ext['name']) ?></span>
                    </span>
                <?php endforeach; ?>
            </div>

            <p class="help mt-4 mb-0"><?= $this->t('admin.system.runtime_help') ?></p>
        </div>
    </div>

    <div class="card">
        <div class="card__header">
            <span class="card__title"><?= $this->t('admin.system.env_title') ?></span>
        </div>
        <div class="card__body">
            <div class="row row--tight">
                <?php foreach ($envKeys as $env): ?>
                    <span class="badge">
                        <?= $mark($env['set']) ?>
                        <span class="mono"><?= $this->e($env['key']) ?></span>
                        <?php if ($env['required'] && !$env['set']): ?>
                            <span style="color:var(--c-danger-600)"><?= $this->t('common.required') ?></span>
                        <?php endif; ?>
                    </span>
                <?php endforeach; ?>
            </div>

            <p class="help mt-4 mb-0"><?= $this->t('admin.system.env_help') ?></p>
        </div>
    </div>
</div>

<?php /* ----------------------------------------------------------- database */ ?>
<div class="card mb-5">
    <div class="card__header">
        <span class="card__title"><?= $this->t('admin.system.db_title') ?></span>
        <?php if ($database['available']): ?>
            <span class="badge badge--info"><?= $this->e($size($database['bytes'])) ?></span>
        <?php endif; ?>
    </div>

    <?php if (!$database['available']): ?>
        <div class="card__body">
            <p class="small muted mb-0"><?= $this->t('admin.system.db_unavailable') ?></p>
        </div>
    <?php else: ?>
        <div class="card__body" style="padding-bottom:0">
            <p class="small mb-0">
                <?= $this->t('admin.system.db_name', ['name' => $database['name']]) ?>
            </p>
        </div>
        <div class="table-wrap">
            <table class="table">
                <thead>
                    <tr>
                        <th><?= $this->t('admin.system.col_table') ?></th>
                        <th><?= $this->t('admin.system.col_rows') ?></th>
                        <th><?= $this->t('admin.system.col_size') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($database['tables'] as $table): ?>
                        <tr>
                            <td class="mono tiny"><?= $this->e($table['name']) ?></td>
                            <td class="tiny muted tnum"><?= $this->number($table['rows']) ?></td>
                            <td class="tiny muted tnum nowrap"><?= $this->e($size($table['bytes'])) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="card__footer">
            <p class="help mb-0"><?= $this->t('admin.system.db_estimate_note') ?></p>
        </div>
    <?php endif; ?>
</div>

<?php /* ------------------------------------------------------------ storage */ ?>
<div class="card mb-5">
    <div class="card__header">
        <span class="card__title"><?= $this->t('admin.system.storage_title') ?></span>
        <?php if (!$storage['exists']): ?>
            <span class="badge badge--danger"><?= $this->t('admin.system.storage_missing') ?></span>
        <?php elseif (!$storage['writable']): ?>
            <span class="badge badge--danger"><?= $this->t('admin.system.storage_not_writable') ?></span>
        <?php else: ?>
            <span class="badge badge--success"><?= $this->t('admin.system.storage_writable') ?></span>
        <?php endif; ?>
    </div>
    <div class="card__body">
        <p class="tiny mono muted break-all mb-4"><?= $this->e($storage['path']) ?></p>

        <?php if ($storage['exists']): ?>
            <div class="row">
                <span class="small">
                    <span class="strong"><?= $this->e($size($storage['bytes'])) ?></span>
                    <span class="tiny muted">
                        <?= $this->t('admin.system.storage_in_files', ['count' => $this->number($storage['files'])]) ?>
                    </span>
                </span>
                <?php if ($storage['free'] !== null): ?>
                    <span class="small">
                        <span class="strong"><?= $this->e($size($storage['free'])) ?></span>
                        <span class="tiny muted"><?= $this->t('admin.system.storage_free') ?></span>
                    </span>
                <?php endif; ?>
            </div>

            <?php if ($storage['truncated']): ?>
                <p class="help mt-3 mb-0"><?= $this->t('admin.system.storage_truncated') ?></p>
            <?php endif; ?>
        <?php else: ?>
            <p class="small muted mb-0"><?= $this->t('admin.system.storage_missing_help') ?></p>
        <?php endif; ?>
    </div>
</div>

<?php /* Die Zulauftabelle ist nach /admin/stats gezogen.

         Sie beschreibt Daten, nicht die Installation, und sass hier nur, weil
         es vorher keinen anderen Ort gab. Zwei Tabellen derselben Zahlen mit
         zwei Fenstern waeren die schlechtere Loesung. Was hier bleibt, ist der
         Herzschlag weiter oben: er sagt, ob die Zahlen dort aktuell sind. */ ?>
<div class="card mb-5">
    <div class="card__body">
        <p class="mb-0">
            <?= $this->tr('admin.system.inflow_moved', ['link' => $this->e(Url::to('/admin/stats'))]) ?>
        </p>
    </div>
</div>

<?php /* ------------------------------------------------------------- backup */ ?>
<div class="card">
    <div class="card__header">
        <span class="card__title"><?= $this->t('admin.system.backup_title') ?></span>
    </div>
    <div class="card__body">
        <div class="alert alert--info mb-5">
            <span class="alert__icon"><?= Icon::render('info', 18) ?></span>
            <div class="alert__body"><?= $this->t('admin.system.backup_password_note') ?></div>
        </div>

        <p class="small strong mb-2"><?= $this->t('admin.system.backup_db_label') ?></p>
        <div class="code mb-5">
            <button type="button" class="code-copy" data-copy-target="backup-db"><?= $this->t('common.copy') ?></button>
<pre id="backup-db"><?= $this->e($backup['dump']) ?></pre>
        </div>

        <p class="small strong mb-2"><?= $this->t('admin.system.backup_files_label') ?></p>
        <div class="code mb-5">
            <button type="button" class="code-copy" data-copy-target="backup-files"><?= $this->t('common.copy') ?></button>
<pre id="backup-files"><?= $this->e($backup['files']) ?></pre>
        </div>

        <p class="small strong mb-2"><?= $this->t('admin.system.backup_restore_label') ?></p>
        <div class="code">
            <button type="button" class="code-copy" data-copy-target="backup-restore"><?= $this->t('common.copy') ?></button>
<pre id="backup-restore"><?= $this->e($backup['restore_db']) ?>
<?= $this->e($backup['restore_files']) ?></pre>
        </div>

        <p class="help mt-4 mb-0"><?= $this->t('admin.system.backup_help') ?></p>
    </div>
</div>

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
            var previous = btn.textContent;
            btn.textContent = copiedLabel;
            setTimeout(function () { btn.textContent = previous; }, 1800);
        });
    });
})();
</script>
<?php $this->end(); ?>
