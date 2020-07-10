<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Categories;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;
use Models\Common\AssetCollection;
use Models\Common\CategoryKeyReference;
use Models\Common\ImportResource;
use Models\Common\LocalizedString;
use Models\Customfields\Custom;

interface CategoryImport extends ImportResource
{

    public const FIELD_NAME = 'name';
    public const FIELD_SLUG = 'slug';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_PARENT = 'parent';
    public const FIELD_ORDER_HINT = 'orderHint';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_META_TITLE = 'metaTitle';
    public const FIELD_META_DESCRIPTION = 'metaDescription';
    public const FIELD_META_KEYWORDS = 'metaKeywords';
    public const FIELD_ASSETS = 'assets';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Maps to <code>Category.name</code>.</p>
     *
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Maps to <code>Category.slug</code>.
     * Must match the pattern <code>[-a-zA-Z0-9_]{2,256}</code>.</p>
     *
     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * <p>Maps to <code>Category.description</code>.</p>
     *
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Maps to <code>Category.parent</code>.
     * The parent category referenced must already exist
     * in the commercetools project, or the import operation
     * will have an <code>Unresolved</code> state.</p>
     *
     * @return null|CategoryKeyReference
     */
    public function getParent();

    /**
     * <p>Maps to <code>Category.orderHint</code>.</p>
     *
     * @return null|string
     */
    public function getOrderHint();

    /**
     * <p>Maps to <code>Category.externalId</code>.</p>
     *
     * @return null|string
     */
    public function getExternalId();

    /**
     * <p>Maps to <code>Category.metaTitle</code>.</p>
     *
     * @return null|LocalizedString
     */
    public function getMetaTitle();

    /**
     * <p>Maps to <code>Category.metaDescription</code>.</p>
     *
     * @return null|LocalizedString
     */
    public function getMetaDescription();

    /**
     * <p>Maps to <code>Category.metaKeywords</code>.</p>
     *
     * @return null|LocalizedString
     */
    public function getMetaKeywords();

    /**
     * @return null|AssetCollection
     */
    public function getAssets();

    /**
     * <p>The custom fields for this category.</p>
     *
     * @return null|Custom
     */
    public function getCustom();

    public function setName(?LocalizedString $name): void;

    public function setSlug(?LocalizedString $slug): void;

    public function setDescription(?LocalizedString $description): void;

    public function setParent(?CategoryKeyReference $parent): void;

    public function setOrderHint(?string $orderHint): void;

    public function setExternalId(?string $externalId): void;

    public function setMetaTitle(?LocalizedString $metaTitle): void;

    public function setMetaDescription(?LocalizedString $metaDescription): void;

    public function setMetaKeywords(?LocalizedString $metaKeywords): void;

    public function setAssets(?AssetCollection $assets): void;

    public function setCustom(?Custom $custom): void;
}
