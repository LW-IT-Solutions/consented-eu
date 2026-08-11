# ADR 0002 — Konfiguration in `cmp.js` einbetten

- **Status:** angenommen
- **Datum:** 2026-08-09
- **Betrifft:** `/p/{publicId}/cmp.js`, `/p/{publicId}/config/{version}.json`

## Kontext

Der Brief beschreibt zwei Dateien: einen gemeinsamen `cmp.js`-Kern und eine
versionierte, unveränderlich cachebare Konfigurations-JSON unter
`…/config/{version}.json`.

Er verlangt an anderer Stelle aber auch: „Bereits erteilter Consent → **kein**
Netzwerk-Roundtrip vor der Freigabe blockierter Scripts."

## Problem

Diese beiden Anforderungen widersprechen sich. Um ein blockiertes Skript
freizugeben, braucht die Runtime zwei Dinge:

1. die Entscheidung des Besuchers — steht im First-Party-Cookie, sofort da
2. die Zuordnung Muster → Dienst — steht **nur in der Konfiguration**

Liegt die Konfiguration in einer zweiten Datei, wartet jedes blockierte Skript
auf deren Antwort. Bei einem wiederkehrenden Besucher, der längst zugestimmt
hat, ist das ein vermeidbarer Roundtrip auf dem kritischen Pfad — genau der
Fall, den der Brief ausschließen will.

## Entscheidung

`/p/{publicId}/cmp.js` liefert die Runtime **mit vorangestellter Konfiguration**
in einem Response aus:

```js
window.__CONSENTED_CONFIG__={…};
/* Runtime */
```

`Cache-Control: public, max-age=300, stale-while-revalidate=3600` plus ETag.

Die versionierte JSON unter `/p/{publicId}/config/{version}.json` bleibt
zusätzlich bestehen — unveränderlich cachebar, CORS auf verifizierte Domains
beschränkt. Sie wird von der Design-Vorschau genutzt und steht jedem offen, der
die Zwei-Datei-Variante bevorzugt.

## Konsequenzen

**Gut**

- Ein Request statt zwei. Kein Roundtrip vor dem Freigeben.
- Konfiguration und Runtime können nicht auseinanderlaufen; ein Cache, der eine
  alte Runtime mit einer neuen Konfiguration kombiniert, ist ausgeschlossen.
- Gemessen 16,3 KB gzip für Runtime **plus** Konfiguration — deutlich unter dem
  40-KB-Budget für die Runtime allein.

**Schlecht**

- `cmp.js` ist nicht mehr über Properties hinweg cachebar. Ein Besucher, der
  zwei Websites mit unterschiedlichen Properties besucht, lädt die Runtime
  zweimal.
- `max-age=300` statt `immutable`: mehr Anfragen und eine Verzögerung von bis
  zu fünf Minuten zwischen Veröffentlichen und letzter Auslieferung.
- Bei sehr vielen Properties auf einer Instanz kehrt sich die Bandbreitenrechnung
  um — siehe [DECISIONS.md](../DECISIONS.md#2-hosting-kosten-und-tragfähigkeit).

## Wann diese Entscheidung neu zu prüfen ist

Wenn die Auslieferung zum dominierenden Kostenposten wird. Der Umbau ist klein:
Die Runtime kennt bereits `window.__CONSENTED_CONFIG_URL__` und lädt die
Konfiguration nach, wenn `__CONSENTED_CONFIG__` fehlt. Es genügt, im Snippet
auf die statische Datei zu zeigen.
