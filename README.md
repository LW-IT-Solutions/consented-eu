# consented.eu

A free consent management platform. Banner, second layer, script blocking,
Google Consent Mode v2 and an audit-proof consent log — hosted or entirely
self-run, from the same source.

**No build step. No Node. No Composer.** PHP and MariaDB are enough.

*Deutsche Fassung: [README.de.md](README.de.md)*

## Quick start

```bash
git clone https://github.com/LW-IT-Solutions/consented-eu.git /var/www/consented
cd /var/www/consented

cp .env.example .env
php -r 'echo "APP_KEY=", base64_encode(random_bytes(32)), PHP_EOL;'
php -r 'echo "PASSWORD_PEPPER=", base64_encode(random_bytes(32)), PHP_EOL;'
php -r 'echo "IP_HASH_PEPPER=", base64_encode(random_bytes(32)), PHP_EOL;'
# put those values, the database credentials and APP_URL into .env

php bin/migrate
php bin/seed

chgrp -R www-data storage .env && chmod -R 775 storage && chmod 640 .env
```

Point the document root at `public/`. That's it.

> Important: only `public/` may be reachable over the web. With the project
> directory as document root, `.env` would be downloadable over HTTP.

## Requirements

- PHP 8.3+ with `pdo_mysql`, `mbstring`, `dom`, `json`
- MariaDB 10.11+ or MySQL 8
- A web server with URL rewriting (Apache `mod_rewrite` or nginx)
- Redis — optional; without it everything runs through the database

## Adding it to a website

After creating and publishing a property, under *Property → Integration*:

```html
<script src="https://consented.eu/sdk/dist/stub.js"
        data-block="googletagmanager.com/gtag|connect.facebook.net"></script>
<script async src="https://consented.eu/p/YOUR-PROPERTY-ID/cmp.js"></script>
```

The first line has to come before every other script — including Google Tag
Manager. It carries your blocking patterns, so paste it again whenever your
services change.

Blocking your own scripts:

```html
<script type="text/plain" data-consented="google-analytics-4">
  gtag('config', 'G-XXXXXXX');
</script>
```

A settings link in the footer:

```html
<a href="#" data-consented-open>Cookie settings</a>
```

A cookie declaration for your privacy policy:

```html
<div id="consented-cookie-declaration"></div>
<script src="https://consented.eu/p/YOUR-PROPERTY-ID/cookies.js?lang=en"></script>
```

## The service catalogue

385 services ship with the project: what they are, who runs them, which cookies
they set and for how long, the legal basis and whether data leaves the EU.

- **47 entries verified against the vendor's own documentation.** Every fact was
  collected from the vendor's own pages and then checked a second time against
  the cited source; unsupported fields were emptied rather than kept. The
  verbatim quote behind each field is in
  [`database/seeds/dps_catalog_evidence.json`](database/seeds/dps_catalog_evidence.json).
- **134 services carry blocking patterns proven at the vendor's endpoint.** A
  pattern only enters the catalogue if the address it matches actually answered
  when `bin/import-patterns` requested it. A pattern that matches nothing is
  worse than no pattern: it looks like protection and lets the tracker through.
- Nine entries are marked `unsourced`. Their data predates the provenance
  requirement and could not be traced to a vendor document; they are listed by
  name on every run of `bin/verify-catalog` and must not be marked verified.

No data comes from a competing CMP's catalogue. Sources, their licences and the
verification protocol: [docs/DATA_SOURCES.md](docs/DATA_SOURCES.md).

## Operating it

```bash
php bin/migrate --status     # migration state
php bin/seed                 # update the service catalogue (idempotent)
php bin/worker --verbose     # cleanup, retention, daily aggregation
php bin/verify-catalog       # release gate: provenance and licences
```

As a cron job, every 15 minutes:

```
0,15,30,45 * * * * php /var/www/consented/bin/worker >/dev/null 2>&1
```

## Documentation

| File | Contents |
|---|---|
| [docs/PLAN.md](docs/PLAN.md) | What is finished, what is missing, tickets |
| [docs/DECISIONS.md](docs/DECISIONS.md) | Licence, hosting cost, data role, positioning |
| [docs/DATA_SOURCES.md](docs/DATA_SOURCES.md) | Where catalogue data may and may not come from |
| [docs/DATALAYER.md](docs/DATALAYER.md) | dataLayer events, names, ordering guarantees |
| [docs/TCF_REGISTRATION.md](docs/TCF_REGISTRATION.md) | IAB registration: process, cost, two options |
| [docs/OPEN_QUESTIONS.md](docs/OPEN_QUESTIONS.md) | Assumptions made, points still open |
| [docs/ROLES.md](docs/ROLES.md) | Permission matrix |
| [docs/SECURITY.md](docs/SECURITY.md) | Measures, known limitations, how to report |
| [docs/BRANDING.md](docs/BRANDING.md) | EU emblem, permissible claims |
| [docs/adr/](docs/adr/) | Architecture decisions |

Most documentation is written in German; the code and its comments are English.

## Licence

| What | Licence |
|---|---|
| Code — server, dashboard, browser runtime, migrations, docs | **MIT**, [LICENSE](LICENSE) |
| Service catalogue — the data in `dps_catalog` | **ODbL 1.0**, [LICENSE-CATALOG](LICENSE-CATALOG) |

For the code this means: you may use consented.eu **privately and
commercially**, hosted by us or on your own infrastructure, for yourself or for
client projects. You may modify it, redistribute it and build it into your own
products. You need not ask anyone, pay anything or disclose your changes. The
only condition is that you keep the copyright notice.

There is deliberately no copyleft on the code. The point of this project is that
people get a working CMP quickly and for free — every licence hurdle works
against that, including a well-meant one.

The **catalogue** is different, for a reason that has nothing to do with making
money: in the EU, a directory of services, cookies and lifetimes is protected as
a sui generis database under Directive 96/9/EC, whether we want that or not. The
ODbL makes sure nobody turns that right against the public. It requires
attribution and — only if you **publish a modified catalogue** — that your
version is available under the ODbL as well. Anyone who merely uses or
self-hosts consented.eu is unaffected; anyone who builds the catalogue into
their own product only has to name the source and keeps their own code to
themselves.

## Legal notice

consented.eu is a technical tool for implementing the consent requirement. It
does **not** establish legal compliance and does not replace legal advice.
