<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Me\MyPaymentUpdate;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyMePaymentByID extends ApiResource
{
    /**
     * @psalm-param ?MyPaymentUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyPaymentUpdate $body = null, array $headers = []): ByProjectKeyMePaymentByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMePaymentByIDPost((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }

}
