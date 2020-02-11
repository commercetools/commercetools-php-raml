<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StagedOrderRemoveItemShippingAddressAction>
 * @method StagedOrderRemoveItemShippingAddressAction current()
 * @method StagedOrderRemoveItemShippingAddressAction at($offset)
 */
class StagedOrderRemoveItemShippingAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderRemoveItemShippingAddressAction $value
     * @psalm-param StagedOrderRemoveItemShippingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderRemoveItemShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderRemoveItemShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderRemoveItemShippingAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderRemoveItemShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderRemoveItemShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
