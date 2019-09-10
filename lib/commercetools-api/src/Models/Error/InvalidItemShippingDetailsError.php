<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

interface InvalidItemShippingDetailsError extends ErrorObject
{
    const FIELD_SUBJECT = 'subject';
    const FIELD_ITEM_ID = 'itemId';

    /**
     * @return null|string
     */
    public function getSubject();

    /**
     * @return null|string
     */
    public function getItemId();

    public function setSubject(?string $subject): void;

    public function setItemId(?string $itemId): void;
}