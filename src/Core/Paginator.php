<?php

declare(strict_types=1);

namespace Consented\Core;

/**
 * Offset pagination for list views.
 *
 * Shared by every list in the application so that page size, clamping and
 * query-string handling behave identically everywhere. It holds no rows — it
 * only answers what to ask the database for and how to link to another page.
 *
 * In a controller:
 *
 *     $total = (int) Db::value('SELECT COUNT(*) FROM dps_catalog WHERE …', $params);
 *     $pager = Paginator::fromRequest($request, $total);
 *     $rows  = Db::all(
 *         $sql . ' ORDER BY c.name LIMIT :limit OFFSET :offset',
 *         $params + $pager->bindings()
 *     );
 *
 * In the view:
 *
 *     $this->include('partials/pager', ['pager' => $pager, 'query' => $filters]);
 */
final class Paginator
{
    public const DEFAULT_PER_PAGE = 50;

    /** Upper bound for ?per_page — a request for 100000 rows must not decide how much memory we spend. */
    public const MAX_PER_PAGE = 200;

    private int $total;
    private int $perPage;
    private int $pages;
    private int $page;
    private string $path;

    public function __construct(
        int $total,
        int $page = 1,
        int $perPage = self::DEFAULT_PER_PAGE,
        string $path = ''
    ) {
        $this->total   = max(0, $total);
        $this->perPage = max(1, min($perPage, self::MAX_PER_PAGE));
        $this->pages   = max(1, (int) ceil($this->total / $this->perPage));

        // A page beyond the end is not an error but the last page: a bookmark
        // taken before rows were deleted would otherwise answer with a 404.
        $this->page = max(1, min($page, $this->pages));

        $this->path = $path === '' ? self::currentPath() : self::normalisePath($path);
    }

    public static function make(int $total, int $page, int $perPage = self::DEFAULT_PER_PAGE): self
    {
        return new self($total, $page, $perPage);
    }

    /**
     * Reads ?page and ?per_page from the request and remembers the path the
     * list is served from, so url() can link back to it.
     */
    public static function fromRequest(Request $request, int $total, int $perPage = self::DEFAULT_PER_PAGE): self
    {
        $requestedPerPage = $request->input('per_page');

        if ($requestedPerPage !== null && ctype_digit($requestedPerPage)) {
            $perPage = (int) $requestedPerPage;
        }

        return new self($total, (int) $request->input('page', '1'), $perPage, $request->path);
    }

    public function page(): int
    {
        return $this->page;
    }

    public function perPage(): int
    {
        return $this->perPage;
    }

    public function total(): int
    {
        return $this->total;
    }

    public function pages(): int
    {
        return $this->pages;
    }

    public function offset(): int
    {
        return ($this->page - 1) * $this->perPage;
    }

    public function limit(): int
    {
        return $this->perPage;
    }

    public function hasPrev(): bool
    {
        return $this->page > 1;
    }

    public function hasNext(): bool
    {
        return $this->page < $this->pages;
    }

    /** 1-based number of the first row on this page, 0 when there are none. */
    public function from(): int
    {
        return $this->total === 0 ? 0 : $this->offset() + 1;
    }

    /** 1-based number of the last row on this page, 0 when there are none. */
    public function to(): int
    {
        return min($this->total, $this->offset() + $this->perPage);
    }

    public function path(): string
    {
        return $this->path;
    }

    /**
     * Bindings for "LIMIT :limit OFFSET :offset".
     *
     * Placeholders instead of interpolation, like everywhere else. They work in
     * LIMIT because Db runs with PDO::ATTR_EMULATE_PREPARES => false: the server
     * parses the statement, so the values are never quoted into the SQL.
     *
     * @return array{limit:int,offset:int}
     */
    public function bindings(): array
    {
        return ['limit' => $this->limit(), 'offset' => $this->offset()];
    }

    /**
     * Link to another page of the same list, keeping the active filters.
     *
     * Empty parameters are dropped so the address bar does not fill up with
     * ?q=&status=&source= on every click.
     *
     * @param array<string,mixed> $query the filter parameters the list currently uses
     */
    public function url(int $page, array $query = []): string
    {
        $page   = max(1, min($page, $this->pages));
        $params = [];

        foreach ($query as $name => $value) {
            if ($value === null || $value === '' || $value === []) {
                continue;
            }

            $params[(string) $name] = $value;
        }

        // Page and size are ours, whatever the caller handed in.
        unset($params['page'], $params['per_page']);

        if ($page > 1) {
            $params['page'] = $page;
        }

        // A page link must not silently reset a page size the user chose.
        if ($this->perPage !== self::DEFAULT_PER_PAGE) {
            $params['per_page'] = $this->perPage;
        }

        if ($params === []) {
            return Url::to($this->path);
        }

        return Url::to($this->path) . '?' . http_build_query($params);
    }

    private static function normalisePath(string $path): string
    {
        $path = '/' . trim($path, '/');

        return $path === '' ? '/' : $path;
    }

    /**
     * Path of the current request without the mount prefix.
     *
     * Url::to() puts that prefix back, so keeping it here would double it when
     * the application is served from a subdirectory.
     */
    private static function currentPath(): string
    {
        $uri  = (string) ($_SERVER['REQUEST_URI'] ?? '/');
        $path = parse_url($uri, PHP_URL_PATH);
        $path = self::normalisePath(is_string($path) ? rawurldecode($path) : '/');

        $base = Url::base();

        if ($base !== '' && str_starts_with($path, $base)) {
            $path = self::normalisePath(substr($path, strlen($base)));
        }

        return $path;
    }
}
