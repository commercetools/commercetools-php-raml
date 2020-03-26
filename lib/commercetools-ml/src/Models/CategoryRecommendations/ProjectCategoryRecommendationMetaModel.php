<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\CategoryRecommendations;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProjectCategoryRecommendationMetaModel extends JsonObjectModel implements ProjectCategoryRecommendationMeta
{
    /**
     * @var ?string
     */
    protected $productName;

    /**
     * @var ?string
     */
    protected $productImageUrl;

    /**
     * @var ?array
     */
    protected $generalCategoryNames;


    public function __construct(
        string $productName = null,
        string $productImageUrl = null,
        array $generalCategoryNames = null
    ) {
        $this->productName = $productName;
        $this->productImageUrl = $productImageUrl;
        $this->generalCategoryNames = $generalCategoryNames;
    }

    /**
     * <p>The product name that was used to generate recommendations.</p>
     *
     * @return null|string
     */
    public function getProductName()
    {
        if (is_null($this->productName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProjectCategoryRecommendationMeta::FIELD_PRODUCT_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->productName = (string) $data;
        }

        return $this->productName;
    }

    /**
     * <p>The product image that was used to generate recommendations.</p>
     *
     * @return null|string
     */
    public function getProductImageUrl()
    {
        if (is_null($this->productImageUrl)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProjectCategoryRecommendationMeta::FIELD_PRODUCT_IMAGE_URL);
            if (is_null($data)) {
                return null;
            }
            $this->productImageUrl = (string) $data;
        }

        return $this->productImageUrl;
    }

    /**
     * <p>Top 5 general categories that were used internally to generate the project-specific categories. These category names are not related to the categories defined in the project, but they provide additional information to understand the project-specific categories in the results section.</p>
     *
     * @return null|array
     */
    public function getGeneralCategoryNames()
    {
        if (is_null($this->generalCategoryNames)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(ProjectCategoryRecommendationMeta::FIELD_GENERAL_CATEGORY_NAMES);
            if (is_null($data)) {
                return null;
            }
            $this->generalCategoryNames = $data;
        }

        return $this->generalCategoryNames;
    }

    public function setProductName(?string $productName): void
    {
        $this->productName = $productName;
    }

    public function setProductImageUrl(?string $productImageUrl): void
    {
        $this->productImageUrl = $productImageUrl;
    }

    public function setGeneralCategoryNames(?array $generalCategoryNames): void
    {
        $this->generalCategoryNames = $generalCategoryNames;
    }
}
