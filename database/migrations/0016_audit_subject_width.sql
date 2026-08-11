-- audit_log.subject_id muss die längste Kennung fassen, die es protokolliert.
--
-- Die Spalte war VARCHAR(64), dps_catalog.dps_id ist VARCHAR(80). Bisher fiel
-- das nicht auf, weil die längste vorhandene Kennung 28 Zeichen hat — aber das
-- neue Anlegeformular im Admin lässt 80 zu. Ein Katalogeintrag mit langer
-- Kennung hätte dann entweder eine abgeschnittene Audit-Zeile erzeugt oder,
-- im strikten SQL-Modus, das Speichern mit einem Fehler abgebrochen.
--
-- Ein Prüfpfad, der bei bestimmten Werten stumm bleibt oder die Aktion
-- verhindert, ist an der Stelle wertlos, an der man ihn braucht.

ALTER TABLE audit_log
    MODIFY COLUMN subject_id VARCHAR(100) NULL;
