<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Tschechisch.
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
        => 'A/B testy a split-URL testy na webu',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Vyúčtování a zabezpečení volání map',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Dokončení přihlášení k obchodu; nezbytné',
    'Abspielen eingebetteter Videos'
        => 'Přehrávání vložených videí',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Zpracování platby vyvolané návštěvníkem',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Zpracování plateb, pokud je termín zpoplatněn',
    'Analyse des Nutzungsverhaltens'
        => 'Analýza chování při používání',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Analytická data nákupních rozhraní; analýza',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Analytická data obchodu; poskytovatel je vede jako analýzu',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Přihlašovací údaje pro administraci na /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Přihlášení k Shop Pay; nezbytné',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Přihlášení a rozpoznání relace v administraci',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Anonymní statistika ke službě a další technické účely, mimo jiné podpora přístupnosti',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Nastavení zobrazení administrace pro každý účet',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Zapamatování nastavení zobrazení administrace',
    'Anzeige von Bewertungen'
        => 'Zobrazování hodnocení',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Zobrazení rezervačního kalendáře a sjednávání termínů na webu',
    'Anzeigen einer interaktiven Karte'
        => 'Zobrazení interaktivní mapy',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'Nastaveno na hodnotu 1 zabraňuje odesílání událostí UET do Microsoftu',
    'Aufbau von Remarketing-Listen'
        => 'Vytváření remarketingových seznamů',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Nahrávání a přehrávání relací',
    'Aufzeichnung von Mausbewegungen'
        => 'Nahrávání pohybů myši',
    'Ausblenden des Shop-Hinweises merken'
        => 'Zapamatování skrytí upozornění obchodu',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Doručování a spouštění tagů na webu',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Doručování a správa tagů na webu',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Doručování mapových dlaždic vloženým mapám',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Doručování obsahu upozornění do připravených zástupných míst ve zdrojovém kódu stránky prostřednictvím ad serveru',
    'Auslieferung personalisierter Werbung'
        => 'Doručování personalizované reklamy',
    'Auslieferung von Anzeigen'
        => 'Doručování inzerce',
    'Auslieferung von Bibliotheken und Assets'
        => 'Doručování knihoven a souborů',
    'Auslieferung von Schriftarten'
        => 'Doručování písem',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Vystavení tokenu ověřovaného serverem webu',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Řízení přihlašovacích formulářů na webu',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Řízení vyskakovacích formulářů, aby se neobjevovaly opakovaně',
    'Auswahl des Rechenzentrums'
        => 'Výběr datového centra',
    'Auswertung der Verweisquellen'
        => 'Vyhodnocení zdrojů odkazů',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Vyhodnocení cílové skupiny webu (demografie webu)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Vyhodnocení prohlížeče, operačního systému a typu zařízení',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Vyhodnocení zařízení, prohlížeče a odhadované polohy',
    'Auswertung von Herkunft und Kampagnen'
        => 'Vyhodnocení původu a kampaní',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Ověřuje požadavky koncového uživatele',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Omezení četnosti zobrazení',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Dokládá úspěšně absolvované ověření, aby odpadly další challenge v dané zóně',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Poskytnutí platebních polí Stripe Elements',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Poskytování přístupu k funkcím přístupnosti',
    'Besucherzählung'
        => 'Počítání návštěvníků',
    'Betrieb des Chat-Widgets'
        => 'Provoz chatovacího widgetu',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Provoz mapových služeb a ochrana před zneužitím',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Provoz košíku a platebního procesu obchodu',
    'Betrugs- und Missbrauchserkennung'
        => 'Detekce podvodů a zneužití',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Detekce podvodů při pokusu o platbu',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Detekce podvodů a vyhodnocení rizika pokusů o platbu',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Prevence podvodů a zákonné povinnosti poskytovatele platebních služeb',
    'Betrugsprävention'
        => 'Prevence podvodů',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Předcházení podvodům a vyhodnocení rizika pokusu o platbu',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Vytváření pseudonymních profilů používání po udělení souhlasu',
    'Bildung von Zielgruppen und Retargeting'
        => 'Vytváření cílových skupin a retargeting',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Váže relaci na tutéž instanci AWS',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Ochrana přehrávače před boty a zneužitím',
    'Bot-Abwehr fuer den Player'
        => 'Ochrana přehrávače před boty',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Ochrana před boty při doručování zdrojů HubSpot',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Identifikátor prohlížeče, kterým LinkedIn rozlišuje zařízení a rozpoznává zneužití',
    'Cloudflare-Bot-Abwehr'
        => 'Ochrana Cloudflare před boty',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Detekce botů Cloudflare pro filtrování provozu',
    'Cloudflare-Ratenbegrenzung'
        => 'Omezení počtu požadavků Cloudflare',
    'Conversion-Messung'
        => 'Měření konverzí',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Sledování konverzí pro reklamní kampaně LinkedIn',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Sledování konverzí pro kampaně Microsoft Advertising',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Sledování konverzí pro reklamní kampaně Pinterest',
    'Darstellung interaktiver Karten auf der Website'
        => 'Zobrazování interaktivních map na webu',
    'Deduplizieren von Kontakten'
        => 'Odstraňování duplicit u kontaktů',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Slouží k zobrazování a měření reklamy.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'ID návštěvníka napříč doménami; podle poskytovatele cookie třetí strany, používá se jen při cookies třetích stran aktivovaných v konfiguračním souboru',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Identifikátor třetí strany pro opětovné rozpoznání návštěvníků',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Identifikátor třetí strany, který se předává službě Klaviyo',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Reklamní identifikátor třetí strany pro měření kampaní a personalizaci na TikTok',
    'E-Commerce- und Zielauswertung'
        => 'Vyhodnocení e-commerce a cílů',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Předvyplnění e-mailové adresy z formuláře pro komentáře',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Vkládání a přehrávání skladeb, alb, playlistů a dílů podcastů',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Vkládání a přehrávání videí na webu',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Vkládání formulářů a anket do webu',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Vložení polí platební karty do vlastního checkoutu, aby údaje o kartě neprocházely obchodem',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Vložení externě spravovaného prohlášení o cookies',
    'Einbettung von Audioinhalten'
        => 'Vkládání zvukového obsahu',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Vkládání reklamních pixelů Google a Facebook na propojený web',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Zobrazování informací o financování a splátkách na stránkách produktů a košíku (on-site messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Jedinečný identifikátor při měření napříč doménami (účty od 14. 6. 2026)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Jedinečný identifikátor při měření napříč doménami (účty před 14. 6. 2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Jednorázová hodnota proti CSRF v opt-out formuláři',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Obsahuje identifikátor uživatele a čas vytvoření; podle zdroje se nastavuje v in-app prohlížeči Pinterest, nikoli na doméně webu',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Zaznamenávání odpovědí a jejich předání provozovateli formuláře',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Zaznamenává používání webu pro účely vyhodnocení.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Zaznamenávání vlastních událostí definovaných provozovatelem',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Zaznamenávání a přenos chyb aplikace z prohlížeče',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Zaznamenávání návštěvníků a zobrazení stránek na webu pro marketingovou automatizaci',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Měření úspěšnosti reklamního prvku a vyúčtování provize',
    'Erhalt des Sitzungszustands'
        => 'Zachování stavu relace',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Rozpoznání zařízení pro ochranu před zneužitím',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Rozpoznávání a odmítání automatizovaných přístupů u formulářů',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Rozpoznávání botů a automatizovaného chování v objednávkovém procesu',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Rozpoznání, zda se obsah košíku změnil',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Rozpoznává změny obsahu košíku',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Rozpoznává návštěvníky webu, na kterém je vložen kód Intercom',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Opětovně rozpoznává prohlížeče na webech Microsoftu; podle poskytovatele se používá i pro reklamu, cookie třetí strany',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Opětovně rozpoznává osoby, které píší prostřednictvím chatovacího nástroje',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Rozpoznává zařízení, ze kterého konverzace vychází',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Rozpoznává jednotlivé zařízení, které komunikuje s Messengerem, kvůli ochraně před zneužitím',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Rozpoznává koncového uživatele, který konverzaci zahajuje',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Rozpoznává doménu nebo subdoménu, na které je chatovací widget vložen',
    'Erkennt wiederkehrende Besucher'
        => 'Rozpoznává vracející se návštěvníky',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Rozpoznává, zda byl prohlížeč restartován',
    'Erkennung von Klickbetrug'
        => 'Detekce klikacích podvodů',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Zjišťuje jedinečné přístupy na web (účty od 14. 6. 2026)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Zjišťuje jedinečné přístupy na web (účty před 14. 6. 2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Umožňuje třetím stranám nastavovat cookies v prohlížeči těchto uživatelů',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Umožňuje využívání nástroje přístupnosti',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Umožňuje další funkce webu.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Identifikátor první strany, který opětovně rozpoznává návštěvníky a přiřazuje události k webu',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Identifikátor návštěvníka první strany pro sledování konverzí a remarketing',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Identifikátor relace první strany pro přiřazování událostí',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Identifikátor relace první strany pro každý pixel k měření kampaní',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Identifikátor relace první strany k měření kampaní',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Reklamní identifikátor první strany pro měření kampaní a personalizaci na TikTok',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Cookie první strany, které seskupuje akce návštěvníků, jež Pinterest nedokáže přiřadit',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Cookie první strany, které ukládá hashovaná zákaznická data získaná pomocí Automatic Enhanced Match',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Vytváří jedinečný identifikátor pro každého návštěvníka (účty od 14. 6. 2026)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Vytváří jedinečný identifikátor pro každého návštěvníka (účty před 14. 6. 2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identifikátor zařízení pro vyhodnocení událostí na stránkách s widgetem',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Nastaveno při přihlášení na stránce hostované službou HubSpot',
    'Gewaehlte Sprache speichern'
        => 'Uložení zvoleného jazyka',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Synchronizuje identifikátor MUID napříč doménami Microsoftu; podle poskytovatele cookie třetí strany',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Udržuje zprávy synchronizované napříč několika panely',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Uchovává hodnotu parametru pk_campaign',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Uchovává hodnotu parametru utm_campaign',
    'Haelt den Widerspruch gegen die Messung'
        => 'Uchovává námitku proti měření',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Uchovává dobu vypršení platnosti _uetsid',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Uchovává dobu vypršení platnosti _uetvid',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Uchovává typ zdroje návštěvnosti pro Tag Manager',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Zaznamenává identitu návštěvníka, mimo jiné k odstranění duplicit u kontaktů',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Zaznamenává rozhodnutí návštěvníka o cookies',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Udržuje zobrazení widgetu při přechodu mezi stránkami konzistentní',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Zaznamenává vstupní stránku; analýza',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Uchovává souhlas s měřením pomocí cookies',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Uchovává rozhodnutí uživatele o kategoriích a poskytovatelích',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Udržuje relaci přihlášených uživatelů a přístup k dřívějším konverzacím',
    'Haelt die verweisende Adresse'
        => 'Uchovává odkazující adresu',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Zaznamenává odkazující zdroj; analýza',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Uchovává vlastní proměnné relace (poskytovatel je označuje za zastaralé)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Zaznamenává, zda smí etracker nastavovat cookies; při data-block-cookies se nastavuje voláním API',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Zaznamenává, které funkční přepínače vlastník videa aktivoval',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Hlavní cookie pro opětovné rozpoznání návštěvníků',
    'Heatmaps'
        => 'Heatmapy',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Heatmapy kliknutí a chování při posouvání',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Uchovává data relace pro heatmapy po dobu návštěvy',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Uchovává informace o probíhající relaci (účty od 14. 6. 2026)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Uchovává informace o probíhající relaci (účty před 14. 6. 2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Uchovává vlastní proměnné po dobu návštěvy',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Uchovává trvalá data na úrovni návštěvníka (účty od 14. 6. 2026)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Uchovává trvalá data na úrovni návštěvníka pro vyhodnocení Insights (účty před 14. 6. 2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Zaznamenává stav souhlasu návštěvníka (účty od 14. 6. 2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Zaznamenává stav souhlasu návštěvníka (účty před 14. 6. 2026)',
    'Hält den Sitzungszustand.'
        => 'Uchovává stav relace.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Uchovává identifikátor uživatele Clarity a nastavení pro tento web',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Uchovává přiřazení varianty pro A/B testy',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Dočasně zaznamenává zvolenou kombinaci (účty od 14. 6. 2026)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Dočasně zaznamenává zvolenou kombinaci (účty před 14. 6. 2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Zaznamenává zvolenou variantu před provedením přesměrování (účty od 14. 6. 2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Zaznamenává zvolenou variantu před provedením přesměrování (účty před 14. 6. 2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Zaznamenává, přes který odkaz návštěva vznikla',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'V režimu Pre-Clearance: uvolnění pro další kontroly WAF ve stejné zóně',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Nepřímý identifikátor člena pro sledování konverzí, retargeting a vyhodnocení',
    'Inhalt des Warenkorbs; notwendig'
        => 'Obsah košíku; nezbytné',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Analytická data o kupujících v obchodě; statistika',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Jedinečný identifikátor vázaný na kampaň (účty od 14. 6. 2026)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Identifikátor prvního kontaktu s Clarity napříč všemi weby s Clarity; podle poskytovatele cookie třetí strany',
    'Kennzeichnet die laufende Sitzung'
        => 'Označuje probíhající relaci',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Uchování údajů z komentáře pro další komentáře',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Konzistentní zobrazování variant A/B testů',
    'Lastverteilung und Routing'
        => 'Rozložení zátěže a směrování',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Rozložení zátěže a směrování požadavků na ověření',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Ukládá nastavení účtu návštěvníka lokálně',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Zobrazuje stejnou variantu stránky v A/B testu',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Živý chat a kanál pro zprávy podpory na webu',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Živý chat a schránka podpory na webu',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Marketingová data nákupních rozhraní; marketing',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Marketingová data pro nákupní rozhraní',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Uložení nastavení přehrávače diváka (hlasitost, kvalita, titulky)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Uložení stavu a nastavení widgetu',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Zaznamenává zavření banneru Global Privacy Control',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Zaznamenává zavření informačního banneru',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Zaznamenává čas synchronizace s cookie lms_analytics',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Zaznamenává čas poslední synchronizace ID, aby se neopakovala',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Uchovává přidělenou variantu (účty od 14. 6. 2026)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Uchovává přidělenou variantu, aby při další návštěvě zůstala stejná (účty před 14. 6. 2026)',
    'Merkt einen Rabattcode; notwendig'
        => 'Uchovává slevový kód; nezbytné',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Uchovává námitku proti měření (účty od 14. 6. 2026)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Uchovává námitku platnou napříč weby (účty před 14. 6. 2026)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Uchovává nastavení přehrávače, jako je hlasitost, kvalita a titulky',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Uchovává nastavení zvukových upozornění',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Pamatuje si udělený souhlas s měřením',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Pamatuje si námitku proti měření',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Zaznamenává proaktivní zprávy, které návštěvník zavřel',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Zaznamenává, že návštěvník zavřel popisek spouštěcího tlačítka',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Zaznamenává, zda je widget otevřený, nebo zavřený',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Zaznamenává, že se návštěvník nemá účastnit žádné kampaně (účty před 14. 6. 2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Zaznamenává, že je návštěvník z kampaně vyloučen (účty od 14. 6. 2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Zaznamenává, že je návštěvník z kampaně vyloučen (účty před 14. 6. 2026)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Zaznamenává, že bylo upozornění o souhlasu zavřeno',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Zaznamenává, že bylo upozornění obchodu zavřeno',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Zaznamenává, že se dotaz na cookies nemá znovu zobrazit',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Zaznamenává, že se tag již spustil',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Zaznamenává, zda se u tohoto návštěvníka měří hloubka posouvání',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Zaznamenává, zda je okno chatu otevřené',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Zaznamenává, zda se identifikátor MUID předává reklamnímu identifikátoru; podle poskytovatele je vždy 0, cookie třetí strany',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Měření otevření a kliknutí v e-mailových kampaních',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Měření relací a událostí na stránkách s widgetem',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Měření relací a přiřazení zdroje návštěvy',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Měření dostupnosti služby ze strany Google',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Měření doby načítání a klíčových ukazatelů stránky (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Měření hloubky posouvání a událostí kliknutí',
    'Messung der Werbewirkung'
        => 'Měření účinnosti reklamy',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Měření chování uživatelů na webu',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Měření a personalizace reklam v reklamní síti TikTok Pangle',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Měření a zlepšování výkonu reklamních kampaní',
    'Messung von Auslieferungen und Klicks'
        => 'Měření zobrazení a kliknutí',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Měření návštěvníků a relací pro vyhodnocení',
    'Messung von Conversions'
        => 'Měření konverzí',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Měření zobrazení stránek a návštěv',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Měření zobrazení stránek a událostí',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Měření zobrazení stránek a chování uživatelů',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Měření zobrazení stránek a vlastních událostí',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Měření zobrazení stránek, návštěv a relací',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Měření zobrazení stránek, návštěv a relací na vlastním serveru',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Měření reklamních kampaní a konverzí na webu',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Měření cílů a konverzí kampaně',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Načítání mapových dlaždic, písem a stylů od poskytovatele',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Předvyplnění jména z formuláře pro komentáře',
    'Nutzer-ID'
        => 'ID uživatele',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Přiřazuje košík správné zemi; nezbytné',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Přiřazuje košík v databázi správné zákaznici',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Přiřazuje akce návštěvy k relaci',
    'Personalisierung der Werbung auf TikTok'
        => 'Personalizace reklamy na platformě TikTok',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Ověření, zda může WordPress nastavovat cookies',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Ověřuje schopnost prohlížeče přijímat cookies; nezbytné',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Ověřuje, zda může WordPress nastavovat cookies',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Kontrolní hodnota hesla obchodu; nezbytné',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Kontrolní cookie poskytovatele (účty před 14. 6. 2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Ověřuje, zda prohlížeč přijímá cookies (účty od 14. 6. 2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Ověřuje, zda prohlížeč přijímá cookies (účty před 14. 6. 2026)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Ověřuje, zda prohlížeč přijímá cookies (podle poskytovatele jen v Internet Exploreru)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Omezení počtu požadavků u poskytovatele CDN služby HubSpot',
    'Reichweiten- und Nutzungsmessung'
        => 'Měření dosahu a využití',
    'Reichweitenmessung'
        => 'Měření dosahu',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Měření dosahu vložených videí ze strany Vimeo',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Měření dosahu pro provozovatele obchodu',
    'Remarketing und Zielgruppenbildung'
        => 'Remarketing a tvorba cílových skupin',
    'Retargeting'
        => 'Retargeting',
    'Retargeting von Website-Besuchern'
        => 'Retargeting návštěvníků webu',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Analýza rizik pro rozlišení člověka a bota',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Sběrné cookie, podle poskytovatele se vytváří jen v prohlížeči Safari (účty od 14. 6. 2026)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Sběrné cookie, podle poskytovatele se vytváří jen v prohlížeči Safari (účty před 14. 6. 2026)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Shromažďování informací o chování těchto uživatelů při prohlížení ze strany Spotify a třetích stran',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Přepínač, který provozovatel webu nastaví sám, aby zabránil sledování Klaviyo',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Ochrana přihlášení členů proti padělání',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Ochrana formulářů před automatizovaným zneužitím',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Ochrana před automatizovanými požadavky (spam, credential stuffing)',
    'Sicherheit'
        => 'Zabezpečení',
    'Sicherheitsfunktionen'
        => 'Bezpečnostní funkce',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Bezpečnostní funkce, pokud je aktivní volitelná funkce User Journeys',
    'Sitzung'
        => 'Relace',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Přiřazení relace a jazyka, případně země',
    'Sitzungsaufzeichnung'
        => 'Záznam relace',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identifikátor relace pro vyhodnocení událostí na stránkách s widgetem',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Identifikátor relace pro statistiku obchodu; statistika',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Klíč relace služby Answer Bot',
    'Sitzungswiedergabe'
        => 'Přehrávání relací',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Ukládá autentizační token po přihlášení',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Ukládá zakódované heslo pro videa chráněná heslem',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Ukládá klíč zvoleného jazyka',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Ukládá volbu návštěvníka ohledně soukromí; nezbytné',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Ukládá rozhodnutí návštěvníka o souhlasu',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Ukládá identifikátor zařízení návštěvníka pro ověření v chatovacím widgetu',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Ukládá identifikátor uživatele přihlášeného na webinář',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Ukládá identifikátor kliknutí fbclid, aby bylo možné přiřadit událost na webu k reklamě',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Ukládá identifikátor uživatele z registračního formuláře předřazeného videu',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Ukládá identifikátor kliknutí TikTok pro přiřazení konverzí',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Ukládá jedinečné ID návštěvníka pro opětovné rozpoznání',
    'Speichert die zugestimmten Kategorien'
        => 'Ukládá kategorie, s nimiž byl udělen souhlas',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Poskytuje data widgetu naposledy prohlížených produktů',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Řídí, zda se identifikátor MUID obnovuje; podle poskytovatele cookie třetí strany',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Technicky nezbytné pro provoz a zabezpečení webu.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Nese data relace a pokladny obchodu; poskytovatel je vede jako nezbytné',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Zajišťuje funkci námitky (opt-out)',
    'Transaktionssicherheit'
        => 'Zabezpečení transakcí',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Zajišťuje analýzu rizik reCAPTCHA.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Předávání událostí z webu službě TikTok',
    'Umfragen'
        => 'Průzkumy',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Zabraňuje předávání dat službě HubSpot',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Po zavření potlačí uvítací zprávu chatu',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Rozlišuje prohlížeče, které navštěvují stránky Microsoft; se souhlasem také pro reklamu',
    'Unterscheidet einzelne Nutzer.'
        => 'Rozlišuje jednotlivé uživatele.',
    'Unterscheidung einzelner Nutzer'
        => 'Rozlišení jednotlivých uživatelů',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Rozlišení mezi člověkem a botem u formulářů a přihlášení',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Spojuje více zobrazení stránek do jednoho záznamu relace',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Brání trvalému zobrazování banneru ve striktním režimu',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Rozesílání signálů souhlasu tagům Google',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Správa rozhodnutí o souhlasu pro tagy nakonfigurované v kontejneru',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Správa námitky proti měření',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Správa námitky a souhlasu s měřením',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Google jej řadí do kategorií statistika a reklama.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Google jej řadí do kategorií analýza, reklama a zabezpečení.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Google jej řadí do kategorií funkčnost, reklama a zabezpečení.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Google jej řadí do kategorií zabezpečení a funkčnost.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Google jej řadí do kategorií zabezpečení a reklama.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Google jej řadí do kategorií zabezpečení, analýza, funkčnost a reklama.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Google jej řadí do kategorií zabezpečení, funkčnost a reklama.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Google jej řadí do kategorií reklama a zabezpečení.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Google jej řadí do kategorie analýza; přesnější účel Google neuvádí.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Google jej řadí do kategorie funkčnost.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Google jej řadí do kategorie zabezpečení.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Google jej řadí do kategorie reklama.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Microsoft jej uvádí mezi cookies, které se bez souhlasu nesmějí nastavovat; vlastní popis účelu Microsoft neuvádí',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Identifikátor vytvořený službou Vimeo pro měření dosahu',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Měna košíku po dokončení objednávky; nezbytné',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Pravděpodobnostní přiřazení prohlížeče k osobě',
    'Warenkorb einer Besucherin zuordnen'
        => 'Přiřazení košíku návštěvnici',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Předvyplnění adresy webu z formuláře pro komentáře',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Rozpoznání diváka pro účely reklamy',
    'Werbepersonalisierung'
        => 'Personalizace reklamy',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Stejné jako _pin_unauth, ale jako cookie třetí strany',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Rozpoznání návštěvníka v průběhu rezervace',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Rozpoznání návštěvníka mezi zobrazeními stránek a panely',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Rozpoznávání a identifikace návštěvníků webu',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Rozpoznávání návštěvníků napříč více návštěvami',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Rozpoznávání návštěvníků propojených webů pro retargeting',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Rozpoznávání vracejících se návštěvníků a přiřazení dřívějších konverzací',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Rozpoznání návštěvníka a uložení jeho charakteristik',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Rozpoznání prohlížeče prostřednictvím identifikátoru Criteo',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Rozpoznání uživatele; pouze se souhlasem, ve výchozím nastavení blokováno',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Rozpoznání prohlížeče při pozdějších návštěvách po udělení souhlasu',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Rozpoznání návštěvníků a jejich přiřazení k relacím',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'Rozpoznání členů LinkedIn mimo LinkedIn pro účely reklamy',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Rozpoznání uživatelů po udělení souhlasu',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Opětovné rozpoznání vracejících se návštěvníků podle ID návštěvníka',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Nastavuje se, když se spustil cíl kampaně (účty od 14. 6. 2026)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Nastavuje se, když se spustil cíl kampaně (účty před 14. 6. 2026)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Nastavuje se, když osoba navštíví web s vloženým tagem Pinterest',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Nastavuje se, když se přiřazení podaří bez existujících cookies, například přes Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Nastavuje jej JavaScriptový tag z údajů, které Pinterest předává u placené návštěvnosti',
    'Zaehlt und begrenzt Sitzungen'
        => 'Počítá a omezuje relace',
    'Zahlungsabwicklung'
        => 'Zpracování plateb',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Ukazuje, zda relace stále běží, nebo je nová',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Sděluje rozhraní, že jste přihlášeni a pod jakým účtem',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Náhodný identifikátor prohlížeče, který přiřazuje události pixelu daného webu k jednomu prohlížeči',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Zobrazení naposledy prohlížených produktů v příslušném widgetu',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Přiřazení chování na webu k profilu',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Přiřazení původu návštěvy (referrer, atribuce)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Přiřazení návštěvníka ke kontaktu v účtu Brevo prostřednictvím e-mailové adresy',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Přiřazení transakcí, jako jsou leady a prodeje, k publisherovi',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Přiřazení akcí na webu k dříve zobrazeným reklamám',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Sloučení více zobrazení stránek do jedné relace',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Doplňková data k zaznamenaným událostem průběhu návštěvy',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Přidělení a zachování varianty napříč více návštěvami',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Mezipaměť pro události určené pomocí CSS selektorů',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Mezipaměť pro data nástroje Messenger a údaje návštěvníků v úložišti prohlížeče',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Mezipaměť pro záznamy nástroje Tag Manager',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Mezipaměť pro měření hloubky posouvání',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Mezipaměť pro proměnné nástroje Tag Manager',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Mezipaměť pro nastavení widgetu, aby se předešlo opakovaným dotazům na server',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Ukládání dat nástroje Messenger a údajů návštěvníků do mezipaměti prohlížeče',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Počítá relace vytvořené pro jednoho návštěvníka (účty od 14. 6. 2026)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Počítá, kolikrát byl prohlížeč během měření zavřen a znovu otevřen (účty před 14. 6. 2026)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Počítání zobrazení stránek a návštěv',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'automatizovaná vyhodnocení chování uživatelů',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'hrubé geografické zařazení na úrovni země, regionu a města',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'volitelně záznam relace (Session Replay), ve výchozím nastavení s maskovanými texty, obrázky a vstupy',
    'optional Heatmaps und A/B-Tests'
        => 'volitelně heatmapy a A/B testy',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Předává zdroj odkazu při Split-URL testech (účty od 14. 6. 2026)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Předává zdroj odkazu při Split-URL testech (účty před 14. 6. 2026)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Přiřazení transakcí, jako jsou leady a prodeje, k publisherovi, Měření úspěšnosti reklamního prvku a vyúčtování provize',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Zaznamenávání návštěvníků a zobrazení stránek na webu pro marketingovou automatizaci, Přiřazení návštěvníka ke kontaktu v účtu Brevo prostřednictvím e-mailové adresy, Zaznamenávání vlastních událostí definovaných provozovatelem',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Zobrazení rezervačního kalendáře a sjednávání termínů na webu, Rozpoznání návštěvníka v průběhu rezervace, Zpracování plateb, pokud je termín zpoplatněn',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Rozpoznávání a odmítání automatizovaných přístupů u formulářů, Vystavení tokenu ověřovaného serverem webu, V režimu Pre-Clearance: uvolnění pro další kontroly WAF ve stejné zóně',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Měření zobrazení stránek a návštěv, Měření doby načítání a klíčových ukazatelů stránky (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Doručování personalizované reklamy, Měření účinnosti reklamy, Rozpoznání prohlížeče prostřednictvím identifikátoru Criteo',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Měření chování uživatelů na webu, Vytváření pseudonymních profilů používání po udělení souhlasu, Rozpoznání prohlížeče při pozdějších návštěvách po udělení souhlasu',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Měření zobrazení stránek a chování uživatelů, Měření hloubky posouvání a událostí kliknutí, Rozpoznání uživatelů po udělení souhlasu, Správa námitky proti měření',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Rozlišení mezi člověkem a botem u formulářů a přihlášení, Ochrana před automatizovanými požadavky (spam, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Měření konverzí, Remarketing a tvorba cílových skupin, Omezení četnosti zobrazení, Detekce klikacích podvodů',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Doručování inzerce, Omezení četnosti zobrazení, Detekce podvodů a zneužití, Měření zobrazení a kliknutí',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Rozlišení jednotlivých uživatelů, Zachování stavu relace, Měření dosahu a využití',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Zobrazení interaktivní mapy, Měření dostupnosti služby ze strany Google',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Analýza rizik pro rozlišení člověka a bota, Ochrana formulářů před automatizovaným zneužitím',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Doručování a správa tagů na webu, Rozesílání signálů souhlasu tagům Google',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Rozlišení mezi člověkem a botem u formulářů a přihlášení, Rozložení zátěže a směrování požadavků na ověření, Poskytování přístupu k funkcím přístupnosti',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Heatmapy, Záznam relace, Průzkumy',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Rozpoznávání návštěvníků napříč více návštěvami, Měření relací a přiřazení zdroje návštěvy, Odstraňování duplicit u kontaktů, Provoz chatovacího widgetu, Konzistentní zobrazování variant A/B testů',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Živý chat a schránka podpory na webu, Rozpoznávání vracejících se návštěvníků a přiřazení dřívějších konverzací, Rozpoznání zařízení pro ochranu před zneužitím, Ukládání dat nástroje Messenger a údajů návštěvníků do mezipaměti prohlížeče',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Zobrazování informací o financování a splátkách na stránkách produktů a košíku (on-site messaging), Doručování obsahu upozornění do připravených zástupných míst ve zdrojovém kódu stránky prostřednictvím ad serveru',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Rozpoznávání a identifikace návštěvníků webu, Přiřazení chování na webu k profilu, Řízení přihlašovacích formulářů na webu',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Sledování konverzí pro reklamní kampaně LinkedIn, Retargeting návštěvníků webu, Vyhodnocení cílové skupiny webu (demografie webu)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Rozpoznávání návštěvníků propojených webů pro retargeting, Řízení vyskakovacích formulářů, aby se neobjevovaly opakovaně, Měření otevření a kliknutí v e-mailových kampaních, Vkládání reklamních pixelů Google a Facebook na propojený web',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Zobrazování interaktivních map na webu, Načítání mapových dlaždic, písem a stylů od poskytovatele, Vyúčtování a zabezpečení volání map',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Měření zobrazení stránek, návštěv a relací, Opětovné rozpoznání vracejících se návštěvníků podle ID návštěvníka, Přiřazení původu návštěvy (referrer, atribuce), volitelně heatmapy a A/B testy',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Měření zobrazení stránek, návštěv a relací na vlastním serveru, Opětovné rozpoznání vracejících se návštěvníků podle ID návštěvníka, Přiřazení původu návštěvy (referrer, atribuce), volitelně heatmapy a A/B testy',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Doručování a spouštění tagů na webu, Správa rozhodnutí o souhlasu pro tagy nakonfigurované v kontejneru',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Měření reklamních kampaní a konverzí na webu, Vytváření cílových skupin a retargeting',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Sledování konverzí pro kampaně Microsoft Advertising, Vytváření remarketingových seznamů, Měření zobrazení stránek a vlastních událostí',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Nahrávání a přehrávání relací, Heatmapy kliknutí a chování při posouvání, Sloučení více zobrazení stránek do jedné relace, automatizovaná vyhodnocení chování uživatelů',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Zpracování platby vyvolané návštěvníkem, Vložení polí platební karty do vlastního checkoutu, aby údaje o kartě neprocházely obchodem, Prevence podvodů a zákonné povinnosti poskytovatele platebních služeb',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Nahrávání pohybů myši, Přehrávání relací, Analýza chování při používání',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Doručování mapových dlaždic vloženým mapám, Provoz mapových služeb a ochrana před zneužitím',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Zpracování plateb, Prevence podvodů',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Sledování konverzí pro reklamní kampaně Pinterest, Vytváření cílových skupin a retargeting, Přiřazení akcí na webu k dříve zobrazeným reklamám',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Měření zobrazení stránek a událostí, Rozpoznání návštěvníků a jejich přiřazení k relacím, Vyhodnocení původu a kampaní, Vyhodnocení zařízení, prohlížeče a odhadované polohy, Vyhodnocení e-commerce a cílů',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Počítání zobrazení stránek a návštěv, Vyhodnocení zdrojů odkazů, Vyhodnocení prohlížeče, operačního systému a typu zařízení, hrubé geografické zařazení na úrovni země, regionu a města',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Zaznamenávání a přenos chyb aplikace z prohlížeče, volitelně záznam relace (Session Replay), ve výchozím nastavení s maskovanými texty, obrázky a vstupy',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Provoz košíku a platebního procesu obchodu, Přiřazení relace a jazyka, případně země, Měření dosahu pro provozovatele obchodu, Marketingová data pro nákupní rozhraní',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Vkládání a přehrávání skladeb, alb, playlistů a dílů podcastů, Shromažďování informací o chování těchto uživatelů při prohlížení ze strany Spotify a třetích stran, Umožňuje třetím stranám nastavovat cookies v prohlížeči těchto uživatelů',
    'Besucherzählung, Reichweitenmessung'
        => 'Počítání návštěvníků, Měření dosahu',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Detekce podvodů a vyhodnocení rizika pokusů o platbu, Poskytnutí platebních polí Stripe Elements, Rozpoznávání botů a automatizovaného chování v objednávkovém procesu',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Měření a zlepšování výkonu reklamních kampaní, Personalizace reklamy na platformě TikTok, Předávání událostí z webu službě TikTok',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Vkládání formulářů a anket do webu, Zaznamenávání odpovědí a jejich předání provozovateli formuláře',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Vkládání a přehrávání videí na webu, Uložení nastavení přehrávače diváka (hlasitost, kvalita, titulky), Měření dosahu vložených videí ze strany Vimeo, Ochrana přehrávače před boty a zneužitím',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'A/B testy a split-URL testy na webu, Přidělení a zachování varianty napříč více návštěvami, Měření cílů a konverzí kampaně, Měření návštěvníků a relací pro vyhodnocení, Správa námitky a souhlasu s měřením',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Přiřazení košíku návštěvnici, Rozpoznání, zda se obsah košíku změnil, Zobrazení naposledy prohlížených produktů v příslušném widgetu, Zapamatování skrytí upozornění obchodu',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Přihlášení a rozpoznání relace v administraci, Uchování údajů z komentáře pro další komentáře, Zapamatování nastavení zobrazení administrace, Ověření, zda může WordPress nastavovat cookies, Uložení zvoleného jazyka',
    'Conversion-Messung, Retargeting'
        => 'Měření konverzí, Retargeting',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Přehrávání vložených videí, Zabezpečení, Rozpoznání diváka pro účely reklamy',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Živý chat a kanál pro zprávy podpory na webu, Rozpoznání návštěvníka mezi zobrazeními stránek a panely, Uložení stavu a nastavení widgetu, Měření relací a událostí na stránkách s widgetem',
];
