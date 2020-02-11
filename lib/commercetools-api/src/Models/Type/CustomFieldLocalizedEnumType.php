<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CustomFieldLocalizedEnumType extends FieldType
{

    public const FIELD_VALUES = 'values';

    /**
     * @return null|CustomFieldLocalizedEnumValueCollection
     */
    public function getValues();

    public function setValues(?CustomFieldLocalizedEnumValueCollection $values): void;
}
