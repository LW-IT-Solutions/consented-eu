-- Ein Quellentyp für „wir wissen es nicht".
--
-- `source_type` kannte bisher nur Quellen, auf die man sich berufen kann. Neun
-- Katalogeinträge berufen sich auf `primary_vendor_doc`, ohne dass es zu ihnen
-- ein Anbieterdokument gäbe: die Seiten sind nicht abrufbar, rein clientseitig
-- gerendert, oder die einzige auffindbare Quelle handelt von etwas anderem.
--
-- Diese Behauptung war schlimmer als ein Eingeständnis. Sie stellte das
-- Prüfgatter zufrieden und verbarg genau die Lücke, die es finden soll — und
-- sie zwang das Gatter dazu, die Pflicht zur Quell-URL an der Lizenz
-- festzumachen statt an der Quellenart, wodurch alle handgepflegten Einträge
-- durchrutschten.
--
-- Mit `unsourced` sagt der Katalog, was der Fall ist. Danach kann die Prüfung
-- für jede echte Quelle eine URL verlangen, und die Zahl der eingestandenen
-- Lücken ist zählbar statt unsichtbar.
--
-- Der Wert ist kein Ziel. Er darf nie auf `verified` stehen, und die Zahl kennt
-- nur eine richtige Richtung.

ALTER TABLE dps_catalog
    MODIFY COLUMN source_type ENUM(
        'primary_vendor_doc',
        'gvl',
        'google_atp',
        'open_cookie_database',
        'own_scan',
        'community',
        'unsourced'
    ) NULL;
