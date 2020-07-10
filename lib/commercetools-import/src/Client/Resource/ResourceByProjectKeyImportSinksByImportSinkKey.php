<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Client\Resource;

use Shared\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;
use Models\Importsinks\ImportSinkDraft;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyImportSinksByImportSinkKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null) {
        parent::__construct('/{projectKey}/import-sinks/{importSinkKey}', $args, $client);
    }

    /**
     * @psalm-param ?ImportSinkDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function put(?ImportSinkDraft $body = null, array $headers = []): ByProjectKeyImportSinksByImportSinkKeyPut
    {
        $args = $this->getArgs();

        return new ByProjectKeyImportSinksByImportSinkKeyPut($args['projectKey'], $args['importSinkKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyImportSinksByImportSinkKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyImportSinksByImportSinkKeyGet($args['projectKey'], $args['importSinkKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyImportSinksByImportSinkKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyImportSinksByImportSinkKeyDelete($args['projectKey'], $args['importSinkKey'], $body, $headers, $this->getClient());
    }

}
