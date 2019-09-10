<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObjectModel;

final class CustomerSetCustomerNumberActionModel extends JsonObjectModel implements CustomerSetCustomerNumberAction
{
    const DISCRIMINATOR_VALUE = 'setCustomerNumber';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $customerNumber;

    public function __construct(
        string $action = null,
        string $customerNumber = null
    ) {
        $this->action = $action;
        $this->customerNumber = $customerNumber;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomerUpdateAction::FIELD_ACTION);
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
    public function getCustomerNumber()
    {
        if (is_null($this->customerNumber)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomerSetCustomerNumberAction::FIELD_CUSTOMER_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->customerNumber = (string) $data;
        }

        return $this->customerNumber;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setCustomerNumber(?string $customerNumber): void
    {
        $this->customerNumber = $customerNumber;
    }
}