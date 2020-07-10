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
 * @extends MapperSequence<ProductVariantDraftImport>
 * @method ProductVariantDraftImport current()
 * @method ProductVariantDraftImport at($offset)
 */
class ProductVariantDraftImportCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductVariantDraftImport $value
     * @psalm-param ProductVariantDraftImport|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantDraftImportCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantDraftImport) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantDraftImport
     */
    protected function mapper()
    {
        return function (int $index): ?ProductVariantDraftImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductVariantDraftImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
