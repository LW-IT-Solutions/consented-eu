<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Spanisch.
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
        => 'Pruebas A/B y pruebas Split-URL en el sitio web',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Facturación y protección de las llamadas al mapa',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Finalización del inicio de sesión con Shop; necesario',
    'Abspielen eingebetteter Videos'
        => 'Reproducción de vídeos incrustados',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Tramitación de un pago iniciado por el visitante',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Tramitación de pagos cuando la cita es de pago',
    'Analyse des Nutzungsverhaltens'
        => 'Análisis del comportamiento de uso',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Datos analíticos de las interfaces de compra; análisis',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Datos analíticos de la tienda; clasificado por el proveedor como análisis',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Datos de inicio de sesión para el área de administración en /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Inicio de sesión en Shop Pay; necesario',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Inicio de sesión y reconocimiento de sesión en el área de administración',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Estadística anónima relativa al servicio y otras finalidades técnicas, entre ellas el soporte de la accesibilidad',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Ajustes de visualización del área de administración por cuenta',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Recordar los ajustes de visualización del área de administración',
    'Anzeige von Bewertungen'
        => 'Visualización de valoraciones',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Mostrar el calendario de reservas y concertar citas en el sitio web',
    'Anzeigen einer interaktiven Karte'
        => 'Mostrar un mapa interactivo',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'Si se establece en el valor 1, impide el envío de eventos UET a Microsoft',
    'Aufbau von Remarketing-Listen'
        => 'Creación de listas de remarketing',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Grabación y reproducción de sesiones',
    'Aufzeichnung von Mausbewegungen'
        => 'Grabación de los movimientos del ratón',
    'Ausblenden des Shop-Hinweises merken'
        => 'Recordar que se ha ocultado el aviso de la tienda',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Entrega y activación de etiquetas en el sitio web',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Entrega y gestión de etiquetas en el sitio web',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Entrega de teselas de mapa a mapas incrustados',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Entrega de los contenidos del aviso en marcadores de posición preparados en el código fuente de la página a través de un servidor de anuncios',
    'Auslieferung personalisierter Werbung'
        => 'Publicación de publicidad personalizada',
    'Auslieferung von Anzeigen'
        => 'Publicación de anuncios',
    'Auslieferung von Bibliotheken und Assets'
        => 'Entrega de bibliotecas y recursos',
    'Auslieferung von Schriftarten'
        => 'Entrega de fuentes tipográficas',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Emisión de un token que el servidor del sitio web verifica',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Control de la presentación de formularios de registro en el sitio web',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Control de los formularios emergentes para que no aparezcan repetidamente',
    'Auswahl des Rechenzentrums'
        => 'Selección del centro de datos',
    'Auswertung der Verweisquellen'
        => 'Análisis de las fuentes de referencia',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Análisis del público del sitio web (demografía del sitio web)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Análisis de navegador, sistema operativo y tipo de dispositivo',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Análisis del dispositivo, el navegador y la ubicación estimada',
    'Auswertung von Herkunft und Kampagnen'
        => 'Análisis del origen y de las campañas',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Autentica las solicitudes del usuario final',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Limitación de la frecuencia de aparición',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Acredita una comprobación superada, de modo que no se apliquen más desafíos de la zona',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Provisión de los campos de pago de Stripe Elements',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Provisión del acceso de accesibilidad',
    'Besucherzählung'
        => 'Recuento de visitantes',
    'Betrieb des Chat-Widgets'
        => 'Funcionamiento del widget de chat',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Funcionamiento y prevención del uso indebido de los servicios de mapas',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Funcionamiento del carrito y del proceso de pago de una tienda',
    'Betrugs- und Missbrauchserkennung'
        => 'Detección de fraude y de uso indebido',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Detección de fraude en el intento de pago',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Detección de fraude y evaluación del riesgo de los intentos de pago',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Prevención del fraude y obligaciones legales como proveedor de servicios de pago',
    'Betrugsprävention'
        => 'Prevención del fraude',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Prevención del fraude y evaluación del riesgo de un intento de pago',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Creación de perfiles de uso seudonimizados previo consentimiento',
    'Bildung von Zielgruppen und Retargeting'
        => 'Creación de audiencias y retargeting',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Vincula la sesión a la misma instancia de AWS',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Defensa contra bots y usos indebidos del reproductor',
    'Bot-Abwehr fuer den Player'
        => 'Defensa contra bots del reproductor',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Protección contra bots en la entrega de los recursos de HubSpot',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Identificador del navegador con el que LinkedIn distingue dispositivos y detecta usos indebidos',
    'Cloudflare-Bot-Abwehr'
        => 'Defensa contra bots de Cloudflare',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Detección de bots de Cloudflare para el filtrado del tráfico',
    'Cloudflare-Ratenbegrenzung'
        => 'Limitación de velocidad de Cloudflare',
    'Conversion-Messung'
        => 'Medición de conversiones',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Seguimiento de conversiones de las campañas publicitarias de LinkedIn',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Seguimiento de conversiones de las campañas de Microsoft Advertising',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Seguimiento de conversiones de las campañas publicitarias de Pinterest',
    'Darstellung interaktiver Karten auf der Website'
        => 'Representación de mapas interactivos en el sitio web',
    'Deduplizieren von Kontakten'
        => 'Deduplicación de contactos',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Sirve para la publicación y la medición de publicidad.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'ID de visitante entre dominios; según el proveedor, cookie de terceros, utilizada solo si las cookies de terceros están activadas en el archivo de configuración',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Identificador de terceros para el reconocimiento de visitantes',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Identificador de terceros que se transmite a Klaviyo',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Identificador publicitario de terceros para la medición de campañas y la personalización en TikTok',
    'E-Commerce- und Zielauswertung'
        => 'Análisis de comercio electrónico y de objetivos',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Rellenar previamente la dirección de correo electrónico del formulario de comentarios',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Incrustar y reproducir canciones, álbumes, listas de reproducción y episodios de pódcast',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Incrustar y reproducir vídeos en el sitio web',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Incrustar formularios y encuestas en el sitio web',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Incrustación de los campos de la tarjeta en el propio checkout para que los datos de la tarjeta no pasen por la tienda',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Incrustación de una declaración de cookies mantenida externamente',
    'Einbettung von Audioinhalten'
        => 'Incrustación de contenidos de audio',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Integración de píxeles publicitarios de Google y Facebook en el sitio web vinculado',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Presentación de avisos de financiación y pago a plazos en las páginas de producto y de carrito (On-site Messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Identificador único en la medición entre dominios (cuentas a partir del 14/06/2026)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Identificador único en la medición entre dominios (cuentas anteriores al 14/06/2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Valor de un solo uso contra CSRF en el formulario de opt-out',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Contiene un identificador de usuario y el momento de creación; según la fuente, se establece en el navegador integrado de Pinterest, no en el dominio del sitio web',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Registro y transmisión de las respuestas al operador del formulario',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Registra el uso del sitio web con fines de análisis.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Registro de eventos propios definidos por el operador',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Registro y transmisión de errores de la aplicación desde el navegador',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Registro de visitantes y páginas vistas en el sitio web para la automatización de marketing',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Medición del rendimiento de un soporte publicitario y liquidación de la comisión',
    'Erhalt des Sitzungszustands'
        => 'Mantenimiento del estado de la sesión',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Reconocimiento del dispositivo para la prevención de usos indebidos',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Detección y rechazo de accesos automatizados en los formularios',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Detección de bots y de comportamiento automatizado en el proceso de pedido',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Detectar si el contenido del carrito ha cambiado',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Detecta cambios en el contenido del carrito',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Reconoce a los visitantes del sitio web en el que está integrado el código de Intercom',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Vuelve a reconocer navegadores en los sitios web de Microsoft; según el proveedor, se utiliza también para publicidad, cookie de terceros',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Reconoce a las personas que escriben a través de la herramienta de chat',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Reconoce el dispositivo desde el que se inicia la conversación',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Reconoce el dispositivo concreto que interactúa con el messenger, para la prevención de usos indebidos',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Reconoce al usuario final que inicia la conversación',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Reconoce el dominio o subdominio en el que está integrado el widget de chat',
    'Erkennt wiederkehrende Besucher'
        => 'Reconoce a los visitantes recurrentes',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Detecta si el navegador se ha reiniciado',
    'Erkennung von Klickbetrug'
        => 'Detección del fraude de clics',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Determina los accesos únicos al sitio web (cuentas a partir del 14/06/2026)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Determina los accesos únicos al sitio web (cuentas anteriores al 14/06/2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Permitir que terceros establezcan cookies en el navegador de estos usuarios',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Permite el uso del acceso de accesibilidad',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Permite funciones adicionales del sitio web.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Identificador propio que reconoce a los visitantes y asigna los eventos al sitio web',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Identificador propio de visitante para el seguimiento de conversiones y el remarketing',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Identificador propio de sesión para la asignación de eventos',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Identificador propio de sesión por píxel para la medición de campañas',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Identificador propio de sesión para la medición de campañas',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Identificador publicitario propio para la medición de campañas y la personalización en TikTok',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Cookie propia que agrupa acciones de visitantes que Pinterest no puede asignar',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Cookie propia que almacena los datos de cliente con hash recogidos mediante Automatic Enhanced Match',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Genera un identificador único para cada visitante (cuentas a partir del 14/06/2026)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Genera un identificador único para cada visitante (cuentas anteriores al 14/06/2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identificador de dispositivo para el análisis de eventos en páginas con widget',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Se establece al iniciar sesión en una página alojada por HubSpot',
    'Gewaehlte Sprache speichern'
        => 'Almacenar el idioma seleccionado',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Sincroniza el identificador MUID entre los dominios de Microsoft; según el proveedor, cookie de terceros',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Mantiene los mensajes sincronizados entre varias pestañas',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Conserva el valor del parámetro pk_campaign',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Conserva el valor del parámetro utm_campaign',
    'Haelt den Widerspruch gegen die Messung'
        => 'Conserva la oposición a la medición',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Conserva el tiempo de expiración de _uetsid',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Conserva el tiempo de expiración de _uetvid',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Conserva el tipo de fuente de tráfico para el Tag Manager',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Registra la identidad del visitante, también para la deduplicación de contactos',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Registra la decisión del visitante sobre las cookies',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Mantiene coherente la presentación del widget al cambiar de página',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Registra la página de entrada; análisis',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Conserva el consentimiento para la medición con cookies',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Conserva la decisión del usuario sobre categorías y proveedores',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Conserva la sesión de los usuarios que han iniciado sesión y el acceso a conversaciones anteriores',
    'Haelt die verweisende Adresse'
        => 'Conserva la dirección de referencia',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Registra la fuente de referencia; análisis',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Conserva variables propias de la sesión (marcado como obsoleto por el proveedor)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Registra si etracker puede establecer cookies; se establece mediante una llamada a la API cuando se usa data-block-cookies',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Registra qué interruptores de función ha activado el propietario del vídeo',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Cookie principal para el reconocimiento de visitantes',
    'Heatmaps'
        => 'Mapas de calor',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Mapas de calor de clics y de comportamiento de desplazamiento',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Conserva los datos de sesión del mapa de calor mientras dura la visita',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Conserva información sobre la sesión en curso (cuentas a partir del 14/06/2026)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Conserva información sobre la sesión en curso (cuentas anteriores al 14/06/2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Conserva variables personalizadas mientras dura la visita',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Conserva datos permanentes a nivel de visitante (cuentas a partir del 14/06/2026)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Conserva datos permanentes a nivel de visitante para el análisis de Insights (cuentas anteriores al 14/06/2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Registra el estado del consentimiento del visitante (cuentas a partir del 14/06/2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Registra el estado del consentimiento del visitante (cuentas anteriores al 14/06/2026)',
    'Hält den Sitzungszustand.'
        => 'Conserva el estado de la sesión.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Conserva el identificador de usuario de Clarity y los ajustes para este sitio web',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Conserva la asignación de variante para las pruebas A/B',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Registra temporalmente la combinación seleccionada (cuentas a partir del 14/06/2026)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Registra temporalmente la combinación seleccionada (cuentas anteriores al 14/06/2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Registra la variante seleccionada antes de que se produzca la redirección (cuentas a partir del 14/06/2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Registra la variante seleccionada antes de que se produzca la redirección (cuentas anteriores al 14/06/2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Registra a través de qué enlace de referencia se produjo la visita',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'En el modo Pre-Clearance: autorización para otras comprobaciones WAF de la misma zona',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Identificador indirecto de miembro para el seguimiento de conversiones, el retargeting y el análisis',
    'Inhalt des Warenkorbs; notwendig'
        => 'Contenido del carrito de la compra; necesario',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Datos analíticos relativos al comprador en la tienda; análisis',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Identificador único vinculado a la campaña (cuentas a partir del 14/06/2026)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Identificador del primer contacto con Clarity en todos los sitios web con Clarity; según el proveedor, cookie de terceros',
    'Kennzeichnet die laufende Sitzung'
        => 'Identifica la sesión en curso',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Conservar los datos del comentario para comentarios posteriores',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Entrega coherente de las variantes de las pruebas A/B',
    'Lastverteilung und Routing'
        => 'Reparto de carga y enrutamiento',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Distribución de carga y enrutamiento de las solicitudes de challenge',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Almacena localmente la configuración de la cuenta del visitante',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Entrega la misma variante de una página con prueba A/B',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Chat en directo y canal de mensajería para la asistencia en el sitio web',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Chat en directo y buzón de asistencia en el sitio web',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Datos de marketing de las interfaces de compra; marketing',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Datos de marketing para las interfaces de compra',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Memorización de los ajustes del reproductor elegidos por el espectador (volumen, calidad, subtítulos)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Memorización del estado y de los ajustes del widget',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Recuerda el cierre del banner de Global Privacy Control',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Recuerda el cierre del banner de aviso',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Recuerda el momento de la sincronización con la cookie lms_analytics',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Recuerda el momento de la última sincronización de identificadores para que no se repita',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Recuerda la variante asignada (cuentas a partir del 14/06/2026)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Recuerda la variante asignada para que se mantenga igual en una nueva visita (cuentas anteriores al 14/06/2026)',
    'Merkt einen Rabattcode; notwendig'
        => 'Recuerda un código de descuento; necesario',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Recuerda una oposición a la medición (cuentas a partir del 14/06/2026)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Recuerda una oposición válida para varios sitios web (cuentas anteriores al 14/06/2026)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Recuerda los ajustes del reproductor como el volumen, la calidad y los subtítulos',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Recuerda el ajuste de las notificaciones sonoras',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Recuerda un consentimiento otorgado para la medición',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Recuerda una oposición a la medición',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Recuerda los mensajes proactivos que se han cerrado',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Recuerda que el visitante ha cerrado la etiqueta del botón de inicio',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Recuerda si el widget está abierto o cerrado',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Recuerda que el visitante no debe participar en ninguna campaña (cuentas anteriores al 14/06/2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Recuerda que el visitante está excluido de la campaña (cuentas a partir del 14/06/2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Recuerda que el visitante está excluido de la campaña (cuentas anteriores al 14/06/2026)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Recuerda que se ha cerrado el aviso de consentimiento',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Recuerda que se ha cerrado el aviso de la tienda',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Recuerda que la pregunta sobre las cookies no debe volver a plantearse',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Recuerda que un tag ya se ha activado',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Recuerda si en este visitante se mide la profundidad de desplazamiento',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Recuerda si la ventana de chat está abierta',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Recuerda si el identificador MUID se transfiere a un identificador publicitario; según el proveedor, siempre 0, cookie de terceros',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Medición de aperturas y clics en las campañas de correo electrónico',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Medición de sesiones y eventos en las páginas con widget',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Medición de sesiones y atribución de la fuente de la visita',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Medición de la disponibilidad del servicio por parte de Google',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Medición del tiempo de carga y de los indicadores principales de la página (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Medición de la profundidad de desplazamiento y de los eventos de clic',
    'Messung der Werbewirkung'
        => 'Medición de la eficacia publicitaria',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Medición del comportamiento de uso en el sitio web',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Medición y personalización de anuncios en la red publicitaria TikTok Pangle',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Medición y mejora del rendimiento de las campañas publicitarias',
    'Messung von Auslieferungen und Klicks'
        => 'Medición de las entregas y de los clics',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Medición de visitantes y sesiones con fines de análisis',
    'Messung von Conversions'
        => 'Medición de conversiones',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Medición de páginas vistas y visitas',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Medición de páginas vistas y eventos',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Medición de páginas vistas y del comportamiento de uso',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Medición de páginas vistas y de eventos personalizados',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Medición de páginas vistas, visitas y sesiones',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Medición de páginas vistas, visitas y sesiones en el servidor propio',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Medición de campañas publicitarias y conversiones en el sitio web',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Medición de objetivos y conversiones de una campaña',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Carga de teselas de mapa, fuentes y estilos desde el proveedor',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Rellenar previamente el nombre a partir del formulario de comentarios',
    'Nutzer-ID'
        => 'ID de usuario',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Asigna el carrito de la compra al país correcto; necesario',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Asigna el carrito de la compra a la clienta correcta en la base de datos',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Asigna las acciones de una visita a una sesión',
    'Personalisierung der Werbung auf TikTok'
        => 'Personalización de la publicidad en TikTok',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Comprobar si WordPress puede instalar cookies',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Comprueba si el navegador admite cookies; necesario',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Comprueba si WordPress puede instalar cookies',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Valor de verificación de la contraseña de la tienda; necesario',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Cookie de comprobación del proveedor (cuentas anteriores al 14/06/2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Comprueba si el navegador acepta cookies (cuentas a partir del 14/06/2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Comprueba si el navegador acepta cookies (cuentas anteriores al 14/06/2026)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Comprueba si el navegador acepta cookies (según el proveedor, solo en Internet Explorer)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Limitación de velocidad en el proveedor de CDN de HubSpot',
    'Reichweiten- und Nutzungsmessung'
        => 'Medición de alcance y de uso',
    'Reichweitenmessung'
        => 'Medición de alcance',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Medición de alcance de los vídeos insertados por parte de Vimeo',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Medición de alcance para el titular de la tienda',
    'Remarketing und Zielgruppenbildung'
        => 'Remarketing y creación de públicos objetivo',
    'Retargeting'
        => 'Retargeting',
    'Retargeting von Website-Besuchern'
        => 'Retargeting de los visitantes del sitio web',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Análisis de riesgo para distinguir entre persona y bot',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Cookie colectiva que, según el proveedor, solo se crea en el navegador Safari (cuentas a partir del 14/06/2026)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Cookie colectiva que, según el proveedor, solo se crea en el navegador Safari (cuentas anteriores al 14/06/2026)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Recopilación de información sobre el comportamiento de navegación de estos usuarios por parte de Spotify y de terceros',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Interruptor que el titular del sitio web establece por sí mismo para impedir el seguimiento de Klaviyo',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Protección del inicio de sesión de los miembros frente a falsificación',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Protección de los formularios frente al uso indebido automatizado',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Protección frente a solicitudes automatizadas (spam, credential stuffing)',
    'Sicherheit'
        => 'Seguridad',
    'Sicherheitsfunktionen'
        => 'Funciones de seguridad',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Funciones de seguridad cuando la función opcional User Journeys está activa',
    'Sitzung'
        => 'Sesión',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Asignación de la sesión y del idioma o del país',
    'Sitzungsaufzeichnung'
        => 'Grabación de la sesión',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identificador de sesión para el análisis de eventos en las páginas con widget',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Identificador de sesión para la estadística de la tienda; análisis',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Clave de sesión del servicio Answer Bot',
    'Sitzungswiedergabe'
        => 'Reproducción de la sesión',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Almacena el token de autenticación tras el inicio de sesión',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Almacena la contraseña codificada de los vídeos protegidos por contraseña',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Almacena la clave del idioma seleccionado',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Almacena la preferencia de privacidad del visitante; necesario',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Almacena la decisión de consentimiento del visitante',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Almacena el identificador del dispositivo del visitante para la autenticación en el widget de chat',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Almacena el identificador de un usuario inscrito en un webinar',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Almacena el identificador de clic fbclid para poder atribuir un evento del sitio web a un anuncio',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Almacena el identificador de usuario procedente de un formulario de registro previo al vídeo',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Almacena el identificador de clic de TikTok para la atribución de conversiones',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Almacena el ID único de visitante para su reconocimiento',
    'Speichert die zugestimmten Kategorien'
        => 'Almacena las categorías aceptadas',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Alimenta el widget de los productos vistos recientemente',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Controla si el identificador MUID se renueva; según el proveedor, cookie de terceros',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Técnicamente necesario para el funcionamiento y la seguridad del sitio web.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Contiene los datos de sesión y del proceso de compra de la tienda; el proveedor la clasifica como necesaria',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Contiene la función de oposición (opt-out)',
    'Transaktionssicherheit'
        => 'Seguridad de las transacciones',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Contiene el análisis de riesgo de reCAPTCHA.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Transmisión de eventos del sitio web a TikTok',
    'Umfragen'
        => 'Encuestas',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Impide la transmisión de datos a HubSpot',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Suprime el mensaje de bienvenida del chat después de cerrarlo',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Distingue los navegadores que acceden a páginas de Microsoft; con consentimiento, también para publicidad',
    'Unterscheidet einzelne Nutzer.'
        => 'Distingue a los distintos usuarios.',
    'Unterscheidung einzelner Nutzer'
        => 'Distinción de los distintos usuarios',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Distinción entre persona y bot en formularios e inicios de sesión',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Une varias páginas vistas en una grabación de sesión',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Evita que el banner se muestre continuamente en el modo estricto',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Distribución de las señales de consentimiento a los tags de Google',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Gestión de la decisión de consentimiento para los tags configurados en el contenedor',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Gestión de la oposición a la medición',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Gestión de la oposición y del consentimiento para la medición',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Asignado por Google a las categorías Análisis y Publicidad.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Asignado por Google a las categorías Análisis, Publicidad y Seguridad.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Asignado por Google a las categorías Funcionalidad, Publicidad y Seguridad.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Asignado por Google a las categorías Seguridad y Funcionalidad.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Asignado por Google a las categorías Seguridad y Publicidad.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Asignado por Google a las categorías Seguridad, Análisis, Funcionalidad y Publicidad.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Asignado por Google a las categorías Seguridad, Funcionalidad y Publicidad.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Asignado por Google a las categorías Publicidad y Seguridad.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Asignado por Google a la categoría Análisis; Google no indica una finalidad más precisa.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Asignado por Google a la categoría Funcionalidad.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Asignado por Google a la categoría Seguridad.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Asignado por Google a la categoría Publicidad.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Mencionada por Microsoft como una de las cookies que no pueden instalarse sin consentimiento; Microsoft no indica una descripción propia de la finalidad',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Identificador generado por Vimeo para la medición de alcance',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Moneda del carrito de la compra tras finalizar el proceso de compra; necesario',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Atribución probabilística de un navegador a una persona',
    'Warenkorb einer Besucherin zuordnen'
        => 'Asignar el carrito de la compra a una visitante',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Rellenar previamente la dirección web a partir del formulario de comentarios',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Reconocimiento del espectador con fines publicitarios',
    'Werbepersonalisierung'
        => 'Personalización de la publicidad',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Como _pin_unauth, pero como cookie de terceros',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Reconocimiento del visitante dentro del proceso de reserva',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Reconocimiento del visitante entre páginas vistas y pestañas',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Reconocimiento e identificación de los visitantes del sitio web',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Reconocimiento de los visitantes a lo largo de varias visitas',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Reconocimiento de los visitantes de sitios web asociados para el retargeting',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Reconocimiento de los visitantes recurrentes y atribución de las conversaciones anteriores',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Reconocimiento del visitante y almacenamiento de sus características',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Reconocimiento del navegador mediante el identificador de Criteo',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Reconocimiento del usuario; solo con consentimiento, bloqueado de forma predeterminada',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Reconocimiento de un navegador en visitas posteriores previo consentimiento',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Reconocimiento de los visitantes y atribución a sesiones',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'Reconocimiento de los miembros de LinkedIn fuera de LinkedIn con fines publicitarios',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Reconocimiento de los usuarios previo consentimiento',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Reconocimiento de visitantes recurrentes mediante un ID de visitante',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Se instala cuando se ha activado un objetivo de campaña (cuentas a partir del 14/06/2026)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Se instala cuando se ha activado un objetivo de campaña (cuentas anteriores al 14/06/2026)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Se instala cuando una persona visita un sitio web con el tag de Pinterest integrado',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Se instala cuando la atribución se logra sin cookies existentes, por ejemplo mediante Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'La instala el tag de JavaScript a partir de los datos que Pinterest transmite con el tráfico procedente de la publicidad',
    'Zaehlt und begrenzt Sitzungen'
        => 'Cuenta y limita las sesiones',
    'Zahlungsabwicklung'
        => 'Tramitación de pagos',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Indica si la sesión sigue en curso o es nueva',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Indica a la interfaz que se ha iniciado sesión y con qué identidad',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Identificador aleatorio del navegador que atribuye los eventos del píxel de un sitio web a un navegador',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Mostrar los productos vistos recientemente en el widget correspondiente',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Atribución del comportamiento en el sitio web a un perfil',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Asignación del origen de una visita (referente, atribución)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Atribución de un visitante a un contacto de la cuenta de Brevo mediante la dirección de correo electrónico',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Atribución de transacciones como leads y ventas a un publisher',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Atribución de las acciones en el sitio web a anuncios vistos previamente',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Agrupación de varias páginas vistas en una sesión',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Datos adicionales sobre los eventos registrados del recorrido de la visita',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Asignación y mantenimiento de una variante a lo largo de varias visitas',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Memoria intermedia para los eventos basados en selectores CSS',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Memoria intermedia para los datos del messenger y del visitante en el almacenamiento del navegador',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Memoria intermedia para las entradas de Tag Manager',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Memoria intermedia para la medición de la profundidad de desplazamiento',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Memoria intermedia para las variables de Tag Manager',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Memoria intermedia para los ajustes del widget, con el fin de evitar solicitudes repetidas al servidor',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Almacenamiento temporal de los datos del messenger y del visitante en el navegador',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Cuenta las sesiones creadas para un visitante (cuentas a partir del 14/06/2026)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Cuenta cuántas veces se ha cerrado y vuelto a abrir el navegador durante la medición (cuentas anteriores al 14/06/2026)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Recuento de páginas vistas y visitas',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'análisis automatizados del comportamiento de los usuarios',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'asignación geográfica aproximada a país, región y ciudad',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'opcionalmente, grabación de la sesión (Session Replay), de forma predeterminada con los textos, las imágenes y las entradas enmascarados',
    'optional Heatmaps und A/B-Tests'
        => 'opcionalmente mapas de calor y pruebas A/B',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Transfiere la fuente de referencia en las pruebas Split URL (cuentas a partir del 14/06/2026)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Transfiere la fuente de referencia en las pruebas Split URL (cuentas anteriores al 14/06/2026)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Atribución de transacciones como leads y ventas a un publisher, Medición del rendimiento de un soporte publicitario y liquidación de la comisión',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Registro de visitantes y páginas vistas en el sitio web para la automatización de marketing, Atribución de un visitante a un contacto de la cuenta de Brevo mediante la dirección de correo electrónico, Registro de eventos propios definidos por el operador',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Mostrar el calendario de reservas y concertar citas en el sitio web, Reconocimiento del visitante dentro del proceso de reserva, Tramitación de pagos cuando la cita es de pago',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Detección y rechazo de accesos automatizados en los formularios, Emisión de un token que el servidor del sitio web verifica, En el modo Pre-Clearance: autorización para otras comprobaciones WAF de la misma zona',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Medición de páginas vistas y visitas, Medición del tiempo de carga y de los indicadores principales de la página (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Publicación de publicidad personalizada, Medición de la eficacia publicitaria, Reconocimiento del navegador mediante el identificador de Criteo',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Medición del comportamiento de uso en el sitio web, Creación de perfiles de uso seudonimizados previo consentimiento, Reconocimiento de un navegador en visitas posteriores previo consentimiento',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Medición de páginas vistas y del comportamiento de uso, Medición de la profundidad de desplazamiento y de los eventos de clic, Reconocimiento de los usuarios previo consentimiento, Gestión de la oposición a la medición',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Distinción entre persona y bot en formularios e inicios de sesión, Protección frente a solicitudes automatizadas (spam, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Medición de conversiones, Remarketing y creación de públicos objetivo, Limitación de la frecuencia de aparición, Detección del fraude de clics',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Publicación de anuncios, Limitación de la frecuencia de aparición, Detección de fraude y de uso indebido, Medición de las entregas y de los clics',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Distinción de los distintos usuarios, Mantenimiento del estado de la sesión, Medición de alcance y de uso',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Mostrar un mapa interactivo, Medición de la disponibilidad del servicio por parte de Google',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Análisis de riesgo para distinguir entre persona y bot, Protección de los formularios frente al uso indebido automatizado',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Entrega y gestión de etiquetas en el sitio web, Distribución de las señales de consentimiento a los tags de Google',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Distinción entre persona y bot en formularios e inicios de sesión, Distribución de carga y enrutamiento de las solicitudes de challenge, Provisión del acceso de accesibilidad',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Mapas de calor, Grabación de la sesión, Encuestas',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Reconocimiento de los visitantes a lo largo de varias visitas, Medición de sesiones y atribución de la fuente de la visita, Deduplicación de contactos, Funcionamiento del widget de chat, Entrega coherente de las variantes de las pruebas A/B',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Chat en directo y buzón de asistencia en el sitio web, Reconocimiento de los visitantes recurrentes y atribución de las conversaciones anteriores, Reconocimiento del dispositivo para la prevención de usos indebidos, Almacenamiento temporal de los datos del messenger y del visitante en el navegador',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Presentación de avisos de financiación y pago a plazos en las páginas de producto y de carrito (On-site Messaging), Entrega de los contenidos del aviso en marcadores de posición preparados en el código fuente de la página a través de un servidor de anuncios',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Reconocimiento e identificación de los visitantes del sitio web, Atribución del comportamiento en el sitio web a un perfil, Control de la presentación de formularios de registro en el sitio web',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Seguimiento de conversiones de las campañas publicitarias de LinkedIn, Retargeting de los visitantes del sitio web, Análisis del público del sitio web (demografía del sitio web)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Reconocimiento de los visitantes de sitios web asociados para el retargeting, Control de los formularios emergentes para que no aparezcan repetidamente, Medición de aperturas y clics en las campañas de correo electrónico, Integración de píxeles publicitarios de Google y Facebook en el sitio web vinculado',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Representación de mapas interactivos en el sitio web, Carga de teselas de mapa, fuentes y estilos desde el proveedor, Facturación y protección de las llamadas al mapa',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Medición de páginas vistas, visitas y sesiones, Reconocimiento de visitantes recurrentes mediante un ID de visitante, Asignación del origen de una visita (referente, atribución), opcionalmente mapas de calor y pruebas A/B',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Medición de páginas vistas, visitas y sesiones en el servidor propio, Reconocimiento de visitantes recurrentes mediante un ID de visitante, Asignación del origen de una visita (referente, atribución), opcionalmente mapas de calor y pruebas A/B',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Entrega y activación de etiquetas en el sitio web, Gestión de la decisión de consentimiento para los tags configurados en el contenedor',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Medición de campañas publicitarias y conversiones en el sitio web, Creación de audiencias y retargeting',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Seguimiento de conversiones de las campañas de Microsoft Advertising, Creación de listas de remarketing, Medición de páginas vistas y de eventos personalizados',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Grabación y reproducción de sesiones, Mapas de calor de clics y de comportamiento de desplazamiento, Agrupación de varias páginas vistas en una sesión, análisis automatizados del comportamiento de los usuarios',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Tramitación de un pago iniciado por el visitante, Incrustación de los campos de la tarjeta en el propio checkout para que los datos de la tarjeta no pasen por la tienda, Prevención del fraude y obligaciones legales como proveedor de servicios de pago',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Grabación de los movimientos del ratón, Reproducción de la sesión, Análisis del comportamiento de uso',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Entrega de teselas de mapa a mapas incrustados, Funcionamiento y prevención del uso indebido de los servicios de mapas',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Tramitación de pagos, Prevención del fraude',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Seguimiento de conversiones de las campañas publicitarias de Pinterest, Creación de audiencias y retargeting, Atribución de las acciones en el sitio web a anuncios vistos previamente',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Medición de páginas vistas y eventos, Reconocimiento de los visitantes y atribución a sesiones, Análisis del origen y de las campañas, Análisis del dispositivo, el navegador y la ubicación estimada, Análisis de comercio electrónico y de objetivos',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Recuento de páginas vistas y visitas, Análisis de las fuentes de referencia, Análisis de navegador, sistema operativo y tipo de dispositivo, asignación geográfica aproximada a país, región y ciudad',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Registro y transmisión de errores de la aplicación desde el navegador, opcionalmente, grabación de la sesión (Session Replay), de forma predeterminada con los textos, las imágenes y las entradas enmascarados',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Funcionamiento del carrito y del proceso de pago de una tienda, Asignación de la sesión y del idioma o del país, Medición de alcance para el titular de la tienda, Datos de marketing para las interfaces de compra',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Incrustar y reproducir canciones, álbumes, listas de reproducción y episodios de pódcast, Recopilación de información sobre el comportamiento de navegación de estos usuarios por parte de Spotify y de terceros, Permitir que terceros establezcan cookies en el navegador de estos usuarios',
    'Besucherzählung, Reichweitenmessung'
        => 'Recuento de visitantes, Medición de alcance',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Detección de fraude y evaluación del riesgo de los intentos de pago, Provisión de los campos de pago de Stripe Elements, Detección de bots y de comportamiento automatizado en el proceso de pedido',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Medición y mejora del rendimiento de las campañas publicitarias, Personalización de la publicidad en TikTok, Transmisión de eventos del sitio web a TikTok',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Incrustar formularios y encuestas en el sitio web, Registro y transmisión de las respuestas al operador del formulario',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Incrustar y reproducir vídeos en el sitio web, Memorización de los ajustes del reproductor elegidos por el espectador (volumen, calidad, subtítulos), Medición de alcance de los vídeos insertados por parte de Vimeo, Defensa contra bots y usos indebidos del reproductor',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Pruebas A/B y pruebas Split-URL en el sitio web, Asignación y mantenimiento de una variante a lo largo de varias visitas, Medición de objetivos y conversiones de una campaña, Medición de visitantes y sesiones con fines de análisis, Gestión de la oposición y del consentimiento para la medición',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Asignar el carrito de la compra a una visitante, Detectar si el contenido del carrito ha cambiado, Mostrar los productos vistos recientemente en el widget correspondiente, Recordar que se ha ocultado el aviso de la tienda',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Inicio de sesión y reconocimiento de sesión en el área de administración, Conservar los datos del comentario para comentarios posteriores, Recordar los ajustes de visualización del área de administración, Comprobar si WordPress puede instalar cookies, Almacenar el idioma seleccionado',
    'Conversion-Messung, Retargeting'
        => 'Medición de conversiones, Retargeting',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Reproducción de vídeos incrustados, Seguridad, Reconocimiento del espectador con fines publicitarios',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Chat en directo y canal de mensajería para la asistencia en el sitio web, Reconocimiento del visitante entre páginas vistas y pestañas, Memorización del estado y de los ajustes del widget, Medición de sesiones y eventos en las páginas con widget',
];
