<?php

declare(strict_types=1);

namespace Consented\Core;

use DOMDocument;
use DOMElement;
use DOMNode;

/**
 * Whitelist sanitiser for the small amount of inline HTML that property texts
 * are allowed to contain.
 *
 * Banner copy legitimately needs a link to the privacy policy and some
 * emphasis, so escaping everything is not an option. Everything outside the
 * whitelist is dropped, attributes included — this is an allow-list, not a
 * blocklist, so an unknown tag or attribute fails closed.
 */
final class Sanitizer
{
    private const ALLOWED_TAGS = ['a', 'strong', 'b', 'em', 'i', 'br', 'ul', 'ol', 'li', 'span', 'p'];

    private const ALLOWED_ATTRIBUTES = [
        'a'    => ['href', 'target', 'rel', 'title'],
        'span' => ['class'],
        'p'    => ['class'],
        'ul'   => ['class'],
        'li'   => ['class'],
    ];

    public static function html(string $input): string
    {
        $input = trim($input);

        if ($input === '') {
            return '';
        }

        if (!str_contains($input, '<')) {
            // Plain text: escape and hand back, no DOM round trip needed.
            return htmlspecialchars($input, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        }

        $doc = new DOMDocument('1.0', 'UTF-8');

        $previous = libxml_use_internal_errors(true);
        $loaded   = $doc->loadHTML(
            '<?xml encoding="UTF-8"><div id="ce-root">' . $input . '</div>',
            LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD | LIBXML_NONET
        );
        libxml_clear_errors();
        libxml_use_internal_errors($previous);

        if (!$loaded) {
            return htmlspecialchars(strip_tags($input), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        }

        $root = $doc->getElementById('ce-root');
        if (!$root instanceof DOMElement) {
            return htmlspecialchars(strip_tags($input), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        }

        self::clean($root);

        $out = '';
        foreach (iterator_to_array($root->childNodes) as $child) {
            $out .= $doc->saveHTML($child);
        }

        return trim($out);
    }

    private static function clean(DOMNode $node): void
    {
        // Snapshot first: the list is live and we mutate during iteration.
        foreach (iterator_to_array($node->childNodes) as $child) {
            if ($child instanceof DOMElement) {
                $tag = strtolower($child->tagName);

                if (!in_array($tag, self::ALLOWED_TAGS, true)) {
                    // Keep the text, drop the element.
                    while ($child->firstChild !== null) {
                        $node->insertBefore($child->firstChild, $child);
                    }
                    $node->removeChild($child);
                    continue;
                }

                self::cleanAttributes($child, $tag);
                self::clean($child);
                continue;
            }

            // Anything that is not an element or plain text (comments,
            // processing instructions, CDATA) goes.
            if ($child->nodeType !== XML_TEXT_NODE) {
                $node->removeChild($child);
            }
        }
    }

    private static function cleanAttributes(DOMElement $element, string $tag): void
    {
        $allowed = self::ALLOWED_ATTRIBUTES[$tag] ?? [];

        foreach (iterator_to_array($element->attributes ?? []) as $attribute) {
            $name = strtolower($attribute->nodeName);

            if (!in_array($name, $allowed, true)) {
                $element->removeAttribute($attribute->nodeName);
                continue;
            }

            if ($name === 'href' && !self::isSafeUrl($attribute->nodeValue ?? '')) {
                $element->removeAttribute('href');
            }
        }

        if ($tag === 'a' && $element->hasAttribute('href')) {
            // Any link we emit opens in a new tab and cannot reach back into
            // the opener via window.opener.
            $element->setAttribute('target', '_blank');
            $element->setAttribute('rel', 'noopener noreferrer');
        }
    }

    private static function isSafeUrl(string $url): bool
    {
        $url = trim($url);

        if ($url === '') {
            return false;
        }

        // Relative, anchor and placeholder URLs are fine.
        if (str_starts_with($url, '/') || str_starts_with($url, '#') || str_starts_with($url, '{{')) {
            return true;
        }

        return preg_match('#^(https?|mailto)://#i', $url) === 1
            || preg_match('#^mailto:#i', $url) === 1;
    }

    /** Plain text only — used for anything that must never contain markup. */
    public static function text(string $input): string
    {
        $stripped = strip_tags($input);

        return trim(html_entity_decode($stripped, ENT_QUOTES | ENT_HTML5, 'UTF-8'));
    }

    /**
     * Scopes and filters custom CSS supplied in the design editor.
     *
     * The banner renders inside a shadow root, so the CSS cannot leak out on
     * its own; what we still have to stop is CSS that phones home or escapes
     * the shadow boundary.
     */
    public static function css(string $css): string
    {
        $css = str_replace(["\0", '\\'], '', $css);

        // Comments can hide payloads from a naive regex, so remove them first.
        $css = preg_replace('#/\*.*?\*/#s', '', $css) ?? $css;

        $forbidden = ['@import', 'javascript:', 'expression(', 'behavior:', '-moz-binding', '</style', '<script'];

        foreach ($forbidden as $needle) {
            if (stripos($css, $needle) !== false) {
                $css = str_ireplace($needle, '', $css);
            }
        }

        // url() may only reference data: images, never a remote host — an
        // external URL in CSS is a tracking pixel with extra steps.
        $css = preg_replace_callback(
            '#url\(\s*([\'"]?)([^\'")]+)\1\s*\)#i',
            static function (array $m): string {
                $value = trim($m[2]);

                return str_starts_with(strtolower($value), 'data:image/')
                    ? 'url(' . $m[1] . $value . $m[1] . ')'
                    : 'none';
            },
            $css
        ) ?? $css;

        return trim(mb_substr($css, 0, 20000));
    }
}
