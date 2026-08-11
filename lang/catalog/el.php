<?php

declare(strict_types=1);

/*
 * Zwecktexte des DPS-Katalogs auf Griechisch.
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
        => 'Δοκιμές A/B και δοκιμές split URL στον ιστότοπο',
    'Abrechnung und Absicherung der Kartenaufrufe'
        => 'Χρέωση και προστασία των κλήσεων του χάρτη',
    'Abschluss der Anmeldung mit Shop; notwendig'
        => 'Ολοκλήρωση της σύνδεσης μέσω Shop· απαραίτητο',
    'Abspielen eingebetteter Videos'
        => 'Αναπαραγωγή ενσωματωμένων βίντεο',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung'
        => 'Διεκπεραίωση πληρωμής που εκκίνησε ο επισκέπτης',
    'Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Διεκπεραίωση πληρωμών όταν το ραντεβού είναι επί πληρωμή',
    'Analyse des Nutzungsverhaltens'
        => 'Ανάλυση της συμπεριφοράς χρήσης',
    'Analysedaten der Kaufoberflaechen; Analyse'
        => 'Δεδομένα ανάλυσης των επιφανειών αγοράς· Στατιστικά',
    'Analysedaten des Shops; vom Anbieter als Analyse gefuehrt'
        => 'Δεδομένα ανάλυσης του καταστήματος· ο πάροχος τα κατατάσσει στα Στατιστικά',
    'Anmeldedaten fuer den Adminbereich unter /wp-admin/'
        => 'Στοιχεία σύνδεσης για την περιοχή διαχείρισης στο /wp-admin/',
    'Anmeldung bei Shop Pay; notwendig'
        => 'Σύνδεση στο Shop Pay· απαραίτητο',
    'Anmeldung und Sitzungserkennung im Adminbereich'
        => 'Σύνδεση και αναγνώριση συνεδρίας στην περιοχή διαχείρισης',
    'Anonyme dienstbezogene Statistik und weitere technische Zwecke, unter anderem Unterstuetzung der Barrierefreiheit'
        => 'Ανώνυμα στατιστικά σχετικά με την υπηρεσία και άλλοι τεχνικοί σκοποί, μεταξύ άλλων υποστήριξη της προσβασιμότητας',
    'Ansichtseinstellungen des Adminbereichs je Konto'
        => 'Ρυθμίσεις προβολής της περιοχής διαχείρισης ανά λογαριασμό',
    'Ansichtseinstellungen des Adminbereichs merken'
        => 'Απομνημόνευση των ρυθμίσεων προβολής της περιοχής διαχείρισης',
    'Anzeige von Bewertungen'
        => 'Εμφάνιση αξιολογήσεων',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website'
        => 'Εμφάνιση του ημερολογίου κρατήσεων και κλείσιμο ραντεβού στον ιστότοπο',
    'Anzeigen einer interaktiven Karte'
        => 'Εμφάνιση διαδραστικού χάρτη',
    'Auf den Wert 1 gesetzt, unterbindet es das Senden von UET-Ereignissen an Microsoft'
        => 'Με τιμή 1 εμποδίζει την αποστολή συμβάντων UET στη Microsoft',
    'Aufbau von Remarketing-Listen'
        => 'Δημιουργία λιστών remarketing',
    'Aufzeichnung und Wiedergabe von Sitzungen'
        => 'Καταγραφή και αναπαραγωγή συνεδριών',
    'Aufzeichnung von Mausbewegungen'
        => 'Καταγραφή των κινήσεων του ποντικιού',
    'Ausblenden des Shop-Hinweises merken'
        => 'Απομνημόνευση της απόκρυψης της ειδοποίησης του καταστήματος',
    'Ausliefern und Ausloesen von Tags auf der Website'
        => 'Παράδοση και ενεργοποίηση tags στον ιστότοπο',
    'Ausliefern und Verwalten von Tags auf der Website'
        => 'Παράδοση και διαχείριση tags στον ιστότοπο',
    'Ausliefern von Kartenkacheln an eingebettete Karten'
        => 'Παράδοση πλακιδίων χάρτη σε ενσωματωμένους χάρτες',
    'Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Παράδοση του περιεχομένου των ειδοποιήσεων σε προετοιμασμένα σημεία στον πηγαίο κώδικα της σελίδας μέσω Ad-Server',
    'Auslieferung personalisierter Werbung'
        => 'Προβολή εξατομικευμένης διαφήμισης',
    'Auslieferung von Anzeigen'
        => 'Προβολή διαφημίσεων',
    'Auslieferung von Bibliotheken und Assets'
        => 'Παράδοση βιβλιοθηκών και πόρων',
    'Auslieferung von Schriftarten'
        => 'Παροχή γραμματοσειρών',
    'Ausstellen eines Tokens, das der Server der Website prueft'
        => 'Έκδοση διακριτικού (token) που ελέγχει ο διακομιστής του ιστότοπου',
    'Aussteuern von Anmeldeformularen auf der Website'
        => 'Έλεγχος της προβολής φορμών εγγραφής στον ιστότοπο',
    'Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen'
        => 'Έλεγχος των αναδυόμενων φορμών, ώστε να μην εμφανίζονται επανειλημμένα',
    'Auswahl des Rechenzentrums'
        => 'Επιλογή του κέντρου δεδομένων',
    'Auswertung der Verweisquellen'
        => 'Αξιολόγηση των πηγών παραπομπής',
    'Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Αξιολόγηση του κοινού του ιστότοπου (δημογραφικά στοιχεία ιστότοπου)',
    'Auswertung von Browser, Betriebssystem und Gerätetyp'
        => 'Αξιολόγηση προγράμματος περιήγησης, λειτουργικού συστήματος και τύπου συσκευής',
    'Auswertung von Geraet, Browser und geschaetztem Standort'
        => 'Αξιολόγηση συσκευής, προγράμματος περιήγησης και εκτιμώμενης τοποθεσίας',
    'Auswertung von Herkunft und Kampagnen'
        => 'Αξιολόγηση προέλευσης και καμπανιών',
    'Authentifiziert die Anfragen des Endnutzers'
        => 'Πιστοποιεί τα αιτήματα του τελικού χρήστη',
    'Begrenzung der Anzeigehäufigkeit'
        => 'Περιορισμός της συχνότητας προβολής',
    'Belegt eine bestandene Pruefung, damit weitere Challenges der Zone entfallen'
        => 'Πιστοποιεί επιτυχή έλεγχο, ώστε να μην απαιτούνται περαιτέρω έλεγχοι (challenges) στη ζώνη',
    'Bereitstellen der Bezahlfelder von Stripe Elements'
        => 'Παροχή των πεδίων πληρωμής του Stripe Elements',
    'Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Παροχή προσβασιμότητας',
    'Besucherzählung'
        => 'Καταμέτρηση επισκεπτών',
    'Betrieb des Chat-Widgets'
        => 'Λειτουργία του widget συνομιλίας',
    'Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Λειτουργία και προστασία από κατάχρηση των υπηρεσιών χαρτών',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops'
        => 'Λειτουργία του καλαθιού και της διαδικασίας πληρωμής ενός καταστήματος',
    'Betrugs- und Missbrauchserkennung'
        => 'Ανίχνευση απάτης και κατάχρησης',
    'Betrugserkennung beim Zahlungsversuch'
        => 'Ανίχνευση απάτης κατά την απόπειρα πληρωμής',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen'
        => 'Ανίχνευση απάτης και αξιολόγηση κινδύνου των αποπειρών πληρωμής',
    'Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Πρόληψη απάτης και νομικές υποχρεώσεις ως πάροχος υπηρεσιών πληρωμών',
    'Betrugsprävention'
        => 'Πρόληψη απάτης',
    'Betrugsvermeidung und Risikobewertung eines Zahlungsversuchs'
        => 'Πρόληψη απάτης και αξιολόγηση κινδύνου μιας απόπειρας πληρωμής',
    'Bildung pseudonymer Nutzungsprofile nach Einwilligung'
        => 'Δημιουργία ψευδώνυμων προφίλ χρήσης μετά από συγκατάθεση',
    'Bildung von Zielgruppen und Retargeting'
        => 'Δημιουργία κοινών-στόχων και retargeting',
    'Bindet die Sitzung an dieselbe AWS-Instanz'
        => 'Συνδέει τη συνεδρία με το ίδιο instance του AWS',
    'Bot- und Missbrauchsabwehr fuer den Player'
        => 'Προστασία του player από bots και κατάχρηση',
    'Bot-Abwehr fuer den Player'
        => 'Προστασία του player από bots',
    'Botschutz beim Ausliefern der HubSpot-Ressourcen'
        => 'Προστασία από bots κατά την παράδοση των πόρων της HubSpot',
    'Browser-Kennung, mit der LinkedIn Geraete unterscheidet und Missbrauch erkennt'
        => 'Αναγνωριστικό προγράμματος περιήγησης με το οποίο το LinkedIn διακρίνει συσκευές και εντοπίζει καταχρήσεις',
    'Cloudflare-Bot-Abwehr'
        => 'Αντιμετώπιση bots από την Cloudflare',
    'Cloudflare-Bot-Erkennung zur Verkehrsfilterung'
        => 'Ανίχνευση bots από την Cloudflare για φιλτράρισμα της κίνησης',
    'Cloudflare-Ratenbegrenzung'
        => 'Περιορισμός ρυθμού αιτημάτων από την Cloudflare',
    'Conversion-Messung'
        => 'Μέτρηση μετατροπών',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen'
        => 'Παρακολούθηση μετατροπών για διαφημιστικές καμπάνιες LinkedIn',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen'
        => 'Παρακολούθηση μετατροπών για καμπάνιες Microsoft Advertising',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen'
        => 'Παρακολούθηση μετατροπών για διαφημιστικές καμπάνιες Pinterest',
    'Darstellung interaktiver Karten auf der Website'
        => 'Απεικόνιση διαδραστικών χαρτών στον ιστότοπο',
    'Deduplizieren von Kontakten'
        => 'Απαλοιφή διπλότυπων επαφών',
    'Dient der Ausspielung und Messung von Werbung.'
        => 'Χρησιμεύει για την προβολή και τη μέτρηση διαφημίσεων.',
    'Domainübergreifende Besucher-ID; laut Anbieter Third-Party-Cookie, nur bei in der Konfigurationsdatei aktivierten Third-Party-Cookies genutzt'
        => 'Αναγνωριστικό επισκέπτη σε πολλαπλούς τομείς· σύμφωνα με τον πάροχο cookie τρίτου μέρους, χρησιμοποιείται μόνο όταν στο αρχείο ρυθμίσεων είναι ενεργοποιημένα τα cookies τρίτων μερών',
    'Drittanbieter-Kennung fuer die Wiedererkennung von Besuchern'
        => 'Αναγνωριστικό τρίτου μέρους για την αναγνώριση επισκεπτών',
    'Drittanbieter-Kennung, die an Klaviyo weitergegeben wird'
        => 'Αναγνωριστικό τρίτου μέρους που διαβιβάζεται στην Klaviyo',
    'Drittanbieter-Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Διαφημιστικό αναγνωριστικό τρίτου μέρους για τη μέτρηση καμπανιών και την εξατομίκευση στο TikTok',
    'E-Commerce- und Zielauswertung'
        => 'Αξιολόγηση ηλεκτρονικού εμπορίου και στόχων',
    'E-Mail-Adresse aus dem Kommentarformular vorbelegen'
        => 'Προσυμπλήρωση της διεύθυνσης email από τη φόρμα σχολίων',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen'
        => 'Ενσωμάτωση και αναπαραγωγή κομματιών, άλμπουμ, playlists και επεισοδίων podcast',
    'Einbetten und Abspielen von Videos auf der Website'
        => 'Ενσωμάτωση και αναπαραγωγή βίντεο στον ιστότοπο',
    'Einbetten von Formularen und Umfragen in die Website'
        => 'Ενσωμάτωση φορμών και ερευνών στον ιστότοπο',
    'Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen'
        => 'Ενσωμάτωση των πεδίων κάρτας στο ίδιο το checkout, ώστε τα δεδομένα κάρτας να μην περνούν μέσα από το κατάστημα',
    'Einbettung einer extern gepflegten Cookie-Erklärung'
        => 'Ενσωμάτωση δήλωσης cookies που συντηρείται εξωτερικά',
    'Einbettung von Audioinhalten'
        => 'Ενσωμάτωση περιεχομένου ήχου',
    'Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Ενσωμάτωση διαφημιστικών pixel της Google και του Facebook στον συνδεδεμένο ιστότοπο',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging)'
        => 'Εμφάνιση ενημερώσεων για χρηματοδότηση και δόσεις στις σελίδες προϊόντων και καλαθιού (On-site Messaging)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten ab dem 14.06.2026)'
        => 'Μοναδικό αναγνωριστικό σε μέτρηση μεταξύ τομέων (λογαριασμοί από 14.06.2026)',
    'Eindeutige Kennung bei domainübergreifender Messung (Konten vor dem 14.06.2026)'
        => 'Μοναδικό αναγνωριστικό σε μέτρηση μεταξύ τομέων (λογαριασμοί πριν από 14.06.2026)',
    'Einmalwert gegen CSRF beim Opt-out-Formular'
        => 'Μοναδική τιμή κατά του CSRF στη φόρμα opt-out',
    'Enthaelt eine Nutzerkennung und den Erzeugungszeitpunkt; laut Quelle im Pinterest-In-App-Browser gesetzt, nicht auf der Website-Domain'
        => 'Περιέχει αναγνωριστικό χρήστη και χρόνο δημιουργίας· σύμφωνα με την πηγή τοποθετείται στο in-app πρόγραμμα περιήγησης του Pinterest, όχι στον τομέα του ιστότοπου',
    'Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Συλλογή και διαβίβαση των απαντήσεων στον διαχειριστή της φόρμας',
    'Erfasst die Nutzung der Website zu Auswertungszwecken.'
        => 'Καταγράφει τη χρήση του ιστότοπου για σκοπούς αξιολόγησης.',
    'Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Καταγραφή ιδίων συμβάντων που ορίζει ο διαχειριστής',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser'
        => 'Καταγραφή και διαβίβαση σφαλμάτων εφαρμογής από το πρόγραμμα περιήγησης',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation'
        => 'Καταγραφή επισκεπτών και προβολών σελίδας στον ιστότοπο για αυτοματοποίηση μάρκετινγκ',
    'Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Μέτρηση της απόδοσης ενός διαφημιστικού μέσου και εκκαθάριση της προμήθειας',
    'Erhalt des Sitzungszustands'
        => 'Διατήρηση της κατάστασης της συνεδρίας',
    'Erkennen des Geraets zur Missbrauchsabwehr'
        => 'Αναγνώριση της συσκευής για προστασία από κατάχρηση',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen'
        => 'Εντοπισμός και απόρριψη αυτοματοποιημένων προσβάσεων σε φόρμες',
    'Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Εντοπισμός bots και αυτοματοποιημένης συμπεριφοράς στη διαδικασία παραγγελίας',
    'Erkennen, ob sich der Warenkorbinhalt geaendert hat'
        => 'Εντοπισμός του αν άλλαξε το περιεχόμενο του καλαθιού',
    'Erkennt Aenderungen am Warenkorbinhalt'
        => 'Εντοπίζει αλλαγές στο περιεχόμενο του καλαθιού',
    'Erkennt Besucher der Website, auf der der Intercom-Code eingebaut ist'
        => 'Αναγνωρίζει τους επισκέπτες του ιστότοπου στον οποίο έχει ενσωματωθεί ο κώδικας Intercom',
    'Erkennt Browser auf Microsoft-Websites wieder; laut Anbieter auch für Werbung genutzt, Third-Party-Cookie'
        => 'Αναγνωρίζει εκ νέου προγράμματα περιήγησης σε ιστότοπους της Microsoft· σύμφωνα με τον πάροχο χρησιμοποιείται και για διαφήμιση, cookie τρίτου μέρους',
    'Erkennt Personen wieder, die ueber das Chat-Werkzeug schreiben'
        => 'Αναγνωρίζει εκ νέου τα άτομα που γράφουν μέσω του εργαλείου συνομιλίας',
    'Erkennt das Geraet, von dem die Unterhaltung ausgeht'
        => 'Αναγνωρίζει τη συσκευή από την οποία ξεκινά η συνομιλία',
    'Erkennt das einzelne Geraet, das mit dem Messenger interagiert, zur Missbrauchsabwehr'
        => 'Αναγνωρίζει τη μεμονωμένη συσκευή που αλληλεπιδρά με το Messenger, για προστασία από κατάχρηση',
    'Erkennt den Endnutzer, der die Unterhaltung beginnt'
        => 'Αναγνωρίζει τον τελικό χρήστη που ξεκινά τη συνομιλία',
    'Erkennt die Domain oder Subdomain, auf der das Chat-Widget eingebaut ist'
        => 'Αναγνωρίζει τον τομέα ή υποτομέα στον οποίο έχει ενσωματωθεί το widget συνομιλίας',
    'Erkennt wiederkehrende Besucher'
        => 'Αναγνωρίζει επισκέπτες που επιστρέφουν',
    'Erkennt, ob der Browser neu gestartet wurde'
        => 'Αναγνωρίζει αν το πρόγραμμα περιήγησης επανεκκινήθηκε',
    'Erkennung von Klickbetrug'
        => 'Ανίχνευση απάτης με κλικ',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten ab dem 14.06.2026)'
        => 'Προσδιορίζει τις μοναδικές προσβάσεις στον ιστότοπο (λογαριασμοί από 14.06.2026)',
    'Ermittelt eindeutige Zugriffe auf die Website (Konten vor dem 14.06.2026)'
        => 'Προσδιορίζει τις μοναδικές προσβάσεις στον ιστότοπο (λογαριασμοί πριν από 14.06.2026)',
    'Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Παροχή δυνατότητας σε τρίτους να τοποθετούν cookies στο πρόγραμμα περιήγησης αυτών των χρηστών',
    'Ermoeglicht die Nutzung des Barrierefreiheits-Zugangs'
        => 'Επιτρέπει τη χρήση της προσβασιμότητας',
    'Ermöglicht zusätzliche Funktionen der Website.'
        => 'Επιτρέπει πρόσθετες λειτουργίες του ιστότοπου.',
    'Erstanbieter-Kennung, die Besucher wiedererkennt und Ereignisse der Website zuordnet'
        => 'Αναγνωριστικό πρώτου μέρους που αναγνωρίζει επισκέπτες και αντιστοιχίζει συμβάντα στον ιστότοπο',
    'Erstpartige Besucherkennung fuer Conversion-Tracking und Remarketing'
        => 'Αναγνωριστικό επισκέπτη πρώτου μέρους για παρακολούθηση μετατροπών και remarketing',
    'Erstpartige Sitzungskennung fuer die Zuordnung von Ereignissen'
        => 'Αναγνωριστικό συνεδρίας πρώτου μέρους για την αντιστοίχιση συμβάντων',
    'Erstpartige Sitzungskennung je Pixel zur Kampagnenmessung'
        => 'Αναγνωριστικό συνεδρίας πρώτου μέρους ανά pixel για τη μέτρηση καμπανιών',
    'Erstpartige Sitzungskennung zur Kampagnenmessung'
        => 'Αναγνωριστικό συνεδρίας πρώτου μέρους για τη μέτρηση καμπανιών',
    'Erstpartige Werbekennung zur Messung von Kampagnen und zur Personalisierung auf TikTok'
        => 'Διαφημιστικό αναγνωριστικό πρώτου μέρους για τη μέτρηση καμπανιών και την εξατομίκευση στο TikTok',
    'Erstpartiges Cookie, das Aktionen von Besuchern gruppiert, die Pinterest nicht zuordnen kann'
        => 'Cookie πρώτου μέρους που ομαδοποιεί ενέργειες επισκεπτών τις οποίες το Pinterest δεν μπορεί να αντιστοιχίσει',
    'Erstpartiges Cookie, das die per Automatic Enhanced Match erhobenen gehashten Kundendaten speichert'
        => 'Cookie πρώτου μέρους που αποθηκεύει τα κατακερματισμένα (hashed) δεδομένα πελατών που συλλέγονται μέσω Automatic Enhanced Match',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten ab dem 14.06.2026)'
        => 'Δημιουργεί ένα μοναδικό αναγνωριστικό για κάθε επισκέπτη (λογαριασμοί από 14.06.2026)',
    'Erzeugt eine eindeutige Kennung für jeden Besucher (Konten vor dem 14.06.2026)'
        => 'Δημιουργεί ένα μοναδικό αναγνωριστικό για κάθε επισκέπτη (λογαριασμοί πριν από 14.06.2026)',
    'Geraetekennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Αναγνωριστικό συσκευής για την αξιολόγηση συμβάντων σε σελίδες με widget',
    'Gesetzt bei Anmeldung auf einer von HubSpot gehosteten Seite'
        => 'Τοποθετείται κατά τη σύνδεση σε σελίδα που φιλοξενείται από την HubSpot',
    'Gewaehlte Sprache speichern'
        => 'Αποθήκευση της επιλεγμένης γλώσσας',
    'Gleicht die MUID-Kennung über Microsoft-Domains hinweg ab; laut Anbieter Third-Party-Cookie'
        => 'Συγχρονίζει το αναγνωριστικό MUID σε όλους τους τομείς της Microsoft· σύμφωνα με τον πάροχο cookie τρίτου μέρους',
    'Haelt Nachrichten ueber mehrere Tabs hinweg synchron'
        => 'Διατηρεί τα μηνύματα συγχρονισμένα σε πολλές καρτέλες',
    'Haelt den Wert des Parameters pk_campaign'
        => 'Διατηρεί την τιμή της παραμέτρου pk_campaign',
    'Haelt den Wert des Parameters utm_campaign'
        => 'Διατηρεί την τιμή της παραμέτρου utm_campaign',
    'Haelt den Widerspruch gegen die Messung'
        => 'Διατηρεί την εναντίωση στη μέτρηση',
    'Haelt die Ablaufzeit von _uetsid'
        => 'Διατηρεί τον χρόνο λήξης του _uetsid',
    'Haelt die Ablaufzeit von _uetvid'
        => 'Διατηρεί τον χρόνο λήξης του _uetvid',
    'Haelt die Art der Trafficquelle fuer den Tag Manager'
        => 'Διατηρεί τον τύπο της πηγής επισκεψιμότητας για τον Tag Manager',
    'Haelt die Besucheridentitaet fest, auch zur Deduplizierung von Kontakten'
        => 'Καταγράφει την ταυτότητα του επισκέπτη, και για την απαλοιφή διπλότυπων επαφών',
    'Haelt die Cookie-Entscheidung des Besuchers fest'
        => 'Καταγράφει την απόφαση του επισκέπτη για τα cookies',
    'Haelt die Darstellung des Widgets beim Seitenwechsel konsistent'
        => 'Διατηρεί συνεπή την εμφάνιση του widget κατά την αλλαγή σελίδας',
    'Haelt die Einstiegsseite fest; Analyse'
        => 'Καταγράφει τη σελίδα εισόδου· Στατιστικά',
    'Haelt die Einwilligung in die Messung mit Cookies'
        => 'Διατηρεί τη συγκατάθεση για τη μέτρηση με cookies',
    'Haelt die Entscheidung des Nutzers zu Kategorien und Anbietern'
        => 'Διατηρεί την απόφαση του χρήστη για τις κατηγορίες και τους παρόχους',
    'Haelt die Sitzung angemeldeter Nutzer und den Zugang zu frueheren Unterhaltungen'
        => 'Διατηρεί τη συνεδρία των συνδεδεμένων χρηστών και την πρόσβαση σε προηγούμενες συνομιλίες',
    'Haelt die verweisende Adresse'
        => 'Διατηρεί τη διεύθυνση παραπομπής',
    'Haelt die verweisende Quelle fest; Analyse'
        => 'Καταγράφει την πηγή παραπομπής· Στατιστικά',
    'Haelt eigene Variablen der Sitzung (vom Anbieter als veraltet gekennzeichnet)'
        => 'Διατηρεί ίδιες μεταβλητές της συνεδρίας (χαρακτηρίζεται από τον πάροχο ως παρωχημένο)',
    'Haelt fest, ob etracker Cookies setzen darf; wird bei data-block-cookies per API-Aufruf gesetzt'
        => 'Καταγράφει αν το etracker επιτρέπεται να τοποθετεί cookies· τοποθετείται σε περίπτωση data-block-cookies μέσω κλήσης API',
    'Haelt fest, welche Funktionsschalter der Videoeigentuemer aktiviert hat'
        => 'Καταγράφει ποιους διακόπτες λειτουργιών έχει ενεργοποιήσει ο κάτοχος του βίντεο',
    'Haupt-Cookie zur Wiedererkennung von Besuchern'
        => 'Κύριο cookie για την αναγνώριση επισκεπτών',
    'Heatmaps'
        => 'Heatmaps',
    'Heatmaps von Klicks und Scrollverhalten'
        => 'Heatmaps κλικ και συμπεριφοράς κύλισης',
    'Hält Heatmap-Sitzungsdaten für die Dauer des Besuchs'
        => 'Διατηρεί τα δεδομένα συνεδρίας heatmap για τη διάρκεια της επίσκεψης',
    'Hält Informationen zur laufenden Sitzung (Konten ab dem 14.06.2026)'
        => 'Διατηρεί πληροφορίες για την τρέχουσα συνεδρία (λογαριασμοί από 14.06.2026)',
    'Hält Informationen zur laufenden Sitzung (Konten vor dem 14.06.2026)'
        => 'Διατηρεί πληροφορίες για την τρέχουσα συνεδρία (λογαριασμοί πριν από 14.06.2026)',
    'Hält benutzerdefinierte Variablen für die Dauer des Besuchs'
        => 'Διατηρεί προσαρμοσμένες μεταβλητές για τη διάρκεια της επίσκεψης',
    'Hält dauerhafte Daten auf Besucherebene (Konten ab dem 14.06.2026)'
        => 'Διατηρεί μόνιμα δεδομένα σε επίπεδο επισκέπτη (λογαριασμοί από 14.06.2026)',
    'Hält dauerhafte Daten auf Besucherebene für die Insights-Auswertung (Konten vor dem 14.06.2026)'
        => 'Διατηρεί μόνιμα δεδομένα σε επίπεδο επισκέπτη για την αξιολόγηση Insights (λογαριασμοί πριν από 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten ab dem 14.06.2026)'
        => 'Καταγράφει την κατάσταση συγκατάθεσης του επισκέπτη (λογαριασμοί από 14.06.2026)',
    'Hält den Einwilligungsstatus des Besuchers fest (Konten vor dem 14.06.2026)'
        => 'Καταγράφει την κατάσταση συγκατάθεσης του επισκέπτη (λογαριασμοί πριν από 14.06.2026)',
    'Hält den Sitzungszustand.'
        => 'Διατηρεί την κατάσταση της συνεδρίας.',
    'Hält die Clarity-Nutzerkennung und Einstellungen für diese Website'
        => 'Διατηρεί το αναγνωριστικό χρήστη του Clarity και τις ρυθμίσεις για αυτόν τον ιστότοπο',
    'Hält die Variantenzuweisung für A/B-Tests'
        => 'Διατηρεί την ανάθεση παραλλαγής για δοκιμές A/B',
    'Hält die gewählte Kombination vorübergehend fest (Konten ab dem 14.06.2026)'
        => 'Καταγράφει προσωρινά τον επιλεγμένο συνδυασμό (λογαριασμοί από 14.06.2026)',
    'Hält die gewählte Kombination vorübergehend fest (Konten vor dem 14.06.2026)'
        => 'Καταγράφει προσωρινά τον επιλεγμένο συνδυασμό (λογαριασμοί πριν από 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten ab dem 14.06.2026)'
        => 'Καταγράφει την επιλεγμένη παραλλαγή πριν πραγματοποιηθεί η ανακατεύθυνση (λογαριασμοί από 14.06.2026)',
    'Hält die gewählte Variante fest, bevor die Weiterleitung erfolgt (Konten vor dem 14.06.2026)'
        => 'Καταγράφει την επιλεγμένη παραλλαγή πριν πραγματοποιηθεί η ανακατεύθυνση (λογαριασμοί πριν από 14.06.2026)',
    'Hält fest, über welchen Verweis der Besuch zustande kam'
        => 'Καταγράφει μέσω ποιας παραπομπής προέκυψε η επίσκεψη',
    'Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Σε λειτουργία Pre-Clearance: έγκριση για περαιτέρω ελέγχους WAF της ίδιας ζώνης',
    'Indirekte Mitgliedskennung fuer Conversion-Tracking, Retargeting und Auswertung'
        => 'Έμμεσο αναγνωριστικό μέλους για παρακολούθηση μετατροπών, retargeting και αξιολόγηση',
    'Inhalt des Warenkorbs; notwendig'
        => 'Περιεχόμενο του καλαθιού αγορών· απαραίτητο',
    'Kaeuferbezogene Analysedaten in Shop; Analyse'
        => 'Αναλυτικά δεδομένα σχετικά με τους αγοραστές στο κατάστημα· ανάλυση',
    'Kampagnenbezogene eindeutige Kennung (Konten ab dem 14.06.2026)'
        => 'Μοναδικό αναγνωριστικό σχετικό με την καμπάνια (λογαριασμοί από 14.06.2026)',
    'Kennung des ersten Kontakts mit Clarity über alle Clarity-Websites hinweg; laut Anbieter Third-Party-Cookie'
        => 'Αναγνωριστικό της πρώτης επαφής με το Clarity σε όλους τους ιστότοπους που χρησιμοποιούν Clarity· κατά τον πάροχο cookie τρίτου μέρους',
    'Kennzeichnet die laufende Sitzung'
        => 'Χαρακτηρίζει την τρέχουσα συνεδρία',
    'Kommentardaten fuer weitere Kommentare vorhalten'
        => 'Διατήρηση των δεδομένων του σχολίου για επόμενα σχόλια',
    'Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Συνεπής προβολή παραλλαγών δοκιμής A/B',
    'Lastverteilung und Routing'
        => 'Κατανομή φορτίου και δρομολόγηση',
    'Lastverteilung und Routing der Challenge-Anfragen'
        => 'Κατανομή φορτίου και δρομολόγηση των αιτημάτων ελέγχου',
    'Legt die Kontoeinstellungen des Besuchers lokal ab'
        => 'Αποθηκεύει τοπικά τις ρυθμίσεις λογαριασμού του επισκέπτη',
    'Liefert dieselbe Variante einer A/B-Test-Seite aus'
        => 'Παραδίδει την ίδια παραλλαγή μιας σελίδας δοκιμής A/B',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website'
        => 'Ζωντανή συνομιλία και κανάλι μηνυμάτων για την υποστήριξη στον ιστότοπο',
    'Live-Chat und Support-Postfach auf der Website'
        => 'Ζωντανή συνομιλία και γραμματοκιβώτιο υποστήριξης στον ιστότοπο',
    'Marketingdaten der Kaufoberflaechen; Marketing'
        => 'Δεδομένα μάρκετινγκ των διεπαφών αγοράς· μάρκετινγκ',
    'Marketingdaten fuer Kaufoberflaechen'
        => 'Δεδομένα μάρκετινγκ για τις διεπαφές αγοράς',
    'Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel)'
        => 'Απομνημόνευση των ρυθμίσεων του player του θεατή (ένταση, ποιότητα, υπότιτλοι)',
    'Merken von Widget-Zustand und -Einstellungen'
        => 'Απομνημόνευση της κατάστασης και των ρυθμίσεων του widget',
    'Merkt das Schliessen des Global-Privacy-Control-Banners'
        => 'Απομνημονεύει το κλείσιμο του banner Global Privacy Control',
    'Merkt das Schliessen des Hinweis-Banners'
        => 'Απομνημονεύει το κλείσιμο του ενημερωτικού banner',
    'Merkt den Zeitpunkt des Abgleichs mit dem Cookie lms_analytics'
        => 'Απομνημονεύει τη χρονική στιγμή της αντιστοίχισης με το cookie lms_analytics',
    'Merkt den Zeitpunkt des letzten ID-Abgleichs, damit der Abgleich nicht wiederholt wird'
        => 'Απομνημονεύει τη χρονική στιγμή της τελευταίας αντιστοίχισης αναγνωριστικών, ώστε να μην επαναληφθεί η αντιστοίχιση',
    'Merkt die zugewiesene Variante (Konten ab dem 14.06.2026)'
        => 'Απομνημονεύει την παραλλαγή που αποδόθηκε (λογαριασμοί από 14.06.2026)',
    'Merkt die zugewiesene Variante, damit sie bei erneutem Besuch gleich bleibt (Konten vor dem 14.06.2026)'
        => 'Απομνημονεύει την παραλλαγή που αποδόθηκε, ώστε να παραμείνει ίδια σε νέα επίσκεψη (λογαριασμοί πριν από 14.06.2026)',
    'Merkt einen Rabattcode; notwendig'
        => 'Απομνημονεύει έναν κωδικό έκπτωσης· απαραίτητο',
    'Merkt einen Widerspruch gegen die Messung (Konten ab dem 14.06.2026)'
        => 'Απομνημονεύει εναντίωση στη μέτρηση (λογαριασμοί από 14.06.2026)',
    'Merkt einen websiteübergreifenden Widerspruch (Konten vor dem 14.06.2026)'
        => 'Απομνημονεύει εναντίωση που ισχύει σε όλους τους ιστότοπους (λογαριασμοί πριν από 14.06.2026)',
    'Merkt sich Player-Einstellungen wie Lautstaerke, Qualitaet und Untertitel'
        => 'Απομνημονεύει ρυθμίσεις του player όπως ένταση, ποιότητα και υπότιτλους',
    'Merkt sich die Einstellung fuer Tonbenachrichtigungen'
        => 'Απομνημονεύει τη ρύθμιση για τις ηχητικές ειδοποιήσεις',
    'Merkt sich eine erteilte Einwilligung in die Messung'
        => 'Απομνημονεύει τη συγκατάθεση που δόθηκε για τη μέτρηση',
    'Merkt sich einen Widerspruch gegen die Messung'
        => 'Απομνημονεύει την εναντίωση στη μέτρηση',
    'Merkt sich weggeklickte proaktive Nachrichten'
        => 'Απομνημονεύει τα προδραστικά μηνύματα που έχουν κλείσει',
    'Merkt sich, dass der Besucher die Beschriftung des Startknopfs weggeklickt hat'
        => 'Απομνημονεύει ότι ο επισκέπτης έκλεισε την ένδειξη του κουμπιού εκκίνησης',
    'Merkt sich, ob das Widget offen oder geschlossen ist'
        => 'Απομνημονεύει αν το widget είναι ανοιχτό ή κλειστό',
    'Merkt, dass der Besucher an keiner Kampagne teilnehmen soll (Konten vor dem 14.06.2026)'
        => 'Απομνημονεύει ότι ο επισκέπτης δεν πρέπει να συμμετέχει σε καμία καμπάνια (λογαριασμοί πριν από 14.06.2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten ab dem 14.06.2026)'
        => 'Απομνημονεύει ότι ο επισκέπτης εξαιρείται από την καμπάνια (λογαριασμοί από 14.06.2026)',
    'Merkt, dass der Besucher von der Kampagne ausgenommen ist (Konten vor dem 14.06.2026)'
        => 'Απομνημονεύει ότι ο επισκέπτης εξαιρείται από την καμπάνια (λογαριασμοί πριν από 14.06.2026)',
    'Merkt, dass der Einwilligungshinweis geschlossen wurde'
        => 'Απομνημονεύει ότι η ειδοποίηση συγκατάθεσης έκλεισε',
    'Merkt, dass der Shop-Hinweis geschlossen wurde'
        => 'Απομνημονεύει ότι η ειδοποίηση του καταστήματος έκλεισε',
    'Merkt, dass die Cookie-Frage nicht erneut gestellt werden soll'
        => 'Απομνημονεύει ότι το ερώτημα για τα cookies δεν πρέπει να τεθεί ξανά',
    'Merkt, dass ein Tag bereits ausgeloest wurde'
        => 'Απομνημονεύει ότι ένα tag έχει ήδη ενεργοποιηθεί',
    'Merkt, ob bei diesem Besucher die Scrolltiefe gemessen wird'
        => 'Απομνημονεύει αν για αυτόν τον επισκέπτη μετριέται το βάθος κύλισης',
    'Merkt, ob das Chat-Fenster geoeffnet ist'
        => 'Απομνημονεύει αν το παράθυρο συνομιλίας είναι ανοιχτό',
    'Merkt, ob die MUID-Kennung an eine Werbekennung übergeben wird; laut Anbieter immer 0, Third-Party-Cookie'
        => 'Απομνημονεύει αν το αναγνωριστικό MUID μεταβιβάζεται σε διαφημιστικό αναγνωριστικό· κατά τον πάροχο πάντα 0, cookie τρίτου μέρους',
    'Messen von Oeffnungen und Klicks in E-Mail-Kampagnen'
        => 'Μέτρηση ανοιγμάτων και κλικ σε καμπάνιες email',
    'Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Μέτρηση συνεδριών και συμβάντων σε σελίδες με widget',
    'Messen von Sitzungen und Zuordnen der Besuchsquelle'
        => 'Μέτρηση συνεδριών και απόδοση της πηγής επίσκεψης',
    'Messung der Dienstverfügbarkeit durch Google'
        => 'Μέτρηση της διαθεσιμότητας της υπηρεσίας από την Google',
    'Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Μέτρηση του χρόνου φόρτωσης και των βασικών δεικτών της σελίδας (Real User Monitoring)',
    'Messung der Scrolltiefe und von Klickereignissen'
        => 'Μέτρηση του βάθους κύλισης και συμβάντων κλικ',
    'Messung der Werbewirkung'
        => 'Μέτρηση της αποτελεσματικότητας της διαφήμισης',
    'Messung des Nutzungsverhaltens auf der Website'
        => 'Μέτρηση της συμπεριφοράς χρήσης στον ιστότοπο',
    'Messung und Personalisierung von Anzeigen im TikTok-Pangle-Werbenetzwerk'
        => 'Μέτρηση και εξατομίκευση διαφημίσεων στο διαφημιστικό δίκτυο TikTok Pangle',
    'Messung und Verbesserung der Leistung von Werbekampagnen'
        => 'Μέτρηση και βελτίωση της απόδοσης διαφημιστικών καμπανιών',
    'Messung von Auslieferungen und Klicks'
        => 'Μέτρηση προβολών και κλικ',
    'Messung von Besuchern und Sitzungen für Auswertungen'
        => 'Μέτρηση επισκεπτών και συνεδριών για αξιολογήσεις',
    'Messung von Conversions'
        => 'Μέτρηση μετατροπών',
    'Messung von Seitenaufrufen und Besuchen'
        => 'Μέτρηση προβολών σελίδων και επισκέψεων',
    'Messung von Seitenaufrufen und Ereignissen'
        => 'Μέτρηση προβολών σελίδων και συμβάντων',
    'Messung von Seitenaufrufen und Nutzungsverhalten'
        => 'Μέτρηση προβολών σελίδων και συμπεριφοράς χρήσης',
    'Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Μέτρηση προβολών σελίδων και προσαρμοσμένων συμβάντων',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen'
        => 'Μέτρηση προβολών σελίδων, επισκέψεων και συνεδριών',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server'
        => 'Μέτρηση προβολών σελίδων, επισκέψεων και συνεδριών στον ίδιο τον διακομιστή',
    'Messung von Werbekampagnen und Conversions auf der Website'
        => 'Μέτρηση διαφημιστικών καμπανιών και μετατροπών στον ιστότοπο',
    'Messung von Zielen und Conversions einer Kampagne'
        => 'Μέτρηση στόχων και μετατροπών μιας καμπάνιας',
    'Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter'
        => 'Μεταφόρτωση πλακιδίων χάρτη, γραμματοσειρών και στυλ από τον πάροχο',
    'Name aus dem Kommentarformular vorbelegen'
        => 'Προσυμπλήρωση του ονόματος από τη φόρμα σχολίων',
    'Nutzer-ID'
        => 'Αναγνωριστικό χρήστη',
    'Ordnet den Warenkorb dem richtigen Land zu; notwendig'
        => 'Αντιστοιχίζει το καλάθι στη σωστή χώρα· απαραίτητο',
    'Ordnet den Warenkorb in der Datenbank der richtigen Kundin zu'
        => 'Αντιστοιχίζει το καλάθι στη βάση δεδομένων στον σωστό πελάτη',
    'Ordnet die Aktionen eines Besuchs einer Sitzung zu'
        => 'Αντιστοιχίζει τις ενέργειες μιας επίσκεψης σε μια συνεδρία',
    'Personalisierung der Werbung auf TikTok'
        => 'Εξατομίκευση της διαφήμισης στο TikTok',
    'Pruefen, ob WordPress Cookies setzen kann'
        => 'Έλεγχος αν το WordPress μπορεί να τοποθετεί cookies',
    'Prueft die Cookie-Faehigkeit des Browsers; notwendig'
        => 'Ελέγχει αν το πρόγραμμα περιήγησης υποστηρίζει cookies· απαραίτητο',
    'Prueft, ob WordPress Cookies setzen kann'
        => 'Ελέγχει αν το WordPress μπορεί να τοποθετεί cookies',
    'Pruefwert des Shop-Passworts; notwendig'
        => 'Τιμή ελέγχου του κωδικού πρόσβασης του καταστήματος· απαραίτητο',
    'Prüfcookie des Anbieters (Konten vor dem 14.06.2026)'
        => 'Cookie ελέγχου του παρόχου (λογαριασμοί πριν από 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten ab dem 14.06.2026)'
        => 'Ελέγχει αν το πρόγραμμα περιήγησης δέχεται cookies (λογαριασμοί από 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (Konten vor dem 14.06.2026)'
        => 'Ελέγχει αν το πρόγραμμα περιήγησης δέχεται cookies (λογαριασμοί πριν από 14.06.2026)',
    'Prüft, ob der Browser Cookies annimmt (laut Anbieter nur im Internet Explorer)'
        => 'Ελέγχει αν το πρόγραμμα περιήγησης δέχεται cookies (σύμφωνα με τον πάροχο μόνο στον Internet Explorer)',
    'Ratenbegrenzung beim CDN-Anbieter von HubSpot'
        => 'Περιορισμός ρυθμού αιτημάτων στον πάροχο CDN της HubSpot',
    'Reichweiten- und Nutzungsmessung'
        => 'Μέτρηση απήχησης και χρήσης',
    'Reichweitenmessung'
        => 'Μέτρηση απήχησης',
    'Reichweitenmessung der eingebetteten Videos durch Vimeo'
        => 'Μέτρηση της απήχησης των ενσωματωμένων βίντεο από το Vimeo',
    'Reichweitenmessung fuer den Shop-Betreiber'
        => 'Μέτρηση απήχησης για τον διαχειριστή του καταστήματος',
    'Remarketing und Zielgruppenbildung'
        => 'Remarketing και δημιουργία κοινών-στόχων',
    'Retargeting'
        => 'Retargeting',
    'Retargeting von Website-Besuchern'
        => 'Retargeting επισκεπτών του ιστότοπου',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot'
        => 'Ανάλυση κινδύνου για τη διάκριση ανθρώπου και bot',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten ab dem 14.06.2026)'
        => 'Συλλογικό cookie που, κατά τον πάροχο, δημιουργείται μόνο στο πρόγραμμα περιήγησης Safari (λογαριασμοί από 14.06.2026)',
    'Sammelcookie, laut Anbieter nur im Safari-Browser angelegt (Konten vor dem 14.06.2026)'
        => 'Συλλογικό cookie που, κατά τον πάροχο, δημιουργείται μόνο στο πρόγραμμα περιήγησης Safari (λογαριασμοί πριν από 14.06.2026)',
    'Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte'
        => 'Συλλογή πληροφοριών για τη συμπεριφορά περιήγησης αυτών των χρηστών από το Spotify και τρίτους',
    'Schalter, den der Website-Betreiber selbst setzt, um das Klaviyo-Tracking zu unterbinden'
        => 'Διακόπτης που θέτει ο ίδιος ο διαχειριστής του ιστότοπου για να αποτρέψει την παρακολούθηση από το Klaviyo',
    'Schutz der Mitglieder-Anmeldung gegen Faelschung'
        => 'Προστασία της σύνδεσης μελών από πλαστογράφηση',
    'Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Προστασία φορμών από αυτοματοποιημένη κατάχρηση',
    'Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Προστασία από αυτοματοποιημένα αιτήματα (spam, credential stuffing)',
    'Sicherheit'
        => 'Ασφάλεια',
    'Sicherheitsfunktionen'
        => 'Λειτουργίες ασφάλειας',
    'Sicherheitsfunktionen, wenn die optionale Funktion User Journeys aktiv ist'
        => 'Λειτουργίες ασφάλειας, όταν είναι ενεργή η προαιρετική λειτουργία User Journeys',
    'Sitzung'
        => 'Συνεδρία',
    'Sitzungs- und Sprach- beziehungsweise Landeszuordnung'
        => 'Αντιστοίχιση συνεδρίας και γλώσσας ή χώρας',
    'Sitzungsaufzeichnung'
        => 'Καταγραφή συνεδρίας',
    'Sitzungskennung fuer die Auswertung von Ereignissen auf Seiten mit Widget'
        => 'Αναγνωριστικό συνεδρίας για την αξιολόγηση συμβάντων σε σελίδες με widget',
    'Sitzungskennung fuer die Shop-Statistik; Analyse'
        => 'Αναγνωριστικό συνεδρίας για τα στατιστικά του καταστήματος· ανάλυση',
    'Sitzungsschluessel des Answer-Bot-Dienstes'
        => 'Κλειδί συνεδρίας της υπηρεσίας Answer Bot',
    'Sitzungswiedergabe'
        => 'Αναπαραγωγή συνεδρίας',
    'Speichert das Authentifizierungs-Token nach der Anmeldung'
        => 'Αποθηκεύει το token ταυτοποίησης μετά τη σύνδεση',
    'Speichert das kodierte Passwort fuer passwortgeschuetzte Videos'
        => 'Αποθηκεύει τον κωδικοποιημένο κωδικό πρόσβασης για βίντεο που προστατεύονται με κωδικό',
    'Speichert den Schluessel der gewaehlten Sprache'
        => 'Αποθηκεύει το κλειδί της επιλεγμένης γλώσσας',
    'Speichert die Datenschutzpraeferenz des Besuchers; notwendig'
        => 'Αποθηκεύει την προτίμηση απορρήτου του επισκέπτη· απαραίτητο',
    'Speichert die Einwilligungsentscheidung des Besuchers'
        => 'Αποθηκεύει την απόφαση συγκατάθεσης του επισκέπτη',
    'Speichert die Geraetekennung des Besuchers zur Authentifizierung im Chat-Widget'
        => 'Αποθηκεύει το αναγνωριστικό συσκευής του επισκέπτη για την ταυτοποίηση στο widget συνομιλίας',
    'Speichert die Kennung eines fuer ein Webinar angemeldeten Nutzers'
        => 'Αποθηκεύει το αναγνωριστικό χρήστη που έχει δηλώσει συμμετοχή σε webinar',
    'Speichert die Klick-Kennung fbclid, damit ein Website-Ereignis einer Anzeige zugeordnet werden kann'
        => 'Αποθηκεύει το αναγνωριστικό κλικ fbclid, ώστε ένα συμβάν του ιστότοπου να μπορεί να αποδοθεί σε διαφήμιση',
    'Speichert die Nutzerkennung aus einem dem Video vorgeschalteten Registrierungsformular'
        => 'Αποθηκεύει το αναγνωριστικό χρήστη από φόρμα εγγραφής που προηγείται του βίντεο',
    'Speichert die TikTok-Klick-Kennung zur Zuordnung von Conversions'
        => 'Αποθηκεύει το αναγνωριστικό κλικ του TikTok για την απόδοση μετατροπών',
    'Speichert die eindeutige Besucher-ID zur Wiedererkennung'
        => 'Αποθηκεύει το μοναδικό αναγνωριστικό επισκέπτη για την αναγνώρισή του',
    'Speichert die zugestimmten Kategorien'
        => 'Αποθηκεύει τις κατηγορίες για τις οποίες δόθηκε συγκατάθεση',
    'Speist das Widget zuletzt angesehener Produkte'
        => 'Τροφοδοτεί το widget των προϊόντων που προβλήθηκαν τελευταία',
    'Steuert, ob die MUID-Kennung erneuert wird; laut Anbieter Third-Party-Cookie'
        => 'Καθορίζει αν το αναγνωριστικό MUID ανανεώνεται· κατά τον πάροχο cookie τρίτου μέρους',
    'Technisch erforderlich für Betrieb und Sicherheit der Website.'
        => 'Τεχνικά απαραίτητο για τη λειτουργία και την ασφάλεια του ιστότοπου.',
    'Traegt Sitzungs- und Checkout-Daten des Shops; vom Anbieter als notwendig gefuehrt'
        => 'Μεταφέρει δεδομένα συνεδρίας και ολοκλήρωσης παραγγελίας του καταστήματος· ο πάροχος το κατατάσσει ως απαραίτητο',
    'Traegt die Widerspruchsfunktion (Opt-out)'
        => 'Φέρει τη λειτουργία εναντίωσης (opt-out)',
    'Transaktionssicherheit'
        => 'Ασφάλεια συναλλαγών',
    'Trägt die Risikoanalyse von reCAPTCHA.'
        => 'Φέρει την ανάλυση κινδύνου του reCAPTCHA.',
    'Uebermittlung von Website-Ereignissen an TikTok'
        => 'Διαβίβαση συμβάντων του ιστότοπου στο TikTok',
    'Umfragen'
        => 'Έρευνες',
    'Unterbindet die Uebermittlung von Daten an HubSpot'
        => 'Αποτρέπει τη διαβίβαση δεδομένων στο HubSpot',
    'Unterdrueckt die Willkommensnachricht des Chats nach dem Schliessen'
        => 'Καταστέλλει το μήνυμα καλωσορίσματος της συνομιλίας μετά το κλείσιμό της',
    'Unterscheidet Browser, die Microsoft-Seiten aufrufen; mit Einwilligung auch fuer Werbung'
        => 'Διακρίνει τα προγράμματα περιήγησης που ανοίγουν σελίδες της Microsoft· με συγκατάθεση και για διαφήμιση',
    'Unterscheidet einzelne Nutzer.'
        => 'Διακρίνει μεμονωμένους χρήστες.',
    'Unterscheidung einzelner Nutzer'
        => 'Διάκριση μεμονωμένων χρηστών',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen'
        => 'Διάκριση ανθρώπου και bot σε φόρμες και συνδέσεις',
    'Verbindet mehrere Seitenaufrufe zu einer Sitzungsaufzeichnung'
        => 'Συνδέει πολλαπλές προβολές σελίδων σε μία καταγραφή συνεδρίας',
    'Verhindert dauerndes Anzeigen des Banners im strikten Modus'
        => 'Αποτρέπει τη διαρκή εμφάνιση του banner στην αυστηρή λειτουργία',
    'Verteilen der Consent-Signale an Google-Tags'
        => 'Διανομή των σημάτων συγκατάθεσης στα tags της Google',
    'Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Διαχείριση της απόφασης συγκατάθεσης για τα tags που έχουν διαμορφωθεί στο container',
    'Verwaltung des Widerspruchs gegen die Messung'
        => 'Διαχείριση της εναντίωσης στη μέτρηση',
    'Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Διαχείριση εναντίωσης και συγκατάθεσης για τη μέτρηση',
    'Von Google den Kategorien Analyse und Werbung zugeordnet.'
        => 'Κατατάσσεται από την Google στις κατηγορίες Ανάλυση και Διαφήμιση.',
    'Von Google den Kategorien Analyse, Werbung und Sicherheit zugeordnet.'
        => 'Κατατάσσεται από την Google στις κατηγορίες Ανάλυση, Διαφήμιση και Ασφάλεια.',
    'Von Google den Kategorien Funktionalität, Werbung und Sicherheit zugeordnet.'
        => 'Κατατάσσεται από την Google στις κατηγορίες Λειτουργικότητα, Διαφήμιση και Ασφάλεια.',
    'Von Google den Kategorien Sicherheit und Funktionalität zugeordnet.'
        => 'Κατατάσσεται από την Google στις κατηγορίες Ασφάλεια και Λειτουργικότητα.',
    'Von Google den Kategorien Sicherheit und Werbung zugeordnet.'
        => 'Κατατάσσεται από την Google στις κατηγορίες Ασφάλεια και Διαφήμιση.',
    'Von Google den Kategorien Sicherheit, Analyse, Funktionalität und Werbung zugeordnet.'
        => 'Κατατάσσεται από την Google στις κατηγορίες Ασφάλεια, Ανάλυση, Λειτουργικότητα και Διαφήμιση.',
    'Von Google den Kategorien Sicherheit, Funktionalität und Werbung zugeordnet.'
        => 'Κατατάσσεται από την Google στις κατηγορίες Ασφάλεια, Λειτουργικότητα και Διαφήμιση.',
    'Von Google den Kategorien Werbung und Sicherheit zugeordnet.'
        => 'Κατατάσσεται από την Google στις κατηγορίες Διαφήμιση και Ασφάλεια.',
    'Von Google der Kategorie Analyse zugeordnet; einen genaueren Zweck nennt Google nicht.'
        => 'Κατατάσσεται από την Google στην κατηγορία Ανάλυση· η Google δεν αναφέρει ειδικότερο σκοπό.',
    'Von Google der Kategorie Funktionalität zugeordnet.'
        => 'Κατατάσσεται από την Google στην κατηγορία Λειτουργικότητα.',
    'Von Google der Kategorie Sicherheit zugeordnet.'
        => 'Κατατάσσεται από την Google στην κατηγορία Ασφάλεια.',
    'Von Google der Kategorie Werbung zugeordnet.'
        => 'Κατατάσσεται από την Google στην κατηγορία Διαφήμιση.',
    'Von Microsoft als eines der Cookies genannt, die ohne Einwilligung nicht gesetzt werden duerfen; eine eigene Zweckbeschreibung nennt Microsoft nicht'
        => 'Αναφέρεται από τη Microsoft ως ένα από τα cookies που δεν επιτρέπεται να τοποθετούνται χωρίς συγκατάθεση· δική της περιγραφή σκοπού η Microsoft δεν αναφέρει',
    'Von Vimeo erzeugte Kennung fuer die Reichweitenmessung'
        => 'Αναγνωριστικό που δημιουργεί το Vimeo για τη μέτρηση απήχησης',
    'Waehrung des Warenkorbs nach abgeschlossenem Checkout; notwendig'
        => 'Νόμισμα του καλαθιού μετά την ολοκλήρωση της παραγγελίας· απαραίτητο',
    'Wahrscheinlichkeitsbasierte Zuordnung eines Browsers zu einer Person'
        => 'Πιθανοτική αντιστοίχιση ενός προγράμματος περιήγησης σε ένα πρόσωπο',
    'Warenkorb einer Besucherin zuordnen'
        => 'Αντιστοίχιση του καλαθιού σε έναν επισκέπτη',
    'Website-Adresse aus dem Kommentarformular vorbelegen'
        => 'Προσυμπλήρωση της διεύθυνσης ιστότοπου από τη φόρμα σχολίων',
    'Werbebezogene Wiedererkennung des Zuschauers'
        => 'Αναγνώριση του θεατή για διαφημιστικούς σκοπούς',
    'Werbepersonalisierung'
        => 'Εξατομίκευση διαφημίσεων',
    'Wie _pin_unauth, aber als Drittanbieter-Cookie'
        => 'Όπως το _pin_unauth, αλλά ως cookie τρίτου μέρους',
    'Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs'
        => 'Αναγνώριση του επισκέπτη εντός της διαδικασίας κράτησης',
    'Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs'
        => 'Αναγνώριση του επισκέπτη μεταξύ προβολών σελίδων και καρτελών',
    'Wiedererkennen und Identifizieren von Website-Besuchern'
        => 'Αναγνώριση και ταυτοποίηση επισκεπτών του ιστότοπου',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg'
        => 'Αναγνώριση επισκεπτών σε περισσότερες επισκέψεις',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting'
        => 'Αναγνώριση επισκεπτών συνδεδεμένων ιστότοπων για retargeting',
    'Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen'
        => 'Αναγνώριση επισκεπτών που επιστρέφουν και αντιστοίχιση προηγούμενων συνομιλιών',
    'Wiedererkennung des Besuchers und Ablage seiner Merkmale'
        => 'Αναγνώριση του επισκέπτη και αποθήκευση των χαρακτηριστικών του',
    'Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Αναγνώριση του προγράμματος περιήγησης μέσω του αναγνωριστικού Criteo',
    'Wiedererkennung des Nutzers; nur mit Einwilligung, im Standard blockiert'
        => 'Αναγνώριση του χρήστη· μόνο με συγκατάθεση, εξ ορισμού αποκλεισμένο',
    'Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Αναγνώριση ενός προγράμματος περιήγησης σε μεταγενέστερες επισκέψεις μετά από συγκατάθεση',
    'Wiedererkennung von Besuchern und Zuordnung zu Sitzungen'
        => 'Αναγνώριση επισκεπτών και αντιστοίχιση σε συνεδρίες',
    'Wiedererkennung von LinkedIn-Mitgliedern ausserhalb von LinkedIn fuer Werbung'
        => 'Αναγνώριση μελών του LinkedIn εκτός LinkedIn για διαφήμιση',
    'Wiedererkennung von Nutzern nach Einwilligung'
        => 'Αναγνώριση χρηστών μετά από συγκατάθεση',
    'Wiedererkennung wiederkehrender Besucher über eine Besucher-ID'
        => 'Αναγνώριση επισκεπτών που επιστρέφουν μέσω αναγνωριστικού επισκέπτη',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten ab dem 14.06.2026)'
        => 'Τοποθετείται όταν έχει ενεργοποιηθεί ένας στόχος καμπάνιας (λογαριασμοί από 14.06.2026)',
    'Wird gesetzt, wenn ein Kampagnenziel ausgelöst wurde (Konten vor dem 14.06.2026)'
        => 'Τοποθετείται όταν έχει ενεργοποιηθεί ένας στόχος καμπάνιας (λογαριασμοί πριν από 14.06.2026)',
    'Wird gesetzt, wenn eine Person eine Website mit eingebautem Pinterest-Tag besucht'
        => 'Τοποθετείται όταν ένα πρόσωπο επισκέπτεται ιστότοπο με ενσωματωμένο tag του Pinterest',
    'Wird gesetzt, wenn eine Zuordnung ohne vorhandene Cookies gelingt, etwa ueber Enhanced Match'
        => 'Τοποθετείται όταν η αντιστοίχιση επιτυγχάνεται χωρίς υπάρχοντα cookies, π.χ. μέσω Enhanced Match',
    'Wird vom JavaScript-Tag aus Angaben gesetzt, die Pinterest mit beworbenem Traffic uebergibt'
        => 'Τοποθετείται από το tag JavaScript με βάση στοιχεία που μεταβιβάζει το Pinterest μαζί με τη διαφημιζόμενη επισκεψιμότητα',
    'Zaehlt und begrenzt Sitzungen'
        => 'Μετρά και περιορίζει τις συνεδρίες',
    'Zahlungsabwicklung'
        => 'Διεκπεραίωση πληρωμών',
    'Zeigt an, ob die Sitzung noch laeuft oder neu ist'
        => 'Δείχνει αν η συνεδρία συνεχίζεται ή είναι νέα',
    'Zeigt der Oberflaeche an, dass und als wer man angemeldet ist'
        => 'Δείχνει στη διεπαφή ότι και ως ποιος έχει γίνει σύνδεση',
    'Zufaellige Browser-Kennung, die die Pixel-Ereignisse einer Website einem Browser zuordnet'
        => 'Τυχαίο αναγνωριστικό προγράμματος περιήγησης που αποδίδει τα συμβάντα pixel ενός ιστότοπου σε ένα πρόγραμμα περιήγησης',
    'Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen'
        => 'Εμφάνιση των προϊόντων που προβλήθηκαν τελευταία στο αντίστοιχο widget',
    'Zuordnen von Verhalten auf der Website zu einem Profil'
        => 'Απόδοση της συμπεριφοράς στον ιστότοπο σε ένα προφίλ',
    'Zuordnung der Herkunft eines Besuchs (Referrer, Attribution)'
        => 'Απόδοση της προέλευσης μιας επίσκεψης (Referrer, attribution)',
    'Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse'
        => 'Αντιστοίχιση ενός επισκέπτη σε επαφή του λογαριασμού Brevo μέσω της διεύθυνσης email',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher'
        => 'Απόδοση συναλλαγών, όπως leads και πωλήσεις, σε έναν εκδότη',
    'Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Απόδοση ενεργειών στον ιστότοπο σε διαφημίσεις που είχαν προβληθεί προηγουμένως',
    'Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung'
        => 'Συνένωση πολλών προβολών σελίδων σε μία συνεδρία',
    'Zusatzdaten zu erfassten Ereignissen des Besuchsverlaufs'
        => 'Πρόσθετα δεδομένα για τα καταγεγραμμένα συμβάντα της πορείας επίσκεψης',
    'Zuweisung und Beibehaltung einer Variante über mehrere Besuche'
        => 'Απόδοση και διατήρηση μιας παραλλαγής σε περισσότερες επισκέψεις',
    'Zwischenspeicher fuer Ereignisse anhand von CSS-Selektoren'
        => 'Προσωρινή μνήμη για συμβάντα βάσει επιλογέων CSS',
    'Zwischenspeicher fuer Messenger- und Besucherdaten im Browserspeicher'
        => 'Προσωρινή μνήμη για δεδομένα του Messenger και του επισκέπτη στη μνήμη του προγράμματος περιήγησης',
    'Zwischenspeicher fuer die Eintraege des Tag Managers'
        => 'Προσωρινή μνήμη για τις καταχωρίσεις του Tag Manager',
    'Zwischenspeicher fuer die Scrolltiefenmessung'
        => 'Προσωρινή μνήμη για τη μέτρηση του βάθους κύλισης',
    'Zwischenspeicher fuer die Variablen des Tag Managers'
        => 'Προσωρινή μνήμη για τις μεταβλητές του Tag Manager',
    'Zwischenspeicher fuer die Widget-Einstellungen, um wiederholte Serveranfragen zu vermeiden'
        => 'Προσωρινή μνήμη για τις ρυθμίσεις του widget, ώστε να αποφεύγονται επαναλαμβανόμενα αιτήματα στον διακομιστή',
    'Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Προσωρινή αποθήκευση των δεδομένων του Messenger και του επισκέπτη στο πρόγραμμα περιήγησης',
    'Zählt die für einen Besucher angelegten Sitzungen (Konten ab dem 14.06.2026)'
        => 'Μετρά τις συνεδρίες που δημιουργήθηκαν για έναν επισκέπτη (λογαριασμοί από 14.06.2026)',
    'Zählt, wie oft der Browser während der Messung geschlossen und wieder geöffnet wurde (Konten vor dem 14.06.2026)'
        => 'Μετρά πόσες φορές έκλεισε και άνοιξε ξανά το πρόγραμμα περιήγησης κατά τη διάρκεια της μέτρησης (λογαριασμοί πριν από 14.06.2026)',
    'Zählung von Seitenaufrufen und Besuchen'
        => 'Καταμέτρηση προβολών σελίδων και επισκέψεων',
    'automatisierte Auswertungen des Nutzerverhaltens'
        => 'αυτοματοποιημένες αξιολογήσεις της συμπεριφοράς των χρηστών',
    'grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'κατά προσέγγιση γεωγραφική αντιστοίχιση σε χώρα, περιφέρεια και πόλη',
    'optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'προαιρετικά καταγραφή της συνεδρίας (Session Replay), εξ ορισμού με αποκρυμμένα κείμενα, εικόνες και καταχωρίσεις',
    'optional Heatmaps und A/B-Tests'
        => 'προαιρετικά heatmaps και δοκιμές A/B',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten ab dem 14.06.2026)'
        => 'Μεταβιβάζει την πηγή παραπομπής σε δοκιμές Split-URL (λογαριασμοί από 14.06.2026)',
    'Übergibt die Verweisquelle bei Split-URL-Tests (Konten vor dem 14.06.2026)'
        => 'Μεταβιβάζει την πηγή παραπομπής σε δοκιμές Split-URL (λογαριασμοί πριν από 14.06.2026)',
    'Zuordnung von Transaktionen wie Leads und Sales zu einem Publisher, Erfolgsmessung eines Werbemittels und Abrechnung der Provision'
        => 'Απόδοση συναλλαγών, όπως leads και πωλήσεις, σε έναν εκδότη, Μέτρηση της απόδοσης ενός διαφημιστικού μέσου και εκκαθάριση της προμήθειας',
    'Erfassung von Besuchern und Seitenaufrufen auf der Website fuer Marketing-Automation, Zuordnung eines Besuchers zu einem Kontakt im Brevo-Konto ueber die E-Mail-Adresse, Erfassung eigener, vom Betreiber definierter Ereignisse'
        => 'Καταγραφή επισκεπτών και προβολών σελίδας στον ιστότοπο για αυτοματοποίηση μάρκετινγκ, Αντιστοίχιση ενός επισκέπτη σε επαφή του λογαριασμού Brevo μέσω της διεύθυνσης email, Καταγραφή ιδίων συμβάντων που ορίζει ο διαχειριστής',
    'Anzeigen des Buchungskalenders und Vereinbaren von Terminen auf der Website, Wiedererkennen des Besuchers innerhalb des Buchungsvorgangs, Abwicklung von Zahlungen, wenn der Termin kostenpflichtig ist'
        => 'Εμφάνιση του ημερολογίου κρατήσεων και κλείσιμο ραντεβού στον ιστότοπο, Αναγνώριση του επισκέπτη εντός της διαδικασίας κράτησης, Διεκπεραίωση πληρωμών όταν το ραντεβού είναι επί πληρωμή',
    'Erkennen und Abweisen automatisierter Zugriffe an Formularen, Ausstellen eines Tokens, das der Server der Website prueft, Im Modus Pre-Clearance: Freigabe fuer weitere WAF-Pruefungen derselben Zone'
        => 'Εντοπισμός και απόρριψη αυτοματοποιημένων προσβάσεων σε φόρμες, Έκδοση διακριτικού (token) που ελέγχει ο διακομιστής του ιστότοπου, Σε λειτουργία Pre-Clearance: έγκριση για περαιτέρω ελέγχους WAF της ίδιας ζώνης',
    'Messung von Seitenaufrufen und Besuchen, Messung der Ladezeit und der Kernkennwerte der Seite (Real User Monitoring)'
        => 'Μέτρηση προβολών σελίδων και επισκέψεων, Μέτρηση του χρόνου φόρτωσης και των βασικών δεικτών της σελίδας (Real User Monitoring)',
    'Auslieferung personalisierter Werbung, Messung der Werbewirkung, Wiedererkennung des Browsers ueber die Criteo-Kennung'
        => 'Προβολή εξατομικευμένης διαφήμισης, Μέτρηση της αποτελεσματικότητας της διαφήμισης, Αναγνώριση του προγράμματος περιήγησης μέσω του αναγνωριστικού Criteo',
    'Messung des Nutzungsverhaltens auf der Website, Bildung pseudonymer Nutzungsprofile nach Einwilligung, Wiedererkennung eines Browsers bei spaeteren Besuchen nach Einwilligung'
        => 'Μέτρηση της συμπεριφοράς χρήσης στον ιστότοπο, Δημιουργία ψευδώνυμων προφίλ χρήσης μετά από συγκατάθεση, Αναγνώριση ενός προγράμματος περιήγησης σε μεταγενέστερες επισκέψεις μετά από συγκατάθεση',
    'Messung von Seitenaufrufen und Nutzungsverhalten, Messung der Scrolltiefe und von Klickereignissen, Wiedererkennung von Nutzern nach Einwilligung, Verwaltung des Widerspruchs gegen die Messung'
        => 'Μέτρηση προβολών σελίδων και συμπεριφοράς χρήσης, Μέτρηση του βάθους κύλισης και συμβάντων κλικ, Αναγνώριση χρηστών μετά από συγκατάθεση, Διαχείριση της εναντίωσης στη μέτρηση',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Schutz vor automatisierten Anfragen (Spam, Credential Stuffing)'
        => 'Διάκριση ανθρώπου και bot σε φόρμες και συνδέσεις, Προστασία από αυτοματοποιημένα αιτήματα (spam, credential stuffing)',
    'Messung von Conversions, Remarketing und Zielgruppenbildung, Begrenzung der Anzeigehäufigkeit, Erkennung von Klickbetrug'
        => 'Μέτρηση μετατροπών, Remarketing και δημιουργία κοινών-στόχων, Περιορισμός της συχνότητας προβολής, Ανίχνευση απάτης με κλικ',
    'Auslieferung von Anzeigen, Begrenzung der Anzeigehäufigkeit, Betrugs- und Missbrauchserkennung, Messung von Auslieferungen und Klicks'
        => 'Προβολή διαφημίσεων, Περιορισμός της συχνότητας προβολής, Ανίχνευση απάτης και κατάχρησης, Μέτρηση προβολών και κλικ',
    'Unterscheidung einzelner Nutzer, Erhalt des Sitzungszustands, Reichweiten- und Nutzungsmessung'
        => 'Διάκριση μεμονωμένων χρηστών, Διατήρηση της κατάστασης της συνεδρίας, Μέτρηση απήχησης και χρήσης',
    'Anzeigen einer interaktiven Karte, Messung der Dienstverfügbarkeit durch Google'
        => 'Εμφάνιση διαδραστικού χάρτη, Μέτρηση της διαθεσιμότητας της υπηρεσίας από την Google',
    'Risikoanalyse zur Unterscheidung von Mensch und Bot, Schutz von Formularen vor automatisiertem Missbrauch'
        => 'Ανάλυση κινδύνου για τη διάκριση ανθρώπου και bot, Προστασία φορμών από αυτοματοποιημένη κατάχρηση',
    'Ausliefern und Verwalten von Tags auf der Website, Verteilen der Consent-Signale an Google-Tags'
        => 'Παράδοση και διαχείριση tags στον ιστότοπο, Διανομή των σημάτων συγκατάθεσης στα tags της Google',
    'Unterscheidung zwischen Mensch und Bot bei Formularen und Anmeldungen, Lastverteilung und Routing der Challenge-Anfragen, Bereitstellung des Barrierefreiheits-Zugangs'
        => 'Διάκριση ανθρώπου και bot σε φόρμες και συνδέσεις, Κατανομή φορτίου και δρομολόγηση των αιτημάτων ελέγχου, Παροχή προσβασιμότητας',
    'Heatmaps, Sitzungsaufzeichnung, Umfragen'
        => 'Heatmaps, Καταγραφή συνεδρίας, Έρευνες',
    'Wiedererkennen von Besuchern ueber mehrere Besuche hinweg, Messen von Sitzungen und Zuordnen der Besuchsquelle, Deduplizieren von Kontakten, Betrieb des Chat-Widgets, Konsistente Ausspielung von A/B-Test-Varianten'
        => 'Αναγνώριση επισκεπτών σε περισσότερες επισκέψεις, Μέτρηση συνεδριών και απόδοση της πηγής επίσκεψης, Απαλοιφή διπλότυπων επαφών, Λειτουργία του widget συνομιλίας, Συνεπής προβολή παραλλαγών δοκιμής A/B',
    'Live-Chat und Support-Postfach auf der Website, Wiedererkennen wiederkehrender Besucher und Zuordnen frueherer Unterhaltungen, Erkennen des Geraets zur Missbrauchsabwehr, Zwischenspeichern der Messenger- und Besucherdaten im Browser'
        => 'Ζωντανή συνομιλία και γραμματοκιβώτιο υποστήριξης στον ιστότοπο, Αναγνώριση επισκεπτών που επιστρέφουν και αντιστοίχιση προηγούμενων συνομιλιών, Αναγνώριση της συσκευής για προστασία από κατάχρηση, Προσωρινή αποθήκευση των δεδομένων του Messenger και του επισκέπτη στο πρόγραμμα περιήγησης',
    'Einblendung von Finanzierungs- und Ratenzahlungshinweisen auf Produkt- und Warenkorbseiten (On-site Messaging), Auslieferung der Hinweisinhalte in vorbereitete Platzhalter im Seitenquelltext ueber einen Ad-Server'
        => 'Εμφάνιση ενημερώσεων για χρηματοδότηση και δόσεις στις σελίδες προϊόντων και καλαθιού (On-site Messaging), Παράδοση του περιεχομένου των ειδοποιήσεων σε προετοιμασμένα σημεία στον πηγαίο κώδικα της σελίδας μέσω Ad-Server',
    'Wiedererkennen und Identifizieren von Website-Besuchern, Zuordnen von Verhalten auf der Website zu einem Profil, Aussteuern von Anmeldeformularen auf der Website'
        => 'Αναγνώριση και ταυτοποίηση επισκεπτών του ιστότοπου, Απόδοση της συμπεριφοράς στον ιστότοπο σε ένα προφίλ, Έλεγχος της προβολής φορμών εγγραφής στον ιστότοπο',
    'Conversion-Tracking fuer LinkedIn-Werbekampagnen, Retargeting von Website-Besuchern, Auswertung der Website-Zielgruppe (Website-Demografie)'
        => 'Παρακολούθηση μετατροπών για διαφημιστικές καμπάνιες LinkedIn, Retargeting επισκεπτών του ιστότοπου, Αξιολόγηση του κοινού του ιστότοπου (δημογραφικά στοιχεία ιστότοπου)',
    'Wiedererkennen von Besuchern verbundener Websites fuer Retargeting, Aussteuern von Popup-Formularen, damit sie nicht wiederholt erscheinen, Messen von Oeffnungen und Klicks in E-Mail-Kampagnen, Einbinden von Werbe-Pixeln von Google und Facebook auf der verbundenen Website'
        => 'Αναγνώριση επισκεπτών συνδεδεμένων ιστότοπων για retargeting, Έλεγχος των αναδυόμενων φορμών, ώστε να μην εμφανίζονται επανειλημμένα, Μέτρηση ανοιγμάτων και κλικ σε καμπάνιες email, Ενσωμάτωση διαφημιστικών pixel της Google και του Facebook στον συνδεδεμένο ιστότοπο',
    'Darstellung interaktiver Karten auf der Website, Nachladen von Kartenkacheln, Schriften und Stilen vom Anbieter, Abrechnung und Absicherung der Kartenaufrufe'
        => 'Απεικόνιση διαδραστικών χαρτών στον ιστότοπο, Μεταφόρτωση πλακιδίων χάρτη, γραμματοσειρών και στυλ από τον πάροχο, Χρέωση και προστασία των κλήσεων του χάρτη',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Μέτρηση προβολών σελίδων, επισκέψεων και συνεδριών, Αναγνώριση επισκεπτών που επιστρέφουν μέσω αναγνωριστικού επισκέπτη, Απόδοση της προέλευσης μιας επίσκεψης (Referrer, attribution), προαιρετικά heatmaps και δοκιμές A/B',
    'Messung von Seitenaufrufen, Besuchen und Sitzungen auf dem eigenen Server, Wiedererkennung wiederkehrender Besucher über eine Besucher-ID, Zuordnung der Herkunft eines Besuchs (Referrer, Attribution), optional Heatmaps und A/B-Tests'
        => 'Μέτρηση προβολών σελίδων, επισκέψεων και συνεδριών στον ίδιο τον διακομιστή, Αναγνώριση επισκεπτών που επιστρέφουν μέσω αναγνωριστικού επισκέπτη, Απόδοση της προέλευσης μιας επίσκεψης (Referrer, attribution), προαιρετικά heatmaps και δοκιμές A/B',
    'Ausliefern und Ausloesen von Tags auf der Website, Verwalten der Einwilligungsentscheidung fuer die im Container konfigurierten Tags'
        => 'Παράδοση και ενεργοποίηση tags στον ιστότοπο, Διαχείριση της απόφασης συγκατάθεσης για τα tags που έχουν διαμορφωθεί στο container',
    'Messung von Werbekampagnen und Conversions auf der Website, Bildung von Zielgruppen und Retargeting'
        => 'Μέτρηση διαφημιστικών καμπανιών και μετατροπών στον ιστότοπο, Δημιουργία κοινών-στόχων και retargeting',
    'Conversion-Tracking fuer Microsoft-Advertising-Kampagnen, Aufbau von Remarketing-Listen, Messung von Seitenaufrufen und benutzerdefinierten Ereignissen'
        => 'Παρακολούθηση μετατροπών για καμπάνιες Microsoft Advertising, Δημιουργία λιστών remarketing, Μέτρηση προβολών σελίδων και προσαρμοσμένων συμβάντων',
    'Aufzeichnung und Wiedergabe von Sitzungen, Heatmaps von Klicks und Scrollverhalten, Zusammenführen mehrerer Seitenaufrufe zu einer Sitzung, automatisierte Auswertungen des Nutzerverhaltens'
        => 'Καταγραφή και αναπαραγωγή συνεδριών, Heatmaps κλικ και συμπεριφοράς κύλισης, Συνένωση πολλών προβολών σελίδων σε μία συνεδρία, αυτοματοποιημένες αξιολογήσεις της συμπεριφοράς των χρηστών',
    'Abwicklung einer vom Besucher ausgeloesten Zahlung, Einbettung der Kartenfelder im eigenen Checkout, damit Kartendaten nicht ueber den Shop laufen, Betrugspraevention und gesetzliche Pflichten als Zahlungsdienstleister'
        => 'Διεκπεραίωση πληρωμής που εκκίνησε ο επισκέπτης, Ενσωμάτωση των πεδίων κάρτας στο ίδιο το checkout, ώστε τα δεδομένα κάρτας να μην περνούν μέσα από το κατάστημα, Πρόληψη απάτης και νομικές υποχρεώσεις ως πάροχος υπηρεσιών πληρωμών',
    'Aufzeichnung von Mausbewegungen, Sitzungswiedergabe, Analyse des Nutzungsverhaltens'
        => 'Καταγραφή των κινήσεων του ποντικιού, Αναπαραγωγή συνεδρίας, Ανάλυση της συμπεριφοράς χρήσης',
    'Ausliefern von Kartenkacheln an eingebettete Karten, Betrieb und Missbrauchsabwehr der Kartendienste'
        => 'Παράδοση πλακιδίων χάρτη σε ενσωματωμένους χάρτες, Λειτουργία και προστασία από κατάχρηση των υπηρεσιών χαρτών',
    'Zahlungsabwicklung, Betrugsprävention'
        => 'Διεκπεραίωση πληρωμών, Πρόληψη απάτης',
    'Conversion-Tracking fuer Pinterest-Werbekampagnen, Bildung von Zielgruppen und Retargeting, Zuordnung von Website-Aktionen zu vorher gesehenen Anzeigen'
        => 'Παρακολούθηση μετατροπών για διαφημιστικές καμπάνιες Pinterest, Δημιουργία κοινών-στόχων και retargeting, Απόδοση ενεργειών στον ιστότοπο σε διαφημίσεις που είχαν προβληθεί προηγουμένως',
    'Messung von Seitenaufrufen und Ereignissen, Wiedererkennung von Besuchern und Zuordnung zu Sitzungen, Auswertung von Herkunft und Kampagnen, Auswertung von Geraet, Browser und geschaetztem Standort, E-Commerce- und Zielauswertung'
        => 'Μέτρηση προβολών σελίδων και συμβάντων, Αναγνώριση επισκεπτών και αντιστοίχιση σε συνεδρίες, Αξιολόγηση προέλευσης και καμπανιών, Αξιολόγηση συσκευής, προγράμματος περιήγησης και εκτιμώμενης τοποθεσίας, Αξιολόγηση ηλεκτρονικού εμπορίου και στόχων',
    'Zählung von Seitenaufrufen und Besuchen, Auswertung der Verweisquellen, Auswertung von Browser, Betriebssystem und Gerätetyp, grobe geografische Zuordnung auf Land, Region und Stadt'
        => 'Καταμέτρηση προβολών σελίδων και επισκέψεων, Αξιολόγηση των πηγών παραπομπής, Αξιολόγηση προγράμματος περιήγησης, λειτουργικού συστήματος και τύπου συσκευής, κατά προσέγγιση γεωγραφική αντιστοίχιση σε χώρα, περιφέρεια και πόλη',
    'Erfassung und Übermittlung von Anwendungsfehlern aus dem Browser, optional Aufzeichnung der Sitzung (Session Replay), standardmäßig mit maskierten Texten, Bildern und Eingaben'
        => 'Καταγραφή και διαβίβαση σφαλμάτων εφαρμογής από το πρόγραμμα περιήγησης, προαιρετικά καταγραφή της συνεδρίας (Session Replay), εξ ορισμού με αποκρυμμένα κείμενα, εικόνες και καταχωρίσεις',
    'Betrieb von Warenkorb und Bezahlvorgang eines Shops, Sitzungs- und Sprach- beziehungsweise Landeszuordnung, Reichweitenmessung fuer den Shop-Betreiber, Marketingdaten fuer Kaufoberflaechen'
        => 'Λειτουργία του καλαθιού και της διαδικασίας πληρωμής ενός καταστήματος, Αντιστοίχιση συνεδρίας και γλώσσας ή χώρας, Μέτρηση απήχησης για τον διαχειριστή του καταστήματος, Δεδομένα μάρκετινγκ για τις διεπαφές αγοράς',
    'Einbetten und Abspielen von Titeln, Alben, Playlists und Podcast-Folgen, Sammeln von Informationen ueber das Surfverhalten dieser Nutzer durch Spotify und Dritte, Ermoeglichen, dass Dritte Cookies im Browser dieser Nutzer setzen'
        => 'Ενσωμάτωση και αναπαραγωγή κομματιών, άλμπουμ, playlists και επεισοδίων podcast, Συλλογή πληροφοριών για τη συμπεριφορά περιήγησης αυτών των χρηστών από το Spotify και τρίτους, Παροχή δυνατότητας σε τρίτους να τοποθετούν cookies στο πρόγραμμα περιήγησης αυτών των χρηστών',
    'Besucherzählung, Reichweitenmessung'
        => 'Καταμέτρηση επισκεπτών, Μέτρηση απήχησης',
    'Betrugserkennung und Risikobewertung von Zahlungsversuchen, Bereitstellen der Bezahlfelder von Stripe Elements, Erkennen von Bots und automatisiertem Verhalten im Bestellvorgang'
        => 'Ανίχνευση απάτης και αξιολόγηση κινδύνου των αποπειρών πληρωμής, Παροχή των πεδίων πληρωμής του Stripe Elements, Εντοπισμός bots και αυτοματοποιημένης συμπεριφοράς στη διαδικασία παραγγελίας',
    'Messung und Verbesserung der Leistung von Werbekampagnen, Personalisierung der Werbung auf TikTok, Uebermittlung von Website-Ereignissen an TikTok'
        => 'Μέτρηση και βελτίωση της απόδοσης διαφημιστικών καμπανιών, Εξατομίκευση της διαφήμισης στο TikTok, Διαβίβαση συμβάντων του ιστότοπου στο TikTok',
    'Einbetten von Formularen und Umfragen in die Website, Erfassen und Uebermitteln der Antworten an den Formularbetreiber'
        => 'Ενσωμάτωση φορμών και ερευνών στον ιστότοπο, Συλλογή και διαβίβαση των απαντήσεων στον διαχειριστή της φόρμας',
    'Einbetten und Abspielen von Videos auf der Website, Merken von Player-Einstellungen des Zuschauers (Lautstaerke, Qualitaet, Untertitel), Reichweitenmessung der eingebetteten Videos durch Vimeo, Bot- und Missbrauchsabwehr fuer den Player'
        => 'Ενσωμάτωση και αναπαραγωγή βίντεο στον ιστότοπο, Απομνημόνευση των ρυθμίσεων του player του θεατή (ένταση, ποιότητα, υπότιτλοι), Μέτρηση της απήχησης των ενσωματωμένων βίντεο από το Vimeo, Προστασία του player από bots και κατάχρηση',
    'A/B-Tests und Split-URL-Tests auf der Website, Zuweisung und Beibehaltung einer Variante über mehrere Besuche, Messung von Zielen und Conversions einer Kampagne, Messung von Besuchern und Sitzungen für Auswertungen, Verwaltung von Widerspruch und Einwilligung für die Messung'
        => 'Δοκιμές A/B και δοκιμές split URL στον ιστότοπο, Απόδοση και διατήρηση μιας παραλλαγής σε περισσότερες επισκέψεις, Μέτρηση στόχων και μετατροπών μιας καμπάνιας, Μέτρηση επισκεπτών και συνεδριών για αξιολογήσεις, Διαχείριση εναντίωσης και συγκατάθεσης για τη μέτρηση',
    'Warenkorb einer Besucherin zuordnen, Erkennen, ob sich der Warenkorbinhalt geaendert hat, Zuletzt angesehene Produkte im zugehoerigen Widget anzeigen, Ausblenden des Shop-Hinweises merken'
        => 'Αντιστοίχιση του καλαθιού σε έναν επισκέπτη, Εντοπισμός του αν άλλαξε το περιεχόμενο του καλαθιού, Εμφάνιση των προϊόντων που προβλήθηκαν τελευταία στο αντίστοιχο widget, Απομνημόνευση της απόκρυψης της ειδοποίησης του καταστήματος',
    'Anmeldung und Sitzungserkennung im Adminbereich, Kommentardaten fuer weitere Kommentare vorhalten, Ansichtseinstellungen des Adminbereichs merken, Pruefen, ob WordPress Cookies setzen kann, Gewaehlte Sprache speichern'
        => 'Σύνδεση και αναγνώριση συνεδρίας στην περιοχή διαχείρισης, Διατήρηση των δεδομένων του σχολίου για επόμενα σχόλια, Απομνημόνευση των ρυθμίσεων προβολής της περιοχής διαχείρισης, Έλεγχος αν το WordPress μπορεί να τοποθετεί cookies, Αποθήκευση της επιλεγμένης γλώσσας',
    'Conversion-Messung, Retargeting'
        => 'Μέτρηση μετατροπών, Retargeting',
    'Abspielen eingebetteter Videos, Sicherheit, Werbebezogene Wiedererkennung des Zuschauers'
        => 'Αναπαραγωγή ενσωματωμένων βίντεο, Ασφάλεια, Αναγνώριση του θεατή για διαφημιστικούς σκοπούς',
    'Live-Chat und Messaging-Kanal fuer den Support auf der Website, Wiedererkennen des Besuchers zwischen Seitenaufrufen und Tabs, Merken von Widget-Zustand und -Einstellungen, Messen von Sitzungen und Ereignissen auf Seiten mit Widget'
        => 'Ζωντανή συνομιλία και κανάλι μηνυμάτων για την υποστήριξη στον ιστότοπο, Αναγνώριση του επισκέπτη μεταξύ προβολών σελίδων και καρτελών, Απομνημόνευση της κατάστασης και των ρυθμίσεων του widget, Μέτρηση συνεδριών και συμβάντων σε σελίδες με widget',
];
