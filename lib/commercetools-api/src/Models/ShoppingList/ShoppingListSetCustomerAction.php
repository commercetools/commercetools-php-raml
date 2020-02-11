<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;

interface ShoppingListSetCustomerAction extends ShoppingListUpdateAction
{

    public const FIELD_CUSTOMER = 'customer';

    /**
     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer();

    public function setCustomer(?CustomerResourceIdentifier $customer): void;
}
