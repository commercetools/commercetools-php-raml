<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Errors;

use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;


/**
 * @internal
 */
final class InvalidStateTransitionErrorModel extends JsonObjectModel implements InvalidStateTransitionError
{
    public const DISCRIMINATOR_VALUE = 'InvalidTransition';
    /**
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?string
     */
    protected $currentState;

    /**
     * @var ?string
     */
    protected $newState;


    public function __construct(
        string $message = null,
        string $currentState = null,
        string $newState = null
    ) {
        $this->message = $message;
        $this->currentState = $currentState;
        $this->newState = $newState;
        $this->code = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * <p>The error's description.</p>
     *
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * <p>This enumeration describes the processing state of an import operation.</p>
     *
     * @return null|string
     */
    public function getCurrentState()
    {
        if (is_null($this->currentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(InvalidStateTransitionError::FIELD_CURRENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->currentState = (string) $data;
        }

        return $this->currentState;
    }

    /**
     * <p>This enumeration describes the processing state of an import operation.</p>
     *
     * @return null|string
     */
    public function getNewState()
    {
        if (is_null($this->newState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(InvalidStateTransitionError::FIELD_NEW_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->newState = (string) $data;
        }

        return $this->newState;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function setCurrentState(?string $currentState): void
    {
        $this->currentState = $currentState;
    }

    public function setNewState(?string $newState): void
    {
        $this->newState = $newState;
    }



}
