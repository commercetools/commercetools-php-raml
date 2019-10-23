<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Cart\ExternalLineItemTotalPrice;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Api\Models\Common\Money;

interface MyCartRemoveLineItemAction extends MyCartUpdateAction
{
    const FIELD_LINE_ITEM_ID = 'lineItemId';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_EXTERNAL_PRICE = 'externalPrice';
    const FIELD_EXTERNAL_TOTAL_PRICE = 'externalTotalPrice';
    const FIELD_SHIPPING_DETAILS_TO_REMOVE = 'shippingDetailsToRemove';

    /**
     * @return null|string
     */
    public function getLineItemId();

    /**
     * @return null|int
     */
    public function getQuantity();

    /**
     * @return null|Money
     */
    public function getExternalPrice();

    /**
     * @return null|ExternalLineItemTotalPrice
     */
    public function getExternalTotalPrice();

    /**
     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetailsToRemove();

    public function setLineItemId(?string $lineItemId): void;

    public function setQuantity(?int $quantity): void;

    public function setExternalPrice(?Money $externalPrice): void;

    public function setExternalTotalPrice(?ExternalLineItemTotalPrice $externalTotalPrice): void;

    public function setShippingDetailsToRemove(?ItemShippingDetailsDraft $shippingDetailsToRemove): void;
}