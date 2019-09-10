<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderChangePaymentStateAction extends StagedOrderUpdateAction
{
    const FIELD_PAYMENT_STATE = 'paymentState';

    /**
     * @return null|string
     */
    public function getPaymentState();

    public function setPaymentState(?string $paymentState): void;
}