<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Rumaenisch.
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
        => 'Teste A/B și teste Split-URL pe site',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Facturarea și securizarea apelurilor către hartă',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Finalizarea autentificării cu Shop; necesar',
    'Abspielen eingebetteter Videos'
        => 'Redarea videoclipurilor încorporate',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Procesarea unei plăți inițiate de vizitator',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Procesarea plăților atunci când programarea este contra cost',
    'Analyse des Nutzungsverhaltens'
        => 'Analiza comportamentului de utilizare',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Date de analiză ale interfețelor de cumpărare; analiză',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Date de analiză ale magazinului; clasificat de furnizor drept analiză',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Date de autentificare pentru zona de administrare de la /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Autentificare la Shop Pay; necesar',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Autentificare și recunoașterea sesiunii în zona de administrare',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Statistici anonime referitoare la serviciu și alte scopuri tehnice, între care sprijinirea accesibilității',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Setările de afișare ale zonei de administrare pentru fiecare cont',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Memorarea setărilor de afișare ale zonei de administrare',
    'Anzeige von Bewertungen'
        => 'Afișarea recenziilor',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Afișarea calendarului de rezervări și stabilirea de programări pe site',
    'Anzeigen einer interaktiven Karte'
        => 'Afișarea unei hărți interactive',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'Setat la valoarea 1, împiedică trimiterea evenimentelor UET către Microsoft',
    'Aufbau von Remarketing-Listen'
        => 'Constituirea listelor de remarketing',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Înregistrarea și redarea sesiunilor',
    'Aufzeichnung von Mausbewegungen'
        => 'Înregistrarea mișcărilor mouse-ului',
    'Ausblenden des Shop-Hinweises merken'
        => 'Memorarea ascunderii notificării magazinului',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Livrarea și declanșarea tagurilor pe site',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Livrarea și gestionarea tagurilor pe site',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Livrarea dalelor de hartă către hărțile încorporate',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Livrarea conținuturilor notificării în substituenți pregătiți în codul sursă al paginii, prin intermediul unui ad server',
    'Auslieferung personalisierter Werbung'
        => 'Difuzarea de publicitate personalizată',
    'Auslieferung von Anzeigen'
        => 'Difuzarea anunțurilor',
    'Auslieferung von Bibliotheken und Assets'
        => 'Livrarea bibliotecilor și a resurselor',
    'Auslieferung von Schriftarten'
        => 'Livrarea fonturilor',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Emiterea unui token pe care serverul site-ului îl verifică',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Controlul afișării formularelor de înscriere pe site',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Controlul formularelor pop-up, astfel încât să nu apară în mod repetat',
    'Auswahl des Rechenzentrums'
        => 'Selectarea centrului de date',
    'Auswertung der Verweisquellen'
        => 'Analiza surselor de trafic de referință',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Analiza audienței site-ului (date demografice ale site-ului)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Analiza browserului, a sistemului de operare și a tipului de dispozitiv',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Analiza dispozitivului, a browserului și a locației estimate',
    'Auswertung von Herkunft und Kampagnen'
        => 'Analiza provenienței și a campaniilor',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Autentifică solicitările utilizatorului final',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Limitarea frecvenței de afișare',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Atestă o verificare trecută, astfel încât alte challenge-uri ale zonei să nu mai fie necesare',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Punerea la dispoziție a câmpurilor de plată Stripe Elements',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Punerea la dispoziție a accesului pentru accesibilitate',
    'Besucherzählung'
        => 'Numărarea vizitatorilor',
    'Betrieb des Chat-Widgets'
        => 'Funcționarea widgetului de chat',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Funcționarea și prevenirea abuzurilor serviciilor de hărți',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Funcționarea coșului și a procesului de plată al unui magazin',
    'Betrugs- und Missbrauchserkennung'
        => 'Detectarea fraudei și a abuzurilor',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Detectarea fraudei la tentativa de plată',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Detectarea fraudei și evaluarea riscului tentativelor de plată',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Prevenirea fraudei și obligațiile legale în calitate de prestator de servicii de plată',
    'Betrugsprävention'
        => 'Prevenirea fraudei',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Prevenirea fraudei și evaluarea riscului unei tentative de plată',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Crearea de profiluri de utilizare pseudonimizate după acordarea consimțământului',
    'Bildung von Zielgruppen und Retargeting'
        => 'Crearea de audiențe și retargeting',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Leagă sesiunea de aceeași instanță AWS',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Protecția playerului împotriva boților și a abuzurilor',
    'Bot-Abwehr fuer den Player'
        => 'Protecția playerului împotriva boților',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Protecția împotriva boților la livrarea resurselor HubSpot',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Identificator de browser cu care LinkedIn diferențiază dispozitivele și detectează abuzurile',
    'Cloudflare-Bot-Abwehr'
        => 'Protecția anti-bot Cloudflare',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Detectarea boților de către Cloudflare pentru filtrarea traficului',
    'Cloudflare-Ratenbegrenzung'
        => 'Limitarea ratei de solicitări de către Cloudflare',
    'Conversion-Messung'
        => 'Măsurarea conversiilor',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Urmărirea conversiilor pentru campaniile publicitare LinkedIn',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Urmărirea conversiilor pentru campaniile Microsoft Advertising',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Urmărirea conversiilor pentru campaniile publicitare Pinterest',
    'Darstellung interaktiver Karten auf der Website'
        => 'Afișarea hărților interactive pe site',
    'Deduplizieren von Kontakten'
        => 'Deduplicarea contactelor',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Servește la difuzarea și măsurarea publicității.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'ID de vizitator între domenii; potrivit furnizorului, cookie terț, utilizat numai dacă în fișierul de configurare sunt activate cookie-urile terțe',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Identificator terț pentru recunoașterea vizitatorilor',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Identificator terț care este transmis către Klaviyo',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Identificator publicitar terț pentru măsurarea campaniilor și personalizarea pe TikTok',
    'E-Commerce- und Zielauswertung'
        => 'Analiza comerțului electronic și a obiectivelor',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Precompletarea adresei de e-mail din formularul de comentarii',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Încorporarea și redarea pieselor, albumelor, listelor de redare și episoadelor de podcast',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Încorporarea și redarea videoclipurilor pe site',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Încorporarea formularelor și a sondajelor în site',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Încorporarea câmpurilor cardului în propriul proces de finalizare a comenzii, astfel încât datele cardului să nu treacă prin magazin',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Încorporarea unei declarații privind cookie-urile întreținute extern',
    'Einbettung von Audioinhalten'
        => 'Încorporarea conținuturilor audio',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Integrarea pixelilor publicitari de la Google și Facebook pe site-ul conectat',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Afișarea mențiunilor privind finanțarea și plata în rate pe paginile de produs și de coș (On-site Messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Identificator unic la măsurarea între domenii (conturi începând cu 14.06.2026)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Identificator unic la măsurarea între domenii (conturi anterioare datei de 14.06.2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Valoare de unică folosință împotriva CSRF la formularul de opt-out',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Conține un identificator de utilizator și momentul creării; potrivit sursei, este setat în browserul din aplicația Pinterest, nu pe domeniul site-ului',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Colectarea și transmiterea răspunsurilor către operatorul formularului',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Înregistrează utilizarea site-ului în scopuri de analiză.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Colectarea evenimentelor proprii, definite de operator',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Colectarea și transmiterea erorilor aplicației din browser',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Colectarea vizitatorilor și a afișărilor de pagină pe site pentru automatizarea de marketing',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Măsurarea performanței unui material publicitar și decontarea comisionului',
    'Erhalt des Sitzungszustands'
        => 'Menținerea stării sesiunii',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Recunoașterea dispozitivului pentru prevenirea abuzurilor',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Detectarea și respingerea accesărilor automatizate la formulare',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Detectarea boților și a comportamentului automatizat în procesul de comandă',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Detectarea dacă s-a modificat conținutul coșului',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Detectează modificările conținutului coșului',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Recunoaște vizitatorii site-ului pe care este integrat codul Intercom',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Recunoaște browserele pe site-urile Microsoft; potrivit furnizorului, este utilizat și pentru publicitate, cookie terț',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Recunoaște persoanele care scriu prin instrumentul de chat',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Recunoaște dispozitivul de la care pornește conversația',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Recunoaște dispozitivul individual care interacționează cu messengerul, pentru prevenirea abuzurilor',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Recunoaște utilizatorul final care începe conversația',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Recunoaște domeniul sau subdomeniul pe care este integrat widgetul de chat',
    'Erkennt wiederkehrende Besucher'
        => 'Recunoaște vizitatorii care revin',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Detectează dacă browserul a fost repornit',
    'Erkennung von Klickbetrug'
        => 'Detectarea fraudei prin clicuri',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Determină accesările unice ale site-ului (conturi începând cu 14.06.2026)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Determină accesările unice ale site-ului (conturi anterioare datei de 14.06.2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Permiterea plasării de cookie-uri de către terți în browserul acestor utilizatori',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Permite utilizarea accesului pentru accesibilitate',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Permite funcții suplimentare ale site-ului.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Identificator propriu care recunoaște vizitatorii și asociază evenimentele site-ului',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Identificator propriu de vizitator pentru urmărirea conversiilor și remarketing',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Identificator propriu de sesiune pentru asocierea evenimentelor',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Identificator propriu de sesiune pentru fiecare pixel, pentru măsurarea campaniilor',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Identificator propriu de sesiune pentru măsurarea campaniilor',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Identificator publicitar propriu pentru măsurarea campaniilor și personalizarea pe TikTok',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Cookie propriu care grupează acțiunile vizitatorilor pe care Pinterest nu îi poate asocia',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Cookie propriu care stochează datele de client sub formă de hash colectate prin Automatic Enhanced Match',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Generează un identificator unic pentru fiecare vizitator (conturi începând cu 14.06.2026)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Generează un identificator unic pentru fiecare vizitator (conturi anterioare datei de 14.06.2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identificator de dispozitiv pentru analiza evenimentelor pe paginile cu widget',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Setat la autentificarea pe o pagină găzduită de HubSpot',
    'Gewaehlte Sprache speichern'
        => 'Memorarea limbii selectate',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Sincronizează identificatorul MUID între domeniile Microsoft; potrivit furnizorului, cookie terț',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Menține mesajele sincronizate între mai multe file',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Păstrează valoarea parametrului pk_campaign',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Păstrează valoarea parametrului utm_campaign',
    'Haelt den Widerspruch gegen die Messung'
        => 'Păstrează opoziția față de măsurare',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Păstrează durata de expirare a _uetsid',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Păstrează durata de expirare a _uetvid',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Păstrează tipul sursei de trafic pentru Tag Manager',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Reține identitatea vizitatorului, inclusiv pentru deduplicarea contactelor',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Reține decizia vizitatorului privind cookie-urile',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Menține consecventă afișarea widgetului la schimbarea paginii',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Reține pagina de intrare; analiză',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Păstrează consimțământul pentru măsurarea cu cookie-uri',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Păstrează decizia utilizatorului privind categoriile și furnizorii',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Păstrează sesiunea utilizatorilor autentificați și accesul la conversațiile anterioare',
    'Haelt die verweisende Adresse'
        => 'Păstrează adresa de referință',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Reține sursa de referință; analiză',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Păstrează variabile proprii ale sesiunii (marcat de furnizor ca fiind depășit)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Reține dacă etracker are voie să seteze cookie-uri; este setat printr-un apel API în cazul data-block-cookies',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Reține ce comutatoare de funcții a activat proprietarul videoclipului',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Cookie principal pentru recunoașterea vizitatorilor',
    'Heatmaps'
        => 'Hărți termice',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Hărți termice ale clicurilor și ale comportamentului de derulare',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Păstrează datele de sesiune pentru hărțile termice pe durata vizitei',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Păstrează informații despre sesiunea în curs (conturi începând cu 14.06.2026)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Păstrează informații despre sesiunea în curs (conturi anterioare datei de 14.06.2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Păstrează variabile personalizate pe durata vizitei',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Păstrează date permanente la nivel de vizitator (conturi începând cu 14.06.2026)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Păstrează date permanente la nivel de vizitator pentru analiza Insights (conturi anterioare datei de 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Reține starea consimțământului vizitatorului (conturi începând cu 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Reține starea consimțământului vizitatorului (conturi anterioare datei de 14.06.2026)',
    'Hält den Sitzungszustand.'
        => 'Păstrează starea sesiunii.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Păstrează identificatorul de utilizator Clarity și setările pentru acest site',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Păstrează atribuirea variantei pentru testele A/B',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Reține temporar combinația selectată (conturi începând cu 14.06.2026)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Reține temporar combinația selectată (conturi anterioare datei de 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Reține varianta selectată înainte de efectuarea redirecționării (conturi începând cu 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Reține varianta selectată înainte de efectuarea redirecționării (conturi anterioare datei de 14.06.2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Reține prin ce referință a avut loc vizita',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'În modul Pre-Clearance: autorizare pentru alte verificări WAF din aceeași zonă',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Identificator indirect de membru pentru urmărirea conversiilor, retargeting și evaluare',
    'Inhalt des Warenkorbs; notwendig'
        => 'Conținutul coșului de cumpărături; necesar',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Date de analiză referitoare la cumpărător în magazin; analiză',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Identificator unic legat de campanie (conturi începând cu 14.06.2026)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Identificatorul primului contact cu Clarity pe toate site-urile care folosesc Clarity; potrivit furnizorului, cookie de la terți',
    'Kennzeichnet die laufende Sitzung'
        => 'Marchează sesiunea în curs',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Păstrarea datelor comentariului pentru comentarii ulterioare',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Livrarea consecventă a variantelor testelor A/B',
    'Lastverteilung und Routing'
        => 'Echilibrarea încărcării și rutarea',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Distribuirea sarcinii și rutarea cererilor de tip challenge',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Stochează local setările de cont ale vizitatorului',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Livrează aceeași variantă a unei pagini cu test A/B',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Chat live și canal de mesagerie pentru asistență pe site',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Chat live și căsuță de asistență pe site',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Date de marketing ale interfețelor de cumpărare; marketing',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Date de marketing pentru interfețele de cumpărare',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Memorarea setărilor playerului alese de spectator (volum, calitate, subtitrări)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Memorarea stării și a setărilor widgetului',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Reține închiderea bannerului Global Privacy Control',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Reține închiderea bannerului informativ',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Reține momentul sincronizării cu cookie-ul lms_analytics',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Reține momentul ultimei sincronizări a identificatorilor, pentru ca aceasta să nu se repete',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Reține varianta atribuită (conturi începând cu 14.06.2026)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Reține varianta atribuită, astfel încât aceasta să rămână aceeași la o nouă vizită (conturi anterioare datei de 14.06.2026)',
    'Merkt einen Rabattcode; notwendig'
        => 'Reține un cod de reducere; necesar',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Reține o opoziție față de măsurare (conturi începând cu 14.06.2026)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Reține o opoziție valabilă pentru mai multe site-uri (conturi anterioare datei de 14.06.2026)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Reține setările playerului, precum volumul, calitatea și subtitrările',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Reține setarea pentru notificările sonore',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Reține un consimțământ acordat pentru măsurare',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Reține o opoziție față de măsurare',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Reține mesajele proactive care au fost închise',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Reține că vizitatorul a închis eticheta butonului de pornire',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Reține dacă widgetul este deschis sau închis',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Reține că vizitatorul nu trebuie să participe la nicio campanie (conturi anterioare datei de 14.06.2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Reține că vizitatorul este exclus din campanie (conturi începând cu 14.06.2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Reține că vizitatorul este exclus din campanie (conturi anterioare datei de 14.06.2026)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Reține că avizul privind consimțământul a fost închis',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Reține că avizul magazinului a fost închis',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Reține că întrebarea privind cookie-urile nu trebuie pusă din nou',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Reține că un tag a fost deja declanșat',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Reține dacă la acest vizitator se măsoară adâncimea de derulare',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Reține dacă fereastra de chat este deschisă',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Reține dacă identificatorul MUID este transmis unui identificator publicitar; potrivit furnizorului, întotdeauna 0, cookie de la terți',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Măsurarea deschiderilor și a clicurilor în campaniile de e-mail',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Măsurarea sesiunilor și a evenimentelor pe paginile cu widget',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Măsurarea sesiunilor și atribuirea sursei vizitei',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Măsurarea disponibilității serviciului de către Google',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Măsurarea timpului de încărcare și a indicatorilor principali ai paginii (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Măsurarea adâncimii de derulare și a evenimentelor de clic',
    'Messung der Werbewirkung'
        => 'Măsurarea eficacității publicitare',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Măsurarea comportamentului de utilizare pe site',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Măsurarea și personalizarea anunțurilor în rețeaua publicitară TikTok Pangle',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Măsurarea și îmbunătățirea performanței campaniilor publicitare',
    'Messung von Auslieferungen und Klicks'
        => 'Măsurarea livrărilor și a clicurilor',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Măsurarea vizitatorilor și a sesiunilor în scopuri de evaluare',
    'Messung von Conversions'
        => 'Măsurarea conversiilor',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Măsurarea afișărilor de pagină și a vizitelor',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Măsurarea afișărilor de pagină și a evenimentelor',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Măsurarea afișărilor de pagină și a comportamentului de utilizare',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Măsurarea afișărilor de pagină și a evenimentelor personalizate',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Măsurarea afișărilor de pagină, a vizitelor și a sesiunilor',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Măsurarea afișărilor de pagină, a vizitelor și a sesiunilor pe serverul propriu',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Măsurarea campaniilor publicitare și a conversiilor pe site',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Măsurarea obiectivelor și a conversiilor unei campanii',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Încărcarea dalelor de hartă, a fonturilor și a stilurilor de la furnizor',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Precompletarea numelui din formularul de comentarii',
    'Nutzer-ID'
        => 'ID de utilizator',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Atribuie coșul de cumpărături țării corecte; necesar',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Atribuie coșul de cumpărături clientei corecte în baza de date',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Asociază acțiunile unei vizite unei sesiuni',
    'Personalisierung der Werbung auf TikTok'
        => 'Personalizarea publicității pe TikTok',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Verificarea posibilității ca WordPress să plaseze cookie-uri',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Verifică dacă browserul suportă cookie-uri; necesar',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Verifică dacă WordPress poate plasa cookie-uri',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Valoare de verificare a parolei magazinului; necesar',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Cookie de verificare al furnizorului (conturi anterioare datei de 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Verifică dacă browserul acceptă cookie-uri (conturi începând cu 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Verifică dacă browserul acceptă cookie-uri (conturi anterioare datei de 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Verifică dacă browserul acceptă cookie-uri (potrivit furnizorului, doar în Internet Explorer)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Limitarea ratei de solicitări la furnizorul CDN al HubSpot',
    'Reichweiten- und Nutzungsmessung'
        => 'Măsurarea audienței și a utilizării',
    'Reichweitenmessung'
        => 'Măsurarea audienței',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Măsurarea audienței videoclipurilor încorporate, efectuată de Vimeo',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Măsurarea audienței pentru operatorul magazinului',
    'Remarketing und Zielgruppenbildung'
        => 'Remarketing și crearea de grupuri-țintă',
    'Retargeting'
        => 'Retargeting',
    'Retargeting von Website-Besuchern'
        => 'Retargetingul vizitatorilor site-ului',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Analiză de risc pentru a distinge între o persoană și un bot',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Cookie colector care, potrivit furnizorului, este creat numai în browserul Safari (conturi începând cu 14.06.2026)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Cookie colector care, potrivit furnizorului, este creat numai în browserul Safari (conturi anterioare datei de 14.06.2026)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Colectarea de informații despre comportamentul de navigare al acestor utilizatori de către Spotify și de către terți',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Comutator pe care operatorul site-ului îl setează el însuși pentru a împiedica urmărirea de către Klaviyo',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Protecția autentificării membrilor împotriva falsificării',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Protecția formularelor împotriva utilizării abuzive automatizate',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Protecție împotriva cererilor automatizate (spam, credential stuffing)',
    'Sicherheit'
        => 'Securitate',
    'Sicherheitsfunktionen'
        => 'Funcții de securitate',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Funcții de securitate atunci când funcția opțională User Journeys este activă',
    'Sitzung'
        => 'Sesiune',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Atribuirea sesiunii și a limbii, respectiv a țării',
    'Sitzungsaufzeichnung'
        => 'Înregistrarea sesiunii',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identificator de sesiune pentru evaluarea evenimentelor pe paginile cu widget',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Identificator de sesiune pentru statistica magazinului; analiză',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Cheia de sesiune a serviciului Answer Bot',
    'Sitzungswiedergabe'
        => 'Redarea sesiunii',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Stochează tokenul de autentificare după conectare',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Stochează parola codificată pentru videoclipurile protejate prin parolă',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Stochează cheia limbii alese',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Stochează preferința de confidențialitate a vizitatorului; necesar',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Stochează decizia de consimțământ a vizitatorului',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Stochează identificatorul dispozitivului vizitatorului pentru autentificarea în widgetul de chat',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Stochează identificatorul unui utilizator înscris la un webinar',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Stochează identificatorul de clic fbclid, pentru ca un eveniment de pe site să poată fi atribuit unui anunț',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Stochează identificatorul de utilizator dintr-un formular de înregistrare afișat înaintea videoclipului',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Stochează identificatorul de clic TikTok pentru atribuirea conversiilor',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Stochează ID-ul unic al vizitatorului pentru recunoaștere',
    'Speichert die zugestimmten Kategorien'
        => 'Stochează categoriile pentru care s-a acordat consimțământul',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Alimentează widgetul cu produsele vizualizate recent',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Stabilește dacă identificatorul MUID este reînnoit; potrivit furnizorului, cookie de la terți',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Necesar din punct de vedere tehnic pentru funcționarea și securitatea site-ului.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Conține datele de sesiune și de finalizare a comenzii ale magazinului; furnizorul îl clasifică drept necesar',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Conține funcția de opoziție (opt-out)',
    'Transaktionssicherheit'
        => 'Securitatea tranzacțiilor',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Conține analiza de risc a reCAPTCHA.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Transmiterea evenimentelor de pe site către TikTok',
    'Umfragen'
        => 'Sondaje',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Împiedică transmiterea datelor către HubSpot',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Suprimă mesajul de bun venit al chatului după închiderea acestuia',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Distinge browserele care accesează pagini Microsoft; cu consimțământ, și pentru publicitate',
    'Unterscheidet einzelne Nutzer.'
        => 'Distinge utilizatorii individuali.',
    'Unterscheidung einzelner Nutzer'
        => 'Distingerea utilizatorilor individuali',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Diferențierea între om și bot la formulare și autentificări',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Leagă mai multe afișări de pagină într-o singură înregistrare a sesiunii',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Împiedică afișarea permanentă a bannerului în modul strict',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Distribuirea semnalelor de consimțământ către tagurile Google',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Gestionarea deciziei de consimțământ pentru tagurile configurate în container',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Gestionarea opoziției față de măsurare',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Gestionarea opoziției și a consimțământului pentru măsurare',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Încadrat de Google în categoriile Analiză și Publicitate.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Încadrat de Google la categoriile Analiză, Publicitate și Securitate.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Încadrat de Google în categoriile Funcționalitate, Publicitate și Securitate.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Încadrat de Google la categoriile Securitate și Funcționalitate.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Încadrat de Google la categoriile Securitate și Publicitate.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Încadrat de Google la categoriile Securitate, Analiză, Funcționalitate și Publicitate.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Încadrat de Google în categoriile Securitate, Funcționalitate și Publicitate.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Încadrat de Google la categoriile Publicitate și Securitate.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Încadrat de Google la categoria Analiză; Google nu indică un scop mai precis.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Încadrat de Google la categoria Funcționalitate.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Încadrat de Google la categoria Securitate.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Încadrat de Google la categoria Publicitate.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Menționat de Microsoft printre cookie-urile care nu pot fi plasate fără consimțământ; Microsoft nu indică o descriere proprie a scopului',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Identificator generat de Vimeo pentru măsurarea audienței',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Moneda coșului de cumpărături după finalizarea comenzii; necesar',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Atribuirea probabilistică a unui browser unei persoane',
    'Warenkorb einer Besucherin zuordnen'
        => 'Atribuirea coșului de cumpărături unei vizitatoare',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Precompletarea adresei site-ului din formularul de comentarii',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Recunoașterea spectatorului în scopuri publicitare',
    'Werbepersonalisierung'
        => 'Personalizarea publicității',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'La fel ca _pin_unauth, dar ca cookie de la terți',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Recunoașterea vizitatorului în cadrul procesului de rezervare',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Recunoașterea vizitatorului între afișările de pagină și file',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Recunoașterea și identificarea vizitatorilor site-ului',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Recunoașterea vizitatorilor de-a lungul mai multor vizite',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Recunoașterea vizitatorilor site-urilor asociate pentru retargeting',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Recunoașterea vizitatorilor recurenți și atribuirea conversațiilor anterioare',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Recunoașterea vizitatorului și stocarea caracteristicilor sale',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Recunoașterea browserului prin identificatorul Criteo',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Recunoașterea utilizatorului; numai cu consimțământ, blocat în mod implicit',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Recunoașterea unui browser la vizite ulterioare, după acordarea consimțământului',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Recunoașterea vizitatorilor și atribuirea la sesiuni',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'Recunoașterea membrilor LinkedIn în afara LinkedIn în scopuri publicitare',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Recunoașterea utilizatorilor după acordarea consimțământului',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Recunoașterea vizitatorilor care revin printr-un ID de vizitator',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Este plasat atunci când un obiectiv de campanie a fost declanșat (conturi începând cu 14.06.2026)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Este plasat atunci când un obiectiv de campanie a fost declanșat (conturi anterioare datei de 14.06.2026)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Este plasat atunci când o persoană vizitează un site pe care este integrat tagul Pinterest',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Este plasat atunci când o atribuire reușește fără cookie-uri existente, de exemplu prin Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Este plasat de tagul JavaScript pe baza datelor pe care Pinterest le transmite odată cu traficul promovat',
    'Zaehlt und begrenzt Sitzungen'
        => 'Numără și limitează sesiunile',
    'Zahlungsabwicklung'
        => 'Procesarea plăților',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Indică dacă sesiunea este încă în curs sau este nouă',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Indică interfeței că utilizatorul este conectat și cu ce identitate',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Identificator aleatoriu de browser care atribuie unui browser evenimentele pixelului unui site',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Afișarea produselor vizualizate recent în widgetul corespunzător',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Atribuirea comportamentului de pe site unui profil',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Atribuirea originii unei vizite (referrer, atribuire)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Atribuirea unui vizitator unui contact din contul Brevo prin adresa de e-mail',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Atribuirea tranzacțiilor precum lead-uri și vânzări unui publisher',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Atribuirea acțiunilor de pe site anunțurilor vizualizate anterior',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Reunirea mai multor afișări de pagină într-o singură sesiune',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Date suplimentare privind evenimentele înregistrate ale parcursului vizitei',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Atribuirea și păstrarea unei variante pe parcursul mai multor vizite',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Memorie temporară pentru evenimentele definite prin selectori CSS',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Memorie temporară pentru datele messengerului și ale vizitatorului în memoria browserului',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Memorie temporară pentru intrările Tag Manager',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Memorie temporară pentru măsurarea adâncimii de derulare',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Memorie temporară pentru variabilele Tag Manager',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Memorie temporară pentru setările widgetului, pentru a evita cereri repetate către server',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Stocarea temporară a datelor messengerului și ale vizitatorului în browser',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Numără sesiunile create pentru un vizitator (conturi începând cu 14.06.2026)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Numără de câte ori a fost închis și redeschis browserul în timpul măsurării (conturi anterioare datei de 14.06.2026)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Numărarea afișărilor de pagină și a vizitelor',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'evaluări automatizate ale comportamentului utilizatorilor',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'atribuire geografică aproximativă la nivel de țară, regiune și oraș',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'opțional înregistrarea sesiunii (Session Replay), în mod implicit cu texte, imagini și date introduse mascate',
    'optional Heatmaps und A/B-Tests'
        => 'opțional hărți termice și teste A/B',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Transmite sursa de proveniență la testele Split URL (conturi începând cu 14.06.2026)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Transmite sursa de proveniență la testele Split URL (conturi anterioare datei de 14.06.2026)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Atribuirea tranzacțiilor precum lead-uri și vânzări unui publisher, Măsurarea performanței unui material publicitar și decontarea comisionului',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Colectarea vizitatorilor și a afișărilor de pagină pe site pentru automatizarea de marketing, Atribuirea unui vizitator unui contact din contul Brevo prin adresa de e-mail, Colectarea evenimentelor proprii, definite de operator',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Afișarea calendarului de rezervări și stabilirea de programări pe site, Recunoașterea vizitatorului în cadrul procesului de rezervare, Procesarea plăților atunci când programarea este contra cost',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Detectarea și respingerea accesărilor automatizate la formulare, Emiterea unui token pe care serverul site-ului îl verifică, În modul Pre-Clearance: autorizare pentru alte verificări WAF din aceeași zonă',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Măsurarea afișărilor de pagină și a vizitelor, Măsurarea timpului de încărcare și a indicatorilor principali ai paginii (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Difuzarea de publicitate personalizată, Măsurarea eficacității publicitare, Recunoașterea browserului prin identificatorul Criteo',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Măsurarea comportamentului de utilizare pe site, Crearea de profiluri de utilizare pseudonimizate după acordarea consimțământului, Recunoașterea unui browser la vizite ulterioare, după acordarea consimțământului',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Măsurarea afișărilor de pagină și a comportamentului de utilizare, Măsurarea adâncimii de derulare și a evenimentelor de clic, Recunoașterea utilizatorilor după acordarea consimțământului, Gestionarea opoziției față de măsurare',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Diferențierea între om și bot la formulare și autentificări, Protecție împotriva cererilor automatizate (spam, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Măsurarea conversiilor, Remarketing și crearea de grupuri-țintă, Limitarea frecvenței de afișare, Detectarea fraudei prin clicuri',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Difuzarea anunțurilor, Limitarea frecvenței de afișare, Detectarea fraudei și a abuzurilor, Măsurarea livrărilor și a clicurilor',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Distingerea utilizatorilor individuali, Menținerea stării sesiunii, Măsurarea audienței și a utilizării',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Afișarea unei hărți interactive, Măsurarea disponibilității serviciului de către Google',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Analiză de risc pentru a distinge între o persoană și un bot, Protecția formularelor împotriva utilizării abuzive automatizate',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Livrarea și gestionarea tagurilor pe site, Distribuirea semnalelor de consimțământ către tagurile Google',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Diferențierea între om și bot la formulare și autentificări, Distribuirea sarcinii și rutarea cererilor de tip challenge, Punerea la dispoziție a accesului pentru accesibilitate',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Hărți termice, Înregistrarea sesiunii, Sondaje',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Recunoașterea vizitatorilor de-a lungul mai multor vizite, Măsurarea sesiunilor și atribuirea sursei vizitei, Deduplicarea contactelor, Funcționarea widgetului de chat, Livrarea consecventă a variantelor testelor A/B',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Chat live și căsuță de asistență pe site, Recunoașterea vizitatorilor recurenți și atribuirea conversațiilor anterioare, Recunoașterea dispozitivului pentru prevenirea abuzurilor, Stocarea temporară a datelor messengerului și ale vizitatorului în browser',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Afișarea mențiunilor privind finanțarea și plata în rate pe paginile de produs și de coș (On-site Messaging), Livrarea conținuturilor notificării în substituenți pregătiți în codul sursă al paginii, prin intermediul unui ad server',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Recunoașterea și identificarea vizitatorilor site-ului, Atribuirea comportamentului de pe site unui profil, Controlul afișării formularelor de înscriere pe site',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Urmărirea conversiilor pentru campaniile publicitare LinkedIn, Retargetingul vizitatorilor site-ului, Analiza audienței site-ului (date demografice ale site-ului)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Recunoașterea vizitatorilor site-urilor asociate pentru retargeting, Controlul formularelor pop-up, astfel încât să nu apară în mod repetat, Măsurarea deschiderilor și a clicurilor în campaniile de e-mail, Integrarea pixelilor publicitari de la Google și Facebook pe site-ul conectat',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Afișarea hărților interactive pe site, Încărcarea dalelor de hartă, a fonturilor și a stilurilor de la furnizor, Facturarea și securizarea apelurilor către hartă',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Măsurarea afișărilor de pagină, a vizitelor și a sesiunilor, Recunoașterea vizitatorilor care revin printr-un ID de vizitator, Atribuirea originii unei vizite (referrer, atribuire), opțional hărți termice și teste A/B',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Măsurarea afișărilor de pagină, a vizitelor și a sesiunilor pe serverul propriu, Recunoașterea vizitatorilor care revin printr-un ID de vizitator, Atribuirea originii unei vizite (referrer, atribuire), opțional hărți termice și teste A/B',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Livrarea și declanșarea tagurilor pe site, Gestionarea deciziei de consimțământ pentru tagurile configurate în container',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Măsurarea campaniilor publicitare și a conversiilor pe site, Crearea de audiențe și retargeting',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Urmărirea conversiilor pentru campaniile Microsoft Advertising, Constituirea listelor de remarketing, Măsurarea afișărilor de pagină și a evenimentelor personalizate',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Înregistrarea și redarea sesiunilor, Hărți termice ale clicurilor și ale comportamentului de derulare, Reunirea mai multor afișări de pagină într-o singură sesiune, evaluări automatizate ale comportamentului utilizatorilor',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Procesarea unei plăți inițiate de vizitator, Încorporarea câmpurilor cardului în propriul proces de finalizare a comenzii, astfel încât datele cardului să nu treacă prin magazin, Prevenirea fraudei și obligațiile legale în calitate de prestator de servicii de plată',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Înregistrarea mișcărilor mouse-ului, Redarea sesiunii, Analiza comportamentului de utilizare',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Livrarea dalelor de hartă către hărțile încorporate, Funcționarea și prevenirea abuzurilor serviciilor de hărți',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Procesarea plăților, Prevenirea fraudei',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Urmărirea conversiilor pentru campaniile publicitare Pinterest, Crearea de audiențe și retargeting, Atribuirea acțiunilor de pe site anunțurilor vizualizate anterior',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Măsurarea afișărilor de pagină și a evenimentelor, Recunoașterea vizitatorilor și atribuirea la sesiuni, Analiza provenienței și a campaniilor, Analiza dispozitivului, a browserului și a locației estimate, Analiza comerțului electronic și a obiectivelor',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Numărarea afișărilor de pagină și a vizitelor, Analiza surselor de trafic de referință, Analiza browserului, a sistemului de operare și a tipului de dispozitiv, atribuire geografică aproximativă la nivel de țară, regiune și oraș',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Colectarea și transmiterea erorilor aplicației din browser, opțional înregistrarea sesiunii (Session Replay), în mod implicit cu texte, imagini și date introduse mascate',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Funcționarea coșului și a procesului de plată al unui magazin, Atribuirea sesiunii și a limbii, respectiv a țării, Măsurarea audienței pentru operatorul magazinului, Date de marketing pentru interfețele de cumpărare',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Încorporarea și redarea pieselor, albumelor, listelor de redare și episoadelor de podcast, Colectarea de informații despre comportamentul de navigare al acestor utilizatori de către Spotify și de către terți, Permiterea plasării de cookie-uri de către terți în browserul acestor utilizatori',
    'Besucherzählung, Reichweitenmessung'
        => 'Numărarea vizitatorilor, Măsurarea audienței',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Detectarea fraudei și evaluarea riscului tentativelor de plată, Punerea la dispoziție a câmpurilor de plată Stripe Elements, Detectarea boților și a comportamentului automatizat în procesul de comandă',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Măsurarea și îmbunătățirea performanței campaniilor publicitare, Personalizarea publicității pe TikTok, Transmiterea evenimentelor de pe site către TikTok',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Încorporarea formularelor și a sondajelor în site, Colectarea și transmiterea răspunsurilor către operatorul formularului',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Încorporarea și redarea videoclipurilor pe site, Memorarea setărilor playerului alese de spectator (volum, calitate, subtitrări), Măsurarea audienței videoclipurilor încorporate, efectuată de Vimeo, Protecția playerului împotriva boților și a abuzurilor',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Teste A/B și teste Split-URL pe site, Atribuirea și păstrarea unei variante pe parcursul mai multor vizite, Măsurarea obiectivelor și a conversiilor unei campanii, Măsurarea vizitatorilor și a sesiunilor în scopuri de evaluare, Gestionarea opoziției și a consimțământului pentru măsurare',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Atribuirea coșului de cumpărături unei vizitatoare, Detectarea dacă s-a modificat conținutul coșului, Afișarea produselor vizualizate recent în widgetul corespunzător, Memorarea ascunderii notificării magazinului',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Autentificare și recunoașterea sesiunii în zona de administrare, Păstrarea datelor comentariului pentru comentarii ulterioare, Memorarea setărilor de afișare ale zonei de administrare, Verificarea posibilității ca WordPress să plaseze cookie-uri, Memorarea limbii selectate',
    'Conversion-Messung, Retargeting'
        => 'Măsurarea conversiilor, Retargeting',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Redarea videoclipurilor încorporate, Securitate, Recunoașterea spectatorului în scopuri publicitare',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Chat live și canal de mesagerie pentru asistență pe site, Recunoașterea vizitatorului între afișările de pagină și file, Memorarea stării și a setărilor widgetului, Măsurarea sesiunilor și a evenimentelor pe paginile cu widget',
];
