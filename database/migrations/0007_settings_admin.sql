-- Instance-level settings and the administrator flag.
--
-- Same shape as MousePlayer's site_settings: a flat key/value store the
-- operator edits from the admin interface, so changing the sender address or
-- the imprint never requires touching a file or a deployment.

CREATE TABLE site_settings (
    setting_key     VARCHAR(64)     NOT NULL,
    setting_value   TEXT            NULL,
    updated_at      DATETIME        NULL,
    PRIMARY KEY (setting_key)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Instance administrator: sees every organisation and property, manages users
-- and settings. Distinct from the per-property "owner" role, which never grants
-- access outside its own property.
ALTER TABLE users
    ADD COLUMN is_admin TINYINT(1) NOT NULL DEFAULT 0 AFTER locale,
    ADD KEY idx_users_admin (is_admin);

-- Delivery outcome of every transactional mail.
--
-- Until an MTA is configured, mail() fails and the message would be lost with
-- nothing to show for it. This table keeps the body so an operator can recover
-- a verification link, and makes "why did the invite never arrive" answerable.
CREATE TABLE mail_log (
    id           BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    recipient    VARCHAR(190)    NOT NULL,
    subject      VARCHAR(255)    NOT NULL,
    body_html    MEDIUMTEXT      NULL,
    status       ENUM('sent','failed','suppressed') NOT NULL DEFAULT 'sent',
    error        VARCHAR(500)    NULL,
    created_at   DATETIME        NOT NULL,
    PRIMARY KEY (id),
    KEY idx_mail_log_created (created_at),
    KEY idx_mail_log_status (status, created_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
