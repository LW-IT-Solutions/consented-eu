<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Englisch.
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
        => 'A/B tests and split URL tests on the website',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Billing and protection of map calls',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Completion of the sign-in with Shop; essential',
    'Abspielen eingebetteter Videos'
        => 'Playback of embedded videos',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Processing of a payment initiated by the visitor',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Processing of payments when the appointment is chargeable',
    'Analyse des Nutzungsverhaltens'
        => 'Analysis of usage behaviour',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Analytics data from the purchase interfaces; analytics',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Analytics data from the shop; classified by the provider as analytics',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Login data for the admin area at /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Sign-in with Shop Pay; essential',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Sign-in and session detection in the admin area',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Anonymous service-related statistics and further technical purposes, including support for accessibility',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'View settings of the admin area per account',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Remembering the view settings of the admin area',
    'Anzeige von Bewertungen'
        => 'Display of reviews',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Displaying the booking calendar and scheduling appointments on the website',
    'Anzeigen einer interaktiven Karte'
        => 'Displaying an interactive map',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'Set to the value 1, it prevents UET events from being sent to Microsoft',
    'Aufbau von Remarketing-Listen'
        => 'Building remarketing lists',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Recording and replaying sessions',
    'Aufzeichnung von Mausbewegungen'
        => 'Recording of mouse movements',
    'Ausblenden des Shop-Hinweises merken'
        => 'Remembering that the shop notice has been hidden',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Delivering and firing tags on the website',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Delivering and managing tags on the website',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Delivering map tiles to embedded maps',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Delivery of the notice content into prepared placeholders in the page source via an ad server',
    'Auslieferung personalisierter Werbung'
        => 'Delivery of personalised advertising',
    'Auslieferung von Anzeigen'
        => 'Delivery of ads',
    'Auslieferung von Bibliotheken und Assets'
        => 'Delivery of libraries and assets',
    'Auslieferung von Schriftarten'
        => 'Delivery of fonts',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Issuing a token that the website\'s server verifies',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Controlling the display of sign-up forms on the website',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Controlling pop-up forms so that they do not appear repeatedly',
    'Auswahl des Rechenzentrums'
        => 'Selection of the data centre',
    'Auswertung der Verweisquellen'
        => 'Evaluation of the referral sources',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Evaluation of the website audience (website demographics)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Evaluation of browser, operating system and device type',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Evaluation of device, browser and estimated location',
    'Auswertung von Herkunft und Kampagnen'
        => 'Evaluation of origin and campaigns',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Authenticates the end user\'s requests',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Limiting how often an ad is shown',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Records a passed check so that further challenges in the zone are omitted',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Provision of the Stripe Elements payment fields',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Provision of the accessibility interface',
    'Besucherzählung'
        => 'Visitor counting',
    'Betrieb des Chat-Widgets'
        => 'Operation of the chat widget',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Operation and abuse prevention of the map services',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Operation of a shop\'s cart and checkout',
    'Betrugs- und Missbrauchserkennung'
        => 'Fraud and abuse detection',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Fraud detection during the payment attempt',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Fraud detection and risk assessment of payment attempts',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Fraud prevention and legal obligations as a payment service provider',
    'Betrugsprävention'
        => 'Fraud prevention',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Fraud prevention and risk assessment of a payment attempt',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Creation of pseudonymous usage profiles after consent',
    'Bildung von Zielgruppen und Retargeting'
        => 'Building audiences and retargeting',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Binds the session to the same AWS instance',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Bot and abuse prevention for the player',
    'Bot-Abwehr fuer den Player'
        => 'Bot prevention for the player',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Bot protection when delivering the HubSpot resources',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Browser identifier with which LinkedIn distinguishes devices and detects abuse',
    'Cloudflare-Bot-Abwehr'
        => 'Cloudflare bot prevention',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Cloudflare bot detection for traffic filtering',
    'Cloudflare-Ratenbegrenzung'
        => 'Cloudflare rate limiting',
    'Conversion-Messung'
        => 'Conversion measurement',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Conversion tracking for LinkedIn advertising campaigns',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Conversion tracking for Microsoft Advertising campaigns',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Conversion tracking for Pinterest advertising campaigns',
    'Darstellung interaktiver Karten auf der Website'
        => 'Display of interactive maps on the website',
    'Deduplizieren von Kontakten'
        => 'Deduplicating contacts',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Serves to deliver and measure advertising.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'Cross-domain visitor ID; a third-party cookie according to the provider, used only when third-party cookies are enabled in the configuration file',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Third-party identifier for recognising visitors',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Third-party identifier that is passed on to Klaviyo',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Third-party advertising identifier for measuring campaigns and for personalisation on TikTok',
    'E-Commerce- und Zielauswertung'
        => 'E-commerce and goal evaluation',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Pre-filling the email address from the comment form',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Embedding and playing tracks, albums, playlists and podcast episodes',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Embedding and playing videos on the website',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Embedding forms and surveys in the website',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Embedding of the card fields in the site\'s own checkout so that card data does not pass through the shop',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Embedding of an externally maintained cookie declaration',
    'Einbettung von Audioinhalten'
        => 'Embedding of audio content',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Embedding advertising pixels from Google and Facebook on the connected website',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Display of financing and instalment notices on product and cart pages (on-site messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Unique identifier for cross-domain measurement (accounts from 14 June 2026 onwards)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Unique identifier for cross-domain measurement (accounts from before 14 June 2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'One-time value against CSRF on the opt-out form',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Contains a user identifier and the time of creation; according to the source set in the Pinterest in-app browser, not on the website domain',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Collecting the responses and transmitting them to the form operator',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Records use of the website for evaluation purposes.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Collection of custom events defined by the operator',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Collection and transmission of application errors from the browser',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Collection of visitors and page views on the website for marketing automation',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Performance measurement of an advertising medium and settlement of the commission',
    'Erhalt des Sitzungszustands'
        => 'Maintaining the session state',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Recognising the device for abuse prevention',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Detecting and rejecting automated requests to forms',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Detecting bots and automated behaviour in the ordering process',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Detecting whether the contents of the shopping cart have changed',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Detects changes to the contents of the shopping cart',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Recognises visitors to the website on which the Intercom code is installed',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Recognises browsers on Microsoft websites; according to the provider also used for advertising, third-party cookie',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Recognises people who write via the chat tool',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Recognises the device from which the conversation originates',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Recognises the individual device interacting with the Messenger, for abuse prevention',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Recognises the end user who starts the conversation',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Detects the domain or subdomain on which the chat widget is installed',
    'Erkennt wiederkehrende Besucher'
        => 'Recognises returning visitors',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Detects whether the browser has been restarted',
    'Erkennung von Klickbetrug'
        => 'Detection of click fraud',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Determines unique visits to the website (accounts from 14 June 2026 onwards)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Determines unique visits to the website (accounts from before 14 June 2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Allowing third parties to set cookies in these users\' browsers',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Enables use of the accessibility interface',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Enables additional functions of the website.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'First-party identifier that recognises visitors and attributes the website\'s events',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'First-party visitor identifier for conversion tracking and remarketing',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'First-party session identifier for the attribution of events',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'First-party session identifier per pixel for campaign measurement',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'First-party session identifier for campaign measurement',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'First-party advertising identifier for measuring campaigns and for personalisation on TikTok',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'First-party cookie that groups actions of visitors whom Pinterest cannot attribute',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'First-party cookie that stores the hashed customer data collected via Automatic Enhanced Match',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Generates a unique identifier for each visitor (accounts from 14 June 2026 onwards)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Generates a unique identifier for each visitor (accounts from before 14 June 2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Device identifier for the evaluation of events on pages with the widget',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Set when signing in on a page hosted by HubSpot',
    'Gewaehlte Sprache speichern'
        => 'Storing the selected language',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Synchronises the MUID identifier across Microsoft domains; a third-party cookie according to the provider',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Keeps messages in sync across multiple tabs',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Holds the value of the pk_campaign parameter',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Holds the value of the utm_campaign parameter',
    'Haelt den Widerspruch gegen die Messung'
        => 'Holds the objection to measurement',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Holds the expiry time of _uetsid',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Holds the expiry time of _uetvid',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Holds the type of traffic source for the Tag Manager',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Records the visitor identity, also for deduplicating contacts',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Records the visitor\'s cookie decision',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Keeps the appearance of the widget consistent when changing pages',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Records the entry page; analytics',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Holds the consent to measurement with cookies',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Holds the user\'s decision on categories and providers',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Maintains the session of signed-in users and access to earlier conversations',
    'Haelt die verweisende Adresse'
        => 'Holds the referring address',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Records the referring source; analytics',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Holds custom variables of the session (marked as deprecated by the provider)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Records whether etracker may set cookies; set via an API call when data-block-cookies is used',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Records which feature switches the video owner has enabled',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Main cookie for recognising visitors',
    'Heatmaps'
        => 'Heatmaps',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Heatmaps of clicks and scrolling behaviour',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Holds heatmap session data for the duration of the visit',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Holds information about the current session (accounts from 14 June 2026 onwards)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Holds information about the current session (accounts from before 14 June 2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Holds custom variables for the duration of the visit',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Holds persistent data at visitor level (accounts from 14 June 2026 onwards)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Holds persistent data at visitor level for the Insights evaluation (accounts from before 14 June 2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Records the visitor\'s consent status (accounts from 14 June 2026 onwards)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Records the visitor\'s consent status (accounts from before 14 June 2026)',
    'Hält den Sitzungszustand.'
        => 'Holds the session state.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Holds the Clarity user identifier and the settings for this website',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Holds the variant assignment for A/B tests',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Temporarily records the selected combination (accounts from 14 June 2026 onwards)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Temporarily records the selected combination (accounts from before 14 June 2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Records the selected variant before the redirect takes place (accounts from 14 June 2026 onwards)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Records the selected variant before the redirect takes place (accounts from before 14 June 2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Records which referral led to the visit',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'In Pre-Clearance mode: clearance for further WAF checks in the same zone',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Indirect member identifier for conversion tracking, retargeting and analysis',
    'Inhalt des Warenkorbs; notwendig'
        => 'Contents of the shopping cart; essential',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Buyer-related analytics data in the shop; analytics',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Campaign-related unique identifier (accounts from 14 June 2026)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Identifier of the first contact with Clarity across all Clarity websites; a third-party cookie according to the provider',
    'Kennzeichnet die laufende Sitzung'
        => 'Identifies the current session',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Keep comment data available for further comments',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Consistent delivery of A/B test variants',
    'Lastverteilung und Routing'
        => 'Load balancing and routing',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Load balancing and routing of the challenge requests',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Stores the visitor\'s account settings locally',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Delivers the same variant of an A/B test page',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Live chat and messaging channel for support on the website',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Live chat and support inbox on the website',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Marketing data from the purchase interfaces; marketing',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Marketing data for the purchase interfaces',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Remembering the viewer\'s player settings (volume, quality, subtitles)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Remembering widget state and settings',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Remembers that the Global Privacy Control banner was closed',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Remembers that the notice banner was closed',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Remembers when the sync with the lms_analytics cookie took place',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Remembers when the last ID sync took place so that it is not repeated',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Remembers the assigned variant (accounts from 14 June 2026)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Remembers the assigned variant so that it stays the same on a return visit (accounts before 14 June 2026)',
    'Merkt einen Rabattcode; notwendig'
        => 'Remembers a discount code; essential',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Remembers an objection to measurement (accounts from 14 June 2026)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Remembers a cross-site objection (accounts before 14 June 2026)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Remembers player settings such as volume, quality and subtitles',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Remembers the setting for sound notifications',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Remembers consent given to measurement',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Remembers an objection to measurement',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Remembers proactive messages that were dismissed',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Remembers that the visitor dismissed the label on the launcher button',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Remembers whether the widget is open or closed',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Remembers that the visitor is not to take part in any campaign (accounts before 14 June 2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Remembers that the visitor is excluded from the campaign (accounts from 14 June 2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Remembers that the visitor is excluded from the campaign (accounts before 14 June 2026)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Remembers that the consent notice was closed',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Remembers that the shop notice was closed',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Remembers that the cookie question is not to be asked again',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Remembers that a tag has already fired',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Remembers whether scroll depth is measured for this visitor',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Remembers whether the chat window is open',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Remembers whether the MUID identifier is passed to an advertising identifier; always 0 according to the provider, a third-party cookie',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Measuring opens and clicks in email campaigns',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Measuring sessions and events on pages with the widget',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Measuring sessions and attributing the source of the visit',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Measurement of service availability by Google',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Measurement of load time and core page metrics (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Measurement of scroll depth and click events',
    'Messung der Werbewirkung'
        => 'Measurement of advertising effectiveness',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Measurement of usage behaviour on the website',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Measurement and personalisation of ads in the TikTok Pangle advertising network',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Measurement and improvement of the performance of advertising campaigns',
    'Messung von Auslieferungen und Klicks'
        => 'Measurement of deliveries and clicks',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Measurement of visitors and sessions for analysis',
    'Messung von Conversions'
        => 'Measurement of conversions',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Measurement of page views and visits',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Measurement of page views and events',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Measurement of page views and usage behaviour',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Measurement of page views and custom events',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Measurement of page views, visits and sessions',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Measurement of page views, visits and sessions on the site\'s own server',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Measurement of advertising campaigns and conversions on the website',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Measurement of a campaign\'s goals and conversions',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Loading map tiles, fonts and styles from the provider',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Prefilling the name from the comment form',
    'Nutzer-ID'
        => 'User ID',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Assigns the shopping cart to the correct country; essential',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Assigns the shopping cart in the database to the correct customer',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Assigns the actions of a visit to a session',
    'Personalisierung der Werbung auf TikTok'
        => 'Personalisation of advertising on TikTok',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Checking whether WordPress can set cookies',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Checks whether the browser supports cookies; essential',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Checks whether WordPress can set cookies',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Check value for the shop password; essential',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'The provider\'s test cookie (accounts before 14 June 2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Checks whether the browser accepts cookies (accounts from 14 June 2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Checks whether the browser accepts cookies (accounts before 14 June 2026)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Checks whether the browser accepts cookies (according to the provider only in Internet Explorer)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Rate limiting at HubSpot\'s CDN provider',
    'Reichweiten- und Nutzungsmessung'
        => 'Audience and usage measurement',
    'Reichweitenmessung'
        => 'Audience measurement',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Vimeo\'s audience measurement of the embedded videos',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Audience measurement for the shop operator',
    'Remarketing und Zielgruppenbildung'
        => 'Remarketing and audience building',
    'Retargeting'
        => 'Retargeting',
    'Retargeting von Website-Besuchern'
        => 'Retargeting of website visitors',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Risk analysis to distinguish human from bot',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Collective cookie, created only in the Safari browser according to the provider (accounts from 14 June 2026)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Collective cookie, created only in the Safari browser according to the provider (accounts before 14 June 2026)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Collection of information about these users\' browsing behaviour by Spotify and third parties',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Switch that the website operator sets themselves in order to stop Klaviyo tracking',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Protection of the member login against forgery',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Protection of forms against automated abuse',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Protection against automated requests (spam, credential stuffing)',
    'Sicherheit'
        => 'Security',
    'Sicherheitsfunktionen'
        => 'Security features',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Security features when the optional User Journeys feature is active',
    'Sitzung'
        => 'Session',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Session assignment and language or country assignment',
    'Sitzungsaufzeichnung'
        => 'Session recording',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Session identifier for the analysis of events on pages with the widget',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Session identifier for the shop statistics; analytics',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Session key of the Answer Bot service',
    'Sitzungswiedergabe'
        => 'Session replay',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Stores the authentication token after login',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Stores the encoded password for password-protected videos',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Stores the key of the selected language',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Stores the visitor\'s privacy preference; essential',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Stores the visitor\'s consent decision',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Stores the visitor\'s device identifier for authentication in the chat widget',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Stores the identifier of a user registered for a webinar',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Stores the click identifier fbclid so that a website event can be attributed to an ad',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Stores the user identifier from a registration form placed in front of the video',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Stores the TikTok click identifier for attributing conversions',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Stores the unique visitor ID for recognition',
    'Speichert die zugestimmten Kategorien'
        => 'Stores the categories that were consented to',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Feeds the widget of recently viewed products',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Controls whether the MUID identifier is renewed; a third-party cookie according to the provider',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Technically required for the operation and security of the website.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Carries the shop\'s session and checkout data; listed as essential by the provider',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Carries the objection function (opt-out)',
    'Transaktionssicherheit'
        => 'Transaction security',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Carries the risk analysis of reCAPTCHA.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Transmission of website events to TikTok',
    'Umfragen'
        => 'Surveys',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Prevents the transmission of data to HubSpot',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Suppresses the chat\'s welcome message after it has been closed',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Distinguishes browsers that visit Microsoft pages; with consent also used for advertising',
    'Unterscheidet einzelne Nutzer.'
        => 'Distinguishes individual users.',
    'Unterscheidung einzelner Nutzer'
        => 'Distinguishing individual users',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Distinguishing between human and bot on forms and sign-ins',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Joins several page views into one session recording',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Prevents the banner from being shown constantly in strict mode',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Distributing the consent signals to Google tags',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Managing the consent decision for the tags configured in the container',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Management of the objection to measurement',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Management of objection and consent for measurement',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Assigned by Google to the Analytics and Advertising categories.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Assigned by Google to the Analytics, Advertising and Security categories.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Assigned by Google to the Functionality, Advertising and Security categories.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Assigned by Google to the Security and Functionality categories.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Assigned by Google to the Security and Advertising categories.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Assigned by Google to the Security, Analytics, Functionality and Advertising categories.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Assigned by Google to the Security, Functionality and Advertising categories.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Assigned by Google to the Advertising and Security categories.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Assigned by Google to the Analytics category; Google does not state a more specific purpose.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Assigned by Google to the Functionality category.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Assigned by Google to the Security category.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Assigned by Google to the Advertising category.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Named by Microsoft as one of the cookies that may not be set without consent; Microsoft does not give a purpose description of its own',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Identifier generated by Vimeo for audience measurement',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Currency of the shopping cart after checkout is complete; essential',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Probabilistic attribution of a browser to a person',
    'Warenkorb einer Besucherin zuordnen'
        => 'Assigning a shopping cart to a visitor',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Prefilling the website address from the comment form',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Advertising-related recognition of the viewer',
    'Werbepersonalisierung'
        => 'Advertising personalisation',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Like _pin_unauth, but as a third-party cookie',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Recognising the visitor within the booking process',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Recognising the visitor across page views and tabs',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Recognising and identifying website visitors',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Recognising visitors across several visits',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Recognising visitors of connected websites for retargeting',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Recognising returning visitors and matching earlier conversations',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Recognition of the visitor and storage of their attributes',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Recognition of the browser via the Criteo identifier',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Recognition of the user; only with consent, blocked by default',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Recognition of a browser on later visits after consent',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Recognition of visitors and assignment to sessions',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'Recognition of LinkedIn members outside LinkedIn for advertising',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Recognition of users after consent',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Recognition of returning visitors via a visitor ID',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Is set when a campaign goal has been triggered (accounts from 14 June 2026)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Is set when a campaign goal has been triggered (accounts before 14 June 2026)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Is set when a person visits a website with the Pinterest tag installed',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Is set when attribution succeeds without existing cookies, for example via Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Is set by the JavaScript tag from data that Pinterest passes along with promoted traffic',
    'Zaehlt und begrenzt Sitzungen'
        => 'Counts and limits sessions',
    'Zahlungsabwicklung'
        => 'Payment processing',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Indicates whether the session is still running or is new',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Tells the interface that a user is logged in and who that is',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Random browser identifier that attributes a website\'s pixel events to one browser',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Showing recently viewed products in the corresponding widget',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Attributing behaviour on the website to a profile',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Attribution of the origin of a visit (referrer, attribution)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Attribution of a visitor to a contact in the Brevo account via the email address',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Attribution of transactions such as leads and sales to a publisher',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Attribution of website actions to ads seen earlier',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Merging several page views into one session',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Additional data on recorded events of the visit history',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Assignment and retention of a variant across several visits',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Cache for events based on CSS selectors',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Cache for Messenger and visitor data in browser storage',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Cache for the Tag Manager entries',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Cache for the scroll depth measurement',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Cache for the Tag Manager variables',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Cache for the widget settings, to avoid repeated server requests',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Caching the Messenger and visitor data in the browser',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Counts the sessions created for a visitor (accounts from 14 June 2026)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Counts how often the browser was closed and reopened during measurement (accounts before 14 June 2026)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Counting of page views and visits',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'automated analyses of user behaviour',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'coarse geographic assignment to country, region and city',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'optional recording of the session (Session Replay), by default with texts, images and inputs masked',
    'optional Heatmaps und A/B-Tests'
        => 'optionally heatmaps and A/B tests',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Passes on the referring source in split URL tests (accounts from 14 June 2026)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Passes on the referring source in split URL tests (accounts before 14 June 2026)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Attribution of transactions such as leads and sales to a publisher, Performance measurement of an advertising medium and settlement of the commission',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Collection of visitors and page views on the website for marketing automation, Attribution of a visitor to a contact in the Brevo account via the email address, Collection of custom events defined by the operator',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Displaying the booking calendar and scheduling appointments on the website, Recognising the visitor within the booking process, Processing of payments when the appointment is chargeable',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Detecting and rejecting automated requests to forms, Issuing a token that the website\'s server verifies, In Pre-Clearance mode: clearance for further WAF checks in the same zone',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Measurement of page views and visits, Measurement of load time and core page metrics (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Delivery of personalised advertising, Measurement of advertising effectiveness, Recognition of the browser via the Criteo identifier',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Measurement of usage behaviour on the website, Creation of pseudonymous usage profiles after consent, Recognition of a browser on later visits after consent',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Measurement of page views and usage behaviour, Measurement of scroll depth and click events, Recognition of users after consent, Management of the objection to measurement',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Distinguishing between human and bot on forms and sign-ins, Protection against automated requests (spam, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Measurement of conversions, Remarketing and audience building, Limiting how often an ad is shown, Detection of click fraud',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Delivery of ads, Limiting how often an ad is shown, Fraud and abuse detection, Measurement of deliveries and clicks',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Distinguishing individual users, Maintaining the session state, Audience and usage measurement',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Displaying an interactive map, Measurement of service availability by Google',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Risk analysis to distinguish human from bot, Protection of forms against automated abuse',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Delivering and managing tags on the website, Distributing the consent signals to Google tags',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Distinguishing between human and bot on forms and sign-ins, Load balancing and routing of the challenge requests, Provision of the accessibility interface',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Heatmaps, Session recording, Surveys',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Recognising visitors across several visits, Measuring sessions and attributing the source of the visit, Deduplicating contacts, Operation of the chat widget, Consistent delivery of A/B test variants',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Live chat and support inbox on the website, Recognising returning visitors and matching earlier conversations, Recognising the device for abuse prevention, Caching the Messenger and visitor data in the browser',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Display of financing and instalment notices on product and cart pages (on-site messaging), Delivery of the notice content into prepared placeholders in the page source via an ad server',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Recognising and identifying website visitors, Attributing behaviour on the website to a profile, Controlling the display of sign-up forms on the website',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Conversion tracking for LinkedIn advertising campaigns, Retargeting of website visitors, Evaluation of the website audience (website demographics)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Recognising visitors of connected websites for retargeting, Controlling pop-up forms so that they do not appear repeatedly, Measuring opens and clicks in email campaigns, Embedding advertising pixels from Google and Facebook on the connected website',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Display of interactive maps on the website, Loading map tiles, fonts and styles from the provider, Billing and protection of map calls',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Measurement of page views, visits and sessions, Recognition of returning visitors via a visitor ID, Attribution of the origin of a visit (referrer, attribution), optionally heatmaps and A/B tests',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Measurement of page views, visits and sessions on the site\'s own server, Recognition of returning visitors via a visitor ID, Attribution of the origin of a visit (referrer, attribution), optionally heatmaps and A/B tests',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Delivering and firing tags on the website, Managing the consent decision for the tags configured in the container',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Measurement of advertising campaigns and conversions on the website, Building audiences and retargeting',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Conversion tracking for Microsoft Advertising campaigns, Building remarketing lists, Measurement of page views and custom events',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Recording and replaying sessions, Heatmaps of clicks and scrolling behaviour, Merging several page views into one session, automated analyses of user behaviour',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Processing of a payment initiated by the visitor, Embedding of the card fields in the site\'s own checkout so that card data does not pass through the shop, Fraud prevention and legal obligations as a payment service provider',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Recording of mouse movements, Session replay, Analysis of usage behaviour',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Delivering map tiles to embedded maps, Operation and abuse prevention of the map services',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Payment processing, Fraud prevention',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Conversion tracking for Pinterest advertising campaigns, Building audiences and retargeting, Attribution of website actions to ads seen earlier',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Measurement of page views and events, Recognition of visitors and assignment to sessions, Evaluation of origin and campaigns, Evaluation of device, browser and estimated location, E-commerce and goal evaluation',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Counting of page views and visits, Evaluation of the referral sources, Evaluation of browser, operating system and device type, coarse geographic assignment to country, region and city',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Collection and transmission of application errors from the browser, optional recording of the session (Session Replay), by default with texts, images and inputs masked',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Operation of a shop\'s cart and checkout, Session assignment and language or country assignment, Audience measurement for the shop operator, Marketing data for the purchase interfaces',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Embedding and playing tracks, albums, playlists and podcast episodes, Collection of information about these users\' browsing behaviour by Spotify and third parties, Allowing third parties to set cookies in these users\' browsers',
    'Besucherzählung, Reichweitenmessung'
        => 'Visitor counting, Audience measurement',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Fraud detection and risk assessment of payment attempts, Provision of the Stripe Elements payment fields, Detecting bots and automated behaviour in the ordering process',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Measurement and improvement of the performance of advertising campaigns, Personalisation of advertising on TikTok, Transmission of website events to TikTok',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Embedding forms and surveys in the website, Collecting the responses and transmitting them to the form operator',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Embedding and playing videos on the website, Remembering the viewer\'s player settings (volume, quality, subtitles), Vimeo\'s audience measurement of the embedded videos, Bot and abuse prevention for the player',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'A/B tests and split URL tests on the website, Assignment and retention of a variant across several visits, Measurement of a campaign\'s goals and conversions, Measurement of visitors and sessions for analysis, Management of objection and consent for measurement',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Assigning a shopping cart to a visitor, Detecting whether the contents of the shopping cart have changed, Showing recently viewed products in the corresponding widget, Remembering that the shop notice has been hidden',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Sign-in and session detection in the admin area, Keep comment data available for further comments, Remembering the view settings of the admin area, Checking whether WordPress can set cookies, Storing the selected language',
    'Conversion-Messung, Retargeting'
        => 'Conversion measurement, Retargeting',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Playback of embedded videos, Security, Advertising-related recognition of the viewer',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Live chat and messaging channel for support on the website, Recognising the visitor across page views and tabs, Remembering widget state and settings, Measuring sessions and events on pages with the widget',
];
