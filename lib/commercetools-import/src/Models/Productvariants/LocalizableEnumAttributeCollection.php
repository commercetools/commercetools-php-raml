<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Productvariants;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<LocalizableEnumAttribute>
 * @method LocalizableEnumAttribute current()
 * @method LocalizableEnumAttribute at($offset)
 */
class LocalizableEnumAttributeCollection extends MapperSequence
{
    /**
     * @psalm-assert LocalizableEnumAttribute $value
     * @psalm-param LocalizableEnumAttribute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LocalizableEnumAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof LocalizableEnumAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LocalizableEnumAttribute
     */
    protected function mapper()
    {
        return function (int $index): ?LocalizableEnumAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = LocalizableEnumAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
