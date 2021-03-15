<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface PublishAction extends Action
{


    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|string
     */
    public function getChange();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;
}
