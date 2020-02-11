<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyMeLogin extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post($body = null, array $headers = []): ByProjectKeyMeLoginPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeLoginPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }

}
