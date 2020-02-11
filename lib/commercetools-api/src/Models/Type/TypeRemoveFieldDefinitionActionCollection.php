<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TypeRemoveFieldDefinitionAction>
 * @method TypeRemoveFieldDefinitionAction current()
 * @method TypeRemoveFieldDefinitionAction at($offset)
 */
class TypeRemoveFieldDefinitionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert TypeRemoveFieldDefinitionAction $value
     * @psalm-param TypeRemoveFieldDefinitionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypeRemoveFieldDefinitionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeRemoveFieldDefinitionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeRemoveFieldDefinitionAction
     */
    protected function mapper()
    {
        return function (int $index): ?TypeRemoveFieldDefinitionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TypeRemoveFieldDefinitionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
