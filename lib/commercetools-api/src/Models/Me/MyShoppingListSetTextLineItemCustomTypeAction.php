<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;

interface MyShoppingListSetTextLineItemCustomTypeAction extends MyShoppingListUpdateAction
{

    public const FIELD_TEXT_LINE_ITEM_ID = 'textLineItemId';
    public const FIELD_TYPE = 'type';
    public const FIELD_FIELDS = 'fields';

    /**
     * @return null|string
     */
    public function getTextLineItemId();

    /**
     * @return null|TypeResourceIdentifier
     */
    public function getType();

    /**
     * @return null|FieldContainer
     */
    public function getFields();

    public function setTextLineItemId(?string $textLineItemId): void;

    public function setType(?TypeResourceIdentifier $type): void;

    public function setFields(?FieldContainer $fields): void;
}
