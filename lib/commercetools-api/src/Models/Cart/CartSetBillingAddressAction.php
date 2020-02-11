<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartSetBillingAddressAction extends CartUpdateAction
{
    public const FIELD_ADDRESS = 'address';

    /**
     * @return null|Address
     */
    public function getAddress();

    public function setAddress(?Address $address): void;
}
