<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Customfields;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<NumberSetField>
 * @method NumberSetField current()
 * @method NumberSetField at($offset)
 */
class NumberSetFieldCollection extends MapperSequence
{
    /**
     * @psalm-assert NumberSetField $value
     * @psalm-param NumberSetField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return NumberSetFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof NumberSetField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?NumberSetField
     */
    protected function mapper()
    {
        return function (int $index): ?NumberSetField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = NumberSetFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
