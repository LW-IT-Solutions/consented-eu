<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Polnisch.
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
        => 'Testy A/B i testy split-URL na stronie',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Rozliczanie i zabezpieczanie wywołań map',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Zakończenie logowania w sklepie; niezbędne',
    'Abspielen eingebetteter Videos'
        => 'Odtwarzanie osadzonych filmów',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Realizacja płatności zainicjowanej przez odwiedzającego',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Realizacja płatności, jeśli termin jest płatny',
    'Analyse des Nutzungsverhaltens'
        => 'Analiza sposobu korzystania',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Dane analityczne interfejsów zakupowych; analiza',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Dane analityczne sklepu; dostawca zalicza je do analizy',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Dane logowania do panelu administracyjnego pod /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Logowanie do Shop Pay; niezbędne',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Logowanie i rozpoznawanie sesji w panelu administracyjnym',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Anonimowa statystyka dotycząca usługi i inne cele techniczne, między innymi wsparcie dostępności',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Ustawienia widoku panelu administracyjnego dla każdego konta',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Zapamiętywanie ustawień widoku panelu administracyjnego',
    'Anzeige von Bewertungen'
        => 'Wyświetlanie opinii',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Wyświetlanie kalendarza rezerwacji i umawianie terminów na stronie',
    'Anzeigen einer interaktiven Karte'
        => 'Wyświetlanie interaktywnej mapy',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'Ustawiony na wartość 1 blokuje wysyłanie zdarzeń UET do Microsoftu',
    'Aufbau von Remarketing-Listen'
        => 'Tworzenie list remarketingowych',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Nagrywanie i odtwarzanie sesji',
    'Aufzeichnung von Mausbewegungen'
        => 'Rejestrowanie ruchów myszy',
    'Ausblenden des Shop-Hinweises merken'
        => 'Zapamiętywanie ukrycia komunikatu sklepu',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Dostarczanie i uruchamianie tagów na stronie',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Dostarczanie tagów na stronie i zarządzanie nimi',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Dostarczanie kafelków map do osadzonych map',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Dostarczanie treści komunikatu do przygotowanych miejsc w kodzie źródłowym strony za pośrednictwem serwera reklamowego',
    'Auslieferung personalisierter Werbung'
        => 'Dostarczanie spersonalizowanych reklam',
    'Auslieferung von Anzeigen'
        => 'Wyświetlanie reklam',
    'Auslieferung von Bibliotheken und Assets'
        => 'Dostarczanie bibliotek i zasobów',
    'Auslieferung von Schriftarten'
        => 'Dostarczanie krojów pisma',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Wystawianie tokenu sprawdzanego przez serwer strony',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Sterowanie formularzami zapisu na stronie',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Sterowanie formularzami wyskakującymi, aby nie pojawiały się wielokrotnie',
    'Auswahl des Rechenzentrums'
        => 'Wybór centrum danych',
    'Auswertung der Verweisquellen'
        => 'Analiza źródeł odesłań',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Analiza grupy odbiorców strony (demografia strony)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Analiza przeglądarki, systemu operacyjnego i typu urządzenia',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Analiza urządzenia, przeglądarki i szacowanej lokalizacji',
    'Auswertung von Herkunft und Kampagnen'
        => 'Analiza pochodzenia i kampanii',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Uwierzytelnia żądania użytkownika końcowego',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Ograniczanie częstotliwości wyświetleń',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Potwierdza zdaną weryfikację, aby kolejne wyzwania w tej strefie nie były wymagane',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Udostępnianie pól płatności Stripe Elements',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Udostępnianie narzędzia dostępności',
    'Besucherzählung'
        => 'Zliczanie odwiedzających',
    'Betrieb des Chat-Widgets'
        => 'Działanie widżetu czatu',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Działanie usług map i ochrona przed nadużyciami',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Działanie koszyka i procesu płatności w sklepie',
    'Betrugs- und Missbrauchserkennung'
        => 'Wykrywanie oszustw i nadużyć',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Wykrywanie oszustw przy próbie płatności',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Wykrywanie oszustw i ocena ryzyka prób płatności',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Zapobieganie oszustwom i obowiązki ustawowe dostawcy usług płatniczych',
    'Betrugsprävention'
        => 'Zapobieganie oszustwom',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Zapobieganie oszustwom i ocena ryzyka próby płatności',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Tworzenie pseudonimowych profili korzystania po udzieleniu zgody',
    'Bildung von Zielgruppen und Retargeting'
        => 'Tworzenie grup odbiorców i retargeting',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Przypisuje sesję do tej samej instancji AWS',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Ochrona odtwarzacza przed botami i nadużyciami',
    'Bot-Abwehr fuer den Player'
        => 'Ochrona odtwarzacza przed botami',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Ochrona przed botami przy dostarczaniu zasobów HubSpot',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Identyfikator przeglądarki, którym LinkedIn rozróżnia urządzenia i wykrywa nadużycia',
    'Cloudflare-Bot-Abwehr'
        => 'Ochrona Cloudflare przed botami',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Wykrywanie botów przez Cloudflare do filtrowania ruchu',
    'Cloudflare-Ratenbegrenzung'
        => 'Ograniczanie liczby żądań przez Cloudflare',
    'Conversion-Messung'
        => 'Pomiar konwersji',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Śledzenie konwersji kampanii reklamowych LinkedIn',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Śledzenie konwersji kampanii Microsoft Advertising',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Śledzenie konwersji kampanii reklamowych Pinterest',
    'Darstellung interaktiver Karten auf der Website'
        => 'Wyświetlanie interaktywnych map na stronie',
    'Deduplizieren von Kontakten'
        => 'Usuwanie duplikatów kontaktów',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Służy do wyświetlania i mierzenia reklam.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'Identyfikator odwiedzającego działający między domenami; według dostawcy plik cookie podmiotu trzeciego, używany tylko przy plikach cookie podmiotów trzecich włączonych w pliku konfiguracyjnym',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Identyfikator podmiotu trzeciego do rozpoznawania odwiedzających',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Identyfikator podmiotu trzeciego przekazywany do Klaviyo',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Reklamowy identyfikator podmiotu trzeciego do pomiaru kampanii i personalizacji w TikTok',
    'E-Commerce- und Zielauswertung'
        => 'Analiza e-commerce i celów',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Wstępne wypełnianie adresu e-mail z formularza komentarza',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Osadzanie i odtwarzanie utworów, albumów, playlist i odcinków podcastów',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Osadzanie i odtwarzanie filmów na stronie',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Osadzanie formularzy i ankiet na stronie',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Osadzanie pól karty we własnym procesie płatności, aby dane karty nie przechodziły przez sklep',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Osadzanie zewnętrznie prowadzonej deklaracji cookie',
    'Einbettung von Audioinhalten'
        => 'Osadzanie treści audio',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Umieszczanie pikseli reklamowych Google i Facebook na powiązanej stronie',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Wyświetlanie informacji o finansowaniu i płatnościach ratalnych na stronach produktów i koszyka (on-site messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Unikalny identyfikator przy pomiarze między domenami (konta od 14.06.2026)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Unikalny identyfikator przy pomiarze między domenami (konta sprzed 14.06.2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Wartość jednorazowa chroniąca przed CSRF w formularzu rezygnacji',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Zawiera identyfikator użytkownika i moment utworzenia; według źródła ustawiany w przeglądarce wbudowanej w aplikację Pinterest, a nie w domenie strony',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Rejestrowanie odpowiedzi i przekazywanie ich operatorowi formularza',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Rejestruje korzystanie ze strony do celów analizy.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Rejestrowanie własnych zdarzeń zdefiniowanych przez operatora',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Rejestrowanie i przesyłanie błędów aplikacji z przeglądarki',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Rejestrowanie odwiedzających i odsłon strony na potrzeby automatyzacji marketingu',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Pomiar skuteczności materiału reklamowego i rozliczenie prowizji',
    'Erhalt des Sitzungszustands'
        => 'Utrzymanie stanu sesji',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Rozpoznawanie urządzenia w celu ochrony przed nadużyciami',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Wykrywanie i odrzucanie automatycznych żądań w formularzach',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Wykrywanie botów i zautomatyzowanego zachowania w procesie zamawiania',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Wykrywanie, czy zawartość koszyka uległa zmianie',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Wykrywa zmiany zawartości koszyka',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Rozpoznaje odwiedzających stronę, na której osadzono kod Intercom',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Rozpoznaje przeglądarki na stronach Microsoftu; według dostawcy wykorzystywany także do reklamy, plik cookie podmiotu trzeciego',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Rozpoznaje osoby piszące za pośrednictwem narzędzia czatu',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Rozpoznaje urządzenie, z którego pochodzi rozmowa',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Rozpoznaje pojedyncze urządzenie korzystające z Messengera w celu ochrony przed nadużyciami',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Rozpoznaje użytkownika końcowego rozpoczynającego rozmowę',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Rozpoznaje domenę lub subdomenę, na której osadzono widżet czatu',
    'Erkennt wiederkehrende Besucher'
        => 'Rozpoznaje powracających odwiedzających',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Wykrywa, czy przeglądarka została ponownie uruchomiona',
    'Erkennung von Klickbetrug'
        => 'Wykrywanie oszustw klikowych',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Ustala unikalne wejścia na stronę (konta od 14.06.2026)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Ustala unikalne wejścia na stronę (konta sprzed 14.06.2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Umożliwia podmiotom trzecim ustawianie plików cookie w przeglądarce tych użytkowników',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Umożliwia korzystanie z narzędzia dostępności',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Umożliwia dodatkowe funkcje strony.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Identyfikator własny, który rozpoznaje odwiedzających i przypisuje zdarzenia do strony',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Własny identyfikator odwiedzającego do śledzenia konwersji i remarketingu',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Własny identyfikator sesji do przypisywania zdarzeń',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Własny identyfikator sesji dla każdego piksela do pomiaru kampanii',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Własny identyfikator sesji do pomiaru kampanii',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Własny identyfikator reklamowy do pomiaru kampanii i personalizacji w TikTok',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Własny plik cookie grupujący działania odwiedzających, których Pinterest nie potrafi przypisać',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Własny plik cookie przechowujący zahaszowane dane klientów zebrane przez Automatic Enhanced Match',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Tworzy unikalny identyfikator dla każdego odwiedzającego (konta od 14.06.2026)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Tworzy unikalny identyfikator dla każdego odwiedzającego (konta sprzed 14.06.2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identyfikator urządzenia do analizy zdarzeń na stronach z widżetem',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Ustawiany przy logowaniu na stronie hostowanej przez HubSpot',
    'Gewaehlte Sprache speichern'
        => 'Zapisywanie wybranego języka',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Uzgadnia identyfikator MUID pomiędzy domenami Microsoftu; według dostawcy plik cookie podmiotu trzeciego',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Utrzymuje synchronizację wiadomości między kilkoma kartami',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Przechowuje wartość parametru pk_campaign',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Przechowuje wartość parametru utm_campaign',
    'Haelt den Widerspruch gegen die Messung'
        => 'Przechowuje sprzeciw wobec pomiaru',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Przechowuje czas wygaśnięcia _uetsid',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Przechowuje czas wygaśnięcia _uetvid',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Przechowuje rodzaj źródła ruchu dla Tag Managera',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Zapisuje tożsamość odwiedzającego, także w celu usuwania duplikatów kontaktów',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Zapisuje decyzję odwiedzającego dotyczącą plików cookie',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Utrzymuje spójny wygląd widżetu przy zmianie strony',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Zapisuje stronę wejścia; analiza',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Przechowuje zgodę na pomiar z użyciem plików cookie',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Przechowuje decyzję użytkownika dotyczącą kategorii i dostawców',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Utrzymuje sesję zalogowanych użytkowników i dostęp do wcześniejszych rozmów',
    'Haelt die verweisende Adresse'
        => 'Przechowuje adres odsyłający',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Zapisuje źródło odesłania; analiza',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Przechowuje własne zmienne sesji (oznaczone przez dostawcę jako przestarzałe)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Zapisuje, czy etracker może ustawiać pliki cookie; przy data-block-cookies ustawiany wywołaniem API',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Zapisuje, które przełączniki funkcji włączył właściciel filmu',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Główny plik cookie do rozpoznawania odwiedzających',
    'Heatmaps'
        => 'Mapy cieplne',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Mapy cieplne kliknięć i przewijania',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Przechowuje dane sesji dla map cieplnych przez czas trwania wizyty',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Przechowuje informacje o bieżącej sesji (konta od 14.06.2026)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Przechowuje informacje o bieżącej sesji (konta sprzed 14.06.2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Przechowuje zmienne własne przez czas trwania wizyty',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Przechowuje trwałe dane na poziomie odwiedzającego (konta od 14.06.2026)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Przechowuje trwałe dane na poziomie odwiedzającego na potrzeby analizy Insights (konta sprzed 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Zapisuje status zgody odwiedzającego (konta od 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Zapisuje status zgody odwiedzającego (konta sprzed 14.06.2026)',
    'Hält den Sitzungszustand.'
        => 'Przechowuje stan sesji.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Przechowuje identyfikator użytkownika Clarity i ustawienia dla tej strony',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Przechowuje przypisanie wariantu w testach A/B',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Tymczasowo zapisuje wybraną kombinację (konta od 14.06.2026)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Tymczasowo zapisuje wybraną kombinację (konta sprzed 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Zapisuje wybrany wariant przed wykonaniem przekierowania (konta od 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Zapisuje wybrany wariant przed wykonaniem przekierowania (konta sprzed 14.06.2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Zapisuje, przez które odesłanie doszło do wizyty',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'W trybie Pre-Clearance: zwolnienie dla kolejnych kontroli WAF w tej samej strefie',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Pośredni identyfikator członka do śledzenia konwersji, retargetingu i analizy',
    'Inhalt des Warenkorbs; notwendig'
        => 'Zawartość koszyka; niezbędne',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Dane analityczne o kupujących w sklepie; statystyka',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Unikalny identyfikator powiązany z kampanią (konta od 14.06.2026)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Identyfikator pierwszego kontaktu z Clarity we wszystkich witrynach z Clarity; według dostawcy plik cookie podmiotu trzeciego',
    'Kennzeichnet die laufende Sitzung'
        => 'Oznacza trwającą sesję',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Przechowywanie danych z formularza komentarza na potrzeby kolejnych komentarzy',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Spójne wyświetlanie wariantów testów A/B',
    'Lastverteilung und Routing'
        => 'Równoważenie obciążenia i routing',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Rozkład obciążenia i kierowanie żądań weryfikacyjnych',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Zapisuje lokalnie ustawienia konta odwiedzającego',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Wyświetla ten sam wariant strony w teście A/B',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Czat na żywo i kanał wiadomości wsparcia na stronie',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Czat na żywo i skrzynka wsparcia na stronie',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Dane marketingowe interfejsów zakupowych; marketing',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Dane marketingowe dla interfejsów zakupowych',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Zapamiętywanie ustawień odtwarzacza widza (głośność, jakość, napisy)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Zapamiętywanie stanu i ustawień widżetu',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Zapamiętuje zamknięcie banera Global Privacy Control',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Zapamiętuje zamknięcie banera informacyjnego',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Zapamiętuje moment synchronizacji z plikiem cookie lms_analytics',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Zapamiętuje moment ostatniej synchronizacji identyfikatorów, aby jej nie powtarzać',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Zapamiętuje przypisany wariant (konta od 14.06.2026)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Zapamiętuje przypisany wariant, aby przy kolejnej wizycie pozostał ten sam (konta sprzed 14.06.2026)',
    'Merkt einen Rabattcode; notwendig'
        => 'Zapamiętuje kod rabatowy; niezbędne',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Zapamiętuje sprzeciw wobec pomiaru (konta od 14.06.2026)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Zapamiętuje sprzeciw obejmujący wiele witryn (konta sprzed 14.06.2026)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Zapamiętuje ustawienia odtwarzacza, takie jak głośność, jakość i napisy',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Zapamiętuje ustawienie powiadomień dźwiękowych',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Zapamiętuje udzieloną zgodę na pomiar',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Zapamiętuje sprzeciw wobec pomiaru',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Zapamiętuje zamknięte przez odwiedzającego wiadomości proaktywne',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Zapamiętuje, że odwiedzający zamknął etykietę przycisku uruchamiającego',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Zapamiętuje, czy widżet jest otwarty, czy zamknięty',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Zapamiętuje, że odwiedzający nie ma brać udziału w żadnej kampanii (konta sprzed 14.06.2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Zapamiętuje, że odwiedzający jest wyłączony z kampanii (konta od 14.06.2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Zapamiętuje, że odwiedzający jest wyłączony z kampanii (konta sprzed 14.06.2026)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Zapamiętuje, że komunikat o zgodzie został zamknięty',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Zapamiętuje, że komunikat sklepu został zamknięty',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Zapamiętuje, że pytanie o pliki cookie nie ma pojawić się ponownie',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Zapamiętuje, że tag został już uruchomiony',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Zapamiętuje, czy u tego odwiedzającego mierzona jest głębokość przewijania',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Zapamiętuje, czy okno czatu jest otwarte',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Zapamiętuje, czy identyfikator MUID jest przekazywany do identyfikatora reklamowego; według dostawcy zawsze 0, plik cookie podmiotu trzeciego',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Pomiar otwarć i kliknięć w kampaniach e-mailowych',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Pomiar sesji i zdarzeń na stronach z widżetem',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Pomiar sesji i przypisanie źródła wizyty',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Pomiar dostępności usługi przez Google',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Pomiar czasu ładowania i kluczowych wskaźników strony (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Pomiar głębokości przewijania i zdarzeń kliknięcia',
    'Messung der Werbewirkung'
        => 'Pomiar skuteczności reklamy',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Pomiar zachowań użytkowników na stronie',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Pomiar i personalizacja reklam w sieci reklamowej TikTok Pangle',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Pomiar i poprawa skuteczności kampanii reklamowych',
    'Messung von Auslieferungen und Klicks'
        => 'Pomiar wyświetleń i kliknięć',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Pomiar odwiedzających i sesji na potrzeby analiz',
    'Messung von Conversions'
        => 'Pomiar konwersji',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Pomiar odsłon i wizyt',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Pomiar odsłon i zdarzeń',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Pomiar odsłon i zachowań użytkowników',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Pomiar odsłon i zdarzeń niestandardowych',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Pomiar odsłon, wizyt i sesji',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Pomiar odsłon, wizyt i sesji na własnym serwerze',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Pomiar kampanii reklamowych i konwersji na stronie',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Pomiar celów i konwersji kampanii',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Doładowywanie kafelków map, czcionek i stylów od dostawcy',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Wstępne wypełnienie imienia z formularza komentarza',
    'Nutzer-ID'
        => 'Identyfikator użytkownika',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Przypisuje koszyk do właściwego kraju; niezbędne',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Przypisuje koszyk w bazie danych do właściwej klientki',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Przypisuje działania podczas wizyty do sesji',
    'Personalisierung der Werbung auf TikTok'
        => 'Personalizacja reklam na platformie TikTok',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Sprawdzenie, czy WordPress może ustawiać pliki cookie',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Sprawdza, czy przeglądarka obsługuje pliki cookie; niezbędne',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Sprawdza, czy WordPress może ustawiać pliki cookie',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Wartość kontrolna hasła sklepu; niezbędne',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Kontrolny plik cookie dostawcy (konta sprzed 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Sprawdza, czy przeglądarka przyjmuje pliki cookie (konta od 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Sprawdza, czy przeglądarka przyjmuje pliki cookie (konta sprzed 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Sprawdza, czy przeglądarka przyjmuje pliki cookie (według dostawcy tylko w Internet Explorerze)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Ograniczanie liczby żądań u dostawcy CDN dla HubSpot',
    'Reichweiten- und Nutzungsmessung'
        => 'Pomiar zasięgu i korzystania',
    'Reichweitenmessung'
        => 'Pomiar zasięgu',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Pomiar zasięgu osadzonych filmów przez Vimeo',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Pomiar zasięgu na potrzeby prowadzącego sklep',
    'Remarketing und Zielgruppenbildung'
        => 'Remarketing i tworzenie grup odbiorców',
    'Retargeting'
        => 'Retargeting',
    'Retargeting von Website-Besuchern'
        => 'Retargeting odwiedzających stronę',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Analiza ryzyka służąca odróżnieniu człowieka od bota',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Zbiorczy plik cookie, według dostawcy tworzony tylko w przeglądarce Safari (konta od 14.06.2026)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Zbiorczy plik cookie, według dostawcy tworzony tylko w przeglądarce Safari (konta sprzed 14.06.2026)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Zbieranie informacji o zachowaniu tych użytkowników w sieci przez Spotify i podmioty trzecie',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Przełącznik, który prowadzący stronę ustawia samodzielnie, aby zablokować śledzenie przez Klaviyo',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Ochrona logowania członków przed sfałszowaniem',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Ochrona formularzy przed zautomatyzowanym nadużyciem',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Ochrona przed zautomatyzowanymi żądaniami (spam, credential stuffing)',
    'Sicherheit'
        => 'Bezpieczeństwo',
    'Sicherheitsfunktionen'
        => 'Funkcje bezpieczeństwa',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Funkcje bezpieczeństwa, gdy aktywna jest opcjonalna funkcja User Journeys',
    'Sitzung'
        => 'Sesja',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Przypisanie sesji oraz języka lub kraju',
    'Sitzungsaufzeichnung'
        => 'Nagrywanie sesji',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identyfikator sesji do analizy zdarzeń na stronach z widżetem',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Identyfikator sesji do statystyk sklepu; statystyka',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Klucz sesji usługi Answer Bot',
    'Sitzungswiedergabe'
        => 'Odtwarzanie sesji',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Zapisuje token uwierzytelniający po zalogowaniu',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Zapisuje zakodowane hasło do filmów chronionych hasłem',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Zapisuje klucz wybranego języka',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Zapisuje wybór odwiedzającego dotyczący prywatności; niezbędne',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Zapisuje decyzję odwiedzającego o zgodzie',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Zapisuje identyfikator urządzenia odwiedzającego do uwierzytelnienia w widżecie czatu',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Zapisuje identyfikator użytkownika zapisanego na webinar',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Zapisuje identyfikator kliknięcia fbclid, aby można było przypisać zdarzenie na stronie do reklamy',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Zapisuje identyfikator użytkownika z formularza rejestracji poprzedzającego film',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Zapisuje identyfikator kliknięcia TikTok do przypisywania konwersji',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Zapisuje unikalny identyfikator odwiedzającego w celu rozpoznawania',
    'Speichert die zugestimmten Kategorien'
        => 'Zapisuje kategorie, na które udzielono zgody',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Zasila widżet ostatnio oglądanych produktów',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Steruje tym, czy identyfikator MUID jest odnawiany; według dostawcy plik cookie podmiotu trzeciego',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Technicznie niezbędne do działania i bezpieczeństwa strony.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Przenosi dane sesji i zamówienia w sklepie; dostawca prowadzi je jako niezbędne',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Obsługuje funkcję sprzeciwu (opt-out)',
    'Transaktionssicherheit'
        => 'Bezpieczeństwo transakcji',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Obsługuje analizę ryzyka reCAPTCHA.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Przekazywanie zdarzeń ze strony do serwisu TikTok',
    'Umfragen'
        => 'Ankiety',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Blokuje przekazywanie danych do serwisu HubSpot',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Po zamknięciu wyłącza wiadomość powitalną czatu',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Rozróżnia przeglądarki odwiedzające strony Microsoft; za zgodą także do celów reklamowych',
    'Unterscheidet einzelne Nutzer.'
        => 'Rozróżnia poszczególnych użytkowników.',
    'Unterscheidung einzelner Nutzer'
        => 'Rozróżnianie poszczególnych użytkowników',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Rozróżnianie człowieka i bota w formularzach i przy logowaniu',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Łączy kilka odsłon w jedno nagranie sesji',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Zapobiega ciągłemu wyświetlaniu banera w trybie ścisłym',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Rozsyłanie sygnałów zgody do tagów Google',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Zarządzanie decyzją o zgodzie dla tagów skonfigurowanych w kontenerze',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Zarządzanie sprzeciwem wobec pomiaru',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Zarządzanie sprzeciwem i zgodą na pomiar',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Google przypisuje go do kategorii statystyka i reklama.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Zaliczony przez Google do kategorii analiza, reklama i bezpieczeństwo.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Google przypisuje go do kategorii funkcjonalność, reklama i bezpieczeństwo.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Zaliczony przez Google do kategorii bezpieczeństwo i funkcjonalność.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Zaliczony przez Google do kategorii bezpieczeństwo i reklama.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Zaliczony przez Google do kategorii bezpieczeństwo, analiza, funkcjonalność i reklama.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Google przypisuje go do kategorii bezpieczeństwo, funkcjonalność i reklama.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Zaliczony przez Google do kategorii reklama i bezpieczeństwo.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Zaliczony przez Google do kategorii analiza; Google nie podaje dokładniejszego celu.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Zaliczony przez Google do kategorii funkcjonalność.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Zaliczony przez Google do kategorii bezpieczeństwo.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Zaliczony przez Google do kategorii reklama.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Microsoft wymienia go wśród plików cookie, których nie wolno ustawiać bez zgody; własnego opisu celu Microsoft nie podaje',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Identyfikator utworzony przez Vimeo na potrzeby pomiaru zasięgu',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Waluta koszyka po zakończonym zamówieniu; niezbędne',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Przypisanie przeglądarki do osoby na podstawie prawdopodobieństwa',
    'Warenkorb einer Besucherin zuordnen'
        => 'Przypisanie koszyka do odwiedzającej',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Wstępne wypełnienie adresu strony z formularza komentarza',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Rozpoznawanie widza do celów reklamowych',
    'Werbepersonalisierung'
        => 'Personalizacja reklam',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Tak samo jak _pin_unauth, ale jako plik cookie podmiotu trzeciego',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Rozpoznawanie odwiedzającego w trakcie procesu rezerwacji',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Rozpoznawanie odwiedzającego między odsłonami i kartami',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Rozpoznawanie i identyfikacja odwiedzających stronę',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Rozpoznawanie odwiedzających podczas wielu wizyt',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Rozpoznawanie odwiedzających powiązane strony na potrzeby retargetingu',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Rozpoznawanie powracających odwiedzających i przypisywanie wcześniejszych rozmów',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Rozpoznawanie odwiedzającego i zapisywanie jego cech',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Rozpoznawanie przeglądarki za pomocą identyfikatora Criteo',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Rozpoznawanie użytkownika; tylko za zgodą, domyślnie zablokowane',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Rozpoznawanie przeglądarki przy późniejszych wizytach po udzieleniu zgody',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Rozpoznawanie odwiedzających i przypisywanie ich do sesji',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'Rozpoznawanie członków LinkedIn poza LinkedIn do celów reklamowych',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Rozpoznawanie użytkowników po udzieleniu zgody',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Rozpoznawanie powracających odwiedzających na podstawie identyfikatora odwiedzającego',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Ustawiany, gdy cel kampanii został wywołany (konta od 14.06.2026)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Ustawiany, gdy cel kampanii został wywołany (konta sprzed 14.06.2026)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Ustawiany, gdy osoba odwiedza stronę z osadzonym tagiem Pinterest',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Ustawiany, gdy przypisanie uda się bez istniejących plików cookie, na przykład przez Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Ustawiany przez tag JavaScript na podstawie danych, które Pinterest przekazuje wraz z płatnym ruchem',
    'Zaehlt und begrenzt Sitzungen'
        => 'Zlicza i ogranicza sesje',
    'Zahlungsabwicklung'
        => 'Obsługa płatności',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Wskazuje, czy sesja nadal trwa, czy jest nowa',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Informuje interfejs, że jesteś zalogowany i na jakie konto',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Losowy identyfikator przeglądarki, który przypisuje zdarzenia piksela danej strony do jednej przeglądarki',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Wyświetlanie ostatnio oglądanych produktów w odpowiednim widżecie',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Przypisywanie zachowań na stronie do profilu',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Przypisanie źródła wizyty (odsyłacz, atrybucja)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Przypisanie odwiedzającego do kontaktu na koncie Brevo za pomocą adresu e-mail',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Przypisanie transakcji, takich jak leady i sprzedaże, do wydawcy',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Przypisanie działań na stronie do wcześniej obejrzanych reklam',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Łączenie kilku odsłon w jedną sesję',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Dodatkowe dane do zarejestrowanych zdarzeń przebiegu wizyty',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Przydzielenie i utrzymanie wariantu przez wiele wizyt',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Pamięć podręczna zdarzeń określanych za pomocą selektorów CSS',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Pamięć podręczna danych narzędzia Messenger i danych odwiedzających w magazynie przeglądarki',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Pamięć podręczna wpisów narzędzia Tag Manager',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Pamięć podręczna pomiaru głębokości przewijania',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Pamięć podręczna zmiennych narzędzia Tag Manager',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Pamięć podręczna ustawień widżetu, aby uniknąć powtarzanych zapytań do serwera',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Zapisywanie danych narzędzia Messenger i danych odwiedzających w pamięci podręcznej przeglądarki',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Zlicza sesje utworzone dla danego odwiedzającego (konta od 14.06.2026)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Zlicza, ile razy przeglądarka została zamknięta i ponownie otwarta w czasie pomiaru (konta sprzed 14.06.2026)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Zliczanie odsłon i wizyt',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'zautomatyzowane analizy zachowań użytkowników',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'przybliżone przypisanie geograficzne do kraju, regionu i miasta',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'opcjonalnie nagrywanie sesji (Session Replay), domyślnie z zamaskowanymi tekstami, obrazami i danymi wpisywanymi',
    'optional Heatmaps und A/B-Tests'
        => 'opcjonalnie mapy cieplne i testy A/B',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Przekazuje źródło odesłania w testach Split URL (konta od 14.06.2026)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Przekazuje źródło odesłania w testach Split URL (konta sprzed 14.06.2026)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Przypisanie transakcji, takich jak leady i sprzedaże, do wydawcy, Pomiar skuteczności materiału reklamowego i rozliczenie prowizji',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Rejestrowanie odwiedzających i odsłon strony na potrzeby automatyzacji marketingu, Przypisanie odwiedzającego do kontaktu na koncie Brevo za pomocą adresu e-mail, Rejestrowanie własnych zdarzeń zdefiniowanych przez operatora',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Wyświetlanie kalendarza rezerwacji i umawianie terminów na stronie, Rozpoznawanie odwiedzającego w trakcie procesu rezerwacji, Realizacja płatności, jeśli termin jest płatny',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Wykrywanie i odrzucanie automatycznych żądań w formularzach, Wystawianie tokenu sprawdzanego przez serwer strony, W trybie Pre-Clearance: zwolnienie dla kolejnych kontroli WAF w tej samej strefie',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Pomiar odsłon i wizyt, Pomiar czasu ładowania i kluczowych wskaźników strony (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Dostarczanie spersonalizowanych reklam, Pomiar skuteczności reklamy, Rozpoznawanie przeglądarki za pomocą identyfikatora Criteo',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Pomiar zachowań użytkowników na stronie, Tworzenie pseudonimowych profili korzystania po udzieleniu zgody, Rozpoznawanie przeglądarki przy późniejszych wizytach po udzieleniu zgody',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Pomiar odsłon i zachowań użytkowników, Pomiar głębokości przewijania i zdarzeń kliknięcia, Rozpoznawanie użytkowników po udzieleniu zgody, Zarządzanie sprzeciwem wobec pomiaru',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Rozróżnianie człowieka i bota w formularzach i przy logowaniu, Ochrona przed zautomatyzowanymi żądaniami (spam, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Pomiar konwersji, Remarketing i tworzenie grup odbiorców, Ograniczanie częstotliwości wyświetleń, Wykrywanie oszustw klikowych',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Wyświetlanie reklam, Ograniczanie częstotliwości wyświetleń, Wykrywanie oszustw i nadużyć, Pomiar wyświetleń i kliknięć',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Rozróżnianie poszczególnych użytkowników, Utrzymanie stanu sesji, Pomiar zasięgu i korzystania',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Wyświetlanie interaktywnej mapy, Pomiar dostępności usługi przez Google',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Analiza ryzyka służąca odróżnieniu człowieka od bota, Ochrona formularzy przed zautomatyzowanym nadużyciem',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Dostarczanie tagów na stronie i zarządzanie nimi, Rozsyłanie sygnałów zgody do tagów Google',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Rozróżnianie człowieka i bota w formularzach i przy logowaniu, Rozkład obciążenia i kierowanie żądań weryfikacyjnych, Udostępnianie narzędzia dostępności',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Mapy cieplne, Nagrywanie sesji, Ankiety',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Rozpoznawanie odwiedzających podczas wielu wizyt, Pomiar sesji i przypisanie źródła wizyty, Usuwanie duplikatów kontaktów, Działanie widżetu czatu, Spójne wyświetlanie wariantów testów A/B',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Czat na żywo i skrzynka wsparcia na stronie, Rozpoznawanie powracających odwiedzających i przypisywanie wcześniejszych rozmów, Rozpoznawanie urządzenia w celu ochrony przed nadużyciami, Zapisywanie danych narzędzia Messenger i danych odwiedzających w pamięci podręcznej przeglądarki',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Wyświetlanie informacji o finansowaniu i płatnościach ratalnych na stronach produktów i koszyka (on-site messaging), Dostarczanie treści komunikatu do przygotowanych miejsc w kodzie źródłowym strony za pośrednictwem serwera reklamowego',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Rozpoznawanie i identyfikacja odwiedzających stronę, Przypisywanie zachowań na stronie do profilu, Sterowanie formularzami zapisu na stronie',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Śledzenie konwersji kampanii reklamowych LinkedIn, Retargeting odwiedzających stronę, Analiza grupy odbiorców strony (demografia strony)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Rozpoznawanie odwiedzających powiązane strony na potrzeby retargetingu, Sterowanie formularzami wyskakującymi, aby nie pojawiały się wielokrotnie, Pomiar otwarć i kliknięć w kampaniach e-mailowych, Umieszczanie pikseli reklamowych Google i Facebook na powiązanej stronie',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Wyświetlanie interaktywnych map na stronie, Doładowywanie kafelków map, czcionek i stylów od dostawcy, Rozliczanie i zabezpieczanie wywołań map',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Pomiar odsłon, wizyt i sesji, Rozpoznawanie powracających odwiedzających na podstawie identyfikatora odwiedzającego, Przypisanie źródła wizyty (odsyłacz, atrybucja), opcjonalnie mapy cieplne i testy A/B',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Pomiar odsłon, wizyt i sesji na własnym serwerze, Rozpoznawanie powracających odwiedzających na podstawie identyfikatora odwiedzającego, Przypisanie źródła wizyty (odsyłacz, atrybucja), opcjonalnie mapy cieplne i testy A/B',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Dostarczanie i uruchamianie tagów na stronie, Zarządzanie decyzją o zgodzie dla tagów skonfigurowanych w kontenerze',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Pomiar kampanii reklamowych i konwersji na stronie, Tworzenie grup odbiorców i retargeting',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Śledzenie konwersji kampanii Microsoft Advertising, Tworzenie list remarketingowych, Pomiar odsłon i zdarzeń niestandardowych',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Nagrywanie i odtwarzanie sesji, Mapy cieplne kliknięć i przewijania, Łączenie kilku odsłon w jedną sesję, zautomatyzowane analizy zachowań użytkowników',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Realizacja płatności zainicjowanej przez odwiedzającego, Osadzanie pól karty we własnym procesie płatności, aby dane karty nie przechodziły przez sklep, Zapobieganie oszustwom i obowiązki ustawowe dostawcy usług płatniczych',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Rejestrowanie ruchów myszy, Odtwarzanie sesji, Analiza sposobu korzystania',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Dostarczanie kafelków map do osadzonych map, Działanie usług map i ochrona przed nadużyciami',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Obsługa płatności, Zapobieganie oszustwom',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Śledzenie konwersji kampanii reklamowych Pinterest, Tworzenie grup odbiorców i retargeting, Przypisanie działań na stronie do wcześniej obejrzanych reklam',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Pomiar odsłon i zdarzeń, Rozpoznawanie odwiedzających i przypisywanie ich do sesji, Analiza pochodzenia i kampanii, Analiza urządzenia, przeglądarki i szacowanej lokalizacji, Analiza e-commerce i celów',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Zliczanie odsłon i wizyt, Analiza źródeł odesłań, Analiza przeglądarki, systemu operacyjnego i typu urządzenia, przybliżone przypisanie geograficzne do kraju, regionu i miasta',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Rejestrowanie i przesyłanie błędów aplikacji z przeglądarki, opcjonalnie nagrywanie sesji (Session Replay), domyślnie z zamaskowanymi tekstami, obrazami i danymi wpisywanymi',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Działanie koszyka i procesu płatności w sklepie, Przypisanie sesji oraz języka lub kraju, Pomiar zasięgu na potrzeby prowadzącego sklep, Dane marketingowe dla interfejsów zakupowych',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Osadzanie i odtwarzanie utworów, albumów, playlist i odcinków podcastów, Zbieranie informacji o zachowaniu tych użytkowników w sieci przez Spotify i podmioty trzecie, Umożliwia podmiotom trzecim ustawianie plików cookie w przeglądarce tych użytkowników',
    'Besucherzählung, Reichweitenmessung'
        => 'Zliczanie odwiedzających, Pomiar zasięgu',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Wykrywanie oszustw i ocena ryzyka prób płatności, Udostępnianie pól płatności Stripe Elements, Wykrywanie botów i zautomatyzowanego zachowania w procesie zamawiania',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Pomiar i poprawa skuteczności kampanii reklamowych, Personalizacja reklam na platformie TikTok, Przekazywanie zdarzeń ze strony do serwisu TikTok',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Osadzanie formularzy i ankiet na stronie, Rejestrowanie odpowiedzi i przekazywanie ich operatorowi formularza',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Osadzanie i odtwarzanie filmów na stronie, Zapamiętywanie ustawień odtwarzacza widza (głośność, jakość, napisy), Pomiar zasięgu osadzonych filmów przez Vimeo, Ochrona odtwarzacza przed botami i nadużyciami',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Testy A/B i testy split-URL na stronie, Przydzielenie i utrzymanie wariantu przez wiele wizyt, Pomiar celów i konwersji kampanii, Pomiar odwiedzających i sesji na potrzeby analiz, Zarządzanie sprzeciwem i zgodą na pomiar',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Przypisanie koszyka do odwiedzającej, Wykrywanie, czy zawartość koszyka uległa zmianie, Wyświetlanie ostatnio oglądanych produktów w odpowiednim widżecie, Zapamiętywanie ukrycia komunikatu sklepu',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Logowanie i rozpoznawanie sesji w panelu administracyjnym, Przechowywanie danych z formularza komentarza na potrzeby kolejnych komentarzy, Zapamiętywanie ustawień widoku panelu administracyjnego, Sprawdzenie, czy WordPress może ustawiać pliki cookie, Zapisywanie wybranego języka',
    'Conversion-Messung, Retargeting'
        => 'Pomiar konwersji, Retargeting',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Odtwarzanie osadzonych filmów, Bezpieczeństwo, Rozpoznawanie widza do celów reklamowych',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Czat na żywo i kanał wiadomości wsparcia na stronie, Rozpoznawanie odwiedzającego między odsłonami i kartami, Zapamiętywanie stanu i ustawień widżetu, Pomiar sesji i zdarzeń na stronach z widżetem',
];
