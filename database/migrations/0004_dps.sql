-- Data Processing Services: the third-party tools a website embeds, and the
-- categories a visitor toggles them by.

-- Global, seeded catalogue. Shared by every property; never edited per
-- property — a property that needs different wording stores an override.
CREATE TABLE dps_catalog (
    id                  BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    public_id           CHAR(36)        NOT NULL,
    dps_id              VARCHAR(80)     NOT NULL,
    name                VARCHAR(160)    NOT NULL,
    provider            VARCHAR(160)    NOT NULL DEFAULT '',
    provider_country    CHAR(2)         NULL,
    category            VARCHAR(40)     NOT NULL DEFAULT 'functional',
    purposes            LONGTEXT        NULL,
    legal_basis         VARCHAR(40)     NOT NULL DEFAULT 'consent',
    data_collected      LONGTEXT        NULL,
    data_retention      VARCHAR(160)    NOT NULL DEFAULT '',
    privacy_policy_url  VARCHAR(500)    NOT NULL DEFAULT '',
    opt_out_url         VARCHAR(500)    NOT NULL DEFAULT '',
    -- Cookies and other storage this service sets, as
    -- [{name,host,type,duration,description}].
    cookies             LONGTEXT        NULL,
    technologies        LONGTEXT        NULL,
    -- Script URL patterns used for automatic blocking.
    blocking_pattern    LONGTEXT        NULL,
    -- Consent Mode v2 signals this service maps to.
    gcm_signals         LONGTEXT        NULL,
    tcf_vendor_id       INT UNSIGNED    NULL,
    google_ac_id        INT UNSIGNED    NULL,
    third_country       TINYINT(1)      NOT NULL DEFAULT 0,
    is_active           TINYINT(1)      NOT NULL DEFAULT 1,
    created_at          DATETIME        NOT NULL,
    updated_at          DATETIME        NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_dps_catalog_slug (dps_id),
    UNIQUE KEY uq_dps_catalog_public (public_id),
    KEY idx_dps_catalog_category (category),
    KEY idx_dps_catalog_name (name),
    KEY idx_dps_catalog_tcf (tcf_vendor_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE dps_catalog_translations (
    id                  BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    dps_catalog_id      BIGINT UNSIGNED NOT NULL,
    language_code       VARCHAR(10)     NOT NULL,
    purpose_description TEXT            NULL,
    data_collected_text TEXT            NULL,
    created_at          DATETIME        NOT NULL,
    updated_at          DATETIME        NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_dps_translation (dps_catalog_id, language_code),
    CONSTRAINT fk_dps_translation FOREIGN KEY (dps_catalog_id) REFERENCES dps_catalog (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Categories are per property so they can be renamed and reordered, but every
-- property starts with the four standard ones.
CREATE TABLE dps_categories (
    id              BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    public_id       CHAR(36)        NOT NULL,
    property_id     BIGINT UNSIGNED NOT NULL,
    category_key    VARCHAR(40)     NOT NULL,
    is_required     TINYINT(1)      NOT NULL DEFAULT 0,
    default_state   TINYINT(1)      NOT NULL DEFAULT 0,
    sort_order      SMALLINT UNSIGNED NOT NULL DEFAULT 0,
    gcm_signals     LONGTEXT        NULL,
    created_at      DATETIME        NOT NULL,
    updated_at      DATETIME        NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_dps_category (property_id, category_key),
    UNIQUE KEY uq_dps_category_public (public_id),
    CONSTRAINT fk_dps_category_prop FOREIGN KEY (property_id) REFERENCES properties (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A service attached to a property. Either a reference into the catalogue
-- (dps_catalog_id set) or a fully custom entry (is_custom = 1).
CREATE TABLE property_dps (
    id                  BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    public_id           CHAR(36)        NOT NULL,
    property_id         BIGINT UNSIGNED NOT NULL,
    dps_catalog_id      BIGINT UNSIGNED NULL,
    is_custom           TINYINT(1)      NOT NULL DEFAULT 0,
    category_key        VARCHAR(40)     NOT NULL DEFAULT 'functional',
    sort_order          SMALLINT UNSIGNED NOT NULL DEFAULT 0,
    is_essential        TINYINT(1)      NOT NULL DEFAULT 0,
    is_enabled          TINYINT(1)      NOT NULL DEFAULT 1,
    -- For custom services this holds the whole record; for catalogue entries
    -- only the fields the property chose to override.
    overrides           LONGTEXT        NULL,
    blocking_pattern    LONGTEXT        NULL,
    created_at          DATETIME        NOT NULL,
    updated_at          DATETIME        NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_property_dps_public (public_id),
    UNIQUE KEY uq_property_dps_catalog (property_id, dps_catalog_id),
    KEY idx_property_dps_prop (property_id, sort_order),
    CONSTRAINT fk_property_dps_prop    FOREIGN KEY (property_id)    REFERENCES properties (id) ON DELETE CASCADE,
    CONSTRAINT fk_property_dps_catalog FOREIGN KEY (dps_catalog_id) REFERENCES dps_catalog (id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
