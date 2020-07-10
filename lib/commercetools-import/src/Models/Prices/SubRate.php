<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Prices;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;

interface SubRate extends JsonObject
{

    public const FIELD_NAME = 'name';
    public const FIELD_AMOUNT = 'amount';

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
