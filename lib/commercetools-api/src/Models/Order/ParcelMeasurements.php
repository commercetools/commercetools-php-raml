<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;

interface ParcelMeasurements extends JsonObject
{
    const FIELD_HEIGHT_IN_MILLIMETER = 'heightInMillimeter';
    const FIELD_LENGTH_IN_MILLIMETER = 'lengthInMillimeter';
    const FIELD_WIDTH_IN_MILLIMETER = 'widthInMillimeter';
    const FIELD_WEIGHT_IN_GRAM = 'weightInGram';

    /**
     * @return null|int
     */
    public function getHeightInMillimeter();

    /**
     * @return null|int
     */
    public function getLengthInMillimeter();

    /**
     * @return null|int
     */
    public function getWidthInMillimeter();

    /**
     * @return null|int
     */
    public function getWeightInGram();

    public function setHeightInMillimeter(?int $heightInMillimeter): void;

    public function setLengthInMillimeter(?int $lengthInMillimeter): void;

    public function setWidthInMillimeter(?int $widthInMillimeter): void;

    public function setWeightInGram(?int $weightInGram): void;
}