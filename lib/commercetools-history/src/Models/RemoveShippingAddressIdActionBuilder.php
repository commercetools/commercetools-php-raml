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
 * @implements Builder<RemoveShippingAddressIdAction>
 */
final class RemoveShippingAddressIdActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var ?array
     */
    private $nextValue;

    /**
     * @var ?array
     */
    private $previousValue;

    /**
     * @var null|Address|AddressBuilder
     */
    private $address;

    /**
     * <p>Update action for <code>removeShippingAddressId</code> action on customers.</p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|array
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * @return null|array
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * @return null|Address
     */
    public function getAddress()
    {
        return $this->address instanceof AddressBuilder ? $this->address->build() : $this->address;
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
     * @param ?array $nextValue
     * @return $this
     */
    public function withNextValue(?array $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?array $previousValue
     * @return $this
     */
    public function withPreviousValue(?array $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?Address $address
     * @return $this
     */
    public function withAddress(?Address $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAddressBuilder(?AddressBuilder $address)
    {
        $this->address = $address;

        return $this;
    }

    public function build(): RemoveShippingAddressIdAction
    {
        return new RemoveShippingAddressIdActionModel(
            $this->change,
            $this->nextValue,
            $this->previousValue,
            $this->address instanceof AddressBuilder ? $this->address->build() : $this->address
        );
    }

    public static function of(): RemoveShippingAddressIdActionBuilder
    {
        return new self();
    }
}
