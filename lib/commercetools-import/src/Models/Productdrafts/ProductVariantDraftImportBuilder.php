<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productdrafts;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Import\Models\Common\AssetCollection;
use Commercetools\Import\Models\Common\ImageCollection;
use Commercetools\Import\Models\Productvariants\AttributeCollection;

/**
 * @implements Builder<ProductVariantDraftImport>
 */
final class ProductVariantDraftImportBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $sku;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?PriceDraftImportCollection
     */
    private $prices;

    /**
     * @var ?AttributeCollection
     */
    private $attributes;

    /**
     * @var ?ImageCollection
     */
    private $images;

    /**
     * @var ?AssetCollection
     */
    private $assets;

    /**
     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return null|PriceDraftImportCollection
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return null|ImageCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @return null|AssetCollection
     */
    public function getAssets()
    {
        return $this->assets;
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
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPrices(?PriceDraftImportCollection $prices)
    {
        $this->prices = $prices;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAttributes(?AttributeCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @return $this
     */
    public function withImages(?ImageCollection $images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAssets(?AssetCollection $assets)
    {
        $this->assets = $assets;

        return $this;
    }


    public function build(): ProductVariantDraftImport
    {
        return new ProductVariantDraftImportModel(
            $this->sku,
            $this->key,
            $this->prices,
            $this->attributes,
            $this->images,
            $this->assets
        );
    }

    public static function of(): ProductVariantDraftImportBuilder
    {
        return new self();
    }
}
