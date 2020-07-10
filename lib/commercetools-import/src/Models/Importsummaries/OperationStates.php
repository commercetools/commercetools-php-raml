<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importsummaries;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;

interface OperationStates extends JsonObject
{

    public const FIELD_ACCEPTED = 'Accepted';
    public const FIELD_VALIDATION_FAILED = 'ValidationFailed';
    public const FIELD_UNRESOLVED = 'Unresolved';
    public const FIELD_RESOLVED = 'Resolved';
    public const FIELD_WAIT_FOR_MASTER_VARIANT = 'WaitForMasterVariant';
    public const FIELD_IMPORTED = 'Imported';
    public const FIELD_DELETED = 'Deleted';
    public const FIELD_REJECTED = 'Rejected';
    public const FIELD_SKIPPED = 'Skipped';
    public const FIELD_EXPIRED = 'Expired';

    /**
     * <p>The number of import operations that are in the state <code>Accepted</code>.</p>
     *
     * @return null|int
     */
    public function getAccepted();

    /**
     * <p>The number of import operations that are in the state <code>ValidationFailed</code>.</p>
     *
     * @return null|int
     */
    public function getValidationFailed();

    /**
     * <p>The number of import operations that are in the state <code>Unresolved</code>.</p>
     *
     * @return null|int
     */
    public function getUnresolved();

    /**
     * <p>The number of import operations that are in the state <code>Resolved</code>.</p>
     *
     * @return null|int
     */
    public function getResolved();

    /**
     * <p>The number of import operations that are in the state <code>WaitForMasterVariant</code>.</p>
     *
     * @return null|int
     */
    public function getWaitForMasterVariant();

    /**
     * <p>The number of import operations that are in the state <code>Imported</code>.</p>
     *
     * @return null|int
     */
    public function getImported();

    /**
     * <p>The number of import operations that are in the state <code>Deleted</code>.</p>
     *
     * @return null|int
     */
    public function getDeleted();

    /**
     * <p>The number of import operations that are in the state <code>Rejected</code>.</p>
     *
     * @return null|int
     */
    public function getRejected();

    /**
     * <p>The number of import operations that are in the state <code>Skipped</code>.</p>
     *
     * @return null|int
     */
    public function getSkipped();

    /**
     * <p>The number of import operations that are in the state <code>Expired</code>.</p>
     *
     * @return null|int
     */
    public function getExpired();

    public function setAccepted(?int $Accepted): void;

    public function setValidationFailed(?int $ValidationFailed): void;

    public function setUnresolved(?int $Unresolved): void;

    public function setResolved(?int $Resolved): void;

    public function setWaitForMasterVariant(?int $WaitForMasterVariant): void;

    public function setImported(?int $Imported): void;

    public function setDeleted(?int $Deleted): void;

    public function setRejected(?int $Rejected): void;

    public function setSkipped(?int $Skipped): void;

    public function setExpired(?int $Expired): void;
}
