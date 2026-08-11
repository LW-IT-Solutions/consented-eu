<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Daenisch.
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
        => 'A/B-test og split-URL-test på webstedet',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Afregning og sikring af kortkaldene',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Afslutning af login med Shop; nødvendig',
    'Abspielen eingebetteter Videos'
        => 'Afspilning af indlejrede videoer',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Behandling af en betaling, som den besøgende har igangsat',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Behandling af betalinger, når tiden er betalingspligtig',
    'Analyse des Nutzungsverhaltens'
        => 'Analyse af brugsadfærden',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Analysedata fra købsfladerne; analyse',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Analysedata fra shoppen; ført af udbyderen som analyse',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Loginoplysninger til administrationsområdet under /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Login på Shop Pay; nødvendig',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Login og sessionsgenkendelse i administrationsområdet',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Anonym tjenesterelateret statistik og yderligere tekniske formål, blandt andet understøttelse af tilgængelighed',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Visningsindstillinger for administrationsområdet pr. konto',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Husk visningsindstillingerne for administrationsområdet',
    'Anzeige von Bewertungen'
        => 'Visning af anmeldelser',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Visning af bookingkalenderen og aftale af tider på webstedet',
    'Anzeigen einer interaktiven Karte'
        => 'Visning af et interaktivt kort',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'Sat til værdien 1 forhindrer den, at UET-hændelser sendes til Microsoft',
    'Aufbau von Remarketing-Listen'
        => 'Opbygning af remarketinglister',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Optagelse og afspilning af sessioner',
    'Aufzeichnung von Mausbewegungen'
        => 'Optagelse af musebevægelser',
    'Ausblenden des Shop-Hinweises merken'
        => 'Husk, at shopmeddelelsen er skjult',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Levering og udløsning af tags på webstedet',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Levering og administration af tags på webstedet',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Levering af kortfliser til indlejrede kort',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Levering af meddelelsesindholdet i forberedte pladsholdere i sidens kildekode via en ad-server',
    'Auslieferung personalisierter Werbung'
        => 'Levering af personaliseret annoncering',
    'Auslieferung von Anzeigen'
        => 'Levering af annoncer',
    'Auslieferung von Bibliotheken und Assets'
        => 'Levering af biblioteker og assets',
    'Auslieferung von Schriftarten'
        => 'Levering af skrifttyper',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Udstedelse af et token, som webstedets server kontrollerer',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Styring af tilmeldingsformularer på webstedet',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Styring af pop op-formularer, så de ikke vises gentagne gange',
    'Auswahl des Rechenzentrums'
        => 'Valg af datacenter',
    'Auswertung der Verweisquellen'
        => 'Analyse af henvisningskilderne',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Analyse af webstedets målgruppe (webstedsdemografi)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Analyse af browser, styresystem og enhedstype',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Analyse af enhed, browser og anslået placering',
    'Auswertung von Herkunft und Kampagnen'
        => 'Analyse af oprindelse og kampagner',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Autentificerer slutbrugerens anmodninger',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Begrænsning af visningshyppigheden',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Dokumenterer en bestået kontrol, så yderligere challenges i zonen bortfalder',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Levering af betalingsfelterne fra Stripe Elements',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Levering af tilgængelighedsadgangen',
    'Besucherzählung'
        => 'Optælling af besøgende',
    'Betrieb des Chat-Widgets'
        => 'Drift af chatwidgetten',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Drift og misbrugsbeskyttelse af korttjenesterne',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Drift af en shops indkøbskurv og betalingsforløb',
    'Betrugs- und Missbrauchserkennung'
        => 'Svindel- og misbrugsregistrering',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Svindelregistrering ved betalingsforsøget',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Svindelregistrering og risikovurdering af betalingsforsøg',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Forebyggelse af svindel og lovbestemte pligter som betalingstjenesteudbyder',
    'Betrugsprävention'
        => 'Forebyggelse af svindel',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Forebyggelse af svindel og risikovurdering af et betalingsforsøg',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Dannelse af pseudonyme brugsprofiler efter samtykke',
    'Bildung von Zielgruppen und Retargeting'
        => 'Dannelse af målgrupper og retargeting',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Binder sessionen til den samme AWS-instans',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Bot- og misbrugsbeskyttelse for afspilleren',
    'Bot-Abwehr fuer den Player'
        => 'Botbeskyttelse for afspilleren',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Botbeskyttelse ved levering af HubSpot-ressourcerne',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Browser-id, som LinkedIn bruger til at skelne mellem enheder og registrere misbrug',
    'Cloudflare-Bot-Abwehr'
        => 'Cloudflare-botbeskyttelse',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Cloudflare-botregistrering til filtrering af trafik',
    'Cloudflare-Ratenbegrenzung'
        => 'Cloudflare-rate limiting',
    'Conversion-Messung'
        => 'Konverteringsmåling',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Konverteringssporing for LinkedIn-annoncekampagner',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Konverteringssporing for Microsoft Advertising-kampagner',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Konverteringssporing for Pinterest-annoncekampagner',
    'Darstellung interaktiver Karten auf der Website'
        => 'Visning af interaktive kort på webstedet',
    'Deduplizieren von Kontakten'
        => 'Dubletfjernelse blandt kontakter',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Bruges til at levere og måle annoncering.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'Domæneoverskridende besøgende-id; ifølge udbyderen en tredjepartscookie, kun brugt hvis tredjepartscookies er slået til i konfigurationsfilen',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Tredjeparts-id til genkendelse af besøgende',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Tredjeparts-id, der videregives til Klaviyo',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Tredjeparts annonce-id til måling af kampagner og til personalisering på TikTok',
    'E-Commerce- und Zielauswertung'
        => 'E-handels- og målanalyse',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Forudfyldning af e-mailadressen fra kommentarformularen',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Indlejring og afspilning af numre, albummer, playlister og podcastafsnit',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Indlejring og afspilning af videoer på webstedet',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Indlejring af formularer og spørgeskemaer på webstedet',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Indlejring af kortfelterne i egen checkout, så kortoplysninger ikke passerer shoppen',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Indlejring af en eksternt vedligeholdt cookieerklæring',
    'Einbettung von Audioinhalten'
        => 'Indlejring af lydindhold',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Indlejring af annoncepixels fra Google og Facebook på det tilknyttede websted',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Visning af finansierings- og ratebetalingsoplysninger på produkt- og kurvsider (on-site messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Entydigt id ved måling på tværs af domæner (konti fra og med 14.06.2026)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Entydigt id ved måling på tværs af domæner (konti fra før 14.06.2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Engangsværdi mod CSRF på opt-out-formularen',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Indeholder et bruger-id og tidspunktet for oprettelsen; ifølge kilden sat i Pinterests in-app-browser, ikke på webstedets domæne',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Registrering og videresendelse af svarene til formularens operatør',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Registrerer brugen af webstedet til analyseformål.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Registrering af egne hændelser, som operatøren har defineret',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Registrering og videresendelse af programfejl fra browseren',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Registrering af besøgende og sidevisninger på webstedet til marketingautomatisering',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Effektmåling af et annoncemateriale og afregning af provisionen',
    'Erhalt des Sitzungszustands'
        => 'Bevarelse af sessionstilstanden',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Genkendelse af enheden til misbrugsbeskyttelse',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Registrering og afvisning af automatiserede kald til formularer',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Registrering af bots og automatiseret adfærd i bestillingsforløbet',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Registrering af, om indholdet af indkøbskurven har ændret sig',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Registrerer ændringer i indholdet af indkøbskurven',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Genkender besøgende på det websted, hvor Intercom-koden er indbygget',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Genkender browsere på Microsofts websteder; ifølge udbyderen også brugt til annoncering, tredjepartscookie',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Genkender personer, der skriver via chatværktøjet',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Genkender den enhed, som samtalen udgår fra',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Genkender den enkelte enhed, der interagerer med Messenger, til misbrugsbeskyttelse',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Genkender den slutbruger, der starter samtalen',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Genkender det domæne eller subdomæne, hvor chatwidgetten er indbygget',
    'Erkennt wiederkehrende Besucher'
        => 'Genkender tilbagevendende besøgende',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Registrerer, om browseren er blevet genstartet',
    'Erkennung von Klickbetrug'
        => 'Registrering af kliksvindel',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Registrerer entydige besøg på webstedet (konti fra og med 14.06.2026)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Registrerer entydige besøg på webstedet (konti fra før 14.06.2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Gør det muligt for tredjeparter at sætte cookies i disse brugeres browser',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Gør det muligt at bruge tilgængelighedsadgangen',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Muliggør yderligere funktioner på webstedet.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Førsteparts-id, der genkender besøgende og knytter hændelser til webstedet',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Førsteparts besøgende-id til konverteringssporing og remarketing',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Førsteparts sessions-id til henføring af hændelser',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Førsteparts sessions-id pr. pixel til kampagnemåling',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Førsteparts sessions-id til kampagnemåling',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Førsteparts annonce-id til måling af kampagner og til personalisering på TikTok',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Førstepartscookie, der grupperer handlinger fra besøgende, som Pinterest ikke kan henføre',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Førstepartscookie, der gemmer de hashede kundedata, som er indsamlet via Automatic Enhanced Match',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Genererer et entydigt id for hver besøgende (konti fra og med 14.06.2026)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Genererer et entydigt id for hver besøgende (konti fra før 14.06.2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Enheds-id til analyse af hændelser på sider med widget',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Sat ved login på en side, der hostes af HubSpot',
    'Gewaehlte Sprache speichern'
        => 'Gem det valgte sprog',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Afstemmer MUID-id\'et på tværs af Microsofts domæner; ifølge udbyderen en tredjepartscookie',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Holder beskeder synkroniseret på tværs af flere faner',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Fastholder værdien af parameteren pk_campaign',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Fastholder værdien af parameteren utm_campaign',
    'Haelt den Widerspruch gegen die Messung'
        => 'Fastholder indsigelsen mod målingen',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Fastholder udløbstidspunktet for _uetsid',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Fastholder udløbstidspunktet for _uetvid',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Fastholder trafikkildens type til Tag Manager',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Fastholder den besøgendes identitet, også til dubletfjernelse blandt kontakter',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Fastholder den besøgendes cookievalg',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Holder widgettens visning konsistent ved sideskift',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Fastholder indgangssiden; analyse',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Fastholder samtykket til måling med cookies',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Fastholder brugerens valg vedrørende kategorier og udbydere',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Fastholder sessionen for brugere, der er logget ind, og adgangen til tidligere samtaler',
    'Haelt die verweisende Adresse'
        => 'Fastholder den henvisende adresse',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Fastholder den henvisende kilde; analyse',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Fastholder egne variabler for sessionen (markeret af udbyderen som forældet)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Fastholder, om etracker må sætte cookies; sættes ved data-block-cookies via et API-kald',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Fastholder, hvilke funktionskontakter videoens ejer har slået til',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Hovedcookie til genkendelse af besøgende',
    'Heatmaps'
        => 'Heatmaps',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Heatmaps over klik og scrolladfærd',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Fastholder heatmap-sessionsdata i besøgets varighed',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Fastholder oplysninger om den igangværende session (konti fra og med 14.06.2026)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Fastholder oplysninger om den igangværende session (konti fra før 14.06.2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Fastholder brugerdefinerede variabler i besøgets varighed',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Fastholder permanente data på besøgendeniveau (konti fra og med 14.06.2026)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Fastholder permanente data på besøgendeniveau til Insights-analysen (konti fra før 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Fastholder den besøgendes samtykkestatus (konti fra og med 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Fastholder den besøgendes samtykkestatus (konti fra før 14.06.2026)',
    'Hält den Sitzungszustand.'
        => 'Fastholder sessionstilstanden.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Fastholder Clarity-bruger-id\'et og indstillingerne for dette websted',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Fastholder varianttildelingen til A/B-test',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Fastholder midlertidigt den valgte kombination (konti fra og med 14.06.2026)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Fastholder midlertidigt den valgte kombination (konti fra før 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Fastholder den valgte variant, før viderestillingen sker (konti fra og med 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Fastholder den valgte variant, før viderestillingen sker (konti fra før 14.06.2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Registrerer, via hvilken henvisning besøget kom i stand',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'I tilstanden Pre-Clearance: frigivelse til yderligere WAF-kontroller i samme zone',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Indirekte medlems-id til konverteringssporing, retargeting og analyse',
    'Inhalt des Warenkorbs; notwendig'
        => 'Indholdet af indkøbskurven; nødvendig',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Køberrelaterede analysedata i shoppen; statistik',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Kampagnerelateret unikt id (konti fra 14.06.2026)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Id for den første kontakt med Clarity på tværs af alle Clarity-websteder; ifølge udbyderen en tredjepartscookie',
    'Kennzeichnet die laufende Sitzung'
        => 'Markerer den igangværende session',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Gemme kommentardata til yderligere kommentarer',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Konsistent visning af A/B-testvarianter',
    'Lastverteilung und Routing'
        => 'Belastningsfordeling og routing',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Belastningsfordeling og routing af challenge-anmodningerne',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Gemmer den besøgendes kontoindstillinger lokalt',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Leverer den samme variant af en A/B-testside',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Livechat og messaging-kanal til support på webstedet',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Livechat og support-indbakke på webstedet',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Markedsføringsdata fra købsfladerne; markedsføring',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Markedsføringsdata til købsfladerne',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Huske seerens afspillerindstillinger (lydstyrke, kvalitet, undertekster)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Huske widgettens tilstand og indstillinger',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Husker, at Global Privacy Control-banneret er lukket',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Husker, at oplysningsbanneret er lukket',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Husker tidspunktet for synkroniseringen med cookien lms_analytics',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Husker tidspunktet for den seneste id-synkronisering, så synkroniseringen ikke gentages',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Husker den tildelte variant (konti fra 14.06.2026)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Husker den tildelte variant, så den er den samme ved et nyt besøg (konti før 14.06.2026)',
    'Merkt einen Rabattcode; notwendig'
        => 'Husker en rabatkode; nødvendig',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Husker en indsigelse mod målingen (konti fra 14.06.2026)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Husker en indsigelse på tværs af websteder (konti før 14.06.2026)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Husker afspillerindstillinger som lydstyrke, kvalitet og undertekster',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Husker indstillingen for lydnotifikationer',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Husker et afgivet samtykke til målingen',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Husker en indsigelse mod målingen',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Husker proaktive beskeder, der er klikket væk',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Husker, at den besøgende har klikket teksten på startknappen væk',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Husker, om widgetten er åben eller lukket',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Husker, at den besøgende ikke skal deltage i nogen kampagne (konti før 14.06.2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Husker, at den besøgende er undtaget fra kampagnen (konti fra 14.06.2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Husker, at den besøgende er undtaget fra kampagnen (konti før 14.06.2026)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Husker, at samtykkemeddelelsen er lukket',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Husker, at shopmeddelelsen er lukket',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Husker, at cookiespørgsmålet ikke skal stilles igen',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Husker, at et tag allerede er udløst',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Husker, om scrolledybden måles for denne besøgende',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Husker, om chatvinduet er åbent',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Husker, om MUID-id\'et videregives til et reklame-id; ifølge udbyderen altid 0, tredjepartscookie',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Måling af åbninger og klik i e-mailkampagner',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Måling af sessioner og hændelser på sider med widget',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Måling af sessioner og henføring af besøgets kilde',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Googles måling af tjenestens tilgængelighed',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Måling af indlæsningstid og sidens kernemålinger (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Måling af scrolledybde og klikhændelser',
    'Messung der Werbewirkung'
        => 'Måling af reklamens effekt',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Måling af brugsadfærden på webstedet',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Måling og personalisering af annoncer i TikTok Pangle-annoncenetværket',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Måling og forbedring af reklamekampagners effektivitet',
    'Messung von Auslieferungen und Klicks'
        => 'Måling af leveringer og klik',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Måling af besøgende og sessioner til analyser',
    'Messung von Conversions'
        => 'Måling af konverteringer',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Måling af sidevisninger og besøg',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Måling af sidevisninger og hændelser',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Måling af sidevisninger og brugsadfærd',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Måling af sidevisninger og brugerdefinerede hændelser',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Måling af sidevisninger, besøg og sessioner',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Måling af sidevisninger, besøg og sessioner på egen server',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Måling af reklamekampagner og konverteringer på webstedet',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Måling af en kampagnes mål og konverteringer',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Efterindlæsning af kortfliser, skrifttyper og typografier fra udbyderen',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Forudfylde navnet fra kommentarformularen',
    'Nutzer-ID'
        => 'Bruger-id',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Knytter indkøbskurven til det rigtige land; nødvendig',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Knytter indkøbskurven i databasen til den rigtige kunde',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Knytter handlingerne i et besøg til en session',
    'Personalisierung der Werbung auf TikTok'
        => 'Personalisering af reklamerne på TikTok',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Kontrollere, om WordPress kan sætte cookies',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Kontrollerer, om browseren understøtter cookies; nødvendig',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Kontrollerer, om WordPress kan sætte cookies',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Kontrolværdi for shoppens adgangskode; nødvendig',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Udbyderens testcookie (konti før 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Kontrollerer, om browseren accepterer cookies (konti fra 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Kontrollerer, om browseren accepterer cookies (konti før 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Kontrollerer, om browseren accepterer cookies (ifølge udbyderen kun i Internet Explorer)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Rate limiting hos HubSpots CDN-udbyder',
    'Reichweiten- und Nutzungsmessung'
        => 'Trafik- og brugsmåling',
    'Reichweitenmessung'
        => 'Trafikmåling',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Vimeos trafikmåling af de indlejrede videoer',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Trafikmåling for shopindehaveren',
    'Remarketing und Zielgruppenbildung'
        => 'Remarketing og målgruppedannelse',
    'Retargeting'
        => 'Retargeting',
    'Retargeting von Website-Besuchern'
        => 'Retargeting af besøgende på webstedet',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Risikoanalyse til at skelne mellem menneske og bot',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Samlecookie, ifølge udbyderen kun oprettet i browseren Safari (konti fra 14.06.2026)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Samlecookie, ifølge udbyderen kun oprettet i browseren Safari (konti før 14.06.2026)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Spotifys og tredjeparters indsamling af oplysninger om disse brugeres surfadfærd',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Kontakt, som webstedsindehaveren selv sætter for at forhindre Klaviyo-tracking',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Beskyttelse af medlemslogin mod forfalskning',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Beskyttelse af formularer mod automatiseret misbrug',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Beskyttelse mod automatiserede anmodninger (spam, credential stuffing)',
    'Sicherheit'
        => 'Sikkerhed',
    'Sicherheitsfunktionen'
        => 'Sikkerhedsfunktioner',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Sikkerhedsfunktioner, når den valgfri funktion User Journeys er aktiv',
    'Sitzung'
        => 'Session',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Tilknytning af session og af sprog henholdsvis land',
    'Sitzungsaufzeichnung'
        => 'Sessionsoptagelse',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Sessions-id til analyse af hændelser på sider med widget',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Sessions-id til shoppens statistik; statistik',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Sessionsnøgle for Answer Bot-tjenesten',
    'Sitzungswiedergabe'
        => 'Afspilning af session',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Gemmer godkendelsestokenet efter login',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Gemmer den kodede adgangskode til adgangskodebeskyttede videoer',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Gemmer nøglen for det valgte sprog',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Gemmer den besøgendes privatlivspræference; nødvendig',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Gemmer den besøgendes samtykkevalg',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Gemmer den besøgendes enheds-id til godkendelse i chat-widgetten',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Gemmer id\'et for en bruger, der er tilmeldt et webinar',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Gemmer klik-id\'et fbclid, så en hændelse på webstedet kan henføres til en annonce',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Gemmer bruger-id\'et fra en registreringsformular, der er placeret foran videoen',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Gemmer TikTok-klik-id\'et til henføring af konverteringer',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Gemmer det entydige besøgende-id til genkendelse',
    'Speichert die zugestimmten Kategorien'
        => 'Gemmer de kategorier, der er givet samtykke til',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Leverer data til widgetten med senest viste produkter',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Styrer, om MUID-id\'et fornyes; ifølge udbyderen en tredjepartscookie',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Teknisk nødvendig for webstedets drift og sikkerhed.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Bærer shoppens sessions- og checkout-data; ført som nødvendig af udbyderen',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Bærer indsigelsesfunktionen (opt-out)',
    'Transaktionssicherheit'
        => 'Transaktionssikkerhed',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Bærer risikoanalysen fra reCAPTCHA.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Overførsel af hændelser på webstedet til TikTok',
    'Umfragen'
        => 'Spørgeskemaer',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Forhindrer overførsel af data til HubSpot',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Undertrykker chattens velkomstbesked, når den er lukket',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Skelner mellem browsere, der besøger Microsoft-sider; med samtykke også til reklame',
    'Unterscheidet einzelne Nutzer.'
        => 'Skelner mellem enkelte brugere.',
    'Unterscheidung einzelner Nutzer'
        => 'Skelnen mellem enkelte brugere',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Skelnen mellem menneske og bot ved formularer og logins',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Forbinder flere sidevisninger til én sessionsoptagelse',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Forhindrer, at banneret vises konstant i streng tilstand',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Fordeling af samtykkesignalerne til Google-tags',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Administration af samtykkevalget for de tags, der er konfigureret i containeren',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Administration af indsigelsen mod målingen',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Administration af indsigelse og samtykke til målingen',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Henført af Google til kategorierne Analyse og Reklame.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Placeret af Google i kategorierne Analyse, Annoncering og Sikkerhed.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Henført af Google til kategorierne Funktionalitet, Reklame og Sikkerhed.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Placeret af Google i kategorierne Sikkerhed og Funktionalitet.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Placeret af Google i kategorierne Sikkerhed og Annoncering.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Placeret af Google i kategorierne Sikkerhed, Analyse, Funktionalitet og Annoncering.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Henført af Google til kategorierne Sikkerhed, Funktionalitet og Reklame.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Placeret af Google i kategorierne Annoncering og Sikkerhed.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Placeret af Google i kategorien Analyse; Google angiver ikke et mere præcist formål.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Placeret af Google i kategorien Funktionalitet.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Placeret af Google i kategorien Sikkerhed.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Placeret af Google i kategorien Annoncering.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Nævnt af Microsoft som en af de cookies, der ikke må sættes uden samtykke; Microsoft angiver ikke nogen egen formålsbeskrivelse',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Id genereret af Vimeo til trafikmålingen',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Indkøbskurvens valuta efter afsluttet checkout; nødvendig',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Sandsynlighedsbaseret tilknytning af en browser til en person',
    'Warenkorb einer Besucherin zuordnen'
        => 'Knytte en indkøbskurv til en besøgende',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Forudfylde webstedsadressen fra kommentarformularen',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Genkendelse af seeren til reklameformål',
    'Werbepersonalisierung'
        => 'Personalisering af reklame',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Som _pin_unauth, men som tredjepartscookie',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Genkende den besøgende i bookingforløbet',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Genkende den besøgende på tværs af sidevisninger og faneblade',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Genkende og identificere besøgende på webstedet',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Genkende besøgende på tværs af flere besøg',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Genkende besøgende på tilknyttede websteder til retargeting',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Genkende tilbagevendende besøgende og knytte tidligere samtaler til dem',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Genkendelse af den besøgende og lagring af vedkommendes egenskaber',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Genkendelse af browseren via Criteo-id\'et',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Genkendelse af brugeren; kun med samtykke, blokeret som standard',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Genkendelse af en browser ved senere besøg efter samtykke',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Genkendelse af besøgende og tilknytning til sessioner',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'Genkendelse af LinkedIn-medlemmer uden for LinkedIn til reklame',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Genkendelse af brugere efter samtykke',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Genkendelse af tilbagevendende besøgende via et besøgende-id',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Sættes, når et kampagnemål er blevet udløst (konti fra 14.06.2026)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Sættes, når et kampagnemål er blevet udløst (konti før 14.06.2026)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Sættes, når en person besøger et websted med indbygget Pinterest-tag',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Sættes, når en henføring lykkes uden eksisterende cookies, for eksempel via Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Sættes af JavaScript-tagget ud fra oplysninger, som Pinterest sender med annonceret trafik',
    'Zaehlt und begrenzt Sitzungen'
        => 'Tæller og begrænser sessioner',
    'Zahlungsabwicklung'
        => 'Betalingsafvikling',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Angiver, om sessionen stadig kører eller er ny',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Fortæller brugerfladen, at der er logget ind, og som hvem',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Tilfældigt browser-id, der knytter et websteds pixelhændelser til én browser',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Vise senest viste produkter i den tilhørende widget',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Knytte adfærd på webstedet til en profil',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Henføring af et besøgs oprindelse (referrer, attribution)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Knytning af en besøgende til en kontakt i Brevo-kontoen via e-mailadressen',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Henføring af transaktioner som leads og salg til en publisher',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Henføring af handlinger på webstedet til tidligere sete annoncer',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Sammenlægning af flere sidevisninger til én session',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Supplerende data om registrerede hændelser i besøgsforløbet',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Tildeling og fastholdelse af en variant på tværs af flere besøg',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Mellemlager for hændelser ud fra CSS-selektorer',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Mellemlager for Messenger- og besøgsdata i browserens lager',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Mellemlager for Tag Managers poster',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Mellemlager for målingen af scrolledybde',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Mellemlager for Tag Managers variabler',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Mellemlager for widgettens indstillinger for at undgå gentagne serveranmodninger',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Mellemlagring af Messenger- og besøgsdata i browseren',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Tæller de sessioner, der er oprettet for en besøgende (konti fra 14.06.2026)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Tæller, hvor ofte browseren blev lukket og åbnet igen under målingen (konti før 14.06.2026)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Optælling af sidevisninger og besøg',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'automatiserede analyser af brugeradfærden',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'grov geografisk placering på land, region og by',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'valgfri optagelse af sessionen (Session Replay), som standard med maskerede tekster, billeder og indtastninger',
    'optional Heatmaps und A/B-Tests'
        => 'valgfrit heatmaps og A/B-test',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Videregiver henvisningskilden ved split-URL-test (konti fra 14.06.2026)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Videregiver henvisningskilden ved split-URL-test (konti før 14.06.2026)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Henføring af transaktioner som leads og salg til en publisher, Effektmåling af et annoncemateriale og afregning af provisionen',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Registrering af besøgende og sidevisninger på webstedet til marketingautomatisering, Knytning af en besøgende til en kontakt i Brevo-kontoen via e-mailadressen, Registrering af egne hændelser, som operatøren har defineret',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Visning af bookingkalenderen og aftale af tider på webstedet, Genkende den besøgende i bookingforløbet, Behandling af betalinger, når tiden er betalingspligtig',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Registrering og afvisning af automatiserede kald til formularer, Udstedelse af et token, som webstedets server kontrollerer, I tilstanden Pre-Clearance: frigivelse til yderligere WAF-kontroller i samme zone',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Måling af sidevisninger og besøg, Måling af indlæsningstid og sidens kernemålinger (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Levering af personaliseret annoncering, Måling af reklamens effekt, Genkendelse af browseren via Criteo-id\'et',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Måling af brugsadfærden på webstedet, Dannelse af pseudonyme brugsprofiler efter samtykke, Genkendelse af en browser ved senere besøg efter samtykke',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Måling af sidevisninger og brugsadfærd, Måling af scrolledybde og klikhændelser, Genkendelse af brugere efter samtykke, Administration af indsigelsen mod målingen',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Skelnen mellem menneske og bot ved formularer og logins, Beskyttelse mod automatiserede anmodninger (spam, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Måling af konverteringer, Remarketing og målgruppedannelse, Begrænsning af visningshyppigheden, Registrering af kliksvindel',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Levering af annoncer, Begrænsning af visningshyppigheden, Svindel- og misbrugsregistrering, Måling af leveringer og klik',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Skelnen mellem enkelte brugere, Bevarelse af sessionstilstanden, Trafik- og brugsmåling',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Visning af et interaktivt kort, Googles måling af tjenestens tilgængelighed',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Risikoanalyse til at skelne mellem menneske og bot, Beskyttelse af formularer mod automatiseret misbrug',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Levering og administration af tags på webstedet, Fordeling af samtykkesignalerne til Google-tags',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Skelnen mellem menneske og bot ved formularer og logins, Belastningsfordeling og routing af challenge-anmodningerne, Levering af tilgængelighedsadgangen',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Heatmaps, Sessionsoptagelse, Spørgeskemaer',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Genkende besøgende på tværs af flere besøg, Måling af sessioner og henføring af besøgets kilde, Dubletfjernelse blandt kontakter, Drift af chatwidgetten, Konsistent visning af A/B-testvarianter',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Livechat og support-indbakke på webstedet, Genkende tilbagevendende besøgende og knytte tidligere samtaler til dem, Genkendelse af enheden til misbrugsbeskyttelse, Mellemlagring af Messenger- og besøgsdata i browseren',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Visning af finansierings- og ratebetalingsoplysninger på produkt- og kurvsider (on-site messaging), Levering af meddelelsesindholdet i forberedte pladsholdere i sidens kildekode via en ad-server',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Genkende og identificere besøgende på webstedet, Knytte adfærd på webstedet til en profil, Styring af tilmeldingsformularer på webstedet',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Konverteringssporing for LinkedIn-annoncekampagner, Retargeting af besøgende på webstedet, Analyse af webstedets målgruppe (webstedsdemografi)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Genkende besøgende på tilknyttede websteder til retargeting, Styring af pop op-formularer, så de ikke vises gentagne gange, Måling af åbninger og klik i e-mailkampagner, Indlejring af annoncepixels fra Google og Facebook på det tilknyttede websted',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Visning af interaktive kort på webstedet, Efterindlæsning af kortfliser, skrifttyper og typografier fra udbyderen, Afregning og sikring af kortkaldene',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Måling af sidevisninger, besøg og sessioner, Genkendelse af tilbagevendende besøgende via et besøgende-id, Henføring af et besøgs oprindelse (referrer, attribution), valgfrit heatmaps og A/B-test',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Måling af sidevisninger, besøg og sessioner på egen server, Genkendelse af tilbagevendende besøgende via et besøgende-id, Henføring af et besøgs oprindelse (referrer, attribution), valgfrit heatmaps og A/B-test',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Levering og udløsning af tags på webstedet, Administration af samtykkevalget for de tags, der er konfigureret i containeren',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Måling af reklamekampagner og konverteringer på webstedet, Dannelse af målgrupper og retargeting',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Konverteringssporing for Microsoft Advertising-kampagner, Opbygning af remarketinglister, Måling af sidevisninger og brugerdefinerede hændelser',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Optagelse og afspilning af sessioner, Heatmaps over klik og scrolladfærd, Sammenlægning af flere sidevisninger til én session, automatiserede analyser af brugeradfærden',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Behandling af en betaling, som den besøgende har igangsat, Indlejring af kortfelterne i egen checkout, så kortoplysninger ikke passerer shoppen, Forebyggelse af svindel og lovbestemte pligter som betalingstjenesteudbyder',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Optagelse af musebevægelser, Afspilning af session, Analyse af brugsadfærden',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Levering af kortfliser til indlejrede kort, Drift og misbrugsbeskyttelse af korttjenesterne',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Betalingsafvikling, Forebyggelse af svindel',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Konverteringssporing for Pinterest-annoncekampagner, Dannelse af målgrupper og retargeting, Henføring af handlinger på webstedet til tidligere sete annoncer',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Måling af sidevisninger og hændelser, Genkendelse af besøgende og tilknytning til sessioner, Analyse af oprindelse og kampagner, Analyse af enhed, browser og anslået placering, E-handels- og målanalyse',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Optælling af sidevisninger og besøg, Analyse af henvisningskilderne, Analyse af browser, styresystem og enhedstype, grov geografisk placering på land, region og by',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Registrering og videresendelse af programfejl fra browseren, valgfri optagelse af sessionen (Session Replay), som standard med maskerede tekster, billeder og indtastninger',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Drift af en shops indkøbskurv og betalingsforløb, Tilknytning af session og af sprog henholdsvis land, Trafikmåling for shopindehaveren, Markedsføringsdata til købsfladerne',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Indlejring og afspilning af numre, albummer, playlister og podcastafsnit, Spotifys og tredjeparters indsamling af oplysninger om disse brugeres surfadfærd, Gør det muligt for tredjeparter at sætte cookies i disse brugeres browser',
    'Besucherzählung, Reichweitenmessung'
        => 'Optælling af besøgende, Trafikmåling',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Svindelregistrering og risikovurdering af betalingsforsøg, Levering af betalingsfelterne fra Stripe Elements, Registrering af bots og automatiseret adfærd i bestillingsforløbet',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Måling og forbedring af reklamekampagners effektivitet, Personalisering af reklamerne på TikTok, Overførsel af hændelser på webstedet til TikTok',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Indlejring af formularer og spørgeskemaer på webstedet, Registrering og videresendelse af svarene til formularens operatør',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Indlejring og afspilning af videoer på webstedet, Huske seerens afspillerindstillinger (lydstyrke, kvalitet, undertekster), Vimeos trafikmåling af de indlejrede videoer, Bot- og misbrugsbeskyttelse for afspilleren',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'A/B-test og split-URL-test på webstedet, Tildeling og fastholdelse af en variant på tværs af flere besøg, Måling af en kampagnes mål og konverteringer, Måling af besøgende og sessioner til analyser, Administration af indsigelse og samtykke til målingen',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Knytte en indkøbskurv til en besøgende, Registrering af, om indholdet af indkøbskurven har ændret sig, Vise senest viste produkter i den tilhørende widget, Husk, at shopmeddelelsen er skjult',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Login og sessionsgenkendelse i administrationsområdet, Gemme kommentardata til yderligere kommentarer, Husk visningsindstillingerne for administrationsområdet, Kontrollere, om WordPress kan sætte cookies, Gem det valgte sprog',
    'Conversion-Messung, Retargeting'
        => 'Konverteringsmåling, Retargeting',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Afspilning af indlejrede videoer, Sikkerhed, Genkendelse af seeren til reklameformål',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Livechat og messaging-kanal til support på webstedet, Genkende den besøgende på tværs af sidevisninger og faneblade, Huske widgettens tilstand og indstillinger, Måling af sessioner og hændelser på sider med widget',
];
