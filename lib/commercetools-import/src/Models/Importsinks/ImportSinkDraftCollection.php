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
 * @extends MapperSequence<ImportSinkDraft>
 * @method ImportSinkDraft current()
 * @method ImportSinkDraft at($offset)
 */
class ImportSinkDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportSinkDraft $value
     * @psalm-param ImportSinkDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportSinkDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportSinkDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportSinkDraft
     */
    protected function mapper()
    {
        return function (int $index): ?ImportSinkDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ImportSinkDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
