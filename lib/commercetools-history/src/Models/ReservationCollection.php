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
 * @extends MapperSequence<Reservation>
 * @method Reservation current()
 * @method Reservation at($offset)
 */
class ReservationCollection extends MapperSequence
{
    /**
     * @psalm-assert Reservation $value
     * @psalm-param Reservation|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReservationCollection
     */
    public function add($value)
    {
        if (!$value instanceof Reservation) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Reservation
     */
    protected function mapper()
    {
        return function (int $index): ?Reservation {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ReservationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
