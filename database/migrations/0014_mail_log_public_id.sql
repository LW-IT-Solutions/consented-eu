-- Öffentliche Kennung für das Mail-Protokoll.
--
-- Die Detailroute lautete /admin/mail/{id} mit der Auto-Increment-ID. Das
-- verstößt gegen Regel 1 in CLAUDE.md, und zwar nicht als Formalie: die ID
-- verrät, wie viele Mails die Instanz insgesamt verschickt hat, und sie lädt
-- zum Durchzählen ein. Beim Mail-Protokoll wiegt das schwerer als anderswo,
-- weil in den Nachrichten Bestätigungs- und Passwort-Reset-Links stehen.
--
-- Abweichung von der Konvention, bewusst: der Vorgabewert erzeugt eine UUIDv4
-- über uuid() statt einer UUIDv7. Der Mailer setzt die Kennung künftig selbst
-- als v7; der Vorgabewert ist nur das Netz darunter, damit eine Zeile niemals
-- ohne public_id entsteht — auch nicht, wenn irgendwann jemand direkt in die
-- Tabelle schreibt. Zeitliche Sortierung liefert hier ohnehin created_at.

ALTER TABLE mail_log
    ADD COLUMN public_id CHAR(36) NOT NULL DEFAULT (uuid()) AFTER id;

-- Bestehende Zeilen bekommen je eine eigene Kennung. Ohne die WHERE-Klausel
-- würde MariaDB uuid() einmal auswerten und allen Zeilen denselben Wert geben.
UPDATE mail_log SET public_id = (SELECT uuid()) WHERE public_id = '' OR public_id IS NULL;

ALTER TABLE mail_log
    ADD UNIQUE KEY uq_mail_log_public_id (public_id);
