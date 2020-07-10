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
 * @extends MapperSequence<TextAttribute>
 * @method TextAttribute current()
 * @method TextAttribute at($offset)
 */
class TextAttributeCollection extends MapperSequence
{
    /**
     * @psalm-assert TextAttribute $value
     * @psalm-param TextAttribute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TextAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof TextAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TextAttribute
     */
    protected function mapper()
    {
        return function (int $index): ?TextAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TextAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
