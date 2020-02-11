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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsKeyByKeyDelete
 */
class ResourceByProjectKeyProductsKeyByKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyProductsKeyByKeyGet_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->get()
                        ->withPriceCurrency('priceCurrency');
                },
                'get',
                '{projectKey}/products/key={key}?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsKeyByKeyGet_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->get()
                        ->withPriceCountry('priceCountry');
                },
                'get',
                '{projectKey}/products/key={key}?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsKeyByKeyGet_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->get()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'get',
                '{projectKey}/products/key={key}?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsKeyByKeyGet_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->get()
                        ->withPriceChannel('priceChannel');
                },
                'get',
                '{projectKey}/products/key={key}?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/products/key={key}?expand=expand',
            ],
            'ByProjectKeyProductsKeyByKeyGet' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->get();
                },
                'get',
                '{projectKey}/products/key={key}',
            ],
            'ByProjectKeyProductsKeyByKeyPost_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->post(null)
                        ->withPriceCurrency('priceCurrency');
                },
                'post',
                '{projectKey}/products/key={key}?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsKeyByKeyPost_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->post(null)
                        ->withPriceCountry('priceCountry');
                },
                'post',
                '{projectKey}/products/key={key}?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsKeyByKeyPost_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->post(null)
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'post',
                '{projectKey}/products/key={key}?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsKeyByKeyPost_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->post(null)
                        ->withPriceChannel('priceChannel');
                },
                'post',
                '{projectKey}/products/key={key}?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/products/key={key}?expand=expand',
            ],
            'ByProjectKeyProductsKeyByKeyPost' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->post(null);
                },
                'post',
                '{projectKey}/products/key={key}',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->delete()
                        ->withPriceCurrency('priceCurrency');
                },
                'delete',
                '{projectKey}/products/key={key}?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->delete()
                        ->withPriceCountry('priceCountry');
                },
                'delete',
                '{projectKey}/products/key={key}?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->delete()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'delete',
                '{projectKey}/products/key={key}?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->delete()
                        ->withPriceChannel('priceChannel');
                },
                'delete',
                '{projectKey}/products/key={key}?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/products/key={key}?version=version',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/products/key={key}?expand=expand',
            ],
            'ByProjectKeyProductsKeyByKeyDelete' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->delete();
                },
                'delete',
                '{projectKey}/products/key={key}',
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
            'ByProjectKeyProductsKeyByKeyGet' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyProductsKeyByKeyPost' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyProductsKeyByKeyDelete' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->delete();
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
