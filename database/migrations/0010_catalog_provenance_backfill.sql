-- Nachtrag zur Provenance-Pflicht.
--
-- Die Einträge aus dem ersten Seed haben kein dokumentiertes Abrufdatum. Ein
-- Datum zu erfinden wäre schlimmer als keines, deshalb wird das Anlagedatum
-- gesetzt — das ist eine belegbare Tatsache ("zu diesem Zeitpunkt kam der
-- Eintrag in den Katalog") und keine Behauptung über eine Primärquelle.
--
-- Dass die Primärquelle selbst fehlt, steht weiterhin in review_notes und
-- hält den Eintrag auf draft. bin/verify-catalog meldet fehlende source_url
-- als Hinweis, nicht als Fehler: bei reinen Tatsachenangaben ('public-fact')
-- gibt es oft keine einzelne belegende URL.

UPDATE dps_catalog
   SET source_retrieved_at = created_at
 WHERE source_retrieved_at IS NULL;
