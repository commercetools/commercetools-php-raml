<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetStatusInterfaceTextAction>
 * @method SetStatusInterfaceTextAction current()
 * @method SetStatusInterfaceTextAction at($offset)
 */
class SetStatusInterfaceTextActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetStatusInterfaceTextAction $value
     * @psalm-param SetStatusInterfaceTextAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetStatusInterfaceTextActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetStatusInterfaceTextAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetStatusInterfaceTextAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetStatusInterfaceTextAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetStatusInterfaceTextActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
