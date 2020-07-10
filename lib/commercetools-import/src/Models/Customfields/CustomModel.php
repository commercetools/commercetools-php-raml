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

use Models\Common\TypeKeyReference;
use Models\Common\TypeKeyReferenceModel;

/**
 * @internal
 */
final class CustomModel extends JsonObjectModel implements Custom
{

    /**
     * @var ?TypeKeyReference
     */
    protected $type;

    /**
     * @var ?FieldContainer
     */
    protected $fields;


    public function __construct(
        TypeKeyReference $type = null,
        FieldContainer $fields = null
    ) {
        $this->type = $type;
        $this->fields = $fields;

    }

    /**
     * <p>The type that provides the field definitions for this object.</p>
     *
     * @return null|TypeKeyReference
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Custom::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->type = TypeKeyReferenceModel::of($data);
        }

        return $this->type;
    }

    /**
     * <p>The custom fields of this object.</p>
     *
     * @return null|FieldContainer
     */
    public function getFields()
    {
        if (is_null($this->fields)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Custom::FIELD_FIELDS);
            if (is_null($data)) {
                return null;
            }

            $this->fields = FieldContainerModel::of($data);
        }

        return $this->fields;
    }

    public function setType(?TypeKeyReference $type): void
    {
        $this->type = $type;
    }

    public function setFields(?FieldContainer $fields): void
    {
        $this->fields = $fields;
    }



}
