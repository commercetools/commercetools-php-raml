<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MissingAttributesSearchRequestModel extends JsonObjectModel implements MissingAttributesSearchRequest
{
    /**
     * @var ?int
     */
    protected $limit;

    /**
     * @var ?int
     */
    protected $offset;

    /**
     * @var ?bool
     */
    protected $staged;

    /**
     * @var ?int
     */
    protected $productSetLimit;

    /**
     * @var ?bool
     */
    protected $includeVariants;

    /**
     * @var ?int
     */
    protected $coverageMin;

    /**
     * @var ?int
     */
    protected $coverageMax;

    /**
     * @var ?string
     */
    protected $sortBy;

    /**
     * @var ?bool
     */
    protected $showMissingAttributeNames;

    /**
     * @var ?array
     */
    protected $productIds;

    /**
     * @var ?array
     */
    protected $productTypeIds;

    /**
     * @var ?string
     */
    protected $attributeName;


    public function __construct(
        int $limit = null,
        int $offset = null,
        bool $staged = null,
        int $productSetLimit = null,
        bool $includeVariants = null,
        int $coverageMin = null,
        int $coverageMax = null,
        string $sortBy = null,
        bool $showMissingAttributeNames = null,
        array $productIds = null,
        array $productTypeIds = null,
        string $attributeName = null
    ) {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->staged = $staged;
        $this->productSetLimit = $productSetLimit;
        $this->includeVariants = $includeVariants;
        $this->coverageMin = $coverageMin;
        $this->coverageMax = $coverageMax;
        $this->sortBy = $sortBy;
        $this->showMissingAttributeNames = $showMissingAttributeNames;
        $this->productIds = $productIds;
        $this->productTypeIds = $productTypeIds;
        $this->attributeName = $attributeName;
    }

    /**
     * @return null|int
     */
    public function getLimit()
    {
        if (is_null($this->limit)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MissingAttributesSearchRequest::FIELD_LIMIT);
            if (is_null($data)) {
                return null;
            }
            $this->limit = (int) $data;
        }

        return $this->limit;
    }

    /**
     * @return null|int
     */
    public function getOffset()
    {
        if (is_null($this->offset)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MissingAttributesSearchRequest::FIELD_OFFSET);
            if (is_null($data)) {
                return null;
            }
            $this->offset = (int) $data;
        }

        return $this->offset;
    }

    /**
     * <p>If true, searches data from staged products in addition to published products.</p>
     *
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(MissingAttributesSearchRequest::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    /**
     * <p>Maximum number of products to scan.</p>
     *
     * @return null|int
     */
    public function getProductSetLimit()
    {
        if (is_null($this->productSetLimit)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MissingAttributesSearchRequest::FIELD_PRODUCT_SET_LIMIT);
            if (is_null($data)) {
                return null;
            }
            $this->productSetLimit = (int) $data;
        }

        return $this->productSetLimit;
    }

    /**
     * <p>If true, searches all product variants. If false, only searches master variants.</p>
     *
     * @return null|bool
     */
    public function getIncludeVariants()
    {
        if (is_null($this->includeVariants)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(MissingAttributesSearchRequest::FIELD_INCLUDE_VARIANTS);
            if (is_null($data)) {
                return null;
            }
            $this->includeVariants = (bool) $data;
        }

        return $this->includeVariants;
    }

    /**
     * <p>Minimum attribute coverage of variants to display, applied to both coverage types.</p>
     *
     * @return null|int
     */
    public function getCoverageMin()
    {
        if (is_null($this->coverageMin)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MissingAttributesSearchRequest::FIELD_COVERAGE_MIN);
            if (is_null($data)) {
                return null;
            }
            $this->coverageMin = (int) $data;
        }

        return $this->coverageMin;
    }

    /**
     * <p>Maximum attribute coverage of variants to display, applied to both coverage types.</p>
     *
     * @return null|int
     */
    public function getCoverageMax()
    {
        if (is_null($this->coverageMax)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MissingAttributesSearchRequest::FIELD_COVERAGE_MAX);
            if (is_null($data)) {
                return null;
            }
            $this->coverageMax = (int) $data;
        }

        return $this->coverageMax;
    }

    /**
     * <p>Default value: <code>coverageAttributeValues</code> - Allowed values: [<code>coverageAttributeValues</code>, <code>coverageAttributeNames</code>]
     * <code>coverageAttributeValues</code> shows the product variants with the most missing attribute values first and <code>coverageAttributeNames</code> the ones with the most missing attribute names.</p>
     *
     * @return null|string
     */
    public function getSortBy()
    {
        if (is_null($this->sortBy)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MissingAttributesSearchRequest::FIELD_SORT_BY);
            if (is_null($data)) {
                return null;
            }
            $this->sortBy = (string) $data;
        }

        return $this->sortBy;
    }

    /**
     * <p>If true, the <code>missingAttributeNames</code> will be included in the results.</p>
     *
     * @return null|bool
     */
    public function getShowMissingAttributeNames()
    {
        if (is_null($this->showMissingAttributeNames)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(MissingAttributesSearchRequest::FIELD_SHOW_MISSING_ATTRIBUTE_NAMES);
            if (is_null($data)) {
                return null;
            }
            $this->showMissingAttributeNames = (bool) $data;
        }

        return $this->showMissingAttributeNames;
    }

    /**
     * <p>Filters results by the provided Product IDs.
     * Cannot be applied in combination with any other filter.</p>
     *
     * @return null|array
     */
    public function getProductIds()
    {
        if (is_null($this->productIds)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(MissingAttributesSearchRequest::FIELD_PRODUCT_IDS);
            if (is_null($data)) {
                return null;
            }
            $this->productIds = $data;
        }

        return $this->productIds;
    }

    /**
     * <p>Filters results by the provided product type IDs.
     * Cannot be applied in combination with any other filter.</p>
     *
     * @return null|array
     */
    public function getProductTypeIds()
    {
        if (is_null($this->productTypeIds)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(MissingAttributesSearchRequest::FIELD_PRODUCT_TYPE_IDS);
            if (is_null($data)) {
                return null;
            }
            $this->productTypeIds = $data;
        }

        return $this->productTypeIds;
    }

    /**
     * <p>Filters results by the provided attribute name. If provided,  products are only checked for this attribute. Therefore, only products of product types which define the attribute name are considered. These product type IDs
     * are then listed in <code>MissingAttributesMeta</code>. The  <code>attributeCount</code> and <code>attributeCoverage</code> fields are not part of the response when using this filter. Cannot be applied in combination with any other filter.</p>
     *
     * @return null|string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MissingAttributesSearchRequest::FIELD_ATTRIBUTE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->attributeName = (string) $data;
        }

        return $this->attributeName;
    }

    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }

    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    public function setProductSetLimit(?int $productSetLimit): void
    {
        $this->productSetLimit = $productSetLimit;
    }

    public function setIncludeVariants(?bool $includeVariants): void
    {
        $this->includeVariants = $includeVariants;
    }

    public function setCoverageMin(?int $coverageMin): void
    {
        $this->coverageMin = $coverageMin;
    }

    public function setCoverageMax(?int $coverageMax): void
    {
        $this->coverageMax = $coverageMax;
    }

    public function setSortBy(?string $sortBy): void
    {
        $this->sortBy = $sortBy;
    }

    public function setShowMissingAttributeNames(?bool $showMissingAttributeNames): void
    {
        $this->showMissingAttributeNames = $showMissingAttributeNames;
    }

    public function setProductIds(?array $productIds): void
    {
        $this->productIds = $productIds;
    }

    public function setProductTypeIds(?array $productTypeIds): void
    {
        $this->productTypeIds = $productTypeIds;
    }

    public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }
}
