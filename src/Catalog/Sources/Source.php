<?php

declare(strict_types=1);

namespace Consented\Catalog\Sources;

/**
 * Eine Quelle für Katalogdaten.
 *
 * Jeder Adapter muss seine Lizenz benennen können, bevor er auch nur eine
 * Zeile liefert. Der Importer prüft sie gegen die Blacklist und bricht ab,
 * wenn sie unbekannt oder unzulässig ist — siehe PROJECT_BRIEF 6.6.
 */
interface Source
{
    /** Muss einem Wert der ENUM-Spalte dps_catalog.source_type entsprechen. */
    public function sourceType(): string;

    /** SPDX-Kennung oder 'public-fact'. Niemals leer. */
    public function license(): string;

    /** Attributionstext, wandert nach THIRD_PARTY_DATA.md und /legal/attributions. */
    public function attribution(): string;

    public function sourceUrl(): string;

    /**
     * Liefert normalisierte Dienst-Datensätze.
     *
     * @return iterable<array{
     *     dps_id:string, name:string, provider:string, provider_country:?string,
     *     category:string, purposes:list<string>, legal_basis:string,
     *     data_collected:list<string>, data_retention:string,
     *     privacy_policy_url:string, cookies:list<array<string,string>>,
     *     blocking_pattern:list<string>, gcm_signals:list<string>,
     *     third_country:bool, source_url:string, review_notes:string
     * }>
     */
    public function fetch(): iterable;
}
