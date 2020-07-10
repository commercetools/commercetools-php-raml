<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Errors;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ErrorResponse>
 */
final class ErrorResponseBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $statusCode;

    /**
     * @var ?string
     */
    private $message;

    /**
     * @var ?string
     */
    private $error;

    /**
     * @var ?string
     */
    private $error_description;

    /**
     * @var ?ErrorObjectCollection
     */
    private $errors;

    /**
     * <p>The http status code of the response.</p>
     *
     * @return null|int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * <p>Describes the error.</p>
     *
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>This property is only used for OAuth2 errors.
     * Contains the error code.</p>
     *
     * @return null|string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * <p>This property is only used for OAuth2 errors.
     * Additional information to assist the client developer in
     * understanding the error.</p>
     *
     * @return null|string
     */
    public function getError_description()
    {
        return $this->error_description;
    }

    /**
     * <p>The errors that caused this error response.</p>
     *
     * @return null|ErrorObjectCollection
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @return $this
     */
    public function withStatusCode(?int $statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return $this
     */
    public function withError(?string $error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * @return $this
     */
    public function withError_description(?string $error_description)
    {
        $this->error_description = $error_description;

        return $this;
    }

    /**
     * @return $this
     */
    public function withErrors(?ErrorObjectCollection $errors)
    {
        $this->errors = $errors;

        return $this;
    }


    public function build(): ErrorResponse
    {
        return new ErrorResponseModel(
            $this->statusCode,
            $this->message,
            $this->error,
            $this->error_description,
            $this->errors
        );
    }

    public static function of(): ErrorResponseBuilder
    {
        return new self();
    }
}
