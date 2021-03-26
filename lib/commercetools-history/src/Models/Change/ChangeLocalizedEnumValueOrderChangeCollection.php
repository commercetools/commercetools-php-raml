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
 * @extends MapperSequence<ChangeLocalizedEnumValueOrderChange>
 * @method ChangeLocalizedEnumValueOrderChange current()
 * @method ChangeLocalizedEnumValueOrderChange at($offset)
 */
class ChangeLocalizedEnumValueOrderChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeLocalizedEnumValueOrderChange $value
     * @psalm-param ChangeLocalizedEnumValueOrderChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeLocalizedEnumValueOrderChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeLocalizedEnumValueOrderChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeLocalizedEnumValueOrderChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeLocalizedEnumValueOrderChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeLocalizedEnumValueOrderChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
