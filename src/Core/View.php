<?php

declare(strict_types=1);

namespace Consented\Core;

/**
 * Native PHP templates.
 *
 * Escaping is not optional: templates call $this->e() (aliased to e() inside
 * the template scope) for every dynamic value. Anything that must emit raw
 * markup goes through Sanitizer first and says so at the call site.
 */
final class View
{
    private static string $root = '';

    /** @var array<string,string> */
    private array $sections = [];

    /** @var list<string> */
    private array $stack = [];

    /** @var array<string,mixed> */
    private array $data = [];

    public static function setRoot(string $path): void
    {
        self::$root = rtrim($path, '/\\');
    }

    /** @param array<string,mixed> $data */
    public static function render(string $template, array $data = [], ?string $layout = 'layouts/app'): string
    {
        $view = new self();

        $content = $view->capture($template, $data);

        if ($layout === null) {
            return $content;
        }

        $view->sections['content'] = $content;

        return $view->capture($layout, $data);
    }

    /** @param array<string,mixed> $data */
    private function capture(string $template, array $data): string
    {
        $file = self::$root . '/' . str_replace('.', '/', $template) . '.php';

        if (!is_file($file)) {
            throw new \RuntimeException("View not found: {$template} ({$file})");
        }

        $this->data = array_merge($this->data, $data);

        ob_start();
        (function () use ($file): void {
            extract($this->data, EXTR_SKIP);
            require $file;
        })();

        $output = ob_get_clean();

        return $output === false ? '' : $output;
    }

    /** Escape for HTML text and attribute contexts. */
    public function e(mixed $value): string
    {
        if ($value === null || is_bool($value) || is_array($value)) {
            $value = '';
        }

        return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }

    /**
     * Übersetzter, escapeter Text. Der Normalfall.
     *
     * @param array<string,string|int> $replace
     */
    public function t(string $key, array $replace = []): string
    {
        return $this->e(Lang::get($key, $replace));
    }

    /**
     * Übersetzter Text, der Markup enthalten darf — etwa einen Link zur
     * Datenschutzerklärung mitten im Satz.
     *
     * Der Katalogtext stammt aus dem Repository und gilt als vertrauenswürdig;
     * die eingesetzten Werte tun das nicht und werden deshalb hier escaped,
     * bevor sie in den Text wandern.
     *
     * @param array<string,string|int> $replace
     */
    public function tr(string $key, array $replace = []): string
    {
        $escaped = [];

        foreach ($replace as $name => $value) {
            $escaped[$name] = $this->e($value);
        }

        return Lang::get($key, $escaped);
    }

    /** Aktueller Sprachcode, für das lang-Attribut. */
    public function locale(): string
    {
        return Lang::current();
    }

    /** Escape for embedding a value inside a <script> JSON literal. */
    public function js(mixed $value): string
    {
        $encoded = json_encode(
            $value,
            JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT
        );

        return $encoded === false ? 'null' : $encoded;
    }

    /** Escape for use inside a URL query segment. */
    public function u(string $value): string
    {
        return rawurlencode($value);
    }

    public function start(string $section): void
    {
        $this->stack[] = $section;
        ob_start();
    }

    public function end(): void
    {
        $section = array_pop($this->stack);
        $buffer  = ob_get_clean();

        if ($section !== null) {
            $this->sections[$section] = ($this->sections[$section] ?? '') . ($buffer === false ? '' : $buffer);
        }
    }

    public function section(string $name, string $default = ''): string
    {
        return $this->sections[$name] ?? $default;
    }

    public function has(string $section): bool
    {
        return isset($this->sections[$section]) && $this->sections[$section] !== '';
    }

    /** @param array<string,mixed> $data */
    public function include(string $template, array $data = []): void
    {
        $partial = new self();
        $partial->sections = $this->sections;

        echo $partial->capture($template, array_merge($this->data, $data));
    }

    public function url(string $path = '/'): string
    {
        $base = rtrim((string) Env::get('APP_URL', ''), '/');

        return $base . '/' . ltrim($path, '/');
    }

    /** Formats a UTC timestamp for display. */
    public function date(?string $utc, string $format = 'd.m.Y H:i'): string
    {
        if ($utc === null || $utc === '') {
            return '—';
        }

        $ts = strtotime($utc . ' UTC');

        return $ts === false ? '—' : date($format, $ts);
    }

    public function number(int|float $value): string
    {
        return number_format((float) $value, 0, ',', '.');
    }

    public function percent(float $value, int $decimals = 1): string
    {
        return number_format($value, $decimals, ',', '.') . '&nbsp;%';
    }
}
