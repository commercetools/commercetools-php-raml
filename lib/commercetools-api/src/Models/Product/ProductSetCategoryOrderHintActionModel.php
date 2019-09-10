<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObjectModel;

final class ProductSetCategoryOrderHintActionModel extends JsonObjectModel implements ProductSetCategoryOrderHintAction
{
    const DISCRIMINATOR_VALUE = 'setCategoryOrderHint';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $orderHint;

    /**
     * @var ?bool
     */
    protected $staged;

    /**
     * @var ?string
     */
    protected $categoryId;

    public function __construct(
        string $action = null,
        string $orderHint = null,
        bool $staged = null,
        string $categoryId = null
    ) {
        $this->action = $action;
        $this->orderHint = $orderHint;
        $this->staged = $staged;
        $this->categoryId = $categoryId;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getOrderHint()
    {
        if (is_null($this->orderHint)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductSetCategoryOrderHintAction::FIELD_ORDER_HINT);
            if (is_null($data)) {
                return null;
            }
            $this->orderHint = (string) $data;
        }

        return $this->orderHint;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ProductSetCategoryOrderHintAction::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    /**
     * @return null|string
     */
    public function getCategoryId()
    {
        if (is_null($this->categoryId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductSetCategoryOrderHintAction::FIELD_CATEGORY_ID);
            if (is_null($data)) {
                return null;
            }
            $this->categoryId = (string) $data;
        }

        return $this->categoryId;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setOrderHint(?string $orderHint): void
    {
        $this->orderHint = $orderHint;
    }

    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    public function setCategoryId(?string $categoryId): void
    {
        $this->categoryId = $categoryId;
    }
}