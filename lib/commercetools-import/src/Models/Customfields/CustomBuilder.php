<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Customfields;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;
use Models\Common\TypeKeyReference;
use Models\Common\TypeKeyReferenceBuilder;

/**
 * @implements Builder<Custom>
 */
final class CustomBuilder implements Builder
{
    /**
     * @var null|TypeKeyReference|TypeKeyReferenceBuilder
     */
    private $type;

    /**
     * @var null|FieldContainer|FieldContainerBuilder
     */
    private $fields;

    /**
     * <p>The type that provides the field definitions for this object.</p>
     *
     * @return null|TypeKeyReference
     */
    public function getType()
    {
        return $this->type instanceof TypeKeyReferenceBuilder ? $this->type->build() : $this->type;
    }

    /**
     * <p>The custom fields of this object.</p>
     *
     * @return null|FieldContainer
     */
    public function getFields()
    {
        return $this->fields instanceof FieldContainerBuilder ? $this->fields->build() : $this->fields;
    }

    /**
     * @return $this
     */
    public function withType(?TypeKeyReference $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withFields(?FieldContainer $fields)
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTypeBuilder(?TypeKeyReferenceBuilder $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withFieldsBuilder(?FieldContainerBuilder $fields)
    {
        $this->fields = $fields;

        return $this;
    }

    public function build(): Custom
    {
        return new CustomModel(
            $this->type instanceof TypeKeyReferenceBuilder ? $this->type->build() : $this->type,
            $this->fields instanceof FieldContainerBuilder ? $this->fields->build() : $this->fields
        );
    }

    public static function of(): CustomBuilder
    {
        return new self();
    }
}
