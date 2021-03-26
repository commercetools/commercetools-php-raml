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
 * @extends MapperSequence<ChangeValueGiftLineItemChangeValue>
 * @method ChangeValueGiftLineItemChangeValue current()
 * @method ChangeValueGiftLineItemChangeValue at($offset)
 */
class ChangeValueGiftLineItemChangeValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeValueGiftLineItemChangeValue $value
     * @psalm-param ChangeValueGiftLineItemChangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeValueGiftLineItemChangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeValueGiftLineItemChangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeValueGiftLineItemChangeValue
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeValueGiftLineItemChangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeValueGiftLineItemChangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
