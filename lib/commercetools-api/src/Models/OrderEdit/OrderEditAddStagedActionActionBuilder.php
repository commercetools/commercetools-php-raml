<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;

/**
 * @implements Builder<OrderEditAddStagedActionAction>
 */
final class OrderEditAddStagedActionActionBuilder implements Builder
{
    /**
     * @var null|StagedOrderUpdateAction|StagedOrderUpdateActionBuilder
     */
    private $stagedAction;

    /**
     * @return null|StagedOrderUpdateAction
     */
    public function getStagedAction()
    {
        return $this->stagedAction instanceof StagedOrderUpdateActionBuilder ? $this->stagedAction->build() : $this->stagedAction;
    }

    /**
     * @return $this
     */
    public function withStagedAction(?StagedOrderUpdateAction $stagedAction)
    {
        $this->stagedAction = $stagedAction;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStagedActionBuilder(?StagedOrderUpdateActionBuilder $stagedAction)
    {
        $this->stagedAction = $stagedAction;

        return $this;
    }

    public function build(): OrderEditAddStagedActionAction
    {
        return new OrderEditAddStagedActionActionModel(
            $this->stagedAction instanceof StagedOrderUpdateActionBuilder ? $this->stagedAction->build() : $this->stagedAction
        );
    }

    public static function of(): OrderEditAddStagedActionActionBuilder
    {
        return new self();
    }
}
