<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\Reference;

interface TypeReference extends Reference
{

    public const FIELD_OBJ = 'obj';

    /**
     * @return null|Type
     */
    public function getObj();

    public function setObj(?Type $obj): void;
}
