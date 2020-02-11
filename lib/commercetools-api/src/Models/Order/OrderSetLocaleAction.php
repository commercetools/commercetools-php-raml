<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface OrderSetLocaleAction extends OrderUpdateAction
{

    public const FIELD_LOCALE = 'locale';

    /**
     * @return null|string
     */
    public function getLocale();

    public function setLocale(?string $locale): void;
}
