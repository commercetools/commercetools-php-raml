<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class AttributeSetTypeModel extends JsonObjectModel implements AttributeSetType
{
    const DISCRIMINATOR_VALUE = 'set';

    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?AttributeType
     */
    protected $elementType;

    public function __construct(
        string $name = null,
        AttributeType $elementType = null
    ) {
        $this->name = $name;
        $this->elementType = $elementType;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(AttributeType::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * @return null|AttributeType
     */
    public function getElementType()
    {
        if (is_null($this->elementType)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(AttributeSetType::FIELD_ELEMENT_TYPE);
            if (is_null($data)) {
                return null;
            }
            $className = AttributeTypeModel::resolveDiscriminatorClass($data);
            $this->elementType = $className::of($data);
        }

        return $this->elementType;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setElementType(?AttributeType $elementType): void
    {
        $this->elementType = $elementType;
    }
}