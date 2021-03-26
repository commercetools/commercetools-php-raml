<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TransitionLineItemStateChange>
 * @method TransitionLineItemStateChange current()
 * @method TransitionLineItemStateChange at($offset)
 */
class TransitionLineItemStateChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert TransitionLineItemStateChange $value
     * @psalm-param TransitionLineItemStateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TransitionLineItemStateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof TransitionLineItemStateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TransitionLineItemStateChange
     */
    protected function mapper()
    {
        return function (int $index): ?TransitionLineItemStateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TransitionLineItemStateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
