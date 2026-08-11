<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Japanisch.
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
        => 'ウェブサイト上のA/BテストおよびスプリットURLテスト',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => '地図の呼び出しの課金と保護',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Shopでのログインの完了、必須',
    'Abspielen eingebetteter Videos'
        => '埋め込み動画の再生',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => '訪問者が開始した決済の処理',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => '予約が有料の場合の決済処理',
    'Analyse des Nutzungsverhaltens'
        => '利用行動の分析',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => '購入画面の分析データ、統計',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'ショップの分析データ、提供者により統計として分類',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => '/wp-admin/配下の管理画面のログイン情報',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Shop Payへのログイン、必須',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => '管理画面でのログインとセッションの識別',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'サービスに関する匿名の統計およびその他の技術的目的（アクセシビリティ支援を含む）',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'アカウントごとの管理画面の表示設定',
    'Ansichtseinstellungen des Adminbereichs merken'
        => '管理画面の表示設定の記憶',
    'Anzeige von Bewertungen'
        => 'レビューの表示',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'ウェブサイト上での予約カレンダーの表示と予約の受付',
    'Anzeigen einer interaktiven Karte'
        => 'インタラクティブな地図の表示',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => '値が1に設定されている場合、UETイベントのMicrosoftへの送信を停止します',
    'Aufbau von Remarketing-Listen'
        => 'リマーケティングリストの作成',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'セッションの記録と再生',
    'Aufzeichnung von Mausbewegungen'
        => 'マウスの動きの記録',
    'Ausblenden des Shop-Hinweises merken'
        => 'ショップの通知を非表示にした状態の記憶',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'ウェブサイト上でのタグの配信と発火',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'ウェブサイト上でのタグの配信と管理',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => '埋め込み地図への地図タイルの配信',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'アドサーバーを介した、ページのソースコード内に用意されたプレースホルダーへの告知内容の配信',
    'Auslieferung personalisierter Werbung'
        => 'パーソナライズド広告の配信',
    'Auslieferung von Anzeigen'
        => '広告の配信',
    'Auslieferung von Bibliotheken und Assets'
        => 'ライブラリとアセットの配信',
    'Auslieferung von Schriftarten'
        => 'フォントの配信',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'ウェブサイトのサーバーが検証するトークンの発行',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'ウェブサイト上での登録フォームの表示制御',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'ポップアップフォームが繰り返し表示されないようにするための表示制御',
    'Auswahl des Rechenzentrums'
        => 'データセンターの選択',
    'Auswertung der Verweisquellen'
        => '参照元の分析',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'ウェブサイトの利用者層の分析（ウェブサイトデモグラフィック）',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'ブラウザ、オペレーティングシステム、デバイス種別の分析',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'デバイス、ブラウザ、推定所在地の分析',
    'Auswertung von Herkunft und Kampagnen'
        => '流入元とキャンペーンの分析',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'エンドユーザーのリクエストを認証します',
    'Begrenzung der Anzeigehäufigkeit'
        => '広告表示頻度の制限',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => '検証に合格したことを証明し、同一ゾーンでの追加のチャレンジを不要にします',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Stripe Elementsの決済入力フィールドの提供',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'アクセシビリティ機能の提供',
    'Besucherzählung'
        => '訪問者数の集計',
    'Betrieb des Chat-Widgets'
        => 'チャットウィジェットの動作',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => '地図サービスの運用と不正利用対策',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'ショップのカートと決済手続きの動作',
    'Betrugs- und Missbrauchserkennung'
        => '不正行為および不正利用の検出',
    'Betrugserkennung beim Zahlungsversuch'
        => '決済試行時の不正検出',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => '決済試行の不正検出とリスク評価',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => '不正防止および決済サービス提供者としての法的義務の履行',
    'Betrugsprävention'
        => '不正防止',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => '不正防止と決済試行のリスク評価',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => '同意後の仮名化された利用プロファイルの作成',
    'Bildung von Zielgruppen und Retargeting'
        => 'ターゲット層の構築とリターゲティング',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'セッションを同一のAWSインスタンスに固定します',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'プレーヤーのボットおよび不正利用対策',
    'Bot-Abwehr fuer den Player'
        => 'プレーヤーのボット対策',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'HubSpotのリソース配信時のボット対策',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'LinkedInがデバイスを区別し不正利用を検出するために用いるブラウザ識別子',
    'Cloudflare-Bot-Abwehr'
        => 'Cloudflareのボット対策',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'トラフィックフィルタリングのためのCloudflareのボット検出',
    'Cloudflare-Ratenbegrenzung'
        => 'Cloudflareのレート制限',
    'Conversion-Messung'
        => 'コンバージョン測定',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'LinkedIn広告キャンペーンのコンバージョントラッキング',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Microsoft Advertisingキャンペーンのコンバージョントラッキング',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Pinterest広告キャンペーンのコンバージョントラッキング',
    'Darstellung interaktiver Karten auf der Website'
        => 'ウェブサイト上でのインタラクティブな地図の表示',
    'Deduplizieren von Kontakten'
        => '連絡先の重複排除',
    'Dient der Ausspielung und Messung von Werbung.'
        => '広告の配信と測定に使用されます。',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'ドメインをまたぐ訪問者ID。提供者によればサードパーティCookieであり、設定ファイルでサードパーティCookieが有効な場合にのみ使用される',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => '訪問者を再認識するためのサードパーティ識別子',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Klaviyoに提供されるサードパーティ識別子',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'TikTokでのキャンペーン測定とパーソナライズのためのサードパーティ広告識別子',
    'E-Commerce- und Zielauswertung'
        => 'eコマースと目標の分析',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'コメントフォームのメールアドレスの事前入力',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => '楽曲、アルバム、プレイリスト、ポッドキャストのエピソードの埋め込みと再生',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'ウェブサイト上での動画の埋め込みと再生',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'ウェブサイトへのフォームとアンケートの埋め込み',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'カード情報がショップを経由しないようにするための、独自チェックアウトへのカード入力フィールドの埋め込み',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => '外部で管理されるCookie宣言の埋め込み',
    'Einbettung von Audioinhalten'
        => '音声コンテンツの埋め込み',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => '連携先ウェブサイトへのGoogleおよびFacebookの広告ピクセルの組み込み',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => '商品ページおよびカートページでの分割払い・ファイナンス案内の表示（On-site Messaging）',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'ドメインをまたぐ測定における一意の識別子（2026年6月14日以降のアカウント）',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'ドメインをまたぐ測定における一意の識別子（2026年6月14日より前のアカウント）',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'オプトアウトフォームのCSRF対策用ワンタイム値',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'ユーザー識別子と生成時刻を含む。出典によればPinterestのアプリ内ブラウザで設定され、ウェブサイトのドメインでは設定されない',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => '回答の収集とフォーム運営者への送信',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => '分析のためにウェブサイトの利用状況を記録します。',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => '運営者が定義した独自イベントの記録',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'ブラウザからのアプリケーションエラーの収集と送信',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'マーケティングオートメーションのためのウェブサイトの訪問者とページビューの記録',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => '広告素材の効果測定と手数料の精算',
    'Erhalt des Sitzungszustands'
        => 'セッション状態の維持',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => '不正利用対策のためのデバイスの識別',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'フォームへの自動化されたアクセスの検出と拒否',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => '注文手続きにおけるボットおよび自動化された挙動の検出',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'カートの内容が変更されたかどうかの検出',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'カート内容の変更を検出します',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Intercomのコードが組み込まれたウェブサイトの訪問者を認識します',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Microsoftのウェブサイト上でブラウザを再認識します。提供者によれば広告にも利用される、サードパーティCookie',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'チャットツールから書き込む人物を再認識します',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => '会話が開始されたデバイスを識別します',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => '不正利用対策のため、メッセンジャーと通信する個々のデバイスを識別します',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => '会話を開始するエンドユーザーを識別します',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'チャットウィジェットが組み込まれているドメインまたはサブドメインを識別します',
    'Erkennt wiederkehrende Besucher'
        => '再訪問者を認識します',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'ブラウザが再起動されたかどうかを検出します',
    'Erkennung von Klickbetrug'
        => 'クリック詐欺の検出',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'ウェブサイトへの一意のアクセスを算出します（2026年6月14日以降のアカウント）',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'ウェブサイトへの一意のアクセスを算出します（2026年6月14日より前のアカウント）',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => '第三者がこれらのユーザーのブラウザにCookieを設定できるようにすること',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'アクセシビリティ機能の利用を可能にします',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'ウェブサイトの追加機能を可能にします。',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => '訪問者を再認識し、イベントをウェブサイトに結び付けるファーストパーティ識別子',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'コンバージョントラッキングとリマーケティングのためのファーストパーティ訪問者識別子',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'イベントの紐付けのためのファーストパーティセッション識別子',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'キャンペーン測定のためのピクセルごとのファーストパーティセッション識別子',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'キャンペーン測定のためのファーストパーティセッション識別子',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'TikTokでのキャンペーン測定とパーソナライズのためのファーストパーティ広告識別子',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Pinterestが紐付けできない訪問者の行動をまとめるファーストパーティCookie',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Automatic Enhanced Matchで取得したハッシュ化された顧客データを保存するファーストパーティCookie',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => '訪問者ごとに一意の識別子を生成します（2026年6月14日以降のアカウント）',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => '訪問者ごとに一意の識別子を生成します（2026年6月14日より前のアカウント）',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'ウィジェットのあるページでのイベント分析のためのデバイス識別子',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'HubSpotがホストするページでのログイン時に設定されます',
    'Gewaehlte Sprache speichern'
        => '選択した言語の保存',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'MUID識別子をMicrosoftの各ドメイン間で同期します。提供者によればサードパーティCookie',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => '複数のタブ間でメッセージを同期して保ちます',
    'Haelt den Wert des Parameters pk_campaign'
        => 'パラメータpk_campaignの値を保持します',
    'Haelt den Wert des Parameters utm_campaign'
        => 'パラメータutm_campaignの値を保持します',
    'Haelt den Widerspruch gegen die Messung'
        => '測定に対する異議を保持します',
    'Haelt die Ablaufzeit von _uetsid'
        => '_uetsidの有効期限を保持します',
    'Haelt die Ablaufzeit von _uetvid'
        => '_uetvidの有効期限を保持します',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Tag Manager向けにトラフィックソースの種別を保持します',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => '訪問者の識別情報を記録します。連絡先の重複排除にも用いられます',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => '訪問者のCookieに関する選択を記録します',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'ページ遷移の際にウィジェットの表示を一貫させます',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'ランディングページの記録、統計',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Cookieによる測定への同意を保持します',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'カテゴリおよび提供者に関するユーザーの選択を保持します',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'ログイン中のユーザーのセッションと過去の会話へのアクセスを保持します',
    'Haelt die verweisende Adresse'
        => '参照元のアドレスを保持します',
    'Haelt die verweisende Quelle fest; Analyse'
        => '参照元の記録、統計',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'セッションの独自変数を保持します（提供者により非推奨と表示されています）',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'etrackerがCookieを設定してよいかを記録します。data-block-cookiesの場合はAPI呼び出しによって設定されます',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => '動画の所有者がどの機能スイッチを有効にしたかを記録します',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => '訪問者を再認識するための主要なCookie',
    'Heatmaps'
        => 'ヒートマップ',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'クリックとスクロール行動のヒートマップ',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => '訪問中のあいだヒートマップのセッションデータを保持します',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => '進行中のセッションに関する情報を保持します（2026年6月14日以降のアカウント）',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => '進行中のセッションに関する情報を保持します（2026年6月14日より前のアカウント）',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => '訪問中のあいだカスタム変数を保持します',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => '訪問者単位の永続的なデータを保持します（2026年6月14日以降のアカウント）',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Insights分析のために訪問者単位の永続的なデータを保持します（2026年6月14日より前のアカウント）',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => '訪問者の同意状態を記録します（2026年6月14日以降のアカウント）',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => '訪問者の同意状態を記録します（2026年6月14日より前のアカウント）',
    'Hält den Sitzungszustand.'
        => 'セッション状態を保持します。',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Clarityのユーザー識別子とこのウェブサイト用の設定を保持します',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'A/Bテストのバリアント割り当てを保持します',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => '選択された組み合わせを一時的に保持します（2026年6月14日以降のアカウント）',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => '選択された組み合わせを一時的に保持します（2026年6月14日より前のアカウント）',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'リダイレクトが行われる前に、選択されたバリアントを記録します（2026年6月14日以降のアカウント）',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'リダイレクトが行われる前に、選択されたバリアントを記録します（2026年6月14日より前のアカウント）',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'どの参照元から訪問に至ったかを記録します',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Pre-Clearance モードの場合：同一ゾーンにおける以降の WAF 検査の許可',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'コンバージョン計測、リターゲティングおよび分析のための間接的なメンバー識別子',
    'Inhalt des Warenkorbs; notwendig'
        => 'カートの内容；必須',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'ショップにおける購入者関連の分析データ；分析',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'キャンペーンに紐づく一意の識別子（2026年6月14日以降のアカウント）',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Clarity を利用するすべてのサイトを通じた Clarity との最初の接触の識別子；提供者によればサードパーティ Cookie',
    'Kennzeichnet die laufende Sitzung'
        => '進行中のセッションを識別します',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => '以降のコメントのためにコメント入力データを保持',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'A/B テストのバリエーションの一貫した配信',
    'Lastverteilung und Routing'
        => '負荷分散とルーティング',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'チャレンジ要求の負荷分散とルーティング',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => '訪問者のアカウント設定をローカルに保存します',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'A/B テストページの同じバリエーションを配信します',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'ウェブサイト上のサポート向けライブチャットおよびメッセージングチャネル',
    'Live-Chat und Support-Postfach auf der Website'
        => 'ウェブサイト上のライブチャットおよびサポート受信箱',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => '購入画面のマーケティングデータ；マーケティング',
    'Marketingdaten fuer Kaufoberflaechen'
        => '購入画面向けのマーケティングデータ',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => '視聴者のプレーヤー設定（音量、画質、字幕）の保存',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'ウィジェットの状態と設定の保存',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Global Privacy Control バナーを閉じたことを記憶します',
    'Merkt das Schliessen des Hinweis-Banners'
        => '通知バナーを閉じたことを記憶します',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Cookie lms_analytics との照合の時点を記憶します',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => '照合が繰り返されないよう、最後の ID 照合の時点を記憶します',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => '割り当てられたバリエーションを記憶します（2026年6月14日以降のアカウント）',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => '再訪時も同じであるよう、割り当てられたバリエーションを記憶します（2026年6月14日より前のアカウント）',
    'Merkt einen Rabattcode; notwendig'
        => '割引コードを記憶します；必須',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => '測定に対する異議を記憶します（2026年6月14日以降のアカウント）',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => '複数のウェブサイトにまたがる異議を記憶します（2026年6月14日より前のアカウント）',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => '音量、画質、字幕などのプレーヤー設定を記憶します',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => '音声通知の設定を記憶します',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => '測定に対して与えられた同意を記憶します',
    'Merkt sich einen Widerspruch gegen die Messung'
        => '測定に対する異議を記憶します',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => '閉じられたプロアクティブメッセージを記憶します',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => '訪問者が起動ボタンのラベルを閉じたことを記憶します',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'ウィジェットが開いているか閉じているかを記憶します',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => '訪問者をいずれのキャンペーンにも参加させないことを記憶します（2026年6月14日より前のアカウント）',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => '訪問者がキャンペーンの対象外であることを記憶します（2026年6月14日以降のアカウント）',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => '訪問者がキャンペーンの対象外であることを記憶します（2026年6月14日より前のアカウント）',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => '同意に関する通知が閉じられたことを記憶します',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'ショップの通知が閉じられたことを記憶します',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Cookie に関する確認を再度表示しないことを記憶します',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'タグがすでに実行されたことを記憶します',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'この訪問者についてスクロール深度を測定するかどうかを記憶します',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'チャットウィンドウが開いているかどうかを記憶します',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'MUID 識別子が広告識別子に引き渡されるかどうかを記憶します；提供者によれば常に 0、サードパーティ Cookie',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'メールキャンペーンにおける開封とクリックの測定',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'ウィジェットが設置されたページでのセッションとイベントの測定',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'セッションの測定と訪問元の割り当て',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Google によるサービス可用性の測定',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'ページの読み込み時間と主要指標の測定（Real User Monitoring）',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'スクロール深度とクリックイベントの測定',
    'Messung der Werbewirkung'
        => '広告効果の測定',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'ウェブサイト上の利用行動の測定',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'TikTok Pangle 広告ネットワークにおける広告の測定とパーソナライズ',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => '広告キャンペーンの成果の測定と改善',
    'Messung von Auslieferungen und Klicks'
        => '配信とクリックの測定',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => '分析のための訪問者とセッションの測定',
    'Messung von Conversions'
        => 'コンバージョンの測定',
    'Messung von Seitenaufrufen und Besuchen'
        => 'ページビューと訪問の測定',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'ページビューとイベントの測定',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'ページビューと利用行動の測定',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'ページビューとカスタムイベントの測定',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'ページビュー、訪問、セッションの測定',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => '自社サーバー上でのページビュー、訪問、セッションの測定',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'ウェブサイト上の広告キャンペーンとコンバージョンの測定',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'キャンペーンの目標とコンバージョンの測定',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => '提供者からの地図タイル、フォント、スタイルの追加読み込み',
    'Name aus dem Kommentarformular vorbelegen'
        => 'コメントフォームの名前の事前入力',
    'Nutzer-ID'
        => 'ユーザー ID',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'カートを正しい国に割り当てます；必須',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'データベース内でカートを正しい顧客に割り当てます',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => '訪問中の操作を一つのセッションに結び付けます',
    'Personalisierung der Werbung auf TikTok'
        => 'TikTok における広告のパーソナライズ',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'WordPress が Cookie を設定できるかどうかの確認',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'ブラウザーの Cookie 対応を確認します；必須',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'WordPress が Cookie を設定できるかどうかを確認します',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'ショップパスワードの検証値；必須',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => '提供者の検証用 Cookie（2026年6月14日より前のアカウント）',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'ブラウザーが Cookie を受け入れるかどうかを確認します（2026年6月14日以降のアカウント）',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'ブラウザーが Cookie を受け入れるかどうかを確認します（2026年6月14日より前のアカウント）',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'ブラウザがCookieを受け入れるかを確認します（提供者によればInternet Explorerでのみ）',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'HubSpotのCDN提供者におけるレート制限',
    'Reichweiten- und Nutzungsmessung'
        => 'リーチおよび利用状況の測定',
    'Reichweitenmessung'
        => 'リーチ測定',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Vimeo による埋め込み動画のリーチ測定',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'ショップ運営者向けのリーチ測定',
    'Remarketing und Zielgruppenbildung'
        => 'リマーケティングとオーディエンスの構築',
    'Retargeting'
        => 'リターゲティング',
    'Retargeting von Website-Besuchern'
        => 'ウェブサイト訪問者のリターゲティング',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => '人間とボットを区別するためのリスク分析',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => '提供者によれば Safari ブラウザーでのみ作成される集約 Cookie（2026年6月14日以降のアカウント）',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => '提供者によれば Safari ブラウザーでのみ作成される集約 Cookie（2026年6月14日より前のアカウント）',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Spotify および第三者による、これらの利用者の閲覧行動に関する情報の収集',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Klaviyo によるトラッキングを停止するために、ウェブサイト運営者が自ら設定するスイッチ',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'メンバーログインの偽造対策',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'フォームの自動化された不正利用からの保護',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => '自動化されたリクエスト（スパム、クレデンシャルスタッフィング）からの保護',
    'Sicherheit'
        => 'セキュリティ',
    'Sicherheitsfunktionen'
        => 'セキュリティ機能',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'オプション機能 User Journeys が有効な場合のセキュリティ機能',
    'Sitzung'
        => 'セッション',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'セッションおよび言語ないし国の割り当て',
    'Sitzungsaufzeichnung'
        => 'セッション記録',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'ウィジェットが設置されたページのイベント分析用のセッション識別子',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'ショップ統計用のセッション識別子；分析',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Answer Bot サービスのセッションキー',
    'Sitzungswiedergabe'
        => 'セッションリプレイ',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'ログイン後の認証トークンを保存します',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'パスワード保護された動画のエンコードされたパスワードを保存します',
    'Speichert den Schluessel der gewaehlten Sprache'
        => '選択された言語のキーを保存します',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => '訪問者のプライバシーに関する選択を保存します；必須',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => '訪問者の同意に関する決定を保存します',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'チャットウィジェットでの認証のために訪問者のデバイス識別子を保存します',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'ウェビナーに登録した利用者の識別子を保存します',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'ウェブサイト上のイベントを広告に割り当てられるよう、クリック識別子 fbclid を保存します',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => '動画の前に表示される登録フォームから取得した利用者識別子を保存します',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'コンバージョンの割り当てのために TikTok のクリック識別子を保存します',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => '再認識のために一意の訪問者IDを保存します',
    'Speichert die zugestimmten Kategorien'
        => '同意されたカテゴリを保存します',
    'Speist das Widget zuletzt angesehener Produkte'
        => '最近閲覧した商品のウィジェットにデータを供給します',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'MUID 識別子を更新するかどうかを制御します；提供者によればサードパーティ Cookie',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'ウェブサイトの運営とセキュリティのために技術的に必要です。',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'ショップのセッションおよびチェックアウトのデータを保持します；提供者は必須として分類しています',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => '異議申立て（オプトアウト）機能を担います',
    'Transaktionssicherheit'
        => '取引のセキュリティ',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'reCAPTCHA のリスク分析を担います。',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'ウェブサイト上のイベントの TikTok への送信',
    'Umfragen'
        => 'アンケート',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'HubSpot へのデータ送信を停止します',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => '閉じた後にチャットのウェルカムメッセージを表示しないようにします',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Microsoft のサイトにアクセスするブラウザーを区別します；同意がある場合は広告にも使用されます',
    'Unterscheidet einzelne Nutzer.'
        => '個々の利用者を区別します。',
    'Unterscheidung einzelner Nutzer'
        => '個々の利用者の区別',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'フォームおよびログインにおける人間とボットの区別',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => '複数のページビューを一つのセッション記録に結合します',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => '厳格モードでバナーが繰り返し表示されるのを防ぎます',
    'Verteilen der Consent-Signale an Google-Tags'
        => '同意シグナルの Google タグへの配信',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'コンテナで構成されたタグに対する同意の決定の管理',
    'Verwaltung des Widerspruchs gegen die Messung'
        => '測定に対する異議の管理',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => '測定に関する異議と同意の管理',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Google によりカテゴリ「分析」および「広告」に分類されています。',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Googleにより分析、広告、セキュリティのカテゴリに分類されています。',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Google によりカテゴリ「機能」「広告」「セキュリティ」に分類されています。',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Googleによりセキュリティと機能のカテゴリに分類されています。',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Googleによりセキュリティと広告のカテゴリに分類されています。',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Googleによりセキュリティ、分析、機能、広告のカテゴリに分類されています。',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Google によりカテゴリ「セキュリティ」「機能」「広告」に分類されています。',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Googleにより広告とセキュリティのカテゴリに分類されています。',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Googleにより分析のカテゴリに分類されていますが、より詳しい目的をGoogleは示していません。',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Googleにより機能のカテゴリに分類されています。',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Googleによりセキュリティのカテゴリに分類されています。',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Googleにより広告のカテゴリに分類されています。',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => '同意なしに設定してはならない Cookie の一つとして Microsoft が挙げています；固有の目的の説明を Microsoft は示していません',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'リーチ測定のために Vimeo が生成する識別子',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'チェックアウト完了後のカートの通貨；必須',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => '確率に基づくブラウザーと個人の紐づけ',
    'Warenkorb einer Besucherin zuordnen'
        => 'カートの訪問者への割り当て',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'コメントフォームのウェブサイトアドレスの事前入力',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => '広告目的での視聴者の再識別',
    'Werbepersonalisierung'
        => '広告のパーソナライズ',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => '_pin_unauth と同様だが、サードパーティ Cookie として設定される',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => '予約手続き中における訪問者の再識別',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'ページビューやタブをまたいだ訪問者の再識別',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'ウェブサイト訪問者の再識別および特定',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => '複数回の訪問にわたる訪問者の再識別',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'リターゲティングのための、連携ウェブサイトの訪問者の再識別',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => '再訪問者の再識別と過去の会話の紐づけ',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => '訪問者の再識別とその属性の保存',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Criteo 識別子によるブラウザーの再識別',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => '利用者の再識別；同意がある場合のみで、既定ではブロックされます',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => '同意後の再訪問時におけるブラウザーの再識別',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => '訪問者の再識別とセッションへの紐づけ',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => '広告のための、LinkedIn 外における LinkedIn メンバーの再識別',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => '同意後の利用者の再識別',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => '訪問者IDによる再訪問者の識別',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'キャンペーンの目標が発生した際に設定されます（2026年6月14日以降のアカウント）',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'キャンペーンの目標が発生した際に設定されます（2026年6月14日より前のアカウント）',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Pinterest タグが組み込まれたウェブサイトを人が訪問した際に設定されます',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => '既存の Cookie なしに、たとえば Enhanced Match によって紐づけが成功した際に設定されます',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Pinterest が広告経由のトラフィックとともに引き渡す情報に基づき、JavaScript タグによって設定されます',
    'Zaehlt und begrenzt Sitzungen'
        => 'セッションを数え、制限します',
    'Zahlungsabwicklung'
        => '決済処理',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'セッションが継続中か新規かを示します',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'ログインしているかどうか、また誰としてログインしているかをインターフェースに示します',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'ウェブサイトのピクセルイベントを一つのブラウザーに紐づける、ランダムなブラウザー識別子',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => '最近閲覧した商品の該当ウィジェットでの表示',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'ウェブサイト上の行動のプロファイルへの紐づけ',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => '訪問の流入元の特定（リファラー、アトリビューション）',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'メールアドレスによる、訪問者と Brevo アカウント内の連絡先との紐づけ',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'リードや売上などのトランザクションのパブリッシャーへの紐づけ',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'ウェブサイト上の行動の、以前に表示された広告への紐づけ',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => '複数のページビューの一つのセッションへの統合',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => '訪問履歴の記録されたイベントに関する追加データ',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => '複数回の訪問にわたるバリエーションの割り当てと維持',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'CSS セレクターに基づくイベントの一時保存領域',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'ブラウザーストレージ内のメッセンジャーおよび訪問者データの一時保存領域',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Tag Manager のエントリの一時保存領域',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'スクロール深度測定の一時保存領域',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Tag Manager の変数の一時保存領域',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'サーバーへの繰り返しのリクエストを避けるための、ウィジェット設定の一時保存領域',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'メッセンジャーおよび訪問者データのブラウザーへの一時保存',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => '訪問者に対して作成されたセッションを数えます（2026年6月14日以降のアカウント）',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => '測定中にブラウザーが閉じられ、再度開かれた回数を数えます（2026年6月14日より前のアカウント）',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'ページビューと訪問の集計',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => '利用者の行動の自動的な分析',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => '国、地域、都市レベルでの大まかな地理的判定',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'オプションでセッションの記録（Session Replay）。既定ではテキスト、画像、入力内容はマスクされる',
    'optional Heatmaps und A/B-Tests'
        => '任意でヒートマップとA/Bテスト',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Split-URL テストの際に参照元を引き渡します（2026年6月14日以降のアカウント）',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Split-URL テストの際に参照元を引き渡します（2026年6月14日より前のアカウント）',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'リードや売上などのトランザクションのパブリッシャーへの紐づけ, 広告素材の効果測定と手数料の精算',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'マーケティングオートメーションのためのウェブサイトの訪問者とページビューの記録, メールアドレスによる、訪問者と Brevo アカウント内の連絡先との紐づけ, 運営者が定義した独自イベントの記録',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'ウェブサイト上での予約カレンダーの表示と予約の受付, 予約手続き中における訪問者の再識別, 予約が有料の場合の決済処理',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'フォームへの自動化されたアクセスの検出と拒否, ウェブサイトのサーバーが検証するトークンの発行, Pre-Clearance モードの場合：同一ゾーンにおける以降の WAF 検査の許可',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'ページビューと訪問の測定, ページの読み込み時間と主要指標の測定（Real User Monitoring）',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'パーソナライズド広告の配信, 広告効果の測定, Criteo 識別子によるブラウザーの再識別',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'ウェブサイト上の利用行動の測定, 同意後の仮名化された利用プロファイルの作成, 同意後の再訪問時におけるブラウザーの再識別',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'ページビューと利用行動の測定, スクロール深度とクリックイベントの測定, 同意後の利用者の再識別, 測定に対する異議の管理',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'フォームおよびログインにおける人間とボットの区別, 自動化されたリクエスト（スパム、クレデンシャルスタッフィング）からの保護',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'コンバージョンの測定, リマーケティングとオーディエンスの構築, 広告表示頻度の制限, クリック詐欺の検出',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => '広告の配信, 広告表示頻度の制限, 不正行為および不正利用の検出, 配信とクリックの測定',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => '個々の利用者の区別, セッション状態の維持, リーチおよび利用状況の測定',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'インタラクティブな地図の表示, Google によるサービス可用性の測定',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => '人間とボットを区別するためのリスク分析, フォームの自動化された不正利用からの保護',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'ウェブサイト上でのタグの配信と管理, 同意シグナルの Google タグへの配信',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'フォームおよびログインにおける人間とボットの区別, チャレンジ要求の負荷分散とルーティング, アクセシビリティ機能の提供',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'ヒートマップ, セッション記録, アンケート',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => '複数回の訪問にわたる訪問者の再識別, セッションの測定と訪問元の割り当て, 連絡先の重複排除, チャットウィジェットの動作, A/B テストのバリエーションの一貫した配信',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'ウェブサイト上のライブチャットおよびサポート受信箱, 再訪問者の再識別と過去の会話の紐づけ, 不正利用対策のためのデバイスの識別, メッセンジャーおよび訪問者データのブラウザーへの一時保存',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => '商品ページおよびカートページでの分割払い・ファイナンス案内の表示（On-site Messaging）, アドサーバーを介した、ページのソースコード内に用意されたプレースホルダーへの告知内容の配信',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'ウェブサイト訪問者の再識別および特定, ウェブサイト上の行動のプロファイルへの紐づけ, ウェブサイト上での登録フォームの表示制御',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'LinkedIn広告キャンペーンのコンバージョントラッキング, ウェブサイト訪問者のリターゲティング, ウェブサイトの利用者層の分析（ウェブサイトデモグラフィック）',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'リターゲティングのための、連携ウェブサイトの訪問者の再識別, ポップアップフォームが繰り返し表示されないようにするための表示制御, メールキャンペーンにおける開封とクリックの測定, 連携先ウェブサイトへのGoogleおよびFacebookの広告ピクセルの組み込み',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'ウェブサイト上でのインタラクティブな地図の表示, 提供者からの地図タイル、フォント、スタイルの追加読み込み, 地図の呼び出しの課金と保護',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'ページビュー、訪問、セッションの測定, 訪問者IDによる再訪問者の識別, 訪問の流入元の特定（リファラー、アトリビューション）, 任意でヒートマップとA/Bテスト',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => '自社サーバー上でのページビュー、訪問、セッションの測定, 訪問者IDによる再訪問者の識別, 訪問の流入元の特定（リファラー、アトリビューション）, 任意でヒートマップとA/Bテスト',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'ウェブサイト上でのタグの配信と発火, コンテナで構成されたタグに対する同意の決定の管理',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'ウェブサイト上の広告キャンペーンとコンバージョンの測定, ターゲット層の構築とリターゲティング',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Microsoft Advertisingキャンペーンのコンバージョントラッキング, リマーケティングリストの作成, ページビューとカスタムイベントの測定',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'セッションの記録と再生, クリックとスクロール行動のヒートマップ, 複数のページビューの一つのセッションへの統合, 利用者の行動の自動的な分析',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => '訪問者が開始した決済の処理, カード情報がショップを経由しないようにするための、独自チェックアウトへのカード入力フィールドの埋め込み, 不正防止および決済サービス提供者としての法的義務の履行',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'マウスの動きの記録, セッションリプレイ, 利用行動の分析',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => '埋め込み地図への地図タイルの配信, 地図サービスの運用と不正利用対策',
    'Zahlungsabwicklung, Betrugsprävention'
        => '決済処理, 不正防止',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Pinterest広告キャンペーンのコンバージョントラッキング, ターゲット層の構築とリターゲティング, ウェブサイト上の行動の、以前に表示された広告への紐づけ',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'ページビューとイベントの測定, 訪問者の再識別とセッションへの紐づけ, 流入元とキャンペーンの分析, デバイス、ブラウザ、推定所在地の分析, eコマースと目標の分析',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'ページビューと訪問の集計, 参照元の分析, ブラウザ、オペレーティングシステム、デバイス種別の分析, 国、地域、都市レベルでの大まかな地理的判定',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'ブラウザからのアプリケーションエラーの収集と送信, オプションでセッションの記録（Session Replay）。既定ではテキスト、画像、入力内容はマスクされる',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'ショップのカートと決済手続きの動作, セッションおよび言語ないし国の割り当て, ショップ運営者向けのリーチ測定, 購入画面向けのマーケティングデータ',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => '楽曲、アルバム、プレイリスト、ポッドキャストのエピソードの埋め込みと再生, Spotify および第三者による、これらの利用者の閲覧行動に関する情報の収集, 第三者がこれらのユーザーのブラウザにCookieを設定できるようにすること',
    'Besucherzählung, Reichweitenmessung'
        => '訪問者数の集計, リーチ測定',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => '決済試行の不正検出とリスク評価, Stripe Elementsの決済入力フィールドの提供, 注文手続きにおけるボットおよび自動化された挙動の検出',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => '広告キャンペーンの成果の測定と改善, TikTok における広告のパーソナライズ, ウェブサイト上のイベントの TikTok への送信',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'ウェブサイトへのフォームとアンケートの埋め込み, 回答の収集とフォーム運営者への送信',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'ウェブサイト上での動画の埋め込みと再生, 視聴者のプレーヤー設定（音量、画質、字幕）の保存, Vimeo による埋め込み動画のリーチ測定, プレーヤーのボットおよび不正利用対策',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'ウェブサイト上のA/BテストおよびスプリットURLテスト, 複数回の訪問にわたるバリエーションの割り当てと維持, キャンペーンの目標とコンバージョンの測定, 分析のための訪問者とセッションの測定, 測定に関する異議と同意の管理',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'カートの訪問者への割り当て, カートの内容が変更されたかどうかの検出, 最近閲覧した商品の該当ウィジェットでの表示, ショップの通知を非表示にした状態の記憶',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => '管理画面でのログインとセッションの識別, 以降のコメントのためにコメント入力データを保持, 管理画面の表示設定の記憶, WordPress が Cookie を設定できるかどうかの確認, 選択した言語の保存',
    'Conversion-Messung, Retargeting'
        => 'コンバージョン測定, リターゲティング',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => '埋め込み動画の再生, セキュリティ, 広告目的での視聴者の再識別',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'ウェブサイト上のサポート向けライブチャットおよびメッセージングチャネル, ページビューやタブをまたいだ訪問者の再識別, ウィジェットの状態と設定の保存, ウィジェットが設置されたページでのセッションとイベントの測定',
];
