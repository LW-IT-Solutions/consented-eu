<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Ungarisch.
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
        => 'A/B-tesztek és split URL-tesztek a webhelyen',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'A térképlekérések elszámolása és védelme',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'A Shop szolgáltatással történő bejelentkezés befejezése; szükséges',
    'Abspielen eingebetteter Videos'
        => 'Beágyazott videók lejátszása',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'A látogató által kezdeményezett fizetés lebonyolítása',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Fizetések lebonyolítása, ha az időpont díjköteles',
    'Analyse des Nutzungsverhaltens'
        => 'A használati szokások elemzése',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'A vásárlói felületek elemzési adatai; elemzés',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'A webshop elemzési adatai; a szolgáltató elemzésként tartja nyilván',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Bejelentkezési adatok a /wp-admin/ alatti adminfelülethez',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Bejelentkezés a Shop Pay szolgáltatásba; szükséges',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Bejelentkezés és munkamenet-felismerés az adminfelületen',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Anonim, szolgáltatásra vonatkozó statisztika és további technikai célok, többek között az akadálymentesség támogatása',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Az adminfelület nézetbeállításai fiókonként',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Az adminfelület nézetbeállításainak megjegyzése',
    'Anzeige von Bewertungen'
        => 'Értékelések megjelenítése',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'A foglalási naptár megjelenítése és időpontok egyeztetése a webhelyen',
    'Anzeigen einer interaktiven Karte'
        => 'Interaktív térkép megjelenítése',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => '1 értékre állítva megakadályozza az UET-események küldését a Microsoftnak',
    'Aufbau von Remarketing-Listen'
        => 'Remarketinglisták felépítése',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Munkamenetek rögzítése és visszajátszása',
    'Aufzeichnung von Mausbewegungen'
        => 'Egérmozgások rögzítése',
    'Ausblenden des Shop-Hinweises merken'
        => 'A webshop-értesítés elrejtésének megjegyzése',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Címkék kiszolgálása és aktiválása a webhelyen',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Címkék kiszolgálása és kezelése a webhelyen',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Térképcsempék kiszolgálása beágyazott térképekhez',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Az értesítési tartalmak kiszolgálása az oldal forráskódjában előkészített helyekre egy hirdetéskiszolgálón keresztül',
    'Auslieferung personalisierter Werbung'
        => 'Személyre szabott hirdetések kiszolgálása',
    'Auslieferung von Anzeigen'
        => 'Hirdetések kiszolgálása',
    'Auslieferung von Bibliotheken und Assets'
        => 'Könyvtárak és eszközfájlok kiszolgálása',
    'Auslieferung von Schriftarten'
        => 'Betűtípusok kiszolgálása',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Olyan token kiállítása, amelyet a webhely szervere ellenőriz',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Regisztrációs űrlapok vezérlése a webhelyen',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Felugró űrlapok vezérlése, hogy ne jelenjenek meg ismételten',
    'Auswahl des Rechenzentrums'
        => 'Az adatközpont kiválasztása',
    'Auswertung der Verweisquellen'
        => 'A hivatkozó források kiértékelése',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'A webhely célközönségének kiértékelése (webhelydemográfia)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Böngésző, operációs rendszer és eszköztípus kiértékelése',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Eszköz, böngésző és becsült tartózkodási hely kiértékelése',
    'Auswertung von Herkunft und Kampagnen'
        => 'Az eredet és a kampányok kiértékelése',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Hitelesíti a végfelhasználó kéréseit',
    'Begrenzung der Anzeigehäufigkeit'
        => 'A megjelenítési gyakoriság korlátozása',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Igazolja a sikeres ellenőrzést, hogy a zóna további kihívásai elmaradjanak',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'A Stripe Elements fizetési mezőinek biztosítása',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Az akadálymentes hozzáférés biztosítása',
    'Besucherzählung'
        => 'Látogatószámlálás',
    'Betrieb des Chat-Widgets'
        => 'A csevegőmodul működtetése',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'A térképszolgáltatások működtetése és visszaélés elleni védelme',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Egy webshop kosarának és fizetési folyamatának működtetése',
    'Betrugs- und Missbrauchserkennung'
        => 'Csalás és visszaélés felismerése',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Csalásfelismerés a fizetési kísérletnél',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Csalásfelismerés és fizetési kísérletek kockázatértékelése',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Csalásmegelőzés és jogszabályi kötelezettségek fizetési szolgáltatóként',
    'Betrugsprävention'
        => 'Csalásmegelőzés',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Csalásmegelőzés és egy fizetési kísérlet kockázatértékelése',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Álnevesített használati profilok kialakítása hozzájárulás után',
    'Bildung von Zielgruppen und Retargeting'
        => 'Célközönségek kialakítása és újracélzás',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'A munkamenetet ugyanahhoz az AWS-példányhoz köti',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Bot- és visszaélés elleni védelem a lejátszóhoz',
    'Bot-Abwehr fuer den Player'
        => 'Bot elleni védelem a lejátszóhoz',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Botvédelem a HubSpot-erőforrások kiszolgálásakor',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Böngészőazonosító, amellyel a LinkedIn megkülönbözteti az eszközöket és felismeri a visszaéléseket',
    'Cloudflare-Bot-Abwehr'
        => 'Cloudflare botvédelem',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Cloudflare botfelismerés a forgalom szűréséhez',
    'Cloudflare-Ratenbegrenzung'
        => 'Cloudflare kérésszám-korlátozás',
    'Conversion-Messung'
        => 'Konverziómérés',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Konverziókövetés LinkedIn-hirdetési kampányokhoz',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Konverziókövetés Microsoft Advertising-kampányokhoz',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Konverziókövetés Pinterest-hirdetési kampányokhoz',
    'Darstellung interaktiver Karten auf der Website'
        => 'Interaktív térképek megjelenítése a webhelyen',
    'Deduplizieren von Kontakten'
        => 'Kapcsolatok deduplikálása',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'A hirdetések megjelenítését és mérését szolgálja.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'Tartományokon átívelő látogatóazonosító; a szolgáltató szerint harmadik féltől származó süti, csak akkor használatos, ha a konfigurációs fájlban engedélyezve vannak a harmadik féltől származó sütik',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Harmadik féltől származó azonosító a látogatók felismeréséhez',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Harmadik féltől származó azonosító, amelyet továbbítanak a Klaviyónak',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Harmadik féltől származó hirdetési azonosító a kampányok méréséhez és a személyre szabáshoz a TikTokon',
    'E-Commerce- und Zielauswertung'
        => 'E-kereskedelmi és célkiértékelés',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Az e-mail-cím előkitöltése a hozzászólási űrlapon',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Számok, albumok, lejátszási listák és podcastepizódok beágyazása és lejátszása',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Videók beágyazása és lejátszása a webhelyen',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Űrlapok és kérdőívek beágyazása a webhelyre',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'A kártyamezők beágyazása a saját pénztárba, hogy a kártyaadatok ne a webshopon keresztül haladjanak',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Külsőleg karbantartott sütitájékoztató beágyazása',
    'Einbettung von Audioinhalten'
        => 'Hangtartalmak beágyazása',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'A Google és a Facebook hirdetési pixeleinek beépítése a kapcsolt webhelyen',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Finanszírozási és részletfizetési tájékoztatók megjelenítése a termék- és kosároldalakon (On-site Messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Egyedi azonosító a tartományokon átívelő mérésnél (fiókok 2026.06.14-től)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Egyedi azonosító a tartományokon átívelő mérésnél (fiókok 2026.06.14. előtt)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Egyszer használatos érték a CSRF ellen a letiltási űrlapon',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Tartalmaz egy felhasználóazonosítót és a létrehozás időpontját; a forrás szerint a Pinterest alkalmazáson belüli böngészőjében kerül beállításra, nem a webhely tartományán',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'A válaszok rögzítése és továbbítása az űrlap üzemeltetőjének',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Rögzíti a webhely használatát kiértékelési célból.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Az üzemeltető által meghatározott egyéni események rögzítése',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Alkalmazáshibák rögzítése és továbbítása a böngészőből',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Látogatók és oldalmegtekintések rögzítése a webhelyen marketingautomatizáláshoz',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Egy hirdetési eszköz eredményességének mérése és a jutalék elszámolása',
    'Erhalt des Sitzungszustands'
        => 'A munkamenet állapotának fenntartása',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Az eszköz felismerése a visszaélések elleni védelemhez',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Automatizált hozzáférések felismerése és elutasítása az űrlapoknál',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Botok és automatizált viselkedés felismerése a rendelési folyamatban',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Annak felismerése, hogy megváltozott-e a kosár tartalma',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Felismeri a kosár tartalmának változásait',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Felismeri annak a webhelynek a látogatóit, amelybe az Intercom-kód be van építve',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Újra felismeri a böngészőket a Microsoft webhelyein; a szolgáltató szerint hirdetésre is használják, harmadik féltől származó süti',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Újra felismeri azokat a személyeket, akik a csevegőeszközön keresztül írnak',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Felismeri azt az eszközt, amelyről a beszélgetés indul',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'A visszaélések elleni védelem érdekében felismeri azt az egyedi eszközt, amely a Messengerrel kapcsolatba lép',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Felismeri azt a végfelhasználót, aki a beszélgetést kezdeményezi',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Felismeri azt a tartományt vagy altartományt, amelybe a csevegőmodul be van építve',
    'Erkennt wiederkehrende Besucher'
        => 'Felismeri a visszatérő látogatókat',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Felismeri, hogy a böngészőt újraindították-e',
    'Erkennung von Klickbetrug'
        => 'Kattintási csalás felismerése',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Megállapítja a webhely egyedi látogatásait (fiókok 2026.06.14-től)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Megállapítja a webhely egyedi látogatásait (fiókok 2026.06.14. előtt)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Lehetővé teszik, hogy harmadik felek sütiket helyezzenek el e felhasználók böngészőjében',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Lehetővé teszi az akadálymentes hozzáférés használatát',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'További webhelyfunkciókat tesz lehetővé.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Első féltől származó azonosító, amely felismeri a látogatókat és hozzárendeli a webhely eseményeit',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Első féltől származó látogatóazonosító konverziókövetéshez és remarketinghez',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Első féltől származó munkamenet-azonosító az események hozzárendeléséhez',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Első féltől származó munkamenet-azonosító pixelenként a kampányméréshez',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Első féltől származó munkamenet-azonosító a kampányméréshez',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Első féltől származó hirdetési azonosító a kampányok méréséhez és a személyre szabáshoz a TikTokon',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Első féltől származó süti, amely azoknak a látogatóknak a műveleteit csoportosítja, akiket a Pinterest nem tud hozzárendelni',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Első féltől származó süti, amely az Automatic Enhanced Match útján gyűjtött hashelt ügyféladatokat tárolja',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Egyedi azonosítót hoz létre minden látogatóhoz (fiókok 2026.06.14-től)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Egyedi azonosítót hoz létre minden látogatóhoz (fiókok 2026.06.14. előtt)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Eszközazonosító a modult tartalmazó oldalakon történő események kiértékeléséhez',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'A HubSpot által üzemeltetett oldalon történő bejelentkezéskor kerül beállításra',
    'Gewaehlte Sprache speichern'
        => 'A választott nyelv mentése',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Egyezteti a MUID azonosítót a Microsoft-tartományok között; a szolgáltató szerint harmadik féltől származó süti',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Szinkronban tartja az üzeneteket több lapon keresztül',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Tárolja a pk_campaign paraméter értékét',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Tárolja az utm_campaign paraméter értékét',
    'Haelt den Widerspruch gegen die Messung'
        => 'Tárolja a mérés elleni tiltakozást',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Tárolja a _uetsid lejárati idejét',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Tárolja a _uetvid lejárati idejét',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Tárolja a forgalmi forrás típusát a Tag Manager számára',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Rögzíti a látogató személyazonosságát, egyben a kapcsolatok deduplikálásához is',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Rögzíti a látogató sütikkel kapcsolatos döntését',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Egységesen tartja a modul megjelenítését oldalváltáskor',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Rögzíti a belépő oldalt; elemzés',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Tárolja a sütikkel végzett méréshez adott hozzájárulást',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Tárolja a felhasználó kategóriákra és szolgáltatókra vonatkozó döntését',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Fenntartja a bejelentkezett felhasználók munkamenetét és a korábbi beszélgetésekhez való hozzáférést',
    'Haelt die verweisende Adresse'
        => 'Tárolja a hivatkozó címet',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Rögzíti a hivatkozó forrást; elemzés',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Tárolja a munkamenet egyéni változóit (a szolgáltató elavultként jelölte meg)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Rögzíti, hogy az etracker elhelyezhet-e sütiket; data-block-cookies esetén API-hívással kerül beállításra',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Rögzíti, hogy a videó tulajdonosa mely funkciókapcsolókat kapcsolta be',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Fő süti a látogatók felismeréséhez',
    'Heatmaps'
        => 'Hőtérképek',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Kattintások és görgetési viselkedés hőtérképei',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'A látogatás idejére tárolja a hőtérkép munkamenet-adatait',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Információkat tárol a folyamatban lévő munkamenetről (fiókok 2026.06.14-től)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Információkat tárol a folyamatban lévő munkamenetről (fiókok 2026.06.14. előtt)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'A látogatás idejére tárolja az egyéni változókat',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Tartós adatokat tárol látogatói szinten (fiókok 2026.06.14-től)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Tartós adatokat tárol látogatói szinten az Insights kiértékeléshez (fiókok 2026.06.14. előtt)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Rögzíti a látogató hozzájárulási állapotát (fiókok 2026.06.14-től)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Rögzíti a látogató hozzájárulási állapotát (fiókok 2026.06.14. előtt)',
    'Hält den Sitzungszustand.'
        => 'Tárolja a munkamenet állapotát.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Tárolja a Clarity felhasználóazonosítót és az e webhelyre vonatkozó beállításokat',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Tárolja az A/B-tesztek variánskiosztását',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Ideiglenesen rögzíti a kiválasztott kombinációt (fiókok 2026.06.14-től)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Ideiglenesen rögzíti a kiválasztott kombinációt (fiókok 2026.06.14. előtt)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Rögzíti a kiválasztott variánst az átirányítás előtt (fiókok 2026.06.14-től)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Rögzíti a kiválasztott variánst az átirányítás előtt (fiókok 2026.06.14. előtt)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Rögzíti, milyen hivatkozáson keresztül jött létre a látogatás',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Pre-Clearance módban: engedély az ugyanazon zónán belüli további WAF-ellenőrzésekhez',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Közvetett tagazonosító konverziókövetéshez, retargetinghez és kiértékeléshez',
    'Inhalt des Warenkorbs; notwendig'
        => 'A kosár tartalma; szükséges',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Vásárlóhoz kötött elemzési adatok a webshopban; statisztika',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Kampányhoz kötött egyedi azonosító (fiókok 14.06.2026-tól)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'A Clarityvel való első találkozás azonosítója az összes Clarity-webhelyen; a szolgáltató szerint harmadik féltől származó süti',
    'Kennzeichnet die laufende Sitzung'
        => 'Jelöli a folyamatban lévő munkamenetet',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'A hozzászólás adatainak megőrzése további hozzászólásokhoz',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Az A/B-teszt változatainak következetes megjelenítése',
    'Lastverteilung und Routing'
        => 'Terheléselosztás és útválasztás',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'A challenge-kérések terheléselosztása és útválasztása',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'A látogató fiókbeállításait helyben tárolja',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Az A/B-teszt oldalának mindig ugyanazt a változatát jeleníti meg',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Élő csevegés és üzenetküldő csatorna a webhelyen nyújtott ügyfélszolgálathoz',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Élő csevegés és ügyfélszolgálati postafiók a webhelyen',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'A vásárlói felületek marketingadatai; marketing',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'A vásárlói felületek marketingadatai',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'A néző lejátszóbeállításainak megjegyzése (hangerő, minőség, felirat)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'A widget állapotának és beállításainak megjegyzése',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Megjegyzi a Global Privacy Control sáv bezárását',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Megjegyzi a tájékoztató sáv bezárását',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Megjegyzi az lms_analytics sütivel végzett összevetés időpontját',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Megjegyzi az utolsó azonosító-összevetés időpontját, hogy az összevetés ne ismétlődjön',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Megjegyzi a hozzárendelt változatot (fiókok 14.06.2026-tól)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Megjegyzi a hozzárendelt változatot, hogy ismételt látogatáskor ugyanaz maradjon (fiókok 14.06.2026 előtt)',
    'Merkt einen Rabattcode; notwendig'
        => 'Megjegyez egy kedvezménykódot; szükséges',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Megjegyzi a méréssel szembeni tiltakozást (fiókok 14.06.2026-tól)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Megjegyzi a webhelyeken átívelő tiltakozást (fiókok 14.06.2026 előtt)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Megjegyzi a lejátszó beállításait, például a hangerőt, a minőséget és a feliratokat',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Megjegyzi a hangértesítések beállítását',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Megjegyzi a méréshez megadott hozzájárulást',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Megjegyzi a mérés elleni tiltakozást',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Megjegyzi az elkattintott proaktív üzeneteket',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Megjegyzi, hogy a látogató elkattintotta az indítógomb feliratát',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Megjegyzi, hogy a widget nyitva van-e vagy zárva',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Megjegyzi, hogy a látogató egyetlen kampányban sem vehet részt (fiókok 14.06.2026 előtt)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Megjegyzi, hogy a látogató ki van zárva a kampányból (fiókok 14.06.2026-tól)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Megjegyzi, hogy a látogató ki van zárva a kampányból (fiókok 14.06.2026 előtt)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Megjegyzi, hogy a hozzájárulási tájékoztatót bezárták',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Megjegyzi, hogy a webshop tájékoztatóját bezárták',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Megjegyzi, hogy a sütikre vonatkozó kérdést nem kell újra feltenni',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Megjegyzi, hogy egy címke már aktiválódott',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Megjegyzi, hogy ennél a látogatónál mérik-e a görgetési mélységet',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Megjegyzi, hogy a csevegőablak nyitva van-e',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Megjegyzi, hogy a MUID azonosítót átadják-e egy hirdetési azonosítónak; a szolgáltató szerint mindig 0, harmadik féltől származó süti',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Az e-mail-kampányok megnyitásainak és kattintásainak mérése',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Munkamenetek és események mérése a widgetet tartalmazó oldalakon',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Munkamenetek mérése és a látogatás forrásának hozzárendelése',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'A szolgáltatás elérhetőségének mérése a Google által',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Az oldal betöltési idejének és alapmutatóinak mérése (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'A görgetési mélység és a kattintási események mérése',
    'Messung der Werbewirkung'
        => 'A hirdetés hatásának mérése',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'A használati viselkedés mérése a webhelyen',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Hirdetések mérése és személyre szabása a TikTok Pangle hirdetési hálózatban',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'A hirdetési kampányok teljesítményének mérése és javítása',
    'Messung von Auslieferungen und Klicks'
        => 'Megjelenítések és kattintások mérése',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Látogatók és munkamenetek mérése kiértékelésekhez',
    'Messung von Conversions'
        => 'Konverziók mérése',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Oldalletöltések és látogatások mérése',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Oldalletöltések és események mérése',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Oldalletöltések és használati viselkedés mérése',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Oldalletöltések és egyéni események mérése',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Oldalletöltések, látogatások és munkamenetek mérése',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Oldalletöltések, látogatások és munkamenetek mérése saját szerveren',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Hirdetési kampányok és konverziók mérése a webhelyen',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Egy kampány céljainak és konverzióinak mérése',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Térképcsempék, betűtípusok és stílusok utólagos betöltése a szolgáltatótól',
    'Name aus dem Kommentarformular vorbelegen'
        => 'A név előkitöltése a hozzászólási űrlapon',
    'Nutzer-ID'
        => 'Felhasználói azonosító',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'A kosarat a megfelelő országhoz rendeli; szükséges',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'A kosarat az adatbázisban a megfelelő ügyfélhez rendeli',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Egy látogatás műveleteit egy munkamenethez rendeli',
    'Personalisierung der Werbung auf TikTok'
        => 'A hirdetések személyre szabása a TikTokon',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Annak ellenőrzése, hogy a WordPress tud-e sütiket elhelyezni',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Ellenőrzi a böngésző sütikezelési képességét; szükséges',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Ellenőrzi, hogy a WordPress tud-e sütiket elhelyezni',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'A webshop jelszavának ellenőrző értéke; szükséges',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'A szolgáltató ellenőrző sütije (fiókok 14.06.2026 előtt)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Ellenőrzi, hogy a böngésző elfogad-e sütiket (fiókok 14.06.2026-tól)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Ellenőrzi, hogy a böngésző elfogad-e sütiket (fiókok 14.06.2026 előtt)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Ellenőrzi, hogy a böngésző elfogad-e sütiket (a szolgáltató szerint csak az Internet Explorerben)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Kérésszám-korlátozás a HubSpot CDN-szolgáltatójánál',
    'Reichweiten- und Nutzungsmessung'
        => 'Látogatottság- és használatmérés',
    'Reichweitenmessung'
        => 'Látogatottságmérés',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'A beágyazott videók látogatottságmérése a Vimeo által',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Látogatottságmérés a webshop üzemeltetője számára',
    'Remarketing und Zielgruppenbildung'
        => 'Remarketing és célcsoportképzés',
    'Retargeting'
        => 'Retargeting',
    'Retargeting von Website-Besuchern'
        => 'A webhely látogatóinak retargetingje',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Kockázatelemzés az ember és a bot megkülönböztetésére',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Gyűjtősüti, a szolgáltató szerint csak a Safari böngészőben jön létre (fiókok 14.06.2026-tól)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Gyűjtősüti, a szolgáltató szerint csak a Safari böngészőben jön létre (fiókok 14.06.2026 előtt)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Információk gyűjtése e felhasználók böngészési szokásairól a Spotify és harmadik felek részéről',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Kapcsoló, amelyet a webhely üzemeltetője maga állít be a Klaviyo-követés letiltásához',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'A tagi bejelentkezés védelme hamisítás ellen',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Az űrlapok védelme az automatizált visszaélésekkel szemben',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Védelem az automatizált kérésekkel szemben (spam, credential stuffing)',
    'Sicherheit'
        => 'Biztonság',
    'Sicherheitsfunktionen'
        => 'Biztonsági funkciók',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Biztonsági funkciók, ha az opcionális User Journeys funkció aktív',
    'Sitzung'
        => 'Munkamenet',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Munkamenet, valamint nyelvi, illetve országbesorolás',
    'Sitzungsaufzeichnung'
        => 'Munkamenet rögzítése',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Munkamenet-azonosító a widgetet tartalmazó oldalakon történt események kiértékeléséhez',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Munkamenet-azonosító a webshop statisztikájához; statisztika',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Az Answer Bot szolgáltatás munkamenetkulcsa',
    'Sitzungswiedergabe'
        => 'Munkamenet visszajátszása',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'A bejelentkezés után tárolja a hitelesítési tokent',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Tárolja a kódolt jelszót a jelszóval védett videókhoz',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Tárolja a kiválasztott nyelv kulcsát',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Tárolja a látogató adatvédelmi beállítását; szükséges',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Tárolja a látogató hozzájárulási döntését',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Tárolja a látogató eszközazonosítóját a csevegő widgetben történő hitelesítéshez',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Tárolja a webináriumra regisztrált felhasználó azonosítóját',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Tárolja az fbclid kattintásazonosítót, hogy egy webhelyesemény hirdetéshez legyen rendelhető',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Tárolja a videó elé helyezett regisztrációs űrlapról származó felhasználói azonosítót',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Tárolja a TikTok kattintásazonosítóját a konverziók hozzárendeléséhez',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Tárolja az egyedi látogatóazonosítót a felismeréshez',
    'Speichert die zugestimmten Kategorien'
        => 'Tárolja az elfogadott kategóriákat',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Adatokkal látja el a legutóbb megtekintett termékek widgetjét',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Szabályozza, hogy a MUID azonosító megújul-e; a szolgáltató szerint harmadik féltől származó süti',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Technikailag szükséges a webhely működéséhez és biztonságához.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'A webshop munkamenet- és pénztáradatait hordozza; a szolgáltató szükségesként tartja nyilván',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'A tiltakozási (opt-out) funkciót hordozza',
    'Transaktionssicherheit'
        => 'Tranzakcióbiztonság',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'A reCAPTCHA kockázatelemzését hordozza.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Webhelyesemények továbbítása a TikTok felé',
    'Umfragen'
        => 'Kérdőívek',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Megakadályozza az adatok továbbítását a HubSpot felé',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Bezárás után elrejti a csevegés üdvözlőüzenetét',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Megkülönbözteti a Microsoft-oldalakat megnyitó böngészőket; hozzájárulás esetén hirdetési célra is',
    'Unterscheidet einzelne Nutzer.'
        => 'Megkülönbözteti az egyes felhasználókat.',
    'Unterscheidung einzelner Nutzer'
        => 'Az egyes felhasználók megkülönböztetése',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Ember és bot megkülönböztetése űrlapoknál és bejelentkezéseknél',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Több oldalletöltést egyetlen munkamenet-felvétellé fűz össze',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Megakadályozza a sáv folyamatos megjelenítését szigorú módban',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'A hozzájárulási jelzések továbbítása a Google-címkékhez',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'A tárolóban beállított címkékre vonatkozó hozzájárulási döntés kezelése',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'A méréssel szembeni tiltakozás kezelése',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'A méréssel kapcsolatos tiltakozás és hozzájárulás kezelése',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'A Google a Statisztika és a Hirdetés kategóriába sorolta.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'A Google az elemzés, a hirdetés és a biztonság kategóriába sorolta.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'A Google a Funkcionalitás, a Hirdetés és a Biztonság kategóriába sorolta.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'A Google a biztonság és a funkcionalitás kategóriába sorolta.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'A Google a biztonság és a hirdetés kategóriába sorolta.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'A Google a biztonság, az elemzés, a funkcionalitás és a hirdetés kategóriába sorolta.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'A Google a Biztonság, a Funkcionalitás és a Hirdetés kategóriába sorolta.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'A Google a hirdetés és a biztonság kategóriába sorolta.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'A Google az elemzés kategóriába sorolta; pontosabb célt a Google nem ad meg.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'A Google a funkcionalitás kategóriába sorolta.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'A Google a biztonság kategóriába sorolta.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'A Google a hirdetés kategóriába sorolta.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'A Microsoft azon sütik egyikeként nevezi meg, amelyeket hozzájárulás nélkül nem szabad elhelyezni; saját célleírást a Microsoft nem ad meg',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'A Vimeo által létrehozott azonosító a látogatottságméréshez',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'A kosár pénzneme a pénztárfolyamat lezárása után; szükséges',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Egy böngésző valószínűségi alapú hozzárendelése egy személyhez',
    'Warenkorb einer Besucherin zuordnen'
        => 'A kosár hozzárendelése egy látogatóhoz',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'A webhelycím előkitöltése a hozzászólási űrlapon',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'A néző hirdetési célú felismerése',
    'Werbepersonalisierung'
        => 'Hirdetések személyre szabása',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Mint a _pin_unauth, de harmadik féltől származó sütiként',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'A látogató felismerése a foglalási folyamaton belül',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'A látogató felismerése oldalletöltések és lapok között',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'A webhely látogatóinak felismerése és azonosítása',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Látogatók felismerése több látogatáson át',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Kapcsolt webhelyek látogatóinak felismerése retargetinghez',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Visszatérő látogatók felismerése és a korábbi beszélgetések hozzárendelése',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'A látogató felismerése és jellemzőinek tárolása',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'A böngésző felismerése a Criteo-azonosító alapján',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'A felhasználó felismerése; csak hozzájárulással, alapértelmezés szerint letiltva',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Egy böngésző felismerése későbbi látogatások alkalmával, hozzájárulás után',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Látogatók felismerése és munkamenetekhez rendelése',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'LinkedIn-tagok felismerése a LinkedInen kívül hirdetési célból',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Felhasználók felismerése hozzájárulás után',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Visszatérő látogatók felismerése látogatóazonosító alapján',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Akkor kerül elhelyezésre, ha egy kampánycél kiváltódott (fiókok 14.06.2026-tól)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Akkor kerül elhelyezésre, ha egy kampánycél kiváltódott (fiókok 14.06.2026 előtt)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Akkor kerül elhelyezésre, ha egy személy beépített Pinterest-címkével rendelkező webhelyet látogat meg',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Akkor kerül elhelyezésre, ha a hozzárendelés meglévő sütik nélkül sikerül, például az Enhanced Match révén',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'A JavaScript-címke helyezi el azon adatok alapján, amelyeket a Pinterest a hirdetett forgalommal együtt átad',
    'Zaehlt und begrenzt Sitzungen'
        => 'Számolja és korlátozza a munkameneteket',
    'Zahlungsabwicklung'
        => 'Fizetés lebonyolítása',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Jelzi, hogy a munkamenet még tart-e vagy új',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Jelzi a felületnek, hogy a felhasználó be van jelentkezve, és kiként',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Véletlenszerű böngészőazonosító, amely egy webhely pixeleseményeit egy böngészőhöz rendeli',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'A legutóbb megtekintett termékek megjelenítése a hozzá tartozó widgetben',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'A webhelyen tanúsított viselkedés hozzárendelése egy profilhoz',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Egy látogatás eredetének hozzárendelése (hivatkozó, attribúció)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Egy látogató hozzárendelése a Brevo-fiók egyik kapcsolatához az e-mail-cím alapján',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Tranzakciók, például leadek és eladások hozzárendelése egy publisherhez',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Webhelyen végzett műveletek hozzárendelése korábban látott hirdetésekhez',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Több oldalletöltés összevonása egyetlen munkamenetbe',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Kiegészítő adatok a látogatási előzményekben rögzített eseményekhez',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Egy változat hozzárendelése és megtartása több látogatáson át',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Gyorsítótár a CSS-szelektorok alapján rögzített eseményekhez',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Gyorsítótár a Messenger- és látogatói adatokhoz a böngésző tárhelyén',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Gyorsítótár a Tag Manager bejegyzéseihez',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Gyorsítótár a görgetésimélység-méréshez',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Gyorsítótár a Tag Manager változóihoz',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Gyorsítótár a widget beállításaihoz, hogy elkerülhetők legyenek az ismételt szerverkérések',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'A Messenger- és látogatói adatok gyorsítótárazása a böngészőben',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Számolja a látogatóhoz létrehozott munkameneteket (fiókok 14.06.2026-tól)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Számolja, hányszor zárták be és nyitották meg újra a böngészőt a mérés során (fiókok 14.06.2026 előtt)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Oldalletöltések és látogatások számlálása',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'a felhasználói viselkedés automatizált kiértékelései',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'durva földrajzi besorolás ország, régió és város szintjén',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'opcionálisan a munkamenet rögzítése (Session Replay), alapértelmezés szerint maszkolt szövegekkel, képekkel és bevitt adatokkal',
    'optional Heatmaps und A/B-Tests'
        => 'opcionálisan hőtérképek és A/B-tesztek',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Átadja a hivatkozó forrást a split-URL-teszteknél (fiókok 14.06.2026-tól)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Átadja a hivatkozó forrást a split-URL-teszteknél (fiókok 14.06.2026 előtt)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Tranzakciók, például leadek és eladások hozzárendelése egy publisherhez, Egy hirdetési eszköz eredményességének mérése és a jutalék elszámolása',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Látogatók és oldalmegtekintések rögzítése a webhelyen marketingautomatizáláshoz, Egy látogató hozzárendelése a Brevo-fiók egyik kapcsolatához az e-mail-cím alapján, Az üzemeltető által meghatározott egyéni események rögzítése',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'A foglalási naptár megjelenítése és időpontok egyeztetése a webhelyen, A látogató felismerése a foglalási folyamaton belül, Fizetések lebonyolítása, ha az időpont díjköteles',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Automatizált hozzáférések felismerése és elutasítása az űrlapoknál, Olyan token kiállítása, amelyet a webhely szervere ellenőriz, Pre-Clearance módban: engedély az ugyanazon zónán belüli további WAF-ellenőrzésekhez',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Oldalletöltések és látogatások mérése, Az oldal betöltési idejének és alapmutatóinak mérése (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Személyre szabott hirdetések kiszolgálása, A hirdetés hatásának mérése, A böngésző felismerése a Criteo-azonosító alapján',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'A használati viselkedés mérése a webhelyen, Álnevesített használati profilok kialakítása hozzájárulás után, Egy böngésző felismerése későbbi látogatások alkalmával, hozzájárulás után',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Oldalletöltések és használati viselkedés mérése, A görgetési mélység és a kattintási események mérése, Felhasználók felismerése hozzájárulás után, A méréssel szembeni tiltakozás kezelése',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Ember és bot megkülönböztetése űrlapoknál és bejelentkezéseknél, Védelem az automatizált kérésekkel szemben (spam, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Konverziók mérése, Remarketing és célcsoportképzés, A megjelenítési gyakoriság korlátozása, Kattintási csalás felismerése',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Hirdetések kiszolgálása, A megjelenítési gyakoriság korlátozása, Csalás és visszaélés felismerése, Megjelenítések és kattintások mérése',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Az egyes felhasználók megkülönböztetése, A munkamenet állapotának fenntartása, Látogatottság- és használatmérés',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Interaktív térkép megjelenítése, A szolgáltatás elérhetőségének mérése a Google által',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Kockázatelemzés az ember és a bot megkülönböztetésére, Az űrlapok védelme az automatizált visszaélésekkel szemben',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Címkék kiszolgálása és kezelése a webhelyen, A hozzájárulási jelzések továbbítása a Google-címkékhez',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Ember és bot megkülönböztetése űrlapoknál és bejelentkezéseknél, A challenge-kérések terheléselosztása és útválasztása, Az akadálymentes hozzáférés biztosítása',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Hőtérképek, Munkamenet rögzítése, Kérdőívek',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Látogatók felismerése több látogatáson át, Munkamenetek mérése és a látogatás forrásának hozzárendelése, Kapcsolatok deduplikálása, A csevegőmodul működtetése, Az A/B-teszt változatainak következetes megjelenítése',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Élő csevegés és ügyfélszolgálati postafiók a webhelyen, Visszatérő látogatók felismerése és a korábbi beszélgetések hozzárendelése, Az eszköz felismerése a visszaélések elleni védelemhez, A Messenger- és látogatói adatok gyorsítótárazása a böngészőben',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Finanszírozási és részletfizetési tájékoztatók megjelenítése a termék- és kosároldalakon (On-site Messaging), Az értesítési tartalmak kiszolgálása az oldal forráskódjában előkészített helyekre egy hirdetéskiszolgálón keresztül',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'A webhely látogatóinak felismerése és azonosítása, A webhelyen tanúsított viselkedés hozzárendelése egy profilhoz, Regisztrációs űrlapok vezérlése a webhelyen',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Konverziókövetés LinkedIn-hirdetési kampányokhoz, A webhely látogatóinak retargetingje, A webhely célközönségének kiértékelése (webhelydemográfia)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Kapcsolt webhelyek látogatóinak felismerése retargetinghez, Felugró űrlapok vezérlése, hogy ne jelenjenek meg ismételten, Az e-mail-kampányok megnyitásainak és kattintásainak mérése, A Google és a Facebook hirdetési pixeleinek beépítése a kapcsolt webhelyen',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Interaktív térképek megjelenítése a webhelyen, Térképcsempék, betűtípusok és stílusok utólagos betöltése a szolgáltatótól, A térképlekérések elszámolása és védelme',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Oldalletöltések, látogatások és munkamenetek mérése, Visszatérő látogatók felismerése látogatóazonosító alapján, Egy látogatás eredetének hozzárendelése (hivatkozó, attribúció), opcionálisan hőtérképek és A/B-tesztek',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Oldalletöltések, látogatások és munkamenetek mérése saját szerveren, Visszatérő látogatók felismerése látogatóazonosító alapján, Egy látogatás eredetének hozzárendelése (hivatkozó, attribúció), opcionálisan hőtérképek és A/B-tesztek',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Címkék kiszolgálása és aktiválása a webhelyen, A tárolóban beállított címkékre vonatkozó hozzájárulási döntés kezelése',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Hirdetési kampányok és konverziók mérése a webhelyen, Célközönségek kialakítása és újracélzás',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Konverziókövetés Microsoft Advertising-kampányokhoz, Remarketinglisták felépítése, Oldalletöltések és egyéni események mérése',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Munkamenetek rögzítése és visszajátszása, Kattintások és görgetési viselkedés hőtérképei, Több oldalletöltés összevonása egyetlen munkamenetbe, a felhasználói viselkedés automatizált kiértékelései',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'A látogató által kezdeményezett fizetés lebonyolítása, A kártyamezők beágyazása a saját pénztárba, hogy a kártyaadatok ne a webshopon keresztül haladjanak, Csalásmegelőzés és jogszabályi kötelezettségek fizetési szolgáltatóként',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Egérmozgások rögzítése, Munkamenet visszajátszása, A használati szokások elemzése',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Térképcsempék kiszolgálása beágyazott térképekhez, A térképszolgáltatások működtetése és visszaélés elleni védelme',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Fizetés lebonyolítása, Csalásmegelőzés',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Konverziókövetés Pinterest-hirdetési kampányokhoz, Célközönségek kialakítása és újracélzás, Webhelyen végzett műveletek hozzárendelése korábban látott hirdetésekhez',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Oldalletöltések és események mérése, Látogatók felismerése és munkamenetekhez rendelése, Az eredet és a kampányok kiértékelése, Eszköz, böngésző és becsült tartózkodási hely kiértékelése, E-kereskedelmi és célkiértékelés',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Oldalletöltések és látogatások számlálása, A hivatkozó források kiértékelése, Böngésző, operációs rendszer és eszköztípus kiértékelése, durva földrajzi besorolás ország, régió és város szintjén',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Alkalmazáshibák rögzítése és továbbítása a böngészőből, opcionálisan a munkamenet rögzítése (Session Replay), alapértelmezés szerint maszkolt szövegekkel, képekkel és bevitt adatokkal',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Egy webshop kosarának és fizetési folyamatának működtetése, Munkamenet, valamint nyelvi, illetve országbesorolás, Látogatottságmérés a webshop üzemeltetője számára, A vásárlói felületek marketingadatai',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Számok, albumok, lejátszási listák és podcastepizódok beágyazása és lejátszása, Információk gyűjtése e felhasználók böngészési szokásairól a Spotify és harmadik felek részéről, Lehetővé teszik, hogy harmadik felek sütiket helyezzenek el e felhasználók böngészőjében',
    'Besucherzählung, Reichweitenmessung'
        => 'Látogatószámlálás, Látogatottságmérés',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Csalásfelismerés és fizetési kísérletek kockázatértékelése, A Stripe Elements fizetési mezőinek biztosítása, Botok és automatizált viselkedés felismerése a rendelési folyamatban',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'A hirdetési kampányok teljesítményének mérése és javítása, A hirdetések személyre szabása a TikTokon, Webhelyesemények továbbítása a TikTok felé',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Űrlapok és kérdőívek beágyazása a webhelyre, A válaszok rögzítése és továbbítása az űrlap üzemeltetőjének',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Videók beágyazása és lejátszása a webhelyen, A néző lejátszóbeállításainak megjegyzése (hangerő, minőség, felirat), A beágyazott videók látogatottságmérése a Vimeo által, Bot- és visszaélés elleni védelem a lejátszóhoz',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'A/B-tesztek és split URL-tesztek a webhelyen, Egy változat hozzárendelése és megtartása több látogatáson át, Egy kampány céljainak és konverzióinak mérése, Látogatók és munkamenetek mérése kiértékelésekhez, A méréssel kapcsolatos tiltakozás és hozzájárulás kezelése',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'A kosár hozzárendelése egy látogatóhoz, Annak felismerése, hogy megváltozott-e a kosár tartalma, A legutóbb megtekintett termékek megjelenítése a hozzá tartozó widgetben, A webshop-értesítés elrejtésének megjegyzése',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Bejelentkezés és munkamenet-felismerés az adminfelületen, A hozzászólás adatainak megőrzése további hozzászólásokhoz, Az adminfelület nézetbeállításainak megjegyzése, Annak ellenőrzése, hogy a WordPress tud-e sütiket elhelyezni, A választott nyelv mentése',
    'Conversion-Messung, Retargeting'
        => 'Konverziómérés, Retargeting',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Beágyazott videók lejátszása, Biztonság, A néző hirdetési célú felismerése',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Élő csevegés és üzenetküldő csatorna a webhelyen nyújtott ügyfélszolgálathoz, A látogató felismerése oldalletöltések és lapok között, A widget állapotának és beállításainak megjegyzése, Munkamenetek és események mérése a widgetet tartalmazó oldalakon',
];
