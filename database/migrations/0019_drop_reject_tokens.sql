-- Entfernt rejectBg und rejectText aus den gespeicherten Design-Tokens.
--
-- Grund: die Presets schrieben beide Werte hart mit. Änderte der Betreiber
-- danach `primary`, blieb der Ablehnen-Knopf auf der Preset-Farbe stehen,
-- während Akzeptieren die neue annahm — unterschiedliche visuelle Gewichtung
-- von Annehmen und Ablehnen, also genau das, was CLAUDE.md Regel 8 verbietet.
-- Eine Farbmaske für rejectBg gab es nie, der Betreiber konnte es also nicht
-- einmal geradeziehen.
--
-- Die Runtime fällt für `.ce-btn--reject` auf `primary` bzw. `primaryText`
-- zurück. Sind die Schlüssel weg, ist die Gleichheit strukturell.
--
-- Ohne Datenverlust: jeder gespeicherte Wert stammt aus einem Preset, weil das
-- Feld nie einstellbar war. Es wird also keine bewusste Entscheidung eines
-- Betreibers überschrieben.

UPDATE property_design
   SET tokens = JSON_REMOVE(tokens, '$.rejectBg', '$.rejectText')
 WHERE JSON_VALID(tokens)
   AND (JSON_EXTRACT(tokens, '$.rejectBg') IS NOT NULL
     OR JSON_EXTRACT(tokens, '$.rejectText') IS NOT NULL);
