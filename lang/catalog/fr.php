<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Franzoesisch.
 *
 * Nachschlagewerk, kein Sprachkatalog: der Schluessel ist der deutsche
 * Originaltext aus `database/seeds/dps_catalog.json`, der Wert seine
 * Uebersetzung. Fehlt ein Eintrag, bleibt der deutsche Text stehen — das ist
 * schlechter als eine Uebersetzung, aber besser als eine Luecke in einem Text,
 * der einer Person erklaeren soll, wofuer ein Dienst ihre Daten verarbeitet.
 *
 * Am Ende stehen zusammengesetzte Zwecke. ConfigBuilder fuegt die `purposes`
 * eines Eintrags mit ", " zu einem Feld zusammen; zur Laufzeit wieder
 * aufzutrennen waere NICHT verlustfrei, weil 87 der Einzeltexte selbst ", "
 * enthalten und 16 Katalogeintraege sich dadurch falsch rekonstruieren
 * liessen. Die Kombination steht deshalb als eigener Schluessel hier, gebildet
 * aus den geprueften Einzeluebersetzungen in derselben Reihenfolge.
 *
 * DIESE DATEI GEHOERT INS REPOSITORY, anders als `lang/banner/`.
 *
 * Der Katalog steht unter ODbL 1.0. Eine uebersetzte Fassung seiner Inhalte ist
 * eine abgeleitete Datenbank; wer sie oeffentlich nutzt, muss sie nach ODbL 4.4
 * unter derselben Lizenz verfuegbar machen. Die Bannertexte in `lang/banner/`
 * sind dagegen MIT-lizenzierter Code und duerfen zurueckgehalten werden — der
 * Unterschied ist die Lizenz der Quelle, nicht unsere Vorliebe.
 *
 * Maschinell aus dem Deutschen erstellt und von einer zweiten, unabhaengigen
 * Stufe gegen das Original geprueft. Nicht anwaltlich freigegeben; siehe die
 * Instanz-Einstellung `review_notices`.
 *
 * 379 Einzeltexte, 51 Kombinationen. Erzeugt am 2026-08-11.
 */

return [
    'A/B-Tests und Split-URL-Tests auf der Website'
        => 'Tests A/B et tests Split-URL sur le site',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Facturation et sécurisation des appels cartographiques',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Finalisation de la connexion avec Shop ; nécessaire',
    'Abspielen eingebetteter Videos'
        => 'Lecture de vidéos intégrées',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Traitement d\'un paiement initié par le visiteur',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Traitement des paiements lorsque le rendez-vous est payant',
    'Analyse des Nutzungsverhaltens'
        => 'Analyse du comportement d\'utilisation',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Données d\'analyse des interfaces d\'achat ; analyse',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Données d\'analyse de la boutique ; classé par le fournisseur dans la catégorie analyse',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Données de connexion pour la zone d\'administration sous /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Connexion à Shop Pay ; nécessaire',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Connexion et reconnaissance de session dans la zone d\'administration',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Statistiques anonymes relatives au service et autres finalités techniques, notamment la prise en charge de l\'accessibilité',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Préférences d\'affichage de la zone d\'administration par compte',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Mémoriser les préférences d\'affichage de la zone d\'administration',
    'Anzeige von Bewertungen'
        => 'Affichage des avis',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Afficher le calendrier de réservation et prendre rendez-vous sur le site',
    'Anzeigen einer interaktiven Karte'
        => 'Afficher une carte interactive',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'Défini sur la valeur 1, il empêche l\'envoi d\'événements UET à Microsoft',
    'Aufbau von Remarketing-Listen'
        => 'Constitution de listes de remarketing',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Enregistrement et relecture des sessions',
    'Aufzeichnung von Mausbewegungen'
        => 'Enregistrement des mouvements de la souris',
    'Ausblenden des Shop-Hinweises merken'
        => 'Mémoriser le masquage de l\'avis de la boutique',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Diffusion et déclenchement de balises sur le site',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Diffusion et gestion de balises sur le site',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Fourniture de tuiles cartographiques aux cartes intégrées',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Diffusion des contenus de l\'avis dans des emplacements préparés dans le code source de la page via un serveur publicitaire',
    'Auslieferung personalisierter Werbung'
        => 'Diffusion de publicité personnalisée',
    'Auslieferung von Anzeigen'
        => 'Diffusion d\'annonces',
    'Auslieferung von Bibliotheken und Assets'
        => 'Fourniture de bibliothèques et de ressources',
    'Auslieferung von Schriftarten'
        => 'Fourniture de polices de caractères',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Émission d\'un jeton que le serveur du site vérifie',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Pilotage de l\'affichage des formulaires d\'inscription sur le site',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Pilotage des formulaires pop-up afin qu\'ils n\'apparaissent pas de manière répétée',
    'Auswahl des Rechenzentrums'
        => 'Sélection du centre de données',
    'Auswertung der Verweisquellen'
        => 'Analyse des sources de référence',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Analyse de l\'audience du site (données démographiques du site)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Analyse du navigateur, du système d\'exploitation et du type d\'appareil',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Analyse de l\'appareil, du navigateur et de la localisation estimée',
    'Auswertung von Herkunft und Kampagnen'
        => 'Analyse de la provenance et des campagnes',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Authentifie les requêtes de l\'utilisateur final',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Limitation de la fréquence d\'affichage',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Atteste d\'une vérification réussie afin d\'éviter d\'autres challenges de la zone',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Mise à disposition des champs de paiement de Stripe Elements',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Mise à disposition de l\'accès d\'accessibilité',
    'Besucherzählung'
        => 'Comptage des visiteurs',
    'Betrieb des Chat-Widgets'
        => 'Fonctionnement du widget de chat',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Fonctionnement et prévention des abus des services cartographiques',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Fonctionnement du panier et du processus de paiement d\'une boutique',
    'Betrugs- und Missbrauchserkennung'
        => 'Détection de la fraude et des abus',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Détection de la fraude lors de la tentative de paiement',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Détection de la fraude et évaluation du risque des tentatives de paiement',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Prévention de la fraude et obligations légales en tant que prestataire de services de paiement',
    'Betrugsprävention'
        => 'Prévention de la fraude',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Prévention de la fraude et évaluation du risque d\'une tentative de paiement',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Constitution de profils d\'utilisation pseudonymisés après consentement',
    'Bildung von Zielgruppen und Retargeting'
        => 'Constitution d\'audiences et retargeting',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Rattache la session à la même instance AWS',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Protection du lecteur contre les bots et les abus',
    'Bot-Abwehr fuer den Player'
        => 'Protection du lecteur contre les bots',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Protection contre les bots lors de la fourniture des ressources HubSpot',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Identifiant de navigateur avec lequel LinkedIn distingue les appareils et détecte les abus',
    'Cloudflare-Bot-Abwehr'
        => 'Protection anti-bot de Cloudflare',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Détection de bots de Cloudflare pour le filtrage du trafic',
    'Cloudflare-Ratenbegrenzung'
        => 'Limitation de débit de Cloudflare',
    'Conversion-Messung'
        => 'Mesure des conversions',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Suivi des conversions des campagnes publicitaires LinkedIn',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Suivi des conversions des campagnes Microsoft Advertising',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Suivi des conversions des campagnes publicitaires Pinterest',
    'Darstellung interaktiver Karten auf der Website'
        => 'Affichage de cartes interactives sur le site',
    'Deduplizieren von Kontakten'
        => 'Déduplication des contacts',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Sert à la diffusion et à la mesure de la publicité.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'Identifiant visiteur inter-domaines ; selon le fournisseur, cookie tiers, utilisé uniquement si les cookies tiers sont activés dans le fichier de configuration',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Identifiant tiers pour la reconnaissance des visiteurs',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Identifiant tiers transmis à Klaviyo',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Identifiant publicitaire tiers pour la mesure des campagnes et la personnalisation sur TikTok',
    'E-Commerce- und Zielauswertung'
        => 'Analyse de l\'e-commerce et des objectifs',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Préremplir l\'adresse e-mail du formulaire de commentaire',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Intégration et lecture de titres, d\'albums, de playlists et d\'épisodes de podcast',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Intégration et lecture de vidéos sur le site',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Intégration de formulaires et de sondages dans le site',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Intégration des champs de carte bancaire dans son propre tunnel de paiement, afin que les données de carte ne transitent pas par la boutique',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Intégration d\'une déclaration de cookies gérée en externe',
    'Einbettung von Audioinhalten'
        => 'Intégration de contenus audio',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Intégration de pixels publicitaires de Google et Facebook sur le site connecté',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Affichage de mentions de financement et de paiement en plusieurs fois sur les pages produit et panier (On-site Messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Identifiant unique dans la mesure inter-domaines (comptes à partir du 14/06/2026)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Identifiant unique dans la mesure inter-domaines (comptes antérieurs au 14/06/2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Valeur à usage unique contre le CSRF dans le formulaire d\'opt-out',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Contient un identifiant utilisateur et l\'horodatage de création ; selon la source, déposé dans le navigateur intégré de Pinterest et non sur le domaine du site',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Collecte et transmission des réponses à l\'exploitant du formulaire',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Enregistre l\'utilisation du site à des fins d\'analyse.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Collecte d\'événements personnalisés définis par l\'exploitant',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Collecte et transmission des erreurs applicatives depuis le navigateur',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Collecte des visiteurs et des pages vues sur le site à des fins d\'automatisation du marketing',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Mesure de la performance d\'un support publicitaire et décompte de la commission',
    'Erhalt des Sitzungszustands'
        => 'Maintien de l\'état de la session',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Reconnaissance de l\'appareil aux fins de prévention des abus',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Détection et rejet des accès automatisés sur les formulaires',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Détection des bots et des comportements automatisés lors du processus de commande',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Détecter si le contenu du panier a changé',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Détecte les modifications du contenu du panier',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Reconnaît les visiteurs du site sur lequel le code Intercom est intégré',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Reconnaît les navigateurs sur les sites Microsoft ; selon le fournisseur, également utilisé à des fins publicitaires, cookie tiers',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Reconnaît les personnes qui écrivent via l\'outil de chat',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Reconnaît l\'appareil depuis lequel la conversation est engagée',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Reconnaît l\'appareil individuel qui interagit avec le messenger, aux fins de prévention des abus',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Reconnaît l\'utilisateur final qui engage la conversation',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Reconnaît le domaine ou sous-domaine sur lequel le widget de chat est intégré',
    'Erkennt wiederkehrende Besucher'
        => 'Reconnaît les visiteurs récurrents',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Détecte si le navigateur a été redémarré',
    'Erkennung von Klickbetrug'
        => 'Détection de la fraude au clic',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Détermine les accès uniques au site (comptes à partir du 14/06/2026)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Détermine les accès uniques au site (comptes antérieurs au 14/06/2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Permettre à des tiers de déposer des cookies dans le navigateur de ces utilisateurs',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Permet l\'utilisation de l\'accès d\'accessibilité',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Permet des fonctionnalités supplémentaires du site.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Identifiant interne qui reconnaît les visiteurs et rattache les événements au site',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Identifiant visiteur interne pour le suivi des conversions et le remarketing',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Identifiant de session interne pour le rattachement des événements',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Identifiant de session interne par pixel pour la mesure des campagnes',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Identifiant de session interne pour la mesure des campagnes',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Identifiant publicitaire interne pour la mesure des campagnes et la personnalisation sur TikTok',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Cookie interne qui regroupe les actions de visiteurs que Pinterest ne peut pas rattacher',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Cookie interne qui stocke les données client hachées collectées via Automatic Enhanced Match',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Génère un identifiant unique pour chaque visiteur (comptes à partir du 14/06/2026)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Génère un identifiant unique pour chaque visiteur (comptes antérieurs au 14/06/2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identifiant d\'appareil pour l\'analyse des événements sur les pages comportant le widget',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Déposé lors de la connexion sur une page hébergée par HubSpot',
    'Gewaehlte Sprache speichern'
        => 'Enregistrer la langue sélectionnée',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Synchronise l\'identifiant MUID entre les domaines Microsoft ; selon le fournisseur, cookie tiers',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Maintient les messages synchronisés entre plusieurs onglets',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Conserve la valeur du paramètre pk_campaign',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Conserve la valeur du paramètre utm_campaign',
    'Haelt den Widerspruch gegen die Messung'
        => 'Conserve l\'opposition à la mesure',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Conserve la date d\'expiration de _uetsid',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Conserve la date d\'expiration de _uetvid',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Conserve le type de source de trafic pour le Tag Manager',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Consigne l\'identité du visiteur, également aux fins de déduplication des contacts',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Consigne la décision du visiteur relative aux cookies',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Maintient l\'affichage du widget cohérent lors du changement de page',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Consigne la page d\'entrée ; analyse',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Conserve le consentement à la mesure au moyen de cookies',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Conserve la décision de l\'utilisateur concernant les catégories et les fournisseurs',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Conserve la session des utilisateurs connectés et l\'accès aux conversations antérieures',
    'Haelt die verweisende Adresse'
        => 'Conserve l\'adresse référente',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Consigne la source référente ; analyse',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Conserve des variables personnalisées de la session (marqué comme obsolète par le fournisseur)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Consigne si etracker est autorisé à déposer des cookies ; défini par un appel d\'API en cas d\'utilisation de data-block-cookies',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Consigne les options de fonctionnalité activées par le propriétaire de la vidéo',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Cookie principal pour la reconnaissance des visiteurs',
    'Heatmaps'
        => 'Cartes de chaleur',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Cartes de chaleur des clics et du comportement de défilement',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Conserve les données de session des cartes de chaleur pendant la durée de la visite',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Conserve des informations sur la session en cours (comptes à partir du 14/06/2026)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Conserve des informations sur la session en cours (comptes antérieurs au 14/06/2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Conserve des variables personnalisées pendant la durée de la visite',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Conserve des données permanentes au niveau du visiteur (comptes à partir du 14/06/2026)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Conserve des données permanentes au niveau du visiteur pour l\'analyse Insights (comptes antérieurs au 14/06/2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Consigne l\'état du consentement du visiteur (comptes à partir du 14/06/2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Consigne l\'état du consentement du visiteur (comptes antérieurs au 14/06/2026)',
    'Hält den Sitzungszustand.'
        => 'Conserve l\'état de la session.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Conserve l\'identifiant utilisateur Clarity et les paramètres pour ce site',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Conserve l\'attribution de la variante pour les tests A/B',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Consigne temporairement la combinaison sélectionnée (comptes à partir du 14/06/2026)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Consigne temporairement la combinaison sélectionnée (comptes antérieurs au 14/06/2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Consigne la variante sélectionnée avant que la redirection n\'ait lieu (comptes à partir du 14/06/2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Consigne la variante sélectionnée avant que la redirection n\'ait lieu (comptes antérieurs au 14/06/2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Enregistre par quel lien référent la visite a eu lieu',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'En mode Pre-Clearance : autorisation pour les autres vérifications WAF de la même zone',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Identifiant de membre indirect pour le suivi des conversions, le retargeting et l\'analyse',
    'Inhalt des Warenkorbs; notwendig'
        => 'Contenu du panier ; nécessaire',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Données d\'analyse relatives à l\'acheteur dans la boutique ; analyse',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Identifiant unique lié à la campagne (comptes à partir du 14/06/2026)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Identifiant du premier contact avec Clarity sur l\'ensemble des sites utilisant Clarity ; selon le fournisseur, cookie tiers',
    'Kennzeichnet die laufende Sitzung'
        => 'Identifie la session en cours',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Conserver les données du commentaire pour les commentaires suivants',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Diffusion cohérente des variantes des tests A/B',
    'Lastverteilung und Routing'
        => 'Répartition de charge et routage',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Répartition de charge et routage des requêtes de challenge',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Enregistre localement les paramètres du compte du visiteur',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Diffuse la même variante d\'une page de test A/B',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Chat en direct et canal de messagerie pour l\'assistance sur le site',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Chat en direct et boîte de réception d\'assistance sur le site',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Données marketing des interfaces d\'achat ; marketing',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Données marketing pour les interfaces d\'achat',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Mémorisation des paramètres du lecteur choisis par le spectateur (volume, qualité, sous-titres)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Mémorisation de l\'état et des paramètres du widget',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Retient la fermeture de la bannière Global Privacy Control',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Retient la fermeture de la bannière d\'information',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Retient le moment de la synchronisation avec le cookie lms_analytics',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Retient le moment de la dernière synchronisation des identifiants afin qu\'elle ne soit pas répétée',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Retient la variante attribuée (comptes à partir du 14/06/2026)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Retient la variante attribuée afin qu\'elle reste identique lors d\'une nouvelle visite (comptes antérieurs au 14/06/2026)',
    'Merkt einen Rabattcode; notwendig'
        => 'Retient un code de réduction ; nécessaire',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Retient une opposition à la mesure (comptes à partir du 14/06/2026)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Retient une opposition valable pour plusieurs sites (comptes antérieurs au 14/06/2026)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Retient les paramètres du lecteur tels que le volume, la qualité et les sous-titres',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Retient le paramètre des notifications sonores',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Mémorise un consentement donné à la mesure',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Mémorise une opposition à la mesure',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Retient les messages proactifs qui ont été fermés',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Retient que le visiteur a fermé le libellé du bouton de démarrage',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Retient si le widget est ouvert ou fermé',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Retient que le visiteur ne doit participer à aucune campagne (comptes antérieurs au 14/06/2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Retient que le visiteur est exclu de la campagne (comptes à partir du 14/06/2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Retient que le visiteur est exclu de la campagne (comptes antérieurs au 14/06/2026)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Retient que l\'avis de consentement a été fermé',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Retient que l\'avis de la boutique a été fermé',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Retient que la question relative aux cookies ne doit plus être posée',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Retient qu\'un tag a déjà été déclenché',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Retient si la profondeur de défilement est mesurée pour ce visiteur',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Retient si la fenêtre de chat est ouverte',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Retient si l\'identifiant MUID est transmis à un identifiant publicitaire ; selon le fournisseur, toujours 0, cookie tiers',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Mesure des ouvertures et des clics dans les campagnes par e-mail',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Mesure des sessions et des événements sur les pages comportant le widget',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Mesure des sessions et attribution de la source de la visite',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Mesure de la disponibilité du service par Google',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Mesure du temps de chargement et des indicateurs clés de la page (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Mesure de la profondeur de défilement et des événements de clic',
    'Messung der Werbewirkung'
        => 'Mesure de l\'efficacité publicitaire',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Mesure du comportement d\'utilisation sur le site',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Mesure et personnalisation des annonces dans le réseau publicitaire TikTok Pangle',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Mesure et amélioration de la performance des campagnes publicitaires',
    'Messung von Auslieferungen und Klicks'
        => 'Mesure des diffusions et des clics',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Mesure des visiteurs et des sessions à des fins d\'analyse',
    'Messung von Conversions'
        => 'Mesure des conversions',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Mesure des pages vues et des visites',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Mesure des pages vues et des événements',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Mesure des pages vues et du comportement d\'utilisation',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Mesure des pages vues et des événements personnalisés',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Mesure des pages vues, des visites et des sessions',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Mesure des pages vues, des visites et des sessions sur son propre serveur',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Mesure des campagnes publicitaires et des conversions sur le site',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Mesure des objectifs et des conversions d\'une campagne',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Chargement des tuiles de carte, des polices et des styles depuis le fournisseur',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Préremplir le nom issu du formulaire de commentaires',
    'Nutzer-ID'
        => 'ID d\'utilisateur',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Attribue le panier au bon pays ; nécessaire',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Attribue le panier à la bonne cliente dans la base de données',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Rattache les actions d\'une visite à une session',
    'Personalisierung der Werbung auf TikTok'
        => 'Personnalisation de la publicité sur TikTok',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Vérifier si WordPress peut déposer des cookies',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Vérifie si le navigateur prend en charge les cookies ; nécessaire',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Vérifie si WordPress peut déposer des cookies',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Valeur de contrôle du mot de passe de la boutique ; nécessaire',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Cookie de contrôle du fournisseur (comptes antérieurs au 14/06/2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Vérifie si le navigateur accepte les cookies (comptes à partir du 14/06/2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Vérifie si le navigateur accepte les cookies (comptes antérieurs au 14/06/2026)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Vérifie si le navigateur accepte les cookies (selon le fournisseur, uniquement dans Internet Explorer)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Limitation de débit chez le fournisseur CDN de HubSpot',
    'Reichweiten- und Nutzungsmessung'
        => 'Mesure d\'audience et d\'utilisation',
    'Reichweitenmessung'
        => 'Mesure d\'audience',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Mesure d\'audience des vidéos intégrées par Vimeo',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Mesure d\'audience pour l\'exploitant de la boutique',
    'Remarketing und Zielgruppenbildung'
        => 'Remarketing et constitution d\'audiences',
    'Retargeting'
        => 'Retargeting',
    'Retargeting von Website-Besuchern'
        => 'Retargeting des visiteurs du site',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Analyse de risque visant à distinguer un être humain d\'un bot',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Cookie collectif qui, selon le fournisseur, n\'est créé que dans le navigateur Safari (comptes à partir du 14/06/2026)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Cookie collectif qui, selon le fournisseur, n\'est créé que dans le navigateur Safari (comptes antérieurs au 14/06/2026)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Collecte d\'informations sur le comportement de navigation de ces utilisateurs par Spotify et par des tiers',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Commutateur que l\'exploitant du site définit lui-même pour empêcher le suivi par Klaviyo',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Protection de la connexion des membres contre la falsification',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Protection des formulaires contre les usages abusifs automatisés',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Protection contre les requêtes automatisées (spam, credential stuffing)',
    'Sicherheit'
        => 'Sécurité',
    'Sicherheitsfunktionen'
        => 'Fonctions de sécurité',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Fonctions de sécurité lorsque la fonction optionnelle User Journeys est active',
    'Sitzung'
        => 'Session',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Attribution de la session et de la langue ou du pays',
    'Sitzungsaufzeichnung'
        => 'Enregistrement de la session',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identifiant de session pour l\'analyse des événements sur les pages comportant le widget',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Identifiant de session pour les statistiques de la boutique ; analyse',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Clé de session du service Answer Bot',
    'Sitzungswiedergabe'
        => 'Relecture de session',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Enregistre le jeton d\'authentification après la connexion',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Enregistre le mot de passe encodé des vidéos protégées par mot de passe',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Enregistre la clé de la langue choisie',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Enregistre la préférence de confidentialité du visiteur ; nécessaire',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Enregistre la décision de consentement du visiteur',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Enregistre l\'identifiant d\'appareil du visiteur pour l\'authentification dans le widget de chat',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Enregistre l\'identifiant d\'un utilisateur inscrit à un webinaire',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Enregistre l\'identifiant de clic fbclid afin qu\'un événement du site puisse être attribué à une annonce',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Enregistre l\'identifiant d\'utilisateur issu d\'un formulaire d\'inscription placé avant la vidéo',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Enregistre l\'identifiant de clic TikTok pour l\'attribution des conversions',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Stocke l\'identifiant unique du visiteur à des fins de reconnaissance',
    'Speichert die zugestimmten Kategorien'
        => 'Enregistre les catégories acceptées',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Alimente le widget des produits consultés récemment',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Détermine si l\'identifiant MUID est renouvelé ; selon le fournisseur, cookie tiers',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Techniquement nécessaire au fonctionnement et à la sécurité du site.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Contient les données de session et de commande de la boutique ; classé comme nécessaire par le fournisseur',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Porte la fonction d\'opposition (opt-out)',
    'Transaktionssicherheit'
        => 'Sécurité des transactions',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Porte l\'analyse de risque de reCAPTCHA.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Transmission des événements du site à TikTok',
    'Umfragen'
        => 'Sondages',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Empêche la transmission de données à HubSpot',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Supprime le message de bienvenue du chat après sa fermeture',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Distingue les navigateurs qui consultent des pages Microsoft ; avec consentement, également à des fins publicitaires',
    'Unterscheidet einzelne Nutzer.'
        => 'Distingue les différents utilisateurs.',
    'Unterscheidung einzelner Nutzer'
        => 'Distinction des différents utilisateurs',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Distinction entre humain et bot dans les formulaires et les connexions',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Relie plusieurs pages vues en un seul enregistrement de session',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Empêche l\'affichage permanent de la bannière en mode strict',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Distribution des signaux de consentement aux tags Google',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Gestion de la décision de consentement pour les tags configurés dans le conteneur',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Gestion de l\'opposition à la mesure',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Gestion de l\'opposition et du consentement pour la mesure',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Classé par Google dans les catégories Analyse et Publicité.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Classé par Google dans les catégories Analyse, Publicité et Sécurité.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Classé par Google dans les catégories Fonctionnalité, Publicité et Sécurité.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Classé par Google dans les catégories Sécurité et Fonctionnalité.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Classé par Google dans les catégories Sécurité et Publicité.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Classé par Google dans les catégories Sécurité, Analyse, Fonctionnalité et Publicité.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Classé par Google dans les catégories Sécurité, Fonctionnalité et Publicité.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Classé par Google dans les catégories Publicité et Sécurité.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Classé par Google dans la catégorie Analyse ; Google n\'indique pas de finalité plus précise.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Classé par Google dans la catégorie Fonctionnalité.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Classé par Google dans la catégorie Sécurité.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Classé par Google dans la catégorie Publicité.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Cité par Microsoft parmi les cookies qui ne peuvent pas être déposés sans consentement ; Microsoft n\'indique pas de description de finalité propre',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Identifiant généré par Vimeo pour la mesure d\'audience',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Devise du panier après la finalisation de la commande ; nécessaire',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Attribution probabiliste d\'un navigateur à une personne',
    'Warenkorb einer Besucherin zuordnen'
        => 'Attribuer le panier à une visiteuse',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Préremplir l\'adresse du site web issue du formulaire de commentaires',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Reconnaissance du spectateur à des fins publicitaires',
    'Werbepersonalisierung'
        => 'Personnalisation de la publicité',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Comme _pin_unauth, mais en tant que cookie tiers',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Reconnaissance du visiteur au cours du processus de réservation',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Reconnaissance du visiteur entre les pages vues et les onglets',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Reconnaissance et identification des visiteurs du site',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Reconnaissance des visiteurs au fil de plusieurs visites',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Reconnaissance des visiteurs de sites associés à des fins de retargeting',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Reconnaissance des visiteurs récurrents et attribution des conversations antérieures',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Reconnaissance du visiteur et enregistrement de ses caractéristiques',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Reconnaissance du navigateur au moyen de l\'identifiant Criteo',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Reconnaissance de l\'utilisateur ; uniquement avec consentement, bloqué par défaut',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Reconnaissance d\'un navigateur lors de visites ultérieures, après consentement',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Reconnaissance des visiteurs et attribution à des sessions',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'Reconnaissance des membres LinkedIn en dehors de LinkedIn à des fins publicitaires',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Reconnaissance des utilisateurs après consentement',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Reconnaissance des visiteurs récurrents au moyen d\'un identifiant de visiteur',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Déposé lorsqu\'un objectif de campagne a été déclenché (comptes à partir du 14/06/2026)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Déposé lorsqu\'un objectif de campagne a été déclenché (comptes antérieurs au 14/06/2026)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Déposé lorsqu\'une personne visite un site sur lequel le tag Pinterest est intégré',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Déposé lorsqu\'une attribution aboutit sans cookies existants, par exemple via Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Déposé par le tag JavaScript à partir des données que Pinterest transmet avec le trafic issu de la publicité',
    'Zaehlt und begrenzt Sitzungen'
        => 'Compte et limite les sessions',
    'Zahlungsabwicklung'
        => 'Traitement des paiements',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Indique si la session est toujours en cours ou si elle est nouvelle',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Indique à l\'interface que l\'on est connecté et sous quelle identité',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Identifiant de navigateur aléatoire qui rattache les événements du pixel d\'un site à un navigateur',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Afficher les produits consultés récemment dans le widget correspondant',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Attribution du comportement sur le site à un profil',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Attribution de l\'origine d\'une visite (référent, attribution)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Attribution d\'un visiteur à un contact du compte Brevo au moyen de l\'adresse e-mail',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Attribution de transactions telles que les leads et les ventes à un éditeur',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Attribution des actions sur le site à des annonces vues précédemment',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Regroupement de plusieurs pages vues en une seule session',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Données complémentaires relatives aux événements enregistrés du parcours de visite',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Attribution et maintien d\'une variante sur plusieurs visites',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Mémoire tampon pour les événements définis par des sélecteurs CSS',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Mémoire tampon pour les données du messenger et du visiteur dans le stockage du navigateur',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Mémoire tampon pour les entrées du Tag Manager',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Mémoire tampon pour la mesure de la profondeur de défilement',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Mémoire tampon pour les variables du Tag Manager',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Mémoire tampon pour les paramètres du widget, afin d\'éviter des requêtes répétées au serveur',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Mise en mémoire tampon des données du messenger et du visiteur dans le navigateur',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Compte les sessions créées pour un visiteur (comptes à partir du 14/06/2026)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Compte le nombre de fois où le navigateur a été fermé puis rouvert pendant la mesure (comptes antérieurs au 14/06/2026)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Comptage des pages vues et des visites',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'analyses automatisées du comportement des utilisateurs',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'attribution géographique approximative au pays, à la région et à la ville',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'en option, enregistrement de la session (Session Replay), par défaut avec les textes, les images et les saisies masqués',
    'optional Heatmaps und A/B-Tests'
        => 'en option, cartes de chaleur et tests A/B',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Transmet la source de référence lors des tests Split URL (comptes à partir du 14/06/2026)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Transmet la source de référence lors des tests Split URL (comptes antérieurs au 14/06/2026)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Attribution de transactions telles que les leads et les ventes à un éditeur, Mesure de la performance d\'un support publicitaire et décompte de la commission',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Collecte des visiteurs et des pages vues sur le site à des fins d\'automatisation du marketing, Attribution d\'un visiteur à un contact du compte Brevo au moyen de l\'adresse e-mail, Collecte d\'événements personnalisés définis par l\'exploitant',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Afficher le calendrier de réservation et prendre rendez-vous sur le site, Reconnaissance du visiteur au cours du processus de réservation, Traitement des paiements lorsque le rendez-vous est payant',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Détection et rejet des accès automatisés sur les formulaires, Émission d\'un jeton que le serveur du site vérifie, En mode Pre-Clearance : autorisation pour les autres vérifications WAF de la même zone',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Mesure des pages vues et des visites, Mesure du temps de chargement et des indicateurs clés de la page (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Diffusion de publicité personnalisée, Mesure de l\'efficacité publicitaire, Reconnaissance du navigateur au moyen de l\'identifiant Criteo',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Mesure du comportement d\'utilisation sur le site, Constitution de profils d\'utilisation pseudonymisés après consentement, Reconnaissance d\'un navigateur lors de visites ultérieures, après consentement',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Mesure des pages vues et du comportement d\'utilisation, Mesure de la profondeur de défilement et des événements de clic, Reconnaissance des utilisateurs après consentement, Gestion de l\'opposition à la mesure',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Distinction entre humain et bot dans les formulaires et les connexions, Protection contre les requêtes automatisées (spam, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Mesure des conversions, Remarketing et constitution d\'audiences, Limitation de la fréquence d\'affichage, Détection de la fraude au clic',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Diffusion d\'annonces, Limitation de la fréquence d\'affichage, Détection de la fraude et des abus, Mesure des diffusions et des clics',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Distinction des différents utilisateurs, Maintien de l\'état de la session, Mesure d\'audience et d\'utilisation',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Afficher une carte interactive, Mesure de la disponibilité du service par Google',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Analyse de risque visant à distinguer un être humain d\'un bot, Protection des formulaires contre les usages abusifs automatisés',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Diffusion et gestion de balises sur le site, Distribution des signaux de consentement aux tags Google',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Distinction entre humain et bot dans les formulaires et les connexions, Répartition de charge et routage des requêtes de challenge, Mise à disposition de l\'accès d\'accessibilité',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Cartes de chaleur, Enregistrement de la session, Sondages',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Reconnaissance des visiteurs au fil de plusieurs visites, Mesure des sessions et attribution de la source de la visite, Déduplication des contacts, Fonctionnement du widget de chat, Diffusion cohérente des variantes des tests A/B',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Chat en direct et boîte de réception d\'assistance sur le site, Reconnaissance des visiteurs récurrents et attribution des conversations antérieures, Reconnaissance de l\'appareil aux fins de prévention des abus, Mise en mémoire tampon des données du messenger et du visiteur dans le navigateur',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Affichage de mentions de financement et de paiement en plusieurs fois sur les pages produit et panier (On-site Messaging), Diffusion des contenus de l\'avis dans des emplacements préparés dans le code source de la page via un serveur publicitaire',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Reconnaissance et identification des visiteurs du site, Attribution du comportement sur le site à un profil, Pilotage de l\'affichage des formulaires d\'inscription sur le site',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Suivi des conversions des campagnes publicitaires LinkedIn, Retargeting des visiteurs du site, Analyse de l\'audience du site (données démographiques du site)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Reconnaissance des visiteurs de sites associés à des fins de retargeting, Pilotage des formulaires pop-up afin qu\'ils n\'apparaissent pas de manière répétée, Mesure des ouvertures et des clics dans les campagnes par e-mail, Intégration de pixels publicitaires de Google et Facebook sur le site connecté',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Affichage de cartes interactives sur le site, Chargement des tuiles de carte, des polices et des styles depuis le fournisseur, Facturation et sécurisation des appels cartographiques',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Mesure des pages vues, des visites et des sessions, Reconnaissance des visiteurs récurrents au moyen d\'un identifiant de visiteur, Attribution de l\'origine d\'une visite (référent, attribution), en option, cartes de chaleur et tests A/B',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Mesure des pages vues, des visites et des sessions sur son propre serveur, Reconnaissance des visiteurs récurrents au moyen d\'un identifiant de visiteur, Attribution de l\'origine d\'une visite (référent, attribution), en option, cartes de chaleur et tests A/B',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Diffusion et déclenchement de balises sur le site, Gestion de la décision de consentement pour les tags configurés dans le conteneur',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Mesure des campagnes publicitaires et des conversions sur le site, Constitution d\'audiences et retargeting',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Suivi des conversions des campagnes Microsoft Advertising, Constitution de listes de remarketing, Mesure des pages vues et des événements personnalisés',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Enregistrement et relecture des sessions, Cartes de chaleur des clics et du comportement de défilement, Regroupement de plusieurs pages vues en une seule session, analyses automatisées du comportement des utilisateurs',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Traitement d\'un paiement initié par le visiteur, Intégration des champs de carte bancaire dans son propre tunnel de paiement, afin que les données de carte ne transitent pas par la boutique, Prévention de la fraude et obligations légales en tant que prestataire de services de paiement',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Enregistrement des mouvements de la souris, Relecture de session, Analyse du comportement d\'utilisation',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Fourniture de tuiles cartographiques aux cartes intégrées, Fonctionnement et prévention des abus des services cartographiques',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Traitement des paiements, Prévention de la fraude',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Suivi des conversions des campagnes publicitaires Pinterest, Constitution d\'audiences et retargeting, Attribution des actions sur le site à des annonces vues précédemment',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Mesure des pages vues et des événements, Reconnaissance des visiteurs et attribution à des sessions, Analyse de la provenance et des campagnes, Analyse de l\'appareil, du navigateur et de la localisation estimée, Analyse de l\'e-commerce et des objectifs',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Comptage des pages vues et des visites, Analyse des sources de référence, Analyse du navigateur, du système d\'exploitation et du type d\'appareil, attribution géographique approximative au pays, à la région et à la ville',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Collecte et transmission des erreurs applicatives depuis le navigateur, en option, enregistrement de la session (Session Replay), par défaut avec les textes, les images et les saisies masqués',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Fonctionnement du panier et du processus de paiement d\'une boutique, Attribution de la session et de la langue ou du pays, Mesure d\'audience pour l\'exploitant de la boutique, Données marketing pour les interfaces d\'achat',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Intégration et lecture de titres, d\'albums, de playlists et d\'épisodes de podcast, Collecte d\'informations sur le comportement de navigation de ces utilisateurs par Spotify et par des tiers, Permettre à des tiers de déposer des cookies dans le navigateur de ces utilisateurs',
    'Besucherzählung, Reichweitenmessung'
        => 'Comptage des visiteurs, Mesure d\'audience',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Détection de la fraude et évaluation du risque des tentatives de paiement, Mise à disposition des champs de paiement de Stripe Elements, Détection des bots et des comportements automatisés lors du processus de commande',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Mesure et amélioration de la performance des campagnes publicitaires, Personnalisation de la publicité sur TikTok, Transmission des événements du site à TikTok',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Intégration de formulaires et de sondages dans le site, Collecte et transmission des réponses à l\'exploitant du formulaire',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Intégration et lecture de vidéos sur le site, Mémorisation des paramètres du lecteur choisis par le spectateur (volume, qualité, sous-titres), Mesure d\'audience des vidéos intégrées par Vimeo, Protection du lecteur contre les bots et les abus',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Tests A/B et tests Split-URL sur le site, Attribution et maintien d\'une variante sur plusieurs visites, Mesure des objectifs et des conversions d\'une campagne, Mesure des visiteurs et des sessions à des fins d\'analyse, Gestion de l\'opposition et du consentement pour la mesure',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Attribuer le panier à une visiteuse, Détecter si le contenu du panier a changé, Afficher les produits consultés récemment dans le widget correspondant, Mémoriser le masquage de l\'avis de la boutique',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Connexion et reconnaissance de session dans la zone d\'administration, Conserver les données du commentaire pour les commentaires suivants, Mémoriser les préférences d\'affichage de la zone d\'administration, Vérifier si WordPress peut déposer des cookies, Enregistrer la langue sélectionnée',
    'Conversion-Messung, Retargeting'
        => 'Mesure des conversions, Retargeting',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Lecture de vidéos intégrées, Sécurité, Reconnaissance du spectateur à des fins publicitaires',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Chat en direct et canal de messagerie pour l\'assistance sur le site, Reconnaissance du visiteur entre les pages vues et les onglets, Mémorisation de l\'état et des paramètres du widget, Mesure des sessions et des événements sur les pages comportant le widget',
];
