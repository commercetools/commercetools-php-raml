<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use DateTimeImmutable;

interface DiscountCodeSetValidFromAction extends DiscountCodeUpdateAction
{
    const FIELD_VALID_FROM = 'validFrom';

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    public function setValidFrom(?DateTimeImmutable $validFrom): void;
}