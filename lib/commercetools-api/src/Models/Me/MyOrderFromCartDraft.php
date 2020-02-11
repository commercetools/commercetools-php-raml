<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface MyOrderFromCartDraft extends JsonObject
{

    public const FIELD_ID = 'id';
    public const FIELD_VERSION = 'version';

    /**
     * <p>The unique ID of the cart from which an order is created.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @return null|int
     */
    public function getVersion();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;
}
