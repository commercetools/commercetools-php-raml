<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importsinks;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;
use DateTimeImmutable;

interface ImportSink extends JsonObject
{

    public const FIELD_KEY = 'key';
    public const FIELD_RESOURCE_TYPE = 'resourceType';
    public const FIELD_VERSION = 'version';
    public const FIELD_CREATED_AT = 'createdAt';
    public const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';

    /**
     * <p>The unique key of the import sink.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>The type of import resource sent to this import sink.
     * You can only send one resource type per import sink.</p>
     *
     * @return null|string
     */
    public function getResourceType();

    /**
     * <p>The version of this resource.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * <p>When the import sink was created.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>When the import sink was modified.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    public function setKey(?string $key): void;

    public function setResourceType(?string $resourceType): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;
}
