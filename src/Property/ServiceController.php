<?php

declare(strict_types=1);

namespace Consented\Property;

use Consented\Auth\Permission;
use Consented\Core\Clock;
use Consented\Core\Db;
use Consented\Core\Exception\HttpException;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\Sanitizer;
use Consented\Core\Session;
use Consented\Core\Uuid;
use Consented\Core\View;

final class ServiceController extends PropertyPageController
{
    public function index(Request $request): Response
    {
        $property = $this->property($request);

        return $this->propertyView('properties/services/index', $property, 'services', [
            'services'   => $property->services(),
            'categories' => $property->categories(),
            'resolved'   => ConfigBuilder::build($property, $property->configVersion())['services'],
        ]);
    }

    /** Searchable catalogue of predefined services. */
    public function catalog(Request $request): Response
    {
        $property = $this->property($request, Permission::EDIT_PROPERTY);

        $query    = trim((string) $request->input('q', ''));
        $category = (string) $request->input('category', '');

        return $this->propertyView('properties/services/catalog', $property, 'services', [
            'entries'  => $this->catalogEntries($query, $category),
            'attached' => $this->attachedCatalogIds($property),
            'query'    => $query,
            'category' => $category,
        ]);
    }

    /**
     * The same result list as a bare HTML fragment, for the live search.
     *
     * Returns markup rather than JSON so the rendering stays in the template
     * that the full page uses. Handing the browser JSON would mean building the
     * cards in JavaScript, and with them a second, hand-rolled escaping path
     * for names and provider strings that come from the catalogue.
     *
     * The permission check is the same one the page itself runs — this endpoint
     * is not a side door.
     */
    public function catalogSearch(Request $request): Response
    {
        $property = $this->property($request, Permission::EDIT_PROPERTY);

        $query    = trim((string) $request->input('q', ''));
        $category = (string) $request->input('category', '');
        $entries  = $this->catalogEntries($query, $category);

        $html = View::render('properties/services/catalog-results', [
            'entries'  => $entries,
            'attached' => $this->attachedCatalogIds($property),
            'base'     => $this->propertyUrl($property),
            'csrf'     => Session::instance()->csrfToken(),
        ], null);

        return Response::html($html)
            ->withHeader('X-Result-Count', (string) count($entries))
            ->withHeader('Cache-Control', 'no-store');
    }

    /**
     * @return list<array<string,mixed>>
     */
    private function catalogEntries(string $query, string $category): array
    {
        $sql    = 'SELECT * FROM dps_catalog WHERE is_active = 1';
        $params = [];

        if ($query !== '') {
            // Searching the cookie JSON too: people look for "_ga" far more
            // often than for the product name of the tool that sets it.
            $sql .= ' AND (name LIKE :q OR provider LIKE :q2 OR dps_id LIKE :q3 OR cookies LIKE :q4)';
            $params['q']  = '%' . $query . '%';
            $params['q2'] = '%' . $query . '%';
            $params['q3'] = '%' . $query . '%';
            $params['q4'] = '%' . $query . '%';
        }

        if ($category !== '') {
            $sql .= ' AND category = :cat';
            $params['cat'] = $category;
        }

        $sql .= ' ORDER BY name LIMIT 200';

        return Db::all($sql, $params);
    }

    /** @return array<int,bool> */
    private function attachedCatalogIds(Property $property): array
    {
        $attached = [];

        foreach ($property->services() as $row) {
            if ($row['dps_catalog_id'] !== null) {
                $attached[(int) $row['dps_catalog_id']] = true;
            }
        }

        return $attached;
    }

    public function add(Request $request): Response
    {
        $property = $this->property($request, Permission::EDIT_PROPERTY);

        $catalogId = (int) $request->input('catalog_id', '0');
        $entry     = Db::first('SELECT * FROM dps_catalog WHERE id = :id', ['id' => $catalogId]);

        if ($entry === null) {
            throw new HttpException(404, __('error.service_not_in_catalog'));
        }

        $exists = Db::value(
            'SELECT 1 FROM property_dps WHERE property_id = :p AND dps_catalog_id = :c',
            ['p' => $property->id(), 'c' => $catalogId]
        );

        if ($exists !== null) {
            $this->flash('info', __('flash.service.already_added'));

            return $this->redirect($this->propertyUrl($property, '/services'));
        }

        $now      = Clock::now();
        $maxOrder = (int) Db::value(
            'SELECT COALESCE(MAX(sort_order), 0) FROM property_dps WHERE property_id = :p',
            ['p' => $property->id()]
        );

        Db::insert('property_dps', [
            'public_id'      => Uuid::v7(),
            'property_id'    => $property->id(),
            'dps_catalog_id' => $catalogId,
            'is_custom'      => 0,
            'category_key'   => (string) $entry['category'],
            'sort_order'     => $maxOrder + 1,
            'is_essential'   => (string) $entry['category'] === 'essential' ? 1 : 0,
            'created_at'     => $now,
            'updated_at'     => $now,
        ]);

        $this->flash('success', __('flash.service.added', ['name' => (string) $entry['name']]));

        return $this->redirect($this->propertyUrl($property, '/services'));
    }

    public function customForm(Request $request): Response
    {
        $property = $this->property($request, Permission::EDIT_PROPERTY);

        return $this->propertyView('properties/services/custom', $property, 'services', [
            'categories' => $property->categories(),
            'service'    => null,
        ]);
    }

    public function edit(Request $request): Response
    {
        $property = $this->property($request, Permission::EDIT_PROPERTY);
        $service  = $this->service($property, $request->param('sid'));

        return $this->propertyView('properties/services/custom', $property, 'services', [
            'categories' => $property->categories(),
            'service'    => $service,
        ]);
    }

    public function storeCustom(Request $request): Response
    {
        $property = $this->property($request, Permission::EDIT_PROPERTY);

        $validator = $this->validate($request->post, [
            'name'        => 'required|max:160',
            'provider'    => 'max:160',
            'purpose'     => 'required|max:2000',
            'privacyUrl'  => 'url',
            'category'    => 'required|max:40',
        ], $this->propertyUrl($property, '/services/custom'));

        $now      = Clock::now();
        $maxOrder = (int) Db::value(
            'SELECT COALESCE(MAX(sort_order), 0) FROM property_dps WHERE property_id = :p',
            ['p' => $property->id()]
        );

        Db::insert('property_dps', [
            'public_id'        => Uuid::v7(),
            'property_id'      => $property->id(),
            'is_custom'        => 1,
            'category_key'     => $validator->string('category'),
            'sort_order'       => $maxOrder + 1,
            'is_essential'     => $request->boolean('essential') ? 1 : 0,
            'overrides'        => (string) json_encode($this->payload($request), JSON_UNESCAPED_UNICODE),
            'blocking_pattern' => (string) json_encode($this->patterns($request), JSON_UNESCAPED_UNICODE),
            'created_at'       => $now,
            'updated_at'       => $now,
        ]);

        $this->flash('success', __('flash.service.custom_created'));

        return $this->redirect($this->propertyUrl($property, '/services'));
    }

    public function update(Request $request): Response
    {
        $property = $this->property($request, Permission::EDIT_PROPERTY);
        $service  = $this->service($property, $request->param('sid'));

        $existing = json_decode((string) ($service['overrides'] ?? '{}'), true);
        if (!is_array($existing)) {
            $existing = [];
        }

        // A catalogue-backed service stores only the fields that were actually
        // changed, so the rest keeps tracking catalogue updates.
        $payload = (int) $service['is_custom'] === 1
            ? $this->payload($request)
            : array_merge($existing, array_filter($this->payload($request), static fn ($v): bool => $v !== '' && $v !== []));

        Db::update('property_dps', [
            'category_key'     => (string) $request->input('category', (string) $service['category_key']),
            'is_essential'     => $request->boolean('essential') ? 1 : 0,
            'is_enabled'       => $request->boolean('enabled') ? 1 : 0,
            'overrides'        => (string) json_encode($payload, JSON_UNESCAPED_UNICODE),
            'blocking_pattern' => (string) json_encode($this->patterns($request), JSON_UNESCAPED_UNICODE),
            'updated_at'       => Clock::now(),
        ], ['id' => $service['id']]);

        $this->flash('success', __('flash.service.updated'));

        return $this->redirect($this->propertyUrl($property, '/services'));
    }

    public function destroy(Request $request): Response
    {
        $property = $this->property($request, Permission::EDIT_PROPERTY);
        $service  = $this->service($property, $request->param('sid'));

        Db::run('DELETE FROM property_dps WHERE id = :id', ['id' => $service['id']]);

        $this->flash('success', __('flash.service.removed'));

        return $this->redirect($this->propertyUrl($property, '/services'));
    }

    public function reorder(Request $request): Response
    {
        $property = $this->property($request, Permission::EDIT_PROPERTY);
        $order    = $request->inputArray('order');

        foreach ($order as $position => $publicId) {
            Db::run(
                'UPDATE property_dps SET sort_order = :o, updated_at = :now
                  WHERE property_id = :p AND public_id = :pid',
                ['o' => $position, 'now' => Clock::now(), 'p' => $property->id(), 'pid' => $publicId]
            );
        }

        if ($request->wantsJson()) {
            return Response::json(['ok' => true]);
        }

        return $this->redirect($this->propertyUrl($property, '/services'));
    }

    /** @return array<string,mixed> */
    private function payload(Request $request): array
    {
        $cookies = [];

        // Cookie rows arrive as parallel arrays from the repeatable fieldset.
        $names     = $request->inputArray('cookie_name');
        $hosts     = $request->inputArray('cookie_host');
        $durations = $request->inputArray('cookie_duration');
        $purposes  = $request->inputArray('cookie_purpose');

        foreach ($names as $i => $name) {
            $name = trim($name);
            if ($name === '') {
                continue;
            }

            $cookies[] = [
                'name'     => Sanitizer::text($name),
                'host'     => Sanitizer::text($hosts[$i] ?? ''),
                'duration' => Sanitizer::text($durations[$i] ?? ''),
                'purpose'  => Sanitizer::text($purposes[$i] ?? ''),
            ];
        }

        return [
            'name'            => Sanitizer::text((string) $request->input('name', '')),
            'provider'        => Sanitizer::text((string) $request->input('provider', '')),
            'providerCountry' => strtoupper(substr(Sanitizer::text((string) $request->input('providerCountry', '')), 0, 2)),
            'purpose'         => Sanitizer::text((string) $request->input('purpose', '')),
            'description'     => Sanitizer::text((string) $request->input('description', '')),
            'retention'       => Sanitizer::text((string) $request->input('retention', '')),
            'legalBasis'      => Sanitizer::text((string) $request->input('legalBasis', '')),
            'privacyUrl'      => filter_var((string) $request->input('privacyUrl', ''), FILTER_VALIDATE_URL) === false
                ? '' : (string) $request->input('privacyUrl', ''),
            'thirdCountry'    => $request->boolean('thirdCountry'),
            'cookies'         => $cookies,
        ];
    }

    /** @return list<string> */
    private function patterns(Request $request): array
    {
        $raw   = (string) $request->input('patterns', '');
        $lines = preg_split('/[\r\n,]+/', $raw) ?: [];

        $out = [];
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line !== '') {
                $out[] = Sanitizer::text($line);
            }
        }

        return array_values(array_unique($out));
    }

    /** @return array<string,mixed> */
    private function service(Property $property, string $publicId): array
    {
        $row = Db::first(
            'SELECT * FROM property_dps WHERE property_id = :p AND public_id = :pid',
            ['p' => $property->id(), 'pid' => $publicId]
        );

        if ($row === null) {
            throw new HttpException(404, __('error.service_not_in_property'));
        }

        return $row;
    }
}
