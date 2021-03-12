<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ChangeMasterVariantAction>
 */
final class ChangeMasterVariantActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var ?string
     */
    private $catalogData;

    /**
     * @var null|Variant|VariantBuilder
     */
    private $previousValue;

    /**
     * @var null|Variant|VariantBuilder
     */
    private $nextValue;

    /**
     * <p>Update action for <code>changeMasterVariant</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|string
     */
    public function getCatalogData()
    {
        return $this->catalogData;
    }

    /**
     * @return null|Variant
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof VariantBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * @return null|Variant
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof VariantBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?string $catalogData
     * @return $this
     */
    public function withCatalogData(?string $catalogData)
    {
        $this->catalogData = $catalogData;

        return $this;
    }

    /**
     * @param ?Variant $previousValue
     * @return $this
     */
    public function withPreviousValue(?Variant $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?Variant $nextValue
     * @return $this
     */
    public function withNextValue(?Variant $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?VariantBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?VariantBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): ChangeMasterVariantAction
    {
        return new ChangeMasterVariantActionModel(
            $this->change,
            $this->catalogData,
            $this->previousValue instanceof VariantBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof VariantBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): ChangeMasterVariantActionBuilder
    {
        return new self();
    }
}
