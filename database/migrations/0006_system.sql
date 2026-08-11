-- Background jobs and the tables the TCF and scanner modules will fill.
-- The tables exist now so that enabling those modules is a code change, not a
-- migration on a live database.

CREATE TABLE jobs (
    id              BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    queue           VARCHAR(40)     NOT NULL DEFAULT 'default',
    job_type        VARCHAR(64)     NOT NULL,
    payload         LONGTEXT        NULL,
    attempts        TINYINT UNSIGNED NOT NULL DEFAULT 0,
    available_at    DATETIME        NOT NULL,
    reserved_at     DATETIME        NULL,
    completed_at    DATETIME        NULL,
    failed_at       DATETIME        NULL,
    last_error      TEXT            NULL,
    created_at      DATETIME        NOT NULL,
    PRIMARY KEY (id),
    KEY idx_jobs_claim (queue, completed_at, failed_at, available_at),
    KEY idx_jobs_type (job_type)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Snapshots of the IAB Global Vendor List, one row per version we have seen.
CREATE TABLE gvl_snapshots (
    id                  BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    vendor_list_version INT UNSIGNED    NOT NULL,
    tcf_policy_version  INT UNSIGNED    NOT NULL,
    payload             LONGBLOB        NOT NULL,
    vendor_count        INT UNSIGNED    NOT NULL DEFAULT 0,
    fetched_at          DATETIME        NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_gvl_version (vendor_list_version)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE gvl_translations (
    id                  BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    vendor_list_version INT UNSIGNED    NOT NULL,
    language_code       VARCHAR(10)     NOT NULL,
    payload             LONGBLOB        NOT NULL,
    fetched_at          DATETIME        NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_gvl_translation (vendor_list_version, language_code)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE scan_jobs (
    id              BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    public_id       CHAR(36)        NOT NULL,
    property_id     BIGINT UNSIGNED NOT NULL,
    start_url       VARCHAR(500)    NOT NULL,
    status          ENUM('queued','running','done','failed') NOT NULL DEFAULT 'queued',
    pages_crawled   INT UNSIGNED    NOT NULL DEFAULT 0,
    max_pages       INT UNSIGNED    NOT NULL DEFAULT 25,
    started_at      DATETIME        NULL,
    finished_at     DATETIME        NULL,
    error           TEXT            NULL,
    created_at      DATETIME        NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_scan_job_public (public_id),
    KEY idx_scan_job_property (property_id, created_at),
    CONSTRAINT fk_scan_job_prop FOREIGN KEY (property_id) REFERENCES properties (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE scan_findings (
    id              BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    scan_job_id     BIGINT UNSIGNED NOT NULL,
    finding_type    ENUM('cookie','localstorage','sessionstorage','script','pixel','iframe') NOT NULL,
    name            VARCHAR(255)    NOT NULL,
    host            VARCHAR(253)    NOT NULL DEFAULT '',
    first_seen_url  VARCHAR(500)    NOT NULL DEFAULT '',
    -- Set when the finding appeared before any consent was given. This is the
    -- column that turns a scan report into an actionable compliance finding.
    before_consent  TINYINT(1)      NOT NULL DEFAULT 0,
    matched_dps_id  VARCHAR(80)     NULL,
    raw             LONGTEXT        NULL,
    created_at      DATETIME        NOT NULL,
    PRIMARY KEY (id),
    KEY idx_scan_finding_job (scan_job_id, finding_type),
    CONSTRAINT fk_scan_finding_job FOREIGN KEY (scan_job_id) REFERENCES scan_jobs (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
