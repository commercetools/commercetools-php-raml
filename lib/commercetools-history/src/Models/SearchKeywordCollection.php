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
 * @extends MapperSequence<SearchKeyword>
 * @method SearchKeyword current()
 * @method SearchKeyword at($offset)
 */
class SearchKeywordCollection extends MapperSequence
{
    /**
     * @psalm-assert SearchKeyword $value
     * @psalm-param SearchKeyword|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchKeywordCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchKeyword) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchKeyword
     */
    protected function mapper()
    {
        return function (int $index): ?SearchKeyword {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SearchKeywordModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
