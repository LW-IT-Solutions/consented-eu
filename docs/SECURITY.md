# Sicherheit

## Schwachstelle melden

Bitte **kein** öffentliches Issue. Zwei Wege:

1. **GitHub Security Advisory** (bevorzugt, privat):
   <https://github.com/LW-IT-Solutions/consented-eu/security/advisories/new>
2. E-Mail an die im [Impressum](https://consented.eu/legal/imprint) genannte
   Adresse, Betreff mit `[security]`.

Wir bestätigen den Eingang innerhalb von 72 Stunden und melden uns mit einer
Einschätzung innerhalb von sieben Tagen. Wir bitten um 90 Tage bis zur
Veröffentlichung; wenn ein Fix früher fertig ist, gerne früher.

Das Projekt steht unter der MIT-Lizenz und wird ohne Gewährleistung
bereitgestellt — das ändert nichts daran, dass wir Sicherheitsmeldungen ernst
nehmen und zeitnah beantworten.

## Was umgesetzt ist

### Authentifizierung

- Argon2id (64 MB, 4 Durchläufe, 2 Threads) mit vorgeschaltetem HMAC-Pepper aus
  `.env`. Der Pepper liegt nicht in der Datenbank — ein reiner DB-Dump reicht
  für einen Offline-Angriff nicht aus.
- Transparentes Rehashing bei geänderten Kostenparametern.
- Rate Limiting pro IP **und** pro Konto. Beides ist nötig: IP-Limits allein
  scheitern an Botnetzen, Konto-Limits allein an Passwort-Spraying.
- Progressive Kontosperre nach 5, 7 und 10 Fehlversuchen (5 min / 15 min / 1 h).
- Sitzungen in der Datenbank, Token nur als SHA-256-Hash. Token-Rotation bei
  jedem Privilegienwechsel (Session-Fixation-Schutz).
- Passwort-Reset invalidiert **alle** Sitzungen; Passwortwechsel alle außer der
  aktuellen.

### Enumeration

- Registrierung, Login und Passwort-Reset antworten unabhängig davon, ob die
  Adresse existiert.
- Eine Registrierung auf eine bestehende Adresse löst eine Warnmail an den
  Kontoinhaber aus, statt dem Anfragenden etwas zu verraten.
- Eine Property, für die keine Berechtigung besteht, antwortet 404 statt 403.

### Anfragen

- CSRF-Token für alles außer GET/HEAD/OPTIONS, zusätzlich Origin-Prüfung.
- CSP ohne `unsafe-inline` für Skripte, Per-Request-Nonce, `strict-dynamic`.
- HSTS, `X-Content-Type-Options`, `Referrer-Policy`, `Permissions-Policy`,
  `X-Frame-Options`.
- `upgrade-insecure-requests` nur über HTTPS — über HTTP würde die Direktive
  jede Asset-URL umschreiben und die Seite zerlegen.

### Datenbank

- Ausschließlich Prepared Statements. Es gibt keine Methode in `Db`, die
  interpolierte Werte annimmt.
- Ausgabe-Escaping über `View::e()`; freies HTML nur durch `Sanitizer::html()`
  mit Allow-List (unbekannte Tags und Attribute fallen weg, nicht durch).
- Eigenes CSS wird gefiltert: `@import`, `expression()`, `javascript:` und
  externe `url()` werden entfernt. Ein externer Bildaufruf im CSS wäre ein
  Tracking-Pixel mit Umweg.

### Consent-Endpunkt

- CORS nur für verifizierte Domains der Property (`Origin` ist hier verlässlich,
  weil es ein echter Cross-Origin-Request ist).
- Payload-Limit 32 KB.
- Entscheidungen werden gegen die veröffentlichte Konfiguration validiert:
  unbekannte Schlüssel fallen weg, Pflichtkategorien und essenzielle Dienste
  werden serverseitig auf `true` gezwungen.
- Rate Limiting: 60 Einträge pro IP-Hash und Property und Stunde.
- Antwortet immer 200/204, auch bei Ablehnung — die Antwort landet im Browser
  eines Besuchers auf einer fremden Website und darf dort nichts kaputt machen
  und nichts verraten.

### Datenminimierung

- IP-Adressen ausschließlich als HMAC-SHA-256 mit rotierendem Pepper.
  `Hash::ip()` wirft eine Exception, wenn der Pepper fehlt — ein fehlender
  Pepper darf nicht stillschweigend zu einem umkehrbaren Hash eines
  32-Bit-Adressraums degradieren.
- Seiten-URLs nur als SHA-256-Hash: ein Pfad kann eine Bestellnummer oder einen
  Suchbegriff enthalten.
- User-Agent nur als grobe Familie („Firefox/Windows").
- Keine seitenübergreifende Kennung, keine Profilbildung.

## Bekannte Einschränkungen

Ehrlich benannt, statt im Code versteckt:

1. **Die Referer-Prüfung bei `cmp.js` ist keine Sicherheitsgrenze.** Ein
   `<script src>` sendet keinen `Origin`, nur `Referer` — und der ist
   client-kontrolliert. Die Prüfung erschwert das Abschreiben eines Snippets,
   mehr nicht. Die belastbare Grenze sitzt am Consent-Endpunkt.
2. **Kein Zwei-Faktor.** Spalten und Recovery-Codes sind vorgesehen, die
   Implementierung fehlt (Ticket A6).
3. **Kein Logo-Upload.** Bewusst weggelassen, bis MIME-Prüfung, Magic-Byte-Check
   und SVG-Sanitisierung stehen — eine SVG-Datei kann Skripte enthalten
   (Ticket A4).
4. **`X-Forwarded-For` wird nicht ausgewertet.** Hinter einem Reverse Proxy
   sieht der Consent-Endpunkt die Proxy-IP. Das muss beim Aufsetzen eines
   Proxys explizit nachgezogen werden, mit Whitelist — niemals ungeprüft.
5. **Keine automatisierten Sicherheitstests.** Die Rechtematrix ist bislang nur
   manuell geprüft (Ticket P3).
