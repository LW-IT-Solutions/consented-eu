<?php

declare(strict_types=1);

namespace Consented\Admin;

use Consented\Core\Controller;
use Consented\Core\Db;
use Consented\Core\Env;
use Consented\Core\Paginator;
use Consented\Core\Request;
use Consented\Core\Response;

/**
 * Operations and diagnostics.
 *
 * Two read-only pages. The audit trail was written at five places and readable
 * at none, and an operator had no way to tell whether the cron had stopped
 * three days ago. Both pages only ever read: anything that changes the
 * installation belongs on the command line, where a human is watching and the
 * output is not swallowed by a browser.
 */
final class SystemController extends Controller
{
    /** How many audit entries a page shows. */
    private const AUDIT_PER_PAGE = 40;

    /** A heartbeat older than this means the cron is late. */
    private const WORKER_WARN_SECONDS = 3600;

    /** Older than this means it is gone, not late. */
    private const WORKER_ERROR_SECONDS = 86400;

    /**
     * Extensions the application itself needs.
     *
     * No curl: nothing under src/ or bin/worker touches it. Only
     * bin/import-patterns does, and that is a maintainer tool nobody has to run
     * to operate an installation — listing it here painted a red "missing"
     * badge on installations that were in fact complete.
     */
    private const REQUIRED_EXTENSIONS = ['pdo_mysql', 'mbstring', 'dom', 'json', 'openssl'];

    /**
     * Environment keys, with the ones the application cannot start or stay
     * secure without. Only presence is ever reported, never a value.
     *
     * @var array<string,bool> key => required
     */
    private const ENV_KEYS = [
        'APP_ENV'                  => false,
        'APP_NAME'                 => false,
        'APP_URL'                  => true,
        'CDN_URL'                  => false,
        // Set per vhost, and it decides whether the public site answers at all.
        // An operator wondering why the landing page is a placeholder needs to
        // see this here.
        'CE_COMING_SOON'           => false,
        'APP_KEY'                  => true,
        'PASSWORD_PEPPER'          => true,
        'IP_HASH_PEPPER'           => true,
        // The one mail credential Settings deliberately does not manage, so
        // presence is only visible here. Never the value.
        'SMTP_PASSWORD'            => false,
        'DB_HOST'                  => false,
        'DB_PORT'                  => false,
        'DB_NAME'                  => true,
        'DB_USER'                  => true,
        'DB_PASS'                  => false,
        'REDIS_HOST'               => false,
        'REDIS_PORT'               => false,
        'REDIS_PREFIX'             => false,
        'CONSENT_RETENTION_MONTHS' => false,
        'ALLOW_REGISTRATION'       => false,
    ];

    /* ----------------------------------------------------------- audit trail */

    public function audit(Request $request): Response
    {
        $filters = [
            'actor'  => (string) $request->input('actor', ''),
            'type'   => (string) $request->input('type', ''),
            'action' => (string) $request->input('action', ''),
            'from'   => self::isoDate((string) $request->input('from', '')),
            'to'     => self::isoDate((string) $request->input('to', '')),
            'q'      => trim((string) $request->input('q', '')),
        ];

        $where  = [];
        $params = [];

        if ($filters['actor'] !== '') {
            // The public id is resolved here instead of being joined on, so an
            // id that matches nobody yields an empty list rather than quietly
            // dropping the filter and showing everything.
            $actor              = Db::first('SELECT id FROM users WHERE public_id = :pid', ['pid' => $filters['actor']]);
            $where[]            = 'a.actor_user_id = :actor_id';
            $params['actor_id'] = $actor === null ? 0 : (int) $actor['id'];
        }

        if ($filters['type'] !== '') {
            $where[]                = 'a.subject_type = :subject_type';
            $params['subject_type'] = $filters['type'];
        }

        if ($filters['action'] !== '') {
            $where[]          = 'a.action = :action';
            $params['action'] = $filters['action'];
        }

        if ($filters['from'] !== '') {
            $where[]        = 'a.created_at >= :from';
            $params['from'] = $filters['from'] . ' 00:00:00';
        }

        if ($filters['to'] !== '') {
            $where[]      = 'a.created_at <= :to';
            $params['to'] = $filters['to'] . ' 23:59:59';
        }

        if ($filters['q'] !== '') {
            // Two placeholders for one term: with emulated prepares off, MySQL
            // binds a named parameter exactly once per statement.
            $where[]      = '(a.subject_id LIKE :q1 OR a.subject_type LIKE :q2)';
            $params['q1'] = '%' . $filters['q'] . '%';
            $params['q2'] = '%' . $filters['q'] . '%';
        }

        // Only fixed fragments are assembled; every value stays a placeholder.
        $whereSql = $where === [] ? '' : ' WHERE ' . implode(' AND ', $where);

        $total = (int) Db::value('SELECT COUNT(*) FROM audit_log a' . $whereSql, $params);
        $pager = Paginator::fromRequest($request, $total, self::AUDIT_PER_PAGE);

        $rows = Db::all(
            'SELECT a.public_id, a.action, a.subject_type, a.subject_id, a.diff,
                    a.ip_hash, a.created_at,
                    u.name  AS actor_name,
                    u.email AS actor_email,
                    o.name  AS org_name,
                    p.name  AS property_name
               FROM audit_log a
          LEFT JOIN users u         ON u.id = a.actor_user_id
          LEFT JOIN organizations o ON o.id = a.org_id
          LEFT JOIN properties p    ON p.id = a.property_id'
            . $whereSql
            . ' ORDER BY a.id DESC LIMIT :limit OFFSET :offset',
            $params + $pager->bindings()
        );

        $entries = [];

        foreach ($rows as $row) {
            $row['changes'] = self::diffRows($row['diff'] === null ? null : (string) $row['diff']);
            // The raw JSON has no business in the view scope once it is parsed.
            unset($row['diff']);
            $entries[] = $row;
        }

        return $this->view('admin/audit', [
            'title'     => __('admin.audit.title'),
            'activeNav' => 'admin.audit',
            'entries'   => $entries,
            'pager'     => $pager,
            'filters'   => $filters,
            'actors'    => Db::all(
                'SELECT DISTINCT u.public_id, u.name, u.email
                   FROM audit_log a
                   JOIN users u ON u.id = a.actor_user_id
                  ORDER BY u.name
                  LIMIT 200'
            ),
            'types'     => Db::all(
                'SELECT subject_type, COUNT(*) AS n
                   FROM audit_log
                  WHERE subject_type IS NOT NULL AND subject_type <> :empty
                  GROUP BY subject_type
                  ORDER BY subject_type',
                ['empty' => '']
            ),
            'actions'   => Db::all(
                'SELECT action, COUNT(*) AS n FROM audit_log GROUP BY action ORDER BY action'
            ),
        ], 'layouts/admin');
    }

    /* ------------------------------------------------------------ diagnostics */

    public function system(Request $request): Response
    {
        return $this->view('admin/system', [
            'title'      => __('admin.system.title'),
            'activeNav'  => 'admin.system',
            'migrations' => $this->migrations(),
            'worker'     => $this->worker(),
            'runtime'    => $this->runtime(),
            'envKeys'    => $this->envKeys(),
            'database'   => $this->database(),
            'storage'    => $this->storage(),
            'backup'     => $this->backup(),
        ], 'layouts/admin');
    }

    /* ------------------------------------------------------------- collectors */

    /**
     * Applied migrations against the files on disk.
     *
     * @return array{rows:list<array{file:string,applied_at:?string}>,pending:int,orphans:list<string>,unavailable:bool}
     */
    private function migrations(): array
    {
        $files = glob(CONSENTED_ROOT . '/database/migrations/*.sql') ?: [];
        sort($files);

        $applied     = [];
        $unavailable = false;

        try {
            foreach (Db::all('SELECT filename, applied_at FROM migrations ORDER BY filename') as $row) {
                $applied[(string) $row['filename']] = (string) $row['applied_at'];
            }
        } catch (\Throwable) {
            // Before the first `bin/migrate` the table does not exist yet. That
            // is a state worth showing, not an error worth a 500.
            $unavailable = true;
        }

        $rows    = [];
        $pending = 0;

        foreach ($files as $file) {
            $name = basename($file);
            $when = $applied[$name] ?? null;

            if ($when === null) {
                $pending++;
            }

            $rows[] = ['file' => $name, 'applied_at' => $when];
        }

        $known = array_map(static fn (string $f): string => basename($f), $files);

        return [
            'rows'        => $rows,
            'pending'     => $pending,
            // Recorded as applied but the file is gone: usually a half-finished
            // deployment, and it means the schema cannot be rebuilt from source.
            'orphans'     => array_values(array_diff(array_keys($applied), $known)),
            'unavailable' => $unavailable,
        ];
    }

    /**
     * Heartbeat of bin/worker.
     *
     * @return array{last_run:?string,summary:?string,age:?int,level:string,cron:string}
     */
    private function worker(): array
    {
        $cron    = sprintf('*/15 * * * * php %s/bin/worker >/dev/null 2>&1', CONSENTED_ROOT);
        $lastRun = self::rawSetting('worker_last_run');
        $summary = self::rawSetting('worker_last_summary');

        if ($lastRun === null || $lastRun === '') {
            return [
                'last_run' => null,
                'summary'  => null,
                'age'      => null,
                'level'    => 'warn',
                'cron'     => $cron,
            ];
        }

        $stamp = strtotime($lastRun . ' UTC');
        $age   = $stamp === false ? null : max(0, time() - $stamp);

        $level = match (true) {
            $age === null                     => 'warn',
            $age > self::WORKER_ERROR_SECONDS => 'error',
            $age > self::WORKER_WARN_SECONDS  => 'warn',
            default                           => 'ok',
        };

        return [
            'last_run' => $lastRun,
            'summary'  => $summary === '' ? null : $summary,
            'age'      => $age,
            'level'    => $level,
            'cron'     => $cron,
        ];
    }

    /**
     * @return array{php:string,php_ok:bool,extensions:list<array{name:string,loaded:bool}>,missing:int}
     */
    private function runtime(): array
    {
        $extensions = [];
        $missing    = 0;

        foreach (self::REQUIRED_EXTENSIONS as $name) {
            $loaded = extension_loaded($name);

            if (!$loaded) {
                $missing++;
            }

            $extensions[] = ['name' => $name, 'loaded' => $loaded];
        }

        return [
            'php'        => PHP_VERSION,
            'php_ok'     => PHP_VERSION_ID >= 80300,
            'extensions' => $extensions,
            'missing'    => $missing,
        ];
    }

    /**
     * Which environment keys carry a value — never which value.
     *
     * @return list<array{key:string,set:bool,required:bool}>
     */
    private function envKeys(): array
    {
        $out = [];

        foreach (self::ENV_KEYS as $key => $required) {
            $out[] = [
                'key'      => $key,
                'set'      => Env::get($key) !== null,
                'required' => $required,
            ];
        }

        return $out;
    }

    /**
     * Size of the schema, from information_schema.
     *
     * @return array{name:string,bytes:int,tables:list<array{name:string,rows:int,bytes:int}>,available:bool}
     */
    private function database(): array
    {
        $name = (string) Env::get('DB_NAME', '');

        try {
            $bytes = (int) Db::value(
                'SELECT COALESCE(SUM(data_length + index_length), 0)
                   FROM information_schema.TABLES
                  WHERE table_schema = DATABASE()'
            );

            $tables = Db::all(
                'SELECT table_name           AS table_name,
                        COALESCE(table_rows, 0)                   AS row_estimate,
                        COALESCE(data_length + index_length, 0)   AS size_bytes
                   FROM information_schema.TABLES
                  WHERE table_schema = DATABASE()
                  ORDER BY (data_length + index_length) DESC
                  LIMIT 10'
            );
        } catch (\Throwable) {
            return ['name' => $name, 'bytes' => 0, 'tables' => [], 'available' => false];
        }

        $rows = [];

        foreach ($tables as $table) {
            $rows[] = [
                'name'  => (string) $table['table_name'],
                'rows'  => (int) $table['row_estimate'],
                'bytes' => (int) $table['size_bytes'],
            ];
        }

        return ['name' => $name, 'bytes' => $bytes, 'tables' => $rows, 'available' => true];
    }

    /**
     * @return array{path:string,exists:bool,writable:bool,bytes:int,files:int,free:?int,truncated:bool}
     */
    private function storage(): array
    {
        $path = CONSENTED_ROOT . '/storage';

        if (!is_dir($path)) {
            return [
                'path'      => $path,
                'exists'    => false,
                'writable'  => false,
                'bytes'     => 0,
                'files'     => 0,
                'free'      => null,
                'truncated' => false,
            ];
        }

        $bytes     = 0;
        $files     = 0;
        $truncated = false;

        try {
            $iterator = new \RecursiveIteratorIterator(
                new \RecursiveDirectoryIterator($path, \FilesystemIterator::SKIP_DOTS),
                \RecursiveIteratorIterator::LEAVES_ONLY
            );

            foreach ($iterator as $entry) {
                // A diagnostics page must not turn into a full disk walk on an
                // installation that keeps a year of logs.
                if ($files >= 50000) {
                    $truncated = true;
                    break;
                }

                if ($entry instanceof \SplFileInfo && $entry->isFile()) {
                    $bytes += $entry->getSize();
                    $files++;
                }
            }
        } catch (\Throwable) {
            $truncated = true;
        }

        $free = null;

        try {
            $result = disk_free_space($path);
            $free   = $result === false ? null : (int) $result;
        } catch (\Throwable) {
            $free = null;
        }

        return [
            'path'      => $path,
            'exists'    => true,
            'writable'  => is_writable($path),
            'bytes'     => $bytes,
            'files'     => $files,
            'free'      => $free,
            'truncated' => $truncated,
        ];
    }

    /**
     * Backup commands for this installation.
     *
     * The password is deliberately absent: `-p` without a value makes mysqldump
     * prompt, which keeps the secret out of the page, out of the shell history
     * and out of the process list.
     *
     * @return array{dump:string,files:string,restore_db:string,restore_files:string}
     */
    private function backup(): array
    {
        $host = (string) Env::get('DB_HOST', '127.0.0.1');
        $port = Env::int('DB_PORT', 3306);
        $user = (string) Env::get('DB_USER', '');
        $name = (string) Env::get('DB_NAME', '');

        $user = $user === '' ? 'DB_USER' : $user;
        $name = $name === '' ? 'DB_NAME' : $name;
        $root = CONSENTED_ROOT;

        $connection = sprintf('--host=%s --port=%d --user=%s -p', $host, $port, $user);

        return [
            'dump' => sprintf(
                "mysqldump %s \\\n  --single-transaction --quick --default-character-set=utf8mb4 \\\n  %s > %s-\$(date +%%F).sql",
                $connection,
                $name,
                $name
            ),
            'files' => sprintf(
                "tar czf consented-files-\$(date +%%F).tar.gz \\\n  -C %s storage .env",
                $root
            ),
            'restore_db' => sprintf(
                'mysql %s %s < %s-JJJJ-MM-TT.sql',
                $connection,
                $name,
                $name
            ),
            'restore_files' => sprintf(
                'tar xzf consented-files-JJJJ-MM-TT.tar.gz -C %s',
                $root
            ),
        ];
    }

    /* ------------------------------------------------------------------ helpers */

    /**
     * Reads a settings row that Settings does not know about.
     *
     * The worker heartbeat is written by bin/worker and never edited in the
     * admin form, so it is deliberately not part of Settings::defaults() — that
     * list is the contract for the settings form, and a key nobody can edit
     * there does not belong in it.
     */
    private static function rawSetting(string $key): ?string
    {
        try {
            $value = Db::value(
                'SELECT setting_value FROM site_settings WHERE setting_key = :k',
                ['k' => $key]
            );
        } catch (\Throwable) {
            return null;
        }

        return $value === null ? null : (string) $value;
    }

    /** Accepts YYYY-MM-DD and nothing else; anything else means "no filter". */
    private static function isoDate(string $value): string
    {
        if (preg_match('/^(\d{4})-(\d{2})-(\d{2})$/', $value, $m) !== 1) {
            return '';
        }

        return checkdate((int) $m[2], (int) $m[3], (int) $m[1]) ? $value : '';
    }

    /**
     * Turns a stored diff into rows the view can print line by line.
     *
     * Two shapes occur in the table: the before/after pairs Audit::diff()
     * produces, and flat key/value arrays passed straight to Audit::log(). Both
     * end up here, the flat one without a "before".
     *
     * @return list<array{field:string,from:?string,to:?string,has_from:bool,masked:bool}>
     */
    private static function diffRows(?string $json): array
    {
        if ($json === null || $json === '') {
            return [];
        }

        $data = json_decode($json, true);

        if (!is_array($data)) {
            return [];
        }

        $rows = [];

        foreach ($data as $field => $value) {
            $field  = (string) $field;
            $masked = self::isSecretField($field);
            $paired = is_array($value)
                && (array_key_exists('from', $value) || array_key_exists('to', $value));

            $from = $paired ? ($value['from'] ?? null) : null;
            $to   = $paired ? ($value['to'] ?? null) : $value;

            $rows[] = [
                'field'    => $field,
                'from'     => $masked ? null : self::readable($from),
                'to'       => $masked ? null : self::readable($to),
                'has_from' => $paired,
                'masked'   => $masked,
            ];
        }

        return $rows;
    }

    /**
     * Audit::diff() already replaces the values of known secret fields, but it
     * only knows four names. A second check on display costs nothing and keeps
     * a field added later from ending up on the page in clear text.
     */
    private static function isSecretField(string $field): bool
    {
        return preg_match('/pass|token|secret|pepper|_key$|^key$|hash/i', $field) === 1;
    }

    /** Renders a diff value as one short line of text. */
    private static function readable(mixed $value): ?string
    {
        if ($value === null) {
            return null;
        }

        if (is_bool($value)) {
            return $value ? '1' : '0';
        }

        if (is_array($value)) {
            $encoded = json_encode($value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
            $value   = $encoded === false ? '?' : $encoded;
        }

        $text = trim((string) $value);

        if ($text === '') {
            return '';
        }

        return mb_strlen($text) > 200 ? mb_substr($text, 0, 200) . ' …' : $text;
    }
}
