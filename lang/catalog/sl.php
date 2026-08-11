<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Slowenisch.
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
        => 'A/B-testi in split-URL-testi na spletnem mestu',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Obračun in zaščita klicev zemljevida',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Dokončanje prijave prek Shopa; nujno',
    'Abspielen eingebetteter Videos'
        => 'Predvajanje vdelanih videoposnetkov',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Obdelava plačila, ki ga je sprožil obiskovalec',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Obdelava plačil, kadar je termin plačljiv',
    'Analyse des Nutzungsverhaltens'
        => 'Analiza vedenja pri uporabi',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Analitični podatki nakupnih vmesnikov; Statistika',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Analitični podatki trgovine; ponudnik jih vodi kot Statistiko',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Podatki za prijavo v skrbniško območje na /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Prijava v Shop Pay; nujno',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Prijava in prepoznavanje seje v skrbniškem območju',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Anonimna statistika o storitvi in drugi tehnični nameni, med drugim podpora dostopnosti',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Nastavitve prikaza skrbniškega območja za posamezni račun',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Pomnjenje nastavitev prikaza skrbniškega območja',
    'Anzeige von Bewertungen'
        => 'Prikaz ocen',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Prikaz koledarja rezervacij in dogovarjanje terminov na spletnem mestu',
    'Anzeigen einer interaktiven Karte'
        => 'Prikaz interaktivnega zemljevida',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'Z vrednostjo 1 prepreči pošiljanje dogodkov UET Microsoftu',
    'Aufbau von Remarketing-Listen'
        => 'Gradnja seznamov za remarketing',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Snemanje in predvajanje sej',
    'Aufzeichnung von Mausbewegungen'
        => 'Snemanje premikov miške',
    'Ausblenden des Shop-Hinweises merken'
        => 'Pomnjenje skritja obvestila trgovine',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Dostava in prožitev tagov na spletnem mestu',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Dostava in upravljanje tagov na spletnem mestu',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Dostava ploščic zemljevida vdelanim zemljevidom',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Dostava vsebine obvestil v pripravljena nadomestna mesta v izvorni kodi strani prek Ad-Serverja',
    'Auslieferung personalisierter Werbung'
        => 'Prikazovanje personaliziranih oglasov',
    'Auslieferung von Anzeigen'
        => 'Prikazovanje oglasov',
    'Auslieferung von Bibliotheken und Assets'
        => 'Dostava knjižnic in virov',
    'Auslieferung von Schriftarten'
        => 'Dostava pisav',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Izdaja žetona, ki ga preveri strežnik spletnega mesta',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Upravljanje prikazovanja prijavnih obrazcev na spletnem mestu',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Upravljanje pojavnih obrazcev, da se ne prikazujejo večkrat',
    'Auswahl des Rechenzentrums'
        => 'Izbira podatkovnega centra',
    'Auswertung der Verweisquellen'
        => 'Vrednotenje virov napotitev',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Vrednotenje ciljne skupine spletnega mesta (demografija spletnega mesta)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Vrednotenje brskalnika, operacijskega sistema in vrste naprave',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Vrednotenje naprave, brskalnika in ocenjene lokacije',
    'Auswertung von Herkunft und Kampagnen'
        => 'Vrednotenje izvora in kampanj',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Preverja pristnost zahtev končnega uporabnika',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Omejevanje pogostosti prikazovanja',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Potrjuje uspešno opravljeno preverjanje, da nadaljnja preverjanja (challenges) v coni odpadejo',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Zagotavljanje plačilnih polj Stripe Elements',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Zagotavljanje dostopnosti',
    'Besucherzählung'
        => 'Štetje obiskovalcev',
    'Betrieb des Chat-Widgets'
        => 'Delovanje widgeta za klepet',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Delovanje in zaščita pred zlorabo storitev zemljevidov',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Delovanje košarice in postopka plačila v trgovini',
    'Betrugs- und Missbrauchserkennung'
        => 'Zaznavanje goljufij in zlorab',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Zaznavanje goljufij pri poskusu plačila',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Zaznavanje goljufij in ocena tveganja poskusov plačila',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Preprečevanje goljufij in zakonske obveznosti ponudnika plačilnih storitev',
    'Betrugsprävention'
        => 'Preprečevanje goljufij',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Preprečevanje goljufij in ocena tveganja pri poskusu plačila',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Oblikovanje psevdonimnih profilov uporabe po privolitvi',
    'Bildung von Zielgruppen und Retargeting'
        => 'Oblikovanje ciljnih skupin in retargeting',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Sejo veže na isto instanco AWS',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Zaščita predvajalnika pred boti in zlorabo',
    'Bot-Abwehr fuer den Player'
        => 'Zaščita predvajalnika pred boti',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Zaščita pred boti pri dostavi virov HubSpot',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Identifikator brskalnika, s katerim LinkedIn razlikuje naprave in zaznava zlorabo',
    'Cloudflare-Bot-Abwehr'
        => 'Cloudflarova zaščita pred boti',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Cloudflarovo zaznavanje botov za filtriranje prometa',
    'Cloudflare-Ratenbegrenzung'
        => 'Cloudflarovo omejevanje števila zahtevkov',
    'Conversion-Messung'
        => 'Merjenje konverzij',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Sledenje konverzijam za oglaševalske kampanje LinkedIn',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Sledenje konverzijam za kampanje Microsoft Advertising',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Sledenje konverzijam za oglaševalske kampanje Pinterest',
    'Darstellung interaktiver Karten auf der Website'
        => 'Prikaz interaktivnih zemljevidov na spletnem mestu',
    'Deduplizieren von Kontakten'
        => 'Odstranjevanje podvojenih stikov',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Služi za prikazovanje in merjenje oglasov.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'ID obiskovalca za več domen; po navedbah ponudnika piškotek tretje osebe, uporablja se samo, če so v konfiguracijski datoteki omogočeni piškotki tretjih oseb',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Identifikator tretje osebe za prepoznavanje obiskovalcev',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Identifikator tretje osebe, ki se posreduje Klaviyu',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Oglaševalski identifikator tretje osebe za merjenje kampanj in personalizacijo na TikToku',
    'E-Commerce- und Zielauswertung'
        => 'Vrednotenje e-trgovine in ciljev',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Vnaprejšnje izpolnjevanje e-poštnega naslova iz obrazca za komentarje',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Vdelava in predvajanje skladb, albumov, seznamov predvajanja in epizod podkastov',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Vdelava in predvajanje videoposnetkov na spletnem mestu',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Vdelava obrazcev in anket v spletno mesto',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Vdelava polj za kartico v lastni postopek plačila, da podatki o kartici ne potujejo prek trgovine',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Vdelava zunanje vzdrževane izjave o piškotkih',
    'Einbettung von Audioinhalten'
        => 'Vdelava zvočnih vsebin',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Vključitev oglasnih pikslov Googla in Facebooka na povezanem spletnem mestu',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Prikaz obvestil o financiranju in obročnem plačilu na straneh izdelkov in košarice (On-site Messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Enolični identifikator pri merjenju prek več domen (računi od 14.06.2026)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Enolični identifikator pri merjenju prek več domen (računi pred 14.06.2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Enkratna vrednost proti CSRF v obrazcu za opt-out',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Vsebuje identifikator uporabnika in čas nastanka; po viru se nastavi v Pinterestovem brskalniku v aplikaciji, ne na domeni spletnega mesta',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Zbiranje in posredovanje odgovorov upravljavcu obrazca',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Beleži uporabo spletnega mesta za namene vrednotenja.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Beleženje lastnih dogodkov, ki jih določi upravljavec',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Beleženje in posredovanje napak aplikacije iz brskalnika',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Beleženje obiskovalcev in ogledov strani na spletnem mestu za trženjsko avtomatizacijo',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Merjenje uspešnosti oglasnega sredstva in obračun provizije',
    'Erhalt des Sitzungszustands'
        => 'Ohranjanje stanja seje',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Prepoznavanje naprave za zaščito pred zlorabo',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Zaznavanje in zavračanje avtomatiziranih dostopov do obrazcev',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Zaznavanje botov in avtomatiziranega vedenja v postopku naročanja',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Zaznavanje, ali se je vsebina košarice spremenila',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Zaznava spremembe vsebine košarice',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Prepozna obiskovalce spletnega mesta, na katerem je vgrajena koda Intercom',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Znova prepozna brskalnike na Microsoftovih spletnih mestih; po navedbah ponudnika se uporablja tudi za oglaševanje, piškotek tretje osebe',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Znova prepozna osebe, ki pišejo prek orodja za klepet',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Prepozna napravo, s katere izhaja pogovor',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Prepozna posamezno napravo, ki komunicira z Messengerjem, za zaščito pred zlorabo',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Prepozna končnega uporabnika, ki začne pogovor',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Prepozna domeno ali poddomeno, na kateri je vgrajen widget za klepet',
    'Erkennt wiederkehrende Besucher'
        => 'Prepozna vračajoče se obiskovalce',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Zazna, ali je bil brskalnik znova zagnan',
    'Erkennung von Klickbetrug'
        => 'Zaznavanje goljufij s kliki',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Ugotavlja enolične dostope do spletnega mesta (računi od 14.06.2026)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Ugotavlja enolične dostope do spletnega mesta (računi pred 14.06.2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Omogočanje, da tretje osebe nastavljajo piškotke v brskalniku teh uporabnikov',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Omogoča uporabo dostopnosti',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Omogoča dodatne funkcije spletnega mesta.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Identifikator prve osebe, ki prepozna obiskovalce in pripiše dogodke spletnemu mestu',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Identifikator obiskovalca prve osebe za sledenje konverzijam in remarketing',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Identifikator seje prve osebe za pripis dogodkov',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Identifikator seje prve osebe za posamezni piksel za merjenje kampanj',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Identifikator seje prve osebe za merjenje kampanj',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Oglaševalski identifikator prve osebe za merjenje kampanj in personalizacijo na TikToku',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Piškotek prve osebe, ki združuje dejanja obiskovalcev, ki jih Pinterest ne more pripisati',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Piškotek prve osebe, ki shranjuje zgoščene (hash) podatke o strankah, zbrane prek Automatic Enhanced Match',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Ustvari enolični identifikator za vsakega obiskovalca (računi od 14.06.2026)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Ustvari enolični identifikator za vsakega obiskovalca (računi pred 14.06.2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identifikator naprave za vrednotenje dogodkov na straneh z widgetom',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Nastavi se ob prijavi na strani, ki jo gosti HubSpot',
    'Gewaehlte Sprache speichern'
        => 'Shranjevanje izbranega jezika',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Usklajuje identifikator MUID prek Microsoftovih domen; po navedbah ponudnika piškotek tretje osebe',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Ohranja sporočila usklajena prek več zavihkov',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Hrani vrednost parametra pk_campaign',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Hrani vrednost parametra utm_campaign',
    'Haelt den Widerspruch gegen die Messung'
        => 'Hrani ugovor zoper merjenje',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Hrani čas poteka za _uetsid',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Hrani čas poteka za _uetvid',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Hrani vrsto vira prometa za Tag Manager',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Beleži identiteto obiskovalca, tudi za odstranjevanje podvojenih stikov',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Beleži odločitev obiskovalca o piškotkih',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Ohranja prikaz widgeta dosleden ob menjavi strani',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Beleži vstopno stran; Statistika',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Hrani privolitev za merjenje s piškotki',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Hrani odločitev uporabnika o kategorijah in ponudnikih',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Ohranja sejo prijavljenih uporabnikov in dostop do prejšnjih pogovorov',
    'Haelt die verweisende Adresse'
        => 'Hrani napotitveni naslov',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Beleži vir napotitve; Statistika',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Hrani lastne spremenljivke seje (po navedbah ponudnika zastarelo)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Beleži, ali sme etracker nastavljati piškotke; pri data-block-cookies se nastavi prek klica API',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Beleži, katera funkcijska stikala je vklopil lastnik videoposnetka',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Glavni piškotek za prepoznavanje obiskovalcev',
    'Heatmaps'
        => 'Heatmaps',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Heatmaps klikov in vedenja pri drsenju',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Hrani podatke seje heatmap za čas obiska',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Hrani informacije o trenutni seji (računi od 14.06.2026)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Hrani informacije o trenutni seji (računi pred 14.06.2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Hrani uporabniško določene spremenljivke za čas obiska',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Hrani trajne podatke na ravni obiskovalca (računi od 14.06.2026)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Hrani trajne podatke na ravni obiskovalca za vrednotenje Insights (računi pred 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Beleži status privolitve obiskovalca (računi od 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Beleži status privolitve obiskovalca (računi pred 14.06.2026)',
    'Hält den Sitzungszustand.'
        => 'Hrani stanje seje.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Hrani identifikator uporabnika Clarity in nastavitve za to spletno mesto',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Hrani dodelitev različice za A/B-teste',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Začasno beleži izbrano kombinacijo (računi od 14.06.2026)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Začasno beleži izbrano kombinacijo (računi pred 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Beleži izbrano različico, preden se izvede preusmeritev (računi od 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Beleži izbrano različico, preden se izvede preusmeritev (računi pred 14.06.2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Beleži, prek katere napotitve je obisk nastal',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'V načinu Pre-Clearance: odobritev za nadaljnja preverjanja WAF v isti coni',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Posredni identifikator člana za sledenje konverzijam, retargeting in vrednotenje',
    'Inhalt des Warenkorbs; notwendig'
        => 'Vsebina košarice; nujno',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Analitični podatki o kupcih v trgovini; analitika',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Enolični identifikator, vezan na kampanjo (računi od 14. 6. 2026)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Identifikator prvega stika s Clarity na vseh spletnih mestih s Clarity; po navedbah ponudnika piškotek tretje osebe',
    'Kennzeichnet die laufende Sitzung'
        => 'Označuje trenutno sejo',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Ohranjanje podatkov iz komentarja za nadaljnje komentarje',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Dosledno prikazovanje različic A/B testa',
    'Lastverteilung und Routing'
        => 'Porazdelitev obremenitve in usmerjanje',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Porazdelitev obremenitve in usmerjanje zahtev za preverjanje',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Lokalno shrani nastavitve računa obiskovalca',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Dostavi enako različico strani v A/B testu',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Klepet v živo in kanal za sporočila za podporo na spletnem mestu',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Klepet v živo in poštni predal podpore na spletnem mestu',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Tržni podatki nakupnih vmesnikov; trženje',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Tržni podatki za nakupne vmesnike',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Shranjevanje nastavitev predvajalnika gledalca (glasnost, kakovost, podnapisi)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Shranjevanje stanja in nastavitev pripomočka',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Zabeleži zaprtje pasice Global Privacy Control',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Zabeleži zaprtje obvestilne pasice',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Zabeleži čas uskladitve s piškotkom lms_analytics',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Zabeleži čas zadnje uskladitve identifikatorjev, da se uskladitev ne ponovi',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Zabeleži dodeljeno različico (računi od 14. 6. 2026)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Zabeleži dodeljeno različico, da ostane enaka ob ponovnem obisku (računi pred 14. 6. 2026)',
    'Merkt einen Rabattcode; notwendig'
        => 'Zabeleži kodo za popust; nujno',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Zabeleži ugovor zoper merjenje (računi od 14. 6. 2026)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Zabeleži ugovor, ki velja na vseh spletnih mestih (računi pred 14. 6. 2026)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Shrani nastavitve predvajalnika, kot so glasnost, kakovost in podnapisi',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Shrani nastavitev za zvočna obvestila',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Zapomni si dano privolitev za merjenje',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Zapomni si ugovor zoper merjenje',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Shrani zaprta proaktivna sporočila',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Shrani, da je obiskovalec zaprl napis na gumbu za zagon',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Shrani, ali je pripomoček odprt ali zaprt',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Zabeleži, da obiskovalec ne sme sodelovati v nobeni kampanji (računi pred 14. 6. 2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Zabeleži, da je obiskovalec izvzet iz kampanje (računi od 14. 6. 2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Zabeleži, da je obiskovalec izvzet iz kampanje (računi pred 14. 6. 2026)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Zabeleži, da je bilo obvestilo o privolitvi zaprto',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Zabeleži, da je bilo obvestilo trgovine zaprto',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Zabeleži, da se vprašanje o piškotkih ne sme ponovno postaviti',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Zabeleži, da je bila oznaka že sprožena',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Zabeleži, ali se pri tem obiskovalcu meri globina pomikanja',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Zabeleži, ali je okno klepeta odprto',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Zabeleži, ali se identifikator MUID posreduje oglaševalskemu identifikatorju; po navedbah ponudnika vedno 0, piškotek tretje osebe',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Merjenje odpiranj in klikov v e-poštnih kampanjah',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Merjenje sej in dogodkov na straneh s pripomočkom',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Merjenje sej in pripisovanje vira obiska',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Merjenje razpoložljivosti storitve, ki ga izvaja Google',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Merjenje časa nalaganja in ključnih kazalnikov strani (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Merjenje globine pomikanja in dogodkov klika',
    'Messung der Werbewirkung'
        => 'Merjenje učinka oglaševanja',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Merjenje vedenja pri uporabi spletnega mesta',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Merjenje in personalizacija oglasov v oglaševalskem omrežju TikTok Pangle',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Merjenje in izboljševanje uspešnosti oglaševalskih kampanj',
    'Messung von Auslieferungen und Klicks'
        => 'Merjenje prikazov in klikov',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Merjenje obiskovalcev in sej za potrebe vrednotenja',
    'Messung von Conversions'
        => 'Merjenje konverzij',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Merjenje ogledov strani in obiskov',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Merjenje ogledov strani in dogodkov',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Merjenje ogledov strani in vedenja pri uporabi',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Merjenje ogledov strani in dogodkov po meri',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Merjenje ogledov strani, obiskov in sej',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Merjenje ogledov strani, obiskov in sej na lastnem strežniku',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Merjenje oglaševalskih kampanj in konverzij na spletnem mestu',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Merjenje ciljev in konverzij kampanje',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Naknadno nalaganje ploščic zemljevida, pisav in slogov od ponudnika',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Vnaprejšnje izpolnjevanje imena iz obrazca za komentarje',
    'Nutzer-ID'
        => 'Uporabniški ID',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Košarico pripiše pravi državi; nujno',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Košarico v zbirki podatkov pripiše pravi stranki',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Dejanja obiska pripiše eni seji',
    'Personalisierung der Werbung auf TikTok'
        => 'Personalizacija oglaševanja na TikToku',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Preverjanje, ali lahko WordPress nastavlja piškotke',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Preveri, ali brskalnik podpira piškotke; nujno',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Preveri, ali lahko WordPress nastavlja piškotke',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Kontrolna vrednost gesla trgovine; nujno',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Preizkusni piškotek ponudnika (računi pred 14. 6. 2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Preveri, ali brskalnik sprejema piškotke (računi od 14. 6. 2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Preveri, ali brskalnik sprejema piškotke (računi pred 14. 6. 2026)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Preveri, ali brskalnik sprejema piškotke (po navedbah ponudnika samo v Internet Explorerju)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Omejevanje števila zahtevkov pri HubSpotovem ponudniku CDN',
    'Reichweiten- und Nutzungsmessung'
        => 'Merjenje dosega in uporabe',
    'Reichweitenmessung'
        => 'Merjenje dosega',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Merjenje dosega vgrajenih videoposnetkov, ki ga izvaja Vimeo',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Merjenje dosega za upravitelja trgovine',
    'Remarketing und Zielgruppenbildung'
        => 'Remarketing in oblikovanje ciljnih skupin',
    'Retargeting'
        => 'Retargeting',
    'Retargeting von Website-Besuchern'
        => 'Retargeting obiskovalcev spletnega mesta',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Analiza tveganja za razlikovanje med človekom in botom',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Zbirni piškotek, ki se po navedbah ponudnika ustvari samo v brskalniku Safari (računi od 14. 6. 2026)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Zbirni piškotek, ki se po navedbah ponudnika ustvari samo v brskalniku Safari (računi pred 14. 6. 2026)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Zbiranje informacij o vedenju teh uporabnikov pri brskanju s strani Spotifyja in tretjih oseb',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Stikalo, ki ga upravitelj spletnega mesta nastavi sam, da prepreči sledenje s Klaviyom',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Zaščita prijave članov pred ponarejanjem',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Zaščita obrazcev pred avtomatizirano zlorabo',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Zaščita pred avtomatiziranimi zahtevami (spam, credential stuffing)',
    'Sicherheit'
        => 'Varnost',
    'Sicherheitsfunktionen'
        => 'Varnostne funkcije',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Varnostne funkcije, kadar je aktivna izbirna funkcija User Journeys',
    'Sitzung'
        => 'Seja',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Pripisovanje seje ter jezika oziroma države',
    'Sitzungsaufzeichnung'
        => 'Snemanje seje',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identifikator seje za vrednotenje dogodkov na straneh s pripomočkom',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Identifikator seje za statistiko trgovine; analitika',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Ključ seje storitve Answer Bot',
    'Sitzungswiedergabe'
        => 'Predvajanje posnetka seje',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Shrani žeton za preverjanje pristnosti po prijavi',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Shrani kodirano geslo za z geslom zaščitene videoposnetke',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Shrani ključ izbranega jezika',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Shrani nastavitev zasebnosti obiskovalca; nujno',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Shrani odločitev obiskovalca o privolitvi',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Shrani identifikator naprave obiskovalca za preverjanje pristnosti v pripomočku za klepet',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Shrani identifikator uporabnika, prijavljenega na spletni seminar',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Shrani identifikator klika fbclid, da je mogoče dogodek na spletnem mestu pripisati oglasu',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Shrani uporabniški identifikator iz registracijskega obrazca, ki je postavljen pred videoposnetek',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Shrani TikTokov identifikator klika za pripisovanje konverzij',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Shrani enolični ID obiskovalca za ponovno prepoznavanje',
    'Speichert die zugestimmten Kategorien'
        => 'Shrani kategorije, za katere je bila dana privolitev',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Napaja pripomoček z nazadnje ogledanimi izdelki',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Nadzoruje, ali se identifikator MUID obnovi; po navedbah ponudnika piškotek tretje osebe',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Tehnično potrebno za delovanje in varnost spletnega mesta.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Nosi podatke o seji in blagajni trgovine; ponudnik ga vodi kot nujnega',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Nosi funkcijo ugovora (opt-out)',
    'Transaktionssicherheit'
        => 'Varnost transakcij',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Nosi analizo tveganja storitve reCAPTCHA.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Prenos dogodkov s spletnega mesta v TikTok',
    'Umfragen'
        => 'Ankete',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Prepreči prenos podatkov v HubSpot',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Zatre pozdravno sporočilo klepeta po zaprtju',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Razlikuje brskalnike, ki odpirajo Microsoftove strani; s privolitvijo tudi za oglaševanje',
    'Unterscheidet einzelne Nutzer.'
        => 'Razlikuje posamezne uporabnike.',
    'Unterscheidung einzelner Nutzer'
        => 'Razlikovanje posameznih uporabnikov',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Razlikovanje med človekom in botom pri obrazcih in prijavah',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Poveže več ogledov strani v en posnetek seje',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Prepreči nenehno prikazovanje pasice v strogem načinu',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Razdeljevanje signalov privolitve Googlovim oznakam',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Upravljanje odločitve o privolitvi za oznake, konfigurirane v vsebniku',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Upravljanje ugovora zoper merjenje',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Upravljanje ugovora in privolitve za merjenje',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Google ga uvršča v kategoriji Analitika in Oglaševanje.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Google ga uvršča v kategorije Analitika, Oglaševanje in Varnost.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Google ga uvršča v kategorije Funkcionalnost, Oglaševanje in Varnost.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Google ga uvršča v kategoriji Varnost in Funkcionalnost.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Google ga uvršča v kategoriji Varnost in Oglaševanje.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Google ga uvršča v kategorije Varnost, Analitika, Funkcionalnost in Oglaševanje.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Google ga uvršča v kategorije Varnost, Funkcionalnost in Oglaševanje.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Google ga uvršča v kategoriji Oglaševanje in Varnost.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Google ga uvršča v kategorijo Analitika; natančnejšega namena Google ne navaja.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Google ga uvršča v kategorijo Funkcionalnost.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Google ga uvršča v kategorijo Varnost.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Google ga uvršča v kategorijo Oglaševanje.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Microsoft ga navaja kot enega od piškotkov, ki jih brez privolitve ni dovoljeno nastaviti; lastnega opisa namena Microsoft ne navaja',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Identifikator, ki ga Vimeo ustvari za merjenje dosega',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Valuta košarice po zaključenem nakupu; nujno',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Verjetnostno pripisovanje brskalnika določeni osebi',
    'Warenkorb einer Besucherin zuordnen'
        => 'Pripisovanje košarice obiskovalcu',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Vnaprejšnje izpolnjevanje spletnega naslova iz obrazca za komentarje',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Prepoznavanje gledalca za namene oglaševanja',
    'Werbepersonalisierung'
        => 'Personalizacija oglaševanja',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Kot _pin_unauth, vendar kot piškotek tretje osebe',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Prepoznavanje obiskovalca med postopkom rezervacije',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Prepoznavanje obiskovalca med ogledi strani in zavihki',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Prepoznavanje in identificiranje obiskovalcev spletnega mesta',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Prepoznavanje obiskovalcev prek več obiskov',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Prepoznavanje obiskovalcev povezanih spletnih mest za retargeting',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Prepoznavanje vračajočih se obiskovalcev in pripisovanje prejšnjih pogovorov',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Prepoznavanje obiskovalca in shranjevanje njegovih značilnosti',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Prepoznavanje brskalnika prek Criteovega identifikatorja',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Prepoznavanje uporabnika; samo s privolitvijo, privzeto blokirano',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Prepoznavanje brskalnika ob poznejših obiskih po privolitvi',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Prepoznavanje obiskovalcev in pripisovanje sejam',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'Prepoznavanje članov LinkedIna zunaj LinkedIna za namene oglaševanja',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Prepoznavanje uporabnikov po privolitvi',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Prepoznavanje vračajočih se obiskovalcev prek ID-ja obiskovalca',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Nastavi se, ko je bil sprožen cilj kampanje (računi od 14. 6. 2026)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Nastavi se, ko je bil sprožen cilj kampanje (računi pred 14. 6. 2026)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Nastavi se, ko oseba obišče spletno mesto z vgrajeno oznako Pinterest',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Nastavi se, ko pripis uspe brez obstoječih piškotkov, na primer prek funkcije Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Nastavi ga oznaka JavaScript na podlagi podatkov, ki jih Pinterest posreduje skupaj z oglaševanim prometom',
    'Zaehlt und begrenzt Sitzungen'
        => 'Šteje in omejuje seje',
    'Zahlungsabwicklung'
        => 'Obdelava plačil',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Pokaže, ali seja še poteka ali je nova',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Vmesniku pokaže, da je uporabnik prijavljen in kot kdo',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Naključni identifikator brskalnika, ki dogodke piksla na spletnem mestu pripiše enemu brskalniku',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Prikaz nazadnje ogledanih izdelkov v pripadajočem pripomočku',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Pripisovanje vedenja na spletnem mestu določenemu profilu',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Pripis izvora obiska (Referrer, atribucija)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Pripisovanje obiskovalca stiku v računu Brevo prek e-poštnega naslova',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Pripisovanje transakcij, kot so leadi in prodaje, določenemu založniku',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Pripisovanje dejanj na spletnem mestu predhodno prikazanim oglasom',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Združevanje več ogledov strani v eno sejo',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Dodatni podatki k zabeleženim dogodkom poteka obiska',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Dodelitev in ohranjanje različice prek več obiskov',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Medpomnilnik za dogodke na podlagi izbirnikov CSS',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Medpomnilnik za podatke Messengerja in obiskovalca v pomnilniku brskalnika',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Medpomnilnik za vnose Tag Managerja',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Medpomnilnik za merjenje globine pomikanja',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Medpomnilnik za spremenljivke Tag Managerja',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Medpomnilnik za nastavitve pripomočka, da se preprečijo ponavljajoče se zahteve strežniku',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Medpomnjenje podatkov Messengerja in obiskovalca v brskalniku',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Šteje seje, ustvarjene za posameznega obiskovalca (računi od 14. 6. 2026)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Šteje, kolikokrat je bil brskalnik med merjenjem zaprt in znova odprt (računi pred 14. 6. 2026)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Štetje ogledov strani in obiskov',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'avtomatizirana vrednotenja vedenja uporabnikov',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'groba geografska umestitev na državo, regijo in mesto',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'izbirno snemanje seje (Session Replay), privzeto z maskiranimi besedili, slikami in vnosi',
    'optional Heatmaps und A/B-Tests'
        => 'izbirno heatmaps in A/B-testi',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Posreduje vir napotitve pri testih Split-URL (računi od 14. 6. 2026)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Posreduje vir napotitve pri testih Split-URL (računi pred 14. 6. 2026)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Pripisovanje transakcij, kot so leadi in prodaje, določenemu založniku, Merjenje uspešnosti oglasnega sredstva in obračun provizije',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Beleženje obiskovalcev in ogledov strani na spletnem mestu za trženjsko avtomatizacijo, Pripisovanje obiskovalca stiku v računu Brevo prek e-poštnega naslova, Beleženje lastnih dogodkov, ki jih določi upravljavec',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Prikaz koledarja rezervacij in dogovarjanje terminov na spletnem mestu, Prepoznavanje obiskovalca med postopkom rezervacije, Obdelava plačil, kadar je termin plačljiv',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Zaznavanje in zavračanje avtomatiziranih dostopov do obrazcev, Izdaja žetona, ki ga preveri strežnik spletnega mesta, V načinu Pre-Clearance: odobritev za nadaljnja preverjanja WAF v isti coni',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Merjenje ogledov strani in obiskov, Merjenje časa nalaganja in ključnih kazalnikov strani (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Prikazovanje personaliziranih oglasov, Merjenje učinka oglaševanja, Prepoznavanje brskalnika prek Criteovega identifikatorja',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Merjenje vedenja pri uporabi spletnega mesta, Oblikovanje psevdonimnih profilov uporabe po privolitvi, Prepoznavanje brskalnika ob poznejših obiskih po privolitvi',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Merjenje ogledov strani in vedenja pri uporabi, Merjenje globine pomikanja in dogodkov klika, Prepoznavanje uporabnikov po privolitvi, Upravljanje ugovora zoper merjenje',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Razlikovanje med človekom in botom pri obrazcih in prijavah, Zaščita pred avtomatiziranimi zahtevami (spam, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Merjenje konverzij, Remarketing in oblikovanje ciljnih skupin, Omejevanje pogostosti prikazovanja, Zaznavanje goljufij s kliki',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Prikazovanje oglasov, Omejevanje pogostosti prikazovanja, Zaznavanje goljufij in zlorab, Merjenje prikazov in klikov',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Razlikovanje posameznih uporabnikov, Ohranjanje stanja seje, Merjenje dosega in uporabe',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Prikaz interaktivnega zemljevida, Merjenje razpoložljivosti storitve, ki ga izvaja Google',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Analiza tveganja za razlikovanje med človekom in botom, Zaščita obrazcev pred avtomatizirano zlorabo',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Dostava in upravljanje tagov na spletnem mestu, Razdeljevanje signalov privolitve Googlovim oznakam',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Razlikovanje med človekom in botom pri obrazcih in prijavah, Porazdelitev obremenitve in usmerjanje zahtev za preverjanje, Zagotavljanje dostopnosti',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Heatmaps, Snemanje seje, Ankete',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Prepoznavanje obiskovalcev prek več obiskov, Merjenje sej in pripisovanje vira obiska, Odstranjevanje podvojenih stikov, Delovanje widgeta za klepet, Dosledno prikazovanje različic A/B testa',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Klepet v živo in poštni predal podpore na spletnem mestu, Prepoznavanje vračajočih se obiskovalcev in pripisovanje prejšnjih pogovorov, Prepoznavanje naprave za zaščito pred zlorabo, Medpomnjenje podatkov Messengerja in obiskovalca v brskalniku',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Prikaz obvestil o financiranju in obročnem plačilu na straneh izdelkov in košarice (On-site Messaging), Dostava vsebine obvestil v pripravljena nadomestna mesta v izvorni kodi strani prek Ad-Serverja',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Prepoznavanje in identificiranje obiskovalcev spletnega mesta, Pripisovanje vedenja na spletnem mestu določenemu profilu, Upravljanje prikazovanja prijavnih obrazcev na spletnem mestu',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Sledenje konverzijam za oglaševalske kampanje LinkedIn, Retargeting obiskovalcev spletnega mesta, Vrednotenje ciljne skupine spletnega mesta (demografija spletnega mesta)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Prepoznavanje obiskovalcev povezanih spletnih mest za retargeting, Upravljanje pojavnih obrazcev, da se ne prikazujejo večkrat, Merjenje odpiranj in klikov v e-poštnih kampanjah, Vključitev oglasnih pikslov Googla in Facebooka na povezanem spletnem mestu',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Prikaz interaktivnih zemljevidov na spletnem mestu, Naknadno nalaganje ploščic zemljevida, pisav in slogov od ponudnika, Obračun in zaščita klicev zemljevida',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Merjenje ogledov strani, obiskov in sej, Prepoznavanje vračajočih se obiskovalcev prek ID-ja obiskovalca, Pripis izvora obiska (Referrer, atribucija), izbirno heatmaps in A/B-testi',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Merjenje ogledov strani, obiskov in sej na lastnem strežniku, Prepoznavanje vračajočih se obiskovalcev prek ID-ja obiskovalca, Pripis izvora obiska (Referrer, atribucija), izbirno heatmaps in A/B-testi',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Dostava in prožitev tagov na spletnem mestu, Upravljanje odločitve o privolitvi za oznake, konfigurirane v vsebniku',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Merjenje oglaševalskih kampanj in konverzij na spletnem mestu, Oblikovanje ciljnih skupin in retargeting',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Sledenje konverzijam za kampanje Microsoft Advertising, Gradnja seznamov za remarketing, Merjenje ogledov strani in dogodkov po meri',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Snemanje in predvajanje sej, Heatmaps klikov in vedenja pri drsenju, Združevanje več ogledov strani v eno sejo, avtomatizirana vrednotenja vedenja uporabnikov',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Obdelava plačila, ki ga je sprožil obiskovalec, Vdelava polj za kartico v lastni postopek plačila, da podatki o kartici ne potujejo prek trgovine, Preprečevanje goljufij in zakonske obveznosti ponudnika plačilnih storitev',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Snemanje premikov miške, Predvajanje posnetka seje, Analiza vedenja pri uporabi',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Dostava ploščic zemljevida vdelanim zemljevidom, Delovanje in zaščita pred zlorabo storitev zemljevidov',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Obdelava plačil, Preprečevanje goljufij',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Sledenje konverzijam za oglaševalske kampanje Pinterest, Oblikovanje ciljnih skupin in retargeting, Pripisovanje dejanj na spletnem mestu predhodno prikazanim oglasom',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Merjenje ogledov strani in dogodkov, Prepoznavanje obiskovalcev in pripisovanje sejam, Vrednotenje izvora in kampanj, Vrednotenje naprave, brskalnika in ocenjene lokacije, Vrednotenje e-trgovine in ciljev',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Štetje ogledov strani in obiskov, Vrednotenje virov napotitev, Vrednotenje brskalnika, operacijskega sistema in vrste naprave, groba geografska umestitev na državo, regijo in mesto',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Beleženje in posredovanje napak aplikacije iz brskalnika, izbirno snemanje seje (Session Replay), privzeto z maskiranimi besedili, slikami in vnosi',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Delovanje košarice in postopka plačila v trgovini, Pripisovanje seje ter jezika oziroma države, Merjenje dosega za upravitelja trgovine, Tržni podatki za nakupne vmesnike',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Vdelava in predvajanje skladb, albumov, seznamov predvajanja in epizod podkastov, Zbiranje informacij o vedenju teh uporabnikov pri brskanju s strani Spotifyja in tretjih oseb, Omogočanje, da tretje osebe nastavljajo piškotke v brskalniku teh uporabnikov',
    'Besucherzählung, Reichweitenmessung'
        => 'Štetje obiskovalcev, Merjenje dosega',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Zaznavanje goljufij in ocena tveganja poskusov plačila, Zagotavljanje plačilnih polj Stripe Elements, Zaznavanje botov in avtomatiziranega vedenja v postopku naročanja',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Merjenje in izboljševanje uspešnosti oglaševalskih kampanj, Personalizacija oglaševanja na TikToku, Prenos dogodkov s spletnega mesta v TikTok',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Vdelava obrazcev in anket v spletno mesto, Zbiranje in posredovanje odgovorov upravljavcu obrazca',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Vdelava in predvajanje videoposnetkov na spletnem mestu, Shranjevanje nastavitev predvajalnika gledalca (glasnost, kakovost, podnapisi), Merjenje dosega vgrajenih videoposnetkov, ki ga izvaja Vimeo, Zaščita predvajalnika pred boti in zlorabo',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'A/B-testi in split-URL-testi na spletnem mestu, Dodelitev in ohranjanje različice prek več obiskov, Merjenje ciljev in konverzij kampanje, Merjenje obiskovalcev in sej za potrebe vrednotenja, Upravljanje ugovora in privolitve za merjenje',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Pripisovanje košarice obiskovalcu, Zaznavanje, ali se je vsebina košarice spremenila, Prikaz nazadnje ogledanih izdelkov v pripadajočem pripomočku, Pomnjenje skritja obvestila trgovine',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Prijava in prepoznavanje seje v skrbniškem območju, Ohranjanje podatkov iz komentarja za nadaljnje komentarje, Pomnjenje nastavitev prikaza skrbniškega območja, Preverjanje, ali lahko WordPress nastavlja piškotke, Shranjevanje izbranega jezika',
    'Conversion-Messung, Retargeting'
        => 'Merjenje konverzij, Retargeting',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Predvajanje vdelanih videoposnetkov, Varnost, Prepoznavanje gledalca za namene oglaševanja',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Klepet v živo in kanal za sporočila za podporo na spletnem mestu, Prepoznavanje obiskovalca med ogledi strani in zavihki, Shranjevanje stanja in nastavitev pripomočka, Merjenje sej in dogodkov na straneh s pripomočkom',
];
