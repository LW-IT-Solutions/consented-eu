<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Russisch.
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
        => 'A/B-тесты и сплит-тесты URL на сайте',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Тарификация и защита обращений к картам',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Завершение входа через Shop; необходимый',
    'Abspielen eingebetteter Videos'
        => 'Воспроизведение встроенных видео',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Проведение платежа, инициированного посетителем',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Проведение платежей, если встреча платная',
    'Analyse des Nutzungsverhaltens'
        => 'Анализ поведения пользователей',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Аналитические данные интерфейсов покупки; статистика',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Аналитические данные магазина; поставщиком отнесено к статистике',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Данные для входа в административную область по адресу /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Вход в Shop Pay; необходимый',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Вход и распознавание сессии в административной области',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Анонимная статистика по сервису и другие технические цели, в том числе поддержка доступности',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Настройки отображения административной области для каждой учётной записи',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Запоминание настроек отображения административной области',
    'Anzeige von Bewertungen'
        => 'Отображение отзывов',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Отображение календаря бронирования и назначение встреч на сайте',
    'Anzeigen einer interaktiven Karte'
        => 'Отображение интерактивной карты',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'При значении 1 запрещает отправку событий UET в Microsoft',
    'Aufbau von Remarketing-Listen'
        => 'Формирование списков ремаркетинга',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Запись и воспроизведение сессий',
    'Aufzeichnung von Mausbewegungen'
        => 'Запись движений мыши',
    'Ausblenden des Shop-Hinweises merken'
        => 'Запоминание скрытия уведомления магазина',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Доставка и срабатывание тегов на сайте',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Доставка тегов на сайте и управление ими',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Доставка картографических тайлов для встроенных карт',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Доставка содержимого уведомления в подготовленные плейсхолдеры в исходном коде страницы через рекламный сервер',
    'Auslieferung personalisierter Werbung'
        => 'Показ персонализированной рекламы',
    'Auslieferung von Anzeigen'
        => 'Показ рекламных объявлений',
    'Auslieferung von Bibliotheken und Assets'
        => 'Доставка библиотек и ресурсов',
    'Auslieferung von Schriftarten'
        => 'Доставка шрифтов',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Выдача токена, который проверяет сервер сайта',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Управление показом форм регистрации на сайте',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Управление показом всплывающих форм, чтобы они не появлялись повторно',
    'Auswahl des Rechenzentrums'
        => 'Выбор центра обработки данных',
    'Auswertung der Verweisquellen'
        => 'Анализ источников переходов',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Анализ аудитории сайта (демография сайта)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Анализ браузера, операционной системы и типа устройства',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Анализ устройства, браузера и предполагаемого местоположения',
    'Auswertung von Herkunft und Kampagnen'
        => 'Анализ источников переходов и кампаний',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Аутентифицирует запросы конечного пользователя',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Ограничение частоты показов рекламы',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Подтверждает пройденную проверку, чтобы дальнейшие проверки в этой зоне не требовались',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Предоставление платёжных полей Stripe Elements',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Предоставление функций доступности',
    'Besucherzählung'
        => 'Подсчёт посетителей',
    'Betrieb des Chat-Widgets'
        => 'Работа виджета чата',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Работа картографических сервисов и защита от злоупотреблений',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Работа корзины и оформления заказа в магазине',
    'Betrugs- und Missbrauchserkennung'
        => 'Выявление мошенничества и злоупотреблений',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Выявление мошенничества при попытке платежа',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Выявление мошенничества и оценка риска попыток платежа',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Предотвращение мошенничества и выполнение установленных законом обязанностей поставщика платёжных услуг',
    'Betrugsprävention'
        => 'Предотвращение мошенничества',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Предотвращение мошенничества и оценка риска при попытке платежа',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Формирование псевдонимных профилей использования после получения согласия',
    'Bildung von Zielgruppen und Retargeting'
        => 'Формирование целевых аудиторий и ретаргетинг',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Привязывает сессию к тому же экземпляру AWS',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Защита плеера от ботов и злоупотреблений',
    'Bot-Abwehr fuer den Player'
        => 'Защита плеера от ботов',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Защита от ботов при доставке ресурсов HubSpot',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Идентификатор браузера, по которому LinkedIn различает устройства и выявляет злоупотребления',
    'Cloudflare-Bot-Abwehr'
        => 'Защита от ботов Cloudflare',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Обнаружение ботов Cloudflare для фильтрации трафика',
    'Cloudflare-Ratenbegrenzung'
        => 'Ограничение частоты запросов Cloudflare',
    'Conversion-Messung'
        => 'Измерение конверсий',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Отслеживание конверсий для рекламных кампаний LinkedIn',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Отслеживание конверсий для кампаний Microsoft Advertising',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Отслеживание конверсий для рекламных кампаний Pinterest',
    'Darstellung interaktiver Karten auf der Website'
        => 'Отображение интерактивных карт на сайте',
    'Deduplizieren von Kontakten'
        => 'Устранение дублирующихся контактов',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Служит для показа и измерения рекламы.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'Междоменный идентификатор посетителя; по данным поставщика — сторонний файл cookie, используется только при включённых в конфигурационном файле сторонних файлах cookie',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Сторонний идентификатор для повторного распознавания посетителей',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Сторонний идентификатор, передаваемый в Klaviyo',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Сторонний рекламный идентификатор для измерения кампаний и персонализации в TikTok',
    'E-Commerce- und Zielauswertung'
        => 'Анализ электронной торговли и целей',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Предзаполнение адреса электронной почты в форме комментариев',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Встраивание и воспроизведение треков, альбомов, плейлистов и выпусков подкастов',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Встраивание и воспроизведение видео на сайте',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Встраивание форм и опросов на сайт',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Встраивание полей для банковской карты в собственное оформление заказа, чтобы данные карты не проходили через магазин',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Встраивание размещённой у внешнего поставщика декларации о файлах cookie',
    'Einbettung von Audioinhalten'
        => 'Встраивание аудиоматериалов',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Подключение рекламных пикселей Google и Facebook на связанном сайте',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Показ уведомлений о финансировании и рассрочке на страницах товаров и корзины (On-site Messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Уникальный идентификатор при междоменном измерении (аккаунты с 14.06.2026)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Уникальный идентификатор при междоменном измерении (аккаунты до 14.06.2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Одноразовое значение для защиты формы отказа от CSRF',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Содержит идентификатор пользователя и время создания; согласно источнику, устанавливается во встроенном браузере Pinterest, а не на домене сайта',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Сбор и передача ответов оператору формы',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Фиксирует использование сайта в целях анализа.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Регистрация собственных событий, определённых оператором',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Регистрация и передача ошибок приложения из браузера',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Регистрация посетителей и просмотров страниц сайта для автоматизации маркетинга',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Измерение эффективности рекламного материала и расчёт комиссии',
    'Erhalt des Sitzungszustands'
        => 'Сохранение состояния сессии',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Распознавание устройства для защиты от злоупотреблений',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Распознавание и отклонение автоматизированных обращений к формам',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Распознавание ботов и автоматизированного поведения в процессе оформления заказа',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Определение того, изменилось ли содержимое корзины',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Определяет изменения содержимого корзины',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Распознаёт посетителей сайта, на котором встроен код Intercom',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Повторно распознаёт браузеры на сайтах Microsoft; по данным поставщика, используется также для рекламы, сторонний файл cookie',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Повторно распознаёт людей, которые пишут через инструмент чата',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Распознаёт устройство, с которого ведётся переписка',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Распознаёт отдельное устройство, взаимодействующее с мессенджером, для защиты от злоупотреблений',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Распознаёт конечного пользователя, который начинает переписку',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Распознаёт домен или поддомен, на котором встроен виджет чата',
    'Erkennt wiederkehrende Besucher'
        => 'Распознаёт вернувшихся посетителей',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Определяет, был ли браузер перезапущен',
    'Erkennung von Klickbetrug'
        => 'Выявление кликфрода',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Определяет уникальные обращения к сайту (аккаунты с 14.06.2026)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Определяет уникальные обращения к сайту (аккаунты до 14.06.2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Обеспечение возможности установки третьими лицами файлов cookie в браузере этих пользователей',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Обеспечивает возможность использования функций доступности',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Обеспечивает дополнительные функции сайта.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Идентификатор первой стороны, который повторно распознаёт посетителей и относит события к сайту',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Идентификатор посетителя первой стороны для отслеживания конверсий и ремаркетинга',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Идентификатор сессии первой стороны для сопоставления событий',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Идентификатор сессии первой стороны для каждого пикселя для измерения кампаний',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Идентификатор сессии первой стороны для измерения кампаний',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Рекламный идентификатор первой стороны для измерения кампаний и персонализации в TikTok',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Файл cookie первой стороны, который группирует действия посетителей, которых Pinterest не может сопоставить',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Файл cookie первой стороны, в котором хранятся хешированные данные клиентов, собранные через Automatic Enhanced Match',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Создаёт уникальный идентификатор для каждого посетителя (аккаунты с 14.06.2026)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Создаёт уникальный идентификатор для каждого посетителя (аккаунты до 14.06.2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Идентификатор устройства для анализа событий на страницах с виджетом',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Устанавливается при входе на странице, размещённой у HubSpot',
    'Gewaehlte Sprache speichern'
        => 'Сохранение выбранного языка',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Синхронизирует идентификатор MUID между доменами Microsoft; по данным поставщика — сторонний файл cookie',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Поддерживает синхронность сообщений между несколькими вкладками',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Хранит значение параметра pk_campaign',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Хранит значение параметра utm_campaign',
    'Haelt den Widerspruch gegen die Messung'
        => 'Хранит возражение против измерения',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Хранит время истечения срока действия _uetsid',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Хранит время истечения срока действия _uetvid',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Хранит тип источника трафика для Tag Manager',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Фиксирует идентичность посетителя, в том числе для устранения дублирующихся контактов',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Фиксирует решение посетителя относительно файлов cookie',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Сохраняет единообразие отображения виджета при переходе между страницами',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Фиксирует страницу входа; статистика',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Хранит согласие на измерение с помощью файлов cookie',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Хранит решение пользователя по категориям и поставщикам',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Поддерживает сессию вошедших пользователей и доступ к прежним перепискам',
    'Haelt die verweisende Adresse'
        => 'Хранит адрес источника перехода',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Фиксирует источник перехода; статистика',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Хранит собственные переменные сессии (помечено поставщиком как устаревшее)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Фиксирует, разрешено ли etracker устанавливать файлы cookie; при data-block-cookies устанавливается вызовом API',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Фиксирует, какие функциональные переключатели включил владелец видео',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Основной файл cookie для повторного распознавания посетителей',
    'Heatmaps'
        => 'Тепловые карты',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Тепловые карты кликов и прокрутки',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Хранит данные сессии для тепловых карт на время визита',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Хранит сведения о текущей сессии (аккаунты с 14.06.2026)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Хранит сведения о текущей сессии (аккаунты до 14.06.2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Хранит пользовательские переменные на время визита',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Хранит постоянные данные на уровне посетителя (аккаунты с 14.06.2026)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Хранит постоянные данные на уровне посетителя для анализа Insights (аккаунты до 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Фиксирует статус согласия посетителя (аккаунты с 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Фиксирует статус согласия посетителя (аккаунты до 14.06.2026)',
    'Hält den Sitzungszustand.'
        => 'Хранит состояние сессии.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Хранит идентификатор пользователя Clarity и настройки для этого сайта',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Хранит назначение варианта для A/B-тестов',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Временно фиксирует выбранную комбинацию (аккаунты с 14.06.2026)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Временно фиксирует выбранную комбинацию (аккаунты до 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Фиксирует выбранный вариант до выполнения перенаправления (аккаунты с 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Фиксирует выбранный вариант до выполнения перенаправления (аккаунты до 14.06.2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Фиксирует, по какой ссылке-источнику состоялся визит',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'В режиме Pre-Clearance: допуск для дальнейших проверок WAF в той же зоне',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Косвенный идентификатор участника для отслеживания конверсий, ретаргетинга и аналитики',
    'Inhalt des Warenkorbs; notwendig'
        => 'Содержимое корзины; необходимый',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Аналитические данные о покупателях в магазине; аналитика',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Уникальный идентификатор, привязанный к кампании (учётные записи с 14.06.2026)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Идентификатор первого контакта с Clarity на всех сайтах, использующих Clarity; по данным поставщика — сторонний файл cookie',
    'Kennzeichnet die laufende Sitzung'
        => 'Обозначает текущую сессию',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Сохранение данных комментария для последующих комментариев',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Единообразная выдача вариантов A/B-теста',
    'Lastverteilung und Routing'
        => 'Распределение нагрузки и маршрутизация',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Распределение нагрузки и маршрутизация challenge-запросов',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Сохраняет настройки учётной записи посетителя локально',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Выдаёт один и тот же вариант страницы A/B-теста',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Онлайн-чат и канал обмена сообщениями для поддержки на сайте',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Онлайн-чат и почтовый ящик поддержки на сайте',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Маркетинговые данные интерфейсов покупки; маркетинг',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Маркетинговые данные для интерфейсов покупки',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Сохранение настроек плеера зрителя (громкость, качество, субтитры)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Сохранение состояния и настроек виджета',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Запоминает закрытие баннера Global Privacy Control',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Запоминает закрытие информационного баннера',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Запоминает момент сопоставления с файлом cookie lms_analytics',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Запоминает момент последнего сопоставления идентификаторов, чтобы оно не повторялось',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Запоминает назначенный вариант (учётные записи с 14.06.2026)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Запоминает назначенный вариант, чтобы при повторном посещении он оставался тем же (учётные записи до 14.06.2026)',
    'Merkt einen Rabattcode; notwendig'
        => 'Запоминает код скидки; необходимый',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Запоминает возражение против измерения (учётные записи с 14.06.2026)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Запоминает возражение, действующее на нескольких сайтах (учётные записи до 14.06.2026)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Запоминает настройки плеера — громкость, качество и субтитры',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Запоминает настройку звуковых уведомлений',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Запоминает данное согласие на измерение',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Запоминает возражение против измерения',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Запоминает закрытые проактивные сообщения',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Запоминает, что посетитель закрыл подпись кнопки запуска',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Запоминает, открыт виджет или закрыт',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Запоминает, что посетитель не должен участвовать ни в одной кампании (учётные записи до 14.06.2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Запоминает, что посетитель исключён из кампании (учётные записи с 14.06.2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Запоминает, что посетитель исключён из кампании (учётные записи до 14.06.2026)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Запоминает, что уведомление о согласии было закрыто',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Запоминает, что уведомление магазина было закрыто',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Запоминает, что вопрос о файлах cookie не должен задаваться повторно',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Запоминает, что тег уже был активирован',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Запоминает, измеряется ли для этого посетителя глубина прокрутки',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Запоминает, открыто ли окно чата',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Запоминает, передаётся ли идентификатор MUID рекламному идентификатору; по данным поставщика всегда 0, сторонний файл cookie',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Измерение открытий и кликов в email-кампаниях',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Измерение сессий и событий на страницах с виджетом',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Измерение сессий и определение источника посещения',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Измерение доступности сервиса компанией Google',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Измерение времени загрузки и ключевых показателей страницы (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Измерение глубины прокрутки и событий клика',
    'Messung der Werbewirkung'
        => 'Измерение эффективности рекламы',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Измерение поведения при использовании сайта',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Измерение и персонализация объявлений в рекламной сети TikTok Pangle',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Измерение и улучшение результативности рекламных кампаний',
    'Messung von Auslieferungen und Klicks'
        => 'Измерение показов и кликов',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Измерение числа посетителей и сессий для аналитики',
    'Messung von Conversions'
        => 'Измерение конверсий',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Измерение просмотров страниц и посещений',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Измерение просмотров страниц и событий',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Измерение просмотров страниц и поведения при использовании',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Измерение просмотров страниц и пользовательских событий',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Измерение просмотров страниц, посещений и сессий',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Измерение просмотров страниц, посещений и сессий на собственном сервере',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Измерение рекламных кампаний и конверсий на сайте',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Измерение целей и конверсий кампании',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Подгрузка картографических тайлов, шрифтов и стилей от поставщика',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Предзаполнение имени из формы комментариев',
    'Nutzer-ID'
        => 'Идентификатор пользователя',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Сопоставляет корзину с правильной страной; необходимый',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Сопоставляет корзину в базе данных с нужным клиентом',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Относит действия в рамках визита к одной сессии',
    'Personalisierung der Werbung auf TikTok'
        => 'Персонализация рекламы в TikTok',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Проверка, может ли WordPress устанавливать файлы cookie',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Проверяет, поддерживает ли браузер файлы cookie; необходимый',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Проверяет, может ли WordPress устанавливать файлы cookie',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Контрольное значение пароля магазина; необходимый',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Проверочный файл cookie поставщика (учётные записи до 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Проверяет, принимает ли браузер файлы cookie (учётные записи с 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Проверяет, принимает ли браузер файлы cookie (учётные записи до 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Проверяет, принимает ли браузер файлы cookie (по данным поставщика — только в Internet Explorer)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Ограничение частоты запросов у CDN-провайдера HubSpot',
    'Reichweiten- und Nutzungsmessung'
        => 'Измерение охвата и использования',
    'Reichweitenmessung'
        => 'Измерение охвата',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Измерение охвата встроенных видео компанией Vimeo',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Измерение охвата для оператора магазина',
    'Remarketing und Zielgruppenbildung'
        => 'Ремаркетинг и формирование целевых аудиторий',
    'Retargeting'
        => 'Ретаргетинг',
    'Retargeting von Website-Besuchern'
        => 'Ретаргетинг посетителей сайта',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Анализ риска для различения человека и бота',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Сводный файл cookie, по данным поставщика создаётся только в браузере Safari (учётные записи с 14.06.2026)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Сводный файл cookie, по данным поставщика создаётся только в браузере Safari (учётные записи до 14.06.2026)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Сбор сведений о поведении этих пользователей в интернете компанией Spotify и третьими лицами',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Переключатель, который оператор сайта устанавливает сам, чтобы запретить отслеживание Klaviyo',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Защита входа участников от подделки',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Защита форм от автоматизированных злоупотреблений',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Защита от автоматизированных запросов (спам, credential stuffing)',
    'Sicherheit'
        => 'Безопасность',
    'Sicherheitsfunktionen'
        => 'Функции безопасности',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Функции безопасности, если включена дополнительная функция User Journeys',
    'Sitzung'
        => 'Сессия',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Определение сессии, а также языка или страны',
    'Sitzungsaufzeichnung'
        => 'Запись сессии',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Идентификатор сессии для анализа событий на страницах с виджетом',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Идентификатор сессии для статистики магазина; аналитика',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Ключ сессии сервиса Answer Bot',
    'Sitzungswiedergabe'
        => 'Воспроизведение сессии',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Сохраняет токен аутентификации после входа',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Сохраняет закодированный пароль для видео, защищённых паролем',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Сохраняет ключ выбранного языка',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Сохраняет выбор посетителя в отношении конфиденциальности; необходимый',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Сохраняет решение посетителя о согласии',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Сохраняет идентификатор устройства посетителя для аутентификации в чат-виджете',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Сохраняет идентификатор пользователя, зарегистрированного на вебинар',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Сохраняет идентификатор клика fbclid, чтобы событие на сайте можно было отнести к объявлению',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Сохраняет идентификатор пользователя из регистрационной формы, предшествующей видео',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Сохраняет идентификатор клика TikTok для отнесения конверсий',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Сохраняет уникальный идентификатор посетителя для повторного распознавания',
    'Speichert die zugestimmten Kategorien'
        => 'Сохраняет категории, на которые дано согласие',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Наполняет виджет недавно просмотренных товаров',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Определяет, обновляется ли идентификатор MUID; по данным поставщика — сторонний файл cookie',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Технически необходимо для работы и безопасности сайта.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Содержит данные сессии и оформления заказа магазина; поставщик относит его к необходимым',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Обеспечивает функцию возражения (opt-out)',
    'Transaktionssicherheit'
        => 'Безопасность транзакций',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Обеспечивает анализ риска reCAPTCHA.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Передача событий сайта в TikTok',
    'Umfragen'
        => 'Опросы',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Запрещает передачу данных в HubSpot',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Подавляет приветственное сообщение чата после его закрытия',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Различает браузеры, которые обращаются к сайтам Microsoft; при наличии согласия также используется для рекламы',
    'Unterscheidet einzelne Nutzer.'
        => 'Различает отдельных пользователей.',
    'Unterscheidung einzelner Nutzer'
        => 'Различение отдельных пользователей',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Различение человека и бота в формах и при входе',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Объединяет несколько просмотров страниц в одну запись сессии',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Предотвращает постоянный показ баннера в строгом режиме',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Распределение сигналов согласия по тегам Google',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Управление решением о согласии для тегов, настроенных в контейнере',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Управление возражением против измерения',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Управление возражением и согласием в отношении измерения',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Отнесён Google к категориям Аналитика и Реклама.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Отнесено Google к категориям «Аналитика», «Реклама» и «Безопасность».',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Отнесён Google к категориям Функциональность, Реклама и Безопасность.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Отнесено Google к категориям «Безопасность» и «Функциональность».',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Отнесено Google к категориям «Безопасность» и «Реклама».',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Отнесено Google к категориям «Безопасность», «Аналитика», «Функциональность» и «Реклама».',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Отнесён Google к категориям Безопасность, Функциональность и Реклама.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Отнесено Google к категориям «Реклама» и «Безопасность».',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Отнесено Google к категории «Аналитика»; более точную цель Google не указывает.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Отнесено Google к категории «Функциональность».',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Отнесено Google к категории «Безопасность».',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Отнесено Google к категории «Реклама».',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Microsoft называет его в числе файлов cookie, которые нельзя устанавливать без согласия; отдельного описания цели Microsoft не приводит',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Идентификатор, создаваемый Vimeo для измерения охвата',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Валюта корзины после завершения оформления заказа; необходимый',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Вероятностное сопоставление браузера с конкретным лицом',
    'Warenkorb einer Besucherin zuordnen'
        => 'Сопоставление корзины с посетителем',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Предзаполнение адреса сайта из формы комментариев',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Распознавание зрителя в рекламных целях',
    'Werbepersonalisierung'
        => 'Персонализация рекламы',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Как _pin_unauth, но в виде стороннего файла cookie',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Распознавание посетителя в рамках процесса бронирования',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Распознавание посетителя между просмотрами страниц и вкладками',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Распознавание и идентификация посетителей сайта',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Распознавание посетителей на протяжении нескольких посещений',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Распознавание посетителей связанных сайтов для ретаргетинга',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Распознавание вернувшихся посетителей и сопоставление с прежними диалогами',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Распознавание посетителя и сохранение его характеристик',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Распознавание браузера по идентификатору Criteo',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Распознавание пользователя; только с согласия, по умолчанию заблокировано',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Распознавание браузера при последующих посещениях после получения согласия',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Распознавание посетителей и отнесение к сессиям',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'Распознавание участников LinkedIn за пределами LinkedIn в целях рекламы',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Распознавание пользователей после получения согласия',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Повторное распознавание вернувшихся посетителей по идентификатору посетителя',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Устанавливается, когда сработала цель кампании (учётные записи с 14.06.2026)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Устанавливается, когда сработала цель кампании (учётные записи до 14.06.2026)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Устанавливается, когда человек посещает сайт со встроенным тегом Pinterest',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Устанавливается, когда сопоставление удаётся без имеющихся файлов cookie, например через Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Устанавливается JavaScript-тегом на основе данных, которые Pinterest передаёт вместе с рекламным трафиком',
    'Zaehlt und begrenzt Sitzungen'
        => 'Подсчитывает и ограничивает число сессий',
    'Zahlungsabwicklung'
        => 'Обработка платежей',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Показывает, продолжается ли сессия или начата заново',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Сообщает интерфейсу, выполнен ли вход и под какой учётной записью',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Случайный идентификатор браузера, который относит пиксельные события сайта к одному браузеру',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Отображение недавно просмотренных товаров в соответствующем виджете',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Отнесение поведения на сайте к профилю',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Определение источника визита (реферер, атрибуция)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Сопоставление посетителя с контактом в учётной записи Brevo по адресу электронной почты',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Отнесение транзакций, таких как лиды и продажи, к конкретному издателю',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Отнесение действий на сайте к ранее показанным объявлениям',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Объединение нескольких просмотров страниц в одну сессию',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Дополнительные данные к зафиксированным событиям истории посещения',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Назначение и сохранение варианта на протяжении нескольких посещений',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Промежуточное хранилище для событий, определяемых через CSS-селекторы',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Промежуточное хранилище для данных мессенджера и посетителя в хранилище браузера',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Промежуточное хранилище для записей Tag Manager',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Промежуточное хранилище для измерения глубины прокрутки',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Промежуточное хранилище для переменных Tag Manager',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Промежуточное хранилище для настроек виджета, чтобы избежать повторных запросов к серверу',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Промежуточное сохранение данных мессенджера и посетителя в браузере',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Подсчитывает сессии, созданные для посетителя (учётные записи с 14.06.2026)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Подсчитывает, сколько раз браузер был закрыт и снова открыт в ходе измерения (учётные записи до 14.06.2026)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Подсчёт просмотров страниц и посещений',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'автоматизированный анализ поведения пользователей',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'приблизительное географическое определение до страны, региона и города',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'опционально запись сессии (Session Replay), по умолчанию с маскированием текстов, изображений и вводимых данных',
    'optional Heatmaps und A/B-Tests'
        => 'опционально тепловые карты и A/B-тесты',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Передаёт источник перехода при Split-URL-тестах (учётные записи с 14.06.2026)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Передаёт источник перехода при Split-URL-тестах (учётные записи до 14.06.2026)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Отнесение транзакций, таких как лиды и продажи, к конкретному издателю, Измерение эффективности рекламного материала и расчёт комиссии',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Регистрация посетителей и просмотров страниц сайта для автоматизации маркетинга, Сопоставление посетителя с контактом в учётной записи Brevo по адресу электронной почты, Регистрация собственных событий, определённых оператором',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Отображение календаря бронирования и назначение встреч на сайте, Распознавание посетителя в рамках процесса бронирования, Проведение платежей, если встреча платная',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Распознавание и отклонение автоматизированных обращений к формам, Выдача токена, который проверяет сервер сайта, В режиме Pre-Clearance: допуск для дальнейших проверок WAF в той же зоне',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Измерение просмотров страниц и посещений, Измерение времени загрузки и ключевых показателей страницы (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Показ персонализированной рекламы, Измерение эффективности рекламы, Распознавание браузера по идентификатору Criteo',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Измерение поведения при использовании сайта, Формирование псевдонимных профилей использования после получения согласия, Распознавание браузера при последующих посещениях после получения согласия',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Измерение просмотров страниц и поведения при использовании, Измерение глубины прокрутки и событий клика, Распознавание пользователей после получения согласия, Управление возражением против измерения',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Различение человека и бота в формах и при входе, Защита от автоматизированных запросов (спам, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Измерение конверсий, Ремаркетинг и формирование целевых аудиторий, Ограничение частоты показов рекламы, Выявление кликфрода',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Показ рекламных объявлений, Ограничение частоты показов рекламы, Выявление мошенничества и злоупотреблений, Измерение показов и кликов',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Различение отдельных пользователей, Сохранение состояния сессии, Измерение охвата и использования',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Отображение интерактивной карты, Измерение доступности сервиса компанией Google',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Анализ риска для различения человека и бота, Защита форм от автоматизированных злоупотреблений',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Доставка тегов на сайте и управление ими, Распределение сигналов согласия по тегам Google',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Различение человека и бота в формах и при входе, Распределение нагрузки и маршрутизация challenge-запросов, Предоставление функций доступности',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Тепловые карты, Запись сессии, Опросы',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Распознавание посетителей на протяжении нескольких посещений, Измерение сессий и определение источника посещения, Устранение дублирующихся контактов, Работа виджета чата, Единообразная выдача вариантов A/B-теста',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Онлайн-чат и почтовый ящик поддержки на сайте, Распознавание вернувшихся посетителей и сопоставление с прежними диалогами, Распознавание устройства для защиты от злоупотреблений, Промежуточное сохранение данных мессенджера и посетителя в браузере',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Показ уведомлений о финансировании и рассрочке на страницах товаров и корзины (On-site Messaging), Доставка содержимого уведомления в подготовленные плейсхолдеры в исходном коде страницы через рекламный сервер',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Распознавание и идентификация посетителей сайта, Отнесение поведения на сайте к профилю, Управление показом форм регистрации на сайте',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Отслеживание конверсий для рекламных кампаний LinkedIn, Ретаргетинг посетителей сайта, Анализ аудитории сайта (демография сайта)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Распознавание посетителей связанных сайтов для ретаргетинга, Управление показом всплывающих форм, чтобы они не появлялись повторно, Измерение открытий и кликов в email-кампаниях, Подключение рекламных пикселей Google и Facebook на связанном сайте',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Отображение интерактивных карт на сайте, Подгрузка картографических тайлов, шрифтов и стилей от поставщика, Тарификация и защита обращений к картам',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Измерение просмотров страниц, посещений и сессий, Повторное распознавание вернувшихся посетителей по идентификатору посетителя, Определение источника визита (реферер, атрибуция), опционально тепловые карты и A/B-тесты',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Измерение просмотров страниц, посещений и сессий на собственном сервере, Повторное распознавание вернувшихся посетителей по идентификатору посетителя, Определение источника визита (реферер, атрибуция), опционально тепловые карты и A/B-тесты',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Доставка и срабатывание тегов на сайте, Управление решением о согласии для тегов, настроенных в контейнере',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Измерение рекламных кампаний и конверсий на сайте, Формирование целевых аудиторий и ретаргетинг',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Отслеживание конверсий для кампаний Microsoft Advertising, Формирование списков ремаркетинга, Измерение просмотров страниц и пользовательских событий',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Запись и воспроизведение сессий, Тепловые карты кликов и прокрутки, Объединение нескольких просмотров страниц в одну сессию, автоматизированный анализ поведения пользователей',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Проведение платежа, инициированного посетителем, Встраивание полей для банковской карты в собственное оформление заказа, чтобы данные карты не проходили через магазин, Предотвращение мошенничества и выполнение установленных законом обязанностей поставщика платёжных услуг',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Запись движений мыши, Воспроизведение сессии, Анализ поведения пользователей',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Доставка картографических тайлов для встроенных карт, Работа картографических сервисов и защита от злоупотреблений',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Обработка платежей, Предотвращение мошенничества',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Отслеживание конверсий для рекламных кампаний Pinterest, Формирование целевых аудиторий и ретаргетинг, Отнесение действий на сайте к ранее показанным объявлениям',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Измерение просмотров страниц и событий, Распознавание посетителей и отнесение к сессиям, Анализ источников переходов и кампаний, Анализ устройства, браузера и предполагаемого местоположения, Анализ электронной торговли и целей',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Подсчёт просмотров страниц и посещений, Анализ источников переходов, Анализ браузера, операционной системы и типа устройства, приблизительное географическое определение до страны, региона и города',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Регистрация и передача ошибок приложения из браузера, опционально запись сессии (Session Replay), по умолчанию с маскированием текстов, изображений и вводимых данных',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Работа корзины и оформления заказа в магазине, Определение сессии, а также языка или страны, Измерение охвата для оператора магазина, Маркетинговые данные для интерфейсов покупки',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Встраивание и воспроизведение треков, альбомов, плейлистов и выпусков подкастов, Сбор сведений о поведении этих пользователей в интернете компанией Spotify и третьими лицами, Обеспечение возможности установки третьими лицами файлов cookie в браузере этих пользователей',
    'Besucherzählung, Reichweitenmessung'
        => 'Подсчёт посетителей, Измерение охвата',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Выявление мошенничества и оценка риска попыток платежа, Предоставление платёжных полей Stripe Elements, Распознавание ботов и автоматизированного поведения в процессе оформления заказа',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Измерение и улучшение результативности рекламных кампаний, Персонализация рекламы в TikTok, Передача событий сайта в TikTok',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Встраивание форм и опросов на сайт, Сбор и передача ответов оператору формы',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Встраивание и воспроизведение видео на сайте, Сохранение настроек плеера зрителя (громкость, качество, субтитры), Измерение охвата встроенных видео компанией Vimeo, Защита плеера от ботов и злоупотреблений',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'A/B-тесты и сплит-тесты URL на сайте, Назначение и сохранение варианта на протяжении нескольких посещений, Измерение целей и конверсий кампании, Измерение числа посетителей и сессий для аналитики, Управление возражением и согласием в отношении измерения',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Сопоставление корзины с посетителем, Определение того, изменилось ли содержимое корзины, Отображение недавно просмотренных товаров в соответствующем виджете, Запоминание скрытия уведомления магазина',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Вход и распознавание сессии в административной области, Сохранение данных комментария для последующих комментариев, Запоминание настроек отображения административной области, Проверка, может ли WordPress устанавливать файлы cookie, Сохранение выбранного языка',
    'Conversion-Messung, Retargeting'
        => 'Измерение конверсий, Ретаргетинг',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Воспроизведение встроенных видео, Безопасность, Распознавание зрителя в рекламных целях',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Онлайн-чат и канал обмена сообщениями для поддержки на сайте, Распознавание посетителя между просмотрами страниц и вкладками, Сохранение состояния и настроек виджета, Измерение сессий и событий на страницах с виджетом',
];
