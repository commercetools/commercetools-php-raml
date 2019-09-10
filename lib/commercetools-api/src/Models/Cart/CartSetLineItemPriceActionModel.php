<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CartSetLineItemPriceActionModel extends JsonObjectModel implements CartSetLineItemPriceAction
{
    const DISCRIMINATOR_VALUE = 'setLineItemPrice';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $lineItemId;

    /**
     * @var ?Money
     */
    protected $externalPrice;

    public function __construct(
        string $action = null,
        string $lineItemId = null,
        Money $externalPrice = null
    ) {
        $this->action = $action;
        $this->lineItemId = $lineItemId;
        $this->externalPrice = $externalPrice;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartSetLineItemPriceAction::FIELD_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemId = (string) $data;
        }

        return $this->lineItemId;
    }

    /**
     * @return null|Money
     */
    public function getExternalPrice()
    {
        if (is_null($this->externalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartSetLineItemPriceAction::FIELD_EXTERNAL_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->externalPrice = MoneyModel::of($data);
        }

        return $this->externalPrice;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }

    public function setExternalPrice(?Money $externalPrice): void
    {
        $this->externalPrice = $externalPrice;
    }
}