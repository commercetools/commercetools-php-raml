<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\CartDiscount\CartDiscountResourceIdentifierCollection;

/**
 * @implements Builder<DiscountCodeChangeCartDiscountsAction>
 */
final class DiscountCodeChangeCartDiscountsActionBuilder implements Builder
{
    /**
     * @var ?CartDiscountResourceIdentifierCollection
     */
    private $cartDiscounts;

    /**
     * @return null|CartDiscountResourceIdentifierCollection
     */
    public function getCartDiscounts()
    {
        return $this->cartDiscounts;
    }

    /**
     * @return $this
     */
    public function withCartDiscounts(?CartDiscountResourceIdentifierCollection $cartDiscounts)
    {
        $this->cartDiscounts = $cartDiscounts;

        return $this;
    }


    public function build(): DiscountCodeChangeCartDiscountsAction
    {
        return new DiscountCodeChangeCartDiscountsActionModel(
            $this->cartDiscounts
        );
    }

    public static function of(): DiscountCodeChangeCartDiscountsActionBuilder
    {
        return new self();
    }
}
