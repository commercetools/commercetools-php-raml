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
 * @extends MapperSequence<ChangeIsSearchableChange>
 * @method ChangeIsSearchableChange current()
 * @method ChangeIsSearchableChange at($offset)
 */
class ChangeIsSearchableChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeIsSearchableChange $value
     * @psalm-param ChangeIsSearchableChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeIsSearchableChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeIsSearchableChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeIsSearchableChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeIsSearchableChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeIsSearchableChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}