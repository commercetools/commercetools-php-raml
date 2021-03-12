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
 * @extends MapperSequence<ReviewRatingStatistics>
 * @method ReviewRatingStatistics current()
 * @method ReviewRatingStatistics at($offset)
 */
class ReviewRatingStatisticsCollection extends MapperSequence
{
    /**
     * @psalm-assert ReviewRatingStatistics $value
     * @psalm-param ReviewRatingStatistics|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReviewRatingStatisticsCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReviewRatingStatistics) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewRatingStatistics
     */
    protected function mapper()
    {
        return function (int $index): ?ReviewRatingStatistics {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ReviewRatingStatisticsModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
