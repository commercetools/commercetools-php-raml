<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\AssetDraftCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Common\PriceDraftCollection;

final class ProductVariantDraftModel extends JsonObjectModel implements ProductVariantDraft
{

    /**
     * @var ?string
     */
    protected $sku;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?PriceDraftCollection
     */
    protected $prices;

    /**
     * @var ?AttributeCollection
     */
    protected $attributes;

    /**
     * @var ?ImageCollection
     */
    protected $images;

    /**
     * @var ?AssetDraftCollection
     */
    protected $assets;


    public function __construct(
        string $sku = null,
        string $key = null,
        PriceDraftCollection $prices = null,
        AttributeCollection $attributes = null,
        ImageCollection $images = null,
        AssetDraftCollection $assets = null
    ) {
        $this->sku = $sku;
        $this->key = $key;
        $this->prices = $prices;
        $this->attributes = $attributes;
        $this->images = $images;
        $this->assets = $assets;

    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductVariantDraft::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductVariantDraft::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * @return null|PriceDraftCollection
     */
    public function getPrices()
    {
        if (is_null($this->prices)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductVariantDraft::FIELD_PRICES);
            if (is_null($data)) {
                return null;
            }
            $this->prices = PriceDraftCollection::fromArray($data);
        }

        return $this->prices;
    }

    /**
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductVariantDraft::FIELD_ATTRIBUTES);
            if (is_null($data)) {
                return null;
            }
            $this->attributes = AttributeCollection::fromArray($data);
        }

        return $this->attributes;
    }

    /**
     * @return null|ImageCollection
     */
    public function getImages()
    {
        if (is_null($this->images)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductVariantDraft::FIELD_IMAGES);
            if (is_null($data)) {
                return null;
            }
            $this->images = ImageCollection::fromArray($data);
        }

        return $this->images;
    }

    /**
     * @return null|AssetDraftCollection
     */
    public function getAssets()
    {
        if (is_null($this->assets)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductVariantDraft::FIELD_ASSETS);
            if (is_null($data)) {
                return null;
            }
            $this->assets = AssetDraftCollection::fromArray($data);
        }

        return $this->assets;
    }

    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setPrices(?PriceDraftCollection $prices): void
    {
        $this->prices = $prices;
    }

    public function setAttributes(?AttributeCollection $attributes): void
    {
        $this->attributes = $attributes;
    }

    public function setImages(?ImageCollection $images): void
    {
        $this->images = $images;
    }

    public function setAssets(?AssetDraftCollection $assets): void
    {
        $this->assets = $assets;
    }



}
