<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface SubscriptionChangeDestinationAction extends SubscriptionUpdateAction
{

    public const FIELD_DESTINATION = 'destination';

    /**
     * @return null|Destination
     */
    public function getDestination();

    public function setDestination(?Destination $destination): void;
}
