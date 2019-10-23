<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Categories;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Common\AssetCollection;
use Commercetools\Import\Models\Common\CategoryKeyReference;
use Commercetools\Import\Models\Common\CategoryKeyReferenceBuilder;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\LocalizedStringBuilder;

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
     * @var CategoryKeyReference|?CategoryKeyReferenceBuilder
     */
    private $parent;

    /**
     * @var ?AssetCollection
     */
    private $assets;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $metaKeywords;

    /**
     * @var ?string
     */
    private $orderHint;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $metaTitle;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $name;

    /**
     * @var ?string
     */
    private $externalId;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $description;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $metaDescription;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $slug;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Maps to <code>Category.parent</code>.
     * The parent category referenced must already exist
     * in the commercetools project, or the import item
     * will have an <code>Unresolved</code> state.</p>.
     *
     * @return null|CategoryKeyReference
     */
    public function getParent()
    {
        return $this->parent instanceof CategoryKeyReferenceBuilder ? $this->parent->build() : $this->parent;
    }

    /**
     * <p>TODO – https://github.com/commercetools/commercetools-importer/issues/697</p>.
     *
     * @return null|AssetCollection
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * <p>Maps to <code>Category.metaKeywords</code>.</p>.
     *
     * @return null|LocalizedString
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords instanceof LocalizedStringBuilder ? $this->metaKeywords->build() : $this->metaKeywords;
    }

    /**
     * <p>Maps to <code>Category.orderHint</code>.</p>.
     *
     * @return null|string
     */
    public function getOrderHint()
    {
        return $this->orderHint;
    }

    /**
     * <p>Maps to <code>Category.metaTitle</code>.</p>.
     *
     * @return null|LocalizedString
     */
    public function getMetaTitle()
    {
        return $this->metaTitle instanceof LocalizedStringBuilder ? $this->metaTitle->build() : $this->metaTitle;
    }

    /**
     * <p>Maps to <code>Category.name</code>.</p>.
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>Maps to <code>Category.externalId</code>.</p>.
     *
     * @return null|string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * <p>Maps to <code>Category.description</code>.</p>.
     *
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * <p>Maps to <code>Category.metaDescription</code>.</p>.
     *
     * @return null|LocalizedString
     */
    public function getMetaDescription()
    {
        return $this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription;
    }

    /**
     * <p>Maps to <code>Category.slug</code>.
     * Must match the pattern <code>[-a-zA-Z0-9_]{2,256}</code>.</p>.
     *
     * @return null|LocalizedString
     */
    public function getSlug()
    {
        return $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug;
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
    public function withParent(?CategoryKeyReference $parent)
    {
        $this->parent = $parent;

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
    public function withMetaKeywords(?LocalizedString $metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;

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
    public function withMetaTitle(?LocalizedString $metaTitle)
    {
        $this->metaTitle = $metaTitle;

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
    public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;

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
    public function withMetaDescription(?LocalizedString $metaDescription)
    {
        $this->metaDescription = $metaDescription;

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
    public function withParentBuilder(?CategoryKeyReferenceBuilder $parent)
    {
        $this->parent = $parent;

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
    public function withMetaTitleBuilder(?LocalizedStringBuilder $metaTitle)
    {
        $this->metaTitle = $metaTitle;

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
    public function withDescriptionBuilder(?LocalizedStringBuilder $description)
    {
        $this->description = $description;

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
    public function withSlugBuilder(?LocalizedStringBuilder $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    public function build(): CategoryImport
    {
        return new CategoryImportModel(
            $this->key,
            ($this->parent instanceof CategoryKeyReferenceBuilder ? $this->parent->build() : $this->parent),
            $this->assets,
            ($this->metaKeywords instanceof LocalizedStringBuilder ? $this->metaKeywords->build() : $this->metaKeywords),
            $this->orderHint,
            ($this->metaTitle instanceof LocalizedStringBuilder ? $this->metaTitle->build() : $this->metaTitle),
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name),
            $this->externalId,
            ($this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description),
            ($this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription),
            ($this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug)
        );
    }

    public static function of(): CategoryImportBuilder
    {
        return new self();
    }
}