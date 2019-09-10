<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierModel;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class StagedOrderSetCustomerGroupActionModel extends JsonObjectModel implements StagedOrderSetCustomerGroupAction
{
    const DISCRIMINATOR_VALUE = 'setCustomerGroup';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?CustomerGroupResourceIdentifier
     */
    protected $customerGroup;

    public function __construct(
        string $action = null,
        CustomerGroupResourceIdentifier $customerGroup = null
    ) {
        $this->action = $action;
        $this->customerGroup = $customerGroup;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(StagedOrderSetCustomerGroupAction::FIELD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroup = CustomerGroupResourceIdentifierModel::of($data);
        }

        return $this->customerGroup;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }
}