<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSetPricesAction>
 */
final class ProductSetPricesActionBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $variantId;

    /**
     * @var ?string
     */
    private $sku;

    /**
     * @var ?PriceDraftCollection
     */
    private $prices;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return null|PriceDraftCollection
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @return $this
     */
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPrices(?PriceDraftCollection $prices)
    {
        $this->prices = $prices;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }


    public function build(): ProductSetPricesAction
    {
        return new ProductSetPricesActionModel(
            $this->variantId,
            $this->sku,
            $this->prices,
            $this->staged
        );
    }

    public static function of(): ProductSetPricesActionBuilder
    {
        return new self();
    }
}
