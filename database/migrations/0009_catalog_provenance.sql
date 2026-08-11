-- Herkunftsnachweis für jeden Katalogeintrag (PROJECT_BRIEF Abschnitt 6.5).
--
-- Ohne diese Felder darf kein Eintrag angelegt werden. Der Grund ist nicht
-- Ordnungsliebe: Der Dienste-Katalog ist der einzige Projektteil, bei dem ein
-- Fehler eine Abmahnung einbringen kann. Wer nicht belegen kann, woher eine
-- Angabe stammt und unter welcher Lizenz, kann im Streitfall nicht zeigen,
-- dass sie nicht aus einem fremden Katalog abgeschrieben wurde.

ALTER TABLE dps_catalog
    ADD COLUMN source_type ENUM(
        'primary_vendor_doc','gvl','google_atp','open_cookie_database','own_scan','community'
    ) NULL AFTER is_active,
    ADD COLUMN source_url          VARCHAR(512) NULL AFTER source_type,
    -- SPDX-Kennung, oder 'public-fact' für reine Tatsachenangaben, an denen
    -- niemand Rechte hält (ein Cookie-Name ist keine Schöpfung).
    ADD COLUMN source_license      VARCHAR(64)  NULL AFTER source_url,
    ADD COLUMN source_retrieved_at DATETIME     NULL AFTER source_license,
    ADD COLUMN review_status ENUM('draft','verified','stale') NOT NULL DEFAULT 'draft'
        AFTER source_retrieved_at,
    ADD COLUMN verified_by         BIGINT UNSIGNED NULL AFTER review_status,
    ADD COLUMN verified_at         DATETIME     NULL AFTER verified_by,
    ADD COLUMN review_notes        TEXT         NULL AFTER verified_at,
    ADD KEY idx_dps_review (review_status, updated_at),
    ADD KEY idx_dps_source (source_type),
    ADD CONSTRAINT fk_dps_verified_by FOREIGN KEY (verified_by)
        REFERENCES users (id) ON DELETE SET NULL;

-- Die 42 Einträge aus dem ersten Seed stammen aus der Zeit vor dieser Regel.
-- Sie sind fachlich plausibel, haben aber keinen dokumentierten Herkunftsbeleg
-- und dürfen deshalb nach 6.5 nicht als geprüft gelten. Ehrlicher Zustand:
-- draft, mit Notiz, was nachzuholen ist.
UPDATE dps_catalog
   SET review_status = 'draft',
       source_type   = 'primary_vendor_doc',
       source_license = 'public-fact',
       review_notes  = CONCAT(
           'Vor Einführung der Provenance-Pflicht angelegt. ',
           'Primärquelle und Abrufdatum sind nachzutragen, bevor der ',
           'Eintrag auf verified gesetzt wird.'
       )
 WHERE source_type IS NULL;
