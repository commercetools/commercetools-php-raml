<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Base\JsonCollection;

class ExtensionCollectionModel extends JsonCollection implements ExtensionCollection {

    /**
     * @param Extension $value
     * @return ExtensionCollection
     */
    public function add($value) {
        if (!$value instanceof Extension) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Extension
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Extension) {
            $data = $this->mapData(Extension::class, $data);
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