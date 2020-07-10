<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Errors;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ConcurrentModificationError>
 */
final class ConcurrentModificationErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * @var ?int
     */
    private $specifiedVersion;

    /**
     * @var ?int
     */
    private $currentVersion;

    /**
     * @var ?JsonObject
     */
    private $conflictedResource;

    /**
     * <p>The error's description.</p>
     *
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>The version specified in the failed request.</p>
     *
     * @return null|int
     */
    public function getSpecifiedVersion()
    {
        return $this->specifiedVersion;
    }

    /**
     * <p>The current version of the resource.</p>
     *
     * @return null|int
     */
    public function getCurrentVersion()
    {
        return $this->currentVersion;
    }

    /**
     * <p>The conflicted resource.</p>
     *
     * @return null|JsonObject
     */
    public function getConflictedResource()
    {
        return $this->conflictedResource;
    }

    /**
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSpecifiedVersion(?int $specifiedVersion)
    {
        $this->specifiedVersion = $specifiedVersion;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCurrentVersion(?int $currentVersion)
    {
        $this->currentVersion = $currentVersion;

        return $this;
    }

    /**
     * @return $this
     */
    public function withConflictedResource(?JsonObject $conflictedResource)
    {
        $this->conflictedResource = $conflictedResource;

        return $this;
    }


    public function build(): ConcurrentModificationError
    {
        return new ConcurrentModificationErrorModel(
            $this->message,
            $this->specifiedVersion,
            $this->currentVersion,
            $this->conflictedResource
        );
    }

    public static function of(): ConcurrentModificationErrorBuilder
    {
        return new self();
    }
}
