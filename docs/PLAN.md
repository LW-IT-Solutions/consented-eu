# Phasenplan und Stand

Stand: 9. August 2026. Was hier als „fertig" steht, ist auf dem Server
tatsächlich gelaufen und geprüft, nicht nur geschrieben.

## Was heute läuft

### Phase 0 — Grundgerüst ✅

- Kern: Router mit Middleware-Pipeline, Request/Response, PDO-Wrapper,
  Migrationsrunner, View-Engine mit Escaping-Helper
- Sicherheit: CSRF (Double-Submit + Origin-Prüfung), CSP mit Per-Request-Nonces,
  Rate Limiting (Redis mit DB-Fallback), Argon2id mit Pepper
- Design-System als handgeschriebenes CSS mit vollständigem Dark Mode
- 29 Tabellen, 6 Migrationen, angewendet auf `consentedeu`

### Phase 1 — Auth und Landing Page ✅

- Registrierung mit Double-Opt-In, enumeration-sicher (eine vorhandene Adresse
  löst dieselbe Antwort aus, dazu eine Warnmail an den Kontoinhaber)
- Login mit Session-Rotation, Rate Limiting pro IP **und** pro Konto,
  progressiver Kontosperre
- Passwort-Reset: einmalig verwendbar, 60 Minuten gültig, gehasht gespeichert,
  invalidiert alle Sitzungen
- Datenbankgestützte Sitzungen mit Geräteliste und „alle anderen abmelden"
- Landing Page mit interaktiver Live-Demo, die die **echte Runtime** lädt

### Phase 2 — Organisationen, Properties, Rollen ✅

- Rollenmatrix Inhaber / Admin / Bearbeiter / Betrachter, an einer Stelle
  definiert (`src/Auth/Permission.php`) und im UI sichtbar
- Einladungen per E-Mail mit 7-Tage-Token, Rollenwechsel, Zurückziehen
- Audit-Log für jede Rechte- und Konfigurationsänderung

### Phase 3 — Property-Konfiguration ✅

- Domains mit Verifikation per DNS-TXT **oder** Datei-Upload
- 32 Sprachen im Katalog, vollständige Texte für DE und EN,
  Übersetzungsfortschritt je Sprache
- Text-Editor mit Gruppierung, Standard-Vergleich und Zurücksetzen je Key
- DPS-Katalog mit **42 geseedeten Diensten** plus eigene Dienste mit
  vollständigem Formular inklusive Cookie-Tabelle und Blocking-Mustern
- Versioniertes Veröffentlichen mit unveränderlichem Snapshot

### Phase 4 — CMP-Runtime MVP ✅

- Stub (1,46 KB gzip) mit sofortigem Musterblocking und GCM-Standardwerten
- Kern (16,3 KB gzip inklusive Konfiguration) mit Shadow DOM, vier Layouts,
  zweiter Ebene, Fokusfalle, Tastaturbedienung, ESC-Verhalten
- Deklaratives und musterbasiertes Blocking, Aufräumen bei Widerruf
- Consent-Ingest über `sendBeacon` mit `fetch`-Fallback, CORS auf verifizierte
  Domains beschränkt, serverseitige Validierung gegen die Konfiguration

### Phase 5 — Design-Editor ✅

- Farben, Radien, Layout, eigenes CSS mit Sanitisierung
- Live-Vorschau im Sandbox-iFrame mit der echten Runtime
- Automatische WCAG-2.1-AA-Kontrastprüfung über fünf Farbkombinationen
- Fünf Presets

### Phase 7 (teilweise) — Consent Mode v2 ✅

- Standardsignale im Stub gesetzt, vor GTM
- `consent update` nach der Entscheidung, Zuordnung Kategorie → Signal
- `dataLayer`-Ereignisse `consented_ready` und `consented_update`

## Was noch nicht läuft

Sortiert danach, was ich als Nächstes bauen würde.

### Als Nächstes

| Ticket | Inhalt | Aufwand |
|---|---|---|
| A1 | Analytics-Ansicht im Dashboard: die Daten werden bereits aggregiert (`consent_stats_daily`), es fehlt die Oberfläche | klein |
| A2 | Consent-Log-Suche und CSV/JSON-Export im Dashboard | klein |
| A3 | Property-Rollback auf eine frühere Version (Snapshots existieren) | klein |
| A4 | Logo-Upload mit MIME-, Magic-Byte- und SVG-Sanitisierung | mittel |
| A5 | Owner-Übertragung mit beidseitiger Bestätigung | klein |
| A6 | TOTP-Zwei-Faktor mit Wiederherstellungscodes (Spalten existieren) | mittel |

### Phase 6 — TCF v2.2

Blockiert durch eine Geschäftsentscheidung, nicht durch Technik. Siehe
[TCF_REGISTRATION.md](TCF_REGISTRATION.md). Datenmodell ist vorbereitet,
Migration nicht nötig.

| Ticket | Inhalt |
|---|---|
| T1 | TC-String-Encoder/-Decoder mit Round-Trip-Tests gegen die IAB-Testvektoren |
| T2 | GVL-Sync als Worker-Job, Snapshots versioniert |
| T3 | `__tcfapi` mit korrekten Statusübergängen und `postMessage`-Brücke |
| T4 | Vendor-Layer mit Speicherdauer und Datenkategorien je Vendor |
| T5 | Publisher Restrictions je Property |
| T6 | Google Additional Consent (AC-String) |

### Phase 8 — Scanner und Auswertung

| Ticket | Inhalt |
|---|---|
| S1 | Headless-Crawler (Playwright im Worker-Container, **optional**) |
| S2 | Zwei Durchläufe: vor und nach Einwilligung — deckt Vorab-Tracking auf |
| S3 | Zuordnung der Funde zum Katalog, Ein-Klick-Anlage unbekannter Funde |
| S4 | Generierte Cookie-Erklärung als einbettbares Snippet |
| S5 | A/B-Test mit bis zu drei Varianten und deterministischer Zuordnung |

### Phase 9 — GPP und Regionen

| Ticket | Inhalt |
|---|---|
| G1 | `__gpp`-API mit `usnat` und Staaten-Sektionen |
| G2 | Regionsregeln je Property, Geo-Auflösung serverseitig beim Config-Abruf |
| G3 | Cross-Domain-Consent-Sync über iFrame-Bridge |

### Phase 10 — Paket und Härtung

| Ticket | Inhalt |
|---|---|
| P1 | `docker-compose.yml` mit nginx, php-fpm, mariadb, redis |
| P2 | `bin/install` als interaktiver Installer |
| P3 | PHPUnit: Rechtematrix (jede Rolle × jede Aktion), Auth-Flows, Retention |
| P4 | Playwright-E2E über die gesamte Kette |
| P5 | `bin/check-budgets` als CI-Gate |
| P6 | PHPStan Level 6+ und php-cs-fixer in CI |

## Bewusste Abweichungen vom Brief

Drei, jeweils mit ADR begründet:

1. **Kein Tailwind**, sondern handgeschriebenes CSS — vermeidet einen
   Build-Schritt und eine Node-Abhängigkeit ([ADR 0001](adr/0001-no-build-step.md)).
2. **Kein TypeScript und kein esbuild** für das SDK, sondern direkt
   geschriebenes ES5-kompatibles JavaScript — gleiche Begründung.
3. **Konfiguration ist in `cmp.js` eingebettet** statt separat geladen — spart
   den Roundtrip vor dem Freigeben blockierter Skripte
   ([ADR 0002](adr/0002-inline-config.md)).

Punkt 1 und 2 sind umkehrbar, falls du den Toolchain-Weg bevorzugst; Punkt 3
ist eine Abwägung, die in beide Richtungen vertretbar ist.

## Performance gegen die Budgets des Briefs

| Artefakt | Budget | Gemessen | |
|---|---|---|---|
| Stub unkomprimiert | ≤ 1 KB | 3,6 KB | ❌ |
| Stub gzip | — | 1,46 KB | |
| `cmp.js` gzip | ≤ 40 KB | 16,3 KB | ✅ |
| Config-JSON gzip | ≤ 15 KB | im `cmp.js` enthalten | ✅ |
| CLS-Beitrag | 0 | 0 (Overlay, kein Reflow) | ✅ |

Der Stub reißt sein Budget um das Dreieinhalbfache — allerdings unkomprimiert,
und der Grund sind die Kommentare, die beim Ausliefern über gzip weitgehend
verschwinden. Ehrliche Einordnung: Das Budget ist so, wie es im Brief steht,
nicht eingehalten. Ein Minifizierungsschritt beim Ausliefern würde es lösen und
steht als Ticket P5 an.
