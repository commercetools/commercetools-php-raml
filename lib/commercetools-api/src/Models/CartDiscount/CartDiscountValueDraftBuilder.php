<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartDiscountValueDraft>
 */
final class CartDiscountValueDraftBuilder implements Builder
{
    public function build(): CartDiscountValueDraft
    {
        return new CartDiscountValueDraftModel(
        );
    }

    public static function of(): CartDiscountValueDraftBuilder
    {
        return new self();
    }
}
