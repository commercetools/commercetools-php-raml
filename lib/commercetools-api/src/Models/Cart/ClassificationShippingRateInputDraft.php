<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ClassificationShippingRateInputDraft extends ShippingRateInputDraft
{

    public const FIELD_KEY = 'key';

    /**
     * @return null|string
     */
    public function getKey();

    public function setKey(?string $key): void;
}
