<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use DateTimeImmutable;

interface ProductDiscountDraft extends JsonObject
{

    public const FIELD_NAME = 'name';
    public const FIELD_KEY = 'key';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_VALUE = 'value';
    public const FIELD_PREDICATE = 'predicate';
    public const FIELD_SORT_ORDER = 'sortOrder';
    public const FIELD_IS_ACTIVE = 'isActive';
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';

    /**
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>User-specific unique identifier for a product discount.
     * Must be unique across a project.
     * The field can be reset using the Set Key UpdateAction</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * @return null|ProductDiscountValueDraft
     */
    public function getValue();

    /**
     * <p>A valid ProductDiscount Predicate.</p>
     *
     * @return null|string
     */
    public function getPredicate();

    /**
     * <p>The string must contain a decimal number between 0 and 1.
     * A discount with greater sortOrder is prioritized higher than a discount with lower sortOrder.</p>
     *
     * @return null|string
     */
    public function getSortOrder();

    /**
     * <p>If set to <code>true</code> the discount will be applied to product prices.</p>
     *
     * @return null|bool
     */
    public function getIsActive();

    /**
     * <p>The time from which the discount should be effective.
     * Please take Eventual Consistency into account for calculated product discount values.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>The time from which the discount should be effective.
     * Please take Eventual Consistency into account for calculated undiscounted values.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    public function setName(?LocalizedString $name): void;

    public function setKey(?string $key): void;

    public function setDescription(?LocalizedString $description): void;

    public function setValue(?ProductDiscountValueDraft $value): void;

    public function setPredicate(?string $predicate): void;

    public function setSortOrder(?string $sortOrder): void;

    public function setIsActive(?bool $isActive): void;

    public function setValidFrom(?DateTimeImmutable $validFrom): void;

    public function setValidUntil(?DateTimeImmutable $validUntil): void;
}
