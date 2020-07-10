<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importsinks;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;

interface ImportSinkDraft extends JsonObject
{

    public const FIELD_VERSION = 'version';
    public const FIELD_KEY = 'key';
    public const FIELD_RESOURCE_TYPE = 'resourceType';

    /**
     * <p>The version of this resource.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * <p>The unique key of the import sink.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>The type of import resource sent to this import sink.</p>
     *
     * @return null|string
     */
    public function getResourceType();

    public function setVersion(?int $version): void;

    public function setKey(?string $key): void;

    public function setResourceType(?string $resourceType): void;
}
