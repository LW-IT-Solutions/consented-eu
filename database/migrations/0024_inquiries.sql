-- Supportanfragen aus dem Kontaktformular.
--
-- Bewusst `inquiries` und nicht `support_requests`: `Consented\Auth\Support`
-- ist in diesem Projekt bereits die Zugriffsfreigabe eines Administrators auf
-- eine fremde Property. Zwei Dinge mit demselben Namen, die verschiedene
-- Risiken tragen, sind eine Verwechslung, die irgendwann jemand macht.
--
-- Zur Datensparsamkeit: gespeichert wird, was zum Beantworten nötig ist. Die
-- Absenderadresse ist der Rückkanal, `message` das Anliegen, `source_url` die
-- Seite, von der aus abgeschickt wurde — ohne sie ist ein „der Knopf geht
-- nicht" nicht zuzuordnen.
--
-- `ip_hash` ist ein Hash und nie eine Klartext-IP (Regel 4). Er dient
-- ausschließlich der Ratenbegrenzung und der Missbrauchserkennung, nicht der
-- Wiedererkennung von Personen.
--
-- `captcha_score` ist NULL, wenn nicht geprüft werden konnte. Das ist etwas
-- anderes als eine 0.0 und muss unterscheidbar bleiben: 0.0 hieße „Google hält
-- das für einen Bot", NULL heißt „wir konnten nicht fragen".

CREATE TABLE inquiries (
    id              BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    public_id       CHAR(36)        NOT NULL,

    -- NULL bei nicht angemeldeten Absendern. ON DELETE SET NULL, weil eine
    -- gelöschte Person die Anfrage nicht mitnehmen soll: der Vorgang kann noch
    -- offen sein, und die Antwort geht ohnehin an die Adresse im Datensatz.
    user_id         BIGINT UNSIGNED NULL,

    email           VARCHAR(190)    NOT NULL,
    topic           VARCHAR(32)     NOT NULL DEFAULT 'other',
    message         TEXT            NOT NULL,
    source_url      VARCHAR(512)    NOT NULL DEFAULT '',
    locale          VARCHAR(10)     NOT NULL DEFAULT 'de',

    ip_hash         CHAR(64)        NULL,
    user_agent      VARCHAR(255)    NOT NULL DEFAULT '',

    -- 0.00 bis 1.00 laut reCAPTCHA v3. NULL = nicht geprüft (siehe oben).
    captcha_score   DECIMAL(3,2)    NULL,

    status          ENUM('new', 'in_progress', 'done') NOT NULL DEFAULT 'new',
    handled_by      BIGINT UNSIGNED NULL,
    handled_at      DATETIME        NULL,

    created_at      DATETIME        NOT NULL,

    PRIMARY KEY (id),
    UNIQUE KEY uq_inquiries_public_id (public_id),
    -- Die Liste im Admin sortiert nach Eingang und filtert nach Status.
    KEY idx_inquiries_status (status, created_at),
    KEY idx_inquiries_created (created_at),

    CONSTRAINT fk_inquiries_user
        FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE SET NULL,
    CONSTRAINT fk_inquiries_handler
        FOREIGN KEY (handled_by) REFERENCES users (id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
