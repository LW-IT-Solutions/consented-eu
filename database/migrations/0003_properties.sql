-- A property is one CMP configuration: a set of domains, languages, services,
-- texts and design that get published together as a versioned config.

CREATE TABLE properties (
    id                  BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    public_id           CHAR(36)        NOT NULL,
    org_id              BIGINT UNSIGNED NOT NULL,
    name                VARCHAR(160)    NOT NULL,
    slug                VARCHAR(80)     NOT NULL,
    timezone            VARCHAR(64)     NOT NULL DEFAULT 'Europe/Berlin',
    status              ENUM('draft','live','paused') NOT NULL DEFAULT 'draft',
    default_language    VARCHAR(10)     NOT NULL DEFAULT 'de',
    -- Bumped on every publish. The runtime fetches config/{version}.json,
    -- which lets that URL be cached immutably forever.
    config_version      INT UNSIGNED    NOT NULL DEFAULT 0,
    settings            LONGTEXT        NULL,
    first_consent_at    DATETIME        NULL,
    last_consent_at     DATETIME        NULL,
    created_at          DATETIME        NOT NULL,
    updated_at          DATETIME        NOT NULL,
    deleted_at          DATETIME        NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_property_public_id (public_id),
    UNIQUE KEY uq_property_slug (org_id, slug),
    KEY idx_property_org (org_id),
    KEY idx_property_deleted (deleted_at),
    CONSTRAINT fk_property_org FOREIGN KEY (org_id) REFERENCES organizations (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE property_users (
    id          BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    property_id BIGINT UNSIGNED NOT NULL,
    user_id     BIGINT UNSIGNED NOT NULL,
    role        ENUM('owner','admin','editor','viewer') NOT NULL DEFAULT 'viewer',
    created_at  DATETIME        NOT NULL,
    updated_at  DATETIME        NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_property_user (property_id, user_id),
    KEY idx_property_user_user (user_id),
    CONSTRAINT fk_property_user_prop FOREIGN KEY (property_id) REFERENCES properties (id) ON DELETE CASCADE,
    CONSTRAINT fk_property_user_user FOREIGN KEY (user_id)     REFERENCES users (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Unverified domains do not get the config served to them. Without that check
-- anyone could point our runtime at a property that is not theirs.
CREATE TABLE property_domains (
    id                  BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    public_id           CHAR(36)        NOT NULL,
    property_id         BIGINT UNSIGNED NOT NULL,
    domain              VARCHAR(253)    NOT NULL,
    is_primary          TINYINT(1)      NOT NULL DEFAULT 0,
    include_subdomains  TINYINT(1)      NOT NULL DEFAULT 1,
    verification_token  VARCHAR(64)     NOT NULL,
    verified_at         DATETIME        NULL,
    verification_method VARCHAR(20)     NULL,
    last_checked_at     DATETIME        NULL,
    created_at          DATETIME        NOT NULL,
    updated_at          DATETIME        NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_property_domain (property_id, domain),
    UNIQUE KEY uq_property_domain_public (public_id),
    KEY idx_property_domain_lookup (domain, verified_at),
    CONSTRAINT fk_property_domain_prop FOREIGN KEY (property_id) REFERENCES properties (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE property_languages (
    id                  BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    property_id         BIGINT UNSIGNED NOT NULL,
    language_code       VARCHAR(10)     NOT NULL,
    is_default          TINYINT(1)      NOT NULL DEFAULT 0,
    is_enabled          TINYINT(1)      NOT NULL DEFAULT 1,
    completion_percent  TINYINT UNSIGNED NOT NULL DEFAULT 0,
    sort_order          SMALLINT UNSIGNED NOT NULL DEFAULT 0,
    created_at          DATETIME        NOT NULL,
    updated_at          DATETIME        NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_property_language (property_id, language_code),
    CONSTRAINT fk_property_language_prop FOREIGN KEY (property_id) REFERENCES properties (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Only overridden texts are stored. A key that is absent falls back to the
-- shipped default for that language, so updating our defaults improves every
-- property that never touched that key.
CREATE TABLE property_texts (
    id              BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    property_id     BIGINT UNSIGNED NOT NULL,
    language_code   VARCHAR(10)     NOT NULL,
    text_key        VARCHAR(80)     NOT NULL,
    value           TEXT            NOT NULL,
    is_customized   TINYINT(1)      NOT NULL DEFAULT 1,
    updated_by      BIGINT UNSIGNED NULL,
    created_at      DATETIME        NOT NULL,
    updated_at      DATETIME        NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_property_text (property_id, language_code, text_key),
    KEY idx_property_text_lookup (property_id, language_code),
    CONSTRAINT fk_property_text_prop FOREIGN KEY (property_id) REFERENCES properties (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE property_design (
    id              BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    property_id     BIGINT UNSIGNED NOT NULL,
    layout          ENUM('banner_bottom','banner_top','modal_center','modal_slide') NOT NULL DEFAULT 'banner_bottom',
    position        VARCHAR(20)     NOT NULL DEFAULT 'bottom',
    tokens          LONGTEXT        NULL,
    custom_css      TEXT            NULL,
    logo_path       VARCHAR(255)    NULL,
    backdrop        TINYINT(1)      NOT NULL DEFAULT 1,
    backdrop_blur   TINYINT(1)      NOT NULL DEFAULT 0,
    animation       VARCHAR(20)     NOT NULL DEFAULT 'fade',
    preset          VARCHAR(40)     NOT NULL DEFAULT 'eu_official',
    created_at      DATETIME        NOT NULL,
    updated_at      DATETIME        NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_property_design (property_id),
    CONSTRAINT fk_property_design_prop FOREIGN KEY (property_id) REFERENCES properties (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Every publish snapshots the full config. This is what makes it possible to
-- answer "which banner did this visitor actually see" months later, and to
-- roll back a bad change without reconstructing it by hand.
CREATE TABLE property_versions (
    id              BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    property_id     BIGINT UNSIGNED NOT NULL,
    version         INT UNSIGNED    NOT NULL,
    snapshot        LONGTEXT        NOT NULL,
    note            VARCHAR(255)    NOT NULL DEFAULT '',
    published_by    BIGINT UNSIGNED NULL,
    published_at    DATETIME        NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_property_version (property_id, version),
    CONSTRAINT fk_property_version_prop FOREIGN KEY (property_id) REFERENCES properties (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE invitations
    ADD CONSTRAINT fk_invitation_property FOREIGN KEY (property_id) REFERENCES properties (id) ON DELETE CASCADE;
