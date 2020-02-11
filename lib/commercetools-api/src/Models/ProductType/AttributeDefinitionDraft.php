<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\LocalizedString;

interface AttributeDefinitionDraft extends JsonObject
{

    public const FIELD_TYPE = 'type';
    public const FIELD_NAME = 'name';
    public const FIELD_LABEL = 'label';
    public const FIELD_IS_REQUIRED = 'isRequired';
    public const FIELD_ATTRIBUTE_CONSTRAINT = 'attributeConstraint';
    public const FIELD_INPUT_TIP = 'inputTip';
    public const FIELD_INPUT_HINT = 'inputHint';
    public const FIELD_IS_SEARCHABLE = 'isSearchable';

    /**
     * <p>Describes the type of the attribute.</p>
     *
     * @return null|AttributeType
     */
    public function getType();

    /**
     * <p>The unique name of the attribute used in the API.
     * The name must be between two and 256 characters long and can contain the ASCII letters A to Z in lowercase or uppercase, digits, underscores (<code>_</code>) and the hyphen-minus (<code>-</code>).
     * When using the same <code>name</code> for an attribute in two or more product types all fields of the AttributeDefinition of this attribute need to be the same across the product types.</p>
     *
     * @return null|string
     */
    public function getName();

    /**
     * <p>A human-readable label for the attribute.</p>
     *
     * @return null|LocalizedString
     */
    public function getLabel();

    /**
     * <p>Whether the attribute is required to have a value.</p>
     *
     * @return null|bool
     */
    public function getIsRequired();

    /**
     * <p>Describes how an attribute or a set of attributes should be validated across all variants of a product.</p>
     *
     * @return null|string
     */
    public function getAttributeConstraint();

    /**
     * <p>Additional information about the attribute that aids content managers when setting product details.</p>
     *
     * @return null|LocalizedString
     */
    public function getInputTip();

    /**
     * <p>Provides a visual representation type for this attribute.
     * only relevant for text-based attribute types like TextType and LocalizableTextType.</p>
     *
     * @return null|string
     */
    public function getInputHint();

    /**
     * <p>Whether the attribute's values should generally be enabled in product search.
     * This determines whether the value is stored in products for matching terms in the context of full-text search queries and can be used in facets &amp; filters as part of product search queries.
     * The exact features that are enabled/disabled with this flag depend on the concrete attribute type and are described there.</p>
     *
     * @return null|bool
     */
    public function getIsSearchable();

    public function setType(?AttributeType $type): void;

    public function setName(?string $name): void;

    public function setLabel(?LocalizedString $label): void;

    public function setIsRequired(?bool $isRequired): void;

    public function setAttributeConstraint(?string $attributeConstraint): void;

    public function setInputTip(?LocalizedString $inputTip): void;

    public function setInputHint(?string $inputHint): void;

    public function setIsSearchable(?bool $isSearchable): void;
}
