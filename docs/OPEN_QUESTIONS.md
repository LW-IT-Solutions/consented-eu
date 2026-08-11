# Offene Fragen

Punkte, bei denen ich eine Annahme getroffen habe, die du kennen solltest —
oder bei denen ich bewusst nichts entschieden habe.

## Angenommen, bitte bestätigen oder korrigieren

### 1. Eine Vorschau-Domain ist kein Staging

Der Brief nennt eine zweite Domain, sagt aber nichts über ihre Rolle. Sie zeigt
zunächst auf dasselbe Verzeichnis und dieselbe Datenbank wie die Produktion,
abgeschirmt durch Basic Auth und `X-Robots-Tag: noindex`.

**Das ist kein echtes Staging.** Wer dort testet, verändert Produktionsdaten,
und eine Fehlermeldung mit Stacktrace zeigt Interna einer Installation, die
echte Einwilligungen hält. Für eine getrennte Umgebung braucht es ein zweites
Verzeichnis, eine zweite Datenbank und eine eigene `DocumentRoot` im vhost.

Für den produktiven Betrieb gehört das aufgelöst — es steht deshalb auch auf der
Liste dessen, was vor einem Livegang zu klären ist. Wie die eigene Installation
konkret konfiguriert ist, gehört in die Betriebsdokumentation des Betreibers und
nicht in ein öffentliches Repository.

### 2. `www.consented.eu` leitet dauerhaft auf die Apex-Domain um

301 von `www` auf `consented.eu`, damit es kein Duplicate Content gibt. Ein
eigenes Zertifikat für `www` existiert trotzdem, sonst schlüge der Aufruf
schon vor der Weiterleitung mit einem Zertifikatsfehler fehl. Falls `www`
kanonisch sein soll, ist das eine Zeile in `default-ssl.conf`.

### 3. Registrierung ohne Verifikation nutzbar, Property erst danach

Doppel-Opt-In ist umgesetzt, aber ich lasse Leute nach der Registrierung ins
Dashboard, statt sie auszusperren. Ohne bestätigte Adresse geht nur kein
Property-Anlegen. Begründung: Wer nach der Registrierung auf eine Sackgasse
trifft, kommt oft nicht zurück. Wenn du strenger willst, ist es die
`verified`-Middleware vor `/dashboard`.

### 4. Keine externen Abhängigkeiten

Der Brief erlaubt sechs Composer-Pakete. Ich habe keins genommen: UUIDv7,
SMTP, HTML-Sanitisierung und Env-Parsing sind jeweils 40 bis 200 Zeilen, und
`composer install` als Installationsvoraussetzung widerspricht dem
Self-Hosting-Versprechen. Für PHPUnit in der Entwicklung ändert sich das —
das ist eine reine Dev-Abhängigkeit.

Für TOTP (`robthree/twofactorauth`) würde ich die Ausnahme empfehlen: Eine
selbstgeschriebene TOTP-Implementierung ist genau die Sorte Kryptografie, die
man nicht selbst schreibt.

### 5. Konfiguration steckt in `cmp.js`

Siehe [ADR 0002](adr/0002-inline-config.md). Ein Request statt zwei, dafür
kein geteilter Cache über Properties hinweg. Bei sehr vielen Properties auf
einer Instanz kehrt sich die Rechnung um.

## Nicht entschieden, weil es nicht meine Entscheidung ist

- ~~**Lizenz**~~ — entschieden: MIT für das gesamte Projekt, siehe
  [DECISIONS.md](DECISIONS.md#1-lizenzmodell--entschieden-mit).
- **TCF-Registrierung** — siehe [TCF_REGISTRATION.md](TCF_REGISTRATION.md).
- **Fair-Use-Schwelle** — siehe
  [DECISIONS.md](DECISIONS.md#2-hosting-kosten-und-tragfähigkeit).
- **Impressum und Verantwortlicher** — die Rechtsseiten sind Vorlagen mit
  sichtbaren Platzhaltern. Ich trage dort keine erfundenen Anbieterangaben ein.

## Technische Fragen, die eine Antwort brauchen

### Wie kommt der Apache-Reload nach einer Zertifikatserneuerung zustande?

`acme.sh` läuft nächtlich als `pi` und legt die erneuerten Zertifikate über die
`--install-cert`-Hooks selbstständig nach `/etc/apache2/ssl-ce*`. Nur der
Reload fehlt, weil `pi` kein passwortloses `sudo` hat. `consented-reload.sh`
versucht `sudo -n` und protokolliert nach `/home/pi/consented-cert.log`, wenn
es nicht klappt.

Eine Zeile in `visudo` macht die Erneuerung vollautomatisch:

```
pi ALL=(root) NOPASSWD: /usr/bin/systemctl reload apache2
```

Ohne sie läuft nach 90 Tagen ein Zertifikat ab, das längst erneuert auf der
Platte liegt — der klassische stille Ausfall.

### Wohin gehen die E-Mails?

Versand läuft wie bei MousePlayer über PHP `mail()` und den MTA des Hosts. Die
Absenderadresse und der Ein-/Ausschalter stehen in `site_settings` und werden
unter **/admin/settings** gepflegt.

Der Schalter steht auf **aus**. Jede Nachricht wird vollständig in `mail_log`
festgehalten und ist unter **/admin/mail** lesbar — Bestätigungslinks gehen
also nicht verloren, sie werden nur nicht zugestellt.

Auf diesem Host läuft aktuell kein MTA (`systemctl is-active postfix` →
inactive), `sendmail_path` zeigt auf `/usr/sbin/sendmail`. Zum Aktivieren:
MTA einrichten, dann in der Administration „Mailversand aktiv" setzen und die
Testnachricht auslösen.

### Soll `consented.eu` sein eigenes CMP wirklich einbinden?

Die Startseite wirbt mit Dogfooding und hat bereits einen
`data-consented-open`-Link im Footer. Das Snippet selbst ist noch nicht
eingebaut, weil dafür erst eine Property für die eigene Domain angelegt und
veröffentlicht werden muss. Sobald du das willst: Property anlegen, Domain
`consented.eu` verifizieren, Snippet in `views/partials/head.php`.

### Geo-Auflösung

Der Consent-Endpunkt liest ein Länderkennzeichen nur aus CDN-Headern
(`CF-IPCountry` und Varianten). Ohne CDN bleibt das Feld leer. Eine
IP-basierte Auflösung habe ich bewusst nicht gebaut: Sie würde bedeuten, die
Adresse für einen Zweck zu verarbeiten, der nichts mit der Einwilligung zu tun
hat. Falls Regionsregeln (Phase 9) kommen, muss diese Frage neu beantwortet
werden.

### 36 Dubletten im Katalog nach dem Import

Der Katalog enthält denselben Dienst zweimal, weil zwei Quellen ihn
unterschiedlich benennen: mein ursprünglicher Seed führt `tiktok-pixel`, die
Open Cookie Database führt `tiktok`. Betroffen sind 36 Paare, darunter
`meta-pixel`/`facebook`, `linkedin-insight`/`linkedin`,
`pinterest-tag`/`pinterest`, `microsoft-ads`/`microsoft`,
`plausible`/`plausible-analytics`, `zendesk-chat`/`zendesk`,
`spotify-embed`/`spotify` und `x-twitter-pixel`/`x`.

Dazu kommt ein Sammeleintrag `google` neben sieben spezifischen
Google-Einträgen, sowie `matomo`, `matomo-cloud` und `matomo-self-hosted`
nebeneinander.

Vollständige Liste:

```sql
SELECT a.dps_id, a.source_type, b.dps_id, b.source_type
  FROM dps_catalog a JOIN dps_catalog b
    ON a.id < b.id
   AND (b.dps_id LIKE CONCAT(a.dps_id,'-%') OR a.dps_id LIKE CONCAT(b.dps_id,'-%'))
 ORDER BY a.dps_id;
```

**Warum das nicht bloß unordentlich ist.** Wer eine Property einrichtet, sieht
in der Auswahlliste „TikTok" und „TikTok Pixel" untereinander und muss raten.
Wählt er den falschen, greift ein anderes Blocking-Muster als erwartet — bei
`tiktok` (aus der OCD, ohne Muster) nämlich gar keines. Die Dublette ist damit
kein Schönheitsfehler, sondern ein Weg, versehentlich ungeschützt zu bleiben.

**Warum ich es nicht selbst zusammengeführt habe.** Ein Merge entscheidet, welche
`dps_id` überlebt. Bestehende Properties verweisen über `property_dps` auf die
Katalog-ID; die falsche Richtung zu wählen heißt, in fremden Konfigurationen
Dienste zu verändern. Das ist eine inhaltliche Entscheidung, keine Aufräumarbeit.

**Vorschlag.** Der Seed-Eintrag gewinnt, wo es ihn gibt — er trägt Muster,
GCM-Signale und geprüfte Texte, der OCD-Eintrag nur Cookie-Namen. Die
Cookie-Listen aus der OCD wandern in den Seed-Eintrag, der OCD-Eintrag wird auf
`is_active = 0` gesetzt statt gelöscht, damit `property_dps`-Verweise nicht ins
Leere zeigen. Den Sammeleintrag `google` würde ich deaktivieren: „Google" ist
als Dienst keine sinnvolle Einwilligungseinheit.

Ein Werkzeug dafür gibt es noch nicht. Sag Bescheid, wenn der Vorschlag passt,
dann baue ich `bin/merge-duplicates` mit Trockenlauf.

### Der Kunde sieht den Prüfpfad nicht

Seit dem Support-Zugriff (DECISIONS 3b) kann der Instanz-Betreiber die
Konfiguration einer fremden Property vollständig bearbeiten. Jeder Vorgang wird
protokolliert — aber `audit_log` ist ausschließlich unter `/admin/audit` lesbar,
also nur für den Betreiber selbst.

Damit ist die Transparenz einseitig: Es gibt einen Nachweis, aber die einzige
Partei, die ihn braucht, kommt nicht daran. Ein Kunde, dessen Banner sich
plötzlich anders verhält, hat keine Möglichkeit festzustellen, ob er das selbst
war, ein Kollege, oder der Betreiber.

**Vorschlag.** Eine Ansicht `/properties/{id}/activity`, die `audit_log`
gefiltert auf diese Property zeigt — Zeitpunkt, Aktion, Akteur als Name, und bei
`admin.support_*` den hinterlegten Grund. Sichtbar für Rollen mit
`VIEW_PROPERTY`. Keine IP, keine Diffs fremder Konten, keine Einträge anderer
Properties.

Das ist kein großes Stück Arbeit — die Daten liegen vollständig vor, und die
Filterlogik gibt es in `SystemController::audit()` bereits. Ich habe es nicht
mitgebaut, weil es eine Produktentscheidung ist: eine solche Ansicht macht auch
sichtbar, wie oft der Betreiber in Kundenkonten arbeitet, und das will man
vielleicht bewusst.

Solange sie fehlt, sollte der Support-Zugriff im AV-Vertrag unter `/legal/dpa`
benannt sein, damit der Kunde wenigstens weiß, dass es ihn gibt.

### MousePlayer und Stats4U: was nur der Anbieter beantworten kann

Beide Dienste stehen seit dem 10.08.2026 im Katalog, beide als `draft`. Die
technischen Angaben sind an der ausgelieferten Datei geprüft, nicht aus einer
Beschreibung übernommen. Was fehlt, fehlt bewusst.

**MousePlayer** — `source_type = own_scan`, weil es keine Anbieterdokumentation
gibt, an der man etwas prüfen könnte:

- Keine erreichbare Datenschutzerklärung. `/datenschutz` und `/privacy`
  antworten mit 404. Für einen Dienst, den Websites einbetten, ist das eine
  Lücke bei den Einbettenden: Art. 13 DSGVO verlangt von *ihnen* Angaben über
  den Empfänger, und die können sie nirgends nachlesen.
- Keine Aufbewahrungsfrist, kein Rechtsträger, kein Sitzland. `third_country`
  steht auf `false`, weil der Endpunkt nachweislich auf eigener Infrastruktur
  liegt — aber `provider_country` bleibt leer, statt „DE" zu raten.
- Die ausgelieferte `mp.js` ist ein Lader (6014 B). Sie schreibt selbst nichts
  auf das Endgerät, lädt aber per `createElement('script')` weiteren Code nach
  und öffnet `wss://mouseplayer.com/mp_wss/`. **`cookies: []` gilt deshalb nur
  für den Lader.** Ob das nachgeladene Skript speichert, ist offen — und genau
  das ist die Frage, die über `consent` mitentscheidet.

**Stats4U** — hier gibt es eine Datenschutzerklärung, und sie trägt den
Eintrag (`source_type = primary_vendor_doc`). Ein Widerspruch bleibt:

- Die Erklärung nennt die Bildschirmauflösung unter dem, was erhoben wird. Das
  Skript überträgt sie nicht mehr; `res=` ist entfernt, `window.screen` steht
  nur noch in einem Kommentar, der die Entfernung begründet. Die Erklärung sagt
  also mehr, als passiert.
- Das ist die harmlose Richtung des Fehlers, aber sie sollte weg: eine
  Erklärung, die nachweislich nicht zum Verhalten passt, ist als Nachweis
  wertlos, auch wenn sie zu viel angibt.
- `legal_basis = legitimate_interest` steht dort, weil kein Zugriff auf die
  Endeinrichtung stattfindet — cookiefrei nachgeprüft, md5 der ausgelieferten
  Datei identisch zur Serverdatei — und § 25 TDDDG damit nicht greift. Wer das
  anders bewertet, ändert ein Feld, nicht den Befund.

Beide gehen auf `verified`, sobald diese Punkte beantwortet sind. Bis dahin
zeigt das Dashboard sie als Entwurf, und das ist richtig so.

### 42 Katalogeinträge ohne Provenance

`bin/seed` trug die Provenance-Spalten bisher überhaupt nicht ein — die
Pflichtfelder aus CLAUDE.md 13 existierten in der Tabelle, aber der einzige
Weg, auf dem Einträge hineinkommen, füllte sie nie. Das ist behoben: neue
Einträge ohne `source_type`, `source_url` und `source_license` lehnt `bin/seed`
jetzt ab und endet mit Exit-Code 1.

Für die 42 Einträge in `dps_catalog.json` gilt die Ablehnung absichtlich nicht.
Sie liegen längst in der Tabelle; sie beim Aktualisieren zu verweigern würde
den Seed für alle brechen, statt die Lücke zu schließen. Stattdessen zählt
`bin/seed` sie am Ende auf.

Sie nachzutragen ist Handarbeit und keine Fleißaufgabe: für jeden Eintrag muss
belegt werden, woher die Angaben kommen. Wer das macht, sollte pro Eintrag die
Datenschutzerklärung des Anbieters als `source_url` setzen, `source_type` auf
`primary_vendor_doc` und `source_retrieved_at` auf den Tag, an dem er sie
gelesen hat — nicht auf das Datum des Seeds.

### Das Wettrennen beim Blocking per DOM-Einfügung

Beide Observer laufen jetzt die Teilbäume hinzugefügter Knoten ab, nicht nur
deren Wurzeln (`public/sdk/dist/cmp.js`, `blockCandidates()`; `stub.js`,
`candidates()`). Damit ist die Lücke geschlossen, durch die ein
`innerHTML = '<div><iframe src=…></div>'` — die Form fast jedes
Embed-Snippets — trotz passendem Muster lud. Nachgemessen an einer echten
Seite: das `img` zwei Ebenen tief wird neutralisiert, ein Kontrollfall ohne
Musterübereinstimmung bleibt unangetastet.

Was damit **nicht** gelöst ist, und was niemand behaupten sollte: ein
MutationObserver wird synchron nach der Einfügung aufgerufen, aber der Browser
hat den Ladevorgang zu diesem Zeitpunkt unter Umständen schon begonnen. Für
`<script src>` und `<iframe src>`, die per `appendChild` in das Dokument
kommen, ist das Entfernen des `src` ein Rennen, das der Observer nicht
garantiert gewinnt — anders als bei Markup, das der Parser verarbeitet, wo der
Stub vor dem Fetch dazwischenkommt.

Die Frage ist, ob das Produkt diese Grenze aushalten soll oder ob es einen
zweiten Weg braucht:

1. **So lassen und benennen.** Der deklarative Weg
   (`script[type=text/plain][data-consented]`) ist der zuverlässige; die
   Musterblockade ist das Auffangnetz für alles, was der Betreiber nicht selbst
   umstellen kann. Dann muss `views/site/docs.php` das genau so sagen, statt
   Musterblockade und deklaratives Blocken als gleichwertig darzustellen.
2. **Zusätzlich `createElement` überschreiben.** Man kann `document.createElement`
   patchen und den `src`-Setter eines so erzeugten Skripts abfangen, bevor der
   Browser ihn sieht. Das gewinnt das Rennen sicher — und es ist ein Eingriff in
   fremdes DOM-Verhalten, der jede Seite kaputt machen kann, die sich auf die
   Originalfunktion verlässt. Kommerzielle CMPs machen das. Ich würde es nicht
   ohne ausdrückliche Entscheidung tun.

Solange das offen ist, gilt Variante 1, und die Dokumentation soll die Grenze
nennen. Eine Blockade, deren Wirksamkeit von der Einfügeart abhängt, darf nicht
als „alles wird geblockt" beschrieben werden.

### Der Export des Einwilligungsprotokolls: drei Zusagen, ein Verbot

Der grüne Haken „Einwilligungsprotokoll exportieren" ist aus der Rechtematrix
entfernt (`views/properties/members.php`), weil es keinen Export gibt — kein
Endpunkt, kein `Content-Disposition`, kein `fputcsv` im Baum. Das war Regel 7
und ist damit nicht mehr verletzt. Die dahinterliegende Frage bleibt aber offen,
und sie ist eine Entscheidung, kein Ticket:

- `src/Auth/Permission.php` vergibt `EXPORT_CONSENTS` an owner, admin und
  support. `docs/ROLES.md` und `docs/PLAN.md` führen den Export als Funktion.
- `docs/DECISIONS.md` sagt dagegen: „Keine Einsicht in einzelne
  Einwilligungsdatensätze — die gehören dem Besucher der Kundenwebsite, nicht
  dem Kontoinhaber und erst recht nicht uns."

Beides kann nicht gelten. Der Kern ist nicht Bequemlichkeit, sondern
Beweislast: Art. 7 Abs. 1 legt sie dem Verantwortlichen auf, also dem Kunden.
Wenn er seine Datensätze nur einzeln über eine bekannte Einwilligungs-ID sehen
kann — was über `/api/v1/consent/{consentId}` und die Nachschlageseite
tatsächlich geht —, kann er sie im Streitfall nicht in Menge erfüllen.

Drei Wege, die ich sehe:

1. **Aggregierter, pseudonymer Mengen-Export.** Die Datensätze sind bereits
   pseudonym: IP nur als HMAC, Seiten-URL nur als SHA-256, User-Agent nur als
   Familie. Ein Export dieser Felder verrät nichts, was der Kunde nicht ohnehin
   verantwortet.
2. **Export nur für einen Zeitraum und nur mit Zweckangabe**, protokolliert im
   Audit-Log. Teurer, dafür nachvollziehbar.
3. **Keinen Export.** Dann muss `DECISIONS.md` begründen, wie der Kunde seine
   Beweislast anders erfüllt, und `Permission::EXPORT_CONSENTS`, `ROLES.md` und
   `PLAN.md` müssen entsprechend korrigiert werden.

Bis das entschieden ist, bleibt das Recht definiert und ungenutzt, und die
Matrix zeigt es nicht. Der Zwischenzustand ist ehrlich, aber er ist kein
Zielzustand.

### Muss der Loader wirklich pro Änderung neu eingefügt werden?

Der Stub liest seine Konfiguration von seinem eigenen Script-Tag: `data-block`
mit den Blocking-Mustern und jetzt zusätzlich `data-no-gcm`. Das ist keine
Bequemlichkeit, sondern Notwendigkeit — er läuft, bevor das
Property-Bundle existiert, und genau darin besteht sein Zweck.

Der Preis ist unangenehm: **ändert der Betreiber seine Dienste oder den
Consent-Mode-Schalter, muss er das Snippet erneut in seine Seite einfügen.**
Tut er es nicht, blockiert der Loader nach altem Stand weiter, und niemand
merkt es. Die Integrationsseite sagt das inzwischen, aber ein Hinweis ist
schwächer als eine Architektur, die das Problem nicht hat.

Die Alternative wäre ein Loader je Property, also `/p/{publicId}/stub.js` statt
`/sdk/dist/stub.js`, mit den Mustern serverseitig eingebacken. Dann ändert sich
das Snippet nie mehr. Was dagegen abzuwägen ist:

- Der gemeinsame Stub ist heute **eine** Datei, die jeder Browser einmal
  zwischenspeichert und die für alle Kunden im CDN-Cache liegt. Pro Property
  wären es so viele Dateien wie Properties, jede mit eigenem ETag.
- Der Stub ist der einzige Teil, der synchron und blockierend im `head` steht.
  Seine Auslieferung darf unter keinen Umständen langsamer werden.
- Ein Fehler in der Erzeugung träfe nicht eine Property, sondern die Stelle, an
  der alles hängt.

Meine Neigung: pro Property, mit denselben Cache-Kopfzeilen wie das Bundle und
einem unveränderlichen versionierten Pfad daneben. Aber das ist eine
Architekturentscheidung mit ADR, nicht etwas, das man nebenbei umstellt.

### Ein Katalogeintrag hat mehrere Quellen, das Schema kennt nur eine

Bei der Anreicherung aus Primärquellen war das die mit Abstand häufigste
Beanstandung — neunmal unabhängig voneinander, quer über alle Gruppen. Ein
realer Eintrag entsteht aus drei bis fünf Seiten des Anbieters: die
Cookie-Tabelle nennt Namen und Laufzeiten, die Datenschutzerklärung den
Rechtsträger und das Drittland, die Entwicklerdoku die Einbau-Adresse, eine
vierte Seite die Aufbewahrungsfrist.

`source_url` ist eine Spalte. Für Google Analytics trägt die eingetragene URL
zwei von neun Cookies; alles andere stammt aus vier weiteren Google-Seiten. Der
Beleg steht dann in `review_notes` — als Fließtext, den keine Prüfung auswerten
kann. Für eine Pipeline, die Provenance je Eintrag prüft, ist eine einzelne URL
in dieser Lage irreführend: sie sieht nach vollständigem Beleg aus.

Drei Wege:

1. **`source_urls` als JSON-Liste** neben der bisherigen Spalte, die die
   Hauptquelle behält. Billig, rückwärtskompatibel, und `bin/verify-catalog`
   könnte prüfen, dass jede genannte URL zu einer Anbieterdomain gehört.
2. **Belege je Feld.** Die Recherche hat sie bereits erzeugt und sie liegen in
   `database/seeds/dps_catalog_evidence.json` — 368 wörtliche Zitate, jedes einem
   Feld zugeordnet. Das ist der eigentlich richtige Detailgrad, aber es ist eine
   zweite Tabelle und eine Pflege, die niemand von Hand leistet.
3. **So lassen und ehrlich beschriften.** Dann muss die Katalogansicht sagen,
   dass `source_url` die Hauptquelle ist und nicht der vollständige Beleg.

Meine Neigung ist 1 plus die Datei aus 2 als versionierter Schnappschuss — genau
das, was CLAUDE.md 6.8 für den Herkunftsnachweis genügen lässt.

### Neun Einträge ohne Primärquelle, und warum sie es bleiben

Von den 42 Einträgen ohne Quellenangabe sind 33 nachgetragen. Neun bleiben, und
bei keinem davon ist der Grund Faulheit:

| Eintrag | Warum |
|---|---|
| `google-fonts` | Googles Datenschutzaussage zu Fonts steht nur in der FAQ unter `fonts.google.com/faq`; die Seite wird clientseitig gerendert und liefert im Abruf keinen Text. Die API-Nutzungsbedingungen sagen nichts zu Cookies oder Protokollierung |
| `paypal` | Die Cookie-Erklärung war in allen drei geprüften Fassungen nicht abrufbar |
| `jsdelivr`, `typekit-adobe-fonts` | Anbieterseiten nicht abrufbar |
| `soundcloud`, `x-twitter-pixel` | Keine Anbieterseite zum eingebetteten Player bzw. keine einzige abrufbare Primärseite |
| `hotjar` | **Verworfen.** Die zitierte Contentsquare-Seite dokumentiert Hotjar nicht — das Wort kommt dort nur als Logo-Link vor. Alle Angaben galten dem Konzern und wären auf Hotjar übertragen worden |
| `trustpilot` | **Verworfen.** Die Cookie Policy beschreibt die Cookies von trustpilot.com, nicht das TrustBox-Widget auf der Kundenseite — und darum geht es im Eintrag |
| `usercentrics-migration` | Hat gar keinen Anbieter: `provider` ist „Betreiber der Website". Ein `source_type: primary_vendor_doc` ist hier falsch, weil es kein Anbieterdokument geben kann |

Für die ersten sechs ist der nächste Schritt Handarbeit: Seite im Browser
öffnen, den einschlägigen Abschnitt wörtlich sichern, als versionierten
Schnappschuss ablegen. Das kann ein Mensch in einer Stunde, ein Abruf nicht.

`usercentrics-migration` braucht eine andere Antwort. Entweder eine
Quellenkennung für Einträge, die ein allgemeines Muster beschreiben statt ein
Produkt — oder die Erkenntnis, dass der Eintrag seit der eigenen
Cookie-Erklärung überflüssig ist. Sein `dps_id` nennt außerdem einen
Wettbewerber für etwas, das mit ihm nichts zu tun hat.

### Erledigt: das Prüfgatter hing an der falschen Achse

`bin/verify-catalog` verlangte `source_url` nur, wenn `source_license <>
'public-fact'`. Das war die falsche Bedingung: `public-fact` sagt „diese
Tatsache ist nicht schutzfähig" und nichts darüber, ob wir belegen können, woher
sie stammt. Weil fast jeder handgepflegte Eintrag `public-fact` trägt, ließ die
Regel genau die Einträge durch, für die es einen Beleg geben **muss**.

Die Bedingung hängt jetzt an der Quellenart: wer sich auf ein Anbieterdokument
oder eine benannte Datenbank beruft, muss die Seite nennen. Ausgenommen sind nur
`own_scan` — eine eigene Messung hat keine fremde Seite — und der neue Zustand
`unsourced`.

Der ursprüngliche Plan war, die Umstellung zu verschieben, bis die neun geklärt
sind. Das war schwächer: es hätte bedeutet, monatelang mit einem Gatter zu leben,
das die wichtigste Lücke nicht sieht. Stattdessen sagen die neun Einträge jetzt
selbst, dass sie keine Quelle haben (Migration 0023). Nachgewiesen mit einem
Negativtest: ein Eintrag mit `primary_vendor_doc` ohne URL lässt die Prüfung mit
Exit 1 scheitern.

Offen bleibt allein, die neun abzutragen. `bin/verify-catalog` nennt sie bei
jedem Lauf namentlich, damit die Zahl nicht in Vergessenheit gerät.
