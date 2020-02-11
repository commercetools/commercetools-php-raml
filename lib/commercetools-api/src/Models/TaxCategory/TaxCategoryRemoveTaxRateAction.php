<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface TaxCategoryRemoveTaxRateAction extends TaxCategoryUpdateAction
{

    public const FIELD_TAX_RATE_ID = 'taxRateId';

    /**
     * @return null|string
     */
    public function getTaxRateId();

    public function setTaxRateId(?string $taxRateId): void;
}
