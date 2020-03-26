<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Test\Client\Resource;

use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Ml\Client\MlRequestBuilder;
use Commercetools\Ml\Client\Resource\ResourceByProjectKeyImageSearch;
use Commercetools\Ml\Client\Resource\ResourceByProjectKeyMissingData;
use Commercetools\Ml\Client\Resource\ResourceByProjectKeyRecommendations;
use Commercetools\Ml\Client\Resource\ResourceByProjectKeySimilarities;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Ml\Client\Resource\ResourceByProjectKey
 */
class ResourceByProjectKeyTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new MlRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertSame($relativeUri, (string) $request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string) $request->getBody());
        } else {
            $this->assertSame("", (string) $request->getBody());
        }
    }

    /**
     * @dataProvider getResources()
     */
    public function testResources(callable $builderFunction, string $class, array $expectedArgs)
    {
        $builder = new MlRequestBuilder();
        $resource = $builderFunction($builder);
        $this->assertInstanceOf($class, $resource);
        $this->assertEquals($expectedArgs, $resource->getArgs());
    }

    /**
     * @dataProvider getRequestBuilderResponses()
     */
    public function testMapFromResponse(callable $builderFunction, $statusCode)
    {
        $builder = new MlRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response($statusCode, [], "{}");
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteClientException(callable $builderFunction)
    {
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ClientException::class);

        $builder = new MlRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiClientException::class);
        $request->execute();
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteServerException(callable $builderFunction)
    {
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ServerException::class);

        $builder = new MlRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyImageSearch' => [
                function (MlRequestBuilder $builder): ResourceByProjectKeyImageSearch {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->imageSearch();
                },
                ResourceByProjectKeyImageSearch::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/image-search'
            ],
            'ResourceByProjectKeyRecommendations' => [
                function (MlRequestBuilder $builder): ResourceByProjectKeyRecommendations {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recommendations();
                },
                ResourceByProjectKeyRecommendations::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/recommendations'
            ],
            'ResourceByProjectKeyMissingData' => [
                function (MlRequestBuilder $builder): ResourceByProjectKeyMissingData {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->missingData();
                },
                ResourceByProjectKeyMissingData::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/missing-data'
            ],
            'ResourceByProjectKeySimilarities' => [
                function (MlRequestBuilder $builder): ResourceByProjectKeySimilarities {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->similarities();
                },
                ResourceByProjectKeySimilarities::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/similarities'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
        ];
    }
}
