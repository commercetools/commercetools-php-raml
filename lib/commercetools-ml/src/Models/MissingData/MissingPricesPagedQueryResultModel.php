<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MissingPricesPagedQueryResultModel extends JsonObjectModel implements MissingPricesPagedQueryResult
{
    /**
     * @var ?int
     */
    protected $count;

    /**
     * @var ?int
     */
    protected $total;

    /**
     * @var ?int
     */
    protected $offset;

    /**
     * @var ?MissingPricesCollection
     */
    protected $results;

    /**
     * @var ?MissingPricesMeta
     */
    protected $meta;


    public function __construct(
        int $count = null,
        int $total = null,
        int $offset = null,
        MissingPricesCollection $results = null,
        MissingPricesMeta $meta = null
    ) {
        $this->count = $count;
        $this->total = $total;
        $this->offset = $offset;
        $this->results = $results;
        $this->meta = $meta;
    }

    /**
     * @return null|int
     */
    public function getCount()
    {
        if (is_null($this->count)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MissingPricesPagedQueryResult::FIELD_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->count = (int) $data;
        }

        return $this->count;
    }

    /**
     * @return null|int
     */
    public function getTotal()
    {
        if (is_null($this->total)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MissingPricesPagedQueryResult::FIELD_TOTAL);
            if (is_null($data)) {
                return null;
            }
            $this->total = (int) $data;
        }

        return $this->total;
    }

    /**
     * @return null|int
     */
    public function getOffset()
    {
        if (is_null($this->offset)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MissingPricesPagedQueryResult::FIELD_OFFSET);
            if (is_null($data)) {
                return null;
            }
            $this->offset = (int) $data;
        }

        return $this->offset;
    }

    /**
     * @return null|MissingPricesCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(MissingPricesPagedQueryResult::FIELD_RESULTS);
            if (is_null($data)) {
                return null;
            }
            $this->results = MissingPricesCollection::fromArray($data);
        }

        return $this->results;
    }

    /**
     * @return null|MissingPricesMeta
     */
    public function getMeta()
    {
        if (is_null($this->meta)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MissingPricesPagedQueryResult::FIELD_META);
            if (is_null($data)) {
                return null;
            }

            $this->meta = MissingPricesMetaModel::of($data);
        }

        return $this->meta;
    }

    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    public function setTotal(?int $total): void
    {
        $this->total = $total;
    }

    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }

    public function setResults(?MissingPricesCollection $results): void
    {
        $this->results = $results;
    }

    public function setMeta(?MissingPricesMeta $meta): void
    {
        $this->meta = $meta;
    }
}
