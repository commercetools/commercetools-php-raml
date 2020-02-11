<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductRemovePriceAction extends ProductUpdateAction
{

    public const FIELD_PRICE_ID = 'priceId';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>ID of the <a href="#price">Price</a></p>
     *
     * @return null|string
     */
    public function getPriceId();

    /**
     * @return null|bool
     */
    public function getStaged();

    public function setPriceId(?string $priceId): void;

    public function setStaged(?bool $staged): void;
}
