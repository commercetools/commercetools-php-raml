<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Common;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CategoryKeyReference>
 * @method CategoryKeyReference current()
 * @method CategoryKeyReference at($offset)
 */
class CategoryKeyReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert CategoryKeyReference $value
     * @psalm-param CategoryKeyReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategoryKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategoryKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryKeyReference
     */
    protected function mapper()
    {
        return function (int $index): ?CategoryKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategoryKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
