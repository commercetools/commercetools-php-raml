<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importsummaries;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OperationStates>
 */
final class OperationStatesBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $Accepted;

    /**
     * @var ?int
     */
    private $ValidationFailed;

    /**
     * @var ?int
     */
    private $Unresolved;

    /**
     * @var ?int
     */
    private $Resolved;

    /**
     * @var ?int
     */
    private $WaitForMasterVariant;

    /**
     * @var ?int
     */
    private $Imported;

    /**
     * @var ?int
     */
    private $Deleted;

    /**
     * @var ?int
     */
    private $Rejected;

    /**
     * @var ?int
     */
    private $Skipped;

    /**
     * @var ?int
     */
    private $Expired;

    /**
     * <p>The number of import operations that are in the state <code>Accepted</code>.</p>
     *
     * @return null|int
     */
    public function getAccepted()
    {
        return $this->Accepted;
    }

    /**
     * <p>The number of import operations that are in the state <code>ValidationFailed</code>.</p>
     *
     * @return null|int
     */
    public function getValidationFailed()
    {
        return $this->ValidationFailed;
    }

    /**
     * <p>The number of import operations that are in the state <code>Unresolved</code>.</p>
     *
     * @return null|int
     */
    public function getUnresolved()
    {
        return $this->Unresolved;
    }

    /**
     * <p>The number of import operations that are in the state <code>Resolved</code>.</p>
     *
     * @return null|int
     */
    public function getResolved()
    {
        return $this->Resolved;
    }

    /**
     * <p>The number of import operations that are in the state <code>WaitForMasterVariant</code>.</p>
     *
     * @return null|int
     */
    public function getWaitForMasterVariant()
    {
        return $this->WaitForMasterVariant;
    }

    /**
     * <p>The number of import operations that are in the state <code>Imported</code>.</p>
     *
     * @return null|int
     */
    public function getImported()
    {
        return $this->Imported;
    }

    /**
     * <p>The number of import operations that are in the state <code>Deleted</code>.</p>
     *
     * @return null|int
     */
    public function getDeleted()
    {
        return $this->Deleted;
    }

    /**
     * <p>The number of import operations that are in the state <code>Rejected</code>.</p>
     *
     * @return null|int
     */
    public function getRejected()
    {
        return $this->Rejected;
    }

    /**
     * <p>The number of import operations that are in the state <code>Skipped</code>.</p>
     *
     * @return null|int
     */
    public function getSkipped()
    {
        return $this->Skipped;
    }

    /**
     * <p>The number of import operations that are in the state <code>Expired</code>.</p>
     *
     * @return null|int
     */
    public function getExpired()
    {
        return $this->Expired;
    }

    /**
     * @return $this
     */
    public function withAccepted(?int $Accepted)
    {
        $this->Accepted = $Accepted;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValidationFailed(?int $ValidationFailed)
    {
        $this->ValidationFailed = $ValidationFailed;

        return $this;
    }

    /**
     * @return $this
     */
    public function withUnresolved(?int $Unresolved)
    {
        $this->Unresolved = $Unresolved;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResolved(?int $Resolved)
    {
        $this->Resolved = $Resolved;

        return $this;
    }

    /**
     * @return $this
     */
    public function withWaitForMasterVariant(?int $WaitForMasterVariant)
    {
        $this->WaitForMasterVariant = $WaitForMasterVariant;

        return $this;
    }

    /**
     * @return $this
     */
    public function withImported(?int $Imported)
    {
        $this->Imported = $Imported;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDeleted(?int $Deleted)
    {
        $this->Deleted = $Deleted;

        return $this;
    }

    /**
     * @return $this
     */
    public function withRejected(?int $Rejected)
    {
        $this->Rejected = $Rejected;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSkipped(?int $Skipped)
    {
        $this->Skipped = $Skipped;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExpired(?int $Expired)
    {
        $this->Expired = $Expired;

        return $this;
    }


    public function build(): OperationStates
    {
        return new OperationStatesModel(
            $this->Accepted,
            $this->ValidationFailed,
            $this->Unresolved,
            $this->Resolved,
            $this->WaitForMasterVariant,
            $this->Imported,
            $this->Deleted,
            $this->Rejected,
            $this->Skipped,
            $this->Expired
        );
    }

    public static function of(): OperationStatesBuilder
    {
        return new self();
    }
}
