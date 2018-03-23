<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Psr\Http\Message\RequestInterface;
use Commercetools\Types\Channel\ChannelUpdateAction;

use Commercetools\Types\Channel\ChannelAddRolesAction;
use Commercetools\Types\Channel\ChannelChangeDescriptionAction;
use Commercetools\Types\Channel\ChannelChangeKeyAction;
use Commercetools\Types\Channel\ChannelChangeNameAction;
use Commercetools\Types\Channel\ChannelRemoveRolesAction;
use Commercetools\Types\Channel\ChannelSetAddressAction;
use Commercetools\Types\Channel\ChannelSetCustomFieldAction;
use Commercetools\Types\Channel\ChannelSetCustomTypeAction;
use Commercetools\Types\Channel\ChannelSetGeolocationAction;
use Commercetools\Types\Channel\ChannelSetRolesAction;
use Commercetools\Types\Channel\Channel;
use Commercetools\Types\Channel\ChannelUpdate;
use Commercetools\Request\ByProjectKeyChannelsByIDPost;


class ChannelUpdateBuilder extends BaseBuilder {
    /**
     * @var Channel
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
     * @param ChannelAddRolesAction|callable $action builder function <code>
     *   function (ChannelAddRolesAction $action): ChannelAddRolesAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addRoles($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ChannelAddRolesAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ChannelAddRolesAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ChannelChangeDescriptionAction|callable $action builder function <code>
     *   function (ChannelChangeDescriptionAction $action): ChannelChangeDescriptionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeDescription($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ChannelChangeDescriptionAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ChannelChangeDescriptionAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ChannelChangeKeyAction|callable $action builder function <code>
     *   function (ChannelChangeKeyAction $action): ChannelChangeKeyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeKey($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ChannelChangeKeyAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ChannelChangeKeyAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ChannelChangeNameAction|callable $action builder function <code>
     *   function (ChannelChangeNameAction $action): ChannelChangeNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeName($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ChannelChangeNameAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ChannelChangeNameAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ChannelRemoveRolesAction|callable $action builder function <code>
     *   function (ChannelRemoveRolesAction $action): ChannelRemoveRolesAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeRoles($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ChannelRemoveRolesAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ChannelRemoveRolesAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ChannelSetAddressAction|callable $action builder function <code>
     *   function (ChannelSetAddressAction $action): ChannelSetAddressAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAddress($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ChannelSetAddressAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ChannelSetAddressAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ChannelSetCustomFieldAction|callable $action builder function <code>
     *   function (ChannelSetCustomFieldAction $action): ChannelSetCustomFieldAction {
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
            $emptyAction = $this->mapData(ChannelSetCustomFieldAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ChannelSetCustomFieldAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ChannelSetCustomTypeAction|callable $action builder function <code>
     *   function (ChannelSetCustomTypeAction $action): ChannelSetCustomTypeAction {
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
            $emptyAction = $this->mapData(ChannelSetCustomTypeAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ChannelSetCustomTypeAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ChannelSetGeolocationAction|callable $action builder function <code>
     *   function (ChannelSetGeolocationAction $action): ChannelSetGeolocationAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setGeoLocation($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ChannelSetGeolocationAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ChannelSetGeolocationAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ChannelSetRolesAction|callable $action builder function <code>
     *   function (ChannelSetRolesAction $action): ChannelSetRolesAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setRoles($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ChannelSetRolesAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ChannelSetRolesAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }

    /**
     * @param ChannelUpdateAction $action
     * @return $this;
     */
    public function addAction(ChannelUpdateAction $action)
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
     * @param Channel $channel
     * @return $this
     */
    public function with(Channel $channel)
    {
        $this->resource = $channel;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    public function getResource(): ?Channel
    {
        return $this->resource;
    }

    /**
     * Build ChannelUpdate
     * @return ChannelUpdate
     */
    public function build(): ChannelUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(ChannelUpdate::class, $data);
        if ($update instanceof ChannelUpdate &&
            $this->resource instanceof Channel
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }

    public function buildRequest(): ?ByProjectKeyChannelsByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}