<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeLogin;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyMeLoginTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyMeLoginPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->login()
                        ->post(null);
                },
                'post',
                '{projectKey}/me/login',
            ]
        ];
    }
    
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRoot();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string)$request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string)$request->getBody());
        };
    }
}