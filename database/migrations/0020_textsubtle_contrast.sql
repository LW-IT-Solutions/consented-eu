-- Hebt textSubtle aus den dunklen Presets über WCAG 2.1 AA.
--
-- Die Presets lieferten 4,18:1 (Dark) und 4,24:1 (Dark Box) gegen ihren
-- Hintergrund, also knapp unter den 4,5:1, die unsere eigene Kontrastprüfung
-- auf der Designseite verlangt. Korrigiert auf 4,60:1 bzw. 4,57:1.
--
-- Warum die gespeicherten Werte mitgezogen werden: die Farbmaske hat für
-- textSubtle kein Feld. Der Wert kann nur aus einem Preset stammen, es wird
-- also keine Entscheidung eines Betreibers überschrieben — dieselbe Begründung
-- wie bei rejectBg in Migration 0019.
--
-- primaryText bleibt ausdrücklich unangetastet: das Feld gibt es in der
-- Farbmaske, dort getroffene Wahl ist eine echte. Wo sie unter der Schwelle
-- liegt, meldet es die Kontrastprüfung dem Betreiber.
--
-- Wirksam auf einer Property erst nach dem nächsten Veröffentlichen, weil
-- ausgeliefert wird, was im Schnappschuss steht.

UPDATE property_design
   SET tokens = JSON_SET(tokens, '$.textSubtle', '#7A8393'),
       updated_at = UTC_TIMESTAMP()
 WHERE JSON_VALID(tokens)
   AND JSON_UNQUOTE(JSON_EXTRACT(tokens, '$.textSubtle')) = '#737C8D';

UPDATE property_design
   SET tokens = JSON_SET(tokens, '$.textSubtle', '#9097A1'),
       updated_at = UTC_TIMESTAMP()
 WHERE JSON_VALID(tokens)
   AND JSON_UNQUOTE(JSON_EXTRACT(tokens, '$.textSubtle')) = '#8A919C';
