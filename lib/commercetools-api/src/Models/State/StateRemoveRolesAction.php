<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface StateRemoveRolesAction extends StateUpdateAction
{

    public const FIELD_ROLES = 'roles';

    /**
     * @return null|array
     */
    public function getRoles();

    public function setRoles(?array $roles): void;
}
