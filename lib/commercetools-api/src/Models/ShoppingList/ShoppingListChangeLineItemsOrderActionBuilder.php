<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ShoppingListChangeLineItemsOrderAction>
 */
final class ShoppingListChangeLineItemsOrderActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?array
     */
    private $lineItemOrder;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|array
     */
    public function getLineItemOrder()
    {
        return $this->lineItemOrder;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLineItemOrder(?array $lineItemOrder)
    {
        $this->lineItemOrder = $lineItemOrder;

        return $this;
    }

    public function build(): ShoppingListChangeLineItemsOrderAction
    {
        return new ShoppingListChangeLineItemsOrderActionModel(
            $this->action,
            $this->lineItemOrder
        );
    }

    public static function of(): ShoppingListChangeLineItemsOrderActionBuilder
    {
        return new self();
    }
}