<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ChangeValueRelativeActionValue extends ChangeValueActionValue
{

    public const FIELD_PERMYRIAD = 'permyriad';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|int
     */
    public function getPermyriad();

    /**
     * @param ?int $permyriad
     */
    public function setPermyriad(?int $permyriad): void;
}
