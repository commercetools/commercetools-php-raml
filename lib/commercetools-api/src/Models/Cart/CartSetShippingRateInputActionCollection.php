<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CartSetShippingRateInputAction>
 * @method CartSetShippingRateInputAction current()
 * @method CartSetShippingRateInputAction at($offset)
 */
class CartSetShippingRateInputActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartSetShippingRateInputAction $value
     * @psalm-param CartSetShippingRateInputAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetShippingRateInputActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetShippingRateInputAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetShippingRateInputAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetShippingRateInputAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartSetShippingRateInputActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
