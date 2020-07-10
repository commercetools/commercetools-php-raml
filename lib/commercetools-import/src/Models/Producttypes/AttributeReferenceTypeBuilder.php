<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Producttypes;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AttributeReferenceType>
 */
final class AttributeReferenceTypeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $referenceTypeId;

    /**
     * <p>The type of the referenced resource.</p>
     *
     * @return null|string
     */
    public function getReferenceTypeId()
    {
        return $this->referenceTypeId;
    }

    /**
     * @return $this
     */
    public function withReferenceTypeId(?string $referenceTypeId)
    {
        $this->referenceTypeId = $referenceTypeId;

        return $this;
    }


    public function build(): AttributeReferenceType
    {
        return new AttributeReferenceTypeModel(
            $this->referenceTypeId
        );
    }

    public static function of(): AttributeReferenceTypeBuilder
    {
        return new self();
    }
}
