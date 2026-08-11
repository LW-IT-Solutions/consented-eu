# Rollen und Rechte

Diese Matrix ist in `src/Auth/Permission.php` als Code hinterlegt. Beide
Darstellungen müssen übereinstimmen — wenn du hier etwas änderst, ändere es
dort mit.

## Property-Rollen

| Aktion | Inhaber | Admin | Bearbeiter | Betrachter |
|---|:---:|:---:|:---:|:---:|
| Property ansehen | ✅ | ✅ | ✅ | ✅ |
| Auswertungen einsehen | ✅ | ✅ | ✅ | ✅ |
| Dienste, Texte, Design, Sprachen bearbeiten | ✅ | ✅ | ✅ | – |
| Konfiguration veröffentlichen | ✅ | ✅ | ✅ | – |
| Nutzer einladen, entfernen, Rolle ändern | ✅ | ✅ | – | – |
| Einwilligungsprotokoll exportieren | ✅ | ✅ | – | – |
| Property löschen | ✅ | – | – | – |
| Inhaberschaft übertragen | ✅ | – | – | – |

## Organisationsrollen

Eine Organisation bündelt Properties. Mitgliedschaft dort wird auf eine
Property-Rolle abgebildet, sofern kein direkter Property-Zugriff besteht:

| Organisationsrolle | wirkt auf jede Property als |
|---|---|
| `owner` | Inhaber |
| `admin` | Admin |
| `member` | Bearbeiter |

Ein direkter Eintrag in `property_users` **gewinnt** gegen die abgeleitete
Rolle. So lässt sich ein Organisationsmitglied für eine einzelne Property auf
`viewer` beschränken.

## Regeln, die im Code erzwungen werden

1. **Die Inhaberrolle wird nicht vergeben, sondern übertragen.** Sie steht
   nicht in `assignableRoles()`.
2. **Niemand ändert die eigene Rolle.** Sonst könnte sich ein Admin selbst zum
   Inhaber machen.
3. **Der Inhaber kann nicht entfernt werden.** Sonst wäre eine Property
   herrenlos.
4. **Eine Property, die man nicht sehen darf, antwortet mit 404, nicht mit 403.**
   Ein 403 würde bestätigen, dass die ID existiert.
5. **Entzug des Direktzugriffs entfernt keinen Organisationszugriff.** Die
   Oberfläche sagt das ausdrücklich, statt so zu tun, als wäre der Zugriff weg.
6. **Jede Rechteänderung landet im `audit_log`** mit Akteur, Ziel, alter und
   neuer Rolle sowie gehashter IP.

## Einladungen

- Token 32 Byte Zufall, nur als SHA-256-Hash gespeichert, 7 Tage gültig.
- Eine erneute Einladung an dieselbe Adresse zieht die vorherige zurück, statt
  ein zweites gültiges Token entstehen zu lassen.
- Wer ohne Konto einsteigt, wird durch die Registrierung geführt und landet
  danach in der Property.
- Wer mit der falschen Adresse angemeldet ist, bekommt einen deutlichen
  Hinweis statt eines stillen Fehlschlags.
- **Das Annehmen einer Einladung verifiziert die E-Mail-Adresse.** Wer den Link
  aus dem Postfach anklickt, hat dasselbe bewiesen wie mit der
  Bestätigungsmail.
