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
 * @implements Builder<SetShippingAddressAction>
 */
final class SetShippingAddressActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|Address|AddressBuilder
     */
    private $nextValue;

    /**
     * @var null|Address|AddressBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setShippingAddress</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|Address
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof AddressBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @return null|Address
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof AddressBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?Address $nextValue
     * @return $this
     */
    public function withNextValue(?Address $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?Address $previousValue
     * @return $this
     */
    public function withPreviousValue(?Address $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?AddressBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?AddressBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): SetShippingAddressAction
    {
        return new SetShippingAddressActionModel(
            $this->change,
            $this->nextValue instanceof AddressBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof AddressBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): SetShippingAddressActionBuilder
    {
        return new self();
    }
}
