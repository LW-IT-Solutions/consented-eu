-- Aufbewahrungsfristen brauchen mehr als eine Zeile.
--
-- `data_retention` war VARCHAR(160). Das reichte, solange dort Sätze wie
-- „bis zu 14 Monate" standen — also solange die Angabe eine Vereinfachung war.
--
-- Bei der Anreicherung aus Googles eigener Dokumentation ist genau diese
-- Vereinfachung als Fehler aufgefallen: Google Analytics hat für nutzerbezogene
-- Daten andere Fristen als für ereignisbezogene, Analytics 360 zusätzliche
-- Stufen, als „Large"/„XL" eingestufte Properties eine automatische Deckelung,
-- Google-Signale eine eigene Obergrenze, und für Alter, Geschlecht und
-- Interessen gilt immer der kürzeste Zeitraum. Der alte Eintrag presste das in
-- einen Satz und behauptete damit eine nutzerbezogene Aufbewahrung von bis zu
-- 50 Monaten, die die Quelle nicht hergibt.
--
-- Dieser Satz landet über die Cookie-Erklärung in der Datenschutzerklärung
-- eines Kunden. Er muss vollständig sein dürfen. 447 Zeichen braucht die
-- korrekte Fassung für Analytics allein, und andere Anbieter staffeln ähnlich —
-- eine feste Obergrenze wäre wieder eine Einladung zum Kürzen an der falschen
-- Stelle.
--
-- TEXT statt eines größeren VARCHAR: die Spalte wird nie sortiert, nie
-- indiziert und nur je Eintrag gelesen.

ALTER TABLE dps_catalog
    MODIFY COLUMN data_retention TEXT NULL;
