<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface AttributeType extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'name';
    public const FIELD_NAME = 'name';

    /**
     * @return null|string
     */
    public function getName();

}
