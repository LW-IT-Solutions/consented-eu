# Datenquellen für den DPS-Katalog

Lebendes Dokument. Jede Quelle wird **vor** der ersten Nutzung geprüft und hier
mit Prüfdatum und Ampelstatus eingetragen. Ohne Eintrag hier darf keine Zeile
in den Katalog.

Ampel: 🟢 nutzbar · 🟡 ungeklärt, nicht nutzen · 🔴 ausgeschlossen

---

## 🟢 Nutzbar

### Open Cookie Database

| | |
|---|---|
| URL | <https://github.com/jkwakman/Open-Cookie-Database> |
| Lizenz | **Apache-2.0** (SPDX) — geprüft am 9. August 2026 gegen die `LICENSE`-Datei im Repository |
| Kommerziell | ja |
| Bearbeitung | ja |
| Auflage | Attribution und NOTICE-Weitergabe |
| Übernommen | Cookie-Name, Domain, Kategorie, Laufzeit, Wildcard-Flag, Data-Controller, Privacy-Link |
| **Nicht übernommen** | **Beschreibungstexte** (`description`) |
| Adapter | `src/Catalog/Sources/OpenCookieDatabase.php` |
| Stand | 9. August 2026, 354 Plattformen / 2264 Cookie-Einträge |

Die Beschreibungen wären nach Apache-2.0 zwar übernehmbar, fallen aber unter
die strengere Projektregel 6.2: Beschreibungen entstehen aus Primärquellen in
eigener Struktur. Der Zweck-Text importierter Einträge wird deshalb aus den
Cookie-Kategorien abgeleitet und ist bis zur Redaktion als generiert markiert.

### Primärquellen der Anbieter

| | |
|---|---|
| Was | Dokumentation, Datenschutzerklärungen, Cookie-Tabellen der Anbieter |
| Lizenz | `public-fact` — Tatsachen sind nicht schutzfähig |
| Auflage | **Formulierung immer selbst.** `source_url` und Abrufdatum pflichtmäßig speichern |
| Status | rechtlich sauberste Quelle, bevorzugt bei Konflikten |

Dass ein Dienst ein Cookie `_ga` mit zwei Jahren Laufzeit setzt, ist eine
Tatsache. Der Satz, mit dem ein fremder Katalog das beschreibt, ist es nicht.

##### Belegdatei: `database/seeds/dps_catalog_evidence.json`

Zu jedem angereicherten Eintrag liegt dort je Feld das **wörtliche Zitat** aus
der Anbieterseite, das die Angabe trägt — 368 Zitate für 46 Dienste. Das ist der
versionierte Schnappschuss, den CLAUDE.md 6.8 für den Herkunftsnachweis genügen
lässt, und er beantwortet die Frage, die `source_url` allein nicht beantwortet:
*welcher Satz* belegt *welches Feld*.

Die Datei ist Beleg, keine Datenquelle. Sie wird nicht in die Datenbank
eingespielt und nicht ausgeliefert; sie liegt im Repository, damit eine
Behauptung im Katalog gegen ihren Ursprung prüfbar bleibt, auch wenn der
Anbieter seine Seite später ändert.

Grenze, die dabei sichtbar wurde: ein Eintrag entsteht regelmäßig aus drei bis
fünf Anbieterseiten, `source_url` ist aber eine Spalte. Sie führt die
Hauptquelle, die Belegkette steht in `review_notes`. Siehe
[OPEN_QUESTIONS.md](OPEN_QUESTIONS.md).

#### Blocking-Muster: Beleg am Endpunkt des Anbieters

Blocking-Muster haben eine eigene Herkunft, getrennt von den Cookie-Daten. Die
Open Cookie Database führt Cookie-Namen und keine Script-Adressen — ein Muster
kann von dort also gar nicht stammen. Deshalb gibt es die Spalten
`pattern_source_type`, `pattern_source_url` und `pattern_verified_at`.

Belegt wird maschinell durch `bin/import-patterns`. Das Werkzeug ruft die in
`database/seeds/blocking-patterns.php` hinterlegten Adressen beim Anbieter ab
und übernimmt ein Muster nur, wenn eine erfolgreich beantwortete Adresse dieses
Muster als Teilstring enthält. Es gibt zwei Belegstufen:

| Stufe | Bedeutung |
|---|---|
| **Ressource** | HTTP-Status unter 400. Die Datei liegt dort tatsächlich |
| **Host** | Gültige Zertifikatskette, aber die Anwendung lehnt ab (401/403/404). Belegt, dass der Hostname existiert und dem Anbieter gehört — viele CDNs liefern ohne Kundenschlüssel grundsätzlich 403 aus |

Ohne DNS- oder TLS-Antwort gibt es keinen Beleg und damit kein Muster.

Zwei Regeln begrenzen den Schaden, den ein falsches Muster anrichten kann:

- **Mindestschärfe.** Der Stub prüft mit `indexOf` gegen die volle URL. Ein
  Muster wie `analytics` oder `pixel.gif` träfe damit auch Dateien der
  Kundenwebsite. `isSpecificEnough()` in `bin/import-patterns` verwirft solche
  Muster, samt einer Sperrliste generischer Namensteile.
- **Nie löschen.** Der Importer führt bestehende Muster mit den belegten
  zusammen, statt sie zu ersetzen. Ein nicht erreichbarer Anbieter darf keinen
  Schutz entfernen, der vorher da war.

Der Abruf ist kein Crawling: eine Adresse pro Ressource, höchstens sechs
gleichzeitige Verbindungen, unverstellter User-Agent mit Projekt-URL. Endpunkte
konkurrierender CMPs werden nicht angefragt (Abschnitt 6.2 des Briefs) und
stehen deshalb auch nicht in der Prüfliste.

### Eigener Scanner (Phase 8, noch nicht gebaut)

| | |
|---|---|
| Was | Real beobachtete Cookies, Storage-Keys, Requests |
| Lizenz | selbst erhoben |
| Status | begründet unser eigenes Datenbankrecht (6.8) |

### Community-Beiträge

| | |
|---|---|
| Weg | GitHub-PR gegen <https://github.com/LW-IT-Solutions/consented-eu> |
| Auflage | Beitrag steht unter der Projektlizenz; Primärquelle im PR angeben |
| Status | Formular im Dashboard noch nicht gebaut |

---

## 🟡 Ungeklärt — bis zur Klärung nicht nutzen

### IAB TCF Global Vendor List (v3)

Die GVL ist die wichtigste Quelle für die TCF-Ebene und ausdrücklich für den
Konsum durch CMPs vorgesehen — die Nutzungsbedingungen hängen aber an der
TCF-Teilnahme, und die ist ungeklärt. Solange keine CMP-ID vorliegt, wird die
GVL **nicht** abgerufen. Siehe [TCF_REGISTRATION.md](TCF_REGISTRATION.md).

### Google Additional Consent / ATP Provider List

Öffentliche Liste, Bedingungen aber nicht geprüft. Wird erst mit der
AC-String-Umsetzung relevant, die ihrerseits an der TCF-Entscheidung hängt.

### cookiesearch.org

Keine belastbare Lizenzangabe auffindbar. Nicht verwenden.

### DuckDuckGo Tracker Radar, Disconnect, EasyList/EasyPrivacy

Lizenzen einzeln zu prüfen, bevor irgendetwas übernommen wird. NonCommercial
schlösse unsere Nutzung aus, Copyleft könnte unsere Katalog-Lizenz erzwingen.
Bislang **nicht** geprüft und **nicht** genutzt.

---

## 🔴 Ausgeschlossen

### cookiedatabase.org (Complianz)

**CC BY-NC-ND 4.0.** NonCommercial *und* NoDerivatives. Für ein SaaS-Produkt
unbrauchbar — selbst als kostenloses, weil wir die Einträge weder anpassen
noch übersetzen dürften. Das „open“ im Namen bezieht sich nicht auf eine
Lizenz, die uns nützt.

### Cookiepedia (OneTrust)

Proprietär.

### Kataloge kommerzieller CMPs

Usercentrics, Cookiebot, OneTrust, CookieYes, Iubenda, Termly, Didomi,
Complianz-Cloud-API und vergleichbare. Kein Scraper, kein API-Client, keine
manuelle Massenübernahme — auch nicht einmalig zum Bootstrappen.

Neben Urheberrecht greift hier das **sui-generis-Datenbankrecht**
(RL 96/9/EG; DE §§ 87a ff. UrhG; PL *ustawa o ochronie baz danych* 2001). Es
untersagt nicht nur die Entnahme wesentlicher Teile, sondern auch die
wiederholte, systematische Entnahme unwesentlicher Teile. Ein Skript, das
monatlich „nur ein paar“ Einträge nachzieht, ist also nicht zu klein, um zu
stören.

---

## Prüfprotokoll

| Datum | Quelle | Ergebnis | Geprüft von |
|---|---|---|---|
| 2026-08-09 | Open Cookie Database | Apache-2.0 bestätigt, freigegeben | Erstprüfung |
| 2026-08-09 | cookiedatabase.org | CC BY-NC-ND 4.0, ausgeschlossen | Erstprüfung |
| 2026-08-09 | GVL, Google ATP | ungeklärt, hängt an TCF-Entscheidung | Erstprüfung |
| 2026-08-09 | Tracker-Listen | nicht geprüft, nicht genutzt | — |
| 2026-08-09 | Anbieter-Endpunkte (Blocking-Muster) | 142 von 144 Adressen belegt, 125 Einträge mit Muster | `bin/import-patterns` |
