<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class ShippingMethodUpdateModel extends UpdateModel implements ShippingMethodUpdate {
    /**
     * @var ShippingMethodUpdateActionCollection
     */
    protected $actions;

    /**
     * @return ShippingMethodUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(ShippingMethodUpdate::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(ShippingMethodUpdateActionCollection::class, null);
            }
            $value = $this->mapData(ShippingMethodUpdateActionCollection::class, $value);
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
