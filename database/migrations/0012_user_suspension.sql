-- Kontosperre durch den Betreiber der Instanz.
--
-- users.locked_until gibt es bereits, taugt hier aber nicht: diese Spalte
-- gehört dem automatischen Lockout nach Fehlversuchen und wird bei jeder
-- erfolgreichen Anmeldung (User::recordLogin) und bei jedem Passwortwechsel
-- (User::setPassword) wieder geleert. Eine Betreibersperre, die sich durch
-- einen Passwort-Reset selbst aufhebt, wäre keine. Deshalb eine eigene Spalte,
-- die ausschließlich der Admin-Bereich schreibt.
--
-- Sperren ist hier der Ersatz für Löschen. Löschen zerstört den Bezugspunkt
-- jedes Audit-Eintrags, und bei Inhaberinnen einer Organisation scheitert es
-- ohnehin an organizations.owner_user_id (RESTRICT). Sperren nimmt den Zugang
-- sofort und lässt die Nachweiskette vollständig.

ALTER TABLE users
    ADD COLUMN suspended_at     DATETIME     NULL AFTER locked_until,
    -- Interne Notiz für den Betreiber, warum gesperrt wurde. Sie wird der
    -- gesperrten Person nirgends angezeigt und geht in keine Mail.
    ADD COLUMN suspended_reason VARCHAR(255) NULL AFTER suspended_at,
    ADD KEY idx_users_suspended (suspended_at);
