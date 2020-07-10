<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importoperations;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ImportOperation>
 * @method ImportOperation current()
 * @method ImportOperation at($offset)
 */
class ImportOperationCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportOperation $value
     * @psalm-param ImportOperation|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportOperationCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportOperation) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportOperation
     */
    protected function mapper()
    {
        return function (int $index): ?ImportOperation {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ImportOperationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
