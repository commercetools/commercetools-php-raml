<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductVariantAvailability>
 */
final class ProductVariantAvailabilityBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $availableQuantity;

    /**
     * @var ProductVariantChannelAvailabilityMap|?ProductVariantChannelAvailabilityMapBuilder
     */
    private $channels;

    /**
     * @var ?int
     */
    private $restockableInDays;

    /**
     * @var ?bool
     */
    private $isOnStock;

    public function __construct()
    {
    }

    /**
     * @return null|int
     */
    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }

    /**
     * @return null|ProductVariantChannelAvailabilityMap
     */
    public function getChannels()
    {
        return $this->channels instanceof ProductVariantChannelAvailabilityMapBuilder ? $this->channels->build() : $this->channels;
    }

    /**
     * @return null|int
     */
    public function getRestockableInDays()
    {
        return $this->restockableInDays;
    }

    /**
     * @return null|bool
     */
    public function getIsOnStock()
    {
        return $this->isOnStock;
    }

    /**
     * @return $this
     */
    public function withAvailableQuantity(?int $availableQuantity)
    {
        $this->availableQuantity = $availableQuantity;

        return $this;
    }

    /**
     * @return $this
     */
    public function withChannels(?ProductVariantChannelAvailabilityMap $channels)
    {
        $this->channels = $channels;

        return $this;
    }

    /**
     * @return $this
     */
    public function withRestockableInDays(?int $restockableInDays)
    {
        $this->restockableInDays = $restockableInDays;

        return $this;
    }

    /**
     * @return $this
     */
    public function withIsOnStock(?bool $isOnStock)
    {
        $this->isOnStock = $isOnStock;

        return $this;
    }

    /**
     * @return $this
     */
    public function withChannelsBuilder(?ProductVariantChannelAvailabilityMapBuilder $channels)
    {
        $this->channels = $channels;

        return $this;
    }

    public function build(): ProductVariantAvailability
    {
        return new ProductVariantAvailabilityModel(
            $this->availableQuantity,
            ($this->channels instanceof ProductVariantChannelAvailabilityMapBuilder ? $this->channels->build() : $this->channels),
            $this->restockableInDays,
            $this->isOnStock
        );
    }

    public static function of(): ProductVariantAvailabilityBuilder
    {
        return new self();
    }
}