<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface MyCartRemoveItemShippingAddressAction extends MyCartUpdateAction
{

    public const FIELD_ADDRESS_KEY = 'addressKey';

    /**
     * @return null|string
     */
    public function getAddressKey();

    public function setAddressKey(?string $addressKey): void;
}
