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
 * @extends MapperSequence<AttributeLocalizedEnumType>
 * @method AttributeLocalizedEnumType current()
 * @method AttributeLocalizedEnumType at($offset)
 */
class AttributeLocalizedEnumTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert AttributeLocalizedEnumType $value
     * @psalm-param AttributeLocalizedEnumType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeLocalizedEnumTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeLocalizedEnumType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeLocalizedEnumType
     */
    protected function mapper()
    {
        return function (int $index): ?AttributeLocalizedEnumType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AttributeLocalizedEnumTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
