<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Order\Order;

interface OrderCreatedMessage extends Message
{

    public const FIELD_ORDER = 'order';

    /**
     * @return null|Order
     */
    public function getOrder();

    public function setOrder(?Order $order): void;
}
