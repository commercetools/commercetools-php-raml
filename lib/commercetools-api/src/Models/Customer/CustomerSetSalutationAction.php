<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CustomerSetSalutationAction extends CustomerUpdateAction
{

    public const FIELD_SALUTATION = 'salutation';

    /**
     * @return null|string
     */
    public function getSalutation();

    public function setSalutation(?string $salutation): void;
}
