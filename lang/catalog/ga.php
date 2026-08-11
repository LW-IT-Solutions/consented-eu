<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Irisch.
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
        => 'Tástálacha A/B agus tástálacha Split URL ar an suíomh gréasáin',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Billeáil agus cosaint na nglaonna léarscáile',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Logáil isteach le Shop a chur i gcrích; riachtanach',
    'Abspielen eingebetteter Videos'
        => 'Físeáin leabaithe a sheinm',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Íocaíocht a thionscain an cuairteoir a phróiseáil',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Íocaíochtaí a phróiseáil nuair a bhíonn táille ar an gcoinne',
    'Analyse des Nutzungsverhaltens'
        => 'Anailís ar iompar úsáide',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Sonraí anailíse na gcomhéadan ceannaigh; anailís',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Sonraí anailíse an tsiopa; aicmithe ag an soláthraí mar anailís',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Sonraí logáil isteach don limistéar riaracháin ag /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Logáil isteach i Shop Pay; riachtanach',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Logáil isteach agus aithint seisiúin sa limistéar riaracháin',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Staitisticí anaithnide a bhaineann leis an tseirbhís agus cuspóirí teicniúla eile, ina measc tacaíocht don inrochtaineacht',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Socruithe amhairc an limistéir riaracháin de réir cuntais',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Socruithe amhairc an limistéir riaracháin a chuimhneamh',
    'Anzeige von Bewertungen'
        => 'Léirmheasanna a thaispeáint',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'An féilire áirithinte a thaispeáint agus coinní a shocrú ar an suíomh gréasáin',
    'Anzeigen einer interaktiven Karte'
        => 'Léarscáil idirghníomhach a thaispeáint',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'Nuair a shocraítear é ar an luach 1, cuireann sé cosc ar imeachtaí UET a sheoladh chuig Microsoft',
    'Aufbau von Remarketing-Listen'
        => 'Liostaí athmhargaíochta a thógáil',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Seisiúin a thaifeadadh agus a athsheinm',
    'Aufzeichnung von Mausbewegungen'
        => 'Gluaiseachtaí na luiche a thaifeadadh',
    'Ausblenden des Shop-Hinweises merken'
        => 'Cuimhneamh ar cheilt fhógra an tsiopa',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Clibeanna a sheachadadh agus a spreagadh ar an suíomh gréasáin',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Clibeanna a sheachadadh agus a bhainistiú ar an suíomh gréasáin',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Tíleanna léarscáile a sheachadadh chuig léarscáileanna leabaithe',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Ábhar na bhfógraí a sheachadadh isteach in ionaid ullmhaithe i gcód foinseach an leathanaigh trí fhreastalaí fógraí',
    'Auslieferung personalisierter Werbung'
        => 'Fógraíocht phearsantaithe a sheachadadh',
    'Auslieferung von Anzeigen'
        => 'Fógraí a sheachadadh',
    'Auslieferung von Bibliotheken und Assets'
        => 'Leabharlanna agus sócmhainní a sheachadadh',
    'Auslieferung von Schriftarten'
        => 'Clófhoirne a sheachadadh',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Ceadchomhartha a eisiúint a sheiceálann freastalaí an tsuímh ghréasáin',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Foirmeacha cláraithe a stiúradh ar an suíomh gréasáin',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Foirmeacha aníos a stiúradh ionas nach dtaispeánfar arís is arís iad',
    'Auswahl des Rechenzentrums'
        => 'Rogha an ionaid sonraí',
    'Auswertung der Verweisquellen'
        => 'Measúnú ar na foinsí atreoraithe',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Measúnú ar spriocghrúpa an tsuímh ghréasáin (déimeagrafaic an tsuímh)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Measúnú ar an mbrabhsálaí, ar an gcóras oibriúcháin agus ar chineál an ghléis',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Measúnú ar an ngléas, ar an mbrabhsálaí agus ar an suíomh measta',
    'Auswertung von Herkunft und Kampagnen'
        => 'Measúnú ar bhunús agus ar fheachtais',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Fíordheimhníonn sé iarratais an úsáideora deiridh',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Minicíocht na dtaispeántas a theorannú',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Deimhníonn sé gur éirigh le seiceáil, ionas nach mbeidh dúshláin eile sa chrios ann',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Réimsí íocaíochta Stripe Elements a chur ar fáil',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Rochtain inrochtaineachta a chur ar fáil',
    'Besucherzählung'
        => 'Comhaireamh cuairteoirí',
    'Betrieb des Chat-Widgets'
        => 'Oibriú na giuirléide comhrá',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Oibriú na seirbhísí léarscáile agus cosaint ar mhí-úsáid',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Oibriú thralaí agus phróiseas íocaíochta siopa',
    'Betrugs- und Missbrauchserkennung'
        => 'Calaois agus mí-úsáid a bhrath',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Calaois a bhrath le linn iarracht íocaíochta',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Calaois a bhrath agus measúnú riosca ar iarrachtaí íocaíochta',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Cosc ar chalaois agus oibleagáidí dlíthiúla mar sholáthraí seirbhísí íocaíochta',
    'Betrugsprävention'
        => 'Cosc ar chalaois',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Cosc ar chalaois agus measúnú riosca ar iarracht íocaíochta',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Próifílí úsáide bréagainmnithe a chruthú tar éis toilithe',
    'Bildung von Zielgruppen und Retargeting'
        => 'Spriocghrúpaí a chruthú agus athspriocdhíriú',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Ceanglaíonn sé an seisiún leis an ásc AWS céanna',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Cosaint ar bhotaí agus ar mhí-úsáid don seinnteoir',
    'Bot-Abwehr fuer den Player'
        => 'Cosaint ar bhotaí don seinnteoir',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Cosaint ar bhotaí agus acmhainní HubSpot á seachadadh',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Aitheantóir brabhsálaí a úsáideann LinkedIn chun gléasanna a idirdhealú agus mí-úsáid a bhrath',
    'Cloudflare-Bot-Abwehr'
        => 'Cosaint Cloudflare ar bhotaí',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Brath botaí Cloudflare chun trácht a scagadh',
    'Cloudflare-Ratenbegrenzung'
        => 'Teorannú ráta Cloudflare',
    'Conversion-Messung'
        => 'Tomhas tiontuithe',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Rianú tiontuithe d\'fheachtais fógraíochta LinkedIn',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Rianú tiontuithe d\'fheachtais Microsoft Advertising',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Rianú tiontuithe d\'fheachtais fógraíochta Pinterest',
    'Darstellung interaktiver Karten auf der Website'
        => 'Léarscáileanna idirghníomhacha a thaispeáint ar an suíomh gréasáin',
    'Deduplizieren von Kontakten'
        => 'Teagmhálaithe dúblacha a bhaint',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Úsáidtear é chun fógraíocht a sheachadadh agus a thomhas.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'Aitheantas cuairteora trasfhearainn; de réir an tsoláthraí is fianán tríú páirtí é, ní úsáidtear é ach amháin nuair a bhíonn fianáin tríú páirtí cumasaithe sa chomhad cumraíochta',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Aitheantóir tríú páirtí chun cuairteoirí a aithint arís',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Aitheantóir tríú páirtí a chuirtear ar aghaidh chuig Klaviyo',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Aitheantóir fógraíochta tríú páirtí chun feachtais a thomhas agus chun pearsantú a dhéanamh ar TikTok',
    'E-Commerce- und Zielauswertung'
        => 'Measúnú ar r-thráchtáil agus ar spriocanna',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Réamhlíonadh an tseolta ríomhphoist ón bhfoirm nótaí tráchta',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Rianta, albaim, seinmliostaí agus eagráin phodchraolta a leabú agus a sheinm',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Físeáin a leabú agus a sheinm ar an suíomh gréasáin',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Foirmeacha agus suirbhéanna a leabú sa suíomh gréasáin',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Réimsí na gcártaí a leabú sa seiceáil amach féin, ionas nach rithfidh sonraí cárta tríd an siopa',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Ráiteas fianán a chothaítear go seachtrach a leabú',
    'Einbettung von Audioinhalten'
        => 'Ábhar fuaime a leabú',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Picteilíní fógraíochta ó Google agus ó Facebook a chomhtháthú ar an suíomh gréasáin nasctha',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Fógraí faoi mhaoiniú agus faoi íoc ina thráthchodanna a thaispeáint ar leathanaigh táirgí agus tralaí (On-site Messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Aitheantóir uathúil i dtomhas trasfhearainn (cuntais ó 14/06/2026)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Aitheantóir uathúil i dtomhas trasfhearainn (cuntais roimh 14/06/2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Luach aonuaire in aghaidh CSRF ar an bhfoirm dhiúltaithe',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Tá aitheantóir úsáideora agus am a chruthaithe ann; de réir na foinse socraítear é i mbrabhsálaí in-aip Pinterest, ní ar fhearann an tsuímh ghréasáin',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Na freagraí a bhailiú agus a tharchur chuig oibreoir na foirme',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Taifeadann sé úsáid an tsuímh ghréasáin chun críocha measúnaithe.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Imeachtaí saincheaptha a shainíonn an t-oibreoir a bhailiú',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Earráidí feidhmchláir a bhailiú agus a tharchur ón mbrabhsálaí',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Cuairteoirí agus amhairc leathanaigh ar an suíomh gréasáin a bhailiú le haghaidh uathoibriú margaíochta',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Tomhas ar rathúlacht fógra agus billeáil an choimisiúin',
    'Erhalt des Sitzungszustands'
        => 'Staid an tseisiúin a chaomhnú',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'An gléas a aithint chun mí-úsáid a chosc',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Rochtain uathoibrithe ar fhoirmeacha a bhrath agus a dhiúltú',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Botaí agus iompar uathoibrithe a bhrath sa phróiseas ordaithe',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'A bhrath ar athraigh ábhar an tralaí',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Aithníonn sé athruithe ar ábhar an tralaí',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Aithníonn sé cuairteoirí an tsuímh ghréasáin ina bhfuil cód Intercom suiteáilte',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Aithníonn sé brabhsálaithe arís ar shuímh Microsoft; de réir an tsoláthraí úsáidtear é le haghaidh fógraíochta freisin, fianán tríú páirtí',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Aithníonn sé arís na daoine a scríobhann tríd an uirlis chomhrá',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Aithníonn sé an gléas óna dtosaíonn an comhrá',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Aithníonn sé an gléas aonair a idirghníomhaíonn leis an Messenger, chun mí-úsáid a chosc',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Aithníonn sé an t-úsáideoir deiridh a thosaíonn an comhrá',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Aithníonn sé an fearann nó an fo-fhearann ina bhfuil an ghiuirléid chomhrá suiteáilte',
    'Erkennt wiederkehrende Besucher'
        => 'Aithníonn sé cuairteoirí athfhillteacha',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Aithníonn sé ar atosaíodh an brabhsálaí',
    'Erkennung von Klickbetrug'
        => 'Brath calaoise cliceála',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Cinneann sé na rochtana uathúla ar an suíomh gréasáin (cuntais ó 14/06/2026)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Cinneann sé na rochtana uathúla ar an suíomh gréasáin (cuntais roimh 14/06/2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Cuireann siad ar chumas tríú páirtithe fianáin a shocrú i mbrabhsálaí na n-úsáideoirí sin',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Cuireann sé úsáid na rochtana inrochtaineachta ar fáil',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Cuireann sé feidhmeanna breise an tsuímh ghréasáin ar fáil.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Aitheantóir céadpháirtí a aithníonn cuairteoirí agus a shannann imeachtaí an tsuímh ghréasáin',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Aitheantóir cuairteora céadpháirtí le haghaidh rianú tiontuithe agus athmhargaíochta',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Aitheantóir seisiúin céadpháirtí chun imeachtaí a shannadh',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Aitheantóir seisiúin céadpháirtí in aghaidh an phicteilín chun feachtais a thomhas',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Aitheantóir seisiúin céadpháirtí chun feachtais a thomhas',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Aitheantóir fógraíochta céadpháirtí chun feachtais a thomhas agus chun pearsantú a dhéanamh ar TikTok',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Fianán céadpháirtí a ghrúpálann gníomhartha na gcuairteoirí nach féidir le Pinterest a shannadh',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Fianán céadpháirtí a stórálann na sonraí custaiméara haiseáilte a bailíodh trí Automatic Enhanced Match',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Cruthaíonn sé aitheantóir uathúil do gach cuairteoir (cuntais ó 14/06/2026)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Cruthaíonn sé aitheantóir uathúil do gach cuairteoir (cuntais roimh 14/06/2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Aitheantóir gléis chun imeachtaí ar leathanaigh a bhfuil an ghiuirléid orthu a mheas',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Socraítear é ag logáil isteach ar leathanach atá óstáilte ag HubSpot',
    'Gewaehlte Sprache speichern'
        => 'An teanga roghnaithe a shábháil',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Ailíníonn sé an t-aitheantóir MUID thar fhearainn Microsoft; de réir an tsoláthraí is fianán tríú páirtí é',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Coinníonn sé teachtaireachtaí sioncronaithe thar chluaisíní éagsúla',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Coinníonn sé luach an pharaiméadair pk_campaign',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Coinníonn sé luach an pharaiméadair utm_campaign',
    'Haelt den Widerspruch gegen die Messung'
        => 'Coinníonn sé an agóid in aghaidh an tomhais',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Coinníonn sé am éaga _uetsid',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Coinníonn sé am éaga _uetvid',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Coinníonn sé cineál fhoinse an tráchta don Tag Manager',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Taifeadann sé céannacht an chuairteora, chun teagmhálaithe dúblacha a bhaint freisin',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Taifeadann sé cinneadh an chuairteora maidir le fianáin',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Coinníonn sé cuma na giuirléide comhsheasmhach agus an leathanach á athrú',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Taifeadann sé an leathanach iontrála; anailís',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Coinníonn sé an toiliú don tomhas le fianáin',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Coinníonn sé cinneadh an úsáideora maidir le catagóirí agus soláthraithe',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Coinníonn sé seisiún na n-úsáideoirí atá logáilte isteach agus an rochtain ar chomhráite roimhe seo',
    'Haelt die verweisende Adresse'
        => 'Coinníonn sé an seoladh atreoraithe',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Taifeadann sé an fhoinse atreoraithe; anailís',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Coinníonn sé athróga féin an tseisiúin (marcáilte ag an soláthraí mar dhímholta)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Taifeadann sé an bhfuil cead ag etracker fianáin a shocrú; socraítear é le glao API nuair a úsáidtear data-block-cookies',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Taifeadann sé cé na lasca feidhme a chuir úinéir an fhíseáin i bhfeidhm',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Príomhfhianán chun cuairteoirí a aithint arís',
    'Heatmaps'
        => 'Teasléarscáileanna',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Teasléarscáileanna cliceálacha agus iompair scrollaithe',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Coinníonn sé sonraí seisiúin an teasléarscáile ar feadh na cuairte',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Coinníonn sé faisnéis faoin seisiún reatha (cuntais ó 14/06/2026)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Coinníonn sé faisnéis faoin seisiún reatha (cuntais roimh 14/06/2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Coinníonn sé athróga saincheaptha ar feadh na cuairte',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Coinníonn sé sonraí buana ar leibhéal an chuairteora (cuntais ó 14/06/2026)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Coinníonn sé sonraí buana ar leibhéal an chuairteora le haghaidh measúnú Insights (cuntais roimh 14/06/2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Taifeadann sé staid toilithe an chuairteora (cuntais ó 14/06/2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Taifeadann sé staid toilithe an chuairteora (cuntais roimh 14/06/2026)',
    'Hält den Sitzungszustand.'
        => 'Coinníonn sé staid an tseisiúin.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Coinníonn sé aitheantóir úsáideora Clarity agus na socruithe don suíomh gréasáin seo',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Coinníonn sé sannadh na leaganacha do thástálacha A/B',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Coinníonn sé an teaglaim roghnaithe go sealadach (cuntais ó 14/06/2026)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Coinníonn sé an teaglaim roghnaithe go sealadach (cuntais roimh 14/06/2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Taifeadann sé an leagan roghnaithe sula dtarlaíonn an t-atreorú (cuntais ó 14/06/2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Taifeadann sé an leagan roghnaithe sula dtarlaíonn an t-atreorú (cuntais roimh 14/06/2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Taifeadann sé cén fhoinse atreoraithe trína dtáinig an chuairt',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Sa mhód Pre-Clearance: cead do sheiceálacha WAF eile sa chrios céanna',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Aitheantóir ball indíreach le haghaidh rianú tiontuithe, athdhírithe agus anailíse',
    'Inhalt des Warenkorbs; notwendig'
        => 'Ábhar na tralaí siopadóireachta; riachtanach',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Sonraí anailíse a bhaineann leis an gceannaitheoir sa tsiopa; staitisticí',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Aitheantóir uathúil a bhaineann le feachtas (cuntais ón 14.06.2026)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Aitheantóir don chéad teagmháil le Clarity ar fud shuíomhanna Clarity go léir; de réir an tsoláthraí, fianán tríú páirtí',
    'Kennzeichnet die laufende Sitzung'
        => 'Marcálann sé an seisiún reatha',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Sonraí nótaí tráchta a choinneáil le haghaidh tuilleadh nótaí tráchta',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Leaganacha tástála A/B a thaispeáint go comhsheasmhach',
    'Lastverteilung und Routing'
        => 'Cothromú ualaigh agus ródú',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Ualachroinnt agus ródú na n-iarratas challenge',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Stórálann sé socruithe cuntais an chuairteora go háitiúil',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Soláthraíonn sé an leagan céanna de leathanach tástála A/B i gcónaí',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Comhrá beo agus cainéal teachtaireachtaí do thacaíocht ar an suíomh gréasáin',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Comhrá beo agus bosca isteach tacaíochta ar an suíomh gréasáin',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Sonraí margaíochta na gcomhéadan ceannaigh; margaíocht',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Sonraí margaíochta do na comhéadain cheannaigh',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Socruithe seinnteora an bhreathnóra a choinneáil i gcuimhne (airde fuaime, cáilíocht, fotheidil)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Staid agus socruithe na giuirléide a choinneáil i gcuimhne',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Coinníonn sé i gcuimhne gur dúnadh an meirge Global Privacy Control',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Coinníonn sé i gcuimhne gur dúnadh an meirge fógra',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Coinníonn sé i gcuimhne am an ailínithe leis an bhfianán lms_analytics',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Coinníonn sé i gcuimhne am an ailínithe aitheantais dheireanaigh, ionas nach ndéanfar an t-ailíniú arís',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Coinníonn sé i gcuimhne an leagan a sannadh (cuntais ón 14.06.2026)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Coinníonn sé i gcuimhne an leagan a sannadh, ionas go bhfanfaidh sé mar an gcéanna ar chuairt eile (cuntais roimh an 14.06.2026)',
    'Merkt einen Rabattcode; notwendig'
        => 'Coinníonn sé cód lascaine i gcuimhne; riachtanach',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Coinníonn sé i gcuimhne agóid in aghaidh an tomhais (cuntais ón 14.06.2026)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Coinníonn sé i gcuimhne agóid a bhaineann le suíomhanna éagsúla (cuntais roimh an 14.06.2026)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Coinníonn sé i gcuimhne socruithe an tseinnteora, amhail airde fuaime, cáilíocht agus fotheidil',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Coinníonn sé i gcuimhne an socrú do na fógraí fuaime',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Cuimhníonn sé ar thoiliú a tugadh don tomhas',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Cuimhníonn sé ar agóid in aghaidh an tomhais',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Coinníonn sé i gcuimhne teachtaireachtaí réamhghníomhacha a dúnadh',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Coinníonn sé i gcuimhne gur dhún an cuairteoir lipéad an chnaipe tosaigh',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Coinníonn sé i gcuimhne an bhfuil an ghiuirléid ar oscailt nó dúnta',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Coinníonn sé i gcuimhne nach bhfuil an cuairteoir le páirt a ghlacadh in aon fheachtas (cuntais roimh an 14.06.2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Coinníonn sé i gcuimhne go bhfuil an cuairteoir eisiata ón bhfeachtas (cuntais ón 14.06.2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Coinníonn sé i gcuimhne go bhfuil an cuairteoir eisiata ón bhfeachtas (cuntais roimh an 14.06.2026)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Coinníonn sé i gcuimhne gur dúnadh an fógra toilithe',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Coinníonn sé i gcuimhne gur dúnadh fógra an tsiopa',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Coinníonn sé i gcuimhne nach bhfuil an cheist faoi fhianáin le cur arís',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Coinníonn sé i gcuimhne gur truicearadh clib cheana féin',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Coinníonn sé i gcuimhne an ndéantar doimhneacht scrollaithe a thomhas don chuairteoir seo',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Coinníonn sé i gcuimhne an bhfuil fuinneog an chomhrá ar oscailt',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Coinníonn sé i gcuimhne an gcuirtear an t-aitheantóir MUID ar aghaidh chuig aitheantóir fógraíochta; de réir an tsoláthraí, 0 i gcónaí, fianán tríú páirtí',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Oscailtí agus cliceanna i bhfeachtais ríomhphoist a thomhas',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Seisiúin agus imeachtaí a thomhas ar leathanaigh a bhfuil giuirléid orthu',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Seisiúin a thomhas agus foinse na cuairte a shannadh',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Tomhas ar infhaighteacht na seirbhíse ag Google',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Tomhas ar am luchtaithe agus ar phríomhthomhais an leathanaigh (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Tomhas ar dhoimhneacht scrollaithe agus ar imeachtaí cliceála',
    'Messung der Werbewirkung'
        => 'Tomhas ar éifeacht na fógraíochta',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Tomhas ar iompar úsáide ar an suíomh gréasáin',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Tomhas agus pearsanú fógraí i líonra fógraíochta TikTok Pangle',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Feidhmíocht feachtas fógraíochta a thomhas agus a fheabhsú',
    'Messung von Auslieferungen und Klicks'
        => 'Tomhas ar sheachadadh fógraí agus ar chliceanna',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Tomhas ar chuairteoirí agus ar sheisiúin le haghaidh anailíse',
    'Messung von Conversions'
        => 'Tomhas ar thiontuithe',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Tomhas ar amhairc leathanaigh agus ar chuairteanna',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Tomhas ar amhairc leathanaigh agus ar imeachtaí',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Tomhas ar amhairc leathanaigh agus ar iompar úsáide',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Tomhas ar amhairc leathanaigh agus ar imeachtaí saincheaptha',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Tomhas ar amhairc leathanaigh, ar chuairteanna agus ar sheisiúin',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Tomhas ar amhairc leathanaigh, ar chuairteanna agus ar sheisiúin ar fhreastalaí féin',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Tomhas ar fheachtais fógraíochta agus ar thiontuithe ar an suíomh gréasáin',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Tomhas ar spriocanna agus ar thiontuithe feachtais',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Tíleanna léarscáile, clófhoirne agus stíleanna a luchtú ón soláthraí',
    'Name aus dem Kommentarformular vorbelegen'
        => 'An t-ainm a réamhlíonadh san fhoirm nótaí tráchta',
    'Nutzer-ID'
        => 'Aitheantóir úsáideora',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Sannann sé an tralaí siopadóireachta don tír cheart; riachtanach',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Sannann sé an tralaí siopadóireachta don chustaiméir ceart sa bhunachar sonraí',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Sannann sé gníomhartha cuairte do sheisiún',
    'Personalisierung der Werbung auf TikTok'
        => 'Pearsanú na fógraíochta ar TikTok',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Seiceáil an féidir le WordPress fianáin a shocrú',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Seiceálann sé cumas fianán an bhrabhsálaí; riachtanach',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Seiceálann sé an féidir le WordPress fianáin a shocrú',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Luach seiceála phasfhocal an tsiopa; riachtanach',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Fianán seiceála an tsoláthraí (cuntais roimh an 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Seiceálann sé an nglacann an brabhsálaí le fianáin (cuntais ón 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Seiceálann sé an nglacann an brabhsálaí le fianáin (cuntais roimh an 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Seiceálann sé an nglacann an brabhsálaí le fianáin (de réir an tsoláthraí in Internet Explorer amháin)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Teorannú ráta ag soláthraí CDN HubSpot',
    'Reichweiten- und Nutzungsmessung'
        => 'Tomhas raoin agus úsáide',
    'Reichweitenmessung'
        => 'Tomhas raoin',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Tomhas raoin na bhfíseán leabaithe ag Vimeo',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Tomhas raoin d\'oibreoir an tsiopa',
    'Remarketing und Zielgruppenbildung'
        => 'Athmhargaíocht agus cruthú spriocghrúpaí',
    'Retargeting'
        => 'Athdhíriú',
    'Retargeting von Website-Besuchern'
        => 'Athdhíriú ar chuairteoirí an tsuímh ghréasáin',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Anailís riosca chun idirdhealú a dhéanamh idir duine agus bota',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Fianán bailithe, de réir an tsoláthraí ní chruthaítear é ach sa bhrabhsálaí Safari (cuntais ón 14.06.2026)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Fianán bailithe, de réir an tsoláthraí ní chruthaítear é ach sa bhrabhsálaí Safari (cuntais roimh an 14.06.2026)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Faisnéis faoi iompar brabhsála na n-úsáideoirí seo a bhailiú ag Spotify agus ag tríú páirtithe',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Lasc a shocraíonn oibreoir an tsuímh ghréasáin é féin chun rianú Klaviyo a stopadh',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Logáil isteach na mball a chosaint ar bhrionnú',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Foirmeacha a chosaint ar mhí-úsáid uathoibrithe',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Cosaint ar iarratais uathoibrithe (turscar, credential stuffing)',
    'Sicherheit'
        => 'Slándáil',
    'Sicherheitsfunktionen'
        => 'Feidhmeanna slándála',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Feidhmeanna slándála nuair a bhíonn an fheidhm roghnach User Journeys gníomhach',
    'Sitzung'
        => 'Seisiún',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Sannadh seisiúin agus teanga nó tíre',
    'Sitzungsaufzeichnung'
        => 'Taifeadadh seisiúin',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Aitheantóir seisiúin chun imeachtaí a anailísiú ar leathanaigh a bhfuil giuirléid orthu',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Aitheantóir seisiúin do staitisticí an tsiopa; staitisticí',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Eochair seisiúin na seirbhíse Answer Bot',
    'Sitzungswiedergabe'
        => 'Athsheinm seisiúin',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Stórálann sé an ceadchomhartha fíordheimhnithe tar éis an logáil isteach',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Stórálann sé an pasfhocal ionchódaithe le haghaidh físeán atá cosanta le pasfhocal',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Stórálann sé eochair na teanga a roghnaíodh',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Stórálann sé rogha príobháideachais an chuairteora; riachtanach',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Stórálann sé cinneadh toilithe an chuairteora',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Stórálann sé aitheantóir gléas an chuairteora le haghaidh fíordheimhnithe sa ghiuirléid chomhrá',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Stórálann sé aitheantóir úsáideora atá cláraithe do sheimineár gréasáin',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Stórálann sé an t-aitheantóir cliceála fbclid, ionas gur féidir imeacht ar an suíomh gréasáin a shannadh d\'fhógra',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Stórálann sé aitheantóir an úsáideora ó fhoirm chláraithe a chuirtear roimh an bhfíseán',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Stórálann sé aitheantóir cliceála TikTok chun tiontuithe a shannadh',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Stórálann sé aitheantas uathúil an chuairteora lena aithint arís',
    'Speichert die zugestimmten Kategorien'
        => 'Stórálann sé na catagóirí ar toilíodh leo',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Cuireann sé sonraí ar fáil don ghiuirléid a thaispeánann na táirgí a breathnaíodh orthu is déanaí',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Rialaíonn sé an ndéantar an t-aitheantóir MUID a athnuachan; de réir an tsoláthraí, fianán tríú páirtí',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Riachtanach go teicniúil d\'oibriú agus do shlándáil an tsuímh ghréasáin.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Iompraíonn sé sonraí seisiúin agus seiceála amach an tsiopa; áiríonn an soláthraí é mar cheann riachtanach',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Iompraíonn sé an fheidhm agóide (opt-out)',
    'Transaktionssicherheit'
        => 'Slándáil idirbheart',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Iompraíonn sé anailís riosca reCAPTCHA.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Imeachtaí an tsuímh ghréasáin a tharchur chuig TikTok',
    'Umfragen'
        => 'Suirbhéanna',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Cuireann sé cosc ar sheoladh sonraí chuig HubSpot',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Ceileann sé teachtaireacht fáilte an chomhrá tar éis é a dhúnadh',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Déanann sé idirdhealú idir brabhsálaithe a osclaíonn leathanaigh Microsoft; le toiliú, le haghaidh fógraíochta freisin',
    'Unterscheidet einzelne Nutzer.'
        => 'Déanann sé idirdhealú idir úsáideoirí aonair.',
    'Unterscheidung einzelner Nutzer'
        => 'Idirdhealú idir úsáideoirí aonair',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Idirdhealú idir duine agus bota ar fhoirmeacha agus ar logáil isteach',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Nascann sé roinnt amharc leathanaigh in aon taifeadadh seisiúin amháin',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Cuireann sé cosc ar an meirge a thaispeáint go leanúnach sa mhód docht',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Comharthaí toilithe a dháileadh ar chlibeanna Google',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Cinneadh an toilithe a bhainistiú do na clibeanna atá cumraithe sa choimeádán',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Bainistiú na hagóide in aghaidh an tomhais',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Bainistiú na hagóide agus an toilithe don tomhas',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Sannta ag Google do na catagóirí Staitisticí agus Fógraíocht.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Curtha ag Google sna catagóirí anailís, fógraíocht agus slándáil.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Sannta ag Google do na catagóirí Feidhmiúlacht, Fógraíocht agus Slándáil.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Curtha ag Google sna catagóirí slándáil agus feidhmiúlacht.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Curtha ag Google sna catagóirí slándáil agus fógraíocht.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Curtha ag Google sna catagóirí slándáil, anailís, feidhmiúlacht agus fógraíocht.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Sannta ag Google do na catagóirí Slándáil, Feidhmiúlacht agus Fógraíocht.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Curtha ag Google sna catagóirí fógraíocht agus slándáil.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Curtha ag Google sa chatagóir anailís; ní luann Google cuspóir níos cruinne.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Curtha ag Google sa chatagóir feidhmiúlacht.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Curtha ag Google sa chatagóir slándáil.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Curtha ag Google sa chatagóir fógraíocht.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Luaite ag Microsoft mar cheann de na fianáin nach féidir a shocrú gan toiliú; ní thugann Microsoft cur síos ar leith ar a chuspóir',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Aitheantóir a chruthaíonn Vimeo le haghaidh tomhas raoin',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Airgeadra na tralaí siopadóireachta tar éis an tseiceáil amach a chur i gcrích; riachtanach',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Sannadh brabhsálaí do dhuine ar bhonn dóchúlachta',
    'Warenkorb einer Besucherin zuordnen'
        => 'An tralaí siopadóireachta a shannadh do chuairteoir',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Seoladh an tsuímh ghréasáin a réamhlíonadh san fhoirm nótaí tráchta',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Aithint an bhreathnóra chun críocha fógraíochta',
    'Werbepersonalisierung'
        => 'Pearsanú fógraíochta',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Cosúil le _pin_unauth, ach mar fhianán tríú páirtí',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'An cuairteoir a aithint laistigh den phróiseas áirithinte',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'An cuairteoir a aithint idir amhairc leathanaigh agus cluaisíní',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Cuairteoirí an tsuímh ghréasáin a aithint agus a shainaithint',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Cuairteoirí a aithint thar roinnt cuairteanna',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Cuairteoirí suíomhanna gréasáin gaolmhara a aithint le haghaidh athdhírithe',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Cuairteoirí athfhillteacha a aithint agus comhráite roimhe seo a shannadh',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Aithint an chuairteora agus stóráil a shaintréithe',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Aithint an bhrabhsálaí trí aitheantóir Criteo',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Aithint an úsáideora; le toiliú amháin, bactha de réir réamhshocraithe',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Aithint brabhsálaí ar chuairteanna níos déanaí tar éis toilithe',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Aithint cuairteoirí agus a sannadh do sheisiúin',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'Baill LinkedIn a aithint lasmuigh de LinkedIn le haghaidh fógraíochta',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Aithint úsáideoirí tar éis toilithe',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Cuairteoirí athfhillteacha a aithint trí aitheantas cuairteora',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Socraítear é nuair a truicearadh sprioc feachtais (cuntais ón 14.06.2026)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Socraítear é nuair a truicearadh sprioc feachtais (cuntais roimh an 14.06.2026)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Socraítear é nuair a thugann duine cuairt ar shuíomh gréasáin ina bhfuil clib Pinterest leabaithe',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Socraítear é nuair a éiríonn le sannadh gan fianáin atá ann cheana, mar shampla trí Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Socraíonn an chlib JavaScript é ó shonraí a chuireann Pinterest ar aghaidh le trácht fógraithe',
    'Zaehlt und begrenzt Sitzungen'
        => 'Comhaireann agus teorannaíonn sé seisiúin',
    'Zahlungsabwicklung'
        => 'Próiseáil íocaíochtaí',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Léiríonn sé an bhfuil an seisiún fós ar siúl nó an bhfuil sé nua',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Léiríonn sé don chomhéadan go bhfuil an t-úsáideoir logáilte isteach agus cé hé',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Aitheantóir randamach brabhsálaí a shannann imeachtaí picteilíne suímh ghréasáin do bhrabhsálaí amháin',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Na táirgí a breathnaíodh orthu is déanaí a thaispeáint sa ghiuirléid a bhaineann leo',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Iompar ar an suíomh gréasáin a shannadh do phróifíl',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Bunús cuairte a shannadh (atreoraí, sannadh)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Cuairteoir a shannadh do theagmhálaí sa chuntas Brevo tríd an seoladh ríomhphoist',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Idirbhearta amhail leads agus díolacháin a shannadh d\'fhoilsitheoir',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Gníomhartha ar an suíomh gréasáin a shannadh d\'fhógraí a chonacthas roimhe sin',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Roinnt amharc leathanaigh a chur le chéile in aon seisiún amháin',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Sonraí breise faoi imeachtaí a taifeadadh i stair na cuairte',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Leagan a shannadh agus a choinneáil thar roinnt cuairteanna',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Taisce d\'imeachtaí bunaithe ar roghnóirí CSS',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Taisce do shonraí Messenger agus cuairteoirí i stóras an bhrabhsálaí',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Taisce d\'iontrálacha an Tag Manager',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Taisce do thomhas na doimhneachta scrollaithe',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Taisce d\'athróga an Tag Manager',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Taisce do shocruithe na giuirléide, chun iarratais athdhéanta ar an bhfreastalaí a sheachaint',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Sonraí Messenger agus cuairteoirí a thaiscadh sa bhrabhsálaí',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Comhaireann sé na seisiúin a cruthaíodh do chuairteoir (cuntais ón 14.06.2026)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Comhaireann sé cé mhéad uair a dúnadh agus a osclaíodh an brabhsálaí arís le linn an tomhais (cuntais roimh an 14.06.2026)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Comhaireamh amharc leathanaigh agus cuairteanna',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'anailísí uathoibrithe ar iompar úsáideoirí',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'sannadh garbh geografach de réir tíre, réigiúin agus cathrach',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'taifeadadh an tseisiúin de rogha (Session Replay), le téacs, íomhánna agus ionchur folaithe de réir réamhshocraithe',
    'optional Heatmaps und A/B-Tests'
        => 'teasléarscáileanna agus tástálacha A/B go roghnach',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Cuireann sé an fhoinse tagartha ar aghaidh i dtástálacha split URL (cuntais ón 14.06.2026)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Cuireann sé an fhoinse tagartha ar aghaidh i dtástálacha split URL (cuntais roimh an 14.06.2026)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Idirbhearta amhail leads agus díolacháin a shannadh d\'fhoilsitheoir, Tomhas ar rathúlacht fógra agus billeáil an choimisiúin',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Cuairteoirí agus amhairc leathanaigh ar an suíomh gréasáin a bhailiú le haghaidh uathoibriú margaíochta, Cuairteoir a shannadh do theagmhálaí sa chuntas Brevo tríd an seoladh ríomhphoist, Imeachtaí saincheaptha a shainíonn an t-oibreoir a bhailiú',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'An féilire áirithinte a thaispeáint agus coinní a shocrú ar an suíomh gréasáin, An cuairteoir a aithint laistigh den phróiseas áirithinte, Íocaíochtaí a phróiseáil nuair a bhíonn táille ar an gcoinne',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Rochtain uathoibrithe ar fhoirmeacha a bhrath agus a dhiúltú, Ceadchomhartha a eisiúint a sheiceálann freastalaí an tsuímh ghréasáin, Sa mhód Pre-Clearance: cead do sheiceálacha WAF eile sa chrios céanna',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Tomhas ar amhairc leathanaigh agus ar chuairteanna, Tomhas ar am luchtaithe agus ar phríomhthomhais an leathanaigh (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Fógraíocht phearsantaithe a sheachadadh, Tomhas ar éifeacht na fógraíochta, Aithint an bhrabhsálaí trí aitheantóir Criteo',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Tomhas ar iompar úsáide ar an suíomh gréasáin, Próifílí úsáide bréagainmnithe a chruthú tar éis toilithe, Aithint brabhsálaí ar chuairteanna níos déanaí tar éis toilithe',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Tomhas ar amhairc leathanaigh agus ar iompar úsáide, Tomhas ar dhoimhneacht scrollaithe agus ar imeachtaí cliceála, Aithint úsáideoirí tar éis toilithe, Bainistiú na hagóide in aghaidh an tomhais',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Idirdhealú idir duine agus bota ar fhoirmeacha agus ar logáil isteach, Cosaint ar iarratais uathoibrithe (turscar, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Tomhas ar thiontuithe, Athmhargaíocht agus cruthú spriocghrúpaí, Minicíocht na dtaispeántas a theorannú, Brath calaoise cliceála',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Fógraí a sheachadadh, Minicíocht na dtaispeántas a theorannú, Calaois agus mí-úsáid a bhrath, Tomhas ar sheachadadh fógraí agus ar chliceanna',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Idirdhealú idir úsáideoirí aonair, Staid an tseisiúin a chaomhnú, Tomhas raoin agus úsáide',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Léarscáil idirghníomhach a thaispeáint, Tomhas ar infhaighteacht na seirbhíse ag Google',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Anailís riosca chun idirdhealú a dhéanamh idir duine agus bota, Foirmeacha a chosaint ar mhí-úsáid uathoibrithe',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Clibeanna a sheachadadh agus a bhainistiú ar an suíomh gréasáin, Comharthaí toilithe a dháileadh ar chlibeanna Google',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Idirdhealú idir duine agus bota ar fhoirmeacha agus ar logáil isteach, Ualachroinnt agus ródú na n-iarratas challenge, Rochtain inrochtaineachta a chur ar fáil',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Teasléarscáileanna, Taifeadadh seisiúin, Suirbhéanna',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Cuairteoirí a aithint thar roinnt cuairteanna, Seisiúin a thomhas agus foinse na cuairte a shannadh, Teagmhálaithe dúblacha a bhaint, Oibriú na giuirléide comhrá, Leaganacha tástála A/B a thaispeáint go comhsheasmhach',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Comhrá beo agus bosca isteach tacaíochta ar an suíomh gréasáin, Cuairteoirí athfhillteacha a aithint agus comhráite roimhe seo a shannadh, An gléas a aithint chun mí-úsáid a chosc, Sonraí Messenger agus cuairteoirí a thaiscadh sa bhrabhsálaí',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Fógraí faoi mhaoiniú agus faoi íoc ina thráthchodanna a thaispeáint ar leathanaigh táirgí agus tralaí (On-site Messaging), Ábhar na bhfógraí a sheachadadh isteach in ionaid ullmhaithe i gcód foinseach an leathanaigh trí fhreastalaí fógraí',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Cuairteoirí an tsuímh ghréasáin a aithint agus a shainaithint, Iompar ar an suíomh gréasáin a shannadh do phróifíl, Foirmeacha cláraithe a stiúradh ar an suíomh gréasáin',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Rianú tiontuithe d\'fheachtais fógraíochta LinkedIn, Athdhíriú ar chuairteoirí an tsuímh ghréasáin, Measúnú ar spriocghrúpa an tsuímh ghréasáin (déimeagrafaic an tsuímh)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Cuairteoirí suíomhanna gréasáin gaolmhara a aithint le haghaidh athdhírithe, Foirmeacha aníos a stiúradh ionas nach dtaispeánfar arís is arís iad, Oscailtí agus cliceanna i bhfeachtais ríomhphoist a thomhas, Picteilíní fógraíochta ó Google agus ó Facebook a chomhtháthú ar an suíomh gréasáin nasctha',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Léarscáileanna idirghníomhacha a thaispeáint ar an suíomh gréasáin, Tíleanna léarscáile, clófhoirne agus stíleanna a luchtú ón soláthraí, Billeáil agus cosaint na nglaonna léarscáile',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Tomhas ar amhairc leathanaigh, ar chuairteanna agus ar sheisiúin, Cuairteoirí athfhillteacha a aithint trí aitheantas cuairteora, Bunús cuairte a shannadh (atreoraí, sannadh), teasléarscáileanna agus tástálacha A/B go roghnach',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Tomhas ar amhairc leathanaigh, ar chuairteanna agus ar sheisiúin ar fhreastalaí féin, Cuairteoirí athfhillteacha a aithint trí aitheantas cuairteora, Bunús cuairte a shannadh (atreoraí, sannadh), teasléarscáileanna agus tástálacha A/B go roghnach',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Clibeanna a sheachadadh agus a spreagadh ar an suíomh gréasáin, Cinneadh an toilithe a bhainistiú do na clibeanna atá cumraithe sa choimeádán',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Tomhas ar fheachtais fógraíochta agus ar thiontuithe ar an suíomh gréasáin, Spriocghrúpaí a chruthú agus athspriocdhíriú',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Rianú tiontuithe d\'fheachtais Microsoft Advertising, Liostaí athmhargaíochta a thógáil, Tomhas ar amhairc leathanaigh agus ar imeachtaí saincheaptha',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Seisiúin a thaifeadadh agus a athsheinm, Teasléarscáileanna cliceálacha agus iompair scrollaithe, Roinnt amharc leathanaigh a chur le chéile in aon seisiún amháin, anailísí uathoibrithe ar iompar úsáideoirí',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Íocaíocht a thionscain an cuairteoir a phróiseáil, Réimsí na gcártaí a leabú sa seiceáil amach féin, ionas nach rithfidh sonraí cárta tríd an siopa, Cosc ar chalaois agus oibleagáidí dlíthiúla mar sholáthraí seirbhísí íocaíochta',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Gluaiseachtaí na luiche a thaifeadadh, Athsheinm seisiúin, Anailís ar iompar úsáide',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Tíleanna léarscáile a sheachadadh chuig léarscáileanna leabaithe, Oibriú na seirbhísí léarscáile agus cosaint ar mhí-úsáid',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Próiseáil íocaíochtaí, Cosc ar chalaois',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Rianú tiontuithe d\'fheachtais fógraíochta Pinterest, Spriocghrúpaí a chruthú agus athspriocdhíriú, Gníomhartha ar an suíomh gréasáin a shannadh d\'fhógraí a chonacthas roimhe sin',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Tomhas ar amhairc leathanaigh agus ar imeachtaí, Aithint cuairteoirí agus a sannadh do sheisiúin, Measúnú ar bhunús agus ar fheachtais, Measúnú ar an ngléas, ar an mbrabhsálaí agus ar an suíomh measta, Measúnú ar r-thráchtáil agus ar spriocanna',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Comhaireamh amharc leathanaigh agus cuairteanna, Measúnú ar na foinsí atreoraithe, Measúnú ar an mbrabhsálaí, ar an gcóras oibriúcháin agus ar chineál an ghléis, sannadh garbh geografach de réir tíre, réigiúin agus cathrach',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Earráidí feidhmchláir a bhailiú agus a tharchur ón mbrabhsálaí, taifeadadh an tseisiúin de rogha (Session Replay), le téacs, íomhánna agus ionchur folaithe de réir réamhshocraithe',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Oibriú thralaí agus phróiseas íocaíochta siopa, Sannadh seisiúin agus teanga nó tíre, Tomhas raoin d\'oibreoir an tsiopa, Sonraí margaíochta do na comhéadain cheannaigh',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Rianta, albaim, seinmliostaí agus eagráin phodchraolta a leabú agus a sheinm, Faisnéis faoi iompar brabhsála na n-úsáideoirí seo a bhailiú ag Spotify agus ag tríú páirtithe, Cuireann siad ar chumas tríú páirtithe fianáin a shocrú i mbrabhsálaí na n-úsáideoirí sin',
    'Besucherzählung, Reichweitenmessung'
        => 'Comhaireamh cuairteoirí, Tomhas raoin',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Calaois a bhrath agus measúnú riosca ar iarrachtaí íocaíochta, Réimsí íocaíochta Stripe Elements a chur ar fáil, Botaí agus iompar uathoibrithe a bhrath sa phróiseas ordaithe',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Feidhmíocht feachtas fógraíochta a thomhas agus a fheabhsú, Pearsanú na fógraíochta ar TikTok, Imeachtaí an tsuímh ghréasáin a tharchur chuig TikTok',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Foirmeacha agus suirbhéanna a leabú sa suíomh gréasáin, Na freagraí a bhailiú agus a tharchur chuig oibreoir na foirme',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Físeáin a leabú agus a sheinm ar an suíomh gréasáin, Socruithe seinnteora an bhreathnóra a choinneáil i gcuimhne (airde fuaime, cáilíocht, fotheidil), Tomhas raoin na bhfíseán leabaithe ag Vimeo, Cosaint ar bhotaí agus ar mhí-úsáid don seinnteoir',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Tástálacha A/B agus tástálacha Split URL ar an suíomh gréasáin, Leagan a shannadh agus a choinneáil thar roinnt cuairteanna, Tomhas ar spriocanna agus ar thiontuithe feachtais, Tomhas ar chuairteoirí agus ar sheisiúin le haghaidh anailíse, Bainistiú na hagóide agus an toilithe don tomhas',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'An tralaí siopadóireachta a shannadh do chuairteoir, A bhrath ar athraigh ábhar an tralaí, Na táirgí a breathnaíodh orthu is déanaí a thaispeáint sa ghiuirléid a bhaineann leo, Cuimhneamh ar cheilt fhógra an tsiopa',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Logáil isteach agus aithint seisiúin sa limistéar riaracháin, Sonraí nótaí tráchta a choinneáil le haghaidh tuilleadh nótaí tráchta, Socruithe amhairc an limistéir riaracháin a chuimhneamh, Seiceáil an féidir le WordPress fianáin a shocrú, An teanga roghnaithe a shábháil',
    'Conversion-Messung, Retargeting'
        => 'Tomhas tiontuithe, Athdhíriú',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Físeáin leabaithe a sheinm, Slándáil, Aithint an bhreathnóra chun críocha fógraíochta',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Comhrá beo agus cainéal teachtaireachtaí do thacaíocht ar an suíomh gréasáin, An cuairteoir a aithint idir amhairc leathanaigh agus cluaisíní, Staid agus socruithe na giuirléide a choinneáil i gcuimhne, Seisiúin agus imeachtaí a thomhas ar leathanaigh a bhfuil giuirléid orthu',
];
