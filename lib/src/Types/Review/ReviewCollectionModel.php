<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Base\JsonCollection;

class ReviewCollectionModel extends JsonCollection implements ReviewCollection {

    /**
     * @param Review $value
     * @return ReviewCollection
     */
    public function add($value) {
        if (!$value instanceof Review) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Review
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Review) {
            $data = $this->mapData(Review::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }

    protected function index($data)
    {
        foreach ($data as $key => $value) {
            if (isset($value['id'])) {
                $this->addToIndex('id', $value['id'], $key);
            }
        }
    }

    /**
     * @return string
     */
    public function byId($id)
    {
        return $this->valueByKey('id', $id);
    }
}