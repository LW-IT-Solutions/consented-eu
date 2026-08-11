# Fremddaten im DPS-Katalog

Diese Datei listet jede externe Quelle, aus der Daten in den Dienste-Katalog
eingeflossen sind. Sie ist Bestandteil des Self-Hosting-Pakets und darf nicht
entfernt werden — die Attributionspflichten gelten auch für Weiterverteilungen.

Der Code des Projekts steht unter MIT (siehe [LICENSE](LICENSE)). Der
**Katalog** steht getrennt davon unter der Open Database License 1.0 — siehe
[LICENSE-CATALOG](LICENSE-CATALOG) und [docs/DECISIONS.md](docs/DECISIONS.md)
§ 1b.

Die hier aufgeführten Fremdlizenzen gelten daneben fort. Die ODbL legt sich
über die Sammlung als Ganzes und ersetzt die Lizenz einzelner übernommener
Datensätze nicht. Wer den Katalog weitergibt, erfüllt beide Pflichten, indem
er diese Datei und `LICENSE-CATALOG` mitgibt.

---

## Open Cookie Database

- **Quelle:** <https://github.com/jkwakman/Open-Cookie-Database>
- **Lizenz:** Apache License 2.0 (SPDX: `Apache-2.0`)
- **Abgerufen:** 9. August 2026
- **Umfang der Übernahme:** Cookie-Name, Domain, Kategorie, Laufzeit,
  Wildcard-Flag, Data-Controller, Privacy-Link für 330 Dienste
- **Nicht übernommen:** die Beschreibungstexte der Quelle

**Attributionstext:**

> Cookie-Stammdaten aus der Open Cookie Database
> (https://github.com/jkwakman/Open-Cookie-Database), lizenziert unter
> Apache-2.0. Beschreibungstexte stammen nicht aus dieser Quelle.

Die Apache-2.0 verlangt bei Weitergabe die Mitgabe des Lizenztexts und der
Änderungshinweise. Beides erfüllt diese Datei zusammen mit dem Hinweis, dass
wir Kategorien zusammengefasst und Beschreibungen ersetzt haben.

### Vorgenommene Änderungen gegenüber der Quelle

- Kategorien der Quelle (Functional, Analytics, Marketing, Security,
  Personalization, Necessary) auf unser Vier-Kategorien-Modell abgebildet
- Dienst-Kategorie aus der Mehrheit der Cookie-Kategorien abgeleitet
- Beschreibungstexte **verworfen** und durch eigene, aus der Kategorie
  abgeleitete Formulierungen ersetzt
- Speicherdauer je Dienst auf die längste Cookie-Laufzeit verdichtet

---

## Blocking-Muster

- **Quelle:** die Auslieferungs-Endpunkte der Anbieter selbst
- **Lizenz:** `public-fact` — unter welcher Adresse ein Dienst sein Script
  ausliefert, ist eine technische Tatsache und nicht schutzfähig
- **Verfahren:** `bin/import-patterns` ruft die Adresse ab und übernimmt das
  Muster nur bei Antwort. Belegstufe und geprüfte Adresse stehen in
  `pattern_source_url` und `review_notes`
- **Nicht übernommen:** Muster aus fremden Blocklisten oder CMP-Katalogen.
  Tracker-Listen wie EasyPrivacy sind nicht geprüft und werden nicht genutzt

Einzelheiten in [docs/DATA_SOURCES.md](docs/DATA_SOURCES.md).

## Primärquellen der Anbieter

- **Lizenz:** `public-fact` — reine Tatsachenangaben, nicht schutzfähig
- **Umfang:** Cookie-Namen, Laufzeiten, Zwecke, Empfängerländer,
  Datenschutzerklärungs-URLs für 42 Dienste
- **Formulierung:** durchgehend eigene Texte

Je Eintrag sind Quelle und Abrufdatum in den Spalten `source_url` und
`source_retrieved_at` gespeichert und über die Katalog-API abrufbar.

---

## Eigene Messung am ausgelieferten Skript (`own_scan`)

- **Lizenz:** selbst erhoben — keine Fremddaten, keine Attributionspflicht
- **Was:** die vom Anbieter ausgelieferte Datei wird abgerufen und daraufhin
  gelesen, was sie auf dem Endgerät ablegt: Cookies, `localStorage`,
  `sessionStorage`, IndexedDB, `sendBeacon`, nachgeladene Skripte
- **Belegt wird:** Dateigröße und Prüfsumme der abgerufenen Datei, damit
  nachvollziehbar bleibt, welcher Stand untersucht wurde
- **Grenze:** ein einzelner Abruf zeigt den Lader, nicht zwangsläufig alles, was
  er nachlädt. Wo das so ist, sagt `review_notes` es ausdrücklich

Nicht zu verwechseln mit dem **Website-Scanner** aus Phase 8, der eine ganze
Seite vor und nach der Einwilligung vermisst. Der ist nicht gebaut, und kein
Katalogeintrag beruft sich auf ihn — `own_scan` bedeutet heute ausschließlich die
Untersuchung einer einzelnen abgerufenen Datei. Sobald der Scanner existiert,
braucht er eine eigene Quellenkennung, damit die beiden Belegstärken
unterscheidbar bleiben.

---

## Ohne belegte Quelle (`unsourced`)

- **Lizenz:** `public-fact` — es geht um Cookie-Namen und Laufzeiten, also um
  Tatsachen. Nicht schutzfähig, unabhängig davon, wo sie gelesen wurden
- **Was fehlt:** der Nachweis, *wo*. Diese Einträge stammen aus der Zeit vor der
  Provenance-Pflicht und sind gegen keine Primärquelle geprüft
- **Folge:** sie dürfen nicht auf `verified` gesetzt werden, und
  `bin/verify-catalog` zählt sie bei jedem Lauf namentlich auf

Der Zustand ist ein Eingeständnis, kein Quellentyp. Er existiert, weil die
Alternative schlechter wäre: diese Einträge weiter als `primary_vendor_doc` zu
führen, würde einen Beleg behaupten, den es nicht gibt, und die Lücke vor genau
der Prüfung verbergen, die sie finden soll.

Aktuell neun Einträge. Warum bei jedem einzelnen kein Beleg zu beschaffen war —
nicht abrufbare Seiten, rein clientseitig gerenderte Dokumente, oder eine
Quelle, die von etwas anderem handelt — steht in
[docs/OPEN_QUESTIONS.md](docs/OPEN_QUESTIONS.md). Die Zahl kennt nur eine
richtige Richtung.

---

## Nicht verwendete Quellen

Ausdrücklich **nicht** in diesen Katalog eingeflossen sind Daten aus
cookiedatabase.org (CC BY-NC-ND 4.0), Cookiepedia, cookiesearch.org sowie den
Katalogen kommerzieller CMP-Anbieter. Begründung und Prüfprotokoll:
[docs/DATA_SOURCES.md](docs/DATA_SOURCES.md).

---

## Prüfung

`bin/verify-catalog` prüft bei jedem Lauf, dass jeder Katalogeintrag eine
Quelle, eine Lizenz und ein Abrufdatum hat und dass keine Lizenz von der
Blacklist auftaucht. Der Job ist als CI-Gate vorgesehen.
