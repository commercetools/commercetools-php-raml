<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ShippingMethodUpdateActionModel extends JsonObjectModel implements ShippingMethodUpdateAction
{
    const DISCRIMINATOR_VALUE = '';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<ShippingMethodUpdateAction> >
     */
    private static $discriminatorClasses = [
        'addShippingRate' => ShippingMethodAddShippingRateActionModel::class,
        'addZone' => ShippingMethodAddZoneActionModel::class,
        'changeIsDefault' => ShippingMethodChangeIsDefaultActionModel::class,
        'changeName' => ShippingMethodChangeNameActionModel::class,
        'changeTaxCategory' => ShippingMethodChangeTaxCategoryActionModel::class,
        'removeShippingRate' => ShippingMethodRemoveShippingRateActionModel::class,
        'removeZone' => ShippingMethodRemoveZoneActionModel::class,
        'setDescription' => ShippingMethodSetDescriptionActionModel::class,
        'setKey' => ShippingMethodSetKeyActionModel::class,
        'setPredicate' => ShippingMethodSetPredicateActionModel::class,
    ];

    public function __construct(
        string $action = null
    ) {
        $this->action = $action;
        $this->action = static::DISCRIMINATOR_VALUE;
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

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<ShippingMethodUpdateAction>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = ShippingMethodUpdateAction::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->{$fieldName})) {
            /** @var string $discriminatorValue */
            $discriminatorValue = $value->{$fieldName};
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<ShippingMethodUpdateAction> */
        $type = ShippingMethodUpdateActionModel::class;

        return $type;
    }
}