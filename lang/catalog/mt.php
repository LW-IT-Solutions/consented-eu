<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Maltesisch.
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
        => 'Testijiet A/B u testijiet Split URL fuq is-sit web',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Fatturazzjoni u protezzjoni tat-talbiet tal-mapep',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Tlestija tal-log-in bi Shop; meħtieġ',
    'Abspielen eingebetteter Videos'
        => 'Riproduzzjoni ta\' filmati inkorporati',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Ipproċessar ta\' ħlas mibdi mill-viżitatur',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Ipproċessar ta\' ħlasijiet meta l-appuntament ikun bi ħlas',
    'Analyse des Nutzungsverhaltens'
        => 'Analiżi tal-imġiba tal-użu',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Data analitika tal-interfaċċi tax-xiri; analiżi',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Data analitika tal-ħanut; ikklassifikata mill-fornitur bħala analiżi',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Data tal-log-in għaż-żona tal-amministrazzjoni taħt /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Log-in fi Shop Pay; meħtieġ',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Log-in u għarfien tas-sessjoni fiż-żona tal-amministrazzjoni',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Statistika anonima relatata mas-servizz u finijiet tekniċi oħra, fost l-oħrajn l-appoġġ tal-aċċessibbiltà',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Preferenzi tal-wiri taż-żona tal-amministrazzjoni għal kull kont',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Tiftakar il-preferenzi tal-wiri taż-żona tal-amministrazzjoni',
    'Anzeige von Bewertungen'
        => 'Wiri ta\' reċensjonijiet',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Wiri tal-kalendarju tal-ibbukkjar u ffissar ta\' appuntamenti fuq is-sit web',
    'Anzeigen einer interaktiven Karte'
        => 'Wiri ta\' mappa interattiva',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'Meta jkun issettjat għall-valur 1, jimpedixxi li jintbagħtu avvenimenti UET lil Microsoft',
    'Aufbau von Remarketing-Listen'
        => 'Bini ta\' listi ta\' remarketing',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Reġistrazzjoni u riproduzzjoni ta\' sessjonijiet',
    'Aufzeichnung von Mausbewegungen'
        => 'Reġistrazzjoni tal-movimenti tal-maws',
    'Ausblenden des Shop-Hinweises merken'
        => 'Tiftakar il-ħabi tal-avviż tal-ħanut',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Konsenja u attivazzjoni ta\' tags fuq is-sit web',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Konsenja u ġestjoni ta\' tags fuq is-sit web',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Konsenja ta\' madum tal-mapep lil mapep inkorporati',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Konsenja tal-kontenut tal-avviżi f\'postijiet imħejjija fil-kodiċi sors tal-paġna permezz ta\' ad server',
    'Auslieferung personalisierter Werbung'
        => 'Konsenja ta\' reklamar personalizzat',
    'Auslieferung von Anzeigen'
        => 'Konsenja ta\' reklami',
    'Auslieferung von Bibliotheken und Assets'
        => 'Konsenja ta\' libreriji u assets',
    'Auslieferung von Schriftarten'
        => 'Konsenja ta\' fonts',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Ħruġ ta\' token li s-server tas-sit web jivverifika',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Ġestjoni tal-formoli ta\' reġistrazzjoni fuq is-sit web',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Ġestjoni tal-formoli popup biex ma jidhrux ripetutament',
    'Auswahl des Rechenzentrums'
        => 'Għażla taċ-ċentru tad-data',
    'Auswertung der Verweisquellen'
        => 'Evalwazzjoni tas-sorsi referenti',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Evalwazzjoni tal-udjenza tas-sit web (demografija tas-sit web)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Evalwazzjoni tal-browser, tas-sistema operattiva u tat-tip ta\' apparat',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Evalwazzjoni tal-apparat, tal-browser u tal-post approssimattiv',
    'Auswertung von Herkunft und Kampagnen'
        => 'Evalwazzjoni tal-oriġini u tal-kampanji',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Jawtentika t-talbiet tal-utent finali',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Limitazzjoni tal-frekwenza tal-wiri',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Jixhed verifika mgħoddija, biex ma jkunx hemm challenges oħra taż-żona',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Provvista tal-oqsma tal-ħlas ta\' Stripe Elements',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Provvista tal-aċċess għall-aċċessibbiltà',
    'Besucherzählung'
        => 'Għadd tal-viżitaturi',
    'Betrieb des Chat-Widgets'
        => 'Tħaddim tal-widget tal-chat',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Tħaddim u protezzjoni kontra l-abbuż tas-servizzi tal-mapep',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Tħaddim tal-karrettun u tal-proċess ta\' ħlas ta\' ħanut',
    'Betrugs- und Missbrauchserkennung'
        => 'Individwazzjoni ta\' frodi u abbuż',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Individwazzjoni ta\' frodi fit-tentattiv ta\' ħlas',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Individwazzjoni ta\' frodi u evalwazzjoni tar-riskju tat-tentattivi ta\' ħlas',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Prevenzjoni tal-frodi u obbligi legali bħala fornitur ta\' servizzi ta\' ħlas',
    'Betrugsprävention'
        => 'Prevenzjoni tal-frodi',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Prevenzjoni tal-frodi u evalwazzjoni tar-riskju ta\' tentattiv ta\' ħlas',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Formazzjoni ta\' profili ta\' użu psewdonimizzati wara l-kunsens',
    'Bildung von Zielgruppen und Retargeting'
        => 'Formazzjoni ta\' udjenzi u retargeting',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Jorbot is-sessjoni mal-istess istanza tal-AWS',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Protezzjoni kontra bots u abbuż għall-player',
    'Bot-Abwehr fuer den Player'
        => 'Protezzjoni kontra bots għall-player',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Protezzjoni kontra bots fil-konsenja tar-riżorsi ta\' HubSpot',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Identifikatur tal-browser li bih LinkedIn jiddistingwi l-apparati u jindividwa l-abbuż',
    'Cloudflare-Bot-Abwehr'
        => 'Protezzjoni kontra bots ta\' Cloudflare',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Individwazzjoni ta\' bots ta\' Cloudflare għall-filtrazzjoni tat-traffiku',
    'Cloudflare-Ratenbegrenzung'
        => 'Limitazzjoni tar-rata ta\' Cloudflare',
    'Conversion-Messung'
        => 'Kejl tal-konverżjonijiet',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Traċċar tal-konverżjonijiet għall-kampanji ta\' reklamar ta\' LinkedIn',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Traċċar tal-konverżjonijiet għall-kampanji ta\' Microsoft Advertising',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Traċċar tal-konverżjonijiet għall-kampanji ta\' reklamar ta\' Pinterest',
    'Darstellung interaktiver Karten auf der Website'
        => 'Preżentazzjoni ta\' mapep interattivi fuq is-sit web',
    'Deduplizieren von Kontakten'
        => 'Tneħħija ta\' kuntatti duplikati',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Iservi biex jintwera u jitkejjel ir-reklamar.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'ID tal-viżitatur bejn id-dominji; skont il-fornitur cookie ta\' parti terza, jintuża biss meta l-cookies ta\' partijiet terzi jkunu attivati fil-fajl tal-konfigurazzjoni',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Identifikatur ta\' parti terza għall-għarfien mill-ġdid tal-viżitaturi',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Identifikatur ta\' parti terza li jgħaddi lil Klaviyo',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Identifikatur ta\' reklamar ta\' parti terza għall-kejl tal-kampanji u għall-personalizzazzjoni fuq TikTok',
    'E-Commerce- und Zielauswertung'
        => 'Evalwazzjoni tal-kummerċ elettroniku u tal-għanijiet',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Mili minn qabel tal-indirizz tal-email mill-formola tal-kummenti',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Inkorporazzjoni u riproduzzjoni ta\' traċċi, albums, playlists u episodji ta\' podcasts',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Inkorporazzjoni u riproduzzjoni ta\' filmati fuq is-sit web',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Inkorporazzjoni ta\' formoli u stħarriġ fis-sit web',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Inkorporazzjoni tal-oqsma tal-karta fil-checkout proprju, biex id-data tal-karta ma tgħaddix mill-ħanut',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Inkorporazzjoni ta\' dikjarazzjoni dwar il-cookies miżmuma esternament',
    'Einbettung von Audioinhalten'
        => 'Inkorporazzjoni ta\' kontenut awdjo',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Integrazzjoni ta\' pixels ta\' reklamar ta\' Google u Facebook fuq is-sit web konness',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Wiri ta\' avviżi dwar finanzjament u ħlas bin-nifs fuq il-paġni tal-prodotti u tal-karrettun (On-site Messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Identifikatur uniku fil-kejl bejn id-dominji (kontijiet mill-14/06/2026)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Identifikatur uniku fil-kejl bejn id-dominji (kontijiet qabel l-14/06/2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Valur ta\' darba kontra s-CSRF fil-formola tal-opt-out',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Fih identifikatur tal-utent u l-ħin tal-ħolqien; skont is-sors jiġi ssettjat fil-browser fl-app ta\' Pinterest, mhux fid-dominju tas-sit web',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Ġbir u trażmissjoni tat-tweġibiet lill-operatur tal-formola',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Jirreġistra l-użu tas-sit web għal finijiet ta\' evalwazzjoni.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Ġbir ta\' avvenimenti proprji definiti mill-operatur',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Ġbir u trażmissjoni ta\' żbalji tal-applikazzjoni mill-browser',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Ġbir ta\' viżitaturi u dehriet ta\' paġni fuq is-sit web għall-awtomatizzazzjoni tal-marketing',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Kejl tas-suċċess ta\' reklam u fatturazzjoni tal-kummissjoni',
    'Erhalt des Sitzungszustands'
        => 'Żamma tal-istat tas-sessjoni',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Għarfien tal-apparat għall-protezzjoni kontra l-abbuż',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Individwazzjoni u rifjut ta\' aċċessi awtomatizzati fil-formoli',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Individwazzjoni ta\' bots u ta\' mġiba awtomatizzata fil-proċess tal-ordni',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Individwazzjoni ta\' jekk il-kontenut tal-karrettun inbidilx',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Jagħraf bidliet fil-kontenut tal-karrettun',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Jagħraf il-viżitaturi tas-sit web li fih hu integrat il-kodiċi ta\' Intercom',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Jagħraf mill-ġdid browsers fuq is-siti ta\' Microsoft; skont il-fornitur jintuża wkoll għar-reklamar, cookie ta\' parti terza',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Jagħraf mill-ġdid il-persuni li jiktbu permezz tal-għodda tal-chat',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Jagħraf l-apparat li minnu tibda l-konversazzjoni',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Jagħraf l-apparat individwali li jinteraġixxi mal-Messenger, għall-protezzjoni kontra l-abbuż',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Jagħraf l-utent finali li jibda l-konversazzjoni',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Jagħraf id-dominju jew is-subdominju li fih hu integrat il-widget tal-chat',
    'Erkennt wiederkehrende Besucher'
        => 'Jagħraf viżitaturi rikorrenti',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Jagħraf jekk il-browser reġax inbeda',
    'Erkennung von Klickbetrug'
        => 'Individwazzjoni ta\' frodi tal-klikks',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Jiddetermina l-aċċessi uniċi għas-sit web (kontijiet mill-14/06/2026)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Jiddetermina l-aċċessi uniċi għas-sit web (kontijiet qabel l-14/06/2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Jippermettu li partijiet terzi jissettjaw cookies fil-browser ta\' dawn l-utenti',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Jippermetti l-użu tal-aċċess għall-aċċessibbiltà',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Jippermetti funzjonijiet addizzjonali tas-sit web.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Identifikatur tal-ewwel parti li jagħraf mill-ġdid il-viżitaturi u jassenja l-avvenimenti tas-sit web',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Identifikatur tal-viżitatur tal-ewwel parti għat-traċċar tal-konverżjonijiet u għar-remarketing',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Identifikatur tas-sessjoni tal-ewwel parti għall-assenjazzjoni tal-avvenimenti',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Identifikatur tas-sessjoni tal-ewwel parti għal kull pixel għall-kejl tal-kampanji',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Identifikatur tas-sessjoni tal-ewwel parti għall-kejl tal-kampanji',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Identifikatur ta\' reklamar tal-ewwel parti għall-kejl tal-kampanji u għall-personalizzazzjoni fuq TikTok',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Cookie tal-ewwel parti li jiġbor flimkien l-azzjonijiet ta\' viżitaturi li Pinterest ma jistax jassenja',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Cookie tal-ewwel parti li jaħżen id-data tal-klijenti hashed miġbura permezz ta\' Automatic Enhanced Match',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Joħloq identifikatur uniku għal kull viżitatur (kontijiet mill-14/06/2026)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Joħloq identifikatur uniku għal kull viżitatur (kontijiet qabel l-14/06/2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identifikatur tal-apparat għall-evalwazzjoni tal-avvenimenti fuq paġni bil-widget',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Jiġi ssettjat mal-log-in fuq paġna ospitata minn HubSpot',
    'Gewaehlte Sprache speichern'
        => 'Ħażna tal-lingwa magħżula',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Jallinja l-identifikatur MUID bejn id-dominji ta\' Microsoft; skont il-fornitur cookie ta\' parti terza',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Iżomm il-messaġġi sinkronizzati bejn diversi tabs',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Iżomm il-valur tal-parametru pk_campaign',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Iżomm il-valur tal-parametru utm_campaign',
    'Haelt den Widerspruch gegen die Messung'
        => 'Iżomm l-oġġezzjoni għall-kejl',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Iżomm il-ħin ta\' skadenza ta\' _uetsid',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Iżomm il-ħin ta\' skadenza ta\' _uetvid',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Iżomm it-tip tas-sors tat-traffiku għat-Tag Manager',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Jirreġistra l-identità tal-viżitatur, anke għat-tneħħija ta\' kuntatti duplikati',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Jirreġistra d-deċiżjoni tal-viżitatur dwar il-cookies',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Iżomm il-preżentazzjoni tal-widget konsistenti meta tinbidel il-paġna',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Jirreġistra l-paġna tad-dħul; analiżi',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Iżomm il-kunsens għall-kejl bil-cookies',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Iżomm id-deċiżjoni tal-utent dwar il-kategoriji u l-fornituri',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Iżomm is-sessjoni tal-utenti li għamlu log-in u l-aċċess għal konversazzjonijiet preċedenti',
    'Haelt die verweisende Adresse'
        => 'Iżomm l-indirizz referenti',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Jirreġistra s-sors referenti; analiżi',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Iżomm il-varjabbli proprji tas-sessjoni (immarkat mill-fornitur bħala obsolet)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Jirreġistra jekk etracker jistax jissettja cookies; jiġi ssettjat b\'sejħa tal-API meta jintuża data-block-cookies',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Jirreġistra liema swiċċijiet ta\' funzjoni attiva s-sid tal-filmat',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Cookie prinċipali għall-għarfien mill-ġdid tal-viżitaturi',
    'Heatmaps'
        => 'Heatmaps',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Heatmaps tal-klikks u tal-imġiba tal-iscrolling',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Iżomm id-data tas-sessjoni tal-heatmap għat-tul taż-żjara',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Iżomm informazzjoni dwar is-sessjoni li għaddejja (kontijiet mill-14/06/2026)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Iżomm informazzjoni dwar is-sessjoni li għaddejja (kontijiet qabel l-14/06/2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Iżomm il-varjabbli personalizzati għat-tul taż-żjara',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Iżomm data permanenti fil-livell tal-viżitatur (kontijiet mill-14/06/2026)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Iżomm data permanenti fil-livell tal-viżitatur għall-evalwazzjoni tal-Insights (kontijiet qabel l-14/06/2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Jirreġistra l-istat tal-kunsens tal-viżitatur (kontijiet mill-14/06/2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Jirreġistra l-istat tal-kunsens tal-viżitatur (kontijiet qabel l-14/06/2026)',
    'Hält den Sitzungszustand.'
        => 'Iżomm l-istat tas-sessjoni.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Iżomm l-identifikatur tal-utent ta\' Clarity u l-preferenzi għal dan is-sit web',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Iżomm l-assenjazzjoni tal-varjanti għat-testijiet A/B',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Iżomm temporanjament il-kombinazzjoni magħżula (kontijiet mill-14/06/2026)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Iżomm temporanjament il-kombinazzjoni magħżula (kontijiet qabel l-14/06/2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Jirreġistra l-varjant magħżul qabel ma sseħħ ir-ridirezzjoni (kontijiet mill-14/06/2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Jirreġistra l-varjant magħżul qabel ma sseħħ ir-ridirezzjoni (kontijiet qabel l-14/06/2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Jirreġistra minn liema riferiment seħħet iż-żjara',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Fil-modalità Pre-Clearance: awtorizzazzjoni għal verifiki WAF oħra tal-istess żona',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Identifikatur indirett tal-membru għat-traċċar tal-konverżjonijiet, għar-retargeting u għall-analiżi',
    'Inhalt des Warenkorbs; notwendig'
        => 'Il-kontenut tal-basket tax-xiri; essenzjali',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Data analitika marbuta max-xerrej fil-ħanut; statistika',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Identifikatur uniku marbut mal-kampanja (kontijiet mill-14.06.2026)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Identifikatur tal-ewwel kuntatt ma\' Clarity fis-siti kollha ta\' Clarity; skont il-fornitur, cookie ta\' parti terza',
    'Kennzeichnet die laufende Sitzung'
        => 'Jimmarka s-sessjoni li għaddejja',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Iż-żamma tad-data tal-kummenti għal kummenti oħra',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Wiri konsistenti tal-varjanti tat-test A/B',
    'Lastverteilung und Routing'
        => 'Bilanċ tat-tagħbija u routing',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Distribuzzjoni tat-tagħbija u routing tat-talbiet challenge',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Jaħżen lokalment il-preferenzi tal-kont tal-viżitatur',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Iwassal dejjem l-istess varjant ta\' paġna ta\' test A/B',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Chat live u kanal ta\' messaġġi għall-appoġġ fuq is-sit web',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Chat live u kaxxa tal-appoġġ fuq is-sit web',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Data ta\' marketing tal-interfaċċi tax-xiri; marketing',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Data ta\' marketing għall-interfaċċi tax-xiri',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Żamma tal-preferenzi tal-player tal-ispettatur (volum, kwalità, sottotitli)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Żamma tal-istat u tal-preferenzi tal-widget',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Jiftakar l-għeluq tal-banner Global Privacy Control',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Jiftakar l-għeluq tal-banner ta\' avviż',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Jiftakar il-ħin tal-allinjament mal-cookie lms_analytics',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Jiftakar il-ħin tal-aħħar allinjament tal-ID, biex l-allinjament ma jerġax isir',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Jiftakar il-varjant assenjat (kontijiet mill-14.06.2026)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Jiftakar il-varjant assenjat, biex jibqa\' l-istess f\'żjara oħra (kontijiet qabel l-14.06.2026)',
    'Merkt einen Rabattcode; notwendig'
        => 'Jiftakar kodiċi ta\' skont; essenzjali',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Jiftakar oġġezzjoni kontra l-kejl (kontijiet mill-14.06.2026)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Jiftakar oġġezzjoni li tapplika għal diversi siti (kontijiet qabel l-14.06.2026)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Jiftakar preferenzi tal-player bħall-volum, il-kwalità u s-sottotitli',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Jiftakar il-preferenza għan-notifiki bil-ħoss',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Jiftakar kunsens mogħti għall-kejl',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Jiftakar oġġezzjoni għall-kejl',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Jiftakar messaġġi proattivi li ġew magħluqa',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Jiftakar li l-viżitatur għalaq it-tikketta tal-buttuna tal-bidu',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Jiftakar jekk il-widget huwiex miftuħ jew magħluq',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Jiftakar li l-viżitatur ma għandux jipparteċipa f\'ebda kampanja (kontijiet qabel l-14.06.2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Jiftakar li l-viżitatur huwa eskluż mill-kampanja (kontijiet mill-14.06.2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Jiftakar li l-viżitatur huwa eskluż mill-kampanja (kontijiet qabel l-14.06.2026)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Jiftakar li l-avviż dwar il-kunsens ingħalaq',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Jiftakar li l-avviż tal-ħanut ingħalaq',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Jiftakar li l-mistoqsija dwar il-cookies ma għandhiex terġa\' ssir',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Jiftakar li tag diġà ġie attivat',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Jiftakar jekk għal dan il-viżitatur jitkejjilx il-fond tal-iscroll',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Jiftakar jekk it-tieqa tal-chat hijiex miftuħa',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Jiftakar jekk l-identifikatur MUID jgħaddix lil identifikatur tar-reklamar; skont il-fornitur dejjem 0, cookie ta\' parti terza',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Kejl tal-ftuħ u tal-klikks fil-kampanji bl-email',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Kejl tas-sessjonijiet u tal-avvenimenti fuq paġni bil-widget',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Kejl tas-sessjonijiet u attribuzzjoni tas-sors taż-żjara',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Kejl tad-disponibbiltà tas-servizz minn Google',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Kejl tal-ħin tat-tagħbija u tal-indikaturi ewlenin tal-paġna (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Kejl tal-fond tal-iscroll u tal-avvenimenti ta\' klikk',
    'Messung der Werbewirkung'
        => 'Kejl tal-effett tar-reklamar',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Kejl tal-imġiba tal-użu fuq is-sit web',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Kejl u personalizzazzjoni tar-reklami fin-netwerk tar-reklamar TikTok Pangle',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Kejl u titjib tal-prestazzjoni tal-kampanji ta\' reklamar',
    'Messung von Auslieferungen und Klicks'
        => 'Kejl tal-wiri u tal-klikks',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Kejl tal-viżitaturi u tas-sessjonijiet għall-analiżi',
    'Messung von Conversions'
        => 'Kejl tal-konverżjonijiet',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Kejl tal-aċċessi għall-paġni u taż-żjarat',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Kejl tal-aċċessi għall-paġni u tal-avvenimenti',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Kejl tal-aċċessi għall-paġni u tal-imġiba tal-użu',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Kejl tal-aċċessi għall-paġni u tal-avvenimenti personalizzati',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Kejl tal-aċċessi għall-paġni, taż-żjarat u tas-sessjonijiet',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Kejl tal-aċċessi għall-paġni, taż-żjarat u tas-sessjonijiet fuq server proprju',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Kejl tal-kampanji ta\' reklamar u tal-konverżjonijiet fuq is-sit web',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Kejl tal-għanijiet u tal-konverżjonijiet ta\' kampanja',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Tagħbija ta\' madum tal-mapep, tipi ta\' karattri u stili mingħand il-fornitur',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Mili minn qabel tal-isem fil-formola tal-kummenti',
    'Nutzer-ID'
        => 'ID tal-utent',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Jattribwixxi l-basket tax-xiri lill-pajjiż korrett; essenzjali',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Jattribwixxi l-basket tax-xiri fil-bażi tad-data lill-klijent korrett',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Jassenja l-azzjonijiet ta\' żjara lil sessjoni',
    'Personalisierung der Werbung auf TikTok'
        => 'Personalizzazzjoni tar-reklamar fuq TikTok',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Verifika jekk WordPress jistax jissettja cookies',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Jivverifika l-kapaċità tal-browser għall-cookies; essenzjali',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Jivverifika jekk WordPress jistax jissettja cookies',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Valur ta\' verifika tal-password tal-ħanut; essenzjali',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Cookie ta\' verifika tal-fornitur (kontijiet qabel l-14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Jivverifika jekk il-browser jaċċettax cookies (kontijiet mill-14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Jivverifika jekk il-browser jaċċettax cookies (kontijiet qabel l-14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Jiċċekkja jekk il-browser jaċċettax cookies (skont il-fornitur biss f\'Internet Explorer)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Limitazzjoni tar-rata mal-fornitur tas-CDN ta\' HubSpot',
    'Reichweiten- und Nutzungsmessung'
        => 'Kejl tal-udjenza u tal-użu',
    'Reichweitenmessung'
        => 'Kejl tal-udjenza',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Kejl tal-udjenza tal-filmati inkorporati minn Vimeo',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Kejl tal-udjenza għall-operatur tal-ħanut',
    'Remarketing und Zielgruppenbildung'
        => 'Remarketing u formazzjoni ta\' udjenzi fil-mira',
    'Retargeting'
        => 'Retargeting',
    'Retargeting von Website-Besuchern'
        => 'Retargeting tal-viżitaturi tas-sit web',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Analiżi tar-riskju biex issir distinzjoni bejn bniedem u bot',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Cookie ta\' ġbir, skont il-fornitur jinħoloq biss fil-browser Safari (kontijiet mill-14.06.2026)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Cookie ta\' ġbir, skont il-fornitur jinħoloq biss fil-browser Safari (kontijiet qabel l-14.06.2026)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Ġbir ta\' informazzjoni dwar l-imġiba ta\' browsing ta\' dawn l-utenti minn Spotify u minn partijiet terzi',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Swiċċ li l-operatur tas-sit web jissettja huwa stess biex iwaqqaf it-traċċar ta\' Klaviyo',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Protezzjoni tal-login tal-membri kontra l-falsifikazzjoni',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Protezzjoni tal-formoli mill-abbuż awtomatizzat',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Protezzjoni minn talbiet awtomatizzati (spam, credential stuffing)',
    'Sicherheit'
        => 'Sigurtà',
    'Sicherheitsfunktionen'
        => 'Funzjonijiet ta\' sigurtà',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Funzjonijiet ta\' sigurtà meta l-funzjoni fakultattiva User Journeys tkun attiva',
    'Sitzung'
        => 'Sessjoni',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Attribuzzjoni tas-sessjoni u tal-lingwa jew tal-pajjiż',
    'Sitzungsaufzeichnung'
        => 'Reġistrazzjoni tas-sessjoni',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identifikatur tas-sessjoni għall-analiżi tal-avvenimenti fuq paġni bil-widget',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Identifikatur tas-sessjoni għall-istatistika tal-ħanut; statistika',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Ċavetta tas-sessjoni tas-servizz Answer Bot',
    'Sitzungswiedergabe'
        => 'Riproduzzjoni tas-sessjoni',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Jaħżen it-token tal-awtentikazzjoni wara l-login',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Jaħżen il-password ikkodifikata għal filmati protetti bil-password',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Jaħżen iċ-ċavetta tal-lingwa magħżula',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Jaħżen il-preferenza tal-privatezza tal-viżitatur; essenzjali',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Jaħżen id-deċiżjoni tal-kunsens tal-viżitatur',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Jaħżen l-identifikatur tal-apparat tal-viżitatur għall-awtentikazzjoni fil-widget tal-chat',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Jaħżen l-identifikatur ta\' utent irreġistrat għal webinar',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Jaħżen l-identifikatur tal-klikk fbclid, biex avveniment fuq is-sit web ikun jista\' jiġi attribwit lil reklam',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Jaħżen l-identifikatur tal-utent minn formola ta\' reġistrazzjoni li tidher qabel il-filmat',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Jaħżen l-identifikatur tal-klikk ta\' TikTok għall-attribuzzjoni tal-konverżjonijiet',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Jaħżen l-ID uniku tal-viżitatur għall-għarfien mill-ġdid',
    'Speichert die zugestimmten Kategorien'
        => 'Jaħżen il-kategoriji li ngħata kunsens għalihom',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Jimla l-widget tal-aħħar prodotti li ntwerew',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Jikkontrolla jekk l-identifikatur MUID jiġġeddidx; skont il-fornitur, cookie ta\' parti terza',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Teknikament meħtieġ għat-tħaddim u s-sigurtà tas-sit web.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Iġorr id-data tas-sessjoni u tal-checkout tal-ħanut; il-fornitur iqisu essenzjali',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Iġorr il-funzjoni ta\' oġġezzjoni (opt-out)',
    'Transaktionssicherheit'
        => 'Sigurtà tat-tranżazzjonijiet',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Iġorr l-analiżi tar-riskju ta\' reCAPTCHA.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Trasmissjoni ta\' avvenimenti tas-sit web lil TikTok',
    'Umfragen'
        => 'Stħarriġ',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Iwaqqaf it-trasmissjoni tad-data lil HubSpot',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Jaħbi l-messaġġ ta\' merħba tal-chat wara li dan jingħalaq',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Jiddistingwi l-browsers li jaċċessaw paġni ta\' Microsoft; bil-kunsens, anke għar-reklamar',
    'Unterscheidet einzelne Nutzer.'
        => 'Jiddistingwi l-utenti individwali.',
    'Unterscheidung einzelner Nutzer'
        => 'Distinzjoni tal-utenti individwali',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Distinzjoni bejn bniedem u bot fil-formoli u fil-log-ins',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Jgħaqqad diversi aċċessi għall-paġni f\'reġistrazzjoni waħda tas-sessjoni',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Jipprevjeni l-wiri kontinwu tal-banner fil-modalità stretta',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Distribuzzjoni tas-sinjali tal-kunsens lit-tags ta\' Google',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Ġestjoni tad-deċiżjoni tal-kunsens għat-tags ikkonfigurati fil-kontenitur',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Ġestjoni tal-oġġezzjoni kontra l-kejl',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Ġestjoni tal-oġġezzjoni u tal-kunsens għall-kejl',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Assenjat minn Google lill-kategoriji Statistika u Reklamar.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Klassifikat minn Google fil-kategoriji analiżi, reklamar u sigurtà.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Assenjat minn Google lill-kategoriji Funzjonalità, Reklamar u Sigurtà.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Klassifikat minn Google fil-kategoriji sigurtà u funzjonalità.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Klassifikat minn Google fil-kategoriji sigurtà u reklamar.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Klassifikat minn Google fil-kategoriji sigurtà, analiżi, funzjonalità u reklamar.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Assenjat minn Google lill-kategoriji Sigurtà, Funzjonalità u Reklamar.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Klassifikat minn Google fil-kategoriji reklamar u sigurtà.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Klassifikat minn Google fil-kategorija analiżi; Google ma jsemmix skop aktar preċiż.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Klassifikat minn Google fil-kategorija funzjonalità.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Klassifikat minn Google fil-kategorija sigurtà.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Klassifikat minn Google fil-kategorija reklamar.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Imsemmi minn Microsoft bħala wieħed mill-cookies li ma jistgħux jiġu ssettjati mingħajr kunsens; Microsoft ma jagħti l-ebda deskrizzjoni tal-iskop tiegħu',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Identifikatur maħluq minn Vimeo għall-kejl tal-udjenza',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Munita tal-basket tax-xiri wara li jitlesta l-checkout; essenzjali',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Attribuzzjoni probabilistika ta\' browser lil persuna',
    'Warenkorb einer Besucherin zuordnen'
        => 'Attribuzzjoni tal-basket tax-xiri lil viżitatur',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Mili minn qabel tal-indirizz tas-sit web fil-formola tal-kummenti',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Rikonoxximent tal-ispettatur għal finijiet ta\' reklamar',
    'Werbepersonalisierung'
        => 'Personalizzazzjoni tar-reklamar',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Bħal _pin_unauth, iżda bħala cookie ta\' parti terza',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Rikonoxximent tal-viżitatur fi ħdan il-proċess ta\' prenotazzjoni',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Rikonoxximent tal-viżitatur bejn aċċessi għall-paġni u tabs',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Rikonoxximent u identifikazzjoni tal-viżitaturi tas-sit web',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Rikonoxximent tal-viżitaturi matul diversi żjarat',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Rikonoxximent tal-viżitaturi ta\' siti web assoċjati għar-retargeting',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Rikonoxximent ta\' viżitaturi li jirritornaw u attribuzzjoni ta\' konverżazzjonijiet preċedenti',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Rikonoxximent tal-viżitatur u ħażna tal-karatteristiċi tiegħu',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Rikonoxximent tal-browser permezz tal-identifikatur ta\' Criteo',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Rikonoxximent tal-utent; biss bil-kunsens, imblukkat b\'mod prestabbilit',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Rikonoxximent ta\' browser fi żjarat sussegwenti wara l-kunsens',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Rikonoxximent tal-viżitaturi u attribuzzjoni għal sessjonijiet',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'Rikonoxximent ta\' membri ta\' LinkedIn barra minn LinkedIn għar-reklamar',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Rikonoxximent tal-utenti wara l-kunsens',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Għarfien mill-ġdid ta\' viżitaturi rikorrenti permezz ta\' ID tal-viżitatur',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Jiġi ssettjat meta jkun ġie attivat għan ta\' kampanja (kontijiet mill-14.06.2026)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Jiġi ssettjat meta jkun ġie attivat għan ta\' kampanja (kontijiet qabel l-14.06.2026)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Jiġi ssettjat meta persuna żżur sit web li fih ikun inkorporat it-tag ta\' Pinterest',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Jiġi ssettjat meta attribuzzjoni tirnexxi mingħajr cookies eżistenti, pereżempju permezz ta\' Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Jiġi ssettjat mit-tag JavaScript abbażi ta\' data li Pinterest tgħaddi mat-traffiku rreklamat',
    'Zaehlt und begrenzt Sitzungen'
        => 'Jgħodd u jillimita s-sessjonijiet',
    'Zahlungsabwicklung'
        => 'Ipproċessar tal-pagamenti',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Jindika jekk is-sessjoni għadhiex għaddejja jew hijiex ġdida',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Jindika lill-interfaċċa li l-utent huwa llogjat u bħala min',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Identifikatur każwali tal-browser li jattribwixxi l-avvenimenti tal-pixel ta\' sit web lil browser wieħed',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Wiri tal-aħħar prodotti li ntwerew fil-widget korrispondenti',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Attribuzzjoni tal-imġiba fuq is-sit web lil profil',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Attribuzzjoni tal-oriġini ta\' żjara (referrer, attribuzzjoni)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Attribuzzjoni ta\' viżitatur lil kuntatt fil-kont ta\' Brevo permezz tal-indirizz tal-email',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Attribuzzjoni ta\' tranżazzjonijiet bħal leads u bejgħ lil pubblikatur',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Attribuzzjoni ta\' azzjonijiet fuq is-sit web lil reklami li ntwerew qabel',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Għaqda ta\' diversi aċċessi għall-paġni f\'sessjoni waħda',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Data addizzjonali dwar avvenimenti rreġistrati fl-istorja taż-żjara',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Assenjazzjoni u żamma ta\' varjant matul diversi żjarat',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Cache għall-avvenimenti bbażati fuq selekturi CSS',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Cache għad-data tal-Messenger u tal-viżitatur fil-ħażna tal-browser',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Cache għall-entrati tat-Tag Manager',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Cache għall-kejl tal-fond tal-iscroll',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Cache għall-varjabbli tat-Tag Manager',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Cache għall-preferenzi tal-widget, biex jiġu evitati talbiet ripetuti lis-server',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Ħażna fil-cache tad-data tal-Messenger u tal-viżitatur fil-browser',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Jgħodd is-sessjonijiet maħluqa għal viżitatur (kontijiet mill-14.06.2026)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Jgħodd kemm-il darba l-browser ingħalaq u reġa\' nfetaħ matul il-kejl (kontijiet qabel l-14.06.2026)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Għadd tal-aċċessi għall-paġni u taż-żjarat',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'analiżi awtomatizzati tal-imġiba tal-utenti',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'attribuzzjoni ġeografika approssimattiva għal pajjiż, reġjun u belt',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'fakultattivament ir-reġistrazzjoni tas-sessjoni (Session Replay), b\'mod prestabbilit b\'testi, immaġni u input moħbija',
    'optional Heatmaps und A/B-Tests'
        => 'fakultattivament heatmaps u testijiet A/B',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Jgħaddi s-sors ta\' riferiment fit-testijiet split URL (kontijiet mill-14.06.2026)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Jgħaddi s-sors ta\' riferiment fit-testijiet split URL (kontijiet qabel l-14.06.2026)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Attribuzzjoni ta\' tranżazzjonijiet bħal leads u bejgħ lil pubblikatur, Kejl tas-suċċess ta\' reklam u fatturazzjoni tal-kummissjoni',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Ġbir ta\' viżitaturi u dehriet ta\' paġni fuq is-sit web għall-awtomatizzazzjoni tal-marketing, Attribuzzjoni ta\' viżitatur lil kuntatt fil-kont ta\' Brevo permezz tal-indirizz tal-email, Ġbir ta\' avvenimenti proprji definiti mill-operatur',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Wiri tal-kalendarju tal-ibbukkjar u ffissar ta\' appuntamenti fuq is-sit web, Rikonoxximent tal-viżitatur fi ħdan il-proċess ta\' prenotazzjoni, Ipproċessar ta\' ħlasijiet meta l-appuntament ikun bi ħlas',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Individwazzjoni u rifjut ta\' aċċessi awtomatizzati fil-formoli, Ħruġ ta\' token li s-server tas-sit web jivverifika, Fil-modalità Pre-Clearance: awtorizzazzjoni għal verifiki WAF oħra tal-istess żona',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Kejl tal-aċċessi għall-paġni u taż-żjarat, Kejl tal-ħin tat-tagħbija u tal-indikaturi ewlenin tal-paġna (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Konsenja ta\' reklamar personalizzat, Kejl tal-effett tar-reklamar, Rikonoxximent tal-browser permezz tal-identifikatur ta\' Criteo',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Kejl tal-imġiba tal-użu fuq is-sit web, Formazzjoni ta\' profili ta\' użu psewdonimizzati wara l-kunsens, Rikonoxximent ta\' browser fi żjarat sussegwenti wara l-kunsens',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Kejl tal-aċċessi għall-paġni u tal-imġiba tal-użu, Kejl tal-fond tal-iscroll u tal-avvenimenti ta\' klikk, Rikonoxximent tal-utenti wara l-kunsens, Ġestjoni tal-oġġezzjoni kontra l-kejl',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Distinzjoni bejn bniedem u bot fil-formoli u fil-log-ins, Protezzjoni minn talbiet awtomatizzati (spam, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Kejl tal-konverżjonijiet, Remarketing u formazzjoni ta\' udjenzi fil-mira, Limitazzjoni tal-frekwenza tal-wiri, Individwazzjoni ta\' frodi tal-klikks',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Konsenja ta\' reklami, Limitazzjoni tal-frekwenza tal-wiri, Individwazzjoni ta\' frodi u abbuż, Kejl tal-wiri u tal-klikks',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Distinzjoni tal-utenti individwali, Żamma tal-istat tas-sessjoni, Kejl tal-udjenza u tal-użu',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Wiri ta\' mappa interattiva, Kejl tad-disponibbiltà tas-servizz minn Google',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Analiżi tar-riskju biex issir distinzjoni bejn bniedem u bot, Protezzjoni tal-formoli mill-abbuż awtomatizzat',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Konsenja u ġestjoni ta\' tags fuq is-sit web, Distribuzzjoni tas-sinjali tal-kunsens lit-tags ta\' Google',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Distinzjoni bejn bniedem u bot fil-formoli u fil-log-ins, Distribuzzjoni tat-tagħbija u routing tat-talbiet challenge, Provvista tal-aċċess għall-aċċessibbiltà',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Heatmaps, Reġistrazzjoni tas-sessjoni, Stħarriġ',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Rikonoxximent tal-viżitaturi matul diversi żjarat, Kejl tas-sessjonijiet u attribuzzjoni tas-sors taż-żjara, Tneħħija ta\' kuntatti duplikati, Tħaddim tal-widget tal-chat, Wiri konsistenti tal-varjanti tat-test A/B',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Chat live u kaxxa tal-appoġġ fuq is-sit web, Rikonoxximent ta\' viżitaturi li jirritornaw u attribuzzjoni ta\' konverżazzjonijiet preċedenti, Għarfien tal-apparat għall-protezzjoni kontra l-abbuż, Ħażna fil-cache tad-data tal-Messenger u tal-viżitatur fil-browser',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Wiri ta\' avviżi dwar finanzjament u ħlas bin-nifs fuq il-paġni tal-prodotti u tal-karrettun (On-site Messaging), Konsenja tal-kontenut tal-avviżi f\'postijiet imħejjija fil-kodiċi sors tal-paġna permezz ta\' ad server',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Rikonoxximent u identifikazzjoni tal-viżitaturi tas-sit web, Attribuzzjoni tal-imġiba fuq is-sit web lil profil, Ġestjoni tal-formoli ta\' reġistrazzjoni fuq is-sit web',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Traċċar tal-konverżjonijiet għall-kampanji ta\' reklamar ta\' LinkedIn, Retargeting tal-viżitaturi tas-sit web, Evalwazzjoni tal-udjenza tas-sit web (demografija tas-sit web)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Rikonoxximent tal-viżitaturi ta\' siti web assoċjati għar-retargeting, Ġestjoni tal-formoli popup biex ma jidhrux ripetutament, Kejl tal-ftuħ u tal-klikks fil-kampanji bl-email, Integrazzjoni ta\' pixels ta\' reklamar ta\' Google u Facebook fuq is-sit web konness',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Preżentazzjoni ta\' mapep interattivi fuq is-sit web, Tagħbija ta\' madum tal-mapep, tipi ta\' karattri u stili mingħand il-fornitur, Fatturazzjoni u protezzjoni tat-talbiet tal-mapep',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Kejl tal-aċċessi għall-paġni, taż-żjarat u tas-sessjonijiet, Għarfien mill-ġdid ta\' viżitaturi rikorrenti permezz ta\' ID tal-viżitatur, Attribuzzjoni tal-oriġini ta\' żjara (referrer, attribuzzjoni), fakultattivament heatmaps u testijiet A/B',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Kejl tal-aċċessi għall-paġni, taż-żjarat u tas-sessjonijiet fuq server proprju, Għarfien mill-ġdid ta\' viżitaturi rikorrenti permezz ta\' ID tal-viżitatur, Attribuzzjoni tal-oriġini ta\' żjara (referrer, attribuzzjoni), fakultattivament heatmaps u testijiet A/B',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Konsenja u attivazzjoni ta\' tags fuq is-sit web, Ġestjoni tad-deċiżjoni tal-kunsens għat-tags ikkonfigurati fil-kontenitur',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Kejl tal-kampanji ta\' reklamar u tal-konverżjonijiet fuq is-sit web, Formazzjoni ta\' udjenzi u retargeting',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Traċċar tal-konverżjonijiet għall-kampanji ta\' Microsoft Advertising, Bini ta\' listi ta\' remarketing, Kejl tal-aċċessi għall-paġni u tal-avvenimenti personalizzati',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Reġistrazzjoni u riproduzzjoni ta\' sessjonijiet, Heatmaps tal-klikks u tal-imġiba tal-iscrolling, Għaqda ta\' diversi aċċessi għall-paġni f\'sessjoni waħda, analiżi awtomatizzati tal-imġiba tal-utenti',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Ipproċessar ta\' ħlas mibdi mill-viżitatur, Inkorporazzjoni tal-oqsma tal-karta fil-checkout proprju, biex id-data tal-karta ma tgħaddix mill-ħanut, Prevenzjoni tal-frodi u obbligi legali bħala fornitur ta\' servizzi ta\' ħlas',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Reġistrazzjoni tal-movimenti tal-maws, Riproduzzjoni tas-sessjoni, Analiżi tal-imġiba tal-użu',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Konsenja ta\' madum tal-mapep lil mapep inkorporati, Tħaddim u protezzjoni kontra l-abbuż tas-servizzi tal-mapep',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Ipproċessar tal-pagamenti, Prevenzjoni tal-frodi',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Traċċar tal-konverżjonijiet għall-kampanji ta\' reklamar ta\' Pinterest, Formazzjoni ta\' udjenzi u retargeting, Attribuzzjoni ta\' azzjonijiet fuq is-sit web lil reklami li ntwerew qabel',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Kejl tal-aċċessi għall-paġni u tal-avvenimenti, Rikonoxximent tal-viżitaturi u attribuzzjoni għal sessjonijiet, Evalwazzjoni tal-oriġini u tal-kampanji, Evalwazzjoni tal-apparat, tal-browser u tal-post approssimattiv, Evalwazzjoni tal-kummerċ elettroniku u tal-għanijiet',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Għadd tal-aċċessi għall-paġni u taż-żjarat, Evalwazzjoni tas-sorsi referenti, Evalwazzjoni tal-browser, tas-sistema operattiva u tat-tip ta\' apparat, attribuzzjoni ġeografika approssimattiva għal pajjiż, reġjun u belt',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Ġbir u trażmissjoni ta\' żbalji tal-applikazzjoni mill-browser, fakultattivament ir-reġistrazzjoni tas-sessjoni (Session Replay), b\'mod prestabbilit b\'testi, immaġni u input moħbija',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Tħaddim tal-karrettun u tal-proċess ta\' ħlas ta\' ħanut, Attribuzzjoni tas-sessjoni u tal-lingwa jew tal-pajjiż, Kejl tal-udjenza għall-operatur tal-ħanut, Data ta\' marketing għall-interfaċċi tax-xiri',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Inkorporazzjoni u riproduzzjoni ta\' traċċi, albums, playlists u episodji ta\' podcasts, Ġbir ta\' informazzjoni dwar l-imġiba ta\' browsing ta\' dawn l-utenti minn Spotify u minn partijiet terzi, Jippermettu li partijiet terzi jissettjaw cookies fil-browser ta\' dawn l-utenti',
    'Besucherzählung, Reichweitenmessung'
        => 'Għadd tal-viżitaturi, Kejl tal-udjenza',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Individwazzjoni ta\' frodi u evalwazzjoni tar-riskju tat-tentattivi ta\' ħlas, Provvista tal-oqsma tal-ħlas ta\' Stripe Elements, Individwazzjoni ta\' bots u ta\' mġiba awtomatizzata fil-proċess tal-ordni',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Kejl u titjib tal-prestazzjoni tal-kampanji ta\' reklamar, Personalizzazzjoni tar-reklamar fuq TikTok, Trasmissjoni ta\' avvenimenti tas-sit web lil TikTok',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Inkorporazzjoni ta\' formoli u stħarriġ fis-sit web, Ġbir u trażmissjoni tat-tweġibiet lill-operatur tal-formola',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Inkorporazzjoni u riproduzzjoni ta\' filmati fuq is-sit web, Żamma tal-preferenzi tal-player tal-ispettatur (volum, kwalità, sottotitli), Kejl tal-udjenza tal-filmati inkorporati minn Vimeo, Protezzjoni kontra bots u abbuż għall-player',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Testijiet A/B u testijiet Split URL fuq is-sit web, Assenjazzjoni u żamma ta\' varjant matul diversi żjarat, Kejl tal-għanijiet u tal-konverżjonijiet ta\' kampanja, Kejl tal-viżitaturi u tas-sessjonijiet għall-analiżi, Ġestjoni tal-oġġezzjoni u tal-kunsens għall-kejl',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Attribuzzjoni tal-basket tax-xiri lil viżitatur, Individwazzjoni ta\' jekk il-kontenut tal-karrettun inbidilx, Wiri tal-aħħar prodotti li ntwerew fil-widget korrispondenti, Tiftakar il-ħabi tal-avviż tal-ħanut',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Log-in u għarfien tas-sessjoni fiż-żona tal-amministrazzjoni, Iż-żamma tad-data tal-kummenti għal kummenti oħra, Tiftakar il-preferenzi tal-wiri taż-żona tal-amministrazzjoni, Verifika jekk WordPress jistax jissettja cookies, Ħażna tal-lingwa magħżula',
    'Conversion-Messung, Retargeting'
        => 'Kejl tal-konverżjonijiet, Retargeting',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Riproduzzjoni ta\' filmati inkorporati, Sigurtà, Rikonoxximent tal-ispettatur għal finijiet ta\' reklamar',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Chat live u kanal ta\' messaġġi għall-appoġġ fuq is-sit web, Rikonoxximent tal-viżitatur bejn aċċessi għall-paġni u tabs, Żamma tal-istat u tal-preferenzi tal-widget, Kejl tas-sessjonijiet u tal-avvenimenti fuq paġni bil-widget',
];
