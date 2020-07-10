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
 * @extends MapperSequence<AssetSource>
 * @method AssetSource current()
 * @method AssetSource at($offset)
 */
class AssetSourceCollection extends MapperSequence
{
    /**
     * @psalm-assert AssetSource $value
     * @psalm-param AssetSource|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssetSourceCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssetSource) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssetSource
     */
    protected function mapper()
    {
        return function (int $index): ?AssetSource {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AssetSourceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
