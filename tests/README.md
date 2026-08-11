# Tests

```bash
php bin/test          # alle Tests
php bin/test plural   # nur einen
```

Ein Test ist eine Datei in diesem Verzeichnis, die rechnet und mit Exit 1 endet,
wenn etwas nicht stimmt. Kein PHPUnit, weil das Projekt keine
Composer-Abhängigkeiten hat und keine bekommen soll (ADR 0001, CLAUDE.md
Regel 6): ein Testläufer, der eine Installation voraussetzt, macht aus „PHP und
MariaDB reichen" eine Unwahrheit.

Der Preis ist Kargheit — keine Fixtures, keine Mocks, keine Assertions-Sprache.
Für das, was sich hier lohnt, reicht es.

## Vorhanden

| Datei | Was geprüft wird |
|---|---|
| `plural.php` | CLDR-Pluralklassen für 19 Sprachen. Die Zahlen, an denen die Regeln brechen (11–14, 21/22, 101/111, Null), plus ein Durchlauf 0–200 je Sprache gegen Indizes außerhalb der Formenzahl. 3944 Zusicherungen |

Tests, die eine Datenbank brauchen, stehen noch aus — bis es eine Testdatenbank
gibt, bleibt `bin/verify-catalog` das Gate für alles Datenbankgebundene.

## Weiterhin geplant

- **PHPUnit** für Auth-Flows, Rechtematrix (jede Rolle × jede Aktion),
  Config-Versionierung, Consent-Persistenz und den Retention-Job
- **Playwright-E2E** über die gesamte Kette: Registrierung → Property →
  Dienste → Snippet auf einer Testseite → Banner erscheint → Accept →
  blockiertes Skript lädt → Consent im Dashboard sichtbar → Widerruf →
  Skript wieder blockiert
- **Blocking-Tests** mit GA4-, Meta- und YouTube-Attrappen: Prüfung, dass vor
  der Einwilligung kein Request rausgeht
- **A11y** mit axe-core im E2E-Lauf, plus vollständiger Tastatur-Durchlauf

Bis dahin gilt die manuelle Prüfliste:

```bash
find src bin routes views -name '*.php' -exec php -l {} \; | grep -v 'No syntax'
node --check public/sdk/dist/cmp.js
node --check public/sdk/dist/stub.js
php bin/migrate --status
php bin/worker --verbose
```
