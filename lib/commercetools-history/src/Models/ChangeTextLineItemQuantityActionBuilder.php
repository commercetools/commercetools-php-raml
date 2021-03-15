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
 * @implements Builder<ChangeTextLineItemQuantityAction>
 */
final class ChangeTextLineItemQuantityActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|TextLineItemValue|TextLineItemValueBuilder
     */
    private $textLineItem;

    /**
     * @var ?int
     */
    private $previousValue;

    /**
     * @var ?int
     */
    private $nextValue;

    /**
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|TextLineItemValue
     */
    public function getTextLineItem()
    {
        return $this->textLineItem instanceof TextLineItemValueBuilder ? $this->textLineItem->build() : $this->textLineItem;
    }

    /**
     * @return null|int
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * @return null|int
     */
    public function getNextValue()
    {
        return $this->nextValue;
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
     * @param ?TextLineItemValue $textLineItem
     * @return $this
     */
    public function withTextLineItem(?TextLineItemValue $textLineItem)
    {
        $this->textLineItem = $textLineItem;

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
     * @param ?int $nextValue
     * @return $this
     */
    public function withNextValue(?int $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTextLineItemBuilder(?TextLineItemValueBuilder $textLineItem)
    {
        $this->textLineItem = $textLineItem;

        return $this;
    }

    public function build(): ChangeTextLineItemQuantityAction
    {
        return new ChangeTextLineItemQuantityActionModel(
            $this->change,
            $this->textLineItem instanceof TextLineItemValueBuilder ? $this->textLineItem->build() : $this->textLineItem,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): ChangeTextLineItemQuantityActionBuilder
    {
        return new self();
    }
}
