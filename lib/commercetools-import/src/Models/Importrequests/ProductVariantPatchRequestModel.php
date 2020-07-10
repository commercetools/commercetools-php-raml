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

use Models\Productvariants\ProductVariantPatchCollection;

/**
 * @internal
 */
final class ProductVariantPatchRequestModel extends JsonObjectModel implements ProductVariantPatchRequest
{
    public const DISCRIMINATOR_VALUE = 'product-variant-patch';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?ProductVariantPatchCollection
     */
    protected $patches;


    public function __construct(
        ProductVariantPatchCollection $patches = null
    ) {
        $this->patches = $patches;
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
     * <p>The product variant patches of this request.</p>
     *
     * @return null|ProductVariantPatchCollection
     */
    public function getPatches()
    {
        if (is_null($this->patches)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductVariantPatchRequest::FIELD_PATCHES);
            if (is_null($data)) {
                return null;
            }
            $this->patches = ProductVariantPatchCollection::fromArray($data);
        }

        return $this->patches;
    }

    public function setPatches(?ProductVariantPatchCollection $patches): void
    {
        $this->patches = $patches;
    }



}
