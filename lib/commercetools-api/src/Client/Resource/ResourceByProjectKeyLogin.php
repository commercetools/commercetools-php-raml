<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Customer\CustomerSignin;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyLogin extends ApiResource
{
    /**
     * @psalm-param ?CustomerSignin $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CustomerSignin $body = null, array $headers = []): ByProjectKeyLoginPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyLoginPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }

}
