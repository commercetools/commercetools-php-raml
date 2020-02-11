<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ShoppingListUpdateModel extends JsonObjectModel implements ShoppingListUpdate
{

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?ShoppingListUpdateActionCollection
     */
    protected $actions;


    public function __construct(
        int $version = null,
        ShoppingListUpdateActionCollection $actions = null
    ) {
        $this->version = $version;
        $this->actions = $actions;

    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ShoppingListUpdate::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * @return null|ShoppingListUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ShoppingListUpdate::FIELD_ACTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->actions = ShoppingListUpdateActionCollection::fromArray($data);
        }

        return $this->actions;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function setActions(?ShoppingListUpdateActionCollection $actions): void
    {
        $this->actions = $actions;
    }



}
