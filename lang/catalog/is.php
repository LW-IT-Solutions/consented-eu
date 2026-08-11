<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Islaendisch.
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
        => 'A/B-prófanir og split-URL-prófanir á vefsíðunni',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Gjaldfærsla og vernd kortakalla',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Lok innskráningar með Shop; nauðsynlegt',
    'Abspielen eingebetteter Videos'
        => 'Spilun innfelldra myndbanda',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Vinnsla greiðslu sem gesturinn hefur sett af stað',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Vinnsla greiðslna þegar tíminn er gjaldskyldur',
    'Analyse des Nutzungsverhaltens'
        => 'Greining á notkunarhegðun',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Greiningargögn kaupviðmótanna; greining',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Greiningargögn vefverslunarinnar; skráð af þjónustuaðilanum sem greining',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Innskráningarupplýsingar fyrir stjórnsvæðið á /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Innskráning í Shop Pay; nauðsynlegt',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Innskráning og auðkenning vafralotu á stjórnsvæðinu',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Nafnlaus tölfræði um þjónustuna og aðrir tæknilegir tilgangar, meðal annars stuðningur við aðgengi',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Birtingarstillingar stjórnsvæðisins fyrir hvern aðgang',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Muna birtingarstillingar stjórnsvæðisins',
    'Anzeige von Bewertungen'
        => 'Birting umsagna',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Birting bókunardagatals og pöntun tíma á vefsíðunni',
    'Anzeigen einer interaktiven Karte'
        => 'Birting gagnvirks korts',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'Sé hún sett á gildið 1 kemur hún í veg fyrir að UET-atburðir séu sendir til Microsoft',
    'Aufbau von Remarketing-Listen'
        => 'Uppbygging remarketing-lista',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Upptaka og endurspilun vafralota',
    'Aufzeichnung von Mausbewegungen'
        => 'Upptaka músarhreyfinga',
    'Ausblenden des Shop-Hinweises merken'
        => 'Muna að tilkynning vefverslunarinnar hafi verið falin',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Afhending og ræsing merkja á vefsíðunni',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Afhending og umsjón merkja á vefsíðunni',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Afhending kortflísa í innfelld kort',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Afhending tilkynningarefnisins í tilbúin staðgengilssvæði í frumkóða síðunnar um auglýsingaþjón',
    'Auslieferung personalisierter Werbung'
        => 'Afhending sérsniðinna auglýsinga',
    'Auslieferung von Anzeigen'
        => 'Afhending auglýsinga',
    'Auslieferung von Bibliotheken und Assets'
        => 'Afhending safna og aðfanga',
    'Auslieferung von Schriftarten'
        => 'Afhending leturgerða',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Útgáfa á token sem þjónn vefsíðunnar sannreynir',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Stýring skráningareyðublaða á vefsíðunni',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Stýring sprettigluggaeyðublaða svo að þau birtist ekki aftur og aftur',
    'Auswahl des Rechenzentrums'
        => 'Val á gagnaveri',
    'Auswertung der Verweisquellen'
        => 'Greining á tilvísunarheimildum',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Greining á markhópi vefsíðunnar (lýðfræði vefsíðunnar)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Greining á vafra, stýrikerfi og gerð tækis',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Greining á tæki, vafra og áætlaðri staðsetningu',
    'Auswertung von Herkunft und Kampagnen'
        => 'Greining á uppruna og herferðum',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Auðkennir beiðnir endanotandans',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Takmörkun á birtingartíðni',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Staðfestir að prófun hafi verið staðin svo að frekari challenges á svæðinu falli niður',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Framboð á greiðslureitum Stripe Elements',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Framboð á aðgengisviðmótinu',
    'Besucherzählung'
        => 'Talning gesta',
    'Betrieb des Chat-Widgets'
        => 'Rekstur spjallgræjunnar',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Rekstur kortaþjónustanna og varnir gegn misnotkun',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Rekstur körfu og greiðsluferlis vefverslunar',
    'Betrugs- und Missbrauchserkennung'
        => 'Greining svika og misnotkunar',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Greining svika við greiðslutilraunina',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Greining svika og áhættumat greiðslutilrauna',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Varnir gegn svikum og lagaskyldur sem greiðsluþjónustuveitandi',
    'Betrugsprävention'
        => 'Varnir gegn svikum',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Varnir gegn svikum og áhættumat á greiðslutilraun',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Myndun gerviauðkenndra notkunarsniða eftir samþykki',
    'Bildung von Zielgruppen und Retargeting'
        => 'Myndun markhópa og retargeting',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Bindur vafralotuna við sama AWS-tilvik',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Vörn gegn vélmennum og misnotkun fyrir spilarann',
    'Bot-Abwehr fuer den Player'
        => 'Vörn gegn vélmennum fyrir spilarann',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Vélmennavörn við afhendingu HubSpot-aðfanga',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Auðkenni vafra sem LinkedIn notar til að greina á milli tækja og finna misnotkun',
    'Cloudflare-Bot-Abwehr'
        => 'Vélmennavörn Cloudflare',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Vélmennagreining Cloudflare til að sía umferð',
    'Cloudflare-Ratenbegrenzung'
        => 'Hraðatakmörkun Cloudflare',
    'Conversion-Messung'
        => 'Umbreytingamæling',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Umbreytingarakning fyrir auglýsingaherferðir á LinkedIn',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Umbreytingarakning fyrir Microsoft Advertising-herferðir',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Umbreytingarakning fyrir auglýsingaherferðir á Pinterest',
    'Darstellung interaktiver Karten auf der Website'
        => 'Birting gagnvirkra korta á vefsíðunni',
    'Deduplizieren von Kontakten'
        => 'Sameining tvítekinna tengiliða',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Notað til að birta og mæla auglýsingar.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'Auðkenni gests þvert á lén; að sögn þjónustuaðilans vefkaka þriðja aðila, aðeins notuð þegar vefkökur þriðja aðila eru virkjaðar í stillingaskránni',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Auðkenni þriðja aðila til endurþekkingar gesta',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Auðkenni þriðja aðila sem er miðlað áfram til Klaviyo',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Auglýsingaauðkenni þriðja aðila til mælingar á herferðum og til sérsniðs á TikTok',
    'E-Commerce- und Zielauswertung'
        => 'Greining á rafrænum viðskiptum og markmiðum',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Forútfylling netfangs úr athugasemdaeyðublaðinu',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Innfelling og spilun laga, platna, lagalista og hlaðvarpsþátta',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Innfelling og spilun myndbanda á vefsíðunni',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Innfelling eyðublaða og kannana á vefsíðuna',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Innfelling kortareitanna í eigin greiðsluferli svo að kortaupplýsingar fari ekki um vefverslunina',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Innfelling vefkökuyfirlýsingar sem er viðhaldið annars staðar',
    'Einbettung von Audioinhalten'
        => 'Innfelling hljóðefnis',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Innfelling auglýsingapixla frá Google og Facebook á tengdu vefsíðunni',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Birting upplýsinga um fjármögnun og afborganir á vöru- og körfusíðum (on-site messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Einkvæmt auðkenni við mælingu þvert á lén (aðgangar frá og með 14.06.2026)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Einkvæmt auðkenni við mælingu þvert á lén (aðgangar frá því fyrir 14.06.2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Einnota gildi gegn CSRF í afþökkunareyðublaðinu',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Inniheldur notandaauðkenni og tímann þegar það var búið til; samkvæmt heimildinni sett í innbyggðum vafra Pinterest, ekki á léni vefsíðunnar',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Söfnun svaranna og sending þeirra til rekstraraðila eyðublaðsins',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Skráir notkun vefsíðunnar í greiningarskyni.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Söfnun eigin atburða sem rekstraraðilinn hefur skilgreint',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Söfnun og sending forritsvillna úr vafranum',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Söfnun gesta og síðuflettinga á vefsíðunni fyrir markaðssjálfvirkni',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Árangursmæling auglýsingaefnis og uppgjör þóknunar',
    'Erhalt des Sitzungszustands'
        => 'Varðveisla stöðu vafralotunnar',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Auðkenning tækis til varnar gegn misnotkun',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Greining og höfnun sjálfvirkra fyrirspurna á eyðublöð',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Greining vélmenna og sjálfvirkrar hegðunar í pöntunarferlinu',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Greining á því hvort innihald körfunnar hafi breyst',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Skynjar breytingar á innihaldi körfunnar',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Þekkir gesti vefsíðunnar þar sem Intercom-kóðinn er innbyggður',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Þekkir vafra aftur á vefsvæðum Microsoft; að sögn þjónustuaðilans einnig notuð fyrir auglýsingar, vefkaka þriðja aðila',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Þekkir aftur fólk sem skrifar í gegnum spjallverkfærið',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Þekkir tækið sem samtalið kemur frá',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Þekkir einstaka tækið sem á samskipti við Messenger, til varnar gegn misnotkun',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Þekkir endanotandann sem hefur samtalið',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Þekkir lénið eða undirlénið þar sem spjallgræjan er innbyggð',
    'Erkennt wiederkehrende Besucher'
        => 'Þekkir endurkomna gesti',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Skynjar hvort vafrinn hafi verið endurræstur',
    'Erkennung von Klickbetrug'
        => 'Greining á smellasvikum',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Finnur einkvæmar heimsóknir á vefsíðuna (aðgangar frá og með 14.06.2026)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Finnur einkvæmar heimsóknir á vefsíðuna (aðgangar frá því fyrir 14.06.2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Gera þriðju aðilum kleift að setja vefkökur í vafra þessara notenda',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Gerir kleift að nota aðgengisviðmótið',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Gerir viðbótarvirkni vefsíðunnar mögulega.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Auðkenni fyrsta aðila sem þekkir gesti og tengir atburði við vefsíðuna',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Gestaauðkenni fyrsta aðila fyrir umbreytingarakningu og remarketing',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Vafralotuauðkenni fyrsta aðila til að tengja atburði',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Vafralotuauðkenni fyrsta aðila fyrir hvern pixil til mælingar herferða',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Vafralotuauðkenni fyrsta aðila til mælingar herferða',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Auglýsingaauðkenni fyrsta aðila til mælingar á herferðum og til sérsniðs á TikTok',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Vefkaka fyrsta aðila sem hópar saman aðgerðir gesta sem Pinterest getur ekki rakið',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Vefkaka fyrsta aðila sem geymir tætt viðskiptavinagögn sem safnað er með Automatic Enhanced Match',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Býr til einkvæmt auðkenni fyrir hvern gest (aðgangar frá og með 14.06.2026)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Býr til einkvæmt auðkenni fyrir hvern gest (aðgangar frá því fyrir 14.06.2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Tækjaauðkenni til greiningar á atburðum á síðum með græju',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Sett við innskráningu á síðu sem HubSpot hýsir',
    'Gewaehlte Sprache speichern'
        => 'Vista valið tungumál',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Samstillir MUID-auðkennið þvert á lén Microsoft; að sögn þjónustuaðilans vefkaka þriðja aðila',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Heldur skilaboðum samstilltum milli margra flipa',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Geymir gildi færibreytunnar pk_campaign',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Geymir gildi færibreytunnar utm_campaign',
    'Haelt den Widerspruch gegen die Messung'
        => 'Geymir andmælin við mælingunni',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Geymir hvenær _uetsid rennur út',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Geymir hvenær _uetvid rennur út',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Geymir tegund umferðaruppsprettu fyrir Tag Manager',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Skráir auðkenni gestsins, einnig til að sameina tvítekna tengiliði',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Skráir ákvörðun gestsins um vefkökur',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Heldur útliti græjunnar samræmdu þegar skipt er um síðu',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Skráir upphafssíðuna; greining',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Geymir samþykki fyrir mælingu með vefkökum',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Geymir ákvörðun notandans um flokka og þjónustuaðila',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Geymir vafralotu innskráðra notenda og aðgang að fyrri samtölum',
    'Haelt die verweisende Adresse'
        => 'Geymir tilvísandi vistfangið',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Skráir tilvísandi upprunann; greining',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Geymir eigin breytur vafralotunnar (merkt úrelt af þjónustuaðilanum)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Skráir hvort etracker megi setja vefkökur; er sett með API-kalli þegar data-block-cookies er notað',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Skráir hvaða virknirofa eigandi myndbandsins hefur virkjað',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Aðalvefkaka til endurþekkingar gesta',
    'Heatmaps'
        => 'Hitakort',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Hitakort yfir smelli og skrunhegðun',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Geymir vafralotugögn hitakorts á meðan heimsóknin stendur',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Geymir upplýsingar um yfirstandandi vafralotu (aðgangar frá og með 14.06.2026)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Geymir upplýsingar um yfirstandandi vafralotu (aðgangar frá því fyrir 14.06.2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Geymir sérsniðnar breytur á meðan heimsóknin stendur',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Geymir varanleg gögn á gestastigi (aðgangar frá og með 14.06.2026)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Geymir varanleg gögn á gestastigi fyrir Insights-greininguna (aðgangar frá því fyrir 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Skráir samþykkisstöðu gestsins (aðgangar frá og með 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Skráir samþykkisstöðu gestsins (aðgangar frá því fyrir 14.06.2026)',
    'Hält den Sitzungszustand.'
        => 'Geymir stöðu vafralotunnar.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Geymir Clarity-notandaauðkennið og stillingar fyrir þessa vefsíðu',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Geymir úthlutun tilbrigðis fyrir A/B-prófanir',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Geymir valda samsetningu tímabundið (aðgangar frá og með 14.06.2026)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Geymir valda samsetningu tímabundið (aðgangar frá því fyrir 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Skráir valið tilbrigði áður en áframsending á sér stað (aðgangar frá og með 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Skráir valið tilbrigði áður en áframsending á sér stað (aðgangar frá því fyrir 14.06.2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Skráir hvaða tilvísun leiddi til heimsóknarinnar',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Í stillingunni Pre-Clearance: heimild fyrir frekari WAF-athuganir á sama svæði',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Óbeint auðkenni félaga fyrir umbreytingamælingu, retargeting og greiningu',
    'Inhalt des Warenkorbs; notwendig'
        => 'Innihald körfunnar; nauðsynlegt',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Greiningargögn tengd kaupanda í versluninni; tölfræði',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Einkvæmt auðkenni tengt herferð (reikningar frá 14.06.2026)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Auðkenni fyrstu snertingar við Clarity á öllum Clarity-vefsíðum; að sögn þjónustuaðilans vefkaka þriðja aðila',
    'Kennzeichnet die laufende Sitzung'
        => 'Auðkennir yfirstandandi vafralotu',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Geyma athugasemdagögn fyrir frekari athugasemdir',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Samræmd birting á A/B-prófunarafbrigðum',
    'Lastverteilung und Routing'
        => 'Álagsdreifing og beining',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Álagsdreifing og beining á challenge-fyrirspurnum',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Vistar reikningsstillingar gestsins staðbundið',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Skilar sama afbrigði af A/B-prófunarsíðu',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Beint spjall og skilaboðarás fyrir aðstoð á vefsíðunni',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Beint spjall og pósthólf þjónustuvers á vefsíðunni',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Markaðsgögn kaupviðmótanna; markaðssetning',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Markaðsgögn fyrir kaupviðmót',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Muna spilarastillingar áhorfandans (hljóðstyrk, gæði, skjátexta)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Muna stöðu og stillingar widgetsins',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Man að lokað hafi verið á Global Privacy Control-borðann',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Man að lokað hafi verið á tilkynningaborðann',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Man tímann þegar samstillt var við vefkökuna lms_analytics',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Man hvenær síðasta auðkennissamstilling fór fram svo hún endurtaki sig ekki',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Man úthlutað afbrigði (reikningar frá 14.06.2026)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Man úthlutað afbrigði svo það haldist óbreytt við endurkomu (reikningar fyrir 14.06.2026)',
    'Merkt einen Rabattcode; notwendig'
        => 'Man afsláttarkóða; nauðsynlegt',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Man andmæli við mælingunni (reikningar frá 14.06.2026)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Man andmæli sem gilda þvert á vefsíður (reikningar fyrir 14.06.2026)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Man spilarastillingar á borð við hljóðstyrk, gæði og skjátexta',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Man stillinguna fyrir hljóðtilkynningar',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Man eftir veittu samþykki fyrir mælingunni',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Man eftir andmælum við mælingunni',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Man frumkvæðisskilaboð sem hefur verið lokað',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Man að gesturinn hafi lokað merkingunni á ræsihnappnum',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Man hvort widgetið er opið eða lokað',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Man að gesturinn eigi ekki að taka þátt í neinni herferð (reikningar fyrir 14.06.2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Man að gesturinn sé undanskilinn herferðinni (reikningar frá 14.06.2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Man að gesturinn sé undanskilinn herferðinni (reikningar fyrir 14.06.2026)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Man að samþykkistilkynningunni hafi verið lokað',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Man að verslunartilkynningunni hafi verið lokað',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Man að ekki eigi að spyrja aftur um vefkökur',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Man að tag hafi þegar verið sent af stað',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Man hvort skrunudýpt sé mæld hjá þessum gesti',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Man hvort spjallglugginn er opinn',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Man hvort MUID-auðkennið sé afhent auglýsingaauðkenni; að sögn þjónustuaðilans alltaf 0, vefkaka þriðja aðila',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Mæling á opnunum og smellum í tölvupóstherferðum',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Mæling á vafralotum og atburðum á síðum með widget',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Mæling á vafralotum og tenging heimsóknar við upprunann',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Mæling Google á aðgengi þjónustunnar',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Mæling á hleðslutíma og kjarnamælikvörðum síðunnar (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Mæling á skrunudýpt og smellaatburðum',
    'Messung der Werbewirkung'
        => 'Mæling á áhrifum auglýsinga',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Mæling á notkunarhegðun á vefsíðunni',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Mæling og persónusnið auglýsinga á TikTok Pangle-auglýsinganetinu',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Mæling og bæting á árangri auglýsingaherferða',
    'Messung von Auslieferungen und Klicks'
        => 'Mæling á birtingum og smellum',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Mæling á gestum og vafralotum fyrir greiningar',
    'Messung von Conversions'
        => 'Mæling á umbreytingum',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Mæling á flettingum og heimsóknum',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Mæling á flettingum og atburðum',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Mæling á flettingum og notkunarhegðun',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Mæling á flettingum og sérsniðnum atburðum',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Mæling á flettingum, heimsóknum og vafralotum',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Mæling á flettingum, heimsóknum og vafralotum á eigin netþjóni',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Mæling á auglýsingaherferðum og umbreytingum á vefsíðunni',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Mæling á markmiðum og umbreytingum herferðar',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Sækja kortaflísar, letur og stíla frá þjónustuaðilanum',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Forfylla nafn úr athugasemdaeyðublaðinu',
    'Nutzer-ID'
        => 'Notandaauðkenni',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Tengir körfuna við rétt land; nauðsynlegt',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Tengir körfuna í gagnagrunninum við réttan viðskiptavin',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Tengir aðgerðir heimsóknar við vafralotu',
    'Personalisierung der Werbung auf TikTok'
        => 'Persónusnið auglýsinga á TikTok',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Athuga hvort WordPress geti sett vefkökur',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Athugar hvort vafrinn styðji vefkökur; nauðsynlegt',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Athugar hvort WordPress geti sett vefkökur',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Sannprófunargildi lykilorðs verslunarinnar; nauðsynlegt',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Prófunarvefkaka þjónustuaðilans (reikningar fyrir 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Athugar hvort vafrinn taki við vefkökum (reikningar frá 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Athugar hvort vafrinn taki við vefkökum (reikningar fyrir 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Athugar hvort vafrinn tekur við vefkökum (að sögn þjónustuaðilans aðeins í Internet Explorer)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Hraðatakmörkun hjá CDN-þjónustuaðila HubSpot',
    'Reichweiten- und Nutzungsmessung'
        => 'Umferðar- og notkunarmæling',
    'Reichweitenmessung'
        => 'Umferðarmæling',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Umferðarmæling Vimeo á innfelldu myndböndunum',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Umferðarmæling fyrir rekstraraðila verslunarinnar',
    'Remarketing und Zielgruppenbildung'
        => 'Remarketing og myndun markhópa',
    'Retargeting'
        => 'Retargeting',
    'Retargeting von Website-Besuchern'
        => 'Retargeting á gestum vefsíðunnar',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Áhættugreining til að greina á milli manns og vélmennis',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Safnvefkaka, að sögn þjónustuaðilans aðeins búin til í Safari-vafranum (reikningar frá 14.06.2026)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Safnvefkaka, að sögn þjónustuaðilans aðeins búin til í Safari-vafranum (reikningar fyrir 14.06.2026)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Söfnun upplýsinga um vafrahegðun þessara notenda af hálfu Spotify og þriðju aðila',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Rofi sem rekstraraðili vefsíðunnar setur sjálfur til að stöðva rakningu Klaviyo',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Vörn gegn fölsun við innskráningu félaga',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Vörn eyðublaða gegn sjálfvirkri misnotkun',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Vörn gegn sjálfvirkum fyrirspurnum (ruslpóstur, credential stuffing)',
    'Sicherheit'
        => 'Öryggi',
    'Sicherheitsfunktionen'
        => 'Öryggisaðgerðir',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Öryggisaðgerðir þegar valkvæða aðgerðin User Journeys er virk',
    'Sitzung'
        => 'Vafralota',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Tenging við vafralotu og við tungumál eða land',
    'Sitzungsaufzeichnung'
        => 'Upptaka vafralotu',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Auðkenni vafralotu fyrir greiningu atburða á síðum með widget',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Auðkenni vafralotu fyrir tölfræði verslunarinnar; tölfræði',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Lotulykill Answer Bot-þjónustunnar',
    'Sitzungswiedergabe'
        => 'Endurspilun vafralotu',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Vistar auðkenningartókann eftir innskráningu',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Vistar kóðaða lykilorðið fyrir myndbönd sem varin eru með lykilorði',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Vistar lykil valins tungumáls',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Vistar persónuverndarval gestsins; nauðsynlegt',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Vistar ákvörðun gestsins um samþykki',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Vistar tækjaauðkenni gestsins til auðkenningar í spjall-widgetinu',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Vistar auðkenni notanda sem skráður er á vefnámskeið',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Vistar smellaauðkennið fbclid svo hægt sé að tengja atburð á vefsíðunni við auglýsingu',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Vistar notandaauðkenni úr skráningareyðublaði sem sett er á undan myndbandinu',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Vistar TikTok-smellaauðkennið til að tengja umbreytingar',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Vistar einkvæmt auðkenni gests til endurþekkingar',
    'Speichert die zugestimmten Kategorien'
        => 'Vistar þá flokka sem samþykki hefur verið veitt fyrir',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Fæðir widgetið með nýlega skoðuðum vörum',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Stýrir hvort MUID-auðkennið sé endurnýjað; að sögn þjónustuaðilans vefkaka þriðja aðila',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Tæknilega nauðsynlegt fyrir rekstur og öryggi vefsíðunnar.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Ber vafralotu- og greiðsluferilsgögn verslunarinnar; skráð sem nauðsynlegt af þjónustuaðilanum',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Ber andmælavirknina (opt-out)',
    'Transaktionssicherheit'
        => 'Öryggi færslna',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Ber áhættugreiningu reCAPTCHA.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Sending atburða á vefsíðunni til TikTok',
    'Umfragen'
        => 'Kannanir',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Kemur í veg fyrir sendingu gagna til HubSpot',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Bælir niður velkomuskilaboð spjallsins eftir að þeim hefur verið lokað',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Greinir á milli vafra sem heimsækja Microsoft-síður; með samþykki einnig fyrir auglýsingar',
    'Unterscheidet einzelne Nutzer.'
        => 'Greinir á milli einstakra notenda.',
    'Unterscheidung einzelner Nutzer'
        => 'Aðgreining einstakra notenda',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Aðgreining manns og vélmennis í eyðublöðum og innskráningum',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Tengir margar flettingar í eina upptöku vafralotu',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Kemur í veg fyrir að borðinn birtist sífellt í ströngu stillingunni',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Dreifing samþykkismerkja til Google-tags',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Umsjón með samþykkisákvörðun fyrir þau tags sem stillt eru í containernum',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Umsjón með andmælum við mælingunni',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Umsjón með andmælum og samþykki fyrir mælinguna',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Flokkað af Google undir Greiningu og Auglýsingar.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Google flokkar hana undir flokkana Greining, Auglýsingar og Öryggi.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Flokkað af Google undir Virkni, Auglýsingar og Öryggi.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Google flokkar hana undir flokkana Öryggi og Virkni.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Google flokkar hana undir flokkana Öryggi og Auglýsingar.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Google flokkar hana undir flokkana Öryggi, Greining, Virkni og Auglýsingar.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Flokkað af Google undir Öryggi, Virkni og Auglýsingar.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Google flokkar hana undir flokkana Auglýsingar og Öryggi.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Google flokkar hana undir flokkinn Greining; Google tilgreinir ekki nákvæmari tilgang.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Google flokkar hana undir flokkinn Virkni.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Google flokkar hana undir flokkinn Öryggi.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Google flokkar hana undir flokkinn Auglýsingar.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Nefnd af Microsoft sem ein þeirra vefkaka sem ekki má setja án samþykkis; Microsoft tilgreinir enga eigin lýsingu á tilgangi',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Auðkenni búið til af Vimeo fyrir umferðarmælinguna',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Gjaldmiðill körfunnar eftir að greiðsluferli lýkur; nauðsynlegt',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Líkindatengd tenging vafra við einstakling',
    'Warenkorb einer Besucherin zuordnen'
        => 'Tengja körfu við gest',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Forfylla vefslóð úr athugasemdaeyðublaðinu',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Auðkenning áhorfandans í auglýsingaskyni',
    'Werbepersonalisierung'
        => 'Persónusnið auglýsinga',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Eins og _pin_unauth, en sem vefkaka þriðja aðila',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Þekkja gestinn innan bókunarferlisins',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Þekkja gestinn milli flettinga og flipa',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Þekkja og auðkenna gesti vefsíðunnar',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Þekkja gesti yfir margar heimsóknir',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Þekkja gesti tengdra vefsíðna fyrir retargeting',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Þekkja endurkomandi gesti og tengja fyrri samtöl',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Auðkenning gestsins og geymsla á eiginleikum hans',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Auðkenning vafrans með Criteo-auðkenninu',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Auðkenning notandans; aðeins með samþykki, sjálfgefið lokað',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Auðkenning vafra við síðari heimsóknir að fengnu samþykki',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Auðkenning gesta og tenging við vafralotur',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'Auðkenning LinkedIn-félaga utan LinkedIn í auglýsingaskyni',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Auðkenning notenda að fengnu samþykki',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Endurþekking endurkominna gesta með auðkenni gests',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Er sett þegar markmið herferðar hefur verið virkjað (reikningar frá 14.06.2026)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Er sett þegar markmið herferðar hefur verið virkjað (reikningar fyrir 14.06.2026)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Er sett þegar einstaklingur heimsækir vefsíðu með innbyggt Pinterest-tag',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Er sett þegar tenging tekst án fyrirliggjandi vefkaka, til dæmis með Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Er sett af JavaScript-tagginu út frá upplýsingum sem Pinterest sendir með auglýstri umferð',
    'Zaehlt und begrenzt Sitzungen'
        => 'Telur og takmarkar vafralotur',
    'Zahlungsabwicklung'
        => 'Greiðsluvinnsla',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Sýnir hvort vafralotan er enn í gangi eða ný',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Segir viðmótinu að notandi sé innskráður og hver það er',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Slembið vafraauðkenni sem tengir pixla-atburði vefsíðu við einn vafra',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Sýna nýlega skoðaðar vörur í tilheyrandi widgeti',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Tengja hegðun á vefsíðunni við prófíl',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Rakning á uppruna heimsóknar (referrer, attribution)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Tenging gests við tengilið á Brevo-reikningnum með netfanginu',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Tenging færslna á borð við leads og sölur við publisher',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Tenging aðgerða á vefsíðunni við auglýsingar sem áður hafa birst',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Sameining margra flettinga í eina vafralotu',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Viðbótargögn um skráða atburði í heimsóknarferlinu',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Úthlutun og varðveisla afbrigðis yfir margar heimsóknir',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Skyndiminni fyrir atburði út frá CSS-veljurum',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Skyndiminni fyrir Messenger- og gestagögn í geymslu vafrans',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Skyndiminni fyrir færslur Tag Manager',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Skyndiminni fyrir mælingu á skrunudýpt',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Skyndiminni fyrir breytur Tag Manager',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Skyndiminni fyrir stillingar widgetsins til að forðast endurteknar fyrirspurnir til netþjóns',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Skyndivistun Messenger- og gestagagna í vafranum',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Telur þær vafralotur sem stofnaðar eru fyrir gest (reikningar frá 14.06.2026)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Telur hversu oft vafranum var lokað og hann opnaður aftur meðan á mælingu stóð (reikningar fyrir 14.06.2026)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Talning flettinga og heimsókna',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'sjálfvirkar greiningar á hegðun notenda',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'gróf staðsetning eftir landi, svæði og borg',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'valkvæð upptaka af vafralotunni (Session Replay), sjálfgefið með földum texta, myndum og innslætti',
    'optional Heatmaps und A/B-Tests'
        => 'valfrjálst hitakort og A/B-prófanir',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Sendir áfram vísunaruppruna í split-URL-prófunum (reikningar frá 14.06.2026)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Sendir áfram vísunaruppruna í split-URL-prófunum (reikningar fyrir 14.06.2026)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Tenging færslna á borð við leads og sölur við publisher, Árangursmæling auglýsingaefnis og uppgjör þóknunar',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Söfnun gesta og síðuflettinga á vefsíðunni fyrir markaðssjálfvirkni, Tenging gests við tengilið á Brevo-reikningnum með netfanginu, Söfnun eigin atburða sem rekstraraðilinn hefur skilgreint',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Birting bókunardagatals og pöntun tíma á vefsíðunni, Þekkja gestinn innan bókunarferlisins, Vinnsla greiðslna þegar tíminn er gjaldskyldur',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Greining og höfnun sjálfvirkra fyrirspurna á eyðublöð, Útgáfa á token sem þjónn vefsíðunnar sannreynir, Í stillingunni Pre-Clearance: heimild fyrir frekari WAF-athuganir á sama svæði',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Mæling á flettingum og heimsóknum, Mæling á hleðslutíma og kjarnamælikvörðum síðunnar (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Afhending sérsniðinna auglýsinga, Mæling á áhrifum auglýsinga, Auðkenning vafrans með Criteo-auðkenninu',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Mæling á notkunarhegðun á vefsíðunni, Myndun gerviauðkenndra notkunarsniða eftir samþykki, Auðkenning vafra við síðari heimsóknir að fengnu samþykki',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Mæling á flettingum og notkunarhegðun, Mæling á skrunudýpt og smellaatburðum, Auðkenning notenda að fengnu samþykki, Umsjón með andmælum við mælingunni',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Aðgreining manns og vélmennis í eyðublöðum og innskráningum, Vörn gegn sjálfvirkum fyrirspurnum (ruslpóstur, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Mæling á umbreytingum, Remarketing og myndun markhópa, Takmörkun á birtingartíðni, Greining á smellasvikum',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Afhending auglýsinga, Takmörkun á birtingartíðni, Greining svika og misnotkunar, Mæling á birtingum og smellum',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Aðgreining einstakra notenda, Varðveisla stöðu vafralotunnar, Umferðar- og notkunarmæling',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Birting gagnvirks korts, Mæling Google á aðgengi þjónustunnar',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Áhættugreining til að greina á milli manns og vélmennis, Vörn eyðublaða gegn sjálfvirkri misnotkun',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Afhending og umsjón merkja á vefsíðunni, Dreifing samþykkismerkja til Google-tags',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Aðgreining manns og vélmennis í eyðublöðum og innskráningum, Álagsdreifing og beining á challenge-fyrirspurnum, Framboð á aðgengisviðmótinu',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Hitakort, Upptaka vafralotu, Kannanir',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Þekkja gesti yfir margar heimsóknir, Mæling á vafralotum og tenging heimsóknar við upprunann, Sameining tvítekinna tengiliða, Rekstur spjallgræjunnar, Samræmd birting á A/B-prófunarafbrigðum',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Beint spjall og pósthólf þjónustuvers á vefsíðunni, Þekkja endurkomandi gesti og tengja fyrri samtöl, Auðkenning tækis til varnar gegn misnotkun, Skyndivistun Messenger- og gestagagna í vafranum',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Birting upplýsinga um fjármögnun og afborganir á vöru- og körfusíðum (on-site messaging), Afhending tilkynningarefnisins í tilbúin staðgengilssvæði í frumkóða síðunnar um auglýsingaþjón',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Þekkja og auðkenna gesti vefsíðunnar, Tengja hegðun á vefsíðunni við prófíl, Stýring skráningareyðublaða á vefsíðunni',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Umbreytingarakning fyrir auglýsingaherferðir á LinkedIn, Retargeting á gestum vefsíðunnar, Greining á markhópi vefsíðunnar (lýðfræði vefsíðunnar)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Þekkja gesti tengdra vefsíðna fyrir retargeting, Stýring sprettigluggaeyðublaða svo að þau birtist ekki aftur og aftur, Mæling á opnunum og smellum í tölvupóstherferðum, Innfelling auglýsingapixla frá Google og Facebook á tengdu vefsíðunni',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Birting gagnvirkra korta á vefsíðunni, Sækja kortaflísar, letur og stíla frá þjónustuaðilanum, Gjaldfærsla og vernd kortakalla',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Mæling á flettingum, heimsóknum og vafralotum, Endurþekking endurkominna gesta með auðkenni gests, Rakning á uppruna heimsóknar (referrer, attribution), valfrjálst hitakort og A/B-prófanir',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Mæling á flettingum, heimsóknum og vafralotum á eigin netþjóni, Endurþekking endurkominna gesta með auðkenni gests, Rakning á uppruna heimsóknar (referrer, attribution), valfrjálst hitakort og A/B-prófanir',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Afhending og ræsing merkja á vefsíðunni, Umsjón með samþykkisákvörðun fyrir þau tags sem stillt eru í containernum',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Mæling á auglýsingaherferðum og umbreytingum á vefsíðunni, Myndun markhópa og retargeting',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Umbreytingarakning fyrir Microsoft Advertising-herferðir, Uppbygging remarketing-lista, Mæling á flettingum og sérsniðnum atburðum',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Upptaka og endurspilun vafralota, Hitakort yfir smelli og skrunhegðun, Sameining margra flettinga í eina vafralotu, sjálfvirkar greiningar á hegðun notenda',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Vinnsla greiðslu sem gesturinn hefur sett af stað, Innfelling kortareitanna í eigin greiðsluferli svo að kortaupplýsingar fari ekki um vefverslunina, Varnir gegn svikum og lagaskyldur sem greiðsluþjónustuveitandi',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Upptaka músarhreyfinga, Endurspilun vafralotu, Greining á notkunarhegðun',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Afhending kortflísa í innfelld kort, Rekstur kortaþjónustanna og varnir gegn misnotkun',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Greiðsluvinnsla, Varnir gegn svikum',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Umbreytingarakning fyrir auglýsingaherferðir á Pinterest, Myndun markhópa og retargeting, Tenging aðgerða á vefsíðunni við auglýsingar sem áður hafa birst',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Mæling á flettingum og atburðum, Auðkenning gesta og tenging við vafralotur, Greining á uppruna og herferðum, Greining á tæki, vafra og áætlaðri staðsetningu, Greining á rafrænum viðskiptum og markmiðum',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Talning flettinga og heimsókna, Greining á tilvísunarheimildum, Greining á vafra, stýrikerfi og gerð tækis, gróf staðsetning eftir landi, svæði og borg',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Söfnun og sending forritsvillna úr vafranum, valkvæð upptaka af vafralotunni (Session Replay), sjálfgefið með földum texta, myndum og innslætti',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Rekstur körfu og greiðsluferlis vefverslunar, Tenging við vafralotu og við tungumál eða land, Umferðarmæling fyrir rekstraraðila verslunarinnar, Markaðsgögn fyrir kaupviðmót',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Innfelling og spilun laga, platna, lagalista og hlaðvarpsþátta, Söfnun upplýsinga um vafrahegðun þessara notenda af hálfu Spotify og þriðju aðila, Gera þriðju aðilum kleift að setja vefkökur í vafra þessara notenda',
    'Besucherzählung, Reichweitenmessung'
        => 'Talning gesta, Umferðarmæling',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Greining svika og áhættumat greiðslutilrauna, Framboð á greiðslureitum Stripe Elements, Greining vélmenna og sjálfvirkrar hegðunar í pöntunarferlinu',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Mæling og bæting á árangri auglýsingaherferða, Persónusnið auglýsinga á TikTok, Sending atburða á vefsíðunni til TikTok',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Innfelling eyðublaða og kannana á vefsíðuna, Söfnun svaranna og sending þeirra til rekstraraðila eyðublaðsins',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Innfelling og spilun myndbanda á vefsíðunni, Muna spilarastillingar áhorfandans (hljóðstyrk, gæði, skjátexta), Umferðarmæling Vimeo á innfelldu myndböndunum, Vörn gegn vélmennum og misnotkun fyrir spilarann',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'A/B-prófanir og split-URL-prófanir á vefsíðunni, Úthlutun og varðveisla afbrigðis yfir margar heimsóknir, Mæling á markmiðum og umbreytingum herferðar, Mæling á gestum og vafralotum fyrir greiningar, Umsjón með andmælum og samþykki fyrir mælinguna',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Tengja körfu við gest, Greining á því hvort innihald körfunnar hafi breyst, Sýna nýlega skoðaðar vörur í tilheyrandi widgeti, Muna að tilkynning vefverslunarinnar hafi verið falin',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Innskráning og auðkenning vafralotu á stjórnsvæðinu, Geyma athugasemdagögn fyrir frekari athugasemdir, Muna birtingarstillingar stjórnsvæðisins, Athuga hvort WordPress geti sett vefkökur, Vista valið tungumál',
    'Conversion-Messung, Retargeting'
        => 'Umbreytingamæling, Retargeting',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Spilun innfelldra myndbanda, Öryggi, Auðkenning áhorfandans í auglýsingaskyni',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Beint spjall og skilaboðarás fyrir aðstoð á vefsíðunni, Þekkja gestinn milli flettinga og flipa, Muna stöðu og stillingar widgetsins, Mæling á vafralotum og atburðum á síðum með widget',
];
