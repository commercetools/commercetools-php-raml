<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

interface ReviewSetKeyAction extends ReviewUpdateAction {
    const FIELD_KEY = 'key';

    /**
     * @return string
     */
    public function getKey();

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

}