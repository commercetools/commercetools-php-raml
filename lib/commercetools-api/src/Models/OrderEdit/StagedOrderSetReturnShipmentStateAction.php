<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderSetReturnShipmentStateAction extends StagedOrderUpdateAction
{

    public const FIELD_RETURN_ITEM_ID = 'returnItemId';
    public const FIELD_SHIPMENT_STATE = 'shipmentState';

    /**
     * @return null|string
     */
    public function getReturnItemId();

    /**
     * @return null|string
     */
    public function getShipmentState();

    public function setReturnItemId(?string $returnItemId): void;

    public function setShipmentState(?string $shipmentState): void;
}
