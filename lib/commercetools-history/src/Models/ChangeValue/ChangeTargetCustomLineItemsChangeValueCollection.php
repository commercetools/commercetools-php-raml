<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ChangeTargetCustomLineItemsChangeValue>
 * @method ChangeTargetCustomLineItemsChangeValue current()
 * @method ChangeTargetCustomLineItemsChangeValue at($offset)
 */
class ChangeTargetCustomLineItemsChangeValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeTargetCustomLineItemsChangeValue $value
     * @psalm-param ChangeTargetCustomLineItemsChangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTargetCustomLineItemsChangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTargetCustomLineItemsChangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTargetCustomLineItemsChangeValue
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTargetCustomLineItemsChangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeTargetCustomLineItemsChangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
