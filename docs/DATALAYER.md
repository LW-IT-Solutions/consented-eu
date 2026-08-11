# dataLayer

Was consented.eu in den `dataLayer` schreibt, wann, und was davon als
Trigger-Bedingung taugt.

Eingestellt wird es je Property unter **Einstellungen › dataLayer**. Alle Werte
wirken erst nach dem Veröffentlichen — ausgeliefert wird der Schnappschuss, nicht
der Arbeitsstand.

## Zwei Dinge, die oft verwechselt werden

**Google Consent Mode** und **die Produkt-Ereignisse** sind getrennt.

| | Wohin | Schalter |
|---|---|---|
| `gtag('consent','default',…)` | immer `window.dataLayer` | Stub, `__consentedNoGcm` |
| `gtag('consent','update',…)` | immer `window.dataLayer` | *Google Consent Mode v2* |
| `consented_*`-Ereignisse | Array aus `dataLayerName` | *dataLayer* |

Der Stub läuft synchron im `<head>` und kennt die Konfiguration der Property
noch nicht. Ein umbenanntes Array würde `default` und `update` in zwei
verschiedene Arrays legen und Consent Mode still zerlegen. Deshalb gilt
`dataLayerName` **nur** für die Produkt-Ereignisse.

Umgekehrt heißt das: kommen die `consented_*`-Ereignisse in deinem Container an,
ist damit **nicht** belegt, dass er auch die Consent-Mode-Aufrufe sieht. Lädt
dein Container mit `&l=` auf ein anderes Array, prüfe beides getrennt.

## Reihenfolge

Sie ist festgelegt, und Trigger dürfen sich darauf verlassen:

1. **Stub, synchron:** `consent default` — alles `denied` außer `security_storage`.
2. Bei einer Entscheidung, in `applyConsent()`:
   1. `consent update` mit den abgeleiteten Signalen
   2. die freigegebenen Skripte werden aktiviert
3. Das Zustandsereignis (`consented_ready` bzw. `consented_update`).
4. Die Kategorien-Ereignisse, falls eingeschaltet.
5. `consented_withdrawn`, falls eingeschaltet und falls wirklich etwas entzogen
   wurde.

Punkt 2 war früher umgekehrt: die Skripte liefen vor dem `update`, ein
freigegebenes Google-Tag arbeitete deshalb mit den Vorgaben des Stubs statt mit
der Entscheidung. Behoben.

Punkte 3 bis 5 stehen in dieser Ordnung, damit jede Data-Layer-Variable beim
Auslösen der Kategorien-Ereignisse schon aktuell ist.

## `consented_ready`

Name aus `dataLayerEventReady`, Vorgabe `consented_ready`. Feuert für jeden
Besucher — mit und ohne gespeicherte Entscheidung, mit und ohne Banner.

**Höchstens einmal pro Seitenaufruf, nicht garantiert einmal.** Es bleibt aus,
wenn die Runtime nicht lädt oder nicht startet:

- Die Konfiguration ist nicht erreichbar oder unlesbar.
- Die Property ist stillgelegt oder nicht veröffentlicht.
- Die Domain ist für die Property nicht freigegeben.

Das ist gewolltes Verhalten — ohne Konfiguration gibt es keine Aussage über
Einwilligung. Für die Praxis heißt es: gib deinen Data-Layer-Variablen in GTM
einen **Set Default Value** von `pending`. Ein fehlendes Ereignis darf nicht
aussehen wie eine Erlaubnis.

```js
window.dataLayer.push({
  event: 'consented_ready',
  consented: null            // Erstbesucher: noch keine Entscheidung
});
```

## `consented_update`

Name aus `dataLayerEventUpdate`, Vorgabe `consented_update`. Bei `accept_all`,
`reject_all`, `save_selection`, `withdraw`, bei `Consented.acceptAll()`,
`denyAll()`, `withdraw()` und bei der GPC-Automatik.

`consented` ist hier nie `null`. Welche Aktion es war, steht in
`consented.action` — **nicht** im Ereignisnamen. Ein Widerruf ist am Namen allein
nicht erkennbar; dafür gibt es `consented_withdrawn`.

## `consented`: der Zustand

Wörtlich der Rückgabewert von `Consented.getConsent()`, also dieselben Felder,
die auch `Consented.on('change')` bekommt.

```js
consented: {
  consentId: '0192f3c1-7e4a-7b31-9d2e-4f6a1b8c0d5e',
  action: 'save_selection',   // accept_all | reject_all | save_selection | withdraw
  categories: { essential: true, analytics: true, functional: false },
  services:   { 'google-analytics-4': true, 'meta-pixel': false },
  updatedAt: '2026-08-10T09:12:03.114Z',
  version: 4
}
```

`null` bedeutet: keine gespeicherte Entscheidung. Nicht „alles abgelehnt".

## Flache Variablen

Schalter *Flache Variablen mitschicken*. Ohne sie brauchst du für jede Abfrage
eine eigene JavaScript-Variable in GTM.

```js
consented_decision: 'save_selection',   // 'pending' wenn nichts entschieden ist
consented_has_decision: true,
consented_category_essential:  'granted',
consented_category_analytics:  'granted',
consented_category_functional: 'denied'
```

Drei Werte, nicht zwei: `granted`, `denied`, `pending`.

**`pending` ist weder Einwilligung noch Ablehnung.** Es tritt auf, solange nichts
entschieden ist, und für eine Kategorie, die im gespeicherten Zustand fehlt —
etwa nach einer Konfigurationsänderung. Eine Bedingung *ist nicht gleich
`denied`* trifft für `pending` zu. Prüfe immer auf `granted`.

**Kategorien ohne Dienste kommen nicht vor.** Der Dialog zeigt sie nicht, also
sagt der dataLayer auch nichts über sie. Sonst stünde dort ein `granted` für
einen Zweck, der dem Besucher nie gezeigt wurde.

## Kategorien-Ereignisse

Schalter *Ereignis je Kategorie*: aus, nur bei Einwilligung, oder bei
Einwilligung und Ablehnung.

```js
{ event: 'consented_granted_analytics',
  consented_event: { scope: 'category', key: 'analytics', state: 'granted' } }
```

Die Namen sind **fest**: `consented_granted_<kategorie>` und
`consented_denied_<kategorie>`. Sie lassen sich nicht als eigene Ereignisnamen
setzen — das Formular weist solche Werte ab.

Der Sinn: ein Tag an `consented_granted_analytics` **kann** ohne Einwilligung
nicht feuern, weil es das Ereignis ohne sie nicht gibt. Beim üblichen Weg — ein
Sammelereignis plus Bedingung — verschickt eine vergessene Bedingung ein Pixel
bei Ablehnung.

Zwei Regeln dazu:

- `pending` erzeugt **kein** Ereignis. „Noch nicht abgelehnt" darf sich nicht als
  Erlaubnis triggern lassen.
- Für notwendige Kategorien feuert das `granted`-Ereignis auch ohne Entscheidung,
  weil sie ohne Entscheidung aktiv sind. **Das ist kein Einwilligungsnachweis.**

## `consented_withdrawn`

Name aus *Ereignis bei Widerruf*. Leer heißt aus, und aus ist die Vorgabe.

Feuert zusätzlich zum Zustandsereignis, wenn mindestens eine Kategorie oder ein
Dienst von erteilt auf nicht erteilt wechselt: bei `withdraw`, bei `reject_all`
nach vorherigem `accept_all`, und bei einer teilweisen Rücknahme über
`save_selection`.

```js
consented_withdrawal: {
  revokedCategoriesCsv: 'analytics,marketing',
  revokedCategoriesCount: 2,
  revokedServicesCsv: 'google-analytics-4',
  revokedServicesCount: 1
}
```

**Mengen als CSV plus Zähler, nie als Array.** GTMs Datenmodell mischt Arrays
index-weise: ein späteres, kürzeres Array lässt Reste des früheren lesbar, und
eine `contains`-Bedingung sieht dann einen Dienst, der längst abgelehnt ist.

Wechselt nichts von erteilt auf nicht erteilt, bleibt das Ereignis aus — auch
wenn `action` `withdraw` lautet.

## Bedienereignisse

Schalter *Bedienereignisse mitschicken*. Namen fest, nicht setzbar.

```js
{ event: 'consented_banner_shown',
  consented_ui: { language: 'de', hasDecision: false,
                  layer: 'first', reason: 'no_decision' } }

{ event: 'consented_settings_opened',
  consented_ui: { language: 'de', hasDecision: true, layer: 'second' } }
```

`reason` ist `no_decision`, `version_changed` oder `expired`.

Bei `version_changed` und `expired` **ist `consented` nicht `null`** — es gibt
eine gespeicherte Entscheidung, sie gilt nur nicht mehr. Verwechsle das nicht
mit „hat schon zugestimmt".

Diese Ereignisse sagen etwas über die Bedienung, **nie** über eine Einwilligung.

## `consented_google`

Schalter *Consent-Mode-Signale spiegeln*. Legt die sieben Signale in den Payload:

```js
consented_google: {
  ad_storage: 'denied',        analytics_storage: 'granted',
  ad_user_data: 'denied',      ad_personalization: 'denied',
  functionality_storage: 'denied', personalization_storage: 'denied',
  security_storage: 'granted'
}
```

**Zur Fehlersuche, nicht als Grundlage einer Trigger-Bedingung.** Wofür Google
diese Signale hält, entscheidet Consent Mode selbst; der Spiegel zeigt nur, was
wir gesendet haben.

Der Schlüssel ist auch für den unentschiedenen Besucher da, dann mit den
Vorgabewerten. Er fehlt genau dann, wenn *Google Consent Mode v2* abgeschaltet
ist — dort ist Abwesenheit die ehrliche Antwort.

## Der Name des Arrays

Feld *Name des Arrays*, Vorgabe `dataLayer`. Nur ändern, wenn dein Tag-Manager
ein anderes Array liest.

Namen, die auf `window` schon belegt sind, weist das Formular ab — `location`,
`document`, `top` und andere. Ein solcher Wert würde die Seite zerlegen, nicht
nur das Banner: eine Zuweisung auf `window.location` navigiert.

Die Runtime schreibt zusätzlich nie über einen belegten Namen und prüft, dass das
Ziel ein `push` versteht. Zeigt der Name auf ein Objekt statt auf ein Array —
etwa `digitalData` —, passiert nichts, still.

## Vorgaben

Mit allen Schaltern auf Vorgabe entsteht genau ein Eintrag pro Ereignis:

```js
{ event: 'consented_ready', consented: null }
```

Das ist byteweise das Verhalten von vor Einführung dieser Einstellungen. Eine
Property, die nichts umstellt, sendet nach einem Update dasselbe wie vorher.

## Reservierte Namen

Nicht als eigene Ereignisnamen setzbar:

- alles mit `consented_granted_` oder `consented_denied_`
- `consented_banner_shown`, `consented_settings_opened`

Grund: hieße das Boot-Ereignis `consented_granted_analytics`, feuerte ein Tag an
diesem Trigger bei jedem Erstbesucher — mit `consented: null`, also ohne jede
Einwilligung. Die Sperre greift im Formular **und** in der Runtime, damit sie
auch für Schnappschüsse gilt, die vor ihrer Einführung veröffentlicht wurden.

Die beiden Zustandsereignisse dürfen außerdem nicht denselben Namen tragen; sonst
wären Seitenaufruf und Änderung nicht unterscheidbar.

## Checkliste für GTM

1. Data-Layer-Variablen mit **Set Default Value** `pending` anlegen — nicht
   `denied`.
2. Auf `granted` prüfen, nie auf „nicht `denied`".
3. Für Tags, die Einwilligung brauchen: `consented_granted_<kategorie>` als
   Trigger, ohne zusätzliche Bedingung.
4. Für Aufräum-Tags: `consented_withdrawn`.
5. `consented_google` nur zum Nachsehen benutzen.
6. Prüfen, ob dein Container tatsächlich `window.dataLayer` liest — sonst sieht
   er die Consent-Mode-Aufrufe nicht.
