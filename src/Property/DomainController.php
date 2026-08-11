<?php

declare(strict_types=1);

namespace Consented\Property;

use Consented\Auth\Permission;
use Consented\Core\Audit;
use Consented\Core\Clock;
use Consented\Core\Db;
use Consented\Core\Exception\HttpException;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\Str;
use Consented\Core\Uuid;

final class DomainController extends PropertyPageController
{
    public function index(Request $request): Response
    {
        $property = $this->property($request);

        return $this->propertyView('properties/domains', $property, 'domains', [
            'domains' => $property->domains(),
        ]);
    }

    public function store(Request $request): Response
    {
        $property = $this->property($request, Permission::EDIT_PROPERTY);

        $domain = Str::normaliseDomain((string) $request->input('domain', ''));

        $this->validate(['domain' => $domain], ['domain' => 'required|domain'],
            $this->propertyUrl($property, '/domains'));

        $taken = Db::value(
            'SELECT 1 FROM property_domains WHERE property_id = :p AND domain = :d',
            ['p' => $property->id(), 'd' => $domain]
        );

        if ($taken !== null) {
            $this->flash('error', __('flash.domain.already_added'));

            return $this->redirect($this->propertyUrl($property, '/domains'));
        }

        $now     = Clock::now();
        $isFirst = $property->domains() === [];

        Db::insert('property_domains', [
            'public_id'          => Uuid::v7(),
            'property_id'        => $property->id(),
            'domain'             => $domain,
            'is_primary'         => $isFirst ? 1 : 0,
            'include_subdomains' => $request->boolean('include_subdomains') ? 1 : 0,
            'verification_token' => 'consented-verify=' . bin2hex(random_bytes(16)),
            'created_at'         => $now,
            'updated_at'         => $now,
        ]);

        Audit::log(
            Audit::ACTION_DOMAIN_ADDED,
            $this->requireUser()->id(),
            $property->orgId(),
            $property->id(),
            'domain',
            $domain,
            null,
            $request->ip()
        );

        $this->flash('success', __('flash.domain.added'));

        return $this->redirect($this->propertyUrl($property, '/domains'));
    }

    /**
     * Checks the DNS TXT record or the verification file.
     *
     * Verification exists so that nobody can point our runtime at a property
     * that is not theirs and read its configuration.
     */
    public function verify(Request $request): Response
    {
        $property = $this->property($request, Permission::EDIT_PROPERTY);
        $row      = $this->domain($property, $request->param('did'));

        $domain = (string) $row['domain'];
        $token  = (string) $row['verification_token'];
        $method = null;

        // 1. DNS TXT on the apex.
        $records = @dns_get_record($domain, DNS_TXT);
        if (is_array($records)) {
            foreach ($records as $record) {
                $txt = (string) ($record['txt'] ?? '');
                if ($txt !== '' && str_contains($txt, $token)) {
                    $method = 'dns';
                    break;
                }
            }
        }

        // 2. File upload fallback, for people who cannot edit DNS.
        if ($method === null) {
            $url     = 'https://' . $domain . '/.well-known/consented-verify.txt';
            $context = stream_context_create([
                'http' => ['timeout' => 6, 'follow_location' => 1, 'max_redirects' => 3,
                           'user_agent' => 'consented.eu domain verification'],
                'ssl'  => ['verify_peer' => true, 'verify_peer_name' => true],
            ]);

            $body = @file_get_contents($url, false, $context);
            if (is_string($body) && str_contains($body, $token)) {
                $method = 'file';
            }
        }

        Db::update('property_domains', [
            'last_checked_at' => Clock::now(),
            'verified_at'     => $method === null ? null : Clock::now(),
            'verification_method' => $method,
            'updated_at'      => Clock::now(),
        ], ['id' => $row['id']]);

        if ($method === null) {
            $this->flash('error', __('flash.domain.verify_failed'));
        } else {
            Audit::log(
                Audit::ACTION_DOMAIN_VERIFIED,
                $this->requireUser()->id(),
                $property->orgId(),
                $property->id(),
                'domain',
                $domain,
                ['method' => $method],
                $request->ip()
            );

            $this->flash('success', __('flash.domain.verified'));
        }

        return $this->redirect($this->propertyUrl($property, '/domains'));
    }

    public function makePrimary(Request $request): Response
    {
        $property = $this->property($request, Permission::EDIT_PROPERTY);
        $row      = $this->domain($property, $request->param('did'));

        Db::transaction(function () use ($property, $row): void {
            Db::run('UPDATE property_domains SET is_primary = 0 WHERE property_id = :p',
                ['p' => $property->id()]);
            Db::run('UPDATE property_domains SET is_primary = 1 WHERE id = :id', ['id' => $row['id']]);
        });

        $this->flash('success', __('flash.domain.primary_changed'));

        return $this->redirect($this->propertyUrl($property, '/domains'));
    }

    public function destroy(Request $request): Response
    {
        $property = $this->property($request, Permission::EDIT_PROPERTY);
        $row      = $this->domain($property, $request->param('did'));

        Db::run('DELETE FROM property_domains WHERE id = :id', ['id' => $row['id']]);

        Audit::log(
            Audit::ACTION_DOMAIN_REMOVED,
            $this->requireUser()->id(),
            $property->orgId(),
            $property->id(),
            'domain',
            (string) $row['domain'],
            null,
            $request->ip()
        );

        $this->flash('success', __('flash.domain.removed'));

        return $this->redirect($this->propertyUrl($property, '/domains'));
    }

    /** @return array<string,mixed> */
    private function domain(Property $property, string $publicId): array
    {
        $row = Db::first(
            'SELECT * FROM property_domains WHERE property_id = :p AND public_id = :pid',
            ['p' => $property->id(), 'pid' => $publicId]
        );

        if ($row === null) {
            throw new HttpException(404, __('error.domain_not_in_property'));
        }

        return $row;
    }
}
