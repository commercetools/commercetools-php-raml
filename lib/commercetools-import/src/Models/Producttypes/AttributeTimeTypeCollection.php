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
 * @extends MapperSequence<AttributeTimeType>
 * @method AttributeTimeType current()
 * @method AttributeTimeType at($offset)
 */
class AttributeTimeTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert AttributeTimeType $value
     * @psalm-param AttributeTimeType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeTimeTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeTimeType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeTimeType
     */
    protected function mapper()
    {
        return function (int $index): ?AttributeTimeType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AttributeTimeTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
