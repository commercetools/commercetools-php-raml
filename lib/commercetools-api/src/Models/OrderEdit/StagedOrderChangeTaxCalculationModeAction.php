<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderChangeTaxCalculationModeAction extends StagedOrderUpdateAction
{

    public const FIELD_TAX_CALCULATION_MODE = 'taxCalculationMode';

    /**
     * @return null|string
     */
    public function getTaxCalculationMode();

    public function setTaxCalculationMode(?string $taxCalculationMode): void;
}
