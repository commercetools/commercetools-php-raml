<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class ProductDiscountUpdateModel extends UpdateModel implements ProductDiscountUpdate {
    /**
     * @var array
     */
    protected $actions;

    /**
     * @return array
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(ProductDiscountUpdate::FIELD_ACTIONS);
            $value = (array)$value;
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