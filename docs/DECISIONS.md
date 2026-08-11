# Entscheidungen

Vier Punkte aus Abschnitt 16 des Briefs. Punkt 1 ist inzwischen entschieden,
die übrigen liegen weiterhin bei dir. TCF steht separat in
[TCF_REGISTRATION.md](TCF_REGISTRATION.md).

---

## 1. Lizenzmodell — ENTSCHIEDEN: MIT

> **Stand 9. August 2026:** Das gesamte Projekt steht unter der MIT-Lizenz —
> Server, Dashboard, Browser-Runtime, Migrationen, Dokumentation. Eine Datei,
> eine Lizenz, keine Ausnahmeklausel.

### Warum MIT und nicht AGPL

Ursprünglich war eine Split-Lizenz vorgesehen: AGPL-3.0 für den Server, MIT für
das Browser-SDK. Der Zweck war, einen Closed-Source-Fork als konkurrierendes
SaaS zu verhindern.

Dieses Ziel ist ausdrücklich aufgegeben worden. Das Projekt soll kein Geld
verdienen, sondern Leuten ermöglichen, schnell und kostenlos eine funktionierende
CMP aufzusetzen. Gemessen daran war die AGPL nicht nur überflüssig, sondern
schädlich:

- Zahlreiche Unternehmen verbieten AGPL-Software pauschal per Richtlinie —
  auch für rein internen Betrieb, wo die AGPL überhaupt nichts fordern würde.
  Das hätte genau die Leute ausgesperrt, denen geholfen werden soll.
- Agenturen, die das für Kundenprojekte einsetzen, hätten jedes Mal die
  Rechtsabteilung fragen müssen.
- Die Split-Lizenz brauchte eine zusätzliche Erlaubnis nach AGPL § 7, damit das
  Einbetten von `cmp.js` nicht auf die Kundenwebsite durchschlägt — also eine
  Konstruktion, die man erklären muss. Erklärungsbedarf ist bei einer Lizenz
  immer ein Kostenfaktor.

MIT braucht keine Erklärung. Privat, gewerblich, gehostet, selbst gehostet, in
Kundenprojekten, als Teil eines eigenen Produkts: alles erlaubt, ohne Rückfrage.

### Die Konsequenz, die du kennen solltest

Jemand darf consented.eu nehmen, schließen, umbenennen und kostenpflichtig als
eigenes SaaS verkaufen, ohne etwas zurückzugeben. Das ist mit MIT ausdrücklich
zulässig und lässt sich nachträglich nicht einschränken — bereits
veröffentlichte Versionen bleiben unter MIT nutzbar.

Das ist der Preis für die Reibungsfreiheit. Bei einem Projekt, das ohnehin
nichts verdienen will, ist er vertretbar: Der Nutzen für die vielen, die es
einfach einsetzen, wiegt schwerer als der Schutz vor dem einen, der es
weiterverkauft.

### Beiträge

Kein CLA, kein DCO. Beiträge stehen unter derselben MIT-Lizenz wie der Rest,
das Copyright bleibt beim jeweiligen Autor. Weil MIT permissiv ist, entsteht
daraus — anders als bei einem Copyleft-Projekt — kein Problem: Eine spätere
Lizenzänderung ist zwar weiterhin nur mit Zustimmung aller Beitragenden
möglich, aber es gibt keinen Grund mehr, eine zu wollen.

---

## 1b. Lizenz für den DPS-Katalog: ODbL 1.0

**Entschieden am 2026-08-09.** Der Katalog steht unter der Open Database
License 1.0, der Code bleibt bei MIT. Volltext und Erläuterung der Abgrenzung
in `LICENSE-CATALOG`.

Der Katalog ist **kein Code** und braucht eine eigene Lizenz. Für Datenbanken
greift in der EU zusätzlich das sui-generis-Recht (RL 96/9/EG), das unabhängig
vom Urheberrecht entsteht — durch unsere Investition in Beschaffung und
Überprüfung, nicht durch Kreativität.

Der Code steht unter MIT. Beim Katalog liegt die Sache anders: Er ist der
zweitwichtigste Vermögenswert nach der Runtime, und die Frage ist, ob ein
kommerzielles CMP ihn einfach übernehmen darf.

### Die drei Optionen

| Option | Wirkung | Für uns |
|---|---|---|
| **ODbL 1.0** | Share-alike speziell für Datenbanken. Wer den Katalog nutzt und verändert weitergibt, muss die veränderte Datenbank unter ODbL stellen | Katalog wird Community-Asset; kommerzielle CMPs können ihn nutzen, müssen Verbesserungen aber zurückgeben |
| **CC BY-SA 4.0** | Share-alike, bekannter, aber für Datenbanken weniger passgenau (deckt das sui-generis-Recht erst seit 4.0 mit ab) | Ähnliche Wirkung, vertrautere Lizenz, mehr Auslegungsspielraum bei Datenbanken |
| **MIT / CC0** | Wie der Code: alles erlaubt, keine Rückflusspflicht | Maximale Verbreitung, aber ein Wettbewerber darf 372 geprüfte Einträge übernehmen, ohne je eine Korrektur beizusteuern |

### Was dafür spricht, hier *anders* zu entscheiden als beim Code

Beim Code war permissiv richtig, weil jede Lizenzhürde Leute aussperrt, denen
geholfen werden soll. Beim Katalog ist die Lage nicht symmetrisch:

- Ein Nutzer, der consented.eu einsetzt, merkt von der Katalog-Lizenz nichts.
  Sie betrifft nur den, der die **Datenbank als solche** weiterverteilt.
- Share-alike beim Katalog sperrt also niemanden aus, den wir erreichen wollen.
- Der Katalog lebt von Korrekturen. Genau die entstehen nicht, wenn Übernahme
  ohne Rückgabe erlaubt ist.
- Es wäre außerdem das, was cookiedatabase.org wegen seiner NC-ND-Klausel
  **nicht** sein kann: ein frei nutzbarer, gemeinsam gepflegter Katalog.

### Entscheidung

**ODbL 1.0.** Sie ist für genau diesen Fall gemacht, deckt das sui-generis-Recht
sauber ab und macht den Katalog zum Gemeingut, ohne die Nutzung des Produkts
einzuschränken. Der Preis ist eine zweite Lizenz im Repo, die man erklären muss —
dafür ist der erste Abschnitt von `LICENSE-CATALOG` da.

### Was das praktisch bedeutet

| Wer | Pflicht |
|---|---|
| Betreiber einer Website mit consented.eu | keine. Die Lizenz betrifft die Datenbank, nicht ihre Benutzung |
| Self-Hoster | keine, solange der Katalog nicht separat weitergegeben wird |
| Ein CMP, das den Katalog einbaut | Attribution. Der eigene Code bleibt unberührt — "Collective Database", ODbL 4.5 |
| Wer den Katalog erweitert **und veröffentlicht** | die erweiterte Fassung unter ODbL verfügbar machen — ODbL 4.4 |

Das Fremdmaterial im Katalog behält seine eigene Lizenz; die ODbL legt sich
darüber, ersetzt sie aber nicht. Die Open Cookie Database steht unter
Apache-2.0, das ist mit ODbL-Weitergabe verträglich, weil Apache-2.0 keine
Rückwirkung auf die Sammlung verlangt. Aufstellung in `THIRD_PARTY_DATA.md`.

---

## 2. Hosting-Kosten und Tragfähigkeit

### Was tatsächlich anfällt

Drei Posten, und nur einer davon wächst unangenehm:

| Posten | Skaliert mit | Kritisch? |
|---|---|---|
| Auslieferung von `cmp.js` | Seitenaufrufe | **ja** — der dominierende Posten |
| Consent-Zeilen in der DB | Besucher × Entscheidungen | wächst, aber langsam |
| Dashboard-Zugriffe | Kunden | vernachlässigbar |

### Gemessene Größen aus diesem Build

- `cmp.js` inklusive eingebetteter Konfiguration: **16,3 KB gzip**
  (62,5 KB unkomprimiert) bei einer Property mit 3 Diensten und 2 Sprachen
- `stub.js`: 1,46 KB gzip (3,6 KB unkomprimiert)
- eine Consent-Zeile inklusive Verlaufseintrag: **rund 1 KB** in der Datenbank

### Hochrechnung

Angenommen 30 000 Seitenaufrufe pro Domain und Monat, Cache-Trefferquote 80 %
(der Wert ist realistisch, weil `cmp.js` fünf Minuten und `stub.js` sieben Tage
cachebar sind), und 15 % der Besucher treffen eine neue Entscheidung.

| Domains | Auslieferung/Monat | Neue Consent-Zeilen/Monat | DB-Zuwachs/Jahr |
|---|---|---|---|
| 1 000 | ~100 GB | 4,5 Mio. | ~54 GB |
| 10 000 | ~1 TB | 45 Mio. | ~540 GB |
| 100 000 | ~10 TB | 450 Mio. | ~5,4 TB |

**Was das heißt:** Bis etwa 1 000 Domains ist das ein Hobbyprojekt-Budget.
Bei 10 000 wird Traffic zum Thema und die Consent-Tabelle braucht
Monatspartitionierung. Bei 100 000 ist es ohne CDN und ohne eine Finanzierung
nicht mehr tragfähig — 10 TB Egress pro Monat bezahlt niemand nebenbei.

### Was die Kurve tatsächlich abflacht

1. **Cache-Dauer erhöhen.** `cmp.js` steht auf 300 s. Auf 3 600 s gestellt sinkt
   die Auslieferung um etwa den Faktor 5, um den Preis, dass eine
   Veröffentlichung bis zu einer Stunde bis zur letzten Auslieferung braucht.
   Das ist der wirksamste einzelne Hebel und kostet fast nichts.
2. **Retention senken.** 36 Monate sind der aktuelle Standard. 12 Monate
   drittelt den Speicherbedarf und liegt immer noch im vertretbaren Rahmen,
   weil die Einwilligung selbst nach 12 Monaten erneuert wird.
3. **Statisches `cmp.js` plus separate Config.** Spart Bandbreite über alle
   Properties hinweg, kostet aber den Roundtrip-Vorteil (siehe
   [ADR 0002](adr/0002-inline-config.md)).
4. **CDN davor.** Verlagert Kosten, beseitigt sie nicht.

### Fair-Use-Grenzen, die niemanden aussperren

Mein Vorschlag: **keine harten Limits, aber Sichtbarkeit.** Konkret

- keine Beschränkung auf Domains, Dienste, Sprachen oder Nutzer — das sind
  genau die Grenzen, die die kostenpflichtigen Anbieter ziehen
- eine weiche Schwelle bei etwa 5 Mio. Auslieferungen pro Monat und Konto,
  die **nicht drosselt**, sondern eine E-Mail auslöst und im Dashboard
  auftaucht
- ab dieser Schwelle das Gespräch suchen: Self-Hosting anbieten, eigenes CDN
  vorschlagen, oder eine freiwillige Kostenbeteiligung
- Missbrauchsschutz (Fake-Consent-Flut) getrennt davon — der ist bereits
  implementiert (60 Consents pro IP-Hash und Property pro Stunde)

Der Punkt: Eine kleine Website darf nie in ein Limit laufen. Wer groß genug
ist, um wehzutun, ist auch groß genug für ein Gespräch.

---

## 3. Datenrolle und Compliance

**Wir sind Auftragsverarbeiter** für alle Consent-Daten, die über das Banner
unserer Nutzer erfasst werden. Der Website-Betreiber ist Verantwortlicher.
Daraus folgt zwingend ein AV-Vertrag nach Art. 28 DSGVO — nicht optional, nicht
„auf Anfrage".

**Was bereits umgesetzt ist:**

| Anforderung | Umsetzung | Fundstelle |
|---|---|---|
| Pseudonymisierung | IP nur als HMAC-SHA-256 mit rotierendem Pepper | `src/Core/Hash.php` |
| Datenminimierung | Seiten-URL nur als Hash, User-Agent nur als Familie | `src/Api/ConsentApiController.php` |
| Nachweisbarkeit | Append-only `consent_events`, nichts wird überschrieben | `src/Property/Consents.php` |
| Löschkonzept | Retention-Job, Standard 36 Monate | `bin/worker` |
| Betroffenenrechte | Auskunft und Löschung per Consent-ID, ohne Konto | `/consent-lookup` |
| TOMs | dokumentiert | `/legal/dpa` |
| Unterauftragnehmer | derzeit keine | `/legal/dpa` |

### 3b. Support-Zugriff des Betreibers auf fremde Properties

**Entschieden am 2026-08-09 vom Betreiber, gegen meinen Vorschlag.**

Ich hatte den Admin-Bereich zunächst lesend gebaut: der Instanz-Betreiber sieht
eine fremde Property-Konfiguration, ändert sie aber nicht, weil er
Auftragsverarbeiter und nicht Verantwortlicher ist. Der Betreiber hat
entschieden, dass er die volle Bearbeitung braucht. Das ist seine Instanz und
seine Entscheidung; hier steht, was daraus folgt.

**Wie es umgesetzt ist.** Nicht als dauerhafter Bypass in
`Permission::roleFor()`, sondern als ausdrücklich geöffnete Freigabe
(`src/Auth/Support.php`):

| | |
|---|---|
| Geltung | genau eine Property, 60 Minuten, danach erlischt sie von selbst |
| Voraussetzung | Grund als Pflichtfeld, mindestens fünf Zeichen |
| Rolle | eigene Rolle `support`: alles an der Property, aber NICHT, wer Zugriff auf sie hat |
| Masken | die des Kunden, keine zweiten Formulare mit eigener Validierung |
| Sichtbarkeit | nicht schließbares Banner auf **jeder** Seite des Kundenbereichs |
| Prüfpfad | `admin.support_started` mit Grund, `admin.support_write` je Schreibzugriff mit Pfad, `admin.support_ended` |

Die zentrale Protokollierung sitzt in `Kernel::recordSupportWrite()` und nicht in
den Controllern. Der Grund ist unangenehm und gehört hierher: vier der acht
Kundenmasken — Design, Sprachen, Dienste, Texte — protokollieren **gar nichts**,
auch nicht für den Kunden selbst. Eine Zusage, die sich auf sie stützt, wäre für
die Hälfte der Fälle falsch gewesen.

**Was das für die Rolle bedeutet.** Ein Auftragsverarbeiter darf
weisungsgebunden auf Daten des Verantwortlichen zugreifen; Art. 28 Abs. 3 lit. a
DSGVO verlangt dafür eine dokumentierte Weisung. Der Pflichtgrund ist der Ort,
an dem diese Weisung festgehalten wird — deshalb ist er ein Pflichtfeld und kein
Komfort. Wer diese Funktion produktiv nutzt, sollte den AV-Vertrag unter
`/legal/dpa` um einen Satz zum Support-Zugriff ergänzen.

**Was bewusst NICHT dazugehört:**

- Keine Impersonation. Der Betreiber arbeitet als er selbst, nicht als der Kunde.
- Keine Einsicht in einzelne Einwilligungsdatensätze — die gehören dem Besucher
  der Kundenwebsite, nicht dem Kontoinhaber und erst recht nicht uns.
- Keine stille Erhöhung: ohne Banner keine Freigabe.

**Offen:** Der Kunde sieht den Prüfpfad heute nicht — es gibt keine
kundenseitige Ansicht von `audit_log`. Solange die fehlt, ist die Transparenz
einseitig. Siehe `docs/OPEN_QUESTIONS.md`.

---

**Was noch fehlt:**

- Der AV-Vertrag unter `/legal/dpa` ist ein inhaltlich korrekter Entwurf, aber
  **juristisch nicht geprüft** und nicht abschlussfähig. Er braucht die Angaben
  des Verantwortlichen und einen Anwaltsblick.
- Der Support-Zugriff aus 3b ist dort noch nicht erwähnt.
- Ein Verzeichnis von Verarbeitungstätigkeiten nach Art. 30 DSGVO fehlt.
- Ein Prozess für Datenschutzverletzungen (Art. 33: 72 Stunden) ist nicht
  definiert.

---

## 4. Positionierung und Sprache

Formulierungen, die im gesamten Produkt vermieden werden — sie wären angreifbar
und im Zweifel wettbewerbsrechtlich abmahnfähig:

| Nicht sagen | Stattdessen |
|---|---|
| „macht Ihre Website DSGVO-konform" | „hilft bei der Umsetzung der Einwilligungspflicht" |
| „rechtssicher" | „nachweisbar dokumentiert" |
| „EU-zertifiziert", „offiziell anerkannt" | nichts — es gibt keine solche Zertifizierung |
| „TCF-zertifiziert" | „auf TCF v2.2 vorbereitet, Zertifizierung offen" |
| „100 % anonym" | „pseudonymisiert, ohne Klartext-IP" |
| „Cookiebot ist teurer" (ohne Beleg) | Merkmalsvergleich mit Datum und Prüfbarkeit |

Das ist bereits durchgehend so umgesetzt: Die Vergleichstabelle auf der
Startseite nennt keine Preise der Wettbewerber (die hängen vom Tarif ab und
wären morgen falsch), sondern nur nachprüfbare Merkmale mit Stand-Datum.
Unter jeder Vergleichstabelle steht der Hinweis, dass das Produkt keine
Rechtskonformität herstellt.

Zum Namen: „consented.eu" enthält kein geschütztes EU-Kennzeichen. Das
Bildmotiv ist bewusst ein **abstrahierter Zwölf-Punkte-Kreis**, keine
Europaflagge — siehe [BRANDING.md](BRANDING.md).

### 3c. Was die Angriffsprüfung an 3b gefunden hat

Nach dem Bau haben fünf Prüfagenten die Rechteerhöhung angegriffen, ein sechster
die Befunde gegen den Code nachgeprüft: 13 bestätigt, 5 widerlegt, 4 theoretisch.
Zwei davon waren so schwer, dass der Entwurf in der ersten Fassung nicht
haltbar war. Sie stehen hier, weil dieselben Fehler beim nächsten Umbau wieder
naheliegen.

**Die Freigabe verlieh `owner`, und `owner` enthält `MANAGE_MEMBERS.`** Damit
ließ sich eine 60-Minuten-Freigabe mit einem einzigen POST auf
`/properties/{id}/members/{uid}/role` in dauerhaften Zugriff verwandeln: die
Zeile landet in `property_users`, und genau diese Tabelle fragt
`Permission::roleFor()` als Erstes ab — ohne Banner, ohne Ablauf, ohne
Protokolleintrag. Die Frist wäre Dekoration gewesen. Behoben durch eine eigene
Rolle `support`: alles an der Property, aber nicht, wer Zugriff auf sie hat.

**Der Entzug des Adminrechts beendete die Freigabe nicht.** `toggleAdmin()`
schrieb nur `is_admin = 0`, ohne die Sitzungen zu beenden. `/admin/` war damit
zu, der Kundenbereich aber bis zu eine Stunde offen — ausgerechnet in der Lage,
in der ein Betreiber den Entzug benutzt. Behoben an zwei Stellen: `toggleAdmin()`
beendet jetzt alle Sitzungen wie `suspend()` es längst tat, und `Support::active()`
prüft den Kontostand bei jeder Anfrage nach.

Kleiner, aber lehrreich: der Pflichtgrund ließ sich mit `<br/>` auf einen leeren
String bringen, weil die Längenprüfung auf der Roheingabe lief und erst danach
gesäubert wurde. Und die Protokollierung rechnete **jeden** Schreibzugriff der
Sitzung der freigegebenen Property zu, auch einen Passwortwechsel unter
`/account` — jetzt positiv auf `/properties/{public_id}` gefiltert.

Was aus der Prüfung offen bleibt, steht in `docs/OPEN_QUESTIONS.md`: die fehlende
kundenseitige Prüfpfad-Ansicht.
