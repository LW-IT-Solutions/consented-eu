<?php

declare(strict_types=1);

namespace Consented\Property;

use Consented\Auth\Permission;
use Consented\Core\Audit;
use Consented\Core\Exception\HttpException;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\Str;
use Consented\Org\Organization;

final class PropertyController extends PropertyPageController
{
    public function index(Request $request): Response
    {
        $user = $this->requireUser();

        return $this->view('properties/index', [
            'title'      => __('property.index.title'),
            'activeNav'  => 'properties',
            'properties' => Property::accessibleTo($user->id()),
        ]);
    }

    public function create(Request $request): Response
    {
        $user = $this->requireUser();

        if (!$user->isVerified()) {
            $this->flash('info', __('flash.property.verify_email_first'));

            return $this->redirect('/verify-email');
        }

        return $this->view('properties/create', [
            'title'        => __('property.create.title'),
            'activeNav'    => 'properties',
            'organization' => Organization::primaryFor($user),
        ]);
    }

    public function store(Request $request): Response
    {
        $user = $this->requireUser();

        if (!$user->isVerified()) {
            throw new HttpException(403, __('error.verify_email_first'));
        }

        $validator = $this->validate($request->post, [
            'name'   => 'required|max:160',
            'domain' => 'domain',
        ], '/properties/new');

        $org = Organization::primaryFor($user);

        if ($org === null) {
            $org = Organization::createForUser($user, $user->name());
        }

        $property = Property::create(
            $org->id(),
            $user->id(),
            $validator->string('name'),
            Str::normaliseDomain($validator->string('domain'))
        );

        Audit::log(
            Audit::ACTION_PROPERTY_CREATED,
            $user->id(),
            $org->id(),
            $property->id(),
            'property',
            $property->publicId(),
            ['name' => $property->name()],
            $request->ip()
        );

        $this->flash('success', __('flash.property.created'));

        return $this->redirect($this->propertyUrl($property));
    }

    public function show(Request $request): Response
    {
        $property = $this->property($request);

        return $this->propertyView('properties/show', $property, 'overview', [
            'checklist'    => $property->checklist(),
            'versions'     => $property->versions(8),
            'hasChanges'   => $property->hasUnpublishedChanges(),
            'serviceCount' => count($property->services()),
            'domainCount'  => count($property->domains()),
            'languages'    => $property->enabledLanguageCodes(),
            'stats'        => Consents::summary($property->id(), 7),
        ]);
    }

    public function publish(Request $request): Response
    {
        $property = $this->property($request, Permission::PUBLISH_PROPERTY);
        $user     = $this->requireUser();

        if ($property->services() === []) {
            $this->flash('error', __('flash.property.publish_no_services'));

            return $this->redirect($this->propertyUrl($property, '/services'));
        }

        $version = $property->publish($user->id(), (string) $request->input('note', ''));

        Audit::log(
            Audit::ACTION_CONFIG_PUBLISHED,
            $user->id(),
            $property->orgId(),
            $property->id(),
            'property',
            $property->publicId(),
            ['version' => $version],
            $request->ip()
        );

        $this->flash('success', __('flash.property.published', ['version' => $version]));

        return $this->redirect($this->propertyUrl($property));
    }

    public function destroy(Request $request): Response
    {
        $property = $this->property($request, Permission::DELETE_PROPERTY);
        $user     = $this->requireUser();

        // Typing the name is the confirmation. A yes/no dialog is too easy to
        // click through for something that takes a live banner off a website.
        if ($request->input('confirm') !== $property->name()) {
            $this->flash('error', __('flash.property.delete_name_mismatch'));

            return $this->redirect($this->propertyUrl($property, '/settings'));
        }

        $property->softDelete();

        Audit::log(
            Audit::ACTION_PROPERTY_DELETED,
            $user->id(),
            $property->orgId(),
            $property->id(),
            'property',
            $property->publicId(),
            ['name' => $property->name()],
            $request->ip()
        );

        $this->flash('success', __('flash.property.deleted'));

        return $this->redirect('/properties');
    }
}
