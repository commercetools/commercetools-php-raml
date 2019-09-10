<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObjectModel;

final class CustomerSetSalutationActionModel extends JsonObjectModel implements CustomerSetSalutationAction
{
    const DISCRIMINATOR_VALUE = 'setSalutation';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $salutation;

    public function __construct(
        string $action = null,
        string $salutation = null
    ) {
        $this->action = $action;
        $this->salutation = $salutation;
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
    public function getSalutation()
    {
        if (is_null($this->salutation)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomerSetSalutationAction::FIELD_SALUTATION);
            if (is_null($data)) {
                return null;
            }
            $this->salutation = (string) $data;
        }

        return $this->salutation;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setSalutation(?string $salutation): void
    {
        $this->salutation = $salutation;
    }
}