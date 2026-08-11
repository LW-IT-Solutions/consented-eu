<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Tuerkisch.
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
        => 'Web sitesinde A/B testleri ve Split URL testleri',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Harita çağrılarının faturalandırılması ve korunması',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Shop ile oturum açma işleminin tamamlanması; gerekli',
    'Abspielen eingebetteter Videos'
        => 'Gömülü videoların oynatılması',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Ziyaretçi tarafından başlatılan bir ödemenin işlenmesi',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Randevu ücretliyse ödemelerin işlenmesi',
    'Analyse des Nutzungsverhaltens'
        => 'Kullanım davranışının analizi',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Satın alma arayüzlerinin analiz verileri; analiz',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Mağazanın analiz verileri; sağlayıcı tarafından analiz olarak sınıflandırılmıştır',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => '/wp-admin/ altındaki yönetim alanı için oturum açma verileri',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Shop Pay\'de oturum açma; gerekli',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Yönetim alanında oturum açma ve oturum tanıma',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Anonim, hizmete ilişkin istatistik ve diğer teknik amaçlar, bunlar arasında erişilebilirlik desteği',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Yönetim alanının hesap bazında görünüm ayarları',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Yönetim alanının görünüm ayarlarının hatırlanması',
    'Anzeige von Bewertungen'
        => 'Değerlendirmelerin gösterilmesi',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Web sitesinde rezervasyon takviminin gösterilmesi ve randevu alınması',
    'Anzeigen einer interaktiven Karte'
        => 'Etkileşimli bir haritanın gösterilmesi',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => '1 değerine ayarlandığında UET olaylarının Microsoft\'a gönderilmesini engeller',
    'Aufbau von Remarketing-Listen'
        => 'Yeniden pazarlama listelerinin oluşturulması',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Oturumların kaydedilmesi ve yeniden oynatılması',
    'Aufzeichnung von Mausbewegungen'
        => 'Fare hareketlerinin kaydedilmesi',
    'Ausblenden des Shop-Hinweises merken'
        => 'Mağaza bildiriminin gizlenmesinin hatırlanması',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Web sitesinde etiketlerin sunulması ve tetiklenmesi',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Web sitesinde etiketlerin sunulması ve yönetilmesi',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Gömülü haritalara harita karolarının sunulması',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Bildirim içeriklerinin bir reklam sunucusu üzerinden sayfa kaynak kodundaki hazırlanmış yer tutuculara sunulması',
    'Auslieferung personalisierter Werbung'
        => 'Kişiselleştirilmiş reklamların sunulması',
    'Auslieferung von Anzeigen'
        => 'Reklamların sunulması',
    'Auslieferung von Bibliotheken und Assets'
        => 'Kitaplıkların ve varlıkların sunulması',
    'Auslieferung von Schriftarten'
        => 'Yazı tiplerinin sunulması',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Web sitesinin sunucusunun doğruladığı bir token\'ın verilmesi',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Web sitesinde kayıt formlarının yönetilmesi',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Açılır formların tekrar tekrar görünmemesi için yönetilmesi',
    'Auswahl des Rechenzentrums'
        => 'Veri merkezinin seçilmesi',
    'Auswertung der Verweisquellen'
        => 'Yönlendiren kaynakların değerlendirilmesi',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Web sitesi hedef kitlesinin değerlendirilmesi (web sitesi demografisi)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Tarayıcı, işletim sistemi ve cihaz türünün değerlendirilmesi',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Cihaz, tarayıcı ve tahmini konumun değerlendirilmesi',
    'Auswertung von Herkunft und Kampagnen'
        => 'Kaynak ve kampanyaların değerlendirilmesi',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Son kullanıcının isteklerini kimlik doğrulamasından geçirir',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Gösterim sıklığının sınırlandırılması',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Bölgede başka doğrulamaların istenmemesi için geçilmiş bir kontrolü belgeler',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Stripe Elements ödeme alanlarının sağlanması',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Erişilebilirlik erişiminin sağlanması',
    'Besucherzählung'
        => 'Ziyaretçi sayımı',
    'Betrieb des Chat-Widgets'
        => 'Sohbet bileşeninin çalıştırılması',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Harita hizmetlerinin çalıştırılması ve kötüye kullanıma karşı korunması',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Bir mağazanın sepetinin ve ödeme sürecinin çalıştırılması',
    'Betrugs- und Missbrauchserkennung'
        => 'Dolandırıcılık ve kötüye kullanım tespiti',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Ödeme denemesinde dolandırıcılık tespiti',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Dolandırıcılık tespiti ve ödeme denemelerinin risk değerlendirmesi',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Dolandırıcılığın önlenmesi ve ödeme hizmeti sağlayıcısı olarak yasal yükümlülükler',
    'Betrugsprävention'
        => 'Dolandırıcılığın önlenmesi',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Dolandırıcılığın önlenmesi ve bir ödeme denemesinin risk değerlendirmesi',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Rıza sonrasında takma adlı kullanım profillerinin oluşturulması',
    'Bildung von Zielgruppen und Retargeting'
        => 'Hedef kitlelerin oluşturulması ve yeniden hedefleme',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Oturumu aynı AWS örneğine bağlar',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Oynatıcı için bot ve kötüye kullanıma karşı koruma',
    'Bot-Abwehr fuer den Player'
        => 'Oynatıcı için bot koruması',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'HubSpot kaynakları sunulurken bot koruması',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'LinkedIn\'in cihazları ayırt ettiği ve kötüye kullanımı tespit ettiği tarayıcı kimliği',
    'Cloudflare-Bot-Abwehr'
        => 'Cloudflare bot koruması',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Trafik filtrelemesi için Cloudflare bot tespiti',
    'Cloudflare-Ratenbegrenzung'
        => 'Cloudflare istek sınırlaması',
    'Conversion-Messung'
        => 'Dönüşüm ölçümü',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'LinkedIn reklam kampanyaları için dönüşüm takibi',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Microsoft Advertising kampanyaları için dönüşüm takibi',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Pinterest reklam kampanyaları için dönüşüm takibi',
    'Darstellung interaktiver Karten auf der Website'
        => 'Web sitesinde etkileşimli haritaların gösterilmesi',
    'Deduplizieren von Kontakten'
        => 'Kişilerin yinelenenlerinin ayıklanması',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Reklamların gösterilmesine ve ölçülmesine hizmet eder.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'Alan adları arası ziyaretçi kimliği; sağlayıcıya göre üçüncü taraf çerezi, yalnızca yapılandırma dosyasında üçüncü taraf çerezleri etkinleştirildiğinde kullanılır',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Ziyaretçilerin yeniden tanınması için üçüncü taraf kimliği',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Klaviyo\'ya aktarılan üçüncü taraf kimliği',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'TikTok\'ta kampanyaların ölçülmesi ve kişiselleştirme için üçüncü taraf reklam kimliği',
    'E-Commerce- und Zielauswertung'
        => 'E-ticaret ve hedef değerlendirmesi',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Yorum formundaki e-posta adresinin önceden doldurulması',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Parçaların, albümlerin, çalma listelerinin ve podcast bölümlerinin gömülmesi ve oynatılması',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Web sitesinde videoların gömülmesi ve oynatılması',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Web sitesine form ve anket gömülmesi',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Kart verilerinin mağaza üzerinden geçmemesi için kart alanlarının kendi ödeme sayfasına gömülmesi',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Harici olarak yönetilen bir çerez bildiriminin gömülmesi',
    'Einbettung von Audioinhalten'
        => 'Ses içeriklerinin gömülmesi',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Bağlı web sitesine Google ve Facebook reklam piksellerinin eklenmesi',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Ürün ve sepet sayfalarında finansman ve taksit bilgilerinin gösterilmesi (On-site Messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Alan adları arası ölçümde benzersiz kimlik (14.06.2026 tarihinden itibaren hesaplar)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Alan adları arası ölçümde benzersiz kimlik (14.06.2026 tarihinden önceki hesaplar)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Vazgeçme formunda CSRF\'ye karşı tek kullanımlık değer',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Bir kullanıcı kimliği ve oluşturulma zamanını içerir; kaynağa göre web sitesi alan adında değil, Pinterest uygulama içi tarayıcısında ayarlanır',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Yanıtların toplanması ve form işletmecisine iletilmesi',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Değerlendirme amacıyla web sitesi kullanımını kaydeder.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'İşletmeci tarafından tanımlanan özel olayların kaydedilmesi',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Uygulama hatalarının tarayıcıdan kaydedilmesi ve iletilmesi',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Pazarlama otomasyonu için web sitesindeki ziyaretçilerin ve sayfa görüntülemelerinin kaydedilmesi',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Bir reklam aracının başarı ölçümü ve komisyonun hesaplanması',
    'Erhalt des Sitzungszustands'
        => 'Oturum durumunun korunması',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Kötüye kullanıma karşı koruma için cihazın tanınması',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Formlarda otomatik erişimlerin tespit edilmesi ve reddedilmesi',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Sipariş sürecinde botların ve otomatik davranışın tespit edilmesi',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Sepet içeriğinin değişip değişmediğinin tespit edilmesi',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Sepet içeriğindeki değişiklikleri algılar',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Intercom kodunun yerleştirildiği web sitesinin ziyaretçilerini tanır',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Microsoft web sitelerinde tarayıcıları yeniden tanır; sağlayıcıya göre reklam için de kullanılır, üçüncü taraf çerezi',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Sohbet aracı üzerinden yazan kişileri yeniden tanır',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Görüşmenin başlatıldığı cihazı tanır',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Kötüye kullanıma karşı koruma için Messenger ile etkileşime giren tekil cihazı tanır',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Görüşmeyi başlatan son kullanıcıyı tanır',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Sohbet bileşeninin yerleştirildiği alan adını veya alt alan adını tanır',
    'Erkennt wiederkehrende Besucher'
        => 'Tekrar gelen ziyaretçileri tanır',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Tarayıcının yeniden başlatılıp başlatılmadığını tespit eder',
    'Erkennung von Klickbetrug'
        => 'Tıklama dolandırıcılığının tespiti',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Web sitesine yapılan benzersiz erişimleri belirler (14.06.2026 tarihinden itibaren hesaplar)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Web sitesine yapılan benzersiz erişimleri belirler (14.06.2026 tarihinden önceki hesaplar)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Üçüncü tarafların bu kullanıcıların tarayıcısında çerez yerleştirmesine olanak tanır',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Erişilebilirlik erişiminin kullanılmasını sağlar',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Web sitesinin ek işlevlerini mümkün kılar.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Ziyaretçileri yeniden tanıyan ve web sitesi olaylarını ilişkilendiren birinci taraf kimliği',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Dönüşüm takibi ve yeniden pazarlama için birinci taraf ziyaretçi kimliği',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Olayların ilişkilendirilmesi için birinci taraf oturum kimliği',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Kampanya ölçümü için piksel başına birinci taraf oturum kimliği',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Kampanya ölçümü için birinci taraf oturum kimliği',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'TikTok\'ta kampanyaların ölçülmesi ve kişiselleştirme için birinci taraf reklam kimliği',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Pinterest\'in ilişkilendiremediği ziyaretçilerin eylemlerini gruplayan birinci taraf çerezi',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Automatic Enhanced Match ile toplanan karma değeri alınmış müşteri verilerini saklayan birinci taraf çerezi',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Her ziyaretçi için benzersiz bir kimlik oluşturur (14.06.2026 tarihinden itibaren hesaplar)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Her ziyaretçi için benzersiz bir kimlik oluşturur (14.06.2026 tarihinden önceki hesaplar)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Bileşen bulunan sayfalardaki olayların değerlendirilmesi için cihaz kimliği',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'HubSpot tarafından barındırılan bir sayfada oturum açıldığında ayarlanır',
    'Gewaehlte Sprache speichern'
        => 'Seçilen dilin kaydedilmesi',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'MUID kimliğini Microsoft alan adları arasında eşitler; sağlayıcıya göre üçüncü taraf çerezi',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Mesajları birden çok sekme arasında eşzamanlı tutar',
    'Haelt den Wert des Parameters pk_campaign'
        => 'pk_campaign parametresinin değerini tutar',
    'Haelt den Wert des Parameters utm_campaign'
        => 'utm_campaign parametresinin değerini tutar',
    'Haelt den Widerspruch gegen die Messung'
        => 'Ölçüme yapılan itirazı saklar',
    'Haelt die Ablaufzeit von _uetsid'
        => '_uetsid\'in sona erme süresini tutar',
    'Haelt die Ablaufzeit von _uetvid'
        => '_uetvid\'in sona erme süresini tutar',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Tag Manager için trafik kaynağı türünü tutar',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Ziyaretçi kimliğini kaydeder, ayrıca kişilerin yinelenenlerinin ayıklanması için',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Ziyaretçinin çerez kararını kaydeder',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Sayfa değişiminde bileşenin görünümünü tutarlı tutar',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Giriş sayfasını kaydeder; analiz',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Çerezlerle ölçüme verilen rızayı tutar',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Kullanıcının kategorilere ve sağlayıcılara ilişkin kararını tutar',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Oturum açmış kullanıcıların oturumunu ve önceki görüşmelere erişimi tutar',
    'Haelt die verweisende Adresse'
        => 'Yönlendiren adresi tutar',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Yönlendiren kaynağı kaydeder; analiz',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Oturumun özel değişkenlerini tutar (sağlayıcı tarafından kullanımdan kaldırılmış olarak işaretlenmiştir)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'etracker\'ın çerez yerleştirip yerleştiremeyeceğini kaydeder; data-block-cookies durumunda API çağrısıyla ayarlanır',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Video sahibinin hangi işlev anahtarlarını etkinleştirdiğini kaydeder',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Ziyaretçilerin yeniden tanınması için ana çerez',
    'Heatmaps'
        => 'Isı haritaları',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Tıklamaların ve kaydırma davranışının ısı haritaları',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Ziyaret süresince ısı haritası oturum verilerini tutar',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Devam eden oturuma ilişkin bilgileri tutar (14.06.2026 tarihinden itibaren hesaplar)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Devam eden oturuma ilişkin bilgileri tutar (14.06.2026 tarihinden önceki hesaplar)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Ziyaret süresince özel değişkenleri tutar',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Ziyaretçi düzeyinde kalıcı verileri tutar (14.06.2026 tarihinden itibaren hesaplar)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Insights değerlendirmesi için ziyaretçi düzeyinde kalıcı verileri tutar (14.06.2026 tarihinden önceki hesaplar)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Ziyaretçinin rıza durumunu kaydeder (14.06.2026 tarihinden itibaren hesaplar)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Ziyaretçinin rıza durumunu kaydeder (14.06.2026 tarihinden önceki hesaplar)',
    'Hält den Sitzungszustand.'
        => 'Oturum durumunu tutar.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Clarity kullanıcı kimliğini ve bu web sitesine ilişkin ayarları tutar',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'A/B testleri için varyant atamasını tutar',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Seçilen kombinasyonu geçici olarak kaydeder (14.06.2026 tarihinden itibaren hesaplar)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Seçilen kombinasyonu geçici olarak kaydeder (14.06.2026 tarihinden önceki hesaplar)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Yönlendirme gerçekleşmeden önce seçilen varyantı kaydeder (14.06.2026 tarihinden itibaren hesaplar)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Yönlendirme gerçekleşmeden önce seçilen varyantı kaydeder (14.06.2026 tarihinden önceki hesaplar)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Ziyaretin hangi yönlendirme üzerinden gerçekleştiğini kaydeder',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Pre-Clearance modunda: aynı bölgedeki sonraki WAF denetimleri için geçiş izni',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Dönüşüm takibi, yeniden hedefleme ve değerlendirme için dolaylı üye kimliği',
    'Inhalt des Warenkorbs; notwendig'
        => 'Sepetin içeriği; gerekli',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Mağazadaki alıcıya ilişkin analiz verileri; istatistik',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Kampanyaya özgü benzersiz kimlik (hesaplar 14.06.2026\'dan itibaren)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Tüm Clarity siteleri genelinde Clarity ile ilk temasın kimliği; sağlayıcıya göre üçüncü taraf çerezi',
    'Kennzeichnet die laufende Sitzung'
        => 'Devam eden oturumu tanımlar',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Yorum verilerinin sonraki yorumlar için saklanması',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'A/B testi varyantlarının tutarlı biçimde gösterilmesi',
    'Lastverteilung und Routing'
        => 'Yük dağıtımı ve yönlendirme',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Challenge isteklerinin yük dağıtımı ve yönlendirmesi',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Ziyaretçinin hesap ayarlarını yerel olarak saklar',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'A/B testi sayfasının hep aynı varyantını sunar',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Web sitesindeki destek için canlı sohbet ve mesajlaşma kanalı',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Web sitesinde canlı sohbet ve destek gelen kutusu',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Satın alma arayüzlerinin pazarlama verileri; pazarlama',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Satın alma arayüzleri için pazarlama verileri',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'İzleyicinin oynatıcı ayarlarının hatırlanması (ses düzeyi, kalite, altyazı)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Widget durumunun ve ayarlarının hatırlanması',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Global Privacy Control bandının kapatıldığını hatırlar',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Bilgilendirme bandının kapatıldığını hatırlar',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'lms_analytics çerezi ile yapılan eşleştirmenin zamanını hatırlar',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Son kimlik eşleştirmesinin zamanını hatırlar, böylece eşleştirme yinelenmez',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Atanan varyantı hatırlar (hesaplar 14.06.2026\'dan itibaren)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Atanan varyantı hatırlar, böylece yeniden ziyarette aynı kalır (hesaplar 14.06.2026\'dan önce)',
    'Merkt einen Rabattcode; notwendig'
        => 'Bir indirim kodunu hatırlar; gerekli',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Ölçüme yapılan itirazı hatırlar (hesaplar 14.06.2026\'dan itibaren)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Siteler arası bir itirazı hatırlar (hesaplar 14.06.2026\'dan önce)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Ses düzeyi, kalite ve altyazı gibi oynatıcı ayarlarını hatırlar',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Sesli bildirim ayarını hatırlar',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Ölçüme verilen rızayı hatırlar',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Ölçüme yapılan itirazı hatırlar',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Kapatılan proaktif mesajları hatırlar',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Ziyaretçinin başlatma düğmesinin etiketini kapattığını hatırlar',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Widget\'ın açık mı kapalı mı olduğunu hatırlar',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Ziyaretçinin hiçbir kampanyaya katılmaması gerektiğini hatırlar (hesaplar 14.06.2026\'dan önce)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Ziyaretçinin kampanya dışında tutulduğunu hatırlar (hesaplar 14.06.2026\'dan itibaren)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Ziyaretçinin kampanya dışında tutulduğunu hatırlar (hesaplar 14.06.2026\'dan önce)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Rıza bildiriminin kapatıldığını hatırlar',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Mağaza bildiriminin kapatıldığını hatırlar',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Çerez sorusunun yeniden sorulmaması gerektiğini hatırlar',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Bir etiketin daha önce tetiklendiğini hatırlar',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Bu ziyaretçide kaydırma derinliğinin ölçülüp ölçülmediğini hatırlar',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Sohbet penceresinin açık olup olmadığını hatırlar',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'MUID kimliğinin bir reklam kimliğine aktarılıp aktarılmadığını hatırlar; sağlayıcıya göre her zaman 0, üçüncü taraf çerezi',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'E-posta kampanyalarındaki açılmaların ve tıklamaların ölçülmesi',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Widget bulunan sayfalarda oturumların ve olayların ölçülmesi',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Oturumların ölçülmesi ve ziyaret kaynağının eşleştirilmesi',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Hizmet erişilebilirliğinin Google tarafından ölçülmesi',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Sayfanın yüklenme süresinin ve temel ölçütlerinin ölçümü (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Kaydırma derinliğinin ve tıklama olaylarının ölçümü',
    'Messung der Werbewirkung'
        => 'Reklam etkisinin ölçümü',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Web sitesindeki kullanım davranışının ölçümü',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'TikTok Pangle reklam ağında reklamların ölçümü ve kişiselleştirilmesi',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Reklam kampanyalarının performansının ölçülmesi ve iyileştirilmesi',
    'Messung von Auslieferungen und Klicks'
        => 'Gösterimlerin ve tıklamaların ölçümü',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Değerlendirmeler için ziyaretçilerin ve oturumların ölçümü',
    'Messung von Conversions'
        => 'Dönüşümlerin ölçümü',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Sayfa görüntülemelerinin ve ziyaretlerin ölçümü',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Sayfa görüntülemelerinin ve olayların ölçümü',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Sayfa görüntülemelerinin ve kullanım davranışının ölçümü',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Sayfa görüntülemelerinin ve özel olayların ölçümü',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Sayfa görüntülemelerinin, ziyaretlerin ve oturumların ölçümü',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Sayfa görüntülemelerinin, ziyaretlerin ve oturumların kendi sunucusunda ölçümü',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Web sitesinde reklam kampanyalarının ve dönüşümlerin ölçümü',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Bir kampanyanın hedeflerinin ve dönüşümlerinin ölçümü',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Harita karolarının, yazı tiplerinin ve stillerin sağlayıcıdan sonradan yüklenmesi',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Yorum formundaki adın ön doldurulması',
    'Nutzer-ID'
        => 'Kullanıcı kimliği',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Sepeti doğru ülkeye eşler; gerekli',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Sepeti veritabanında doğru müşteriye eşler',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Bir ziyaretin eylemlerini bir oturuma atar',
    'Personalisierung der Werbung auf TikTok'
        => 'TikTok\'ta reklamların kişiselleştirilmesi',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'WordPress\'in çerez yerleştirip yerleştiremediğinin denetlenmesi',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Tarayıcının çerez desteğini denetler; gerekli',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'WordPress\'in çerez yerleştirip yerleştiremediğini denetler',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Mağaza parolasının denetim değeri; gerekli',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Sağlayıcının denetim çerezi (hesaplar 14.06.2026\'dan önce)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Tarayıcının çerez kabul edip etmediğini denetler (hesaplar 14.06.2026\'dan itibaren)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Tarayıcının çerez kabul edip etmediğini denetler (hesaplar 14.06.2026\'dan önce)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Tarayıcının çerez kabul edip etmediğini kontrol eder (sağlayıcıya göre yalnızca Internet Explorer\'da)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'HubSpot\'un CDN sağlayıcısında istek sınırlaması',
    'Reichweiten- und Nutzungsmessung'
        => 'Erişim ve kullanım ölçümü',
    'Reichweitenmessung'
        => 'Erişim ölçümü',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Gömülü videoların Vimeo tarafından erişim ölçümü',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Mağaza işletmecisi için erişim ölçümü',
    'Remarketing und Zielgruppenbildung'
        => 'Yeniden pazarlama ve hedef kitle oluşturma',
    'Retargeting'
        => 'Yeniden hedefleme',
    'Retargeting von Website-Besuchern'
        => 'Web sitesi ziyaretçilerinin yeniden hedeflenmesi',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'İnsan ile bot ayrımı için risk analizi',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Toplayıcı çerez, sağlayıcıya göre yalnızca Safari tarayıcısında oluşturulur (hesaplar 14.06.2026\'dan itibaren)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Toplayıcı çerez, sağlayıcıya göre yalnızca Safari tarayıcısında oluşturulur (hesaplar 14.06.2026\'dan önce)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Bu kullanıcıların gezinme davranışına ilişkin bilgilerin Spotify ve üçüncü taraflarca toplanması',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Klaviyo takibini durdurmak için web sitesi işletmecisinin kendisinin ayarladığı anahtar',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Üye girişinin sahteciliğe karşı korunması',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Formların otomatik kötüye kullanıma karşı korunması',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Otomatik isteklere karşı koruma (spam, credential stuffing)',
    'Sicherheit'
        => 'Güvenlik',
    'Sicherheitsfunktionen'
        => 'Güvenlik işlevleri',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'İsteğe bağlı User Journeys işlevi etkinken güvenlik işlevleri',
    'Sitzung'
        => 'Oturum',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Oturum ile dil veya ülke eşlemesi',
    'Sitzungsaufzeichnung'
        => 'Oturum kaydı',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Widget bulunan sayfalardaki olayların değerlendirilmesi için oturum kimliği',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Mağaza istatistiği için oturum kimliği; istatistik',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Answer Bot hizmetinin oturum anahtarı',
    'Sitzungswiedergabe'
        => 'Oturum tekrarı',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Giriş sonrasında kimlik doğrulama belirtecini saklar',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Parola korumalı videolar için kodlanmış parolayı saklar',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Seçilen dilin anahtarını saklar',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Ziyaretçinin gizlilik tercihini saklar; gerekli',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Ziyaretçinin rıza kararını saklar',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Sohbet widget\'ında kimlik doğrulaması için ziyaretçinin cihaz kimliğini saklar',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Bir web seminerine kaydolmuş kullanıcının kimliğini saklar',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Bir web sitesi olayının bir reklama eşlenebilmesi için fbclid tıklama kimliğini saklar',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Videonun önüne yerleştirilen kayıt formundan gelen kullanıcı kimliğini saklar',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Dönüşümlerin eşlenmesi için TikTok tıklama kimliğini saklar',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Yeniden tanıma için benzersiz ziyaretçi kimliğini saklar',
    'Speichert die zugestimmten Kategorien'
        => 'Rıza verilen kategorileri saklar',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Son görüntülenen ürünler widget\'ını besler',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'MUID kimliğinin yenilenip yenilenmeyeceğini belirler; sağlayıcıya göre üçüncü taraf çerezi',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Web sitesinin çalışması ve güvenliği için teknik olarak gereklidir.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Mağazanın oturum ve ödeme verilerini taşır; sağlayıcı bunu gerekli olarak sınıflandırır',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'İtiraz (opt-out) işlevini taşır',
    'Transaktionssicherheit'
        => 'İşlem güvenliği',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'reCAPTCHA\'nın risk analizini taşır.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Web sitesi olaylarının TikTok\'a iletilmesi',
    'Umfragen'
        => 'Anketler',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'HubSpot\'a veri iletilmesini engeller',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Kapatıldıktan sonra sohbetin karşılama mesajını gizler',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Microsoft sayfalarını açan tarayıcıları ayırt eder; rıza ile reklam için de',
    'Unterscheidet einzelne Nutzer.'
        => 'Tek tek kullanıcıları ayırt eder.',
    'Unterscheidung einzelner Nutzer'
        => 'Tek tek kullanıcıların ayırt edilmesi',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Formlarda ve oturum açmalarda insan ile bot ayrımı',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Birden çok sayfa görüntülemesini tek bir oturum kaydında birleştirir',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Katı modda bandın sürekli gösterilmesini önler',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Rıza sinyallerinin Google etiketlerine dağıtılması',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Kapsayıcıda yapılandırılmış etiketler için rıza kararının yönetilmesi',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Ölçüme yapılan itirazın yönetimi',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Ölçüme ilişkin itiraz ve rızanın yönetimi',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Google tarafından İstatistik ve Reklam kategorilerine atanmıştır.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Google tarafından analiz, reklam ve güvenlik kategorilerine atanmıştır.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Google tarafından İşlevsellik, Reklam ve Güvenlik kategorilerine atanmıştır.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Google tarafından güvenlik ve işlevsellik kategorilerine atanmıştır.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Google tarafından güvenlik ve reklam kategorilerine atanmıştır.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Google tarafından güvenlik, analiz, işlevsellik ve reklam kategorilerine atanmıştır.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Google tarafından Güvenlik, İşlevsellik ve Reklam kategorilerine atanmıştır.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Google tarafından reklam ve güvenlik kategorilerine atanmıştır.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Google tarafından analiz kategorisine atanmıştır; Google daha kesin bir amaç belirtmemektedir.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Google tarafından işlevsellik kategorisine atanmıştır.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Google tarafından güvenlik kategorisine atanmıştır.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Google tarafından reklam kategorisine atanmıştır.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Microsoft tarafından, rıza olmadan yerleştirilmemesi gereken çerezlerden biri olarak belirtilir; Microsoft ayrı bir amaç açıklaması vermez',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Erişim ölçümü için Vimeo tarafından oluşturulan kimlik',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Ödeme işlemi tamamlandıktan sonra sepetin para birimi; gerekli',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Bir tarayıcının olasılığa dayalı olarak bir kişiyle eşleştirilmesi',
    'Warenkorb einer Besucherin zuordnen'
        => 'Sepetin bir ziyaretçiye eşlenmesi',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Yorum formundaki web sitesi adresinin ön doldurulması',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'İzleyicinin reklam amaçlı yeniden tanınması',
    'Werbepersonalisierung'
        => 'Reklam kişiselleştirmesi',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => '_pin_unauth gibi, ancak üçüncü taraf çerezi olarak',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Rezervasyon süreci içinde ziyaretçinin yeniden tanınması',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Ziyaretçinin sayfa görüntülemeleri ve sekmeler arasında yeniden tanınması',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Web sitesi ziyaretçilerinin yeniden tanınması ve kimliklendirilmesi',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Ziyaretçilerin birden çok ziyaret boyunca yeniden tanınması',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Bağlı web sitelerinin ziyaretçilerinin yeniden hedefleme için tanınması',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Geri dönen ziyaretçilerin tanınması ve önceki görüşmelerin eşlenmesi',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Ziyaretçinin tanınması ve özelliklerinin saklanması',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Tarayıcının Criteo kimliği üzerinden tanınması',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Kullanıcının tanınması; yalnızca rıza ile, varsayılan olarak engelli',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Rıza sonrasında bir tarayıcının sonraki ziyaretlerde tanınması',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Ziyaretçilerin tanınması ve oturumlara eşlenmesi',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'LinkedIn üyelerinin reklam amacıyla LinkedIn dışında tanınması',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Rıza sonrasında kullanıcıların tanınması',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Tekrar gelen ziyaretçilerin bir ziyaretçi kimliği üzerinden tanınması',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Bir kampanya hedefi tetiklendiğinde yerleştirilir (hesaplar 14.06.2026\'dan itibaren)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Bir kampanya hedefi tetiklendiğinde yerleştirilir (hesaplar 14.06.2026\'dan önce)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Bir kişi, yerleşik Pinterest etiketi bulunan bir web sitesini ziyaret ettiğinde yerleştirilir',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Mevcut çerezler olmadan bir eşleme başarılı olduğunda, örneğin Enhanced Match üzerinden yerleştirilir',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Pinterest\'in reklamlı trafikle birlikte ilettiği bilgilerden JavaScript etiketi tarafından yerleştirilir',
    'Zaehlt und begrenzt Sitzungen'
        => 'Oturumları sayar ve sınırlar',
    'Zahlungsabwicklung'
        => 'Ödeme işlemleri',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Oturumun hâlâ sürüp sürmediğini ya da yeni olduğunu gösterir',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Arayüze, oturum açılmış olduğunu ve kim olarak açıldığını bildirir',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Bir web sitesinin piksel olaylarını bir tarayıcıya eşleyen rastgele tarayıcı kimliği',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Son görüntülenen ürünlerin ilgili widget\'ta gösterilmesi',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Web sitesindeki davranışın bir profile eşlenmesi',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Bir ziyaretin kaynağının ilişkilendirilmesi (yönlendiren, atıf)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Bir ziyaretçinin e-posta adresi üzerinden Brevo hesabındaki bir kişiye eşlenmesi',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Potansiyel müşteri ve satış gibi işlemlerin bir yayıncıya eşlenmesi',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Web sitesi işlemlerinin daha önce görülen reklamlara eşlenmesi',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Birden çok sayfa görüntülemesinin tek bir oturumda birleştirilmesi',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Ziyaret geçmişinde kaydedilen olaylara ilişkin ek veriler',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Bir varyantın atanması ve birden çok ziyaret boyunca korunması',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'CSS seçicilerine dayalı olaylar için ara bellek',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Tarayıcı belleğindeki Messenger ve ziyaretçi verileri için ara bellek',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Tag Manager kayıtları için ara bellek',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Kaydırma derinliği ölçümü için ara bellek',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Tag Manager değişkenleri için ara bellek',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Yinelenen sunucu isteklerini önlemek için widget ayarlarına ilişkin ara bellek',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Messenger ve ziyaretçi verilerinin tarayıcıda ara belleğe alınması',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Bir ziyaretçi için oluşturulan oturumları sayar (hesaplar 14.06.2026\'dan itibaren)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Ölçüm sırasında tarayıcının kaç kez kapatılıp yeniden açıldığını sayar (hesaplar 14.06.2026\'dan önce)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Sayfa görüntülemelerinin ve ziyaretlerin sayımı',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'kullanıcı davranışının otomatik değerlendirmeleri',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'ülke, bölge ve şehir düzeyinde kaba coğrafi eşleme',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'isteğe bağlı olarak oturumun kaydedilmesi (Session Replay), varsayılan olarak metinler, görseller ve girdiler maskelenmiş biçimde',
    'optional Heatmaps und A/B-Tests'
        => 'isteğe bağlı olarak ısı haritaları ve A/B testleri',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Split URL testlerinde yönlendiren kaynağı aktarır (hesaplar 14.06.2026\'dan itibaren)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Split URL testlerinde yönlendiren kaynağı aktarır (hesaplar 14.06.2026\'dan önce)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Potansiyel müşteri ve satış gibi işlemlerin bir yayıncıya eşlenmesi, Bir reklam aracının başarı ölçümü ve komisyonun hesaplanması',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Pazarlama otomasyonu için web sitesindeki ziyaretçilerin ve sayfa görüntülemelerinin kaydedilmesi, Bir ziyaretçinin e-posta adresi üzerinden Brevo hesabındaki bir kişiye eşlenmesi, İşletmeci tarafından tanımlanan özel olayların kaydedilmesi',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Web sitesinde rezervasyon takviminin gösterilmesi ve randevu alınması, Rezervasyon süreci içinde ziyaretçinin yeniden tanınması, Randevu ücretliyse ödemelerin işlenmesi',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Formlarda otomatik erişimlerin tespit edilmesi ve reddedilmesi, Web sitesinin sunucusunun doğruladığı bir token\'ın verilmesi, Pre-Clearance modunda: aynı bölgedeki sonraki WAF denetimleri için geçiş izni',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Sayfa görüntülemelerinin ve ziyaretlerin ölçümü, Sayfanın yüklenme süresinin ve temel ölçütlerinin ölçümü (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Kişiselleştirilmiş reklamların sunulması, Reklam etkisinin ölçümü, Tarayıcının Criteo kimliği üzerinden tanınması',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Web sitesindeki kullanım davranışının ölçümü, Rıza sonrasında takma adlı kullanım profillerinin oluşturulması, Rıza sonrasında bir tarayıcının sonraki ziyaretlerde tanınması',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Sayfa görüntülemelerinin ve kullanım davranışının ölçümü, Kaydırma derinliğinin ve tıklama olaylarının ölçümü, Rıza sonrasında kullanıcıların tanınması, Ölçüme yapılan itirazın yönetimi',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Formlarda ve oturum açmalarda insan ile bot ayrımı, Otomatik isteklere karşı koruma (spam, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Dönüşümlerin ölçümü, Yeniden pazarlama ve hedef kitle oluşturma, Gösterim sıklığının sınırlandırılması, Tıklama dolandırıcılığının tespiti',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Reklamların sunulması, Gösterim sıklığının sınırlandırılması, Dolandırıcılık ve kötüye kullanım tespiti, Gösterimlerin ve tıklamaların ölçümü',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Tek tek kullanıcıların ayırt edilmesi, Oturum durumunun korunması, Erişim ve kullanım ölçümü',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Etkileşimli bir haritanın gösterilmesi, Hizmet erişilebilirliğinin Google tarafından ölçülmesi',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'İnsan ile bot ayrımı için risk analizi, Formların otomatik kötüye kullanıma karşı korunması',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Web sitesinde etiketlerin sunulması ve yönetilmesi, Rıza sinyallerinin Google etiketlerine dağıtılması',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Formlarda ve oturum açmalarda insan ile bot ayrımı, Challenge isteklerinin yük dağıtımı ve yönlendirmesi, Erişilebilirlik erişiminin sağlanması',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Isı haritaları, Oturum kaydı, Anketler',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Ziyaretçilerin birden çok ziyaret boyunca yeniden tanınması, Oturumların ölçülmesi ve ziyaret kaynağının eşleştirilmesi, Kişilerin yinelenenlerinin ayıklanması, Sohbet bileşeninin çalıştırılması, A/B testi varyantlarının tutarlı biçimde gösterilmesi',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Web sitesinde canlı sohbet ve destek gelen kutusu, Geri dönen ziyaretçilerin tanınması ve önceki görüşmelerin eşlenmesi, Kötüye kullanıma karşı koruma için cihazın tanınması, Messenger ve ziyaretçi verilerinin tarayıcıda ara belleğe alınması',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Ürün ve sepet sayfalarında finansman ve taksit bilgilerinin gösterilmesi (On-site Messaging), Bildirim içeriklerinin bir reklam sunucusu üzerinden sayfa kaynak kodundaki hazırlanmış yer tutuculara sunulması',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Web sitesi ziyaretçilerinin yeniden tanınması ve kimliklendirilmesi, Web sitesindeki davranışın bir profile eşlenmesi, Web sitesinde kayıt formlarının yönetilmesi',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'LinkedIn reklam kampanyaları için dönüşüm takibi, Web sitesi ziyaretçilerinin yeniden hedeflenmesi, Web sitesi hedef kitlesinin değerlendirilmesi (web sitesi demografisi)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Bağlı web sitelerinin ziyaretçilerinin yeniden hedefleme için tanınması, Açılır formların tekrar tekrar görünmemesi için yönetilmesi, E-posta kampanyalarındaki açılmaların ve tıklamaların ölçülmesi, Bağlı web sitesine Google ve Facebook reklam piksellerinin eklenmesi',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Web sitesinde etkileşimli haritaların gösterilmesi, Harita karolarının, yazı tiplerinin ve stillerin sağlayıcıdan sonradan yüklenmesi, Harita çağrılarının faturalandırılması ve korunması',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Sayfa görüntülemelerinin, ziyaretlerin ve oturumların ölçümü, Tekrar gelen ziyaretçilerin bir ziyaretçi kimliği üzerinden tanınması, Bir ziyaretin kaynağının ilişkilendirilmesi (yönlendiren, atıf), isteğe bağlı olarak ısı haritaları ve A/B testleri',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Sayfa görüntülemelerinin, ziyaretlerin ve oturumların kendi sunucusunda ölçümü, Tekrar gelen ziyaretçilerin bir ziyaretçi kimliği üzerinden tanınması, Bir ziyaretin kaynağının ilişkilendirilmesi (yönlendiren, atıf), isteğe bağlı olarak ısı haritaları ve A/B testleri',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Web sitesinde etiketlerin sunulması ve tetiklenmesi, Kapsayıcıda yapılandırılmış etiketler için rıza kararının yönetilmesi',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Web sitesinde reklam kampanyalarının ve dönüşümlerin ölçümü, Hedef kitlelerin oluşturulması ve yeniden hedefleme',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Microsoft Advertising kampanyaları için dönüşüm takibi, Yeniden pazarlama listelerinin oluşturulması, Sayfa görüntülemelerinin ve özel olayların ölçümü',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Oturumların kaydedilmesi ve yeniden oynatılması, Tıklamaların ve kaydırma davranışının ısı haritaları, Birden çok sayfa görüntülemesinin tek bir oturumda birleştirilmesi, kullanıcı davranışının otomatik değerlendirmeleri',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Ziyaretçi tarafından başlatılan bir ödemenin işlenmesi, Kart verilerinin mağaza üzerinden geçmemesi için kart alanlarının kendi ödeme sayfasına gömülmesi, Dolandırıcılığın önlenmesi ve ödeme hizmeti sağlayıcısı olarak yasal yükümlülükler',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Fare hareketlerinin kaydedilmesi, Oturum tekrarı, Kullanım davranışının analizi',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Gömülü haritalara harita karolarının sunulması, Harita hizmetlerinin çalıştırılması ve kötüye kullanıma karşı korunması',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Ödeme işlemleri, Dolandırıcılığın önlenmesi',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Pinterest reklam kampanyaları için dönüşüm takibi, Hedef kitlelerin oluşturulması ve yeniden hedefleme, Web sitesi işlemlerinin daha önce görülen reklamlara eşlenmesi',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Sayfa görüntülemelerinin ve olayların ölçümü, Ziyaretçilerin tanınması ve oturumlara eşlenmesi, Kaynak ve kampanyaların değerlendirilmesi, Cihaz, tarayıcı ve tahmini konumun değerlendirilmesi, E-ticaret ve hedef değerlendirmesi',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Sayfa görüntülemelerinin ve ziyaretlerin sayımı, Yönlendiren kaynakların değerlendirilmesi, Tarayıcı, işletim sistemi ve cihaz türünün değerlendirilmesi, ülke, bölge ve şehir düzeyinde kaba coğrafi eşleme',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Uygulama hatalarının tarayıcıdan kaydedilmesi ve iletilmesi, isteğe bağlı olarak oturumun kaydedilmesi (Session Replay), varsayılan olarak metinler, görseller ve girdiler maskelenmiş biçimde',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Bir mağazanın sepetinin ve ödeme sürecinin çalıştırılması, Oturum ile dil veya ülke eşlemesi, Mağaza işletmecisi için erişim ölçümü, Satın alma arayüzleri için pazarlama verileri',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Parçaların, albümlerin, çalma listelerinin ve podcast bölümlerinin gömülmesi ve oynatılması, Bu kullanıcıların gezinme davranışına ilişkin bilgilerin Spotify ve üçüncü taraflarca toplanması, Üçüncü tarafların bu kullanıcıların tarayıcısında çerez yerleştirmesine olanak tanır',
    'Besucherzählung, Reichweitenmessung'
        => 'Ziyaretçi sayımı, Erişim ölçümü',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Dolandırıcılık tespiti ve ödeme denemelerinin risk değerlendirmesi, Stripe Elements ödeme alanlarının sağlanması, Sipariş sürecinde botların ve otomatik davranışın tespit edilmesi',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Reklam kampanyalarının performansının ölçülmesi ve iyileştirilmesi, TikTok\'ta reklamların kişiselleştirilmesi, Web sitesi olaylarının TikTok\'a iletilmesi',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Web sitesine form ve anket gömülmesi, Yanıtların toplanması ve form işletmecisine iletilmesi',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Web sitesinde videoların gömülmesi ve oynatılması, İzleyicinin oynatıcı ayarlarının hatırlanması (ses düzeyi, kalite, altyazı), Gömülü videoların Vimeo tarafından erişim ölçümü, Oynatıcı için bot ve kötüye kullanıma karşı koruma',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Web sitesinde A/B testleri ve Split URL testleri, Bir varyantın atanması ve birden çok ziyaret boyunca korunması, Bir kampanyanın hedeflerinin ve dönüşümlerinin ölçümü, Değerlendirmeler için ziyaretçilerin ve oturumların ölçümü, Ölçüme ilişkin itiraz ve rızanın yönetimi',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Sepetin bir ziyaretçiye eşlenmesi, Sepet içeriğinin değişip değişmediğinin tespit edilmesi, Son görüntülenen ürünlerin ilgili widget\'ta gösterilmesi, Mağaza bildiriminin gizlenmesinin hatırlanması',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Yönetim alanında oturum açma ve oturum tanıma, Yorum verilerinin sonraki yorumlar için saklanması, Yönetim alanının görünüm ayarlarının hatırlanması, WordPress\'in çerez yerleştirip yerleştiremediğinin denetlenmesi, Seçilen dilin kaydedilmesi',
    'Conversion-Messung, Retargeting'
        => 'Dönüşüm ölçümü, Yeniden hedefleme',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Gömülü videoların oynatılması, Güvenlik, İzleyicinin reklam amaçlı yeniden tanınması',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Web sitesindeki destek için canlı sohbet ve mesajlaşma kanalı, Ziyaretçinin sayfa görüntülemeleri ve sekmeler arasında yeniden tanınması, Widget durumunun ve ayarlarının hatırlanması, Widget bulunan sayfalarda oturumların ve olayların ölçülmesi',
];
