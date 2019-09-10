<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderReference>
 */
final class OrderReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $typeId;

    /**
     * @var ?string
     */
    private $id;

    /**
     * @var Order|?OrderBuilder
     */
    private $obj;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|Order
     */
    public function getObj()
    {
        return $this->obj instanceof OrderBuilder ? $this->obj->build() : $this->obj;
    }

    /**
     * @return $this
     */
    public function withTypeId(?string $typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObj(?Order $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObjBuilder(?OrderBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): OrderReference
    {
        return new OrderReferenceModel(
            $this->typeId,
            $this->id,
            ($this->obj instanceof OrderBuilder ? $this->obj->build() : $this->obj)
        );
    }

    public static function of(): OrderReferenceBuilder
    {
        return new self();
    }
}