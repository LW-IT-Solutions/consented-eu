<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Schwedisch.
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
        => 'A/B-tester och split-URL-tester på webbplatsen',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Debitering och säkring av kartanropen',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Slutförande av inloggningen med Shop; nödvändig',
    'Abspielen eingebetteter Videos'
        => 'Uppspelning av inbäddade videor',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Hantering av en betalning som besökaren har initierat',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Hantering av betalningar när tidsbokningen är avgiftsbelagd',
    'Analyse des Nutzungsverhaltens'
        => 'Analys av användningsbeteendet',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Analysdata från köpgränssnitten; analys',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Analysdata från butiken; klassad av leverantören som analys',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Inloggningsuppgifter för administrationsområdet under /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Inloggning på Shop Pay; nödvändig',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Inloggning och sessionsidentifiering i administrationsområdet',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Anonym tjänstrelaterad statistik och ytterligare tekniska ändamål, bland annat stöd för tillgänglighet',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Visningsinställningar för administrationsområdet per konto',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Komma ihåg visningsinställningarna för administrationsområdet',
    'Anzeige von Bewertungen'
        => 'Visning av omdömen',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Visning av bokningskalendern och bokning av tider på webbplatsen',
    'Anzeigen einer interaktiven Karte'
        => 'Visning av en interaktiv karta',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'Satt till värdet 1 hindrar den att UET-händelser skickas till Microsoft',
    'Aufbau von Remarketing-Listen'
        => 'Uppbyggnad av remarketinglistor',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Inspelning och uppspelning av sessioner',
    'Aufzeichnung von Mausbewegungen'
        => 'Inspelning av musrörelser',
    'Ausblenden des Shop-Hinweises merken'
        => 'Komma ihåg att butiksmeddelandet har dolts',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Leverans och utlösning av taggar på webbplatsen',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Leverans och hantering av taggar på webbplatsen',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Leverans av kartrutor till inbäddade kartor',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Leverans av meddelandeinnehållet till förberedda platshållare i sidans källkod via en ad-server',
    'Auslieferung personalisierter Werbung'
        => 'Leverans av personanpassad annonsering',
    'Auslieferung von Anzeigen'
        => 'Leverans av annonser',
    'Auslieferung von Bibliotheken und Assets'
        => 'Leverans av bibliotek och assets',
    'Auslieferung von Schriftarten'
        => 'Leverans av teckensnitt',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Utfärdande av en token som webbplatsens server kontrollerar',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Styrning av registreringsformulär på webbplatsen',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Styrning av popup-formulär så att de inte visas upprepade gånger',
    'Auswahl des Rechenzentrums'
        => 'Val av datacenter',
    'Auswertung der Verweisquellen'
        => 'Analys av hänvisningskällorna',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Analys av webbplatsens målgrupp (webbplatsdemografi)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Analys av webbläsare, operativsystem och enhetstyp',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Analys av enhet, webbläsare och uppskattad plats',
    'Auswertung von Herkunft und Kampagnen'
        => 'Analys av ursprung och kampanjer',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Autentiserar slutanvändarens förfrågningar',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Begränsning av visningsfrekvensen',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Styrker en godkänd kontroll så att ytterligare challenges i zonen uteblir',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Tillhandahållande av betalfälten från Stripe Elements',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Tillhandahållande av tillgänglighetsfunktionen',
    'Besucherzählung'
        => 'Räkning av besökare',
    'Betrieb des Chat-Widgets'
        => 'Drift av chattwidgeten',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Drift och missbruksskydd för karttjänsterna',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Drift av en butiks varukorg och kassa',
    'Betrugs- und Missbrauchserkennung'
        => 'Bedrägeri- och missbruksdetektering',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Bedrägeridetektering vid betalningsförsöket',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Bedrägeridetektering och riskbedömning av betalningsförsök',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Bedrägeriförebyggande och rättsliga skyldigheter som betaltjänstleverantör',
    'Betrugsprävention'
        => 'Bedrägeriförebyggande',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Bedrägeriförebyggande och riskbedömning av ett betalningsförsök',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Bildande av pseudonyma användningsprofiler efter samtycke',
    'Bildung von Zielgruppen und Retargeting'
        => 'Bildande av målgrupper och retargeting',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Binder sessionen till samma AWS-instans',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Bot- och missbruksskydd för spelaren',
    'Bot-Abwehr fuer den Player'
        => 'Botskydd för spelaren',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Botskydd vid leverans av HubSpot-resurserna',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Webbläsar-id som LinkedIn använder för att skilja mellan enheter och upptäcka missbruk',
    'Cloudflare-Bot-Abwehr'
        => 'Cloudflare-botskydd',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Cloudflare-botdetektering för trafikfiltrering',
    'Cloudflare-Ratenbegrenzung'
        => 'Cloudflare-rate limiting',
    'Conversion-Messung'
        => 'Konverteringsmätning',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Konverteringsspårning för LinkedIn-annonskampanjer',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Konverteringsspårning för Microsoft Advertising-kampanjer',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Konverteringsspårning för Pinterest-annonskampanjer',
    'Darstellung interaktiver Karten auf der Website'
        => 'Visning av interaktiva kartor på webbplatsen',
    'Deduplizieren von Kontakten'
        => 'Deduplicering av kontakter',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Används för att leverera och mäta annonsering.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'Domänöverskridande besökar-id; enligt leverantören en tredjepartscookie, används endast när tredjepartscookies är aktiverade i konfigurationsfilen',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Tredjeparts-id för igenkänning av besökare',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Tredjeparts-id som lämnas vidare till Klaviyo',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Tredjeparts annons-id för mätning av kampanjer och för personanpassning på TikTok',
    'E-Commerce- und Zielauswertung'
        => 'E-handels- och målanalys',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Förifyllning av e-postadressen från kommentarsformuläret',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Inbäddning och uppspelning av låtar, album, spellistor och poddavsnitt',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Inbäddning och uppspelning av videor på webbplatsen',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Inbäddning av formulär och enkäter på webbplatsen',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Inbäddning av kortfälten i den egna kassan så att kortuppgifter inte passerar butiken',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Inbäddning av en externt underhållen cookiedeklaration',
    'Einbettung von Audioinhalten'
        => 'Inbäddning av ljudinnehåll',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Inbäddning av annonspixlar från Google och Facebook på den anslutna webbplatsen',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Visning av finansierings- och delbetalningsinformation på produkt- och varukorgssidor (on-site messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Unikt id vid domänöverskridande mätning (konton från och med 2026-06-14)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Unikt id vid domänöverskridande mätning (konton från före 2026-06-14)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Engångsvärde mot CSRF i opt-out-formuläret',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Innehåller ett användar-id och tidpunkten för skapandet; enligt källan satt i Pinterests webbläsare i appen, inte på webbplatsens domän',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Registrering och överföring av svaren till formulärets operatör',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Registrerar användningen av webbplatsen för analysändamål.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Registrering av egna händelser som operatören har definierat',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Registrering och överföring av programfel från webbläsaren',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Registrering av besökare och sidvisningar på webbplatsen för marknadsföringsautomation',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Effektmätning av ett annonsmaterial och avräkning av provisionen',
    'Erhalt des Sitzungszustands'
        => 'Bevarande av sessionstillståndet',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Igenkänning av enheten för missbruksskydd',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Upptäckt och avvisning av automatiserade anrop till formulär',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Upptäckt av bottar och automatiserat beteende i beställningsflödet',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Upptäckt av om varukorgens innehåll har ändrats',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Upptäcker ändringar i varukorgens innehåll',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Känner igen besökare på den webbplats där Intercom-koden är inbyggd',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Känner igen webbläsare på Microsofts webbplatser; enligt leverantören används den även för annonsering, tredjepartscookie',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Känner igen personer som skriver via chattverktyget',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Känner igen den enhet som samtalet utgår från',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Känner igen den enskilda enhet som interagerar med Messenger, för missbruksskydd',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Känner igen den slutanvändare som inleder samtalet',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Känner igen den domän eller subdomän där chattwidgeten är inbyggd',
    'Erkennt wiederkehrende Besucher'
        => 'Känner igen återkommande besökare',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Upptäcker om webbläsaren har startats om',
    'Erkennung von Klickbetrug'
        => 'Upptäckt av klickbedrägeri',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Fastställer unika besök på webbplatsen (konton från och med 2026-06-14)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Fastställer unika besök på webbplatsen (konton från före 2026-06-14)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Göra det möjligt för tredje parter att sätta cookies i dessa användares webbläsare',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Möjliggör användningen av tillgänglighetsfunktionen',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Möjliggör ytterligare funktioner på webbplatsen.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Förstaparts-id som känner igen besökare och kopplar händelser till webbplatsen',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Förstaparts besökar-id för konverteringsspårning och remarketing',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Förstaparts sessions-id för koppling av händelser',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Förstaparts sessions-id per pixel för kampanjmätning',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Förstaparts sessions-id för kampanjmätning',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Förstaparts annons-id för mätning av kampanjer och för personanpassning på TikTok',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Förstapartscookie som grupperar handlingar från besökare som Pinterest inte kan hänföra',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Förstapartscookie som lagrar de hashade kunduppgifter som samlats in via Automatic Enhanced Match',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Skapar ett unikt id för varje besökare (konton från och med 2026-06-14)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Skapar ett unikt id för varje besökare (konton från före 2026-06-14)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Enhets-id för analys av händelser på sidor med widget',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Sätts vid inloggning på en sida som HubSpot är värd för',
    'Gewaehlte Sprache speichern'
        => 'Spara valt språk',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Samkör MUID-id:t över Microsofts domäner; enligt leverantören en tredjepartscookie',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Håller meddelanden synkroniserade över flera flikar',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Håller värdet på parametern pk_campaign',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Håller värdet på parametern utm_campaign',
    'Haelt den Widerspruch gegen die Messung'
        => 'Håller invändningen mot mätningen',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Håller utgångstiden för _uetsid',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Håller utgångstiden för _uetvid',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Håller typen av trafikkälla för Tag Manager',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Registrerar besökarens identitet, även för deduplicering av kontakter',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Registrerar besökarens cookiebeslut',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Håller widgetens utseende konsekvent vid sidbyte',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Registrerar ingångssidan; analys',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Håller samtycket till mätning med cookies',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Håller användarens beslut om kategorier och leverantörer',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Håller sessionen för inloggade användare och åtkomsten till tidigare samtal',
    'Haelt die verweisende Adresse'
        => 'Håller den hänvisande adressen',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Registrerar den hänvisande källan; analys',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Håller egna variabler för sessionen (markerad som föråldrad av leverantören)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Registrerar om etracker får sätta cookies; sätts vid data-block-cookies via ett API-anrop',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Registrerar vilka funktionsreglage videons ägare har aktiverat',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Huvudcookie för igenkänning av besökare',
    'Heatmaps'
        => 'Heatmaps',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Heatmaps över klick och scrollbeteende',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Håller heatmap-sessionsdata under besökets varaktighet',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Håller information om den pågående sessionen (konton från och med 2026-06-14)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Håller information om den pågående sessionen (konton från före 2026-06-14)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Håller anpassade variabler under besökets varaktighet',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Håller permanenta data på besökarnivå (konton från och med 2026-06-14)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Håller permanenta data på besökarnivå för Insights-analysen (konton från före 2026-06-14)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Registrerar besökarens samtyckesstatus (konton från och med 2026-06-14)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Registrerar besökarens samtyckesstatus (konton från före 2026-06-14)',
    'Hält den Sitzungszustand.'
        => 'Håller sessionstillståndet.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Håller Clarity-användar-id:t och inställningarna för denna webbplats',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Håller varianttilldelningen för A/B-tester',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Registrerar tillfälligt den valda kombinationen (konton från och med 2026-06-14)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Registrerar tillfälligt den valda kombinationen (konton från före 2026-06-14)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Registrerar den valda varianten innan omdirigeringen sker (konton från och med 2026-06-14)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Registrerar den valda varianten innan omdirigeringen sker (konton från före 2026-06-14)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Registrerar via vilken hänvisning besöket kom till',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'I läget Pre-Clearance: godkännande för ytterligare WAF-kontroller i samma zon',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Indirekt medlemsidentifierare för konverteringsspårning, retargeting och analys',
    'Inhalt des Warenkorbs; notwendig'
        => 'Varukorgens innehåll; nödvändig',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Köparrelaterade analysdata i butiken; statistik',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Kampanjrelaterad unik identifierare (konton från 2026-06-14)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Identifierare för den första kontakten med Clarity över alla Clarity-webbplatser; enligt leverantören en tredjepartscookie',
    'Kennzeichnet die laufende Sitzung'
        => 'Markerar den pågående sessionen',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Behålla kommentarsuppgifter för ytterligare kommentarer',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Konsekvent visning av A/B-testvarianter',
    'Lastverteilung und Routing'
        => 'Lastbalansering och routing',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Lastbalansering och routning av challenge-förfrågningarna',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Lagrar besökarens kontoinställningar lokalt',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Levererar samma variant av en A/B-testsida',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Livechatt och meddelandekanal för support på webbplatsen',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Livechatt och supportinkorg på webbplatsen',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Marknadsföringsdata från köpytorna; marknadsföring',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Marknadsföringsdata för köpytorna',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Komma ihåg tittarens spelarinställningar (volym, kvalitet, undertexter)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Komma ihåg widgetens tillstånd och inställningar',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Kommer ihåg att Global Privacy Control-bannern har stängts',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Kommer ihåg att informationsbannern har stängts',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Kommer ihåg tidpunkten för synkroniseringen med cookien lms_analytics',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Kommer ihåg tidpunkten för den senaste id-synkroniseringen så att den inte upprepas',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Kommer ihåg den tilldelade varianten (konton från 2026-06-14)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Kommer ihåg den tilldelade varianten så att den är densamma vid ett nytt besök (konton före 2026-06-14)',
    'Merkt einen Rabattcode; notwendig'
        => 'Kommer ihåg en rabattkod; nödvändig',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Kommer ihåg en invändning mot mätningen (konton från 2026-06-14)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Kommer ihåg en invändning som gäller över flera webbplatser (konton före 2026-06-14)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Kommer ihåg spelarinställningar som volym, kvalitet och undertexter',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Kommer ihåg inställningen för ljudaviseringar',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Kommer ihåg ett lämnat samtycke till mätningen',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Kommer ihåg en invändning mot mätningen',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Kommer ihåg proaktiva meddelanden som klickats bort',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Kommer ihåg att besökaren har klickat bort texten på startknappen',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Kommer ihåg om widgeten är öppen eller stängd',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Kommer ihåg att besökaren inte ska delta i någon kampanj (konton före 2026-06-14)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Kommer ihåg att besökaren är undantagen från kampanjen (konton från 2026-06-14)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Kommer ihåg att besökaren är undantagen från kampanjen (konton före 2026-06-14)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Kommer ihåg att samtyckesmeddelandet har stängts',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Kommer ihåg att butiksmeddelandet har stängts',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Kommer ihåg att cookiefrågan inte ska ställas igen',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Kommer ihåg att en tagg redan har utlösts',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Kommer ihåg om scrolldjupet mäts för den här besökaren',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Kommer ihåg om chattfönstret är öppet',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Kommer ihåg om MUID-identifieraren skickas vidare till en annonsidentifierare; enligt leverantören alltid 0, tredjepartscookie',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Mätning av öppningar och klick i e-postkampanjer',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Mätning av sessioner och händelser på sidor med widget',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Mätning av sessioner och attribuering av besökets källa',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Googles mätning av tjänstens tillgänglighet',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Mätning av laddningstid och sidans kärnvärden (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Mätning av scrolldjup och klickhändelser',
    'Messung der Werbewirkung'
        => 'Mätning av reklamens effekt',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Mätning av användningsbeteendet på webbplatsen',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Mätning och personalisering av annonser i annonsnätverket TikTok Pangle',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Mätning och förbättring av reklamkampanjers prestanda',
    'Messung von Auslieferungen und Klicks'
        => 'Mätning av leveranser och klick',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Mätning av besökare och sessioner för analyser',
    'Messung von Conversions'
        => 'Mätning av konverteringar',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Mätning av sidvisningar och besök',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Mätning av sidvisningar och händelser',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Mätning av sidvisningar och användningsbeteende',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Mätning av sidvisningar och anpassade händelser',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Mätning av sidvisningar, besök och sessioner',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Mätning av sidvisningar, besök och sessioner på egen server',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Mätning av reklamkampanjer och konverteringar på webbplatsen',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Mätning av en kampanjs mål och konverteringar',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Hämtning av kartrutor, teckensnitt och stilar från leverantören',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Förifylla namnet från kommentarsformuläret',
    'Nutzer-ID'
        => 'Användar-id',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Kopplar varukorgen till rätt land; nödvändig',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Kopplar varukorgen i databasen till rätt kund',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Kopplar handlingarna under ett besök till en session',
    'Personalisierung der Werbung auf TikTok'
        => 'Personalisering av reklamen på TikTok',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Kontrollera om WordPress kan sätta cookies',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Kontrollerar om webbläsaren stöder cookies; nödvändig',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Kontrollerar om WordPress kan sätta cookies',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Kontrollvärde för butikens lösenord; nödvändig',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Leverantörens testcookie (konton före 2026-06-14)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Kontrollerar om webbläsaren accepterar cookies (konton från 2026-06-14)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Kontrollerar om webbläsaren accepterar cookies (konton före 2026-06-14)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Kontrollerar om webbläsaren accepterar cookies (enligt leverantören endast i Internet Explorer)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Rate limiting hos HubSpots CDN-leverantör',
    'Reichweiten- und Nutzungsmessung'
        => 'Räckvidds- och användningsmätning',
    'Reichweitenmessung'
        => 'Räckviddsmätning',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Vimeos räckviddsmätning av de inbäddade videorna',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Räckviddsmätning åt butiksinnehavaren',
    'Remarketing und Zielgruppenbildung'
        => 'Remarketing och målgruppsbildning',
    'Retargeting'
        => 'Retargeting',
    'Retargeting von Website-Besuchern'
        => 'Retargeting av webbplatsbesökare',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Riskanalys för att skilja människa från bot',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Samlingscookie, enligt leverantören endast skapad i webbläsaren Safari (konton från 2026-06-14)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Samlingscookie, enligt leverantören endast skapad i webbläsaren Safari (konton före 2026-06-14)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Spotifys och tredje parters insamling av information om dessa användares surfbeteende',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Reglage som webbplatsinnehavaren själv sätter för att stoppa Klaviyos spårning',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Skydd av medlemsinloggningen mot förfalskning',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Skydd av formulär mot automatiserat missbruk',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Skydd mot automatiserade förfrågningar (spam, credential stuffing)',
    'Sicherheit'
        => 'Säkerhet',
    'Sicherheitsfunktionen'
        => 'Säkerhetsfunktioner',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Säkerhetsfunktioner när den valfria funktionen User Journeys är aktiv',
    'Sitzung'
        => 'Session',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Koppling av session och av språk respektive land',
    'Sitzungsaufzeichnung'
        => 'Sessionsinspelning',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Sessions-id för analys av händelser på sidor med widget',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Sessions-id för butiksstatistiken; statistik',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Sessionsnyckel för tjänsten Answer Bot',
    'Sitzungswiedergabe'
        => 'Uppspelning av session',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Lagrar autentiseringstoken efter inloggningen',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Lagrar det kodade lösenordet för lösenordsskyddade videor',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Lagrar nyckeln för det valda språket',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Lagrar besökarens integritetsval; nödvändig',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Lagrar besökarens samtyckesbeslut',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Lagrar besökarens enhets-id för autentisering i chattwidgeten',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Lagrar identifieraren för en användare som är anmäld till ett webbinarium',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Lagrar klickidentifieraren fbclid så att en händelse på webbplatsen kan kopplas till en annons',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Lagrar användaridentifieraren från ett registreringsformulär som ligger före videon',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Lagrar TikTok-klickidentifieraren för att koppla konverteringar',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Lagrar det unika besökar-id:t för igenkänning',
    'Speichert die zugestimmten Kategorien'
        => 'Lagrar de kategorier som samtycke har lämnats till',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Matar widgeten med senast visade produkter',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Styr om MUID-identifieraren förnyas; enligt leverantören en tredjepartscookie',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Tekniskt nödvändig för webbplatsens drift och säkerhet.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Bär butikens sessions- och kassadata; anges som nödvändig av leverantören',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Bär invändningsfunktionen (opt-out)',
    'Transaktionssicherheit'
        => 'Transaktionssäkerhet',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Bär riskanalysen från reCAPTCHA.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Överföring av händelser på webbplatsen till TikTok',
    'Umfragen'
        => 'Enkäter',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Förhindrar överföring av uppgifter till HubSpot',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Undertrycker chattens välkomstmeddelande efter att det har stängts',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Skiljer mellan webbläsare som besöker Microsoft-sidor; med samtycke även för reklam',
    'Unterscheidet einzelne Nutzer.'
        => 'Skiljer mellan enskilda användare.',
    'Unterscheidung einzelner Nutzer'
        => 'Åtskillnad mellan enskilda användare',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Åtskillnad mellan människa och bot vid formulär och inloggningar',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Kopplar samman flera sidvisningar till en sessionsinspelning',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Förhindrar att bannern visas hela tiden i strikt läge',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Fördelning av samtyckessignalerna till Google-taggar',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Hantering av samtyckesbeslutet för de taggar som är konfigurerade i containern',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Hantering av invändningen mot mätningen',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Hantering av invändning och samtycke för mätningen',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Placerad av Google i kategorierna Analys och Reklam.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Placerad av Google i kategorierna Analys, Annonsering och Säkerhet.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Placerad av Google i kategorierna Funktionalitet, Reklam och Säkerhet.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Placerad av Google i kategorierna Säkerhet och Funktionalitet.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Placerad av Google i kategorierna Säkerhet och Annonsering.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Placerad av Google i kategorierna Säkerhet, Analys, Funktionalitet och Annonsering.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Placerad av Google i kategorierna Säkerhet, Funktionalitet och Reklam.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Placerad av Google i kategorierna Annonsering och Säkerhet.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Placerad av Google i kategorin Analys; Google anger inget mer preciserat ändamål.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Placerad av Google i kategorin Funktionalitet.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Placerad av Google i kategorin Säkerhet.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Placerad av Google i kategorin Annonsering.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Nämnd av Microsoft som en av de cookies som inte får sättas utan samtycke; Microsoft anger ingen egen ändamålsbeskrivning',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Identifierare som Vimeo skapar för räckviddsmätningen',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Varukorgens valuta efter avslutad kassagång; nödvändig',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Sannolikhetsbaserad koppling av en webbläsare till en person',
    'Warenkorb einer Besucherin zuordnen'
        => 'Koppla en varukorg till en besökare',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Förifylla webbadressen från kommentarsformuläret',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Igenkänning av tittaren för reklamändamål',
    'Werbepersonalisierung'
        => 'Personalisering av reklam',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Som _pin_unauth, men som tredjepartscookie',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Känna igen besökaren under bokningsprocessen',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Känna igen besökaren mellan sidvisningar och flikar',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Känna igen och identifiera besökare på webbplatsen',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Känna igen besökare över flera besök',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Känna igen besökare på anslutna webbplatser för retargeting',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Känna igen återkommande besökare och koppla tidigare konversationer',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Igenkänning av besökaren och lagring av dennes egenskaper',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Igenkänning av webbläsaren via Criteo-identifieraren',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Igenkänning av användaren; endast med samtycke, blockerad som standard',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Igenkänning av en webbläsare vid senare besök efter samtycke',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Igenkänning av besökare och koppling till sessioner',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'Igenkänning av LinkedIn-medlemmar utanför LinkedIn för reklam',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Igenkänning av användare efter samtycke',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Igenkänning av återkommande besökare via ett besökar-id',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Sätts när ett kampanjmål har utlösts (konton från 2026-06-14)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Sätts när ett kampanjmål har utlösts (konton före 2026-06-14)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Sätts när en person besöker en webbplats med inbyggd Pinterest-tagg',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Sätts när en koppling lyckas utan befintliga cookies, till exempel via Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Sätts av JavaScript-taggen utifrån uppgifter som Pinterest skickar med annonserad trafik',
    'Zaehlt und begrenzt Sitzungen'
        => 'Räknar och begränsar sessioner',
    'Zahlungsabwicklung'
        => 'Betalningshantering',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Anger om sessionen fortfarande pågår eller är ny',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Talar om för gränssnittet att någon är inloggad och vem det är',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Slumpmässig webbläsaridentifierare som kopplar en webbplats pixelhändelser till en webbläsare',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Visa senast visade produkter i tillhörande widget',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Koppla beteende på webbplatsen till en profil',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Hänförande av ett besöks ursprung (referrer, attribution)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Koppling av en besökare till en kontakt i Brevo-kontot via e-postadressen',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Attribuering av transaktioner som leads och försäljning till en publisher',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Attribuering av åtgärder på webbplatsen till tidigare visade annonser',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Sammanslagning av flera sidvisningar till en session',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Kompletterande data om registrerade händelser i besöksförloppet',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Tilldelning och bibehållande av en variant över flera besök',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Mellanlagring av händelser utifrån CSS-selektorer',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Mellanlagring av Messenger- och besöksdata i webbläsarens lagring',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Mellanlagring av posterna i Tag Manager',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Mellanlagring för mätningen av scrolldjup',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Mellanlagring av variablerna i Tag Manager',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Mellanlagring av widgetens inställningar för att undvika upprepade serverförfrågningar',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Mellanlagring av Messenger- och besöksdata i webbläsaren',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Räknar de sessioner som skapats för en besökare (konton från 2026-06-14)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Räknar hur ofta webbläsaren stängdes och öppnades igen under mätningen (konton före 2026-06-14)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Räkning av sidvisningar och besök',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'automatiserade analyser av användarbeteendet',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'grov geografisk placering på land, region och stad',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'valfri inspelning av sessionen (Session Replay), som standard med maskerade texter, bilder och inmatningar',
    'optional Heatmaps und A/B-Tests'
        => 'valfritt heatmaps och A/B-tester',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Skickar vidare hänvisningskällan vid split-URL-tester (konton från 2026-06-14)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Skickar vidare hänvisningskällan vid split-URL-tester (konton före 2026-06-14)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Attribuering av transaktioner som leads och försäljning till en publisher, Effektmätning av ett annonsmaterial och avräkning av provisionen',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Registrering av besökare och sidvisningar på webbplatsen för marknadsföringsautomation, Koppling av en besökare till en kontakt i Brevo-kontot via e-postadressen, Registrering av egna händelser som operatören har definierat',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Visning av bokningskalendern och bokning av tider på webbplatsen, Känna igen besökaren under bokningsprocessen, Hantering av betalningar när tidsbokningen är avgiftsbelagd',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Upptäckt och avvisning av automatiserade anrop till formulär, Utfärdande av en token som webbplatsens server kontrollerar, I läget Pre-Clearance: godkännande för ytterligare WAF-kontroller i samma zon',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Mätning av sidvisningar och besök, Mätning av laddningstid och sidans kärnvärden (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Leverans av personanpassad annonsering, Mätning av reklamens effekt, Igenkänning av webbläsaren via Criteo-identifieraren',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Mätning av användningsbeteendet på webbplatsen, Bildande av pseudonyma användningsprofiler efter samtycke, Igenkänning av en webbläsare vid senare besök efter samtycke',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Mätning av sidvisningar och användningsbeteende, Mätning av scrolldjup och klickhändelser, Igenkänning av användare efter samtycke, Hantering av invändningen mot mätningen',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Åtskillnad mellan människa och bot vid formulär och inloggningar, Skydd mot automatiserade förfrågningar (spam, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Mätning av konverteringar, Remarketing och målgruppsbildning, Begränsning av visningsfrekvensen, Upptäckt av klickbedrägeri',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Leverans av annonser, Begränsning av visningsfrekvensen, Bedrägeri- och missbruksdetektering, Mätning av leveranser och klick',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Åtskillnad mellan enskilda användare, Bevarande av sessionstillståndet, Räckvidds- och användningsmätning',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Visning av en interaktiv karta, Googles mätning av tjänstens tillgänglighet',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Riskanalys för att skilja människa från bot, Skydd av formulär mot automatiserat missbruk',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Leverans och hantering av taggar på webbplatsen, Fördelning av samtyckessignalerna till Google-taggar',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Åtskillnad mellan människa och bot vid formulär och inloggningar, Lastbalansering och routning av challenge-förfrågningarna, Tillhandahållande av tillgänglighetsfunktionen',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Heatmaps, Sessionsinspelning, Enkäter',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Känna igen besökare över flera besök, Mätning av sessioner och attribuering av besökets källa, Deduplicering av kontakter, Drift av chattwidgeten, Konsekvent visning av A/B-testvarianter',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Livechatt och supportinkorg på webbplatsen, Känna igen återkommande besökare och koppla tidigare konversationer, Igenkänning av enheten för missbruksskydd, Mellanlagring av Messenger- och besöksdata i webbläsaren',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Visning av finansierings- och delbetalningsinformation på produkt- och varukorgssidor (on-site messaging), Leverans av meddelandeinnehållet till förberedda platshållare i sidans källkod via en ad-server',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Känna igen och identifiera besökare på webbplatsen, Koppla beteende på webbplatsen till en profil, Styrning av registreringsformulär på webbplatsen',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Konverteringsspårning för LinkedIn-annonskampanjer, Retargeting av webbplatsbesökare, Analys av webbplatsens målgrupp (webbplatsdemografi)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Känna igen besökare på anslutna webbplatser för retargeting, Styrning av popup-formulär så att de inte visas upprepade gånger, Mätning av öppningar och klick i e-postkampanjer, Inbäddning av annonspixlar från Google och Facebook på den anslutna webbplatsen',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Visning av interaktiva kartor på webbplatsen, Hämtning av kartrutor, teckensnitt och stilar från leverantören, Debitering och säkring av kartanropen',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Mätning av sidvisningar, besök och sessioner, Igenkänning av återkommande besökare via ett besökar-id, Hänförande av ett besöks ursprung (referrer, attribution), valfritt heatmaps och A/B-tester',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Mätning av sidvisningar, besök och sessioner på egen server, Igenkänning av återkommande besökare via ett besökar-id, Hänförande av ett besöks ursprung (referrer, attribution), valfritt heatmaps och A/B-tester',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Leverans och utlösning av taggar på webbplatsen, Hantering av samtyckesbeslutet för de taggar som är konfigurerade i containern',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Mätning av reklamkampanjer och konverteringar på webbplatsen, Bildande av målgrupper och retargeting',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Konverteringsspårning för Microsoft Advertising-kampanjer, Uppbyggnad av remarketinglistor, Mätning av sidvisningar och anpassade händelser',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Inspelning och uppspelning av sessioner, Heatmaps över klick och scrollbeteende, Sammanslagning av flera sidvisningar till en session, automatiserade analyser av användarbeteendet',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Hantering av en betalning som besökaren har initierat, Inbäddning av kortfälten i den egna kassan så att kortuppgifter inte passerar butiken, Bedrägeriförebyggande och rättsliga skyldigheter som betaltjänstleverantör',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Inspelning av musrörelser, Uppspelning av session, Analys av användningsbeteendet',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Leverans av kartrutor till inbäddade kartor, Drift och missbruksskydd för karttjänsterna',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Betalningshantering, Bedrägeriförebyggande',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Konverteringsspårning för Pinterest-annonskampanjer, Bildande av målgrupper och retargeting, Attribuering av åtgärder på webbplatsen till tidigare visade annonser',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Mätning av sidvisningar och händelser, Igenkänning av besökare och koppling till sessioner, Analys av ursprung och kampanjer, Analys av enhet, webbläsare och uppskattad plats, E-handels- och målanalys',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Räkning av sidvisningar och besök, Analys av hänvisningskällorna, Analys av webbläsare, operativsystem och enhetstyp, grov geografisk placering på land, region och stad',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Registrering och överföring av programfel från webbläsaren, valfri inspelning av sessionen (Session Replay), som standard med maskerade texter, bilder och inmatningar',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Drift av en butiks varukorg och kassa, Koppling av session och av språk respektive land, Räckviddsmätning åt butiksinnehavaren, Marknadsföringsdata för köpytorna',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Inbäddning och uppspelning av låtar, album, spellistor och poddavsnitt, Spotifys och tredje parters insamling av information om dessa användares surfbeteende, Göra det möjligt för tredje parter att sätta cookies i dessa användares webbläsare',
    'Besucherzählung, Reichweitenmessung'
        => 'Räkning av besökare, Räckviddsmätning',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Bedrägeridetektering och riskbedömning av betalningsförsök, Tillhandahållande av betalfälten från Stripe Elements, Upptäckt av bottar och automatiserat beteende i beställningsflödet',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Mätning och förbättring av reklamkampanjers prestanda, Personalisering av reklamen på TikTok, Överföring av händelser på webbplatsen till TikTok',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Inbäddning av formulär och enkäter på webbplatsen, Registrering och överföring av svaren till formulärets operatör',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Inbäddning och uppspelning av videor på webbplatsen, Komma ihåg tittarens spelarinställningar (volym, kvalitet, undertexter), Vimeos räckviddsmätning av de inbäddade videorna, Bot- och missbruksskydd för spelaren',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'A/B-tester och split-URL-tester på webbplatsen, Tilldelning och bibehållande av en variant över flera besök, Mätning av en kampanjs mål och konverteringar, Mätning av besökare och sessioner för analyser, Hantering av invändning och samtycke för mätningen',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Koppla en varukorg till en besökare, Upptäckt av om varukorgens innehåll har ändrats, Visa senast visade produkter i tillhörande widget, Komma ihåg att butiksmeddelandet har dolts',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Inloggning och sessionsidentifiering i administrationsområdet, Behålla kommentarsuppgifter för ytterligare kommentarer, Komma ihåg visningsinställningarna för administrationsområdet, Kontrollera om WordPress kan sätta cookies, Spara valt språk',
    'Conversion-Messung, Retargeting'
        => 'Konverteringsmätning, Retargeting',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Uppspelning av inbäddade videor, Säkerhet, Igenkänning av tittaren för reklamändamål',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Livechatt och meddelandekanal för support på webbplatsen, Känna igen besökaren mellan sidvisningar och flikar, Komma ihåg widgetens tillstånd och inställningar, Mätning av sessioner och händelser på sidor med widget',
];
