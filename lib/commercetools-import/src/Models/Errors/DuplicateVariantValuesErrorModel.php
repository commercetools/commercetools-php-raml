<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Errors;

use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;


/**
 * @internal
 */
final class DuplicateVariantValuesErrorModel extends JsonObjectModel implements DuplicateVariantValuesError
{
    public const DISCRIMINATOR_VALUE = 'DuplicateVariantValues';
    /**
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?VariantValues
     */
    protected $variantValues;


    public function __construct(
        string $message = null,
        VariantValues $variantValues = null
    ) {
        $this->message = $message;
        $this->variantValues = $variantValues;
        $this->code = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * <p>The error's description.</p>
     *
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * <p>The offending variant values.</p>
     *
     * @return null|VariantValues
     */
    public function getVariantValues()
    {
        if (is_null($this->variantValues)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(DuplicateVariantValuesError::FIELD_VARIANT_VALUES);
            if (is_null($data)) {
                return null;
            }

            $this->variantValues = VariantValuesModel::of($data);
        }

        return $this->variantValues;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function setVariantValues(?VariantValues $variantValues): void
    {
        $this->variantValues = $variantValues;
    }



}
