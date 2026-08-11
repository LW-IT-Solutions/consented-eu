-- Accounts, sessions and the infrastructure tables every request touches.

CREATE TABLE users (
    id                  BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    public_id           CHAR(36)        NOT NULL,
    email               VARCHAR(190)    NOT NULL,
    password_hash       VARCHAR(255)    NOT NULL,
    name                VARCHAR(120)    NOT NULL DEFAULT '',
    locale              VARCHAR(10)     NOT NULL DEFAULT 'de',
    email_verified_at   DATETIME        NULL,
    -- Encrypted at rest with APP_KEY; NULL until the user enables 2FA.
    totp_secret         VARBINARY(255)  NULL,
    totp_enabled        TINYINT(1)      NOT NULL DEFAULT 0,
    recovery_codes      TEXT            NULL,
    last_login_at       DATETIME        NULL,
    failed_login_count  INT UNSIGNED    NOT NULL DEFAULT 0,
    locked_until        DATETIME        NULL,
    -- Timestamped proof that the terms were accepted at registration.
    terms_accepted_at   DATETIME        NULL,
    created_at          DATETIME        NOT NULL,
    updated_at          DATETIME        NOT NULL,
    deleted_at          DATETIME        NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_users_public_id (public_id),
    UNIQUE KEY uq_users_email (email),
    KEY idx_users_deleted (deleted_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE sessions (
    id                  BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    public_id           CHAR(36)        NOT NULL,
    user_id             BIGINT UNSIGNED NULL,
    token_hash          CHAR(64)        NOT NULL,
    ip_hash             CHAR(64)        NULL,
    user_agent_hash     CHAR(64)        NULL,
    user_agent_family   VARCHAR(64)     NULL,
    payload             MEDIUMTEXT      NOT NULL,
    remembered          TINYINT(1)      NOT NULL DEFAULT 0,
    last_seen_at        DATETIME        NOT NULL,
    expires_at          DATETIME        NOT NULL,
    created_at          DATETIME        NOT NULL,
    updated_at          DATETIME        NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_sessions_public_id (public_id),
    UNIQUE KEY uq_sessions_token (token_hash),
    KEY idx_sessions_user (user_id),
    KEY idx_sessions_expires (expires_at),
    CONSTRAINT fk_sessions_user FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Reset and verification tokens are stored hashed: a database leak must not
-- hand the attacker a working password-reset link.
CREATE TABLE password_resets (
    id          BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id     BIGINT UNSIGNED NOT NULL,
    token_hash  CHAR(64)        NOT NULL,
    ip_hash     CHAR(64)        NULL,
    expires_at  DATETIME        NOT NULL,
    used_at     DATETIME        NULL,
    created_at  DATETIME        NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_password_resets_token (token_hash),
    KEY idx_password_resets_user (user_id),
    CONSTRAINT fk_password_resets_user FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE email_verifications (
    id          BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id     BIGINT UNSIGNED NOT NULL,
    email       VARCHAR(190)    NOT NULL,
    token_hash  CHAR(64)        NOT NULL,
    expires_at  DATETIME        NOT NULL,
    used_at     DATETIME        NULL,
    created_at  DATETIME        NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_email_verifications_token (token_hash),
    KEY idx_email_verifications_user (user_id),
    CONSTRAINT fk_email_verifications_user FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE rate_limits (
    key_hash    CHAR(64)        NOT NULL,
    hits        INT UNSIGNED    NOT NULL DEFAULT 0,
    reset_at    DATETIME        NOT NULL,
    created_at  DATETIME        NOT NULL,
    PRIMARY KEY (key_hash),
    KEY idx_rate_limits_reset (reset_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE audit_log (
    id              BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    public_id       CHAR(36)        NOT NULL,
    actor_user_id   BIGINT UNSIGNED NULL,
    org_id          BIGINT UNSIGNED NULL,
    property_id     BIGINT UNSIGNED NULL,
    action          VARCHAR(64)     NOT NULL,
    subject_type    VARCHAR(64)     NULL,
    subject_id      VARCHAR(64)     NULL,
    diff            LONGTEXT        NULL,
    ip_hash         CHAR(64)        NULL,
    created_at      DATETIME        NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_audit_public_id (public_id),
    KEY idx_audit_actor (actor_user_id),
    KEY idx_audit_org (org_id, created_at),
    KEY idx_audit_property (property_id, created_at),
    KEY idx_audit_action (action)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
