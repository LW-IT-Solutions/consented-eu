# ADR 0001 — Kein Build-Schritt

- **Status:** angenommen, umkehrbar
- **Datum:** 2026-08-09
- **Betrifft:** Dashboard-CSS, Browser-SDK

## Kontext

Der Brief nennt Tailwind für das Dashboard und TypeScript mit esbuild für das
SDK, jeweils mit dem Zusatz, dass die gebauten Artefakte eingecheckt werden,
„damit Self-Hoster keinen Node brauchen".

Gleichzeitig gilt Regel 4: keine neue Abhängigkeit ohne Rückfrage.

## Problem

Eingecheckte Build-Artefakte lösen das Self-Hosting-Problem nur halb. Sie
lösen es für den Betrieb, nicht für die Weiterentwicklung: Sobald jemand eine
Farbe ändern will, braucht er die vollständige Toolchain. Bei einem Projekt,
dessen Kernversprechen „du kannst das selbst hosten und anpassen" lautet, ist
das ein spürbarer Widerspruch.

Dazu kommt die stille Gefahr eingecheckter Artefakte: Quelle und Build laufen
irgendwann auseinander, und niemand merkt es, weil nur das Artefakt ausgeliefert
wird.

## Entscheidung

Kein Build-Schritt. Konkret:

- **CSS** von Hand geschrieben, durchgehend über Custom Properties gesteuert.
  Dark Mode bindet die Tokens neu, statt Regeln zu duplizieren.
- **SDK** direkt als ES5-kompatibles IIFE geschrieben, ohne Transpilation.

## Konsequenzen

**Gut**

- `git clone`, `.env` ausfüllen, `bin/migrate`, fertig. Kein Node, kein npm,
  kein Composer.
- Was im Repository steht, ist exakt das, was ausgeliefert wird. Kein
  Auseinanderdriften möglich.
- Keine Lieferketten-Angriffsfläche über npm — bei einem Produkt, dessen Code
  auf fremden Websites im Browser jedes Besuchers läuft, wiegt das mehr als
  üblich.

**Schlecht**

- Kein Tree Shaking und keine Minifizierung. Der Stub liegt bei 3,6 KB
  unkomprimiert statt der im Brief geforderten 1 KB (gzip: 1,46 KB). Das
  Budget ist damit formal gerissen.
- Keine Typprüfung im SDK. Dagegen hilft nur Disziplin und `node --check`.
- Handgeschriebenes CSS wächst schlechter als eine Utility-Bibliothek, wenn
  viele Leute daran arbeiten.

**Umkehrbar?** Ja, in beide Richtungen. Das CSS lässt sich durch Tailwind-Output
ersetzen, ohne dass sich eine Klasse in den Templates ändert, solange die
Klassennamen erhalten bleiben. Das SDK ist gültiges TypeScript-Eingabematerial.

## Wenn du es anders willst

Der pragmatische Mittelweg wäre ein Minifizierungsschritt allein für die
beiden SDK-Dateien — ohne Transpilation, ohne Bundler. Das würde das
Stub-Budget einhalten und den Rest unangetastet lassen. Steht als Ticket P5 in
[PLAN.md](../PLAN.md).
