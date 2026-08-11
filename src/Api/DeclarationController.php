<?php

declare(strict_types=1);

namespace Consented\Api;

use Consented\Core\Exception\HttpException;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\View;
use Consented\Property\CookieDeclaration;
use Consented\Property\Property;

/**
 * The embeddable cookie declaration.
 *
 * Two shapes of the same content:
 *
 *   /p/{id}/cookies         a standalone page, for linking and for printing
 *   /p/{id}/cookies.js      a script that injects the same markup into the
 *                           customer's own privacy policy
 *
 * Both are public and unauthenticated, and deliberately so. The declaration is
 * meant to be read by anyone who visits the customer's site, and the same
 * snapshot it is built from is already downloadable at
 * /p/{id}/config/{version}.json — a visitor's browser cannot work without it.
 *
 * No Origin or Referer check either. The script is embedded on the customer's
 * pages, but the page is also something they link to from an email or a printed
 * notice, and a Referer gate would break exactly that while stopping nobody:
 * both headers are trivially forged. Where domain enforcement is actually worth
 * something is the runtime, and it happens there.
 */
final class DeclarationController
{
    /**
     * Cache window.
     *
     * Same reasoning as the runtime: the URL is stable while its content changes
     * on publish, so it must not be cached for long. Five minutes is short
     * enough that a republish reaches a reader quickly and long enough that a
     * privacy policy with traffic does not re-render on every hit.
     */
    private const MAX_AGE = 300;

    /** The standalone, human-readable page. */
    public function page(Request $request): Response
    {
        [$property, $declaration] = $this->resolve($request);

        $html = View::render('declaration/page', [
            'title'       => $declaration['texts']['declaration_title'] ?? 'Cookies',
            'declaration' => $declaration,
            'property'    => $property,
        ], null);

        return $this->deliver($request, $html, 'text/html; charset=utf-8')
            /*
             * Never indexed.
             *
             * This page carries the customer's legal text on our domain. If a
             * search engine picked it up it could outrank the customer's own
             * privacy policy, and their visitors would end up reading their
             * cookie declaration on someone else's site.
             */
            ->withHeader('X-Robots-Tag', 'noindex, nofollow');
    }

    /**
     * The embed script.
     *
     * It carries the finished markup rather than data plus a renderer. A second
     * renderer in JavaScript would be a second place for the declaration to be
     * wrong, and this way the customer's page needs no template, no styling
     * decisions and no knowledge of our data shape.
     */
    public function embed(Request $request): Response
    {
        [, $declaration] = $this->resolve($request);

        $fragment = View::render('declaration/fragment', [
            'declaration' => $declaration,
            'embedded'    => true,
        ], null);

        $body = "(function(w,d){'use strict';\n"
            . 'var html=' . $this->jsString($fragment) . ";\n"
            . <<<'JS'
                /*
                 * Where the declaration goes, in order of preference:
                 *
                 *   1. an element the customer marked
                 *   2. right where their <script> tag sits
                 *
                 * The second case is what makes the snippet a one-liner: paste it
                 * into the privacy policy and the table appears in that spot. It
                 * needs document.currentScript, which is why the script must not
                 * be deferred — with `defer` currentScript is still set, with a
                 * dynamically injected tag it is not, and then only case 1 works.
                 */
                function mount() {
                    var target = d.getElementById('consented-cookie-declaration') ||
                                 d.querySelector('[data-consented-cookie-declaration]');

                    if (target) { target.innerHTML = html; return true; }

                    var self = d.currentScript;

                    if (self && self.parentNode) {
                        var box = d.createElement('div');
                        box.innerHTML = html;
                        self.parentNode.insertBefore(box, self.nextSibling);
                        return true;
                    }

                    return false;
                }

                // currentScript is only meaningful while this file executes, so
                // the first attempt has to happen now. A marked element that the
                // page builds later is picked up on DOMContentLoaded instead.
                if (!mount() && d.addEventListener) {
                    d.addEventListener('DOMContentLoaded', function () { mount(); });
                }
                JS
            . "\n})(window,document);\n";

        return $this->deliver($request, $body, 'application/javascript; charset=utf-8')
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('X-Content-Type-Options', 'nosniff');
    }

    /**
     * @return array{0:Property,1:array<string,mixed>}
     */
    private function resolve(Request $request): array
    {
        $property = Property::findByPublicId($request->param('publicId'));

        /*
         * One 404 for "no such property", "suspended" and "nothing published".
         *
         * The endpoint is public and unauthenticated, so telling the difference
         * apart would let anyone walk public IDs and learn which ones exist and
         * what state they are in. The dashboard knows the reason and says it
         * there, to someone who is allowed to know.
         */
        if ($property === null || $property->isSuspended()) {
            throw new HttpException(404, 'Not found.');
        }

        $declaration = CookieDeclaration::build($property, $this->language($request));

        if ($declaration === null) {
            throw new HttpException(404, 'Not found.');
        }

        return [$property, $declaration];
    }

    private function language(Request $request): ?string
    {
        $lang = $request->input('lang');

        if (!is_string($lang) || $lang === '') {
            return null;
        }

        // Only the shape is checked here; CookieDeclaration decides whether the
        // property actually has that language and falls back if not.
        return preg_match('/^[a-z]{2}(-[A-Za-z]{2,8})?$/', $lang) === 1 ? $lang : null;
    }

    /**
     * The response, with conditional requests actually answered.
     *
     * The ETag is the hash of the rendered body, so a republish invalidates it
     * by itself and two identical renders share a cache entry. Setting the
     * header without honouring `If-None-Match` would have been the worse half of
     * the deal: the declaration sits in a privacy policy that gets re-read, and
     * every visit would have pulled twenty-odd kilobytes to arrive at markup the
     * browser already had.
     */
    private function deliver(Request $request, string $body, string $contentType): Response
    {
        $etag = '"' . substr(hash('sha256', $body), 0, 32) . '"';

        $response = $request->header('if-none-match') === $etag
            // 304 carries no body, and per RFC 9110 it must repeat the headers
            // the client would need to keep caching — the ETag above all.
            ? Response::text('', 304)
            : Response::text($body)->withHeader('Content-Type', $contentType);

        return $response
            ->withHeader('ETag', $etag)
            ->withHeader('Cache-Control', 'public, max-age=' . self::MAX_AGE . ', stale-while-revalidate=3600');
    }

    /**
     * The fragment as a JavaScript string literal.
     *
     * json_encode, not hand-rolled quoting: it escapes the quotes, the
     * backslashes and the control characters. JSON_HEX_TAG additionally turns
     * every `<` and `>` into < and >, and slashes stay escaped — that
     * is the part that matters. Without it a `</script>` anywhere inside an
     * operator's own wording would close the script element early, and the rest
     * of the declaration would land on the customer's page as markup.
     */
    private function jsString(string $html): string
    {
        return (string) json_encode(
            $html,
            JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP
        );
    }
}
