<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use stdClass;
use Commercetools\Base\MapperMap;
use Commercetools\Base\Builder;

/**
 * @implements Builder<LocalizedString>
 * @extends MapperMap<LocalizedString>
 */
final class LocalizedStringBuilder extends MapperMap implements Builder
{
    /**
     * @psalm-return callable(string):?LocalizedString
     */
    protected function mapper()
    {
        return
            /**
             * @psalm-return ?LocalizedString
             */
            function(string $key) {
                $data = $this->get($key);
                if ($data instanceof stdClass) {
                    $data = LocalizedStringModel::of($data);
                }
                return $data;
            };
    }

    /**
     * @return LocalizedString
     */
    public function build()
    {
        return new LocalizedStringModel($this->toArray());
    }
}
