# consented.eu

Freie Consent-Management-Plattform. Banner, zweite Ebene, Script-Blocking,
Google Consent Mode v2 und ein revisionssicheres Einwilligungsprotokoll —
gehostet oder vollständig selbst betrieben, aus demselben Quellcode.

**Kein Build-Schritt. Kein Node. Kein Composer.** PHP und MariaDB reichen.

*English version: [README.md](README.md)*

## Schnellstart

```bash
git clone https://github.com/LW-IT-Solutions/consented-eu.git /var/www/consented
cd /var/www/consented

cp .env.example .env
php -r 'echo "APP_KEY=", base64_encode(random_bytes(32)), PHP_EOL;'
php -r 'echo "PASSWORD_PEPPER=", base64_encode(random_bytes(32)), PHP_EOL;'
php -r 'echo "IP_HASH_PEPPER=", base64_encode(random_bytes(32)), PHP_EOL;'
# Werte plus DB-Zugang und APP_URL in .env eintragen

php bin/migrate
php bin/seed

chgrp -R www-data storage .env && chmod -R 775 storage && chmod 640 .env
```

Document Root auf `public/` zeigen lassen. Fertig.

> Wichtig: Nur `public/` darf web-erreichbar sein. Läge das Projektverzeichnis
> im Document Root, wäre `.env` über HTTP abrufbar.

## Voraussetzungen

- PHP 8.3+ mit `pdo_mysql`, `mbstring`, `dom`, `json`
- MariaDB 10.11+ oder MySQL 8
- Webserver mit URL-Rewriting (Apache `mod_rewrite` oder nginx)
- Redis — optional, ohne läuft alles über die Datenbank

## Einbindung auf einer Website

Nach dem Anlegen und Veröffentlichen einer Property, unter *Property → Einbindung*:

```html
<script src="https://consented.eu/sdk/dist/stub.js"
        data-block="googletagmanager.com/gtag|connect.facebook.net"></script>
<script async src="https://consented.eu/p/DEINE-PROPERTY-ID/cmp.js"></script>
```

Die erste Zeile muss vor jedem anderen Skript stehen — auch vor dem Google Tag
Manager. Sie trägt deine Blocking-Muster, also füge sie erneut ein, wenn sich
deine Dienste ändern.

Eigene Skripte blockieren:

```html
<script type="text/plain" data-consented="google-analytics-4">
  gtag('config', 'G-XXXXXXX');
</script>
```

Einstellungen-Link im Footer:

```html
<a href="#" data-consented-open>Cookie-Einstellungen</a>
```

Cookie-Erklärung für die Datenschutzerklärung:

```html
<div id="consented-cookie-declaration"></div>
<script src="https://consented.eu/p/DEINE-PROPERTY-ID/cookies.js?lang=de"></script>
```

## Der Dienste-Katalog

385 Dienste liegen bei: was sie sind, wer sie betreibt, welche Cookies sie
setzen und wie lange, die Rechtsgrundlage und ob Daten die EU verlassen.

- **47 Einträge sind gegen die Dokumentation des Anbieters geprüft.** Jede
  Angabe stammt von den eigenen Seiten des Anbieters und wurde anschließend ein
  zweites Mal gegen die zitierte Quelle gehalten; unbelegte Felder wurden
  geleert statt behalten. Das wörtliche Zitat hinter jedem Feld steht in
  [`database/seeds/dps_catalog_evidence.json`](database/seeds/dps_catalog_evidence.json).
- **134 Dienste tragen am Endpunkt des Anbieters belegte Blocking-Muster.** Ein
  Muster kommt nur in den Katalog, wenn die Adresse, auf die es passt,
  tatsächlich geantwortet hat. Ein Muster, das nichts trifft, ist schlimmer als
  keines: es sieht nach Schutz aus und lässt den Tracker durch.
- Neun Einträge sind als `unsourced` gekennzeichnet. Ihre Angaben stammen aus
  der Zeit vor der Provenance-Pflicht und ließen sich auf kein Anbieterdokument
  zurückführen; `bin/verify-catalog` nennt sie bei jedem Lauf namentlich, und
  sie dürfen nicht als geprüft markiert werden.

Keine Daten stammen aus dem Katalog eines konkurrierenden CMP. Quellen, ihre
Lizenzen und das Prüfprotokoll: [docs/DATA_SOURCES.md](docs/DATA_SOURCES.md).

## Betrieb

```bash
php bin/migrate --status     # Migrationsstand
php bin/seed                 # DPS-Katalog aktualisieren (idempotent)
php bin/worker --verbose     # Aufräumen, Retention, Tagesaggregation
php bin/verify-catalog       # Release-Gate: Herkunft und Lizenzen
```

Als Cron, alle 15 Minuten:

```
0,15,30,45 * * * * php /var/www/consented/bin/worker >/dev/null 2>&1
```

## Dokumentation

| Datei | Inhalt |
|---|---|
| [docs/PLAN.md](docs/PLAN.md) | Was fertig ist, was fehlt, Tickets |
| [docs/DECISIONS.md](docs/DECISIONS.md) | Lizenz, Hosting-Kosten, Datenrolle, Positionierung |
| [docs/DATA_SOURCES.md](docs/DATA_SOURCES.md) | Woher Katalogdaten kommen dürfen und woher nicht |
| [docs/DATALAYER.md](docs/DATALAYER.md) | dataLayer-Ereignisse, Namen, Reihenfolgezusagen |
| [docs/TCF_REGISTRATION.md](docs/TCF_REGISTRATION.md) | IAB-Registrierung: Prozess, Kosten, zwei Optionen |
| [docs/OPEN_QUESTIONS.md](docs/OPEN_QUESTIONS.md) | Getroffene Annahmen, offene Punkte |
| [docs/ROLES.md](docs/ROLES.md) | Rechtematrix |
| [docs/SECURITY.md](docs/SECURITY.md) | Maßnahmen, bekannte Einschränkungen, Meldeweg |
| [docs/BRANDING.md](docs/BRANDING.md) | EU-Emblem, zulässige Aussagen |
| [docs/adr/](docs/adr/) | Architekturentscheidungen |

## Lizenz

| Was | Lizenz |
|---|---|
| Code — Server, Dashboard, Browser-Runtime, Migrationen, Doku | **MIT**, [LICENSE](LICENSE) |
| Dienste-Katalog — die Daten in `dps_catalog` | **ODbL 1.0**, [LICENSE-CATALOG](LICENSE-CATALOG) |

Für den Code heißt das: Du darfst consented.eu **privat und gewerblich**
einsetzen, bei uns gehostet oder auf deiner eigenen Infrastruktur, für dich
selbst oder für Kundenprojekte. Du darfst ihn ändern, weitergeben und in eigene
Produkte einbauen. Du musst niemanden fragen, nichts zahlen und deine
Änderungen nicht offenlegen. Die einzige Bedingung ist, den Copyright-Hinweis
mitzuführen.

Es gibt bewusst kein Copyleft im Code. Ziel des Projekts ist, dass Leute schnell
und kostenlos eine funktionierende CMP bekommen — jede Lizenzhürde arbeitet
gegen dieses Ziel, auch eine, die gut gemeint ist.

Beim **Katalog** ist das anders, und zwar aus einem Grund, der nichts mit
Verdienen zu tun hat: Ein Verzeichnis aus Diensten, Cookies und Laufzeiten ist
in der EU nach RL 96/9/EG als Datenbank sui generis geschützt, ob wir wollen
oder nicht. Die ODbL sorgt dafür, dass dieses Recht niemand gegen die
Allgemeinheit wendet. Sie verlangt Attribution und — nur wenn du einen
**veränderten Katalog veröffentlichst** — dass diese Fassung ebenfalls unter
ODbL verfügbar ist. Wer consented.eu bloß benutzt oder selbst hostet, ist von
alldem nicht betroffen; wer den Katalog in ein eigenes Produkt einbaut, muss
lediglich die Herkunft nennen und behält den eigenen Code für sich.

## Rechtlicher Hinweis

consented.eu ist ein technisches Werkzeug zur Umsetzung der Einwilligungspflicht.
Es stellt **keine Rechtskonformität** her und ersetzt keine Rechtsberatung.
