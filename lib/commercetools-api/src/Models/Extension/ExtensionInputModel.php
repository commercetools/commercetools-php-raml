<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Base\MapperFactory;
use stdClass;

final class ExtensionInputModel extends JsonObjectModel implements ExtensionInput
{
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?Reference
     */
    protected $resource;


    public function __construct(
        string $action = null,
        Reference $resource = null
    ) {
        $this->action = $action;
        $this->resource = $resource;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ExtensionInput::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|Reference
     */
    public function getResource()
    {
        if (is_null($this->resource)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ExtensionInput::FIELD_RESOURCE);
            if (is_null($data)) {
                return null;
            }
            $className = ReferenceModel::resolveDiscriminatorClass($data);
            $this->resource = $className::of($data);
        }

        return $this->resource;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setResource(?Reference $resource): void
    {
        $this->resource = $resource;
    }
}
