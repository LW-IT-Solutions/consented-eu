-- Stilllegung einer Property durch den Instanz-Betreiber.
--
-- Warum eine eigene Spalte und nicht properties.status:
--
-- status ist der Zustandsautomat des KUNDEN — draft, live, paused — und
-- Property::publish() setzt ihn beim Veröffentlichen bedingungslos auf 'live'.
-- Eine Stilllegung, die nur status = 'paused' schreibt, hebt der Kunde also mit
-- einem Klick auf "Veröffentlichen" wieder auf, ohne es zu merken und ohne dass
-- es jemandem auffällt. Die Sperre wäre eine Bitte, keine Sperre.
--
-- suspended_at gehört dem Betreiber und überstimmt status bei der Auslieferung.
-- Der Kunde darf weiter bearbeiten und veröffentlichen; ausgeliefert wird
-- nichts, solange die Spalte gesetzt ist.

ALTER TABLE properties
    ADD COLUMN suspended_at     DATETIME     NULL AFTER status,
    ADD COLUMN suspended_reason VARCHAR(255) NULL AFTER suspended_at;

-- Bestehende Stilllegungen aus der Zwischenzeit übernehmen: eine Property, die
-- 'paused' steht, aber eine veröffentlichte Konfiguration hat, wurde vom
-- Betreiber angehalten und nicht vom Kunden gespeichert.
UPDATE properties
   SET suspended_at = COALESCE(updated_at, created_at),
       suspended_reason = 'Übernommen aus status = paused (Migration 0015)'
 WHERE status = 'paused'
   AND config_version > 0
   AND deleted_at IS NULL;

CREATE INDEX idx_properties_suspended ON properties (suspended_at);
