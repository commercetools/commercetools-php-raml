<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface MyCustomerSetFirstNameAction extends MyCustomerUpdateAction
{

    public const FIELD_FIRST_NAME = 'firstName';

    /**
     * @return null|string
     */
    public function getFirstName();

    public function setFirstName(?string $firstName): void;
}
