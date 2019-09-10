<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\TaxedPrice;
use Commercetools\Api\Models\Cart\TaxedPriceModel;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class OrderExcerptModel extends JsonObjectModel implements OrderExcerpt
{
    /**
     * @var ?Money
     */
    protected $totalPrice;

    /**
     * @var ?TaxedPrice
     */
    protected $taxedPrice;

    /**
     * @var ?int
     */
    protected $version;

    public function __construct(
        Money $totalPrice = null,
        TaxedPrice $taxedPrice = null,
        int $version = null
    ) {
        $this->totalPrice = $totalPrice;
        $this->taxedPrice = $taxedPrice;
        $this->version = $version;
    }

    /**
     * @return null|Money
     */
    public function getTotalPrice()
    {
        if (is_null($this->totalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderExcerpt::FIELD_TOTAL_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->totalPrice = MoneyModel::of($data);
        }

        return $this->totalPrice;
    }

    /**
     * @return null|TaxedPrice
     */
    public function getTaxedPrice()
    {
        if (is_null($this->taxedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderExcerpt::FIELD_TAXED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->taxedPrice = TaxedPriceModel::of($data);
        }

        return $this->taxedPrice;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(OrderExcerpt::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    public function setTotalPrice(?Money $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    public function setTaxedPrice(?TaxedPrice $taxedPrice): void
    {
        $this->taxedPrice = $taxedPrice;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }
}