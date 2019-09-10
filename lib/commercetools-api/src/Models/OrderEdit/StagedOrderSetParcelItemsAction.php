<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\DeliveryItemCollection;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderSetParcelItemsAction extends StagedOrderUpdateAction
{
    const FIELD_PARCEL_ID = 'parcelId';
    const FIELD_ITEMS = 'items';

    /**
     * @return null|string
     */
    public function getParcelId();

    /**
     * @return null|DeliveryItemCollection
     */
    public function getItems();

    public function setParcelId(?string $parcelId): void;

    public function setItems(?DeliveryItemCollection $items): void;
}