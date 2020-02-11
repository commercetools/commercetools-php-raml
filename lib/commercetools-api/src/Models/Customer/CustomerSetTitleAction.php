<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CustomerSetTitleAction extends CustomerUpdateAction
{

    public const FIELD_TITLE = 'title';

    /**
     * @return null|string
     */
    public function getTitle();

    public function setTitle(?string $title): void;
}
