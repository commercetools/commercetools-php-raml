<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerCreateEmailToken extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_VERSION = 'version';
    public const FIELD_TTL_MINUTES = 'ttlMinutes';

    /**
     * @return null|string
     */
    public function getId();

    /**
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|int
     */
    public function getTtlMinutes();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setTtlMinutes(?int $ttlMinutes): void;
}
