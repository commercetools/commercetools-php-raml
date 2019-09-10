<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TypeResourceIdentifier>
 *
 * @method TypeResourceIdentifier current()
 * @method TypeResourceIdentifier at($offset)
 */
class TypeResourceIdentifierCollection extends MapperSequence
{
    /**
     * @psalm-assert TypeResourceIdentifier $value
     * @psalm-param TypeResourceIdentifier|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return TypeResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeResourceIdentifier
     */
    protected function mapper()
    {
        return function (int $index): ?TypeResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TypeResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}