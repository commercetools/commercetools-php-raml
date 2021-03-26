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
 * @extends MapperSequence<ChangeLocalizedNameChange>
 * @method ChangeLocalizedNameChange current()
 * @method ChangeLocalizedNameChange at($offset)
 */
class ChangeLocalizedNameChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeLocalizedNameChange $value
     * @psalm-param ChangeLocalizedNameChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeLocalizedNameChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeLocalizedNameChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeLocalizedNameChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeLocalizedNameChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeLocalizedNameChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
