<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Producttypes;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AttributeEnumType>
 * @method AttributeEnumType current()
 * @method AttributeEnumType at($offset)
 */
class AttributeEnumTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert AttributeEnumType $value
     * @psalm-param AttributeEnumType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeEnumTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeEnumType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeEnumType
     */
    protected function mapper()
    {
        return function (int $index): ?AttributeEnumType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AttributeEnumTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
