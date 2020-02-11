<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\TypedMoneyCollection;

final class ProductDiscountValueAbsoluteModel extends JsonObjectModel implements ProductDiscountValueAbsolute
{
    public const DISCRIMINATOR_VALUE = 'absolute';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?TypedMoneyCollection
     */
    protected $money;


    public function __construct(
        TypedMoneyCollection $money = null
    ) {
        $this->money = $money;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductDiscountValue::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|TypedMoneyCollection
     */
    public function getMoney()
    {
        if (is_null($this->money)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductDiscountValueAbsolute::FIELD_MONEY);
            if (is_null($data)) {
                return null;
            }
            $this->money = TypedMoneyCollection::fromArray($data);
        }

        return $this->money;
    }

    public function setMoney(?TypedMoneyCollection $money): void
    {
        $this->money = $money;
    }



}
