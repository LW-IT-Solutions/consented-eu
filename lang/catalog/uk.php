<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Ukrainisch.
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
        => 'A/B-тести та спліт-тести URL на сайті',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Тарифікація і захист звернень до карт',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Завершення входу через Shop; необхідний',
    'Abspielen eingebetteter Videos'
        => 'Відтворення вбудованих відео',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Проведення платежу, ініційованого відвідувачем',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Проведення платежів, якщо зустріч платна',
    'Analyse des Nutzungsverhaltens'
        => 'Аналіз поведінки користувачів',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Аналітичні дані інтерфейсів купівлі; статистика',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Аналітичні дані магазину; постачальник відносить до статистики',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Дані для входу до адміністративної частини за адресою /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Вхід до Shop Pay; необхідний',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Вхід і розпізнавання сесії в адміністративній частині',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Анонімна статистика щодо сервісу та інші технічні цілі, зокрема підтримка доступності',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Налаштування відображення адміністративної частини для кожного облікового запису',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Запам\'ятовування налаштувань відображення адміністративної частини',
    'Anzeige von Bewertungen'
        => 'Відображення відгуків',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Відображення календаря бронювання та призначення зустрічей на сайті',
    'Anzeigen einer interaktiven Karte'
        => 'Відображення інтерактивної карти',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'За значення 1 забороняє надсилання подій UET до Microsoft',
    'Aufbau von Remarketing-Listen'
        => 'Формування списків ремаркетингу',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Запис і відтворення сесій',
    'Aufzeichnung von Mausbewegungen'
        => 'Запис рухів миші',
    'Ausblenden des Shop-Hinweises merken'
        => 'Запам\'ятовування приховання сповіщення магазину',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Доставка та спрацьовування тегів на сайті',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Доставка тегів на сайті та керування ними',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Доставка картографічних тайлів для вбудованих карт',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Доставка вмісту сповіщення до підготовлених плейсхолдерів у вихідному коді сторінки через рекламний сервер',
    'Auslieferung personalisierter Werbung'
        => 'Показ персоналізованої реклами',
    'Auslieferung von Anzeigen'
        => 'Показ рекламних оголошень',
    'Auslieferung von Bibliotheken und Assets'
        => 'Доставка бібліотек і ресурсів',
    'Auslieferung von Schriftarten'
        => 'Доставка шрифтів',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Видача токена, який перевіряє сервер сайту',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Керування показом форм реєстрації на сайті',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Керування показом спливних форм, щоб вони не з\'являлися повторно',
    'Auswahl des Rechenzentrums'
        => 'Вибір центру обробки даних',
    'Auswertung der Verweisquellen'
        => 'Аналіз джерел переходів',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Аналіз аудиторії сайту (демографія сайту)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Аналіз браузера, операційної системи та типу пристрою',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Аналіз пристрою, браузера та приблизного місцезнаходження',
    'Auswertung von Herkunft und Kampagnen'
        => 'Аналіз джерел переходів і кампаній',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Автентифікує запити кінцевого користувача',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Обмеження частоти показів реклами',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Підтверджує пройдену перевірку, щоб уникнути подальших перевірок у цій зоні',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Надання платіжних полів Stripe Elements',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Надання функцій доступності',
    'Besucherzählung'
        => 'Підрахунок відвідувачів',
    'Betrieb des Chat-Widgets'
        => 'Робота віджета чату',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Робота картографічних сервісів і захист від зловживань',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Робота кошика та оформлення замовлення в магазині',
    'Betrugs- und Missbrauchserkennung'
        => 'Виявлення шахрайства та зловживань',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Виявлення шахрайства під час спроби платежу',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Виявлення шахрайства та оцінка ризику спроб платежу',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Запобігання шахрайству та виконання встановлених законом обов\'язків надавача платіжних послуг',
    'Betrugsprävention'
        => 'Запобігання шахрайству',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Запобігання шахрайству та оцінка ризику спроби платежу',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Формування псевдонімних профілів використання після надання згоди',
    'Bildung von Zielgruppen und Retargeting'
        => 'Формування цільових аудиторій і ретаргетинг',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Прив\'язує сесію до того самого екземпляра AWS',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Захист плеєра від ботів і зловживань',
    'Bot-Abwehr fuer den Player'
        => 'Захист плеєра від ботів',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Захист від ботів під час доставки ресурсів HubSpot',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Ідентифікатор браузера, за яким LinkedIn розрізняє пристрої та виявляє зловживання',
    'Cloudflare-Bot-Abwehr'
        => 'Захист від ботів Cloudflare',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Виявлення ботів Cloudflare для фільтрації трафіку',
    'Cloudflare-Ratenbegrenzung'
        => 'Обмеження частоти запитів Cloudflare',
    'Conversion-Messung'
        => 'Вимірювання конверсій',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Відстеження конверсій для рекламних кампаній LinkedIn',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Відстеження конверсій для кампаній Microsoft Advertising',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Відстеження конверсій для рекламних кампаній Pinterest',
    'Darstellung interaktiver Karten auf der Website'
        => 'Відображення інтерактивних карт на сайті',
    'Deduplizieren von Kontakten'
        => 'Усунення дублювання контактів',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Слугує для показу та вимірювання реклами.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'Міждоменний ідентифікатор відвідувача; за даними постачальника — сторонній файл cookie, використовується лише за увімкнених у конфігураційному файлі сторонніх файлів cookie',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Сторонній ідентифікатор для повторного розпізнавання відвідувачів',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Сторонній ідентифікатор, який передається до Klaviyo',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Сторонній рекламний ідентифікатор для вимірювання кампаній і персоналізації в TikTok',
    'E-Commerce- und Zielauswertung'
        => 'Аналіз електронної комерції та цілей',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Попереднє заповнення адреси електронної пошти у формі коментарів',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Вбудовування та відтворення треків, альбомів, плейлистів і випусків подкастів',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Вбудовування та відтворення відео на сайті',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Вбудовування форм та опитувань на сайт',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Вбудовування полів для банківської картки у власне оформлення замовлення, щоб дані картки не проходили через магазин',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Вбудовування декларації про файли cookie, яку веде зовнішній постачальник',
    'Einbettung von Audioinhalten'
        => 'Вбудовування аудіоматеріалів',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Підключення рекламних пікселів Google і Facebook на пов\'язаному сайті',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Показ повідомлень про фінансування та оплату частинами на сторінках товарів і кошика (On-site Messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Унікальний ідентифікатор при міждоменному вимірюванні (облікові записи від 14.06.2026)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Унікальний ідентифікатор при міждоменному вимірюванні (облікові записи до 14.06.2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Одноразове значення для захисту форми відмови від CSRF',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Містить ідентифікатор користувача та час створення; згідно з джерелом, встановлюється у вбудованому браузері Pinterest, а не на домені сайту',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Збирання та передавання відповідей оператору форми',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Фіксує використання сайту з метою аналізу.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Реєстрація власних подій, визначених оператором',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Реєстрація та передавання помилок застосунку з браузера',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Реєстрація відвідувачів і переглядів сторінок сайту для автоматизації маркетингу',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Вимірювання ефективності рекламного матеріалу та розрахунок комісії',
    'Erhalt des Sitzungszustands'
        => 'Збереження стану сесії',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Розпізнавання пристрою для захисту від зловживань',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Розпізнавання та відхилення автоматизованих звернень до форм',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Розпізнавання ботів і автоматизованої поведінки під час оформлення замовлення',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Визначення того, чи змінився вміст кошика',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Виявляє зміни вмісту кошика',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Розпізнає відвідувачів сайту, на якому вбудовано код Intercom',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Повторно розпізнає браузери на сайтах Microsoft; за даними постачальника, використовується також для реклами, сторонній файл cookie',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Повторно розпізнає осіб, які пишуть через інструмент чату',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Розпізнає пристрій, з якого ведеться розмова',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Розпізнає окремий пристрій, що взаємодіє з месенджером, для захисту від зловживань',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Розпізнає кінцевого користувача, який починає розмову',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Розпізнає домен або субдомен, на якому вбудовано віджет чату',
    'Erkennt wiederkehrende Besucher'
        => 'Розпізнає відвідувачів, які повертаються',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Визначає, чи було браузер перезапущено',
    'Erkennung von Klickbetrug'
        => 'Виявлення клікфроду',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Визначає унікальні звернення до сайту (облікові записи від 14.06.2026)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Визначає унікальні звернення до сайту (облікові записи до 14.06.2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Уможливлення встановлення третіми сторонами файлів cookie у браузері цих користувачів',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Уможливлює використання функцій доступності',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Забезпечує додаткові функції сайту.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Ідентифікатор першої сторони, який повторно розпізнає відвідувачів і відносить події до сайту',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Ідентифікатор відвідувача першої сторони для відстеження конверсій і ремаркетингу',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Ідентифікатор сесії першої сторони для зіставлення подій',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Ідентифікатор сесії першої сторони для кожного пікселя для вимірювання кампаній',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Ідентифікатор сесії першої сторони для вимірювання кампаній',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Рекламний ідентифікатор першої сторони для вимірювання кампаній і персоналізації в TikTok',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Файл cookie першої сторони, який групує дії відвідувачів, яких Pinterest не може зіставити',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Файл cookie першої сторони, у якому зберігаються хешовані дані клієнтів, зібрані через Automatic Enhanced Match',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Створює унікальний ідентифікатор для кожного відвідувача (облікові записи від 14.06.2026)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Створює унікальний ідентифікатор для кожного відвідувача (облікові записи до 14.06.2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Ідентифікатор пристрою для аналізу подій на сторінках із віджетом',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Встановлюється під час входу на сторінці, розміщеній у HubSpot',
    'Gewaehlte Sprache speichern'
        => 'Збереження вибраної мови',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Синхронізує ідентифікатор MUID між доменами Microsoft; за даними постачальника — сторонній файл cookie',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Підтримує синхронність повідомлень між кількома вкладками',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Зберігає значення параметра pk_campaign',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Зберігає значення параметра utm_campaign',
    'Haelt den Widerspruch gegen die Messung'
        => 'Зберігає заперечення проти вимірювання',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Зберігає час завершення строку дії _uetsid',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Зберігає час завершення строку дії _uetvid',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Зберігає тип джерела трафіку для Tag Manager',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Фіксує ідентичність відвідувача, зокрема для усунення дублювання контактів',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Фіксує рішення відвідувача щодо файлів cookie',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Зберігає однакове відображення віджета під час переходу між сторінками',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Фіксує сторінку входу; статистика',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Зберігає згоду на вимірювання за допомогою файлів cookie',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Зберігає рішення користувача щодо категорій і постачальників',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Підтримує сесію користувачів, які увійшли, і доступ до попередніх розмов',
    'Haelt die verweisende Adresse'
        => 'Зберігає адресу джерела переходу',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Фіксує джерело переходу; статистика',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Зберігає власні змінні сесії (позначено постачальником як застаріле)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Фіксує, чи дозволено etracker встановлювати файли cookie; за data-block-cookies встановлюється викликом API',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Фіксує, які функціональні перемикачі увімкнув власник відео',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Основний файл cookie для повторного розпізнавання відвідувачів',
    'Heatmaps'
        => 'Теплові карти',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Теплові карти кліків і прокручування',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Зберігає дані сесії для теплових карт на час візиту',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Зберігає відомості про поточну сесію (облікові записи від 14.06.2026)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Зберігає відомості про поточну сесію (облікові записи до 14.06.2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Зберігає користувацькі змінні на час візиту',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Зберігає постійні дані на рівні відвідувача (облікові записи від 14.06.2026)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Зберігає постійні дані на рівні відвідувача для аналізу Insights (облікові записи до 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Фіксує статус згоди відвідувача (облікові записи від 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Фіксує статус згоди відвідувача (облікові записи до 14.06.2026)',
    'Hält den Sitzungszustand.'
        => 'Зберігає стан сесії.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Зберігає ідентифікатор користувача Clarity та налаштування для цього сайту',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Зберігає призначений варіант для A/B-тестів',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Тимчасово фіксує вибрану комбінацію (облікові записи від 14.06.2026)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Тимчасово фіксує вибрану комбінацію (облікові записи до 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Фіксує вибраний варіант до виконання перенаправлення (облікові записи від 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Фіксує вибраний варіант до виконання перенаправлення (облікові записи до 14.06.2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Фіксує, за яким посиланням-джерелом відбувся візит',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'У режимі Pre-Clearance: допуск для подальших перевірок WAF у тій самій зоні',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Непрямий ідентифікатор учасника для відстеження конверсій, ретаргетингу та аналітики',
    'Inhalt des Warenkorbs; notwendig'
        => 'Вміст кошика; необхідний',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Аналітичні дані про покупців у магазині; аналітика',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Унікальний ідентифікатор, прив\'язаний до кампанії (облікові записи з 14.06.2026)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Ідентифікатор першого контакту з Clarity на всіх сайтах, що використовують Clarity; за даними постачальника — сторонній файл cookie',
    'Kennzeichnet die laufende Sitzung'
        => 'Позначає поточну сесію',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Збереження даних коментаря для подальших коментарів',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Послідовна видача варіантів A/B-тесту',
    'Lastverteilung und Routing'
        => 'Розподіл навантаження та маршрутизація',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Розподіл навантаження та маршрутизація challenge-запитів',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Зберігає налаштування облікового запису відвідувача локально',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Видає той самий варіант сторінки A/B-тесту',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Онлайн-чат і канал обміну повідомленнями для підтримки на сайті',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Онлайн-чат і поштова скринька підтримки на сайті',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Маркетингові дані інтерфейсів купівлі; маркетинг',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Маркетингові дані для інтерфейсів купівлі',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Збереження налаштувань плеєра глядача (гучність, якість, субтитри)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Збереження стану та налаштувань віджета',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Запам\'ятовує закриття банера Global Privacy Control',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Запам\'ятовує закриття інформаційного банера',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Запам\'ятовує момент зіставлення з файлом cookie lms_analytics',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Запам\'ятовує момент останнього зіставлення ідентифікаторів, щоб воно не повторювалося',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Запам\'ятовує призначений варіант (облікові записи з 14.06.2026)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Запам\'ятовує призначений варіант, щоб під час повторного відвідування він залишався тим самим (облікові записи до 14.06.2026)',
    'Merkt einen Rabattcode; notwendig'
        => 'Запам\'ятовує код знижки; необхідний',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Запам\'ятовує заперечення проти вимірювання (облікові записи з 14.06.2026)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Запам\'ятовує заперечення, що діє на кількох сайтах (облікові записи до 14.06.2026)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Запам\'ятовує налаштування плеєра, як-от гучність, якість і субтитри',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Запам\'ятовує налаштування звукових сповіщень',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Запам\'ятовує надану згоду на вимірювання',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Запам\'ятовує заперечення проти вимірювання',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Запам\'ятовує закриті проактивні повідомлення',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Запам\'ятовує, що відвідувач закрив підпис кнопки запуску',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Запам\'ятовує, чи віджет відкритий, чи закритий',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Запам\'ятовує, що відвідувач не має брати участі в жодній кампанії (облікові записи до 14.06.2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Запам\'ятовує, що відвідувача виключено з кампанії (облікові записи з 14.06.2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Запам\'ятовує, що відвідувача виключено з кампанії (облікові записи до 14.06.2026)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Запам\'ятовує, що повідомлення про згоду було закрито',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Запам\'ятовує, що повідомлення магазину було закрито',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Запам\'ятовує, що питання про файли cookie не має ставитися повторно',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Запам\'ятовує, що тег уже було активовано',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Запам\'ятовує, чи вимірюється для цього відвідувача глибина прокручування',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Запам\'ятовує, чи відкрито вікно чату',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Запам\'ятовує, чи передається ідентифікатор MUID рекламному ідентифікатору; за даними постачальника завжди 0, сторонній файл cookie',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Вимірювання відкриттів і кліків в email-кампаніях',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Вимірювання сесій і подій на сторінках із віджетом',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Вимірювання сесій і визначення джерела відвідування',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Вимірювання доступності сервісу компанією Google',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Вимірювання часу завантаження та ключових показників сторінки (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Вимірювання глибини прокручування та подій кліку',
    'Messung der Werbewirkung'
        => 'Вимірювання ефективності реклами',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Вимірювання поведінки під час користування сайтом',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Вимірювання та персоналізація оголошень у рекламній мережі TikTok Pangle',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Вимірювання та покращення результативності рекламних кампаній',
    'Messung von Auslieferungen und Klicks'
        => 'Вимірювання показів і кліків',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Вимірювання кількості відвідувачів і сесій для аналітики',
    'Messung von Conversions'
        => 'Вимірювання конверсій',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Вимірювання переглядів сторінок і відвідувань',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Вимірювання переглядів сторінок і подій',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Вимірювання переглядів сторінок і поведінки користування',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Вимірювання переглядів сторінок і власних подій',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Вимірювання переглядів сторінок, відвідувань і сесій',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Вимірювання переглядів сторінок, відвідувань і сесій на власному сервері',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Вимірювання рекламних кампаній і конверсій на сайті',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Вимірювання цілей і конверсій кампанії',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Довантаження картографічних тайлів, шрифтів і стилів від постачальника',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Попереднє заповнення імені з форми коментарів',
    'Nutzer-ID'
        => 'Ідентифікатор користувача',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Зіставляє кошик із правильною країною; необхідний',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Зіставляє кошик у базі даних із потрібним клієнтом',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Відносить дії в межах візиту до однієї сесії',
    'Personalisierung der Werbung auf TikTok'
        => 'Персоналізація реклами в TikTok',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Перевірка, чи може WordPress встановлювати файли cookie',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Перевіряє, чи підтримує браузер файли cookie; необхідний',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Перевіряє, чи може WordPress встановлювати файли cookie',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Контрольне значення пароля магазину; необхідний',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Перевірочний файл cookie постачальника (облікові записи до 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Перевіряє, чи приймає браузер файли cookie (облікові записи з 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Перевіряє, чи приймає браузер файли cookie (облікові записи до 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Перевіряє, чи приймає браузер файли cookie (за даними постачальника — лише в Internet Explorer)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Обмеження частоти запитів у CDN-провайдера HubSpot',
    'Reichweiten- und Nutzungsmessung'
        => 'Вимірювання охоплення та використання',
    'Reichweitenmessung'
        => 'Вимірювання охоплення',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Вимірювання охоплення вбудованих відео компанією Vimeo',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Вимірювання охоплення для оператора магазину',
    'Remarketing und Zielgruppenbildung'
        => 'Ремаркетинг і формування цільових аудиторій',
    'Retargeting'
        => 'Ретаргетинг',
    'Retargeting von Website-Besuchern'
        => 'Ретаргетинг відвідувачів сайту',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Аналіз ризику для розрізнення людини та бота',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Зведений файл cookie, за даними постачальника створюється лише в браузері Safari (облікові записи з 14.06.2026)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Зведений файл cookie, за даними постачальника створюється лише в браузері Safari (облікові записи до 14.06.2026)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Збір відомостей про поведінку цих користувачів в інтернеті компанією Spotify і третіми сторонами',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Перемикач, який оператор сайту встановлює сам, щоб заборонити відстеження Klaviyo',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Захист входу учасників від підробки',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Захист форм від автоматизованих зловживань',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Захист від автоматизованих запитів (спам, credential stuffing)',
    'Sicherheit'
        => 'Безпека',
    'Sicherheitsfunktionen'
        => 'Функції безпеки',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Функції безпеки, якщо ввімкнено додаткову функцію User Journeys',
    'Sitzung'
        => 'Сесія',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Визначення сесії, а також мови чи країни',
    'Sitzungsaufzeichnung'
        => 'Запис сесії',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Ідентифікатор сесії для аналізу подій на сторінках із віджетом',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Ідентифікатор сесії для статистики магазину; аналітика',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Ключ сесії сервісу Answer Bot',
    'Sitzungswiedergabe'
        => 'Відтворення сесії',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Зберігає токен автентифікації після входу',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Зберігає закодований пароль для відео, захищених паролем',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Зберігає ключ обраної мови',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Зберігає вибір відвідувача щодо конфіденційності; необхідний',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Зберігає рішення відвідувача щодо згоди',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Зберігає ідентифікатор пристрою відвідувача для автентифікації в чат-віджеті',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Зберігає ідентифікатор користувача, зареєстрованого на вебінар',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Зберігає ідентифікатор кліку fbclid, щоб подію на сайті можна було віднести до оголошення',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Зберігає ідентифікатор користувача з реєстраційної форми, що передує відео',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Зберігає ідентифікатор кліку TikTok для віднесення конверсій',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Зберігає унікальний ідентифікатор відвідувача для повторного розпізнавання',
    'Speichert die zugestimmten Kategorien'
        => 'Зберігає категорії, на які надано згоду',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Наповнює віджет нещодавно переглянутих товарів',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Визначає, чи оновлюється ідентифікатор MUID; за даними постачальника — сторонній файл cookie',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Технічно необхідно для роботи та безпеки сайту.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Містить дані сесії та оформлення замовлення магазину; постачальник відносить його до необхідних',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Забезпечує функцію заперечення (opt-out)',
    'Transaktionssicherheit'
        => 'Безпека транзакцій',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Забезпечує аналіз ризику reCAPTCHA.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Передавання подій сайту до TikTok',
    'Umfragen'
        => 'Опитування',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Забороняє передавання даних до HubSpot',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Приховує вітальне повідомлення чату після його закриття',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Розрізняє браузери, які звертаються до сайтів Microsoft; за наявності згоди також використовується для реклами',
    'Unterscheidet einzelne Nutzer.'
        => 'Розрізняє окремих користувачів.',
    'Unterscheidung einzelner Nutzer'
        => 'Розрізнення окремих користувачів',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Розрізнення людини та бота у формах і під час входу',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Об\'єднує кілька переглядів сторінок в один запис сесії',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Запобігає постійному показу банера у строгому режимі',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Розподіл сигналів згоди між тегами Google',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Керування рішенням щодо згоди для тегів, налаштованих у контейнері',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Керування запереченням проти вимірювання',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Керування запереченням і згодою щодо вимірювання',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Віднесено Google до категорій Аналітика та Реклама.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Віднесено Google до категорій «Аналітика», «Реклама» та «Безпека».',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Віднесено Google до категорій Функціональність, Реклама та Безпека.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Віднесено Google до категорій «Безпека» та «Функціональність».',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Віднесено Google до категорій «Безпека» та «Реклама».',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Віднесено Google до категорій «Безпека», «Аналітика», «Функціональність» та «Реклама».',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Віднесено Google до категорій Безпека, Функціональність та Реклама.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Віднесено Google до категорій «Реклама» та «Безпека».',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Віднесено Google до категорії «Аналітика»; точнішої мети Google не зазначає.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Віднесено Google до категорії «Функціональність».',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Віднесено Google до категорії «Безпека».',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Віднесено Google до категорії «Реклама».',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Microsoft називає його серед файлів cookie, які не можна встановлювати без згоди; окремого опису мети Microsoft не наводить',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Ідентифікатор, що створюється Vimeo для вимірювання охоплення',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Валюта кошика після завершення оформлення замовлення; необхідний',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Імовірнісне зіставлення браузера з конкретною особою',
    'Warenkorb einer Besucherin zuordnen'
        => 'Зіставлення кошика з відвідувачем',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Попереднє заповнення адреси сайту з форми коментарів',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Розпізнавання глядача в рекламних цілях',
    'Werbepersonalisierung'
        => 'Персоналізація реклами',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Як _pin_unauth, але у вигляді стороннього файлу cookie',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Розпізнавання відвідувача в межах процесу бронювання',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Розпізнавання відвідувача між переглядами сторінок і вкладками',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Розпізнавання та ідентифікація відвідувачів сайту',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Розпізнавання відвідувачів протягом кількох відвідувань',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Розпізнавання відвідувачів пов\'язаних сайтів для ретаргетингу',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Розпізнавання відвідувачів, які повернулися, і зіставлення з попередніми розмовами',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Розпізнавання відвідувача та збереження його характеристик',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Розпізнавання браузера за ідентифікатором Criteo',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Розпізнавання користувача; лише за наявності згоди, за замовчуванням заблоковано',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Розпізнавання браузера під час подальших відвідувань після надання згоди',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Розпізнавання відвідувачів і віднесення до сесій',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'Розпізнавання учасників LinkedIn поза межами LinkedIn для реклами',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Розпізнавання користувачів після надання згоди',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Повторне розпізнавання відвідувачів, які повертаються, за ідентифікатором відвідувача',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Встановлюється, коли спрацювала ціль кампанії (облікові записи з 14.06.2026)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Встановлюється, коли спрацювала ціль кампанії (облікові записи до 14.06.2026)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Встановлюється, коли особа відвідує сайт із вбудованим тегом Pinterest',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Встановлюється, коли зіставлення вдається без наявних файлів cookie, наприклад через Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Встановлюється JavaScript-тегом на основі даних, які Pinterest передає разом із рекламним трафіком',
    'Zaehlt und begrenzt Sitzungen'
        => 'Підраховує та обмежує кількість сесій',
    'Zahlungsabwicklung'
        => 'Обробка платежів',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Показує, чи сесія триває, чи розпочата заново',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Повідомляє інтерфейсу, чи виконано вхід і під яким обліковим записом',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Випадковий ідентифікатор браузера, який відносить піксельні події сайту до одного браузера',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Відображення нещодавно переглянутих товарів у відповідному віджеті',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Віднесення поведінки на сайті до профілю',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Визначення джерела візиту (реферер, атрибуція)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Зіставлення відвідувача з контактом в обліковому записі Brevo за адресою електронної пошти',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Віднесення транзакцій, як-от лідів і продажів, до конкретного видавця',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Віднесення дій на сайті до раніше показаних оголошень',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Об\'єднання кількох переглядів сторінок в одну сесію',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Додаткові дані до зафіксованих подій історії відвідування',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Призначення та збереження варіанта протягом кількох відвідувань',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Проміжне сховище для подій, що визначаються через CSS-селектори',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Проміжне сховище для даних месенджера та відвідувача у сховищі браузера',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Проміжне сховище для записів Tag Manager',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Проміжне сховище для вимірювання глибини прокручування',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Проміжне сховище для змінних Tag Manager',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Проміжне сховище для налаштувань віджета, щоб уникнути повторних запитів до сервера',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Проміжне збереження даних месенджера та відвідувача у браузері',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Підраховує сесії, створені для відвідувача (облікові записи з 14.06.2026)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Підраховує, скільки разів браузер було закрито й знову відкрито протягом вимірювання (облікові записи до 14.06.2026)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Підрахунок переглядів сторінок і відвідувань',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'автоматизований аналіз поведінки користувачів',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'приблизне географічне визначення до країни, регіону та міста',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'опційно запис сесії (Session Replay), за замовчуванням із маскуванням текстів, зображень і введених даних',
    'optional Heatmaps und A/B-Tests'
        => 'опційно теплові карти та A/B-тести',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Передає джерело переходу під час Split-URL-тестів (облікові записи з 14.06.2026)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Передає джерело переходу під час Split-URL-тестів (облікові записи до 14.06.2026)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Віднесення транзакцій, як-от лідів і продажів, до конкретного видавця, Вимірювання ефективності рекламного матеріалу та розрахунок комісії',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Реєстрація відвідувачів і переглядів сторінок сайту для автоматизації маркетингу, Зіставлення відвідувача з контактом в обліковому записі Brevo за адресою електронної пошти, Реєстрація власних подій, визначених оператором',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Відображення календаря бронювання та призначення зустрічей на сайті, Розпізнавання відвідувача в межах процесу бронювання, Проведення платежів, якщо зустріч платна',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Розпізнавання та відхилення автоматизованих звернень до форм, Видача токена, який перевіряє сервер сайту, У режимі Pre-Clearance: допуск для подальших перевірок WAF у тій самій зоні',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Вимірювання переглядів сторінок і відвідувань, Вимірювання часу завантаження та ключових показників сторінки (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Показ персоналізованої реклами, Вимірювання ефективності реклами, Розпізнавання браузера за ідентифікатором Criteo',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Вимірювання поведінки під час користування сайтом, Формування псевдонімних профілів використання після надання згоди, Розпізнавання браузера під час подальших відвідувань після надання згоди',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Вимірювання переглядів сторінок і поведінки користування, Вимірювання глибини прокручування та подій кліку, Розпізнавання користувачів після надання згоди, Керування запереченням проти вимірювання',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Розрізнення людини та бота у формах і під час входу, Захист від автоматизованих запитів (спам, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Вимірювання конверсій, Ремаркетинг і формування цільових аудиторій, Обмеження частоти показів реклами, Виявлення клікфроду',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Показ рекламних оголошень, Обмеження частоти показів реклами, Виявлення шахрайства та зловживань, Вимірювання показів і кліків',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Розрізнення окремих користувачів, Збереження стану сесії, Вимірювання охоплення та використання',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Відображення інтерактивної карти, Вимірювання доступності сервісу компанією Google',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Аналіз ризику для розрізнення людини та бота, Захист форм від автоматизованих зловживань',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Доставка тегів на сайті та керування ними, Розподіл сигналів згоди між тегами Google',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Розрізнення людини та бота у формах і під час входу, Розподіл навантаження та маршрутизація challenge-запитів, Надання функцій доступності',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Теплові карти, Запис сесії, Опитування',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Розпізнавання відвідувачів протягом кількох відвідувань, Вимірювання сесій і визначення джерела відвідування, Усунення дублювання контактів, Робота віджета чату, Послідовна видача варіантів A/B-тесту',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Онлайн-чат і поштова скринька підтримки на сайті, Розпізнавання відвідувачів, які повернулися, і зіставлення з попередніми розмовами, Розпізнавання пристрою для захисту від зловживань, Проміжне збереження даних месенджера та відвідувача у браузері',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Показ повідомлень про фінансування та оплату частинами на сторінках товарів і кошика (On-site Messaging), Доставка вмісту сповіщення до підготовлених плейсхолдерів у вихідному коді сторінки через рекламний сервер',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Розпізнавання та ідентифікація відвідувачів сайту, Віднесення поведінки на сайті до профілю, Керування показом форм реєстрації на сайті',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Відстеження конверсій для рекламних кампаній LinkedIn, Ретаргетинг відвідувачів сайту, Аналіз аудиторії сайту (демографія сайту)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Розпізнавання відвідувачів пов\'язаних сайтів для ретаргетингу, Керування показом спливних форм, щоб вони не з\'являлися повторно, Вимірювання відкриттів і кліків в email-кампаніях, Підключення рекламних пікселів Google і Facebook на пов\'язаному сайті',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Відображення інтерактивних карт на сайті, Довантаження картографічних тайлів, шрифтів і стилів від постачальника, Тарифікація і захист звернень до карт',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Вимірювання переглядів сторінок, відвідувань і сесій, Повторне розпізнавання відвідувачів, які повертаються, за ідентифікатором відвідувача, Визначення джерела візиту (реферер, атрибуція), опційно теплові карти та A/B-тести',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Вимірювання переглядів сторінок, відвідувань і сесій на власному сервері, Повторне розпізнавання відвідувачів, які повертаються, за ідентифікатором відвідувача, Визначення джерела візиту (реферер, атрибуція), опційно теплові карти та A/B-тести',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Доставка та спрацьовування тегів на сайті, Керування рішенням щодо згоди для тегів, налаштованих у контейнері',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Вимірювання рекламних кампаній і конверсій на сайті, Формування цільових аудиторій і ретаргетинг',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Відстеження конверсій для кампаній Microsoft Advertising, Формування списків ремаркетингу, Вимірювання переглядів сторінок і власних подій',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Запис і відтворення сесій, Теплові карти кліків і прокручування, Об\'єднання кількох переглядів сторінок в одну сесію, автоматизований аналіз поведінки користувачів',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Проведення платежу, ініційованого відвідувачем, Вбудовування полів для банківської картки у власне оформлення замовлення, щоб дані картки не проходили через магазин, Запобігання шахрайству та виконання встановлених законом обов\'язків надавача платіжних послуг',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Запис рухів миші, Відтворення сесії, Аналіз поведінки користувачів',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Доставка картографічних тайлів для вбудованих карт, Робота картографічних сервісів і захист від зловживань',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Обробка платежів, Запобігання шахрайству',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Відстеження конверсій для рекламних кампаній Pinterest, Формування цільових аудиторій і ретаргетинг, Віднесення дій на сайті до раніше показаних оголошень',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Вимірювання переглядів сторінок і подій, Розпізнавання відвідувачів і віднесення до сесій, Аналіз джерел переходів і кампаній, Аналіз пристрою, браузера та приблизного місцезнаходження, Аналіз електронної комерції та цілей',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Підрахунок переглядів сторінок і відвідувань, Аналіз джерел переходів, Аналіз браузера, операційної системи та типу пристрою, приблизне географічне визначення до країни, регіону та міста',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Реєстрація та передавання помилок застосунку з браузера, опційно запис сесії (Session Replay), за замовчуванням із маскуванням текстів, зображень і введених даних',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Робота кошика та оформлення замовлення в магазині, Визначення сесії, а також мови чи країни, Вимірювання охоплення для оператора магазину, Маркетингові дані для інтерфейсів купівлі',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Вбудовування та відтворення треків, альбомів, плейлистів і випусків подкастів, Збір відомостей про поведінку цих користувачів в інтернеті компанією Spotify і третіми сторонами, Уможливлення встановлення третіми сторонами файлів cookie у браузері цих користувачів',
    'Besucherzählung, Reichweitenmessung'
        => 'Підрахунок відвідувачів, Вимірювання охоплення',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Виявлення шахрайства та оцінка ризику спроб платежу, Надання платіжних полів Stripe Elements, Розпізнавання ботів і автоматизованої поведінки під час оформлення замовлення',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Вимірювання та покращення результативності рекламних кампаній, Персоналізація реклами в TikTok, Передавання подій сайту до TikTok',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Вбудовування форм та опитувань на сайт, Збирання та передавання відповідей оператору форми',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Вбудовування та відтворення відео на сайті, Збереження налаштувань плеєра глядача (гучність, якість, субтитри), Вимірювання охоплення вбудованих відео компанією Vimeo, Захист плеєра від ботів і зловживань',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'A/B-тести та спліт-тести URL на сайті, Призначення та збереження варіанта протягом кількох відвідувань, Вимірювання цілей і конверсій кампанії, Вимірювання кількості відвідувачів і сесій для аналітики, Керування запереченням і згодою щодо вимірювання',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Зіставлення кошика з відвідувачем, Визначення того, чи змінився вміст кошика, Відображення нещодавно переглянутих товарів у відповідному віджеті, Запам\'ятовування приховання сповіщення магазину',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Вхід і розпізнавання сесії в адміністративній частині, Збереження даних коментаря для подальших коментарів, Запам\'ятовування налаштувань відображення адміністративної частини, Перевірка, чи може WordPress встановлювати файли cookie, Збереження вибраної мови',
    'Conversion-Messung, Retargeting'
        => 'Вимірювання конверсій, Ретаргетинг',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Відтворення вбудованих відео, Безпека, Розпізнавання глядача в рекламних цілях',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Онлайн-чат і канал обміну повідомленнями для підтримки на сайті, Розпізнавання відвідувача між переглядами сторінок і вкладками, Збереження стану та налаштувань віджета, Вимірювання сесій і подій на сторінках із віджетом',
];
