<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Client\ApiRequest;
use Commercetools\Api\Client\ApiRequestBuilder;
use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Psr7\Response;
use Commercetools\Base\JsonObject;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyCustomersEmailTokenByEmailTokenGet
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailTokenByEmailTokenTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyCustomersEmailTokenByEmailTokenGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->customers()
                        ->withEmailToken('emailToken')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/customers/email-token={emailToken}?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersEmailTokenByEmailTokenGet' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withEmailToken("emailToken")
                        ->get();
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/customers/email-token={emailToken}',
            ]
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRequestBuilder();
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
            'ByProjectKeyInStoreKeyByStoreKeyCustomersEmailTokenByEmailTokenGet' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withEmailToken("emailToken")
                        ->get();
                }
            ]
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testMapFromResponse(callable $builderFunction)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response(200, [], "{}");
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }
}
