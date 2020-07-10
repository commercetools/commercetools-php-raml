<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Errors;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<InsufficientScopeError>
 * @method InsufficientScopeError current()
 * @method InsufficientScopeError at($offset)
 */
class InsufficientScopeErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert InsufficientScopeError $value
     * @psalm-param InsufficientScopeError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InsufficientScopeErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof InsufficientScopeError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InsufficientScopeError
     */
    protected function mapper()
    {
        return function (int $index): ?InsufficientScopeError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = InsufficientScopeErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
