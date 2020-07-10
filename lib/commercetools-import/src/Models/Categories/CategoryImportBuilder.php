<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Categories;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;
use Models\Common\AssetCollection;
use Models\Common\CategoryKeyReference;
use Models\Common\CategoryKeyReferenceBuilder;
use Models\Common\ImportResource;
use Models\Common\ImportResourceBuilder;
use Models\Common\LocalizedString;
use Models\Common\LocalizedStringBuilder;
use Models\Customfields\Custom;
use Models\Customfields\CustomBuilder;

/**
 * @implements Builder<CategoryImport>
 */
final class CategoryImportBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $slug;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $description;

    /**
     * @var null|CategoryKeyReference|CategoryKeyReferenceBuilder
     */
    private $parent;

    /**
     * @var ?string
     */
    private $orderHint;

    /**
     * @var ?string
     */
    private $externalId;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $metaTitle;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $metaDescription;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $metaKeywords;

    /**
     * @var ?AssetCollection
     */
    private $assets;

    /**
     * @var null|Custom|CustomBuilder
     */
    private $custom;

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Maps to <code>Category.name</code>.</p>
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>Maps to <code>Category.slug</code>.
     * Must match the pattern <code>[-a-zA-Z0-9_]{2,256}</code>.</p>
     *
     * @return null|LocalizedString
     */
    public function getSlug()
    {
        return $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug;
    }

    /**
     * <p>Maps to <code>Category.description</code>.</p>
     *
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * <p>Maps to <code>Category.parent</code>.
     * The parent category referenced must already exist
     * in the commercetools project, or the import operation
     * will have an <code>Unresolved</code> state.</p>
     *
     * @return null|CategoryKeyReference
     */
    public function getParent()
    {
        return $this->parent instanceof CategoryKeyReferenceBuilder ? $this->parent->build() : $this->parent;
    }

    /**
     * <p>Maps to <code>Category.orderHint</code>.</p>
     *
     * @return null|string
     */
    public function getOrderHint()
    {
        return $this->orderHint;
    }

    /**
     * <p>Maps to <code>Category.externalId</code>.</p>
     *
     * @return null|string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * <p>Maps to <code>Category.metaTitle</code>.</p>
     *
     * @return null|LocalizedString
     */
    public function getMetaTitle()
    {
        return $this->metaTitle instanceof LocalizedStringBuilder ? $this->metaTitle->build() : $this->metaTitle;
    }

    /**
     * <p>Maps to <code>Category.metaDescription</code>.</p>
     *
     * @return null|LocalizedString
     */
    public function getMetaDescription()
    {
        return $this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription;
    }

    /**
     * <p>Maps to <code>Category.metaKeywords</code>.</p>
     *
     * @return null|LocalizedString
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords instanceof LocalizedStringBuilder ? $this->metaKeywords->build() : $this->metaKeywords;
    }

    /**
     * @return null|AssetCollection
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * <p>The custom fields for this category.</p>
     *
     * @return null|Custom
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSlug(?LocalizedString $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDescription(?LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return $this
     */
    public function withParent(?CategoryKeyReference $parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOrderHint(?string $orderHint)
    {
        $this->orderHint = $orderHint;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMetaTitle(?LocalizedString $metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMetaDescription(?LocalizedString $metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMetaKeywords(?LocalizedString $metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAssets(?AssetCollection $assets)
    {
        $this->assets = $assets;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustom(?Custom $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSlugBuilder(?LocalizedStringBuilder $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDescriptionBuilder(?LocalizedStringBuilder $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return $this
     */
    public function withParentBuilder(?CategoryKeyReferenceBuilder $parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMetaTitleBuilder(?LocalizedStringBuilder $metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMetaDescriptionBuilder(?LocalizedStringBuilder $metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMetaKeywordsBuilder(?LocalizedStringBuilder $metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomBuilder(?CustomBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): CategoryImport
    {
        return new CategoryImportModel(
            $this->key,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug,
            $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description,
            $this->parent instanceof CategoryKeyReferenceBuilder ? $this->parent->build() : $this->parent,
            $this->orderHint,
            $this->externalId,
            $this->metaTitle instanceof LocalizedStringBuilder ? $this->metaTitle->build() : $this->metaTitle,
            $this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription,
            $this->metaKeywords instanceof LocalizedStringBuilder ? $this->metaKeywords->build() : $this->metaKeywords,
            $this->assets,
            $this->custom instanceof CustomBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): CategoryImportBuilder
    {
        return new self();
    }
}
