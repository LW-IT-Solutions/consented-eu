<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Portugiesisch.
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
        => 'Testes A/B e testes Split-URL no site',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Faturação e proteção das chamadas ao mapa',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Conclusão do início de sessão com Shop; necessário',
    'Abspielen eingebetteter Videos'
        => 'Reprodução de vídeos incorporados',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Processamento de um pagamento iniciado pelo visitante',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Processamento de pagamentos quando a marcação é paga',
    'Analyse des Nutzungsverhaltens'
        => 'Análise do comportamento de utilização',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Dados de análise das interfaces de compra; análise',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Dados de análise da loja; classificado pelo fornecedor como análise',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Dados de início de sessão para a área de administração em /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Início de sessão no Shop Pay; necessário',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Início de sessão e reconhecimento da sessão na área de administração',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Estatística anónima relativa ao serviço e outras finalidades técnicas, entre elas o suporte da acessibilidade',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Definições de visualização da área de administração por conta',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Memorizar as definições de visualização da área de administração',
    'Anzeige von Bewertungen'
        => 'Apresentação de avaliações',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Apresentar o calendário de reservas e marcar compromissos no site',
    'Anzeigen einer interaktiven Karte'
        => 'Apresentar um mapa interativo',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'Definido com o valor 1, impede o envio de eventos UET à Microsoft',
    'Aufbau von Remarketing-Listen'
        => 'Criação de listas de remarketing',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Gravação e reprodução de sessões',
    'Aufzeichnung von Mausbewegungen'
        => 'Gravação dos movimentos do rato',
    'Ausblenden des Shop-Hinweises merken'
        => 'Memorizar a ocultação do aviso da loja',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Fornecimento e ativação de tags no site',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Fornecimento e gestão de tags no site',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Fornecimento de mosaicos de mapa a mapas incorporados',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Fornecimento dos conteúdos do aviso em marcadores de posição preparados no código-fonte da página através de um servidor de anúncios',
    'Auslieferung personalisierter Werbung'
        => 'Difusão de publicidade personalizada',
    'Auslieferung von Anzeigen'
        => 'Difusão de anúncios',
    'Auslieferung von Bibliotheken und Assets'
        => 'Fornecimento de bibliotecas e recursos',
    'Auslieferung von Schriftarten'
        => 'Fornecimento de tipos de letra',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Emissão de um token que o servidor do site verifica',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Controlo da apresentação de formulários de inscrição no site',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Controlo dos formulários pop-up para que não apareçam repetidamente',
    'Auswahl des Rechenzentrums'
        => 'Seleção do centro de dados',
    'Auswertung der Verweisquellen'
        => 'Análise das fontes de referência',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Análise do público do site (demografia do site)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Análise do navegador, do sistema operativo e do tipo de dispositivo',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Análise do dispositivo, do navegador e da localização estimada',
    'Auswertung von Herkunft und Kampagnen'
        => 'Análise da origem e das campanhas',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Autentica os pedidos do utilizador final',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Limitação da frequência de exibição',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Comprova uma verificação bem-sucedida, de modo a dispensar outros desafios da zona',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Disponibilização dos campos de pagamento do Stripe Elements',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Disponibilização do acesso de acessibilidade',
    'Besucherzählung'
        => 'Contagem de visitantes',
    'Betrieb des Chat-Widgets'
        => 'Funcionamento do widget de chat',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Funcionamento e prevenção de abusos dos serviços de mapas',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Funcionamento do carrinho e do processo de pagamento de uma loja',
    'Betrugs- und Missbrauchserkennung'
        => 'Deteção de fraude e de abusos',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Deteção de fraude na tentativa de pagamento',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Deteção de fraude e avaliação do risco das tentativas de pagamento',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Prevenção de fraude e obrigações legais enquanto prestador de serviços de pagamento',
    'Betrugsprävention'
        => 'Prevenção de fraude',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Prevenção de fraude e avaliação do risco de uma tentativa de pagamento',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Criação de perfis de utilização pseudonimizados mediante consentimento',
    'Bildung von Zielgruppen und Retargeting'
        => 'Criação de públicos-alvo e retargeting',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Vincula a sessão à mesma instância AWS',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Proteção do reprodutor contra bots e abusos',
    'Bot-Abwehr fuer den Player'
        => 'Proteção do reprodutor contra bots',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Proteção contra bots no fornecimento dos recursos da HubSpot',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Identificador do navegador com o qual o LinkedIn distingue dispositivos e deteta abusos',
    'Cloudflare-Bot-Abwehr'
        => 'Proteção contra bots da Cloudflare',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Deteção de bots da Cloudflare para a filtragem do tráfego',
    'Cloudflare-Ratenbegrenzung'
        => 'Limitação de taxa da Cloudflare',
    'Conversion-Messung'
        => 'Medição de conversões',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Acompanhamento de conversões das campanhas publicitárias do LinkedIn',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Acompanhamento de conversões das campanhas Microsoft Advertising',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Acompanhamento de conversões das campanhas publicitárias do Pinterest',
    'Darstellung interaktiver Karten auf der Website'
        => 'Apresentação de mapas interativos no site',
    'Deduplizieren von Kontakten'
        => 'Desduplicação de contactos',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Serve para a difusão e a medição da publicidade.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'ID de visitante entre domínios; segundo o fornecedor, cookie de terceiros, utilizado apenas se os cookies de terceiros estiverem ativados no ficheiro de configuração',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Identificador de terceiros para o reconhecimento de visitantes',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Identificador de terceiros que é transmitido à Klaviyo',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Identificador publicitário de terceiros para a medição de campanhas e a personalização no TikTok',
    'E-Commerce- und Zielauswertung'
        => 'Análise de comércio eletrónico e de objetivos',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Preencher previamente o endereço de e-mail do formulário de comentários',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Incorporação e reprodução de faixas, álbuns, listas de reprodução e episódios de podcast',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Incorporação e reprodução de vídeos no site',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Incorporação de formulários e inquéritos no site',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Incorporação dos campos do cartão no próprio checkout, para que os dados do cartão não passem pela loja',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Incorporação de uma declaração de cookies mantida externamente',
    'Einbettung von Audioinhalten'
        => 'Incorporação de conteúdos áudio',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Integração de píxeis publicitários da Google e do Facebook no site associado',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Apresentação de avisos de financiamento e pagamento a prestações nas páginas de produto e de carrinho (On-site Messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Identificador único na medição entre domínios (contas a partir de 14/06/2026)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Identificador único na medição entre domínios (contas anteriores a 14/06/2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Valor de utilização única contra CSRF no formulário de opt-out',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Contém um identificador de utilizador e o momento de criação; segundo a fonte, é colocado no navegador integrado do Pinterest e não no domínio do site',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Recolha e transmissão das respostas ao operador do formulário',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Regista a utilização do site para fins de análise.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Recolha de eventos próprios definidos pelo operador',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Recolha e transmissão de erros da aplicação a partir do navegador',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Recolha de visitantes e visualizações de página no site para a automatização de marketing',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Medição do desempenho de um suporte publicitário e liquidação da comissão',
    'Erhalt des Sitzungszustands'
        => 'Manutenção do estado da sessão',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Reconhecimento do dispositivo para a prevenção de abusos',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Deteção e rejeição de acessos automatizados nos formulários',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Deteção de bots e de comportamento automatizado no processo de encomenda',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Detetar se o conteúdo do carrinho foi alterado',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Deteta alterações no conteúdo do carrinho',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Reconhece os visitantes do site no qual o código do Intercom está integrado',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Reconhece navegadores nos sites da Microsoft; segundo o fornecedor, também utilizado para publicidade, cookie de terceiros',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Reconhece as pessoas que escrevem através da ferramenta de chat',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Reconhece o dispositivo a partir do qual a conversa é iniciada',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Reconhece o dispositivo individual que interage com o messenger, para a prevenção de abusos',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Reconhece o utilizador final que inicia a conversa',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Reconhece o domínio ou subdomínio no qual o widget de chat está integrado',
    'Erkennt wiederkehrende Besucher'
        => 'Reconhece os visitantes recorrentes',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Deteta se o navegador foi reiniciado',
    'Erkennung von Klickbetrug'
        => 'Deteção de fraude de cliques',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Determina os acessos únicos ao site (contas a partir de 14/06/2026)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Determina os acessos únicos ao site (contas anteriores a 14/06/2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Permitir que terceiros coloquem cookies no navegador destes utilizadores',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Permite a utilização do acesso de acessibilidade',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Permite funcionalidades adicionais do site.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Identificador próprio que reconhece os visitantes e associa os eventos ao site',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Identificador próprio de visitante para o acompanhamento de conversões e o remarketing',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Identificador próprio de sessão para a associação de eventos',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Identificador próprio de sessão por píxel para a medição de campanhas',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Identificador próprio de sessão para a medição de campanhas',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Identificador publicitário próprio para a medição de campanhas e a personalização no TikTok',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Cookie próprio que agrupa ações de visitantes que o Pinterest não consegue associar',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Cookie próprio que armazena os dados de cliente em hash recolhidos através do Automatic Enhanced Match',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Gera um identificador único para cada visitante (contas a partir de 14/06/2026)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Gera um identificador único para cada visitante (contas anteriores a 14/06/2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identificador de dispositivo para a análise de eventos em páginas com widget',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Colocado ao iniciar sessão numa página alojada pela HubSpot',
    'Gewaehlte Sprache speichern'
        => 'Guardar o idioma selecionado',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Sincroniza o identificador MUID entre os domínios da Microsoft; segundo o fornecedor, cookie de terceiros',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Mantém as mensagens sincronizadas entre vários separadores',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Conserva o valor do parâmetro pk_campaign',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Conserva o valor do parâmetro utm_campaign',
    'Haelt den Widerspruch gegen die Messung'
        => 'Conserva a oposição à medição',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Conserva o prazo de expiração de _uetsid',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Conserva o prazo de expiração de _uetvid',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Conserva o tipo de fonte de tráfego para o Tag Manager',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Regista a identidade do visitante, também para a desduplicação de contactos',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Regista a decisão do visitante relativa aos cookies',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Mantém a apresentação do widget coerente na mudança de página',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Regista a página de entrada; análise',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Conserva o consentimento para a medição com cookies',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Conserva a decisão do utilizador quanto a categorias e fornecedores',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Conserva a sessão dos utilizadores com sessão iniciada e o acesso a conversas anteriores',
    'Haelt die verweisende Adresse'
        => 'Conserva o endereço de referência',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Regista a fonte de referência; análise',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Conserva variáveis próprias da sessão (marcado como obsoleto pelo fornecedor)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Regista se o etracker pode colocar cookies; é definido através de uma chamada à API no caso de data-block-cookies',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Regista quais os interruptores de funcionalidade que o proprietário do vídeo ativou',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Cookie principal para o reconhecimento de visitantes',
    'Heatmaps'
        => 'Mapas de calor',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Mapas de calor de cliques e do comportamento de deslocamento',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Conserva os dados de sessão dos mapas de calor durante a visita',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Conserva informações sobre a sessão em curso (contas a partir de 14/06/2026)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Conserva informações sobre a sessão em curso (contas anteriores a 14/06/2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Conserva variáveis personalizadas durante a visita',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Conserva dados permanentes ao nível do visitante (contas a partir de 14/06/2026)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Conserva dados permanentes ao nível do visitante para a análise Insights (contas anteriores a 14/06/2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Regista o estado do consentimento do visitante (contas a partir de 14/06/2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Regista o estado do consentimento do visitante (contas anteriores a 14/06/2026)',
    'Hält den Sitzungszustand.'
        => 'Conserva o estado da sessão.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Conserva o identificador de utilizador do Clarity e as definições para este site',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Conserva a atribuição da variante para os testes A/B',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Regista temporariamente a combinação selecionada (contas a partir de 14/06/2026)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Regista temporariamente a combinação selecionada (contas anteriores a 14/06/2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Regista a variante selecionada antes de ocorrer o redirecionamento (contas a partir de 14/06/2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Regista a variante selecionada antes de ocorrer o redirecionamento (contas anteriores a 14/06/2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Regista através de que referência ocorreu a visita',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'No modo Pre-Clearance: autorização para outras verificações WAF da mesma zona',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Identificador indireto de membro para o acompanhamento de conversões, o retargeting e a análise',
    'Inhalt des Warenkorbs; notwendig'
        => 'Conteúdo do carrinho de compras; necessário',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Dados analíticos relativos ao comprador na loja; análise',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Identificador único associado à campanha (contas a partir de 14/06/2026)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Identificador do primeiro contacto com o Clarity em todos os sites com Clarity; segundo o fornecedor, cookie de terceiros',
    'Kennzeichnet die laufende Sitzung'
        => 'Identifica a sessão em curso',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Conservar os dados do comentário para comentários seguintes',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Apresentação coerente das variantes dos testes A/B',
    'Lastverteilung und Routing'
        => 'Distribuição de carga e encaminhamento',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Distribuição de carga e encaminhamento dos pedidos de challenge',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Guarda localmente as definições de conta do visitante',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Apresenta a mesma variante de uma página com teste A/B',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Chat em direto e canal de mensagens para o apoio no site',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Chat em direto e caixa de entrada de apoio no site',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Dados de marketing das interfaces de compra; marketing',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Dados de marketing para as interfaces de compra',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Memorização das definições do leitor escolhidas pelo espetador (volume, qualidade, legendas)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Memorização do estado e das definições do widget',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Regista o fecho do banner Global Privacy Control',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Regista o fecho do banner informativo',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Regista o momento da sincronização com o cookie lms_analytics',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Regista o momento da última sincronização de identificadores, para que não seja repetida',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Regista a variante atribuída (contas a partir de 14/06/2026)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Regista a variante atribuída para que se mantenha igual numa nova visita (contas anteriores a 14/06/2026)',
    'Merkt einen Rabattcode; notwendig'
        => 'Regista um código de desconto; necessário',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Regista uma oposição à medição (contas a partir de 14/06/2026)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Regista uma oposição válida para vários sites (contas anteriores a 14/06/2026)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Memoriza as definições do leitor, como o volume, a qualidade e as legendas',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Memoriza a definição das notificações sonoras',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Memoriza um consentimento dado para a medição',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Memoriza uma oposição à medição',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Memoriza as mensagens proativas que foram fechadas',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Memoriza que o visitante fechou a etiqueta do botão de início',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Memoriza se o widget está aberto ou fechado',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Regista que o visitante não deve participar em nenhuma campanha (contas anteriores a 14/06/2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Regista que o visitante está excluído da campanha (contas a partir de 14/06/2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Regista que o visitante está excluído da campanha (contas anteriores a 14/06/2026)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Regista que o aviso de consentimento foi fechado',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Regista que o aviso da loja foi fechado',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Regista que a pergunta sobre cookies não deve voltar a ser colocada',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Regista que uma tag já foi acionada',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Regista se a profundidade de deslocamento é medida neste visitante',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Regista se a janela de chat está aberta',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Regista se o identificador MUID é transferido para um identificador publicitário; segundo o fornecedor, sempre 0, cookie de terceiros',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Medição de aberturas e cliques em campanhas de e-mail',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Medição de sessões e eventos nas páginas com widget',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Medição de sessões e atribuição da origem da visita',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Medição da disponibilidade do serviço pela Google',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Medição do tempo de carregamento e dos indicadores principais da página (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Medição da profundidade de deslocamento e de eventos de clique',
    'Messung der Werbewirkung'
        => 'Medição da eficácia publicitária',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Medição do comportamento de utilização no site',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Medição e personalização de anúncios na rede publicitária TikTok Pangle',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Medição e melhoria do desempenho de campanhas publicitárias',
    'Messung von Auslieferungen und Klicks'
        => 'Medição de entregas e cliques',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Medição de visitantes e sessões para efeitos de análise',
    'Messung von Conversions'
        => 'Medição de conversões',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Medição de visualizações de páginas e visitas',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Medição de visualizações de páginas e eventos',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Medição de visualizações de páginas e do comportamento de utilização',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Medição de visualizações de páginas e de eventos personalizados',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Medição de visualizações de páginas, visitas e sessões',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Medição de visualizações de páginas, visitas e sessões no servidor próprio',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Medição de campanhas publicitárias e de conversões no site',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Medição de objetivos e conversões de uma campanha',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Carregamento de mosaicos de mapa, tipos de letra e estilos a partir do fornecedor',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Preencher previamente o nome a partir do formulário de comentários',
    'Nutzer-ID'
        => 'ID de utilizador',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Atribui o carrinho de compras ao país correto; necessário',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Atribui o carrinho de compras à cliente correta na base de dados',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Associa as ações de uma visita a uma sessão',
    'Personalisierung der Werbung auf TikTok'
        => 'Personalização da publicidade no TikTok',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Verificar se o WordPress pode colocar cookies',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Verifica se o navegador suporta cookies; necessário',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Verifica se o WordPress pode colocar cookies',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Valor de verificação da palavra-passe da loja; necessário',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Cookie de verificação do fornecedor (contas anteriores a 14/06/2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Verifica se o navegador aceita cookies (contas a partir de 14/06/2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Verifica se o navegador aceita cookies (contas anteriores a 14/06/2026)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Verifica se o navegador aceita cookies (segundo o fornecedor, apenas no Internet Explorer)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Limitação de taxa no fornecedor de CDN da HubSpot',
    'Reichweiten- und Nutzungsmessung'
        => 'Medição de audiência e de utilização',
    'Reichweitenmessung'
        => 'Medição de audiência',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Medição de audiência dos vídeos incorporados, efetuada pelo Vimeo',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Medição de audiência para o responsável da loja',
    'Remarketing und Zielgruppenbildung'
        => 'Remarketing e criação de públicos-alvo',
    'Retargeting'
        => 'Retargeting',
    'Retargeting von Website-Besuchern'
        => 'Retargeting dos visitantes do site',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Análise de risco para distinguir entre pessoa e bot',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Cookie de recolha que, segundo o fornecedor, só é criado no navegador Safari (contas a partir de 14/06/2026)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Cookie de recolha que, segundo o fornecedor, só é criado no navegador Safari (contas anteriores a 14/06/2026)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Recolha de informações sobre o comportamento de navegação destes utilizadores pelo Spotify e por terceiros',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Interruptor que o responsável do site define para impedir o rastreio pelo Klaviyo',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Proteção do início de sessão dos membros contra falsificação',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Proteção dos formulários contra utilização abusiva automatizada',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Proteção contra pedidos automatizados (spam, credential stuffing)',
    'Sicherheit'
        => 'Segurança',
    'Sicherheitsfunktionen'
        => 'Funções de segurança',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Funções de segurança quando a funcionalidade opcional User Journeys está ativa',
    'Sitzung'
        => 'Sessão',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Atribuição da sessão e do idioma ou do país',
    'Sitzungsaufzeichnung'
        => 'Gravação da sessão',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Identificador de sessão para a análise de eventos nas páginas com widget',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Identificador de sessão para a estatística da loja; análise',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Chave de sessão do serviço Answer Bot',
    'Sitzungswiedergabe'
        => 'Reprodução da sessão',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Guarda o token de autenticação após o início de sessão',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Guarda a palavra-passe codificada dos vídeos protegidos por palavra-passe',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Guarda a chave do idioma escolhido',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Guarda a preferência de privacidade do visitante; necessário',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Guarda a decisão de consentimento do visitante',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Guarda o identificador do dispositivo do visitante para a autenticação no widget de chat',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Guarda o identificador de um utilizador inscrito num webinar',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Guarda o identificador de clique fbclid, para que um evento do site possa ser atribuído a um anúncio',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Guarda o identificador de utilizador proveniente de um formulário de registo colocado antes do vídeo',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Guarda o identificador de clique do TikTok para a atribuição de conversões',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Armazena o ID único do visitante para o reconhecimento',
    'Speichert die zugestimmten Kategorien'
        => 'Guarda as categorias consentidas',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Alimenta o widget dos produtos vistos recentemente',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Controla se o identificador MUID é renovado; segundo o fornecedor, cookie de terceiros',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Tecnicamente necessário ao funcionamento e à segurança do site.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Contém os dados de sessão e de finalização da compra da loja; classificado pelo fornecedor como necessário',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Contém a função de oposição (opt-out)',
    'Transaktionssicherheit'
        => 'Segurança das transações',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Contém a análise de risco do reCAPTCHA.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Transmissão de eventos do site ao TikTok',
    'Umfragen'
        => 'Inquéritos',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Impede a transmissão de dados à HubSpot',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Suprime a mensagem de boas-vindas do chat depois de esta ser fechada',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Distingue os navegadores que acedem a páginas da Microsoft; com consentimento, também para publicidade',
    'Unterscheidet einzelne Nutzer.'
        => 'Distingue os diferentes utilizadores.',
    'Unterscheidung einzelner Nutzer'
        => 'Distinção dos diferentes utilizadores',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Distinção entre pessoa e bot em formulários e inícios de sessão',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Liga várias visualizações de páginas numa única gravação de sessão',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Impede a apresentação permanente do banner no modo estrito',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Distribuição dos sinais de consentimento pelas tags da Google',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Gestão da decisão de consentimento para as tags configuradas no contentor',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Gestão da oposição à medição',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Gestão da oposição e do consentimento para a medição',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Atribuído pela Google às categorias Análise e Publicidade.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Atribuído pela Google às categorias Análise, Publicidade e Segurança.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Atribuído pela Google às categorias Funcionalidade, Publicidade e Segurança.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Atribuído pela Google às categorias Segurança e Funcionalidade.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Atribuído pela Google às categorias Segurança e Publicidade.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Atribuído pela Google às categorias Segurança, Análise, Funcionalidade e Publicidade.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Atribuído pela Google às categorias Segurança, Funcionalidade e Publicidade.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Atribuído pela Google às categorias Publicidade e Segurança.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Atribuído pela Google à categoria Análise; a Google não indica uma finalidade mais precisa.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Atribuído pela Google à categoria Funcionalidade.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Atribuído pela Google à categoria Segurança.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Atribuído pela Google à categoria Publicidade.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Indicado pela Microsoft como um dos cookies que não podem ser colocados sem consentimento; a Microsoft não indica uma descrição própria da finalidade',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Identificador gerado pelo Vimeo para a medição de audiência',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Moeda do carrinho de compras após a conclusão da compra; necessário',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Atribuição probabilística de um navegador a uma pessoa',
    'Warenkorb einer Besucherin zuordnen'
        => 'Atribuir o carrinho de compras a uma visitante',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Preencher previamente o endereço do site a partir do formulário de comentários',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Reconhecimento do espetador para fins publicitários',
    'Werbepersonalisierung'
        => 'Personalização da publicidade',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Como _pin_unauth, mas como cookie de terceiros',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Reconhecimento do visitante durante o processo de reserva',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Reconhecimento do visitante entre visualizações de páginas e separadores',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Reconhecimento e identificação de visitantes do site',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Reconhecimento de visitantes ao longo de várias visitas',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Reconhecimento de visitantes de sites associados para retargeting',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Reconhecimento de visitantes recorrentes e atribuição de conversas anteriores',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Reconhecimento do visitante e armazenamento das suas características',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Reconhecimento do navegador através do identificador Criteo',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Reconhecimento do utilizador; apenas com consentimento, bloqueado por predefinição',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Reconhecimento de um navegador em visitas posteriores, após consentimento',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Reconhecimento de visitantes e atribuição a sessões',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'Reconhecimento de membros do LinkedIn fora do LinkedIn para fins publicitários',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Reconhecimento de utilizadores após consentimento',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Reconhecimento de visitantes recorrentes através de um ID de visitante',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'É colocado quando um objetivo de campanha foi acionado (contas a partir de 14/06/2026)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'É colocado quando um objetivo de campanha foi acionado (contas anteriores a 14/06/2026)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'É colocado quando uma pessoa visita um site com a tag do Pinterest integrada',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'É colocado quando uma atribuição é bem-sucedida sem cookies existentes, por exemplo através do Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'É colocado pela tag JavaScript a partir dos dados que o Pinterest transmite com o tráfego proveniente da publicidade',
    'Zaehlt und begrenzt Sitzungen'
        => 'Conta e limita as sessões',
    'Zahlungsabwicklung'
        => 'Processamento de pagamentos',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Indica se a sessão ainda está em curso ou se é nova',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Indica à interface que a sessão foi iniciada e com que identidade',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Identificador aleatório do navegador que associa a um navegador os eventos do pixel de um site',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Apresentar os produtos vistos recentemente no widget correspondente',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Atribuição do comportamento no site a um perfil',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Atribuição da origem de uma visita (referenciador, atribuição)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Atribuição de um visitante a um contacto da conta Brevo através do endereço de e-mail',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Atribuição de transações como leads e vendas a um publisher',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Atribuição de ações no site a anúncios vistos anteriormente',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Agrupamento de várias visualizações de páginas numa sessão',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Dados adicionais sobre os eventos registados do percurso da visita',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Atribuição e manutenção de uma variante ao longo de várias visitas',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Memória intermédia para eventos baseados em seletores CSS',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Memória intermédia para os dados do messenger e do visitante no armazenamento do navegador',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Memória intermédia para as entradas do Tag Manager',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Memória intermédia para a medição da profundidade de deslocamento',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Memória intermédia para as variáveis do Tag Manager',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Memória intermédia para as definições do widget, a fim de evitar pedidos repetidos ao servidor',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Armazenamento temporário dos dados do messenger e do visitante no navegador',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Conta as sessões criadas para um visitante (contas a partir de 14/06/2026)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Conta quantas vezes o navegador foi fechado e novamente aberto durante a medição (contas anteriores a 14/06/2026)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Contagem de visualizações de páginas e visitas',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'análises automatizadas do comportamento dos utilizadores',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'atribuição geográfica aproximada a país, região e cidade',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'opcionalmente, gravação da sessão (Session Replay), por predefinição com textos, imagens e entradas mascarados',
    'optional Heatmaps und A/B-Tests'
        => 'opcionalmente mapas de calor e testes A/B',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Transmite a origem de referência nos testes Split URL (contas a partir de 14/06/2026)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Transmite a origem de referência nos testes Split URL (contas anteriores a 14/06/2026)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Atribuição de transações como leads e vendas a um publisher, Medição do desempenho de um suporte publicitário e liquidação da comissão',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Recolha de visitantes e visualizações de página no site para a automatização de marketing, Atribuição de um visitante a um contacto da conta Brevo através do endereço de e-mail, Recolha de eventos próprios definidos pelo operador',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Apresentar o calendário de reservas e marcar compromissos no site, Reconhecimento do visitante durante o processo de reserva, Processamento de pagamentos quando a marcação é paga',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Deteção e rejeição de acessos automatizados nos formulários, Emissão de um token que o servidor do site verifica, No modo Pre-Clearance: autorização para outras verificações WAF da mesma zona',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Medição de visualizações de páginas e visitas, Medição do tempo de carregamento e dos indicadores principais da página (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Difusão de publicidade personalizada, Medição da eficácia publicitária, Reconhecimento do navegador através do identificador Criteo',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Medição do comportamento de utilização no site, Criação de perfis de utilização pseudonimizados mediante consentimento, Reconhecimento de um navegador em visitas posteriores, após consentimento',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Medição de visualizações de páginas e do comportamento de utilização, Medição da profundidade de deslocamento e de eventos de clique, Reconhecimento de utilizadores após consentimento, Gestão da oposição à medição',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Distinção entre pessoa e bot em formulários e inícios de sessão, Proteção contra pedidos automatizados (spam, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Medição de conversões, Remarketing e criação de públicos-alvo, Limitação da frequência de exibição, Deteção de fraude de cliques',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Difusão de anúncios, Limitação da frequência de exibição, Deteção de fraude e de abusos, Medição de entregas e cliques',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Distinção dos diferentes utilizadores, Manutenção do estado da sessão, Medição de audiência e de utilização',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Apresentar um mapa interativo, Medição da disponibilidade do serviço pela Google',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Análise de risco para distinguir entre pessoa e bot, Proteção dos formulários contra utilização abusiva automatizada',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Fornecimento e gestão de tags no site, Distribuição dos sinais de consentimento pelas tags da Google',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Distinção entre pessoa e bot em formulários e inícios de sessão, Distribuição de carga e encaminhamento dos pedidos de challenge, Disponibilização do acesso de acessibilidade',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Mapas de calor, Gravação da sessão, Inquéritos',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Reconhecimento de visitantes ao longo de várias visitas, Medição de sessões e atribuição da origem da visita, Desduplicação de contactos, Funcionamento do widget de chat, Apresentação coerente das variantes dos testes A/B',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Chat em direto e caixa de entrada de apoio no site, Reconhecimento de visitantes recorrentes e atribuição de conversas anteriores, Reconhecimento do dispositivo para a prevenção de abusos, Armazenamento temporário dos dados do messenger e do visitante no navegador',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Apresentação de avisos de financiamento e pagamento a prestações nas páginas de produto e de carrinho (On-site Messaging), Fornecimento dos conteúdos do aviso em marcadores de posição preparados no código-fonte da página através de um servidor de anúncios',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Reconhecimento e identificação de visitantes do site, Atribuição do comportamento no site a um perfil, Controlo da apresentação de formulários de inscrição no site',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Acompanhamento de conversões das campanhas publicitárias do LinkedIn, Retargeting dos visitantes do site, Análise do público do site (demografia do site)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Reconhecimento de visitantes de sites associados para retargeting, Controlo dos formulários pop-up para que não apareçam repetidamente, Medição de aberturas e cliques em campanhas de e-mail, Integração de píxeis publicitários da Google e do Facebook no site associado',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Apresentação de mapas interativos no site, Carregamento de mosaicos de mapa, tipos de letra e estilos a partir do fornecedor, Faturação e proteção das chamadas ao mapa',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Medição de visualizações de páginas, visitas e sessões, Reconhecimento de visitantes recorrentes através de um ID de visitante, Atribuição da origem de uma visita (referenciador, atribuição), opcionalmente mapas de calor e testes A/B',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Medição de visualizações de páginas, visitas e sessões no servidor próprio, Reconhecimento de visitantes recorrentes através de um ID de visitante, Atribuição da origem de uma visita (referenciador, atribuição), opcionalmente mapas de calor e testes A/B',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Fornecimento e ativação de tags no site, Gestão da decisão de consentimento para as tags configuradas no contentor',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Medição de campanhas publicitárias e de conversões no site, Criação de públicos-alvo e retargeting',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Acompanhamento de conversões das campanhas Microsoft Advertising, Criação de listas de remarketing, Medição de visualizações de páginas e de eventos personalizados',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Gravação e reprodução de sessões, Mapas de calor de cliques e do comportamento de deslocamento, Agrupamento de várias visualizações de páginas numa sessão, análises automatizadas do comportamento dos utilizadores',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Processamento de um pagamento iniciado pelo visitante, Incorporação dos campos do cartão no próprio checkout, para que os dados do cartão não passem pela loja, Prevenção de fraude e obrigações legais enquanto prestador de serviços de pagamento',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Gravação dos movimentos do rato, Reprodução da sessão, Análise do comportamento de utilização',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Fornecimento de mosaicos de mapa a mapas incorporados, Funcionamento e prevenção de abusos dos serviços de mapas',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Processamento de pagamentos, Prevenção de fraude',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Acompanhamento de conversões das campanhas publicitárias do Pinterest, Criação de públicos-alvo e retargeting, Atribuição de ações no site a anúncios vistos anteriormente',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Medição de visualizações de páginas e eventos, Reconhecimento de visitantes e atribuição a sessões, Análise da origem e das campanhas, Análise do dispositivo, do navegador e da localização estimada, Análise de comércio eletrónico e de objetivos',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Contagem de visualizações de páginas e visitas, Análise das fontes de referência, Análise do navegador, do sistema operativo e do tipo de dispositivo, atribuição geográfica aproximada a país, região e cidade',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Recolha e transmissão de erros da aplicação a partir do navegador, opcionalmente, gravação da sessão (Session Replay), por predefinição com textos, imagens e entradas mascarados',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Funcionamento do carrinho e do processo de pagamento de uma loja, Atribuição da sessão e do idioma ou do país, Medição de audiência para o responsável da loja, Dados de marketing para as interfaces de compra',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Incorporação e reprodução de faixas, álbuns, listas de reprodução e episódios de podcast, Recolha de informações sobre o comportamento de navegação destes utilizadores pelo Spotify e por terceiros, Permitir que terceiros coloquem cookies no navegador destes utilizadores',
    'Besucherzählung, Reichweitenmessung'
        => 'Contagem de visitantes, Medição de audiência',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Deteção de fraude e avaliação do risco das tentativas de pagamento, Disponibilização dos campos de pagamento do Stripe Elements, Deteção de bots e de comportamento automatizado no processo de encomenda',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Medição e melhoria do desempenho de campanhas publicitárias, Personalização da publicidade no TikTok, Transmissão de eventos do site ao TikTok',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Incorporação de formulários e inquéritos no site, Recolha e transmissão das respostas ao operador do formulário',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Incorporação e reprodução de vídeos no site, Memorização das definições do leitor escolhidas pelo espetador (volume, qualidade, legendas), Medição de audiência dos vídeos incorporados, efetuada pelo Vimeo, Proteção do reprodutor contra bots e abusos',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Testes A/B e testes Split-URL no site, Atribuição e manutenção de uma variante ao longo de várias visitas, Medição de objetivos e conversões de uma campanha, Medição de visitantes e sessões para efeitos de análise, Gestão da oposição e do consentimento para a medição',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Atribuir o carrinho de compras a uma visitante, Detetar se o conteúdo do carrinho foi alterado, Apresentar os produtos vistos recentemente no widget correspondente, Memorizar a ocultação do aviso da loja',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Início de sessão e reconhecimento da sessão na área de administração, Conservar os dados do comentário para comentários seguintes, Memorizar as definições de visualização da área de administração, Verificar se o WordPress pode colocar cookies, Guardar o idioma selecionado',
    'Conversion-Messung, Retargeting'
        => 'Medição de conversões, Retargeting',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Reprodução de vídeos incorporados, Segurança, Reconhecimento do espetador para fins publicitários',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Chat em direto e canal de mensagens para o apoio no site, Reconhecimento do visitante entre visualizações de páginas e separadores, Memorização do estado e das definições do widget, Medição de sessões e eventos nas páginas com widget',
];
