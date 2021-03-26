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
 * @extends MapperSequence<SetTargetChange>
 * @method SetTargetChange current()
 * @method SetTargetChange at($offset)
 */
class SetTargetChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetTargetChange $value
     * @psalm-param SetTargetChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetTargetChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetTargetChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetTargetChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetTargetChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetTargetChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
