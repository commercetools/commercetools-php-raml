<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Producttypes;

use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;


/**
 * @internal
 */
final class AttributeReferenceTypeModel extends JsonObjectModel implements AttributeReferenceType
{
    public const DISCRIMINATOR_VALUE = 'reference';
    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?string
     */
    protected $referenceTypeId;


    public function __construct(
        string $referenceTypeId = null
    ) {
        $this->referenceTypeId = $referenceTypeId;
        $this->name = static::DISCRIMINATOR_VALUE;
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
     * <p>The type of the referenced resource.</p>
     *
     * @return null|string
     */
    public function getReferenceTypeId()
    {
        if (is_null($this->referenceTypeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(AttributeReferenceType::FIELD_REFERENCE_TYPE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->referenceTypeId = (string) $data;
        }

        return $this->referenceTypeId;
    }

    public function setReferenceTypeId(?string $referenceTypeId): void
    {
        $this->referenceTypeId = $referenceTypeId;
    }



}
