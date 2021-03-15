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
 * @implements Builder<SetLineItemDiscountedPricePerQuantityAction>
 */
final class SetLineItemDiscountedPricePerQuantityActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $lineItem;

    /**
     * @var ?string
     */
    private $variant;

    /**
     * @var null|DiscountedLineItemPriceForQuantity|DiscountedLineItemPriceForQuantityBuilder
     */
    private $nextValue;

    /**
     * @var null|DiscountedLineItemPriceForQuantity|DiscountedLineItemPriceForQuantityBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setLineItemDiscountedPricePerQuantity</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|LocalizedString
     */
    public function getLineItem()
    {
        return $this->lineItem instanceof LocalizedStringBuilder ? $this->lineItem->build() : $this->lineItem;
    }

    /**
     * @return null|string
     */
    public function getVariant()
    {
        return $this->variant;
    }

    /**
     * @return null|DiscountedLineItemPriceForQuantity
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof DiscountedLineItemPriceForQuantityBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @return null|DiscountedLineItemPriceForQuantity
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof DiscountedLineItemPriceForQuantityBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?LocalizedString $lineItem
     * @return $this
     */
    public function withLineItem(?LocalizedString $lineItem)
    {
        $this->lineItem = $lineItem;

        return $this;
    }

    /**
     * @param ?string $variant
     * @return $this
     */
    public function withVariant(?string $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * @param ?DiscountedLineItemPriceForQuantity $nextValue
     * @return $this
     */
    public function withNextValue(?DiscountedLineItemPriceForQuantity $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?DiscountedLineItemPriceForQuantity $previousValue
     * @return $this
     */
    public function withPreviousValue(?DiscountedLineItemPriceForQuantity $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLineItemBuilder(?LocalizedStringBuilder $lineItem)
    {
        $this->lineItem = $lineItem;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?DiscountedLineItemPriceForQuantityBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?DiscountedLineItemPriceForQuantityBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): SetLineItemDiscountedPricePerQuantityAction
    {
        return new SetLineItemDiscountedPricePerQuantityActionModel(
            $this->change,
            $this->lineItem instanceof LocalizedStringBuilder ? $this->lineItem->build() : $this->lineItem,
            $this->variant,
            $this->nextValue instanceof DiscountedLineItemPriceForQuantityBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof DiscountedLineItemPriceForQuantityBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): SetLineItemDiscountedPricePerQuantityActionBuilder
    {
        return new self();
    }
}
