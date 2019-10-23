<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importrequests\ProductTypeImportRequest;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyProductTypesImportSinkKeyByImportSinkKey extends ApiResource
{
    /**
     * @psalm-param scalar $resourceKey
     *
     * @param null|mixed $resourceKey
     */
    public function resourceKeyWithResourceKeyValue($resourceKey = null): ResourceByProjectKeyProductTypesImportSinkKeyByImportSinkKeyResourceKeyByResourceKey
    {
        $args = $this->getArgs();
        if (!is_null($resourceKey)) {
            $args['resourceKey'] = $resourceKey;
        }

        return new ResourceByProjectKeyProductTypesImportSinkKeyByImportSinkKeyResourceKeyByResourceKey($this->getUri().'/resourceKey={resourceKey}', $args, $this->getClient());
    }

    public function importItems(): ResourceByProjectKeyProductTypesImportSinkKeyByImportSinkKeyImportItems
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductTypesImportSinkKeyByImportSinkKeyImportItems($this->getUri().'/import-items', $args, $this->getClient());
    }

    /**
     * @psalm-param ?ProductTypeImportRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductTypeImportRequest $body = null, array $headers = []): ByProjectKeyProductTypesImportSinkKeyByImportSinkKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductTypesImportSinkKeyByImportSinkKeyPost($args['projectKey'], $args['importSinkKey'], $body, $headers, $this->getClient());
    }
}