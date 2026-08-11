<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Chinesisch.
 *
 * Nachschlagewerk, kein Sprachkatalog: der Schluessel ist der deutsche
 * Originaltext aus `database/seeds/dps_catalog.json`, der Wert seine
 * Uebersetzung. Fehlt ein Eintrag, bleibt der deutsche Text stehen — das ist
 * schlechter als eine Uebersetzung, aber besser als eine Luecke in einem Text,
 * der einer Person erklaeren soll, wofuer ein Dienst ihre Daten verarbeitet.
 *
 * Am Ende stehen zusammengesetzte Zwecke. ConfigBuilder fuegt die `purposes`
 * eines Eintrags mit ", " zu einem Feld zusammen; zur Laufzeit wieder
 * aufzutrennen waere NICHT verlustfrei, weil 87 der Einzeltexte selbst ", "
 * enthalten und 16 Katalogeintraege sich dadurch falsch rekonstruieren
 * liessen. Die Kombination steht deshalb als eigener Schluessel hier, gebildet
 * aus den geprueften Einzeluebersetzungen in derselben Reihenfolge.
 *
 * DIESE DATEI GEHOERT INS REPOSITORY, anders als `lang/banner/`.
 *
 * Der Katalog steht unter ODbL 1.0. Eine uebersetzte Fassung seiner Inhalte ist
 * eine abgeleitete Datenbank; wer sie oeffentlich nutzt, muss sie nach ODbL 4.4
 * unter derselben Lizenz verfuegbar machen. Die Bannertexte in `lang/banner/`
 * sind dagegen MIT-lizenzierter Code und duerfen zurueckgehalten werden — der
 * Unterschied ist die Lizenz der Quelle, nicht unsere Vorliebe.
 *
 * Maschinell aus dem Deutschen erstellt und von einer zweiten, unabhaengigen
 * Stufe gegen das Original geprueft. Nicht anwaltlich freigegeben; siehe die
 * Instanz-Einstellung `review_notices`.
 *
 * 379 Einzeltexte, 51 Kombinationen. Erzeugt am 2026-08-11.
 */

return [
    'A/B-Tests und Split-URL-Tests auf der Website'
        => '网站上的 A/B 测试和拆分 URL 测试',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => '地图调用的计费与防护',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => '完成使用 Shop 的登录；必要',
    'Abspielen eingebetteter Videos'
        => '播放嵌入的视频',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => '处理由访客发起的付款',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => '在预约需要付费时处理付款',
    'Analyse des Nutzungsverhaltens'
        => '分析使用行为',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => '购买界面的分析数据；统计',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => '商店的分析数据；提供方将其归为统计',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => '/wp-admin/ 下管理后台的登录数据',
    'Anmeldung bei Shop Pay; notwendig'
        => '登录 Shop Pay；必要',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => '管理后台的登录和会话识别',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => '与服务相关的匿名统计以及其他技术用途，其中包括无障碍支持',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => '各账户的管理后台显示设置',
    'Ansichtseinstellungen des Adminbereichs merken'
        => '记住管理后台的显示设置',
    'Anzeige von Bewertungen'
        => '显示评价',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => '在网站上显示预订日历并安排预约',
    'Anzeigen einer interaktiven Karte'
        => '显示交互式地图',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => '设置为值 1 时，阻止向 Microsoft 发送 UET 事件',
    'Aufbau von Remarketing-Listen'
        => '构建再营销名单',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => '会话的录制与回放',
    'Aufzeichnung von Mausbewegungen'
        => '记录鼠标移动',
    'Ausblenden des Shop-Hinweises merken'
        => '记住已隐藏商店提示',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => '在网站上分发并触发标签',
    'Ausliefern und Verwalten von Tags auf der Website'
        => '在网站上分发和管理标签',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => '向嵌入的地图分发地图图块',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => '通过广告服务器将提示内容分发到页面源代码中预置的占位符',
    'Auslieferung personalisierter Werbung'
        => '投放个性化广告',
    'Auslieferung von Anzeigen'
        => '投放广告',
    'Auslieferung von Bibliotheken und Assets'
        => '分发库文件和资源',
    'Auslieferung von Schriftarten'
        => '分发字体',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => '签发由网站服务器验证的令牌',
    'Aussteuern von Anmeldeformularen auf der Website'
        => '控制网站上注册表单的展示',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => '控制弹出表单的展示，使其不会重复出现',
    'Auswahl des Rechenzentrums'
        => '选择数据中心',
    'Auswertung der Verweisquellen'
        => '分析引荐来源',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => '分析网站受众（网站人口统计）',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => '分析浏览器、操作系统和设备类型',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => '分析设备、浏览器和估算的位置',
    'Auswertung von Herkunft und Kampagnen'
        => '分析来源和营销活动',
    'Authentifiziert die Anfragen des Endnutzers'
        => '对最终用户的请求进行身份验证',
    'Begrenzung der Anzeigehäufigkeit'
        => '限制广告展示频次',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => '证明已通过验证，从而免除该区域的后续质询',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => '提供 Stripe Elements 的支付输入框',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => '提供无障碍访问功能',
    'Besucherzählung'
        => '访客计数',
    'Betrieb des Chat-Widgets'
        => '聊天小工具的运行',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => '地图服务的运行与滥用防护',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => '商店购物车和结账流程的运行',
    'Betrugs- und Missbrauchserkennung'
        => '欺诈和滥用检测',
    'Betrugserkennung beim Zahlungsversuch'
        => '支付尝试时的欺诈检测',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => '支付尝试的欺诈检测和风险评估',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => '欺诈防范以及作为支付服务提供方的法定义务',
    'Betrugsprävention'
        => '欺诈防范',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => '防范欺诈并对支付尝试进行风险评估',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => '在取得同意后建立假名化的使用画像',
    'Bildung von Zielgruppen und Retargeting'
        => '构建目标受众和再营销',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => '将会话绑定到同一个 AWS 实例',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => '播放器的机器人和滥用防护',
    'Bot-Abwehr fuer den Player'
        => '播放器的机器人防护',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => '分发 HubSpot 资源时的机器人防护',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'LinkedIn 用于区分设备并识别滥用行为的浏览器标识符',
    'Cloudflare-Bot-Abwehr'
        => 'Cloudflare 机器人防护',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => '用于流量过滤的 Cloudflare 机器人检测',
    'Cloudflare-Ratenbegrenzung'
        => 'Cloudflare 速率限制',
    'Conversion-Messung'
        => '转化衡量',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'LinkedIn 广告活动的转化跟踪',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Microsoft Advertising 广告活动的转化跟踪',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Pinterest 广告活动的转化跟踪',
    'Darstellung interaktiver Karten auf der Website'
        => '在网站上呈现交互式地图',
    'Deduplizieren von Kontakten'
        => '对联系人进行去重',
    'Dient der Ausspielung und Messung von Werbung.'
        => '用于投放和衡量广告。',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => '跨域访客 ID；据提供方称属第三方 Cookie，仅在配置文件中启用第三方 Cookie 时使用',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => '用于重新识别访客的第三方标识符',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => '会传输给 Klaviyo 的第三方标识符',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => '用于在 TikTok 上衡量广告活动并进行个性化的第三方广告标识符',
    'E-Commerce- und Zielauswertung'
        => '电子商务和目标分析',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => '预填评论表单中的电子邮件地址',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => '嵌入并播放单曲、专辑、播放列表和播客单集',
    'Einbetten und Abspielen von Videos auf der Website'
        => '在网站上嵌入并播放视频',
    'Einbetten von Formularen und Umfragen in die Website'
        => '在网站中嵌入表单和问卷',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => '在自有结账流程中嵌入银行卡输入框，使卡片数据不经过商店',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => '嵌入由外部维护的 Cookie 声明',
    'Einbettung von Audioinhalten'
        => '嵌入音频内容',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => '在关联网站上嵌入 Google 和 Facebook 的广告像素',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => '在产品页和购物车页展示融资与分期付款提示（On-site Messaging）',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => '跨域统计中的唯一标识符（2026年6月14日起的账户）',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => '跨域统计中的唯一标识符（2026年6月14日之前的账户）',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => '选择退出表单的一次性 CSRF 防护值',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => '包含用户标识符和生成时间；据来源称，在 Pinterest 应用内浏览器中设置，而非在网站域名下设置',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => '收集回答并传输给表单运营方',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => '为分析目的记录网站的使用情况。',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => '记录由运营方自定义的事件',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => '从浏览器收集并传输应用程序错误',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => '为营销自动化记录网站的访客和页面浏览',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => '衡量广告素材的效果并结算佣金',
    'Erhalt des Sitzungszustands'
        => '维持会话状态',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => '识别设备以防止滥用',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => '识别并拒绝对表单的自动化访问',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => '识别下单流程中的机器人和自动化行为',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => '检测购物车内容是否发生变化',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => '检测购物车内容的变化',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => '识别嵌入了 Intercom 代码的网站的访客',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => '在 Microsoft 网站上重新识别浏览器；据提供方称也用于广告，属第三方 Cookie',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => '重新识别通过聊天工具发送消息的人',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => '识别发起对话的设备',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => '为防止滥用，识别与消息工具交互的单个设备',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => '识别发起对话的最终用户',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => '识别嵌入聊天小工具的域名或子域名',
    'Erkennt wiederkehrende Besucher'
        => '识别回访的访客',
    'Erkennt, ob der Browser neu gestartet wurde'
        => '检测浏览器是否已重新启动',
    'Erkennung von Klickbetrug'
        => '点击欺诈检测',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => '统计对网站的唯一访问（2026年6月14日起的账户）',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => '统计对网站的唯一访问（2026年6月14日之前的账户）',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => '使第三方能够在这些用户的浏览器中设置 Cookie',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => '使无障碍访问功能得以使用',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => '提供网站的附加功能。',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => '用于重新识别访客并将事件归属到该网站的第一方标识符',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => '用于转化跟踪和再营销的第一方访客标识符',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => '用于归属事件的第一方会话标识符',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => '用于衡量广告活动的、按像素划分的第一方会话标识符',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => '用于衡量广告活动的第一方会话标识符',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => '用于在 TikTok 上衡量广告活动并进行个性化的第一方广告标识符',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => '将 Pinterest 无法归属的访客操作进行归组的第一方 Cookie',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => '存储通过 Automatic Enhanced Match 采集的哈希化客户数据的第一方 Cookie',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => '为每位访客生成唯一标识符（2026年6月14日起的账户）',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => '为每位访客生成唯一标识符（2026年6月14日之前的账户）',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => '用于分析带有小工具的页面上事件的设备标识符',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => '在由 HubSpot 托管的页面上登录时设置',
    'Gewaehlte Sprache speichern'
        => '保存所选语言',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => '在 Microsoft 各域名之间同步 MUID 标识符；据提供方称属第三方 Cookie',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => '在多个标签页之间保持消息同步',
    'Haelt den Wert des Parameters pk_campaign'
        => '保存参数 pk_campaign 的值',
    'Haelt den Wert des Parameters utm_campaign'
        => '保存参数 utm_campaign 的值',
    'Haelt den Widerspruch gegen die Messung'
        => '保存对统计的反对',
    'Haelt die Ablaufzeit von _uetsid'
        => '保存 _uetsid 的过期时间',
    'Haelt die Ablaufzeit von _uetvid'
        => '保存 _uetvid 的过期时间',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => '为 Tag Manager 保存流量来源的类型',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => '记录访客身份，也用于对联系人去重',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => '记录访客关于 Cookie 的决定',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => '在页面切换时保持小工具的显示一致',
    'Haelt die Einstiegsseite fest; Analyse'
        => '记录着陆页；统计',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => '保存对使用 Cookie 进行统计的同意',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => '保存用户对类别和提供方的决定',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => '保持已登录用户的会话以及对以往对话的访问',
    'Haelt die verweisende Adresse'
        => '保存引荐来源地址',
    'Haelt die verweisende Quelle fest; Analyse'
        => '记录引荐来源；统计',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => '保存会话的自定义变量（提供方已将其标记为已弃用）',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => '记录是否允许 etracker 设置 Cookie；在使用 data-block-cookies 时通过 API 调用设置',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => '记录视频所有者启用了哪些功能开关',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => '用于重新识别访客的主 Cookie',
    'Heatmaps'
        => '热图',
    'Heatmaps von Klicks und Scrollverhalten'
        => '点击和滚动行为的热图',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => '在访问期间保存热图的会话数据',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => '保存当前会话的信息（2026年6月14日起的账户）',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => '保存当前会话的信息（2026年6月14日之前的账户）',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => '在访问期间保存自定义变量',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => '保存访客层级的持久数据（2026年6月14日起的账户）',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => '为 Insights 分析保存访客层级的持久数据（2026年6月14日之前的账户）',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => '记录访客的同意状态（2026年6月14日起的账户）',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => '记录访客的同意状态（2026年6月14日之前的账户）',
    'Hält den Sitzungszustand.'
        => '保存会话状态。',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => '保存 Clarity 用户标识符以及针对本网站的设置',
    'Hält die Variantenzuweisung für A/B-Tests'
        => '保存 A/B 测试的变体分配',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => '临时记录所选组合（2026年6月14日起的账户）',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => '临时记录所选组合（2026年6月14日之前的账户）',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => '在跳转发生之前记录所选变体（2026年6月14日起的账户）',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => '在跳转发生之前记录所选变体（2026年6月14日之前的账户）',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => '记录本次访问是通过哪个引荐来源产生的',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => '在 Pre-Clearance 模式下：对同一区域后续 WAF 检查的放行',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => '用于转化跟踪、再定向和分析的间接会员标识',
    'Inhalt des Warenkorbs; notwendig'
        => '购物车内容；必要',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => '商店中与买家相关的分析数据；分析',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => '与活动关联的唯一标识（2026年6月14日起的账户）',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => '在所有使用 Clarity 的网站上首次接触 Clarity 的标识；据提供方称为第三方 Cookie',
    'Kennzeichnet die laufende Sitzung'
        => '标识当前会话',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => '为后续评论保留评论数据',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => '一致地投放 A/B 测试的变体',
    'Lastverteilung und Routing'
        => '负载分配与路由',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => '质询请求的负载均衡与路由',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => '将访客的账户设置保存在本地',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => '投放 A/B 测试页面的同一变体',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => '网站上用于客户支持的即时聊天和消息渠道',
    'Live-Chat und Support-Postfach auf der Website'
        => '网站上的即时聊天和支持收件箱',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => '购买界面的营销数据；营销',
    'Marketingdaten fuer Kaufoberflaechen'
        => '用于购买界面的营销数据',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => '保存观看者的播放器设置（音量、画质、字幕）',
    'Merken von Widget-Zustand und -Einstellungen'
        => '保存小部件的状态和设置',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => '记住 Global Privacy Control 横幅已被关闭',
    'Merkt das Schliessen des Hinweis-Banners'
        => '记住提示横幅已被关闭',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => '记住与 Cookie lms_analytics 进行匹配的时间点',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => '记住上次 ID 匹配的时间点，以免重复匹配',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => '记住已分配的变体（2026年6月14日起的账户）',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => '记住已分配的变体，以便再次访问时保持一致（2026年6月14日之前的账户）',
    'Merkt einen Rabattcode; notwendig'
        => '记住折扣码；必要',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => '记住对测量的反对（2026年6月14日起的账户）',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => '记住跨网站的反对（2026年6月14日之前的账户）',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => '记住音量、画质和字幕等播放器设置',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => '记住声音通知的设置',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => '记住已给予的统计同意',
    'Merkt sich einen Widerspruch gegen die Messung'
        => '记住对统计的反对',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => '记住已关闭的主动消息',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => '记住访客已关闭启动按钮的标签',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => '记住小部件处于打开还是关闭状态',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => '记住该访客不应参与任何活动（2026年6月14日之前的账户）',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => '记住该访客被排除在活动之外（2026年6月14日起的账户）',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => '记住该访客被排除在活动之外（2026年6月14日之前的账户）',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => '记住同意提示已被关闭',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => '记住商店提示已被关闭',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => '记住不再重复询问 Cookie 问题',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => '记住某个代码已被触发',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => '记住是否对该访客测量滚动深度',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => '记住聊天窗口是否处于打开状态',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => '记住 MUID 标识是否传递给广告标识；据提供方称始终为 0，第三方 Cookie',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => '测量电子邮件营销活动中的打开和点击',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => '测量带有小部件的页面上的会话和事件',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => '测量会话并归因访问来源',
    'Messung der Dienstverfügbarkeit durch Google'
        => '由 Google 测量服务可用性',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => '测量页面加载时间和核心指标（Real User Monitoring）',
    'Messung der Scrolltiefe und von Klickereignissen'
        => '测量滚动深度和点击事件',
    'Messung der Werbewirkung'
        => '测量广告效果',
    'Messung des Nutzungsverhaltens auf der Website'
        => '测量网站上的使用行为',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => '在 TikTok Pangle 广告网络中测量和个性化广告',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => '测量并改进广告活动的效果',
    'Messung von Auslieferungen und Klicks'
        => '测量投放次数和点击次数',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => '为分析而测量访客和会话',
    'Messung von Conversions'
        => '测量转化',
    'Messung von Seitenaufrufen und Besuchen'
        => '测量页面浏览量和访问量',
    'Messung von Seitenaufrufen und Ereignissen'
        => '测量页面浏览量和事件',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => '测量页面浏览量和使用行为',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => '测量页面浏览量和自定义事件',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => '测量页面浏览量、访问量和会话',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => '在自有服务器上测量页面浏览量、访问量和会话',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => '测量网站上的广告活动和转化',
    'Messung von Zielen und Conversions einer Kampagne'
        => '测量活动的目标和转化',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => '从提供方追加加载地图瓦片、字体和样式',
    'Name aus dem Kommentarformular vorbelegen'
        => '预填评论表单中的姓名',
    'Nutzer-ID'
        => '用户 ID',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => '将购物车归属到正确的国家/地区；必要',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => '在数据库中将购物车归属到正确的客户',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => '将一次访问中的操作归入同一个会话',
    'Personalisierung der Werbung auf TikTok'
        => '在 TikTok 上进行广告个性化',
    'Pruefen, ob WordPress Cookies setzen kann'
        => '检查 WordPress 能否设置 Cookie',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => '检查浏览器的 Cookie 支持情况；必要',
    'Prueft, ob WordPress Cookies setzen kann'
        => '检查 WordPress 是否可以设置 Cookie',
    'Pruefwert des Shop-Passworts; notwendig'
        => '商店密码的校验值；必要',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => '提供方的检测 Cookie（2026年6月14日之前的账户）',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => '检查浏览器是否接受 Cookie（2026年6月14日起的账户）',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => '检查浏览器是否接受 Cookie（2026年6月14日之前的账户）',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => '检查浏览器是否接受 Cookie（据提供方称仅在 Internet Explorer 中）',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'HubSpot 的 CDN 提供方处的速率限制',
    'Reichweiten- und Nutzungsmessung'
        => '覆盖率与使用情况测量',
    'Reichweitenmessung'
        => '覆盖率测量',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => '由 Vimeo 对嵌入视频进行覆盖率测量',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => '面向商店运营者的覆盖率测量',
    'Remarketing und Zielgruppenbildung'
        => '再营销与受众构建',
    'Retargeting'
        => '再定向',
    'Retargeting von Website-Besuchern'
        => '对网站访客进行再定向',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => '用于区分人类与机器人的风险分析',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => '汇总 Cookie，据提供方称仅在 Safari 浏览器中创建（2026年6月14日起的账户）',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => '汇总 Cookie，据提供方称仅在 Safari 浏览器中创建（2026年6月14日之前的账户）',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => '由 Spotify 及第三方收集这些用户的浏览行为信息',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => '由网站运营者自行设置的开关，用于阻止 Klaviyo 的跟踪',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => '防止会员登录被伪造',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => '保护表单免受自动化滥用',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => '防范自动化请求（垃圾信息、撞库攻击）',
    'Sicherheit'
        => '安全',
    'Sicherheitsfunktionen'
        => '安全功能',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => '在启用可选功能 User Journeys 时的安全功能',
    'Sitzung'
        => '会话',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => '会话以及语言或国家/地区的归属',
    'Sitzungsaufzeichnung'
        => '会话记录',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => '用于分析带有小部件的页面上事件的会话标识',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => '用于商店统计的会话标识；分析',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Answer Bot 服务的会话密钥',
    'Sitzungswiedergabe'
        => '会话回放',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => '在登录后保存身份验证令牌',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => '保存受密码保护视频的编码后密码',
    'Speichert den Schluessel der gewaehlten Sprache'
        => '保存所选语言的键值',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => '保存访客的隐私偏好；必要',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => '保存访客的同意决定',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => '保存访客的设备标识，用于在聊天小部件中进行身份验证',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => '保存已报名参加网络研讨会的用户的标识',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => '保存点击标识 fbclid，以便将网站事件归因于某条广告',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => '保存来自视频前置注册表单的用户标识',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => '保存 TikTok 点击标识，用于归因转化',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => '保存用于重新识别的唯一访客 ID',
    'Speichert die zugestimmten Kategorien'
        => '保存已同意的类别',
    'Speist das Widget zuletzt angesehener Produkte'
        => '为最近浏览商品的小部件提供数据',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => '控制是否刷新 MUID 标识；据提供方称为第三方 Cookie',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => '对网站的运行和安全而言在技术上是必需的。',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => '承载商店的会话和结账数据；提供方将其归为必要',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => '承载反对（选择退出）功能',
    'Transaktionssicherheit'
        => '交易安全',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => '承载 reCAPTCHA 的风险分析。',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => '向 TikTok 传输网站事件',
    'Umfragen'
        => '问卷调查',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => '阻止向 HubSpot 传输数据',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => '在关闭后不再显示聊天的欢迎消息',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => '区分访问 Microsoft 网站的浏览器；在获得同意的情况下也用于广告',
    'Unterscheidet einzelne Nutzer.'
        => '区分单个用户。',
    'Unterscheidung einzelner Nutzer'
        => '区分单个用户',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => '在表单和登录时区分人类与机器人',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => '将多次页面浏览合并为一次会话记录',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => '防止在严格模式下持续显示横幅',
    'Verteilen der Consent-Signale an Google-Tags'
        => '向 Google 代码分发同意信号',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => '管理针对容器中所配置代码的同意决定',
    'Verwaltung des Widerspruchs gegen die Messung'
        => '管理对测量的反对',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => '管理与测量相关的反对与同意',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Google 将其归入“分析”和“广告”类别。',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Google 将其归入分析、广告和安全类别。',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Google 将其归入“功能”“广告”和“安全”类别。',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Google 将其归入安全和功能类别。',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Google 将其归入安全和广告类别。',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Google 将其归入安全、分析、功能和广告类别。',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Google 将其归入“安全”“功能”和“广告”类别。',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Google 将其归入广告和安全类别。',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Google 将其归入分析类别；Google 未说明更具体的用途。',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Google 将其归入功能类别。',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Google 将其归入安全类别。',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Google 将其归入广告类别。',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Microsoft 将其列为未经同意不得设置的 Cookie 之一；Microsoft 未说明其具体用途',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => '由 Vimeo 生成的用于覆盖率测量的标识',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => '结账完成后购物车的货币；必要',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => '基于概率将浏览器归属到某个个人',
    'Warenkorb einer Besucherin zuordnen'
        => '将购物车归属到某位访客',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => '预填评论表单中的网站地址',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => '出于广告目的重新识别观看者',
    'Werbepersonalisierung'
        => '广告个性化',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => '与 _pin_unauth 相同，但作为第三方 Cookie',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => '在预订流程中重新识别访客',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => '在不同页面浏览和标签页之间重新识别访客',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => '重新识别并标识网站访客',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => '跨多次访问重新识别访客',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => '为再定向而重新识别关联网站的访客',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => '重新识别回访访客并关联此前的对话',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => '重新识别访客并存储其特征',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => '通过 Criteo 标识重新识别浏览器',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => '重新识别用户；仅在获得同意时进行，默认被阻止',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => '在获得同意后于后续访问中重新识别浏览器',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => '重新识别访客并归属到会话',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => '为广告目的在 LinkedIn 之外重新识别 LinkedIn 会员',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => '在获得同意后重新识别用户',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => '通过访客 ID 识别回访的访客',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => '在活动目标被触发时设置（2026年6月14日起的账户）',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => '在活动目标被触发时设置（2026年6月14日之前的账户）',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => '当有人访问嵌入了 Pinterest 代码的网站时设置',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => '在没有现有 Cookie 的情况下成功完成归属（例如通过 Enhanced Match）时设置',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => '由 JavaScript 代码根据 Pinterest 随广告流量传递的信息设置',
    'Zaehlt und begrenzt Sitzungen'
        => '统计并限制会话数量',
    'Zahlungsabwicklung'
        => '支付处理',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => '指示会话仍在进行还是新建的',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => '向界面指示是否已登录以及以何身份登录',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => '随机浏览器标识，用于将网站的像素事件归属到某一浏览器',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => '在相应小部件中显示最近浏览的商品',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => '将网站上的行为归属到某个用户档案',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => '确定访问的来源（引荐来源、归因）',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => '通过电子邮件地址将访客与 Brevo 账户中的联系人相关联',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => '将潜在客户和销售等交易归属到某个发布商',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => '将网站上的操作归属到此前看到的广告',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => '将多次页面浏览合并为一次会话',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => '与已记录的访问历程事件相关的附加数据',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => '跨多次访问分配并保持同一变体',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => '基于 CSS 选择器的事件的临时存储',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => '浏览器存储中用于消息工具和访客数据的临时存储',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Tag Manager 条目的临时存储',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => '滚动深度测量的临时存储',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Tag Manager 变量的临时存储',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => '小部件设置的临时存储，用于避免重复的服务器请求',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => '在浏览器中临时存储消息工具和访客数据',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => '统计为某位访客创建的会话数（2026年6月14日起的账户）',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => '统计在测量期间浏览器被关闭并重新打开的次数（2026年6月14日之前的账户）',
    'Zählung von Seitenaufrufen und Besuchen'
        => '统计页面浏览量和访问量',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => '对用户行为的自动化分析',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => '精确到国家、地区和城市的粗略地理定位',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => '可选的会话记录（Session Replay），默认对文本、图片和输入内容进行遮蔽',
    'optional Heatmaps und A/B-Tests'
        => '可选的热图和 A/B 测试',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => '在 Split-URL 测试中传递引荐来源（2026年6月14日起的账户）',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => '在 Split-URL 测试中传递引荐来源（2026年6月14日之前的账户）',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => '将潜在客户和销售等交易归属到某个发布商, 衡量广告素材的效果并结算佣金',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => '为营销自动化记录网站的访客和页面浏览, 通过电子邮件地址将访客与 Brevo 账户中的联系人相关联, 记录由运营方自定义的事件',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => '在网站上显示预订日历并安排预约, 在预订流程中重新识别访客, 在预约需要付费时处理付款',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => '识别并拒绝对表单的自动化访问, 签发由网站服务器验证的令牌, 在 Pre-Clearance 模式下：对同一区域后续 WAF 检查的放行',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => '测量页面浏览量和访问量, 测量页面加载时间和核心指标（Real User Monitoring）',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => '投放个性化广告, 测量广告效果, 通过 Criteo 标识重新识别浏览器',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => '测量网站上的使用行为, 在取得同意后建立假名化的使用画像, 在获得同意后于后续访问中重新识别浏览器',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => '测量页面浏览量和使用行为, 测量滚动深度和点击事件, 在获得同意后重新识别用户, 管理对测量的反对',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => '在表单和登录时区分人类与机器人, 防范自动化请求（垃圾信息、撞库攻击）',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => '测量转化, 再营销与受众构建, 限制广告展示频次, 点击欺诈检测',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => '投放广告, 限制广告展示频次, 欺诈和滥用检测, 测量投放次数和点击次数',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => '区分单个用户, 维持会话状态, 覆盖率与使用情况测量',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => '显示交互式地图, 由 Google 测量服务可用性',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => '用于区分人类与机器人的风险分析, 保护表单免受自动化滥用',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => '在网站上分发和管理标签, 向 Google 代码分发同意信号',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => '在表单和登录时区分人类与机器人, 质询请求的负载均衡与路由, 提供无障碍访问功能',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => '热图, 会话记录, 问卷调查',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => '跨多次访问重新识别访客, 测量会话并归因访问来源, 对联系人进行去重, 聊天小工具的运行, 一致地投放 A/B 测试的变体',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => '网站上的即时聊天和支持收件箱, 重新识别回访访客并关联此前的对话, 识别设备以防止滥用, 在浏览器中临时存储消息工具和访客数据',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => '在产品页和购物车页展示融资与分期付款提示（On-site Messaging）, 通过广告服务器将提示内容分发到页面源代码中预置的占位符',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => '重新识别并标识网站访客, 将网站上的行为归属到某个用户档案, 控制网站上注册表单的展示',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'LinkedIn 广告活动的转化跟踪, 对网站访客进行再定向, 分析网站受众（网站人口统计）',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => '为再定向而重新识别关联网站的访客, 控制弹出表单的展示，使其不会重复出现, 测量电子邮件营销活动中的打开和点击, 在关联网站上嵌入 Google 和 Facebook 的广告像素',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => '在网站上呈现交互式地图, 从提供方追加加载地图瓦片、字体和样式, 地图调用的计费与防护',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => '测量页面浏览量、访问量和会话, 通过访客 ID 识别回访的访客, 确定访问的来源（引荐来源、归因）, 可选的热图和 A/B 测试',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => '在自有服务器上测量页面浏览量、访问量和会话, 通过访客 ID 识别回访的访客, 确定访问的来源（引荐来源、归因）, 可选的热图和 A/B 测试',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => '在网站上分发并触发标签, 管理针对容器中所配置代码的同意决定',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => '测量网站上的广告活动和转化, 构建目标受众和再营销',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Microsoft Advertising 广告活动的转化跟踪, 构建再营销名单, 测量页面浏览量和自定义事件',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => '会话的录制与回放, 点击和滚动行为的热图, 将多次页面浏览合并为一次会话, 对用户行为的自动化分析',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => '处理由访客发起的付款, 在自有结账流程中嵌入银行卡输入框，使卡片数据不经过商店, 欺诈防范以及作为支付服务提供方的法定义务',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => '记录鼠标移动, 会话回放, 分析使用行为',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => '向嵌入的地图分发地图图块, 地图服务的运行与滥用防护',
    'Zahlungsabwicklung, Betrugsprävention'
        => '支付处理, 欺诈防范',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Pinterest 广告活动的转化跟踪, 构建目标受众和再营销, 将网站上的操作归属到此前看到的广告',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => '测量页面浏览量和事件, 重新识别访客并归属到会话, 分析来源和营销活动, 分析设备、浏览器和估算的位置, 电子商务和目标分析',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => '统计页面浏览量和访问量, 分析引荐来源, 分析浏览器、操作系统和设备类型, 精确到国家、地区和城市的粗略地理定位',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => '从浏览器收集并传输应用程序错误, 可选的会话记录（Session Replay），默认对文本、图片和输入内容进行遮蔽',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => '商店购物车和结账流程的运行, 会话以及语言或国家/地区的归属, 面向商店运营者的覆盖率测量, 用于购买界面的营销数据',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => '嵌入并播放单曲、专辑、播放列表和播客单集, 由 Spotify 及第三方收集这些用户的浏览行为信息, 使第三方能够在这些用户的浏览器中设置 Cookie',
    'Besucherzählung, Reichweitenmessung'
        => '访客计数, 覆盖率测量',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => '支付尝试的欺诈检测和风险评估, 提供 Stripe Elements 的支付输入框, 识别下单流程中的机器人和自动化行为',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => '测量并改进广告活动的效果, 在 TikTok 上进行广告个性化, 向 TikTok 传输网站事件',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => '在网站中嵌入表单和问卷, 收集回答并传输给表单运营方',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => '在网站上嵌入并播放视频, 保存观看者的播放器设置（音量、画质、字幕）, 由 Vimeo 对嵌入视频进行覆盖率测量, 播放器的机器人和滥用防护',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => '网站上的 A/B 测试和拆分 URL 测试, 跨多次访问分配并保持同一变体, 测量活动的目标和转化, 为分析而测量访客和会话, 管理与测量相关的反对与同意',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => '将购物车归属到某位访客, 检测购物车内容是否发生变化, 在相应小部件中显示最近浏览的商品, 记住已隐藏商店提示',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => '管理后台的登录和会话识别, 为后续评论保留评论数据, 记住管理后台的显示设置, 检查 WordPress 能否设置 Cookie, 保存所选语言',
    'Conversion-Messung, Retargeting'
        => '转化衡量, 再定向',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => '播放嵌入的视频, 安全, 出于广告目的重新识别观看者',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => '网站上用于客户支持的即时聊天和消息渠道, 在不同页面浏览和标签页之间重新识别访客, 保存小部件的状态和设置, 测量带有小部件的页面上的会话和事件',
];
