<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Norwegisch.
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
        => 'A/B-tester og split-URL-tester på nettstedet',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Fakturering og sikring av kartkallene',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Fullføring av innloggingen med Shop; nødvendig',
    'Abspielen eingebetteter Videos'
        => 'Avspilling av innebygde videoer',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Behandling av en betaling som den besøkende har igangsatt',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Behandling av betalinger når timen er betalingspliktig',
    'Analyse des Nutzungsverhaltens'
        => 'Analyse av bruksatferden',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Analysedata fra kjøpsflatene; analyse',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Analysedata fra butikken; ført av leverandøren som analyse',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Innloggingsdata for administrasjonsområdet under /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Innlogging på Shop Pay; nødvendig',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Innlogging og øktgjenkjenning i administrasjonsområdet',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Anonym tjenesterelatert statistikk og andre tekniske formål, blant annet støtte for tilgjengelighet',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Visningsinnstillinger for administrasjonsområdet per konto',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Huske visningsinnstillingene for administrasjonsområdet',
    'Anzeige von Bewertungen'
        => 'Visning av omtaler',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Visning av bookingkalenderen og avtaling av timer på nettstedet',
    'Anzeigen einer interaktiven Karte'
        => 'Visning av et interaktivt kart',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'Satt til verdien 1 hindrer den at UET-hendelser sendes til Microsoft',
    'Aufbau von Remarketing-Listen'
        => 'Oppbygging av remarketinglister',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Opptak og avspilling av økter',
    'Aufzeichnung von Mausbewegungen'
        => 'Opptak av musebevegelser',
    'Ausblenden des Shop-Hinweises merken'
        => 'Huske at butikkmeldingen er skjult',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Levering og utløsing av tagger på nettstedet',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Levering og administrasjon av tagger på nettstedet',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Levering av kartfliser til innebygde kart',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Levering av meldingsinnholdet til forberedte plassholdere i sidens kildekode via en ad-server',
    'Auslieferung personalisierter Werbung'
        => 'Levering av persontilpasset annonsering',
    'Auslieferung von Anzeigen'
        => 'Levering av annonser',
    'Auslieferung von Bibliotheken und Assets'
        => 'Levering av biblioteker og assets',
    'Auslieferung von Schriftarten'
        => 'Levering av skrifttyper',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Utstedelse av et token som serveren til nettstedet kontrollerer',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Styring av påmeldingsskjemaer på nettstedet',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Styring av popup-skjemaer, slik at de ikke vises gjentatte ganger',
    'Auswahl des Rechenzentrums'
        => 'Valg av datasenter',
    'Auswertung der Verweisquellen'
        => 'Analyse av henvisningskildene',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Analyse av nettstedets målgruppe (nettsteddemografi)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Analyse av nettleser, operativsystem og enhetstype',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Analyse av enhet, nettleser og anslått posisjon',
    'Auswertung von Herkunft und Kampagnen'
        => 'Analyse av opprinnelse og kampanjer',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Autentiserer forespørslene fra sluttbrukeren',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Begrensning av visningsfrekvensen',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Dokumenterer en bestått kontroll, slik at ytterligere challenges i sonen bortfaller',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Levering av betalingsfeltene fra Stripe Elements',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Levering av tilgjengelighetsfunksjonen',
    'Besucherzählung'
        => 'Telling av besøkende',
    'Betrieb des Chat-Widgets'
        => 'Drift av chatwidgeten',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Drift og misbruksvern for karttjenestene',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Drift av handlekurv og betalingsløp i en butikk',
    'Betrugs- und Missbrauchserkennung'
        => 'Svindel- og misbruksdeteksjon',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Svindeldeteksjon ved betalingsforsøket',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Svindeldeteksjon og risikovurdering av betalingsforsøk',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Forebygging av svindel og lovpålagte plikter som betalingstjenesteleverandør',
    'Betrugsprävention'
        => 'Forebygging av svindel',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Forebygging av svindel og risikovurdering av et betalingsforsøk',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Danning av pseudonyme bruksprofiler etter samtykke',
    'Bildung von Zielgruppen und Retargeting'
        => 'Danning av målgrupper og retargeting',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Binder økten til den samme AWS-instansen',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Bot- og misbruksvern for spilleren',
    'Bot-Abwehr fuer den Player'
        => 'Botvern for spilleren',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Botbeskyttelse ved levering av HubSpot-ressursene',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Nettleser-ID som LinkedIn bruker til å skille mellom enheter og oppdage misbruk',
    'Cloudflare-Bot-Abwehr'
        => 'Cloudflare-botvern',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Cloudflare-botdeteksjon for trafikkfiltrering',
    'Cloudflare-Ratenbegrenzung'
        => 'Cloudflare-rate limiting',
    'Conversion-Messung'
        => 'Konverteringsmåling',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Konverteringssporing for LinkedIn-annonsekampanjer',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Konverteringssporing for Microsoft Advertising-kampanjer',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Konverteringssporing for Pinterest-annonsekampanjer',
    'Darstellung interaktiver Karten auf der Website'
        => 'Visning av interaktive kart på nettstedet',
    'Deduplizieren von Kontakten'
        => 'Fjerning av duplikater blant kontakter',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Brukes til å levere og måle annonsering.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'Domeneovergripende besøkende-ID; ifølge leverandøren en tredjeparts informasjonskapsel, brukes bare når tredjeparts informasjonskapsler er slått på i konfigurasjonsfilen',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Tredjeparts-ID for gjenkjenning av besøkende',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Tredjeparts-ID som videreformidles til Klaviyo',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Tredjeparts annonse-ID for måling av kampanjer og for personalisering på TikTok',
    'E-Commerce- und Zielauswertung'
        => 'E-handels- og målanalyse',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Forhåndsutfylling av e-postadressen fra kommentarskjemaet',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Innbygging og avspilling av spor, album, spillelister og podkastepisoder',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Innbygging og avspilling av videoer på nettstedet',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Innbygging av skjemaer og spørreundersøkelser på nettstedet',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Innbygging av kortfeltene i egen kasse, slik at kortopplysninger ikke går gjennom butikken',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Innbygging av en eksternt vedlikeholdt erklæring om informasjonskapsler',
    'Einbettung von Audioinhalten'
        => 'Innbygging av lydinnhold',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Innbygging av annonsepiksler fra Google og Facebook på det tilknyttede nettstedet',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Visning av finansierings- og delbetalingsopplysninger på produkt- og handlekurvsider (on-site messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Entydig ID ved måling på tvers av domener (kontoer fra og med 14.06.2026)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Entydig ID ved måling på tvers av domener (kontoer fra før 14.06.2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Engangsverdi mot CSRF i opt-out-skjemaet',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Inneholder en bruker-ID og tidspunktet for opprettelsen; ifølge kilden satt i Pinterests innebygde nettleser, ikke på domenet til nettstedet',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Registrering og overføring av svarene til operatøren av skjemaet',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Registrerer bruken av nettstedet for analyseformål.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Registrering av egne hendelser som operatøren har definert',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Registrering og overføring av programfeil fra nettleseren',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Registrering av besøkende og sidevisninger på nettstedet for markedsføringsautomatisering',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Effektmåling av et annonsemiddel og avregning av provisjonen',
    'Erhalt des Sitzungszustands'
        => 'Bevaring av økttilstanden',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Gjenkjenning av enheten for misbruksvern',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Oppdagelse og avvisning av automatiserte kall mot skjemaer',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Oppdagelse av bots og automatisert atferd i bestillingsprosessen',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Oppdagelse av om innholdet i handlekurven har endret seg',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Oppdager endringer i innholdet i handlekurven',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Gjenkjenner besøkende på nettstedet der Intercom-koden er bygget inn',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Gjenkjenner nettlesere på Microsofts nettsteder; ifølge leverandøren også brukt til annonsering, tredjeparts informasjonskapsel',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Gjenkjenner personer som skriver via chatverktøyet',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Gjenkjenner enheten som samtalen kommer fra',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Gjenkjenner den enkelte enheten som samhandler med Messenger, for misbruksvern',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Gjenkjenner sluttbrukeren som starter samtalen',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Gjenkjenner domenet eller underdomenet der chatwidgeten er bygget inn',
    'Erkennt wiederkehrende Besucher'
        => 'Gjenkjenner tilbakevendende besøkende',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Oppdager om nettleseren har blitt startet på nytt',
    'Erkennung von Klickbetrug'
        => 'Oppdagelse av klikksvindel',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Fastslår entydige besøk på nettstedet (kontoer fra og med 14.06.2026)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Fastslår entydige besøk på nettstedet (kontoer fra før 14.06.2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Gjøre det mulig for tredjeparter å sette informasjonskapsler i nettleseren til disse brukerne',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Gjør det mulig å bruke tilgjengelighetsfunksjonen',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Muliggjør ytterligere funksjoner på nettstedet.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Førsteparts-ID som gjenkjenner besøkende og knytter hendelser til nettstedet',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Førsteparts besøkende-ID for konverteringssporing og remarketing',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Førsteparts økt-ID for tilordning av hendelser',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Førsteparts økt-ID per piksel for kampanjemåling',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Førsteparts økt-ID for kampanjemåling',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Førsteparts annonse-ID for måling av kampanjer og for personalisering på TikTok',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Førsteparts informasjonskapsel som grupperer handlinger fra besøkende som Pinterest ikke kan henføre',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Førsteparts informasjonskapsel som lagrer de hashede kundedataene som er samlet inn via Automatic Enhanced Match',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Genererer en entydig ID for hver besøkende (kontoer fra og med 14.06.2026)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Genererer en entydig ID for hver besøkende (kontoer fra før 14.06.2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Enhets-ID for analyse av hendelser på sider med widget',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Settes ved innlogging på en side som HubSpot er vert for',
    'Gewaehlte Sprache speichern'
        => 'Lagre valgt språk',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Samkjører MUID-ID-en på tvers av Microsofts domener; ifølge leverandøren en tredjeparts informasjonskapsel',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Holder meldinger synkronisert på tvers av flere faner',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Holder verdien av parameteren pk_campaign',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Holder verdien av parameteren utm_campaign',
    'Haelt den Widerspruch gegen die Messung'
        => 'Holder på innsigelsen mot målingen',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Holder utløpstidspunktet for _uetsid',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Holder utløpstidspunktet for _uetvid',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Holder typen trafikkilde for Tag Manager',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Registrerer identiteten til den besøkende, også for å fjerne duplikater blant kontakter',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Registrerer den besøkendes valg om informasjonskapsler',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Holder visningen av widgeten konsistent ved sidebytte',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Registrerer inngangssiden; analyse',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Holder samtykket til måling med informasjonskapsler',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Holder brukerens valg om kategorier og leverandører',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Holder økten til innloggede brukere og tilgangen til tidligere samtaler',
    'Haelt die verweisende Adresse'
        => 'Holder den henvisende adressen',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Registrerer den henvisende kilden; analyse',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Holder egne variabler for økten (merket som utdatert av leverandøren)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Registrerer om etracker får sette informasjonskapsler; settes ved data-block-cookies via et API-kall',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Registrerer hvilke funksjonsbrytere eieren av videoen har slått på',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Hovedinformasjonskapsel for gjenkjenning av besøkende',
    'Heatmaps'
        => 'Heatmaps',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Heatmaps over klikk og skrolleatferd',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Holder heatmap-øktdata så lenge besøket varer',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Holder informasjon om den pågående økten (kontoer fra og med 14.06.2026)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Holder informasjon om den pågående økten (kontoer fra før 14.06.2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Holder egendefinerte variabler så lenge besøket varer',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Holder permanente data på besøkendenivå (kontoer fra og med 14.06.2026)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Holder permanente data på besøkendenivå for Insights-analysen (kontoer fra før 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Registrerer samtykkestatusen til den besøkende (kontoer fra og med 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Registrerer samtykkestatusen til den besøkende (kontoer fra før 14.06.2026)',
    'Hält den Sitzungszustand.'
        => 'Holder økttilstanden.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Holder Clarity-bruker-ID-en og innstillingene for dette nettstedet',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Holder varianttildelingen for A/B-tester',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Registrerer midlertidig den valgte kombinasjonen (kontoer fra og med 14.06.2026)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Registrerer midlertidig den valgte kombinasjonen (kontoer fra før 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Registrerer den valgte varianten før videresendingen skjer (kontoer fra og med 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Registrerer den valgte varianten før videresendingen skjer (kontoer fra før 14.06.2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Registrerer via hvilken henvisning besøket kom i stand',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'I modusen Pre-Clearance: klarering for ytterligere WAF-kontroller i samme sone',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Indirekte medlemsidentifikator for konverteringssporing, retargeting og analyse',
    'Inhalt des Warenkorbs; notwendig'
        => 'Innholdet i handlekurven; nødvendig',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Kjøperrelaterte analysedata i butikken; statistikk',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Kampanjerelatert unik identifikator (kontoer fra 14.06.2026)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Identifikator for den første kontakten med Clarity på tvers av alle Clarity-nettsteder; ifølge leverandøren en tredjeparts informasjonskapsel',
    'Kennzeichnet die laufende Sitzung'
        => 'Merker den pågående økten',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Beholde kommentardata for videre kommentarer',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Konsekvent visning av A/B-testvarianter',
    'Lastverteilung und Routing'
        => 'Lastbalansering og ruting',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Lastbalansering og ruting av challenge-forespørslene',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Lagrer kontoinnstillingene til den besøkende lokalt',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Leverer samme variant av en A/B-testside',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Direktechat og meldingskanal for support på nettstedet',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Direktechat og support-innboks på nettstedet',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Markedsføringsdata fra kjøpsflatene; markedsføring',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Markedsføringsdata for kjøpsflatene',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Huske seerens spillerinnstillinger (volum, kvalitet, undertekster)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Huske widgetens tilstand og innstillinger',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Husker at Global Privacy Control-banneret er lukket',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Husker at informasjonsbanneret er lukket',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Husker tidspunktet for synkroniseringen med informasjonskapselen lms_analytics',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Husker tidspunktet for den siste id-synkroniseringen, slik at den ikke gjentas',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Husker den tildelte varianten (kontoer fra 14.06.2026)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Husker den tildelte varianten slik at den er den samme ved nytt besøk (kontoer før 14.06.2026)',
    'Merkt einen Rabattcode; notwendig'
        => 'Husker en rabattkode; nødvendig',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Husker en innsigelse mot målingen (kontoer fra 14.06.2026)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Husker en innsigelse på tvers av nettsteder (kontoer før 14.06.2026)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Husker spillerinnstillinger som volum, kvalitet og undertekster',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Husker innstillingen for lydvarsler',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Husker et gitt samtykke til målingen',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Husker en innsigelse mot målingen',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Husker proaktive meldinger som er klikket bort',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Husker at den besøkende har klikket bort teksten på startknappen',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Husker om widgeten er åpen eller lukket',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Husker at den besøkende ikke skal delta i noen kampanje (kontoer før 14.06.2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Husker at den besøkende er unntatt fra kampanjen (kontoer fra 14.06.2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Husker at den besøkende er unntatt fra kampanjen (kontoer før 14.06.2026)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Husker at samtykkemeldingen er lukket',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Husker at butikkmeldingen er lukket',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Husker at spørsmålet om informasjonskapsler ikke skal stilles på nytt',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Husker at en tag allerede er utløst',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Husker om rulledybden måles for denne besøkende',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Husker om chatvinduet er åpent',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Husker om MUID-identifikatoren overføres til en annonseidentifikator; ifølge leverandøren alltid 0, tredjeparts informasjonskapsel',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Måling av åpninger og klikk i e-postkampanjer',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Måling av økter og hendelser på sider med widget',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Måling av økter og tilordning av besøkets kilde',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Googles måling av tjenestens tilgjengelighet',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Måling av innlastingstid og sidens kjerneverdier (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Måling av rulledybde og klikkhendelser',
    'Messung der Werbewirkung'
        => 'Måling av reklameeffekten',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Måling av bruksatferden på nettstedet',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Måling og personalisering av annonser i annonsenettverket TikTok Pangle',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Måling og forbedring av reklamekampanjers ytelse',
    'Messung von Auslieferungen und Klicks'
        => 'Måling av leveringer og klikk',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Måling av besøkende og økter for analyser',
    'Messung von Conversions'
        => 'Måling av konverteringer',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Måling av sidevisninger og besøk',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Måling av sidevisninger og hendelser',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Måling av sidevisninger og bruksatferd',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Måling av sidevisninger og egendefinerte hendelser',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Måling av sidevisninger, besøk og økter',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Måling av sidevisninger, besøk og økter på egen server',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Måling av reklamekampanjer og konverteringer på nettstedet',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Måling av mål og konverteringer for en kampanje',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Henting av kartfliser, skrifttyper og stiler fra leverandøren',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Forhåndsutfylle navnet fra kommentarskjemaet',
    'Nutzer-ID'
        => 'Bruker-ID',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Knytter handlekurven til riktig land; nødvendig',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Knytter handlekurven i databasen til riktig kunde',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Knytter handlingene i et besøk til en økt',
    'Personalisierung der Werbung auf TikTok'
        => 'Personalisering av reklamen på TikTok',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Kontrollere om WordPress kan sette informasjonskapsler',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Kontrollerer om nettleseren støtter informasjonskapsler; nødvendig',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Kontrollerer om WordPress kan sette informasjonskapsler',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Kontrollverdi for butikkpassordet; nødvendig',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Leverandørens testinformasjonskapsel (kontoer før 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Kontrollerer om nettleseren godtar informasjonskapsler (kontoer fra 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Kontrollerer om nettleseren godtar informasjonskapsler (kontoer før 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Kontrollerer om nettleseren godtar informasjonskapsler (ifølge leverandøren bare i Internet Explorer)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Rate limiting hos HubSpots CDN-leverandør',
    'Reichweiten- und Nutzungsmessung'
        => 'Rekkevidde- og bruksmåling',
    'Reichweitenmessung'
        => 'Rekkeviddemåling',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Vimeos rekkeviddemåling av de innebygde videoene',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Rekkeviddemåling for butikkeieren',
    'Remarketing und Zielgruppenbildung'
        => 'Remarketing og målgruppebygging',
    'Retargeting'
        => 'Retargeting',
    'Retargeting von Website-Besuchern'
        => 'Retargeting av besøkende på nettstedet',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Risikoanalyse for å skille menneske fra bot',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Samleinformasjonskapsel, ifølge leverandøren bare opprettet i nettleseren Safari (kontoer fra 14.06.2026)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Samleinformasjonskapsel, ifølge leverandøren bare opprettet i nettleseren Safari (kontoer før 14.06.2026)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Spotifys og tredjeparters innsamling av informasjon om disse brukernes surfeatferd',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Bryter som nettstedseieren selv setter for å hindre Klaviyo-sporing',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Beskyttelse av medlemsinnloggingen mot forfalskning',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Beskyttelse av skjemaer mot automatisert misbruk',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Beskyttelse mot automatiserte forespørsler (spam, credential stuffing)',
    'Sicherheit'
        => 'Sikkerhet',
    'Sicherheitsfunktionen'
        => 'Sikkerhetsfunksjoner',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Sikkerhetsfunksjoner når den valgfrie funksjonen User Journeys er aktiv',
    'Sitzung'
        => 'Økt',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Tilordning av økt og av språk henholdsvis land',
    'Sitzungsaufzeichnung'
        => 'Øktopptak',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Øktidentifikator for analyse av hendelser på sider med widget',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Øktidentifikator for butikkstatistikken; statistikk',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Øktnøkkel for Answer Bot-tjenesten',
    'Sitzungswiedergabe'
        => 'Avspilling av økt',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Lagrer autentiseringstokenet etter innloggingen',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Lagrer det kodede passordet for passordbeskyttede videoer',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Lagrer nøkkelen for det valgte språket',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Lagrer personvernpreferansen til den besøkende; nødvendig',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Lagrer samtykkevalget til den besøkende',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Lagrer enhetsidentifikatoren til den besøkende for autentisering i chat-widgeten',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Lagrer identifikatoren til en bruker som er påmeldt et webinar',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Lagrer klikkidentifikatoren fbclid slik at en hendelse på nettstedet kan knyttes til en annonse',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Lagrer brukeridentifikatoren fra et registreringsskjema som er plassert foran videoen',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Lagrer TikTok-klikkidentifikatoren for å knytte konverteringer',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Lagrer den entydige besøkende-ID-en for gjenkjenning',
    'Speichert die zugestimmten Kategorien'
        => 'Lagrer kategoriene det er samtykket til',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Mater widgeten med sist viste produkter',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Styrer om MUID-identifikatoren fornyes; ifølge leverandøren en tredjeparts informasjonskapsel',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Teknisk nødvendig for driften og sikkerheten til nettstedet.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Bærer butikkens økt- og utsjekksdata; oppført som nødvendig av leverandøren',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Bærer innsigelsesfunksjonen (opt-out)',
    'Transaktionssicherheit'
        => 'Transaksjonssikkerhet',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Bærer risikoanalysen fra reCAPTCHA.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Overføring av hendelser på nettstedet til TikTok',
    'Umfragen'
        => 'Spørreundersøkelser',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Hindrer overføring av data til HubSpot',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Undertrykker velkomstmeldingen i chatten etter at den er lukket',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Skiller mellom nettlesere som besøker Microsoft-sider; med samtykke også til reklame',
    'Unterscheidet einzelne Nutzer.'
        => 'Skiller mellom enkelte brukere.',
    'Unterscheidung einzelner Nutzer'
        => 'Skille mellom enkelte brukere',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Skille mellom menneske og bot ved skjemaer og innlogginger',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Kobler flere sidevisninger til ett øktopptak',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Hindrer at banneret vises hele tiden i streng modus',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Fordeling av samtykkesignalene til Google-tags',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Administrasjon av samtykkevalget for de tagene som er konfigurert i containeren',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Administrasjon av innsigelsen mot målingen',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Administrasjon av innsigelse og samtykke for målingen',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Plassert av Google i kategoriene Analyse og Reklame.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Plassert av Google i kategoriene Analyse, Annonsering og Sikkerhet.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Plassert av Google i kategoriene Funksjonalitet, Reklame og Sikkerhet.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Plassert av Google i kategoriene Sikkerhet og Funksjonalitet.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Plassert av Google i kategoriene Sikkerhet og Annonsering.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Plassert av Google i kategoriene Sikkerhet, Analyse, Funksjonalitet og Annonsering.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Plassert av Google i kategoriene Sikkerhet, Funksjonalitet og Reklame.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Plassert av Google i kategoriene Annonsering og Sikkerhet.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Plassert av Google i kategorien Analyse; Google oppgir ikke noe mer presist formål.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Plassert av Google i kategorien Funksjonalitet.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Plassert av Google i kategorien Sikkerhet.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Plassert av Google i kategorien Annonsering.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Nevnt av Microsoft som en av de informasjonskapslene som ikke må settes uten samtykke; Microsoft oppgir ingen egen formålsbeskrivelse',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Identifikator generert av Vimeo for rekkeviddemålingen',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Handlekurvens valuta etter fullført utsjekk; nødvendig',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Sannsynlighetsbasert tilknytning av en nettleser til en person',
    'Warenkorb einer Besucherin zuordnen'
        => 'Knytte en handlekurv til en besøkende',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Forhåndsutfylle nettadressen fra kommentarskjemaet',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Gjenkjenning av seeren til reklameformål',
    'Werbepersonalisierung'
        => 'Personalisering av reklame',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Som _pin_unauth, men som tredjeparts informasjonskapsel',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Gjenkjenne den besøkende i bestillingsprosessen',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Gjenkjenne den besøkende på tvers av sidevisninger og faner',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Gjenkjenne og identifisere besøkende på nettstedet',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Gjenkjenne besøkende på tvers av flere besøk',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Gjenkjenne besøkende på tilknyttede nettsteder for retargeting',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Gjenkjenne tilbakevendende besøkende og knytte tidligere samtaler til dem',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Gjenkjenning av den besøkende og lagring av egenskapene til vedkommende',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Gjenkjenning av nettleseren via Criteo-identifikatoren',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Gjenkjenning av brukeren; bare med samtykke, blokkert som standard',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Gjenkjenning av en nettleser ved senere besøk etter samtykke',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Gjenkjenning av besøkende og tilordning til økter',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'Gjenkjenning av LinkedIn-medlemmer utenfor LinkedIn til reklame',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Gjenkjenning av brukere etter samtykke',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Gjenkjenning av tilbakevendende besøkende via en besøkende-ID',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Settes når et kampanjemål er utløst (kontoer fra 14.06.2026)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Settes når et kampanjemål er utløst (kontoer før 14.06.2026)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Settes når en person besøker et nettsted med innebygd Pinterest-tag',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Settes når en tilordning lykkes uten eksisterende informasjonskapsler, for eksempel via Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Settes av JavaScript-tagen ut fra opplysninger som Pinterest sender med annonsert trafikk',
    'Zaehlt und begrenzt Sitzungen'
        => 'Teller og begrenser økter',
    'Zahlungsabwicklung'
        => 'Betalingsbehandling',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Angir om økten fortsatt pågår eller er ny',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Forteller grensesnittet at noen er logget inn, og hvem det er',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Tilfeldig nettleseridentifikator som knytter pikselhendelsene på et nettsted til én nettleser',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Vise sist viste produkter i den tilhørende widgeten',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Knytte atferd på nettstedet til en profil',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Henføring av opprinnelsen til et besøk (referrer, attribution)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Tilknytning av en besøkende til en kontakt i Brevo-kontoen via e-postadressen',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Tilordning av transaksjoner som leads og salg til en publisher',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Tilordning av handlinger på nettstedet til annonser som er sett tidligere',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Sammenslåing av flere sidevisninger til én økt',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Tilleggsdata om registrerte hendelser i besøksforløpet',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Tildeling og bevaring av en variant på tvers av flere besøk',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Mellomlager for hendelser basert på CSS-selektorer',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Mellomlager for Messenger- og besøksdata i nettleserlageret',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Mellomlager for oppføringene i Tag Manager',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Mellomlager for målingen av rulledybde',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Mellomlager for variablene i Tag Manager',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Mellomlager for widgetens innstillinger for å unngå gjentatte serverforespørsler',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Mellomlagring av Messenger- og besøksdata i nettleseren',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Teller øktene som er opprettet for en besøkende (kontoer fra 14.06.2026)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Teller hvor ofte nettleseren ble lukket og åpnet igjen under målingen (kontoer før 14.06.2026)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Telling av sidevisninger og besøk',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'automatiserte analyser av brukeratferden',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'grov geografisk plassering på land, region og by',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'valgfritt opptak av økten (Session Replay), som standard med maskerte tekster, bilder og inndata',
    'optional Heatmaps und A/B-Tests'
        => 'valgfritt heatmaps og A/B-tester',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Videreformidler henvisningskilden ved split-URL-tester (kontoer fra 14.06.2026)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Videreformidler henvisningskilden ved split-URL-tester (kontoer før 14.06.2026)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Tilordning av transaksjoner som leads og salg til en publisher, Effektmåling av et annonsemiddel og avregning av provisjonen',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Registrering av besøkende og sidevisninger på nettstedet for markedsføringsautomatisering, Tilknytning av en besøkende til en kontakt i Brevo-kontoen via e-postadressen, Registrering av egne hendelser som operatøren har definert',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Visning av bookingkalenderen og avtaling av timer på nettstedet, Gjenkjenne den besøkende i bestillingsprosessen, Behandling av betalinger når timen er betalingspliktig',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Oppdagelse og avvisning av automatiserte kall mot skjemaer, Utstedelse av et token som serveren til nettstedet kontrollerer, I modusen Pre-Clearance: klarering for ytterligere WAF-kontroller i samme sone',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Måling av sidevisninger og besøk, Måling av innlastingstid og sidens kjerneverdier (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Levering av persontilpasset annonsering, Måling av reklameeffekten, Gjenkjenning av nettleseren via Criteo-identifikatoren',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Måling av bruksatferden på nettstedet, Danning av pseudonyme bruksprofiler etter samtykke, Gjenkjenning av en nettleser ved senere besøk etter samtykke',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Måling av sidevisninger og bruksatferd, Måling av rulledybde og klikkhendelser, Gjenkjenning av brukere etter samtykke, Administrasjon av innsigelsen mot målingen',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Skille mellom menneske og bot ved skjemaer og innlogginger, Beskyttelse mot automatiserte forespørsler (spam, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Måling av konverteringer, Remarketing og målgruppebygging, Begrensning av visningsfrekvensen, Oppdagelse av klikksvindel',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Levering av annonser, Begrensning av visningsfrekvensen, Svindel- og misbruksdeteksjon, Måling av leveringer og klikk',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Skille mellom enkelte brukere, Bevaring av økttilstanden, Rekkevidde- og bruksmåling',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Visning av et interaktivt kart, Googles måling av tjenestens tilgjengelighet',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Risikoanalyse for å skille menneske fra bot, Beskyttelse av skjemaer mot automatisert misbruk',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Levering og administrasjon av tagger på nettstedet, Fordeling av samtykkesignalene til Google-tags',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Skille mellom menneske og bot ved skjemaer og innlogginger, Lastbalansering og ruting av challenge-forespørslene, Levering av tilgjengelighetsfunksjonen',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Heatmaps, Øktopptak, Spørreundersøkelser',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Gjenkjenne besøkende på tvers av flere besøk, Måling av økter og tilordning av besøkets kilde, Fjerning av duplikater blant kontakter, Drift av chatwidgeten, Konsekvent visning av A/B-testvarianter',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Direktechat og support-innboks på nettstedet, Gjenkjenne tilbakevendende besøkende og knytte tidligere samtaler til dem, Gjenkjenning av enheten for misbruksvern, Mellomlagring av Messenger- og besøksdata i nettleseren',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Visning av finansierings- og delbetalingsopplysninger på produkt- og handlekurvsider (on-site messaging), Levering av meldingsinnholdet til forberedte plassholdere i sidens kildekode via en ad-server',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Gjenkjenne og identifisere besøkende på nettstedet, Knytte atferd på nettstedet til en profil, Styring av påmeldingsskjemaer på nettstedet',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Konverteringssporing for LinkedIn-annonsekampanjer, Retargeting av besøkende på nettstedet, Analyse av nettstedets målgruppe (nettsteddemografi)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Gjenkjenne besøkende på tilknyttede nettsteder for retargeting, Styring av popup-skjemaer, slik at de ikke vises gjentatte ganger, Måling av åpninger og klikk i e-postkampanjer, Innbygging av annonsepiksler fra Google og Facebook på det tilknyttede nettstedet',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Visning av interaktive kart på nettstedet, Henting av kartfliser, skrifttyper og stiler fra leverandøren, Fakturering og sikring av kartkallene',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Måling av sidevisninger, besøk og økter, Gjenkjenning av tilbakevendende besøkende via en besøkende-ID, Henføring av opprinnelsen til et besøk (referrer, attribution), valgfritt heatmaps og A/B-tester',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Måling av sidevisninger, besøk og økter på egen server, Gjenkjenning av tilbakevendende besøkende via en besøkende-ID, Henføring av opprinnelsen til et besøk (referrer, attribution), valgfritt heatmaps og A/B-tester',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Levering og utløsing av tagger på nettstedet, Administrasjon av samtykkevalget for de tagene som er konfigurert i containeren',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Måling av reklamekampanjer og konverteringer på nettstedet, Danning av målgrupper og retargeting',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Konverteringssporing for Microsoft Advertising-kampanjer, Oppbygging av remarketinglister, Måling av sidevisninger og egendefinerte hendelser',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Opptak og avspilling av økter, Heatmaps over klikk og skrolleatferd, Sammenslåing av flere sidevisninger til én økt, automatiserte analyser av brukeratferden',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Behandling av en betaling som den besøkende har igangsatt, Innbygging av kortfeltene i egen kasse, slik at kortopplysninger ikke går gjennom butikken, Forebygging av svindel og lovpålagte plikter som betalingstjenesteleverandør',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Opptak av musebevegelser, Avspilling av økt, Analyse av bruksatferden',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Levering av kartfliser til innebygde kart, Drift og misbruksvern for karttjenestene',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Betalingsbehandling, Forebygging av svindel',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Konverteringssporing for Pinterest-annonsekampanjer, Danning av målgrupper og retargeting, Tilordning av handlinger på nettstedet til annonser som er sett tidligere',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Måling av sidevisninger og hendelser, Gjenkjenning av besøkende og tilordning til økter, Analyse av opprinnelse og kampanjer, Analyse av enhet, nettleser og anslått posisjon, E-handels- og målanalyse',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Telling av sidevisninger og besøk, Analyse av henvisningskildene, Analyse av nettleser, operativsystem og enhetstype, grov geografisk plassering på land, region og by',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Registrering og overføring av programfeil fra nettleseren, valgfritt opptak av økten (Session Replay), som standard med maskerte tekster, bilder og inndata',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Drift av handlekurv og betalingsløp i en butikk, Tilordning av økt og av språk henholdsvis land, Rekkeviddemåling for butikkeieren, Markedsføringsdata for kjøpsflatene',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Innbygging og avspilling av spor, album, spillelister og podkastepisoder, Spotifys og tredjeparters innsamling av informasjon om disse brukernes surfeatferd, Gjøre det mulig for tredjeparter å sette informasjonskapsler i nettleseren til disse brukerne',
    'Besucherzählung, Reichweitenmessung'
        => 'Telling av besøkende, Rekkeviddemåling',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Svindeldeteksjon og risikovurdering av betalingsforsøk, Levering av betalingsfeltene fra Stripe Elements, Oppdagelse av bots og automatisert atferd i bestillingsprosessen',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Måling og forbedring av reklamekampanjers ytelse, Personalisering av reklamen på TikTok, Overføring av hendelser på nettstedet til TikTok',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Innbygging av skjemaer og spørreundersøkelser på nettstedet, Registrering og overføring av svarene til operatøren av skjemaet',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Innbygging og avspilling av videoer på nettstedet, Huske seerens spillerinnstillinger (volum, kvalitet, undertekster), Vimeos rekkeviddemåling av de innebygde videoene, Bot- og misbruksvern for spilleren',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'A/B-tester og split-URL-tester på nettstedet, Tildeling og bevaring av en variant på tvers av flere besøk, Måling av mål og konverteringer for en kampanje, Måling av besøkende og økter for analyser, Administrasjon av innsigelse og samtykke for målingen',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Knytte en handlekurv til en besøkende, Oppdagelse av om innholdet i handlekurven har endret seg, Vise sist viste produkter i den tilhørende widgeten, Huske at butikkmeldingen er skjult',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Innlogging og øktgjenkjenning i administrasjonsområdet, Beholde kommentardata for videre kommentarer, Huske visningsinnstillingene for administrasjonsområdet, Kontrollere om WordPress kan sette informasjonskapsler, Lagre valgt språk',
    'Conversion-Messung, Retargeting'
        => 'Konverteringsmåling, Retargeting',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Avspilling av innebygde videoer, Sikkerhet, Gjenkjenning av seeren til reklameformål',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Direktechat og meldingskanal for support på nettstedet, Gjenkjenne den besøkende på tvers av sidevisninger og faner, Huske widgetens tilstand og innstillinger, Måling av økter og hendelser på sider med widget',
];
