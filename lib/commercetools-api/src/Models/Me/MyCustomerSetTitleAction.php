<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCustomerSetTitleAction extends MyCustomerUpdateAction
{
    public const FIELD_TITLE = 'title';

    /**
     * @return null|string
     */
    public function getTitle();

    public function setTitle(?string $title): void;
}
