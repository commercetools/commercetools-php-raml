<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importsinks;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ImportSink>
 * @method ImportSink current()
 * @method ImportSink at($offset)
 */
class ImportSinkCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportSink $value
     * @psalm-param ImportSink|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportSinkCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportSink) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportSink
     */
    protected function mapper()
    {
        return function (int $index): ?ImportSink {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ImportSinkModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
