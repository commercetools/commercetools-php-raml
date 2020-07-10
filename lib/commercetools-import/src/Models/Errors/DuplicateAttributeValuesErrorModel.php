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

use Models\Productvariants\AttributeCollection;

/**
 * @internal
 */
final class DuplicateAttributeValuesErrorModel extends JsonObjectModel implements DuplicateAttributeValuesError
{
    public const DISCRIMINATOR_VALUE = 'DuplicateAttributeValues';
    /**
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?AttributeCollection
     */
    protected $attributes;


    public function __construct(
        string $message = null,
        AttributeCollection $attributes = null
    ) {
        $this->message = $message;
        $this->attributes = $attributes;
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
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(DuplicateAttributeValuesError::FIELD_ATTRIBUTES);
            if (is_null($data)) {
                return null;
            }
            $this->attributes = AttributeCollection::fromArray($data);
        }

        return $this->attributes;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function setAttributes(?AttributeCollection $attributes): void
    {
        $this->attributes = $attributes;
    }



}
