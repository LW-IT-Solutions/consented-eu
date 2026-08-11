<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Litauisch.
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
        => 'A/B ir split-URL testai svetainėje',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Žemėlapių iškvietimų apskaita ir apsauga',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Prisijungimo parduotuvėje užbaigimas; būtina',
    'Abspielen eingebetteter Videos'
        => 'Įterptų vaizdo įrašų atkūrimas',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Lankytojo inicijuoto mokėjimo atlikimas',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Mokėjimų atlikimas, kai rezervuojamas laikas yra mokamas',
    'Analyse des Nutzungsverhaltens'
        => 'Naudojimosi elgsenos analizė',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Pirkimo sąsajų analizės duomenys; analizė',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Parduotuvės analizės duomenys; teikėjas juos priskiria analizei',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Prisijungimo duomenys administravimo sričiai adresu /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Prisijungimas prie Shop Pay; būtina',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Prisijungimas ir sesijos atpažinimas administravimo srityje',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Anoniminė su paslauga susijusi statistika ir kiti techniniai tikslai, be kita ko, prieinamumo palaikymas',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Administravimo srities rodinio nustatymai kiekvienai paskyrai',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Administravimo srities rodinio nustatymų įsiminimas',
    'Anzeige von Bewertungen'
        => 'Atsiliepimų rodymas',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Rezervacijų kalendoriaus rodymas ir laiko rezervavimas svetainėje',
    'Anzeigen einer interaktiven Karte'
        => 'Interaktyvaus žemėlapio rodymas',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'Nustatyta reikšmė 1 sustabdo UET įvykių siuntimą į Microsoft',
    'Aufbau von Remarketing-Listen'
        => 'Pakartotinės rinkodaros sąrašų sudarymas',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Sesijų įrašymas ir atkūrimas',
    'Aufzeichnung von Mausbewegungen'
        => 'Pelės judesių įrašymas',
    'Ausblenden des Shop-Hinweises merken'
        => 'Parduotuvės pranešimo paslėpimo įsiminimas',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Žymų pateikimas ir suaktyvinimas svetainėje',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Žymų pateikimas ir valdymas svetainėje',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Žemėlapių fragmentų pateikimas įterptiems žemėlapiams',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Pranešimų turinio pateikimas į iš anksto paruoštas vietas puslapio pirminiame kode per reklamos serverį',
    'Auslieferung personalisierter Werbung'
        => 'Suasmenintos reklamos pateikimas',
    'Auslieferung von Anzeigen'
        => 'Skelbimų rodymas',
    'Auslieferung von Bibliotheken und Assets'
        => 'Bibliotekų ir išteklių pateikimas',
    'Auslieferung von Schriftarten'
        => 'Šriftų pateikimas',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Prieigos rakto išdavimas, kurį tikrina svetainės serveris',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Registracijos formų valdymas svetainėje',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Iššokančiųjų formų valdymas, kad jos nepasirodytų pakartotinai',
    'Auswahl des Rechenzentrums'
        => 'Duomenų centro parinkimas',
    'Auswertung der Verweisquellen'
        => 'Nukreipiančiųjų šaltinių vertinimas',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Svetainės auditorijos vertinimas (svetainės demografija)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Naršyklės, operacinės sistemos ir įrenginio tipo vertinimas',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Įrenginio, naršyklės ir apytikslės vietos vertinimas',
    'Auswertung von Herkunft und Kampagnen'
        => 'Kilmės ir kampanijų vertinimas',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Autentifikuoja galutinio naudotojo užklausas',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Rodymo dažnio ribojimas',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Patvirtina sėkmingai atliktą patikrą, kad zonoje nebereikėtų papildomų patikrų',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Stripe Elements mokėjimo laukų pateikimas',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Prieinamumo įrankio teikimas',
    'Besucherzählung'
        => 'Lankytojų skaičiavimas',
    'Betrieb des Chat-Widgets'
        => 'Pokalbių lango veikimas',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Žemėlapių paslaugų veikimas ir apsauga nuo piktnaudžiavimo',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Parduotuvės krepšelio ir apmokėjimo proceso veikimas',
    'Betrugs- und Missbrauchserkennung'
        => 'Sukčiavimo ir piktnaudžiavimo aptikimas',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Sukčiavimo aptikimas mokėjimo bandymo metu',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Sukčiavimo aptikimas ir mokėjimo bandymų rizikos vertinimas',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Sukčiavimo prevencija ir mokėjimo paslaugų teikėjo teisinės pareigos',
    'Betrugsprävention'
        => 'Sukčiavimo prevencija',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Sukčiavimo prevencija ir mokėjimo bandymo rizikos vertinimas',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Pseudonimizuotų naudojimo profilių sudarymas gavus sutikimą',
    'Bildung von Zielgruppen und Retargeting'
        => 'Tikslinių grupių sudarymas ir retargetingas',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Susieja sesiją su ta pačia AWS instancija',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Grotuvo apsauga nuo botų ir piktnaudžiavimo',
    'Bot-Abwehr fuer den Player'
        => 'Grotuvo apsauga nuo botų',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Apsauga nuo botų pateikiant HubSpot išteklius',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Naršyklės identifikatorius, kuriuo LinkedIn atskiria įrenginius ir aptinka piktnaudžiavimą',
    'Cloudflare-Bot-Abwehr'
        => 'Cloudflare apsauga nuo botų',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Cloudflare botų aptikimas srautui filtruoti',
    'Cloudflare-Ratenbegrenzung'
        => 'Cloudflare užklausų dažnio ribojimas',
    'Conversion-Messung'
        => 'Konversijų matavimas',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'LinkedIn reklamos kampanijų konversijų sekimas',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Microsoft Advertising kampanijų konversijų sekimas',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Pinterest reklamos kampanijų konversijų sekimas',
    'Darstellung interaktiver Karten auf der Website'
        => 'Interaktyvių žemėlapių rodymas svetainėje',
    'Deduplizieren von Kontakten'
        => 'Kontaktų dublikatų šalinimas',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Skirta reklamai rodyti ir matuoti.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'Kelis domenus apimantis lankytojo ID; pasak teikėjo, trečiosios šalies slapukas, naudojamas tik tada, kai konfigūracijos faile įjungti trečiųjų šalių slapukai',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Trečiosios šalies identifikatorius lankytojams atpažinti',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Trečiosios šalies identifikatorius, perduodamas Klaviyo',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Trečiosios šalies reklamos identifikatorius kampanijoms matuoti ir suasmeninimui TikTok platformoje',
    'E-Commerce- und Zielauswertung'
        => 'E. prekybos ir tikslų vertinimas',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'El. pašto adreso iš anksto užpildymas iš komentarų formos',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Kūrinių, albumų, grojaraščių ir tinklalaidžių epizodų įterpimas ir atkūrimas',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Vaizdo įrašų įterpimas ir atkūrimas svetainėje',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Formų ir apklausų įterpimas į svetainę',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Kortelės laukų įterpimas į savo apmokėjimo procesą, kad kortelės duomenys nekeliautų per parduotuvę',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Išorėje tvarkomos slapukų deklaracijos įterpimas',
    'Einbettung von Audioinhalten'
        => 'Garso turinio įterpimas',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Google ir Facebook reklamos pikselių įterpimas susietoje svetainėje',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Finansavimo ir mokėjimo dalimis informacijos rodymas prekių ir krepšelio puslapiuose (on-site messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Unikalus identifikatorius matuojant keliuose domenuose (paskyros nuo 2026-06-14)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Unikalus identifikatorius matuojant keliuose domenuose (paskyros iki 2026-06-14)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Vienkartinė reikšmė nuo CSRF atsisakymo formoje',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Turi naudotojo identifikatorių ir sukūrimo laiką; pasak šaltinio, nustatomas Pinterest programėlės naršyklėje, o ne svetainės domene',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Atsakymų fiksavimas ir perdavimas formos operatoriui',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Fiksuoja naudojimąsi svetaine vertinimo tikslais.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Operatoriaus apibrėžtų individualių įvykių fiksavimas',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Programos klaidų fiksavimas ir perdavimas iš naršyklės',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Lankytojų ir puslapių peržiūrų fiksavimas svetainėje rinkodaros automatizavimui',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Reklaminės priemonės veiksmingumo matavimas ir komisinio atlyginimo apskaita',
    'Erhalt des Sitzungszustands'
        => 'Sesijos būsenos išlaikymas',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Įrenginio atpažinimas siekiant užkirsti kelią piktnaudžiavimui',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Automatizuotų kreipimųsi aptikimas ir atmetimas formose',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Botų ir automatizuoto elgesio aptikimas užsakymo procese',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Nustatymas, ar krepšelio turinys pasikeitė',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Aptinka krepšelio turinio pakeitimus',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Atpažįsta svetainės, kurioje įdiegtas Intercom kodas, lankytojus',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Iš naujo atpažįsta naršykles Microsoft svetainėse; pasak teikėjo, naudojamas ir reklamai, trečiosios šalies slapukas',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Atpažįsta asmenis, rašančius per pokalbių įrankį',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Atpažįsta įrenginį, iš kurio pradedamas pokalbis',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Atpažįsta atskirą įrenginį, sąveikaujantį su Messenger, siekiant užkirsti kelią piktnaudžiavimui',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Atpažįsta galutinį naudotoją, pradedantį pokalbį',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Atpažįsta domeną arba subdomeną, kuriame įdiegtas pokalbių langas',
    'Erkennt wiederkehrende Besucher'
        => 'Atpažįsta grįžtančius lankytojus',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Nustato, ar naršyklė buvo paleista iš naujo',
    'Erkennung von Klickbetrug'
        => 'Paspaudimų sukčiavimo aptikimas',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Nustato unikalius apsilankymus svetainėje (paskyros nuo 2026-06-14)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Nustato unikalius apsilankymus svetainėje (paskyros iki 2026-06-14)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Leidžia tretiesiems asmenims įrašyti slapukus šių naudotojų naršyklėje',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Leidžia naudotis prieinamumo įrankiu',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Suteikia papildomų svetainės funkcijų.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Pirmosios šalies identifikatorius, kuris atpažįsta lankytojus ir priskiria įvykius svetainei',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Pirmosios šalies lankytojo identifikatorius konversijų sekimui ir pakartotinei rinkodarai',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Pirmosios šalies sesijos identifikatorius įvykiams priskirti',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Pirmosios šalies sesijos identifikatorius kiekvienam pikseliui kampanijoms matuoti',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Pirmosios šalies sesijos identifikatorius kampanijoms matuoti',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Pirmosios šalies reklamos identifikatorius kampanijoms matuoti ir suasmeninimui TikTok platformoje',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Pirmosios šalies slapukas, grupuojantis lankytojų veiksmus, kurių Pinterest negali priskirti',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Pirmosios šalies slapukas, saugantis per Automatic Enhanced Match surinktus maišos būdu apdorotus klientų duomenis',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Sukuria unikalų identifikatorių kiekvienam lankytojui (paskyros nuo 2026-06-14)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Sukuria unikalų identifikatorių kiekvienam lankytojui (paskyros iki 2026-06-14)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Įrenginio identifikatorius įvykių vertinimui puslapiuose su valdikliu',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Nustatomas prisijungiant HubSpot talpinamame puslapyje',
    'Gewaehlte Sprache speichern'
        => 'Pasirinktos kalbos išsaugojimas',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Suderina MUID identifikatorių tarp Microsoft domenų; pasak teikėjo, trečiosios šalies slapukas',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Palaiko žinučių sinchronizaciją keliose kortelėse',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Saugo parametro pk_campaign reikšmę',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Saugo parametro utm_campaign reikšmę',
    'Haelt den Widerspruch gegen die Messung'
        => 'Saugo prieštaravimą dėl matavimo',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Saugo _uetsid galiojimo pabaigos laiką',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Saugo _uetvid galiojimo pabaigos laiką',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Saugo srauto šaltinio tipą Tag Manager reikmėms',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Fiksuoja lankytojo tapatybę, taip pat kontaktų dublikatams šalinti',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Fiksuoja lankytojo sprendimą dėl slapukų',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Išlaiko vienodą valdiklio vaizdą pereinant tarp puslapių',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Fiksuoja įėjimo puslapį; analizė',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Saugo sutikimą dėl matavimo naudojant slapukus',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Saugo naudotojo sprendimą dėl kategorijų ir teikėjų',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Palaiko prisijungusių naudotojų sesiją ir prieigą prie ankstesnių pokalbių',
    'Haelt die verweisende Adresse'
        => 'Saugo nukreipiantį adresą',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Fiksuoja nukreipiantį šaltinį; analizė',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Saugo individualius sesijos kintamuosius (teikėjo pažymėti kaip pasenę)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Fiksuoja, ar etracker gali įrašyti slapukus; naudojant data-block-cookies nustatomas API iškvietimu',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Fiksuoja, kuriuos funkcijų jungiklius įjungė vaizdo įrašo savininkas',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Pagrindinis slapukas lankytojams atpažinti',
    'Heatmaps'
        => 'Šilumos žemėlapiai',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Paspaudimų ir slinkimo elgsenos šilumos žemėlapiai',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Saugo šilumos žemėlapių sesijos duomenis apsilankymo metu',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Saugo informaciją apie vykstančią sesiją (paskyros nuo 2026-06-14)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Saugo informaciją apie vykstančią sesiją (paskyros iki 2026-06-14)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Saugo naudotojo nustatytus kintamuosius apsilankymo metu',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Saugo nuolatinius lankytojo lygmens duomenis (paskyros nuo 2026-06-14)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Saugo nuolatinius lankytojo lygmens duomenis Insights vertinimui (paskyros iki 2026-06-14)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Fiksuoja lankytojo sutikimo būseną (paskyros nuo 2026-06-14)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Fiksuoja lankytojo sutikimo būseną (paskyros iki 2026-06-14)',
    'Hält den Sitzungszustand.'
        => 'Saugo sesijos būseną.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Saugo Clarity naudotojo identifikatorių ir šios svetainės nustatymus',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Saugo A/B testų varianto priskyrimą',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Laikinai fiksuoja pasirinktą derinį (paskyros nuo 2026-06-14)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Laikinai fiksuoja pasirinktą derinį (paskyros iki 2026-06-14)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Fiksuoja pasirinktą variantą prieš atliekant peradresavimą (paskyros nuo 2026-06-14)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Fiksuoja pasirinktą variantą prieš atliekant peradresavimą (paskyros iki 2026-06-14)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Fiksuoja, per kurią nuorodą įvyko apsilankymas',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Pre-Clearance režimu: leidimas tolesniems tos pačios zonos WAF patikrinimams',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Netiesioginis nario identifikatorius konversijų sekimui, retargetingui ir vertinimui',
    'Inhalt des Warenkorbs; notwendig'
        => 'Krepšelio turinys; būtina',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Su pirkėjais susiję analitiniai duomenys parduotuvėje; statistika',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Su kampanija susijęs unikalus identifikatorius (paskyros nuo 2026-06-14)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Pirmojo kontakto su Clarity identifikatorius visose Clarity svetainėse; teikėjo duomenimis, trečiosios šalies slapukas',
    'Kennzeichnet die laufende Sitzung'
        => 'Žymi vykstančią sesiją',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Komentaro duomenų išsaugojimas tolesniems komentarams',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Nuoseklus A/B testų variantų rodymas',
    'Lastverteilung und Routing'
        => 'Apkrovos paskirstymas ir maršrutizavimas',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Patikros užklausų apkrovos paskirstymas ir nukreipimas',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Vietoje išsaugo lankytojo paskyros nustatymus',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Pateikia tą patį A/B testo puslapio variantą',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Tiesioginis pokalbis ir pagalbos žinučių kanalas svetainėje',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Tiesioginis pokalbis ir pagalbos pašto dėžutė svetainėje',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Pirkimo sąsajų rinkodaros duomenys; rinkodara',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Rinkodaros duomenys pirkimo sąsajoms',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Žiūrovo grotuvo nustatymų įsiminimas (garsumas, kokybė, subtitrai)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Valdiklio būsenos ir nustatymų įsiminimas',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Įsimena Global Privacy Control juostos uždarymą',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Įsimena informacinės juostos uždarymą',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Įsimena sinchronizavimo su slapuku lms_analytics laiką',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Įsimena paskutinio ID sinchronizavimo laiką, kad jis nesikartotų',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Įsimena priskirtą variantą (paskyros nuo 2026-06-14)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Įsimena priskirtą variantą, kad kito apsilankymo metu jis liktų toks pat (paskyros iki 2026-06-14)',
    'Merkt einen Rabattcode; notwendig'
        => 'Įsimena nuolaidos kodą; būtina',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Įsimena nesutikimą su matavimu (paskyros nuo 2026-06-14)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Įsimena keliose svetainėse galiojantį nesutikimą (paskyros iki 2026-06-14)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Įsimena grotuvo nustatymus, tokius kaip garsumas, kokybė ir subtitrai',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Įsimena garso pranešimų nustatymą',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Įsimena duotą sutikimą dėl matavimo',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Įsimena prieštaravimą dėl matavimo',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Įsimena lankytojo uždarytas proaktyvias žinutes',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Įsimena, kad lankytojas uždarė paleidimo mygtuko užrašą',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Įsimena, ar valdiklis atidarytas, ar uždarytas',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Įsimena, kad lankytojas neturi dalyvauti jokioje kampanijoje (paskyros iki 2026-06-14)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Įsimena, kad lankytojas neįtraukiamas į kampaniją (paskyros nuo 2026-06-14)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Įsimena, kad lankytojas neįtraukiamas į kampaniją (paskyros iki 2026-06-14)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Įsimena, kad pranešimas apie sutikimą buvo uždarytas',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Įsimena, kad parduotuvės pranešimas buvo uždarytas',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Įsimena, kad klausimas dėl slapukų neturi būti užduotas pakartotinai',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Įsimena, kad žyma jau buvo suaktyvinta',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Įsimena, ar šiam lankytojui matuojamas slinkties gylis',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Įsimena, ar pokalbių langas atidarytas',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Įsimena, ar MUID identifikatorius perduodamas reklamos identifikatoriui; teikėjo duomenimis, visada 0, trečiosios šalies slapukas',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'El. laiškų kampanijų atidarymų ir paspaudimų matavimas',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Sesijų ir įvykių matavimas puslapiuose su valdikliu',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Sesijų matavimas ir apsilankymo šaltinio priskyrimas',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Google atliekamas paslaugos prieinamumo matavimas',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Puslapio įkėlimo laiko ir pagrindinių rodiklių matavimas (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Slinkties gylio ir paspaudimų įvykių matavimas',
    'Messung der Werbewirkung'
        => 'Reklamos poveikio matavimas',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Naudojimosi svetaine elgsenos matavimas',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Reklamų matavimas ir personalizavimas TikTok Pangle reklamos tinkle',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Reklamos kampanijų veiksmingumo matavimas ir gerinimas',
    'Messung von Auslieferungen und Klicks'
        => 'Pateikimų ir paspaudimų matavimas',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Lankytojų ir sesijų matavimas vertinimui',
    'Messung von Conversions'
        => 'Konversijų matavimas',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Puslapio peržiūrų ir apsilankymų matavimas',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Puslapio peržiūrų ir įvykių matavimas',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Puslapio peržiūrų ir naudojimosi elgsenos matavimas',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Puslapio peržiūrų ir pasirinktinių įvykių matavimas',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Puslapio peržiūrų, apsilankymų ir sesijų matavimas',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Puslapio peržiūrų, apsilankymų ir sesijų matavimas savame serveryje',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Reklamos kampanijų ir konversijų svetainėje matavimas',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Kampanijos tikslų ir konversijų matavimas',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Žemėlapio plytelių, šriftų ir stilių įkėlimas iš teikėjo',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Vardo iš komentarų formos užpildymas iš anksto',
    'Nutzer-ID'
        => 'Naudotojo ID',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Priskiria krepšelį tinkamai šaliai; būtina',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Priskiria krepšelį duomenų bazėje tinkamai klientei',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Priskiria apsilankymo veiksmus sesijai',
    'Personalisierung der Werbung auf TikTok'
        => 'Reklamos personalizavimas TikTok platformoje',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Patikrinimas, ar WordPress gali įrašyti slapukus',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Tikrina, ar naršyklė priima slapukus; būtina',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Tikrina, ar WordPress gali įrašyti slapukus',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Parduotuvės slaptažodžio patikros reikšmė; būtina',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Teikėjo patikros slapukas (paskyros iki 2026-06-14)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Tikrina, ar naršyklė priima slapukus (paskyros nuo 2026-06-14)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Tikrina, ar naršyklė priima slapukus (paskyros iki 2026-06-14)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Tikrina, ar naršyklė priima slapukus (pasak teikėjo, tik Internet Explorer naršyklėje)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Užklausų dažnio ribojimas HubSpot naudojamo CDN teikėjo pusėje',
    'Reichweiten- und Nutzungsmessung'
        => 'Pasiekiamumo ir naudojimo matavimas',
    'Reichweitenmessung'
        => 'Pasiekiamumo matavimas',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Vimeo atliekamas įterptų vaizdo įrašų pasiekiamumo matavimas',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Pasiekiamumo matavimas parduotuvės valdytojui',
    'Remarketing und Zielgruppenbildung'
        => 'Remarketingas ir tikslinių auditorijų sudarymas',
    'Retargeting'
        => 'Retargetingas',
    'Retargeting von Website-Besuchern'
        => 'Svetainės lankytojų retargetingas',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Rizikos analizė žmogui ir botui atskirti',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Kaupiamasis slapukas, teikėjo duomenimis, sukuriamas tik Safari naršyklėje (paskyros nuo 2026-06-14)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Kaupiamasis slapukas, teikėjo duomenimis, sukuriamas tik Safari naršyklėje (paskyros iki 2026-06-14)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Informacijos apie šių naudotojų naršymo elgseną rinkimas, kurį atlieka Spotify ir tretieji asmenys',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Jungiklis, kurį svetainės valdytojas nustato pats, kad būtų sustabdytas Klaviyo sekimas',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Narių prisijungimo apsauga nuo klastojimo',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Formų apsauga nuo automatizuoto piktnaudžiavimo',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Apsauga nuo automatizuotų užklausų (šlamštas, credential stuffing)',
    'Sicherheit'
        => 'Saugumas',
    'Sicherheitsfunktionen'
        => 'Saugumo funkcijos',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Saugumo funkcijos, kai įjungta pasirenkama funkcija User Journeys',
    'Sitzung'
        => 'Sesija',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Sesijos ir kalbos arba šalies priskyrimas',
    'Sitzungsaufzeichnung'
        => 'Sesijos įrašymas',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Sesijos identifikatorius įvykių vertinimui puslapiuose su valdikliu',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Sesijos identifikatorius parduotuvės statistikai; statistika',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Answer Bot paslaugos sesijos raktas',
    'Sitzungswiedergabe'
        => 'Sesijos atkūrimas',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Išsaugo autentifikavimo prieigos raktą po prisijungimo',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Išsaugo užkoduotą slaptažodį slaptažodžiu apsaugotiems vaizdo įrašams',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Išsaugo pasirinktos kalbos raktą',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Išsaugo lankytojo privatumo pasirinkimą; būtina',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Išsaugo lankytojo sprendimą dėl sutikimo',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Išsaugo lankytojo įrenginio identifikatorių autentifikavimui pokalbių valdiklyje',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Išsaugo į internetinį seminarą užsiregistravusio naudotojo identifikatorių',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Išsaugo paspaudimo identifikatorių fbclid, kad svetainės įvykį būtų galima priskirti reklamai',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Išsaugo naudotojo identifikatorių iš prieš vaizdo įrašą pateikiamos registracijos formos',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Išsaugo TikTok paspaudimo identifikatorių konversijoms priskirti',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Saugo unikalų lankytojo ID atpažinimui',
    'Speichert die zugestimmten Kategorien'
        => 'Išsaugo kategorijas, dėl kurių duotas sutikimas',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Teikia duomenis paskutinių peržiūrėtų prekių valdikliui',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Valdo, ar MUID identifikatorius atnaujinamas; teikėjo duomenimis, trečiosios šalies slapukas',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Techniškai būtina svetainės veikimui ir saugumui.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Perduoda parduotuvės sesijos ir atsiskaitymo duomenis; teikėjas juos nurodo kaip būtinus',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Užtikrina nesutikimo funkciją (opt-out)',
    'Transaktionssicherheit'
        => 'Sandorių saugumas',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Užtikrina reCAPTCHA rizikos analizę.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Svetainės įvykių perdavimas platformai TikTok',
    'Umfragen'
        => 'Apklausos',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Sustabdo duomenų perdavimą paslaugai HubSpot',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Uždarius nebeleidžia rodyti pokalbio pasisveikinimo žinutės',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Atskiria naršykles, kuriomis lankomasi Microsoft svetainėse; su sutikimu taip pat reklamai',
    'Unterscheidet einzelne Nutzer.'
        => 'Atskiria pavienius naudotojus.',
    'Unterscheidung einzelner Nutzer'
        => 'Pavienių naudotojų atskyrimas',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Žmogaus ir boto atskyrimas formose ir prisijungimuose',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Sujungia kelias puslapio peržiūras į vieną sesijos įrašą',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Neleidžia juostai nuolat rodytis griežtuoju režimu',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Sutikimo signalų perdavimas Google žymoms',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Sutikimo sprendimo tvarkymas konteineryje sukonfigūruotoms žymoms',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Nesutikimo su matavimu tvarkymas',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Nesutikimo ir sutikimo dėl matavimo tvarkymas',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Google priskiria jį statistikos ir reklamos kategorijoms.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Google priskiria analizės, reklamos ir saugumo kategorijoms.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Google priskiria jį funkcionalumo, reklamos ir saugumo kategorijoms.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Google priskiria saugumo ir funkcionalumo kategorijoms.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Google priskiria saugumo ir reklamos kategorijoms.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Google priskiria saugumo, analizės, funkcionalumo ir reklamos kategorijoms.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Google priskiria jį saugumo, funkcionalumo ir reklamos kategorijoms.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Google priskiria reklamos ir saugumo kategorijoms.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Google priskiria analizės kategorijai; tikslesnės paskirties Google nenurodo.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Google priskiria funkcionalumo kategorijai.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Google priskiria saugumo kategorijai.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Google priskiria reklamos kategorijai.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Microsoft nurodo jį tarp slapukų, kurių negalima įrašyti be sutikimo; savo tikslo aprašymo Microsoft nepateikia',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Vimeo sukurtas identifikatorius pasiekiamumo matavimui',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Krepšelio valiuta po užbaigto atsiskaitymo; būtina',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Tikimybe grindžiamas naršyklės priskyrimas asmeniui',
    'Warenkorb einer Besucherin zuordnen'
        => 'Krepšelio priskyrimas lankytojai',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Svetainės adreso iš komentarų formos užpildymas iš anksto',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Su reklama susijęs žiūrovo atpažinimas',
    'Werbepersonalisierung'
        => 'Reklamos personalizavimas',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Kaip _pin_unauth, tik kaip trečiosios šalies slapukas',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Lankytojo atpažinimas rezervacijos proceso metu',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Lankytojo atpažinimas tarp puslapio peržiūrų ir kortelių',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Svetainės lankytojų atpažinimas ir identifikavimas',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Lankytojų atpažinimas per kelis apsilankymus',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Susijusių svetainių lankytojų atpažinimas retargetingui',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Sugrįžtančių lankytojų atpažinimas ir ankstesnių pokalbių priskyrimas',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Lankytojo atpažinimas ir jo požymių saugojimas',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Naršyklės atpažinimas pagal Criteo identifikatorių',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Naudotojo atpažinimas; tik su sutikimu, pagal numatytuosius nustatymus užblokuota',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Naršyklės atpažinimas vėlesnių apsilankymų metu, gavus sutikimą',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Lankytojų atpažinimas ir priskyrimas sesijoms',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'LinkedIn narių atpažinimas už LinkedIn ribų reklamos tikslais',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Naudotojų atpažinimas gavus sutikimą',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Grįžtančių lankytojų atpažinimas pagal lankytojo ID',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Įrašomas, kai buvo suaktyvintas kampanijos tikslas (paskyros nuo 2026-06-14)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Įrašomas, kai buvo suaktyvintas kampanijos tikslas (paskyros iki 2026-06-14)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Įrašomas, kai asmuo apsilanko svetainėje su įdiegta Pinterest žyma',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Įrašomas, kai priskyrimas pavyksta be esamų slapukų, pavyzdžiui, per Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Įrašomas JavaScript žymos pagal duomenis, kuriuos Pinterest perduoda su reklamuojamu srautu',
    'Zaehlt und begrenzt Sitzungen'
        => 'Skaičiuoja ir riboja sesijas',
    'Zahlungsabwicklung'
        => 'Mokėjimų vykdymas',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Rodo, ar sesija tebevyksta, ar yra nauja',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Parodo sąsajai, kad esate prisijungę ir su kuria paskyra',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Atsitiktinis naršyklės identifikatorius, priskiriantis svetainės pikselio įvykius vienai naršyklei',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Paskutinių peržiūrėtų prekių rodymas atitinkamame valdiklyje',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Elgsenos svetainėje priskyrimas profiliui',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Apsilankymo kilmės priskyrimas (nukreipiantis šaltinis, atribucija)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Lankytojo priskyrimas kontaktui Brevo paskyroje pagal el. pašto adresą',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Sandorių, tokių kaip potencialūs klientai ir pardavimai, priskyrimas leidėjui',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Veiksmų svetainėje priskyrimas anksčiau matytoms reklamoms',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Kelių puslapio peržiūrų sujungimas į vieną sesiją',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Papildomi duomenys apie užfiksuotus apsilankymo eigos įvykius',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Varianto priskyrimas ir išlaikymas per kelis apsilankymus',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Įvykių, nustatomų pagal CSS parinkiklius, laikinoji atmintis',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Messenger ir lankytojų duomenų laikinoji atmintis naršyklės saugykloje',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Tag Manager įrašų laikinoji atmintis',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Slinkties gylio matavimo laikinoji atmintis',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Tag Manager kintamųjų laikinoji atmintis',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Valdiklio nustatymų laikinoji atmintis, kad būtų išvengta pakartotinių užklausų serveriui',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Messenger ir lankytojų duomenų laikinas saugojimas naršyklėje',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Skaičiuoja lankytojui sukurtas sesijas (paskyros nuo 2026-06-14)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Skaičiuoja, kiek kartų matavimo metu naršyklė buvo uždaryta ir vėl atidaryta (paskyros iki 2026-06-14)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Puslapio peržiūrų ir apsilankymų skaičiavimas',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'automatizuotas naudotojų elgsenos vertinimas',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'apytikslis geografinis priskyrimas šaliai, regionui ir miestui',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'pasirinktinai sesijos įrašymas (Session Replay), pagal numatytuosius nustatymus su užmaskuotais tekstais, vaizdais ir įvestimis',
    'optional Heatmaps und A/B-Tests'
        => 'pasirinktinai šilumos žemėlapiai ir A/B testai',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Perduoda nukreipiantį šaltinį atliekant Split URL testus (paskyros nuo 2026-06-14)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Perduoda nukreipiantį šaltinį atliekant Split URL testus (paskyros iki 2026-06-14)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Sandorių, tokių kaip potencialūs klientai ir pardavimai, priskyrimas leidėjui, Reklaminės priemonės veiksmingumo matavimas ir komisinio atlyginimo apskaita',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Lankytojų ir puslapių peržiūrų fiksavimas svetainėje rinkodaros automatizavimui, Lankytojo priskyrimas kontaktui Brevo paskyroje pagal el. pašto adresą, Operatoriaus apibrėžtų individualių įvykių fiksavimas',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Rezervacijų kalendoriaus rodymas ir laiko rezervavimas svetainėje, Lankytojo atpažinimas rezervacijos proceso metu, Mokėjimų atlikimas, kai rezervuojamas laikas yra mokamas',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Automatizuotų kreipimųsi aptikimas ir atmetimas formose, Prieigos rakto išdavimas, kurį tikrina svetainės serveris, Pre-Clearance režimu: leidimas tolesniems tos pačios zonos WAF patikrinimams',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Puslapio peržiūrų ir apsilankymų matavimas, Puslapio įkėlimo laiko ir pagrindinių rodiklių matavimas (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Suasmenintos reklamos pateikimas, Reklamos poveikio matavimas, Naršyklės atpažinimas pagal Criteo identifikatorių',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Naudojimosi svetaine elgsenos matavimas, Pseudonimizuotų naudojimo profilių sudarymas gavus sutikimą, Naršyklės atpažinimas vėlesnių apsilankymų metu, gavus sutikimą',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Puslapio peržiūrų ir naudojimosi elgsenos matavimas, Slinkties gylio ir paspaudimų įvykių matavimas, Naudotojų atpažinimas gavus sutikimą, Nesutikimo su matavimu tvarkymas',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Žmogaus ir boto atskyrimas formose ir prisijungimuose, Apsauga nuo automatizuotų užklausų (šlamštas, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Konversijų matavimas, Remarketingas ir tikslinių auditorijų sudarymas, Rodymo dažnio ribojimas, Paspaudimų sukčiavimo aptikimas',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Skelbimų rodymas, Rodymo dažnio ribojimas, Sukčiavimo ir piktnaudžiavimo aptikimas, Pateikimų ir paspaudimų matavimas',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Pavienių naudotojų atskyrimas, Sesijos būsenos išlaikymas, Pasiekiamumo ir naudojimo matavimas',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Interaktyvaus žemėlapio rodymas, Google atliekamas paslaugos prieinamumo matavimas',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Rizikos analizė žmogui ir botui atskirti, Formų apsauga nuo automatizuoto piktnaudžiavimo',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Žymų pateikimas ir valdymas svetainėje, Sutikimo signalų perdavimas Google žymoms',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Žmogaus ir boto atskyrimas formose ir prisijungimuose, Patikros užklausų apkrovos paskirstymas ir nukreipimas, Prieinamumo įrankio teikimas',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Šilumos žemėlapiai, Sesijos įrašymas, Apklausos',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Lankytojų atpažinimas per kelis apsilankymus, Sesijų matavimas ir apsilankymo šaltinio priskyrimas, Kontaktų dublikatų šalinimas, Pokalbių lango veikimas, Nuoseklus A/B testų variantų rodymas',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Tiesioginis pokalbis ir pagalbos pašto dėžutė svetainėje, Sugrįžtančių lankytojų atpažinimas ir ankstesnių pokalbių priskyrimas, Įrenginio atpažinimas siekiant užkirsti kelią piktnaudžiavimui, Messenger ir lankytojų duomenų laikinas saugojimas naršyklėje',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Finansavimo ir mokėjimo dalimis informacijos rodymas prekių ir krepšelio puslapiuose (on-site messaging), Pranešimų turinio pateikimas į iš anksto paruoštas vietas puslapio pirminiame kode per reklamos serverį',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Svetainės lankytojų atpažinimas ir identifikavimas, Elgsenos svetainėje priskyrimas profiliui, Registracijos formų valdymas svetainėje',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'LinkedIn reklamos kampanijų konversijų sekimas, Svetainės lankytojų retargetingas, Svetainės auditorijos vertinimas (svetainės demografija)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Susijusių svetainių lankytojų atpažinimas retargetingui, Iššokančiųjų formų valdymas, kad jos nepasirodytų pakartotinai, El. laiškų kampanijų atidarymų ir paspaudimų matavimas, Google ir Facebook reklamos pikselių įterpimas susietoje svetainėje',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Interaktyvių žemėlapių rodymas svetainėje, Žemėlapio plytelių, šriftų ir stilių įkėlimas iš teikėjo, Žemėlapių iškvietimų apskaita ir apsauga',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Puslapio peržiūrų, apsilankymų ir sesijų matavimas, Grįžtančių lankytojų atpažinimas pagal lankytojo ID, Apsilankymo kilmės priskyrimas (nukreipiantis šaltinis, atribucija), pasirinktinai šilumos žemėlapiai ir A/B testai',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Puslapio peržiūrų, apsilankymų ir sesijų matavimas savame serveryje, Grįžtančių lankytojų atpažinimas pagal lankytojo ID, Apsilankymo kilmės priskyrimas (nukreipiantis šaltinis, atribucija), pasirinktinai šilumos žemėlapiai ir A/B testai',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Žymų pateikimas ir suaktyvinimas svetainėje, Sutikimo sprendimo tvarkymas konteineryje sukonfigūruotoms žymoms',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Reklamos kampanijų ir konversijų svetainėje matavimas, Tikslinių grupių sudarymas ir retargetingas',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Microsoft Advertising kampanijų konversijų sekimas, Pakartotinės rinkodaros sąrašų sudarymas, Puslapio peržiūrų ir pasirinktinių įvykių matavimas',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Sesijų įrašymas ir atkūrimas, Paspaudimų ir slinkimo elgsenos šilumos žemėlapiai, Kelių puslapio peržiūrų sujungimas į vieną sesiją, automatizuotas naudotojų elgsenos vertinimas',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Lankytojo inicijuoto mokėjimo atlikimas, Kortelės laukų įterpimas į savo apmokėjimo procesą, kad kortelės duomenys nekeliautų per parduotuvę, Sukčiavimo prevencija ir mokėjimo paslaugų teikėjo teisinės pareigos',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Pelės judesių įrašymas, Sesijos atkūrimas, Naudojimosi elgsenos analizė',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Žemėlapių fragmentų pateikimas įterptiems žemėlapiams, Žemėlapių paslaugų veikimas ir apsauga nuo piktnaudžiavimo',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Mokėjimų vykdymas, Sukčiavimo prevencija',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Pinterest reklamos kampanijų konversijų sekimas, Tikslinių grupių sudarymas ir retargetingas, Veiksmų svetainėje priskyrimas anksčiau matytoms reklamoms',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Puslapio peržiūrų ir įvykių matavimas, Lankytojų atpažinimas ir priskyrimas sesijoms, Kilmės ir kampanijų vertinimas, Įrenginio, naršyklės ir apytikslės vietos vertinimas, E. prekybos ir tikslų vertinimas',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Puslapio peržiūrų ir apsilankymų skaičiavimas, Nukreipiančiųjų šaltinių vertinimas, Naršyklės, operacinės sistemos ir įrenginio tipo vertinimas, apytikslis geografinis priskyrimas šaliai, regionui ir miestui',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Programos klaidų fiksavimas ir perdavimas iš naršyklės, pasirinktinai sesijos įrašymas (Session Replay), pagal numatytuosius nustatymus su užmaskuotais tekstais, vaizdais ir įvestimis',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Parduotuvės krepšelio ir apmokėjimo proceso veikimas, Sesijos ir kalbos arba šalies priskyrimas, Pasiekiamumo matavimas parduotuvės valdytojui, Rinkodaros duomenys pirkimo sąsajoms',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Kūrinių, albumų, grojaraščių ir tinklalaidžių epizodų įterpimas ir atkūrimas, Informacijos apie šių naudotojų naršymo elgseną rinkimas, kurį atlieka Spotify ir tretieji asmenys, Leidžia tretiesiems asmenims įrašyti slapukus šių naudotojų naršyklėje',
    'Besucherzählung, Reichweitenmessung'
        => 'Lankytojų skaičiavimas, Pasiekiamumo matavimas',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Sukčiavimo aptikimas ir mokėjimo bandymų rizikos vertinimas, Stripe Elements mokėjimo laukų pateikimas, Botų ir automatizuoto elgesio aptikimas užsakymo procese',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Reklamos kampanijų veiksmingumo matavimas ir gerinimas, Reklamos personalizavimas TikTok platformoje, Svetainės įvykių perdavimas platformai TikTok',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Formų ir apklausų įterpimas į svetainę, Atsakymų fiksavimas ir perdavimas formos operatoriui',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Vaizdo įrašų įterpimas ir atkūrimas svetainėje, Žiūrovo grotuvo nustatymų įsiminimas (garsumas, kokybė, subtitrai), Vimeo atliekamas įterptų vaizdo įrašų pasiekiamumo matavimas, Grotuvo apsauga nuo botų ir piktnaudžiavimo',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'A/B ir split-URL testai svetainėje, Varianto priskyrimas ir išlaikymas per kelis apsilankymus, Kampanijos tikslų ir konversijų matavimas, Lankytojų ir sesijų matavimas vertinimui, Nesutikimo ir sutikimo dėl matavimo tvarkymas',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Krepšelio priskyrimas lankytojai, Nustatymas, ar krepšelio turinys pasikeitė, Paskutinių peržiūrėtų prekių rodymas atitinkamame valdiklyje, Parduotuvės pranešimo paslėpimo įsiminimas',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Prisijungimas ir sesijos atpažinimas administravimo srityje, Komentaro duomenų išsaugojimas tolesniems komentarams, Administravimo srities rodinio nustatymų įsiminimas, Patikrinimas, ar WordPress gali įrašyti slapukus, Pasirinktos kalbos išsaugojimas',
    'Conversion-Messung, Retargeting'
        => 'Konversijų matavimas, Retargetingas',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Įterptų vaizdo įrašų atkūrimas, Saugumas, Su reklama susijęs žiūrovo atpažinimas',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Tiesioginis pokalbis ir pagalbos žinučių kanalas svetainėje, Lankytojo atpažinimas tarp puslapio peržiūrų ir kortelių, Valdiklio būsenos ir nustatymų įsiminimas, Sesijų ir įvykių matavimas puslapiuose su valdikliu',
];
