<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DeliveryPlatformFormat>
 */
final class DeliveryPlatformFormatBuilder implements Builder
{




    public function build(): DeliveryPlatformFormat
    {
        return new DeliveryPlatformFormatModel(
        );
    }

    public static function of(): DeliveryPlatformFormatBuilder
    {
        return new self();
    }
}
