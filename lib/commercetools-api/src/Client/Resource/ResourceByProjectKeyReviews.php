<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Review\ReviewDraft;
use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyReviews extends ApiResource
{
    public function withKey(string $key = null): ResourceByProjectKeyReviewsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyReviewsKeyByKey($this->getUri() . '/key={key}', $args, $this->getClient());
    }
    public function withId(string $ID = null): ResourceByProjectKeyReviewsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyReviewsByID($this->getUri() . '/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyReviewsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyReviewsGet((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ReviewDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ReviewDraft $body = null, array $headers = []): ByProjectKeyReviewsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyReviewsPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
}
