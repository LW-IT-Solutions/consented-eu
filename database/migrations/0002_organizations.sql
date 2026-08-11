-- Organisations own properties; users are members of organisations and can be
-- granted narrower access to a single property.

CREATE TABLE organizations (
    id              BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    public_id       CHAR(36)        NOT NULL,
    name            VARCHAR(160)    NOT NULL,
    slug            VARCHAR(80)     NOT NULL,
    owner_user_id   BIGINT UNSIGNED NOT NULL,
    -- Shown in banner texts via the {{company}} placeholder.
    legal_name      VARCHAR(200)    NOT NULL DEFAULT '',
    country_code    CHAR(2)         NULL,
    created_at      DATETIME        NOT NULL,
    updated_at      DATETIME        NOT NULL,
    deleted_at      DATETIME        NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_org_public_id (public_id),
    UNIQUE KEY uq_org_slug (slug),
    KEY idx_org_owner (owner_user_id),
    CONSTRAINT fk_org_owner FOREIGN KEY (owner_user_id) REFERENCES users (id) ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE organization_members (
    id          BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    org_id      BIGINT UNSIGNED NOT NULL,
    user_id     BIGINT UNSIGNED NOT NULL,
    role        ENUM('owner','admin','member') NOT NULL DEFAULT 'member',
    created_at  DATETIME        NOT NULL,
    updated_at  DATETIME        NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_org_member (org_id, user_id),
    KEY idx_org_member_user (user_id),
    CONSTRAINT fk_org_member_org  FOREIGN KEY (org_id)  REFERENCES organizations (id) ON DELETE CASCADE,
    CONSTRAINT fk_org_member_user FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- An invitation targets either an organisation or a single property, never
-- both. The application enforces that; MariaDB cannot express "exactly one of
-- these two columns is NULL" as a portable constraint.
CREATE TABLE invitations (
    id              BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    public_id       CHAR(36)        NOT NULL,
    org_id          BIGINT UNSIGNED NULL,
    property_id     BIGINT UNSIGNED NULL,
    email           VARCHAR(190)    NOT NULL,
    role            VARCHAR(20)     NOT NULL,
    token_hash      CHAR(64)        NOT NULL,
    invited_by      BIGINT UNSIGNED NOT NULL,
    message         VARCHAR(500)    NOT NULL DEFAULT '',
    expires_at      DATETIME        NOT NULL,
    accepted_at     DATETIME        NULL,
    revoked_at      DATETIME        NULL,
    created_at      DATETIME        NOT NULL,
    updated_at      DATETIME        NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_invitation_public_id (public_id),
    UNIQUE KEY uq_invitation_token (token_hash),
    KEY idx_invitation_email (email),
    KEY idx_invitation_org (org_id),
    KEY idx_invitation_property (property_id),
    CONSTRAINT fk_invitation_org     FOREIGN KEY (org_id)     REFERENCES organizations (id) ON DELETE CASCADE,
    CONSTRAINT fk_invitation_invited FOREIGN KEY (invited_by) REFERENCES users (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
