<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ChangeTransactionInteractionIdActionModel extends JsonObjectModel implements ChangeTransactionInteractionIdAction
{
    public const DISCRIMINATOR_VALUE = 'ChangeTransactionInteractionIdAction';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $change;

    /**
     * @var ?TransactionActionValue
     */
    protected $transaction;

    /**
     * @var ?string
     */
    protected $nextValue;

    /**
     * @var ?string
     */
    protected $previousValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?TransactionActionValue $transaction = null,
        ?string $nextValue = null,
        ?string $previousValue = null
    ) {
        $this->change = $change;
        $this->transaction = $transaction;
        $this->nextValue = $nextValue;
        $this->previousValue = $previousValue;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type =  (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Update action for <code>changeTransactionInteractionId</code> on payments</p>
     *
     * @return null|string
     */
    public function getChange()
    {
        if (is_null($this->change)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CHANGE);
            if (is_null($data)) {
                return null;
            }
            $this->change =  (string) $data;
        }

        return $this->change;
    }

    /**
     * @return null|TransactionActionValue
     */
    public function getTransaction()
    {
        if (is_null($this->transaction)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TRANSACTION);
            if (is_null($data)) {
                return null;
            }

            $this->transaction =  TransactionActionValueModel::of($data);
        }

        return $this->transaction;
    }

    /**
     * @return null|string
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->nextValue =  (string) $data;
        }

        return $this->nextValue;
    }

    /**
     * @return null|string
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->previousValue =  (string) $data;
        }

        return $this->previousValue;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?TransactionActionValue $transaction
     */
    public function setTransaction(?TransactionActionValue $transaction): void
    {
        $this->transaction = $transaction;
    }

    /**
     * @param ?string $nextValue
     */
    public function setNextValue(?string $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?string $previousValue
     */
    public function setPreviousValue(?string $previousValue): void
    {
        $this->previousValue = $previousValue;
    }



}
