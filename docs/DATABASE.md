# Die Datenbank

Nachschlagewerk zu allen 31 Tabellen: wofür jede da ist, was zusammenhängt, und
welche Fallen es gibt. Erzeugt aus dem tatsächlichen Schema, nicht aus dem
Gedächtnis — Stand nach Migration 0016.

Erzeugen kannst du dir die aktuelle Fassung jederzeit selbst:

```bash
php bin/migrate --status
mysql -u<user> -p <db> -e "SHOW TABLES;"
```

---

## Zwei Regeln, die überall gelten

**`id` ist innen, `public_id` ist außen.** Jede Tabelle, deren Zeilen in einer
URL vorkommen, hat beides: ein `BIGINT UNSIGNED AUTO_INCREMENT` für Joins und
eine `CHAR(36)` UUIDv7 für alles, was ein Browser zu sehen bekommt. Der Grund
steht in CLAUDE.md Regel 1: eine Auto-Increment-ID in der URL verrät die Anzahl
der Kunden und lädt zum Durchzählen ein.

Tabellen ohne `public_id` sind die, die nie in eine URL geraten:
`organization_members`, `property_users`, `property_languages`,
`property_texts`, `property_design`, `property_versions`, `password_resets`,
`email_verifications`, `consent_events`, `consent_stats_daily`,
`dps_catalog_translations`, `jobs`, `rate_limits`, `site_settings`,
`migrations`, `gvl_*`, `scan_findings`.

**Keine Klartext-IP, nirgends.** Wo eine IP eine Rolle spielt, steht
`ip_hash CHAR(64)` — HMAC-SHA-256 mit rotierendem Pepper aus `Hash::ip()`.
Betroffen: `sessions`, `consents`, `consent_events`, `audit_log`,
`password_resets`, `rate_limits` (dort als Teil des Schlüssels).

---

## 1. Konten und Zugehörigkeit

```
users ──┬─< organization_members >── organizations ──< properties
        ├─< property_users >──────────────────────────────┘
        ├─< sessions
        ├─< password_resets
        └─< email_verifications
```

### `users`

Das Konto. Drei Zustandsfelder, die man nicht verwechseln darf:

| Feld | Bedeutung | Wer setzt es |
|---|---|---|
| `email_verified_at` | Adresse bestätigt. `NULL` = nicht bestätigt | Bestätigungslink, Admin-Knopf, `bin/make-admin` |
| `locked_until` | **automatische** Sperre nach Fehlanmeldungen, läuft von selbst ab | `User::recordFailedLogin()` nach 5/7/10 Versuchen |
| `suspended_at` | **manuelle** Sperre durch den Betreiber, läuft nicht ab | Admin-Bereich, Benutzer-Detailseite |

`is_admin` ist der Instanz-Administrator und hat mit den Property-Rollen nichts
zu tun. `password_hash` (Argon2id + Pepper), `totp_secret` und `recovery_codes`
gehören in **keine** Abfrage, die in eine View läuft — deshalb steht in den
Controllern überall eine ausgeschriebene Spaltenliste statt `SELECT u.*`.

Löschen ist weich: `deleted_at` wird gesetzt und die Adresse auf
`deleted+<uuid>@invalid` umgeschrieben, damit sie wieder frei wird, während die
Zeile für Prüfpfad-Verweise bestehen bleibt.

### `organizations`

Der Vertragspartner. `owner_user_id` zeigt auf `users` mit **RESTRICT** — das
ist der Grund, warum sich ein Konto nicht löschen lässt, das noch eine
Organisation besitzt. Erst übertragen, dann löschen.

### `organization_members` und `property_users`

Zwei Wege zu einer Rolle, und `Permission::roleFor()` fragt sie in dieser
Reihenfolge ab:

1. `property_users` — direkte Berechtigung auf eine Property, gewinnt immer
2. `organization_members` — Mitgliedschaft in der Organisation, wird abgebildet:
   `owner → owner`, `admin → admin`, `member → editor`
3. Support-Freigabe des Instanz-Betreibers → Rolle `support` (siehe
   `src/Auth/Support.php` und DECISIONS 3b)

Die Rollen und was sie dürfen: `docs/ROLES.md`, ausgedrückt als Code in
`Permission::MATRIX`.

### `sessions`

Sitzungen liegen in der Datenbank, nicht in Dateien — das macht die Geräteliste
und „überall abmelden" erst möglich. `payload` ist ein JSON-Blob mit Flash-
Nachrichten, CSRF-Token, `_intended` und der Support-Freigabe.

**Falle:** `Session::commit()` schreibt den Payload als Ganzes zurück, ohne ihn
vorher neu zu lesen. Zwei gleichzeitige Anfragen derselben Sitzung überschreiben
sich gegenseitig. Deshalb schreibt `Support::stop()` einen abgelaufenen Grant
zurück, statt den Schlüssel zu löschen.

### `password_resets`, `email_verifications`, `invitations`

Alle drei nach demselben Muster: `token_hash CHAR(64)` — der **Klartext-Token
steht nirgends in der Datenbank**, nur sein Hash. Verglichen wird über
`Hash::token()`.

Praktische Folge: Einen verlorenen Einladungslink kann man **nicht**
rekonstruieren. Der Klartext existierte nur in der versendeten Mail. Neu
ausstellen ist der einzige Weg.

`bin/worker` räumt alle drei auf, sobald sie abgelaufen oder benutzt sind.

---

## 2. Property und ihre Konfiguration

```
properties ──┬─< property_domains
             ├─< property_languages
             ├─< property_texts
             ├─< property_design      (1:1)
             ├─< property_dps ──> dps_catalog
             ├─< dps_categories
             └─< property_versions
```

Alle mit `ON DELETE CASCADE` — eine hart gelöschte Property nimmt ihre gesamte
Konfiguration mit. Im Normalbetrieb passiert das nicht: gelöscht wird weich über
`properties.deleted_at`.

### `properties`

| Feld | Wozu |
|---|---|
| `status` | `draft` / `live` / `paused` — gehört dem **Kunden** |
| `suspended_at` | Stilllegung durch den **Betreiber**, überstimmt `status` bei der Auslieferung |
| `config_version` | Zähler; jede Veröffentlichung erhöht ihn und schreibt einen Schnappschuss |
| `settings` | JSON: Consent-Laufzeit, GPC, Consent Mode, Blockiermodus … |
| `first_consent_at` / `last_consent_at` | Denormalisiert, damit die Liste nicht `consents` scannen muss |

Die Trennung `status` / `suspended_at` ist wichtig: `Property::publish()` setzt
`status` bedingungslos auf `live`. Eine Stilllegung, die nur `status` schriebe,
hätte der Kunde mit einem Klick aufgehoben (Migration 0015).

### `property_dps`

Welcher Dienst auf welcher Property aktiv ist. `dps_catalog_id` zeigt in den
Katalog (`SET NULL`, damit ein entfernter Katalogeintrag die Property nicht
zerlegt), `is_custom = 1` heißt selbst angelegt. `overrides` ist ein JSON-Blob,
mit dem der Kunde einzelne Katalogfelder für sich überschreibt, ohne den Katalog
zu verändern.

**Bekannte Lücke:** `is_enabled` wird angezeigt, aber von
`ConfigBuilder::services()` nicht ausgewertet.

### `property_versions`

Append-only. `snapshot` ist die vollständige, ausgelieferte Konfiguration als
JSON zum Zeitpunkt der Veröffentlichung. Das ist der Nachweis, unter welcher
Fassung eine Einwilligung erteilt wurde — `consents.config_version` zeigt
darauf. **Diese Tabelle bekommt bewusst keine Aufbewahrungsfrist.**

### `property_texts` und `property_languages`

Bannertexte je Sprache. Nicht zu verwechseln mit `lang/*.php`: das sind die
Texte **unserer** Oberfläche, `property_texts` sind die Texte **im Banner des
Kunden**. `is_customized` unterscheidet Vorgabe von eigener Fassung,
`completion_percent` treibt die Fortschrittsanzeige.

---

## 3. Der Dienste-Katalog

### `dps_catalog`

372 Einträge, das inhaltliche Herz. Neben den Stammdaten (Name, Anbieter,
Kategorie, Cookies, Zwecke, Rechtsgrundlage, Links) zwei getrennte
Herkunftsblöcke:

| Block | Felder | Belegt was |
|---|---|---|
| Datensatz | `source_type`, `source_url`, `source_license`, `source_retrieved_at` | woher die Cookie-Stammdaten stammen |
| Muster | `pattern_source_type`, `pattern_source_url`, `pattern_verified_at` | woher das Blocking-Muster stammt |

Getrennt, weil sie es sind: die Open Cookie Database führt Cookie-Namen und
keine Script-Adressen. `bin/verify-catalog` bricht den Release ab, wenn ein
Eintrag ohne Herkunft dasteht. Einzelheiten: `docs/DATA_SOURCES.md`.

`review_status` (`draft`/`verified`/`stale`) ist eine **redaktionelle** Angabe,
keine Freischaltung — ob ein Eintrag zur Auswahl steht, entscheidet allein
`is_active`.

### `dps_categories`

Trotz des Namens **keine** globalen Stammdaten: die Tabelle hängt an einer
Property (`property_id`) und hält deren Kategorie-Einstellungen — welche
Kategorie Pflicht ist, wie sie vorbelegt ist, welche Consent-Mode-Signale sie
setzt. Die vier Kategorieschlüssel selbst stehen fest in `Defaults::categories()`.

### `dps_catalog_translations`

**Leer und von keiner Codezeile benutzt.** Vorgesehen für übersetzte
Katalogtexte; nicht gebaut, weil rund 1100 Beschreibungen in drei Sprachen weder
maschinell erzeugt noch aus fremden Katalogen übernommen werden dürfen
(CLAUDE.md 11).

---

## 4. Einwilligungen

Drei Tabellen mit klarer Arbeitsteilung:

| Tabelle | Rolle |
|---|---|
| `consents` | **aktueller Stand** je `consent_id`, wird überschrieben |
| `consent_events` | **append-only Verlauf**, jede Änderung eine Zeile |
| `consent_stats_daily` | **Aggregat** je Tag/Domain/Sprache/Land/Variante |

`consent_id` ist eine UUIDv7 und zugleich das Geheimnis: unter
`/consent-lookup` kann ein Websitebesucher damit seine Einwilligung einsehen und
löschen, ohne Konto. Wer die ID kennt, ist berechtigt — deshalb steht sie
nirgends in einem Log.

Datensparsamkeit ist ins Schema eingebaut: `page_url_hash` statt URL (ein Pfad
kann eine Bestellnummer enthalten), `user_agent_family` statt User-Agent,
`ip_hash` statt IP, `country_code` nur aus CDN-Headern.

Das Dashboard liest `consent_stats_daily`, nie `consents` — sonst wüchse die
Kosten einer Grafik mit der Größe des Logs. Gefüllt von `bin/worker`.

**Bekannte Lücke:** `no_interaction` wird als konstante 0 geschrieben.

---

## 5. Betrieb

### `audit_log`

Der Prüfpfad. `actor_user_id`, `action`, `subject_type`/`subject_id`, `diff` als
JSON, `ip_hash`. Geschrieben von `Audit::log()`, lesbar unter `/admin/audit`.

Vier der acht Kundenmasken — Design, Sprachen, Dienste, Texte — protokollieren
**nichts**. Für Support-Zugriffe des Betreibers gleicht `Kernel::recordSupportWrite()`
das aus, für den Kunden selbst nicht.

Die Aufbewahrungsfrist lässt sich nicht unter 365 Tage senken (0 = nie löschen).
Ein Prüfpfad, den der Geprüfte kürzen kann, wäre keiner.

### `site_settings`

Schlüssel/Wert für alles, was der Betreiber im Admin einstellt.

**Falle:** `Settings::all()` **ignoriert Schlüssel, die nicht in
`Settings::defaults()` stehen.** Ein direkt eingefügter Wert kommt nie zurück.
Wer eine neue Einstellung braucht, trägt sie dort ein. Ausnahme sind
`worker_last_run` und `worker_last_summary`: die schreibt `bin/worker` direkt
per SQL und liest sie `SystemController` ebenso.

Geheimnisse gehören **nicht** hierher, sondern in `.env` — ein Passwort, das die
Anwendung anzeigen kann, kann eine Admin-Sitzung ausleiten.

### `mail_log`

Jede Nachricht mit Volltext, damit ein Betreiber ohne MTA sieht, was rausgegangen
wäre. Status `sent` / `failed` / `suppressed`.

**Wichtig:** Beim Anzeigen unter `/admin/mail/{public_id}` werden Token-Links
(`/verify-email/…`, `/reset-password/…`, `/invitations/…`) **redigiert**, und das
Öffnen wird protokolliert. Sonst wäre jeder Admin-Zugang eine Kontoübernahme.

### `rate_limits`

Keine `id`, Primärschlüssel ist `key_hash`. Zählt Versuche je Schlüssel bis
`reset_at`. Fällt auf die Datenbank zurück, wenn kein Redis konfiguriert ist.

### `migrations`

Welche Datei aus `database/migrations/` schon angewendet ist. `php bin/migrate
--status` liest genau das.

---

## 6. Vorgesehen, aber nicht gebaut

Diese fünf Tabellen existieren, sind leer und werden von **keiner** Codezeile
benutzt. Sie stehen hier, damit niemand sie für kaputt hält:

| Tabelle | Gehört zu | Stand |
|---|---|---|
| `jobs` | Job-Queue | nicht gebaut, `bin/worker` arbeitet synchron |
| `scan_jobs`, `scan_findings` | Website-Scanner (Phase 8) | nicht gebaut |
| `gvl_snapshots`, `gvl_translations` | IAB TCF v2.2 | nicht gebaut, hängt an der CMP-ID-Registrierung |

---

## Praktische Handgriffe

Alle Beispiele gegen die Instanz auf dem Pi. `-p` ohne Wert lässt das Passwort
abfragen, statt es in die Shell-Historie zu schreiben.

**Eigenes Konto freischalten und zum Admin machen** — der bequeme Weg braucht
gar kein SQL:

```bash
php bin/make-admin deine@adresse.tld
```

Von Hand, falls nötig:

```sql
UPDATE users
   SET email_verified_at = NOW(), is_admin = 1, updated_at = NOW()
 WHERE email = 'deine@adresse.tld';
```

**Automatische Anmeldesperre aufheben:**

```sql
UPDATE users SET locked_until = NULL, failed_login_count = 0
 WHERE email = 'deine@adresse.tld';
```

**Manuelle Sperre aufheben** (die geht auch im Admin-Bereich):

```sql
UPDATE users SET suspended_at = NULL, suspended_reason = NULL
 WHERE email = 'deine@adresse.tld';
```

**Wer hat welche Rolle auf welcher Property:**

```sql
SELECT u.email, p.name, pu.role AS direkt, om.role AS ueber_org
  FROM users u
  LEFT JOIN property_users pu       ON pu.user_id = u.id
  LEFT JOIN properties p            ON p.id = pu.property_id
  LEFT JOIN organization_members om ON om.user_id = u.id
 WHERE u.deleted_at IS NULL;
```

**Was eine Property tatsächlich ausliefert** — nicht in der Datenbank
zusammensuchen, sondern abrufen:

```bash
curl -s https://consented.eu/p/<public_id>/cmp.js | head -c 400
```

**Alles zurücksetzen** (nur Entwicklung, verwirft sämtliche Daten):

```bash
php bin/migrate --fresh && php bin/seed && php bin/seed-demo
```

---

## Wo das Schema herkommt

`database/migrations/NNNN_*.sql`, nummeriert und einmalig angewendet. Die
Reihenfolge ist die Dateireihenfolge, ein angewendeter Schritt wird nie
verändert — Korrekturen kommen als neue Migration. Der aktuelle Stand:

| Migration | Bringt |
|---|---|
| 0001–0007 | Grundschema: Konten, Properties, Katalog, Einwilligungen, System |

(0013 gibt es nicht — die Nummer war für eine Einstellungs-Migration reserviert,
die sich als überflüssig herausstellte: `site_settings` ist ein Schlüssel-Wert-
Speicher und braucht für neue Einstellungen kein Schema.)
| 0008 | `property_design.layout` von ENUM auf VARCHAR |
| 0009, 0010 | Provenance-Pflichtfelder im Katalog samt Backfill |
| 0011 | eigene Provenance für Blocking-Muster |
| 0012 | `users.suspended_at` |
| 0014 | `mail_log.public_id` |
| 0015 | `properties.suspended_at` |
| 0016 | `audit_log.subject_id` auf VARCHAR(100) |
