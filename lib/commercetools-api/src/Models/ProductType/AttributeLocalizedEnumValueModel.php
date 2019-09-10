<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class AttributeLocalizedEnumValueModel extends JsonObjectModel implements AttributeLocalizedEnumValue
{
    /**
     * @var ?LocalizedString
     */
    protected $label;

    /**
     * @var ?string
     */
    protected $key;

    public function __construct(
        LocalizedString $label = null,
        string $key = null
    ) {
        $this->label = $label;
        $this->key = $key;
    }

    /**
     * @return null|LocalizedString
     */
    public function getLabel()
    {
        if (is_null($this->label)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(AttributeLocalizedEnumValue::FIELD_LABEL);
            if (is_null($data)) {
                return null;
            }

            $this->label = LocalizedStringModel::of($data);
        }

        return $this->label;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(AttributeLocalizedEnumValue::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    public function setLabel(?LocalizedString $label): void
    {
        $this->label = $label;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }
}