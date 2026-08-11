<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Niederlaendisch.
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
        => 'A/B-tests en split-URL-tests op de website',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Afrekening en beveiliging van de kaartaanroepen',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Afronding van het aanmelden met Shop; noodzakelijk',
    'Abspielen eingebetteter Videos'
        => 'Afspelen van ingesloten video\'s',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Afhandeling van een door de bezoeker gestarte betaling',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Afhandeling van betalingen als de afspraak betaald is',
    'Analyse des Nutzungsverhaltens'
        => 'Analyse van het gebruiksgedrag',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Analysegegevens van de aankoopschermen; analyse',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Analysegegevens van de shop; door de aanbieder als analyse aangemerkt',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Aanmeldgegevens voor het beheerdersgedeelte onder /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Aanmelden bij Shop Pay; noodzakelijk',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Aanmelding en sessieherkenning in het beheerdersgedeelte',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Anonieme dienstgerelateerde statistiek en verdere technische doeleinden, onder meer ondersteuning van de toegankelijkheid',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Weergave-instellingen van het beheerdersgedeelte per account',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Weergave-instellingen van het beheerdersgedeelte onthouden',
    'Anzeige von Bewertungen'
        => 'Weergave van beoordelingen',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Weergave van de boekingskalender en het maken van afspraken op de website',
    'Anzeigen einer interaktiven Karte'
        => 'Weergave van een interactieve kaart',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'Op de waarde 1 gezet verhindert het dat UET-gebeurtenissen naar Microsoft worden gestuurd',
    'Aufbau von Remarketing-Listen'
        => 'Opbouw van remarketinglijsten',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Opname en weergave van sessies',
    'Aufzeichnung von Mausbewegungen'
        => 'Opname van muisbewegingen',
    'Ausblenden des Shop-Hinweises merken'
        => 'Onthouden dat de shopmelding is verborgen',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Uitleveren en activeren van tags op de website',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Uitleveren en beheren van tags op de website',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Uitleveren van kaarttegels aan ingesloten kaarten',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Uitlevering van de meldingsinhoud in voorbereide plaatshouders in de paginabroncode via een adserver',
    'Auslieferung personalisierter Werbung'
        => 'Uitlevering van gepersonaliseerde advertenties',
    'Auslieferung von Anzeigen'
        => 'Uitlevering van advertenties',
    'Auslieferung von Bibliotheken und Assets'
        => 'Uitlevering van bibliotheken en assets',
    'Auslieferung von Schriftarten'
        => 'Uitleveren van lettertypen',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Uitgifte van een token dat de server van de website controleert',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Aansturing van aanmeldformulieren op de website',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Aansturing van pop-upformulieren, zodat ze niet herhaaldelijk verschijnen',
    'Auswahl des Rechenzentrums'
        => 'Keuze van het datacenter',
    'Auswertung der Verweisquellen'
        => 'Analyse van de verwijzende bronnen',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Analyse van de doelgroep van de website (websitedemografie)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Analyse van browser, besturingssysteem en apparaattype',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Analyse van apparaat, browser en geschatte locatie',
    'Auswertung von Herkunft und Kampagnen'
        => 'Analyse van herkomst en campagnes',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Authenticeert de verzoeken van de eindgebruiker',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Beperking van de weergavefrequentie',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Bevestigt een doorstane controle, zodat verdere challenges van de zone achterwege blijven',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Beschikbaar stellen van de betaalvelden van Stripe Elements',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Beschikbaar stellen van de toegankelijkheidsvoorziening',
    'Besucherzählung'
        => 'Bezoekersteling',
    'Betrieb des Chat-Widgets'
        => 'Werking van de chatwidget',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Werking en misbruikbestrijding van de kaartdiensten',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Werking van winkelwagen en afrekenproces van een shop',
    'Betrugs- und Missbrauchserkennung'
        => 'Fraude- en misbruikdetectie',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Fraudedetectie bij de betaalpoging',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Fraudedetectie en risicobeoordeling van betaalpogingen',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Fraudepreventie en wettelijke verplichtingen als betaaldienstverlener',
    'Betrugsprävention'
        => 'Fraudepreventie',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Fraudepreventie en risicobeoordeling van een betaalpoging',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Vorming van pseudonieme gebruiksprofielen na toestemming',
    'Bildung von Zielgruppen und Retargeting'
        => 'Vorming van doelgroepen en retargeting',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Bindt de sessie aan dezelfde AWS-instantie',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Bot- en misbruikbestrijding voor de speler',
    'Bot-Abwehr fuer den Player'
        => 'Botbestrijding voor de speler',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Botbescherming bij het uitleveren van de HubSpot-bronnen',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Browseridentificator waarmee LinkedIn apparaten onderscheidt en misbruik herkent',
    'Cloudflare-Bot-Abwehr'
        => 'Cloudflare-botbestrijding',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Cloudflare-botdetectie voor het filteren van verkeer',
    'Cloudflare-Ratenbegrenzung'
        => 'Rate limiting van Cloudflare',
    'Conversion-Messung'
        => 'Conversiemeting',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Conversietracking voor LinkedIn-advertentiecampagnes',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Conversietracking voor Microsoft Advertising-campagnes',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Conversietracking voor Pinterest-advertentiecampagnes',
    'Darstellung interaktiver Karten auf der Website'
        => 'Weergave van interactieve kaarten op de website',
    'Deduplizieren von Kontakten'
        => 'Ontdubbelen van contacten',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Dient voor het uitleveren en meten van advertenties.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'Domeinoverkoepelende bezoekers-ID; volgens de aanbieder een third-partycookie, alleen gebruikt als third-partycookies in het configuratiebestand zijn ingeschakeld',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Third-party-identificator voor het herkennen van bezoekers',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Third-party-identificator die aan Klaviyo wordt doorgegeven',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Third-party-advertentie-identificator voor het meten van campagnes en voor personalisatie op TikTok',
    'E-Commerce- und Zielauswertung'
        => 'E-commerce- en doelanalyse',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'E-mailadres uit het reactieformulier vooraf invullen',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Insluiten en afspelen van nummers, albums, afspeellijsten en podcastafleveringen',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Insluiten en afspelen van video\'s op de website',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Insluiten van formulieren en enquêtes in de website',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Insluiten van de kaartvelden in de eigen checkout, zodat kaartgegevens niet via de shop lopen',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Insluiten van een extern beheerde cookieverklaring',
    'Einbettung von Audioinhalten'
        => 'Insluiten van audio-inhoud',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Insluiten van advertentiepixels van Google en Facebook op de gekoppelde website',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Weergave van financierings- en termijnbetalingsmeldingen op product- en winkelwagenpagina\'s (on-site messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Unieke identificator bij domeinoverkoepelende meting (accounts vanaf 14-06-2026)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Unieke identificator bij domeinoverkoepelende meting (accounts van vóór 14-06-2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Eenmalige waarde tegen CSRF bij het opt-outformulier',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Bevat een gebruikersidentificator en het tijdstip van aanmaak; volgens de bron ingesteld in de Pinterest-in-appbrowser, niet op het domein van de website',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Vastleggen en doorsturen van de antwoorden naar de beheerder van het formulier',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Registreert het gebruik van de website voor analysedoeleinden.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Vastleggen van eigen, door de beheerder gedefinieerde gebeurtenissen',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Vastleggen en doorsturen van applicatiefouten uit de browser',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Vastleggen van bezoekers en paginaweergaven op de website voor marketingautomatisering',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Effectmeting van een advertentiemiddel en afrekening van de commissie',
    'Erhalt des Sitzungszustands'
        => 'Behoud van de sessiestatus',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Herkennen van het apparaat voor misbruikbestrijding',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Herkennen en afwijzen van geautomatiseerde toegang tot formulieren',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Herkennen van bots en geautomatiseerd gedrag in het bestelproces',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Herkennen of de inhoud van de winkelwagen is gewijzigd',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Detecteert wijzigingen in de inhoud van de winkelwagen',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Herkent bezoekers van de website waarop de Intercom-code is ingebouwd',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Herkent browsers op Microsoft-websites; volgens de aanbieder ook voor advertenties gebruikt, third-partycookie',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Herkent personen die via het chathulpmiddel schrijven',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Herkent het apparaat waarvan het gesprek uitgaat',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Herkent het afzonderlijke apparaat dat met de Messenger communiceert, voor misbruikbestrijding',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Herkent de eindgebruiker die het gesprek begint',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Herkent het domein of subdomein waarop de chatwidget is ingebouwd',
    'Erkennt wiederkehrende Besucher'
        => 'Herkent terugkerende bezoekers',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Herkent of de browser opnieuw is gestart',
    'Erkennung von Klickbetrug'
        => 'Herkenning van klikfraude',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Bepaalt unieke bezoeken aan de website (accounts vanaf 14-06-2026)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Bepaalt unieke bezoeken aan de website (accounts van vóór 14-06-2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Mogelijk maken dat derden cookies plaatsen in de browser van deze gebruikers',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Maakt het gebruik van de toegankelijkheidsvoorziening mogelijk',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Maakt extra functies van de website mogelijk.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'First-party-identificator die bezoekers herkent en gebeurtenissen aan de website toewijst',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'First-party-bezoekersidentificator voor conversietracking en remarketing',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'First-party-sessie-identificator voor de toewijzing van gebeurtenissen',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'First-party-sessie-identificator per pixel voor campagnemeting',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'First-party-sessie-identificator voor campagnemeting',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'First-party-advertentie-identificator voor het meten van campagnes en voor personalisatie op TikTok',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'First-partycookie dat handelingen groepeert van bezoekers die Pinterest niet kan toewijzen',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'First-partycookie dat de via Automatic Enhanced Match verzamelde gehashte klantgegevens opslaat',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Genereert een unieke identificator voor elke bezoeker (accounts vanaf 14-06-2026)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Genereert een unieke identificator voor elke bezoeker (accounts van vóór 14-06-2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Apparaatidentificator voor de analyse van gebeurtenissen op pagina\'s met widget',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Ingesteld bij aanmelding op een door HubSpot gehoste pagina',
    'Gewaehlte Sprache speichern'
        => 'Gekozen taal opslaan',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Stemt de MUID-identificator af over Microsoft-domeinen heen; volgens de aanbieder een third-partycookie',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Houdt berichten synchroon over meerdere tabbladen',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Bewaart de waarde van de parameter pk_campaign',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Bewaart de waarde van de parameter utm_campaign',
    'Haelt den Widerspruch gegen die Messung'
        => 'Bewaart het bezwaar tegen de meting',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Bewaart de vervaltijd van _uetsid',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Bewaart de vervaltijd van _uetvid',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Bewaart het soort verkeersbron voor de Tag Manager',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Legt de identiteit van de bezoeker vast, ook voor het ontdubbelen van contacten',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Legt de cookiekeuze van de bezoeker vast',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Houdt de weergave van de widget consistent bij het wisselen van pagina',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Legt de instappagina vast; analyse',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Bewaart de toestemming voor de meting met cookies',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Bewaart de keuze van de gebruiker over categorieën en aanbieders',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Bewaart de sessie van aangemelde gebruikers en de toegang tot eerdere gesprekken',
    'Haelt die verweisende Adresse'
        => 'Bewaart het verwijzende adres',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Legt de verwijzende bron vast; analyse',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Bewaart eigen variabelen van de sessie (door de aanbieder als verouderd aangemerkt)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Legt vast of etracker cookies mag plaatsen; wordt bij data-block-cookies via een API-aanroep gezet',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Legt vast welke functieschakelaars de eigenaar van de video heeft ingeschakeld',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Hoofdcookie voor het herkennen van bezoekers',
    'Heatmaps'
        => 'Heatmaps',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Heatmaps van klikken en scrolgedrag',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Bewaart heatmap-sessiegegevens voor de duur van het bezoek',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Bewaart informatie over de lopende sessie (accounts vanaf 14-06-2026)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Bewaart informatie over de lopende sessie (accounts van vóór 14-06-2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Bewaart aangepaste variabelen voor de duur van het bezoek',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Bewaart permanente gegevens op bezoekersniveau (accounts vanaf 14-06-2026)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Bewaart permanente gegevens op bezoekersniveau voor de Insights-analyse (accounts van vóór 14-06-2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Legt de toestemmingsstatus van de bezoeker vast (accounts vanaf 14-06-2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Legt de toestemmingsstatus van de bezoeker vast (accounts van vóór 14-06-2026)',
    'Hält den Sitzungszustand.'
        => 'Bewaart de sessiestatus.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Bewaart de Clarity-gebruikersidentificator en de instellingen voor deze website',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Bewaart de varianttoewijzing voor A/B-tests',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Legt de gekozen combinatie tijdelijk vast (accounts vanaf 14-06-2026)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Legt de gekozen combinatie tijdelijk vast (accounts van vóór 14-06-2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Legt de gekozen variant vast voordat de doorverwijzing plaatsvindt (accounts vanaf 14-06-2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Legt de gekozen variant vast voordat de doorverwijzing plaatsvindt (accounts van vóór 14-06-2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Legt vast via welke verwijzing het bezoek tot stand is gekomen',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'In de modus Pre-Clearance: vrijgave voor verdere WAF-controles binnen dezelfde zone',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Indirecte lidmaatschapsidentificatie voor conversietracking, retargeting en analyse',
    'Inhalt des Warenkorbs; notwendig'
        => 'Inhoud van de winkelwagen; noodzakelijk',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Koperspecifieke analysegegevens in de shop; statistiek',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Campagnegebonden unieke identificatie (accounts vanaf 14-06-2026)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Identificatie van het eerste contact met Clarity op alle Clarity-websites; volgens de aanbieder een third-party cookie',
    'Kennzeichnet die laufende Sitzung'
        => 'Markeert de lopende sessie',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Reactiegegevens bewaren voor volgende reacties',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Consistente weergave van A/B-testvarianten',
    'Lastverteilung und Routing'
        => 'Load balancing en routering',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Taakverdeling en routering van de challenge-aanvragen',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Slaat de accountinstellingen van de bezoeker lokaal op',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Levert steeds dezelfde variant van een A/B-testpagina',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Livechat en messagingkanaal voor support op de website',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Livechat en supportpostvak op de website',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Marketinggegevens van de koopschermen; marketing',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Marketinggegevens voor koopschermen',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Onthouden van de spelerinstellingen van de kijker (volume, kwaliteit, ondertiteling)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Onthouden van widgetstatus en -instellingen',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Onthoudt dat de Global-Privacy-Control-banner is gesloten',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Onthoudt dat de meldingsbanner is gesloten',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Onthoudt het tijdstip van de synchronisatie met de cookie lms_analytics',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Onthoudt het tijdstip van de laatste ID-synchronisatie, zodat die niet wordt herhaald',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Onthoudt de toegewezen variant (accounts vanaf 14-06-2026)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Onthoudt de toegewezen variant, zodat die bij een volgend bezoek hetzelfde blijft (accounts van vóór 14-06-2026)',
    'Merkt einen Rabattcode; notwendig'
        => 'Onthoudt een kortingscode; noodzakelijk',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Onthoudt een bezwaar tegen de meting (accounts vanaf 14-06-2026)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Onthoudt een websiteoverstijgend bezwaar (accounts van vóór 14-06-2026)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Onthoudt spelerinstellingen zoals volume, kwaliteit en ondertiteling',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Onthoudt de instelling voor geluidsmeldingen',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Onthoudt een gegeven toestemming voor de meting',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Onthoudt een bezwaar tegen de meting',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Onthoudt weggeklikte proactieve berichten',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Onthoudt dat de bezoeker het opschrift van de startknop heeft weggeklikt',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Onthoudt of de widget open of gesloten is',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Onthoudt dat de bezoeker aan geen enkele campagne mag deelnemen (accounts van vóór 14-06-2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Onthoudt dat de bezoeker van de campagne is uitgesloten (accounts vanaf 14-06-2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Onthoudt dat de bezoeker van de campagne is uitgesloten (accounts van vóór 14-06-2026)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Onthoudt dat de toestemmingsmelding is gesloten',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Onthoudt dat de shopmelding is gesloten',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Onthoudt dat de cookievraag niet opnieuw gesteld moet worden',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Onthoudt dat een tag al is geactiveerd',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Onthoudt of bij deze bezoeker de scrolldiepte wordt gemeten',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Onthoudt of het chatvenster geopend is',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Onthoudt of de MUID-identificatie aan een advertentie-identificatie wordt doorgegeven; volgens de aanbieder altijd 0, third-party cookie',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Meten van openingen en klikken in e-mailcampagnes',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Meten van sessies en gebeurtenissen op pagina\'s met widget',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Meten van sessies en toewijzen van de bezoekbron',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Meting van de beschikbaarheid van de dienst door Google',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Meting van de laadtijd en de kernstatistieken van de pagina (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Meting van de scrolldiepte en van klikgebeurtenissen',
    'Messung der Werbewirkung'
        => 'Meting van het effect van advertenties',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Meting van het gebruiksgedrag op de website',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Meting en personalisatie van advertenties in het TikTok-Pangle-advertentienetwerk',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Meting en verbetering van de prestaties van advertentiecampagnes',
    'Messung von Auslieferungen und Klicks'
        => 'Meting van uitleveringen en klikken',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Meting van bezoekers en sessies voor analyses',
    'Messung von Conversions'
        => 'Meting van conversies',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Meting van paginaweergaven en bezoeken',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Meting van paginaweergaven en gebeurtenissen',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Meting van paginaweergaven en gebruiksgedrag',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Meting van paginaweergaven en aangepaste gebeurtenissen',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Meting van paginaweergaven, bezoeken en sessies',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Meting van paginaweergaven, bezoeken en sessies op de eigen server',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Meting van advertentiecampagnes en conversies op de website',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Meting van doelen en conversies van een campagne',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Ophalen van kaarttegels, lettertypen en stijlen bij de aanbieder',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Naam uit het reactieformulier vooraf invullen',
    'Nutzer-ID'
        => 'Gebruikers-ID',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Koppelt de winkelwagen aan het juiste land; noodzakelijk',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Koppelt de winkelwagen in de database aan de juiste klant',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Wijst de handelingen van een bezoek aan een sessie toe',
    'Personalisierung der Werbung auf TikTok'
        => 'Personalisatie van de advertenties op TikTok',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Controleren of WordPress cookies kan plaatsen',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Controleert of de browser cookies ondersteunt; noodzakelijk',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Controleert of WordPress cookies kan plaatsen',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Controlewaarde van het shopwachtwoord; noodzakelijk',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Testcookie van de aanbieder (accounts van vóór 14-06-2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Controleert of de browser cookies accepteert (accounts vanaf 14-06-2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Controleert of de browser cookies accepteert (accounts van vóór 14-06-2026)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Controleert of de browser cookies accepteert (volgens de aanbieder alleen in Internet Explorer)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Rate limiting bij de CDN-aanbieder van HubSpot',
    'Reichweiten- und Nutzungsmessung'
        => 'Bereik- en gebruiksmeting',
    'Reichweitenmessung'
        => 'Bereikmeting',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Bereikmeting van de ingesloten video\'s door Vimeo',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Bereikmeting voor de shopbeheerder',
    'Remarketing und Zielgruppenbildung'
        => 'Remarketing en doelgroepvorming',
    'Retargeting'
        => 'Retargeting',
    'Retargeting von Website-Besuchern'
        => 'Retargeting van websitebezoekers',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Risicoanalyse om mens en bot te onderscheiden',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Verzamelcookie, volgens de aanbieder alleen in de browser Safari aangemaakt (accounts vanaf 14-06-2026)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Verzamelcookie, volgens de aanbieder alleen in de browser Safari aangemaakt (accounts van vóór 14-06-2026)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Verzamelen van informatie over het surfgedrag van deze gebruikers door Spotify en derden',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Schakelaar die de websitebeheerder zelf instelt om de tracking door Klaviyo te blokkeren',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Bescherming van het inloggen van leden tegen vervalsing',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Bescherming van formulieren tegen geautomatiseerd misbruik',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Bescherming tegen geautomatiseerde aanvragen (spam, credential stuffing)',
    'Sicherheit'
        => 'Beveiliging',
    'Sicherheitsfunktionen'
        => 'Beveiligingsfuncties',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Beveiligingsfuncties wanneer de optionele functie User Journeys actief is',
    'Sitzung'
        => 'Sessie',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Toewijzing van sessie en van taal respectievelijk land',
    'Sitzungsaufzeichnung'
        => 'Sessieopname',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Sessie-identificatie voor de analyse van gebeurtenissen op pagina\'s met widget',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Sessie-identificatie voor de shopstatistiek; statistiek',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Sessiesleutel van de Answer Bot-dienst',
    'Sitzungswiedergabe'
        => 'Sessieweergave',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Slaat het authenticatietoken op na het inloggen',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Slaat het gecodeerde wachtwoord voor met een wachtwoord beveiligde video\'s op',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Slaat de sleutel van de gekozen taal op',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Slaat de privacyvoorkeur van de bezoeker op; noodzakelijk',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Slaat de toestemmingskeuze van de bezoeker op',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Slaat de apparaatidentificatie van de bezoeker op voor authenticatie in de chatwidget',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Slaat de identificatie op van een gebruiker die zich voor een webinar heeft aangemeld',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Slaat de klikidentificatie fbclid op, zodat een websitegebeurtenis aan een advertentie kan worden toegewezen',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Slaat de gebruikersidentificatie op uit een registratieformulier dat vóór de video is geplaatst',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Slaat de TikTok-klikidentificatie op voor het toewijzen van conversies',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Slaat de unieke bezoekers-ID op voor herkenning',
    'Speichert die zugestimmten Kategorien'
        => 'Slaat de categorieën op waarvoor toestemming is gegeven',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Voedt de widget met recent bekeken producten',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Bepaalt of de MUID-identificatie wordt vernieuwd; volgens de aanbieder een third-party cookie',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Technisch noodzakelijk voor de werking en de beveiliging van de website.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Bevat sessie- en checkoutgegevens van de shop; door de aanbieder als noodzakelijk aangemerkt',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Draagt de bezwaarfunctie (opt-out)',
    'Transaktionssicherheit'
        => 'Transactiebeveiliging',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Draagt de risicoanalyse van reCAPTCHA.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Verzenden van websitegebeurtenissen naar TikTok',
    'Umfragen'
        => 'Enquêtes',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Verhindert het verzenden van gegevens naar HubSpot',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Onderdrukt het welkomstbericht van de chat nadat dit is gesloten',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Onderscheidt browsers die Microsoft-pagina\'s bezoeken; met toestemming ook voor advertenties',
    'Unterscheidet einzelne Nutzer.'
        => 'Onderscheidt afzonderlijke gebruikers.',
    'Unterscheidung einzelner Nutzer'
        => 'Onderscheiden van afzonderlijke gebruikers',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Onderscheid tussen mens en bot bij formulieren en aanmeldingen',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Verbindt meerdere paginaweergaven tot één sessieopname',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Voorkomt dat de banner in de strikte modus voortdurend wordt getoond',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Verdelen van de toestemmingssignalen naar Google-tags',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Beheren van de toestemmingskeuze voor de in de container geconfigureerde tags',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Beheer van het bezwaar tegen de meting',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Beheer van bezwaar en toestemming voor de meting',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Door Google ingedeeld bij de categorieën Analyse en Advertenties.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Door Google ingedeeld bij de categorieën Analyse, Advertenties en Beveiliging.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Door Google ingedeeld bij de categorieën Functionaliteit, Advertenties en Beveiliging.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Door Google ingedeeld bij de categorieën Beveiliging en Functionaliteit.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Door Google ingedeeld bij de categorieën Beveiliging en Advertenties.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Door Google ingedeeld bij de categorieën Beveiliging, Analyse, Functionaliteit en Advertenties.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Door Google ingedeeld bij de categorieën Beveiliging, Functionaliteit en Advertenties.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Door Google ingedeeld bij de categorieën Advertenties en Beveiliging.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Door Google ingedeeld bij de categorie Analyse; een nauwkeuriger doel noemt Google niet.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Door Google ingedeeld bij de categorie Functionaliteit.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Door Google ingedeeld bij de categorie Beveiliging.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Door Google ingedeeld bij de categorie Advertenties.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Door Microsoft genoemd als een van de cookies die zonder toestemming niet geplaatst mogen worden; een eigen doelomschrijving geeft Microsoft niet',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Door Vimeo aangemaakte identificatie voor de bereikmeting',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Valuta van de winkelwagen na afronding van de checkout; noodzakelijk',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Op waarschijnlijkheid gebaseerde koppeling van een browser aan een persoon',
    'Warenkorb einer Besucherin zuordnen'
        => 'Winkelwagen aan een bezoeker koppelen',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Websiteadres uit het reactieformulier vooraf invullen',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Herkenning van de kijker voor advertentiedoeleinden',
    'Werbepersonalisierung'
        => 'Personalisatie van advertenties',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Zoals _pin_unauth, maar als third-party cookie',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'De bezoeker herkennen binnen het boekingsproces',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'De bezoeker herkennen tussen paginaweergaven en tabbladen',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Websitebezoekers herkennen en identificeren',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Bezoekers herkennen over meerdere bezoeken heen',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Bezoekers van gekoppelde websites herkennen voor retargeting',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Terugkerende bezoekers herkennen en eerdere gesprekken koppelen',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Herkenning van de bezoeker en opslag van zijn kenmerken',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Herkenning van de browser via de Criteo-identificatie',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Herkenning van de gebruiker; alleen met toestemming, standaard geblokkeerd',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Herkenning van een browser bij latere bezoeken na toestemming',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Herkenning van bezoekers en toewijzing aan sessies',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'Herkenning van LinkedIn-leden buiten LinkedIn voor advertenties',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Herkenning van gebruikers na toestemming',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Herkenning van terugkerende bezoekers via een bezoekers-ID',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Wordt geplaatst wanneer een campagnedoel is geactiveerd (accounts vanaf 14-06-2026)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Wordt geplaatst wanneer een campagnedoel is geactiveerd (accounts van vóór 14-06-2026)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Wordt geplaatst wanneer iemand een website met ingebouwde Pinterest-tag bezoekt',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Wordt geplaatst wanneer een toewijzing zonder bestaande cookies lukt, bijvoorbeeld via Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Wordt door de JavaScript-tag geplaatst op basis van gegevens die Pinterest meegeeft bij geadverteerd verkeer',
    'Zaehlt und begrenzt Sitzungen'
        => 'Telt en beperkt sessies',
    'Zahlungsabwicklung'
        => 'Betalingsverwerking',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Geeft aan of de sessie nog loopt of nieuw is',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Geeft de interface aan dat er iemand is ingelogd en wie dat is',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Willekeurige browseridentificatie die de pixelgebeurtenissen van een website aan één browser koppelt',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Recent bekeken producten in de bijbehorende widget tonen',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Gedrag op de website aan een profiel koppelen',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Toewijzing van de herkomst van een bezoek (referrer, attribution)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Koppeling van een bezoeker aan een contact in het Brevo-account via het e-mailadres',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Toewijzing van transacties zoals leads en sales aan een publisher',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Toewijzing van acties op de website aan eerder geziene advertenties',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Meerdere paginaweergaven samenvoegen tot één sessie',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Aanvullende gegevens bij geregistreerde gebeurtenissen in het bezoekverloop',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Toewijzing en behoud van een variant over meerdere bezoeken',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Tijdelijke opslag voor gebeurtenissen op basis van CSS-selectors',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Tijdelijke opslag voor Messenger- en bezoekersgegevens in de browseropslag',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Tijdelijke opslag voor de items van de Tag Manager',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Tijdelijke opslag voor de meting van de scrolldiepte',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Tijdelijke opslag voor de variabelen van de Tag Manager',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Tijdelijke opslag voor de widgetinstellingen om herhaalde serveraanvragen te voorkomen',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Tijdelijk opslaan van de Messenger- en bezoekersgegevens in de browser',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Telt de voor een bezoeker aangemaakte sessies (accounts vanaf 14-06-2026)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Telt hoe vaak de browser tijdens de meting is gesloten en weer geopend (accounts van vóór 14-06-2026)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Telling van paginaweergaven en bezoeken',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'geautomatiseerde analyses van het gebruikersgedrag',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'grove geografische toewijzing op land, regio en stad',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'optionele opname van de sessie (Session Replay), standaard met gemaskeerde teksten, afbeeldingen en invoer',
    'optional Heatmaps und A/B-Tests'
        => 'optioneel heatmaps en A/B-tests',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Geeft de verwijzende bron door bij split-URL-tests (accounts vanaf 14-06-2026)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Geeft de verwijzende bron door bij split-URL-tests (accounts van vóór 14-06-2026)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Toewijzing van transacties zoals leads en sales aan een publisher, Effectmeting van een advertentiemiddel en afrekening van de commissie',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Vastleggen van bezoekers en paginaweergaven op de website voor marketingautomatisering, Koppeling van een bezoeker aan een contact in het Brevo-account via het e-mailadres, Vastleggen van eigen, door de beheerder gedefinieerde gebeurtenissen',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Weergave van de boekingskalender en het maken van afspraken op de website, De bezoeker herkennen binnen het boekingsproces, Afhandeling van betalingen als de afspraak betaald is',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Herkennen en afwijzen van geautomatiseerde toegang tot formulieren, Uitgifte van een token dat de server van de website controleert, In de modus Pre-Clearance: vrijgave voor verdere WAF-controles binnen dezelfde zone',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Meting van paginaweergaven en bezoeken, Meting van de laadtijd en de kernstatistieken van de pagina (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Uitlevering van gepersonaliseerde advertenties, Meting van het effect van advertenties, Herkenning van de browser via de Criteo-identificatie',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Meting van het gebruiksgedrag op de website, Vorming van pseudonieme gebruiksprofielen na toestemming, Herkenning van een browser bij latere bezoeken na toestemming',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Meting van paginaweergaven en gebruiksgedrag, Meting van de scrolldiepte en van klikgebeurtenissen, Herkenning van gebruikers na toestemming, Beheer van het bezwaar tegen de meting',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Onderscheid tussen mens en bot bij formulieren en aanmeldingen, Bescherming tegen geautomatiseerde aanvragen (spam, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Meting van conversies, Remarketing en doelgroepvorming, Beperking van de weergavefrequentie, Herkenning van klikfraude',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Uitlevering van advertenties, Beperking van de weergavefrequentie, Fraude- en misbruikdetectie, Meting van uitleveringen en klikken',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Onderscheiden van afzonderlijke gebruikers, Behoud van de sessiestatus, Bereik- en gebruiksmeting',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Weergave van een interactieve kaart, Meting van de beschikbaarheid van de dienst door Google',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Risicoanalyse om mens en bot te onderscheiden, Bescherming van formulieren tegen geautomatiseerd misbruik',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Uitleveren en beheren van tags op de website, Verdelen van de toestemmingssignalen naar Google-tags',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Onderscheid tussen mens en bot bij formulieren en aanmeldingen, Taakverdeling en routering van de challenge-aanvragen, Beschikbaar stellen van de toegankelijkheidsvoorziening',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Heatmaps, Sessieopname, Enquêtes',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Bezoekers herkennen over meerdere bezoeken heen, Meten van sessies en toewijzen van de bezoekbron, Ontdubbelen van contacten, Werking van de chatwidget, Consistente weergave van A/B-testvarianten',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Livechat en supportpostvak op de website, Terugkerende bezoekers herkennen en eerdere gesprekken koppelen, Herkennen van het apparaat voor misbruikbestrijding, Tijdelijk opslaan van de Messenger- en bezoekersgegevens in de browser',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Weergave van financierings- en termijnbetalingsmeldingen op product- en winkelwagenpagina\'s (on-site messaging), Uitlevering van de meldingsinhoud in voorbereide plaatshouders in de paginabroncode via een adserver',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Websitebezoekers herkennen en identificeren, Gedrag op de website aan een profiel koppelen, Aansturing van aanmeldformulieren op de website',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Conversietracking voor LinkedIn-advertentiecampagnes, Retargeting van websitebezoekers, Analyse van de doelgroep van de website (websitedemografie)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Bezoekers van gekoppelde websites herkennen voor retargeting, Aansturing van pop-upformulieren, zodat ze niet herhaaldelijk verschijnen, Meten van openingen en klikken in e-mailcampagnes, Insluiten van advertentiepixels van Google en Facebook op de gekoppelde website',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Weergave van interactieve kaarten op de website, Ophalen van kaarttegels, lettertypen en stijlen bij de aanbieder, Afrekening en beveiliging van de kaartaanroepen',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Meting van paginaweergaven, bezoeken en sessies, Herkenning van terugkerende bezoekers via een bezoekers-ID, Toewijzing van de herkomst van een bezoek (referrer, attribution), optioneel heatmaps en A/B-tests',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Meting van paginaweergaven, bezoeken en sessies op de eigen server, Herkenning van terugkerende bezoekers via een bezoekers-ID, Toewijzing van de herkomst van een bezoek (referrer, attribution), optioneel heatmaps en A/B-tests',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Uitleveren en activeren van tags op de website, Beheren van de toestemmingskeuze voor de in de container geconfigureerde tags',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Meting van advertentiecampagnes en conversies op de website, Vorming van doelgroepen en retargeting',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Conversietracking voor Microsoft Advertising-campagnes, Opbouw van remarketinglijsten, Meting van paginaweergaven en aangepaste gebeurtenissen',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Opname en weergave van sessies, Heatmaps van klikken en scrolgedrag, Meerdere paginaweergaven samenvoegen tot één sessie, geautomatiseerde analyses van het gebruikersgedrag',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Afhandeling van een door de bezoeker gestarte betaling, Insluiten van de kaartvelden in de eigen checkout, zodat kaartgegevens niet via de shop lopen, Fraudepreventie en wettelijke verplichtingen als betaaldienstverlener',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Opname van muisbewegingen, Sessieweergave, Analyse van het gebruiksgedrag',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Uitleveren van kaarttegels aan ingesloten kaarten, Werking en misbruikbestrijding van de kaartdiensten',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Betalingsverwerking, Fraudepreventie',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Conversietracking voor Pinterest-advertentiecampagnes, Vorming van doelgroepen en retargeting, Toewijzing van acties op de website aan eerder geziene advertenties',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Meting van paginaweergaven en gebeurtenissen, Herkenning van bezoekers en toewijzing aan sessies, Analyse van herkomst en campagnes, Analyse van apparaat, browser en geschatte locatie, E-commerce- en doelanalyse',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Telling van paginaweergaven en bezoeken, Analyse van de verwijzende bronnen, Analyse van browser, besturingssysteem en apparaattype, grove geografische toewijzing op land, regio en stad',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Vastleggen en doorsturen van applicatiefouten uit de browser, optionele opname van de sessie (Session Replay), standaard met gemaskeerde teksten, afbeeldingen en invoer',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Werking van winkelwagen en afrekenproces van een shop, Toewijzing van sessie en van taal respectievelijk land, Bereikmeting voor de shopbeheerder, Marketinggegevens voor koopschermen',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Insluiten en afspelen van nummers, albums, afspeellijsten en podcastafleveringen, Verzamelen van informatie over het surfgedrag van deze gebruikers door Spotify en derden, Mogelijk maken dat derden cookies plaatsen in de browser van deze gebruikers',
    'Besucherzählung, Reichweitenmessung'
        => 'Bezoekersteling, Bereikmeting',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Fraudedetectie en risicobeoordeling van betaalpogingen, Beschikbaar stellen van de betaalvelden van Stripe Elements, Herkennen van bots en geautomatiseerd gedrag in het bestelproces',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Meting en verbetering van de prestaties van advertentiecampagnes, Personalisatie van de advertenties op TikTok, Verzenden van websitegebeurtenissen naar TikTok',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Insluiten van formulieren en enquêtes in de website, Vastleggen en doorsturen van de antwoorden naar de beheerder van het formulier',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Insluiten en afspelen van video\'s op de website, Onthouden van de spelerinstellingen van de kijker (volume, kwaliteit, ondertiteling), Bereikmeting van de ingesloten video\'s door Vimeo, Bot- en misbruikbestrijding voor de speler',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'A/B-tests en split-URL-tests op de website, Toewijzing en behoud van een variant over meerdere bezoeken, Meting van doelen en conversies van een campagne, Meting van bezoekers en sessies voor analyses, Beheer van bezwaar en toestemming voor de meting',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Winkelwagen aan een bezoeker koppelen, Herkennen of de inhoud van de winkelwagen is gewijzigd, Recent bekeken producten in de bijbehorende widget tonen, Onthouden dat de shopmelding is verborgen',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Aanmelding en sessieherkenning in het beheerdersgedeelte, Reactiegegevens bewaren voor volgende reacties, Weergave-instellingen van het beheerdersgedeelte onthouden, Controleren of WordPress cookies kan plaatsen, Gekozen taal opslaan',
    'Conversion-Messung, Retargeting'
        => 'Conversiemeting, Retargeting',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Afspelen van ingesloten video\'s, Beveiliging, Herkenning van de kijker voor advertentiedoeleinden',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Livechat en messagingkanaal voor support op de website, De bezoeker herkennen tussen paginaweergaven en tabbladen, Onthouden van widgetstatus en -instellingen, Meten van sessies en gebeurtenissen op pagina\'s met widget',
];
