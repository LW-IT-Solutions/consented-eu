/*!
 * consented.eu — CMP runtime
 * SPDX-License-Identifier: MIT
 * Copyright (c) 2026 LW IT Solutions — see LICENSE
 *
 * Hand-written ES5-compatible IIFE, no build step and no runtime dependency.
 * Renders inside a shadow root so that neither the host page's CSS can break
 * the banner nor our CSS leak into the page.
 */
(function (w, d) {
    'use strict';

    if (w.__consentedRuntimeLoaded) { return; }
    w.__consentedRuntimeLoaded = true;

    /*
     * The button orders a property may choose from.
     *
     * Kept in step with Defaults::buttonOrders() on the server, which validates
     * the incoming value against the same keys. Two lists rather than one is a
     * small duplication, but the alternative is shipping the whole catalogue
     * into every page just so the runtime can look up three slots.
     */
    var ORDERS = {
        'settings,reject,accept': ['settings', 'reject', 'accept'],
        'settings,accept,reject': ['settings', 'accept', 'reject'],
        'reject,accept,settings': ['reject', 'accept', 'settings'],
        'accept,reject,settings': ['accept', 'reject', 'settings'],
        'reject,settings,accept': ['reject', 'settings', 'accept'],
        'accept,settings,reject': ['accept', 'settings', 'reject']
    };

    var DEFAULT_ORDER = 'settings,reject,accept';

    /* ------------------------------------------------------------------ util */

    function extend(target) {
        for (var i = 1; i < arguments.length; i++) {
            var src = arguments[i];
            if (!src) { continue; }
            for (var k in src) {
                if (Object.prototype.hasOwnProperty.call(src, k)) { target[k] = src[k]; }
            }
        }
        return target;
    }

    function esc(s) {
        return String(s == null ? '' : s)
            .replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;').replace(/'/g, '&#39;');
    }

    function el(tag, attrs, html) {
        var node = d.createElement(tag);
        if (attrs) {
            for (var k in attrs) {
                if (Object.prototype.hasOwnProperty.call(attrs, k) && attrs[k] != null) {
                    node.setAttribute(k, attrs[k]);
                }
            }
        }
        if (html != null) { node.innerHTML = html; }
        return node;
    }

    /**
     * Element lookup inside the shadow root.
     *
     * By id rather than by CSS selector: service ids come from the property
     * configuration and may start with a digit or contain a dot, either of
     * which would break a naive '#' + id selector.
     */
    function byId(id) {
        if (CMP.shadow && CMP.shadow.getElementById) {
            return CMP.shadow.getElementById(id);
        }

        var all = CMP.shadow ? CMP.shadow.querySelectorAll('[id]') : [];
        for (var i = 0; i < all.length; i++) {
            if (all[i].id === id) { return all[i]; }
        }

        return null;
    }

    function uuid() {
        if (w.crypto && w.crypto.randomUUID) { return w.crypto.randomUUID(); }

        var bytes = new Uint8Array(16);
        if (w.crypto && w.crypto.getRandomValues) {
            w.crypto.getRandomValues(bytes);
        } else {
            for (var i = 0; i < 16; i++) { bytes[i] = Math.floor(Math.random() * 256); }
        }
        bytes[6] = (bytes[6] & 0x0f) | 0x40;
        bytes[8] = (bytes[8] & 0x3f) | 0x80;

        var hex = [];
        for (var j = 0; j < 16; j++) { hex.push((bytes[j] + 0x100).toString(16).slice(1)); }

        return hex.slice(0, 4).join('') + '-' + hex.slice(4, 6).join('') + '-' +
               hex.slice(6, 8).join('') + '-' + hex.slice(8, 10).join('') + '-' +
               hex.slice(10, 16).join('');
    }

    /* --------------------------------------------------------------- storage */

    var Storage = {
        name: 'consented',

        rootDomain: function () {
            // Widest domain we may legitimately set a cookie on, so consent is
            // shared across subdomains of the same site.
            var host = d.location.hostname;
            if (/^[\d.]+$/.test(host) || host.indexOf('.') === -1) { return null; }

            var parts = host.split('.');
            for (var i = parts.length - 2; i >= 0; i--) {
                var candidate = parts.slice(i).join('.');
                d.cookie = '__ce_probe=1;domain=.' + candidate + ';path=/;SameSite=Lax';
                if (d.cookie.indexOf('__ce_probe=1') !== -1) {
                    d.cookie = '__ce_probe=;domain=.' + candidate + ';path=/;Max-Age=0;SameSite=Lax';
                    return candidate;
                }
            }
            return null;
        },

        /*
         * storage: 'none' — decide, act, remember nothing.
         *
         * For the preview frames in the dashboard and on the landing page. They
         * exist to look at the banner, and a stored decision made them useless
         * after a single click: the banner was gone, the cookie said "handled",
         * and nothing brought it back.
         *
         * Deliberately a storage mode rather than a preview flag: not writing is
         * a property of the storage, and expressing it here means read, write and
         * clear cannot drift apart later.
         *
         * Not offered to properties — Defaults::settings() lists cookie and
         * localstorage. A live banner that forgets the decision would ask again
         * on every page view, which is the opposite of what consent is for.
         */
        read: function (cfg) {
            if (cfg.settings.storage === 'none') { return null; }

            var raw = null;

            if (cfg.settings.storage !== 'localstorage') {
                var match = d.cookie.match(new RegExp('(?:^|; )' + this.name + '=([^;]*)'));
                if (match) { raw = decodeURIComponent(match[1]); }
            }

            if (!raw && cfg.settings.storage !== 'cookie') {
                try { raw = w.localStorage.getItem(this.name); } catch (e) { /* blocked */ }
            }

            if (!raw) { return null; }

            try { return JSON.parse(raw); } catch (e) { return null; }
        },

        write: function (cfg, data) {
            if (cfg.settings.storage === 'none') { return; }

            var raw  = JSON.stringify(data);
            var days = cfg.settings.consentLifetimeDays || 365;

            if (cfg.settings.storage !== 'localstorage') {
                var expires = new Date(Date.now() + days * 864e5).toUTCString();
                var domain  = cfg.settings.crossSubdomain === false ? null : this.rootDomain();
                var secure  = d.location.protocol === 'https:' ? ';Secure' : '';

                d.cookie = this.name + '=' + encodeURIComponent(raw) +
                    ';expires=' + expires + ';path=/' +
                    (domain ? ';domain=.' + domain : '') +
                    ';SameSite=Lax' + secure;
            }

            if (cfg.settings.storage !== 'cookie') {
                try { w.localStorage.setItem(this.name, raw); } catch (e) { /* blocked */ }
            }
        },

        clear: function (cfg) {
            if (cfg.settings.storage === 'none') { return; }

            var domain = this.rootDomain();
            d.cookie = this.name + '=;path=/;Max-Age=0;SameSite=Lax' +
                (domain ? ';domain=.' + domain : '');
            try { w.localStorage.removeItem(this.name); } catch (e) { /* blocked */ }
        }
    };

    /* ----------------------------------------------------------------- state */

    var CMP = {
        cfg: null,
        state: null,
        root: null,
        shadow: null,
        listeners: {},
        shownAt: 0,
        lastFocus: null,
        view: 'banner',
        draft: null
    };

    function t(key, fallback) {
        var lang  = CMP.cfg.language;
        var texts = (CMP.cfg.texts && CMP.cfg.texts[lang]) || {};
        if (texts[key] != null && texts[key] !== '') { return texts[key]; }

        var def = (CMP.cfg.texts && CMP.cfg.texts[CMP.cfg.defaultLanguage]) || {};
        if (def[key] != null && def[key] !== '') { return def[key]; }

        return fallback == null ? key : fallback;
    }

    /**
     * Ein Feld, das je Sprache verschieden sein darf.
     *
     * Laufzeiten kommen aus dem Bundle entweder als Zeichenkette — dann ist der
     * Wert in allen Sprachen derselbe, etwa "bis zum Widerruf" — oder als Karte
     * {de: "2 Jahre", en: "2 years"}. Der Server entscheidet das je Wert und
     * spart sich die Karte, wo sie nichts brächte.
     *
     * Beide Formen müssen hier ankommen dürfen: veröffentlichte Schnappschüsse
     * sind eingefroren und tragen durchweg Zeichenketten. Ein Bundle von
     * gestern muss mit der Runtime von heute weiterlaufen.
     */
    function localised(value) {
        if (value == null) { return ''; }
        if (typeof value === 'string') { return value; }
        if (typeof value !== 'object') { return String(value); }

        if (value[CMP.cfg.language] != null) { return value[CMP.cfg.language]; }
        if (value[CMP.cfg.defaultLanguage] != null) { return value[CMP.cfg.defaultLanguage]; }

        for (var k in value) {
            if (Object.prototype.hasOwnProperty.call(value, k)) { return value[k]; }
        }

        return '';
    }

    function interpolate(text) {
        var vars = CMP.cfg.placeholders || {};
        return String(text).replace(/\{\{(\w+)\}\}/g, function (m, name) {
            return vars[name] != null ? vars[name] : '';
        });
    }

    /**
     * Assembles a button row in the order the property configured.
     *
     * Why the order is a setting at all: where "reject" sits relative to
     * "accept" is a genuine design question — a bar at the bottom of a page
     * reads differently from a centred dialog, and right-to-left languages read
     * differently again. Fixing it in the runtime meant every operator had to
     * live with our taste.
     *
     * Why it is a NAMED order and not a free sort: the set of permutations is
     * closed and small, so the server can validate against a list and nothing
     * unexpected can arrive here. An arbitrary sort key would also let someone
     * express "reject last, off screen" on a narrow viewport, which is the kind
     * of thing this product exists to prevent.
     *
     * Unknown or missing values fall back to the default rather than dropping a
     * button: a typo in a configuration must never cost the visitor the reject
     * button.
     *
     * @param {{settings:string, reject:string, accept:string}} parts
     */
    function buttonRow(parts) {
        var order = ORDERS[(CMP.cfg.buttonOrder || '')] || ORDERS[DEFAULT_ORDER];
        var html  = '';

        for (var i = 0; i < order.length; i++) {
            html += parts[order[i]] || '';
        }

        return html;
    }

    /**
     * Which language the dialog speaks.
     *
     * The property picks the source. The three values are exactly the ones the
     * dashboard offers, and each is honoured literally:
     *
     *   'browser'  the visitor's browser, then the page, then the default
     *   'html'     the page's lang attribute, then the default
     *   'default'  the property default, always
     *
     * Only enabled languages can win, so no setting can select a language for
     * which no texts exist. An unknown value falls back to 'browser' because
     * that was the behaviour of every property before the setting was read at
     * all — a typo must not silently change what a visitor sees.
     */
    function pickLanguage(cfg) {
        var available = cfg.languages || [cfg.defaultLanguage];
        var mode      = (cfg.settings && cfg.settings.languageDetection) || 'browser';

        function has(code) {
            for (var i = 0; i < available.length; i++) {
                if (available[i] === code) { return code; }
            }
            return null;
        }

        if (mode === 'default') { return cfg.defaultLanguage; }

        var page = (d.documentElement.lang || '').replace('_', '-');

        // de-AT -> de-AT, then de. The full tag first, so a property that
        // enabled a regional code actually gets it.
        function fromTag(tag) {
            return has(tag) || has(tag.split('-')[0]);
        }

        if (mode === 'html') {
            return fromTag(page) || cfg.defaultLanguage;
        }

        var nav = (navigator.language || navigator.userLanguage || '').replace('_', '-');

        return fromTag(nav) || fromTag(page) || cfg.defaultLanguage;
    }

    /* -------------------------------------------------------- decision model */

    function essentialCategories() {
        var keys = [];
        for (var i = 0; i < CMP.cfg.categories.length; i++) {
            if (CMP.cfg.categories[i].required) { keys.push(CMP.cfg.categories[i].key); }
        }
        return keys;
    }

    function emptyDecisions(grant) {
        var out = { categories: {}, services: {} };

        for (var i = 0; i < CMP.cfg.categories.length; i++) {
            var c = CMP.cfg.categories[i];
            out.categories[c.key] = c.required ? true : !!grant;
        }

        for (var j = 0; j < CMP.cfg.services.length; j++) {
            var s = CMP.cfg.services[j];
            out.services[s.id] = s.essential ? true : !!grant;
        }

        return out;
    }

    /**
     * Working copy of the visitor's selection while the second layer is open.
     *
     * The same service is rendered twice — once nested under its category and
     * once in the Advanced list — so the DOM cannot be the source of truth
     * without the two copies drifting apart. Every toggle writes here, and the
     * checkboxes are re-synced from it.
     */
    function openDraft() {
        var base = CMP.state ? CMP.state.decisions : emptyDecisions(false);

        CMP.draft = { categories: {}, services: {} };

        for (var i = 0; i < CMP.cfg.categories.length; i++) {
            var c = CMP.cfg.categories[i];
            CMP.draft.categories[c.key] = c.required ? true : !!base.categories[c.key];
        }

        for (var j = 0; j < CMP.cfg.services.length; j++) {
            var s = CMP.cfg.services[j];
            CMP.draft.services[s.id] = s.essential ? true : !!base.services[s.id];
        }
    }

    /** A category is on when at least one of its non-essential services is on. */
    function recomputeCategory(key) {
        var services = servicesInCategory(key);
        var optional = 0;
        var granted  = 0;

        for (var i = 0; i < services.length; i++) {
            if (services[i].essential) { continue; }
            optional++;
            if (CMP.draft.services[services[i].id]) { granted++; }
        }

        // A category with no optional services follows its own switch.
        if (optional === 0) { return; }

        CMP.draft.categories[key] = granted > 0;
    }

    function setCategory(key, on) {
        CMP.draft.categories[key] = on;

        var services = servicesInCategory(key);
        for (var i = 0; i < services.length; i++) {
            if (!services[i].essential) {
                CMP.draft.services[services[i].id] = on;
            }
        }
    }

    /** Pushes the draft back onto every checkbox, in both panes. */
    function syncToggles() {
        var boxes = CMP.shadow.querySelectorAll('[data-cat]');
        for (var i = 0; i < boxes.length; i++) {
            boxes[i].checked = !!CMP.draft.categories[boxes[i].getAttribute('data-cat')];
        }

        var svc = CMP.shadow.querySelectorAll('[data-svc]');
        for (var j = 0; j < svc.length; j++) {
            svc[j].checked = !!CMP.draft.services[svc[j].getAttribute('data-svc')];
        }
    }

    function decisionsFromDraft() {
        var out = { categories: {}, services: {} };

        for (var i = 0; i < CMP.cfg.categories.length; i++) {
            var c = CMP.cfg.categories[i];
            out.categories[c.key] = c.required ? true : !!CMP.draft.categories[c.key];
        }

        for (var j = 0; j < CMP.cfg.services.length; j++) {
            var s = CMP.cfg.services[j];
            out.services[s.id] = s.essential ? true : !!CMP.draft.services[s.id];
        }

        return out;
    }

    /* --------------------------------------------------------------- styling */

    function styleSheet() {
        var tk = CMP.cfg.tokens || {};
        var v  = function (key, fallback) { return tk[key] || fallback; };

        /*
         * Scrollbar appearance, an operator setting. 'native' leaves the
         * platform default alone — the honest choice for anyone who wants the
         * dialog to look like the rest of the OS.
         *
         * The other two derive the thumb from currentColor, which .ce-root sets
         * to the text token. That is the one colour guaranteed to be readable
         * against the panel background, whatever palette the operator picked —
         * a fixed grey would vanish on a dark banner, and the border tokens are
         * meant for hairlines, not for a grab handle.
         *
         * color-mix carries the real value; the flat fallback in front of it is
         * what browsers without it use. The arrow buttons go because Chromium on
         * Windows still draws them for non-overlay scrollbars, and they look
         * like a control from another decade inside a rounded dark dialog.
         */
        var sbMode  = CMP.cfg.scrollbar || 'subtle';
        var sbMix   = sbMode === 'strong' ? '46%' : '26%';
        var sbFlat  = v('border2', 'rgba(10,19,38,.24)');
        var sbSoft  = 'color-mix(in srgb,currentColor ' + sbMix + ',transparent)';
        var sbScope = ['.ce-panel', '.ce-pane', '.ce-tabs', '.ce-backdrop', '.ce-details', '.ce-sub'];

        var sbPart = function (part) {
            var out = [];
            for (var i = 0; i < sbScope.length; i++) { out.push(sbScope[i] + '::-webkit-scrollbar' + part); }
            return out.join(',');
        };

        var scrollbarCss = sbMode === 'native' ? '' : [
            sbScope.join(','), '{scrollbar-width:thin;scrollbar-color:', sbFlat, ' transparent}',
            sbScope.join(','), '{scrollbar-color:', sbSoft, ' transparent}',
            sbPart(''), '{width:10px;height:10px}',
            sbPart('-track'), '{background:transparent}',
            sbPart('-corner'), '{background:transparent}',
            // width/height as well as display: some Chromium versions keep
            // reserving the button box even when it is not painted.
            sbPart('-button'), '{display:none;width:0;height:0}',
            sbPart('-thumb'), '{background:', sbFlat, ';border-radius:8px;',
            'border:2px solid transparent;background-clip:content-box}',
            sbPart('-thumb'), '{background:', sbSoft, '}',
            sbPart('-thumb:hover'), '{background:', v('textSubtle', 'rgba(10,19,38,.45)'), '}'
        ].join('');

        return [
            scrollbarCss,
            ':host{all:initial}',
            '*,*::before,*::after{box-sizing:border-box}',
            '.ce-root{',
            'font-family:', v('fontFamily', '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif'), ';',
            'font-size:', v('fontSize', '15px'), ';line-height:1.55;',
            'color:', v('text', '#10131A'), ';',
            '-webkit-font-smoothing:antialiased}',
            '.ce-backdrop{position:fixed;inset:0;z-index:2147483000;background:', v('backdropColor', 'rgba(10,19,38,.5)'), ';',
            CMP.cfg.backdropBlur ? 'backdrop-filter:blur(4px);' : '',
            'display:flex;align-items:center;justify-content:center;padding:16px;overflow-y:auto}',
            '.ce-backdrop--bottom{align-items:flex-end;padding:0}',
            '.ce-backdrop--top{align-items:flex-start;padding:0}',
            '.ce-backdrop--corner{align-items:flex-end;justify-content:flex-end;padding:20px}',
            '.ce-backdrop--boxbottom{align-items:flex-end;padding:', v('boxOffset', '24px'), ' 16px}',
            '.ce-panel--box{max-width:', v('boxWidth', '1060px'), '}',
            '.ce-panel--box .ce-actions{margin-top:22px}',
            '.ce-backdrop--none{background:none;pointer-events:none}',
            '.ce-backdrop--none .ce-panel{pointer-events:auto}',
            '.ce-panel{background:', v('background', '#FFFFFF'), ';',
            'border-radius:', v('radius', '14px'), ';',
            'box-shadow:', v('shadow', '0 18px 48px rgba(10,19,38,.22)'), ';',
            'width:100%;max-width:', v('maxWidth', '560px'), ';',
            /*
             * max-height:100%, not calc(100vh - 32px). The panel sits in the
             * backdrop, and the backdrop is position:fixed;inset:0 — which
             * measures the viewport WITHOUT a horizontal scrollbar, while 100vh
             * measures it WITH one. On a host page that scrolls sideways the
             * panel came out ~15px taller than the space it had, and the
             * backdrop grew its own scrollbar next to the panel. A percentage
             * resolves against the backdrop's content box instead, so it is
             * exact for every padding variant (0, 16, 20, boxOffset) without
             * arithmetic that has to be kept in step.
             *
             * Flex column so the pane below can be the only scroller. Before
             * this, the panel scrolled AND the pane scrolled: two nested
             * scrollbars side by side.
             */
            'max-height:100%;display:flex;flex-direction:column;overflow-y:auto;',
            'border:1px solid ', v('border', 'rgba(10,19,38,.10)'), '}',
            '.ce-inner,.ce-tabs,.ce-foot,.ce-bar-grid{flex:0 0 auto}',
            '.ce-panel--bar{max-width:100%;border-radius:0;border-left:0;border-right:0;border-bottom:0}',
            '.ce-panel--bar.ce-panel--top{border-top:0;border-bottom:1px solid ', v('border', 'rgba(10,19,38,.10)'), '}',
            '.ce-panel--wide{max-width:', v('modalWidth', '820px'), '}',
            '.ce-inner{padding:', v('padding', '22px 24px'), '}',
            '.ce-bar-grid{display:flex;gap:20px;align-items:center;flex-wrap:wrap;',
            'max-width:1180px;margin:0 auto;padding:', v('padding', '18px 24px'), '}',
            '.ce-bar-grid .ce-copy{flex:1 1 380px;min-width:260px}',
            '.ce-bar-grid .ce-actions{flex:0 0 auto}',
            '.ce-logo{max-height:30px;width:auto;margin-bottom:12px;display:block}',
            '.ce-title{margin:0 0 8px;font-size:', v('titleSize', '17px'), ';font-weight:700;line-height:1.3;color:', v('heading', v('text', '#10131A')), '}',
            // No focus ring on the heading.
            //
            // The banner moves focus to the title when it opens so a screen
            // reader announces the dialog instead of silently changing context.
            // The browser then drew its default outline around the <h2> — a box
            // spanning the whole panel width, which looks like a stray border
            // and is what it was reported as.
            //
            // Suppressing it is safe rather than a shortcut: the heading carries
            // tabindex="-1", so no keyboard user can ever land on it, and a
            // focus indicator is only required for components that are operable
            // by keyboard. The buttons keep their styled ring below.
            '.ce-title:focus{outline:none}',
            '.ce-text{margin:0;font-size:', v('bodySize', '14px'), ';color:', v('textMuted', '#4A5163'), '}',
            '.ce-text a{color:', v('link', '#1B4BB8'), ';text-decoration:underline}',
            '.ce-actions{display:flex;gap:10px;flex-wrap:wrap;margin-top:18px}',
            '.ce-bar-grid .ce-actions{margin-top:0}',
            '.ce-btn{appearance:none;font:inherit;font-size:14px;font-weight:600;line-height:1.2;',
            'min-height:44px;padding:11px 18px;border-radius:', v('buttonRadius', '9px'), ';',
            'cursor:pointer;border:1px solid transparent;transition:filter .15s ease;white-space:nowrap}',
            '.ce-btn:hover{filter:brightness(.94)}',
            '.ce-btn:focus-visible{outline:3px solid ', v('focus', v('primary', '#1B4BB8')), ';outline-offset:2px}',
            // Reject and accept get identical visual weight. TCF v2.2 requires
            // the refusal to be as easy as the acceptance, and a grey "reject"
            // next to a coloured "accept" is exactly what that rules out.
            '.ce-btn--accept{background:', v('primary', '#1B4BB8'), ';color:', v('primaryText', '#FFFFFF'), '}',
            '.ce-btn--reject{background:', v('rejectBg', v('primary', '#1B4BB8')), ';color:', v('rejectText', v('primaryText', '#FFFFFF')), '}',
            '.ce-btn--secondary{background:transparent;color:', v('text', '#10131A'), ';border-color:', v('border2', 'rgba(10,19,38,.22)'), '}',
            '.ce-btn--link{background:none;border:0;color:', v('link', '#1B4BB8'), ';text-decoration:underline;padding:11px 4px;min-height:44px}',
            /* overflow-y muss ausdrücklich hidden sein.

               Mit `overflow-x:auto` allein bleibt die Y-Achse auf `visible` —
               und CSS rechnet `visible` auf `auto` um, sobald die andere Achse
               nicht `visible` ist. Die Reiterzeile war damit in beide Richtungen
               scrollbar, und einen Grund zum Überlaufen liefert die Zeile
               darunter selbst: `.ce-tab` trägt `margin-bottom:-1px`, um die
               Unterkante zu überlappen. Das eine Pixel genügte für einen
               senkrechten Balken in Höhe der Reiterzeile. */
            '.ce-tabs{display:flex;gap:4px;border-bottom:1px solid ', v('border', 'rgba(10,19,38,.10)'), ';',
            'overflow-x:auto;overflow-y:hidden}',
            '.ce-tab{appearance:none;background:none;border:0;border-bottom:2px solid transparent;',
            'font:inherit;font-size:14px;font-weight:600;color:', v('textMuted', '#4A5163'), ';',
            'padding:12px 14px;min-height:44px;cursor:pointer;white-space:nowrap;margin-bottom:-1px}',
            '.ce-tab[aria-selected="true"]{color:', v('primary', '#1B4BB8'), ';border-bottom-color:', v('primary', '#1B4BB8'), '}',
            '.ce-tab:focus-visible{outline:3px solid ', v('primary', '#1B4BB8'), ';outline-offset:-3px}',
            /* Takes the space the header, tabs and footer leave over, and is
               the single scroller of the dialog. min-height:0 is what allows a
               flex item to become shorter than its content — without it the
               pane would push the panel past its max-height and the panel
               would start scrolling too. */
            '.ce-pane{padding:18px 24px;flex:1 1 auto;min-height:0;overflow-y:auto}',
            '.ce-item{border:1px solid ', v('border', 'rgba(10,19,38,.10)'), ';border-radius:10px;margin-bottom:10px;overflow:hidden}',
            '.ce-item__head{display:flex;gap:14px;align-items:flex-start;padding:14px 16px}',
            '.ce-item__body{flex:1 1 auto;min-width:0}',
            '.ce-item__name{font-weight:650;font-size:14px;margin:0 0 3px;color:', v('heading', v('text', '#10131A')), '}',
            '.ce-item__desc{margin:0;font-size:13px;color:', v('textMuted', '#4A5163'), '}',
            '.ce-item__meta{margin:6px 0 0;font-size:12px;color:', v('textSubtle', '#6C7386'), '}',
            '.ce-item__meta dt{font-weight:600;display:inline}',
            '.ce-item__meta dd{display:inline;margin:0 10px 0 4px}',
            // Services nested inside a category, indented so the hierarchy is
            // visible without a second level of boxes.
            '.ce-sub{border-top:1px solid ', v('border', 'rgba(10,19,38,.08)'), ';',
            'background:', v('subtleBg', 'rgba(10,19,38,.02)'), '}',
            '.ce-sub__row{display:flex;gap:12px;align-items:flex-start;padding:11px 16px 11px 26px;',
            'border-bottom:1px solid ', v('border', 'rgba(10,19,38,.06)'), '}',
            '.ce-sub__row:last-of-type{border-bottom:0}',
            '.ce-sub__body{flex:1 1 auto;min-width:0}',
            '.ce-sub__name{font-weight:600;font-size:13.5px;margin:0;color:', v('heading', v('text', '#10131A')), '}',
            '.ce-sub__desc{margin:2px 0 0;font-size:12.5px;color:', v('textMuted', '#4A5163'), '}',
            '.ce-sub .ce-toggle{transform:scale(.86);transform-origin:right center}',
            '.ce-count{font-size:12px;color:', v('textSubtle', '#6C7386'), ';font-weight:600}',
            '.ce-toggle{position:relative;flex:0 0 auto;width:44px;height:26px;display:inline-block}',
            '.ce-toggle input{position:absolute;opacity:0;width:100%;height:100%;margin:0;cursor:pointer;z-index:1}',
            '.ce-toggle span{position:absolute;inset:0;background:', v('toggleOff', '#C8CDD8'), ';border-radius:999px;transition:background .18s}',
            '.ce-toggle span::after{content:"";position:absolute;top:3px;left:3px;width:20px;height:20px;',
            'background:#fff;border-radius:50%;transition:transform .18s;box-shadow:0 1px 3px rgba(0,0,0,.25)}',
            '.ce-toggle input:checked+span{background:', v('toggleOn', '#0E7A57'), '}',
            '.ce-toggle input:checked+span::after{transform:translateX(18px)}',
            '.ce-toggle input:disabled+span{opacity:.55}',
            '.ce-toggle input:focus-visible+span{outline:3px solid ', v('primary', '#1B4BB8'), ';outline-offset:2px}',
            '.ce-disclose{appearance:none;background:none;border:0;font:inherit;font-size:12px;font-weight:600;',
            'color:', v('link', '#1B4BB8'), ';cursor:pointer;padding:8px 16px 12px;min-height:36px;text-align:left;width:100%}',
            '.ce-details{padding:0 16px 14px;font-size:12.5px;color:', v('textMuted', '#4A5163'), ';',
            'border-top:1px solid ', v('border', 'rgba(10,19,38,.08)'), ';margin-top:2px;padding-top:12px}',
            '.ce-details table{width:100%;border-collapse:collapse;margin-top:8px;font-size:12px}',
            '.ce-details th,.ce-details td{text-align:left;padding:5px 8px 5px 0;vertical-align:top;',
            'border-bottom:1px solid ', v('border', 'rgba(10,19,38,.07)'), '}',
            '.ce-details th{font-weight:650;color:', v('text', '#10131A'), ';white-space:nowrap}',
            '.ce-foot{display:flex;gap:10px;flex-wrap:wrap;justify-content:flex-end;align-items:center;',
            'padding:16px 24px;border-top:1px solid ', v('border', 'rgba(10,19,38,.10)'), ';',
            'background:', v('footerBg', 'rgba(10,19,38,.02)'), '}',
            '.ce-legal{display:flex;gap:14px;flex-wrap:wrap;font-size:12px;margin-right:auto}',
            '.ce-legal a{color:', v('textSubtle', '#6C7386'), ';text-decoration:underline}',
            '.ce-badge{display:inline-block;font-size:10.5px;font-weight:700;letter-spacing:.03em;',
            'text-transform:uppercase;padding:2px 7px;border-radius:999px;',
            'background:', v('badgeBg', 'rgba(10,19,38,.06)'), ';color:', v('textSubtle', '#6C7386'), ';margin-left:6px}',
            '.ce-cid{font-size:11px;color:', v('textSubtle', '#6C7386'), ';margin:14px 0 0;word-break:break-all}',
            '.ce-relaunch{position:fixed;z-index:2147482000;bottom:16px;left:16px;',
            'width:46px;height:46px;border-radius:50%;border:1px solid ', v('border2', 'rgba(10,19,38,.18)'), ';',
            'background:', v('background', '#FFFFFF'), ';color:', v('primary', '#1B4BB8'), ';',
            'cursor:pointer;box-shadow:0 4px 14px rgba(10,19,38,.16);display:flex;align-items:center;justify-content:center}',
            '.ce-relaunch--right{left:auto;right:16px}',
            '@media (max-width:640px){',
            /*
             * `column`, never `column-reverse`.
             *
             * The order of the buttons is the property's choice out of six
             * permutations and it has to survive the viewport. `column-reverse`
             * reverses the main axis, so the default `settings,reject,accept`
             * arrived on a phone as `accept, reject, settings` top to bottom —
             * accept in the position with the highest chance of being hit, on
             * the class of device that carries most of the traffic. That is the
             * dark pattern this product is built to refuse (CLAUDE.md rule 8).
             *
             * It also broke the promise made a few hundred lines below, that the
             * position of each intent stays put across both layers: the second
             * layer renders into `.ce-foot`, which this query never reversed, so
             * under 640px the two layers disagreed with each other.
             */
            '.ce-actions{flex-direction:column}',
            '.ce-actions .ce-btn{width:100%}',
            '.ce-bar-grid{padding:16px}',
            '.ce-inner{padding:18px 16px}',
            '.ce-pane{padding:14px 16px}',
            '.ce-foot{padding:14px 16px}',
            '.ce-legal{width:100%;margin-bottom:8px}',
            '}',
            '@media (prefers-reduced-motion:reduce){*{transition:none!important;animation:none!important}}',
            CMP.cfg.customCss || ''
        ].join('');
    }

    /* --------------------------------------------------------------- render */

    function layoutClasses() {
        var layout = CMP.cfg.layout;

        if (CMP.view === 'settings') {
            return { backdrop: 'ce-backdrop', panel: 'ce-panel ce-panel--wide' };
        }

        // Centred card floating above the bottom edge, rather than an
        // edge-to-edge bar. Reads as a dialog without covering the page.
        if (layout === 'box_bottom') {
            return { backdrop: 'ce-backdrop ce-backdrop--boxbottom' + (CMP.cfg.backdrop ? '' : ' ce-backdrop--none'),
                     panel: 'ce-panel ce-panel--box' };
        }

        if (layout === 'banner_bottom') {
            return { backdrop: 'ce-backdrop ce-backdrop--bottom' + (CMP.cfg.backdrop ? '' : ' ce-backdrop--none'),
                     panel: 'ce-panel ce-panel--bar' };
        }
        if (layout === 'banner_top') {
            return { backdrop: 'ce-backdrop ce-backdrop--top' + (CMP.cfg.backdrop ? '' : ' ce-backdrop--none'),
                     panel: 'ce-panel ce-panel--bar ce-panel--top' };
        }
        if (layout === 'modal_slide') {
            return { backdrop: 'ce-backdrop ce-backdrop--corner' + (CMP.cfg.backdrop ? '' : ' ce-backdrop--none'),
                     panel: 'ce-panel' };
        }

        return { backdrop: 'ce-backdrop', panel: 'ce-panel' };
    }

    function bannerHtml() {
        var isBar  = CMP.cfg.layout === 'banner_bottom' || CMP.cfg.layout === 'banner_top';
        var logo   = CMP.cfg.logo ? '<img class="ce-logo" src="' + esc(CMP.cfg.logo) + '" alt="">' : '';
        var count  = CMP.cfg.services.length;

        var copy =
            logo +
            '<h2 class="ce-title" id="ce-title">' + esc(interpolate(t('banner_title', 'Wir bitten um Ihre Einwilligung'))) + '</h2>' +
            '<p class="ce-text" id="ce-desc">' + interpolate(t('banner_description', '')) +
            ' <span class="ce-badge">' + count + ' ' + esc(t('label_services_count', 'Dienste')) + '</span></p>';

        var actions = buttonRow({
            settings: '<button type="button" class="ce-btn ce-btn--secondary" data-action="settings">' +
                esc(t('btn_settings', 'Einstellungen')) + '</button>',
            reject: CMP.cfg.settings.showRejectAll === false ? '' :
                '<button type="button" class="ce-btn ce-btn--reject" data-action="reject">' +
                esc(t('btn_reject_all', 'Alle ablehnen')) + '</button>',
            accept: '<button type="button" class="ce-btn ce-btn--accept" data-action="accept">' +
                esc(t('btn_accept_all', 'Alle akzeptieren')) + '</button>'
        });

        if (isBar) {
            return '<div class="ce-bar-grid"><div class="ce-copy">' + copy + '</div>' +
                   '<div class="ce-actions">' + actions + '</div></div>';
        }

        return '<div class="ce-inner">' + copy + '<div class="ce-actions">' + actions + '</div></div>';
    }

    function toggleHtml(id, attr, checked, disabled, label) {
        return '<label class="ce-toggle">' +
               '<input type="checkbox" ' + attr + '="' + esc(id) + '"' +
               (checked ? ' checked' : '') + (disabled ? ' disabled' : '') +
               ' aria-label="' + esc(label) + '">' +
               '<span aria-hidden="true"></span></label>';
    }

    /**
     * Category list with each category's services nested underneath.
     *
     * The master switch flips everything in the category; the nested switches
     * give per-service control without leaving this view. That is the level of
     * granularity the law actually asks for — consent per purpose and per
     * recipient — presented so it is usable rather than buried.
     */
    function categoriesPane() {
        var html = '';

        for (var i = 0; i < CMP.cfg.categories.length; i++) {
            var c        = CMP.cfg.categories[i];
            var services = servicesInCategory(c.key);

            if (services.length === 0) { continue; }

            var checked = c.required || !!CMP.draft.categories[c.key];
            var sub     = '';

            for (var j = 0; j < services.length; j++) {
                var s = services[j];

                sub +=
                    '<div class="ce-sub__row">' +
                      '<div class="ce-sub__body">' +
                        '<p class="ce-sub__name">' + esc(s.name) +
                          (s.essential ? '<span class="ce-badge">' + esc(t('label_essential', 'Notwendig')) + '</span>' : '') +
                        '</p>' +
                        (s.provider ? '<p class="ce-sub__desc">' + esc(s.provider) +
                            (s.thirdCountry ? ' · ' + esc(t('label_third_country', 'Drittlandtransfer')) : '') +
                            '</p>' : '') +
                      '</div>' +
                      toggleHtml(s.id, 'data-svc', CMP.draft.services[s.id], !!s.essential, s.name) +
                    '</div>';
            }

            html +=
                '<section class="ce-item">' +
                  '<div class="ce-item__head">' +
                    '<div class="ce-item__body">' +
                      '<h3 class="ce-item__name">' + esc(t('category_' + c.key + '_name', c.key)) +
                        (c.required ? '<span class="ce-badge">' + esc(t('label_always_active', 'Immer aktiv')) + '</span>' : '') +
                      '</h3>' +
                      '<p class="ce-item__desc">' + interpolate(t('category_' + c.key + '_description', '')) + '</p>' +
                    '</div>' +
                    toggleHtml(c.key, 'data-cat', checked, !!c.required,
                        t('category_' + c.key + '_name', c.key)) +
                  '</div>' +
                  '<button type="button" class="ce-disclose" data-expand="' + esc(c.key) + '" aria-expanded="false"' +
                    ' aria-controls="ce-cat-' + esc(c.key) + '">' +
                    '<span class="ce-count">' + services.length + ' ' +
                    esc(t('label_services_count', 'Dienste')) + '</span> — ' +
                    esc(t('label_show_services', 'einzeln einstellen')) +
                  '</button>' +
                  '<div class="ce-sub" id="ce-cat-' + esc(c.key) + '" hidden>' + sub + '</div>' +
                '</section>';
        }

        return html;
    }

    function servicesInCategory(key) {
        var out = [];
        for (var i = 0; i < CMP.cfg.services.length; i++) {
            if (CMP.cfg.services[i].category === key) { out.push(CMP.cfg.services[i]); }
        }
        return out;
    }

    function cookieTable(service) {
        if (!service.cookies || !service.cookies.length) { return ''; }

        var rows = '';
        for (var i = 0; i < service.cookies.length; i++) {
            var c = service.cookies[i];
            rows += '<tr><td><code>' + esc(c.name) + '</code></td><td>' + esc(c.host || '—') +
                    '</td><td>' + esc(localised(c.duration) || '—') + '</td><td>' + esc(c.purpose || c.description || '—') + '</td></tr>';
        }

        return '<table><thead><tr>' +
               '<th>' + esc(t('label_cookie_name', 'Name')) + '</th>' +
               '<th>' + esc(t('label_cookie_host', 'Host')) + '</th>' +
               '<th>' + esc(t('label_cookie_duration', 'Laufzeit')) + '</th>' +
               '<th>' + esc(t('label_cookie_purpose', 'Zweck')) + '</th>' +
               '</tr></thead><tbody>' + rows + '</tbody></table>';
    }

    function servicesPane() {
        var html = '';

        for (var i = 0; i < CMP.cfg.services.length; i++) {
            var s       = CMP.cfg.services[i];
            var checked = s.essential || !!CMP.draft.services[s.id];
            var meta    = '';

            if (s.provider)   { meta += '<dt>' + esc(t('label_provider', 'Anbieter')) + ':</dt><dd>' + esc(s.provider) + '</dd>'; }
            if (s.retention)  { meta += '<dt>' + esc(t('label_retention', 'Speicherdauer')) + ':</dt><dd>' + esc(localised(s.retention)) + '</dd>'; }
            if (s.legalBasis) { meta += '<dt>' + esc(t('label_legal_basis', 'Rechtsgrundlage')) + ':</dt><dd>' +
                // Der Katalog haelt einen Enum-Wert. Ohne die Aufloesung stand
                // 'legitimate_interest' woertlich im Dialog — die Cookie-Erklaerung
                // loeste ihn laengst auf, das Banner nicht.
                esc(t('legal_basis_' + s.legalBasis, s.legalBasis)) + '</dd>'; }
            if (s.thirdCountry) { meta += '<dt>' + esc(t('label_third_country', 'Drittlandtransfer')) + ':</dt><dd>' + esc(s.providerCountry || t('label_yes', 'ja')) + '</dd>'; }

            html +=
                '<section class="ce-item">' +
                  '<div class="ce-item__head">' +
                    '<div class="ce-item__body">' +
                      '<h3 class="ce-item__name">' + esc(s.name) +
                        (s.essential ? '<span class="ce-badge">' + esc(t('label_essential', 'Notwendig')) + '</span>' : '') +
                      '</h3>' +
                      '<p class="ce-item__desc">' + esc(s.purpose || '') + '</p>' +
                      (meta ? '<dl class="ce-item__meta">' + meta + '</dl>' : '') +
                    '</div>' +
                    toggleHtml(s.id, 'data-svc', checked, !!s.essential, s.name) +
                  '</div>' +
                  '<button type="button" class="ce-disclose" data-disclose="' + esc(s.id) + '"' +
                    ' aria-expanded="false" aria-controls="ce-det-' + esc(s.id) + '">' +
                    esc(t('label_show_details', 'Details anzeigen')) + '</button>' +
                  '<div class="ce-details" id="ce-det-' + esc(s.id) + '" hidden>' +
                    (s.description ? '<p>' + esc(s.description) + '</p>' : '') +
                    cookieTable(s) +
                    (s.privacyUrl ? '<p style="margin-top:10px"><a href="' + esc(s.privacyUrl) +
                        '" target="_blank" rel="noopener noreferrer">' +
                        esc(t('label_privacy_policy', 'Datenschutzerklärung')) + '</a></p>' : '') +
                  '</div>' +
                '</section>';
        }

        return html;
    }

    function aboutPane() {
        var links = '';
        if (CMP.cfg.privacyPolicyUrl) {
            links += '<p><a href="' + esc(CMP.cfg.privacyPolicyUrl) + '" target="_blank" rel="noopener noreferrer">' +
                     esc(t('link_privacy_policy', 'Datenschutzerklärung')) + '</a></p>';
        }
        if (CMP.cfg.imprintUrl) {
            links += '<p><a href="' + esc(CMP.cfg.imprintUrl) + '" target="_blank" rel="noopener noreferrer">' +
                     esc(t('link_imprint', 'Impressum')) + '</a></p>';
        }

        // A first-time visitor has no state yet — there is no consent ID to
        // show and nothing to withdraw.
        var cid      = '';
        var withdraw = '';

        if (CMP.state && CMP.state.consentId) {
            cid = '<p class="ce-cid">' + esc(t('label_consent_id', 'Ihre Einwilligungs-ID')) + ': ' +
                  esc(CMP.state.consentId) +
                  (CMP.state.updatedAt ? ' · ' + esc(t('label_state_from', 'Stand')) + ' ' +
                      esc(new Date(CMP.state.updatedAt).toLocaleString(CMP.cfg.language)) : '') +
                  '</p>';

            withdraw = '<p style="margin-top:14px">' +
                       '<button type="button" class="ce-btn ce-btn--secondary" data-action="withdraw">' +
                       esc(t('btn_withdraw', 'Einwilligung widerrufen')) + '</button></p>';
        }

        return '<div class="ce-item" style="border:0"><div style="padding:4px 0">' +
               '<p class="ce-item__desc">' + interpolate(t('about_text', '')) + '</p>' +
               links + cid + withdraw +
               '</div></div>';
    }

    function settingsHtml() {
        var tabs = [
            ['categories', t('tab_categories', 'Kategorien')],
            ['services',   t('tab_advanced', 'Erweitert')],
            ['about',      t('tab_about', 'Über')]
        ];

        var tabButtons = '';
        var panes      = '';

        for (var i = 0; i < tabs.length; i++) {
            var key      = tabs[i][0];
            var selected = key === (CMP.tab || 'categories');

            tabButtons += '<button type="button" role="tab" class="ce-tab" id="ce-tab-' + key + '"' +
                          ' aria-selected="' + (selected ? 'true' : 'false') + '"' +
                          ' aria-controls="ce-pane-' + key + '" data-tab="' + key + '"' +
                          ' tabindex="' + (selected ? '0' : '-1') + '">' + esc(tabs[i][1]) + '</button>';

            panes += '<div role="tabpanel" class="ce-pane" id="ce-pane-' + key + '"' +
                     ' aria-labelledby="ce-tab-' + key + '"' + (selected ? '' : ' hidden') + '>' +
                     (key === 'categories' ? categoriesPane() : (key === 'services' ? servicesPane() : aboutPane())) +
                     '</div>';
        }

        var legal = '';
        if (CMP.cfg.privacyPolicyUrl) {
            legal += '<a href="' + esc(CMP.cfg.privacyPolicyUrl) + '" target="_blank" rel="noopener noreferrer">' +
                     esc(t('link_privacy_policy', 'Datenschutz')) + '</a>';
        }
        if (CMP.cfg.imprintUrl) {
            legal += '<a href="' + esc(CMP.cfg.imprintUrl) + '" target="_blank" rel="noopener noreferrer">' +
                     esc(t('link_imprint', 'Impressum')) + '</a>';
        }

        return '<div class="ce-inner" style="padding-bottom:8px">' +
                 '<h2 class="ce-title" id="ce-title">' + esc(interpolate(t('modal_title', 'Datenschutz-Einstellungen'))) + '</h2>' +
                 '<p class="ce-text" id="ce-desc">' + interpolate(t('modal_description', '')) + '</p>' +
               '</div>' +
               '<div class="ce-tabs" role="tablist" aria-label="' + esc(t('modal_title', 'Datenschutz-Einstellungen')) + '">' +
                 tabButtons +
               '</div>' +
               panes +
               '<div class="ce-foot">' +
                 '<div class="ce-legal">' + legal + '</div>' +
                 // Second layer, same order. The slot that carries the info
                 // button on the first layer carries "save selection" here —
                 // the visitor is already in the settings, a way into them
                 // would be pointless. So the POSITION of each intent stays
                 // put no matter which layer someone is looking at.
                 buttonRow({
                     settings: '<button type="button" class="ce-btn ce-btn--secondary" data-action="save">' +
                         esc(t('btn_save', 'Auswahl speichern')) + '</button>',
                     reject: CMP.cfg.settings.showRejectAll === false ? '' :
                         '<button type="button" class="ce-btn ce-btn--reject" data-action="reject">' +
                         esc(t('btn_reject_all', 'Alle ablehnen')) + '</button>',
                     accept: '<button type="button" class="ce-btn ce-btn--accept" data-action="accept">' +
                         esc(t('btn_accept_all', 'Alle akzeptieren')) + '</button>'
                 }) +
               '</div>';
    }

    /*
     * Reading direction of the dialog.
     *
     * Set explicitly, and not because the language catalogue has an RTL entry —
     * it has none. The reason is the host page: on a site with <html dir="rtl">
     * the dialog inherits that direction and lays a German or Polish banner out
     * right to left. The lookup exists so that the day an RTL language enters
     * Defaults::languages(), this stays the single place that decides.
     */
    var RTL = { ar: 1, dv: 1, fa: 1, he: 1, ps: 1, sd: 1, ug: 1, ur: 1, yi: 1 };

    function textDirection(lang) {
        return RTL[(lang || '').split('-')[0].toLowerCase()] ? 'rtl' : 'ltr';
    }

    /**
     * Screen-reader announcement that outlives the dialog.
     *
     * Its own host element, deliberately not part of the dialog: `unmount()`
     * removes the dialog root, and text written into a live region that leaves
     * the document in the same tick is announced by nobody. This one is created
     * once and stays, empty except for the moment after a decision.
     *
     * No shadow root either. The region has nothing worth encapsulating — two
     * inline rules hide it — and it has to sit plainly in the document the
     * assistive technology is reading.
     */
    function announce(message) {
        if (!message) { return; }

        var host = d.getElementById('consented-live');

        if (!host) {
            host = el('div', { id: 'consented-live' });
            host.setAttribute('role', 'status');
            host.setAttribute('aria-live', 'polite');
            host.setAttribute('aria-atomic', 'true');
            host.style.cssText = 'position:absolute;width:1px;height:1px;margin:-1px;padding:0;' +
                'border:0;overflow:hidden;clip:rect(0 0 0 0);white-space:nowrap';
            d.body.appendChild(host);
        }

        host.setAttribute('lang', CMP.cfg.language || '');

        // Cleared first: the same text written twice is not announced twice, and
        // saving the same selection again is an ordinary thing to do.
        host.textContent = '';
        w.setTimeout(function () { host.textContent = message; }, 60);
    }

    function mount() {
        if (!CMP.root) {
            CMP.root = el('div', { id: 'consented-cmp' });
            CMP.root.style.cssText = 'position:relative;z-index:2147483000';
            d.body.appendChild(CMP.root);
            CMP.shadow = CMP.root.attachShadow ? CMP.root.attachShadow({ mode: 'open' }) : CMP.root;
        }

        var cls  = layoutClasses();

        /*
         * lang on the dialog, not inherited from the page.
         *
         * The banner speaks whatever pickLanguage() chose, which is routinely a
         * different language than the surrounding site — a Polish banner inside
         * a German page was being read out with a German voice, and screen
         * readers had no way to know better. The shadow tree inherits lang from
         * the host document, so it has to be stated here.
         */
        var lang = CMP.cfg.language || CMP.cfg.defaultLanguage || '';
        var html =
            '<style>' + styleSheet() + '</style>' +
            '<div class="ce-root" lang="' + esc(lang) + '" dir="' + textDirection(lang) + '">' +
              '<div class="' + cls.backdrop + '" part="backdrop">' +
                '<div class="' + cls.panel + '" role="dialog" aria-modal="' +
                    (CMP.view === 'settings' ? 'true' : 'false') +
                    '" aria-labelledby="ce-title" aria-describedby="ce-desc">' +
                  (CMP.view === 'settings' ? settingsHtml() : bannerHtml()) +
                '</div>' +
              '</div>' +
            '</div>';

        CMP.shadow.innerHTML = html;
        bindEvents();

        // Announce and move focus, so a screen reader user is told the dialog
        // opened instead of silently losing context.
        var focusTarget = CMP.shadow.querySelector('.ce-title') || CMP.shadow.querySelector('.ce-btn');
        if (focusTarget) {
            focusTarget.setAttribute('tabindex', '-1');
            try { focusTarget.focus({ preventScroll: true }); } catch (e) { focusTarget.focus(); }
        }

        CMP.shownAt = CMP.shownAt || Date.now();
    }

    function unmount() {
        if (CMP.root) {
            CMP.root.parentNode.removeChild(CMP.root);
            CMP.root = null;
            CMP.shadow = null;
        }

        if (CMP.lastFocus && CMP.lastFocus.focus) {
            try { CMP.lastFocus.focus(); } catch (e) { /* element gone */ }
        }

        renderRelaunch();
    }

    /**
     * Persistent re-open control.
     *
     * TCF v2.2 requires withdrawing consent to be as easy as giving it, so
     * there has to be a way back in that does not depend on the site owner
     * remembering to add a footer link.
     */
    function renderRelaunch() {
        if (CMP.cfg.settings.showRelaunch === false) { return; }
        if (d.getElementById('consented-relaunch')) { return; }

        var host = el('div', { id: 'consented-relaunch' });
        d.body.appendChild(host);

        var shadow = host.attachShadow ? host.attachShadow({ mode: 'open' }) : host;
        var side   = CMP.cfg.settings.relaunchPosition === 'right' ? ' ce-relaunch--right' : '';
        var lang   = CMP.cfg.language || CMP.cfg.defaultLanguage || '';

        // Same reason as the dialog: the aria-label is in the banner's language,
        // which is not necessarily the page's.
        host.setAttribute('lang', lang);
        host.setAttribute('dir', textDirection(lang));

        shadow.innerHTML =
            '<style>' + styleSheet() + '</style>' +
            '<button type="button" class="ce-relaunch' + side + '" aria-label="' +
            esc(t('btn_open_settings', 'Datenschutz-Einstellungen öffnen')) + '" title="' +
            esc(t('btn_open_settings', 'Datenschutz-Einstellungen öffnen')) + '">' +
            '<svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" ' +
            'stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' +
            '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>' +
            '</button>';

        shadow.querySelector('button').addEventListener('click', function () {
            openSettings();
        });
    }

    function bindEvents() {
        var panel = CMP.shadow.querySelector('.ce-panel');
        if (!panel) { return; }

        panel.addEventListener('click', function (e) {
            var action = e.target.closest ? e.target.closest('[data-action]') : null;
            if (action) {
                handleAction(action.getAttribute('data-action'));
                return;
            }

            var tab = e.target.closest ? e.target.closest('[data-tab]') : null;
            if (tab) {
                selectTab(tab.getAttribute('data-tab'));
                return;
            }

            // Expand a category to reveal its individual services.
            var expand = e.target.closest ? e.target.closest('[data-expand]') : null;
            if (expand) {
                var key      = expand.getAttribute('data-expand');
                var subList  = byId('ce-cat-' + key);
                var isOpen   = expand.getAttribute('aria-expanded') === 'true';
                var count    = servicesInCategory(key).length;

                expand.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
                expand.innerHTML = '<span class="ce-count">' + count + ' ' +
                    esc(t('label_services_count', 'Dienste')) + '</span> — ' +
                    esc(isOpen ? t('label_show_services', 'einzeln einstellen')
                               : t('label_hide_services', 'Liste schließen'));

                if (subList) { subList.hidden = isOpen; }
                return;
            }

            var disclose = e.target.closest ? e.target.closest('[data-disclose]') : null;
            if (disclose) {
                var box      = byId('ce-det-' + disclose.getAttribute('data-disclose'));
                var expanded = disclose.getAttribute('aria-expanded') === 'true';
                disclose.setAttribute('aria-expanded', expanded ? 'false' : 'true');
                disclose.textContent = expanded
                    ? t('label_show_details', 'Details anzeigen')
                    : t('label_hide_details', 'Details ausblenden');
                if (box) { box.hidden = expanded; }
            }
        });

        // All toggles write to the draft, never to the DOM directly: the same
        // service appears both nested under its category and in the Advanced
        // list, and both copies have to stay in step.
        panel.addEventListener('change', function (e) {
            var target = e.target;
            if (!target || !target.getAttribute) { return; }

            var cat = target.getAttribute('data-cat');
            if (cat) {
                setCategory(cat, target.checked);
                syncToggles();
                return;
            }

            var svc = target.getAttribute('data-svc');
            if (svc) {
                CMP.draft.services[svc] = target.checked;

                for (var i = 0; i < CMP.cfg.services.length; i++) {
                    if (CMP.cfg.services[i].id === svc) {
                        recomputeCategory(CMP.cfg.services[i].category);
                        break;
                    }
                }

                syncToggles();
            }
        });

        panel.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' || e.keyCode === 27) {
                // ESC must never count as consent. It only closes the second
                // layer and returns to the banner; if no decision has been made
                // yet, the banner stays.
                //
                // CMP.state is null for every first-time visitor — Storage.read
                // has nothing to return. Reading .action off it threw
                // "Cannot read properties of null", so the first ESC on a fresh
                // visit died in the handler instead of going back to the banner.
                if (CMP.view === 'settings' && CMP.state && CMP.state.action) {
                    close();
                } else if (CMP.view === 'settings') {
                    CMP.view = 'banner';
                    mount();
                }
                return;
            }

            if (e.key === 'Tab') { trapFocus(e); }

            if (e.target.getAttribute && e.target.getAttribute('role') === 'tab') {
                arrowTabs(e);
            }
        });
    }

    function trapFocus(e) {
        var focusables = CMP.shadow.querySelectorAll(
            'button:not([disabled]), [href], input:not([disabled]), select, textarea, [tabindex]:not([tabindex="-1"])'
        );
        if (!focusables.length) { return; }

        var first = focusables[0];
        var last  = focusables[focusables.length - 1];
        var active = CMP.shadow.activeElement;

        if (e.shiftKey && active === first) {
            e.preventDefault();
            last.focus();
        } else if (!e.shiftKey && active === last) {
            e.preventDefault();
            first.focus();
        }
    }

    function arrowTabs(e) {
        if (e.key !== 'ArrowRight' && e.key !== 'ArrowLeft') { return; }

        var tabs = [].slice.call(CMP.shadow.querySelectorAll('[role="tab"]'));
        var i    = tabs.indexOf(e.target);
        if (i === -1) { return; }

        e.preventDefault();
        var next = e.key === 'ArrowRight' ? (i + 1) % tabs.length : (i - 1 + tabs.length) % tabs.length;
        selectTab(tabs[next].getAttribute('data-tab'));
        var el2 = CMP.shadow.querySelector('[data-tab="' + tabs[next].getAttribute('data-tab') + '"]');
        if (el2) { el2.focus(); }
    }

    function selectTab(key) {
        CMP.tab = key;

        var tabs = CMP.shadow.querySelectorAll('[role="tab"]');
        for (var i = 0; i < tabs.length; i++) {
            var selected = tabs[i].getAttribute('data-tab') === key;
            tabs[i].setAttribute('aria-selected', selected ? 'true' : 'false');
            tabs[i].setAttribute('tabindex', selected ? '0' : '-1');
        }

        var panes = CMP.shadow.querySelectorAll('[role="tabpanel"]');
        for (var j = 0; j < panes.length; j++) {
            panes[j].hidden = panes[j].id !== 'ce-pane-' + key;
        }
    }

    function handleAction(action) {
        if (action === 'settings') {
            openDraft();
            CMP.view = 'settings';
            CMP.tab  = 'categories';
            mount();
            return;
        }
        if (action === 'accept')   { commit(emptyDecisions(true), 'accept_all'); return; }
        if (action === 'reject')   { commit(emptyDecisions(false), 'reject_all'); return; }
        if (action === 'save')     { commit(decisionsFromDraft(), 'save_selection'); return; }
        if (action === 'withdraw') { withdraw(); }
    }

    /* -------------------------------------------------------------- decision */

    function commit(decisions, action) {
        var now = new Date().toISOString();

        /* Der Zustand vor der Aenderung, fuer die Widerrufserkennung. Danach ist
           er nicht mehr rekonstruierbar, und ohne ihn liesse sich "war erteilt,
           ist jetzt entzogen" nur mit seitenweitem Gedaechtnis im Container
           ableiten. */
        var before = CMP.state ? {
            categories: extend({}, CMP.state.decisions.categories),
            services: extend({}, CMP.state.decisions.services)
        } : null;

        CMP.state = {
            consentId: (CMP.state && CMP.state.consentId) || uuid(),
            version: CMP.cfg.version,
            decisions: decisions,
            action: action,
            language: CMP.cfg.language,
            createdAt: (CMP.state && CMP.state.createdAt) || now,
            updatedAt: now
        };

        Storage.write(CMP.cfg, CMP.state);

        applyConsent();
        transmit(action);

        /*
         * Say it before the dialog disappears. The visible confirmation is the
         * dialog closing, and that is not something a screen reader reports —
         * the visitor was left wondering whether the click did anything.
         */
        announce(action === 'withdraw'
            ? t('sr_withdrawn', 'Deine Einwilligung wurde widerrufen.')
            : t('sr_saved', 'Deine Auswahl wurde gespeichert.'));

        close();

        emit('change', publicState());
        // Der Name ist fuer beide Aktionen derselbe; welche es war, steht als
        // consented.action im Payload. Hier stand ein Ternaer mit zwei
        // identischen Zweigen.
        pushDataLayer('update');

        // Zuletzt, und nur wenn wirklich etwas entzogen wurde: das Aufraeumen
        // soll nach dem Zustandsereignis kommen, damit jede Data-Layer-Variable
        // beim Trigger schon aktuell ist.
        pushWithdrawn(before);
    }

    function withdraw() {
        commit(emptyDecisions(false), 'withdraw');
        clearCookiesForDeniedServices();
    }

    function close() {
        unmount();
        CMP.view = 'banner';
    }

    function publicState() {
        if (!CMP.state) { return null; }

        return {
            consentId: CMP.state.consentId,
            action: CMP.state.action,
            categories: extend({}, CMP.state.decisions.categories),
            services: extend({}, CMP.state.decisions.services),
            updatedAt: CMP.state.updatedAt,
            version: CMP.state.version
        };
    }

    /* -------------------------------------------------------------- blocking */

    function applyConsent() {
        var granted = CMP.state ? CMP.state.decisions.services : {};

        /*
         * Das Consent-Signal zuerst, dann die Skripte.
         *
         * Vorher stand updateGcm() am Ende dieser Funktion — nach beiden
         * Freigabeschleifen. Ein freigegebenes Google-Tag konnte also starten,
         * bevor gtag('consent','update') im dataLayer lag, und hat dann mit den
         * Vorgabewerten des Stubs gearbeitet statt mit der Entscheidung. Für
         * Consent Mode ist das genau die falsche Reihenfolge: die Signale sollen
         * bekannt sein, wenn das erste Tag sie liest.
         */
        updateGcm();

        // 1. Declarative: <script type="text/plain" data-consented="ga4">
        var placeholders = d.querySelectorAll('script[type="text/plain"][data-consented]');
        for (var i = 0; i < placeholders.length; i++) {
            var node = placeholders[i];
            var id   = node.getAttribute('data-consented');
            if (!granted[id]) { continue; }
            activateScript(node);
        }

        // 2. Nodes the stub's observer neutralised before we loaded.
        var blocked = (w.__consented && w.__consented.blocked) || [];
        var still   = [];
        for (var j = 0; j < blocked.length; j++) {
            var b   = blocked[j];
            var src = b.getAttribute('data-consented-src');
            var svc = serviceForUrl(src);

            if (svc && granted[svc]) {
                b.removeAttribute('data-consented-src');

                /*
                 * Per element, not around the loop. Whatever one host page does
                 * to its own DOM must not cost the visitor the services they
                 * just agreed to: an exception here used to abort the whole
                 * loop, so every element after the failing one stayed blocked
                 * and the bookkeeping below never ran.
                 */
                try {
                    if (b.tagName === 'SCRIPT') {
                        activateScript(b, src);
                    } else {
                        b.setAttribute('src', src);
                    }
                } catch (e) {
                    // Nothing to retry: the element is beyond our reach. It stays
                    // out of `still` because consent for it was granted — keeping
                    // it there would mean blocking it again on the next pass.
                }
            } else {
                still.push(b);
            }
        }
        if (w.__consented) { w.__consented.blocked = still; }

        // 3. Keep blocking anything that appears later.
        installObserver();
    }

    function activateScript(node, srcOverride) {
        var fresh = d.createElement('script');

        for (var i = 0; i < node.attributes.length; i++) {
            var a = node.attributes[i];
            if (a.name === 'type' || a.name === 'data-consented' || a.name === 'data-consented-src') { continue; }
            fresh.setAttribute(a.name, a.value);
        }

        var src = srcOverride || node.getAttribute('src');
        if (src) {
            fresh.src = src;
        } else {
            fresh.text = node.textContent || '';
        }

        var parent = node.parentNode;

        if (parent) {
            // Replacing in place preserves execution order relative to siblings.
            parent.insertBefore(fresh, node);
            parent.removeChild(node);

            return;
        }

        /*
         * The blocked tag is no longer in the document. That happens on pages
         * whose framework re-renders a region, or which clean up their own
         * markup, between the moment we neutralised the tag and the moment
         * consent arrived.
         *
         * Consent was still given, so the script still has to run — appending
         * to <head> is the only place left. Execution order relative to its
         * former siblings is lost, and that is the lesser evil: reading
         * insertBefore off a null parent threw, the exception left the unblock
         * loop in applyConsent(), and every service after this one stayed
         * blocked even though the visitor had accepted. A tag in the wrong
         * place beats a service that never loads.
         */
        (d.head || d.documentElement).appendChild(fresh);
    }

    function serviceForUrl(url) {
        if (!url) { return null; }

        for (var i = 0; i < CMP.cfg.services.length; i++) {
            var s = CMP.cfg.services[i];
            var p = s.patterns || [];
            for (var j = 0; j < p.length; j++) {
                if (p[j] && url.indexOf(p[j]) !== -1) { return s.id; }
            }
        }
        return null;
    }

    /**
     * Everything blockable in one added node: the node itself and its subtree.
     *
     * A MutationObserver reports the ROOT of an inserted subtree, not every node
     * inside it. Markup the HTML parser inserts arrives element by element, so
     * checking the roots was enough for anything written into the page as HTML.
     * It is not enough for the shape almost every embed snippet uses:
     *
     *   container.innerHTML = '<div class="wrap"><iframe src="…"></iframe></div>';
     *
     * There the observer sees one DIV. The iframe inside it was never looked at
     * and loaded despite a matching pattern.
     *
     * The selector demands `[src]` because that is the only thing the patterns
     * are matched against; the root is checked by tag name so a src-less script
     * still takes the same path as before.
     */
    function blockCandidates(node) {
        var out = [];

        if (!node || node.nodeType !== 1) { return out; }

        var tag = node.tagName;
        if (tag === 'SCRIPT' || tag === 'IFRAME' || tag === 'IMG') { out.push(node); }

        if (node.querySelectorAll) {
            var inner = node.querySelectorAll('script[src],iframe[src],img[src]');
            for (var i = 0; i < inner.length; i++) { out.push(inner[i]); }
        }

        return out;
    }

    function installObserver() {
        if (CMP.observer) { return; }
        if (!w.MutationObserver) { return; }

        // The stub's observer stops here; ours knows the actual service map.
        if (w.__consented && w.__consented.mo) {
            w.__consented.mo.disconnect();
            w.__consented.mo = null;
        }

        CMP.observer = new MutationObserver(function (records) {
            var granted = CMP.state ? CMP.state.decisions.services : {};

            for (var i = 0; i < records.length; i++) {
                var added = records[i].addedNodes;
                for (var j = 0; j < added.length; j++) {
                    var found = blockCandidates(added[j]);

                    for (var k = 0; k < found.length; k++) {
                        var n   = found[k];
                        var src = n.getAttribute && n.getAttribute('src');
                        var svc = serviceForUrl(src);
                        if (!svc || granted[svc]) { continue; }

                        n.setAttribute('data-consented-src', src);
                        n.removeAttribute('src');
                        if (n.tagName === 'SCRIPT') { n.type = 'text/plain'; }
                        if (w.__consented) { w.__consented.blocked.push(n); }
                    }
                }
            }
        });

        CMP.observer.observe(d.documentElement, { childList: true, subtree: true });
    }

    /**
     * Best-effort cleanup after a withdrawal.
     *
     * Only first-party cookies on our own document can be removed from here —
     * a third-party cookie set on another origin is out of reach, and pretending
     * otherwise would be dishonest. The point is that the visitor's own domain
     * does not keep carrying identifiers they just revoked.
     */
    function clearCookiesForDeniedServices() {
        var granted = CMP.state ? CMP.state.decisions.services : {};
        var domain  = Storage.rootDomain();

        for (var i = 0; i < CMP.cfg.services.length; i++) {
            var s = CMP.cfg.services[i];
            if (granted[s.id] || !s.cookies) { continue; }

            for (var j = 0; j < s.cookies.length; j++) {
                var name = s.cookies[j].name;
                if (!name || name.indexOf('*') !== -1) { continue; }

                d.cookie = name + '=;path=/;Max-Age=0;SameSite=Lax';
                if (domain) { d.cookie = name + '=;path=/;domain=.' + domain + ';Max-Age=0;SameSite=Lax'; }

                try { w.localStorage.removeItem(name); } catch (e) { /* blocked */ }
            }
        }
    }

    /* ------------------------------------------------------- Consent Mode v2 */

    /**
     * Die sieben Consent-Mode-Signale zum aktuellen Zustand.
     *
     * Getrennt vom Pushen, weil der Spiegel im dataLayer sie auch dann braucht,
     * wenn noch nichts entschieden ist — updateGcm() lief in diesem Fall nie.
     */
    function gcmSignals() {
        var map = CMP.cfg.settings.gcmMapping || {};
        var signals = {
            ad_storage: 'denied',
            analytics_storage: 'denied',
            ad_user_data: 'denied',
            ad_personalization: 'denied',
            functionality_storage: 'denied',
            personalization_storage: 'denied',
            security_storage: 'granted'
        };

        var categories = CMP.state ? CMP.state.decisions.categories : {};

        for (var signal in map) {
            if (!Object.prototype.hasOwnProperty.call(map, signal)) { continue; }

            // Nur echte Signale: die Zuordnung kam früher ungeprüft durch und
            // konnte einen Schlüssel schreiben, den Google nicht kennt.
            if (!Object.prototype.hasOwnProperty.call(signals, signal)) { continue; }

            if (categories[map[signal]]) { signals[signal] = 'granted'; }
        }

        return signals;
    }

    function updateGcm() {
        if (CMP.cfg.settings.googleConsentMode === false) { return; }

        CMP.gcm = gcmSignals();

        // Push the raw arguments object, exactly as the gtag() shim does —
        // GTM reads dataLayer entries by position, not by name.
        w.dataLayer = w.dataLayer || [];
        function gtag() { w.dataLayer.push(arguments); }
        gtag('consent', 'update', CMP.gcm);
    }


    /* Erlaubter Name fuer das Zielarray; muss zu Defaults::dataLayerName()
       passen. Die Blockliste dort ist laenger — hier steht nur die Form, weil
       dlPush() ohnehin nie ueber einen belegten Namen schreibt. */
    var DL_NAME = /^[A-Za-z_$][A-Za-z0-9_$]{0,63}$/;

    function dlName() {
        var name = CMP.cfg.settings.dataLayerName;

        return (typeof name === 'string' && DL_NAME.test(name)) ? name : 'dataLayer';
    }

    /**
     * Schreibt einen Eintrag in das Zielarray.
     *
     * Nie ueber einen belegten Namen: `w[name] = w[name] || []` sah harmlos aus,
     * war es aber nicht. Bei dataLayerName = 'location' ist die rechte Seite das
     * Location-Objekt, der Setter von window.location macht daraus die aktuelle
     * Adresse und navigiert — eine Neuladeschleife auf jeder Seite. Bei
     * 'document' oder 'top' wirft die Zuweisung im strict mode und nimmt Banner,
     * Freigabe und Warteschlange mit.
     *
     * Deshalb: nur anlegen, was noch nicht da ist, und nur pushen, was auch ein
     * push versteht. Jeder Fehlschlag endet still — die Tag-Schicht darf einen
     * Besucher nie sein Banner kosten.
     */
    function dlPush(entry) {
        var name = dlName();
        var arr  = w[name];

        if (!arr) {
            try { w[name] = arr = []; } catch (e) { return; }
        }

        if (!arr || typeof arr.push !== 'function') { return; }

        try { arr.push(entry); } catch (e) { /* nichts zu retten */ }
    }

    /**
     * Ereignisname aus der Konfiguration, mit derselben Sperre wie im Server.
     *
     * Die Sperre steht hier ein zweites Mal, weil ein veroeffentlichter
     * Schnappschuss aelter sein kann als die serverseitige Pruefung. Ohne sie
     * koennte ein Boot-Ereignis `consented_granted_analytics` heissen und ein
     * Tag an diesem Trigger ohne jede Einwilligung feuern.
     */
    function dlEventName(value, fallback) {
        if (typeof value !== 'string' || !/^[a-z][a-z0-9_]{0,39}$/.test(value)) { return fallback; }

        if (value.indexOf('consented_granted_') === 0 || value.indexOf('consented_denied_') === 0) {
            return fallback;
        }

        if (value === 'consented_banner_shown' || value === 'consented_settings_opened') {
            return fallback;
        }

        return value;
    }

    /**
     * Zustand einer Kategorie: granted, denied oder pending.
     *
     * `pending` ist weder Einwilligung noch Ablehnung, und der Unterschied hat
     * Folgen. Ein fehlender Schlüssel im gespeicherten Zustand — die Lage nach
     * einer Konfigurationsänderung, oder eine Entscheidung von vor dem Hinzufügen
     * der Kategorie — ist eine unbeantwortete Frage, kein Nein. Vorher fiel das
     * auf `denied` und behauptete damit eine Ablehnung, die niemand erklärt hat.
     */
    function categoryState(cat) {
        if (!CMP.state) { return cat.required ? 'granted' : 'pending'; }

        var value = CMP.state.decisions.categories[cat.key];

        if (value == null) { return cat.required ? 'granted' : 'pending'; }

        return value ? 'granted' : 'denied';
    }

    /**
     * Die Kategorien, über die überhaupt etwas gesagt werden darf.
     *
     * Property::create() legt alle vier an, unabhängig davon, ob Dienste daran
     * hängen. Der Dialog überspringt eine leere Kategorie (categoriesPane), und
     * die Tag-Schicht muss dasselbe tun: sonst meldete der dataLayer ein
     * `granted` für einen Zweck, der dem Besucher nie gezeigt wurde und hinter
     * dem kein Empfänger steht. Eine Einwilligungsbehauptung ohne Datensatz.
     */
    function reportableCategories() {
        var out = [];

        for (var i = 0; i < CMP.cfg.categories.length; i++) {
            var cat = CMP.cfg.categories[i];
            if (servicesInCategory(cat.key).length > 0) { out.push(cat); }
        }

        return out;
    }

    /** Nur ein Kategorieschlüssel, der als Ereignisname taugen muss. */
    function dlSlug(key) {
        return String(key).toLowerCase().replace(/[^a-z0-9_]/g, '_');
    }

    /**
     * Der vollständige Eintrag für ein Zustandsereignis.
     *
     * `consented` ist wörtlich publicState() — dieselben Schlüssel, `null`
     * inklusive. Alles Weitere kommt additiv daneben, damit eine Änderung hier
     * nie die öffentliche API verschiebt.
     */
    function stateEntry(event) {
        var entry = { event: event, consented: publicState() };
        var s     = CMP.cfg.settings;
        var i;

        if (s.dataLayerFlatKeys) {
            entry.consented_decision     = CMP.state ? CMP.state.action : 'pending';
            entry.consented_has_decision = !!CMP.state;

            var cats = reportableCategories();
            for (i = 0; i < cats.length; i++) {
                entry['consented_category_' + dlSlug(cats[i].key)] = categoryState(cats[i]);
            }
        }

        /*
         * Die Signale werden in start() unbedingt berechnet, also auch für den
         * Unentschiedenen. Vorher entstanden sie nur in updateGcm(), das ohne
         * gespeicherte Entscheidung nie lief — der Schlüssel fehlte dann genau
         * bei dem Besucher, der nicht eingewilligt hat, und eine GTM-Bedingung
         * „ist nicht gleich denied" traf für ihn zu.
         *
         * Fehlt er trotzdem, ist Consent Mode abgeschaltet. Das ist der eine
         * Fall, in dem Abwesenheit die ehrliche Antwort ist.
         */
        if (s.dataLayerGoogleSignals && CMP.gcm) {
            entry.consented_google = extend({}, CMP.gcm);
        }

        return entry;
    }

    function pushDataLayer(which) {
        if (CMP.cfg.settings.dataLayerEnabled === false) { return; }

        var event = which === 'ready'
            ? dlEventName(CMP.cfg.settings.dataLayerEventReady, 'consented_ready')
            : dlEventName(CMP.cfg.settings.dataLayerEventUpdate, 'consented_update');

        dlPush(stateEntry(event));
        pushCategoryEvents();
    }

    /**
     * Ein Ereignis pro Kategorie, mit festem Namen.
     *
     * Der Sinn der Familie: ein Tag an `consented_granted_analytics` *kann* ohne
     * Einwilligung nicht feuern, weil es das Ereignis ohne sie nicht gibt. Beim
     * üblichen Weg — ein Sammelereignis plus Bedingung — verschickt eine
     * vergessene Bedingung ein Pixel bei Ablehnung.
     *
     * Deshalb erzeugt `pending` nichts: „noch nicht abgelehnt" darf sich nicht
     * als Erlaubnis triggern lassen. Und der denied-Name ist nie derselbe String
     * wie der granted-Name — ein gemeinsames „entschieden"-Ereignis ist genau
     * die Form, hinter der Tags bei Ablehnung feuern und die im Review richtig
     * aussieht.
     */
    function pushCategoryEvents() {
        var mode = CMP.cfg.settings.dataLayerCategoryEvents;

        if (mode !== 'granted' && mode !== 'granted_denied') { return; }

        var cats = reportableCategories();

        for (var i = 0; i < cats.length; i++) {
            var state = categoryState(cats[i]);

            if (state === 'pending') { continue; }
            if (state === 'denied' && mode !== 'granted_denied') { continue; }

            dlPush({
                event: 'consented_' + state + '_' + dlSlug(cats[i].key),
                consented_event: { scope: 'category', key: cats[i].key, state: state }
            });
        }
    }

    /**
     * Die Teardown-Kante: etwas war erteilt und ist es nicht mehr.
     *
     * Am Ereignisnamen allein war ein Widerruf nicht erkennbar — withdraw() ruft
     * commit() wie jede andere Änderung. „War erteilt, ist jetzt entzogen" aus
     * einem Sammelereignis abzuleiten braucht eine eigene JavaScript-Variable mit
     * seitenweitem Gedächtnis; das schreibt jeder einmal, und der Fehler fällt in
     * Richtung „Daten behalten" aus.
     *
     * Mengen als CSV plus Zähler, nie als Array: GTMs Datenmodell mischt Arrays
     * index-weise, ein späteres kürzeres lässt Reste des früheren lesbar, und
     * eine contains-Bedingung sieht dann einen Dienst, der längst abgelehnt ist.
     */
    function pushWithdrawn(before) {
        var name = dlEventName(CMP.cfg.settings.dataLayerEventWithdrawn, '');

        if (!name || !before || !CMP.state) { return; }

        var revoked = function (was, now) {
            var out = [];
            for (var key in was) {
                if (!Object.prototype.hasOwnProperty.call(was, key)) { continue; }
                if (was[key] && !now[key]) { out.push(key); }
            }
            return out;
        };

        var cats = revoked(before.categories, CMP.state.decisions.categories);
        var svcs = revoked(before.services, CMP.state.decisions.services);

        if (cats.length === 0 && svcs.length === 0) { return; }

        var entry = stateEntry(name);

        entry.consented_withdrawal = {
            revokedCategoriesCsv: cats.join(','),
            revokedCategoriesCount: cats.length,
            revokedServicesCsv: svcs.join(','),
            revokedServicesCount: svcs.length
        };

        dlPush(entry);
    }

    /**
     * Bedienereignisse: Banner gezeigt, Einstellungen geöffnet.
     *
     * Die Namen sind fest und serverseitig gesperrt, damit sie nicht mit einem
     * frei gewählten Zustandsereignis zusammenfallen können.
     */
    function pushUiEvent(name, detail) {
        if (CMP.cfg.settings.dataLayerEnabled === false) { return; }
        if (!CMP.cfg.settings.dataLayerUiEvents) { return; }

        dlPush({
            event: 'consented_' + name,
            consented_ui: extend({
                language: CMP.cfg.language,
                hasDecision: !!CMP.state
            }, detail || {})
        });
    }

    /* ---------------------------------------------------------- transmission */

    function transmit(action) {
        if (!CMP.cfg.endpoints || !CMP.cfg.endpoints.consent) { return; }

        var payload = {
            propertyId: CMP.cfg.propertyId,
            consentId: CMP.state.consentId,
            configVersion: CMP.cfg.version,
            action: action,
            decisions: CMP.state.decisions,
            language: CMP.cfg.language,
            uiVariant: CMP.cfg.variant || 'default',
            gpc: !!navigator.globalPrivacyControl,
            isMobile: w.matchMedia ? w.matchMedia('(max-width:640px)').matches : false,
            timeToDecisionMs: CMP.shownAt ? Date.now() - CMP.shownAt : null,
            url: d.location.origin + d.location.pathname
        };

        var body = JSON.stringify(payload);
        var url  = CMP.cfg.endpoints.consent;

        // Content-Type is text/plain on purpose, even though the body is JSON.
        //
        // This is a cross-origin POST. application/json is not a CORS-safelisted
        // content type, so it would force a preflight — and sendBeacon cannot
        // preflight, so the request would simply never arrive. text/plain is
        // safelisted, skips the preflight entirely, and the server parses the
        // body as JSON regardless of the declared type.
        var contentType = 'text/plain;charset=UTF-8';

        // sendBeacon survives the page being closed right after the click,
        // which is exactly when "accept and navigate away" happens.
        if (navigator.sendBeacon) {
            try {
                var blob = new Blob([body], { type: contentType });
                if (navigator.sendBeacon(url, blob)) { return; }
            } catch (e) { /* fall through to fetch */ }
        }

        if (w.fetch) {
            fetch(url, {
                method: 'POST',
                body: body,
                headers: { 'Content-Type': contentType },
                keepalive: true,
                mode: 'cors',
                credentials: 'omit'
            })['catch'](function () { /* the banner must not break on a failed log write */ });
        }
    }

    /* ------------------------------------------------------------ public API */

    function emit(event, data) {
        var list = CMP.listeners[event] || [];
        for (var i = 0; i < list.length; i++) {
            try { list[i](data); } catch (e) { /* a bad listener is not our problem */ }
        }
    }

    function openSettings() {
        CMP.lastFocus = d.activeElement;
        pushUiEvent('settings_opened', { layer: 'second' });
        openDraft();
        CMP.view = 'settings';
        CMP.tab  = 'categories';
        CMP.shownAt = CMP.shownAt || Date.now();
        mount();
    }

    function buildApi() {
        var api = function () {};

        api.loaded = true;
        api.ready = function (cb) { if (typeof cb === 'function') { cb(publicState()); } };
        api.openSettings = openSettings;
        api.acceptAll = function () { commit(emptyDecisions(true), 'accept_all'); };
        api.denyAll = function () { commit(emptyDecisions(false), 'reject_all'); };
        api.withdraw = withdraw;
        api.getConsent = publicState;
        api.getConsentId = function () { return CMP.state ? CMP.state.consentId : null; };
        api.hasConsent = function (id) {
            if (!CMP.state) { return false; }
            if (CMP.state.decisions.services[id] != null) { return !!CMP.state.decisions.services[id]; }
            return !!CMP.state.decisions.categories[id];
        };
        api.on = function (event, cb) {
            (CMP.listeners[event] = CMP.listeners[event] || []).push(cb);
        };
        api.off = function (event, cb) {
            var list = CMP.listeners[event] || [];
            for (var i = list.length - 1; i >= 0; i--) {
                if (list[i] === cb) { list.splice(i, 1); }
            }
        };
        api.show = openSettings;
        api.config = function () { return CMP.cfg; };

        return api;
    }

    function drainQueue(api) {
        var queued = (w.Consented && w.Consented.q) || [];

        for (var i = 0; i < queued.length; i++) {
            var item = queued[i];
            if (item.m && typeof api[item.m] === 'function') {
                try { api[item.m].apply(api, item.a); } catch (e) { /* keep draining */ }
            }
        }
    }

    /* ------------------------------------------------------------------ boot */

    /**
     * Gibt den Grund zurueck, warum gefragt werden muss — oder '' wenn nicht.
     *
     * Vorher ein Boolean. Der Grund wird fuer das banner_shown-Ereignis
     * gebraucht, und ihn hier zurueckzugeben ist besser, als die drei
     * Bedingungen an zweiter Stelle nachzubauen: zwei Kopien derselben Regel
     * laufen auseinander, und diese entscheidet, ob ein Besucher gefragt wird.
     *
     * Der Rueckgabewert wird als Wahrheitswert benutzt; '' ist falsy.
     */
    function needsPrompt() {
        if (!CMP.state) { return 'no_decision'; }

        // A published configuration change re-asks, because the visitor
        // consented to a specific set of services, not to whatever the list
        // happens to contain later.
        if (CMP.cfg.settings.repromptOnChange !== false && CMP.state.version !== CMP.cfg.version) {
            return 'version_changed';
        }

        var days = CMP.cfg.settings.consentLifetimeDays || 365;
        var age  = Date.now() - new Date(CMP.state.updatedAt || CMP.state.createdAt).getTime();

        return age > days * 864e5 ? 'expired' : '';
    }

    function start(cfg) {
        CMP.cfg = cfg;
        CMP.cfg.settings  = cfg.settings || {};
        CMP.cfg.services  = cfg.services || [];
        CMP.cfg.categories = cfg.categories || [];
        CMP.cfg.defaultLanguage = cfg.defaultLanguage || 'de';
        CMP.cfg.language  = cfg.forceLanguage || pickLanguage(cfg);

        CMP.state = Storage.read(CMP.cfg);

        var api = buildApi();
        w.Consented = api;

        // Global Privacy Control is a legally recognised opt-out signal in
        // several jurisdictions. Where the property opts in to honouring it,
        // it counts as a refusal and the banner is not shown at all.
        if (CMP.cfg.settings.respectGpc && navigator.globalPrivacyControl && !CMP.state) {
            commit(emptyDecisions(false), 'reject_all');

            /*
             * Kein `return` und kein eigenes drainQueue() mehr an dieser Stelle.
             *
             * Vorher kehrte der GPC-Pfad hier zurück — vor pushDataLayer(
             * 'consented_ready') und vor emit('ready'). Wer per Global Privacy
             * Control ablehnt, löste damit in GTM keinen Trigger aus und bekam
             * kein 'ready'-Ereignis: derselbe Besucher, für den die Ablehnung
             * am verlässlichsten feststeht, war für die Tag-Schicht unsichtbar.
             *
             * Statt zurückzukehren läuft der übliche Weg weiter. Den Banner hält
             * needsPrompt() von selbst zurück: commit() hat gerade einen Zustand
             * mit aktueller Version geschrieben, damit ist keine Frage offen.
             * drainQueue() unten übernimmt die Warteschlange — zweimal
             * abgespielt hätte sie jeden vorgemerkten Aufruf verdoppelt.
             */
        }

        if (CMP.state) {
            // Existing decision: unblock synchronously, no round trip.
            applyConsent();
            renderRelaunch();
        } else {
            installObserver();
        }

        /*
         * Die Consent-Mode-Signale unbedingt berechnen, auch ohne Entscheidung.
         * Sonst fehlte `consented_google` genau beim Unentschiedenen, und eine
         * GTM-Bedingung „ist nicht gleich denied" traf für ihn zu. Bei
         * abgeschaltetem Consent Mode bleibt CMP.gcm absichtlich leer — dort ist
         * Abwesenheit die ehrliche Antwort.
         */
        if (CMP.cfg.settings.googleConsentMode !== false && !CMP.gcm) {
            CMP.gcm = gcmSignals();
        }

        /*
         * Der ganze dataLayer-Block in einem try: er ist Zusatznutzen für die
         * Tag-Schicht und darf einen Besucher nie sein Banner, den
         * Einstellungen-Link oder die ready-Zuhörer kosten. Was dahinter kommt,
         * läuft auch wenn hier etwas schiefgeht.
         */
        var prompt = needsPrompt();

        if (prompt) {
            CMP.shownAt = Date.now();
            CMP.lastFocus = d.activeElement;
            CMP.view = 'banner';
            mount();
        }

        try {
            pushDataLayer('ready');

            if (prompt) {
                pushUiEvent('banner_shown', { layer: 'first', reason: prompt });
            }
        } catch (e) { /* die Tag-Schicht ist nie wichtiger als der Dialog */ }

        // Any element on the page can open the second layer. Documented as the
        // way to build the "Cookie settings" footer link every site needs.
        d.addEventListener('click', function (e) {
            var trigger = e.target.closest ? e.target.closest('[data-consented-open]') : null;
            if (trigger) {
                e.preventDefault();
                openSettings();
            }
        });

        drainQueue(api);
        emit('ready', publicState());
    }

    function boot() {
        if (w.__CONSENTED_CONFIG__) {
            start(w.__CONSENTED_CONFIG__);
            return;
        }

        var url = w.__CONSENTED_CONFIG_URL__;

        if (!url) {
            var self = d.currentScript || (function () {
                var all = d.getElementsByTagName('script');
                return all[all.length - 1];
            })();

            var src = self && self.src;
            if (src) { url = src.replace(/cmp\.js.*$/, 'config.json'); }
        }

        if (!url) { return; }

        if (w.fetch) {
            fetch(url, { credentials: 'omit' })
                .then(function (r) { return r.json(); })
                .then(start)
                ['catch'](function () { /* offline or blocked: no banner, no crash */ });
        } else {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', url, true);
            xhr.onload = function () {
                if (xhr.status >= 200 && xhr.status < 300) {
                    try { start(JSON.parse(xhr.responseText)); } catch (e) { /* malformed */ }
                }
            };
            xhr.send();
        }
    }

    if (d.readyState === 'loading') {
        d.addEventListener('DOMContentLoaded', boot);
    } else {
        boot();
    }
})(window, document);
