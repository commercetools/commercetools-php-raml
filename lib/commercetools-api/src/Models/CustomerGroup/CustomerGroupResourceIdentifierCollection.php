<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomerGroupResourceIdentifier>
 *
 * @method CustomerGroupResourceIdentifier current()
 * @method CustomerGroupResourceIdentifier at($offset)
 */
class CustomerGroupResourceIdentifierCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerGroupResourceIdentifier $value
     * @psalm-param CustomerGroupResourceIdentifier|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupResourceIdentifier
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerGroupResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerGroupResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}