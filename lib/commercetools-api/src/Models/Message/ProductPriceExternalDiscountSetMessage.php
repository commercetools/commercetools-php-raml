<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\DiscountedPrice;

interface ProductPriceExternalDiscountSetMessage extends Message
{

    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_VARIANT_KEY = 'variantKey';
    public const FIELD_SKU = 'sku';
    public const FIELD_PRICE_ID = 'priceId';
    public const FIELD_DISCOUNTED = 'discounted';
    public const FIELD_STAGED = 'staged';

    /**
     * @return null|int
     */
    public function getVariantId();

    /**
     * @return null|string
     */
    public function getVariantKey();

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * @return null|string
     */
    public function getPriceId();

    /**
     * @return null|DiscountedPrice
     */
    public function getDiscounted();

    /**
     * @return null|bool
     */
    public function getStaged();

    public function setVariantId(?int $variantId): void;

    public function setVariantKey(?string $variantKey): void;

    public function setSku(?string $sku): void;

    public function setPriceId(?string $priceId): void;

    public function setDiscounted(?DiscountedPrice $discounted): void;

    public function setStaged(?bool $staged): void;
}
