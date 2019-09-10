<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PaymentStatusStateTransitionMessagePayload>
 *
 * @method PaymentStatusStateTransitionMessagePayload current()
 * @method PaymentStatusStateTransitionMessagePayload at($offset)
 */
class PaymentStatusStateTransitionMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentStatusStateTransitionMessagePayload $value
     * @psalm-param PaymentStatusStateTransitionMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return PaymentStatusStateTransitionMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentStatusStateTransitionMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentStatusStateTransitionMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?PaymentStatusStateTransitionMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentStatusStateTransitionMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}