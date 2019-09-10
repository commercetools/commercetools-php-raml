<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductVariantChannelAvailabilityMap>
 */
final class ProductVariantChannelAvailabilityMapBuilder implements Builder
{
    public function __construct()
    {
    }

    public function build(): ProductVariantChannelAvailabilityMap
    {
        return new ProductVariantChannelAvailabilityMapModel(
        );
    }

    public static function of(): ProductVariantChannelAvailabilityMapBuilder
    {
        return new self();
    }
}