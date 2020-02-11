<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface AttributeNestedType extends AttributeType
{

    public const FIELD_TYPE_REFERENCE = 'typeReference';

    /**
     * @return null|ProductTypeReference
     */
    public function getTypeReference();

    public function setTypeReference(?ProductTypeReference $typeReference): void;
}
