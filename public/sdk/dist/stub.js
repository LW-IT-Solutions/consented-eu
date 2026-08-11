/*!
 * consented.eu — loader stub
 * SPDX-License-Identifier: MIT
 * Copyright (c) 2026 LW IT Solutions — see LICENSE
 *
 * Goes inline in <head>, before every other script. Its whole job is to exist
 * before anything else does: it captures API calls and blocks tracking scripts
 * during the window in which the real runtime has not loaded yet.
 *
 * Hand-written ES5, no build step. Keep it under 1 KB.
 */
(function (w, d) {
    'use strict';

    if (w.__consented) { return; }

    var q = [];

    // Public API placeholder. Every call is queued and replayed by cmp.js.
    var api = function () {
        q.push({ a: [].slice.call(arguments) });
    };

    api.q = q;
    api.loaded = false;

    ['ready', 'openSettings', 'acceptAll', 'denyAll', 'withdraw', 'on', 'off'].forEach(function (name) {
        api[name] = function () {
            q.push({ m: name, a: [].slice.call(arguments) });
        };
    });

    // These have to answer synchronously even before the runtime exists.
    // Returning null (not false) says "unknown yet", which callers must treat
    // as "no consent" — the safe default.
    api.getConsent = function () { return null; };
    api.hasConsent = function () { return null; };
    api.getConsentId = function () { return null; };

    w.Consented = api;
    w.__consented = { q: q, blocked: [] };

    // Config comes off our own tag: we run before cmp.js exists, so there is no
    // other source. Read once — currentScript is only valid while this executes.
    var self = null;
    try { self = d.currentScript; } catch (e) { /* unsupported: no attributes */ }

    function attr(name) {
        try { return (self && self.getAttribute(name)) || ''; } catch (e) { return ''; }
    }

    // GCM defaults, before any gtag/GTM snippet runs. data-no-gcm carries the
    // property's "set Consent Mode signals" switch — without it that switch only
    // stopped the later `update` while these denied defaults still went out,
    // pinning Google at denied forever instead of leaving it alone.
    // __consentedNoGcm stays for pages that decide at runtime. wait_for_update is
    // a constant: nothing in the dashboard offers it, so it belongs here.
    w.dataLayer = w.dataLayer || [];
    function gtag() { w.dataLayer.push(arguments); }
    if (!w.__consentedNoGcm && attr('data-no-gcm') !== '1') {
        gtag('consent', 'default', {
            ad_storage: 'denied',
            analytics_storage: 'denied',
            ad_user_data: 'denied',
            ad_personalization: 'denied',
            functionality_storage: 'denied',
            personalization_storage: 'denied',
            security_storage: 'granted',
            wait_for_update: 500
        });
    }

    // Pattern blocking starts here, not when cmp.js arrives: a tracker injected
    // in the first 200 ms would otherwise fire unblocked. Without currentScript
    // there are no patterns yet — they arrive with cmp.js.
    var patterns = [];
    var raw = attr('data-block');
    if (raw) { patterns = raw.split('|'); }

    w.__consented.patterns = patterns;

    function matches(url) {
        if (!url) { return false; }
        for (var i = 0; i < patterns.length; i++) {
            if (patterns[i] && url.indexOf(patterns[i]) !== -1) { return true; }
        }
        return false;
    }

    // The node plus its subtree. An observer reports only the ROOT of an inserted
    // subtree, so `el.innerHTML = '<div><iframe src=…></div>'` — the shape of
    // most embed snippets — used to slip past a matching pattern. Full reasoning
    // and the remaining race in docs/OPEN_QUESTIONS.md.
    function candidates(n) {
        var out = [];

        if (!n || n.nodeType !== 1) { return out; }

        var tag = n.tagName;
        if (tag === 'SCRIPT' || tag === 'IFRAME' || tag === 'IMG') { out.push(n); }

        if (n.querySelectorAll) {
            var inner = n.querySelectorAll('script[src],iframe[src],img[src]');
            for (var i = 0; i < inner.length; i++) { out.push(inner[i]); }
        }

        return out;
    }

    if (w.MutationObserver) {
        var mo = new MutationObserver(function (records) {
            for (var i = 0; i < records.length; i++) {
                var added = records[i].addedNodes;
                for (var j = 0; j < added.length; j++) {
                    var found = candidates(added[j]);

                    for (var k = 0; k < found.length; k++) {
                        var n   = found[k];
                        var src = n.getAttribute && n.getAttribute('src');
                        if (!matches(src)) { continue; }

                        // Neutralise before the browser fetches it.
                        n.setAttribute('data-consented-src', src);
                        n.removeAttribute('src');
                        if (n.tagName === 'SCRIPT') { n.type = 'text/plain'; }
                        w.__consented.blocked.push(n);
                    }
                }
            }
        });

        mo.observe(d.documentElement, { childList: true, subtree: true });
        w.__consented.mo = mo;
    }
})(window, document);
