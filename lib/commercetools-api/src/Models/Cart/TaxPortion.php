<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\TypedMoney;

interface TaxPortion extends JsonObject
{

    public const FIELD_NAME = 'name';
    public const FIELD_RATE = 'rate';
    public const FIELD_AMOUNT = 'amount';

    /**
     * @return null|string
     */
    public function getName();

    /**
     * <p>A number in the range [0..1]</p>
     *
     * @return null|int
     */
    public function getRate();

    /**
     * @return null|TypedMoney
     */
    public function getAmount();

    public function setName(?string $name): void;

    public function setRate(?int $rate): void;

    public function setAmount(?TypedMoney $amount): void;
}
