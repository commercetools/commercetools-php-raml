<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomObject;

use Commercetools\Base\JsonCollection;

class CustomObjectCollectionModel extends JsonCollection implements CustomObjectCollection {

    /**
     * @param CustomObject $value
     * @return CustomObjectCollection
     */
    public function add($value) {
        if (!$value instanceof CustomObject) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomObject
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomObject) {
            $data = $this->mapData(CustomObject::class, $data);
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