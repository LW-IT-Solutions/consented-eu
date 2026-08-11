# Changelog

## [Unveroeffentlicht] — 2026-08-11 (Nachtrag 18)

### Die Zwecktexte des Katalogs sprechen 31 Sprachen

`lang/catalog/<code>.php` haelt ab jetzt die uebersetzten Zwecktexte: 379
Einzeltexte plus 51 zusammengesetzte, mal 31 Sprachen — 13 330 Eintraege. Der
Schluessel ist der deutsche Originaltext, nicht eine erfundene Kennung. Damit
gibt es nichts synchron zu halten, und ein Katalogeintrag, dessen deutscher Text
korrigiert wird, faellt auf Deutsch zurueck statt eine veraltete Uebersetzung
weiterzuzeigen. Das ist der richtige Ausfall: an einer alten Uebersetzung sieht
man nicht, dass sie alt ist.

**Gemessen statt vermutet, zweimal.** `data_collected` wird nirgends ausgegeben
— weder im Banner noch in der Erklaerung. Das sind 175 Zeichenketten mal 31
Sprachen, also 5 425 Uebersetzungen, die niemand je gelesen haette. Und
`description` traegt den Text, den der Betreiber der Property selbst
geschrieben hat; ihn maschinell zu uebersetzen hiesse, seine Formulierung durch
unsere zu ersetzen.

**Der Fallstrick waren die zusammengesetzten Zwecke.** ConfigBuilder fuegt die
`purposes` eines Eintrags mit `", "` zu einem Feld zusammen. Zur Laufzeit wieder
aufzutrennen liegt nahe und ist falsch: 87 der Einzeltexte enthalten selbst ein
`", "`, und 16 Katalogeintraege liessen sich dadurch falsch rekonstruieren. Die
Kombinationen werden deshalb einmal beim Erzeugen gebildet — aus den bereits
geprueften Einzeluebersetzungen, in derselben Reihenfolge — und stehen als
eigene Schluessel in der Datei. Nachgeschlagen wird danach exakt.

Erzeugt in 12 Laeufen, jeder von einer zweiten, unabhaengigen Stufe gegen das
deutsche Original geprueft: 70 Korrekturen. Die Pruefung hat gefunden, wofuer es
sie gibt — im Rumaenischen war aus einem „ob" ein „dass" geworden, womit eine
Pruefung zur Behauptung wird; im Spanischen lief das Genus bei Cookie-Bezuegen
auseinander; fuenf von sechs germanischen Sprachen hatten eine unflektierte
Form aus der deutschen Vorlage uebernommen.

**Diese Dateien gehoeren ins Repository, anders als `lang/banner/`.** Der
Katalog steht unter ODbL 1.0; eine uebersetzte Fassung seiner Inhalte ist eine
abgeleitete Datenbank, und ODbL 4.4 verlangt bei oeffentlicher Nutzung die
Weitergabe unter derselben Lizenz. Die Bannertexte sind dagegen MIT-lizenzierter
Code und duerfen zurueckgehalten werden. Der Unterschied ist die Lizenz der
Quelle, nicht unsere Vorliebe.

Kosten, gemessen an der Demo-Property mit zwei Sprachen: 18 Felder werden zur
Sprachkarte, 2 bleiben Zeichenkette, das Bundle waechst um 1,5 KB (10,2 %).

Wirksam wird das erst mit dem naechsten Veroeffentlichen einer Property —
Schnappschuesse sind eingefroren, und das ist bei einem Rechtsnachweis so
gewollt.

## [Unveroeffentlicht] — 2026-08-11 (Nachtrag 17)

### Kontaktformular, Telegram-Signal und reCAPTCHA v3

Neu ist `/kontakt`: ein Formular, das jeder erreicht — auch wer sich gerade
nicht anmelden kann, denn das ist die Person, die uns am dringendsten braucht.
Im Dashboard fuehrt ein Fragezeichen rechts in der Kopfzeile dorthin und nimmt
die aktuelle Seite als Herkunft mit.

Eine Seite, kein Modal. Ein Modal braucht einen Klick-Handler, und die CSP hier
laeuft ohne `'unsafe-inline'` und ohne `'unsafe-hashes'` — ein `onclick` waere
stillschweigend verworfen worden. Eine Seite ueberlebt ausserdem den Neuladen
und funktioniert ohne Fokusfalle mit der Tastatur.

**Das Telegram-Signal traegt genau einen Satz und keine Variable.** „Supportanfrage
(consented.eu) eingegangen." — mehr nicht. Damit ist Telegram kein Empfaenger
personenbezogener Daten und kein Auftragsverarbeiter nach Art. 28 DSGVO; die
Anfrage selbst verlaesst unsere Datenbank nie. `Signal::supportRequest()` nimmt
deshalb **keine Parameter**: eine Methode ohne Parameter kann man spaeter nicht
„nur diesmal" einen Namen reichen.

Weil eine Zusage, die nur im Kommentar steht, keine Zusage ist, prueft
`tests/signal.php` den Quelltext statt das Verhalten — ein Verhaltenstest saehe
eine gesendete Nachricht und waere zufrieden. Zehn Behauptungen, gegen vier
absichtlich kaputte Kopien geprueft: verkettete Nachricht, Absenderadresse im
Text, wieder eingebautes `parse_mode`, Link aus dem Host. Alle vier fallen durch.

### Was am Vorbild anders gemacht wurde

Das Muster stammt aus MousePlayerDev. Fuenf Dinge sind bewusst nicht uebernommen:

- Dort haengt der oeffentliche Endpunkt als globaler Kurzschluss in `lib.php` und
  feuert aus `admin_ajax.php` heraus, **bevor** deren Sitzungs- und
  Superadmin-Pruefung laeuft. Hier ist es eine eigene Route.
- Kein CSRF dort. Hier steht die Annahme in einer `csrf`-Gruppe — was beim
  Durchstich aufgefallen ist, weil eine Anfrage ohne Token gespeichert wurde.
- Das reCAPTCHA-Secret steht dort im **GET-Query-String** und landet damit in
  Zugriffs- und Proxy-Logs. Hier POST mit Formularkoerper.
- Die Action wird dort nie gegengeprueft; ein Token vom Kontaktformular waere am
  Anmeldeformular gueltig. Hier prueft `Captcha::verify()` sie.
- Dort fehlt bei drei von fuenf Aufrufen ein Timeout. Faellt Google aus, haengt
  jede Anmeldung 60 Sekunden und scheitert dann mit „du bist ein Bot".

### Der dritte Ausgang

`CaptchaCheck` kennt `HUMAN`, `BOT` und `UNAVAILABLE`. Das ist der Kern:

- `BOT` ist ein Nachweis — Google hat geantwortet und abgelehnt.
- `UNAVAILABLE` ist das Fehlen eines Nachweises. Was daraus folgt, ist eine
  Eigenschaft der geschuetzten **Aktion**, nicht des Captchas.

Bei Anmeldung, Registrierung und Passwort-vergessen wird durchgelassen, und die
Ratenbegrenzung bleibt die eigentliche Grenze. Fuer ein Einwilligungswerkzeug
ist „heute kommt niemand rein" der schlimmere Ausfall als „ein Bot musste
zusaetzlich am Rate-Limit vorbei". Diese Begruendung steht **einmal** in
`Auth\AuthCaptcha` — MousePlayer hat sie in fuenf Kopien, die schon
auseinandergelaufen sind.

Dieselbe Haltung im Browser: das Formular sendet spaetestens nach drei Sekunden
ab, auch wenn Google nie antwortet. Wer einen Werbefilter benutzt, waere sonst
dauerhaft ausgesperrt — beim Kontaktformular ausgerechnet die Person, die eine
Stoerung melden will.

Gemessen: ohne Token meldet man sich weiterhin an; mit erfundenem Token weist
Google ab und die Anmeldung scheitert.

### Kleinteiliges

- `inquiries`, nicht `support_requests`: `Auth\Support` ist hier bereits die
  Zugriffsfreigabe eines Administrators auf eine fremde Property.
- Die CSP nimmt Google nur auf den vier Seiten auf, die es brauchen. `script-src`
  braucht nichts — dort steht `'strict-dynamic'`.
- Gespeichert wird ein IP-**Hash** (Regel 4). `captcha_score` ist NULL, wenn
  nicht geprueft werden konnte; das ist etwas anderes als 0.0, und der Admin
  zeigt es, damit eine stille Dauerstoerung auffaellt.
- Der Admin listet, filtert und aendert den Status. Bewusst **keine**
  Antwortfunktion: beantwortet wird im Mailprogramm, in einem Verlauf, auf den
  der Absender antworten kann.
- Die Herkunfts-URL steht als Text, nicht als Link. Sie gehoert dem Absender.
- Beim Einrichten habe ich `chmod 600 .env` gesetzt und damit dem Webserver den
  Lesezugriff genommen — Eigentuemer `pi`, Apache laeuft als `www-data`. Jede
  Seite antwortete daraufhin mit 500. Richtig ist 640 bei Gruppe `www-data`.

## [Unveroeffentlicht] — 2026-08-11 (Nachtrag 16)

### Der Pruefhinweis wird zur Einstellung, nicht zur Behauptung

Der Kasten „nicht juristisch geprueft" stand auf der Sprachseite **jeder**
Property und wiederholte dort eine Einschraenkung, die fuer jeden Bannertext
gilt — auch fuer die selbst geschriebenen. Wer eine Warnung auf jeder Seite
sieht, liest sie nach dem dritten Mal nicht mehr; das war das Gegenteil dessen,
was sie sollte.

Neu ist `review_notices` in den Instanz-Einstellungen, **Standard aus**. Aus:
jedes mitgelieferte Paket traegt dasselbe neutrale Abzeichen „Texte enthalten",
denn das ist fuer alle wahr. An: 30 Pakete als „maschinell" markiert, de und en
gruen, dazu der erklaerende Kasten.

Was ausdruecklich **nicht** passiert ist: `Defaults::reviewedLanguages()` gibt
weiterhin nur `['de','en']` zurueck. Der Unterschied zwischen mitgeliefert und
freigegeben ist eine Tatsache, keine Anzeigeoption — der Schalter entscheidet,
ob die Oberflaeche sie erwaehnt, nicht ob sie gilt. Haetten wir stattdessen alle
Sprachen als geprueft eingetragen, stuende im Code eine Behauptung, die niemand
einloesen kann.

Aus demselben Grund sind die Kopfkommentare der 30 Bannerdateien umformuliert:
statt „NICHT JURISTISCH GEPRUEFT" steht dort jetzt, was zutrifft — maschinell
aus der deutschen Vorlage erstellt, fachlich gegengelesen, nicht anwaltlich
freigegeben, und den veroeffentlichten Wortlaut verantwortet ohnehin der
Betreiber der Property, der ihn im Texteditor ueberschreiben kann.

Der verbleibende Hinweistext hat die Angstformeln verloren. „Eine unglueckliche
Formulierung kann die Einwilligung unwirksam machen" sagte nichts, was ein
Betreiber nicht schon weiss, und half bei keiner Entscheidung.

Denselben Schalter bekommen die beiden Entwurfshinweise auf `/legal/dpa` und
`/legal/terms`. Sie sind von derselben Art — mitgelieferter Text, nicht
anwaltlich geprueft — standen aber als Dauerbanner auf oeffentlichen Seiten. Was
dort verschwindet, ist der Hinweis, nicht die Tatsache: die Dokumente sind
unveraendert, und `review_notices` holt sie jederzeit zurueck. Nebenbei stand im
AGB-Kasten der Pfad `views/site/legal/terms.php` fuer jeden Besucher lesbar.

### Banner zeigte die Rechtsgrundlage roh

Im Detailbereich eines Dienstes stand woertlich `legitimate_interest` — der
Enum-Wert aus dem Katalog. Die Cookie-Erklaerung loeste ihn laengst ueber
`legal_basis_*` auf, das Banner nicht; die Luecke entstand, als die Erklaerung
die Aufloesung bekam. Jetzt nehmen beide denselben Weg, mit Rueckfall auf den
Rohwert, falls der Katalog je eine vierte Rechtsgrundlage bekommt.

## [Unveroeffentlicht] — 2026-08-11 (Nachtrag 15)

### Bannersprachen als Auflage, und was beim Uebersetzen auffiel

Mitgeliefert im Projekt bleiben Deutsch und Englisch. Weitere Sprachen liegen
als `lang/banner/<code>.php` und werden von `Defaults::bannerOverlay()` je
Schluessel eingelesen — eine unvollstaendige Auflage faellt einzeln auf Englisch
zurueck, statt die Sprache mitzureissen. Welche Pakete eine Installation
mitbringt und ob sie sie weitergibt, entscheidet ihr Betreiber; das Verzeichnis
steht in `.gitignore`, die Mechanik gehoert zum Projekt.

Der Sprachcode landet in einem Dateipfad und wird hart auf zwei Kleinbuchstaben
geprueft. Nachgemessen: `../../etc/passwd` laedt null Schluessel.

**Mitgeliefert ist nicht geprueft.** Neben `translatedLanguages()` steht jetzt
`reviewedLanguages()` — nur was ein Mensch gelesen und freigegeben hat. Die
Sprachauswahl zeigt fuer alles andere ein Warn-Badge statt des gruenen Hakens,
darueber einen Kasten, der die betroffenen Sprachen namentlich nennt. Der Kasten
erscheint nur, wenn es wirklich ungepruefte Pakete gibt: eine Installation mit
nur Deutsch und Englisch soll keine Warnung ueber etwas lesen, das bei ihr nicht
vorkommt.

Fuer diese Instanz sind 30 weitere Sprachen erzeugt worden, jede von einer
zweiten, unabhaengigen Stufe gegen das deutsche Original geprueft. 21 ohne
Beanstandung, 8 korrigiert, keine verworfen. Was die Pruefung fand, ist der
Grund, warum es sie gibt:

- **Franzoesisch kam vollstaendig ohne Akzente.** „Parametres de
  confidentialite" statt „Paramètres de confidentialité", durchgaengig, in jedem
  Schluessel. Fuer franzoesische Besucher sieht das aus wie ein
  Encoding-Fehler — und ein Banner, das kaputt aussieht, beschaedigt die
  Glaubwuerdigkeit der Einwilligung, die es einholen soll.
- **Niederlaendisch fehlten die Tremata**: „technologieen" statt
  „technologieën", „Categorieen" statt „Categorieën".
- **Zitierweisen wichen von den amtlichen Fassungen ab.** Die franzoesische
  EUR-Lex-Fassung schreibt „article 6, paragraphe 1, point a)"; das
  Paragrafenzeichen ist dort unueblich und wird mit deutschem Recht assoziiert.
- Jede Sprache nennt die Verordnung mit ihrem amtlichen Namen: AVG, RGPD, IKÜM,
  VDAR, BDAR, dataskyddsförordningen, Општа уредба und so weiter — nicht
  ueberall „GDPR".

Unabhaengig davon mechanisch nachgeprueft, ohne dem Urteil der Pruefstufe zu
trauen: alle 52 Schluessel in allen 29 Sprachen vorhanden und nicht leer,
`{{privacy_policy_url}}` genau einmal je Sprache in einem intakten a-Tag,
`{{company}}` genau einmal, kein unerwartetes Markup. Null Beanstandungen.

Was das Produkt damit **nicht** behauptet: dass diese Texte juristisch geprueft
sind. Ein Bannertext holt eine Einwilligung ein, und eine unglueckliche
Formulierung kann sie unwirksam machen. Sie sind sofort einsetzbar, im
Texteditor ueberschreibbar und ueberall als ungeprueft gekennzeichnet.

## [Unveroeffentlicht] — 2026-08-11 (Nachtrag 14)

### Blocking-Muster fuer die neuen Dienste, am Endpunkt belegt

Aus den Einbau-Dokumentationen der angereicherten Anbieter kamen 62
Adress-Kandidaten fuer 34 Dienste. 24 davon hatten bereits belegte Muster; von
den zehn neuen sind sieben aufgenommen und von `bin/import-patterns` am
Endpunkt des Anbieters belegt worden: Brevo, Cloudflare Web Analytics, etracker,
hCaptcha, Klarna, Mapbox, Mollie. 10 von 10 Adressen antworteten. Katalog:
127 → **134 Dienste mit Muster**.

Drei Kandidaten sind bewusst nicht aufgenommen, mit Begruendung in der
Pruefliste:

- **friendly-captcha** — die dokumentierten Adressen sind serverseitige
  Pruef-Endpunkte (`/siteverify`). Der Server des Betreibers ruft sie auf, nicht
  der Browser. Ein Muster darauf wuerde nichts blockieren und nur so aussehen.
- **matomo-tag-manager** — liefert unter der Domain des Betreibers aus. Das
  Muster `/js/container_` traefe Dateien der Kundenwebsite.
- **piwik-pro** — liefert unter einer kontoeigenen Subdomain aus. Das Muster
  waere richtig, aber es gibt keine allgemein erreichbare Adresse, an der es
  sich belegen liesse. Ohne Beleg kein Muster.

### Ein Fehler, den diese Aenderung selbst erzeugt hat

Beim Zurueckschreiben der belegten Muster in die Seed-Datei sind **literale
Backslashes** in 14 Muster geraten: aus `googletagmanager.com/gtag/js` wurde
`googletagmanager.com\/gtag\/js`. Ursache ist die Ausgabe des MySQL-Clients im
Batch-Modus, die Backslashes verdoppelt; ein `json_decode` darauf liefert einen
echten Backslash. Der Stub vergleicht mit `indexOf` gegen die volle URL — solche
Muster treffen nie, und das Blocking waere fuer GA4, GTM, Meta Pixel, YouTube,
Maps, reCAPTCHA und acht weitere Dienste **still ausgefallen**.

Ausgeliefert war es nicht: die Bundles sind eingefrorene Schnappschuesse, und
die trugen weiter die richtigen Muster. Die naechste Veroeffentlichung haette es
scharf gestellt.

Repariert und gegengeprueft — nicht ueber den MySQL-Client, der den Fehler
erzeugt hat und ihn bei der Anzeige erneut vortaeuscht, sondern ueber PDO und
`json_decode`, also den Weg, den `ConfigBuilder` nimmt: 134 Dienste, 174 Muster,
null Backslashes. Gegenprobe zusaetzlich gegen `blocking-patterns.php`, die die
Muster von Hand fuehrt und nie durch MySQL gelaufen ist.

Dazu ein Abgleich, der vorher fehlte: `bin/import-patterns` schreibt in die
Datenbank, `bin/seed` setzt die Spalte aus der Datei. Ohne Ruecklauf loescht der
naechste Seed-Lauf, was der Importer eben belegt hat. Die Seed-Datei traegt die
Muster jetzt.

### `source_url` wird verlangt, wo es eine Quelle gibt

Die Pflicht zur Quell-URL hing an der Lizenz: alles ausser `public-fact`
brauchte eine. Das ist die falsche Achse — `public-fact` sagt „nicht
schutzfaehig" und nichts darueber, ob der Ursprung belegbar ist. Weil fast jeder
handgepflegte Eintrag `public-fact` traegt, liess die Regel genau die Eintraege
durch, fuer die es einen Beleg geben muss.

Jetzt entscheidet die Quellenart. Ausgenommen sind zwei, und nur zwei:
`own_scan` (eine eigene Messung hat keine fremde Seite) und der neue Zustand
`unsourced`.

**`unsourced` ist ein Eingestaendnis, kein Quellentyp** (Migration 0023). Die
neun Eintraege ohne belegbare Quelle standen als `primary_vendor_doc` im
Katalog, obwohl es zu keinem ein Anbieterdokument gibt. Diese Behauptung war
schlimmer als das Eingestaendnis: sie stellte das Gatter zufrieden und verbarg
die Luecke, die es finden soll. Sie duerfen nicht auf `verified` stehen, und
`bin/verify-catalog` zaehlt sie bei jedem Lauf namentlich auf.

Der urspruengliche Plan war, die Verschaerfung zu verschieben, bis die neun
geklaert sind. Das war schwaecher: es haette bedeutet, mit einem Gatter zu
leben, das die wichtigste Luecke nicht sieht. Nachgewiesen mit einem
Negativtest — ein Eintrag mit `primary_vendor_doc` ohne URL laesst die Pruefung
mit Exit 1 scheitern, ein sauberer Katalog mit Exit 0 durch.

## [Unveroeffentlicht] — 2026-08-11 (Nachtrag 13)

### Katalog aus Primaerquellen angereichert

46 Dienste aus den eigenen Dokumenten der Anbieter erhoben, jede Angabe
anschliessend gegen die zitierte URL nachgeprueft. **7 Eintraege haben die
Gegenpruefung unveraendert ueberstanden, 39 wurden korrigiert, 2 verworfen.**
Dieses Verhaeltnis ist das Ergebnis: ohne die Widerlegungsstufe waeren 39
Eintraege mit unbelegten Angaben in den Katalog gegangen.

Der Bestand: 374 → 385 Eintraege, davon 11 neu. Eintraege ohne Quellenangabe
42 → 9. Bewiesene Blocking-Muster: 127 vorher, 127 nachher — keines verloren.

Was die Gegenpruefung gefangen hat, in der Reihenfolge der Schwere:

- **Google Analytics, Aufbewahrung.** Der Eintrag fasste nutzer- und
  ereignisbezogene Fristen in einen Satz und behauptete damit eine
  nutzerbezogene Aufbewahrung von bis zu 50 Monaten. Googles Quelle nennt fuer
  Nutzerdaten 2 oder 14 Monate; die 26, 38 und 50 gelten ausschliesslich fuer
  Ereignisdaten in Analytics 360. Genau dieser Satz laeuft ueber die
  Cookie-Erklaerung in die Datenschutzerklaerung eines Kunden.
- **Hotjar verworfen.** Die zitierte Contentsquare-Seite dokumentiert Hotjar
  nicht — das Wort steht dort nur als Logo-Link in der Kopfnavigation. Alle
  Angaben galten dem Konzern und waeren auf das Produkt uebertragen worden.
- **Trustpilot verworfen.** Die Quelle beschreibt die Cookies von
  trustpilot.com, der Eintrag handelt aber vom TrustBox-Widget auf der
  Kundenseite. Dazu ein Satz, der als Regel taugt: `third_country: false` ist
  unbelegt, wenn die Quelle nur schweigt — im Kundendokument erscheint es als
  positive Behauptung.
- **Erfundene Zitate.** Mehrere Belege gaben die Spaltenfolge von Googles
  Cookie-Tabelle falsch wieder, waren also nachgebaut statt zitiert. Die
  Sachangaben stimmten; der Beleg war es nicht.
- **AdSense.** Stand mit Fremddaten im Katalog: `__eoi` mit 3 statt 6 Monaten,
  `ACLK_DATA` als Erstanbieter-Cookie statt auf `youtube.com`, `ANID` als
  aktives Cookie, obwohl Google es als nicht mehr gesetzt markiert, und zehn
  leere Zweckangaben. Jetzt aus Googles eigener Tabelle, gefiltert nach der
  Produktspalte — dadurch kleiner **und** richtiger: `pm_sess` und Verwandte
  gehoeren zu anderen Google-Produkten, `FCCDCF`/`FCNEC` zu Funding Choices.

Neu im Katalog, mit Schwerpunkt Europa, weil dort die Abdeckung der US-Kataloge
am schwaechsten ist: Brevo, Mollie, Klarna, Friendly Captcha, hCaptcha,
Piwik PRO, etracker, econda, Matomo Tag Manager, Cloudflare Web Analytics,
Mapbox, AdSense, Typeform.

Neun Eintraege bleiben ohne Primaerquelle. Bei keinem ist der Grund Faulheit —
Seiten waren nicht abrufbar, rein clientseitig gerendert, oder die einzige
auffindbare Quelle handelte von etwas anderem. Sie stehen mit Begruendung in
`docs/OPEN_QUESTIONS.md` statt mit geratenen Werten im Katalog.

### Drei Fehler, die dabei sichtbar wurden

**`bin/seed` hat redaktionelle Arbeit geloescht.** Jeder Lauf schrieb
`review_status` aus der Seed-Datei, und die liefert immer `draft`. Ein im
Dashboard auf `verified` gestellter Eintrag stand nach dem naechsten Einspielen
wieder auf `draft`, ohne dass sich an ihm etwas geaendert hatte. Aufgefallen,
weil genau das passiert ist. Der Seed ueberschreibt jetzt nur noch `draft`.

**`bin/verify-catalog` war rot, verursacht in dieser Sitzung.** Die Quelle
`own_scan` wurde benutzt, war aber in `THIRD_PARTY_DATA.md` nicht dokumentiert.
Jetzt dokumentiert, und dabei eine Begriffsverwirrung aufgeloest: `own_scan`
heisst die Untersuchung einer einzelnen abgerufenen Datei mit Pruefsumme, nicht
den Website-Scanner aus Phase 8, den es nicht gibt. Beides unter einem Label
haette spaeter zwei verschieden starke Belege gleich aussehen lassen.

**`data_retention` war VARCHAR(160).** Das reichte, solange die Angabe eine
Vereinfachung war. Die korrekte Analytics-Fassung braucht 447 Zeichen —
Migration 0022 stellt auf TEXT. Eine feste Obergrenze waere eine Einladung
gewesen, an der falschen Stelle zu kuerzen.

### Belege sind jetzt nachlesbar

`database/seeds/dps_catalog_evidence.json`: je Eintrag und je Feld das
woertliche Zitat aus der Anbieterseite, das die Angabe traegt. 368 Zitate fuer
46 Dienste. Beleg, keine Datenquelle — wird nicht eingespielt und nicht
ausgeliefert, sondern liegt im Repository, damit eine Katalogangabe gegen ihren
Ursprung pruefbar bleibt, auch wenn der Anbieter seine Seite aendert.

Dabei die haeufigste Beanstandung ueberhaupt, neunmal unabhaengig: ein Eintrag
entsteht aus drei bis fuenf Anbieterseiten, `source_url` ist aber eine Spalte.
Fuer Analytics traegt die eingetragene URL zwei von neun Cookies. Als offene
Frage in `docs/OPEN_QUESTIONS.md`, samt Vorschlag.

## [Unveroeffentlicht] — 2026-08-10 (Nachtrag 12)

### Einbettbare Cookie-Erklaerung

Das bekannteste Einzelartefakt der Branche und der Grund, aus dem Betreiber bei
Cookiebot bleiben, obwohl sie das Banner nicht moegen. Es fehlte vollstaendig,
obwohl das Rohmaterial seit Anfang an vorliegt: die Cookie-Angaben standen nur
im Dialog hinter zwei Klicks.

Zwei Formen derselben Sache:

    /p/{id}/cookies       eigenstaendige Seite, verlinkbar und druckbar
    /p/{id}/cookies.js    Skript, das dieselbe Auszeichnung in die
                          Datenschutzerklaerung des Kunden setzt

**Quelle ist der veroeffentlichte Schnappschuss, nicht der Arbeitsstand.** Eine
Erklaerung ist eine Aussage darueber, was der Browser eines Besuchers
tatsaechlich antrifft. Ein Entwurf, der einen Dienst nennt, den die Seite noch
nicht laedt, waere genauso falsch wie einer, der einen geladenen Dienst
verschweigt.

**Das Skript traegt fertige Auszeichnung, keine Daten plus Renderer.** Ein
zweiter Renderer in JavaScript waere ein zweiter Ort, an dem die Erklaerung
falsch sein kann. Die Seite des Kunden braucht so kein Template, keine
Gestaltungsentscheidung und kein Wissen ueber unsere Datenform. `JSON_HEX_TAG`
beim Verpacken, damit ein `</script>` in einem selbst getippten Text das
Skript-Element nicht vorzeitig schliesst und der Rest als Seitenmarkup landet.

**Es sieht aus wie das Dokument des Kunden.** Alles unter der Klasse
`consented-cd`, keine Schriftfamilie, keine Farben ausser geerbten, sparsames
CSS mit niedriger Spezifitaet — nachgemessen auf einer fremden Seite: die
Erklaerung erbt deren Schrift, und der `scrollWidth` der Seite ist mit und ohne
sie identisch, die Cookie-Tabellen scrollen in ihrem eigenen Container. Verbietet
die CSP des Kunden Inline-Styles, bleibt eine semantisch korrekte, unformatierte
Liste. Das ist der richtige Ausfall.

**Zwei Dinge, die der Katalog bisher roh anzeigte, sind jetzt aufgeloest:**

- `legal_basis` stand als Enum im Dialog — „legitimate_interest" wortwoertlich.
  Die drei Werte, die der Katalog kennt, haben jetzt einen Satz mit Fundstelle
  (`legal_basis_consent`, `_legitimate_interest`, `_contract`); ein unbekannter
  Wert faellt auf sich selbst zurueck, damit ein erweiterter Katalog nichts
  verschluckt.
- `.<domain>` als Cookie-Host — der Platzhalter, mit dem der Katalog „die eigene
  Domain der Seite" meint, und den ueber die Haelfte seiner Cookie-Eintraege
  traegt. Er wird durch die Primaerdomain der Property ersetzt. Bei fuehrendem
  Punkt faellt ein `www.` weg: ein Domain-Cookie ist praktisch nie auf das
  `www`-Label beschraenkt, sonst gaelte es auf der Apex-Domain nicht. Ohne
  hinterlegte Domain bleibt die Zelle leer und die Integrationsseite sagt warum.

**Kopfzeilen.** ETag ueber die gerenderte Ausgabe, also invalidiert eine
Veroeffentlichung von selbst; `If-None-Match` wird auch beantwortet und nicht
nur gesetzt — sonst haette jeder Aufruf einer gelesenen Datenschutzerklaerung
gut zwanzig Kilobyte fuer Markup geholt, das der Browser schon hatte.
`X-Robots-Tag: noindex` und ein Meta-Element auf der eigenstaendigen Seite: sie
traegt den Rechtstext des Kunden auf unserer Domain und darf seine eigene
Datenschutzerklaerung nicht ueberholen. Unbekannte ID, stillgelegte Property und
„noch nichts veroeffentlicht" liefern alle dieselbe 404 — der Endpunkt ist
oeffentlich, und drei unterschiedliche Antworten wuerden das Durchzaehlen
oeffentlicher IDs belohnen.

Kein Origin- oder Referer-Test. Das Skript wird auf den Seiten des Kunden
eingebettet, die Seite aber auch aus einer E-Mail verlinkt, und ein
Referer-Riegel wuerde genau das brechen, ohne jemanden aufzuhalten — beide
Kopfzeilen sind trivial faelschbar. Wo Domainpruefung wirklich etwas wert ist,
ist die Runtime, und dort passiert sie.

Im Dashboard steht die Karte auf der Integrationsseite, mit Sprachwahl,
Kopierknopf und Vorschaulink — sichtbar erst nach der ersten Veroeffentlichung,
weil ein Schnipsel, der 404 liefert, schlimmer waere als keiner.

### /docs: Schritt 5, und zwei Korrekturen an dem, was dort schon stand

Die oeffentliche Doku hat jetzt einen fuenften Schritt mit dem Einbett-Schnipsel,
der eigenstaendigen Seite und dem Hinweis, dass beide aus dem veroeffentlichten
Stand entstehen. Das `?lang=` im Beispiel folgt der Sprache, in der die Doku
gerade gelesen wird — `?lang=de` auf einer englischen Seite liest sich wie ein
Fehler im Beispiel.

Beim Schreiben fielen zwei falsche Aussagen auf, die dort schon standen:

- **„Der Stub: unter 1 KB"** war falsch, und zwar schon vor dieser Aenderung
  (damals 1532, jetzt 2157 Byte gzip). Steht auf „rund 2 KB ueber die Leitung",
  dazu der Satz, dass das Snippet nach einer Aenderung an Diensten oder am
  Consent-Mode-Schalter erneut eingefuegt werden muss — er las sich bisher, als
  waere er einmal eingebaut und fertig.
- **„entfernt das `src`-Attribut, bevor der Browser die Datei laedt"** stellte
  Musterblockade und deklaratives Blocken als gleichwertig dar. Sind sie nicht:
  bei Markup, das der Parser verarbeitet, kommt der Loader vor dem Abruf
  dazwischen, bei `appendChild` ist es ein Rennen. Der Satz beschreibt jetzt, was
  wirklich passiert, und ein Kasten daneben nennt die Grenze — dieselbe, die in
  `docs/OPEN_QUESTIONS.md` als Entscheidung offen steht. Wer sie nicht kennt,
  haelt die Musterblockade fuer einen Ersatz des deklarativen Wegs.

## [Unveroeffentlicht] — 2026-08-10 (Nachtrag 11)

### Was nachweislich falsch war

Aus dem Projektvergleich gegen kommerzielle CMPs blieben nach der Gegenpruefung
33 bestaetigte Luecken. Sieben davon waren keine Luecken, sondern **Stellen, an
denen das Produkt seine eigenen Regeln brach.** Die sind zuerst behoben, weil
jedes Verkaufsargument daran haengt.

**Mobil kehrte die Knopfreihenfolge sich um (Regel 8).** `cmp.js` setzte unter
640px `flex-direction:column-reverse` auf `.ce-actions`. Aus der konfigurierten
Reihenfolge wurde auf dem Telefon die Umkehrung — Akzeptieren an der Position
mit der hoechsten Trefferwahrscheinlichkeit, auf dem Geraet, das die Mehrheit
des Verkehrs stellt. Verschaerfend: die zweite Ebene rendert in `.ce-foot`, das
der Media Query nie umkehrte, also zeigten beide Ebenen unter 640px
**gegenlaeufige** Reihenfolgen — waehrend ein Kommentar im selben File zusichert,
die Position jeder Absicht bleibe ueber die Ebenen hinweg stehen. Jetzt
`column`. Nachgemessen an einer echten Seite bei 375px: die Reihenfolge von oben
nach unten ist die konfigurierte, DOM- und Sichtreihenfolge identisch.

**Der Observer sah nur Wurzeln (Blocking-Luecke).** Beide Observer prueften nur
`addedNodes` selbst und liefen deren Teilbaeume nicht ab. Vom Parser eingefuegtes
Markup war abgedeckt, aber ein
`el.innerHTML = '<div><iframe src=…></div>'` — die Form fast jedes
Embed-Snippets — entkam auch bei passendem Muster. `blockCandidates()` in
`cmp.js` und `candidates()` in `stub.js` laufen die Teilbaeume jetzt ab.
Funktional nachgewiesen: das `img` zwei Ebenen tief wird neutralisiert, ein
Kontrollfall ohne Musteruebereinstimmung bleibt unangetastet. Die verbleibende
Grenze — das Rennen mit dem Ladevorgang bei `appendChild` — steht in
`docs/OPEN_QUESTIONS.md` und wird nicht als geloest behauptet.

**Zwei Schalter ohne Wirkung (Regel 7).**

- `languageDetection` wurde angeboten, validiert und sogar ausgeliefert —
  `pickLanguage()` las es nie. Jetzt gilt es wortwoertlich: `browser` nimmt den
  Browser, dann die Seite, dann die Vorgabe; `html` nimmt das `lang`-Attribut
  der Seite, dann die Vorgabe; `default` immer die Vorgabe. Nur aktivierte
  Sprachen koennen gewinnen, ein unbekannter Wert faellt auf `browser`.
- `gcmMode` wurde gespeichert und erreichte den Browser nie. **Der Schalter ist
  entfernt statt verdrahtet**, denn es gibt nichts zu schalten: ob Googles Tag
  vor der Einwilligung laedt, entscheidet allein, ob es als Dienst mit
  `googletagmanager.com/gtm.js` blockiert ist — das ist die Dienstliste, nicht
  die Einstellungsseite. Ein zweiter Ort fuer dieselbe Entscheidung waere ein
  Ort, an dem beide auseinander laufen. Die Karte erklaert das jetzt.
  **Vier von sieben Properties hatten „basic" gewaehlt** und Advanced bekommen.

**Der Consent-Mode-Schalter war halb wirksam.** `googleConsentMode` aus
schaltete nur das `update` der Runtime ab; der Loader sendete die
`default`-Signale (alles `denied`) weiter, weil er nur ein globales
`__consentedNoGcm` kannte. Wer das Haekchen entfernte, fror Google dauerhaft auf
„abgelehnt" ein, statt es in Ruhe zu lassen. Der Loader liest den Schalter jetzt
als `data-no-gcm` von seinem eigenen Script-Tag.

**Gruener Haken fuer einen fehlenden Export (Regel 7).** Die Rechtematrix zeigte
„Einwilligungsprotokoll exportieren" fuer drei Rollen. Es gibt keinen Export —
kein Endpunkt, kein `Content-Disposition`, kein `fputcsv` im Baum. Zeile
entfernt, `Permission::EXPORT_CONSENTS` als reserviert kommentiert. Der
Widerspruch dahinter — `DECISIONS.md` verbietet Einsicht in einzelne
Datensaetze, waehrend Art. 7 Abs. 1 die Beweislast beim Kunden laesst — steht als
Entscheidung in `docs/OPEN_QUESTIONS.md`.

**Die Startseite versprach TCF.** Im Funktionsraster stand „IAB TCF v2.2 —
Vollstaendige `__tcfapi`-Implementierung, eigener TC-String-Encoder,
Vendor-Layer, Publisher Restrictions". `__tcfapi` kommt im gesamten Code null
mal vor. Das Kaestchen ist weg; die Vergleichstabelle fuehrt TCF weiter als „in
Vorbereitung", und `/features` erklaert in einem eigenen Abschnitt, warum der
Schalter aus bleibt, solange keine CMP-ID vorliegt. Ebenso raus: „Advanced und
Basic waehlbar" beim Consent Mode. Und der Cookie-Scanner stand als „in Arbeit",
obwohl von ihm zwei leere Tabellen und ein Absatz in `PLAN.md` existieren — jetzt
„in Vorbereitung", wie die eigene Funktionsseite ihn ohnehin fuehrt.

### Barrierefreiheit: der Dialog sagt jetzt, welche Sprache er spricht

Der Dialog trug kein `lang`. Ein polnischer Banner in einer deutschen Seite
wurde mit deutscher Stimme gelesen, und der Schattenbaum erbt die Sprache des
Wirtsdokuments. `lang` und `dir` stehen jetzt an `.ce-root` und am
Wiederoeffnen-Knopf, beide aus der tatsaechlich gewaehlten Bannersprache. `dir`
nicht wegen einer RTL-Sprache im Katalog — es gibt keine —, sondern weil eine
Wirtsseite mit `dir="rtl"` den Dialog sonst spiegelt.

`.ce-sr` war definiert und nie benutzt: es gab keine Live-Region. Statt die
Klasse zu verwenden ist sie entfernt und durch eine Region **ausserhalb** des
Dialogs ersetzt (`announce()`), denn `unmount()` entfernt den Dialog im selben
Zug — Text in einer Region, die das Dokument gerade verlaesst, wird von niemandem
angesagt. Neue Bannertexte `sr_saved` und `sr_withdrawn`, in beiden gelieferten
Sprachen und im Texteditor bearbeitbar. Wirksam werden sie je Property mit der
naechsten Veroeffentlichung; bis dahin greift der Literal-Rueckfall in `cmp.js`.

### Und ein Hinweis, der fehlte

Der Loader liest `data-block` und `data-no-gcm` von seinem eigenen Script-Tag,
weil er vor dem Property-Bundle laeuft. Also aendert sich das Snippet mit den
Diensten — und wer es nicht erneut einfuegt, blockiert nach altem Stand weiter,
ohne dass es auffaellt. Die Integrationsseite sagt das jetzt. Ob der Loader
besser pro Property ausgeliefert wird, damit sich das Snippet nie mehr aendert,
steht als Architekturfrage in `docs/OPEN_QUESTIONS.md`.

## [Unveroeffentlicht] — 2026-08-10 (Nachtrag 10)

### /admin/stats — und der Befund, dass das meiste schon existierte

Vor dem Bauen wurde erhoben, was der Admin-Bereich bereits zeigt: **ueber
vierzig Kennzahlen auf sechzehn Seiten.** /admin ist die Landeseite mit den
Bestandszahlen, /admin/properties ist die Rangliste nach Volumen und zeigt je
Zeile Version, verifizierte Domains, Dienste und Einwilligungen,
/admin/properties/{id} traegt Quote, Aufteilung und eine 30-Tage-Sparkline,
/admin/catalog die Pruefstatistik. Eine Seite mit „Statistiken fuer alles" waere
ueberwiegend eine zweite Wahrheit mit einem anderen Fenster gewesen.

Geblieben sind vier Dinge, die es nirgends gab:

- **Entscheidungen ueber 30 Tage**, instanzweit, als CSS-Balken. Umgezogen von
  /admin/system, weil die Tabelle Daten beschreibt und nicht die Installation.
- **Wachstum je Monat** — Konten, Properties, Veroeffentlichungen.
- **Bestand und Signale** mit Erst- und Letzterfassung.
- **Meistgenutzte Dienste ueber alle Properties.** Der Katalog zeigt je Eintrag,
  wie viele Properties ihn benutzen; die Verteilung gab es nicht.

Nicht gebaut: Zahlen je Property, Katalogabdeckung, Audit-Volumen je Aktion,
Tabellengroessen, Mail-Zaehler, ein Sitzungsverlauf. Die ersten fuenf stehen
bereits woanders, wo die Filter daneben auf dieselben Zahlen wirken. Der letzte
waere erfunden: `sessions` haelt nur lebende Zeilen, eine Verlaufslinie haette
keine Quelle.

### Vorberechnung statt Scan im Request

Die Seite rendert in **0,13 s**, weil sie nichts zaehlt. Migration 0021 legt
`stats_counters` und `stats_daily` an, `bin/worker` fuellt sie.

Zwei Tabellen und nicht eine: eine Bestandszahl hat keinen Tag, und ein
`PRIMARY KEY` vertraegt kein `NULL` — man landet sonst bei einem Platzhalterdatum,
das jeder Leser erst entschluesseln muss. Und nicht in `site_settings`: das ist
der Einstellungsvertrag, per Formular gepflegt und gegen `defaults()` gefiltert.

Die Tagesreihe wird **fortgeschrieben**, nicht neu gezaehlt: `consent_events` ist
append-only mit monoton steigendem Primaerschluessel, ein Wasserstand auf `id`
ist deshalb exakt. Kein Nachtragsfenster noetig — das Drei-Tage-Fenster der
bestehenden Aggregation existiert nur, weil dort aus `consents` aggregiert wird,
und die Tabelle ist veraenderlich. In einer Transaktion, damit ein Abbruch
zwischen Summieren und Merken nicht doppelt zaehlt; zweiter Lauf zaehlt 0.

Der Bestand wird nachts vollstaendig durchgezaehlt — derselbe Scan, den die Seite
nicht bezahlen soll, aber ohne wartenden Menschen und mit einem ehrlichen
`computed_at` daneben. Auf einem Pi 4 mit SD-Karte liest ein Cluster-Scan ueber
eine Million Einwilligungen rund 640 MB, das sind 16 bis 25 Sekunden.

### Was die Seite bewusst nicht behauptet

Der erste Entwurf enthielt sechs Kacheln, die etwas ausgesagt haetten, das die
Datenbank nicht hergibt. Die Pruefung hat sie erwischt:

- **Quoten erst ab zwanzig Einwilligungen.** Bei dreizehn ist „8 Prozent" eine
  Aussage ueber einen einzelnen Menschen. Darunter stehen die absoluten Zahlen
  und ein Satz, warum. Auf dieser Instanz greift die Schranke gerade.
- **Kein `0/0` als „0 %".** Der Anteilshelfer gibt `null` zurueck, und die Ansicht
  laesst den Block weg statt Nullbalken zu zeichnen.
- **„Noch keine Einwilligung erfasst"** kommt aus dem Lebenszeitwert, nicht aus
  dem 30-Tage-Fenster. Sonst waere der Satz auf jeder Instanz falsch, deren
  Verkehr aelter ist als das Fenster.
- **Bestand ist nicht die Summe der Entscheidungen** — steht als Hilfetext unter
  der Tabelle. `consents` haelt eine Zeile je Einwilligung und wird bei einer
  erneuten Entscheidung ueberschrieben; auf dieser Instanz: 13 im Bestand, 29
  Entscheidungen.
- **Der Ingest legt unbekannte Aktionen als „Auswahl gespeichert" ab.** Diese
  Zeile enthaelt deshalb auch fehlerhafte Meldungen, und das steht dort.
- **Sechs Aktionen, nicht vier.** Das Enum kennt auch `auto_expire` und
  `implicit`; die beiden erscheinen, wenn sie vorkommen — `implicit` mit dem
  Zusatz, dass es nicht vorkommen sollte.

### Zwei Korrekturen im Bestand

- **`/admin/system` druckte `impressions` als „Impressionen".** Der Worker setzt
  die Spalte auf `COUNT(*)` ueber `consents` und `no_interaction` auf konstant 0 —
  der Ingest kennt kein Einblendungs-Ereignis. Die Property-Ansicht laesst sie
  mit ausgeschriebener Begruendung weg, /admin/system zeigte sie: dieselbe Zahl,
  zwei Haltungen. Jetzt „Entscheidungen" = akzeptiert + abgelehnt + gespeichert.
- **Eine tote Abfrage entfernt.** `COUNT(*)` ueber `dps_catalog` lief bei jedem
  Aufruf der Uebersicht und wurde nie gerendert.

### Der Worker war nirgends eingeplant

Kein Crontab-Eintrag, kein Timer. Deshalb war `consent_stats_daily` leer, lagen
144 abgelaufene Sitzungen in der Tabelle, und die eingestellten
Aufbewahrungsfristen wurden nie vollzogen — eine Zusage, die nie gehalten wurde.
Der Eintrag ist gesetzt, taeglich 03:17 UTC.

## [Unveroeffentlicht] — 2026-08-10 (Nachtrag 9)

### getSend.xyz neu veroeffentlicht

v7. Der Datenschutz-Link im Banner zeigt jetzt auf
`https://www.getsend.xyz/en/privacy` statt auf den prozent-kodierten
Platzhalter. Am ausgelieferten Bundle nachgemessen.

### Impressum: Betreiberdaten eingetragen

LW IT Solutions Company Lukas Wójcik, Łódź, NIP PL7252266190. Woertlich
uebernommen — das Impressum ist rechtlich wirksamer Text, hier wird nichts
umformuliert oder ergaenzt. Sichtbar auf consented.eu und dev.

**Dabei ein Fehler aufgefallen, den die Daten erst sichtbar gemacht haben:** die
USt-IdNr. war mit „(gemaess § 27a UStG)" beschriftet — dem *deutschen*
Umsatzsteuergesetz. Fuer einen polnischen Betreiber stand damit eine Norm im
Impressum, die fuer ihn nicht gilt. Das Projekt ist selbst hostbar und
europaeisch gedacht; eine feste Fundstelle auf deutsches Recht gehoert nicht in
eine mitgelieferte Vorlage. Beschriftung jetzt neutral: „USt-IdNr." /
„VAT ID" / „NIP / VAT UE".

### docs/DATALAYER.md

Vollstaendige Beschreibung dessen, was in den dataLayer geht, wann, und was
davon als Trigger-Bedingung taugt. Geschrieben gegen die Implementierung, nicht
gegen die Spezifikation — mit den drei Korrekturen der Pruefer:

- `consented_ready` heisst **hoechstens** einmal pro Seitenaufruf, nicht genau
  einmal. Es bleibt aus, wenn die Konfiguration nicht erreichbar ist, die
  Property stillgelegt oder unveroeffentlicht ist oder die Domain nicht
  freigegeben ist. Deshalb steht in der Checkliste, Data-Layer-Variablen mit
  „Set Default Value" `pending` anzulegen — ein fehlendes Ereignis darf nicht wie
  eine Erlaubnis aussehen.
- Bei `consented_banner_shown` ist `consented` fuer `version_changed` und
  `expired` **nicht** `null`; es gibt eine gespeicherte Entscheidung, sie gilt nur
  nicht mehr. Das dokumentierte Beispiel sagt es jetzt.
- `consented_ui` traegt `hasDecision` und `language`, nicht nur was der Aufrufer
  mitgibt.

### Dritter Ereignisname in die Kollisionspruefung

Bisher wurde nur `ready` gegen `update` geprueft. Setzt jemand den Boot-Namen auf
den des Widerrufs, feuert ein Aufraeum-Tag bei jedem Seitenaufruf und loescht
Cookies, die niemand entzogen hat. Der Widerruf wird bei einer Kollision jetzt
**abgeschaltet** statt auf einen Namen gesetzt, den der Betreiber nicht gewaehlt
hat: ein Ereignis, das er nicht erwartet, waere schlimmer als keines.

## [Unveroeffentlicht] — 2026-08-10 (Nachtrag 8)

### Der Link zur Datenschutzerklaerung zeigte auf den Platzhalter

Im Banner fuehrte er auf `https://<domain>/%7B%7Bprivacy_policy_url%7D%7D` — der
Platzhalter, prozent-kodiert. Die Reihenfolge war verkehrt:
`Sanitizer::html()` schickt den Text durch `DOMDocument`, und libxml kodiert beim
Zurueckschreiben die geschweiften Klammern in URI-Attributen. Danach fand die
Regex in `interpolate()` nichts mehr, und die Ersetzung im Browser lief ins Leere.

`ConfigBuilder::texts()` setzt die Platzhalter jetzt **vor** dem Sanitizer ein.
Nebenbei die sicherere Reihenfolge: der Sanitizer prueft die tatsaechliche
Adresse gegen seine Erlaubnisliste, vorher pruefte er eine Zeichenkette, die noch
keine Adresse war. `interpolate()` in cmp.js bleibt fuer Texte, die ein Betreiber
selbst eintraegt.

Wirksam mit der naechsten Veroeffentlichung — ausgeliefert wird, was im
Schnappschuss steht.

### dataLayer-Einstellungen, zweite Scheibe

Fuenf weitere Schluessel: `dataLayerEventWithdrawn`, `dataLayerCategoryEvents`,
`dataLayerFlatKeys`, `dataLayerGoogleSignals`, `dataLayerUiEvents`. Alle
Vorgaben aus — mit allen Schaltern auf Vorgabe entsteht byteweise derselbe
Eintrag wie vorher, `{event, consented}` und nichts weiter.

Die Befunde der Pruefer sind eingebaut, nicht nachgetragen:

- **Eine Kategorie ohne Dienste meldet nichts.** `reportableCategories()` folgt
  derselben Regel wie der Dialog. Vorher haette
  `consented_granted_marketing` fuer einen Zweck gefeuert, der dem Besucher nie
  gezeigt wurde und hinter dem kein Empfaenger steht — eine
  Einwilligungsbehauptung ohne Datensatz.
- **Ein fehlender Schluessel ist `pending`, nicht `denied`.** `categoryState()`
  behauptete vorher eine Ablehnung, die niemand erklaert hat — die Lage nach
  einer Konfigurationsaenderung. `pending` erzeugt in keiner Stufe ein Ereignis.
- **`consented_google` existiert auch fuer den Unentschiedenen.** `gcmSignals()`
  ist aus `updateGcm()` herausgezogen und wird in `start()` unbedingt berechnet.
  Vorher fehlte der Schluessel genau bei dem Besucher, der nicht eingewilligt
  hat, und eine GTM-Bedingung „ist nicht gleich denied" traf fuer ihn zu.
- **Die GCM-Zuordnung akzeptiert nur die sieben echten Signale.** Vorher schrieb
  die Schleife jeden Schluessel, auch einen erfundenen.
- **Mengen als CSV plus Zaehler, nie als Array.** GTMs Datenmodell mischt Arrays
  index-weise; ein spaeteres kuerzeres liesse Reste des frueheren lesbar, und
  eine `contains`-Bedingung saehe einen Dienst, der laengst abgelehnt ist.
- **Der ganze Push-Block laeuft in einem `try`.** Die Tag-Schicht darf einen
  Besucher nie sein Banner, den Einstellungen-Link oder die ready-Zuhoerer
  kosten.

`needsPrompt()` gibt jetzt den Grund zurueck (`no_decision`, `version_changed`,
`expired`) statt eines Booleans — das `banner_shown`-Ereignis braucht ihn, und
die drei Bedingungen ein zweites Mal nachzubauen waere die Stelle, an der zwei
Kopien derselben Regel auseinanderlaufen.

Es gibt bewusst **kein** „nur denied" bei den Kategorien-Ereignissen: wer
ausschliesslich Ablehnungen in die Tag-Schicht schickt, baut eine Auswertung, in
der Einwilligung nicht vorkommt.

Geprueft mit 39 Zusicherungen gegen die echte Runtime, dazu die bestehenden
Suiten (21 dataLayer-Fundament, 35 Scrollbalken, 10 activateScript, 9
Reihenfolge) und der Durchstich durch das Formular.

## [Unveroeffentlicht] — 2026-08-10 (Nachtrag 7)

### dataLayer-Einstellungen, erste Scheibe

Vier Schluessel unter *Einstellungen › dataLayer*: `dataLayerEnabled`,
`dataLayerName`, `dataLayerEventReady`, `dataLayerEventUpdate`. Die Vorgaben sind
genau das bisherige Verhalten — ein veroeffentlichter Schnappschuss ohne diese
Schluessel faellt in der Runtime auf dieselben Werte zurueck, eine Property
aendert also durch das Update nichts.

Der Ereignisname beim Aendern kam vorher aus
`action === 'accept_all' ? 'consented_update' : 'consented_update'` — ein Ternaer
mit zwei identischen Zweigen. Welche Aktion es war, steht als `consented.action`
im Payload; der Rest ist entfallen.

**Vor der Umsetzung geprueft, und die Pruefung hat den Entwurf korrigiert.** Vier
Befunde waren schwerwiegend genug, die Spezifikation zu aendern statt sie
umzusetzen:

- `dataLayerName = 'location'` haette jede Kundenseite in eine Neuladeschleife
  geschickt. `w[name] = w[name] || []` liefert bei einem belegten Namen die rechte
  Seite zurueck, und der Setter von `window.location` navigiert. Bei `document`
  oder `top` wirft die Zuweisung im strict mode und nimmt Banner, Freigabe und
  Warteschlange mit. `dlPush()` schreibt jetzt **nie** ueber einen belegten Namen,
  prueft auf `.push` und schluckt jeden Fehlschlag — die Tag-Schicht darf einen
  Besucher nie sein Banner kosten.
- Die freien Ereignisnamen liessen `consented_granted_analytics` zu. Ein GTM-Tag
  an diesem Trigger haette beim Erstbesucher gefeuert, mit `consented: null`,
  also **ohne jede Einwilligung**. Der Namensraum `consented_granted_*` /
  `consented_denied_*` und die Namen `consented_banner_shown` /
  `consented_settings_opened` sind jetzt gesperrt, an beiden Prueforten: im
  Server und in `dlEventName()` fuer Schnappschuesse, die den Server nie gesehen
  haben.
- Tragen beide Ereignisse denselben Namen, waren Boot und Aenderung in GTM nicht
  unterscheidbar. Der zweite faellt jetzt auf seine Vorgabe.
- `dataLayerName` gilt ausdruecklich **nur** fuer die Produkt-Events. Die
  Consent-Mode-Aufrufe bleiben auf `window.dataLayer`, weil der Stub im `<head>`
  die Property-Konfiguration nicht kennt; ein umbenanntes Array haette `default`
  und `update` in zwei verschiedene Arrays gelegt und Consent Mode still
  zerlegt. Steht als Hinweis unter dem Feld, nicht nur in der Doku.

Geprueft mit 21 Zusicherungen gegen die echte Runtime (inklusive `location`,
`document`, ein Objekt statt Array und eine Zeichenkette als Ziel) und 29 gegen
die serverseitigen Validatoren, dazu die drei Schranken durch das echte Formular.

Noch nicht gebaut: Kategorien-Ereignisse, flache Variablen, UI-Ereignisse, der
GCM-Spiegel und `dataLayerEventWithdrawn`. Die zugehoerigen Befunde stehen in der
Spezifikation und werden mit ihnen zusammen umgesetzt.

## [Unveroeffentlicht] — 2026-08-10 (Nachtrag 6)

### GPC-Besucher waren fuer die Tag-Schicht unsichtbar

Der Global-Privacy-Control-Pfad in `start()` kehrte nach `commit()` sofort
zurueck — vor `pushDataLayer('consented_ready')` und vor `emit('ready')`. Wer
per GPC ablehnt, loeste in GTM also keinen Trigger aus und bekam kein
ready-Ereignis: derselbe Besucher, fuer den die Ablehnung am verlaesslichsten
feststeht, kam in der Tag-Schicht nicht vor.

Der Zweig faellt jetzt durch. Den Banner haelt `needsPrompt()` von selbst
zurueck, weil `commit()` gerade einen Zustand mit aktueller Version geschrieben
hat. Das eigene `drainQueue()` im Zweig ist entfallen — mit dem Durchfallen
haette die Warteschlange sonst jeden vorgemerkten Aufruf verdoppelt.

### Consent Mode lief hinter den Skripten her

`updateGcm()` stand am **Ende** von `applyConsent()`, also nach beiden
Freigabeschleifen. Ein freigegebenes Google-Tag konnte damit starten, bevor
`gtag('consent','update')` im dataLayer lag, und arbeitete dann mit den
Vorgabewerten des Stubs statt mit der Entscheidung des Besuchers. Fuer Consent
Mode ist das die falsche Reihenfolge.

`updateGcm()` steht jetzt als erstes in `applyConsent()`. Geprueft mit einem
Test, der die echte Funktion ausfuehrt und die Aufrufe mitschreibt:
`updateGcm -> scan:placeholder -> installObserver`. Gegenprobe: entfernt man den
Aufruf, schlaegt der Test an.

Beide Fehler stammen nicht aus den DataLayer-Einstellungen, sondern wurden bei
deren Entwurf gefunden.

## [Unveroeffentlicht] — 2026-08-10 (Nachtrag 5)

### E-Mail-Adresse selbst aendern

Bisher stand auf der Kontoseite ein deaktiviertes Feld mit dem Hinweis, man
solle sich fuer eine Aenderung melden. Jetzt gibt es den ueblichen Ablauf: die
Adresse wechselt erst, wenn der Link in der Mail an die **neue** Adresse
angeklickt wurde.

- Keine Migration noetig. `email_verifications` hatte die Spalte `email` von
  Anfang an, nur hat `verify()` sie nie gelesen. Genau dafuer ist sie da: sie
  haelt die Adresse, deren Besitz nachgewiesen werden soll.
- `issueToken(User $user, ?string $target = null)` — mit Zieladresse geht der
  Link dorthin, ohne bleibt es die Erstbestaetigung. Ablauf-Invalidierung, TTL
  und Mail-Layout werden mitbenutzt statt nachgebaut.
- Bis zum Klick bleibt die alte Adresse die des Kontos, und die Anmeldung
  funktioniert unveraendert.

Drei Schranken, alle gepruueft:

| Versuch | Ergebnis |
|---|---|
| falsches Passwort | abgewiesen, kein Token erzeugt |
| eigene Adresse | abgewiesen |
| Adresse eines anderen Kontos | abgewiesen, kein Token erzeugt |

Das aktuelle Passwort ist Pflicht, wie beim Passwortwechsel. Ohne das genuegte
eine uebernommene Sitzung, um ein Konto wegzutragen: neue Adresse eintragen,
Link im eigenen Postfach klicken, fertig.

Zwei Mails an die **alte** Adresse: eine beim Antrag, eine beim Vollzug. Wer den
Antrag nicht gestellt hat, erfaehrt davon, solange die Adresse noch seine ist.

Die Eindeutigkeit wird zweimal geprueft — beim Antrag und beim Klick. Zwischen
beidem koennen 24 Stunden liegen, und in der Zeit kann sich jemand mit genau
dieser Adresse registrieren.

**Kein Auto-Login beim Wechsel.** Die Erstbestaetigung meldet an, weil Leute
Links im Mailprogramm oeffnen. Beim Wechsel ging der Link an eine Adresse, die
bis zu diesem Moment nicht die des Kontos war; ihn zur zweiten Tuer in eine
Sitzung zu machen haette keinen Nutzen.

Eigene Audit-Aktionen `auth.email_change_requested` und `auth.email_changed`,
beide mit `Audit::diff()` von alter auf neue Adresse. Nicht `email_verified`
mitbenutzt: der Pruefpfad soll unterscheiden, ob eine Adresse bestaetigt oder
ausgetauscht wurde.

### Property-Kacheln: hoechstens drei pro Zeile

`.grid--3` benutzte `minmax(240px, 1fr)` mit `auto-fit` und legte damit so viele
Spalten an, wie hineinpassen — auf einem breiten Schirm fuenf oder sechs. Bei
fuenf Properties stand alles in einer Zeile, der erste Name abgeschnitten. Die
Untergrenze ist jetzt zusaetzlich die Breite einer von drei Spalten, also
`max(240px, (100% - 2 * var(--space-5)) / 3)`; eine vierte passt damit nicht mehr
hinein, und auf schmalen Schirmen bricht das Raster weiter um.

`grid--2` und `grid--4` haben denselben Widerspruch zwischen Name und Verhalten,
sind aber unangetastet.

## [Unveröffentlicht] — 2026-08-10 (Nachtrag 4)

### Unsichtbare Überschrift im Banner

Zwei Properties trugen `heading` gleich `background` (beides `#FFFFFF`). Im
Banner fehlte damit der Titel, im Dialog zusätzlich die Kategorienamen — sie
nutzen dasselbe Token. Beide Werte entfernt, die Runtime fällt für `.ce-title`
auf `text` zurück; ConsentedEU und Stats4U als v3 veröffentlicht.

Kein Fehler im ausgelieferten Standarddesign: **kein** helles Preset definiert
`heading` überhaupt, und der Rückfall auf `text` ist richtig. Der weiße Wert kam
aus der Farbmaske, in der das Feld sichtbar auf Weiß stand.

Am Archiv wurde nichts geändert — v1 und v2 tragen den Wert weiter, v3 die
Begründung. Anders als bei `rejectBg` (Migration 0019) ist `#FFFFFF` für
`heading` eine echte, wenn auch falsche Farbwahl; sie beim Ausliefern zu
überschreiben wäre Magie ohne Grenze.

### Preset-Kontraste über AA gezogen

Ein Durchlauf über alle Presets mit `DesignController::contrastRatio()` — also
derselben Funktion, die die Designseite anzeigt — fand drei Kombinationen unter
WCAG 2.1 AA. Die Werte sind der kleinste Schritt, der die Schwelle nimmt, statt
einer geschätzten Farbe:

| Preset | Token | vorher | nachher |
|---|---|---|---|
| Dark | `textSubtle` | `#737C8D` 4,18:1 | `#7A8393` 4,60:1 |
| Dark Box (unten) | `textSubtle` | `#8A919C` 4,24:1 | `#9097A1` 4,57:1 |
| Dark Box (unten) | `primaryText` | `#FFFFFF` 2,82:1 | `#0F1419` 6,57:1 |

Beim letzten nicht das rechnerische Minimum (`#2E3337`, 4,53:1), sondern der
Wert, den `dark_wide` für denselben Fall schon verwendet — weiße Schrift auf
hellem Blau ist nicht zu retten, ohne das Blau zu verlieren, und zwei
verschiedene Lösungen für dasselbe Problem wären eine zu viel.

Migration 0020 zieht `textSubtle` in bereits gespeicherten Designs mit. Begründung
wie bei 0019: für `textSubtle` gibt es **kein Feld** in der Farbmaske, der Wert
kann nur aus einem Preset stammen, also wird keine Entscheidung eines Betreibers
überschrieben. `primaryText` bleibt unangetastet — das Feld existiert, die Wahl
ist echt, und wo sie unter der Schwelle liegt, meldet es die Kontrastprüfung.

## [Unveröffentlicht] — 2026-08-10 (Nachtrag 3)

### Eigenes Banner auf den eigenen Seiten

Eine CMP, die auf der Seite ihres Anbieters fehlt, ist ein Argument gegen sich
selbst. Die Instanz spielt jetzt eine ihrer eigenen Properties aus — auf allen
Seiten, direkt nach `<body>`, damit der Stub blockieren kann, bevor etwas
Blockierbares startet.

- Neue Klasse `Site\SelfEmbed`, Einstellung `self_cmp_property` hält die
  öffentliche Kennung. Leer = kein Banner, das ist die Vorgabe.
- Adressen aus `Url::cdn()`, Blockliste aus `ConfigBuilder::stubPatterns()` —
  dieselben Quellen wie der Ausschnitt, den die Integrationsseite dem Betreiber
  zeigt. Eine handgepflegte Kopie im Layout wäre nach dem ersten neuen Dienst
  falsch, ohne dass es jemand merkt.
- Blockliste in `storage/cache/self-embed`, 300 s. Sie kostet mehrere Abfragen
  und ändert sich nur beim Veröffentlichen; auf einem Raspberry Pi ist das der
  Unterschied zwischen „unmerklich" und „auf jeder Seite". Der Nonce wird
  ausdrücklich **nicht** zwischengespeichert.
- Nicht veröffentlichte oder stillgelegte Properties liefern kein Snippet aus.

**CSP erweitert, und das war zwingend.** Das Banner meldet die Entscheidung an
`/api/v1/consent` der Auslieferungsadresse. Auf der Apex-Domain ist das
dieselbe Herkunft, auf `dev.*` nicht — `connect-src 'self'` hätte den POST
verworfen und das schlechtestmögliche Ergebnis erzeugt: ein sichtbares Banner,
das keine Einwilligung speichern kann. Die Herkunft kommt aus `CDN_URL`/`APP_URL`,
nicht aus den Einstellungen: `dashboardPolicy()` läuft auf jeder Antwort, auch
auf Fehlerseiten, und darf die Datenbank nicht brauchen.

### Die Design-Vorschau zeigt die eingetippten Farben

Sie rendert bisher ausschließlich das Preset. Wer eine Farbe änderte, sah nichts
davon — die Frage „sieht das gut aus" war erst nach dem Speichern beantwortbar,
also dann, wenn sie nichts mehr nützt.

- `/demo/frame` nimmt jetzt die `token_*`-Felder an, gelesen mit **derselben**
  Methode wie der Speicherpfad (`DesignController::tokensFromRequest()`). Die
  Muster stehen an einer Stelle: Tokens landen unverändert in einem Stylesheet,
  und eine zweite Kopie wäre genau der Ort, an dem eine Farbe aus einer URL
  ungeprüft dort ankommt. Geprüft: `red;background:url(x)`, `9999vh` und ein
  halb getippter Hexwert fallen auf das Preset zurück.
- Der Frame lädt einmal statt elfmal: `setParams()` setzt alle Felder in einem
  Zug, Eingaben entprellt mit 350 ms.

## [Unveröffentlicht] — 2026-08-10 (Nachtrag 2)

### Scrollbalken im Dialog

Im dunklen Banner stand am rechten Rand ein hellgrauer Windows-Scrollbalken mit
Pfeilknöpfen — und zwar zwei davon übereinander.

**Ursache 1, der überzählige Balken.** `.ce-panel` rechnete
`max-height:calc(100vh - 32px)`, passend zu den 16px Innenabstand des
Backdrops. Nur misst `position:fixed;inset:0` den Viewport *ohne* horizontale
Scrollbar, `100vh` misst ihn *mit*. Auf einer Wirtsseite, die seitlich scrollt,
war das Panel rund 15px höher als der Platz, den es hatte, und der Backdrop bekam
einen eigenen Balken neben dem Panel. Jetzt `max-height:100%` — das löst gegen
den Inhaltsbereich des Backdrops auf und stimmt für jede Abstandsvariante
(0, 16px, 20px, `boxOffset`), ohne Arithmetik, die man nachziehen muss.

**Ursache 2, der zweite Balken.** Panel und Inhaltsbereich scrollten beide:
`.ce-pane` hatte `max-height:min(52vh,460px)`, das Panel seine eigene Grenze.
Das Panel ist jetzt eine Flex-Spalte, `.ce-pane` wächst mit `flex:1 1 auto` und
`min-height:0` in den Platz, den Kopf, Reiter und Fuß übrig lassen — ein
Scroller statt zwei.

**Neue Designoption `scrollbar`** (Migration 0018):

| Wert | Wirkung |
|---|---|
| `subtle` (Vorgabe) | dünn, Daumen aus `currentColor` bei 26 %, keine Pfeilknöpfe |
| `strong` | dasselbe bei 46 %, für mehr Sichtbarkeit |
| `native` | unverändert wie das Betriebssystem |

Die Farbe kommt aus `currentColor`, also dem Text-Token — die eine Farbe, die
gegen den Panelhintergrund lesbar ist, egal welche Palette der Betreiber
gewählt hat. Ein festes Grau verschwände auf dunklem Grund, und die
Rahmen-Tokens sind für Haarlinien gedacht, nicht für einen Griff. `color-mix`
trägt den echten Wert, davor steht ein flacher Fallback aus `border2` für
Browser ohne Unterstützung.

**Kein „ausblenden".** Im Dienste-Reiter steht die Liste, in der jemand einzelne
Dienste abwählt. Zu verstecken, dass sie weitergeht, wäre genau die Sorte
Gestaltung, die CLAUDE.md Regel 8 verbietet.

Geprüft, indem `styleSheet()` aus `cmp.js` per `vm` ausgeführt und das erzeugte
CSS geprüft wurde — 32 Zusicherungen, alle drei Modi, inklusive der
Fallback-Reihenfolge und der Token-Herkunft der Farben. Die Regeln werden zur
Laufzeit aus einer Selektorliste zusammengesetzt; ein Blick in die Quelle sagt
darüber nichts.

## [Unveröffentlicht] — 2026-08-10 (Nachtrag)

### Pluralformen in der Oberfläche

Der Untertitel des Dienste-Katalogs schrieb bei einem Treffer „1 Einträge". Es
gab keine Pluralbehandlung — 28 Schlüssel trugen `:count`, drei davon den
Notbehelf sichtbar im ausgelieferten Text: `:count Eintrag/Einträge`,
`:count Nachricht(en)`, `noch :count Schritt(e)`. Die polnische Übersetzung war
dem Problem systematisch ausgewichen, indem sie die Zahl ans Satzende stellte
(`Kont na tej instancji: :count.`).

`Lang` wählt jetzt die Form. Katalogwerte trennen sie mit `|` in
CLDR-Reihenfolge, Deutsch und Englisch zwei, Polnisch drei. Konventionen in
[CLAUDE.md](CLAUDE.md#pluralformen).

- **Ein Wert ohne `|` geht unberührt durch.** Deshalb merken die übrigen 1682
  Schlüssel nichts und keine Aufrufstelle musste angefasst werden. `|` kam in
  keinem der drei Kataloge vor.
- **Die Form wird nach der Herkunftssprache des Textes gewählt**, nicht nach
  der eingestellten. Fehlt ein polnischer Schlüssel und greift der Rückfall auf
  Deutsch, hat der Text zwei Formen — die polnische Regel würde Index 2
  verlangen, den es nicht gibt.
- **Die Zahl wird aus dem Wert extrahiert.** Die Aufrufstellen übergeben
  gemischt `count(...)` und `View::number()`; ohne das wäre „1.234" eine 1 und
  stünde im Singular.
- `Lang::get()` und `Lang::inLocale()` hatten die Platzhalterersetzung doppelt
  implementiert; sie liegt jetzt in einer privaten Methode.

16 Schlüssel haben Formen bekommen, geprüft in allen drei Sprachen. 11 der 28
haben bewusst keine: bei `Zeichen` und `Muster` ist die deutsche Pluralform
identisch, `property.texts.custom_count` kongruiert mit `:total` statt mit
`:count`, und der Rest sind knappe Kennzahl-Fragmente wie `:count live`, in die
ein Nomen zu zwingen schlechter wäre als der Verzicht.

### Die Live-Suche wählt die Form nicht mehr selbst

Die Vorschau-Vorlage für die Trefferzahl war ein Platzhalter `%COUNT%` in einem
`data-template`-Attribut. Das ist mit Pluralformen unhaltbar: die Formauswahl
bekommt aus `%COUNT%` keine Ziffer, fällt auf die generische Form zurück, und
die Vorlage trägt dann dauerhaft den Plural — beim Filtern auf genau einen
Treffer wäre wieder „1 Einträge" erschienen, auf dem Pfad, den man bei jedem
Tastendruck trifft.

Stattdessen liefert der Server den fertigen Satz in einem `<template>` mit der
Trefferliste mit; das Skript schiebt ihn nur an seinen Platz. Die Pluralregel
bleibt in `Lang` und wandert nicht nach JavaScript — bei Polnisch wären es
sonst drei Vorlagen und eine zweite Kopie der Regel.

### bin/lang-sync --check sieht halbe Pluralwerte

`--check` zählte einen Schlüssel als übersetzt, sobald er nicht leer war. Eine
polnische Zeile mit zwei statt drei Formen hätte weiter 100 % gemeldet, das
Format also lautlos verfallen lassen.

- Formenzahl je Sprache über `Lang::pluralForms()`
- leere Formen (`'ein Eintrag|'` ist nicht leer und rutschte durch)
- Parität: ein Pluralwert in der Referenz muss überall einer sein
- Exit-Code 1, wenn etwas fehlt — vorher endete `--check` immer mit 0

## [Unveröffentlicht] — 2026-08-10

### MousePlayer und Stats4U im DPS-Katalog

Beide Dienste stehen jetzt im Katalog (374 Einträge), beide als `draft`, beide
mit Angaben, die an der **ausgelieferten** Datei geprüft sind — nicht aus einer
Beschreibung übernommen.

- **Stats4U** — `source_type = primary_vendor_doc`, getragen von
  <https://www.stats4u.net/privacy>. Cookiefrei nachgeprüft: die ausgelieferte
  `s4u.js` (6285 B, md5 identisch zur Serverdatei) nutzt weder Cookies noch
  localStorage, sessionStorage, IndexedDB oder sendBeacon. Der Zähler ist eine
  Bildanfrage mit `action`, `s4uid`, `sndref`, `url` und Cache-Brecher. Kein
  Zugriff auf die Endeinrichtung, § 25 TDDDG greift nicht — daher
  `legal_basis = legitimate_interest`. Aufbewahrung 30 Tage laut Anbieter.
- **MousePlayer** — `source_type = own_scan`, weil es keine
  Anbieterdokumentation gibt. Die ausgelieferte `mp.js` (6014 B) ist ein Lader:
  sie schreibt selbst nichts auf das Endgerät, lädt aber per
  `createElement('script')` Code nach und öffnet
  `wss://mouseplayer.com/mp_wss/`. `cookies: []` gilt deshalb **nur für den
  Lader** und steht so auch im Eintrag.
- Blocking-Muster an den Anbieter-Endpunkten belegt: `mouseplayer.com/mp.js`
  und `stats4u.net/s4u.js` antworten mit 200 und `text/javascript`.

Was fehlt, fehlt sichtbar statt geraten: MousePlayer hat keine erreichbare
Datenschutzerklärung (404), keine Aufbewahrungsfrist und kein Sitzland. Die
offenen Punkte samt einem Widerspruch in der Stats4U-Erklärung stehen in
[docs/OPEN_QUESTIONS.md](docs/OPEN_QUESTIONS.md).

### bin/seed trug die Provenance nie ein

Die Pflichtfelder aus CLAUDE.md 13 existierten in `dps_catalog`, aber der
einzige Weg, auf dem Einträge hineinkommen, füllte sie nicht — die Regel „ohne
Herkunftsnachweis lehnt die Pipeline hart ab" war für den Seed nie wirksam.

- `bin/seed` überträgt jetzt `source_*`, `pattern_*`, `review_status` und
  `review_notes`, aber nur wenn die JSON sie nennt: einen Wert mit `null` zu
  überschreiben würde den Herkunftsnachweis zerstören, statt ihn zu führen
- Neue Einträge ohne `source_type`, `source_url` und `source_license` werden
  abgelehnt, Exit-Code 1
- Für die 42 Einträge, die vor diesen Spalten geseedet wurden, gilt die
  Ablehnung absichtlich nicht — sie zu verweigern würde den Seed für alle
  brechen. Sie werden am Ende namentlich aufgezählt, damit die Lücke sichtbar
  bleibt

### Live-Suche im Dienste-Katalog

Die Trefferliste auf `/properties/{id}/services/catalog` aktualisiert sich beim
Tippen, entprellt mit 250 ms.

- Der Server antwortet mit **HTML**, nicht mit JSON: Vollseite und AJAX-Antwort
  rendern aus demselben Template `views/properties/services/catalog-results.php`.
  JSON hätte bedeutet, die Karten in JavaScript zu bauen — und damit einen
  zweiten, handgeschriebenen Escaping-Pfad für Namen und Anbieter aus dem
  Katalog. Genau die Stelle, an der Regel 3 sonst leise ausfällt.
- Neue Route `GET /properties/{id}/services/catalog/search` mit derselben
  Rechteprüfung wie die Seite (`EDIT_PROPERTY`); kein Seiteneingang
- Antworten werden nach Sequenznummer verworfen, wenn sie überholt sind — beim
  Tippen von „goo" ist die kürzeste Anfrage nicht zwangsläufig die langsamste
- Ohne JavaScript bleibt das GET-Formular samt Knopf funktionsfähig; das Skript
  nimmt nur den Umweg weg
- `aria-live="polite"` und `aria-busy` am Trefferbereich; Skript nonce'd, keine
  Inline-Handler (die CSP verwirft sie, siehe Nachtrag 3)

### Lücken, die den Kunden betreffen, sind am Eintrag markiert

Fehlt einem Katalogeintrag die Datenschutzerklärung des Anbieters oder die
Aufbewahrungsfrist, trägt die Karte ein Abzeichen. Beides braucht der Betreiber
für seine eigene Auskunft nach Art. 13 DSGVO.

Bewusst **nicht** an `review_status` gehängt: 373 von 374 Einträgen stehen auf
`draft`, weil der Review-Workflow nie gelaufen ist. Ein Abzeichen darauf hätte
auf fast jeder Karte gesessen und nichts gesagt. Die beiden Feldlücken treffen
44 beziehungsweise einen Eintrag — das ist eine Ausnahme und liest sich auch so.

## [Unveröffentlicht] — 2026-08-09 (Nachtrag 4)

### Lizenz auf MIT vereinfacht

Das gesamte Projekt steht jetzt unter der **MIT-Lizenz** — Server, Dashboard,
Browser-Runtime, Migrationen, Dokumentation. Eine Datei, eine Lizenz.

- `LICENSE-SDK` und `NOTICE.md` entfallen; die Split-Konstruktion aus
  AGPL-3.0 plus MIT-Ausnahme nach § 7 wird nicht mehr gebraucht
- Nutzung privat und gewerblich, gehostet wie selbst gehostet, ohne Rückfrage
  und ohne Gebühr; einzige Bedingung ist der Copyright-Hinweis
- Begründung und die Konsequenz, die das hat, in
  [docs/DECISIONS.md](docs/DECISIONS.md#1-lizenzmodell--entschieden-mit)

Der Grund: Ziel des Projekts ist, dass Leute schnell und kostenlos eine
funktionierende CMP bekommen. Die AGPL hätte dem entgegengearbeitet — viele
Unternehmen verbieten sie per Richtlinie, auch für rein internen Betrieb, wo
sie gar nichts fordern würde.

### Repository

- Projekt liegt unter `LW-IT-Solutions/consented-eu`
- Neue Klasse `src/Core/Project.php` hält Organisation, Repository- und
  Issue-Adressen an einer Stelle, statt sie über Views, README und
  Dokumentation zu verteilen
- Klon-Befehle auf Startseite und Self-Hosting-Seite, GitHub-Verweis im
  Marketing-Footer und als dritter CTA im Hero
- `docs/SECURITY.md`: Meldeweg über GitHub Security Advisories (privat)

## [Unveröffentlicht] — 2026-08-09 (Nachtrag 3)

- **Oberfläche auf Deutsch, Englisch und Polnisch.** `Lang` mit flachen
  Katalogen unter `lang/`, Spracherkennung über `?lang=` → Kontoeinstellung →
  Cookie → `Accept-Language` → Deutsch, `hreflang`-Verweise, dynamisches
  `<html lang>`, Sprachumschalter in allen Layouts.
  **1097 Schlüssel, 100 % Abdeckung in allen drei Sprachen.**
- View-Helfer `t()` (escaped) und `tr()` (Markup erlaubt, Werte escaped),
  globaler `__()`-Helfer für Klassen
- Validierungsmeldungen über Katalogschlüssel mit `:field`-Platzhalter; die
  Feldbezeichnung kommt aus `validation.field.*`, weil im Deutschen das Genus
  und im Polnischen zusätzlich der Kasus über die Formulierung entscheidet
- `bin/lang-sync` mit `--scan` (verwendet, aber nicht definiert), `--check`
  (Abdeckung), `--import` (JSON einpflegen) und `--format`
- Rechtsseiten tragen in EN/PL den Hinweis, dass die deutsche Fassung
  maßgeblich ist; Paragraphenangaben bleiben unübersetzt

### Behoben

- **Die CSP hat sämtliches Inline-CSS verworfen.** In
  `style-src 'self' 'nonce-…' 'unsafe-inline'` ignorieren CSP-3-Browser
  `'unsafe-inline'`, sobald ein Nonce dabeisteht. Ein Nonce lässt sich an
  `<style>` hängen, aber nicht an ein `style="…"`-Attribut — 205 davon waren
  projektweit betroffen. Skripte behalten den strikten Nonce-Schutz.
- **Cache-Buster war wirkungslos.** `app.css?v=1` war hartkodiert bei
  `max-age=604800`: jede CSS-Änderung hätte wiederkehrende Besucher erst nach
  sieben Tagen erreicht. Jetzt aus `filemtime()`.

### Vorschauseite

- Neu gestaltet und **eigenständig**: eigenes Layout `standalone.php`, gesamtes
  CSS inline, kein Verweis auf `app.css`. Ein einziger Request von 10 KB, kein
  render-blockierendes Stylesheet, unempfindlich gegen Cache-Stände.
- Login- und Registrieren-Buttons entfernt; `/register` liefert 404, solange
  der Host die Vorschauseite zeigt. `dev.consented.eu` bleibt unberührt.
- Kontrast geprüft: `--ink-faint` lag mit 4,39:1 unter WCAG AA, jetzt 5,4:1.

## [Unveröffentlicht] — 2026-08-09 (Nachtrag 2)

- **Neues Layout „Box unten (zentriert)"** (`box_bottom`): freistehende Karte
  über dem unteren Rand statt Balken über die volle Breite, mit optionalem
  abgedunkeltem und weichgezeichnetem Hintergrund. Neues Preset **Dark Box**
  in der Optik des Screenshots
- **Zweite Ebene neu aufgebaut** nach dem Usercentrics-Muster: Reiter
  *Kategorien* mit Hauptschalter je Kategorie und aufklappbarer Liste der
  enthaltenen Dienste mit Einzelschaltern, Reiter *Erweitert* mit allen
  Diensten flach inklusive Cookie-Tabellen und Detailangaben
- **Auswahlzustand als Entwurfsobjekt:** Ein Dienst erscheint jetzt an zwei
  Stellen; der Zustand liegt deshalb in einem Draft im Speicher statt im DOM,
  und beide Schalter werden daraus synchronisiert. Ein Kategorie-Schalter setzt
  alle enthaltenen Dienste, ein Dienst-Schalter berechnet den Kategoriestatus neu
- Button-Beschriftung „Einstellungen" → **„Mehr Informationen"**
- **Fehler behoben:** Die zweite Ebene warf für Erstbesucher eine TypeError,
  weil `aboutPane()` auf `CMP.state` zugriff, bevor es existierte. Ohne
  vorhandene Einwilligung war der Dialog damit nicht zu öffnen
- Migration 0008: `property_design.layout` von ENUM auf VARCHAR — die
  Layout-Liste steht in `Defaults::layouts()` und wurde von der ENUM
  dupliziert, was bei jedem neuen Layout eine Migration erzwang

## [Unveröffentlicht] — 2026-08-09 (Nachtrag)

- **Lizenz festgelegt:** AGPL-3.0-or-later für Server und Dashboard, MIT für
  die Browser-Runtime, dazu eine ausdrückliche zusätzliche Erlaubnis nach
  AGPL § 7 in `NOTICE.md`, die das Einbinden von `cmp.js` freistellt
- **Mailversand auf das MousePlayer-Muster umgebaut:** PHP `mail()` statt
  eigenem SMTP-Client, Absenderadresse aus `site_settings`, ein globales
  Template mit `{{CONTENT}}`. Zusätzlich `mail_log` mit vollständigem
  Nachrichtentext, damit bei ausgeschaltetem Versand kein Bestätigungslink
  verloren geht
- **Administration unter `/admin`:** Übersicht mit Systemzustand,
  Nutzerverwaltung (Adminrechte, manuelle Verifikation, Löschen), alle
  Properties, Dienste-Katalog, Mail-Protokoll mit Inhaltsansicht und
  Testversand, Instanz-Einstellungen
- **Rechtsseiten aus den Einstellungen gespeist:** Impressum, Datenschutz und
  AV-Vertrag lesen die Betreiberangaben aus `site_settings`, statt sie in
  Templates zu hinterlegen
- **„Demnächst verfügbar"-Seite:** pro Host über `SetEnv CE_COMING_SOON` im
  vhost, zusätzlich instanzweit über die Einstellungen schaltbar
- `bin/seed-demo` legt Test- und Administratorkonto samt veröffentlichter
  Demo-Property an; `--remove` räumt wieder auf
- Migration 0007: `site_settings`, `mail_log`, `users.is_admin`

## [Unveröffentlicht] — 2026-08-09

Erste lauffähige Fassung. Phasen 0 bis 5 des Briefs plus Consent Mode v2.

### Infrastruktur

- Let's-Encrypt-Zertifikate für `consented.eu`, `www.consented.eu` und
  `dev.consented.eu` über `acme.sh`, mit `--install-cert`-Hooks nach
  `/etc/apache2/ssl-ce{,2,3}` und automatischer Erneuerung über die
  bestehende `pi`-Crontab
- Apache-vhosts für Port 80 und 443, angehängt an `000-default.conf` und
  `default-ssl.conf` nach der auf diesem Server üblichen Konvention
- HTTP leitet auf HTTPS um, `www` kanonisch auf die Apex-Domain,
  `dev` mit Basic Auth und `noindex`
- ACME-Challenges sind von Umleitung und Auth ausgenommen, damit die
  Erneuerung nicht an der eigenen Konfiguration scheitert

### Kern

- Router mit Middleware-Pipeline (`auth`, `guest`, `csrf`, `verified`)
- PDO-Wrapper, ausschließlich Prepared Statements
- Migrationsrunner mit `--status` und `--fresh`; 6 Migrationen, 29 Tabellen
- View-Engine mit Sections, Layouts und Escaping-Helfern
- Datenbankgestützte Sitzungen mit Geräteliste und Sammelabmeldung
- Rate Limiting mit Redis und sauberem DB-Fallback
- CSP mit Per-Request-Nonce, `strict-dynamic`, ohne `unsafe-inline`
- HTML-Sanitisierung per Allow-List, CSS-Sanitisierung gegen externe `url()`
- Eigener SMTP-Client mit `log`-Treiber als Standard, damit nichts still verloren geht

### Anwendung

- Landing Page mit interaktiver Demo auf Basis der echten Runtime
- Registrierung, Login, Passwort-Reset, E-Mail-Verifikation — alle
  enumeration-sicher
- Dashboard mit Property-Karten, Onboarding-Checkliste und handlungsfähigen Hinweisen
- Properties mit vollständiger Standardkonfiguration ab dem ersten Speichern
- Domains mit Verifikation per DNS-TXT oder Datei
- 32 Sprachen, vollständige DE- und EN-Texte, Übersetzungsfortschritt
- Text-Editor mit Standardvergleich und Zurücksetzen je Key
- DPS-Katalog mit 42 geseedeten Diensten, dazu eigene Dienste
- Design-Editor mit Presets, Live-Vorschau und WCAG-Kontrastprüfung
- Rollen, Einladungen, Audit-Log
- Integrationsseite mit Snippet, Blocking-Beispielen und API-Referenz
- Öffentliche Auskunft und Löschung per Einwilligungs-ID

### Runtime

- `stub.js` (1,46 KB gzip): Musterblocking ab der ersten Zeile,
  GCM-Standardwerte vor GTM
- `cmp.js` (16,3 KB gzip inkl. Konfiguration): Shadow DOM, vier Layouts,
  zweite Ebene mit Kategorien, Diensten und Cookie-Tabellen
- Fokusfalle, `role="dialog"`, vollständige Tastaturbedienung,
  ESC gilt nie als Einwilligung
- Deklaratives und musterbasiertes Blocking, Cookie-Aufräumen bei Widerruf
- Public API: `ready`, `openSettings`, `acceptAll`, `denyAll`, `withdraw`,
  `getConsent`, `hasConsent`, `getConsentId`, `on`/`off`
- GPC wird als Ablehnung gewertet, wenn die Property es aktiviert

### Datenschutz

- Keine Klartext-IP: HMAC-SHA-256 mit rotierendem Pepper, Fail-Closed bei
  fehlendem Pepper
- Seiten-URLs nur als Hash, User-Agent nur als Familie
- Append-only-Verlauf je Einwilligung
- Retention-Job, Standard 36 Monate

### Bewusst nicht enthalten

- **IAB TCF** — blockiert durch die Registrierungsfrage, siehe
  `docs/TCF_REGISTRATION.md`. `__tcfapi` wird bewusst **nicht** registriert.
- Cookie-Scanner, Analytics-Oberfläche, A/B-Tests, GPP, 2FA, Logo-Upload
- Automatisierte Tests
