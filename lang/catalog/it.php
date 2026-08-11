<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Italienisch.
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
        => 'Test A/B e test Split-URL sul sito',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Fatturazione e protezione delle chiamate alle mappe',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Completamento dell\'accesso con Shop; necessario',
    'Abspielen eingebetteter Videos'
        => 'Riproduzione di video incorporati',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Gestione di un pagamento avviato dal visitatore',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Gestione dei pagamenti quando l\'appuntamento è a pagamento',
    'Analyse des Nutzungsverhaltens'
        => 'Analisi del comportamento di utilizzo',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Dati di analisi delle interfacce di acquisto; analisi',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Dati di analisi del negozio; classificato dal fornitore come analisi',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Dati di accesso per l\'area di amministrazione sotto /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Accesso a Shop Pay; necessario',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Accesso e riconoscimento della sessione nell\'area di amministrazione',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Statistiche anonime relative al servizio e altre finalità tecniche, tra cui il supporto dell\'accessibilità',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Impostazioni di visualizzazione dell\'area di amministrazione per account',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Memorizzare le impostazioni di visualizzazione dell\'area di amministrazione',
    'Anzeige von Bewertungen'
        => 'Visualizzazione delle recensioni',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Visualizzazione del calendario di prenotazione e fissazione di appuntamenti sul sito',
    'Anzeigen einer interaktiven Karte'
        => 'Visualizzazione di una mappa interattiva',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'Impostato sul valore 1, impedisce l\'invio di eventi UET a Microsoft',
    'Aufbau von Remarketing-Listen'
        => 'Creazione di elenchi di remarketing',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Registrazione e riproduzione delle sessioni',
    'Aufzeichnung von Mausbewegungen'
        => 'Registrazione dei movimenti del mouse',
    'Ausblenden des Shop-Hinweises merken'
        => 'Memorizzare che l\'avviso del negozio è stato nascosto',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Distribuzione e attivazione dei tag sul sito',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Distribuzione e gestione dei tag sul sito',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Distribuzione di tessere cartografiche alle mappe incorporate',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Distribuzione dei contenuti dell\'avviso in segnaposto predisposti nel codice sorgente della pagina tramite un ad server',
    'Auslieferung personalisierter Werbung'
        => 'Diffusione di pubblicità personalizzata',
    'Auslieferung von Anzeigen'
        => 'Distribuzione di annunci',
    'Auslieferung von Bibliotheken und Assets'
        => 'Distribuzione di librerie e risorse',
    'Auslieferung von Schriftarten'
        => 'Distribuzione di caratteri tipografici',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Emissione di un token che il server del sito verifica',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Gestione della visualizzazione dei moduli di iscrizione sul sito',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Gestione dei moduli pop-up affinché non compaiano ripetutamente',
    'Auswahl des Rechenzentrums'
        => 'Selezione del centro dati',
    'Auswertung der Verweisquellen'
        => 'Analisi delle sorgenti di provenienza',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Analisi del pubblico del sito (dati demografici del sito)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Analisi di browser, sistema operativo e tipo di dispositivo',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Analisi del dispositivo, del browser e della posizione stimata',
    'Auswertung von Herkunft und Kampagnen'
        => 'Analisi della provenienza e delle campagne',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Autentica le richieste dell\'utente finale',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Limitazione della frequenza di visualizzazione',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Attesta una verifica superata, in modo da evitare ulteriori challenge della zona',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Messa a disposizione dei campi di pagamento di Stripe Elements',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Messa a disposizione dell\'accesso di accessibilità',
    'Besucherzählung'
        => 'Conteggio dei visitatori',
    'Betrieb des Chat-Widgets'
        => 'Funzionamento del widget di chat',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Funzionamento e prevenzione degli abusi dei servizi cartografici',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Funzionamento del carrello e della procedura di pagamento di un negozio',
    'Betrugs- und Missbrauchserkennung'
        => 'Rilevamento di frodi e abusi',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Rilevamento delle frodi in fase di tentativo di pagamento',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Rilevamento delle frodi e valutazione del rischio dei tentativi di pagamento',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Prevenzione delle frodi e obblighi di legge in quanto prestatore di servizi di pagamento',
    'Betrugsprävention'
        => 'Prevenzione delle frodi',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Prevenzione delle frodi e valutazione del rischio di un tentativo di pagamento',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Creazione di profili di utilizzo pseudonimi previo consenso',
    'Bildung von Zielgruppen und Retargeting'
        => 'Creazione di segmenti di pubblico e retargeting',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Vincola la sessione alla stessa istanza AWS',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Protezione del player da bot e abusi',
    'Bot-Abwehr fuer den Player'
        => 'Protezione del player dai bot',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Protezione dai bot nella distribuzione delle risorse HubSpot',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Identificatore del browser con cui LinkedIn distingue i dispositivi e rileva gli abusi',
    'Cloudflare-Bot-Abwehr'
        => 'Protezione anti-bot di Cloudflare',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Rilevamento dei bot di Cloudflare per il filtraggio del traffico',
    'Cloudflare-Ratenbegrenzung'
        => 'Limitazione della frequenza delle richieste di Cloudflare',
    'Conversion-Messung'
        => 'Misurazione delle conversioni',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Monitoraggio delle conversioni delle campagne pubblicitarie LinkedIn',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Monitoraggio delle conversioni delle campagne Microsoft Advertising',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Monitoraggio delle conversioni delle campagne pubblicitarie Pinterest',
    'Darstellung interaktiver Karten auf der Website'
        => 'Visualizzazione di mappe interattive sul sito',
    'Deduplizieren von Kontakten'
        => 'Deduplicazione dei contatti',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Serve alla diffusione e alla misurazione della pubblicità.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'ID visitatore cross-domain; secondo il fornitore, cookie di terze parti, utilizzato solo se i cookie di terze parti sono attivati nel file di configurazione',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Identificatore di terze parti per il riconoscimento dei visitatori',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Identificatore di terze parti trasmesso a Klaviyo',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Identificatore pubblicitario di terze parti per la misurazione delle campagne e la personalizzazione su TikTok',
    'E-Commerce- und Zielauswertung'
        => 'Analisi dell\'e-commerce e degli obiettivi',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Precompilare l\'indirizzo e-mail del modulo dei commenti',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Incorporamento e riproduzione di brani, album, playlist ed episodi di podcast',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Incorporamento e riproduzione di video sul sito',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Incorporamento di moduli e sondaggi nel sito',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Incorporamento dei campi della carta nel proprio checkout, affinché i dati della carta non transitino attraverso il negozio',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Incorporamento di un\'informativa sui cookie gestita esternamente',
    'Einbettung von Audioinhalten'
        => 'Incorporamento di contenuti audio',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Integrazione di pixel pubblicitari di Google e Facebook sul sito collegato',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Visualizzazione di avvisi di finanziamento e pagamento rateale sulle pagine prodotto e carrello (On-site Messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Identificatore univoco nella misurazione cross-domain (account dal 14/06/2026)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Identificatore univoco nella misurazione cross-domain (account precedenti al 14/06/2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Valore monouso contro il CSRF nel modulo di opt-out',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Contiene un identificatore utente e il momento di creazione; secondo la fonte, viene impostato nel browser in-app di Pinterest, non sul dominio del sito',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Raccolta e trasmissione delle risposte al gestore del modulo',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Rileva l\'utilizzo del sito a fini di analisi.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Raccolta di eventi personalizzati definiti dal gestore',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Raccolta e trasmissione degli errori dell\'applicazione dal browser',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Rilevazione di visitatori e visualizzazioni di pagina sul sito per la marketing automation',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Misurazione del rendimento di un annuncio pubblicitario e conteggio della commissione',
    'Erhalt des Sitzungszustands'
        => 'Mantenimento dello stato della sessione',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Riconoscimento del dispositivo per la prevenzione degli abusi',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Rilevamento e blocco degli accessi automatizzati ai moduli',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Rilevamento di bot e comportamenti automatizzati nella procedura d\'ordine',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Rilevare se il contenuto del carrello è cambiato',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Rileva le modifiche al contenuto del carrello',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Riconosce i visitatori del sito in cui è integrato il codice Intercom',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Riconosce i browser sui siti Microsoft; secondo il fornitore, utilizzato anche per la pubblicità, cookie di terze parti',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Riconosce le persone che scrivono tramite lo strumento di chat',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Riconosce il dispositivo da cui parte la conversazione',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Riconosce il singolo dispositivo che interagisce con il messenger, per la prevenzione degli abusi',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Riconosce l\'utente finale che avvia la conversazione',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Riconosce il dominio o il sottodominio in cui è integrato il widget di chat',
    'Erkennt wiederkehrende Besucher'
        => 'Riconosce i visitatori di ritorno',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Rileva se il browser è stato riavviato',
    'Erkennung von Klickbetrug'
        => 'Rilevamento delle frodi sui clic',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Rileva gli accessi univoci al sito (account dal 14/06/2026)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Rileva gli accessi univoci al sito (account precedenti al 14/06/2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Consentire a terzi di installare cookie nel browser di questi utenti',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Consente l\'utilizzo dell\'accesso di accessibilità',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Consente funzioni aggiuntive del sito.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Identificatore di prima parte che riconosce i visitatori e associa gli eventi al sito',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Identificatore di prima parte del visitatore per il monitoraggio delle conversioni e il remarketing',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Identificatore di sessione di prima parte per l\'associazione degli eventi',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Identificatore di sessione di prima parte per ciascun pixel ai fini della misurazione delle campagne',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Identificatore di sessione di prima parte per la misurazione delle campagne',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Identificatore pubblicitario di prima parte per la misurazione delle campagne e la personalizzazione su TikTok',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Cookie di prima parte che raggruppa le azioni dei visitatori che Pinterest non è in grado di associare',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Cookie di prima parte che memorizza i dati dei clienti sottoposti ad hash raccolti tramite Automatic Enhanced Match',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Genera un identificatore univoco per ogni visitatore (account dal 14/06/2026)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Genera un identificatore univoco per ogni visitatore (account precedenti al 14/06/2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identificatore del dispositivo per l\'analisi degli eventi sulle pagine con widget',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Impostato all\'accesso su una pagina ospitata da HubSpot',
    'Gewaehlte Sprache speichern'
        => 'Memorizzare la lingua selezionata',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Sincronizza l\'identificatore MUID tra i domini Microsoft; secondo il fornitore, cookie di terze parti',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Mantiene i messaggi sincronizzati tra più schede',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Conserva il valore del parametro pk_campaign',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Conserva il valore del parametro utm_campaign',
    'Haelt den Widerspruch gegen die Messung'
        => 'Conserva l\'opposizione alla misurazione',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Conserva il tempo di scadenza di _uetsid',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Conserva il tempo di scadenza di _uetvid',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Conserva il tipo di sorgente di traffico per il Tag Manager',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Registra l\'identità del visitatore, anche ai fini della deduplicazione dei contatti',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Registra la decisione del visitatore sui cookie',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Mantiene coerente la visualizzazione del widget al cambio di pagina',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Registra la pagina di ingresso; analisi',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Conserva il consenso alla misurazione mediante cookie',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Conserva la decisione dell\'utente su categorie e fornitori',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Conserva la sessione degli utenti autenticati e l\'accesso alle conversazioni precedenti',
    'Haelt die verweisende Adresse'
        => 'Conserva l\'indirizzo di provenienza',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Registra la sorgente di provenienza; analisi',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Conserva variabili personalizzate della sessione (contrassegnato come obsoleto dal fornitore)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Registra se etracker può installare cookie; viene impostato tramite una chiamata API in caso di data-block-cookies',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Registra quali interruttori di funzione ha attivato il proprietario del video',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Cookie principale per il riconoscimento dei visitatori',
    'Heatmaps'
        => 'Mappe di calore',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Mappe di calore dei clic e del comportamento di scorrimento',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Conserva i dati di sessione delle mappe di calore per la durata della visita',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Conserva informazioni sulla sessione in corso (account dal 14/06/2026)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Conserva informazioni sulla sessione in corso (account precedenti al 14/06/2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Conserva variabili personalizzate per la durata della visita',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Conserva dati permanenti a livello di visitatore (account dal 14/06/2026)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Conserva dati permanenti a livello di visitatore per l\'analisi Insights (account precedenti al 14/06/2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Registra lo stato del consenso del visitatore (account dal 14/06/2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Registra lo stato del consenso del visitatore (account precedenti al 14/06/2026)',
    'Hält den Sitzungszustand.'
        => 'Conserva lo stato della sessione.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Conserva l\'identificatore utente di Clarity e le impostazioni per questo sito',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Conserva l\'assegnazione della variante per i test A/B',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Registra temporaneamente la combinazione selezionata (account dal 14/06/2026)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Registra temporaneamente la combinazione selezionata (account precedenti al 14/06/2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Registra la variante selezionata prima che avvenga il reindirizzamento (account dal 14/06/2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Registra la variante selezionata prima che avvenga il reindirizzamento (account precedenti al 14/06/2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Registra tramite quale referrer è avvenuta la visita',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'In modalità Pre-Clearance: autorizzazione per ulteriori verifiche WAF della stessa zona',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Identificativo indiretto del membro per il tracciamento delle conversioni, il retargeting e l\'analisi',
    'Inhalt des Warenkorbs; notwendig'
        => 'Contenuto del carrello; necessario',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Dati di analisi relativi all\'acquirente nel negozio; analisi',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Identificativo univoco legato alla campagna (account dal 14/06/2026)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Identificativo del primo contatto con Clarity su tutti i siti che utilizzano Clarity; secondo il fornitore, cookie di terze parti',
    'Kennzeichnet die laufende Sitzung'
        => 'Contrassegna la sessione in corso',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Conservare i dati del commento per i commenti successivi',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Erogazione coerente delle varianti dei test A/B',
    'Lastverteilung und Routing'
        => 'Bilanciamento del carico e instradamento',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Bilanciamento del carico e instradamento delle richieste di challenge',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Memorizza localmente le impostazioni dell\'account del visitatore',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Fornisce la stessa variante di una pagina sottoposta a test A/B',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Chat dal vivo e canale di messaggistica per l\'assistenza sul sito',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Chat dal vivo e casella di assistenza sul sito',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Dati di marketing delle interfacce di acquisto; marketing',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Dati di marketing per le interfacce di acquisto',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Memorizzazione delle impostazioni del lettore scelte dallo spettatore (volume, qualità, sottotitoli)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Memorizzazione dello stato e delle impostazioni del widget',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Registra la chiusura del banner Global Privacy Control',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Registra la chiusura del banner informativo',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Registra il momento dell\'allineamento con il cookie lms_analytics',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Registra il momento dell\'ultimo allineamento degli identificativi, affinché non venga ripetuto',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Registra la variante assegnata (account dal 14/06/2026)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Registra la variante assegnata affinché resti la stessa in caso di nuova visita (account precedenti al 14/06/2026)',
    'Merkt einen Rabattcode; notwendig'
        => 'Registra un codice sconto; necessario',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Registra un\'opposizione alla misurazione (account dal 14/06/2026)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Registra un\'opposizione valida per più siti (account precedenti al 14/06/2026)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Memorizza le impostazioni del lettore come volume, qualità e sottotitoli',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Memorizza l\'impostazione delle notifiche sonore',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Memorizza un consenso prestato alla misurazione',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Memorizza un\'opposizione alla misurazione',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Memorizza i messaggi proattivi che sono stati chiusi',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Memorizza che il visitatore ha chiuso l\'etichetta del pulsante di avvio',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Memorizza se il widget è aperto o chiuso',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Registra che il visitatore non deve partecipare ad alcuna campagna (account precedenti al 14/06/2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Registra che il visitatore è escluso dalla campagna (account dal 14/06/2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Registra che il visitatore è escluso dalla campagna (account precedenti al 14/06/2026)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Registra che l\'avviso sul consenso è stato chiuso',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Registra che l\'avviso del negozio è stato chiuso',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Registra che la domanda sui cookie non deve essere riproposta',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Registra che un tag è già stato attivato',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Registra se per questo visitatore viene misurata la profondità di scorrimento',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Registra se la finestra di chat è aperta',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Registra se l\'identificativo MUID viene trasferito a un identificativo pubblicitario; secondo il fornitore sempre 0, cookie di terze parti',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Misurazione di aperture e clic nelle campagne e-mail',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Misurazione di sessioni ed eventi sulle pagine con widget',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Misurazione delle sessioni e attribuzione della fonte della visita',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Misurazione della disponibilità del servizio da parte di Google',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Misurazione del tempo di caricamento e degli indicatori principali della pagina (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Misurazione della profondità di scorrimento e degli eventi di clic',
    'Messung der Werbewirkung'
        => 'Misurazione dell\'efficacia pubblicitaria',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Misurazione del comportamento di utilizzo sul sito',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Misurazione e personalizzazione degli annunci nella rete pubblicitaria TikTok Pangle',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Misurazione e miglioramento del rendimento delle campagne pubblicitarie',
    'Messung von Auslieferungen und Klicks'
        => 'Misurazione delle erogazioni e dei clic',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Misurazione di visitatori e sessioni a fini di analisi',
    'Messung von Conversions'
        => 'Misurazione delle conversioni',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Misurazione di visualizzazioni di pagina e visite',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Misurazione di visualizzazioni di pagina ed eventi',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Misurazione delle visualizzazioni di pagina e del comportamento di utilizzo',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Misurazione di visualizzazioni di pagina ed eventi personalizzati',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Misurazione di visualizzazioni di pagina, visite e sessioni',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Misurazione di visualizzazioni di pagina, visite e sessioni sul proprio server',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Misurazione delle campagne pubblicitarie e delle conversioni sul sito',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Misurazione degli obiettivi e delle conversioni di una campagna',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Caricamento di riquadri della mappa, caratteri e stili dal fornitore',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Precompilare il nome dal modulo dei commenti',
    'Nutzer-ID'
        => 'ID utente',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Assegna il carrello al paese corretto; necessario',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Assegna il carrello alla cliente corretta nel database',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Associa le azioni di una visita a una sessione',
    'Personalisierung der Werbung auf TikTok'
        => 'Personalizzazione della pubblicità su TikTok',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Verificare se WordPress può installare cookie',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Verifica se il browser supporta i cookie; necessario',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Verifica se WordPress può installare cookie',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Valore di controllo della password del negozio; necessario',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Cookie di controllo del fornitore (account precedenti al 14/06/2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Verifica se il browser accetta i cookie (account dal 14/06/2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Verifica se il browser accetta i cookie (account precedenti al 14/06/2026)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Verifica se il browser accetta i cookie (secondo il fornitore, solo in Internet Explorer)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Limitazione della frequenza delle richieste presso il fornitore CDN di HubSpot',
    'Reichweiten- und Nutzungsmessung'
        => 'Misurazione dell\'audience e dell\'utilizzo',
    'Reichweitenmessung'
        => 'Misurazione dell\'audience',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Misurazione dell\'audience dei video incorporati da parte di Vimeo',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Misurazione dell\'audience per il gestore del negozio',
    'Remarketing und Zielgruppenbildung'
        => 'Remarketing e creazione di audience',
    'Retargeting'
        => 'Retargeting',
    'Retargeting von Website-Besuchern'
        => 'Retargeting dei visitatori del sito',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Analisi del rischio per distinguere tra persona e bot',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Cookie di raccolta che, secondo il fornitore, viene creato solo nel browser Safari (account dal 14/06/2026)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Cookie di raccolta che, secondo il fornitore, viene creato solo nel browser Safari (account precedenti al 14/06/2026)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Raccolta di informazioni sul comportamento di navigazione di questi utenti da parte di Spotify e di terzi',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Interruttore che il gestore del sito imposta autonomamente per impedire il tracciamento di Klaviyo',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Protezione dell\'accesso dei membri dalla falsificazione',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Protezione dei moduli dall\'uso improprio automatizzato',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Protezione dalle richieste automatizzate (spam, credential stuffing)',
    'Sicherheit'
        => 'Sicurezza',
    'Sicherheitsfunktionen'
        => 'Funzioni di sicurezza',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Funzioni di sicurezza quando la funzione opzionale User Journeys è attiva',
    'Sitzung'
        => 'Sessione',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Attribuzione della sessione e della lingua o del paese',
    'Sitzungsaufzeichnung'
        => 'Registrazione della sessione',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identificativo di sessione per l\'analisi degli eventi sulle pagine con widget',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Identificativo di sessione per le statistiche del negozio; analisi',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Chiave di sessione del servizio Answer Bot',
    'Sitzungswiedergabe'
        => 'Riproduzione della sessione',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Memorizza il token di autenticazione dopo l\'accesso',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Memorizza la password codificata dei video protetti da password',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Memorizza la chiave della lingua scelta',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Memorizza la preferenza sulla privacy del visitatore; necessario',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Memorizza la decisione di consenso del visitatore',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Memorizza l\'identificativo del dispositivo del visitatore per l\'autenticazione nel widget di chat',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Memorizza l\'identificativo di un utente iscritto a un webinar',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Memorizza l\'identificativo di clic fbclid, affinché un evento del sito possa essere attribuito a un annuncio',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Memorizza l\'identificativo utente proveniente da un modulo di registrazione anteposto al video',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Memorizza l\'identificativo di clic di TikTok per l\'attribuzione delle conversioni',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Memorizza l\'ID univoco del visitatore per il riconoscimento',
    'Speichert die zugestimmten Kategorien'
        => 'Memorizza le categorie per le quali è stato dato il consenso',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Alimenta il widget dei prodotti visualizzati di recente',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Determina se l\'identificativo MUID viene rinnovato; secondo il fornitore, cookie di terze parti',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Tecnicamente necessario per il funzionamento e la sicurezza del sito.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Contiene i dati di sessione e di checkout del negozio; classificato dal fornitore come necessario',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Contiene la funzione di opposizione (opt-out)',
    'Transaktionssicherheit'
        => 'Sicurezza delle transazioni',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Contiene l\'analisi del rischio di reCAPTCHA.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Trasmissione degli eventi del sito a TikTok',
    'Umfragen'
        => 'Sondaggi',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Impedisce la trasmissione di dati a HubSpot',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Sopprime il messaggio di benvenuto della chat dopo la chiusura',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Distingue i browser che visitano pagine Microsoft; con il consenso, anche per la pubblicità',
    'Unterscheidet einzelne Nutzer.'
        => 'Distingue i singoli utenti.',
    'Unterscheidung einzelner Nutzer'
        => 'Distinzione dei singoli utenti',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Distinzione tra essere umano e bot nei moduli e negli accessi',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Collega più visualizzazioni di pagina in un\'unica registrazione della sessione',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Impedisce la visualizzazione continua del banner in modalità rigorosa',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Distribuzione dei segnali di consenso ai tag di Google',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Gestione della decisione di consenso per i tag configurati nel contenitore',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Gestione dell\'opposizione alla misurazione',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Gestione dell\'opposizione e del consenso per la misurazione',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Attribuito da Google alle categorie Analisi e Pubblicità.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Assegnato da Google alle categorie Analisi, Pubblicità e Sicurezza.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Attribuito da Google alle categorie Funzionalità, Pubblicità e Sicurezza.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Assegnato da Google alle categorie Sicurezza e Funzionalità.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Assegnato da Google alle categorie Sicurezza e Pubblicità.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Assegnato da Google alle categorie Sicurezza, Analisi, Funzionalità e Pubblicità.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Attribuito da Google alle categorie Sicurezza, Funzionalità e Pubblicità.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Assegnato da Google alle categorie Pubblicità e Sicurezza.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Assegnato da Google alla categoria Analisi; Google non indica una finalità più precisa.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Assegnato da Google alla categoria Funzionalità.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Assegnato da Google alla categoria Sicurezza.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Assegnato da Google alla categoria Pubblicità.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Indicato da Microsoft tra i cookie che non possono essere installati senza consenso; Microsoft non fornisce una propria descrizione della finalità',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Identificativo generato da Vimeo per la misurazione dell\'audience',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Valuta del carrello dopo il completamento del checkout; necessario',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Attribuzione probabilistica di un browser a una persona',
    'Warenkorb einer Besucherin zuordnen'
        => 'Assegnare il carrello a una visitatrice',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Precompilare l\'indirizzo del sito web dal modulo dei commenti',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Riconoscimento dello spettatore a fini pubblicitari',
    'Werbepersonalisierung'
        => 'Personalizzazione della pubblicità',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Come _pin_unauth, ma come cookie di terze parti',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Riconoscimento del visitatore all\'interno del processo di prenotazione',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Riconoscimento del visitatore tra visualizzazioni di pagina e schede',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Riconoscimento e identificazione dei visitatori del sito',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Riconoscimento dei visitatori nell\'arco di più visite',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Riconoscimento dei visitatori di siti collegati a fini di retargeting',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Riconoscimento dei visitatori ricorrenti e attribuzione delle conversazioni precedenti',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Riconoscimento del visitatore e memorizzazione delle sue caratteristiche',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Riconoscimento del browser tramite l\'identificativo Criteo',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Riconoscimento dell\'utente; solo con il consenso, bloccato per impostazione predefinita',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Riconoscimento di un browser in visite successive previo consenso',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Riconoscimento dei visitatori e attribuzione alle sessioni',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'Riconoscimento dei membri di LinkedIn al di fuori di LinkedIn a fini pubblicitari',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Riconoscimento degli utenti previo consenso',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Riconoscimento dei visitatori di ritorno tramite un ID visitatore',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Viene installato quando un obiettivo di campagna è stato attivato (account dal 14/06/2026)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Viene installato quando un obiettivo di campagna è stato attivato (account precedenti al 14/06/2026)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Viene installato quando una persona visita un sito in cui è integrato il tag di Pinterest',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Viene installato quando un\'attribuzione riesce senza cookie esistenti, ad esempio tramite Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Viene installato dal tag JavaScript a partire dai dati che Pinterest trasmette con il traffico proveniente dalla pubblicità',
    'Zaehlt und begrenzt Sitzungen'
        => 'Conta e limita le sessioni',
    'Zahlungsabwicklung'
        => 'Gestione dei pagamenti',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Indica se la sessione è ancora in corso o se è nuova',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Indica all\'interfaccia che l\'accesso è stato effettuato e con quale identità',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Identificativo casuale del browser che attribuisce a un browser gli eventi del pixel di un sito',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Mostrare i prodotti visualizzati di recente nel widget corrispondente',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Attribuzione del comportamento sul sito a un profilo',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Attribuzione dell\'origine di una visita (referrer, attribuzione)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Attribuzione di un visitatore a un contatto dell\'account Brevo tramite l\'indirizzo e-mail',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Attribuzione di transazioni come lead e vendite a un publisher',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Attribuzione delle azioni sul sito ad annunci visti in precedenza',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Unione di più visualizzazioni di pagina in un\'unica sessione',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Dati aggiuntivi sugli eventi rilevati del percorso di visita',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Assegnazione e mantenimento di una variante nell\'arco di più visite',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Memoria temporanea per gli eventi basati su selettori CSS',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Memoria temporanea per i dati del messenger e del visitatore nella memoria del browser',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Memoria temporanea per le voci del Tag Manager',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Memoria temporanea per la misurazione della profondità di scorrimento',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Memoria temporanea per le variabili del Tag Manager',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Memoria temporanea per le impostazioni del widget, per evitare richieste ripetute al server',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Memorizzazione temporanea dei dati del messenger e del visitatore nel browser',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Conta le sessioni create per un visitatore (account dal 14/06/2026)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Conta quante volte il browser è stato chiuso e riaperto durante la misurazione (account precedenti al 14/06/2026)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Conteggio di visualizzazioni di pagina e visite',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'analisi automatizzate del comportamento degli utenti',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'attribuzione geografica approssimativa a paese, regione e città',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'facoltativamente registrazione della sessione (Session Replay), per impostazione predefinita con testi, immagini e input mascherati',
    'optional Heatmaps und A/B-Tests'
        => 'facoltativamente mappe di calore e test A/B',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Trasmette la fonte di provenienza nei test Split URL (account dal 14/06/2026)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Trasmette la fonte di provenienza nei test Split URL (account precedenti al 14/06/2026)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Attribuzione di transazioni come lead e vendite a un publisher, Misurazione del rendimento di un annuncio pubblicitario e conteggio della commissione',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Rilevazione di visitatori e visualizzazioni di pagina sul sito per la marketing automation, Attribuzione di un visitatore a un contatto dell\'account Brevo tramite l\'indirizzo e-mail, Raccolta di eventi personalizzati definiti dal gestore',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Visualizzazione del calendario di prenotazione e fissazione di appuntamenti sul sito, Riconoscimento del visitatore all\'interno del processo di prenotazione, Gestione dei pagamenti quando l\'appuntamento è a pagamento',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Rilevamento e blocco degli accessi automatizzati ai moduli, Emissione di un token che il server del sito verifica, In modalità Pre-Clearance: autorizzazione per ulteriori verifiche WAF della stessa zona',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Misurazione di visualizzazioni di pagina e visite, Misurazione del tempo di caricamento e degli indicatori principali della pagina (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Diffusione di pubblicità personalizzata, Misurazione dell\'efficacia pubblicitaria, Riconoscimento del browser tramite l\'identificativo Criteo',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Misurazione del comportamento di utilizzo sul sito, Creazione di profili di utilizzo pseudonimi previo consenso, Riconoscimento di un browser in visite successive previo consenso',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Misurazione delle visualizzazioni di pagina e del comportamento di utilizzo, Misurazione della profondità di scorrimento e degli eventi di clic, Riconoscimento degli utenti previo consenso, Gestione dell\'opposizione alla misurazione',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Distinzione tra essere umano e bot nei moduli e negli accessi, Protezione dalle richieste automatizzate (spam, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Misurazione delle conversioni, Remarketing e creazione di audience, Limitazione della frequenza di visualizzazione, Rilevamento delle frodi sui clic',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Distribuzione di annunci, Limitazione della frequenza di visualizzazione, Rilevamento di frodi e abusi, Misurazione delle erogazioni e dei clic',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Distinzione dei singoli utenti, Mantenimento dello stato della sessione, Misurazione dell\'audience e dell\'utilizzo',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Visualizzazione di una mappa interattiva, Misurazione della disponibilità del servizio da parte di Google',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Analisi del rischio per distinguere tra persona e bot, Protezione dei moduli dall\'uso improprio automatizzato',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Distribuzione e gestione dei tag sul sito, Distribuzione dei segnali di consenso ai tag di Google',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Distinzione tra essere umano e bot nei moduli e negli accessi, Bilanciamento del carico e instradamento delle richieste di challenge, Messa a disposizione dell\'accesso di accessibilità',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Mappe di calore, Registrazione della sessione, Sondaggi',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Riconoscimento dei visitatori nell\'arco di più visite, Misurazione delle sessioni e attribuzione della fonte della visita, Deduplicazione dei contatti, Funzionamento del widget di chat, Erogazione coerente delle varianti dei test A/B',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Chat dal vivo e casella di assistenza sul sito, Riconoscimento dei visitatori ricorrenti e attribuzione delle conversazioni precedenti, Riconoscimento del dispositivo per la prevenzione degli abusi, Memorizzazione temporanea dei dati del messenger e del visitatore nel browser',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Visualizzazione di avvisi di finanziamento e pagamento rateale sulle pagine prodotto e carrello (On-site Messaging), Distribuzione dei contenuti dell\'avviso in segnaposto predisposti nel codice sorgente della pagina tramite un ad server',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Riconoscimento e identificazione dei visitatori del sito, Attribuzione del comportamento sul sito a un profilo, Gestione della visualizzazione dei moduli di iscrizione sul sito',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Monitoraggio delle conversioni delle campagne pubblicitarie LinkedIn, Retargeting dei visitatori del sito, Analisi del pubblico del sito (dati demografici del sito)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Riconoscimento dei visitatori di siti collegati a fini di retargeting, Gestione dei moduli pop-up affinché non compaiano ripetutamente, Misurazione di aperture e clic nelle campagne e-mail, Integrazione di pixel pubblicitari di Google e Facebook sul sito collegato',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Visualizzazione di mappe interattive sul sito, Caricamento di riquadri della mappa, caratteri e stili dal fornitore, Fatturazione e protezione delle chiamate alle mappe',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Misurazione di visualizzazioni di pagina, visite e sessioni, Riconoscimento dei visitatori di ritorno tramite un ID visitatore, Attribuzione dell\'origine di una visita (referrer, attribuzione), facoltativamente mappe di calore e test A/B',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Misurazione di visualizzazioni di pagina, visite e sessioni sul proprio server, Riconoscimento dei visitatori di ritorno tramite un ID visitatore, Attribuzione dell\'origine di una visita (referrer, attribuzione), facoltativamente mappe di calore e test A/B',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Distribuzione e attivazione dei tag sul sito, Gestione della decisione di consenso per i tag configurati nel contenitore',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Misurazione delle campagne pubblicitarie e delle conversioni sul sito, Creazione di segmenti di pubblico e retargeting',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Monitoraggio delle conversioni delle campagne Microsoft Advertising, Creazione di elenchi di remarketing, Misurazione di visualizzazioni di pagina ed eventi personalizzati',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Registrazione e riproduzione delle sessioni, Mappe di calore dei clic e del comportamento di scorrimento, Unione di più visualizzazioni di pagina in un\'unica sessione, analisi automatizzate del comportamento degli utenti',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Gestione di un pagamento avviato dal visitatore, Incorporamento dei campi della carta nel proprio checkout, affinché i dati della carta non transitino attraverso il negozio, Prevenzione delle frodi e obblighi di legge in quanto prestatore di servizi di pagamento',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Registrazione dei movimenti del mouse, Riproduzione della sessione, Analisi del comportamento di utilizzo',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Distribuzione di tessere cartografiche alle mappe incorporate, Funzionamento e prevenzione degli abusi dei servizi cartografici',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Gestione dei pagamenti, Prevenzione delle frodi',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Monitoraggio delle conversioni delle campagne pubblicitarie Pinterest, Creazione di segmenti di pubblico e retargeting, Attribuzione delle azioni sul sito ad annunci visti in precedenza',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Misurazione di visualizzazioni di pagina ed eventi, Riconoscimento dei visitatori e attribuzione alle sessioni, Analisi della provenienza e delle campagne, Analisi del dispositivo, del browser e della posizione stimata, Analisi dell\'e-commerce e degli obiettivi',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Conteggio di visualizzazioni di pagina e visite, Analisi delle sorgenti di provenienza, Analisi di browser, sistema operativo e tipo di dispositivo, attribuzione geografica approssimativa a paese, regione e città',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Raccolta e trasmissione degli errori dell\'applicazione dal browser, facoltativamente registrazione della sessione (Session Replay), per impostazione predefinita con testi, immagini e input mascherati',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Funzionamento del carrello e della procedura di pagamento di un negozio, Attribuzione della sessione e della lingua o del paese, Misurazione dell\'audience per il gestore del negozio, Dati di marketing per le interfacce di acquisto',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Incorporamento e riproduzione di brani, album, playlist ed episodi di podcast, Raccolta di informazioni sul comportamento di navigazione di questi utenti da parte di Spotify e di terzi, Consentire a terzi di installare cookie nel browser di questi utenti',
    'Besucherzählung, Reichweitenmessung'
        => 'Conteggio dei visitatori, Misurazione dell\'audience',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Rilevamento delle frodi e valutazione del rischio dei tentativi di pagamento, Messa a disposizione dei campi di pagamento di Stripe Elements, Rilevamento di bot e comportamenti automatizzati nella procedura d\'ordine',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Misurazione e miglioramento del rendimento delle campagne pubblicitarie, Personalizzazione della pubblicità su TikTok, Trasmissione degli eventi del sito a TikTok',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Incorporamento di moduli e sondaggi nel sito, Raccolta e trasmissione delle risposte al gestore del modulo',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Incorporamento e riproduzione di video sul sito, Memorizzazione delle impostazioni del lettore scelte dallo spettatore (volume, qualità, sottotitoli), Misurazione dell\'audience dei video incorporati da parte di Vimeo, Protezione del player da bot e abusi',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Test A/B e test Split-URL sul sito, Assegnazione e mantenimento di una variante nell\'arco di più visite, Misurazione degli obiettivi e delle conversioni di una campagna, Misurazione di visitatori e sessioni a fini di analisi, Gestione dell\'opposizione e del consenso per la misurazione',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Assegnare il carrello a una visitatrice, Rilevare se il contenuto del carrello è cambiato, Mostrare i prodotti visualizzati di recente nel widget corrispondente, Memorizzare che l\'avviso del negozio è stato nascosto',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Accesso e riconoscimento della sessione nell\'area di amministrazione, Conservare i dati del commento per i commenti successivi, Memorizzare le impostazioni di visualizzazione dell\'area di amministrazione, Verificare se WordPress può installare cookie, Memorizzare la lingua selezionata',
    'Conversion-Messung, Retargeting'
        => 'Misurazione delle conversioni, Retargeting',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Riproduzione di video incorporati, Sicurezza, Riconoscimento dello spettatore a fini pubblicitari',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Chat dal vivo e canale di messaggistica per l\'assistenza sul sito, Riconoscimento del visitatore tra visualizzazioni di pagina e schede, Memorizzazione dello stato e delle impostazioni del widget, Misurazione di sessioni ed eventi sulle pagine con widget',
];
