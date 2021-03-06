<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class RangeFacetResultModel extends JsonObjectModel implements RangeFacetResult
{
    public const DISCRIMINATOR_VALUE = 'range';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?FacetResultRangeCollection
     */
    protected $ranges;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?FacetResultRangeCollection $ranges = null
    ) {
        $this->ranges = $ranges;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|FacetResultRangeCollection
     */
    public function getRanges()
    {
        if (is_null($this->ranges)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_RANGES);
            if (is_null($data)) {
                return null;
            }
            $this->ranges = FacetResultRangeCollection::fromArray($data);
        }

        return $this->ranges;
    }


    /**
     * @param ?FacetResultRangeCollection $ranges
     */
    public function setRanges(?FacetResultRangeCollection $ranges): void
    {
        $this->ranges = $ranges;
    }
}
