<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use DateTimeImmutable;

interface MyCustomerSetDateOfBirthAction extends MyCustomerUpdateAction
{

    public const FIELD_DATE_OF_BIRTH = 'dateOfBirth';

    /**
     * @return null|DateTimeImmutable
     */
    public function getDateOfBirth();

    public function setDateOfBirth(?DateTimeImmutable $dateOfBirth): void;
}
