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
 * @extends MapperSequence<ChangeMasterVariantChange>
 * @method ChangeMasterVariantChange current()
 * @method ChangeMasterVariantChange at($offset)
 */
class ChangeMasterVariantChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeMasterVariantChange $value
     * @psalm-param ChangeMasterVariantChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeMasterVariantChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeMasterVariantChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeMasterVariantChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeMasterVariantChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeMasterVariantChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
