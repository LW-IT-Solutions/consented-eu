<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Finnisch.
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
        => 'A/B-testit ja Split URL -testit sivustolla',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Karttahakujen laskutus ja suojaus',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Shop-kirjautumisen viimeistely; välttämätön',
    'Abspielen eingebetteter Videos'
        => 'Upotettujen videoiden toistaminen',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Kävijän käynnistämän maksun käsittely',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Maksujen käsittely, kun varattava aika on maksullinen',
    'Analyse des Nutzungsverhaltens'
        => 'Käyttäytymisen analysointi',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Ostoliittymien analytiikkatiedot; analytiikka',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Verkkokaupan analytiikkatiedot; palveluntarjoaja luokittelee analytiikaksi',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Kirjautumistiedot hallintaosioon osoitteessa /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Kirjautuminen Shop Payhin; välttämätön',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Kirjautuminen ja istunnon tunnistus hallintaosiossa',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Anonyymi palvelukohtainen tilastointi ja muut tekniset tarkoitukset, muun muassa saavutettavuuden tukeminen',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Hallintaosion näkymäasetukset tilikohtaisesti',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Hallintaosion näkymäasetusten muistaminen',
    'Anzeige von Bewertungen'
        => 'Arvostelujen näyttäminen',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Varauskalenterin näyttäminen ja aikojen varaaminen sivustolla',
    'Anzeigen einer interaktiven Karte'
        => 'Vuorovaikutteisen kartan näyttäminen',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'Arvoon 1 asetettuna estää UET-tapahtumien lähettämisen Microsoftille',
    'Aufbau von Remarketing-Listen'
        => 'Uudelleenmarkkinointilistojen muodostaminen',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Istuntojen tallentaminen ja toistaminen',
    'Aufzeichnung von Mausbewegungen'
        => 'Hiiren liikkeiden tallentaminen',
    'Ausblenden des Shop-Hinweises merken'
        => 'Verkkokaupan ilmoituksen piilottamisen muistaminen',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Tagien toimittaminen ja laukaiseminen sivustolla',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Tagien toimittaminen ja hallinta sivustolla',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Karttaruutujen toimittaminen upotettuihin karttoihin',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Ilmoitussisältöjen toimittaminen sivun lähdekoodiin valmisteltuihin paikkoihin mainospalvelimen kautta',
    'Auslieferung personalisierter Werbung'
        => 'Personoidun mainonnan toimittaminen',
    'Auslieferung von Anzeigen'
        => 'Mainosten toimittaminen',
    'Auslieferung von Bibliotheken und Assets'
        => 'Kirjastojen ja resurssien toimittaminen',
    'Auslieferung von Schriftarten'
        => 'Kirjasinten toimittaminen',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Sellaisen tokenin myöntäminen, jonka sivuston palvelin tarkistaa',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Ilmoittautumislomakkeiden ohjaus sivustolla',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Ponnahduslomakkeiden ohjaus, jotta ne eivät ilmesty toistuvasti',
    'Auswahl des Rechenzentrums'
        => 'Datakeskuksen valinta',
    'Auswertung der Verweisquellen'
        => 'Viittaavien lähteiden analysointi',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Sivuston kohderyhmän analysointi (sivuston demografia)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Selaimen, käyttöjärjestelmän ja laitetyypin analysointi',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Laitteen, selaimen ja arvioidun sijainnin analysointi',
    'Auswertung von Herkunft und Kampagnen'
        => 'Alkuperän ja kampanjoiden analysointi',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Todentaa loppukäyttäjän pyynnöt',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Näyttökertojen rajoittaminen',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Osoittaa läpäistyn tarkistuksen, jotta vyöhykkeen muut haasteet jäävät pois',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Stripe Elementsin maksukenttien tarjoaminen',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Saavutettavuustoiminnon tarjoaminen',
    'Besucherzählung'
        => 'Kävijälaskenta',
    'Betrieb des Chat-Widgets'
        => 'Chat-widgetin toiminta',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Karttapalveluiden toiminta ja väärinkäytön torjunta',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Verkkokaupan ostoskorin ja maksuprosessin toiminta',
    'Betrugs- und Missbrauchserkennung'
        => 'Petosten ja väärinkäytön tunnistaminen',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Petosten tunnistaminen maksuyrityksen yhteydessä',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Petosten tunnistaminen ja maksuyritysten riskiarviointi',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Petosten torjunta ja lakisääteiset velvoitteet maksupalveluntarjoajana',
    'Betrugsprävention'
        => 'Petosten torjunta',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Petosten torjunta ja maksuyrityksen riskiarviointi',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Pseudonyymien käyttöprofiilien muodostaminen suostumuksen jälkeen',
    'Bildung von Zielgruppen und Retargeting'
        => 'Kohderyhmien muodostaminen ja uudelleenkohdentaminen',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Sitoo istunnon samaan AWS-instanssiin',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Bottien ja väärinkäytön torjunta soittimessa',
    'Bot-Abwehr fuer den Player'
        => 'Bottien torjunta soittimessa',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Bottisuojaus HubSpotin resursseja toimitettaessa',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Selaintunniste, jolla LinkedIn erottaa laitteet ja tunnistaa väärinkäytön',
    'Cloudflare-Bot-Abwehr'
        => 'Cloudflaren bottitorjunta',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Cloudflaren bottitunnistus liikenteen suodattamiseen',
    'Cloudflare-Ratenbegrenzung'
        => 'Cloudflaren pyyntömäärän rajoitus',
    'Conversion-Messung'
        => 'Konversioiden mittaus',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Konversioseuranta LinkedIn-mainoskampanjoille',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Konversioseuranta Microsoft Advertising -kampanjoille',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Konversioseuranta Pinterest-mainoskampanjoille',
    'Darstellung interaktiver Karten auf der Website'
        => 'Vuorovaikutteisten karttojen esittäminen sivustolla',
    'Deduplizieren von Kontakten'
        => 'Yhteystietojen kaksoiskappaleiden poistaminen',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Käytetään mainonnan näyttämiseen ja mittaamiseen.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'Verkkotunnusrajat ylittävä kävijätunniste; palveluntarjoajan mukaan kolmannen osapuolen eväste, käytetään vain, jos kolmannen osapuolen evästeet on otettu käyttöön asetustiedostossa',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Kolmannen osapuolen tunniste kävijöiden tunnistamiseen',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Kolmannen osapuolen tunniste, joka välitetään Klaviyolle',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Kolmannen osapuolen mainostunniste kampanjoiden mittaamiseen ja personointiin TikTokissa',
    'E-Commerce- und Zielauswertung'
        => 'Verkkokaupan ja tavoitteiden analysointi',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Sähköpostiosoitteen esitäyttö kommenttilomakkeessa',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Kappaleiden, albumien, soittolistojen ja podcast-jaksojen upottaminen ja toistaminen',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Videoiden upottaminen ja toistaminen sivustolla',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Lomakkeiden ja kyselyiden upottaminen sivustolle',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Korttikenttien upottaminen omaan kassaan, jotta korttitiedot eivät kulje verkkokaupan kautta',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Ulkoisesti ylläpidetyn evästeselosteen upottaminen',
    'Einbettung von Audioinhalten'
        => 'Äänisisältöjen upottaminen',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Googlen ja Facebookin mainospikselien liittäminen yhdistetylle sivustolle',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Rahoitus- ja osamaksuilmoitusten näyttäminen tuote- ja ostoskorisivuilla (On-site Messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Yksilöivä tunniste verkkotunnusrajat ylittävässä mittauksessa (tilit 14.06.2026 alkaen)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Yksilöivä tunniste verkkotunnusrajat ylittävässä mittauksessa (tilit ennen 14.06.2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Kertakäyttöinen arvo CSRF-suojaukseen kieltäytymislomakkeessa',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Sisältää käyttäjätunnisteen ja luontiajankohdan; lähteen mukaan asetetaan Pinterestin sovelluksen sisäisessä selaimessa, ei sivuston verkkotunnuksessa',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Vastausten kerääminen ja välittäminen lomakkeen ylläpitäjälle',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Kerää tietoa sivuston käytöstä analysointia varten.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Ylläpitäjän määrittelemien omien tapahtumien kerääminen',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Sovellusvirheiden kerääminen ja välittäminen selaimesta',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Kävijöiden ja sivunlatausten kerääminen sivustolla markkinoinnin automaatiota varten',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Mainoksen tuloksellisuuden mittaus ja provision laskutus',
    'Erhalt des Sitzungszustands'
        => 'Istunnon tilan säilyttäminen',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Laitteen tunnistaminen väärinkäytön torjumiseksi',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Automatisoitujen lomakekäyntien tunnistaminen ja torjuminen',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Bottien ja automatisoidun toiminnan tunnistaminen tilausprosessissa',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Sen tunnistaminen, onko ostoskorin sisältö muuttunut',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Tunnistaa muutokset ostoskorin sisällössä',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Tunnistaa sen sivuston kävijät, jolle Intercom-koodi on asennettu',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Tunnistaa selaimet Microsoftin sivustoilla; palveluntarjoajan mukaan käytetään myös mainontaan, kolmannen osapuolen eväste',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Tunnistaa henkilöt, jotka kirjoittavat chat-työkalun kautta',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Tunnistaa laitteen, jolta keskustelu aloitetaan',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Tunnistaa väärinkäytön torjumiseksi yksittäisen laitteen, joka on vuorovaikutuksessa Messengerin kanssa',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Tunnistaa loppukäyttäjän, joka aloittaa keskustelun',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Tunnistaa verkkotunnuksen tai aliverkkotunnuksen, jolle chat-widget on asennettu',
    'Erkennt wiederkehrende Besucher'
        => 'Tunnistaa palaavat kävijät',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Tunnistaa, onko selain käynnistetty uudelleen',
    'Erkennung von Klickbetrug'
        => 'Klikkipetosten tunnistaminen',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Selvittää yksilöivät käynnit sivustolla (tilit 14.06.2026 alkaen)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Selvittää yksilöivät käynnit sivustolla (tilit ennen 14.06.2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Mahdollistavat sen, että kolmannet osapuolet asettavat evästeitä näiden käyttäjien selaimeen',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Mahdollistaa saavutettavuustoiminnon käytön',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Mahdollistaa sivuston lisätoimintoja.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Ensimmäisen osapuolen tunniste, joka tunnistaa kävijät ja kohdistaa tapahtumat sivustolle',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Ensimmäisen osapuolen kävijätunniste konversioseurantaa ja uudelleenmarkkinointia varten',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Ensimmäisen osapuolen istuntotunniste tapahtumien kohdistamiseen',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Ensimmäisen osapuolen istuntotunniste pikseliä kohden kampanjoiden mittaamiseen',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Ensimmäisen osapuolen istuntotunniste kampanjoiden mittaamiseen',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Ensimmäisen osapuolen mainostunniste kampanjoiden mittaamiseen ja personointiin TikTokissa',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Ensimmäisen osapuolen eväste, joka ryhmittelee niiden kävijöiden toiminnot, joita Pinterest ei pysty kohdistamaan',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Ensimmäisen osapuolen eväste, joka tallentaa Automatic Enhanced Matchin kautta kerätyt tiivistetyt asiakastiedot',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Luo yksilöivän tunnisteen jokaiselle kävijälle (tilit 14.06.2026 alkaen)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Luo yksilöivän tunnisteen jokaiselle kävijälle (tilit ennen 14.06.2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Laitetunniste widgetillä varustetuilla sivuilla tapahtuvien tapahtumien analysointiin',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Asetetaan kirjauduttaessa HubSpotin isännöimällä sivulla',
    'Gewaehlte Sprache speichern'
        => 'Valitun kielen tallentaminen',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Sovittaa MUID-tunnisteen yhteen Microsoftin verkkotunnusten välillä; palveluntarjoajan mukaan kolmannen osapuolen eväste',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Pitää viestit synkronissa useiden välilehtien välillä',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Säilyttää pk_campaign-parametrin arvon',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Säilyttää utm_campaign-parametrin arvon',
    'Haelt den Widerspruch gegen die Messung'
        => 'Säilyttää mittauksen vastustamisen',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Säilyttää _uetsid:n vanhenemisajan',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Säilyttää _uetvid:n vanhenemisajan',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Säilyttää liikennelähteen tyypin Tag Manageria varten',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Tallentaa kävijän identiteetin, myös yhteystietojen kaksoiskappaleiden poistamiseksi',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Tallentaa kävijän evästevalinnan',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Pitää widgetin esitystavan yhtenäisenä sivua vaihdettaessa',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Tallentaa aloitussivun; analytiikka',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Säilyttää suostumuksen evästeillä tapahtuvaan mittaukseen',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Säilyttää käyttäjän päätöksen luokista ja palveluntarjoajista',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Säilyttää kirjautuneiden käyttäjien istunnon ja pääsyn aiempiin keskusteluihin',
    'Haelt die verweisende Adresse'
        => 'Säilyttää viittaavan osoitteen',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Tallentaa viittaavan lähteen; analytiikka',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Säilyttää istunnon omat muuttujat (palveluntarjoaja on merkinnyt vanhentuneeksi)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Tallentaa, saako etracker asettaa evästeitä; asetetaan data-block-cookies-tilanteessa API-kutsulla',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Tallentaa, mitkä toimintokytkimet videon omistaja on ottanut käyttöön',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Pääeväste kävijöiden tunnistamiseen',
    'Heatmaps'
        => 'Lämpökartat',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Klikkausten ja vieritystoiminnan lämpökartat',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Säilyttää lämpökartan istuntotiedot käynnin ajan',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Säilyttää tiedot käynnissä olevasta istunnosta (tilit 14.06.2026 alkaen)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Säilyttää tiedot käynnissä olevasta istunnosta (tilit ennen 14.06.2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Säilyttää mukautetut muuttujat käynnin ajan',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Säilyttää pysyviä tietoja kävijätasolla (tilit 14.06.2026 alkaen)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Säilyttää pysyviä tietoja kävijätasolla Insights-analysointia varten (tilit ennen 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Tallentaa kävijän suostumuksen tilan (tilit 14.06.2026 alkaen)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Tallentaa kävijän suostumuksen tilan (tilit ennen 14.06.2026)',
    'Hält den Sitzungszustand.'
        => 'Säilyttää istunnon tilan.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Säilyttää Clarityn käyttäjätunnisteen ja tämän sivuston asetukset',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Säilyttää A/B-testien varianttijaon',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Säilyttää valitun yhdistelmän väliaikaisesti (tilit 14.06.2026 alkaen)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Säilyttää valitun yhdistelmän väliaikaisesti (tilit ennen 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Tallentaa valitun variantin ennen uudelleenohjausta (tilit 14.06.2026 alkaen)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Tallentaa valitun variantin ennen uudelleenohjausta (tilit ennen 14.06.2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Tallentaa, minkä viittauksen kautta käynti syntyi',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Pre-Clearance-tilassa: hyväksyntä saman vyöhykkeen seuraaviin WAF-tarkistuksiin',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Epäsuora jäsentunniste konversioseurantaan, uudelleenkohdennukseen ja analysointiin',
    'Inhalt des Warenkorbs; notwendig'
        => 'Ostoskorin sisältö; välttämätön',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Ostajakohtaiset analyysitiedot verkkokaupassa; tilastointi',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Kampanjakohtainen yksilöivä tunniste (tilit 14.06.2026 alkaen)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Ensimmäisen Clarity-kohtaamisen tunniste kaikilla Clarity-sivustoilla; palveluntarjoajan mukaan kolmannen osapuolen eväste',
    'Kennzeichnet die laufende Sitzung'
        => 'Merkitsee käynnissä olevan istunnon',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Kommenttitietojen säilyttäminen seuraavia kommentteja varten',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'A/B-testin muunnelmien johdonmukainen näyttäminen',
    'Lastverteilung und Routing'
        => 'Kuormanjako ja reititys',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Challenge-pyyntöjen kuormanjako ja reititys',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Tallentaa kävijän tilin asetukset paikallisesti',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Näyttää A/B-testisivusta aina saman muunnelman',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Live-chat ja viestikanava sivuston asiakastukea varten',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Live-chat ja tukipostilaatikko sivustolla',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Ostoliittymien markkinointitiedot; markkinointi',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Ostoliittymien markkinointitiedot',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Katsojan soitinasetusten muistaminen (äänenvoimakkuus, laatu, tekstitys)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Widgetin tilan ja asetusten muistaminen',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Muistaa Global Privacy Control -bannerin sulkemisen',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Muistaa ilmoitusbannerin sulkemisen',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Muistaa lms_analytics-evästeen kanssa tehdyn synkronoinnin ajankohdan',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Muistaa viimeisimmän tunnistesynkronoinnin ajankohdan, jottei synkronointia toisteta',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Muistaa määritetyn muunnelman (tilit 14.06.2026 alkaen)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Muistaa määritetyn muunnelman, jotta se pysyy samana uudella käynnillä (tilit ennen 14.06.2026)',
    'Merkt einen Rabattcode; notwendig'
        => 'Muistaa alennuskoodin; välttämätön',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Muistaa mittauksen vastustamisen (tilit 14.06.2026 alkaen)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Muistaa sivustorajat ylittävän vastustamisen (tilit ennen 14.06.2026)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Muistaa soitinasetukset, kuten äänenvoimakkuuden, laadun ja tekstitykset',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Muistaa ääni-ilmoitusten asetuksen',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Muistaa mittaukseen annetun suostumuksen',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Muistaa mittauksen vastustamisen',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Muistaa pois klikatut ennakoivat viestit',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Muistaa, että kävijä on sulkenut käynnistyspainikkeen tekstin',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Muistaa, onko widget auki vai suljettuna',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Muistaa, ettei kävijä saa osallistua mihinkään kampanjaan (tilit ennen 14.06.2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Muistaa, että kävijä on rajattu kampanjan ulkopuolelle (tilit 14.06.2026 alkaen)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Muistaa, että kävijä on rajattu kampanjan ulkopuolelle (tilit ennen 14.06.2026)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Muistaa, että suostumusilmoitus on suljettu',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Muistaa, että verkkokaupan ilmoitus on suljettu',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Muistaa, ettei evästekysymystä pidä esittää uudelleen',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Muistaa, että tagi on jo laukaistu',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Muistaa, mitataanko tältä kävijältä vierityssyvyys',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Muistaa, onko chat-ikkuna auki',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Muistaa, välitetäänkö MUID-tunniste mainostunnisteelle; palveluntarjoajan mukaan aina 0, kolmannen osapuolen eväste',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Sähköpostikampanjoiden avausten ja klikkausten mittaaminen',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Istuntojen ja tapahtumien mittaaminen sivuilla, joilla on widget',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Istuntojen mittaaminen ja käynnin lähteen kohdistaminen',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Googlen tekemä palvelun saatavuuden mittaus',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Sivun latausajan ja ydinmittarien mittaus (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Vierityssyvyyden ja klikkaustapahtumien mittaus',
    'Messung der Werbewirkung'
        => 'Mainonnan vaikutuksen mittaus',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Käyttökäyttäytymisen mittaus sivustolla',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Mainosten mittaaminen ja personointi TikTok Pangle -mainosverkostossa',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Mainoskampanjoiden tehon mittaaminen ja parantaminen',
    'Messung von Auslieferungen und Klicks'
        => 'Näyttökertojen ja klikkausten mittaus',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Kävijöiden ja istuntojen mittaus analyysejä varten',
    'Messung von Conversions'
        => 'Konversioiden mittaus',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Sivunäyttöjen ja käyntien mittaus',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Sivunäyttöjen ja tapahtumien mittaus',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Sivunäyttöjen ja käyttökäyttäytymisen mittaus',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Sivunäyttöjen ja mukautettujen tapahtumien mittaus',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Sivunäyttöjen, käyntien ja istuntojen mittaus',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Sivunäyttöjen, käyntien ja istuntojen mittaus omalla palvelimella',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Mainoskampanjoiden ja konversioiden mittaus sivustolla',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Kampanjan tavoitteiden ja konversioiden mittaus',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Karttaruutujen, fonttien ja tyylien lataaminen palveluntarjoajalta',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Nimen esitäyttö kommenttilomakkeessa',
    'Nutzer-ID'
        => 'Käyttäjä-ID',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Kohdistaa ostoskorin oikeaan maahan; välttämätön',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Kohdistaa ostoskorin tietokannassa oikealle asiakkaalle',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Yhdistää käynnin toiminnot yhteen istuntoon',
    'Personalisierung der Werbung auf TikTok'
        => 'Mainonnan personointi TikTokissa',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Sen tarkistaminen, voiko WordPress asettaa evästeitä',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Tarkistaa selaimen evästetuen; välttämätön',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Tarkistaa, voiko WordPress asettaa evästeitä',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Verkkokaupan salasanan tarkistusarvo; välttämätön',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Palveluntarjoajan tarkistuseväste (tilit ennen 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Tarkistaa, hyväksyykö selain evästeitä (tilit 14.06.2026 alkaen)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Tarkistaa, hyväksyykö selain evästeitä (tilit ennen 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Tarkistaa, hyväksyykö selain evästeitä (palveluntarjoajan mukaan vain Internet Explorerissa)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Pyyntömäärän rajoitus HubSpotin CDN-palveluntarjoajalla',
    'Reichweiten- und Nutzungsmessung'
        => 'Kävijä- ja käyttömittaus',
    'Reichweitenmessung'
        => 'Kävijämittaus',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Vimeon tekemä upotettujen videoiden kävijämittaus',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Kävijämittaus verkkokaupan ylläpitäjälle',
    'Remarketing und Zielgruppenbildung'
        => 'Uudelleenmarkkinointi ja kohderyhmien muodostaminen',
    'Retargeting'
        => 'Uudelleenkohdennus',
    'Retargeting von Website-Besuchern'
        => 'Sivuston kävijöiden uudelleenkohdennus',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Riskianalyysi ihmisen ja botin erottamiseksi',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Kokoomaeväste, palveluntarjoajan mukaan luodaan vain Safari-selaimessa (tilit 14.06.2026 alkaen)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Kokoomaeväste, palveluntarjoajan mukaan luodaan vain Safari-selaimessa (tilit ennen 14.06.2026)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Spotifyn ja kolmansien osapuolten suorittama tietojen kerääminen näiden käyttäjien selauskäyttäytymisestä',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Kytkin, jonka sivuston ylläpitäjä asettaa itse estääkseen Klaviyo-seurannan',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Jäsenkirjautumisen suojaus väärentämistä vastaan',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Lomakkeiden suojaus automatisoidulta väärinkäytöltä',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Suojaus automatisoiduilta pyynnöiltä (roskaposti, credential stuffing)',
    'Sicherheit'
        => 'Tietoturva',
    'Sicherheitsfunktionen'
        => 'Tietoturvatoiminnot',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Tietoturvatoiminnot, kun valinnainen User Journeys -toiminto on käytössä',
    'Sitzung'
        => 'Istunto',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Istunnon sekä kielen tai maan kohdistus',
    'Sitzungsaufzeichnung'
        => 'Istunnon tallennus',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Istuntotunniste tapahtumien analysointiin sivuilla, joilla on widget',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Istuntotunniste verkkokaupan tilastoja varten; tilastointi',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Answer Bot -palvelun istuntoavain',
    'Sitzungswiedergabe'
        => 'Istunnon toisto',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Tallentaa todennustunnisteen kirjautumisen jälkeen',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Tallentaa koodatun salasanan salasanasuojattuja videoita varten',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Tallentaa valitun kielen avaimen',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Tallentaa kävijän tietosuojavalinnan; välttämätön',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Tallentaa kävijän suostumuspäätöksen',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Tallentaa kävijän laitetunnisteen chat-widgetin todennusta varten',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Tallentaa webinaariin ilmoittautuneen käyttäjän tunnisteen',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Tallentaa klikkaustunnisteen fbclid, jotta sivuston tapahtuma voidaan kohdistaa mainokseen',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Tallentaa käyttäjätunnisteen videota edeltävästä rekisteröitymislomakkeesta',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Tallentaa TikTokin klikkaustunnisteen konversioiden kohdistamista varten',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Tallentaa yksilöivän kävijätunnisteen tunnistamista varten',
    'Speichert die zugestimmten Kategorien'
        => 'Tallentaa hyväksytyt luokat',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Syöttää tiedot viimeksi katseltujen tuotteiden widgetiin',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Ohjaa, uusitaanko MUID-tunniste; palveluntarjoajan mukaan kolmannen osapuolen eväste',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Teknisesti välttämätön sivuston toiminnan ja tietoturvan kannalta.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Sisältää verkkokaupan istunto- ja kassatiedot; palveluntarjoaja luokittelee välttämättömäksi',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Sisältää vastustamistoiminnon (opt-out)',
    'Transaktionssicherheit'
        => 'Maksutapahtumien turvallisuus',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Sisältää reCAPTCHAn riskianalyysin.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Sivuston tapahtumien välittäminen TikTokille',
    'Umfragen'
        => 'Kyselyt',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Estää tietojen välittämisen HubSpotille',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Estää chatin tervetuloviestin näyttämisen sulkemisen jälkeen',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Erottaa selaimet, jotka avaavat Microsoftin sivuja; suostumuksella myös mainontaan',
    'Unterscheidet einzelne Nutzer.'
        => 'Erottaa yksittäiset käyttäjät.',
    'Unterscheidung einzelner Nutzer'
        => 'Yksittäisten käyttäjien erottaminen',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Ihmisen ja botin erottaminen lomakkeissa ja kirjautumisissa',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Yhdistää useita sivunäyttöjä yhdeksi istuntotallenteeksi',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Estää bannerin jatkuvan näyttämisen tiukassa tilassa',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Suostumussignaalien välittäminen Google-tageille',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Säilössä määritettyjen tagien suostumuspäätöksen hallinta',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Mittauksen vastustamisen hallinta',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Mittauksen vastustamisen ja suostumuksen hallinta',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Google on luokitellut sen luokkiin Tilastointi ja Mainonta.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Google on luokitellut luokkiin analytiikka, mainonta ja tietoturva.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Google on luokitellut sen luokkiin Toiminnallisuus, Mainonta ja Tietoturva.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Google on luokitellut luokkiin tietoturva ja toiminnallisuus.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Google on luokitellut luokkiin tietoturva ja mainonta.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Google on luokitellut luokkiin tietoturva, analytiikka, toiminnallisuus ja mainonta.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Google on luokitellut sen luokkiin Tietoturva, Toiminnallisuus ja Mainonta.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Google on luokitellut luokkiin mainonta ja tietoturva.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Google on luokitellut luokkaan analytiikka; tarkempaa tarkoitusta Google ei ilmoita.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Google on luokitellut luokkaan toiminnallisuus.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Google on luokitellut luokkaan tietoturva.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Google on luokitellut luokkaan mainonta.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Microsoft mainitsee sen yhtenä evästeistä, joita ei saa asettaa ilman suostumusta; omaa tarkoituskuvausta Microsoft ei ilmoita',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Vimeon luoma tunniste kävijämittausta varten',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Ostoskorin valuutta kassan päätyttyä; välttämätön',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Selaimen todennäköisyyteen perustuva yhdistäminen henkilöön',
    'Warenkorb einer Besucherin zuordnen'
        => 'Ostoskorin kohdistaminen kävijälle',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Verkkosivun osoitteen esitäyttö kommenttilomakkeessa',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Katsojan tunnistaminen mainontaa varten',
    'Werbepersonalisierung'
        => 'Mainonnan personointi',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Kuten _pin_unauth, mutta kolmannen osapuolen evästeenä',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Kävijän tunnistaminen varausprosessin aikana',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Kävijän tunnistaminen sivunäyttöjen ja välilehtien välillä',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Sivuston kävijöiden tunnistaminen ja yksilöinti',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Kävijöiden tunnistaminen useiden käyntien välillä',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Liitettyjen sivustojen kävijöiden tunnistaminen uudelleenkohdennusta varten',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Palaavien kävijöiden tunnistaminen ja aiempien keskustelujen yhdistäminen',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Kävijän tunnistaminen ja hänen ominaisuuksiensa tallentaminen',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Selaimen tunnistaminen Criteo-tunnisteen avulla',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Käyttäjän tunnistaminen; vain suostumuksella, oletuksena estetty',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Selaimen tunnistaminen myöhemmillä käynneillä suostumuksen jälkeen',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Kävijöiden tunnistaminen ja kohdistaminen istuntoihin',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'LinkedIn-jäsenten tunnistaminen LinkedInin ulkopuolella mainontaa varten',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Käyttäjien tunnistaminen suostumuksen jälkeen',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Palaavien kävijöiden tunnistaminen kävijätunnisteen avulla',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Asetetaan, kun kampanjan tavoite on laukaistu (tilit 14.06.2026 alkaen)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Asetetaan, kun kampanjan tavoite on laukaistu (tilit ennen 14.06.2026)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Asetetaan, kun henkilö vierailee sivustolla, johon on lisätty Pinterest-tagi',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Asetetaan, kun kohdistus onnistuu ilman olemassa olevia evästeitä, esimerkiksi Enhanced Matchin kautta',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Asetetaan JavaScript-tagilla tiedoista, jotka Pinterest välittää mainostetun liikenteen mukana',
    'Zaehlt und begrenzt Sitzungen'
        => 'Laskee ja rajoittaa istuntoja',
    'Zahlungsabwicklung'
        => 'Maksujen käsittely',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Ilmaisee, onko istunto yhä käynnissä vai uusi',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Ilmaisee käyttöliittymälle, että käyttäjä on kirjautunut ja kenenä',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Satunnainen selaintunniste, joka kohdistaa sivuston pikselitapahtumat yhteen selaimeen',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Viimeksi katseltujen tuotteiden näyttäminen niille tarkoitetussa widgetissä',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Sivustolla tapahtuvan käyttäytymisen kohdistaminen profiiliin',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Käynnin alkuperän kohdistaminen (viittaava sivu, attribuutio)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Kävijän yhdistäminen Brevo-tilin kontaktiin sähköpostiosoitteen avulla',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Tapahtumien, kuten liidien ja myyntien, kohdistaminen julkaisijalle',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Sivuston toimintojen kohdistaminen aiemmin nähtyihin mainoksiin',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Useiden sivunäyttöjen yhdistäminen yhdeksi istunnoksi',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Lisätiedot käyntihistoriaan tallennetuista tapahtumista',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Muunnelman määrittäminen ja säilyttäminen useiden käyntien ajan',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Välimuisti CSS-valitsimiin perustuville tapahtumille',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Välimuisti Messenger- ja kävijätiedoille selaimen muistissa',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Välimuisti Tag Managerin merkinnöille',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Välimuisti vierityssyvyyden mittaukselle',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Välimuisti Tag Managerin muuttujille',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Välimuisti widgetin asetuksille, jotta toistuvilta palvelinpyynnöiltä vältytään',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Messenger- ja kävijätietojen välimuistiin tallentaminen selaimessa',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Laskee kävijälle luodut istunnot (tilit 14.06.2026 alkaen)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Laskee, kuinka monta kertaa selain suljettiin ja avattiin uudelleen mittauksen aikana (tilit ennen 14.06.2026)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Sivunäyttöjen ja käyntien laskenta',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'käyttäjien käyttäytymisen automatisoidut analyysit',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'karkea maantieteellinen sijoitus maan, alueen ja kaupungin tarkkuudella',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'valinnaisesti istunnon tallennus (Session Replay), oletuksena tekstit, kuvat ja syötteet peitettyinä',
    'optional Heatmaps und A/B-Tests'
        => 'valinnaisesti lämpökartat ja A/B-testit',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Välittää viittaavan lähteen split-URL-testeissä (tilit 14.06.2026 alkaen)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Välittää viittaavan lähteen split-URL-testeissä (tilit ennen 14.06.2026)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Tapahtumien, kuten liidien ja myyntien, kohdistaminen julkaisijalle, Mainoksen tuloksellisuuden mittaus ja provision laskutus',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Kävijöiden ja sivunlatausten kerääminen sivustolla markkinoinnin automaatiota varten, Kävijän yhdistäminen Brevo-tilin kontaktiin sähköpostiosoitteen avulla, Ylläpitäjän määrittelemien omien tapahtumien kerääminen',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Varauskalenterin näyttäminen ja aikojen varaaminen sivustolla, Kävijän tunnistaminen varausprosessin aikana, Maksujen käsittely, kun varattava aika on maksullinen',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Automatisoitujen lomakekäyntien tunnistaminen ja torjuminen, Sellaisen tokenin myöntäminen, jonka sivuston palvelin tarkistaa, Pre-Clearance-tilassa: hyväksyntä saman vyöhykkeen seuraaviin WAF-tarkistuksiin',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Sivunäyttöjen ja käyntien mittaus, Sivun latausajan ja ydinmittarien mittaus (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Personoidun mainonnan toimittaminen, Mainonnan vaikutuksen mittaus, Selaimen tunnistaminen Criteo-tunnisteen avulla',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Käyttökäyttäytymisen mittaus sivustolla, Pseudonyymien käyttöprofiilien muodostaminen suostumuksen jälkeen, Selaimen tunnistaminen myöhemmillä käynneillä suostumuksen jälkeen',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Sivunäyttöjen ja käyttökäyttäytymisen mittaus, Vierityssyvyyden ja klikkaustapahtumien mittaus, Käyttäjien tunnistaminen suostumuksen jälkeen, Mittauksen vastustamisen hallinta',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Ihmisen ja botin erottaminen lomakkeissa ja kirjautumisissa, Suojaus automatisoiduilta pyynnöiltä (roskaposti, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Konversioiden mittaus, Uudelleenmarkkinointi ja kohderyhmien muodostaminen, Näyttökertojen rajoittaminen, Klikkipetosten tunnistaminen',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Mainosten toimittaminen, Näyttökertojen rajoittaminen, Petosten ja väärinkäytön tunnistaminen, Näyttökertojen ja klikkausten mittaus',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Yksittäisten käyttäjien erottaminen, Istunnon tilan säilyttäminen, Kävijä- ja käyttömittaus',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Vuorovaikutteisen kartan näyttäminen, Googlen tekemä palvelun saatavuuden mittaus',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Riskianalyysi ihmisen ja botin erottamiseksi, Lomakkeiden suojaus automatisoidulta väärinkäytöltä',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Tagien toimittaminen ja hallinta sivustolla, Suostumussignaalien välittäminen Google-tageille',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Ihmisen ja botin erottaminen lomakkeissa ja kirjautumisissa, Challenge-pyyntöjen kuormanjako ja reititys, Saavutettavuustoiminnon tarjoaminen',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Lämpökartat, Istunnon tallennus, Kyselyt',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Kävijöiden tunnistaminen useiden käyntien välillä, Istuntojen mittaaminen ja käynnin lähteen kohdistaminen, Yhteystietojen kaksoiskappaleiden poistaminen, Chat-widgetin toiminta, A/B-testin muunnelmien johdonmukainen näyttäminen',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Live-chat ja tukipostilaatikko sivustolla, Palaavien kävijöiden tunnistaminen ja aiempien keskustelujen yhdistäminen, Laitteen tunnistaminen väärinkäytön torjumiseksi, Messenger- ja kävijätietojen välimuistiin tallentaminen selaimessa',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Rahoitus- ja osamaksuilmoitusten näyttäminen tuote- ja ostoskorisivuilla (On-site Messaging), Ilmoitussisältöjen toimittaminen sivun lähdekoodiin valmisteltuihin paikkoihin mainospalvelimen kautta',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Sivuston kävijöiden tunnistaminen ja yksilöinti, Sivustolla tapahtuvan käyttäytymisen kohdistaminen profiiliin, Ilmoittautumislomakkeiden ohjaus sivustolla',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Konversioseuranta LinkedIn-mainoskampanjoille, Sivuston kävijöiden uudelleenkohdennus, Sivuston kohderyhmän analysointi (sivuston demografia)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Liitettyjen sivustojen kävijöiden tunnistaminen uudelleenkohdennusta varten, Ponnahduslomakkeiden ohjaus, jotta ne eivät ilmesty toistuvasti, Sähköpostikampanjoiden avausten ja klikkausten mittaaminen, Googlen ja Facebookin mainospikselien liittäminen yhdistetylle sivustolle',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Vuorovaikutteisten karttojen esittäminen sivustolla, Karttaruutujen, fonttien ja tyylien lataaminen palveluntarjoajalta, Karttahakujen laskutus ja suojaus',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Sivunäyttöjen, käyntien ja istuntojen mittaus, Palaavien kävijöiden tunnistaminen kävijätunnisteen avulla, Käynnin alkuperän kohdistaminen (viittaava sivu, attribuutio), valinnaisesti lämpökartat ja A/B-testit',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Sivunäyttöjen, käyntien ja istuntojen mittaus omalla palvelimella, Palaavien kävijöiden tunnistaminen kävijätunnisteen avulla, Käynnin alkuperän kohdistaminen (viittaava sivu, attribuutio), valinnaisesti lämpökartat ja A/B-testit',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Tagien toimittaminen ja laukaiseminen sivustolla, Säilössä määritettyjen tagien suostumuspäätöksen hallinta',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Mainoskampanjoiden ja konversioiden mittaus sivustolla, Kohderyhmien muodostaminen ja uudelleenkohdentaminen',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Konversioseuranta Microsoft Advertising -kampanjoille, Uudelleenmarkkinointilistojen muodostaminen, Sivunäyttöjen ja mukautettujen tapahtumien mittaus',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Istuntojen tallentaminen ja toistaminen, Klikkausten ja vieritystoiminnan lämpökartat, Useiden sivunäyttöjen yhdistäminen yhdeksi istunnoksi, käyttäjien käyttäytymisen automatisoidut analyysit',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Kävijän käynnistämän maksun käsittely, Korttikenttien upottaminen omaan kassaan, jotta korttitiedot eivät kulje verkkokaupan kautta, Petosten torjunta ja lakisääteiset velvoitteet maksupalveluntarjoajana',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Hiiren liikkeiden tallentaminen, Istunnon toisto, Käyttäytymisen analysointi',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Karttaruutujen toimittaminen upotettuihin karttoihin, Karttapalveluiden toiminta ja väärinkäytön torjunta',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Maksujen käsittely, Petosten torjunta',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Konversioseuranta Pinterest-mainoskampanjoille, Kohderyhmien muodostaminen ja uudelleenkohdentaminen, Sivuston toimintojen kohdistaminen aiemmin nähtyihin mainoksiin',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Sivunäyttöjen ja tapahtumien mittaus, Kävijöiden tunnistaminen ja kohdistaminen istuntoihin, Alkuperän ja kampanjoiden analysointi, Laitteen, selaimen ja arvioidun sijainnin analysointi, Verkkokaupan ja tavoitteiden analysointi',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Sivunäyttöjen ja käyntien laskenta, Viittaavien lähteiden analysointi, Selaimen, käyttöjärjestelmän ja laitetyypin analysointi, karkea maantieteellinen sijoitus maan, alueen ja kaupungin tarkkuudella',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Sovellusvirheiden kerääminen ja välittäminen selaimesta, valinnaisesti istunnon tallennus (Session Replay), oletuksena tekstit, kuvat ja syötteet peitettyinä',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Verkkokaupan ostoskorin ja maksuprosessin toiminta, Istunnon sekä kielen tai maan kohdistus, Kävijämittaus verkkokaupan ylläpitäjälle, Ostoliittymien markkinointitiedot',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Kappaleiden, albumien, soittolistojen ja podcast-jaksojen upottaminen ja toistaminen, Spotifyn ja kolmansien osapuolten suorittama tietojen kerääminen näiden käyttäjien selauskäyttäytymisestä, Mahdollistavat sen, että kolmannet osapuolet asettavat evästeitä näiden käyttäjien selaimeen',
    'Besucherzählung, Reichweitenmessung'
        => 'Kävijälaskenta, Kävijämittaus',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Petosten tunnistaminen ja maksuyritysten riskiarviointi, Stripe Elementsin maksukenttien tarjoaminen, Bottien ja automatisoidun toiminnan tunnistaminen tilausprosessissa',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Mainoskampanjoiden tehon mittaaminen ja parantaminen, Mainonnan personointi TikTokissa, Sivuston tapahtumien välittäminen TikTokille',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Lomakkeiden ja kyselyiden upottaminen sivustolle, Vastausten kerääminen ja välittäminen lomakkeen ylläpitäjälle',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Videoiden upottaminen ja toistaminen sivustolla, Katsojan soitinasetusten muistaminen (äänenvoimakkuus, laatu, tekstitys), Vimeon tekemä upotettujen videoiden kävijämittaus, Bottien ja väärinkäytön torjunta soittimessa',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'A/B-testit ja Split URL -testit sivustolla, Muunnelman määrittäminen ja säilyttäminen useiden käyntien ajan, Kampanjan tavoitteiden ja konversioiden mittaus, Kävijöiden ja istuntojen mittaus analyysejä varten, Mittauksen vastustamisen ja suostumuksen hallinta',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Ostoskorin kohdistaminen kävijälle, Sen tunnistaminen, onko ostoskorin sisältö muuttunut, Viimeksi katseltujen tuotteiden näyttäminen niille tarkoitetussa widgetissä, Verkkokaupan ilmoituksen piilottamisen muistaminen',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Kirjautuminen ja istunnon tunnistus hallintaosiossa, Kommenttitietojen säilyttäminen seuraavia kommentteja varten, Hallintaosion näkymäasetusten muistaminen, Sen tarkistaminen, voiko WordPress asettaa evästeitä, Valitun kielen tallentaminen',
    'Conversion-Messung, Retargeting'
        => 'Konversioiden mittaus, Uudelleenkohdennus',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Upotettujen videoiden toistaminen, Tietoturva, Katsojan tunnistaminen mainontaa varten',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Live-chat ja viestikanava sivuston asiakastukea varten, Kävijän tunnistaminen sivunäyttöjen ja välilehtien välillä, Widgetin tilan ja asetusten muistaminen, Istuntojen ja tapahtumien mittaaminen sivuilla, joilla on widget',
];
