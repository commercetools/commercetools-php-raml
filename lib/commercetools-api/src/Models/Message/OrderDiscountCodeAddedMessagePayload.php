<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderDiscountCodeAddedMessagePayload extends MessagePayload
{
    public const FIELD_DISCOUNT_CODE = 'discountCode';

    /**
     * @return null|DiscountCodeReference
     */
    public function getDiscountCode();

    public function setDiscountCode(?DiscountCodeReference $discountCode): void;
}
