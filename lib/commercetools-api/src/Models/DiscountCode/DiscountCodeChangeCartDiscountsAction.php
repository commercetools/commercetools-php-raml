<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\CartDiscount\CartDiscountResourceIdentifierCollection;

interface DiscountCodeChangeCartDiscountsAction extends DiscountCodeUpdateAction
{

    public const FIELD_CART_DISCOUNTS = 'cartDiscounts';

    /**
     * @return null|CartDiscountResourceIdentifierCollection
     */
    public function getCartDiscounts();

    public function setCartDiscounts(?CartDiscountResourceIdentifierCollection $cartDiscounts): void;
}
