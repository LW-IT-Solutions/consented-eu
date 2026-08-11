# IAB TCF: Registrierung als CMP

**Status: Entscheidung liegt bei dir. Ich lege hier beide Wege mit ihren Folgen vor.**

## Warum das überhaupt eine Frage ist

Das IAB-Europe Transparency & Consent Framework ist kein offener Standard, den man
einfach implementiert. Es ist ein Vertragswerk. Wer TC-Strings ausspielt, muss als
CMP registriert sein und bekommt eine **CMP ID**, die in jedem TC-String steht.
Ohne gültige ID ist ein TC-String für die Gegenseite wertlos — Vendoren und
SSPs prüfen die ID gegen die offizielle Liste und verwerfen unbekannte.

Damit kollidiert TCF direkt mit „free forever": es ist der einzige Teil des
Produkts, der laufende Fremdkosten verursacht.

## Anforderungen und Prozess

1. **Antrag über das CMP-Portal** bei IAB Europe.
2. **Vertrag** (TCF Terms & Conditions) unterzeichnen — bindet an die Policies,
   inklusive laufender Änderungen.
3. **CMP-Validierung** bestehen: ein technischer Test gegen die Spezifikation
   (`__tcfapi`-Verhalten, TC-String-Kodierung, UI-Pflichten aus v2.2).
4. Nach Bestehen: **CMP ID** und Eintrag im öffentlichen Register.
5. **Jährliche Gebühr** und laufende Compliance-Pflicht. Verstöße können zur
   Aussetzung der ID führen — dann fällt das TCF-Banner bei allen Kunden aus.

## Kosten

**Jahresgebühr: 1.575 €** (angehoben von 1.500 € zum April 2023, seither
unverändert). Sie fällt für neue wie für verlängernde CMPs gleichermaßen an.

> Vor einem Antrag bitte den aktuellen Stand direkt bei IAB Europe bestätigen —
> Gebühren und Bedingungen sind einseitig änderbar, und diese Zahl ist eine
> Recherche, keine Zusage.

Nicht in dieser Zahl enthalten und realistisch einzuplanen:

- Aufwand für die Validierung und für Nachbesserungen bis zum Bestehen
- laufende Anpassung an Policy-Änderungen (v2.2 brachte u. a. das Verbot von
  berechtigtem Interesse für Zwecke 3–6 und die Pflicht zur Anzeige von
  Speicherdauer und Datenkategorien je Vendor)
- täglicher GVL-Abgleich und Umgang mit Vendor-List-Versionswechseln

## Option A — eigene CMP-ID beantragen

**Dafür**

- Publisher mit Werbevermarktung können das Produkt überhaupt erst einsetzen.
  Für diese Zielgruppe ist TCF nicht ein Feature, sondern die Eintrittskarte.
- Ohne TCF fällt eine der vier im Brief genannten Zielgruppen komplett weg.
- Es ist das einzige Merkmal, bei dem Cookiebot und Usercentrics sonst
  strukturell überlegen bleiben.

**Dagegen**

- 1.575 € pro Jahr müssen aus etwas gedeckt werden. Bei einem Produkt ohne
  Einnahmen heißt das: aus deiner Tasche, dauerhaft.
- Vertragliche Bindung an ein Regelwerk, das sich ändern kann, während das
  Versprechen „kostenlos" bleibt.
- Compliance-Risiko: Eine ausgesetzte CMP-ID betrifft **alle** Kunden gleichzeitig.
- Self-Hoster laufen unter deiner CMP-ID — deren Fehlverhalten fällt auf dich
  zurück. Das ist ein Kontrollproblem ohne saubere technische Lösung.

## Option B — Start ohne TCF-Zertifizierung

**Dafür**

- Keine laufenden Kosten, keine Vertragsbindung, kein fremdes Compliance-Risiko.
- Für kleine und mittlere Websites, Shops und Datenschutz-sensible Betreiber —
  also drei der vier Zielgruppen — ist TCF schlicht irrelevant. Ein reines
  Kategorien- und Dienste-Modell ist für sie sogar verständlicher.
- Der Code kann trotzdem TCF-fähig gebaut werden; die ID lässt sich später
  ergänzen, ohne die Datenhaltung zu ändern.

**Dagegen**

- Publisher mit Programmatic-Vermarktung fallen als Zielgruppe aus.
- „TCF-kompatibel, Zertifizierung in Arbeit" ist eine Aussage mit Verfallsdatum.
  Wenn sie zwei Jahre unverändert dort steht, wird sie unglaubwürdig.

## Was ich bereits umgesetzt habe

Ich habe **Option B als Vorzustand** implementiert, weil sie reversibel ist und
Option A nicht:

- Das Datenmodell hat `tc_string`, `ac_string`, `gpp_string` und
  `tcf_vendor_id`; die Tabellen `gvl_snapshots` und `gvl_translations`
  existieren. Ein späteres Einschalten braucht **keine Migration**.
- Der Stub registriert `window.__tcfapi` **nicht**. Eine `__tcfapi`, die auf
  `ping` antwortet, aber nie TCData liefert, ist schlimmer als keine: Vendoren
  warten dann auf ein Signal, das nie kommt.
- Im Dashboard steht unter *Einstellungen* ein sichtbarer Hinweis, dass TCF
  bewusst nicht aktivierbar ist, mit Verweis auf dieses Dokument.
- Auf `/features` steht dasselbe öffentlich, statt es im Kleingedruckten zu
  verstecken.

## Meine Empfehlung, wenn du eine willst

Erst die drei TCF-freien Zielgruppen bedienen und sehen, ob das Produkt
angenommen wird. Die 1.575 € sind gut investiert, sobald es einen Publisher
gibt, der konkret danach fragt — und schlecht investiert, solange es keinen gibt.

**Entscheide bitte du.** Wenn Option A gewählt wird, ist der nächste Schritt der
TC-String-Encoder mit Round-Trip-Tests gegen die offiziellen IAB-Testvektoren;
das ist Kernkompetenz und gehört nicht an eine fremde Bibliothek delegiert.

## Quellen

- [JOIN THE TCF — IAB Europe](https://iabeurope.eu/join-the-tcf/)
- [TCF for CMPs — IAB Europe](https://iabeurope.eu/tcf-for-cmps/)
- [TCF Vendor and CMP annual fee (IAB Europe, 06.03.2023)](https://iabeurope.eu/wp-content/uploads/TCF_V-CMP_comms_TCFvendorAndCMPannualFee-_060323_IABEurope.pdf)
- [IAB Europe Raises CMP Fee — AdExchanger](https://www.adexchanger.com/online-advertising/iab-europe-raises-cmp-fee-and-readies-consent-framework-for-an-update/)
- [CMP Registrierung — register.consensu.org](https://register.consensu.org/CMP)
