<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Base\Collection;

interface CustomerGroupUpdateActionCollection extends Collection {
    /**
     * @param $index
     * @return CustomerGroupUpdateAction
     */
    public function at($index);

    /**
     * @return CustomerGroupUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerGroupUpdateAction
     */
    public function map($data, $index);
}
