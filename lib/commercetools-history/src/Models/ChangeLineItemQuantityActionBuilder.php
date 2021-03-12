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
 * @implements Builder<ChangeLineItemQuantityAction>
 */
final class ChangeLineItemQuantityActionBuilder implements Builder
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
    private $lineItemId;

    /**
     * @var ?int
     */
    private $nextValue;

    /**
     * @var ?int
     */
    private $previousValue;

    /**
     * <p>Update action for <code>changeLineItemQuantity</code></p>
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
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * <p>The amount of a LineItem in the cart. Must be a positive integer.</p>
     *
     * @return null|int
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * <p>The amount of a LineItem in the cart. Must be a positive integer.</p>
     *
     * @return null|int
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
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
     * @param ?string $lineItemId
     * @return $this
     */
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * @param ?int $nextValue
     * @return $this
     */
    public function withNextValue(?int $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?int $previousValue
     * @return $this
     */
    public function withPreviousValue(?int $previousValue)
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

    public function build(): ChangeLineItemQuantityAction
    {
        return new ChangeLineItemQuantityActionModel(
            $this->change,
            $this->lineItem instanceof LocalizedStringBuilder ? $this->lineItem->build() : $this->lineItem,
            $this->lineItemId,
            $this->nextValue,
            $this->previousValue
        );
    }

    public static function of(): ChangeLineItemQuantityActionBuilder
    {
        return new self();
    }
}
