<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class SubscriptionUpdateModel extends UpdateModel implements SubscriptionUpdate {
    /**
     * @var SubscriptionUpdateActionCollection
     */
    protected $actions;

    /**
     * @return SubscriptionUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(SubscriptionUpdate::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(SubscriptionUpdateActionCollection::class, null);
            }
            $value = $this->mapData(SubscriptionUpdateActionCollection::class, $value);
            $this->actions = $value;
        }
        return $this->actions;
    }

    /**
     * @param UpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

}
