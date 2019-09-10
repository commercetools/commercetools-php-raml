<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObjectModel;

final class OrderChangePaymentStateActionModel extends JsonObjectModel implements OrderChangePaymentStateAction
{
    const DISCRIMINATOR_VALUE = 'changePaymentState';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $paymentState;

    public function __construct(
        string $action = null,
        string $paymentState = null
    ) {
        $this->action = $action;
        $this->paymentState = $paymentState;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getPaymentState()
    {
        if (is_null($this->paymentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderChangePaymentStateAction::FIELD_PAYMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->paymentState = (string) $data;
        }

        return $this->paymentState;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setPaymentState(?string $paymentState): void
    {
        $this->paymentState = $paymentState;
    }
}