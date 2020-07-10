<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importrequests;

use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

use Models\Prices\PriceImportCollection;

/**
 * @internal
 */
final class PriceImportRequestModel extends JsonObjectModel implements PriceImportRequest
{
    public const DISCRIMINATOR_VALUE = 'price';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?PriceImportCollection
     */
    protected $resources;


    public function __construct(
        PriceImportCollection $resources = null
    ) {
        $this->resources = $resources;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>The type of the import resource.</p>
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportRequest::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The price import resources of this request.</p>
     *
     * @return null|PriceImportCollection
     */
    public function getResources()
    {
        if (is_null($this->resources)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(PriceImportRequest::FIELD_RESOURCES);
            if (is_null($data)) {
                return null;
            }
            $this->resources = PriceImportCollection::fromArray($data);
        }

        return $this->resources;
    }

    public function setResources(?PriceImportCollection $resources): void
    {
        $this->resources = $resources;
    }



}
