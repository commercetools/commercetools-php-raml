<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Errors;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;

interface InvalidFieldError extends ErrorObject
{

    public const FIELD_FIELD = 'field';
    public const FIELD_INVALID_VALUE = 'invalidValue';
    public const FIELD_ALLOWED_VALUES = 'allowedValues';

    /**
     * <p>The name of the field.</p>
     *
     * @return null|string
     */
    public function getField();

    /**
     * <p>The invalid value.</p>
     *
     * @return null|JsonObject
     */
    public function getInvalidValue();

    /**
     * <p>A fixed set of allowed values for the field, if any.</p>
     *
     * @return null|array
     */
    public function getAllowedValues();

    public function setField(?string $field): void;

    public function setInvalidValue(?JsonObject $invalidValue): void;

    public function setAllowedValues(?array $allowedValues): void;
}
