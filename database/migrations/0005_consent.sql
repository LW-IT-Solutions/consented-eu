-- Consent records.
--
-- Deliberately without foreign keys. Two reasons:
--   1. This is the highest-volume table in the system and is meant to be
--      RANGE-partitioned by month later; InnoDB does not allow foreign keys on
--      partitioned tables, and adding partitioning afterwards must not require
--      rewriting the schema.
--   2. Deleting a property must not silently destroy the proof that consent
--      was given. Removal is the retention job's decision, not a cascade's.

CREATE TABLE consents (
    id                  BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    consent_id          CHAR(36)        NOT NULL,
    property_id         BIGINT UNSIGNED NOT NULL,
    config_version      INT UNSIGNED    NOT NULL DEFAULT 0,
    -- IAB TCF / Google AC / IAB GPP strings, when those modules are active.
    tc_string           VARCHAR(2000)   NULL,
    ac_string           VARCHAR(500)    NULL,
    gpp_string          VARCHAR(2000)   NULL,
    -- Decisions at every level: {categories:{}, services:{}, purposes:{}, vendors:{}}
    decisions           LONGTEXT        NOT NULL,
    action              ENUM('accept_all','reject_all','save_selection','withdraw','auto_expire','implicit') NOT NULL,
    ui_variant          VARCHAR(40)     NOT NULL DEFAULT 'default',
    language            VARCHAR(10)     NOT NULL DEFAULT '',
    country_code        CHAR(2)         NULL,
    region_code         VARCHAR(8)      NULL,
    gpc_signal          TINYINT(1)      NOT NULL DEFAULT 0,
    -- HMAC of the visitor IP with a rotating pepper. The address itself is
    -- never written anywhere, not even to the access log of this endpoint.
    ip_hash             CHAR(64)        NULL,
    user_agent_family   VARCHAR(64)     NULL,
    page_url_hash       CHAR(64)        NULL,
    domain              VARCHAR(253)    NULL,
    is_mobile           TINYINT(1)      NOT NULL DEFAULT 0,
    time_to_decision_ms INT UNSIGNED    NULL,
    expires_at          DATETIME        NULL,
    created_at          DATETIME        NOT NULL,
    updated_at          DATETIME        NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_consent_id (consent_id),
    KEY idx_consent_property_date (property_id, created_at),
    KEY idx_consent_expires (expires_at),
    KEY idx_consent_domain (property_id, domain)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Append-only history for one consent_id. A change never overwrites: it adds
-- a row. Art. 7(1) GDPR requires us to be able to demonstrate consent as it
-- stood at a point in time, which an UPDATE would destroy.
CREATE TABLE consent_events (
    id                  BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    consent_id          CHAR(36)        NOT NULL,
    property_id         BIGINT UNSIGNED NOT NULL,
    config_version      INT UNSIGNED    NOT NULL DEFAULT 0,
    action              VARCHAR(24)     NOT NULL,
    decisions           LONGTEXT        NOT NULL,
    tc_string           VARCHAR(2000)   NULL,
    ip_hash             CHAR(64)        NULL,
    created_at          DATETIME        NOT NULL,
    PRIMARY KEY (id),
    KEY idx_consent_event_id (consent_id, created_at),
    KEY idx_consent_event_property (property_id, created_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Pre-aggregated by the worker. Dashboard charts never scan `consents`.
CREATE TABLE consent_stats_daily (
    id                      BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    property_id             BIGINT UNSIGNED NOT NULL,
    stat_date               DATE            NOT NULL,
    domain                  VARCHAR(253)    NOT NULL DEFAULT '',
    language                VARCHAR(10)     NOT NULL DEFAULT '',
    country_code            CHAR(2)         NOT NULL DEFAULT '',
    layout_variant          VARCHAR(40)     NOT NULL DEFAULT '',
    impressions             INT UNSIGNED    NOT NULL DEFAULT 0,
    accept_all              INT UNSIGNED    NOT NULL DEFAULT 0,
    reject_all              INT UNSIGNED    NOT NULL DEFAULT 0,
    custom_save             INT UNSIGNED    NOT NULL DEFAULT 0,
    no_interaction          INT UNSIGNED    NOT NULL DEFAULT 0,
    withdrawals             INT UNSIGNED    NOT NULL DEFAULT 0,
    avg_time_to_decision_ms INT UNSIGNED    NOT NULL DEFAULT 0,
    created_at              DATETIME        NOT NULL,
    updated_at              DATETIME        NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_stats_bucket (property_id, stat_date, domain, language, country_code, layout_variant),
    KEY idx_stats_property_date (property_id, stat_date)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
