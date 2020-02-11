<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<DiscountCodeSetDescriptionAction>
 */
final class DiscountCodeSetDescriptionActionBuilder implements Builder
{
    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $description;

    /**
     * <p>If the <code>description</code> parameter is not included, the field will be emptied.</p>
     *
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
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
    public function withDescriptionBuilder(?LocalizedStringBuilder $description)
    {
        $this->description = $description;

        return $this;
    }

    public function build(): DiscountCodeSetDescriptionAction
    {
        return new DiscountCodeSetDescriptionActionModel(
            $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description
        );
    }

    public static function of(): DiscountCodeSetDescriptionActionBuilder
    {
        return new self();
    }
}
