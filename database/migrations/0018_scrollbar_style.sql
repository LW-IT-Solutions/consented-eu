-- Aussehen der Scrollbalken im Banner-Dialog.
--
-- Anlass: Chromium unter Windows zeichnet für nicht-überlagernde Scrollbalken
-- Pfeilknöpfe und färbt sie nach dem Betriebssystem, nicht nach dem Banner. In
-- einem dunklen Dialog stand damit ein hellgrauer Fremdkörper am Rand.
--
-- 'subtle' ist die Vorgabe und auch für Bestandsdaten richtig: sie sieht dem
-- bisherigen Zustand am nächsten, ohne ihn zu erben.

ALTER TABLE property_design
    ADD COLUMN scrollbar VARCHAR(10) NOT NULL DEFAULT 'subtle' AFTER button_order;
