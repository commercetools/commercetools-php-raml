<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\Builder;

/**
 * @implements Builder<DiscountCodeSetMaxApplicationsPerCustomerAction>
 */
final class DiscountCodeSetMaxApplicationsPerCustomerActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?int
     */
    private $maxApplicationsPerCustomer;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|int
     */
    public function getMaxApplicationsPerCustomer()
    {
        return $this->maxApplicationsPerCustomer;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMaxApplicationsPerCustomer(?int $maxApplicationsPerCustomer)
    {
        $this->maxApplicationsPerCustomer = $maxApplicationsPerCustomer;

        return $this;
    }

    public function build(): DiscountCodeSetMaxApplicationsPerCustomerAction
    {
        return new DiscountCodeSetMaxApplicationsPerCustomerActionModel(
            $this->action,
            $this->maxApplicationsPerCustomer
        );
    }

    public static function of(): DiscountCodeSetMaxApplicationsPerCustomerActionBuilder
    {
        return new self();
    }
}