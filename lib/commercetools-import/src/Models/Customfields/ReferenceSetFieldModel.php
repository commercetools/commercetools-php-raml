<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Customfields;

use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

use Models\Common\KeyReferenceCollection;

/**
 * @internal
 */
final class ReferenceSetFieldModel extends JsonObjectModel implements ReferenceSetField
{
    public const DISCRIMINATOR_VALUE = 'ReferenceSet';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?KeyReferenceCollection
     */
    protected $value;


    public function __construct(
        KeyReferenceCollection $value = null
    ) {
        $this->value = $value;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>The type of this field.</p>
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomField::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|KeyReferenceCollection
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ReferenceSetField::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = KeyReferenceCollection::fromArray($data);
        }

        return $this->value;
    }

    public function setValue(?KeyReferenceCollection $value): void
    {
        $this->value = $value;
    }



}
