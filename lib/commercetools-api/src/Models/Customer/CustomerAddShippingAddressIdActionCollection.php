<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomerAddShippingAddressIdAction>
 * @method CustomerAddShippingAddressIdAction current()
 * @method CustomerAddShippingAddressIdAction at($offset)
 */
class CustomerAddShippingAddressIdActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerAddShippingAddressIdAction $value
     * @psalm-param CustomerAddShippingAddressIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerAddShippingAddressIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddShippingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddShippingAddressIdAction
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerAddShippingAddressIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerAddShippingAddressIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
