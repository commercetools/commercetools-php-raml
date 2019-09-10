<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Zone\ZoneResourceIdentifier;
use Commercetools\Api\Models\Zone\ZoneResourceIdentifierModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ShippingMethodAddZoneActionModel extends JsonObjectModel implements ShippingMethodAddZoneAction
{
    const DISCRIMINATOR_VALUE = 'addZone';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?ZoneResourceIdentifier
     */
    protected $zone;

    public function __construct(
        string $action = null,
        ZoneResourceIdentifier $zone = null
    ) {
        $this->action = $action;
        $this->zone = $zone;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShippingMethodUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|ZoneResourceIdentifier
     */
    public function getZone()
    {
        if (is_null($this->zone)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ShippingMethodAddZoneAction::FIELD_ZONE);
            if (is_null($data)) {
                return null;
            }

            $this->zone = ZoneResourceIdentifierModel::of($data);
        }

        return $this->zone;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setZone(?ZoneResourceIdentifier $zone): void
    {
        $this->zone = $zone;
    }
}