<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ZoneAddLocationAction extends ZoneUpdateAction
{

    public const FIELD_LOCATION = 'location';

    /**
     * @return null|Location
     */
    public function getLocation();

    public function setLocation(?Location $location): void;
}
