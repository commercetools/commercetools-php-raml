<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Errors;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;
use Models\Prices\PriceImportCollection;
use Models\Productvariants\AttributeCollection;

interface VariantValues extends JsonObject
{

    public const FIELD_SKU = 'sku';
    public const FIELD_PRICES = 'prices';
    public const FIELD_ATTRIBUTES = 'attributes';

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * @return null|PriceImportCollection
     */
    public function getPrices();

    /**
     * @return null|AttributeCollection
     */
    public function getAttributes();

    public function setSku(?string $sku): void;

    public function setPrices(?PriceImportCollection $prices): void;

    public function setAttributes(?AttributeCollection $attributes): void;
}
