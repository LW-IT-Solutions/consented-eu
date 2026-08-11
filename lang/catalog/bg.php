<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Bulgarisch.
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
        => 'A/B тестове и Split-URL тестове на сайта',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Отчитане и защита на заявките към картата',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Завършване на вход чрез Shop; необходимо',
    'Abspielen eingebetteter Videos'
        => 'Възпроизвеждане на вградени видеоклипове',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Обработка на плащане, инициирано от посетителя',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Обработка на плащания, когато срещата е платена',
    'Analyse des Nutzungsverhaltens'
        => 'Анализ на поведението при използване',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Аналитични данни за интерфейсите за покупка; Статистика',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Аналитични данни на магазина; посочени от доставчика като Статистика',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Данни за вход в администраторската част на /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Вход в Shop Pay; необходимо',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Вход и разпознаване на сесията в администраторската част',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Анонимна статистика за услугата и други технически цели, включително подпомагане на достъпността',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Настройки на изгледа на администраторската част за всеки акаунт',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Запомняне на настройките на изгледа на администраторската част',
    'Anzeige von Bewertungen'
        => 'Показване на отзиви',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Показване на календара за резервации и уговаряне на срещи на сайта',
    'Anzeigen einer interaktiven Karte'
        => 'Показване на интерактивна карта',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'При стойност 1 спира изпращането на UET събития към Microsoft',
    'Aufbau von Remarketing-Listen'
        => 'Изграждане на списъци за ремаркетинг',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Записване и възпроизвеждане на сесии',
    'Aufzeichnung von Mausbewegungen'
        => 'Записване на движенията на мишката',
    'Ausblenden des Shop-Hinweises merken'
        => 'Запомняне на скриването на съобщението на магазина',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Доставяне и задействане на тагове на сайта',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Доставяне и управление на тагове на сайта',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Доставяне на картови плочки към вградени карти',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Доставяне на съдържанието на съобщенията в подготвени контейнери в изходния код на страницата чрез Ad-Server',
    'Auslieferung personalisierter Werbung'
        => 'Доставяне на персонализирана реклама',
    'Auslieferung von Anzeigen'
        => 'Доставяне на реклами',
    'Auslieferung von Bibliotheken und Assets'
        => 'Доставяне на библиотеки и ресурси',
    'Auslieferung von Schriftarten'
        => 'Доставяне на шрифтове',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Издаване на токен, който сървърът на сайта проверява',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Управление на показването на формуляри за регистрация на сайта',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Управление на изскачащите формуляри, за да не се появяват повторно',
    'Auswahl des Rechenzentrums'
        => 'Избор на центъра за данни',
    'Auswertung der Verweisquellen'
        => 'Анализ на източниците на препращане',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Анализ на аудиторията на сайта (демография на сайта)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Анализ на браузър, операционна система и тип устройство',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Анализ на устройство, браузър и приблизително местоположение',
    'Auswertung von Herkunft und Kampagnen'
        => 'Анализ на произхода и кампаниите',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Удостоверява заявките на крайния потребител',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Ограничаване на честотата на показване',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Удостоверява успешно преминала проверка, за да отпаднат следващи проверки (challenges) в зоната',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Предоставяне на полетата за плащане на Stripe Elements',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Осигуряване на достъпността',
    'Besucherzählung'
        => 'Броене на посетителите',
    'Betrieb des Chat-Widgets'
        => 'Работа на чат уиджета',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Работа и защита от злоупотреби на картографските услуги',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Работа на количката и процеса на плащане в магазин',
    'Betrugs- und Missbrauchserkennung'
        => 'Разпознаване на измами и злоупотреби',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Разпознаване на измами при опит за плащане',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Разпознаване на измами и оценка на риска при опити за плащане',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Предотвратяване на измами и законови задължения като доставчик на платежни услуги',
    'Betrugsprävention'
        => 'Предотвратяване на измами',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Предотвратяване на измами и оценка на риска при опит за плащане',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Изграждане на псевдонимни профили на използване след съгласие',
    'Bildung von Zielgruppen und Retargeting'
        => 'Формиране на целеви групи и ретаргетинг',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Обвързва сесията с една и съща инстанция на AWS',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Защита на плейъра от ботове и злоупотреби',
    'Bot-Abwehr fuer den Player'
        => 'Защита на плейъра от ботове',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Защита от ботове при доставянето на ресурсите на HubSpot',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Идентификатор на браузъра, с който LinkedIn различава устройства и разпознава злоупотреби',
    'Cloudflare-Bot-Abwehr'
        => 'Защита от ботове на Cloudflare',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Разпознаване на ботове от Cloudflare за филтриране на трафика',
    'Cloudflare-Ratenbegrenzung'
        => 'Ограничаване на честотата на заявките от Cloudflare',
    'Conversion-Messung'
        => 'Измерване на конверсии',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Проследяване на конверсии за рекламни кампании в LinkedIn',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Проследяване на конверсии за кампании в Microsoft Advertising',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Проследяване на конверсии за рекламни кампании в Pinterest',
    'Darstellung interaktiver Karten auf der Website'
        => 'Показване на интерактивни карти на сайта',
    'Deduplizieren von Kontakten'
        => 'Премахване на дублиращи се контакти',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Служи за показване и измерване на реклама.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'Идентификатор на посетителя през различни домейни; според доставчика бисквитка на трета страна, използва се само когато в конфигурационния файл са активирани бисквитки на трети страни',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Идентификатор на трета страна за разпознаване на посетители',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Идентификатор на трета страна, който се предава на Klaviyo',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Рекламен идентификатор на трета страна за измерване на кампании и за персонализация в TikTok',
    'E-Commerce- und Zielauswertung'
        => 'Анализ на електронната търговия и на целите',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Предварително попълване на имейл адреса от формуляра за коментари',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Вграждане и възпроизвеждане на песни, албуми, плейлисти и епизоди на подкасти',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Вграждане и възпроизвеждане на видеоклипове на сайта',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Вграждане на формуляри и анкети в сайта',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Вграждане на полетата за карта в собствения процес на плащане, така че данните на картата да не преминават през магазина',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Вграждане на външно поддържана декларация за бисквитките',
    'Einbettung von Audioinhalten'
        => 'Вграждане на аудиосъдържание',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Вграждане на рекламни пиксели на Google и Facebook на свързания сайт',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Показване на съобщения за финансиране и плащане на вноски на страниците на продуктите и количката (On-site Messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Уникален идентификатор при измерване през различни домейни (акаунти от 14.06.2026)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Уникален идентификатор при измерване през различни домейни (акаунти преди 14.06.2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Еднократна стойност срещу CSRF във формуляра за opt-out',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Съдържа идентификатор на потребителя и момента на създаване; според източника се задава в браузъра в приложението на Pinterest, а не в домейна на сайта',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Събиране и предаване на отговорите към оператора на формуляра',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Регистрира използването на сайта за целите на анализа.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Регистриране на собствени, дефинирани от оператора събития',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Регистриране и предаване на грешки на приложението от браузъра',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Регистриране на посетители и показвания на страници на сайта за маркетингова автоматизация',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Измерване на резултата от рекламно средство и отчитане на комисионата',
    'Erhalt des Sitzungszustands'
        => 'Запазване на състоянието на сесията',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Разпознаване на устройството за защита от злоупотреби',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Разпознаване и отхвърляне на автоматизиран достъп до формуляри',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Разпознаване на ботове и автоматизирано поведение в процеса на поръчка',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Разпознаване дали съдържанието на количката се е променило',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Разпознава промени в съдържанието на количката',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Разпознава посетителите на сайта, в който е вграден кодът на Intercom',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Разпознава браузъри в сайтовете на Microsoft; според доставчика се използва и за реклама, бисквитка на трета страна',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Разпознава хората, които пишат чрез инструмента за чат',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Разпознава устройството, от което започва разговорът',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Разпознава отделното устройство, което взаимодейства с Messenger, за защита от злоупотреби',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Разпознава крайния потребител, който започва разговора',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Разпознава домейна или поддомейна, в който е вграден чат уиджетът',
    'Erkennt wiederkehrende Besucher'
        => 'Разпознава завръщащи се посетители',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Разпознава дали браузърът е бил рестартиран',
    'Erkennung von Klickbetrug'
        => 'Разпознаване на измами с кликове',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Определя уникалните посещения на сайта (акаунти от 14.06.2026)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Определя уникалните посещения на сайта (акаунти преди 14.06.2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Даване на възможност трети страни да поставят бисквитки в браузъра на тези потребители',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Позволява използването на достъпността',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Позволява допълнителни функции на сайта.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Идентификатор на първа страна, който разпознава посетители и свързва събития със сайта',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Идентификатор на посетител от първа страна за проследяване на конверсии и ремаркетинг',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Идентификатор на сесия от първа страна за свързването на събития',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Идентификатор на сесия от първа страна за всеки пиксел за измерване на кампании',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Идентификатор на сесия от първа страна за измерване на кампании',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Рекламен идентификатор от първа страна за измерване на кампании и за персонализация в TikTok',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Бисквитка от първа страна, която групира действията на посетители, които Pinterest не може да съотнесе',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Бисквитка от първа страна, която съхранява хешираните клиентски данни, събрани чрез Automatic Enhanced Match',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Създава уникален идентификатор за всеки посетител (акаунти от 14.06.2026)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Създава уникален идентификатор за всеки посетител (акаунти преди 14.06.2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Идентификатор на устройството за анализ на събития на страници с уиджет',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Задава се при вход в страница, хоствана от HubSpot',
    'Gewaehlte Sprache speichern'
        => 'Запазване на избрания език',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Синхронизира идентификатора MUID между домейните на Microsoft; според доставчика бисквитка на трета страна',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Поддържа съобщенията синхронизирани в няколко раздела',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Съхранява стойността на параметъра pk_campaign',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Съхранява стойността на параметъра utm_campaign',
    'Haelt den Widerspruch gegen die Messung'
        => 'Съхранява възражението срещу измерването',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Съхранява времето на изтичане на _uetsid',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Съхранява времето на изтичане на _uetvid',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Съхранява вида на източника на трафик за Tag Manager',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Записва идентичността на посетителя, включително за премахване на дублиращи се контакти',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Записва решението на посетителя относно бисквитките',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Поддържа изгледа на уиджета последователен при смяна на страницата',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Записва входната страница; Статистика',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Съхранява съгласието за измерване с бисквитки',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Съхранява решението на потребителя относно категориите и доставчиците',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Поддържа сесията на влезлите потребители и достъпа до предишни разговори',
    'Haelt die verweisende Adresse'
        => 'Съхранява препращащия адрес',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Записва препращащия източник; Статистика',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Съхранява собствени променливи на сесията (според доставчика остаряло)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Записва дали etracker може да поставя бисквитки; задава се при data-block-cookies чрез извикване на API',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Записва кои функционални превключватели е активирал собственикът на видеото',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Основна бисквитка за разпознаване на посетители',
    'Heatmaps'
        => 'Heatmaps',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Heatmaps на кликове и поведение при скролиране',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Съхранява данните за сесията на heatmap за времето на посещението',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Съхранява информация за текущата сесия (акаунти от 14.06.2026)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Съхранява информация за текущата сесия (акаунти преди 14.06.2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Съхранява потребителски дефинирани променливи за времето на посещението',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Съхранява постоянни данни на ниво посетител (акаунти от 14.06.2026)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Съхранява постоянни данни на ниво посетител за анализа Insights (акаунти преди 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Записва статуса на съгласието на посетителя (акаунти от 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Записва статуса на съгласието на посетителя (акаунти преди 14.06.2026)',
    'Hält den Sitzungszustand.'
        => 'Съхранява състоянието на сесията.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Съхранява идентификатора на потребителя в Clarity и настройките за този сайт',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Съхранява разпределението на вариантите за A/B тестове',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Временно записва избраната комбинация (акаунти от 14.06.2026)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Временно записва избраната комбинация (акаунти преди 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Записва избрания вариант, преди да се извърши пренасочването (акаунти от 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Записва избрания вариант, преди да се извърши пренасочването (акаунти преди 14.06.2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Записва чрез коя препращаща връзка е дошло посещението',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'В режим Pre-Clearance: разрешение за следващи WAF проверки в същата зона',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Непряк идентификатор на член за проследяване на конверсии, ретаргетиране и анализ',
    'Inhalt des Warenkorbs; notwendig'
        => 'Съдържание на количката за пазаруване; необходимо',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Аналитични данни за купувачите в магазина; анализ',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Уникален идентификатор, свързан с кампанията (акаунти от 14.06.2026 г.)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Идентификатор на първия контакт с Clarity през всички сайтове с Clarity; според доставчика бисквитка на трета страна',
    'Kennzeichnet die laufende Sitzung'
        => 'Обозначава текущата сесия',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Запазване на данните от коментара за следващи коментари',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Последователно показване на варианти при A/B тестове',
    'Lastverteilung und Routing'
        => 'Разпределяне на натоварването и маршрутизиране',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Разпределяне на натоварването и маршрутизиране на заявките за проверка',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Съхранява локално настройките на акаунта на посетителя',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Доставя един и същ вариант на страница от A/B тест',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Чат на живо и канал за съобщения за поддръжка на сайта',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Чат на живо и пощенска кутия за поддръжка на сайта',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Маркетингови данни на интерфейсите за покупка; маркетинг',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Маркетингови данни за интерфейсите за покупка',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Запаметяване на настройките на плейъра на зрителя (сила на звука, качество, субтитри)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Запаметяване на състоянието и настройките на уиджета',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Запаметява затварянето на банера Global Privacy Control',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Запаметява затварянето на информационния банер',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Запаметява момента на съгласуването с бисквитката lms_analytics',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Запаметява момента на последното съгласуване на идентификатори, за да не се повтаря съгласуването',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Запаметява присвоения вариант (акаунти от 14.06.2026 г.)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Запаметява присвоения вариант, за да остане същият при повторно посещение (акаунти преди 14.06.2026 г.)',
    'Merkt einen Rabattcode; notwendig'
        => 'Запаметява код за отстъпка; необходимо',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Запаметява възражение срещу измерването (акаунти от 14.06.2026 г.)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Запаметява възражение, валидно за всички сайтове (акаунти преди 14.06.2026 г.)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Запаметява настройките на плейъра като сила на звука, качество и субтитри',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Запаметява настройката за звуковите известия',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Запомня дадено съгласие за измерването',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Запомня възражение срещу измерването',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Запаметява затворените проактивни съобщения',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Запаметява, че посетителят е затворил надписа на бутона за стартиране',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Запаметява дали уиджетът е отворен или затворен',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Запаметява, че посетителят не трябва да участва в никаква кампания (акаунти преди 14.06.2026 г.)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Запаметява, че посетителят е изключен от кампанията (акаунти от 14.06.2026 г.)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Запаметява, че посетителят е изключен от кампанията (акаунти преди 14.06.2026 г.)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Запаметява, че съобщението за съгласие е затворено',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Запаметява, че съобщението на магазина е затворено',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Запаметява, че въпросът за бисквитките не бива да се задава отново',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Запаметява, че даден таг вече е задействан',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Запаметява дали при този посетител се измерва дълбочината на превъртане',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Запаметява дали прозорецът на чата е отворен',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Запаметява дали идентификаторът MUID се предава на рекламен идентификатор; според доставчика винаги 0, бисквитка на трета страна',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Измерване на отваряния и кликвания в имейл кампании',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Измерване на сесии и събития на страници с уиджет',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Измерване на сесии и определяне на източника на посещението',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Измерване на достъпността на услугата от Google',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Измерване на времето за зареждане и основните показатели на страницата (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Измерване на дълбочината на превъртане и на събитията при кликване',
    'Messung der Werbewirkung'
        => 'Измерване на въздействието на рекламата',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Измерване на поведението при използване на сайта',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Измерване и персонализиране на реклами в рекламната мрежа TikTok Pangle',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Измерване и подобряване на ефективността на рекламните кампании',
    'Messung von Auslieferungen und Klicks'
        => 'Измерване на показванията и кликванията',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Измерване на посетители и сесии за целите на анализа',
    'Messung von Conversions'
        => 'Измерване на конверсии',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Измерване на преглеждания на страници и посещения',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Измерване на преглеждания на страници и събития',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Измерване на преглеждания на страници и поведение при използване',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Измерване на преглеждания на страници и потребителски дефинирани събития',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Измерване на преглеждания на страници, посещения и сесии',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Измерване на преглеждания на страници, посещения и сесии на собствен сървър',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Измерване на рекламни кампании и конверсии на сайта',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Измерване на целите и конверсиите на дадена кампания',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Дозареждане на картографски плочки, шрифтове и стилове от доставчика',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Предварително попълване на името от формуляра за коментари',
    'Nutzer-ID'
        => 'Потребителски идентификатор',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Свързва количката с правилната държава; необходимо',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Свързва количката в базата данни с правилния клиент',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Свързва действията от едно посещение с една сесия',
    'Personalisierung der Werbung auf TikTok'
        => 'Персонализиране на рекламата в TikTok',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Проверка дали WordPress може да поставя бисквитки',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Проверява дали браузърът поддържа бисквитки; необходимо',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Проверява дали WordPress може да поставя бисквитки',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Контролна стойност на паролата на магазина; необходимо',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Проверочна бисквитка на доставчика (акаунти преди 14.06.2026 г.)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Проверява дали браузърът приема бисквитки (акаунти от 14.06.2026 г.)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Проверява дали браузърът приема бисквитки (акаунти преди 14.06.2026 г.)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Проверява дали браузърът приема бисквитки (според доставчика само в Internet Explorer)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Ограничаване на честотата на заявките при CDN доставчика на HubSpot',
    'Reichweiten- und Nutzungsmessung'
        => 'Измерване на обхвата и на използването',
    'Reichweitenmessung'
        => 'Измерване на обхвата',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Измерване на обхвата на вградените видеа от Vimeo',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Измерване на обхвата за оператора на магазина',
    'Remarketing und Zielgruppenbildung'
        => 'Ремаркетинг и изграждане на целеви групи',
    'Retargeting'
        => 'Ретаргетиране',
    'Retargeting von Website-Besuchern'
        => 'Ретаргетиране на посетители на сайта',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Анализ на риска за разграничаване между човек и бот',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Обобщаваща бисквитка, според доставчика създавана само в браузъра Safari (акаунти от 14.06.2026 г.)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Обобщаваща бисквитка, според доставчика създавана само в браузъра Safari (акаунти преди 14.06.2026 г.)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Събиране на информация за поведението при сърфиране на тези потребители от Spotify и трети страни',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Превключвател, който операторът на сайта поставя сам, за да спре проследяването от Klaviyo',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Защита на входа за членове срещу подправяне',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Защита на формулярите от автоматизирана злоупотреба',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Защита от автоматизирани заявки (спам, credential stuffing)',
    'Sicherheit'
        => 'Сигурност',
    'Sicherheitsfunktionen'
        => 'Функции за сигурност',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Функции за сигурност, когато е активна допълнителната функция User Journeys',
    'Sitzung'
        => 'Сесия',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Определяне на сесията и на езика, съответно на държавата',
    'Sitzungsaufzeichnung'
        => 'Запис на сесията',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Идентификатор на сесията за анализ на събития на страници с уиджет',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Идентификатор на сесията за статистиката на магазина; анализ',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Ключ на сесията на услугата Answer Bot',
    'Sitzungswiedergabe'
        => 'Възпроизвеждане на сесията',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Съхранява токена за удостоверяване след вход',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Съхранява кодираната парола за защитени с парола видеа',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Съхранява ключа на избрания език',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Съхранява предпочитанието на посетителя за поверителност; необходимо',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Съхранява решението на посетителя за съгласие',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Съхранява идентификатора на устройството на посетителя за удостоверяване в уиджета за чат',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Съхранява идентификатора на потребител, регистрирал се за уебинар',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Съхранява идентификатора на кликването fbclid, за да може събитие на сайта да бъде свързано с реклама',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Съхранява потребителския идентификатор от регистрационен формуляр, поставен преди видеото',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Съхранява идентификатора на кликването в TikTok за свързване на конверсии',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Съхранява уникалния идентификатор на посетителя за разпознаване',
    'Speichert die zugestimmten Kategorien'
        => 'Съхранява категориите, за които е дадено съгласие',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Захранва уиджета с последно разгледаните продукти',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Управлява дали идентификаторът MUID се подновява; според доставчика бисквитка на трета страна',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Технически необходимо за работата и сигурността на сайта.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Носи данните за сесията и за поръчката в магазина; посочена от доставчика като необходима',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Носи функцията за възражение (opt-out)',
    'Transaktionssicherheit'
        => 'Сигурност на транзакциите',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Носи анализа на риска на reCAPTCHA.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Предаване на събития от сайта към TikTok',
    'Umfragen'
        => 'Анкети',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Спира предаването на данни към HubSpot',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Потиска приветственото съобщение на чата след затварянето му',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Разграничава браузърите, които отварят страници на Microsoft; със съгласие и за реклама',
    'Unterscheidet einzelne Nutzer.'
        => 'Разграничава отделните потребители.',
    'Unterscheidung einzelner Nutzer'
        => 'Разграничаване на отделните потребители',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Разграничаване между човек и бот при формуляри и вход в системата',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Свързва няколко преглеждания на страници в един запис на сесия',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Предотвратява постоянното показване на банера в строгия режим',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Разпределяне на сигналите за съгласие към таговете на Google',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Управление на решението за съгласие за таговете, конфигурирани в контейнера',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Управление на възражението срещу измерването',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Управление на възражението и съгласието за измерването',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Отнесена от Google към категориите Анализ и Реклама.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Причислява се от Google към категориите Анализ, Реклама и Сигурност.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Отнесена от Google към категориите Функционалност, Реклама и Сигурност.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Причислява се от Google към категориите Сигурност и Функционалност.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Причислява се от Google към категориите Сигурност и Реклама.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Причислява се от Google към категориите Сигурност, Анализ, Функционалност и Реклама.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Отнесена от Google към категориите Сигурност, Функционалност и Реклама.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Причислява се от Google към категориите Реклама и Сигурност.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Причислява се от Google към категорията Анализ; Google не посочва по-конкретна цел.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Причислява се от Google към категорията Функционалност.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Причислява се от Google към категорията Сигурност.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Причислява се от Google към категорията Реклама.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Посочена от Microsoft като една от бисквитките, които не бива да се поставят без съгласие; собствено описание на целта Microsoft не посочва',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Идентификатор, създаден от Vimeo за измерване на обхвата',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Валута на количката след приключена поръчка; необходимо',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Вероятностно свързване на браузър с определено лице',
    'Warenkorb einer Besucherin zuordnen'
        => 'Свързване на количката с посетител',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Предварително попълване на адреса на сайта от формуляра за коментари',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Разпознаване на зрителя за рекламни цели',
    'Werbepersonalisierung'
        => 'Персонализиране на рекламата',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Като _pin_unauth, но като бисквитка на трета страна',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Разпознаване на посетителя в рамките на процеса на резервация',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Разпознаване на посетителя между преглежданията на страници и разделите',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Разпознаване и идентифициране на посетителите на сайта',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Разпознаване на посетители през няколко посещения',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Разпознаване на посетители на свързани сайтове за ретаргетиране',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Разпознаване на завръщащи се посетители и свързване с предишни разговори',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Разпознаване на посетителя и съхраняване на неговите характеристики',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Разпознаване на браузъра чрез идентификатора на Criteo',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Разпознаване на потребителя; само със съгласие, по подразбиране блокирано',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Разпознаване на браузър при по-късни посещения след съгласие',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Разпознаване на посетители и свързването им със сесии',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'Разпознаване на членове на LinkedIn извън LinkedIn за целите на рекламата',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Разпознаване на потребители след съгласие',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Разпознаване на завръщащи се посетители чрез идентификатор на посетителя',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Поставя се, когато е задействана цел на кампания (акаунти от 14.06.2026 г.)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Поставя се, когато е задействана цел на кампания (акаунти преди 14.06.2026 г.)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Поставя се, когато лице посети сайт с вграден таг на Pinterest',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Поставя се, когато свързването се осъществи без налични бисквитки, например чрез Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Поставя се от JavaScript тага въз основа на данни, които Pinterest предава заедно с рекламирания трафик',
    'Zaehlt und begrenzt Sitzungen'
        => 'Брои и ограничава сесиите',
    'Zahlungsabwicklung'
        => 'Обработка на плащания',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Показва дали сесията продължава или е нова',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Показва на интерфейса, че и като кого е извършен входът',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Случаен идентификатор на браузъра, който свързва събитията на пиксела на даден сайт с определен браузър',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Показване на последно разгледаните продукти в съответния уиджет',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Свързване на поведението на сайта с определен профил',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Определяне на произхода на посещението (Referrer, атрибуция)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Свързване на посетител с контакт в акаунта в Brevo чрез имейл адреса',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Свързване на транзакции като лийдове и продажби с определен издател',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Свързване на действия на сайта с по-рано видени реклами',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Обединяване на няколко преглеждания на страници в една сесия',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Допълнителни данни към регистрираните събития от хода на посещението',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Присвояване и запазване на вариант през няколко посещения',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Междинна памет за събития въз основа на CSS селектори',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Междинна памет за данните на Messenger и на посетителя в паметта на браузъра',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Междинна памет за записите на Tag Manager',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Междинна памет за измерването на дълбочината на превъртане',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Междинна памет за променливите на Tag Manager',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Междинна памет за настройките на уиджета, за да се избегнат повторни заявки към сървъра',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Междинно съхраняване на данните на Messenger и на посетителя в браузъра',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Брои сесиите, създадени за даден посетител (акаунти от 14.06.2026 г.)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Брои колко пъти браузърът е бил затварян и отварян отново по време на измерването (акаунти преди 14.06.2026 г.)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Броене на преглеждания на страници и посещения',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'автоматизирани анализи на поведението на потребителите',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'приблизително географско определяне до държава, регион и град',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'по избор запис на сесията (Session Replay), по подразбиране с маскирани текстове, изображения и въведени данни',
    'optional Heatmaps und A/B-Tests'
        => 'по избор heatmaps и A/B тестове',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Предава източника на препращане при Split-URL тестове (акаунти от 14.06.2026 г.)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Предава източника на препращане при Split-URL тестове (акаунти преди 14.06.2026 г.)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Свързване на транзакции като лийдове и продажби с определен издател, Измерване на резултата от рекламно средство и отчитане на комисионата',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Регистриране на посетители и показвания на страници на сайта за маркетингова автоматизация, Свързване на посетител с контакт в акаунта в Brevo чрез имейл адреса, Регистриране на собствени, дефинирани от оператора събития',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Показване на календара за резервации и уговаряне на срещи на сайта, Разпознаване на посетителя в рамките на процеса на резервация, Обработка на плащания, когато срещата е платена',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Разпознаване и отхвърляне на автоматизиран достъп до формуляри, Издаване на токен, който сървърът на сайта проверява, В режим Pre-Clearance: разрешение за следващи WAF проверки в същата зона',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Измерване на преглеждания на страници и посещения, Измерване на времето за зареждане и основните показатели на страницата (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Доставяне на персонализирана реклама, Измерване на въздействието на рекламата, Разпознаване на браузъра чрез идентификатора на Criteo',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Измерване на поведението при използване на сайта, Изграждане на псевдонимни профили на използване след съгласие, Разпознаване на браузър при по-късни посещения след съгласие',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Измерване на преглеждания на страници и поведение при използване, Измерване на дълбочината на превъртане и на събитията при кликване, Разпознаване на потребители след съгласие, Управление на възражението срещу измерването',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Разграничаване между човек и бот при формуляри и вход в системата, Защита от автоматизирани заявки (спам, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Измерване на конверсии, Ремаркетинг и изграждане на целеви групи, Ограничаване на честотата на показване, Разпознаване на измами с кликове',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Доставяне на реклами, Ограничаване на честотата на показване, Разпознаване на измами и злоупотреби, Измерване на показванията и кликванията',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Разграничаване на отделните потребители, Запазване на състоянието на сесията, Измерване на обхвата и на използването',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Показване на интерактивна карта, Измерване на достъпността на услугата от Google',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Анализ на риска за разграничаване между човек и бот, Защита на формулярите от автоматизирана злоупотреба',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Доставяне и управление на тагове на сайта, Разпределяне на сигналите за съгласие към таговете на Google',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Разграничаване между човек и бот при формуляри и вход в системата, Разпределяне на натоварването и маршрутизиране на заявките за проверка, Осигуряване на достъпността',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Heatmaps, Запис на сесията, Анкети',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Разпознаване на посетители през няколко посещения, Измерване на сесии и определяне на източника на посещението, Премахване на дублиращи се контакти, Работа на чат уиджета, Последователно показване на варианти при A/B тестове',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Чат на живо и пощенска кутия за поддръжка на сайта, Разпознаване на завръщащи се посетители и свързване с предишни разговори, Разпознаване на устройството за защита от злоупотреби, Междинно съхраняване на данните на Messenger и на посетителя в браузъра',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Показване на съобщения за финансиране и плащане на вноски на страниците на продуктите и количката (On-site Messaging), Доставяне на съдържанието на съобщенията в подготвени контейнери в изходния код на страницата чрез Ad-Server',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Разпознаване и идентифициране на посетителите на сайта, Свързване на поведението на сайта с определен профил, Управление на показването на формуляри за регистрация на сайта',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Проследяване на конверсии за рекламни кампании в LinkedIn, Ретаргетиране на посетители на сайта, Анализ на аудиторията на сайта (демография на сайта)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Разпознаване на посетители на свързани сайтове за ретаргетиране, Управление на изскачащите формуляри, за да не се появяват повторно, Измерване на отваряния и кликвания в имейл кампании, Вграждане на рекламни пиксели на Google и Facebook на свързания сайт',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Показване на интерактивни карти на сайта, Дозареждане на картографски плочки, шрифтове и стилове от доставчика, Отчитане и защита на заявките към картата',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Измерване на преглеждания на страници, посещения и сесии, Разпознаване на завръщащи се посетители чрез идентификатор на посетителя, Определяне на произхода на посещението (Referrer, атрибуция), по избор heatmaps и A/B тестове',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Измерване на преглеждания на страници, посещения и сесии на собствен сървър, Разпознаване на завръщащи се посетители чрез идентификатор на посетителя, Определяне на произхода на посещението (Referrer, атрибуция), по избор heatmaps и A/B тестове',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Доставяне и задействане на тагове на сайта, Управление на решението за съгласие за таговете, конфигурирани в контейнера',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Измерване на рекламни кампании и конверсии на сайта, Формиране на целеви групи и ретаргетинг',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Проследяване на конверсии за кампании в Microsoft Advertising, Изграждане на списъци за ремаркетинг, Измерване на преглеждания на страници и потребителски дефинирани събития',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Записване и възпроизвеждане на сесии, Heatmaps на кликове и поведение при скролиране, Обединяване на няколко преглеждания на страници в една сесия, автоматизирани анализи на поведението на потребителите',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Обработка на плащане, инициирано от посетителя, Вграждане на полетата за карта в собствения процес на плащане, така че данните на картата да не преминават през магазина, Предотвратяване на измами и законови задължения като доставчик на платежни услуги',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Записване на движенията на мишката, Възпроизвеждане на сесията, Анализ на поведението при използване',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Доставяне на картови плочки към вградени карти, Работа и защита от злоупотреби на картографските услуги',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Обработка на плащания, Предотвратяване на измами',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Проследяване на конверсии за рекламни кампании в Pinterest, Формиране на целеви групи и ретаргетинг, Свързване на действия на сайта с по-рано видени реклами',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Измерване на преглеждания на страници и събития, Разпознаване на посетители и свързването им със сесии, Анализ на произхода и кампаниите, Анализ на устройство, браузър и приблизително местоположение, Анализ на електронната търговия и на целите',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Броене на преглеждания на страници и посещения, Анализ на източниците на препращане, Анализ на браузър, операционна система и тип устройство, приблизително географско определяне до държава, регион и град',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Регистриране и предаване на грешки на приложението от браузъра, по избор запис на сесията (Session Replay), по подразбиране с маскирани текстове, изображения и въведени данни',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Работа на количката и процеса на плащане в магазин, Определяне на сесията и на езика, съответно на държавата, Измерване на обхвата за оператора на магазина, Маркетингови данни за интерфейсите за покупка',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Вграждане и възпроизвеждане на песни, албуми, плейлисти и епизоди на подкасти, Събиране на информация за поведението при сърфиране на тези потребители от Spotify и трети страни, Даване на възможност трети страни да поставят бисквитки в браузъра на тези потребители',
    'Besucherzählung, Reichweitenmessung'
        => 'Броене на посетителите, Измерване на обхвата',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Разпознаване на измами и оценка на риска при опити за плащане, Предоставяне на полетата за плащане на Stripe Elements, Разпознаване на ботове и автоматизирано поведение в процеса на поръчка',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Измерване и подобряване на ефективността на рекламните кампании, Персонализиране на рекламата в TikTok, Предаване на събития от сайта към TikTok',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Вграждане на формуляри и анкети в сайта, Събиране и предаване на отговорите към оператора на формуляра',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Вграждане и възпроизвеждане на видеоклипове на сайта, Запаметяване на настройките на плейъра на зрителя (сила на звука, качество, субтитри), Измерване на обхвата на вградените видеа от Vimeo, Защита на плейъра от ботове и злоупотреби',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'A/B тестове и Split-URL тестове на сайта, Присвояване и запазване на вариант през няколко посещения, Измерване на целите и конверсиите на дадена кампания, Измерване на посетители и сесии за целите на анализа, Управление на възражението и съгласието за измерването',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Свързване на количката с посетител, Разпознаване дали съдържанието на количката се е променило, Показване на последно разгледаните продукти в съответния уиджет, Запомняне на скриването на съобщението на магазина',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Вход и разпознаване на сесията в администраторската част, Запазване на данните от коментара за следващи коментари, Запомняне на настройките на изгледа на администраторската част, Проверка дали WordPress може да поставя бисквитки, Запазване на избрания език',
    'Conversion-Messung, Retargeting'
        => 'Измерване на конверсии, Ретаргетиране',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Възпроизвеждане на вградени видеоклипове, Сигурност, Разпознаване на зрителя за рекламни цели',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Чат на живо и канал за съобщения за поддръжка на сайта, Разпознаване на посетителя между преглежданията на страници и разделите, Запаметяване на състоянието и настройките на уиджета, Измерване на сесии и събития на страници с уиджет',
];
