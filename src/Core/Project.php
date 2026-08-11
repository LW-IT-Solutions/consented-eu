<?php

declare(strict_types=1);

namespace Consented\Core;

/**
 * Projekt-Metadaten.
 *
 * Repository-Adressen gehören nicht in .env und nicht in die
 * Instanz-Einstellungen: sie beschreiben nicht diese Installation, sondern das
 * Projekt selbst. Ein Self-Hoster, der forkt, ändert sie hier an einer Stelle
 * statt in Views, README und Dokumentation verstreut.
 */
final class Project
{
    public const ORG        = 'LW-IT-Solutions';
    public const REPO       = 'consented-eu';

    public const ORG_URL    = 'https://github.com/' . self::ORG;
    public const REPO_URL   = self::ORG_URL . '/' . self::REPO;
    public const CLONE_URL  = self::REPO_URL . '.git';
    public const ISSUES_URL = self::REPO_URL . '/issues';

    /** Für Sicherheitsmeldungen: GitHub Security Advisories, privat. */
    public const SECURITY_URL = self::REPO_URL . '/security/advisories/new';

    /**
     * Code und Katalog stehen unter verschiedenen Lizenzen — der Code
     * permissiv, die Datensammlung mit Share-alike (docs/DECISIONS.md § 1b).
     * Beide SPDX-Kennungen stehen hier, damit Exporte und Oberfläche nicht
     * jeweils eine eigene Zeichenkette pflegen.
     */
    public const CODE_LICENSE        = 'MIT';
    public const CATALOG_LICENSE     = 'ODbL-1.0';
    public const CATALOG_LICENSE_URL = 'https://opendatacommons.org/licenses/odbl/1-0/';

    /** Kurzform für die Anzeige, z. B. „LW-IT-Solutions/consented-eu“. */
    public static function slug(): string
    {
        return self::ORG . '/' . self::REPO;
    }

    /**
     * Attributionszeile, die die ODbL bei Weitergabe des Katalogs verlangt.
     * Gehört in jeden Export — ein Datensatz ohne sie ist ein Lizenzverstoß
     * des Empfängers, den wir ihm ersparen können.
     */
    public static function catalogAttribution(): string
    {
        return sprintf(
            'Contains data from the Consented Service Catalogue, %s, licensed under %s.',
            self::REPO_URL,
            self::CATALOG_LICENSE
        );
    }
}
