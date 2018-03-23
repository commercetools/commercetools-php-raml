<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonCollection;

class ProductCollectionModel extends JsonCollection implements ProductCollection {

    /**
     * @param Product $value
     * @return ProductCollection
     */
    public function add($value) {
        if (!$value instanceof Product) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Product
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Product) {
            $data = $this->mapData(Product::class, $data);
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