<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface IronMqDestination extends Destination
{

    public const FIELD_URI = 'uri';

    /**
     * @return null|string
     */
    public function getUri();

    public function setUri(?string $uri): void;
}
