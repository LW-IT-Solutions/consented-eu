-- Eigener Herkunftsnachweis für Blocking-Muster.
--
-- Ein Katalogeintrag hat zwei unabhängige Datenherkünfte. Die Cookie-Stammdaten
-- kommen meist aus der Open Cookie Database; das Blocking-Muster kann von dort
-- gar nicht kommen, weil diese Quelle Cookie-Namen führt und keine Script-URLs.
--
-- Das Muster muss also getrennt belegt werden, und zwar am Anbieter selbst:
-- Welche URL ein Dienst zum Ausliefern seines Scripts benutzt, ist eine
-- technische Tatsache, die man an dessen eigenem Endpunkt nachprüfen kann.
-- Würden wir diese Herkunft in source_type mit hineinschreiben, stünde dort
-- eine Unwahrheit über die Cookie-Daten.

ALTER TABLE dps_catalog
    ADD COLUMN pattern_source_type ENUM(
        'primary_vendor_doc','gvl','google_atp','open_cookie_database','own_scan','community'
    ) NULL AFTER blocking_pattern,
    -- Die konkret geprüfte Ressource, nicht die Startseite des Anbieters:
    -- 'https://connect.facebook.net/en_US/fbevents.js' ist ein Beleg,
    -- 'https://facebook.com' ist keiner.
    ADD COLUMN pattern_source_url  VARCHAR(512) NULL AFTER pattern_source_type,
    ADD COLUMN pattern_verified_at DATETIME     NULL AFTER pattern_source_url;

-- Die 38 handgepflegten Muster aus dem ursprünglichen Seed haben noch keinen
-- maschinellen Beleg. Sie bleiben stehen — sie sind nicht falsch —, aber sie
-- werden als 'community' markiert statt als belegte Primärquelle. bin/import-
-- patterns hebt sie beim nächsten Lauf auf 'primary_vendor_doc', sobald der
-- Endpunkt tatsächlich geantwortet hat.
UPDATE dps_catalog
   SET pattern_source_type = 'community'
 WHERE blocking_pattern IS NOT NULL
   AND blocking_pattern NOT IN ('[]', '')
   AND pattern_source_type IS NULL;

CREATE INDEX idx_dps_pattern_source ON dps_catalog (pattern_source_type);
