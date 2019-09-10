<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class OrderEditPagedQueryResponseModel extends JsonObjectModel implements OrderEditPagedQueryResponse
{
    /**
     * @var ?int
     */
    protected $total;

    /**
     * @var ?int
     */
    protected $offset;

    /**
     * @var ?int
     */
    protected $count;

    /**
     * @var ?OrderEditCollection
     */
    protected $results;

    public function __construct(
        int $total = null,
        int $offset = null,
        int $count = null,
        OrderEditCollection $results = null
    ) {
        $this->total = $total;
        $this->offset = $offset;
        $this->count = $count;
        $this->results = $results;
    }

    /**
     * @return null|int
     */
    public function getTotal()
    {
        if (is_null($this->total)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(OrderEditPagedQueryResponse::FIELD_TOTAL);
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
            $data = $this->raw(OrderEditPagedQueryResponse::FIELD_OFFSET);
            if (is_null($data)) {
                return null;
            }
            $this->offset = (int) $data;
        }

        return $this->offset;
    }

    /**
     * @return null|int
     */
    public function getCount()
    {
        if (is_null($this->count)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(OrderEditPagedQueryResponse::FIELD_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->count = (int) $data;
        }

        return $this->count;
    }

    /**
     * @return null|OrderEditCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(OrderEditPagedQueryResponse::FIELD_RESULTS);
            if (is_null($data)) {
                return null;
            }
            $this->results = OrderEditCollection::fromArray($data);
        }

        return $this->results;
    }

    public function setTotal(?int $total): void
    {
        $this->total = $total;
    }

    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }

    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    public function setResults(?OrderEditCollection $results): void
    {
        $this->results = $results;
    }
}