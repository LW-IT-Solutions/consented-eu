<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Slowakisch.
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
        => 'A/B testy a split-URL testy na webe',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Vyúčtovanie a zabezpečenie volaní máp',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Dokončenie prihlásenia do obchodu; nevyhnutné',
    'Abspielen eingebetteter Videos'
        => 'Prehrávanie vložených videí',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Spracovanie platby vyvolanej návštevníkom',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Spracovanie platieb, ak je termín spoplatnený',
    'Analyse des Nutzungsverhaltens'
        => 'Analýza správania pri používaní',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Analytické údaje nákupných rozhraní; analýza',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Analytické údaje obchodu; poskytovateľ ich vedie ako analýzu',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Prihlasovacie údaje pre administráciu na /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Prihlásenie do Shop Pay; nevyhnutné',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Prihlásenie a rozpoznanie relácie v administrácii',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Anonymná štatistika k službe a ďalšie technické účely, okrem iného podpora prístupnosti',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Nastavenia zobrazenia administrácie pre každý účet',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Zapamätanie nastavení zobrazenia administrácie',
    'Anzeige von Bewertungen'
        => 'Zobrazovanie hodnotení',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Zobrazenie rezervačného kalendára a dohodnutie termínov na webe',
    'Anzeigen einer interaktiven Karte'
        => 'Zobrazenie interaktívnej mapy',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'Nastavené na hodnotu 1 zabraňuje odosielaniu udalostí UET do Microsoftu',
    'Aufbau von Remarketing-Listen'
        => 'Vytváranie remarketingových zoznamov',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Nahrávanie a prehrávanie relácií',
    'Aufzeichnung von Mausbewegungen'
        => 'Nahrávanie pohybov myši',
    'Ausblenden des Shop-Hinweises merken'
        => 'Zapamätanie skrytia upozornenia obchodu',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Doručovanie a spúšťanie tagov na webe',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Doručovanie a správa tagov na webe',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Doručovanie mapových dlaždíc vloženým mapám',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Doručovanie obsahu upozornení do pripravených zástupných miest v zdrojovom kóde stránky prostredníctvom ad servera',
    'Auslieferung personalisierter Werbung'
        => 'Doručovanie personalizovanej reklamy',
    'Auslieferung von Anzeigen'
        => 'Doručovanie inzercie',
    'Auslieferung von Bibliotheken und Assets'
        => 'Doručovanie knižníc a súborov',
    'Auslieferung von Schriftarten'
        => 'Doručovanie písem',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Vystavenie tokenu overovaného serverom webu',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Riadenie prihlasovacích formulárov na webe',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Riadenie vyskakovacích formulárov, aby sa neobjavovali opakovane',
    'Auswahl des Rechenzentrums'
        => 'Výber dátového centra',
    'Auswertung der Verweisquellen'
        => 'Vyhodnotenie zdrojov odkazov',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Vyhodnotenie cieľovej skupiny webu (demografia webu)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Vyhodnotenie prehliadača, operačného systému a typu zariadenia',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Vyhodnotenie zariadenia, prehliadača a odhadovanej polohy',
    'Auswertung von Herkunft und Kampagnen'
        => 'Vyhodnotenie pôvodu a kampaní',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Overuje požiadavky koncového používateľa',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Obmedzenie frekvencie zobrazovania',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Dokladá úspešne absolvované overenie, aby odpadli ďalšie challenge v danej zóne',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Poskytnutie platobných polí Stripe Elements',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Poskytovanie prístupu k funkciám prístupnosti',
    'Besucherzählung'
        => 'Počítanie návštevníkov',
    'Betrieb des Chat-Widgets'
        => 'Prevádzka chatovacieho widgetu',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Prevádzka mapových služieb a ochrana pred zneužitím',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Prevádzka košíka a platobného procesu obchodu',
    'Betrugs- und Missbrauchserkennung'
        => 'Detekcia podvodov a zneužitia',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Detekcia podvodov pri pokuse o platbu',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Detekcia podvodov a vyhodnotenie rizika pokusov o platbu',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Prevencia podvodov a zákonné povinnosti poskytovateľa platobných služieb',
    'Betrugsprävention'
        => 'Prevencia podvodov',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Predchádzanie podvodom a vyhodnotenie rizika pokusu o platbu',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Vytváranie pseudonymných profilov používania po udelení súhlasu',
    'Bildung von Zielgruppen und Retargeting'
        => 'Vytváranie cieľových skupín a retargeting',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Viaže reláciu na tú istú inštanciu AWS',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Ochrana prehrávača pred botmi a zneužitím',
    'Bot-Abwehr fuer den Player'
        => 'Ochrana prehrávača pred botmi',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Ochrana pred botmi pri doručovaní zdrojov HubSpot',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Identifikátor prehliadača, ktorým LinkedIn rozlišuje zariadenia a rozpoznáva zneužitie',
    'Cloudflare-Bot-Abwehr'
        => 'Ochrana Cloudflare pred botmi',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Detekcia botov Cloudflare na filtrovanie prevádzky',
    'Cloudflare-Ratenbegrenzung'
        => 'Obmedzenie počtu požiadaviek Cloudflare',
    'Conversion-Messung'
        => 'Meranie konverzií',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Sledovanie konverzií pre reklamné kampane LinkedIn',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Sledovanie konverzií pre kampane Microsoft Advertising',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Sledovanie konverzií pre reklamné kampane Pinterest',
    'Darstellung interaktiver Karten auf der Website'
        => 'Zobrazovanie interaktívnych máp na webe',
    'Deduplizieren von Kontakten'
        => 'Odstraňovanie duplicít pri kontaktoch',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Slúži na zobrazovanie a meranie reklamy.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'ID návštevníka naprieč doménami; podľa poskytovateľa cookie tretej strany, používa sa len pri cookies tretích strán aktivovaných v konfiguračnom súbore',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Identifikátor tretej strany na opätovné rozpoznanie návštevníkov',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Identifikátor tretej strany, ktorý sa odovzdáva službe Klaviyo',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Reklamný identifikátor tretej strany na meranie kampaní a personalizáciu na TikTok',
    'E-Commerce- und Zielauswertung'
        => 'Vyhodnotenie e-commerce a cieľov',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Predvyplnenie e-mailovej adresy z formulára na komentáre',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Vkladanie a prehrávanie skladieb, albumov, playlistov a epizód podcastov',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Vkladanie a prehrávanie videí na webe',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Vkladanie formulárov a ankiet do webu',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Vloženie polí platobnej karty do vlastného checkoutu, aby údaje o karte neprechádzali obchodom',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Vloženie externe spravovaného vyhlásenia o cookies',
    'Einbettung von Audioinhalten'
        => 'Vkladanie zvukového obsahu',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Vkladanie reklamných pixelov Google a Facebook na prepojený web',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Zobrazovanie informácií o financovaní a splátkach na stránkach produktov a košíka (on-site messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Jedinečný identifikátor pri meraní naprieč doménami (účty od 14. 6. 2026)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Jedinečný identifikátor pri meraní naprieč doménami (účty pred 14. 6. 2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Jednorazová hodnota proti CSRF v opt-out formulári',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Obsahuje identifikátor používateľa a čas vytvorenia; podľa zdroja sa nastavuje v in-app prehliadači Pinterest, nie na doméne webu',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Zaznamenávanie odpovedí a ich odovzdanie prevádzkovateľovi formulára',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Zaznamenáva používanie webu na účely vyhodnotenia.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Zaznamenávanie vlastných udalostí definovaných prevádzkovateľom',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Zaznamenávanie a prenos chýb aplikácie z prehliadača',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Zaznamenávanie návštevníkov a zobrazení stránok na webe pre marketingovú automatizáciu',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Meranie úspešnosti reklamného prvku a vyúčtovanie provízie',
    'Erhalt des Sitzungszustands'
        => 'Zachovanie stavu relácie',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Rozpoznanie zariadenia na ochranu pred zneužitím',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Rozpoznávanie a odmietanie automatizovaných prístupov pri formulároch',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Rozpoznávanie botov a automatizovaného správania v objednávkovom procese',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Rozpoznanie, či sa obsah košíka zmenil',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Rozpoznáva zmeny obsahu košíka',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Rozpoznáva návštevníkov webu, na ktorom je vložený kód Intercom',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Opätovne rozpoznáva prehliadače na weboch Microsoftu; podľa poskytovateľa sa používa aj na reklamu, cookie tretej strany',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Opätovne rozpoznáva osoby, ktoré píšu prostredníctvom chatovacieho nástroja',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Rozpoznáva zariadenie, z ktorého konverzácia vychádza',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Rozpoznáva jednotlivé zariadenie, ktoré komunikuje s Messengerom, kvôli ochrane pred zneužitím',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Rozpoznáva koncového používateľa, ktorý začína konverzáciu',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Rozpoznáva doménu alebo subdoménu, na ktorej je vložený chatovací widget',
    'Erkennt wiederkehrende Besucher'
        => 'Rozpoznáva vracajúcich sa návštevníkov',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Rozpoznáva, či bol prehliadač reštartovaný',
    'Erkennung von Klickbetrug'
        => 'Detekcia klikacích podvodov',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Zisťuje jedinečné prístupy na web (účty od 14. 6. 2026)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Zisťuje jedinečné prístupy na web (účty pred 14. 6. 2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Umožňuje tretím stranám nastavovať cookies v prehliadači týchto používateľov',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Umožňuje využívanie nástroja prístupnosti',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Umožňuje ďalšie funkcie webu.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Identifikátor prvej strany, ktorý opätovne rozpoznáva návštevníkov a priraďuje udalosti k webu',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Identifikátor návštevníka prvej strany na sledovanie konverzií a remarketing',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Identifikátor relácie prvej strany na priraďovanie udalostí',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Identifikátor relácie prvej strany pre každý pixel na meranie kampaní',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Identifikátor relácie prvej strany na meranie kampaní',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Reklamný identifikátor prvej strany na meranie kampaní a personalizáciu na TikTok',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Cookie prvej strany, ktoré zoskupuje akcie návštevníkov, ktoré Pinterest nedokáže priradiť',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Cookie prvej strany, ktoré ukladá hashované zákaznícke údaje získané cez Automatic Enhanced Match',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Vytvára jedinečný identifikátor pre každého návštevníka (účty od 14. 6. 2026)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Vytvára jedinečný identifikátor pre každého návštevníka (účty pred 14. 6. 2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identifikátor zariadenia na vyhodnotenie udalostí na stránkach s widgetom',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Nastavené pri prihlásení na stránke hosťovanej službou HubSpot',
    'Gewaehlte Sprache speichern'
        => 'Uloženie zvoleného jazyka',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Zosúlaďuje identifikátor MUID naprieč doménami Microsoftu; podľa poskytovateľa cookie tretej strany',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Udržiava správy synchronizované naprieč viacerými kartami',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Uchováva hodnotu parametra pk_campaign',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Uchováva hodnotu parametra utm_campaign',
    'Haelt den Widerspruch gegen die Messung'
        => 'Uchováva námietku proti meraniu',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Uchováva čas vypršania platnosti _uetsid',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Uchováva čas vypršania platnosti _uetvid',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Uchováva typ zdroja návštevnosti pre Tag Manager',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Zaznamenáva identitu návštevníka, okrem iného na odstránenie duplicít pri kontaktoch',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Zaznamenáva rozhodnutie návštevníka o cookies',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Udržiava zobrazenie widgetu pri prechode medzi stránkami konzistentné',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Zaznamenáva vstupnú stránku; analýza',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Uchováva súhlas s meraním pomocou cookies',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Uchováva rozhodnutie používateľa o kategóriách a poskytovateľoch',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Udržiava reláciu prihlásených používateľov a prístup k skorším konverzáciám',
    'Haelt die verweisende Adresse'
        => 'Uchováva odkazujúcu adresu',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Zaznamenáva odkazujúci zdroj; analýza',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Uchováva vlastné premenné relácie (poskytovateľ ich označuje za zastarané)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Zaznamenáva, či smie etracker nastavovať cookies; pri data-block-cookies sa nastavuje volaním API',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Zaznamenáva, ktoré funkčné prepínače vlastník videa aktivoval',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Hlavné cookie na opätovné rozpoznanie návštevníkov',
    'Heatmaps'
        => 'Heatmapy',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Heatmapy kliknutí a správania pri posúvaní',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Uchováva údaje relácie pre heatmapy počas návštevy',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Uchováva informácie o prebiehajúcej relácii (účty od 14. 6. 2026)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Uchováva informácie o prebiehajúcej relácii (účty pred 14. 6. 2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Uchováva vlastné premenné počas návštevy',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Uchováva trvalé údaje na úrovni návštevníka (účty od 14. 6. 2026)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Uchováva trvalé údaje na úrovni návštevníka pre vyhodnotenie Insights (účty pred 14. 6. 2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Zaznamenáva stav súhlasu návštevníka (účty od 14. 6. 2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Zaznamenáva stav súhlasu návštevníka (účty pred 14. 6. 2026)',
    'Hält den Sitzungszustand.'
        => 'Uchováva stav relácie.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Uchováva identifikátor používateľa Clarity a nastavenia pre tento web',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Uchováva priradenie variantu pre A/B testy',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Dočasne zaznamenáva zvolenú kombináciu (účty od 14. 6. 2026)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Dočasne zaznamenáva zvolenú kombináciu (účty pred 14. 6. 2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Zaznamenáva zvolený variant pred vykonaním presmerovania (účty od 14. 6. 2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Zaznamenáva zvolený variant pred vykonaním presmerovania (účty pred 14. 6. 2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Zaznamenáva, cez ktorý odkaz návšteva vznikla',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'V režime Pre-Clearance: uvoľnenie pre ďalšie kontroly WAF v tej istej zóne',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Nepriamy identifikátor člena pre sledovanie konverzií, retargeting a vyhodnocovanie',
    'Inhalt des Warenkorbs; notwendig'
        => 'Obsah košíka; nevyhnutné',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Analytické údaje o kupujúcich v obchode; štatistika',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Jedinečný identifikátor viazaný na kampaň (účty od 14. 6. 2026)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Identifikátor prvého kontaktu s Clarity naprieč všetkými webmi s Clarity; podľa poskytovateľa cookie tretej strany',
    'Kennzeichnet die laufende Sitzung'
        => 'Označuje prebiehajúcu reláciu',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Uchovanie údajov z komentára pre ďalšie komentáre',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Konzistentné zobrazovanie variantov A/B testov',
    'Lastverteilung und Routing'
        => 'Rozloženie záťaže a smerovanie',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Rozloženie záťaže a smerovanie požiadaviek na overenie',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Ukladá nastavenia účtu návštevníka lokálne',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Zobrazuje rovnaký variant stránky v A/B teste',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Živý chat a kanál na správy podpory na webe',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Živý chat a schránka podpory na webe',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Marketingové údaje nákupných rozhraní; marketing',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Marketingové údaje pre nákupné rozhrania',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Uloženie nastavení prehrávača diváka (hlasitosť, kvalita, titulky)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Uloženie stavu a nastavení widgetu',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Zaznamenáva zavretie bannera Global Privacy Control',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Zaznamenáva zavretie informačného bannera',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Zaznamenáva čas synchronizácie s cookie lms_analytics',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Zaznamenáva čas poslednej synchronizácie ID, aby sa neopakovala',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Uchováva pridelený variant (účty od 14. 6. 2026)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Uchováva pridelený variant, aby pri ďalšej návšteve zostal rovnaký (účty pred 14. 6. 2026)',
    'Merkt einen Rabattcode; notwendig'
        => 'Uchováva zľavový kód; nevyhnutné',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Uchováva námietku proti meraniu (účty od 14. 6. 2026)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Uchováva námietku platnú naprieč webmi (účty pred 14. 6. 2026)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Uchováva nastavenia prehrávača, ako je hlasitosť, kvalita a titulky',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Uchováva nastavenie zvukových upozornení',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Pamätá si udelený súhlas s meraním',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Pamätá si námietku proti meraniu',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Zaznamenáva proaktívne správy, ktoré návštevník zavrel',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Zaznamenáva, že návštevník zavrel popis spúšťacieho tlačidla',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Zaznamenáva, či je widget otvorený, alebo zatvorený',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Zaznamenáva, že sa návštevník nemá zúčastniť žiadnej kampane (účty pred 14. 6. 2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Zaznamenáva, že je návštevník z kampane vylúčený (účty od 14. 6. 2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Zaznamenáva, že je návštevník z kampane vylúčený (účty pred 14. 6. 2026)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Zaznamenáva, že bolo upozornenie o súhlase zatvorené',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Zaznamenáva, že bolo upozornenie obchodu zatvorené',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Zaznamenáva, že sa otázka na cookies nemá znova zobraziť',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Zaznamenáva, že sa tag už spustil',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Zaznamenáva, či sa u tohto návštevníka meria hĺbka posúvania',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Zaznamenáva, či je okno chatu otvorené',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Zaznamenáva, či sa identifikátor MUID odovzdáva reklamnému identifikátoru; podľa poskytovateľa je vždy 0, cookie tretej strany',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Meranie otvorení a kliknutí v e-mailových kampaniach',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Meranie relácií a udalostí na stránkach s widgetom',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Meranie relácií a priradenie zdroja návštevy',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Meranie dostupnosti služby zo strany Google',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Meranie času načítania a kľúčových ukazovateľov stránky (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Meranie hĺbky posúvania a udalostí kliknutia',
    'Messung der Werbewirkung'
        => 'Meranie účinnosti reklamy',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Meranie správania používateľov na webe',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Meranie a personalizácia reklám v reklamnej sieti TikTok Pangle',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Meranie a zlepšovanie výkonu reklamných kampaní',
    'Messung von Auslieferungen und Klicks'
        => 'Meranie zobrazení a kliknutí',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Meranie návštevníkov a relácií na vyhodnocovanie',
    'Messung von Conversions'
        => 'Meranie konverzií',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Meranie zobrazení stránok a návštev',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Meranie zobrazení stránok a udalostí',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Meranie zobrazení stránok a správania používateľov',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Meranie zobrazení stránok a vlastných udalostí',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Meranie zobrazení stránok, návštev a relácií',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Meranie zobrazení stránok, návštev a relácií na vlastnom serveri',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Meranie reklamných kampaní a konverzií na webe',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Meranie cieľov a konverzií kampane',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Načítanie mapových dlaždíc, písem a štýlov od poskytovateľa',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Predvyplnenie mena z formulára na komentáre',
    'Nutzer-ID'
        => 'ID používateľa',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Priraďuje košík správnej krajine; nevyhnutné',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Priraďuje košík v databáze správnej zákazníčke',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Priraďuje akcie návštevy k relácii',
    'Personalisierung der Werbung auf TikTok'
        => 'Personalizácia reklamy na platforme TikTok',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Overenie, či môže WordPress nastavovať cookies',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Overuje schopnosť prehliadača prijímať cookies; nevyhnutné',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Overuje, či môže WordPress nastavovať cookies',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Kontrolná hodnota hesla obchodu; nevyhnutné',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Kontrolné cookie poskytovateľa (účty pred 14. 6. 2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Overuje, či prehliadač prijíma cookies (účty od 14. 6. 2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Overuje, či prehliadač prijíma cookies (účty pred 14. 6. 2026)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Overuje, či prehliadač prijíma cookies (podľa poskytovateľa len v Internet Exploreri)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Obmedzenie počtu požiadaviek u poskytovateľa CDN služby HubSpot',
    'Reichweiten- und Nutzungsmessung'
        => 'Meranie dosahu a využitia',
    'Reichweitenmessung'
        => 'Meranie dosahu',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Meranie dosahu vložených videí zo strany Vimeo',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Meranie dosahu pre prevádzkovateľa obchodu',
    'Remarketing und Zielgruppenbildung'
        => 'Remarketing a tvorba cieľových skupín',
    'Retargeting'
        => 'Retargeting',
    'Retargeting von Website-Besuchern'
        => 'Retargeting návštevníkov webu',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Analýza rizika na rozlíšenie človeka a bota',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Zberné cookie, podľa poskytovateľa sa vytvára len v prehliadači Safari (účty od 14. 6. 2026)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Zberné cookie, podľa poskytovateľa sa vytvára len v prehliadači Safari (účty pred 14. 6. 2026)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Zhromažďovanie informácií o správaní týchto používateľov pri prehliadaní zo strany Spotify a tretích strán',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Prepínač, ktorý si prevádzkovateľ webu nastaví sám, aby zabránil sledovaniu Klaviyo',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Ochrana prihlásenia členov proti falšovaniu',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Ochrana formulárov pred automatizovaným zneužitím',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Ochrana pred automatizovanými požiadavkami (spam, credential stuffing)',
    'Sicherheit'
        => 'Zabezpečenie',
    'Sicherheitsfunktionen'
        => 'Bezpečnostné funkcie',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Bezpečnostné funkcie, ak je aktívna voliteľná funkcia User Journeys',
    'Sitzung'
        => 'Relácia',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Priradenie relácie a jazyka, prípadne krajiny',
    'Sitzungsaufzeichnung'
        => 'Záznam relácie',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identifikátor relácie na vyhodnocovanie udalostí na stránkach s widgetom',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Identifikátor relácie pre štatistiku obchodu; štatistika',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Kľúč relácie služby Answer Bot',
    'Sitzungswiedergabe'
        => 'Prehrávanie relácií',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Ukladá autentifikačný token po prihlásení',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Ukladá zakódované heslo pre videá chránené heslom',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Ukladá kľúč zvoleného jazyka',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Ukladá voľbu návštevníka týkajúcu sa súkromia; nevyhnutné',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Ukladá rozhodnutie návštevníka o súhlase',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Ukladá identifikátor zariadenia návštevníka na overenie v chatovacom widgete',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Ukladá identifikátor používateľa prihláseného na webinár',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Ukladá identifikátor kliknutia fbclid, aby bolo možné priradiť udalosť na webe k reklame',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Ukladá identifikátor používateľa z registračného formulára predradeného videu',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Ukladá identifikátor kliknutia TikTok na priradenie konverzií',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Ukladá jedinečné ID návštevníka na opätovné rozpoznanie',
    'Speichert die zugestimmten Kategorien'
        => 'Ukladá kategórie, s ktorými bol udelený súhlas',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Poskytuje údaje widgetu naposledy prezeraných produktov',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Riadi, či sa identifikátor MUID obnovuje; podľa poskytovateľa cookie tretej strany',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Technicky nevyhnutné na prevádzku a zabezpečenie webu.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Nesie údaje relácie a pokladne obchodu; poskytovateľ ich vedie ako nevyhnutné',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Zabezpečuje funkciu námietky (opt-out)',
    'Transaktionssicherheit'
        => 'Zabezpečenie transakcií',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Zabezpečuje analýzu rizika reCAPTCHA.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Odovzdávanie udalostí z webu službe TikTok',
    'Umfragen'
        => 'Prieskumy',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Bráni odovzdávaniu údajov službe HubSpot',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Po zatvorení potlačí uvítaciu správu chatu',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Rozlišuje prehliadače, ktoré navštevujú stránky Microsoft; so súhlasom aj na reklamu',
    'Unterscheidet einzelne Nutzer.'
        => 'Rozlišuje jednotlivých používateľov.',
    'Unterscheidung einzelner Nutzer'
        => 'Rozlíšenie jednotlivých používateľov',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Rozlíšenie medzi človekom a botom pri formulároch a prihláseniach',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Spája viacero zobrazení stránok do jedného záznamu relácie',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Bráni trvalému zobrazovaniu bannera v prísnom režime',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Rozosielanie signálov súhlasu tagom Google',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Správa rozhodnutia o súhlase pre tagy nakonfigurované v kontajneri',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Správa námietky proti meraniu',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Správa námietky a súhlasu s meraním',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Google ho zaraďuje do kategórií štatistika a reklama.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Google ho zaraďuje do kategórií analýza, reklama a zabezpečenie.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Google ho zaraďuje do kategórií funkčnosť, reklama a zabezpečenie.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Google ho zaraďuje do kategórií zabezpečenie a funkčnosť.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Google ho zaraďuje do kategórií zabezpečenie a reklama.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Google ho zaraďuje do kategórií zabezpečenie, analýza, funkčnosť a reklama.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Google ho zaraďuje do kategórií zabezpečenie, funkčnosť a reklama.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Google ho zaraďuje do kategórií reklama a zabezpečenie.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Google ho zaraďuje do kategórie analýza; presnejší účel Google neuvádza.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Google ho zaraďuje do kategórie funkčnosť.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Google ho zaraďuje do kategórie zabezpečenie.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Google ho zaraďuje do kategórie reklama.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Microsoft ho uvádza medzi cookies, ktoré sa bez súhlasu nesmú nastavovať; vlastný opis účelu Microsoft neuvádza',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Identifikátor vytvorený službou Vimeo na meranie dosahu',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Mena košíka po dokončení objednávky; nevyhnutné',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Pravdepodobnostné priradenie prehliadača k osobe',
    'Warenkorb einer Besucherin zuordnen'
        => 'Priradenie košíka návštevníčke',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Predvyplnenie adresy webu z formulára na komentáre',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Rozpoznanie diváka na reklamné účely',
    'Werbepersonalisierung'
        => 'Personalizácia reklamy',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Rovnaké ako _pin_unauth, ale ako cookie tretej strany',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Rozpoznanie návštevníka počas rezervácie',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Rozpoznanie návštevníka medzi zobrazeniami stránok a kartami',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Rozpoznávanie a identifikácia návštevníkov webu',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Rozpoznávanie návštevníkov naprieč viacerými návštevami',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Rozpoznávanie návštevníkov prepojených webov na retargeting',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Rozpoznávanie vracajúcich sa návštevníkov a priradenie skorších konverzácií',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Rozpoznanie návštevníka a uloženie jeho charakteristík',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Rozpoznanie prehliadača prostredníctvom identifikátora Criteo',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Rozpoznanie používateľa; len so súhlasom, v predvolenom nastavení blokované',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Rozpoznanie prehliadača pri neskorších návštevách po udelení súhlasu',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Rozpoznanie návštevníkov a ich priradenie k reláciám',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'Rozpoznanie členov LinkedIn mimo LinkedIn na reklamné účely',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Rozpoznanie používateľov po udelení súhlasu',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Opätovné rozpoznanie vracajúcich sa návštevníkov podľa ID návštevníka',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Nastavuje sa, keď sa spustil cieľ kampane (účty od 14. 6. 2026)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Nastavuje sa, keď sa spustil cieľ kampane (účty pred 14. 6. 2026)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Nastavuje sa, keď osoba navštívi web s vloženým tagom Pinterest',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Nastavuje sa, keď sa priradenie podarí bez existujúcich cookies, napríklad cez Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Nastavuje ho JavaScriptový tag z údajov, ktoré Pinterest odovzdáva pri platenej návštevnosti',
    'Zaehlt und begrenzt Sitzungen'
        => 'Počíta a obmedzuje relácie',
    'Zahlungsabwicklung'
        => 'Spracovanie platieb',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Ukazuje, či relácia stále beží, alebo je nová',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Oznamuje rozhraniu, že ste prihlásení a pod akým účtom',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Náhodný identifikátor prehliadača, ktorý priraďuje udalosti pixela daného webu k jednému prehliadaču',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Zobrazenie naposledy prezeraných produktov v príslušnom widgete',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Priradenie správania na webe k profilu',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Priradenie pôvodu návštevy (referrer, atribúcia)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Priradenie návštevníka ku kontaktu v účte Brevo prostredníctvom e-mailovej adresy',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Priradenie transakcií, ako sú leady a predaje, k publisherovi',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Priradenie akcií na webe k skôr zobrazeným reklamám',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Zlúčenie viacerých zobrazení stránok do jednej relácie',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Doplnkové údaje k zaznamenaným udalostiam priebehu návštevy',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Pridelenie a zachovanie variantu naprieč viacerými návštevami',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Medzipamäť pre udalosti určené pomocou CSS selektorov',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Medzipamäť pre údaje nástroja Messenger a údaje návštevníkov v úložisku prehliadača',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Medzipamäť pre záznamy nástroja Tag Manager',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Medzipamäť pre meranie hĺbky posúvania',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Medzipamäť pre premenné nástroja Tag Manager',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Medzipamäť pre nastavenia widgetu, aby sa predišlo opakovaným požiadavkám na server',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Ukladanie údajov nástroja Messenger a údajov návštevníkov do medzipamäte prehliadača',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Počíta relácie vytvorené pre jedného návštevníka (účty od 14. 6. 2026)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Počíta, koľkokrát bol prehliadač počas merania zatvorený a znova otvorený (účty pred 14. 6. 2026)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Počítanie zobrazení stránok a návštev',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'automatizované vyhodnocovanie správania používateľov',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'hrubé geografické zaradenie na úrovni krajiny, regiónu a mesta',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'voliteľne záznam relácie (Session Replay), v predvolenom nastavení s maskovanými textami, obrázkami a vstupmi',
    'optional Heatmaps und A/B-Tests'
        => 'voliteľne heatmapy a A/B testy',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Odovzdáva zdroj odkazu pri Split-URL testoch (účty od 14. 6. 2026)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Odovzdáva zdroj odkazu pri Split-URL testoch (účty pred 14. 6. 2026)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Priradenie transakcií, ako sú leady a predaje, k publisherovi, Meranie úspešnosti reklamného prvku a vyúčtovanie provízie',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Zaznamenávanie návštevníkov a zobrazení stránok na webe pre marketingovú automatizáciu, Priradenie návštevníka ku kontaktu v účte Brevo prostredníctvom e-mailovej adresy, Zaznamenávanie vlastných udalostí definovaných prevádzkovateľom',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Zobrazenie rezervačného kalendára a dohodnutie termínov na webe, Rozpoznanie návštevníka počas rezervácie, Spracovanie platieb, ak je termín spoplatnený',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Rozpoznávanie a odmietanie automatizovaných prístupov pri formulároch, Vystavenie tokenu overovaného serverom webu, V režime Pre-Clearance: uvoľnenie pre ďalšie kontroly WAF v tej istej zóne',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Meranie zobrazení stránok a návštev, Meranie času načítania a kľúčových ukazovateľov stránky (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Doručovanie personalizovanej reklamy, Meranie účinnosti reklamy, Rozpoznanie prehliadača prostredníctvom identifikátora Criteo',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Meranie správania používateľov na webe, Vytváranie pseudonymných profilov používania po udelení súhlasu, Rozpoznanie prehliadača pri neskorších návštevách po udelení súhlasu',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Meranie zobrazení stránok a správania používateľov, Meranie hĺbky posúvania a udalostí kliknutia, Rozpoznanie používateľov po udelení súhlasu, Správa námietky proti meraniu',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Rozlíšenie medzi človekom a botom pri formulároch a prihláseniach, Ochrana pred automatizovanými požiadavkami (spam, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Meranie konverzií, Remarketing a tvorba cieľových skupín, Obmedzenie frekvencie zobrazovania, Detekcia klikacích podvodov',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Doručovanie inzercie, Obmedzenie frekvencie zobrazovania, Detekcia podvodov a zneužitia, Meranie zobrazení a kliknutí',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Rozlíšenie jednotlivých používateľov, Zachovanie stavu relácie, Meranie dosahu a využitia',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Zobrazenie interaktívnej mapy, Meranie dostupnosti služby zo strany Google',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Analýza rizika na rozlíšenie človeka a bota, Ochrana formulárov pred automatizovaným zneužitím',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Doručovanie a správa tagov na webe, Rozosielanie signálov súhlasu tagom Google',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Rozlíšenie medzi človekom a botom pri formulároch a prihláseniach, Rozloženie záťaže a smerovanie požiadaviek na overenie, Poskytovanie prístupu k funkciám prístupnosti',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Heatmapy, Záznam relácie, Prieskumy',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Rozpoznávanie návštevníkov naprieč viacerými návštevami, Meranie relácií a priradenie zdroja návštevy, Odstraňovanie duplicít pri kontaktoch, Prevádzka chatovacieho widgetu, Konzistentné zobrazovanie variantov A/B testov',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Živý chat a schránka podpory na webe, Rozpoznávanie vracajúcich sa návštevníkov a priradenie skorších konverzácií, Rozpoznanie zariadenia na ochranu pred zneužitím, Ukladanie údajov nástroja Messenger a údajov návštevníkov do medzipamäte prehliadača',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Zobrazovanie informácií o financovaní a splátkach na stránkach produktov a košíka (on-site messaging), Doručovanie obsahu upozornení do pripravených zástupných miest v zdrojovom kóde stránky prostredníctvom ad servera',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Rozpoznávanie a identifikácia návštevníkov webu, Priradenie správania na webe k profilu, Riadenie prihlasovacích formulárov na webe',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Sledovanie konverzií pre reklamné kampane LinkedIn, Retargeting návštevníkov webu, Vyhodnotenie cieľovej skupiny webu (demografia webu)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Rozpoznávanie návštevníkov prepojených webov na retargeting, Riadenie vyskakovacích formulárov, aby sa neobjavovali opakovane, Meranie otvorení a kliknutí v e-mailových kampaniach, Vkladanie reklamných pixelov Google a Facebook na prepojený web',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Zobrazovanie interaktívnych máp na webe, Načítanie mapových dlaždíc, písem a štýlov od poskytovateľa, Vyúčtovanie a zabezpečenie volaní máp',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Meranie zobrazení stránok, návštev a relácií, Opätovné rozpoznanie vracajúcich sa návštevníkov podľa ID návštevníka, Priradenie pôvodu návštevy (referrer, atribúcia), voliteľne heatmapy a A/B testy',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Meranie zobrazení stránok, návštev a relácií na vlastnom serveri, Opätovné rozpoznanie vracajúcich sa návštevníkov podľa ID návštevníka, Priradenie pôvodu návštevy (referrer, atribúcia), voliteľne heatmapy a A/B testy',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Doručovanie a spúšťanie tagov na webe, Správa rozhodnutia o súhlase pre tagy nakonfigurované v kontajneri',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Meranie reklamných kampaní a konverzií na webe, Vytváranie cieľových skupín a retargeting',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Sledovanie konverzií pre kampane Microsoft Advertising, Vytváranie remarketingových zoznamov, Meranie zobrazení stránok a vlastných udalostí',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Nahrávanie a prehrávanie relácií, Heatmapy kliknutí a správania pri posúvaní, Zlúčenie viacerých zobrazení stránok do jednej relácie, automatizované vyhodnocovanie správania používateľov',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Spracovanie platby vyvolanej návštevníkom, Vloženie polí platobnej karty do vlastného checkoutu, aby údaje o karte neprechádzali obchodom, Prevencia podvodov a zákonné povinnosti poskytovateľa platobných služieb',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Nahrávanie pohybov myši, Prehrávanie relácií, Analýza správania pri používaní',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Doručovanie mapových dlaždíc vloženým mapám, Prevádzka mapových služieb a ochrana pred zneužitím',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Spracovanie platieb, Prevencia podvodov',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Sledovanie konverzií pre reklamné kampane Pinterest, Vytváranie cieľových skupín a retargeting, Priradenie akcií na webe k skôr zobrazeným reklamám',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Meranie zobrazení stránok a udalostí, Rozpoznanie návštevníkov a ich priradenie k reláciám, Vyhodnotenie pôvodu a kampaní, Vyhodnotenie zariadenia, prehliadača a odhadovanej polohy, Vyhodnotenie e-commerce a cieľov',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Počítanie zobrazení stránok a návštev, Vyhodnotenie zdrojov odkazov, Vyhodnotenie prehliadača, operačného systému a typu zariadenia, hrubé geografické zaradenie na úrovni krajiny, regiónu a mesta',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Zaznamenávanie a prenos chýb aplikácie z prehliadača, voliteľne záznam relácie (Session Replay), v predvolenom nastavení s maskovanými textami, obrázkami a vstupmi',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Prevádzka košíka a platobného procesu obchodu, Priradenie relácie a jazyka, prípadne krajiny, Meranie dosahu pre prevádzkovateľa obchodu, Marketingové údaje pre nákupné rozhrania',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Vkladanie a prehrávanie skladieb, albumov, playlistov a epizód podcastov, Zhromažďovanie informácií o správaní týchto používateľov pri prehliadaní zo strany Spotify a tretích strán, Umožňuje tretím stranám nastavovať cookies v prehliadači týchto používateľov',
    'Besucherzählung, Reichweitenmessung'
        => 'Počítanie návštevníkov, Meranie dosahu',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Detekcia podvodov a vyhodnotenie rizika pokusov o platbu, Poskytnutie platobných polí Stripe Elements, Rozpoznávanie botov a automatizovaného správania v objednávkovom procese',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Meranie a zlepšovanie výkonu reklamných kampaní, Personalizácia reklamy na platforme TikTok, Odovzdávanie udalostí z webu službe TikTok',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Vkladanie formulárov a ankiet do webu, Zaznamenávanie odpovedí a ich odovzdanie prevádzkovateľovi formulára',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Vkladanie a prehrávanie videí na webe, Uloženie nastavení prehrávača diváka (hlasitosť, kvalita, titulky), Meranie dosahu vložených videí zo strany Vimeo, Ochrana prehrávača pred botmi a zneužitím',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'A/B testy a split-URL testy na webe, Pridelenie a zachovanie variantu naprieč viacerými návštevami, Meranie cieľov a konverzií kampane, Meranie návštevníkov a relácií na vyhodnocovanie, Správa námietky a súhlasu s meraním',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Priradenie košíka návštevníčke, Rozpoznanie, či sa obsah košíka zmenil, Zobrazenie naposledy prezeraných produktov v príslušnom widgete, Zapamätanie skrytia upozornenia obchodu',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Prihlásenie a rozpoznanie relácie v administrácii, Uchovanie údajov z komentára pre ďalšie komentáre, Zapamätanie nastavení zobrazenia administrácie, Overenie, či môže WordPress nastavovať cookies, Uloženie zvoleného jazyka',
    'Conversion-Messung, Retargeting'
        => 'Meranie konverzií, Retargeting',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Prehrávanie vložených videí, Zabezpečenie, Rozpoznanie diváka na reklamné účely',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Živý chat a kanál na správy podpory na webe, Rozpoznanie návštevníka medzi zobrazeniami stránok a kartami, Uloženie stavu a nastavení widgetu, Meranie relácií a udalostí na stránkach s widgetom',
];
