<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Product\Attribute;

interface DuplicateAttributeValueError extends ErrorObject
{

    public const FIELD_ATTRIBUTE = 'attribute';

    /**
     * @return null|Attribute
     */
    public function getAttribute();

    public function setAttribute(?Attribute $attribute): void;
}
