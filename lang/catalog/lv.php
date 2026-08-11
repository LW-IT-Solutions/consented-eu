<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Lettisch.
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
        => 'A/B testi un split-URL testi vietnē',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Karšu izsaukumu norēķini un aizsardzība',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Pieteikšanās veikalā pabeigšana; nepieciešams',
    'Abspielen eingebetteter Videos'
        => 'Iegulto video atskaņošana',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Apmeklētāja veikta maksājuma apstrāde',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Maksājumu apstrāde, ja pieraksts ir maksas',
    'Analyse des Nutzungsverhaltens'
        => 'Lietošanas paradumu analīze',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Pirkšanas saskarņu analīzes dati; analīze',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Veikala analīzes dati; sniedzējs tos klasificē kā analīzi',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Pieteikšanās dati administrācijas sadaļai /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Pieteikšanās Shop Pay; nepieciešams',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Pieteikšanās un sesijas atpazīšana administrācijas sadaļā',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Anonīma ar pakalpojumu saistīta statistika un citi tehniski mērķi, tostarp pieejamības atbalsts',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Administrācijas sadaļas skata iestatījumi katram kontam',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Administrācijas sadaļas skata iestatījumu iegaumēšana',
    'Anzeige von Bewertungen'
        => 'Atsauksmju rādīšana',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Rezervāciju kalendāra rādīšana un pierakstīšanās vietnē',
    'Anzeigen einer interaktiven Karte'
        => 'Interaktīvas kartes rādīšana',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'Iestatīts uz vērtību 1, tas novērš UET notikumu sūtīšanu uz Microsoft',
    'Aufbau von Remarketing-Listen'
        => 'Remārketinga sarakstu veidošana',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Sesiju ierakstīšana un atskaņošana',
    'Aufzeichnung von Mausbewegungen'
        => 'Peles kustību ierakstīšana',
    'Ausblenden des Shop-Hinweises merken'
        => 'Veikala paziņojuma paslēpšanas iegaumēšana',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Tagu piegāde un aktivizēšana vietnē',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Tagu piegāde un pārvaldība vietnē',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Karšu elementu piegāde iegultajām kartēm',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Paziņojumu satura piegāde sagatavotās vietās lapas pirmkodā, izmantojot reklāmas serveri',
    'Auslieferung personalisierter Werbung'
        => 'Personalizētas reklāmas piegāde',
    'Auslieferung von Anzeigen'
        => 'Sludinājumu rādīšana',
    'Auslieferung von Bibliotheken und Assets'
        => 'Bibliotēku un resursu piegāde',
    'Auslieferung von Schriftarten'
        => 'Fontu piegāde',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Pilnvaras izsniegšana, ko pārbauda vietnes serveris',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Pieteikšanās veidlapu vadība vietnē',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Uznirstošo veidlapu vadība, lai tās neparādītos atkārtoti',
    'Auswahl des Rechenzentrums'
        => 'Datu centra izvēle',
    'Auswertung der Verweisquellen'
        => 'Atsauces avotu novērtēšana',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Vietnes mērķauditorijas novērtēšana (vietnes demogrāfija)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Pārlūka, operētājsistēmas un ierīces veida novērtēšana',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Ierīces, pārlūka un aptuvenās atrašanās vietas novērtēšana',
    'Auswertung von Herkunft und Kampagnen'
        => 'Izcelsmes un kampaņu novērtēšana',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Autentificē gala lietotāja pieprasījumus',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Rādīšanas biežuma ierobežošana',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Apliecina veiksmīgi izietu pārbaudi, lai zonā nebūtu vajadzīgas turpmākas pārbaudes',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Stripe Elements maksājumu lauku nodrošināšana',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Pieejamības rīka nodrošināšana',
    'Besucherzählung'
        => 'Apmeklētāju skaitīšana',
    'Betrieb des Chat-Widgets'
        => 'Tērzēšanas logrīka darbība',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Karšu pakalpojumu darbība un aizsardzība pret ļaunprātīgu izmantošanu',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Veikala groza un apmaksas procesa darbība',
    'Betrugs- und Missbrauchserkennung'
        => 'Krāpšanas un ļaunprātīgas izmantošanas atklāšana',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Krāpšanas atklāšana maksājuma mēģinājuma laikā',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Krāpšanas atklāšana un maksājuma mēģinājumu riska novērtēšana',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Krāpšanas novēršana un maksājumu pakalpojumu sniedzēja likumā noteiktie pienākumi',
    'Betrugsprävention'
        => 'Krāpšanas novēršana',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Krāpšanas novēršana un maksājuma mēģinājuma riska novērtēšana',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Pseidonimizētu lietošanas profilu veidošana pēc piekrišanas saņemšanas',
    'Bildung von Zielgruppen und Retargeting'
        => 'Mērķauditoriju veidošana un retargetings',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Piesaista sesiju tai pašai AWS instancei',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Atskaņotāja aizsardzība pret botiem un ļaunprātīgu izmantošanu',
    'Bot-Abwehr fuer den Player'
        => 'Atskaņotāja aizsardzība pret botiem',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Aizsardzība pret botiem, piegādājot HubSpot resursus',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Pārlūka identifikators, ar kuru LinkedIn atšķir ierīces un atklāj ļaunprātīgu izmantošanu',
    'Cloudflare-Bot-Abwehr'
        => 'Cloudflare aizsardzība pret botiem',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Cloudflare botu atklāšana datplūsmas filtrēšanai',
    'Cloudflare-Ratenbegrenzung'
        => 'Cloudflare pieprasījumu biežuma ierobežošana',
    'Conversion-Messung'
        => 'Konversiju mērīšana',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'LinkedIn reklāmas kampaņu konversiju izsekošana',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Microsoft Advertising kampaņu konversiju izsekošana',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Pinterest reklāmas kampaņu konversiju izsekošana',
    'Darstellung interaktiver Karten auf der Website'
        => 'Interaktīvu karšu attēlošana vietnē',
    'Deduplizieren von Kontakten'
        => 'Kontaktu dublikātu novēršana',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Paredzēts reklāmas rādīšanai un mērīšanai.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'Vairākus domēnus aptverošs apmeklētāja ID; pēc sniedzēja ziņām trešās puses sīkdatne, tiek izmantota tikai tad, ja konfigurācijas failā ir iespējotas trešo pušu sīkdatnes',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Trešās puses identifikators apmeklētāju atpazīšanai',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Trešās puses identifikators, ko nodod Klaviyo',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Trešās puses reklāmas identifikators kampaņu mērīšanai un personalizācijai TikTok',
    'E-Commerce- und Zielauswertung'
        => 'E-komercijas un mērķu novērtēšana',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'E-pasta adreses iepriekšēja aizpildīšana no komentāru veidlapas',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Skaņdarbu, albumu, atskaņošanas sarakstu un podkāstu epizožu iegulšana un atskaņošana',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Video iegulšana un atskaņošana vietnē',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Veidlapu un aptauju iegulšana vietnē',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Kartes lauku iegulšana savā apmaksas procesā, lai kartes dati neietu caur veikalu',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Ārēji uzturētas sīkdatņu deklarācijas iegulšana',
    'Einbettung von Audioinhalten'
        => 'Audio satura iegulšana',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Google un Facebook reklāmas pikseļu iekļaušana saistītajā vietnē',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Finansēšanas un maksājumu pa daļām informācijas rādīšana produktu un groza lapās (on-site messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Unikāls identifikators, mērot vairākos domēnos (konti no 14.06.2026)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Unikāls identifikators, mērot vairākos domēnos (konti pirms 14.06.2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Vienreizēja vērtība pret CSRF atteikšanās veidlapā',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Satur lietotāja identifikatoru un izveides laiku; pēc avota ziņām tiek iestatīts Pinterest lietotnes pārlūkā, nevis vietnes domēnā',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Atbilžu reģistrēšana un nodošana veidlapas uzturētājam',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Reģistrē vietnes lietošanu novērtēšanas vajadzībām.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Uzturētāja definētu pielāgotu notikumu reģistrēšana',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Lietojumprogrammas kļūdu reģistrēšana un nosūtīšana no pārlūka',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Apmeklētāju un lapu skatījumu reģistrēšana vietnē mārketinga automatizācijai',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Reklāmas līdzekļa efektivitātes mērīšana un komisijas norēķini',
    'Erhalt des Sitzungszustands'
        => 'Sesijas stāvokļa saglabāšana',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Ierīces atpazīšana aizsardzībai pret ļaunprātīgu izmantošanu',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Automatizētu pieprasījumu atklāšana un noraidīšana veidlapās',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Botu un automatizētas uzvedības atklāšana pasūtīšanas procesā',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Konstatēšana, vai groza saturs ir mainījies',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Konstatē groza satura izmaiņas',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Atpazīst tās vietnes apmeklētājus, kurā ir iekļauts Intercom kods',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Atkārtoti atpazīst pārlūkus Microsoft vietnēs; pēc sniedzēja ziņām tiek izmantots arī reklāmai, trešās puses sīkdatne',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Atkārtoti atpazīst personas, kas raksta, izmantojot tērzēšanas rīku',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Atpazīst ierīci, no kuras sākas saruna',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Atpazīst atsevišķu ierīci, kas mijiedarbojas ar Messenger, aizsardzībai pret ļaunprātīgu izmantošanu',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Atpazīst gala lietotāju, kurš sāk sarunu',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Atpazīst domēnu vai apakšdomēnu, kurā ir iekļauts tērzēšanas logrīks',
    'Erkennt wiederkehrende Besucher'
        => 'Atpazīst atkārtoti atgriezušos apmeklētājus',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Konstatē, vai pārlūks ir restartēts',
    'Erkennung von Klickbetrug'
        => 'Klikšķu krāpšanas atklāšana',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Nosaka unikālos vietnes apmeklējumus (konti no 14.06.2026)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Nosaka unikālos vietnes apmeklējumus (konti pirms 14.06.2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Ļauj trešajām personām iestatīt sīkdatnes šo lietotāju pārlūkā',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Ļauj izmantot pieejamības rīku',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Nodrošina papildu vietnes funkcijas.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Pirmās puses identifikators, kas atpazīst apmeklētājus un piesaista notikumus vietnei',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Pirmās puses apmeklētāja identifikators konversiju izsekošanai un remārketingam',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Pirmās puses sesijas identifikators notikumu piesaistei',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Pirmās puses sesijas identifikators katram pikselim kampaņu mērīšanai',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Pirmās puses sesijas identifikators kampaņu mērīšanai',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Pirmās puses reklāmas identifikators kampaņu mērīšanai un personalizācijai TikTok',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Pirmās puses sīkdatne, kas grupē to apmeklētāju darbības, kurus Pinterest nevar piesaistīt',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Pirmās puses sīkdatne, kas glabā ar Automatic Enhanced Match iegūtos ar jaucējfunkciju apstrādātos klientu datus',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Izveido unikālu identifikatoru katram apmeklētājam (konti no 14.06.2026)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Izveido unikālu identifikatoru katram apmeklētājam (konti pirms 14.06.2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Ierīces identifikators notikumu novērtēšanai lapās ar logrīku',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Tiek iestatīts, piesakoties HubSpot mitinātā lapā',
    'Gewaehlte Sprache speichern'
        => 'Izvēlētās valodas saglabāšana',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Saskaņo MUID identifikatoru starp Microsoft domēniem; pēc sniedzēja ziņām trešās puses sīkdatne',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Uztur ziņu sinhronizāciju vairākās cilnēs',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Glabā parametra pk_campaign vērtību',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Glabā parametra utm_campaign vērtību',
    'Haelt den Widerspruch gegen die Messung'
        => 'Saglabā iebildumu pret mērīšanu',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Glabā _uetsid derīguma beigu laiku',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Glabā _uetvid derīguma beigu laiku',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Glabā datplūsmas avota veidu Tag Manager vajadzībām',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Fiksē apmeklētāja identitāti, tostarp kontaktu dublikātu novēršanai',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Fiksē apmeklētāja lēmumu par sīkdatnēm',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Uztur logrīka izskatu nemainīgu, pārejot starp lapām',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Fiksē ieejas lapu; analīze',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Glabā piekrišanu mērīšanai ar sīkdatnēm',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Glabā lietotāja lēmumu par kategorijām un pakalpojumu sniedzējiem',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Uztur pieteikušos lietotāju sesiju un piekļuvi iepriekšējām sarunām',
    'Haelt die verweisende Adresse'
        => 'Glabā atsauces adresi',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Fiksē atsauces avotu; analīze',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Glabā sesijas pielāgotos mainīgos (sniedzējs tos atzīmējis kā novecojušus)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Fiksē, vai etracker drīkst iestatīt sīkdatnes; ar data-block-cookies to iestata ar API izsaukumu',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Fiksē, kurus funkciju slēdžus video īpašnieks ir aktivizējis',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Galvenā sīkdatne apmeklētāju atpazīšanai',
    'Heatmaps'
        => 'Siltuma kartes',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Klikšķu un ritināšanas paradumu siltuma kartes',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Saglabā siltuma karšu sesijas datus apmeklējuma laikā',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Glabā informāciju par notiekošo sesiju (konti no 14.06.2026)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Glabā informāciju par notiekošo sesiju (konti pirms 14.06.2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Saglabā pielāgotos mainīgos apmeklējuma laikā',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Glabā pastāvīgus datus apmeklētāja līmenī (konti no 14.06.2026)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Glabā pastāvīgus datus apmeklētāja līmenī Insights novērtēšanai (konti pirms 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Fiksē apmeklētāja piekrišanas statusu (konti no 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Fiksē apmeklētāja piekrišanas statusu (konti pirms 14.06.2026)',
    'Hält den Sitzungszustand.'
        => 'Glabā sesijas stāvokli.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Glabā Clarity lietotāja identifikatoru un šīs vietnes iestatījumus',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Saglabā A/B testu varianta piešķīrumu',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Īslaicīgi fiksē izvēlēto kombināciju (konti no 14.06.2026)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Īslaicīgi fiksē izvēlēto kombināciju (konti pirms 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Fiksē izvēlēto variantu pirms novirzīšanas veikšanas (konti no 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Fiksē izvēlēto variantu pirms novirzīšanas veikšanas (konti pirms 14.06.2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Fiksē, caur kuru atsauci apmeklējums notika',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Pre-Clearance režīmā: atļauja turpmākajām tās pašas zonas WAF pārbaudēm',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Netiešs dalībnieka identifikators konversiju izsekošanai, retargetingam un analīzei',
    'Inhalt des Warenkorbs; notwendig'
        => 'Groza saturs; nepieciešams',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Ar pircējiem saistīti analītikas dati veikalā; statistika',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Ar kampaņu saistīts unikāls identifikators (konti no 14.06.2026.)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Pirmā kontakta ar Clarity identifikators visās Clarity vietnēs; kā norāda pakalpojuma sniedzējs, trešās puses sīkdatne',
    'Kennzeichnet die laufende Sitzung'
        => 'Apzīmē notiekošo sesiju',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Komentāra datu saglabāšana turpmākiem komentāriem',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Konsekventa A/B testu variantu rādīšana',
    'Lastverteilung und Routing'
        => 'Slodzes sadale un maršrutēšana',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Pārbaudes pieprasījumu slodzes sadale un maršrutēšana',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Lokāli saglabā apmeklētāja konta iestatījumus',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Rāda vienu un to pašu A/B testa lapas variantu',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Tiešsaistes tērzēšana un atbalsta ziņojumu kanāls vietnē',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Tiešsaistes tērzēšana un atbalsta pastkaste vietnē',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Pirkšanas saskarņu mārketinga dati; mārketings',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Mārketinga dati pirkšanas saskarnēm',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Skatītāja atskaņotāja iestatījumu saglabāšana (skaļums, kvalitāte, subtitri)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Logrīka stāvokļa un iestatījumu saglabāšana',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Iegaumē Global Privacy Control banera aizvēršanu',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Iegaumē paziņojuma banera aizvēršanu',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Iegaumē sinhronizācijas ar sīkdatni lms_analytics laiku',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Iegaumē pēdējās ID sinhronizācijas laiku, lai tā netiktu atkārtota',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Iegaumē piešķirto variantu (konti no 14.06.2026.)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Iegaumē piešķirto variantu, lai nākamajā apmeklējumā tas paliktu tāds pats (konti pirms 14.06.2026.)',
    'Merkt einen Rabattcode; notwendig'
        => 'Iegaumē atlaides kodu; nepieciešams',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Iegaumē iebildumu pret mērīšanu (konti no 14.06.2026.)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Iegaumē vairākās vietnēs spēkā esošu iebildumu (konti pirms 14.06.2026.)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Iegaumē atskaņotāja iestatījumus, piemēram, skaļumu, kvalitāti un subtitrus',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Iegaumē skaņas paziņojumu iestatījumu',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Iegaumē doto piekrišanu mērīšanai',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Iegaumē iebildumu pret mērīšanu',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Iegaumē apmeklētāja aizvērtos proaktīvos ziņojumus',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Iegaumē, ka apmeklētājs aizvēra palaišanas pogas uzrakstu',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Iegaumē, vai logrīks ir atvērts vai aizvērts',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Iegaumē, ka apmeklētājs nav jāiekļauj nevienā kampaņā (konti pirms 14.06.2026.)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Iegaumē, ka apmeklētājs ir izslēgts no kampaņas (konti no 14.06.2026.)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Iegaumē, ka apmeklētājs ir izslēgts no kampaņas (konti pirms 14.06.2026.)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Iegaumē, ka paziņojums par piekrišanu tika aizvērts',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Iegaumē, ka veikala paziņojums tika aizvērts',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Iegaumē, ka jautājums par sīkdatnēm nav jāuzdod atkārtoti',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Iegaumē, ka tags jau ir aktivizēts',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Iegaumē, vai šim apmeklētājam tiek mērīts ritināšanas dziļums',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Iegaumē, vai tērzēšanas logs ir atvērts',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Iegaumē, vai MUID identifikators tiek nodots reklāmas identifikatoram; kā norāda pakalpojuma sniedzējs, vienmēr 0, trešās puses sīkdatne',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Atvēršanu un klikšķu mērīšana e-pasta kampaņās',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Sesiju un notikumu mērīšana lapās ar logrīku',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Sesiju mērīšana un apmeklējuma avota piesaiste',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Google veikta pakalpojuma pieejamības mērīšana',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Lapas ielādes laika un pamatrādītāju mērīšana (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Ritināšanas dziļuma un klikšķu notikumu mērīšana',
    'Messung der Werbewirkung'
        => 'Reklāmas ietekmes mērīšana',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Lietošanas paradumu mērīšana vietnē',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Reklāmu mērīšana un personalizēšana TikTok Pangle reklāmas tīklā',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Reklāmas kampaņu efektivitātes mērīšana un uzlabošana',
    'Messung von Auslieferungen und Klicks'
        => 'Rādījumu un klikšķu mērīšana',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Apmeklētāju un sesiju mērīšana analīzei',
    'Messung von Conversions'
        => 'Konversiju mērīšana',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Lapas skatījumu un apmeklējumu mērīšana',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Lapas skatījumu un notikumu mērīšana',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Lapas skatījumu un lietošanas paradumu mērīšana',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Lapas skatījumu un pielāgotu notikumu mērīšana',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Lapas skatījumu, apmeklējumu un sesiju mērīšana',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Lapas skatījumu, apmeklējumu un sesiju mērīšana savā serverī',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Reklāmas kampaņu un konversiju mērīšana vietnē',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Kampaņas mērķu un konversiju mērīšana',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Kartes flīžu, fontu un stilu ielāde no pakalpojuma sniedzēja',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Vārda iepriekšēja aizpildīšana no komentāru veidlapas',
    'Nutzer-ID'
        => 'Lietotāja ID',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Piesaista grozu pareizajai valstij; nepieciešams',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Piesaista grozu datubāzē pareizajai klientei',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Piesaista apmeklējuma darbības sesijai',
    'Personalisierung der Werbung auf TikTok'
        => 'Reklāmas personalizēšana TikTok platformā',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Pārbaude, vai WordPress var iestatīt sīkdatnes',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Pārbauda pārlūka spēju pieņemt sīkdatnes; nepieciešams',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Pārbauda, vai WordPress var iestatīt sīkdatnes',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Veikala paroles pārbaudes vērtība; nepieciešams',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Pakalpojuma sniedzēja pārbaudes sīkdatne (konti pirms 14.06.2026.)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Pārbauda, vai pārlūks pieņem sīkdatnes (konti no 14.06.2026.)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Pārbauda, vai pārlūks pieņem sīkdatnes (konti pirms 14.06.2026.)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Pārbauda, vai pārlūks pieņem sīkdatnes (pēc sniedzēja ziņām tikai pārlūkā Internet Explorer)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Pieprasījumu biežuma ierobežošana HubSpot izmantotā CDN sniedzēja pusē',
    'Reichweiten- und Nutzungsmessung'
        => 'Sasniedzamības un lietojuma mērīšana',
    'Reichweitenmessung'
        => 'Sasniedzamības mērīšana',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Vimeo veikta iegulto video sasniedzamības mērīšana',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Sasniedzamības mērīšana veikala uzturētājam',
    'Remarketing und Zielgruppenbildung'
        => 'Remārketings un mērķauditoriju veidošana',
    'Retargeting'
        => 'Retargetings',
    'Retargeting von Website-Besuchern'
        => 'Vietnes apmeklētāju retargetings',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Riska analīze, lai atšķirtu cilvēku no bota',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Apkopojoša sīkdatne, kā norāda pakalpojuma sniedzējs, tiek izveidota tikai pārlūkā Safari (konti no 14.06.2026.)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Apkopojoša sīkdatne, kā norāda pakalpojuma sniedzējs, tiek izveidota tikai pārlūkā Safari (konti pirms 14.06.2026.)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Informācijas par šo lietotāju pārlūkošanas paradumiem vākšana, ko veic Spotify un trešās personas',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Slēdzis, ko vietnes uzturētājs iestata pats, lai apturētu Klaviyo izsekošanu',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Dalībnieku pieteikšanās aizsardzība pret viltošanu',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Veidlapu aizsardzība pret automatizētu ļaunprātīgu izmantošanu',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Aizsardzība pret automatizētiem pieprasījumiem (mēstules, credential stuffing)',
    'Sicherheit'
        => 'Drošība',
    'Sicherheitsfunktionen'
        => 'Drošības funkcijas',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Drošības funkcijas, ja ir aktivizēta izvēles funkcija User Journeys',
    'Sitzung'
        => 'Sesija',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Sesijas un valodas vai valsts piesaiste',
    'Sitzungsaufzeichnung'
        => 'Sesijas ierakstīšana',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Sesijas identifikators notikumu analīzei lapās ar logrīku',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Sesijas identifikators veikala statistikai; statistika',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Answer Bot pakalpojuma sesijas atslēga',
    'Sitzungswiedergabe'
        => 'Sesijas atskaņošana',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Saglabā autentifikācijas pilnvaru pēc pieteikšanās',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Saglabā kodēto paroli ar paroli aizsargātiem video',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Saglabā izvēlētās valodas atslēgu',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Saglabā apmeklētāja privātuma izvēli; nepieciešams',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Saglabā apmeklētāja lēmumu par piekrišanu',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Saglabā apmeklētāja ierīces identifikatoru autentifikācijai tērzēšanas logrīkā',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Saglabā uz vebināru pieteikta lietotāja identifikatoru',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Saglabā klikšķa identifikatoru fbclid, lai vietnes notikumu varētu piesaistīt reklāmai',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Saglabā lietotāja identifikatoru no reģistrācijas veidlapas, kas tiek rādīta pirms video',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Saglabā TikTok klikšķa identifikatoru konversiju piesaistei',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Saglabā unikālo apmeklētāja ID atpazīšanai',
    'Speichert die zugestimmten Kategorien'
        => 'Saglabā kategorijas, kurām ir dota piekrišana',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Nodrošina datus pēdējo apskatīto preču logrīkam',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Nosaka, vai MUID identifikators tiek atjaunots; kā norāda pakalpojuma sniedzējs, trešās puses sīkdatne',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Tehniski nepieciešams vietnes darbībai un drošībai.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Nes veikala sesijas un norēķinu datus; pakalpojuma sniedzējs tos norāda kā nepieciešamus',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Nodrošina iebilduma funkciju (opt-out)',
    'Transaktionssicherheit'
        => 'Darījumu drošība',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Nodrošina reCAPTCHA riska analīzi.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Vietnes notikumu nodošana platformai TikTok',
    'Umfragen'
        => 'Aptaujas',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Aptur datu nodošanu pakalpojumam HubSpot',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Pēc aizvēršanas vairs nerāda tērzēšanas sveiciena ziņojumu',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Atšķir pārlūkus, kas atver Microsoft lapas; ar piekrišanu arī reklāmai',
    'Unterscheidet einzelne Nutzer.'
        => 'Atšķir atsevišķus lietotājus.',
    'Unterscheidung einzelner Nutzer'
        => 'Atsevišķu lietotāju atšķiršana',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Cilvēka un bota atšķiršana veidlapās un pieteikšanās procesā',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Savieno vairākus lapas skatījumus vienā sesijas ierakstā',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Novērš banera pastāvīgu rādīšanu stingrajā režīmā',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Piekrišanas signālu izplatīšana Google tagiem',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Piekrišanas lēmuma pārvaldība konteinerā konfigurētajiem tagiem',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Iebilduma pret mērīšanu pārvaldība',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Iebilduma un piekrišanas pārvaldība mērīšanai',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Google to iedala statistikas un reklāmas kategorijās.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Google to iedala analīzes, reklāmas un drošības kategorijās.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Google to iedala funkcionalitātes, reklāmas un drošības kategorijās.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Google to iedala drošības un funkcionalitātes kategorijās.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Google to iedala drošības un reklāmas kategorijās.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Google to iedala drošības, analīzes, funkcionalitātes un reklāmas kategorijās.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Google to iedala drošības, funkcionalitātes un reklāmas kategorijās.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Google to iedala reklāmas un drošības kategorijās.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Google to iedala analīzes kategorijā; precīzāku mērķi Google nenorāda.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Google to iedala funkcionalitātes kategorijā.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Google to iedala drošības kategorijā.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Google to iedala reklāmas kategorijā.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Microsoft to min starp sīkdatnēm, ko nedrīkst iestatīt bez piekrišanas; savu mērķa aprakstu Microsoft nenorāda',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Vimeo izveidots identifikators sasniedzamības mērīšanai',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Groza valūta pēc pabeigtiem norēķiniem; nepieciešams',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Uz varbūtību balstīta pārlūka piesaiste personai',
    'Warenkorb einer Besucherin zuordnen'
        => 'Groza piesaiste apmeklētājai',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Vietnes adreses iepriekšēja aizpildīšana no komentāru veidlapas',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Ar reklāmu saistīta skatītāja atpazīšana',
    'Werbepersonalisierung'
        => 'Reklāmas personalizēšana',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Tāpat kā _pin_unauth, bet kā trešās puses sīkdatne',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Apmeklētāja atpazīšana rezervācijas procesā',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Apmeklētāja atpazīšana starp lapas skatījumiem un cilnēm',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Vietnes apmeklētāju atpazīšana un identificēšana',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Apmeklētāju atpazīšana vairākos apmeklējumos',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Saistīto vietņu apmeklētāju atpazīšana retargetingam',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Atkārtotu apmeklētāju atpazīšana un iepriekšējo sarunu piesaiste',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Apmeklētāja atpazīšana un viņa pazīmju saglabāšana',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Pārlūka atpazīšana pēc Criteo identifikatora',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Lietotāja atpazīšana; tikai ar piekrišanu, pēc noklusējuma bloķēta',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Pārlūka atpazīšana vēlākos apmeklējumos pēc piekrišanas saņemšanas',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Apmeklētāju atpazīšana un piesaiste sesijām',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'LinkedIn dalībnieku atpazīšana ārpus LinkedIn reklāmas nolūkos',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Lietotāju atpazīšana pēc piekrišanas saņemšanas',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Atkārtoti atgriezušos apmeklētāju atpazīšana pēc apmeklētāja ID',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Tiek iestatīta, kad ir aktivizēts kampaņas mērķis (konti no 14.06.2026.)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Tiek iestatīta, kad ir aktivizēts kampaņas mērķis (konti pirms 14.06.2026.)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Tiek iestatīta, kad persona apmeklē vietni ar iebūvētu Pinterest tagu',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Tiek iestatīta, kad piesaiste izdodas bez esošām sīkdatnēm, piemēram, izmantojot Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'To iestata JavaScript tags, izmantojot datus, ko Pinterest nodod kopā ar reklamēto datplūsmu',
    'Zaehlt und begrenzt Sitzungen'
        => 'Skaita un ierobežo sesijas',
    'Zahlungsabwicklung'
        => 'Maksājumu apstrāde',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Norāda, vai sesija vēl turpinās vai ir jauna',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Norāda saskarnei, ka esat pieteicies un ar kuru kontu',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Nejaušs pārlūka identifikators, kas vietnes pikseļa notikumus piesaista vienam pārlūkam',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Pēdējo apskatīto preču rādīšana attiecīgajā logrīkā',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Uzvedības vietnē piesaiste profilam',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Apmeklējuma izcelsmes piesaiste (atsauces avots, atribūcija)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Apmeklētāja piesaiste kontaktpersonai Brevo kontā pēc e-pasta adreses',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Darījumu, piemēram, potenciālo klientu un pārdošanas, piesaiste izdevējam',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Vietnē veikto darbību piesaiste iepriekš redzētajām reklāmām',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Vairāku lapas skatījumu apvienošana vienā sesijā',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Papildu dati par reģistrētajiem apmeklējuma gaitas notikumiem',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Varianta piešķiršana un saglabāšana vairākos apmeklējumos',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Kešatmiņa notikumiem, kas noteikti pēc CSS selektoriem',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Messenger un apmeklētāju datu kešatmiņa pārlūka krātuvē',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Tag Manager ierakstu kešatmiņa',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Ritināšanas dziļuma mērīšanas kešatmiņa',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Tag Manager mainīgo kešatmiņa',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Logrīka iestatījumu kešatmiņa, lai izvairītos no atkārtotiem pieprasījumiem serverim',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Messenger un apmeklētāju datu saglabāšana pārlūka kešatmiņā',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Skaita apmeklētājam izveidotās sesijas (konti no 14.06.2026.)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Skaita, cik reižu mērīšanas laikā pārlūks tika aizvērts un atkal atvērts (konti pirms 14.06.2026.)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Lapas skatījumu un apmeklējumu skaitīšana',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'automatizēta lietotāju uzvedības analīze',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'aptuvena ģeogrāfiskā piesaiste valstij, reģionam un pilsētai',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'pēc izvēles sesijas ierakstīšana (Session Replay), pēc noklusējuma ar maskētiem tekstiem, attēliem un ievadēm',
    'optional Heatmaps und A/B-Tests'
        => 'pēc izvēles siltuma kartes un A/B testi',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Nodod atsauces avotu Split URL testos (konti no 14.06.2026.)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Nodod atsauces avotu Split URL testos (konti pirms 14.06.2026.)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Darījumu, piemēram, potenciālo klientu un pārdošanas, piesaiste izdevējam, Reklāmas līdzekļa efektivitātes mērīšana un komisijas norēķini',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Apmeklētāju un lapu skatījumu reģistrēšana vietnē mārketinga automatizācijai, Apmeklētāja piesaiste kontaktpersonai Brevo kontā pēc e-pasta adreses, Uzturētāja definētu pielāgotu notikumu reģistrēšana',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Rezervāciju kalendāra rādīšana un pierakstīšanās vietnē, Apmeklētāja atpazīšana rezervācijas procesā, Maksājumu apstrāde, ja pieraksts ir maksas',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Automatizētu pieprasījumu atklāšana un noraidīšana veidlapās, Pilnvaras izsniegšana, ko pārbauda vietnes serveris, Pre-Clearance režīmā: atļauja turpmākajām tās pašas zonas WAF pārbaudēm',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Lapas skatījumu un apmeklējumu mērīšana, Lapas ielādes laika un pamatrādītāju mērīšana (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Personalizētas reklāmas piegāde, Reklāmas ietekmes mērīšana, Pārlūka atpazīšana pēc Criteo identifikatora',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Lietošanas paradumu mērīšana vietnē, Pseidonimizētu lietošanas profilu veidošana pēc piekrišanas saņemšanas, Pārlūka atpazīšana vēlākos apmeklējumos pēc piekrišanas saņemšanas',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Lapas skatījumu un lietošanas paradumu mērīšana, Ritināšanas dziļuma un klikšķu notikumu mērīšana, Lietotāju atpazīšana pēc piekrišanas saņemšanas, Iebilduma pret mērīšanu pārvaldība',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Cilvēka un bota atšķiršana veidlapās un pieteikšanās procesā, Aizsardzība pret automatizētiem pieprasījumiem (mēstules, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Konversiju mērīšana, Remārketings un mērķauditoriju veidošana, Rādīšanas biežuma ierobežošana, Klikšķu krāpšanas atklāšana',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Sludinājumu rādīšana, Rādīšanas biežuma ierobežošana, Krāpšanas un ļaunprātīgas izmantošanas atklāšana, Rādījumu un klikšķu mērīšana',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Atsevišķu lietotāju atšķiršana, Sesijas stāvokļa saglabāšana, Sasniedzamības un lietojuma mērīšana',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Interaktīvas kartes rādīšana, Google veikta pakalpojuma pieejamības mērīšana',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Riska analīze, lai atšķirtu cilvēku no bota, Veidlapu aizsardzība pret automatizētu ļaunprātīgu izmantošanu',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Tagu piegāde un pārvaldība vietnē, Piekrišanas signālu izplatīšana Google tagiem',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Cilvēka un bota atšķiršana veidlapās un pieteikšanās procesā, Pārbaudes pieprasījumu slodzes sadale un maršrutēšana, Pieejamības rīka nodrošināšana',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Siltuma kartes, Sesijas ierakstīšana, Aptaujas',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Apmeklētāju atpazīšana vairākos apmeklējumos, Sesiju mērīšana un apmeklējuma avota piesaiste, Kontaktu dublikātu novēršana, Tērzēšanas logrīka darbība, Konsekventa A/B testu variantu rādīšana',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Tiešsaistes tērzēšana un atbalsta pastkaste vietnē, Atkārtotu apmeklētāju atpazīšana un iepriekšējo sarunu piesaiste, Ierīces atpazīšana aizsardzībai pret ļaunprātīgu izmantošanu, Messenger un apmeklētāju datu saglabāšana pārlūka kešatmiņā',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Finansēšanas un maksājumu pa daļām informācijas rādīšana produktu un groza lapās (on-site messaging), Paziņojumu satura piegāde sagatavotās vietās lapas pirmkodā, izmantojot reklāmas serveri',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Vietnes apmeklētāju atpazīšana un identificēšana, Uzvedības vietnē piesaiste profilam, Pieteikšanās veidlapu vadība vietnē',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'LinkedIn reklāmas kampaņu konversiju izsekošana, Vietnes apmeklētāju retargetings, Vietnes mērķauditorijas novērtēšana (vietnes demogrāfija)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Saistīto vietņu apmeklētāju atpazīšana retargetingam, Uznirstošo veidlapu vadība, lai tās neparādītos atkārtoti, Atvēršanu un klikšķu mērīšana e-pasta kampaņās, Google un Facebook reklāmas pikseļu iekļaušana saistītajā vietnē',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Interaktīvu karšu attēlošana vietnē, Kartes flīžu, fontu un stilu ielāde no pakalpojuma sniedzēja, Karšu izsaukumu norēķini un aizsardzība',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Lapas skatījumu, apmeklējumu un sesiju mērīšana, Atkārtoti atgriezušos apmeklētāju atpazīšana pēc apmeklētāja ID, Apmeklējuma izcelsmes piesaiste (atsauces avots, atribūcija), pēc izvēles siltuma kartes un A/B testi',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Lapas skatījumu, apmeklējumu un sesiju mērīšana savā serverī, Atkārtoti atgriezušos apmeklētāju atpazīšana pēc apmeklētāja ID, Apmeklējuma izcelsmes piesaiste (atsauces avots, atribūcija), pēc izvēles siltuma kartes un A/B testi',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Tagu piegāde un aktivizēšana vietnē, Piekrišanas lēmuma pārvaldība konteinerā konfigurētajiem tagiem',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Reklāmas kampaņu un konversiju mērīšana vietnē, Mērķauditoriju veidošana un retargetings',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Microsoft Advertising kampaņu konversiju izsekošana, Remārketinga sarakstu veidošana, Lapas skatījumu un pielāgotu notikumu mērīšana',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Sesiju ierakstīšana un atskaņošana, Klikšķu un ritināšanas paradumu siltuma kartes, Vairāku lapas skatījumu apvienošana vienā sesijā, automatizēta lietotāju uzvedības analīze',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Apmeklētāja veikta maksājuma apstrāde, Kartes lauku iegulšana savā apmaksas procesā, lai kartes dati neietu caur veikalu, Krāpšanas novēršana un maksājumu pakalpojumu sniedzēja likumā noteiktie pienākumi',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Peles kustību ierakstīšana, Sesijas atskaņošana, Lietošanas paradumu analīze',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Karšu elementu piegāde iegultajām kartēm, Karšu pakalpojumu darbība un aizsardzība pret ļaunprātīgu izmantošanu',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Maksājumu apstrāde, Krāpšanas novēršana',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Pinterest reklāmas kampaņu konversiju izsekošana, Mērķauditoriju veidošana un retargetings, Vietnē veikto darbību piesaiste iepriekš redzētajām reklāmām',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Lapas skatījumu un notikumu mērīšana, Apmeklētāju atpazīšana un piesaiste sesijām, Izcelsmes un kampaņu novērtēšana, Ierīces, pārlūka un aptuvenās atrašanās vietas novērtēšana, E-komercijas un mērķu novērtēšana',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Lapas skatījumu un apmeklējumu skaitīšana, Atsauces avotu novērtēšana, Pārlūka, operētājsistēmas un ierīces veida novērtēšana, aptuvena ģeogrāfiskā piesaiste valstij, reģionam un pilsētai',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Lietojumprogrammas kļūdu reģistrēšana un nosūtīšana no pārlūka, pēc izvēles sesijas ierakstīšana (Session Replay), pēc noklusējuma ar maskētiem tekstiem, attēliem un ievadēm',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Veikala groza un apmaksas procesa darbība, Sesijas un valodas vai valsts piesaiste, Sasniedzamības mērīšana veikala uzturētājam, Mārketinga dati pirkšanas saskarnēm',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Skaņdarbu, albumu, atskaņošanas sarakstu un podkāstu epizožu iegulšana un atskaņošana, Informācijas par šo lietotāju pārlūkošanas paradumiem vākšana, ko veic Spotify un trešās personas, Ļauj trešajām personām iestatīt sīkdatnes šo lietotāju pārlūkā',
    'Besucherzählung, Reichweitenmessung'
        => 'Apmeklētāju skaitīšana, Sasniedzamības mērīšana',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Krāpšanas atklāšana un maksājuma mēģinājumu riska novērtēšana, Stripe Elements maksājumu lauku nodrošināšana, Botu un automatizētas uzvedības atklāšana pasūtīšanas procesā',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Reklāmas kampaņu efektivitātes mērīšana un uzlabošana, Reklāmas personalizēšana TikTok platformā, Vietnes notikumu nodošana platformai TikTok',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Veidlapu un aptauju iegulšana vietnē, Atbilžu reģistrēšana un nodošana veidlapas uzturētājam',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Video iegulšana un atskaņošana vietnē, Skatītāja atskaņotāja iestatījumu saglabāšana (skaļums, kvalitāte, subtitri), Vimeo veikta iegulto video sasniedzamības mērīšana, Atskaņotāja aizsardzība pret botiem un ļaunprātīgu izmantošanu',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'A/B testi un split-URL testi vietnē, Varianta piešķiršana un saglabāšana vairākos apmeklējumos, Kampaņas mērķu un konversiju mērīšana, Apmeklētāju un sesiju mērīšana analīzei, Iebilduma un piekrišanas pārvaldība mērīšanai',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Groza piesaiste apmeklētājai, Konstatēšana, vai groza saturs ir mainījies, Pēdējo apskatīto preču rādīšana attiecīgajā logrīkā, Veikala paziņojuma paslēpšanas iegaumēšana',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Pieteikšanās un sesijas atpazīšana administrācijas sadaļā, Komentāra datu saglabāšana turpmākiem komentāriem, Administrācijas sadaļas skata iestatījumu iegaumēšana, Pārbaude, vai WordPress var iestatīt sīkdatnes, Izvēlētās valodas saglabāšana',
    'Conversion-Messung, Retargeting'
        => 'Konversiju mērīšana, Retargetings',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Iegulto video atskaņošana, Drošība, Ar reklāmu saistīta skatītāja atpazīšana',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Tiešsaistes tērzēšana un atbalsta ziņojumu kanāls vietnē, Apmeklētāja atpazīšana starp lapas skatījumiem un cilnēm, Logrīka stāvokļa un iestatījumu saglabāšana, Sesiju un notikumu mērīšana lapās ar logrīku',
];
