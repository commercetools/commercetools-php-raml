<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ShippingMethodSetDescriptionAction extends ShippingMethodUpdateAction
{

    public const FIELD_DESCRIPTION = 'description';

    /**
     * @return null|string
     */
    public function getDescription();

    public function setDescription(?string $description): void;
}
