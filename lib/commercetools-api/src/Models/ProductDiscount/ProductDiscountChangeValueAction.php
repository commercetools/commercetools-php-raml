<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductDiscountChangeValueAction extends ProductDiscountUpdateAction
{

    public const FIELD_VALUE = 'value';

    /**
     * @return null|ProductDiscountValueDraft
     */
    public function getValue();

    public function setValue(?ProductDiscountValueDraft $value): void;
}
