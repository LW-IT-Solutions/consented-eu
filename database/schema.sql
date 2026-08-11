-- consented.eu — Datenbankstruktur
-- =================================
--
-- Erzeugt am 11. August 2026 aus einer vollständig migrierten Installation
-- (Migrationen 0001 bis 0023, 33 Tabellen).
--
-- WAS HIER DRIN IST
-- -----------------
-- Ausschließlich die Struktur: CREATE TABLE, Indizes, Fremdschlüssel. Keine
-- Nutzerkonten, keine Organisationen, keine Properties, keine Einwilligungen,
-- keine Protokolle, keine E-Mail-Adressen. Nachgeprüft beim Erzeugen: null
-- INSERT-Anweisungen, null E-Mail-Adressen.
--
-- Der Dienste-Katalog ist ebenfalls NICHT enthalten. Er ist keine Struktur
-- sondern Inhalt, steht unter einer eigenen Lizenz (ODbL 1.0, siehe
-- LICENSE-CATALOG) und wird mit `php bin/seed` aus
-- database/seeds/dps_catalog.json eingespielt.
--
-- WIE MAN EINE INSTALLATION AUFSETZT
-- ----------------------------------
-- Diese Datei ist NICHT der vorgesehene Weg. Sie ist eine Momentaufnahme zum
-- Nachschlagen — wer die Struktur lesen will, ohne PHP auszuführen, liest hier.
--
-- Der vorgesehene Weg sind die nummerierten Migrationen. Nur sie können nicht
-- von der Wirklichkeit abweichen, und nur sie bringen eine bestehende
-- Installation weiter:
--
--     cp .env.example .env      # ausfüllen: Datenbank, APP_KEY, Pepper
--     php bin/migrate           # Struktur anlegen
--     php bin/seed              # Dienste-Katalog einspielen
--     php bin/seed-demo         # optional: Demo-Konten (Passwort wird gedruckt)
--
-- Wer stattdessen diese Datei importiert, muss die Tabelle `migrations`
-- anschließend selbst füllen, sonst versucht `bin/migrate` beim nächsten Lauf,
-- bereits vorhandene Tabellen erneut anzulegen. Genau deshalb stehen hier keine
-- Migrationszeilen: eine halb gefüllte Zustandstabelle wäre schlimmer als eine
-- leere.
--
-- LIZENZ
-- ------
-- Code und Struktur: MIT (siehe LICENSE). Katalogdaten: ODbL 1.0 (siehe
-- LICENSE-CATALOG und THIRD_PARTY_DATA.md).

/*M!999999\- enable the sandbox mode */ 
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;
DROP TABLE IF EXISTS `audit_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `audit_log` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `public_id` char(36) NOT NULL,
  `actor_user_id` bigint(20) unsigned DEFAULT NULL,
  `org_id` bigint(20) unsigned DEFAULT NULL,
  `property_id` bigint(20) unsigned DEFAULT NULL,
  `action` varchar(64) NOT NULL,
  `subject_type` varchar(64) DEFAULT NULL,
  `subject_id` varchar(100) DEFAULT NULL,
  `diff` longtext DEFAULT NULL,
  `ip_hash` char(64) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_audit_public_id` (`public_id`),
  KEY `idx_audit_actor` (`actor_user_id`),
  KEY `idx_audit_org` (`org_id`,`created_at`),
  KEY `idx_audit_property` (`property_id`,`created_at`),
  KEY `idx_audit_action` (`action`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `consent_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `consent_events` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `consent_id` char(36) NOT NULL,
  `property_id` bigint(20) unsigned NOT NULL,
  `config_version` int(10) unsigned NOT NULL DEFAULT 0,
  `action` varchar(24) NOT NULL,
  `decisions` longtext NOT NULL,
  `tc_string` varchar(2000) DEFAULT NULL,
  `ip_hash` char(64) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_consent_event_id` (`consent_id`,`created_at`),
  KEY `idx_consent_event_property` (`property_id`,`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `consent_stats_daily`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `consent_stats_daily` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `property_id` bigint(20) unsigned NOT NULL,
  `stat_date` date NOT NULL,
  `domain` varchar(253) NOT NULL DEFAULT '',
  `language` varchar(10) NOT NULL DEFAULT '',
  `country_code` char(2) NOT NULL DEFAULT '',
  `layout_variant` varchar(40) NOT NULL DEFAULT '',
  `impressions` int(10) unsigned NOT NULL DEFAULT 0,
  `accept_all` int(10) unsigned NOT NULL DEFAULT 0,
  `reject_all` int(10) unsigned NOT NULL DEFAULT 0,
  `custom_save` int(10) unsigned NOT NULL DEFAULT 0,
  `no_interaction` int(10) unsigned NOT NULL DEFAULT 0,
  `withdrawals` int(10) unsigned NOT NULL DEFAULT 0,
  `avg_time_to_decision_ms` int(10) unsigned NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_stats_bucket` (`property_id`,`stat_date`,`domain`,`language`,`country_code`,`layout_variant`),
  KEY `idx_stats_property_date` (`property_id`,`stat_date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `consents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `consents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `consent_id` char(36) NOT NULL,
  `property_id` bigint(20) unsigned NOT NULL,
  `config_version` int(10) unsigned NOT NULL DEFAULT 0,
  `tc_string` varchar(2000) DEFAULT NULL,
  `ac_string` varchar(500) DEFAULT NULL,
  `gpp_string` varchar(2000) DEFAULT NULL,
  `decisions` longtext NOT NULL,
  `action` enum('accept_all','reject_all','save_selection','withdraw','auto_expire','implicit') NOT NULL,
  `ui_variant` varchar(40) NOT NULL DEFAULT 'default',
  `language` varchar(10) NOT NULL DEFAULT '',
  `country_code` char(2) DEFAULT NULL,
  `region_code` varchar(8) DEFAULT NULL,
  `gpc_signal` tinyint(1) NOT NULL DEFAULT 0,
  `ip_hash` char(64) DEFAULT NULL,
  `user_agent_family` varchar(64) DEFAULT NULL,
  `page_url_hash` char(64) DEFAULT NULL,
  `domain` varchar(253) DEFAULT NULL,
  `is_mobile` tinyint(1) NOT NULL DEFAULT 0,
  `time_to_decision_ms` int(10) unsigned DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_consent_id` (`consent_id`),
  KEY `idx_consent_property_date` (`property_id`,`created_at`),
  KEY `idx_consent_expires` (`expires_at`),
  KEY `idx_consent_domain` (`property_id`,`domain`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `dps_catalog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `dps_catalog` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `public_id` char(36) NOT NULL,
  `dps_id` varchar(80) NOT NULL,
  `name` varchar(160) NOT NULL,
  `provider` varchar(160) NOT NULL DEFAULT '',
  `provider_country` char(2) DEFAULT NULL,
  `category` varchar(40) NOT NULL DEFAULT 'functional',
  `purposes` longtext DEFAULT NULL,
  `legal_basis` varchar(40) NOT NULL DEFAULT 'consent',
  `data_collected` longtext DEFAULT NULL,
  `data_retention` text DEFAULT NULL,
  `privacy_policy_url` varchar(500) NOT NULL DEFAULT '',
  `opt_out_url` varchar(500) NOT NULL DEFAULT '',
  `cookies` longtext DEFAULT NULL,
  `technologies` longtext DEFAULT NULL,
  `blocking_pattern` longtext DEFAULT NULL,
  `pattern_source_type` enum('primary_vendor_doc','gvl','google_atp','open_cookie_database','own_scan','community') DEFAULT NULL,
  `pattern_source_url` varchar(512) DEFAULT NULL,
  `pattern_verified_at` datetime DEFAULT NULL,
  `gcm_signals` longtext DEFAULT NULL,
  `tcf_vendor_id` int(10) unsigned DEFAULT NULL,
  `google_ac_id` int(10) unsigned DEFAULT NULL,
  `third_country` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `source_type` enum('primary_vendor_doc','gvl','google_atp','open_cookie_database','own_scan','community','unsourced') DEFAULT NULL,
  `source_url` varchar(512) DEFAULT NULL,
  `source_license` varchar(64) DEFAULT NULL,
  `source_retrieved_at` datetime DEFAULT NULL,
  `review_status` enum('draft','verified','stale') NOT NULL DEFAULT 'draft',
  `verified_by` bigint(20) unsigned DEFAULT NULL,
  `verified_at` datetime DEFAULT NULL,
  `review_notes` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_dps_catalog_slug` (`dps_id`),
  UNIQUE KEY `uq_dps_catalog_public` (`public_id`),
  KEY `idx_dps_catalog_category` (`category`),
  KEY `idx_dps_catalog_name` (`name`),
  KEY `idx_dps_catalog_tcf` (`tcf_vendor_id`),
  KEY `idx_dps_review` (`review_status`,`updated_at`),
  KEY `idx_dps_source` (`source_type`),
  KEY `fk_dps_verified_by` (`verified_by`),
  KEY `idx_dps_pattern_source` (`pattern_source_type`),
  CONSTRAINT `fk_dps_verified_by` FOREIGN KEY (`verified_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `dps_catalog_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `dps_catalog_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dps_catalog_id` bigint(20) unsigned NOT NULL,
  `language_code` varchar(10) NOT NULL,
  `purpose_description` text DEFAULT NULL,
  `data_collected_text` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_dps_translation` (`dps_catalog_id`,`language_code`),
  CONSTRAINT `fk_dps_translation` FOREIGN KEY (`dps_catalog_id`) REFERENCES `dps_catalog` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `dps_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `dps_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `public_id` char(36) NOT NULL,
  `property_id` bigint(20) unsigned NOT NULL,
  `category_key` varchar(40) NOT NULL,
  `is_required` tinyint(1) NOT NULL DEFAULT 0,
  `default_state` tinyint(1) NOT NULL DEFAULT 0,
  `sort_order` smallint(5) unsigned NOT NULL DEFAULT 0,
  `gcm_signals` longtext DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_dps_category` (`property_id`,`category_key`),
  UNIQUE KEY `uq_dps_category_public` (`public_id`),
  CONSTRAINT `fk_dps_category_prop` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `email_verifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `email_verifications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `email` varchar(190) NOT NULL,
  `token_hash` char(64) NOT NULL,
  `expires_at` datetime NOT NULL,
  `used_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_email_verifications_token` (`token_hash`),
  KEY `idx_email_verifications_user` (`user_id`),
  CONSTRAINT `fk_email_verifications_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `gvl_snapshots`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `gvl_snapshots` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `vendor_list_version` int(10) unsigned NOT NULL,
  `tcf_policy_version` int(10) unsigned NOT NULL,
  `payload` longblob NOT NULL,
  `vendor_count` int(10) unsigned NOT NULL DEFAULT 0,
  `fetched_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_gvl_version` (`vendor_list_version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `gvl_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `gvl_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `vendor_list_version` int(10) unsigned NOT NULL,
  `language_code` varchar(10) NOT NULL,
  `payload` longblob NOT NULL,
  `fetched_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_gvl_translation` (`vendor_list_version`,`language_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `invitations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `invitations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `public_id` char(36) NOT NULL,
  `org_id` bigint(20) unsigned DEFAULT NULL,
  `property_id` bigint(20) unsigned DEFAULT NULL,
  `email` varchar(190) NOT NULL,
  `role` varchar(20) NOT NULL,
  `token_hash` char(64) NOT NULL,
  `invited_by` bigint(20) unsigned NOT NULL,
  `message` varchar(500) NOT NULL DEFAULT '',
  `expires_at` datetime NOT NULL,
  `accepted_at` datetime DEFAULT NULL,
  `revoked_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_invitation_public_id` (`public_id`),
  UNIQUE KEY `uq_invitation_token` (`token_hash`),
  KEY `idx_invitation_email` (`email`),
  KEY `idx_invitation_org` (`org_id`),
  KEY `idx_invitation_property` (`property_id`),
  KEY `fk_invitation_invited` (`invited_by`),
  CONSTRAINT `fk_invitation_invited` FOREIGN KEY (`invited_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_invitation_org` FOREIGN KEY (`org_id`) REFERENCES `organizations` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_invitation_property` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(40) NOT NULL DEFAULT 'default',
  `job_type` varchar(64) NOT NULL,
  `payload` longtext DEFAULT NULL,
  `attempts` tinyint(3) unsigned NOT NULL DEFAULT 0,
  `available_at` datetime NOT NULL,
  `reserved_at` datetime DEFAULT NULL,
  `completed_at` datetime DEFAULT NULL,
  `failed_at` datetime DEFAULT NULL,
  `last_error` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_jobs_claim` (`queue`,`completed_at`,`failed_at`,`available_at`),
  KEY `idx_jobs_type` (`job_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `mail_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `mail_log` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `public_id` char(36) NOT NULL DEFAULT uuid(),
  `recipient` varchar(190) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `body_html` mediumtext DEFAULT NULL,
  `status` enum('sent','failed','suppressed') NOT NULL DEFAULT 'sent',
  `error` varchar(500) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_mail_log_public_id` (`public_id`),
  KEY `idx_mail_log_created` (`created_at`),
  KEY `idx_mail_log_status` (`status`,`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(190) NOT NULL,
  `applied_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_migration` (`filename`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `organization_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `organization_members` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `org_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `role` enum('owner','admin','member') NOT NULL DEFAULT 'member',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_org_member` (`org_id`,`user_id`),
  KEY `idx_org_member_user` (`user_id`),
  CONSTRAINT `fk_org_member_org` FOREIGN KEY (`org_id`) REFERENCES `organizations` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_org_member_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `organizations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `organizations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `public_id` char(36) NOT NULL,
  `name` varchar(160) NOT NULL,
  `slug` varchar(80) NOT NULL,
  `owner_user_id` bigint(20) unsigned NOT NULL,
  `legal_name` varchar(200) NOT NULL DEFAULT '',
  `country_code` char(2) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_org_public_id` (`public_id`),
  UNIQUE KEY `uq_org_slug` (`slug`),
  KEY `idx_org_owner` (`owner_user_id`),
  CONSTRAINT `fk_org_owner` FOREIGN KEY (`owner_user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `token_hash` char(64) NOT NULL,
  `ip_hash` char(64) DEFAULT NULL,
  `expires_at` datetime NOT NULL,
  `used_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_password_resets_token` (`token_hash`),
  KEY `idx_password_resets_user` (`user_id`),
  CONSTRAINT `fk_password_resets_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `properties` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `public_id` char(36) NOT NULL,
  `org_id` bigint(20) unsigned NOT NULL,
  `name` varchar(160) NOT NULL,
  `slug` varchar(80) NOT NULL,
  `timezone` varchar(64) NOT NULL DEFAULT 'Europe/Berlin',
  `status` enum('draft','live','paused') NOT NULL DEFAULT 'draft',
  `suspended_at` datetime DEFAULT NULL,
  `suspended_reason` varchar(255) DEFAULT NULL,
  `default_language` varchar(10) NOT NULL DEFAULT 'de',
  `config_version` int(10) unsigned NOT NULL DEFAULT 0,
  `settings` longtext DEFAULT NULL,
  `first_consent_at` datetime DEFAULT NULL,
  `last_consent_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_property_public_id` (`public_id`),
  UNIQUE KEY `uq_property_slug` (`org_id`,`slug`),
  KEY `idx_property_org` (`org_id`),
  KEY `idx_property_deleted` (`deleted_at`),
  KEY `idx_properties_suspended` (`suspended_at`),
  CONSTRAINT `fk_property_org` FOREIGN KEY (`org_id`) REFERENCES `organizations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `property_design`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_design` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `property_id` bigint(20) unsigned NOT NULL,
  `layout` varchar(32) NOT NULL DEFAULT 'box_bottom',
  `position` varchar(20) NOT NULL DEFAULT 'bottom',
  `tokens` longtext DEFAULT NULL,
  `custom_css` text DEFAULT NULL,
  `logo_path` varchar(255) DEFAULT NULL,
  `backdrop` tinyint(1) NOT NULL DEFAULT 1,
  `backdrop_blur` tinyint(1) NOT NULL DEFAULT 0,
  `animation` varchar(20) NOT NULL DEFAULT 'fade',
  `button_order` varchar(40) NOT NULL DEFAULT 'settings,reject,accept',
  `scrollbar` varchar(10) NOT NULL DEFAULT 'subtle',
  `preset` varchar(40) NOT NULL DEFAULT 'eu_official',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_property_design` (`property_id`),
  CONSTRAINT `fk_property_design_prop` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `property_domains`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_domains` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `public_id` char(36) NOT NULL,
  `property_id` bigint(20) unsigned NOT NULL,
  `domain` varchar(253) NOT NULL,
  `is_primary` tinyint(1) NOT NULL DEFAULT 0,
  `include_subdomains` tinyint(1) NOT NULL DEFAULT 1,
  `verification_token` varchar(64) NOT NULL,
  `verified_at` datetime DEFAULT NULL,
  `verification_method` varchar(20) DEFAULT NULL,
  `last_checked_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_property_domain` (`property_id`,`domain`),
  UNIQUE KEY `uq_property_domain_public` (`public_id`),
  KEY `idx_property_domain_lookup` (`domain`,`verified_at`),
  CONSTRAINT `fk_property_domain_prop` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `property_dps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_dps` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `public_id` char(36) NOT NULL,
  `property_id` bigint(20) unsigned NOT NULL,
  `dps_catalog_id` bigint(20) unsigned DEFAULT NULL,
  `is_custom` tinyint(1) NOT NULL DEFAULT 0,
  `category_key` varchar(40) NOT NULL DEFAULT 'functional',
  `sort_order` smallint(5) unsigned NOT NULL DEFAULT 0,
  `is_essential` tinyint(1) NOT NULL DEFAULT 0,
  `is_enabled` tinyint(1) NOT NULL DEFAULT 1,
  `overrides` longtext DEFAULT NULL,
  `blocking_pattern` longtext DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_property_dps_public` (`public_id`),
  UNIQUE KEY `uq_property_dps_catalog` (`property_id`,`dps_catalog_id`),
  KEY `idx_property_dps_prop` (`property_id`,`sort_order`),
  KEY `fk_property_dps_catalog` (`dps_catalog_id`),
  CONSTRAINT `fk_property_dps_catalog` FOREIGN KEY (`dps_catalog_id`) REFERENCES `dps_catalog` (`id`) ON DELETE SET NULL,
  CONSTRAINT `fk_property_dps_prop` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `property_languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_languages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `property_id` bigint(20) unsigned NOT NULL,
  `language_code` varchar(10) NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `is_enabled` tinyint(1) NOT NULL DEFAULT 1,
  `completion_percent` tinyint(3) unsigned NOT NULL DEFAULT 0,
  `sort_order` smallint(5) unsigned NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_property_language` (`property_id`,`language_code`),
  CONSTRAINT `fk_property_language_prop` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `property_texts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_texts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `property_id` bigint(20) unsigned NOT NULL,
  `language_code` varchar(10) NOT NULL,
  `text_key` varchar(80) NOT NULL,
  `value` text NOT NULL,
  `is_customized` tinyint(1) NOT NULL DEFAULT 1,
  `updated_by` bigint(20) unsigned DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_property_text` (`property_id`,`language_code`,`text_key`),
  KEY `idx_property_text_lookup` (`property_id`,`language_code`),
  CONSTRAINT `fk_property_text_prop` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `property_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `property_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `role` enum('owner','admin','editor','viewer') NOT NULL DEFAULT 'viewer',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_property_user` (`property_id`,`user_id`),
  KEY `idx_property_user_user` (`user_id`),
  CONSTRAINT `fk_property_user_prop` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_property_user_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `property_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_versions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `property_id` bigint(20) unsigned NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `snapshot` longtext NOT NULL,
  `note` varchar(255) NOT NULL DEFAULT '',
  `published_by` bigint(20) unsigned DEFAULT NULL,
  `published_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_property_version` (`property_id`,`version`),
  CONSTRAINT `fk_property_version_prop` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `rate_limits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `rate_limits` (
  `key_hash` char(64) NOT NULL,
  `hits` int(10) unsigned NOT NULL DEFAULT 0,
  `reset_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`key_hash`),
  KEY `idx_rate_limits_reset` (`reset_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `scan_findings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `scan_findings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `scan_job_id` bigint(20) unsigned NOT NULL,
  `finding_type` enum('cookie','localstorage','sessionstorage','script','pixel','iframe') NOT NULL,
  `name` varchar(255) NOT NULL,
  `host` varchar(253) NOT NULL DEFAULT '',
  `first_seen_url` varchar(500) NOT NULL DEFAULT '',
  `before_consent` tinyint(1) NOT NULL DEFAULT 0,
  `matched_dps_id` varchar(80) DEFAULT NULL,
  `raw` longtext DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_scan_finding_job` (`scan_job_id`,`finding_type`),
  CONSTRAINT `fk_scan_finding_job` FOREIGN KEY (`scan_job_id`) REFERENCES `scan_jobs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `scan_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `scan_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `public_id` char(36) NOT NULL,
  `property_id` bigint(20) unsigned NOT NULL,
  `start_url` varchar(500) NOT NULL,
  `status` enum('queued','running','done','failed') NOT NULL DEFAULT 'queued',
  `pages_crawled` int(10) unsigned NOT NULL DEFAULT 0,
  `max_pages` int(10) unsigned NOT NULL DEFAULT 25,
  `started_at` datetime DEFAULT NULL,
  `finished_at` datetime DEFAULT NULL,
  `error` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_scan_job_public` (`public_id`),
  KEY `idx_scan_job_property` (`property_id`,`created_at`),
  CONSTRAINT `fk_scan_job_prop` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `public_id` char(36) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `token_hash` char(64) NOT NULL,
  `ip_hash` char(64) DEFAULT NULL,
  `user_agent_hash` char(64) DEFAULT NULL,
  `user_agent_family` varchar(64) DEFAULT NULL,
  `payload` mediumtext NOT NULL,
  `remembered` tinyint(1) NOT NULL DEFAULT 0,
  `last_seen_at` datetime NOT NULL,
  `expires_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_sessions_public_id` (`public_id`),
  UNIQUE KEY `uq_sessions_token` (`token_hash`),
  KEY `idx_sessions_user` (`user_id`),
  KEY `idx_sessions_expires` (`expires_at`),
  CONSTRAINT `fk_sessions_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `site_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `site_settings` (
  `setting_key` varchar(64) NOT NULL,
  `setting_value` text DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`setting_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `stats_counters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `stats_counters` (
  `metric` varchar(64) NOT NULL,
  `value` bigint(20) NOT NULL DEFAULT 0,
  `computed_at` datetime NOT NULL,
  PRIMARY KEY (`metric`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `stats_daily`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `stats_daily` (
  `metric` varchar(64) NOT NULL,
  `bucket` date NOT NULL,
  `value` bigint(20) NOT NULL DEFAULT 0,
  `computed_at` datetime NOT NULL,
  PRIMARY KEY (`metric`,`bucket`),
  KEY `idx_stats_daily_bucket` (`bucket`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `public_id` char(36) NOT NULL,
  `email` varchar(190) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `name` varchar(120) NOT NULL DEFAULT '',
  `locale` varchar(10) NOT NULL DEFAULT 'de',
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` datetime DEFAULT NULL,
  `totp_secret` varbinary(255) DEFAULT NULL,
  `totp_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `recovery_codes` text DEFAULT NULL,
  `last_login_at` datetime DEFAULT NULL,
  `failed_login_count` int(10) unsigned NOT NULL DEFAULT 0,
  `locked_until` datetime DEFAULT NULL,
  `suspended_at` datetime DEFAULT NULL,
  `suspended_reason` varchar(255) DEFAULT NULL,
  `terms_accepted_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_users_public_id` (`public_id`),
  UNIQUE KEY `uq_users_email` (`email`),
  KEY `idx_users_deleted` (`deleted_at`),
  KEY `idx_users_admin` (`is_admin`),
  KEY `idx_users_suspended` (`suspended_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

/*M!999999\- enable the sandbox mode */ 

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;
