<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Client\ApiRequest;
use Commercetools\Import\Client\ImportRequestBuilder;
use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Psr7\Response;
use Commercetools\Base\JsonObject;

/**
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyPost
 */
class ResourceByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyPost' => [
                function(ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productDrafts()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->post(null);
                },
                'post',
                '{projectKey}/product-drafts/importSinkKey={importSinkKey}',
            ]
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ImportRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string) $request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string) $request->getBody());
        };
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyPost' => [
                function(ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productDrafts()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->post(null);
                }
            ]
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testMapFromResponse(callable $builderFunction)
    {
        $builder = new ImportRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response(200, [], "{}");
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }
}
