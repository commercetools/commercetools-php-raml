<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface LocalizedLabel extends Label
{

    public const FIELD_VALUE = 'value';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|LocalizedString
     */
    public function getValue();

    /**
     * @param ?LocalizedString $value
     */
    public function setValue(?LocalizedString $value): void;
}
