<?php

declare(strict_types=1);

namespace Consented\Core;

use Consented\Core\Exception\HttpException;

/**
 * Pattern router. Placeholders are written {name} and match a single path
 * segment; {name:.*} matches the rest of the path.
 */
final class Router
{
    /** @var list<array{method:string,regex:string,vars:list<string>,handler:callable|array{0:class-string,1:string},middleware:list<string>}> */
    private array $routes = [];

    /** @var list<string> */
    private array $groupMiddleware = [];

    /** @var array<string,callable(Request,callable):Response> */
    private array $middleware = [];

    public function registerMiddleware(string $name, callable $handler): void
    {
        $this->middleware[$name] = $handler;
    }

    /**
     * @param list<string> $middleware
     */
    public function group(array $middleware, callable $definitions): void
    {
        $previous              = $this->groupMiddleware;
        $this->groupMiddleware = array_merge($previous, $middleware);

        $definitions($this);

        $this->groupMiddleware = $previous;
    }

    /** @param callable|array{0:class-string,1:string} $handler */
    public function get(string $pattern, callable|array $handler): void
    {
        $this->add('GET', $pattern, $handler);
    }

    /** @param callable|array{0:class-string,1:string} $handler */
    public function post(string $pattern, callable|array $handler): void
    {
        $this->add('POST', $pattern, $handler);
    }

    /** @param callable|array{0:class-string,1:string} $handler */
    public function put(string $pattern, callable|array $handler): void
    {
        $this->add('PUT', $pattern, $handler);
    }

    /** @param callable|array{0:class-string,1:string} $handler */
    public function delete(string $pattern, callable|array $handler): void
    {
        $this->add('DELETE', $pattern, $handler);
    }

    /** @param callable|array{0:class-string,1:string} $handler */
    public function options(string $pattern, callable|array $handler): void
    {
        $this->add('OPTIONS', $pattern, $handler);
    }

    /** @param callable|array{0:class-string,1:string} $handler */
    public function any(string $pattern, callable|array $handler): void
    {
        foreach (['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'] as $method) {
            $this->add($method, $pattern, $handler);
        }
    }

    /** @param callable|array{0:class-string,1:string} $handler */
    private function add(string $method, string $pattern, callable|array $handler): void
    {
        $vars  = [];
        $regex = preg_replace_callback(
            '/\{([a-zA-Z_][a-zA-Z0-9_]*)(?::([^}]+))?\}/',
            static function (array $m) use (&$vars): string {
                $vars[] = $m[1];

                return '(' . ($m[2] ?? '[^/]+') . ')';
            },
            $pattern
        );

        $this->routes[] = [
            'method'     => $method,
            'regex'      => '#^' . $regex . '$#',
            'vars'       => $vars,
            'handler'    => $handler,
            'middleware' => $this->groupMiddleware,
        ];
    }

    public function dispatch(Request $request): Response
    {
        $pathMatched = false;

        foreach ($this->routes as $route) {
            if (preg_match($route['regex'], $request->path, $matches) !== 1) {
                continue;
            }

            $pathMatched = true;

            if ($route['method'] !== $request->method) {
                continue;
            }

            array_shift($matches);
            foreach ($route['vars'] as $i => $name) {
                $request->params[$name] = $matches[$i] ?? '';
            }

            return $this->runPipeline($request, $route['middleware'], $route['handler']);
        }

        throw new HttpException($pathMatched ? 405 : 404);
    }

    /**
     * @param list<string>                                  $names
     * @param callable|array{0:class-string,1:string}       $handler
     */
    private function runPipeline(Request $request, array $names, callable|array $handler): Response
    {
        $core = function (Request $request) use ($handler): Response {
            if (is_array($handler)) {
                [$class, $method] = $handler;
                /** @var object $instance */
                $instance = new $class();

                /** @var Response $response */
                $response = $instance->{$method}($request);

                return $response;
            }

            /** @var Response $response */
            $response = $handler($request);

            return $response;
        };

        $next = $core;

        foreach (array_reverse($names) as $name) {
            if (!isset($this->middleware[$name])) {
                throw new \LogicException("Unknown middleware: {$name}");
            }

            $current = $this->middleware[$name];
            $prev    = $next;
            $next    = static fn (Request $r): Response => $current($r, $prev);
        }

        return $next($request);
    }
}
