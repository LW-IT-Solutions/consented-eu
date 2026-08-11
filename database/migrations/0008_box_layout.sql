-- Adds the centred bottom-box layout and stops the layout list living in two
-- places.
--
-- The column was an ENUM duplicating Defaults::layouts(). Every new layout then
-- needed a migration, and the two lists could drift apart silently. The
-- authoritative list is the one in code — DesignController already rejects
-- anything not in it — so the column becomes a plain VARCHAR and the
-- application keeps doing the validating.

ALTER TABLE property_design
    MODIFY COLUMN layout VARCHAR(32) NOT NULL DEFAULT 'box_bottom';
