-- Reihenfolge der Knöpfe im Banner, pro Property einstellbar.
--
-- Wo „Ablehnen" gegenüber „Akzeptieren" steht, ist eine echte
-- Gestaltungsfrage: eine Leiste am Seitenfuß liest sich anders als ein
-- zentrierter Dialog, und in einer rechtsläufigen Sprache noch einmal anders.
-- Bisher stand die Reihenfolge in der Runtime fest, also musste jeder Betreiber
-- mit unserem Geschmack leben.
--
-- VARCHAR und kein ENUM, aus zwei Gründen: Migration 0008 musste schon einmal
-- ein ENUM auflösen, weil es eine Liste aus dem PHP-Code dupliziert hat und
-- dann auseinanderlief. Die gültigen Werte stehen in Defaults::buttonOrders()
-- und werden dort geprüft — eine zweite Wahrheit in der Spaltendefinition wäre
-- genau derselbe Fehler noch einmal.
--
-- Der Vorgabewert ist die bisherige Reihenfolge. Bestehende Properties ändern
-- ihr Aussehen dadurch nicht.

ALTER TABLE property_design
    ADD COLUMN button_order VARCHAR(40) NOT NULL DEFAULT 'settings,reject,accept' AFTER animation;
