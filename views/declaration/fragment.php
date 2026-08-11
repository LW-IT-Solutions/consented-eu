<?php

declare(strict_types=1);

/**
 * Die Cookie-Erklärung als eingebettetes Fragment.
 *
 * Wird an zwei Stellen ausgegeben: in der eigenständigen Seite und, als
 * JavaScript-Zeichenkette verpackt, in der Datenschutzerklärung des Kunden.
 * Deshalb steht hier nur der Inhalt und kein Seitengerüst.
 *
 * Zur Ausgabe: Überschriften, Namen und Tabellenzellen laufen über $this->e().
 * Roh ausgegeben werden ausschließlich `declaration_intro` und die
 * Kategoriebeschreibungen — dieselben zwei Textsorten, die auch im Banner
 * Markup enthalten dürfen. Beide sind bereits durch Sanitizer::html()
 * gegangen (im Schnappschuss beim Veröffentlichen, für nachgelieferte
 * Vorgaben in CookieDeclaration::texts()), was CLAUDE.md Regel 3 genau so
 * vorsieht. Sie hier zusätzlich zu escapen würde einen Link zur
 * Datenschutzerklärung als Text anzeigen.
 *
 * @var \Consented\Core\View $this
 * @var array<string,mixed>  $declaration
 * @var bool                 $embedded
 */

$d        = $declaration;
$texts    = $d['texts'];
$embedded = $embedded ?? false;

/** Ein Textschlüssel mit Rückfall auf den Schlüsselnamen — wie im Banner. */
$tx = static fn (string $key, string $fallback = ''): string => (string) ($texts[$key] ?? $fallback);

/** Leere Zelle als Gedankenstrich, damit eine Tabelle keine Löcher hat. */
$cell = fn (string $value): string => $value === '' ? '—' : $this->e($value);

/*
 * Maschinenlesbares Datum für <time datetime>.
 *
 * Die Datenbank führt UTC ohne Zonenangabe („2026-08-10 15:17:35"), und das ist
 * kein gültiges ISO-8601 — ein Prüfwerkzeug liest es nicht, und ein
 * Rechtsdokument, dessen Stand-Datum maschinell nicht auswertbar ist, verschenkt
 * genau den Teil, für den das Element gedacht ist.
 */
$iso = static function (?string $utc): string {
    if ($utc === null || $utc === '') {
        return '';
    }

    $ts = strtotime($utc . ' UTC');

    return $ts === false ? '' : gmdate('Y-m-d\TH:i:s\Z', $ts);
};
?>
<?php
/*
 * Minimales, tief spezifiziertes CSS.
 *
 * Es wandert mit in die Seite des Kunden, also gilt: nur was eine Tabelle
 * lesbar macht, alles unter `.consented-cd`, keine Farben außer geerbten, keine
 * Schriftfamilie. Damit gewinnt jede Regel des Kunden mit gleicher oder höherer
 * Spezifität, und die Erklärung sieht aus wie sein Dokument und nicht wie
 * unseres.
 *
 * Verbietet die CSP des Kunden Inline-Styles, fällt das hier weg und die
 * Erklärung bleibt eine semantisch korrekte, unformatierte Liste. Das ist der
 * richtige Ausfall: lesbar ohne Gestaltung, nicht unsichtbar mit.
 */
?>
<style>
.consented-cd__group{margin:1.5em 0}
.consented-cd__service{margin:1em 0 1.5em;padding-left:.9em;border-left:2px solid currentColor}
.consented-cd__name{margin:0 0 .25em}
.consented-cd__purpose{margin:0 0 .5em}
.consented-cd__meta{display:grid;grid-template-columns:auto 1fr;gap:.15em .8em;margin:0 0 .6em;font-size:.92em}
.consented-cd__meta dt{font-weight:600}
.consented-cd__meta dd{margin:0;overflow-wrap:anywhere}
.consented-cd__badge{font-size:.75em;text-transform:uppercase;letter-spacing:.04em;
    border:1px solid currentColor;border-radius:999px;padding:.1em .5em;margin-left:.4em;vertical-align:middle}
.consented-cd__cookies{width:100%;border-collapse:collapse;font-size:.88em}
.consented-cd__cookies th,.consented-cd__cookies td{
    text-align:left;vertical-align:top;padding:.35em .5em;border-bottom:1px solid currentColor}
.consented-cd__cookies td{overflow-wrap:anywhere}
.consented-cd__nocookies{margin:0;font-size:.9em;opacity:.75}
.consented-cd__asof{margin-top:1.5em;font-size:.85em;opacity:.75}
.consented-cd__wrap{overflow-x:auto}
@media (max-width:520px){
.consented-cd__meta{grid-template-columns:1fr;gap:0 0}
.consented-cd__meta dt{margin-top:.4em}
}
</style>
<div class="consented-cd" lang="<?= $this->e($d['language']) ?>">
    <?php if (!$embedded): ?>
        <h1 class="consented-cd__title"><?= $this->e($tx('declaration_title', 'Cookies')) ?></h1>
    <?php else: ?>
        <h2 class="consented-cd__title"><?= $this->e($tx('declaration_title', 'Cookies')) ?></h2>
    <?php endif; ?>

    <?php if ($tx('declaration_intro') !== ''): ?>
        <p class="consented-cd__intro"><?= $tx('declaration_intro') ?></p>
    <?php endif; ?>

    <?php if ($d['groups'] === []): ?>
        <p class="consented-cd__empty"><?= $this->e($tx('declaration_empty', '—')) ?></p>
    <?php else: ?>
        <?php foreach ($d['groups'] as $group): ?>
            <section class="consented-cd__group">
                <h3 class="consented-cd__category">
                    <?= $this->e($group['name']) ?>
                    <?php if ($group['required']): ?>
                        <?php /* „Immer aktiv", nicht „Notwendig": die Kategorie
                                 heißt bereits so, und „Notwendig NOTWENDIG" sagt
                                 nichts zweimal, sondern einmal weniger. Dieser
                                 Text sagt, was der Besucher davon hat — dass er
                                 hier nichts abwählen kann. */ ?>
                        <span class="consented-cd__badge"><?= $this->e($tx('label_always_active', '')) ?></span>
                    <?php endif; ?>
                </h3>

                <?php if ($group['description'] !== ''): ?>
                    <p class="consented-cd__catdesc"><?= $group['description'] ?></p>
                <?php endif; ?>

                <?php foreach ($group['services'] as $service): ?>
                    <article class="consented-cd__service">
                        <h4 class="consented-cd__name"><?= $this->e($service['name']) ?></h4>

                        <?php if ($service['purpose'] !== '' || $service['description'] !== ''): ?>
                            <p class="consented-cd__purpose">
                                <?= $this->e($service['purpose'] !== '' ? $service['purpose'] : $service['description']) ?>
                            </p>
                        <?php endif; ?>

                        <dl class="consented-cd__meta">
                            <?php if ($service['provider'] !== ''): ?>
                                <dt><?= $this->e($tx('label_provider', 'Anbieter')) ?></dt>
                                <dd><?= $this->e($service['provider']) ?></dd>
                            <?php endif; ?>

                            <?php if ($service['legalBasis'] !== ''): ?>
                                <dt><?= $this->e($tx('label_legal_basis', 'Rechtsgrundlage')) ?></dt>
                                <dd><?= $this->e($service['legalBasis']) ?></dd>
                            <?php endif; ?>

                            <?php if ($service['retention'] !== ''): ?>
                                <dt><?= $this->e($tx('label_retention', 'Speicherdauer')) ?></dt>
                                <dd><?= $this->e($service['retention']) ?></dd>
                            <?php endif; ?>

                            <?php if ($service['thirdCountry']): ?>
                                <dt><?= $this->e($tx('label_third_country', 'Drittlandtransfer')) ?></dt>
                                <dd>
                                    <?= $this->e($service['providerCountry'] !== ''
                                        ? $service['providerCountry']
                                        : $tx('label_yes', 'ja')) ?>
                                </dd>
                            <?php endif; ?>

                            <?php if ($service['privacyUrl'] !== ''): ?>
                                <dt><?= $this->e($tx('label_privacy_policy', 'Datenschutzerklärung')) ?></dt>
                                <dd>
                                    <a href="<?= $this->e($service['privacyUrl']) ?>"
                                       target="_blank" rel="noopener noreferrer nofollow">
                                        <?= $this->e($service['privacyUrl']) ?>
                                    </a>
                                </dd>
                            <?php endif; ?>
                        </dl>

                        <?php if ($service['cookies'] === []): ?>
                            <p class="consented-cd__nocookies"><?= $this->e($tx('declaration_no_cookies', '')) ?></p>
                        <?php else: ?>
                            <?php /* Eigener Scroll-Container: eine breite Tabelle
                                     darf das Layout des Kunden nicht sprengen. */ ?>
                            <div class="consented-cd__wrap">
                            <table class="consented-cd__cookies">
                                <thead>
                                    <tr>
                                        <th scope="col"><?= $this->e($tx('label_cookie_name', 'Name')) ?></th>
                                        <th scope="col"><?= $this->e($tx('label_cookie_host', 'Host')) ?></th>
                                        <th scope="col"><?= $this->e($tx('label_cookie_duration', 'Laufzeit')) ?></th>
                                        <th scope="col"><?= $this->e($tx('label_cookie_purpose', 'Zweck')) ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($service['cookies'] as $cookie): ?>
                                        <tr>
                                            <td><code><?= $cell($cookie['name']) ?></code></td>
                                            <td><?= $cell($cookie['host']) ?></td>
                                            <td><?= $cell($cookie['duration']) ?></td>
                                            <td><?= $cell($cookie['purpose']) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            </div>
                        <?php endif; ?>
                    </article>
                <?php endforeach; ?>
            </section>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php
    /*
     * Stand und Fassung.
     *
     * Das Datum kommt aus der Version, die diese Erklärung tatsächlich
     * darstellt, nicht aus dem letzten Bearbeiten. Wer eine Erklärung liest,
     * muss wissen, auf welchen Stand er sich beruft — und wer sie prüft, kann
     * mit Fassung und Datum den unveränderlichen Schnappschuss anfordern.
     */
    ?>
    <p class="consented-cd__asof">
        <?php if ($d['publishedAt'] !== null): ?>
            <?= $this->e($tx('label_state_from', 'Stand')) ?>:
            <time datetime="<?= $this->e($iso($d['publishedAt'])) ?>"><?= $this->date($d['publishedAt'], 'd.m.Y') ?></time>
            ·
        <?php endif; ?>
        <?= $this->e($tx('label_services_count', 'Dienste')) ?>: <?= $this->number((int) $d['serviceCount']) ?>
        · Cookies: <?= $this->number((int) $d['cookieCount']) ?>
    </p>
</div>
