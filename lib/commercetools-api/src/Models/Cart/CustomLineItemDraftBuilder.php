<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;

/**
 * @implements Builder<CustomLineItemDraft>
 */
final class CustomLineItemDraftBuilder implements Builder
{
    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**
     * @var ?int
     */
    private $quantity;

    /**
     * @var null|Money|MoneyBuilder
     */
    private $money;

    /**
     * @var ?string
     */
    private $slug;

    /**
     * @var null|TaxCategoryResourceIdentifier|TaxCategoryResourceIdentifierBuilder
     */
    private $taxCategory;

    /**
     * @var null|ExternalTaxRateDraft|ExternalTaxRateDraftBuilder
     */
    private $externalTaxRate;

    /**
     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $custom;

    /**
     * @var null|ItemShippingDetailsDraft|ItemShippingDetailsDraftBuilder
     */
    private $shippingDetails;

    /**
     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>The amount of a CustomLineItemin the cart.
     * Must be a positive integer.</p>
     *
     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return null|Money
     */
    public function getMoney()
    {
        return $this->money instanceof MoneyBuilder ? $this->money->build() : $this->money;
    }

    /**
     * @return null|string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * <p>The given tax category will be used to select a tax rate when a cart has the TaxMode <code>Platform</code>.</p>
     *
     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory()
    {
        return $this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory;
    }

    /**
     * <p>An external tax rate can be set if the cart has the <code>External</code> TaxMode.</p>
     *
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate()
    {
        return $this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate;
    }

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p>Container for custom line item specific address(es).</p>
     *
     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails()
    {
        return $this->shippingDetails instanceof ItemShippingDetailsDraftBuilder ? $this->shippingDetails->build() : $this->shippingDetails;
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
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMoney(?Money $money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSlug(?string $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxCategory(?TaxCategoryResourceIdentifier $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate)
    {
        $this->externalTaxRate = $externalTaxRate;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingDetails(?ItemShippingDetailsDraft $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;

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
    public function withMoneyBuilder(?MoneyBuilder $money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxCategoryBuilder(?TaxCategoryResourceIdentifierBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalTaxRateBuilder(?ExternalTaxRateDraftBuilder $externalTaxRate)
    {
        $this->externalTaxRate = $externalTaxRate;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingDetailsBuilder(?ItemShippingDetailsDraftBuilder $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;

        return $this;
    }

    public function build(): CustomLineItemDraft
    {
        return new CustomLineItemDraftModel(
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->quantity,
            $this->money instanceof MoneyBuilder ? $this->money->build() : $this->money,
            $this->slug,
            $this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory,
            $this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom,
            $this->shippingDetails instanceof ItemShippingDetailsDraftBuilder ? $this->shippingDetails->build() : $this->shippingDetails
        );
    }

    public static function of(): CustomLineItemDraftBuilder
    {
        return new self();
    }
}
