<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<RemoveAssetAction>
 * @method RemoveAssetAction current()
 * @method RemoveAssetAction at($offset)
 */
class RemoveAssetActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveAssetAction $value
     * @psalm-param RemoveAssetAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveAssetActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveAssetAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveAssetAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveAssetAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveAssetActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
