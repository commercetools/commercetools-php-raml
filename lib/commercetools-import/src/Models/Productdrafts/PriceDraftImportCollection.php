<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Productdrafts;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PriceDraftImport>
 * @method PriceDraftImport current()
 * @method PriceDraftImport at($offset)
 */
class PriceDraftImportCollection extends MapperSequence
{
    /**
     * @psalm-assert PriceDraftImport $value
     * @psalm-param PriceDraftImport|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PriceDraftImportCollection
     */
    public function add($value)
    {
        if (!$value instanceof PriceDraftImport) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PriceDraftImport
     */
    protected function mapper()
    {
        return function (int $index): ?PriceDraftImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PriceDraftImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
