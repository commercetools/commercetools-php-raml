<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CartChangeTaxCalculationModeAction extends CartUpdateAction
{

    public const FIELD_TAX_CALCULATION_MODE = 'taxCalculationMode';

    /**
     * @return null|string
     */
    public function getTaxCalculationMode();

    public function setTaxCalculationMode(?string $taxCalculationMode): void;
}
