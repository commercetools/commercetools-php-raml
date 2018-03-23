<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Psr\Http\Message\RequestInterface;
use Commercetools\Types\Inventory\InventoryEntryUpdateAction;

use Commercetools\Types\Inventory\InventoryAddQuantityAction;
use Commercetools\Types\Inventory\InventoryChangeQuantityAction;
use Commercetools\Types\Inventory\InventoryRemoveQuantityAction;
use Commercetools\Types\Inventory\InventorySetCustomFieldAction;
use Commercetools\Types\Inventory\InventorySetCustomTypeAction;
use Commercetools\Types\Inventory\InventorySetExpectedDeliveryAction;
use Commercetools\Types\Inventory\InventorySetRestockableInDaysAction;
use Commercetools\Types\Inventory\InventorySetSupplyChannelAction;
use Commercetools\Types\Inventory\InventoryEntry;
use Commercetools\Types\Inventory\InventoryEntryUpdate;
use Commercetools\Request\ByProjectKeyInventoryByIDPost;


class InventoryEntryUpdateBuilder extends BaseBuilder {
    /**
     * @var InventoryEntry
     */
    private $resource = null;

    /**
     * @var array
     */
    private $actions = [];

    private $requestBuilderCallback;

    public function __construct(callable $requestBuilderCallback = null)
    {
        $this->requestBuilderCallback = $requestBuilderCallback;
    }

    /**
     * @param InventoryAddQuantityAction|callable $action builder function <code>
     *   function (InventoryAddQuantityAction $action): InventoryAddQuantityAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addQuantity($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(InventoryAddQuantityAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof InventoryAddQuantityAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param InventoryChangeQuantityAction|callable $action builder function <code>
     *   function (InventoryChangeQuantityAction $action): InventoryChangeQuantityAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeQuantity($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(InventoryChangeQuantityAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof InventoryChangeQuantityAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param InventoryRemoveQuantityAction|callable $action builder function <code>
     *   function (InventoryRemoveQuantityAction $action): InventoryRemoveQuantityAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeQuantity($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(InventoryRemoveQuantityAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof InventoryRemoveQuantityAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param InventorySetCustomFieldAction|callable $action builder function <code>
     *   function (InventorySetCustomFieldAction $action): InventorySetCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomField($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(InventorySetCustomFieldAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof InventorySetCustomFieldAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param InventorySetCustomTypeAction|callable $action builder function <code>
     *   function (InventorySetCustomTypeAction $action): InventorySetCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomType($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(InventorySetCustomTypeAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof InventorySetCustomTypeAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param InventorySetExpectedDeliveryAction|callable $action builder function <code>
     *   function (InventorySetExpectedDeliveryAction $action): InventorySetExpectedDeliveryAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setExpectedDelivery($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(InventorySetExpectedDeliveryAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof InventorySetExpectedDeliveryAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param InventorySetRestockableInDaysAction|callable $action builder function <code>
     *   function (InventorySetRestockableInDaysAction $action): InventorySetRestockableInDaysAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setRestockableInDays($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(InventorySetRestockableInDaysAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof InventorySetRestockableInDaysAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param InventorySetSupplyChannelAction|callable $action builder function <code>
     *   function (InventorySetSupplyChannelAction $action): InventorySetSupplyChannelAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setSupplyChannel($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(InventorySetSupplyChannelAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof InventorySetSupplyChannelAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }

    /**
     * @param InventoryEntryUpdateAction $action
     * @return $this;
     */
    public function addAction(InventoryEntryUpdateAction $action)
    {
        $this->actions[] = $action;
        return $this;
    }

    /*
     * @param $action
     * @param callable $callback
     */
    private function callback($action, callable $callback = null) {
        if (!is_null($callback)) {
            $action = $callback($action);
        }
        return $action;
    }

    /**
     * @param InventoryEntry $inventoryEntry
     * @return $this
     */
    public function with(InventoryEntry $inventoryEntry)
    {
        $this->resource = $inventoryEntry;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    public function getResource(): ?InventoryEntry
    {
        return $this->resource;
    }

    /**
     * Build InventoryEntryUpdate
     * @return InventoryEntryUpdate
     */
    public function build(): InventoryEntryUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(InventoryEntryUpdate::class, $data);
        if ($update instanceof InventoryEntryUpdate &&
            $this->resource instanceof InventoryEntry
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }

    public function buildRequest(): ?ByProjectKeyInventoryByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}