<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface NumberAttribute extends Attribute
{

    public const FIELD_VALUE = 'value';

    /**
     * @return null|int
     */
    public function getValue();

    public function setValue(?int $value): void;
}
