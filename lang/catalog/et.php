<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Estnisch.
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
        => 'A/B-testid ja Split-URL-testid veebisaidil',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Kaardipäringute arveldamine ja kaitsmine',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Sisselogimise lõpuleviimine teenusega Shop; vajalik',
    'Abspielen eingebetteter Videos'
        => 'Manustatud videote esitamine',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Külastaja algatatud makse töötlemine',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Maksete töötlemine, kui broneeritav aeg on tasuline',
    'Analyse des Nutzungsverhaltens'
        => 'Kasutuskäitumise analüüs',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Ostuliideste analüüsiandmed; analüüs',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Poe analüüsiandmed; pakkuja liigitab analüüsiks',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Sisselogimisandmed halduspiirkonna jaoks aadressil /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Sisselogimine teenusesse Shop Pay; vajalik',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Sisselogimine ja seansi tuvastamine halduspiirkonnas',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Anonüümne teenusega seotud statistika ja muud tehnilised eesmärgid, muu hulgas ligipääsetavuse tugi',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Halduspiirkonna vaateseaded konto kaupa',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Halduspiirkonna vaateseadete meeldejätmine',
    'Anzeige von Bewertungen'
        => 'Arvustuste kuvamine',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Broneerimiskalendri kuvamine ja aegade kokkuleppimine veebisaidil',
    'Anzeigen einer interaktiven Karte'
        => 'Interaktiivse kaardi kuvamine',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'Väärtusele 1 seatuna takistab UET-sündmuste saatmist Microsoftile',
    'Aufbau von Remarketing-Listen'
        => 'Remarketingi loendite koostamine',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Seansside salvestamine ja taasesitamine',
    'Aufzeichnung von Mausbewegungen'
        => 'Hiireliigutuste salvestamine',
    'Ausblenden des Shop-Hinweises merken'
        => 'Poe teate peitmise meeldejätmine',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Siltide edastamine ja käivitamine veebisaidil',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Siltide edastamine ja haldamine veebisaidil',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Kaardipaanide edastamine manustatud kaartidele',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Teatesisu edastamine lehe lähtekoodis ettevalmistatud kohatäitjatesse reklaamiserveri kaudu',
    'Auslieferung personalisierter Werbung'
        => 'Isikupärastatud reklaami edastamine',
    'Auslieferung von Anzeigen'
        => 'Reklaamide edastamine',
    'Auslieferung von Bibliotheken und Assets'
        => 'Teekide ja ressursside edastamine',
    'Auslieferung von Schriftarten'
        => 'Kirjatüüpide edastamine',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Sellise tokeni väljastamine, mida veebisaidi server kontrollib',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Registreerimisvormide juhtimine veebisaidil',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Hüpikvormide juhtimine, et need korduvalt ei ilmuks',
    'Auswahl des Rechenzentrums'
        => 'Andmekeskuse valik',
    'Auswertung der Verweisquellen'
        => 'Viitavate allikate analüüs',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Veebisaidi sihtrühma analüüs (veebisaidi demograafia)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Brauseri, operatsioonisüsteemi ja seadmetüübi analüüs',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Seadme, brauseri ja hinnangulise asukoha analüüs',
    'Auswertung von Herkunft und Kampagnen'
        => 'Päritolu ja kampaaniate analüüs',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Autendib lõppkasutaja päringud',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Kuvamissageduse piiramine',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Tõendab läbitud kontrolli, et tsooni edasised väljakutsed ära jääksid',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Stripe Elementsi maksesisestusväljade pakkumine',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Ligipääsetavusfunktsiooni pakkumine',
    'Besucherzählung'
        => 'Külastajate loendamine',
    'Betrieb des Chat-Widgets'
        => 'Vestlusvidina toimimine',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Kaarditeenuste toimimine ja väärkasutuse tõrje',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Poe ostukorvi ja maksmisprotsessi toimimine',
    'Betrugs- und Missbrauchserkennung'
        => 'Pettuse ja väärkasutuse tuvastamine',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Pettuse tuvastamine maksekatse ajal',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Pettuse tuvastamine ja maksekatsete riskihinnang',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Pettuste ennetamine ja seadusest tulenevad kohustused makseteenuse pakkujana',
    'Betrugsprävention'
        => 'Pettuste ennetamine',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Pettuste vältimine ja maksekatse riskihinnang',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Pseudonüümsete kasutusprofiilide koostamine pärast nõusolekut',
    'Bildung von Zielgruppen und Retargeting'
        => 'Sihtrühmade moodustamine ja taassihtimine',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Seob seansi sama AWS-i eksemplariga',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Robotite ja väärkasutuse tõrje pleieri jaoks',
    'Bot-Abwehr fuer den Player'
        => 'Robotitõrje pleieri jaoks',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Robotikaitse HubSpoti ressursside edastamisel',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Brauseri tunnus, mille abil LinkedIn eristab seadmeid ja tuvastab väärkasutust',
    'Cloudflare-Bot-Abwehr'
        => 'Cloudflare\'i robotitõrje',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Cloudflare\'i robotituvastus liikluse filtreerimiseks',
    'Cloudflare-Ratenbegrenzung'
        => 'Cloudflare\'i päringusageduse piiramine',
    'Conversion-Messung'
        => 'Konversioonide mõõtmine',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Konversioonide jälgimine LinkedIni reklaamikampaaniate jaoks',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Konversioonide jälgimine Microsoft Advertisingi kampaaniate jaoks',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Konversioonide jälgimine Pinteresti reklaamikampaaniate jaoks',
    'Darstellung interaktiver Karten auf der Website'
        => 'Interaktiivsete kaartide kuvamine veebisaidil',
    'Deduplizieren von Kontakten'
        => 'Kontaktide dubleerimise vältimine',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Kasutatakse reklaami esitamiseks ja mõõtmiseks.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'Domeeniülene külastaja ID; pakkuja andmetel kolmanda osapoole küpsis, kasutatakse ainult siis, kui kolmanda osapoole küpsised on konfiguratsioonifailis sisse lülitatud',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Kolmanda osapoole tunnus külastajate äratundmiseks',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Kolmanda osapoole tunnus, mis edastatakse Klaviyole',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Kolmanda osapoole reklaamitunnus kampaaniate mõõtmiseks ja isikupärastamiseks TikTokis',
    'E-Commerce- und Zielauswertung'
        => 'E-kaubanduse ja eesmärkide analüüs',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'E-posti aadressi eeltäitmine kommentaarivormil',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Lugude, albumite, esitusloendite ja taskuhäälingu osade manustamine ja esitamine',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Videote manustamine ja esitamine veebisaidil',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Vormide ja küsitluste manustamine veebisaidile',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Kaardiväljade manustamine oma kassasse, et kaardiandmed ei liiguks poe kaudu',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Väliselt hallatava küpsiseteatise manustamine',
    'Einbettung von Audioinhalten'
        => 'Helisisu manustamine',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Google\'i ja Facebooki reklaamipikslite lisamine ühendatud veebisaidile',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Finantseerimis- ja järelmaksuteadete kuvamine toote- ja ostukorvilehtedel (On-site Messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Kordumatu tunnus domeeniülesel mõõtmisel (kontod alates 14.06.2026)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Kordumatu tunnus domeeniülesel mõõtmisel (kontod enne 14.06.2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Ühekordne väärtus CSRF-i vastu loobumisvormil',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Sisaldab kasutajatunnust ja loomise aega; allika andmetel seatakse Pinteresti rakendusesiseses brauseris, mitte veebisaidi domeenil',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Vastuste kogumine ja edastamine vormi haldajale',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Kogub andmeid veebisaidi kasutuse kohta analüüsi eesmärgil.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Käitaja määratud kohandatud sündmuste kogumine',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Rakendusvigade kogumine ja edastamine brauserist',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Külastajate ja lehevaatamiste kogumine veebisaidil turundusautomaatika jaoks',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Reklaamivahendi tulemuslikkuse mõõtmine ja vahendustasu arveldamine',
    'Erhalt des Sitzungszustands'
        => 'Seansi oleku säilitamine',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Seadme tuvastamine väärkasutuse tõrjeks',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Automaatsete päringute tuvastamine ja tõrjumine vormidel',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Robotite ja automaatse käitumise tuvastamine tellimisprotsessis',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Tuvastamine, kas ostukorvi sisu on muutunud',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Tuvastab muudatused ostukorvi sisus',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Tuvastab selle veebisaidi külastajad, kuhu on paigaldatud Intercomi kood',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Tunneb brausereid Microsofti veebisaitidel ära; pakkuja andmetel kasutatakse ka reklaamiks, kolmanda osapoole küpsis',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Tunneb ära inimesed, kes kirjutavad vestlustööriista kaudu',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Tuvastab seadme, millest vestlus algab',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Tuvastab väärkasutuse tõrjeks üksiku seadme, mis Messengeriga suhtleb',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Tuvastab lõppkasutaja, kes vestluse alustab',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Tuvastab domeeni või alamdomeeni, kuhu vestlusvidin on paigaldatud',
    'Erkennt wiederkehrende Besucher'
        => 'Tunneb ära korduvkülastajad',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Tuvastab, kas brauser on taaskäivitatud',
    'Erkennung von Klickbetrug'
        => 'Klikipettuse tuvastamine',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Tuvastab kordumatud pöördumised veebisaidile (kontod alates 14.06.2026)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Tuvastab kordumatud pöördumised veebisaidile (kontod enne 14.06.2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Võimaldavad kolmandatel isikutel seada küpsiseid nende kasutajate brauseris',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Võimaldab ligipääsetavusfunktsiooni kasutamist',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Võimaldab veebisaidi lisafunktsioone.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Esimese osapoole tunnus, mis tunneb külastajad ära ja seostab sündmused veebisaidiga',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Esimese osapoole külastajatunnus konversioonide jälgimiseks ja remarketingiks',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Esimese osapoole seansitunnus sündmuste seostamiseks',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Esimese osapoole seansitunnus piksli kohta kampaaniate mõõtmiseks',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Esimese osapoole seansitunnus kampaaniate mõõtmiseks',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Esimese osapoole reklaamitunnus kampaaniate mõõtmiseks ja isikupärastamiseks TikTokis',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Esimese osapoole küpsis, mis rühmitab nende külastajate toimingud, keda Pinterest ei suuda seostada',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Esimese osapoole küpsis, mis salvestab Automatic Enhanced Matchi kaudu kogutud räsitud kliendiandmed',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Loob iga külastaja jaoks kordumatu tunnuse (kontod alates 14.06.2026)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Loob iga külastaja jaoks kordumatu tunnuse (kontod enne 14.06.2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Seadmetunnus vidinaga lehtedel toimuvate sündmuste analüüsimiseks',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Seatakse HubSpoti majutatud lehel sisselogimisel',
    'Gewaehlte Sprache speichern'
        => 'Valitud keele salvestamine',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Ühtlustab MUID-tunnuse Microsofti domeenide üleselt; pakkuja andmetel kolmanda osapoole küpsis',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Hoiab sõnumid mitme vahekaardi üleselt sünkroonis',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Hoiab parameetri pk_campaign väärtust',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Hoiab parameetri utm_campaign väärtust',
    'Haelt den Widerspruch gegen die Messung'
        => 'Hoiab mõõtmisele esitatud vastuväidet',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Hoiab _uetsid aegumisaega',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Hoiab _uetvid aegumisaega',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Hoiab liiklusallika tüüpi Tag Manageri jaoks',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Jäädvustab külastaja identiteedi, muu hulgas kontaktide dubleerimise vältimiseks',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Jäädvustab külastaja küpsisevaliku',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Hoiab vidina kuvamise lehe vahetumisel ühetaolisena',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Jäädvustab sisenemislehe; analüüs',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Hoiab nõusolekut küpsistega mõõtmiseks',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Hoiab kasutaja otsust kategooriate ja pakkujate kohta',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Hoiab sisse logitud kasutajate seanssi ja ligipääsu varasematele vestlustele',
    'Haelt die verweisende Adresse'
        => 'Hoiab viitavat aadressi',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Jäädvustab viitava allika; analüüs',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Hoiab seansi omamuutujaid (pakkuja on märkinud aegunuks)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Jäädvustab, kas etracker tohib küpsiseid seada; seatakse data-block-cookies korral API-kutsega',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Jäädvustab, millised funktsioonilülitid video omanik on sisse lülitanud',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Põhiküpsis külastajate äratundmiseks',
    'Heatmaps'
        => 'Soojuskaardid',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Klikkide ja kerimiskäitumise soojuskaardid',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Hoiab soojuskaardi seansiandmeid külastuse ajaks',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Hoiab teavet käimasoleva seansi kohta (kontod alates 14.06.2026)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Hoiab teavet käimasoleva seansi kohta (kontod enne 14.06.2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Hoiab kohandatud muutujaid külastuse ajaks',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Hoiab püsivaid andmeid külastaja tasandil (kontod alates 14.06.2026)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Hoiab püsivaid andmeid külastaja tasandil Insightsi analüüsi jaoks (kontod enne 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Jäädvustab külastaja nõusoleku oleku (kontod alates 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Jäädvustab külastaja nõusoleku oleku (kontod enne 14.06.2026)',
    'Hält den Sitzungszustand.'
        => 'Hoiab seansi olekut.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Hoiab Clarity kasutajatunnust ja selle veebisaidi seadeid',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Hoiab A/B-testide variandimääramist',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Jäädvustab ajutiselt valitud kombinatsiooni (kontod alates 14.06.2026)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Jäädvustab ajutiselt valitud kombinatsiooni (kontod enne 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Jäädvustab valitud variandi enne ümbersuunamist (kontod alates 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Jäädvustab valitud variandi enne ümbersuunamist (kontod enne 14.06.2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Jäädvustab, millise viitava allika kaudu külastus toimus',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Pre-Clearance režiimis: luba sama tsooni edasisteks WAF-kontrollideks',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Kaudne liikmetunnus konversioonide jälgimiseks, taassihtimiseks ja analüüsiks',
    'Inhalt des Warenkorbs; notwendig'
        => 'Ostukorvi sisu; vajalik',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Ostjaga seotud analüüsiandmed poes; statistika',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Kampaaniapõhine kordumatu tunnus (kontod alates 14.06.2026)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Tunnus, mis märgib esimest kokkupuudet Clarityga kõigil Clarity veebisaitidel; pakkuja andmetel kolmanda osapoole küpsis',
    'Kennzeichnet die laufende Sitzung'
        => 'Tähistab käimasolevat seanssi',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Kommentaariandmete säilitamine järgmiste kommentaaride jaoks',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'A/B-testi variantide järjepidev kuvamine',
    'Lastverteilung und Routing'
        => 'Koormuse jaotamine ja marsruutimine',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Challenge-päringute koormusjaotus ja marsruutimine',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Salvestab külastaja kontoseaded kohalikult',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Kuvab A/B-testi lehe puhul alati sama variandi',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Reaalajavestlus ja sõnumikanal veebisaidi klienditoe jaoks',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Reaalajavestlus ja klienditoe postkast veebisaidil',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Ostuliideste turundusandmed; turundus',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Ostuliideste turundusandmed',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Vaataja pleieriseadete meeldejätmine (helitugevus, kvaliteet, subtiitrid)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Vidina oleku ja seadete meeldejätmine',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Jätab meelde Global Privacy Control -bänneri sulgemise',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Jätab meelde teateriba sulgemise',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Jätab meelde küpsisega lms_analytics tehtud sünkroonimise aja',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Jätab meelde viimase ID-sünkroonimise aja, et sünkroonimist ei korrataks',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Jätab meelde määratud variandi (kontod alates 14.06.2026)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Jätab meelde määratud variandi, et see jääks korduval külastusel samaks (kontod enne 14.06.2026)',
    'Merkt einen Rabattcode; notwendig'
        => 'Jätab meelde sooduskoodi; vajalik',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Jätab meelde mõõtmisele esitatud vastuväite (kontod alates 14.06.2026)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Jätab meelde veebisaitide ülese vastuväite (kontod enne 14.06.2026)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Jätab meelde pleieriseaded, nagu helitugevus, kvaliteet ja subtiitrid',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Jätab meelde heliteavituste seade',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Jätab meelde antud nõusoleku mõõtmiseks',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Jätab meelde mõõtmisele esitatud vastuväite',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Jätab meelde ära klõpsatud proaktiivsed sõnumid',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Jätab meelde, et külastaja sulges avamisnupu sildi',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Jätab meelde, kas vidin on avatud või suletud',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Jätab meelde, et külastaja ei tohi osaleda üheski kampaanias (kontod enne 14.06.2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Jätab meelde, et külastaja on kampaaniast välja arvatud (kontod alates 14.06.2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Jätab meelde, et külastaja on kampaaniast välja arvatud (kontod enne 14.06.2026)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Jätab meelde, et nõusolekuteade suleti',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Jätab meelde, et poeteade suleti',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Jätab meelde, et küpsiseküsimust ei tohi uuesti esitada',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Jätab meelde, et silt on juba käivitatud',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Jätab meelde, kas selle külastaja puhul mõõdetakse kerimissügavust',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Jätab meelde, kas vestlusaken on avatud',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Jätab meelde, kas MUID-tunnus antakse edasi reklaamitunnusele; pakkuja andmetel alati 0, kolmanda osapoole küpsis',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Avamiste ja klõpsude mõõtmine e-kirjakampaaniates',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Seansside ja sündmuste mõõtmine vidinaga lehtedel',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Seansside mõõtmine ja külastuse allika määramine',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Google\'i tehtav teenuse kättesaadavuse mõõtmine',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Lehe laadimisaja ja põhinäitajate mõõtmine (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Kerimissügavuse ja klõpsusündmuste mõõtmine',
    'Messung der Werbewirkung'
        => 'Reklaami mõju mõõtmine',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Kasutuskäitumise mõõtmine veebisaidil',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Reklaamide mõõtmine ja isikupärastamine TikTok Pangle reklaamivõrgustikus',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Reklaamikampaaniate tulemuslikkuse mõõtmine ja parandamine',
    'Messung von Auslieferungen und Klicks'
        => 'Näitamiste ja klõpsude mõõtmine',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Külastajate ja seansside mõõtmine analüüsi jaoks',
    'Messung von Conversions'
        => 'Konversioonide mõõtmine',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Lehevaatamiste ja külastuste mõõtmine',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Lehevaatamiste ja sündmuste mõõtmine',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Lehevaatamiste ja kasutuskäitumise mõõtmine',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Lehevaatamiste ja kohandatud sündmuste mõõtmine',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Lehevaatamiste, külastuste ja seansside mõõtmine',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Lehevaatamiste, külastuste ja seansside mõõtmine oma serveris',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Reklaamikampaaniate ja konversioonide mõõtmine veebisaidil',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Kampaania eesmärkide ja konversioonide mõõtmine',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Kaardipaanide, fontide ja stiilide järellaadimine pakkuja juurest',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Nime eeltäitmine kommentaarivormis',
    'Nutzer-ID'
        => 'Kasutaja ID',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Seob ostukorvi õige riigiga; vajalik',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Seob ostukorvi andmebaasis õige kliendiga',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Seostab külastuse toimingud ühe seansiga',
    'Personalisierung der Werbung auf TikTok'
        => 'Reklaami isikupärastamine TikTokis',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Kontrollimine, kas WordPress saab küpsiseid seada',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Kontrollib brauseri küpsisetuge; vajalik',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Kontrollib, kas WordPress saab küpsiseid seada',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Poe parooli kontrollväärtus; vajalik',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Pakkuja kontrollküpsis (kontod enne 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Kontrollib, kas brauser võtab küpsiseid vastu (kontod alates 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Kontrollib, kas brauser võtab küpsiseid vastu (kontod enne 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Kontrollib, kas brauser võtab küpsiseid vastu (pakkuja andmetel ainult Internet Exploreris)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Päringute sageduse piiramine HubSpoti CDN-pakkuja juures',
    'Reichweiten- und Nutzungsmessung'
        => 'Leviulatuse ja kasutuse mõõtmine',
    'Reichweitenmessung'
        => 'Leviulatuse mõõtmine',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Vimeo tehtav manustatud videote leviulatuse mõõtmine',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Leviulatuse mõõtmine poe haldajale',
    'Remarketing und Zielgruppenbildung'
        => 'Taasturundus ja sihtrühmade moodustamine',
    'Retargeting'
        => 'Taassihtimine',
    'Retargeting von Website-Besuchern'
        => 'Veebisaidi külastajate taassihtimine',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Riskianalüüs inimese ja roboti eristamiseks',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Koondküpsis, pakkuja andmetel luuakse ainult Safari brauseris (kontod alates 14.06.2026)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Koondküpsis, pakkuja andmetel luuakse ainult Safari brauseris (kontod enne 14.06.2026)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Teabe kogumine nende kasutajate sirvimiskäitumise kohta Spotify ja kolmandate isikute poolt',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Lüliti, mille veebisaidi haldaja ise seab, et Klaviyo jälgimine peatada',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Liikmete sisselogimise kaitse võltsimise vastu',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Vormide kaitse automatiseeritud väärkasutuse eest',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Kaitse automatiseeritud päringute eest (rämpspost, credential stuffing)',
    'Sicherheit'
        => 'Turvalisus',
    'Sicherheitsfunktionen'
        => 'Turvafunktsioonid',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Turvafunktsioonid, kui valikuline funktsioon User Journeys on aktiivne',
    'Sitzung'
        => 'Seanss',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Seansi ning keele või riigi määramine',
    'Sitzungsaufzeichnung'
        => 'Seansi salvestamine',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Seansitunnus sündmuste analüüsimiseks vidinaga lehtedel',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Seansitunnus poe statistika jaoks; statistika',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Answer Bot -teenuse seansivõti',
    'Sitzungswiedergabe'
        => 'Seansi taasesitus',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Salvestab pärast sisselogimist autentimistokeni',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Salvestab kodeeritud parooli parooliga kaitstud videote jaoks',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Salvestab valitud keele võtme',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Salvestab külastaja privaatsuseelistuse; vajalik',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Salvestab külastaja nõusolekuotsuse',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Salvestab külastaja seadmetunnuse autentimiseks vestlusvidinas',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Salvestab veebiseminarile registreerunud kasutaja tunnuse',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Salvestab klõpsutunnuse fbclid, et veebisaidi sündmust saaks reklaamiga siduda',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Salvestab kasutajatunnuse video ette lülitatud registreerimisvormist',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Salvestab TikToki klõpsutunnuse konversioonide sidumiseks',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Salvestab külastaja kordumatu ID äratundmiseks',
    'Speichert die zugestimmten Kategorien'
        => 'Salvestab kategooriad, millega on nõustutud',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Varustab andmetega viimati vaadatud toodete vidina',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Määrab, kas MUID-tunnust uuendatakse; pakkuja andmetel kolmanda osapoole küpsis',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Tehniliselt vajalik veebisaidi toimimiseks ja turvalisuseks.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Kannab poe seansi- ja kassaandmeid; pakkuja loeb selle vajalikuks',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Kannab vastuväite funktsiooni (opt-out)',
    'Transaktionssicherheit'
        => 'Tehingute turvalisus',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Kannab reCAPTCHA riskianalüüsi.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Veebisaidi sündmuste edastamine TikTokile',
    'Umfragen'
        => 'Küsitlused',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Takistab andmete edastamist HubSpotile',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Peidab vestluse tervitussõnumi pärast selle sulgemist',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Eristab brausereid, mis avavad Microsofti lehti; nõusolekul ka reklaami jaoks',
    'Unterscheidet einzelne Nutzer.'
        => 'Eristab üksikuid kasutajaid.',
    'Unterscheidung einzelner Nutzer'
        => 'Üksikute kasutajate eristamine',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Inimese ja roboti eristamine vormidel ja sisselogimisel',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Ühendab mitu lehevaatamist üheks seansisalvestuseks',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Väldib bänneri pidevat kuvamist ranges režiimis',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Nõusolekusignaalide edastamine Google\'i siltidele',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Konteineris seadistatud siltide nõusolekuotsuse haldamine',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Mõõtmisele esitatud vastuväite haldamine',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Mõõtmise vastuväite ja nõusoleku haldamine',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Google on liigitanud kategooriatesse Statistika ja Reklaam.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Google on liigitanud kategooriatesse analüüs, reklaam ja turvalisus.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Google on liigitanud kategooriatesse Funktsionaalsus, Reklaam ja Turvalisus.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Google on liigitanud kategooriatesse turvalisus ja funktsionaalsus.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Google on liigitanud kategooriatesse turvalisus ja reklaam.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Google on liigitanud kategooriatesse turvalisus, analüüs, funktsionaalsus ja reklaam.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Google on liigitanud kategooriatesse Turvalisus, Funktsionaalsus ja Reklaam.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Google on liigitanud kategooriatesse reklaam ja turvalisus.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Google on liigitanud kategooriasse analüüs; täpsemat eesmärki Google ei nimeta.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Google on liigitanud kategooriasse funktsionaalsus.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Google on liigitanud kategooriasse turvalisus.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Google on liigitanud kategooriasse reklaam.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Microsoft nimetab seda ühena küpsistest, mida ilma nõusolekuta seada ei tohi; eraldi eesmärgikirjeldust Microsoft ei esita',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Vimeo loodud tunnus leviulatuse mõõtmiseks',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Ostukorvi valuuta pärast kassa läbimist; vajalik',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Brauseri tõenäosuspõhine sidumine isikuga',
    'Warenkorb einer Besucherin zuordnen'
        => 'Ostukorvi sidumine külastajaga',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Veebisaidi aadressi eeltäitmine kommentaarivormis',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Vaataja tuvastamine reklaami eesmärgil',
    'Werbepersonalisierung'
        => 'Reklaami isikupärastamine',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Nagu _pin_unauth, kuid kolmanda osapoole küpsisena',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Külastaja äratundmine broneerimisprotsessi jooksul',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Külastaja äratundmine lehevaatamiste ja vahekaartide vahel',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Veebisaidi külastajate äratundmine ja tuvastamine',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Külastajate äratundmine mitme külastuse vältel',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Seotud veebisaitide külastajate äratundmine taassihtimiseks',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Korduvkülastajate äratundmine ja varasemate vestluste sidumine',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Külastaja äratundmine ja tema tunnuste salvestamine',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Brauseri äratundmine Criteo tunnuse abil',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Kasutaja äratundmine; ainult nõusolekul, vaikimisi blokeeritud',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Brauseri äratundmine hilisematel külastustel pärast nõusoleku andmist',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Külastajate äratundmine ja seanssidega sidumine',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'LinkedIni liikmete äratundmine väljaspool LinkedIni reklaami jaoks',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Kasutajate äratundmine pärast nõusoleku andmist',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Korduvkülastajate äratundmine külastaja ID abil',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Seatakse, kui kampaania eesmärk on käivitunud (kontod alates 14.06.2026)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Seatakse, kui kampaania eesmärk on käivitunud (kontod enne 14.06.2026)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Seatakse, kui isik külastab veebisaiti, kuhu on lisatud Pinteresti silt',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Seatakse, kui sidumine õnnestub ilma olemasolevate küpsisteta, näiteks Enhanced Matchi kaudu',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Selle seab JavaScripti silt andmete põhjal, mille Pinterest edastab reklaamitud liiklusega',
    'Zaehlt und begrenzt Sitzungen'
        => 'Loeb ja piirab seansse',
    'Zahlungsabwicklung'
        => 'Maksete töötlemine',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Näitab, kas seanss veel kestab või on uus',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Näitab kasutajaliidesele, et ollakse sisse logitud ja kellena',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Juhuslik brausertunnus, mis seob veebisaidi piksli sündmused ühe brauseriga',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Viimati vaadatud toodete kuvamine vastavas vidinas',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Veebisaidil toimuva käitumise sidumine profiiliga',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Külastuse päritolu omistamine (viitaja, atributsioon)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Külastaja sidumine Brevo konto kontaktiga e-posti aadressi kaudu',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Tehingute, näiteks leadide ja müükide, sidumine avaldajaga',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Veebisaidil tehtud toimingute sidumine varem nähtud reklaamidega',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Mitme lehevaatamise koondamine üheks seansiks',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Lisaandmed külastuskäigus salvestatud sündmuste kohta',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Variandi määramine ja säilitamine mitme külastuse vältel',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Vahemälu CSS-selektorite alusel salvestatud sündmuste jaoks',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Vahemälu Messengeri ja külastaja andmete jaoks brauseri mälus',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Vahemälu Tag Manageri kirjete jaoks',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Vahemälu kerimissügavuse mõõtmise jaoks',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Vahemälu Tag Manageri muutujate jaoks',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Vahemälu vidina seadete jaoks, et vältida korduvaid serveripäringuid',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Messengeri ja külastaja andmete vahemällu salvestamine brauseris',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Loeb külastaja kohta loodud seansse (kontod alates 14.06.2026)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Loeb, mitu korda brauser mõõtmise ajal suleti ja uuesti avati (kontod enne 14.06.2026)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Lehevaatamiste ja külastuste loendamine',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'kasutajakäitumise automatiseeritud analüüsid',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'ligikaudne geograafiline määramine riigi, piirkonna ja linna täpsusega',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'valikuliselt seansi salvestamine (Session Replay), vaikimisi maskeeritud tekstide, piltide ja sisestustega',
    'optional Heatmaps und A/B-Tests'
        => 'valikuliselt soojuskaardid ja A/B-testid',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Annab edasi viitava allika split-URL-testide korral (kontod alates 14.06.2026)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Annab edasi viitava allika split-URL-testide korral (kontod enne 14.06.2026)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Tehingute, näiteks leadide ja müükide, sidumine avaldajaga, Reklaamivahendi tulemuslikkuse mõõtmine ja vahendustasu arveldamine',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Külastajate ja lehevaatamiste kogumine veebisaidil turundusautomaatika jaoks, Külastaja sidumine Brevo konto kontaktiga e-posti aadressi kaudu, Käitaja määratud kohandatud sündmuste kogumine',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Broneerimiskalendri kuvamine ja aegade kokkuleppimine veebisaidil, Külastaja äratundmine broneerimisprotsessi jooksul, Maksete töötlemine, kui broneeritav aeg on tasuline',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Automaatsete päringute tuvastamine ja tõrjumine vormidel, Sellise tokeni väljastamine, mida veebisaidi server kontrollib, Pre-Clearance režiimis: luba sama tsooni edasisteks WAF-kontrollideks',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Lehevaatamiste ja külastuste mõõtmine, Lehe laadimisaja ja põhinäitajate mõõtmine (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Isikupärastatud reklaami edastamine, Reklaami mõju mõõtmine, Brauseri äratundmine Criteo tunnuse abil',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Kasutuskäitumise mõõtmine veebisaidil, Pseudonüümsete kasutusprofiilide koostamine pärast nõusolekut, Brauseri äratundmine hilisematel külastustel pärast nõusoleku andmist',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Lehevaatamiste ja kasutuskäitumise mõõtmine, Kerimissügavuse ja klõpsusündmuste mõõtmine, Kasutajate äratundmine pärast nõusoleku andmist, Mõõtmisele esitatud vastuväite haldamine',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Inimese ja roboti eristamine vormidel ja sisselogimisel, Kaitse automatiseeritud päringute eest (rämpspost, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Konversioonide mõõtmine, Taasturundus ja sihtrühmade moodustamine, Kuvamissageduse piiramine, Klikipettuse tuvastamine',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Reklaamide edastamine, Kuvamissageduse piiramine, Pettuse ja väärkasutuse tuvastamine, Näitamiste ja klõpsude mõõtmine',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Üksikute kasutajate eristamine, Seansi oleku säilitamine, Leviulatuse ja kasutuse mõõtmine',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Interaktiivse kaardi kuvamine, Google\'i tehtav teenuse kättesaadavuse mõõtmine',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Riskianalüüs inimese ja roboti eristamiseks, Vormide kaitse automatiseeritud väärkasutuse eest',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Siltide edastamine ja haldamine veebisaidil, Nõusolekusignaalide edastamine Google\'i siltidele',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Inimese ja roboti eristamine vormidel ja sisselogimisel, Challenge-päringute koormusjaotus ja marsruutimine, Ligipääsetavusfunktsiooni pakkumine',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Soojuskaardid, Seansi salvestamine, Küsitlused',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Külastajate äratundmine mitme külastuse vältel, Seansside mõõtmine ja külastuse allika määramine, Kontaktide dubleerimise vältimine, Vestlusvidina toimimine, A/B-testi variantide järjepidev kuvamine',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Reaalajavestlus ja klienditoe postkast veebisaidil, Korduvkülastajate äratundmine ja varasemate vestluste sidumine, Seadme tuvastamine väärkasutuse tõrjeks, Messengeri ja külastaja andmete vahemällu salvestamine brauseris',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Finantseerimis- ja järelmaksuteadete kuvamine toote- ja ostukorvilehtedel (On-site Messaging), Teatesisu edastamine lehe lähtekoodis ettevalmistatud kohatäitjatesse reklaamiserveri kaudu',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Veebisaidi külastajate äratundmine ja tuvastamine, Veebisaidil toimuva käitumise sidumine profiiliga, Registreerimisvormide juhtimine veebisaidil',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Konversioonide jälgimine LinkedIni reklaamikampaaniate jaoks, Veebisaidi külastajate taassihtimine, Veebisaidi sihtrühma analüüs (veebisaidi demograafia)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Seotud veebisaitide külastajate äratundmine taassihtimiseks, Hüpikvormide juhtimine, et need korduvalt ei ilmuks, Avamiste ja klõpsude mõõtmine e-kirjakampaaniates, Google\'i ja Facebooki reklaamipikslite lisamine ühendatud veebisaidile',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Interaktiivsete kaartide kuvamine veebisaidil, Kaardipaanide, fontide ja stiilide järellaadimine pakkuja juurest, Kaardipäringute arveldamine ja kaitsmine',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Lehevaatamiste, külastuste ja seansside mõõtmine, Korduvkülastajate äratundmine külastaja ID abil, Külastuse päritolu omistamine (viitaja, atributsioon), valikuliselt soojuskaardid ja A/B-testid',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Lehevaatamiste, külastuste ja seansside mõõtmine oma serveris, Korduvkülastajate äratundmine külastaja ID abil, Külastuse päritolu omistamine (viitaja, atributsioon), valikuliselt soojuskaardid ja A/B-testid',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Siltide edastamine ja käivitamine veebisaidil, Konteineris seadistatud siltide nõusolekuotsuse haldamine',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Reklaamikampaaniate ja konversioonide mõõtmine veebisaidil, Sihtrühmade moodustamine ja taassihtimine',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Konversioonide jälgimine Microsoft Advertisingi kampaaniate jaoks, Remarketingi loendite koostamine, Lehevaatamiste ja kohandatud sündmuste mõõtmine',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Seansside salvestamine ja taasesitamine, Klikkide ja kerimiskäitumise soojuskaardid, Mitme lehevaatamise koondamine üheks seansiks, kasutajakäitumise automatiseeritud analüüsid',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Külastaja algatatud makse töötlemine, Kaardiväljade manustamine oma kassasse, et kaardiandmed ei liiguks poe kaudu, Pettuste ennetamine ja seadusest tulenevad kohustused makseteenuse pakkujana',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Hiireliigutuste salvestamine, Seansi taasesitus, Kasutuskäitumise analüüs',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Kaardipaanide edastamine manustatud kaartidele, Kaarditeenuste toimimine ja väärkasutuse tõrje',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Maksete töötlemine, Pettuste ennetamine',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Konversioonide jälgimine Pinteresti reklaamikampaaniate jaoks, Sihtrühmade moodustamine ja taassihtimine, Veebisaidil tehtud toimingute sidumine varem nähtud reklaamidega',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Lehevaatamiste ja sündmuste mõõtmine, Külastajate äratundmine ja seanssidega sidumine, Päritolu ja kampaaniate analüüs, Seadme, brauseri ja hinnangulise asukoha analüüs, E-kaubanduse ja eesmärkide analüüs',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Lehevaatamiste ja külastuste loendamine, Viitavate allikate analüüs, Brauseri, operatsioonisüsteemi ja seadmetüübi analüüs, ligikaudne geograafiline määramine riigi, piirkonna ja linna täpsusega',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Rakendusvigade kogumine ja edastamine brauserist, valikuliselt seansi salvestamine (Session Replay), vaikimisi maskeeritud tekstide, piltide ja sisestustega',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Poe ostukorvi ja maksmisprotsessi toimimine, Seansi ning keele või riigi määramine, Leviulatuse mõõtmine poe haldajale, Ostuliideste turundusandmed',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Lugude, albumite, esitusloendite ja taskuhäälingu osade manustamine ja esitamine, Teabe kogumine nende kasutajate sirvimiskäitumise kohta Spotify ja kolmandate isikute poolt, Võimaldavad kolmandatel isikutel seada küpsiseid nende kasutajate brauseris',
    'Besucherzählung, Reichweitenmessung'
        => 'Külastajate loendamine, Leviulatuse mõõtmine',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Pettuse tuvastamine ja maksekatsete riskihinnang, Stripe Elementsi maksesisestusväljade pakkumine, Robotite ja automaatse käitumise tuvastamine tellimisprotsessis',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Reklaamikampaaniate tulemuslikkuse mõõtmine ja parandamine, Reklaami isikupärastamine TikTokis, Veebisaidi sündmuste edastamine TikTokile',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Vormide ja küsitluste manustamine veebisaidile, Vastuste kogumine ja edastamine vormi haldajale',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Videote manustamine ja esitamine veebisaidil, Vaataja pleieriseadete meeldejätmine (helitugevus, kvaliteet, subtiitrid), Vimeo tehtav manustatud videote leviulatuse mõõtmine, Robotite ja väärkasutuse tõrje pleieri jaoks',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'A/B-testid ja Split-URL-testid veebisaidil, Variandi määramine ja säilitamine mitme külastuse vältel, Kampaania eesmärkide ja konversioonide mõõtmine, Külastajate ja seansside mõõtmine analüüsi jaoks, Mõõtmise vastuväite ja nõusoleku haldamine',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Ostukorvi sidumine külastajaga, Tuvastamine, kas ostukorvi sisu on muutunud, Viimati vaadatud toodete kuvamine vastavas vidinas, Poe teate peitmise meeldejätmine',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Sisselogimine ja seansi tuvastamine halduspiirkonnas, Kommentaariandmete säilitamine järgmiste kommentaaride jaoks, Halduspiirkonna vaateseadete meeldejätmine, Kontrollimine, kas WordPress saab küpsiseid seada, Valitud keele salvestamine',
    'Conversion-Messung, Retargeting'
        => 'Konversioonide mõõtmine, Taassihtimine',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Manustatud videote esitamine, Turvalisus, Vaataja tuvastamine reklaami eesmärgil',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Reaalajavestlus ja sõnumikanal veebisaidi klienditoe jaoks, Külastaja äratundmine lehevaatamiste ja vahekaartide vahel, Vidina oleku ja seadete meeldejätmine, Seansside ja sündmuste mõõtmine vidinaga lehtedel',
];
