<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Kroatisch.
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
        => 'A/B testovi i split URL testovi na web-stranici',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Obračun i zaštita poziva karte',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Dovršetak prijave putem Shopa; nužno',
    'Abspielen eingebetteter Videos'
        => 'Reprodukcija ugrađenih videozapisa',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Obrada plaćanja koje je pokrenuo posjetitelj',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Obrada plaćanja kada je termin naplatan',
    'Analyse des Nutzungsverhaltens'
        => 'Analiza ponašanja pri upotrebi',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Analitički podaci kupovnih sučelja; Statistika',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Analitički podaci trgovine; pružatelj ih vodi kao Statistiku',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Podaci za prijavu u administracijsko područje na /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Prijava u Shop Pay; nužno',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Prijava i prepoznavanje sesije u administracijskom području',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Anonimna statistika o usluzi i druge tehničke svrhe, među ostalim podrška pristupačnosti',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Postavke prikaza administracijskog područja po računu',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Pamćenje postavki prikaza administracijskog područja',
    'Anzeige von Bewertungen'
        => 'Prikaz recenzija',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Prikaz kalendara rezervacija i dogovaranje termina na web-stranici',
    'Anzeigen einer interaktiven Karte'
        => 'Prikaz interaktivne karte',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'S vrijednošću 1 sprječava slanje UET događaja Microsoftu',
    'Aufbau von Remarketing-Listen'
        => 'Izgradnja remarketinških popisa',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Snimanje i reprodukcija sesija',
    'Aufzeichnung von Mausbewegungen'
        => 'Snimanje pokreta miša',
    'Ausblenden des Shop-Hinweises merken'
        => 'Pamćenje skrivanja obavijesti trgovine',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Isporuka i pokretanje tagova na web-stranici',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Isporuka i upravljanje tagovima na web-stranici',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Isporuka pločica karte ugrađenim kartama',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Isporuka sadržaja obavijesti u pripremljena rezervirana mjesta u izvornom kodu stranice putem Ad-Servera',
    'Auslieferung personalisierter Werbung'
        => 'Isporuka personaliziranih oglasa',
    'Auslieferung von Anzeigen'
        => 'Isporuka oglasa',
    'Auslieferung von Bibliotheken und Assets'
        => 'Isporuka biblioteka i resursa',
    'Auslieferung von Schriftarten'
        => 'Isporuka fontova',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Izdavanje tokena koji provjerava poslužitelj web-stranice',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Upravljanje prikazivanjem obrazaca za prijavu na web-stranici',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Upravljanje skočnim obrascima kako se ne bi ponovno pojavljivali',
    'Auswahl des Rechenzentrums'
        => 'Odabir podatkovnog centra',
    'Auswertung der Verweisquellen'
        => 'Analiza izvora upućivanja',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Analiza publike web-stranice (demografija web-stranice)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Analiza preglednika, operacijskog sustava i vrste uređaja',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Analiza uređaja, preglednika i procijenjene lokacije',
    'Auswertung von Herkunft und Kampagnen'
        => 'Analiza izvora i kampanja',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Autentificira zahtjeve krajnjeg korisnika',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Ograničavanje učestalosti prikazivanja',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Potvrđuje uspješno prošlu provjeru kako bi izostale daljnje provjere (challenges) u zoni',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Pružanje polja za plaćanje iz Stripe Elements',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Omogućivanje pristupačnosti',
    'Besucherzählung'
        => 'Brojanje posjetitelja',
    'Betrieb des Chat-Widgets'
        => 'Rad chat widgeta',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Rad i zaštita od zlouporabe kartografskih usluga',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Rad košarice i postupka plaćanja u trgovini',
    'Betrugs- und Missbrauchserkennung'
        => 'Otkrivanje prijevara i zlouporabe',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Otkrivanje prijevara pri pokušaju plaćanja',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Otkrivanje prijevara i procjena rizika pokušaja plaćanja',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Sprječavanje prijevara i zakonske obveze pružatelja platnih usluga',
    'Betrugsprävention'
        => 'Sprječavanje prijevara',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Sprječavanje prijevara i procjena rizika pokušaja plaćanja',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Stvaranje pseudonimnih profila upotrebe nakon privole',
    'Bildung von Zielgruppen und Retargeting'
        => 'Stvaranje ciljnih skupina i retargeting',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Veže sesiju uz istu AWS instancu',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Zaštita playera od botova i zlouporabe',
    'Bot-Abwehr fuer den Player'
        => 'Zaštita playera od botova',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Zaštita od botova pri isporuci HubSpotovih resursa',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Identifikator preglednika kojim LinkedIn razlikuje uređaje i otkriva zlouporabu',
    'Cloudflare-Bot-Abwehr'
        => 'Cloudflareova zaštita od botova',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Cloudflareovo otkrivanje botova radi filtriranja prometa',
    'Cloudflare-Ratenbegrenzung'
        => 'Cloudflareovo ograničavanje broja zahtjeva',
    'Conversion-Messung'
        => 'Mjerenje konverzija',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Praćenje konverzija za LinkedIn oglasne kampanje',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Praćenje konverzija za kampanje Microsoft Advertising',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Praćenje konverzija za Pinterest oglasne kampanje',
    'Darstellung interaktiver Karten auf der Website'
        => 'Prikaz interaktivnih karata na web-stranici',
    'Deduplizieren von Kontakten'
        => 'Uklanjanje duplikata kontakata',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Služi za prikazivanje i mjerenje oglasa.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'ID posjetitelja koji vrijedi na više domena; prema pružatelju kolačić treće strane, upotrebljava se samo ako su u konfiguracijskoj datoteci uključeni kolačići trećih strana',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Identifikator treće strane za prepoznavanje posjetitelja',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Identifikator treće strane koji se prosljeđuje Klaviyu',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Oglasni identifikator treće strane za mjerenje kampanja i personalizaciju na TikToku',
    'E-Commerce- und Zielauswertung'
        => 'Analiza e-trgovine i ciljeva',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Prethodno popunjavanje adrese e-pošte iz obrasca za komentare',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Ugradnja i reprodukcija pjesama, albuma, playlista i epizoda podcasta',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Ugradnja i reprodukcija videozapisa na web-stranici',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Ugradnja obrazaca i anketa u web-stranicu',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Ugradnja polja za karticu u vlastiti checkout, kako podaci o kartici ne bi prolazili kroz trgovinu',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Ugradnja izvana održavane izjave o kolačićima',
    'Einbettung von Audioinhalten'
        => 'Ugradnja audiosadržaja',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Uključivanje oglasnih piksela Googlea i Facebooka na povezanoj web-stranici',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Prikaz obavijesti o financiranju i plaćanju na rate na stranicama proizvoda i košarice (On-site Messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Jedinstveni identifikator pri mjerenju na više domena (računi od 14.06.2026)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Jedinstveni identifikator pri mjerenju na više domena (računi prije 14.06.2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Jednokratna vrijednost protiv CSRF-a u opt-out obrascu',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Sadrži identifikator korisnika i vrijeme nastanka; prema izvoru postavlja se u Pinterestovu in-app pregledniku, a ne na domeni web-stranice',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Prikupljanje i prosljeđivanje odgovora operateru obrasca',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Bilježi upotrebu web-stranice u svrhu analize.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Bilježenje vlastitih događaja koje definira operater',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Bilježenje i prijenos grešaka aplikacije iz preglednika',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Bilježenje posjetitelja i pregleda stranica na web-stranici za marketinšku automatizaciju',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Mjerenje uspješnosti oglasnog materijala i obračun provizije',
    'Erhalt des Sitzungszustands'
        => 'Održavanje stanja sesije',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Prepoznavanje uređaja radi zaštite od zlouporabe',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Prepoznavanje i odbijanje automatiziranih pristupa obrascima',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Prepoznavanje botova i automatiziranog ponašanja u postupku narudžbe',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Prepoznavanje je li se sadržaj košarice promijenio',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Prepoznaje promjene sadržaja košarice',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Prepoznaje posjetitelje web-stranice na kojoj je ugrađen Intercomov kod',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Ponovno prepoznaje preglednike na Microsoftovim web-stranicama; prema pružatelju upotrebljava se i za oglašavanje, kolačić treće strane',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Ponovno prepoznaje osobe koje pišu putem alata za chat',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Prepoznaje uređaj s kojeg razgovor polazi',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Prepoznaje pojedinačni uređaj koji komunicira s Messengerom radi zaštite od zlouporabe',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Prepoznaje krajnjeg korisnika koji započinje razgovor',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Prepoznaje domenu ili poddomenu na kojoj je ugrađen chat widget',
    'Erkennt wiederkehrende Besucher'
        => 'Prepoznaje posjetitelje koji se vraćaju',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Prepoznaje je li preglednik ponovno pokrenut',
    'Erkennung von Klickbetrug'
        => 'Otkrivanje prijevare klikovima',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Utvrđuje jedinstvene pristupe web-stranici (računi od 14.06.2026)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Utvrđuje jedinstvene pristupe web-stranici (računi prije 14.06.2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Omogućivanje da treće strane postavljaju kolačiće u pregledniku tih korisnika',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Omogućuje upotrebu pristupačnosti',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Omogućuje dodatne funkcije web-stranice.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Identifikator prve strane koji prepoznaje posjetitelje i pridružuje događaje web-stranici',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Identifikator posjetitelja prve strane za praćenje konverzija i remarketing',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Identifikator sesije prve strane za pridruživanje događaja',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Identifikator sesije prve strane po pikselu za mjerenje kampanja',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Identifikator sesije prve strane za mjerenje kampanja',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Oglasni identifikator prve strane za mjerenje kampanja i personalizaciju na TikToku',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Kolačić prve strane koji grupira radnje posjetitelja koje Pinterest ne može pripisati',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Kolačić prve strane koji pohranjuje hashirane podatke o kupcima prikupljene putem Automatic Enhanced Match',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Stvara jedinstveni identifikator za svakog posjetitelja (računi od 14.06.2026)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Stvara jedinstveni identifikator za svakog posjetitelja (računi prije 14.06.2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identifikator uređaja za analizu događaja na stranicama s widgetom',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Postavlja se pri prijavi na stranici koju hostira HubSpot',
    'Gewaehlte Sprache speichern'
        => 'Spremanje odabranog jezika',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Usklađuje MUID identifikator preko Microsoftovih domena; prema pružatelju kolačić treće strane',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Održava poruke usklađenima kroz više kartica',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Čuva vrijednost parametra pk_campaign',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Čuva vrijednost parametra utm_campaign',
    'Haelt den Widerspruch gegen die Messung'
        => 'Čuva prigovor na mjerenje',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Čuva vrijeme isteka za _uetsid',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Čuva vrijeme isteka za _uetvid',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Čuva vrstu izvora prometa za Tag Manager',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Bilježi identitet posjetitelja, i radi uklanjanja duplikata kontakata',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Bilježi odluku posjetitelja o kolačićima',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Održava prikaz widgeta dosljednim pri promjeni stranice',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Bilježi ulaznu stranicu; Statistika',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Čuva privolu za mjerenje kolačićima',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Čuva odluku korisnika o kategorijama i pružateljima',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Održava sesiju prijavljenih korisnika i pristup ranijim razgovorima',
    'Haelt die verweisende Adresse'
        => 'Čuva adresu upućivanja',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Bilježi izvor upućivanja; Statistika',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Čuva vlastite varijable sesije (prema pružatelju zastarjelo)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Bilježi smije li etracker postavljati kolačiće; postavlja se kod data-block-cookies putem API poziva',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Bilježi koje je funkcijske prekidače aktivirao vlasnik videozapisa',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Glavni kolačić za prepoznavanje posjetitelja',
    'Heatmaps'
        => 'Heatmaps',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Heatmaps klikova i ponašanja pri pomicanju',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Čuva podatke heatmap sesije za vrijeme trajanja posjeta',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Čuva informacije o trenutnoj sesiji (računi od 14.06.2026)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Čuva informacije o trenutnoj sesiji (računi prije 14.06.2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Čuva korisnički definirane varijable za vrijeme trajanja posjeta',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Čuva trajne podatke na razini posjetitelja (računi od 14.06.2026)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Čuva trajne podatke na razini posjetitelja za Insights analizu (računi prije 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Bilježi status privole posjetitelja (računi od 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Bilježi status privole posjetitelja (računi prije 14.06.2026)',
    'Hält den Sitzungszustand.'
        => 'Čuva stanje sesije.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Čuva Clarity identifikator korisnika i postavke za ovu web-stranicu',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Čuva dodjelu varijante za A/B testove',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Privremeno bilježi odabranu kombinaciju (računi od 14.06.2026)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Privremeno bilježi odabranu kombinaciju (računi prije 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Bilježi odabranu varijantu prije nego što se izvrši preusmjeravanje (računi od 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Bilježi odabranu varijantu prije nego što se izvrši preusmjeravanje (računi prije 14.06.2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Bilježi preko koje poveznice je posjet nastao',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'U načinu Pre-Clearance: odobrenje za daljnje WAF provjere iste zone',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Neizravni identifikator člana za praćenje konverzija, retargeting i analizu',
    'Inhalt des Warenkorbs; notwendig'
        => 'Sadržaj košarice; nužno',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Analitički podaci o kupcima u trgovini; analitika',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Jedinstveni identifikator vezan uz kampanju (računi od 14. 6. 2026.)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Identifikator prvog kontakta s Clarityjem na svim web-stranicama koje upotrebljavaju Clarity; prema pružatelju kolačić treće strane',
    'Kennzeichnet die laufende Sitzung'
        => 'Označava tekuću sesiju',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Zadržavanje podataka iz komentara za daljnje komentare',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Dosljedno prikazivanje varijanti A/B testa',
    'Lastverteilung und Routing'
        => 'Raspodjela opterećenja i usmjeravanje',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Raspodjela opterećenja i usmjeravanje zahtjeva za provjeru',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Lokalno pohranjuje postavke računa posjetitelja',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Isporučuje istu varijantu stranice u A/B testu',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Chat uživo i kanal za poruke za podršku na web-stranici',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Chat uživo i sandučić podrške na web-stranici',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Marketinški podaci sučelja za kupnju; marketing',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Marketinški podaci za sučelja za kupnju',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Pamćenje postavki playera gledatelja (glasnoća, kvaliteta, titlovi)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Pamćenje stanja i postavki widgeta',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Pamti zatvaranje bannera Global Privacy Control',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Pamti zatvaranje obavijesnog bannera',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Pamti trenutak usklađivanja s kolačićem lms_analytics',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Pamti trenutak posljednjeg usklađivanja identifikatora kako se usklađivanje ne bi ponavljalo',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Pamti dodijeljenu varijantu (računi od 14. 6. 2026.)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Pamti dodijeljenu varijantu kako bi pri ponovnom posjetu ostala ista (računi prije 14. 6. 2026.)',
    'Merkt einen Rabattcode; notwendig'
        => 'Pamti kod za popust; nužno',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Pamti prigovor na mjerenje (računi od 14. 6. 2026.)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Pamti prigovor koji vrijedi na svim web-stranicama (računi prije 14. 6. 2026.)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Pamti postavke playera kao što su glasnoća, kvaliteta i titlovi',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Pamti postavku za zvučne obavijesti',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Pamti danu privolu za mjerenje',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Pamti prigovor na mjerenje',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Pamti proaktivne poruke koje su zatvorene',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Pamti da je posjetitelj zatvorio natpis na gumbu za pokretanje',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Pamti je li widget otvoren ili zatvoren',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Pamti da posjetitelj ne smije sudjelovati ni u jednoj kampanji (računi prije 14. 6. 2026.)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Pamti da je posjetitelj isključen iz kampanje (računi od 14. 6. 2026.)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Pamti da je posjetitelj isključen iz kampanje (računi prije 14. 6. 2026.)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Pamti da je obavijest o privoli zatvorena',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Pamti da je obavijest trgovine zatvorena',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Pamti da se pitanje o kolačićima ne postavlja ponovno',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Pamti da je tag već aktiviran',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Pamti mjeri li se kod ovog posjetitelja dubina pomicanja',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Pamti je li prozor chata otvoren',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Pamti prosljeđuje li se identifikator MUID oglasnom identifikatoru; prema pružatelju uvijek 0, kolačić treće strane',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Mjerenje otvaranja i klikova u e-mail kampanjama',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Mjerenje sesija i događaja na stranicama s widgetom',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Mjerenje sesija i pripisivanje izvora posjeta',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Mjerenje dostupnosti usluge koje provodi Google',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Mjerenje vremena učitavanja i osnovnih pokazatelja stranice (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Mjerenje dubine pomicanja i događaja klika',
    'Messung der Werbewirkung'
        => 'Mjerenje učinka oglašavanja',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Mjerenje ponašanja pri korištenju web-stranice',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Mjerenje i personalizacija oglasa u oglasnoj mreži TikTok Pangle',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Mjerenje i poboljšanje uspješnosti oglasnih kampanja',
    'Messung von Auslieferungen und Klicks'
        => 'Mjerenje prikaza i klikova',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Mjerenje posjetitelja i sesija za potrebe analize',
    'Messung von Conversions'
        => 'Mjerenje konverzija',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Mjerenje pregleda stranica i posjeta',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Mjerenje pregleda stranica i događaja',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Mjerenje pregleda stranica i ponašanja pri korištenju',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Mjerenje pregleda stranica i prilagođenih događaja',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Mjerenje pregleda stranica, posjeta i sesija',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Mjerenje pregleda stranica, posjeta i sesija na vlastitom poslužitelju',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Mjerenje oglasnih kampanja i konverzija na web-stranici',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Mjerenje ciljeva i konverzija kampanje',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Naknadno učitavanje pločica karte, fontova i stilova od pružatelja',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Prethodno popunjavanje imena iz obrasca za komentare',
    'Nutzer-ID'
        => 'Korisnički ID',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Pridružuje košaricu ispravnoj zemlji; nužno',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Pridružuje košaricu u bazi podataka ispravnom kupcu',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Pridružuje radnje jednog posjeta jednoj sesiji',
    'Personalisierung der Werbung auf TikTok'
        => 'Personalizacija oglašavanja na TikToku',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Provjera može li WordPress postavljati kolačiće',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Provjerava podržava li preglednik kolačiće; nužno',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Provjerava može li WordPress postavljati kolačiće',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Kontrolna vrijednost lozinke trgovine; nužno',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Kolačić za provjeru pružatelja (računi prije 14. 6. 2026.)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Provjerava prihvaća li preglednik kolačiće (računi od 14. 6. 2026.)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Provjerava prihvaća li preglednik kolačiće (računi prije 14. 6. 2026.)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Provjerava prihvaća li preglednik kolačiće (prema pružatelju samo u Internet Exploreru)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Ograničavanje broja zahtjeva kod HubSpotova CDN pružatelja',
    'Reichweiten- und Nutzungsmessung'
        => 'Mjerenje dosega i korištenja',
    'Reichweitenmessung'
        => 'Mjerenje dosega',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Mjerenje dosega ugrađenih videozapisa koje provodi Vimeo',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Mjerenje dosega za operatera trgovine',
    'Remarketing und Zielgruppenbildung'
        => 'Remarketing i stvaranje ciljanih skupina',
    'Retargeting'
        => 'Retargeting',
    'Retargeting von Website-Besuchern'
        => 'Retargeting posjetitelja web-stranice',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Analiza rizika radi razlikovanja čovjeka i bota',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Zbirni kolačić koji se prema pružatelju stvara samo u pregledniku Safari (računi od 14. 6. 2026.)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Zbirni kolačić koji se prema pružatelju stvara samo u pregledniku Safari (računi prije 14. 6. 2026.)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Prikupljanje informacija o ponašanju ovih korisnika pri pregledavanju od strane Spotifyja i trećih strana',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Prekidač koji operater web-stranice sam postavlja kako bi onemogućio praćenje putem Klaviya',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Zaštita prijave članova od krivotvorenja',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Zaštita obrazaca od automatizirane zlouporabe',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Zaštita od automatiziranih zahtjeva (spam, credential stuffing)',
    'Sicherheit'
        => 'Sigurnost',
    'Sicherheitsfunktionen'
        => 'Sigurnosne funkcije',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Sigurnosne funkcije kada je aktivna neobavezna značajka User Journeys',
    'Sitzung'
        => 'Sesija',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Pripisivanje sesije te jezika odnosno zemlje',
    'Sitzungsaufzeichnung'
        => 'Snimanje sesije',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identifikator sesije za analizu događaja na stranicama s widgetom',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Identifikator sesije za statistiku trgovine; analitika',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Ključ sesije usluge Answer Bot',
    'Sitzungswiedergabe'
        => 'Reprodukcija sesije',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Pohranjuje token za autentifikaciju nakon prijave',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Pohranjuje kodiranu lozinku za videozapise zaštićene lozinkom',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Pohranjuje ključ odabranog jezika',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Pohranjuje postavku privatnosti posjetitelja; nužno',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Pohranjuje odluku posjetitelja o privoli',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Pohranjuje identifikator uređaja posjetitelja za autentifikaciju u widgetu za chat',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Pohranjuje identifikator korisnika prijavljenog za webinar',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Pohranjuje identifikator klika fbclid kako bi se događaj na web-stranici mogao pripisati oglasu',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Pohranjuje korisnički identifikator iz registracijskog obrasca postavljenog ispred videozapisa',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Pohranjuje TikTokov identifikator klika za pripisivanje konverzija',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Sprema jedinstveni ID posjetitelja radi prepoznavanja',
    'Speichert die zugestimmten Kategorien'
        => 'Pohranjuje kategorije za koje je dana privola',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Puni widget s nedavno pregledanim proizvodima',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Upravlja time obnavlja li se identifikator MUID; prema pružatelju kolačić treće strane',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Tehnički nužno za rad i sigurnost web-stranice.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Nosi podatke o sesiji i naplati u trgovini; pružatelj ga vodi kao nužan',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Nosi funkciju prigovora (opt-out)',
    'Transaktionssicherheit'
        => 'Sigurnost transakcija',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Nosi analizu rizika usluge reCAPTCHA.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Prijenos događaja s web-stranice TikToku',
    'Umfragen'
        => 'Ankete',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Onemogućuje prijenos podataka HubSpotu',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Potiskuje pozdravnu poruku chata nakon zatvaranja',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Razlikuje preglednike koji otvaraju Microsoftove stranice; uz privolu i za oglašavanje',
    'Unterscheidet einzelne Nutzer.'
        => 'Razlikuje pojedine korisnike.',
    'Unterscheidung einzelner Nutzer'
        => 'Razlikovanje pojedinih korisnika',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Razlikovanje čovjeka i bota kod obrazaca i prijava',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Povezuje više pregleda stranica u jednu snimku sesije',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Sprječava stalno prikazivanje bannera u strogom načinu rada',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Raspodjela signala privole Googleovim tagovima',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Upravljanje odlukom o privoli za tagove konfigurirane u spremniku',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Upravljanje prigovorom na mjerenje',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Upravljanje prigovorom i privolom za mjerenje',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Google ga svrstava u kategorije Analitika i Oglašavanje.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Google ga svrstava u kategorije Analiza, Oglašavanje i Sigurnost.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Google ga svrstava u kategorije Funkcionalnost, Oglašavanje i Sigurnost.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Google ga svrstava u kategorije Sigurnost i Funkcionalnost.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Google ga svrstava u kategorije Sigurnost i Oglašavanje.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Google ga svrstava u kategorije Sigurnost, Analiza, Funkcionalnost i Oglašavanje.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Google ga svrstava u kategorije Sigurnost, Funkcionalnost i Oglašavanje.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Google ga svrstava u kategorije Oglašavanje i Sigurnost.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Google ga svrstava u kategoriju Analiza; točniju svrhu Google ne navodi.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Google ga svrstava u kategoriju Funkcionalnost.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Google ga svrstava u kategoriju Sigurnost.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Google ga svrstava u kategoriju Oglašavanje.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Microsoft ga navodi kao jedan od kolačića koji se ne smiju postavljati bez privole; vlastiti opis svrhe Microsoft ne navodi',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Identifikator koji Vimeo stvara za mjerenje dosega',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Valuta košarice nakon dovršene naplate; nužno',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Vjerojatnosno pripisivanje preglednika određenoj osobi',
    'Warenkorb einer Besucherin zuordnen'
        => 'Pridruživanje košarice posjetitelju',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Prethodno popunjavanje web-adrese iz obrasca za komentare',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Prepoznavanje gledatelja u svrhu oglašavanja',
    'Werbepersonalisierung'
        => 'Personalizacija oglašavanja',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Kao _pin_unauth, ali kao kolačić treće strane',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Prepoznavanje posjetitelja unutar postupka rezervacije',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Prepoznavanje posjetitelja između pregleda stranica i kartica',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Prepoznavanje i identificiranje posjetitelja web-stranice',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Prepoznavanje posjetitelja kroz više posjeta',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Prepoznavanje posjetitelja povezanih web-stranica radi retargetinga',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Prepoznavanje posjetitelja koji se vraćaju i pripisivanje ranijih razgovora',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Prepoznavanje posjetitelja i pohrana njegovih obilježja',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Prepoznavanje preglednika putem Criteova identifikatora',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Prepoznavanje korisnika; samo uz privolu, prema zadanim postavkama blokirano',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Prepoznavanje preglednika pri kasnijim posjetima nakon privole',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Prepoznavanje posjetitelja i pripisivanje sesijama',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'Prepoznavanje članova LinkedIna izvan LinkedIna radi oglašavanja',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Prepoznavanje korisnika nakon privole',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Prepoznavanje posjetitelja koji se vraćaju putem ID-a posjetitelja',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Postavlja se kada je aktiviran cilj kampanje (računi od 14. 6. 2026.)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Postavlja se kada je aktiviran cilj kampanje (računi prije 14. 6. 2026.)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Postavlja se kada osoba posjeti web-stranicu s ugrađenim Pinterest tagom',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Postavlja se kada pripisivanje uspije bez postojećih kolačića, primjerice putem funkcije Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Postavlja ga JavaScript tag na temelju podataka koje Pinterest prosljeđuje uz oglašavani promet',
    'Zaehlt und begrenzt Sitzungen'
        => 'Broji i ograničava sesije',
    'Zahlungsabwicklung'
        => 'Obrada plaćanja',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Pokazuje traje li sesija još uvijek ili je nova',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Sučelju pokazuje da je korisnik prijavljen i kao tko',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Nasumični identifikator preglednika koji pripisuje događaje piksela na web-stranici jednom pregledniku',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Prikaz nedavno pregledanih proizvoda u pripadajućem widgetu',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Pripisivanje ponašanja na web-stranici određenom profilu',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Pripisivanje izvora posjeta (Referrer, atribucija)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Pripisivanje posjetitelja kontaktu u Brevo računu putem e-mail adrese',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Pripisivanje transakcija poput leadova i prodaja određenom izdavaču',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Pripisivanje radnji na web-stranici prethodno prikazanim oglasima',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Spajanje više pregleda stranica u jednu sesiju',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Dodatni podaci uz zabilježene događaje tijeka posjeta',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Dodjeljivanje i zadržavanje varijante kroz više posjeta',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Međuspremnik za događaje na temelju CSS selektora',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Međuspremnik za podatke Messengera i posjetitelja u memoriji preglednika',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Međuspremnik za unose Tag Managera',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Međuspremnik za mjerenje dubine pomicanja',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Međuspremnik za varijable Tag Managera',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Međuspremnik za postavke widgeta radi izbjegavanja ponovljenih zahtjeva prema poslužitelju',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Međupohrana podataka Messengera i posjetitelja u pregledniku',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Broji sesije stvorene za jednog posjetitelja (računi od 14. 6. 2026.)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Broji koliko je puta preglednik tijekom mjerenja zatvoren i ponovno otvoren (računi prije 14. 6. 2026.)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Brojanje pregleda stranica i posjeta',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'automatizirane analize ponašanja korisnika',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'gruba geografska lokacija na razini zemlje, regije i grada',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'opcionalno snimanje sesije (Session Replay), prema zadanim postavkama s maskiranim tekstovima, slikama i unosima',
    'optional Heatmaps und A/B-Tests'
        => 'opcionalno heatmaps i A/B testovi',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Prosljeđuje izvor upućivanja kod Split-URL testova (računi od 14. 6. 2026.)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Prosljeđuje izvor upućivanja kod Split-URL testova (računi prije 14. 6. 2026.)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Pripisivanje transakcija poput leadova i prodaja određenom izdavaču, Mjerenje uspješnosti oglasnog materijala i obračun provizije',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Bilježenje posjetitelja i pregleda stranica na web-stranici za marketinšku automatizaciju, Pripisivanje posjetitelja kontaktu u Brevo računu putem e-mail adrese, Bilježenje vlastitih događaja koje definira operater',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Prikaz kalendara rezervacija i dogovaranje termina na web-stranici, Prepoznavanje posjetitelja unutar postupka rezervacije, Obrada plaćanja kada je termin naplatan',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Prepoznavanje i odbijanje automatiziranih pristupa obrascima, Izdavanje tokena koji provjerava poslužitelj web-stranice, U načinu Pre-Clearance: odobrenje za daljnje WAF provjere iste zone',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Mjerenje pregleda stranica i posjeta, Mjerenje vremena učitavanja i osnovnih pokazatelja stranice (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Isporuka personaliziranih oglasa, Mjerenje učinka oglašavanja, Prepoznavanje preglednika putem Criteova identifikatora',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Mjerenje ponašanja pri korištenju web-stranice, Stvaranje pseudonimnih profila upotrebe nakon privole, Prepoznavanje preglednika pri kasnijim posjetima nakon privole',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Mjerenje pregleda stranica i ponašanja pri korištenju, Mjerenje dubine pomicanja i događaja klika, Prepoznavanje korisnika nakon privole, Upravljanje prigovorom na mjerenje',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Razlikovanje čovjeka i bota kod obrazaca i prijava, Zaštita od automatiziranih zahtjeva (spam, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Mjerenje konverzija, Remarketing i stvaranje ciljanih skupina, Ograničavanje učestalosti prikazivanja, Otkrivanje prijevare klikovima',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Isporuka oglasa, Ograničavanje učestalosti prikazivanja, Otkrivanje prijevara i zlouporabe, Mjerenje prikaza i klikova',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Razlikovanje pojedinih korisnika, Održavanje stanja sesije, Mjerenje dosega i korištenja',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Prikaz interaktivne karte, Mjerenje dostupnosti usluge koje provodi Google',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Analiza rizika radi razlikovanja čovjeka i bota, Zaštita obrazaca od automatizirane zlouporabe',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Isporuka i upravljanje tagovima na web-stranici, Raspodjela signala privole Googleovim tagovima',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Razlikovanje čovjeka i bota kod obrazaca i prijava, Raspodjela opterećenja i usmjeravanje zahtjeva za provjeru, Omogućivanje pristupačnosti',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Heatmaps, Snimanje sesije, Ankete',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Prepoznavanje posjetitelja kroz više posjeta, Mjerenje sesija i pripisivanje izvora posjeta, Uklanjanje duplikata kontakata, Rad chat widgeta, Dosljedno prikazivanje varijanti A/B testa',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Chat uživo i sandučić podrške na web-stranici, Prepoznavanje posjetitelja koji se vraćaju i pripisivanje ranijih razgovora, Prepoznavanje uređaja radi zaštite od zlouporabe, Međupohrana podataka Messengera i posjetitelja u pregledniku',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Prikaz obavijesti o financiranju i plaćanju na rate na stranicama proizvoda i košarice (On-site Messaging), Isporuka sadržaja obavijesti u pripremljena rezervirana mjesta u izvornom kodu stranice putem Ad-Servera',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Prepoznavanje i identificiranje posjetitelja web-stranice, Pripisivanje ponašanja na web-stranici određenom profilu, Upravljanje prikazivanjem obrazaca za prijavu na web-stranici',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Praćenje konverzija za LinkedIn oglasne kampanje, Retargeting posjetitelja web-stranice, Analiza publike web-stranice (demografija web-stranice)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Prepoznavanje posjetitelja povezanih web-stranica radi retargetinga, Upravljanje skočnim obrascima kako se ne bi ponovno pojavljivali, Mjerenje otvaranja i klikova u e-mail kampanjama, Uključivanje oglasnih piksela Googlea i Facebooka na povezanoj web-stranici',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Prikaz interaktivnih karata na web-stranici, Naknadno učitavanje pločica karte, fontova i stilova od pružatelja, Obračun i zaštita poziva karte',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Mjerenje pregleda stranica, posjeta i sesija, Prepoznavanje posjetitelja koji se vraćaju putem ID-a posjetitelja, Pripisivanje izvora posjeta (Referrer, atribucija), opcionalno heatmaps i A/B testovi',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Mjerenje pregleda stranica, posjeta i sesija na vlastitom poslužitelju, Prepoznavanje posjetitelja koji se vraćaju putem ID-a posjetitelja, Pripisivanje izvora posjeta (Referrer, atribucija), opcionalno heatmaps i A/B testovi',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Isporuka i pokretanje tagova na web-stranici, Upravljanje odlukom o privoli za tagove konfigurirane u spremniku',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Mjerenje oglasnih kampanja i konverzija na web-stranici, Stvaranje ciljnih skupina i retargeting',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Praćenje konverzija za kampanje Microsoft Advertising, Izgradnja remarketinških popisa, Mjerenje pregleda stranica i prilagođenih događaja',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Snimanje i reprodukcija sesija, Heatmaps klikova i ponašanja pri pomicanju, Spajanje više pregleda stranica u jednu sesiju, automatizirane analize ponašanja korisnika',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Obrada plaćanja koje je pokrenuo posjetitelj, Ugradnja polja za karticu u vlastiti checkout, kako podaci o kartici ne bi prolazili kroz trgovinu, Sprječavanje prijevara i zakonske obveze pružatelja platnih usluga',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Snimanje pokreta miša, Reprodukcija sesije, Analiza ponašanja pri upotrebi',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Isporuka pločica karte ugrađenim kartama, Rad i zaštita od zlouporabe kartografskih usluga',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Obrada plaćanja, Sprječavanje prijevara',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Praćenje konverzija za Pinterest oglasne kampanje, Stvaranje ciljnih skupina i retargeting, Pripisivanje radnji na web-stranici prethodno prikazanim oglasima',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Mjerenje pregleda stranica i događaja, Prepoznavanje posjetitelja i pripisivanje sesijama, Analiza izvora i kampanja, Analiza uređaja, preglednika i procijenjene lokacije, Analiza e-trgovine i ciljeva',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Brojanje pregleda stranica i posjeta, Analiza izvora upućivanja, Analiza preglednika, operacijskog sustava i vrste uređaja, gruba geografska lokacija na razini zemlje, regije i grada',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Bilježenje i prijenos grešaka aplikacije iz preglednika, opcionalno snimanje sesije (Session Replay), prema zadanim postavkama s maskiranim tekstovima, slikama i unosima',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Rad košarice i postupka plaćanja u trgovini, Pripisivanje sesije te jezika odnosno zemlje, Mjerenje dosega za operatera trgovine, Marketinški podaci za sučelja za kupnju',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Ugradnja i reprodukcija pjesama, albuma, playlista i epizoda podcasta, Prikupljanje informacija o ponašanju ovih korisnika pri pregledavanju od strane Spotifyja i trećih strana, Omogućivanje da treće strane postavljaju kolačiće u pregledniku tih korisnika',
    'Besucherzählung, Reichweitenmessung'
        => 'Brojanje posjetitelja, Mjerenje dosega',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Otkrivanje prijevara i procjena rizika pokušaja plaćanja, Pružanje polja za plaćanje iz Stripe Elements, Prepoznavanje botova i automatiziranog ponašanja u postupku narudžbe',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Mjerenje i poboljšanje uspješnosti oglasnih kampanja, Personalizacija oglašavanja na TikToku, Prijenos događaja s web-stranice TikToku',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Ugradnja obrazaca i anketa u web-stranicu, Prikupljanje i prosljeđivanje odgovora operateru obrasca',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Ugradnja i reprodukcija videozapisa na web-stranici, Pamćenje postavki playera gledatelja (glasnoća, kvaliteta, titlovi), Mjerenje dosega ugrađenih videozapisa koje provodi Vimeo, Zaštita playera od botova i zlouporabe',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'A/B testovi i split URL testovi na web-stranici, Dodjeljivanje i zadržavanje varijante kroz više posjeta, Mjerenje ciljeva i konverzija kampanje, Mjerenje posjetitelja i sesija za potrebe analize, Upravljanje prigovorom i privolom za mjerenje',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Pridruživanje košarice posjetitelju, Prepoznavanje je li se sadržaj košarice promijenio, Prikaz nedavno pregledanih proizvoda u pripadajućem widgetu, Pamćenje skrivanja obavijesti trgovine',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Prijava i prepoznavanje sesije u administracijskom području, Zadržavanje podataka iz komentara za daljnje komentare, Pamćenje postavki prikaza administracijskog područja, Provjera može li WordPress postavljati kolačiće, Spremanje odabranog jezika',
    'Conversion-Messung, Retargeting'
        => 'Mjerenje konverzija, Retargeting',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Reprodukcija ugrađenih videozapisa, Sigurnost, Prepoznavanje gledatelja u svrhu oglašavanja',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Chat uživo i kanal za poruke za podršku na web-stranici, Prepoznavanje posjetitelja između pregleda stranica i kartica, Pamćenje stanja i postavki widgeta, Mjerenje sesija i događaja na stranicama s widgetom',
];
