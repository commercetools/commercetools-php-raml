<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

interface ShippingMethodSetPredicateAction extends ShippingMethodUpdateAction
{
    const FIELD_PREDICATE = 'predicate';

    /**
     * @return null|string
     */
    public function getPredicate();

    public function setPredicate(?string $predicate): void;
}