<?php

declare(strict_types=1);

/**
 * Blocking-Muster für die verbreitetsten Dienste.
 *
 * Ein Muster ist ein Teilstring, den der Stub gegen das src-Attribut neu
 * eingefügter script-, iframe- und img-Elemente prüft. Es beschreibt damit
 * eine rein technische Tatsache: unter welcher Adresse ein Anbieter seine
 * Ressource ausliefert.
 *
 * HERKUNFT
 * --------
 * Diese Datei ist keine Datenquelle, sondern eine Prüfliste. Kein Eintrag
 * gelangt allein deshalb in den Katalog, weil er hier steht — `bin/import-
 * patterns` ruft jede unter `probes` genannte Adresse auf und übernimmt ein
 * Muster nur dann, wenn mindestens eine Probe, die dieses Muster als
 * Teilstring enthält, vom Anbieter beantwortet wurde. Der Beleg ist also der
 * Endpunkt des Anbieters selbst, nicht diese Liste und erst recht kein
 * Fremdkatalog (PROJECT_BRIEF 6.2).
 *
 * WAS HIER NICHT STEHT
 * --------------------
 * - Konkurrierende CMPs. Cookiebot, OneTrust, Usercentrics, Didomi, Iubenda,
 *   Termly, CookieYes, Axeptio, Osano und Verwandte werden weder angefragt
 *   noch blockiert. Sie anzufragen verstößt gegen 6.2; sie zu blockieren wäre
 *   fachlich falsch, weil eine CMP nicht einwilligungspflichtig ist.
 * - Server-seitige Software (WordPress, Laravel, nginx, Shopify …). Die
 *   liefert kein Script von einer eigenen Adresse aus; ein Muster hätte
 *   nichts zu greifen.
 * - Dienste, die ausschließlich unter kundeneigenen Domains ausliefern
 *   (Snowplow, server-seitiges GTM). Ein allgemeingültiges Muster gibt es
 *   dort nicht, und ein zu allgemeines wäre schädlicher als keines.
 * - Reine Beacon-Pfade ohne abrufbare Ressource. Die ließen sich nur durch
 *   einen echten Tracking-Aufruf belegen — das unterlassen wir und verzichten
 *   lieber auf das Muster.
 *
 * Schlüssel ist die dps_id im Katalog. Einträge für unbekannte IDs werden vom
 * Importer gemeldet und übersprungen.
 */

return [
    // ------------------------------------------------------------- Analytics
    'matomo' => [
        // Matomo läuft meist unter der Domain des Kunden. Das Muster ist
        // deshalb der Dateiname, nicht der Host — belegt an der öffentlichen
        // Cloud-Demo, die dieselben Pfade benutzt wie jede Installation.
        'patterns' => ['matomo.js', 'piwik.js', 'matomo.php'],
        'probes'   => [
            'https://demo.matomo.cloud/matomo.js',
            'https://demo.matomo.cloud/piwik.js',
            'https://demo.matomo.cloud/matomo.php',
        ],
    ],
    'mixpanel' => [
        'patterns' => ['cdn.mxpnl.com'],
        'probes'   => ['https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js'],
    ],
    'amplitude' => [
        'patterns' => ['cdn.amplitude.com'],
        'probes'   => ['https://cdn.amplitude.com/libs/amplitude-8.21.9-min.gz.js'],
    ],
    'heap-analytics' => [
        'patterns' => ['cdn.heapanalytics.com'],
        'probes'   => ['https://cdn.heapanalytics.com/js/heap-1.js'],
    ],
    'crazy-egg' => [
        'patterns' => ['script.crazyegg.com'],
        'probes'   => ['https://script.crazyegg.com/pages/scripts/0123/4567.js'],
    ],
    'chartbeat' => [
        'patterns' => ['static.chartbeat.com'],
        'probes'   => ['https://static.chartbeat.com/js/chartbeat.js'],
    ],
    'comscore' => [
        'patterns' => ['sb.scorecardresearch.com', 'b.scorecardresearch.com'],
        'probes'   => [
            'https://sb.scorecardresearch.com/beacon.js',
            'https://b.scorecardresearch.com/beacon.js',
        ],
    ],
    'quantcast' => [
        'patterns' => ['quantserve.com'],
        'probes'   => ['https://secure.quantserve.com/quant.js'],
    ],
    'yandex-metrica' => [
        'patterns' => ['mc.yandex.ru', 'mc.yandex.com'],
        'probes'   => [
            'https://mc.yandex.ru/metrika/tag.js',
            'https://mc.yandex.com/metrika/tag.js',
        ],
    ],
    'plausible-analytics' => [
        'patterns' => ['plausible.io/js'],
        'probes'   => ['https://plausible.io/js/script.js'],
    ],
    'fathom-analytics' => [
        'patterns' => ['cdn.usefathom.com'],
        'probes'   => ['https://cdn.usefathom.com/script.js'],
    ],
    'inspectlet' => [
        'patterns' => ['cdn.inspectlet.com'],
        'probes'   => ['https://cdn.inspectlet.com/inspectlet.js'],
    ],
    'siteimprove' => [
        'patterns' => ['siteimproveanalytics.com'],
        'probes'   => ['https://siteimproveanalytics.com/js/siteanalyze.js'],
    ],
    'parse-ly' => [
        'patterns' => ['cdn.parsely.com'],
        'probes'   => ['https://cdn.parsely.com/keys/example.com/p.js'],
    ],
    'rudderstack' => [
        'patterns' => ['cdn.rudderlabs.com'],
        'probes'   => ['https://cdn.rudderlabs.com/v1.1/rudder-analytics.min.js'],
    ],
    'dynatrace' => [
        'patterns' => ['js-cdn.dynatrace.com'],
        'probes'   => ['https://js-cdn.dynatrace.com/jstag/managed/example/ruxitagentjs.js'],
    ],
    'contentsquare' => [
        'patterns' => ['t.contentsquare.net'],
        'probes'   => ['https://t.contentsquare.net/uxa/0000000000000.js'],
    ],
    'microsoft-azure-app-insights' => [
        'patterns' => ['js.monitor.azure.com'],
        'probes'   => ['https://js.monitor.azure.com/scripts/b/ai.2.min.js'],
    ],
    'baidu' => [
        'patterns' => ['hm.baidu.com'],
        'probes'   => ['https://hm.baidu.com/hm.js?0000000000000000000000000000000'],
    ],

    // ---------------------------------------------------- A/B und Optimierung
    'optimizely' => [
        'patterns' => ['cdn.optimizely.com'],
        'probes'   => ['https://cdn.optimizely.com/js/optimizely.js'],
    ],
    'visual-website-optimizer' => [
        'patterns' => ['dev.visualwebsiteoptimizer.com'],
        'probes'   => ['https://dev.visualwebsiteoptimizer.com/lib/000000.js'],
    ],
    'abtasty' => [
        'patterns' => ['try.abtasty.com'],
        'probes'   => ['https://try.abtasty.com/abtasty.js'],
    ],
    'convert-insights' => [
        'patterns' => ['cdn-4.convertexperiments.com'],
        'probes'   => ['https://cdn-4.convertexperiments.com/v1/js/000000-000000.js'],
    ],
    'dynamic-yield' => [
        'patterns' => ['cdn.dynamicyield.com'],
        'probes'   => ['https://cdn.dynamicyield.com/scripts/dy.js'],
    ],
    'ablyft' => [
        'patterns' => ['cdn.ablyft.com'],
        'probes'   => ['https://cdn.ablyft.com/ablyft.js'],
    ],

    // ------------------------------------------------------------- Marketing
    'facebook' => [
        'patterns' => ['connect.facebook.net'],
        'probes'   => ['https://connect.facebook.net/en_US/fbevents.js'],
    ],
    'linkedin' => [
        'patterns' => ['snap.licdn.com'],
        'probes'   => ['https://snap.licdn.com/li.lms-analytics/insight.min.js'],
    ],
    'tiktok' => [
        'patterns' => ['analytics.tiktok.com'],
        'probes'   => ['https://analytics.tiktok.com/i18n/pixel/events.js'],
    ],
    'pinterest' => [
        'patterns' => ['s.pinimg.com/ct'],
        'probes'   => ['https://s.pinimg.com/ct/core.js'],
    ],
    'snapchat' => [
        'patterns' => ['sc-static.net/scevent'],
        'probes'   => ['https://sc-static.net/scevent.min.js'],
    ],
    'reddit' => [
        'patterns' => ['redditstatic.com/ads'],
        'probes'   => ['https://www.redditstatic.com/ads/pixel.js'],
    ],
    'x' => [
        'patterns' => ['static.ads-twitter.com'],
        'probes'   => ['https://static.ads-twitter.com/uwt.js'],
    ],
    'bing-microsoft' => [
        'patterns' => ['bat.bing.com'],
        'probes'   => ['https://bat.bing.com/bat.js'],
    ],
    'criteo' => [
        'patterns' => ['static.criteo.net'],
        'probes'   => ['https://static.criteo.net/js/ld/ld.js'],
    ],
    'taboola' => [
        'patterns' => ['cdn.taboola.com'],
        'probes'   => ['https://cdn.taboola.com/libtrc/unip/0000000/tfa.js'],
    ],
    'outbrain' => [
        'patterns' => ['widgets.outbrain.com'],
        'probes'   => ['https://widgets.outbrain.com/outbrain.js'],
    ],
    'google-adsense' => [
        'patterns' => ['pagead2.googlesyndication.com', 'googlesyndication.com'],
        'probes'   => ['https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'],
    ],
    'doubleclick-google-marketing' => [
        'patterns' => ['doubleclick.net'],
        'probes'   => ['https://securepubads.g.doubleclick.net/tag/js/gpt.js'],
    ],
    'adform' => [
        'patterns' => ['s1.adform.net', 'track.adform.net'],
        'probes'   => [
            'https://s1.adform.net/banners/scripts/adx.js',
            'https://track.adform.net/serving/scripts/trackpoint/async/',
        ],
    ],
    'the-tradedesk' => [
        'patterns' => ['js.adsrvr.org'],
        'probes'   => ['https://js.adsrvr.org/up_loader.1.1.0.js'],
    ],
    'xandr' => [
        'patterns' => ['acdn.adnxs.com', 'secure.adnxs.com'],
        'probes'   => [
            'https://acdn.adnxs.com/ast/ast.js',
            'https://secure.adnxs.com/ptv3',
        ],
    ],
    'pubmatic' => [
        'patterns' => ['ads.pubmatic.com'],
        'probes'   => ['https://ads.pubmatic.com/AdServer/js/gshowad.js'],
    ],
    'magnite' => [
        'patterns' => ['micro.rubiconproject.com', 'secure-assets.rubiconproject.com'],
        'probes'   => [
            'https://micro.rubiconproject.com/',
            'https://secure-assets.rubiconproject.com/utils/xapi/multi-sync.html',
        ],
    ],
    'smartadserver' => [
        'patterns' => ['ced.sascdn.com', 'sascdn.com'],
        'probes'   => ['https://ced.sascdn.com/tag/0000/smart.js'],
    ],
    'teads' => [
        'patterns' => ['a.teads.tv'],
        'probes'   => ['https://a.teads.tv/page/00000/tag'],
    ],
    'media-net' => [
        'patterns' => ['contextual.media.net'],
        'probes'   => ['https://contextual.media.net/dmedianet.js'],
    ],
    'sharethis' => [
        'patterns' => ['platform-api.sharethis.com'],
        'probes'   => ['https://platform-api.sharethis.com/js/sharethis.js'],
    ],
    'braze' => [
        'patterns' => ['js.appboycdn.com'],
        'probes'   => ['https://js.appboycdn.com/web-sdk/4.10/braze.min.js'],
    ],
    'active-campaign' => [
        'patterns' => ['prism.app-us1.com', 'diffuser-cdn.app-us1.com'],
        'probes'   => [
            'https://prism.app-us1.com/',
            'https://diffuser-cdn.app-us1.com/diffuser/diffuser.js',
        ],
    ],
    'marketo' => [
        'patterns' => ['munchkin.marketo.net'],
        'probes'   => ['https://munchkin.marketo.net/munchkin.js'],
    ],
    'sailthru' => [
        'patterns' => ['ak.sail-horizon.com'],
        'probes'   => ['https://ak.sail-horizon.com/spm/spm.v1.min.js'],
    ],
    'customer-io' => [
        'patterns' => ['assets.customer.io'],
        'probes'   => ['https://assets.customer.io/assets/track.js'],
    ],
    'optinmonster' => [
        'patterns' => ['a.omappapi.com'],
        'probes'   => ['https://a.omappapi.com/app/js/api.min.js'],
    ],
    'nativo' => [
        'patterns' => ['s.ntv.io'],
        'probes'   => ['https://s.ntv.io/serve/load.js'],
    ],
    'id5' => [
        'patterns' => ['cdn.id5-sync.com'],
        'probes'   => ['https://cdn.id5-sync.com/api/1.0/id5-api.js'],
    ],
    'lotame' => [
        'patterns' => ['tags.crwdcntrl.net'],
        'probes'   => ['https://tags.crwdcntrl.net/c/1/cc.js'],
    ],
    'permutive' => [
        'patterns' => ['cdn.permutive.com'],
        'probes'   => ['https://cdn.permutive.com/'],
    ],
    'adobe-audience-manager' => [
        'patterns' => ['demdex.net'],
        'probes'   => ['https://dpm.demdex.net/id'],
    ],
    'creativecdn' => [
        'patterns' => ['creativecdn.com'],
        'probes'   => ['https://creativecdn.com/tags'],
    ],
    'ezoic' => [
        'patterns' => ['ezojs.com'],
        'probes'   => ['https://www.ezojs.com/ezoic/sa.min.js'],
    ],
    'mediavine' => [
        'patterns' => ['scripts.mediavine.com'],
        'probes'   => ['https://scripts.mediavine.com/tags/example.js'],
    ],
    'leadinfo' => [
        'patterns' => ['cdn.leadinfo.net'],
        'probes'   => ['https://cdn.leadinfo.net/ping.js'],
    ],
    'leadfeeder' => [
        'patterns' => ['sc.lfeeder.com'],
        'probes'   => ['https://sc.lfeeder.com/'],
    ],

    // -------------------------------------------------- Medien und Einbettung
    'instagram' => [
        'patterns' => ['instagram.com/embed'],
        'probes'   => ['https://www.instagram.com/embed.js'],
    ],
    'spotify' => [
        'patterns' => ['open.spotify.com/embed'],
        'probes'   => ['https://open.spotify.com/embed/track/4cOdK2wGLETKBW3PvgPWqT'],
    ],
    'twitch' => [
        'patterns' => ['embed.twitch.tv', 'player.twitch.tv'],
        'probes'   => [
            'https://embed.twitch.tv/embed/v1.js',
            'https://player.twitch.tv/',
        ],
    ],
    'wistia' => [
        'patterns' => ['fast.wistia.com', 'fast.wistia.net'],
        'probes'   => [
            'https://fast.wistia.com/assets/external/E-v1.js',
            'https://fast.wistia.net/assets/external/E-v1.js',
        ],
    ],
    'disqus' => [
        // Das Embed liegt unter <kürzel>.disqus.com/embed.js. Die Probe kennt
        // kein Kürzel und bekommt deshalb einen 404 — der Host ist damit
        // belegt, der genaue Pfad nicht. Der Importer vermerkt das.
        'patterns' => ['disqus.com/embed'],
        'probes'   => ['https://disqus.com/embed.js'],
    ],
    'typeform' => [
        'patterns' => ['embed.typeform.com'],
        'probes'   => ['https://embed.typeform.com/next/embed.js'],
    ],
    'issuu' => [
        'patterns' => ['e.issuu.com'],
        'probes'   => ['https://e.issuu.com/embed.js'],
    ],
    'codepen' => [
        'patterns' => ['cpwebassets.codepen.io'],
        'probes'   => ['https://cpwebassets.codepen.io/assets/embed/ei.js'],
    ],
    'snapwidget' => [
        'patterns' => ['snapwidget.com'],
        'probes'   => ['https://snapwidget.com/js/snapwidget.js'],
    ],

    // ------------------------------------------- Chat, Feedback und Umfragen
    'zendesk' => [
        'patterns' => ['static.zdassets.com'],
        'probes'   => ['https://static.zdassets.com/ekr/snippet.js'],
    ],
    'livechat' => [
        'patterns' => ['cdn.livechatinc.com'],
        'probes'   => ['https://cdn.livechatinc.com/tracking.js'],
    ],
    'tawk-to' => [
        'patterns' => ['embed.tawk.to'],
        'probes'   => ['https://embed.tawk.to/'],
    ],
    'crisp' => [
        'patterns' => ['client.crisp.chat'],
        'probes'   => ['https://client.crisp.chat/l.js'],
    ],
    'drift' => [
        'patterns' => ['js.driftt.com'],
        'probes'   => ['https://js.driftt.com/core/drift.js'],
    ],
    'qualtrics' => [
        'patterns' => ['siteintercept.qualtrics.com'],
        'probes'   => ['https://siteintercept.qualtrics.com/'],
    ],
    'qualaroo' => [
        'patterns' => ['s.qualaroo.com'],
        'probes'   => ['https://s.qualaroo.com/'],
    ],
    'mopinion-com' => [
        'patterns' => ['deploy.mopinion.com'],
        'probes'   => ['https://deploy.mopinion.com/js/pastease.js'],
    ],
    'usabilla' => [
        'patterns' => ['w.usabilla.com'],
        'probes'   => ['https://w.usabilla.com/example.js'],
    ],
    'beamer' => [
        'patterns' => ['app.getbeamer.com'],
        'probes'   => ['https://app.getbeamer.com/js/beamer-embed.js'],
    ],

    // -------------------------------------------------------------- Sonstige
    'cloudflare' => [
        // Web Analytics. Turnstile (challenges.cloudflare.com) steht bewusst
        // nicht hier: ein Bot-Schutz ist keine einwilligungspflichtige
        // Verarbeitung, und ein Muster darauf würde Formulare zerlegen.
        'patterns' => ['static.cloudflareinsights.com'],
        'probes'   => ['https://static.cloudflareinsights.com/beacon.min.js'],
    ],
    'vercel' => [
        'patterns' => ['va.vercel-scripts.com'],
        'probes'   => ['https://va.vercel-scripts.com/v1/script.js'],
    ],
    'auth0' => [
        'patterns' => ['cdn.auth0.com'],
        'probes'   => ['https://cdn.auth0.com/js/auth0-spa-js/2.1/auth0-spa-js.production.js'],
    ],
    'adyen' => [
        'patterns' => ['checkoutshopper-live.adyen.com'],
        'probes'   => ['https://checkoutshopper-live.adyen.com/checkoutshopper/sdk/5.53.2/adyen.js'],
    ],
    'datadome' => [
        'patterns' => ['js.datadome.co'],
        'probes'   => ['https://js.datadome.co/tags.js'],
    ],
    'stape' => [
        'patterns' => ['cdn.stape.io'],
        'probes'   => ['https://cdn.stape.io/'],
    ],

    // =========================================================================
    // Ursprünglicher Seed-Bestand
    //
    // Diese Muster standen seit dem ersten Katalog im Repo und stammen aus
    // redaktioneller Pflege, nicht aus einer belegten Quelle. Es sind
    // ausgerechnet die verbreitetsten Dienste — sie unbelegt zu lassen wäre
    // die schlechteste Stelle für eine Lücke. Deshalb laufen sie ab jetzt
    // durch dieselbe Prüfung wie alles andere.
    // =========================================================================

    'google-analytics-4' => [
        'patterns' => ['googletagmanager.com/gtag/js', 'google-analytics.com/g/collect', 'analytics.google.com'],
        'probes'   => [
            'https://www.googletagmanager.com/gtag/js?id=G-0000000000',
            'https://www.google-analytics.com/g/collect',
            'https://analytics.google.com/',
        ],
    ],
    'google-tag-manager' => [
        'patterns' => ['googletagmanager.com/gtm.js'],
        'probes'   => ['https://www.googletagmanager.com/gtm.js?id=GTM-000000'],
    ],
    'google-ads' => [
        'patterns' => ['googleadservices.com', 'googlesyndication.com', 'doubleclick.net'],
        'probes'   => [
            'https://www.googleadservices.com/pagead/conversion_async.js',
            'https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js',
            'https://securepubads.g.doubleclick.net/tag/js/gpt.js',
        ],
    ],
    'google-fonts' => [
        'patterns' => ['fonts.googleapis.com', 'fonts.gstatic.com'],
        'probes'   => [
            'https://fonts.googleapis.com/css2?family=Inter',
            'https://fonts.gstatic.com/s/inter/v13/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1ZL7.woff2',
        ],
    ],
    'google-maps' => [
        'patterns' => ['maps.googleapis.com', 'maps.google.com', 'google.com/maps/embed'],
        'probes'   => [
            'https://maps.googleapis.com/maps/api/js',
            'https://maps.google.com/',
            'https://www.google.com/maps/embed',
        ],
    ],
    'google-recaptcha' => [
        'patterns' => ['google.com/recaptcha', 'gstatic.com/recaptcha'],
        'probes'   => [
            'https://www.google.com/recaptcha/api.js',
            'https://www.gstatic.com/recaptcha/releases/',
        ],
    ],
    'cloudflare-turnstile' => [
        'patterns' => ['challenges.cloudflare.com'],
        'probes'   => ['https://challenges.cloudflare.com/turnstile/v0/api.js'],
    ],
    'youtube' => [
        'patterns' => ['youtube.com/embed', 'youtube-nocookie.com', 'youtube.com/iframe_api'],
        'probes'   => [
            'https://www.youtube.com/embed/dQw4w9WgXcQ',
            'https://www.youtube-nocookie.com/embed/dQw4w9WgXcQ',
            'https://www.youtube.com/iframe_api',
        ],
    ],
    'vimeo' => [
        'patterns' => ['player.vimeo.com'],
        'probes'   => ['https://player.vimeo.com/api/player.js'],
    ],
    'soundcloud' => [
        'patterns' => ['w.soundcloud.com/player'],
        'probes'   => ['https://w.soundcloud.com/player/'],
    ],
    'spotify-embed' => [
        'patterns' => ['open.spotify.com/embed'],
        'probes'   => ['https://open.spotify.com/embed/track/4cOdK2wGLETKBW3PvgPWqT'],
    ],
    'openstreetmap' => [
        'patterns' => ['tile.openstreetmap.org', 'openstreetmap.org/export/embed'],
        'probes'   => [
            'https://tile.openstreetmap.org/0/0/0.png',
            'https://www.openstreetmap.org/export/embed.html',
        ],
    ],
    'meta-pixel' => [
        // 'facebook.com/tr' bleibt bewusst ohne Probe: der Pfad ist ein
        // Zählpixel, das sich nur durch einen echten Tracking-Aufruf belegen
        // ließe. Das Muster bleibt trotzdem im Katalog — der Importer löscht
        // nichts —, es trägt nur keinen maschinellen Nachweis.
        'patterns' => ['connect.facebook.net'],
        'probes'   => ['https://connect.facebook.net/en_US/fbevents.js'],
    ],
    'linkedin-insight' => [
        'patterns' => ['snap.licdn.com', 'px.ads.linkedin.com'],
        'probes'   => [
            'https://snap.licdn.com/li.lms-analytics/insight.min.js',
            'https://px.ads.linkedin.com/collect',
        ],
    ],
    'x-twitter-pixel' => [
        'patterns' => ['static.ads-twitter.com', 'analytics.twitter.com'],
        'probes'   => [
            'https://static.ads-twitter.com/uwt.js',
            'https://analytics.twitter.com/i/adsct',
        ],
    ],
    'tiktok-pixel' => [
        'patterns' => ['analytics.tiktok.com'],
        'probes'   => ['https://analytics.tiktok.com/i18n/pixel/events.js'],
    ],
    'pinterest-tag' => [
        'patterns' => ['s.pinimg.com/ct'],
        'probes'   => ['https://s.pinimg.com/ct/core.js'],
    ],
    'microsoft-ads' => [
        'patterns' => ['bat.bing.com'],
        'probes'   => ['https://bat.bing.com/bat.js'],
    ],
    'microsoft-clarity' => [
        'patterns' => ['clarity.ms'],
        'probes'   => ['https://www.clarity.ms/tag/example'],
    ],
    'hotjar' => [
        'patterns' => ['static.hotjar.com', 'script.hotjar.com'],
        'probes'   => [
            'https://static.hotjar.com/c/hotjar-0.js',
            'https://script.hotjar.com/',
        ],
    ],
    'vwo' => [
        'patterns' => ['dev.visualwebsiteoptimizer.com'],
        'probes'   => ['https://dev.visualwebsiteoptimizer.com/lib/000000.js'],
    ],
    'plausible' => [
        'patterns' => ['plausible.io/js'],
        'probes'   => ['https://plausible.io/js/script.js'],
    ],
    'matomo-cloud' => [
        'patterns' => ['matomo.cloud', 'matomo.js', 'piwik.js'],
        'probes'   => [
            'https://demo.matomo.cloud/matomo.js',
            'https://demo.matomo.cloud/piwik.js',
        ],
    ],
    'matomo-self-hosted' => [
        'patterns' => ['matomo.js', 'piwik.js'],
        'probes'   => [
            'https://demo.matomo.cloud/matomo.js',
            'https://demo.matomo.cloud/piwik.js',
        ],
    ],
    'hubspot' => [
        'patterns' => ['js.hs-scripts.com', 'js.hsforms.net', 'js.hs-analytics.net'],
        'probes'   => [
            'https://js.hs-scripts.com/0000000.js',
            'https://js.hsforms.net/forms/embed/v2.js',
            'https://js.hs-analytics.net/analytics/0/0.js',
        ],
    ],
    'klaviyo' => [
        'patterns' => ['static.klaviyo.com', 'a.klaviyo.com'],
        'probes'   => [
            'https://static.klaviyo.com/onsite/js/klaviyo.js',
            'https://a.klaviyo.com/',
        ],
    ],
    'mailchimp' => [
        'patterns' => ['chimpstatic.com', 'list-manage.com'],
        'probes'   => [
            'https://chimpstatic.com/mcjs-connected/js/users/example.js',
            'https://list-manage.com/',
        ],
    ],
    'intercom' => [
        'patterns' => ['widget.intercom.io', 'js.intercomcdn.com'],
        'probes'   => [
            'https://widget.intercom.io/widget/example',
            'https://js.intercomcdn.com/',
        ],
    ],
    'zendesk-chat' => [
        'patterns' => ['static.zdassets.com', 'zopim.com'],
        'probes'   => [
            'https://static.zdassets.com/ekr/snippet.js',
            'https://zopim.com/',
        ],
    ],
    'trustpilot' => [
        'patterns' => ['widget.trustpilot.com'],
        'probes'   => ['https://widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js'],
    ],
    'calendly' => [
        'patterns' => ['assets.calendly.com'],
        'probes'   => ['https://assets.calendly.com/assets/external/widget.js'],
    ],
    'awin' => [
        'patterns' => ['dwin1.com', 'awin1.com'],
        'probes'   => [
            'https://www.dwin1.com/00000.js',
            'https://www.awin1.com/',
        ],
    ],
    'sentry' => [
        'patterns' => ['browser.sentry-cdn.com', 'ingest.sentry.io'],
        'probes'   => [
            'https://browser.sentry-cdn.com/7.100.0/bundle.min.js',
            'https://ingest.sentry.io/',
        ],
    ],
    'stripe' => [
        'patterns' => ['js.stripe.com'],
        'probes'   => ['https://js.stripe.com/v3/'],
    ],
    'paypal' => [
        'patterns' => ['paypal.com/sdk/js', 'paypalobjects.com'],
        'probes'   => [
            'https://www.paypal.com/sdk/js?client-id=test',
            'https://www.paypalobjects.com/',
        ],
    ],
    'jsdelivr' => [
        'patterns' => ['cdn.jsdelivr.net'],
        'probes'   => ['https://cdn.jsdelivr.net/npm/vue@3/dist/vue.global.js'],
    ],
    'typekit-adobe-fonts' => [
        'patterns' => ['use.typekit.net'],
        'probes'   => ['https://use.typekit.net/example.js'],
    ],

    /*
     * Aus der Katalog-Anreicherung vom 11. August 2026.
     *
     * Die Adressen stammen aus den Einbau-Dokumentationen der Anbieter selbst.
     * Sie sind hier Proben, kein Beleg — belegt ist ein Muster erst, wenn der
     * Endpunkt antwortet.
     *
     * Drei Kandidaten sind bewusst NICHT aufgenommen, aus den Gründen, die im
     * Kopf dieser Datei stehen:
     *
     *   friendly-captcha    Die dokumentierten Adressen (eu.frcapi.com und
     *                       global.frcapi.com, jeweils /siteverify) sind
     *                       serverseitige Prüf-Endpunkte. Der Server des
     *                       Betreibers ruft sie auf, nicht der Browser. Ein
     *                       Muster darauf würde nichts blockieren und nur so
     *                       aussehen, als täte es das.
     *   matomo-tag-manager  Liefert unter der Domain des Betreibers aus
     *                       (`{MATOMO_URL}/js/container_{ID}.js`). Ein Muster
     *                       wie `/js/container_` träfe Dateien der
     *                       Kundenwebsite — genau der Fall, den
     *                       isSpecificEnough() abweist.
     *   piwik-pro           Liefert unter einer kontoeigenen Subdomain aus
     *                       (`<konto>.piwik.pro/ppms.js`). Das Muster
     *                       `piwik.pro/ppms.js` wäre richtig, aber es gibt
     *                       keine allgemein erreichbare Adresse, an der es sich
     *                       belegen ließe. Ohne Beleg kein Muster; wer ein
     *                       Konto hat, kann es mit --only=piwik-pro nachtragen.
     */
    'brevo' => [
        'patterns' => ['cdn.brevo.com', 'sibautomation.com'],
        'probes'   => [
            'https://cdn.brevo.com/js/sdk-loader.js',
            'https://sibautomation.com/sa.js',
        ],
    ],
    'cloudflare-web-analytics' => [
        // Nur der zentrale Host. Cloudflare kann das Beacon zusätzlich über
        // `<kundendomain>/cdn-cgi/rum` proxen; ein Muster darauf läge auf der
        // Domain des Kunden und wird deshalb nicht gesetzt.
        'patterns' => ['cloudflareinsights.com'],
        'probes'   => [
            'https://static.cloudflareinsights.com/beacon.min.js',
            'https://cloudflareinsights.com/cdn-cgi/rum',
        ],
    ],
    'etracker' => [
        'patterns' => ['code.etracker.com'],
        'probes'   => ['https://code.etracker.com/code/e.js'],
    ],
    'hcaptcha' => [
        // api.hcaptcha.com/siteverify bleibt draußen: serverseitig.
        'patterns' => ['js.hcaptcha.com'],
        'probes'   => ['https://js.hcaptcha.com/1/api.js'],
    ],
    'klarna' => [
        'patterns' => ['js.klarna.com'],
        'probes'   => ['https://js.klarna.com/web-sdk/v1/klarna.js'],
    ],
    'mapbox' => [
        'patterns' => ['api.mapbox.com'],
        'probes'   => [
            'https://api.mapbox.com/mapbox-gl-js/v3.28.0/mapbox-gl.js',
            'https://api.mapbox.com/mapbox-gl-js/v3.28.0/mapbox-gl.css',
        ],
    ],
    'mollie' => [
        'patterns' => ['js.mollie.com'],
        'probes'   => ['https://js.mollie.com/v1/mollie.js'],
    ],
];
