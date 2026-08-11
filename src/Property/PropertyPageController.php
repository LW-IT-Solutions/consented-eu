<?php

declare(strict_types=1);

namespace Consented\Property;

use Consented\Auth\Permission;
use Consented\Auth\User;
use Consented\Core\Controller;
use Consented\Core\Exception\HttpException;
use Consented\Core\Request;
use Consented\Core\Response;

/**
 * Base for every screen scoped to one property.
 *
 * Resolving the property and checking the ability happen in one call, so a
 * controller cannot accidentally load a property it never authorised.
 */
abstract class PropertyPageController extends Controller
{
    protected function property(Request $request, string $ability = Permission::VIEW_PROPERTY): Property
    {
        $user     = $this->requireUser();
        $property = Property::findByPublicId($request->param('id'));

        // 404 rather than 403 for a property the user cannot see at all:
        // confirming that an ID exists is itself information.
        if ($property === null) {
            throw new HttpException(404, __('error.property_not_found'));
        }

        if (Permission::roleFor($user->id(), $property->id()) === null) {
            throw new HttpException(404, __('error.property_not_found'));
        }

        if (!Permission::allows($user->id(), $property->id(), $ability)) {
            throw new HttpException(403, __('error.role_forbidden'));
        }

        return $property;
    }

    protected function role(User $user, Property $property): string
    {
        return Permission::roleFor($user->id(), $property->id()) ?? 'viewer';
    }

    protected function can(User $user, Property $property, string $ability): bool
    {
        return Permission::allows($user->id(), $property->id(), $ability);
    }

    /**
     * Renders a property screen with the shared shell data filled in.
     *
     * @param array<string,mixed> $data
     */
    protected function propertyView(string $template, Property $property, string $activeNav, array $data = []): Response
    {
        $user = $this->requireUser();

        return $this->view($template, array_merge([
            'property'   => $property->row(),
            'model'      => $property,
            'activeNav'  => $activeNav,
            'role'       => $this->role($user, $property),
            'canEdit'    => $this->can($user, $property, Permission::EDIT_PROPERTY),
            'canPublish' => $this->can($user, $property, Permission::PUBLISH_PROPERTY),
            'canManage'  => $this->can($user, $property, Permission::MANAGE_MEMBERS),
            'canDelete'  => $this->can($user, $property, Permission::DELETE_PROPERTY),
            'title'      => $property->name(),
        ], $data));
    }

    protected function propertyUrl(Property $property, string $suffix = ''): string
    {
        return '/properties/' . $property->publicId() . $suffix;
    }
}
