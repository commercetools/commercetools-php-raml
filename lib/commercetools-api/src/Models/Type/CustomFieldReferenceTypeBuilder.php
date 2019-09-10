<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomFieldReferenceType>
 */
final class CustomFieldReferenceTypeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @var ?string
     */
    private $referenceTypeId;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getReferenceTypeId()
    {
        return $this->referenceTypeId;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withReferenceTypeId(?string $referenceTypeId)
    {
        $this->referenceTypeId = $referenceTypeId;

        return $this;
    }

    public function build(): CustomFieldReferenceType
    {
        return new CustomFieldReferenceTypeModel(
            $this->name,
            $this->referenceTypeId
        );
    }

    public static function of(): CustomFieldReferenceTypeBuilder
    {
        return new self();
    }
}