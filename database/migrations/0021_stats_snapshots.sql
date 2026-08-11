-- Vorberechnete Kennzahlen für die Statistikseite.
--
-- Warum überhaupt vorberechnen: die Seite braucht Zahlen, die nur ein
-- vollständiger Scan über `consents` und `consent_events` liefert. Auf einem
-- Raspberry Pi 4 mit SD-Karte und 128 MB Buffer Pool liest ein Cluster-Scan über
-- eine Million Einwilligungen rund 640 MB — das sind 16 bis 25 Sekunden, und ein
-- Dateicache dahinter macht es schlimmer statt besser: läuft der kalte Pfad in
-- die Zeitgrenze, wird nie geschrieben und jeder Aufruf scannt erneut.
--
-- Warum zwei Tabellen und nicht eine: eine Bestandszahl hat keinen Tag, eine
-- Tagesreihe hat immer einen. In einer Tabelle bräuchte der Bestand ein
-- NULL-Bucket, und ein PRIMARY KEY verträgt kein NULL — man landet bei einem
-- Platzhalterdatum, das jeder Leser erst entschlüsseln muss.
--
-- Warum nicht site_settings: das ist der Einstellungsvertrag, per Formular
-- gepflegt und von Settings::all() gegen defaults() gefiltert. Ein
-- Aggregat-Blob dort macht die Einstellungs-API zur allgemeinen Datenablage und
-- taucht womöglich im Audit-Diff auf.

CREATE TABLE stats_counters (
    metric      VARCHAR(64)     NOT NULL,
    value       BIGINT          NOT NULL DEFAULT 0,
    computed_at DATETIME        NOT NULL,
    PRIMARY KEY (metric)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE stats_daily (
    metric      VARCHAR(64)     NOT NULL,
    bucket      DATE            NOT NULL,
    value       BIGINT          NOT NULL DEFAULT 0,
    computed_at DATETIME        NOT NULL,
    PRIMARY KEY (metric, bucket),
    KEY idx_stats_daily_bucket (bucket)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Der Wasserstand für die Fortschreibung.
--
-- `consent_events` ist append-only mit monoton steigendem Primärschlüssel. Ein
-- Wasserstand auf `id` ist deshalb exakt: der Lauf aggregiert WHERE id > :last,
-- addiert auf die Tagesbuckets und schreibt den neuen Höchststand. Kein
-- Nachtragsfenster nötig — das Drei-Tage-Fenster in bin/worker existiert nur,
-- weil dort aus `consents` aggregiert wird, und die Tabelle ist veränderlich.
--
-- Für den Bestand aus `consents` geht das nicht: Zeilen werden per UPDATE
-- geändert und von zwei Pfaden gelöscht (Art.-17-Löschung im Ingest, Aufbewahrung
-- im Worker). Der Bestand wird deshalb nächtlich vollständig durchgezählt —
-- derselbe Scan, aber ohne wartenden Menschen und mit einem ehrlichen
-- computed_at daneben.
INSERT INTO stats_counters (metric, value, computed_at)
VALUES ('watermark.consent_events', 0, UTC_TIMESTAMP());
