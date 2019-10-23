<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Prices;

use Commercetools\Base\JsonObject;

interface SubRate extends JsonObject
{
    const FIELD_NAME = 'name';
    const FIELD_AMOUNT = 'amount';

    /**
     * @return null|string
     */
    public function getName();

    /**
     * @return null|int
     */
    public function getAmount();

    public function setName(?string $name): void;

    public function setAmount(?int $amount): void;
}