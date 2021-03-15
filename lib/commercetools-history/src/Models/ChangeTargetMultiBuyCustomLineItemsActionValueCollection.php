<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ChangeTargetMultiBuyCustomLineItemsActionValue>
 * @method ChangeTargetMultiBuyCustomLineItemsActionValue current()
 * @method ChangeTargetMultiBuyCustomLineItemsActionValue at($offset)
 */
class ChangeTargetMultiBuyCustomLineItemsActionValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeTargetMultiBuyCustomLineItemsActionValue $value
     * @psalm-param ChangeTargetMultiBuyCustomLineItemsActionValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTargetMultiBuyCustomLineItemsActionValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTargetMultiBuyCustomLineItemsActionValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTargetMultiBuyCustomLineItemsActionValue
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTargetMultiBuyCustomLineItemsActionValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeTargetMultiBuyCustomLineItemsActionValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
