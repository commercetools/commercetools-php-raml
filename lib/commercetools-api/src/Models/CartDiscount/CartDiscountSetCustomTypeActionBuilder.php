<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Api\Models\Type\TypeResourceIdentifierBuilder;

/**
 * @implements Builder<CartDiscountSetCustomTypeAction>
 */
final class CartDiscountSetCustomTypeActionBuilder implements Builder
{
    /**
     * @var null|TypeResourceIdentifier|TypeResourceIdentifierBuilder
     */
    private $type;

    /**
     * @var ?JsonObject
     */
    private $fields;

    /**
     * <p>If absent, the custom type and any existing CustomFields are removed.</p>
     *
     * @return null|TypeResourceIdentifier
     */
    public function getType()
    {
        return $this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type;
    }

    /**
     * <p>A valid JSON object, based on the FieldDefinitions of the Type.
     * Sets the custom fields to this value.</p>
     *
     * @return null|JsonObject
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @return $this
     */
    public function withType(?TypeResourceIdentifier $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withFields(?JsonObject $fields)
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTypeBuilder(?TypeResourceIdentifierBuilder $type)
    {
        $this->type = $type;

        return $this;
    }

    public function build(): CartDiscountSetCustomTypeAction
    {
        return new CartDiscountSetCustomTypeActionModel(
            $this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type,
            $this->fields
        );
    }

    public static function of(): CartDiscountSetCustomTypeActionBuilder
    {
        return new self();
    }
}
