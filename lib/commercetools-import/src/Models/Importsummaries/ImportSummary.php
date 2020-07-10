<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importsummaries;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;

interface ImportSummary extends JsonObject
{

    public const FIELD_STATES = 'states';
    public const FIELD_TOTAL = 'total';

    /**
     * <p>The states summary for this import summary.</p>
     *
     * @return null|OperationStates
     */
    public function getStates();

    /**
     * <p>The total number of import operations received for this import group.</p>
     *
     * @return null|int
     */
    public function getTotal();

    public function setStates(?OperationStates $states): void;

    public function setTotal(?int $total): void;
}
