<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface TypeAddFieldDefinitionAction extends TypeUpdateAction
{

    public const FIELD_FIELD_DEFINITION = 'fieldDefinition';

    /**
     * @return null|FieldDefinition
     */
    public function getFieldDefinition();

    public function setFieldDefinition(?FieldDefinition $fieldDefinition): void;
}
