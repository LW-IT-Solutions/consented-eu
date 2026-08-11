<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Serbisch.
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
        => 'A/B testovi i split URL testovi na sajtu',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Obračun i zaštita poziva mape',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Dovršetak prijave putem Shopa; neophodno',
    'Abspielen eingebetteter Videos'
        => 'Reprodukcija ugrađenih video-snimaka',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Obrada plaćanja koje je pokrenuo posetilac',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Obrada plaćanja kada je termin naplativ',
    'Analyse des Nutzungsverhaltens'
        => 'Analiza ponašanja pri korišćenju',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Analitički podaci kupovnih interfejsa; Statistika',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Analitički podaci prodavnice; pružalac ih vodi kao Statistiku',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Podaci za prijavu u administratorski deo na /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Prijava na Shop Pay; neophodno',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Prijava i prepoznavanje sesije u administratorskom delu',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Anonimna statistika o usluzi i druge tehničke svrhe, između ostalog podrška pristupačnosti',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Podešavanja prikaza administratorskog dela po nalogu',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Pamćenje podešavanja prikaza administratorskog dela',
    'Anzeige von Bewertungen'
        => 'Prikaz recenzija',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Prikaz kalendara rezervacija i zakazivanje termina na sajtu',
    'Anzeigen einer interaktiven Karte'
        => 'Prikaz interaktivne mape',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'Sa vrednošću 1 sprečava slanje UET događaja Microsoftu',
    'Aufbau von Remarketing-Listen'
        => 'Izgradnja remarketing lista',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Snimanje i reprodukcija sesija',
    'Aufzeichnung von Mausbewegungen'
        => 'Snimanje pokreta miša',
    'Ausblenden des Shop-Hinweises merken'
        => 'Pamćenje skrivanja obaveštenja prodavnice',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Isporuka i pokretanje tagova na sajtu',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Isporuka i upravljanje tagovima na sajtu',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Isporuka pločica mape ugrađenim mapama',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Isporuka sadržaja obaveštenja u pripremljena rezervisana mesta u izvornom kodu stranice putem Ad-Servera',
    'Auslieferung personalisierter Werbung'
        => 'Isporuka personalizovanih oglasa',
    'Auslieferung von Anzeigen'
        => 'Isporuka oglasa',
    'Auslieferung von Bibliotheken und Assets'
        => 'Isporuka biblioteka i resursa',
    'Auslieferung von Schriftarten'
        => 'Isporuka fontova',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Izdavanje tokena koji proverava server sajta',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Upravljanje prikazivanjem obrazaca za prijavu na sajtu',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Upravljanje iskačućim obrascima kako se ne bi ponovo pojavljivali',
    'Auswahl des Rechenzentrums'
        => 'Izbor centra podataka',
    'Auswertung der Verweisquellen'
        => 'Analiza izvora upućivanja',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Analiza publike sajta (demografija sajta)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Analiza pregledača, operativnog sistema i tipa uređaja',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Analiza uređaja, pregledača i procenjene lokacije',
    'Auswertung von Herkunft und Kampagnen'
        => 'Analiza izvora i kampanja',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Autentifikuje zahteve krajnjeg korisnika',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Ograničavanje učestalosti prikazivanja',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Potvrđuje uspešno prošlu proveru kako bi izostale dalje provere (challenges) u zoni',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Obezbeđivanje polja za plaćanje iz Stripe Elements',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Omogućavanje pristupačnosti',
    'Besucherzählung'
        => 'Brojanje posetilaca',
    'Betrieb des Chat-Widgets'
        => 'Rad čet vidžeta',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Rad i zaštita od zloupotrebe usluga mapa',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Rad korpe i postupka plaćanja u prodavnici',
    'Betrugs- und Missbrauchserkennung'
        => 'Otkrivanje prevara i zloupotrebe',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Otkrivanje prevara pri pokušaju plaćanja',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Otkrivanje prevara i procena rizika pokušaja plaćanja',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Sprečavanje prevara i zakonske obaveze pružaoca platnih usluga',
    'Betrugsprävention'
        => 'Sprečavanje prevara',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Sprečavanje prevara i procena rizika pokušaja plaćanja',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Formiranje pseudonimnih profila korišćenja nakon pristanka',
    'Bildung von Zielgruppen und Retargeting'
        => 'Formiranje ciljnih grupa i retargeting',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Vezuje sesiju za istu AWS instancu',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Zaštita plejera od botova i zloupotrebe',
    'Bot-Abwehr fuer den Player'
        => 'Zaštita plejera od botova',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Zaštita od botova pri isporuci HubSpotovih resursa',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Identifikator pregledača kojim LinkedIn razlikuje uređaje i otkriva zloupotrebu',
    'Cloudflare-Bot-Abwehr'
        => 'Cloudflareova zaštita od botova',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Cloudflareovo otkrivanje botova radi filtriranja saobraćaja',
    'Cloudflare-Ratenbegrenzung'
        => 'Cloudflareovo ograničavanje broja zahteva',
    'Conversion-Messung'
        => 'Merenje konverzija',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Praćenje konverzija za LinkedIn oglasne kampanje',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Praćenje konverzija za kampanje Microsoft Advertising',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Praćenje konverzija za Pinterest oglasne kampanje',
    'Darstellung interaktiver Karten auf der Website'
        => 'Prikaz interaktivnih mapa na sajtu',
    'Deduplizieren von Kontakten'
        => 'Uklanjanje duplikata kontakata',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Služi za prikazivanje i merenje oglasa.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'ID posetioca koji važi na više domena; prema pružaocu kolačić treće strane, koristi se samo ako su u konfiguracionoj datoteci uključeni kolačići trećih strana',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Identifikator treće strane za prepoznavanje posetilaca',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Identifikator treće strane koji se prosleđuje Klaviyu',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Oglasni identifikator treće strane za merenje kampanja i personalizaciju na TikToku',
    'E-Commerce- und Zielauswertung'
        => 'Analiza e-trgovine i ciljeva',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Prethodno popunjavanje adrese e-pošte iz obrasca za komentare',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Ugradnja i reprodukcija pesama, albuma, plejlista i epizoda podkasta',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Ugradnja i reprodukcija video-snimaka na sajtu',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Ugradnja obrazaca i anketa u sajt',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Ugradnja polja za karticu u sopstveni checkout, kako podaci o kartici ne bi prolazili kroz prodavnicu',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Ugradnja spolja održavane izjave o kolačićima',
    'Einbettung von Audioinhalten'
        => 'Ugradnja audio-sadržaja',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Uključivanje oglasnih piksela Googlea i Facebooka na povezanom sajtu',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Prikaz obaveštenja o finansiranju i plaćanju na rate na stranicama proizvoda i korpe (On-site Messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Jedinstveni identifikator pri merenju na više domena (nalozi od 14.06.2026)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Jedinstveni identifikator pri merenju na više domena (nalozi pre 14.06.2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Jednokratna vrednost protiv CSRF-a u opt-out obrascu',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Sadrži identifikator korisnika i vreme nastanka; prema izvoru postavlja se u Pinterestovom in-app pregledaču, a ne na domenu sajta',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Prikupljanje i prosleđivanje odgovora operateru obrasca',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Beleži korišćenje sajta u svrhu analize.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Beleženje sopstvenih događaja koje definiše operater',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Beleženje i prenos grešaka aplikacije iz pregledača',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Beleženje posetilaca i pregleda stranica na sajtu za marketinšku automatizaciju',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Merenje uspešnosti oglasnog materijala i obračun provizije',
    'Erhalt des Sitzungszustands'
        => 'Održavanje stanja sesije',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Prepoznavanje uređaja radi zaštite od zloupotrebe',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Prepoznavanje i odbijanje automatizovanih pristupa obrascima',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Prepoznavanje botova i automatizovanog ponašanja u postupku poručivanja',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Prepoznavanje da li se sadržaj korpe promenio',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Prepoznaje promene sadržaja korpe',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Prepoznaje posetioce sajta na kojem je ugrađen Intercomov kod',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Ponovo prepoznaje pregledače na Microsoftovim sajtovima; prema pružaocu koristi se i za oglašavanje, kolačić treće strane',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Ponovo prepoznaje osobe koje pišu putem alata za čet',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Prepoznaje uređaj sa kojeg razgovor polazi',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Prepoznaje pojedinačni uređaj koji komunicira sa Messengerom radi zaštite od zloupotrebe',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Prepoznaje krajnjeg korisnika koji započinje razgovor',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Prepoznaje domen ili poddomen na kojem je ugrađen čet vidžet',
    'Erkennt wiederkehrende Besucher'
        => 'Prepoznaje posetioce koji se vraćaju',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Prepoznaje da li je pregledač ponovo pokrenut',
    'Erkennung von Klickbetrug'
        => 'Otkrivanje prevare klikovima',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Utvrđuje jedinstvene pristupe sajtu (nalozi od 14.06.2026)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Utvrđuje jedinstvene pristupe sajtu (nalozi pre 14.06.2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Omogućavanje da treće strane postavljaju kolačiće u pregledaču tih korisnika',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Omogućava korišćenje pristupačnosti',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Omogućava dodatne funkcije sajta.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Identifikator prve strane koji prepoznaje posetioce i pridružuje događaje sajtu',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Identifikator posetioca prve strane za praćenje konverzija i remarketing',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Identifikator sesije prve strane za pridruživanje događaja',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Identifikator sesije prve strane po pikselu za merenje kampanja',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Identifikator sesije prve strane za merenje kampanja',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Oglasni identifikator prve strane za merenje kampanja i personalizaciju na TikToku',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Kolačić prve strane koji grupiše radnje posetilaca koje Pinterest ne može da pripiše',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Kolačić prve strane koji čuva heširane podatke o kupcima prikupljene putem Automatic Enhanced Match',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Stvara jedinstveni identifikator za svakog posetioca (nalozi od 14.06.2026)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Stvara jedinstveni identifikator za svakog posetioca (nalozi pre 14.06.2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identifikator uređaja za analizu događaja na stranicama sa vidžetom',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Postavlja se pri prijavi na stranici koju hostuje HubSpot',
    'Gewaehlte Sprache speichern'
        => 'Čuvanje izabranog jezika',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Usklađuje MUID identifikator preko Microsoftovih domena; prema pružaocu kolačić treće strane',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Održava poruke usklađenima kroz više kartica',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Čuva vrednost parametra pk_campaign',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Čuva vrednost parametra utm_campaign',
    'Haelt den Widerspruch gegen die Messung'
        => 'Čuva prigovor na merenje',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Čuva vreme isteka za _uetsid',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Čuva vreme isteka za _uetvid',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Čuva vrstu izvora saobraćaja za Tag Manager',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Beleži identitet posetioca, i radi uklanjanja duplikata kontakata',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Beleži odluku posetioca o kolačićima',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Održava prikaz vidžeta doslednim pri promeni stranice',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Beleži ulaznu stranicu; Statistika',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Čuva pristanak za merenje kolačićima',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Čuva odluku korisnika o kategorijama i pružaocima',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Održava sesiju prijavljenih korisnika i pristup ranijim razgovorima',
    'Haelt die verweisende Adresse'
        => 'Čuva adresu upućivanja',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Beleži izvor upućivanja; Statistika',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Čuva sopstvene promenljive sesije (prema pružaocu zastarelo)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Beleži da li etracker sme da postavlja kolačiće; postavlja se kod data-block-cookies putem API poziva',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Beleži koje je funkcijske prekidače aktivirao vlasnik video-snimka',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Glavni kolačić za prepoznavanje posetilaca',
    'Heatmaps'
        => 'Heatmaps',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Heatmaps klikova i ponašanja pri skrolovanju',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Čuva podatke heatmap sesije za vreme trajanja posete',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Čuva informacije o trenutnoj sesiji (nalozi od 14.06.2026)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Čuva informacije o trenutnoj sesiji (nalozi pre 14.06.2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Čuva korisnički definisane promenljive za vreme trajanja posete',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Čuva trajne podatke na nivou posetioca (nalozi od 14.06.2026)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Čuva trajne podatke na nivou posetioca za Insights analizu (nalozi pre 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Beleži status pristanka posetioca (nalozi od 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Beleži status pristanka posetioca (nalozi pre 14.06.2026)',
    'Hält den Sitzungszustand.'
        => 'Čuva stanje sesije.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Čuva Clarity identifikator korisnika i podešavanja za ovaj sajt',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Čuva dodelu varijante za A/B testove',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Privremeno beleži izabranu kombinaciju (nalozi od 14.06.2026)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Privremeno beleži izabranu kombinaciju (nalozi pre 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Beleži izabranu varijantu pre nego što se izvrši preusmeravanje (nalozi od 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Beleži izabranu varijantu pre nego što se izvrši preusmeravanje (nalozi pre 14.06.2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Beleži preko koje veze je poseta nastala',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'U režimu Pre-Clearance: odobrenje za dalje WAF provere iste zone',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Indirektni identifikator člana za praćenje konverzija, retargeting i analizu',
    'Inhalt des Warenkorbs; notwendig'
        => 'Sadržaj korpe; neophodno',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Analitički podaci o kupcima u prodavnici; analitika',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Jedinstveni identifikator vezan za kampanju (nalozi od 14. 6. 2026.)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Identifikator prvog kontakta sa Clarityjem na svim sajtovima koji koriste Clarity; prema pružaocu kolačić treće strane',
    'Kennzeichnet die laufende Sitzung'
        => 'Označava tekuću sesiju',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Zadržavanje podataka iz komentara za naredne komentare',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Dosledno prikazivanje varijanti A/B testa',
    'Lastverteilung und Routing'
        => 'Raspodela opterećenja i usmeravanje',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Raspodela opterećenja i usmeravanje zahteva za proveru',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Lokalno čuva podešavanja naloga posetioca',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Isporučuje istu varijantu stranice u A/B testu',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Čet uživo i kanal za poruke za podršku na sajtu',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Čet uživo i sanduče podrške na sajtu',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Marketinški podaci interfejsa za kupovinu; marketing',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Marketinški podaci za interfejse za kupovinu',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Pamćenje podešavanja plejera gledaoca (jačina zvuka, kvalitet, titlovi)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Pamćenje stanja i podešavanja vidžeta',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Pamti zatvaranje banera Global Privacy Control',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Pamti zatvaranje obaveštajnog banera',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Pamti trenutak usklađivanja sa kolačićem lms_analytics',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Pamti trenutak poslednjeg usklađivanja identifikatora, kako se usklađivanje ne bi ponavljalo',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Pamti dodeljenu varijantu (nalozi od 14. 6. 2026.)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Pamti dodeljenu varijantu, kako bi pri ponovnoj poseti ostala ista (nalozi pre 14. 6. 2026.)',
    'Merkt einen Rabattcode; notwendig'
        => 'Pamti kod za popust; neophodno',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Pamti prigovor na merenje (nalozi od 14. 6. 2026.)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Pamti prigovor koji važi na svim sajtovima (nalozi pre 14. 6. 2026.)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Pamti podešavanja plejera kao što su jačina zvuka, kvalitet i titlovi',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Pamti podešavanje za zvučna obaveštenja',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Pamti dati pristanak za merenje',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Pamti prigovor na merenje',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Pamti proaktivne poruke koje su zatvorene',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Pamti da je posetilac zatvorio natpis na dugmetu za pokretanje',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Pamti da li je vidžet otvoren ili zatvoren',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Pamti da posetilac ne treba da učestvuje ni u jednoj kampanji (nalozi pre 14. 6. 2026.)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Pamti da je posetilac izuzet iz kampanje (nalozi od 14. 6. 2026.)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Pamti da je posetilac izuzet iz kampanje (nalozi pre 14. 6. 2026.)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Pamti da je obaveštenje o pristanku zatvoreno',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Pamti da je obaveštenje prodavnice zatvoreno',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Pamti da se pitanje o kolačićima ne postavlja ponovo',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Pamti da je tag već aktiviran',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Pamti da li se kod ovog posetioca meri dubina skrolovanja',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Pamti da li je prozor četa otvoren',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Pamti da li se identifikator MUID prosleđuje oglasnom identifikatoru; prema pružaocu uvek 0, kolačić treće strane',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Merenje otvaranja i klikova u imejl kampanjama',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Merenje sesija i događaja na stranicama sa vidžetom',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Merenje sesija i pripisivanje izvora posete',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Merenje dostupnosti usluge koje sprovodi Google',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Merenje vremena učitavanja i osnovnih pokazatelja stranice (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Merenje dubine skrolovanja i događaja klika',
    'Messung der Werbewirkung'
        => 'Merenje dejstva oglašavanja',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Merenje ponašanja pri korišćenju sajta',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Merenje i personalizacija oglasa u oglasnoj mreži TikTok Pangle',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Merenje i poboljšanje uspešnosti oglasnih kampanja',
    'Messung von Auslieferungen und Klicks'
        => 'Merenje prikaza i klikova',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Merenje posetilaca i sesija za potrebe analize',
    'Messung von Conversions'
        => 'Merenje konverzija',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Merenje pregleda stranica i poseta',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Merenje pregleda stranica i događaja',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Merenje pregleda stranica i ponašanja pri korišćenju',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Merenje pregleda stranica i prilagođenih događaja',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Merenje pregleda stranica, poseta i sesija',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Merenje pregleda stranica, poseta i sesija na sopstvenom serveru',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Merenje oglasnih kampanja i konverzija na sajtu',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Merenje ciljeva i konverzija kampanje',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Naknadno učitavanje pločica mape, fontova i stilova od pružaoca',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Prethodno popunjavanje imena iz obrasca za komentare',
    'Nutzer-ID'
        => 'Korisnički ID',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Povezuje korpu sa ispravnom državom; neophodno',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Povezuje korpu u bazi podataka sa ispravnim kupcem',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Pridružuje radnje jedne posete jednoj sesiji',
    'Personalisierung der Werbung auf TikTok'
        => 'Personalizacija oglašavanja na TikToku',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Provera da li WordPress može da postavlja kolačiće',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Proverava da li pregledač podržava kolačiće; neophodno',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Proverava da li WordPress može da postavlja kolačiće',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Kontrolna vrednost lozinke prodavnice; neophodno',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Kolačić za proveru pružaoca (nalozi pre 14. 6. 2026.)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Proverava da li pregledač prihvata kolačiće (nalozi od 14. 6. 2026.)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Proverava da li pregledač prihvata kolačiće (nalozi pre 14. 6. 2026.)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Proverava da li pregledač prihvata kolačiće (prema pružaocu samo u Internet Exploreru)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Ograničavanje broja zahteva kod HubSpotovog CDN pružaoca',
    'Reichweiten- und Nutzungsmessung'
        => 'Merenje dosega i korišćenja',
    'Reichweitenmessung'
        => 'Merenje dosega',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Merenje dosega ugrađenih video-snimaka koje sprovodi Vimeo',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Merenje dosega za operatera prodavnice',
    'Remarketing und Zielgruppenbildung'
        => 'Remarketing i formiranje ciljnih grupa',
    'Retargeting'
        => 'Retargeting',
    'Retargeting von Website-Besuchern'
        => 'Retargeting posetilaca sajta',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Analiza rizika radi razlikovanja čoveka i bota',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Zbirni kolačić koji se, prema pružaocu, kreira samo u pregledaču Safari (nalozi od 14. 6. 2026.)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Zbirni kolačić koji se, prema pružaocu, kreira samo u pregledaču Safari (nalozi pre 14. 6. 2026.)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Prikupljanje informacija o ponašanju ovih korisnika pri pregledanju od strane Spotifyja i trećih strana',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Prekidač koji operater sajta sam postavlja da bi onemogućio praćenje putem Klaviya',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Zaštita prijave članova od falsifikovanja',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Zaštita obrazaca od automatizovane zloupotrebe',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Zaštita od automatizovanih zahteva (spam, credential stuffing)',
    'Sicherheit'
        => 'Bezbednost',
    'Sicherheitsfunktionen'
        => 'Bezbednosne funkcije',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Bezbednosne funkcije kada je aktivna opciona funkcija User Journeys',
    'Sitzung'
        => 'Sesija',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Pripisivanje sesije i jezika odnosno države',
    'Sitzungsaufzeichnung'
        => 'Snimanje sesije',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identifikator sesije za analizu događaja na stranicama sa vidžetom',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Identifikator sesije za statistiku prodavnice; analitika',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Ključ sesije usluge Answer Bot',
    'Sitzungswiedergabe'
        => 'Reprodukcija sesije',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Čuva token za autentifikaciju nakon prijave',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Čuva kodiranu lozinku za video-snimke zaštićene lozinkom',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Čuva ključ izabranog jezika',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Čuva podešavanje privatnosti posetioca; neophodno',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Čuva odluku posetioca o pristanku',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Čuva identifikator uređaja posetioca za autentifikaciju u vidžetu za čet',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Čuva identifikator korisnika prijavljenog za vebinar',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Čuva identifikator klika fbclid, kako bi događaj na sajtu mogao da se pripiše oglasu',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Čuva korisnički identifikator iz registracionog obrasca postavljenog ispred video-snimka',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Čuva TikTokov identifikator klika za pripisivanje konverzija',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Čuva jedinstveni ID posetioca radi prepoznavanja',
    'Speichert die zugestimmten Kategorien'
        => 'Čuva kategorije za koje je dat pristanak',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Puni vidžet sa poslednje pogledanim proizvodima',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Upravlja time da li se identifikator MUID obnavlja; prema pružaocu kolačić treće strane',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Tehnički neophodno za rad i bezbednost sajta.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Nosi podatke o sesiji i naplati u prodavnici; pružalac ga vodi kao neophodan',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Nosi funkciju prigovora (opt-out)',
    'Transaktionssicherheit'
        => 'Bezbednost transakcija',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Nosi analizu rizika usluge reCAPTCHA.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Prenos događaja sa sajta TikToku',
    'Umfragen'
        => 'Ankete',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Onemogućava prenos podataka HubSpotu',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Potiskuje pozdravnu poruku četa nakon zatvaranja',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Razlikuje pregledače koji otvaraju Microsoftove stranice; uz pristanak i za oglašavanje',
    'Unterscheidet einzelne Nutzer.'
        => 'Razlikuje pojedinačne korisnike.',
    'Unterscheidung einzelner Nutzer'
        => 'Razlikovanje pojedinačnih korisnika',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Razlikovanje čoveka i bota kod obrazaca i prijava',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Povezuje više pregleda stranica u jedan snimak sesije',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Sprečava stalno prikazivanje banera u strogom režimu',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Raspodela signala pristanka Google tagovima',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Upravljanje odlukom o pristanku za tagove konfigurisane u kontejneru',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Upravljanje prigovorom na merenje',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Upravljanje prigovorom i pristankom za merenje',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Google ga svrstava u kategorije Analitika i Oglašavanje.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Google ga svrstava u kategorije Analiza, Oglašavanje i Bezbednost.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Google ga svrstava u kategorije Funkcionalnost, Oglašavanje i Bezbednost.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Google ga svrstava u kategorije Bezbednost i Funkcionalnost.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Google ga svrstava u kategorije Bezbednost i Oglašavanje.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Google ga svrstava u kategorije Bezbednost, Analiza, Funkcionalnost i Oglašavanje.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Google ga svrstava u kategorije Bezbednost, Funkcionalnost i Oglašavanje.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Google ga svrstava u kategorije Oglašavanje i Bezbednost.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Google ga svrstava u kategoriju Analiza; precizniju svrhu Google ne navodi.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Google ga svrstava u kategoriju Funkcionalnost.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Google ga svrstava u kategoriju Bezbednost.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Google ga svrstava u kategoriju Oglašavanje.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Microsoft ga navodi kao jedan od kolačića koji ne smeju da se postave bez pristanka; sopstveni opis svrhe Microsoft ne navodi',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Identifikator koji Vimeo kreira za merenje dosega',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Valuta korpe nakon završene naplate; neophodno',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Verovatnosno pripisivanje pregledača određenoj osobi',
    'Warenkorb einer Besucherin zuordnen'
        => 'Pripisivanje korpe posetiocu',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Prethodno popunjavanje veb-adrese iz obrasca za komentare',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Prepoznavanje gledaoca u svrhu oglašavanja',
    'Werbepersonalisierung'
        => 'Personalizacija oglašavanja',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Kao _pin_unauth, ali kao kolačić treće strane',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Prepoznavanje posetioca unutar postupka rezervacije',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Prepoznavanje posetioca između pregleda stranica i kartica',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Prepoznavanje i identifikovanje posetilaca sajta',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Prepoznavanje posetilaca kroz više poseta',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Prepoznavanje posetilaca povezanih sajtova radi retargetinga',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Prepoznavanje posetilaca koji se vraćaju i pripisivanje ranijih razgovora',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Prepoznavanje posetioca i čuvanje njegovih obeležja',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Prepoznavanje pregledača putem Criteovog identifikatora',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Prepoznavanje korisnika; samo uz pristanak, podrazumevano blokirano',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Prepoznavanje pregledača pri kasnijim posetama nakon pristanka',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Prepoznavanje posetilaca i pripisivanje sesijama',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'Prepoznavanje članova LinkedIna izvan LinkedIna radi oglašavanja',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Prepoznavanje korisnika nakon pristanka',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Prepoznavanje posetilaca koji se vraćaju putem ID-a posetioca',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Postavlja se kada je aktiviran cilj kampanje (nalozi od 14. 6. 2026.)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Postavlja se kada je aktiviran cilj kampanje (nalozi pre 14. 6. 2026.)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Postavlja se kada osoba poseti sajt sa ugrađenim Pinterest tagom',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Postavlja se kada pripisivanje uspe bez postojećih kolačića, na primer putem funkcije Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Postavlja ga JavaScript tag na osnovu podataka koje Pinterest prosleđuje uz oglašavani saobraćaj',
    'Zaehlt und begrenzt Sitzungen'
        => 'Broji i ograničava sesije',
    'Zahlungsabwicklung'
        => 'Obrada plaćanja',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Pokazuje da li sesija još traje ili je nova',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Interfejsu pokazuje da je korisnik prijavljen i kao ko',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Nasumični identifikator pregledača koji događaje piksela na sajtu pripisuje jednom pregledaču',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Prikaz poslednje pogledanih proizvoda u pripadajućem vidžetu',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Pripisivanje ponašanja na sajtu određenom profilu',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Pripisivanje izvora posete (Referrer, atribucija)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Pripisivanje posetioca kontaktu u Brevo nalogu putem imejl adrese',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Pripisivanje transakcija kao što su lidovi i prodaje određenom izdavaču',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Pripisivanje radnji na sajtu prethodno prikazanim oglasima',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Spajanje više pregleda stranica u jednu sesiju',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Dodatni podaci uz zabeležene događaje toka posete',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Dodeljivanje i zadržavanje varijante kroz više poseta',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Međumemorija za događaje na osnovu CSS selektora',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Međumemorija za podatke Messengera i posetioca u memoriji pregledača',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Međumemorija za unose Tag Managera',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Međumemorija za merenje dubine skrolovanja',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Međumemorija za promenljive Tag Managera',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Međumemorija za podešavanja vidžeta, radi izbegavanja ponovljenih zahteva serveru',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Međuskladištenje podataka Messengera i posetioca u pregledaču',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Broji sesije kreirane za jednog posetioca (nalozi od 14. 6. 2026.)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Broji koliko je puta pregledač tokom merenja zatvoren i ponovo otvoren (nalozi pre 14. 6. 2026.)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Brojanje pregleda stranica i poseta',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'automatizovane analize ponašanja korisnika',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'gruba geografska lokacija na nivou države, regiona i grada',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'opciono snimanje sesije (Session Replay), podrazumevano sa maskiranim tekstovima, slikama i unosima',
    'optional Heatmaps und A/B-Tests'
        => 'opciono heatmaps i A/B testovi',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Prosleđuje izvor upućivanja kod Split-URL testova (nalozi od 14. 6. 2026.)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Prosleđuje izvor upućivanja kod Split-URL testova (nalozi pre 14. 6. 2026.)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Pripisivanje transakcija kao što su lidovi i prodaje određenom izdavaču, Merenje uspešnosti oglasnog materijala i obračun provizije',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Beleženje posetilaca i pregleda stranica na sajtu za marketinšku automatizaciju, Pripisivanje posetioca kontaktu u Brevo nalogu putem imejl adrese, Beleženje sopstvenih događaja koje definiše operater',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Prikaz kalendara rezervacija i zakazivanje termina na sajtu, Prepoznavanje posetioca unutar postupka rezervacije, Obrada plaćanja kada je termin naplativ',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Prepoznavanje i odbijanje automatizovanih pristupa obrascima, Izdavanje tokena koji proverava server sajta, U režimu Pre-Clearance: odobrenje za dalje WAF provere iste zone',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Merenje pregleda stranica i poseta, Merenje vremena učitavanja i osnovnih pokazatelja stranice (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Isporuka personalizovanih oglasa, Merenje dejstva oglašavanja, Prepoznavanje pregledača putem Criteovog identifikatora',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Merenje ponašanja pri korišćenju sajta, Formiranje pseudonimnih profila korišćenja nakon pristanka, Prepoznavanje pregledača pri kasnijim posetama nakon pristanka',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Merenje pregleda stranica i ponašanja pri korišćenju, Merenje dubine skrolovanja i događaja klika, Prepoznavanje korisnika nakon pristanka, Upravljanje prigovorom na merenje',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Razlikovanje čoveka i bota kod obrazaca i prijava, Zaštita od automatizovanih zahteva (spam, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Merenje konverzija, Remarketing i formiranje ciljnih grupa, Ograničavanje učestalosti prikazivanja, Otkrivanje prevare klikovima',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Isporuka oglasa, Ograničavanje učestalosti prikazivanja, Otkrivanje prevara i zloupotrebe, Merenje prikaza i klikova',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Razlikovanje pojedinačnih korisnika, Održavanje stanja sesije, Merenje dosega i korišćenja',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Prikaz interaktivne mape, Merenje dostupnosti usluge koje sprovodi Google',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Analiza rizika radi razlikovanja čoveka i bota, Zaštita obrazaca od automatizovane zloupotrebe',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Isporuka i upravljanje tagovima na sajtu, Raspodela signala pristanka Google tagovima',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Razlikovanje čoveka i bota kod obrazaca i prijava, Raspodela opterećenja i usmeravanje zahteva za proveru, Omogućavanje pristupačnosti',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Heatmaps, Snimanje sesije, Ankete',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Prepoznavanje posetilaca kroz više poseta, Merenje sesija i pripisivanje izvora posete, Uklanjanje duplikata kontakata, Rad čet vidžeta, Dosledno prikazivanje varijanti A/B testa',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Čet uživo i sanduče podrške na sajtu, Prepoznavanje posetilaca koji se vraćaju i pripisivanje ranijih razgovora, Prepoznavanje uređaja radi zaštite od zloupotrebe, Međuskladištenje podataka Messengera i posetioca u pregledaču',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Prikaz obaveštenja o finansiranju i plaćanju na rate na stranicama proizvoda i korpe (On-site Messaging), Isporuka sadržaja obaveštenja u pripremljena rezervisana mesta u izvornom kodu stranice putem Ad-Servera',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Prepoznavanje i identifikovanje posetilaca sajta, Pripisivanje ponašanja na sajtu određenom profilu, Upravljanje prikazivanjem obrazaca za prijavu na sajtu',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Praćenje konverzija za LinkedIn oglasne kampanje, Retargeting posetilaca sajta, Analiza publike sajta (demografija sajta)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Prepoznavanje posetilaca povezanih sajtova radi retargetinga, Upravljanje iskačućim obrascima kako se ne bi ponovo pojavljivali, Merenje otvaranja i klikova u imejl kampanjama, Uključivanje oglasnih piksela Googlea i Facebooka na povezanom sajtu',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Prikaz interaktivnih mapa na sajtu, Naknadno učitavanje pločica mape, fontova i stilova od pružaoca, Obračun i zaštita poziva mape',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Merenje pregleda stranica, poseta i sesija, Prepoznavanje posetilaca koji se vraćaju putem ID-a posetioca, Pripisivanje izvora posete (Referrer, atribucija), opciono heatmaps i A/B testovi',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Merenje pregleda stranica, poseta i sesija na sopstvenom serveru, Prepoznavanje posetilaca koji se vraćaju putem ID-a posetioca, Pripisivanje izvora posete (Referrer, atribucija), opciono heatmaps i A/B testovi',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Isporuka i pokretanje tagova na sajtu, Upravljanje odlukom o pristanku za tagove konfigurisane u kontejneru',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Merenje oglasnih kampanja i konverzija na sajtu, Formiranje ciljnih grupa i retargeting',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Praćenje konverzija za kampanje Microsoft Advertising, Izgradnja remarketing lista, Merenje pregleda stranica i prilagođenih događaja',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Snimanje i reprodukcija sesija, Heatmaps klikova i ponašanja pri skrolovanju, Spajanje više pregleda stranica u jednu sesiju, automatizovane analize ponašanja korisnika',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Obrada plaćanja koje je pokrenuo posetilac, Ugradnja polja za karticu u sopstveni checkout, kako podaci o kartici ne bi prolazili kroz prodavnicu, Sprečavanje prevara i zakonske obaveze pružaoca platnih usluga',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Snimanje pokreta miša, Reprodukcija sesije, Analiza ponašanja pri korišćenju',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Isporuka pločica mape ugrađenim mapama, Rad i zaštita od zloupotrebe usluga mapa',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Obrada plaćanja, Sprečavanje prevara',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Praćenje konverzija za Pinterest oglasne kampanje, Formiranje ciljnih grupa i retargeting, Pripisivanje radnji na sajtu prethodno prikazanim oglasima',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Merenje pregleda stranica i događaja, Prepoznavanje posetilaca i pripisivanje sesijama, Analiza izvora i kampanja, Analiza uređaja, pregledača i procenjene lokacije, Analiza e-trgovine i ciljeva',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Brojanje pregleda stranica i poseta, Analiza izvora upućivanja, Analiza pregledača, operativnog sistema i tipa uređaja, gruba geografska lokacija na nivou države, regiona i grada',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Beleženje i prenos grešaka aplikacije iz pregledača, opciono snimanje sesije (Session Replay), podrazumevano sa maskiranim tekstovima, slikama i unosima',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Rad korpe i postupka plaćanja u prodavnici, Pripisivanje sesije i jezika odnosno države, Merenje dosega za operatera prodavnice, Marketinški podaci za interfejse za kupovinu',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Ugradnja i reprodukcija pesama, albuma, plejlista i epizoda podkasta, Prikupljanje informacija o ponašanju ovih korisnika pri pregledanju od strane Spotifyja i trećih strana, Omogućavanje da treće strane postavljaju kolačiće u pregledaču tih korisnika',
    'Besucherzählung, Reichweitenmessung'
        => 'Brojanje posetilaca, Merenje dosega',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Otkrivanje prevara i procena rizika pokušaja plaćanja, Obezbeđivanje polja za plaćanje iz Stripe Elements, Prepoznavanje botova i automatizovanog ponašanja u postupku poručivanja',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Merenje i poboljšanje uspešnosti oglasnih kampanja, Personalizacija oglašavanja na TikToku, Prenos događaja sa sajta TikToku',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Ugradnja obrazaca i anketa u sajt, Prikupljanje i prosleđivanje odgovora operateru obrasca',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Ugradnja i reprodukcija video-snimaka na sajtu, Pamćenje podešavanja plejera gledaoca (jačina zvuka, kvalitet, titlovi), Merenje dosega ugrađenih video-snimaka koje sprovodi Vimeo, Zaštita plejera od botova i zloupotrebe',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'A/B testovi i split URL testovi na sajtu, Dodeljivanje i zadržavanje varijante kroz više poseta, Merenje ciljeva i konverzija kampanje, Merenje posetilaca i sesija za potrebe analize, Upravljanje prigovorom i pristankom za merenje',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Pripisivanje korpe posetiocu, Prepoznavanje da li se sadržaj korpe promenio, Prikaz poslednje pogledanih proizvoda u pripadajućem vidžetu, Pamćenje skrivanja obaveštenja prodavnice',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Prijava i prepoznavanje sesije u administratorskom delu, Zadržavanje podataka iz komentara za naredne komentare, Pamćenje podešavanja prikaza administratorskog dela, Provera da li WordPress može da postavlja kolačiće, Čuvanje izabranog jezika',
    'Conversion-Messung, Retargeting'
        => 'Merenje konverzija, Retargeting',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Reprodukcija ugrađenih video-snimaka, Bezbednost, Prepoznavanje gledaoca u svrhu oglašavanja',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Čet uživo i kanal za poruke za podršku na sajtu, Prepoznavanje posetioca između pregleda stranica i kartica, Pamćenje stanja i podešavanja vidžeta, Merenje sesija i događaja na stranicama sa vidžetom',
];
