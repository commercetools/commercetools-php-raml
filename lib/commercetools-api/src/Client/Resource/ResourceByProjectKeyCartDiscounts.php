<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\CartDiscount\CartDiscountDraft;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyCartDiscounts extends ApiResource
{
    public function withKey(string $key = null): ResourceByProjectKeyCartDiscountsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyCartDiscountsKeyByKey($this->getUri() . '/key={key}', $args, $this->getClient());
    }
    public function withId(string $ID = null): ResourceByProjectKeyCartDiscountsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyCartDiscountsByID($this->getUri() . '/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyCartDiscountsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyCartDiscountsGet((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?CartDiscountDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CartDiscountDraft $body = null, array $headers = []): ByProjectKeyCartDiscountsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCartDiscountsPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }

}
