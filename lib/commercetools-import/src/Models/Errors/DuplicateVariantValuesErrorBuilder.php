<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Errors;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DuplicateVariantValuesError>
 */
final class DuplicateVariantValuesErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * @var null|VariantValues|VariantValuesBuilder
     */
    private $variantValues;

    /**
     * <p>The error's description.</p>
     *
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>The offending variant values.</p>
     *
     * @return null|VariantValues
     */
    public function getVariantValues()
    {
        return $this->variantValues instanceof VariantValuesBuilder ? $this->variantValues->build() : $this->variantValues;
    }

    /**
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVariantValues(?VariantValues $variantValues)
    {
        $this->variantValues = $variantValues;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVariantValuesBuilder(?VariantValuesBuilder $variantValues)
    {
        $this->variantValues = $variantValues;

        return $this;
    }

    public function build(): DuplicateVariantValuesError
    {
        return new DuplicateVariantValuesErrorModel(
            $this->message,
            $this->variantValues instanceof VariantValuesBuilder ? $this->variantValues->build() : $this->variantValues
        );
    }

    public static function of(): DuplicateVariantValuesErrorBuilder
    {
        return new self();
    }
}
