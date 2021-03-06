<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface DiscountCodeSetValidFromAction extends DiscountCodeUpdateAction
{
    public const FIELD_VALID_FROM = 'validFrom';

    /**
     * <p>If absent, the field with the value is removed in case a value was set before.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * @param ?DateTimeImmutable $validFrom
     */
    public function setValidFrom(?DateTimeImmutable $validFrom): void;
}
