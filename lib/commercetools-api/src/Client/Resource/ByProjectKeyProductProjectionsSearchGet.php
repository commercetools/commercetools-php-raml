<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\ClientException;
use Commercetools\Base\MapperInterface;
use Commercetools\Base\ResultMapper;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Exception\ApiClientException;
use Commercetools\Client\ApiRequest;
use Commercetools\Api\Models\Error\ErrorResponse;
use Commercetools\Api\Models\Error\ErrorResponseModel;
use Commercetools\Api\Models\Product\ProductProjectionPagedSearchResponse;
use Commercetools\Api\Models\Product\ProductProjectionPagedSearchResponseModel;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;

use Psr\Http\Message\ResponseInterface;

/** @psalm-suppress PropertyNotSetInConstructor */
class ByProjectKeyProductProjectionsSearchGet extends ApiRequest
{
    /**
     * @param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function __construct(string $projectKey, $body = null, array $headers = [], ClientInterface $client = null)
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '{projectKey}/product-projections/search');
        parent::__construct($client, 'GET', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     * @psalm-return ErrorResponse|JsonObject|ProductProjectionPagedSearchResponse|T|null
     */
    public function mapFromResponse(?ResponseInterface $response, string $resultType = null)
    {
        if (is_null($response)) {
            return null;
        }
        $mapper = new ResultMapper();
        if (is_null($resultType)) {
            switch ($response->getStatusCode()) {
                case '200':
                    $resultType = ProductProjectionPagedSearchResponseModel::class;

                    break;
                case '400':
                    $resultType = ErrorResponseModel::class;

                    break;
                case '401':
                    $resultType = ErrorResponseModel::class;

                    break;
                case '403':
                    $resultType = ErrorResponseModel::class;

                    break;
                case '500':
                    $resultType = ErrorResponseModel::class;

                    break;
                case '503':
                    $resultType = ErrorResponseModel::class;

                    break;
                default:
                    $resultType = JsonObjectModel::class;

                    break;
            }
        }

        return $mapper->mapResponseToClass($resultType, $response);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     *
     * @return null|ErrorResponse|JsonObject|ProductProjectionPagedSearchResponse
     */
    public function execute(array $options = [], string $resultType = null)
    {
        try {
            $response = $this->send($options);
        } catch (ServerException $e) {
            $result = $this->mapFromResponse($e->getResponse());

            throw new ApiServerException($e->getMessage(), $result, $this, $e->getResponse(), $e, []);
        } catch (ClientException $e) {
            $result = $this->mapFromResponse($e->getResponse());

            throw new ApiClientException($e->getMessage(), $result, $this, $e->getResponse(), $e, []);
        }

        return $this->mapFromResponse($response, $resultType);
    }

    /**
     * 
     * @psalm-param scalar $fuzzy
     */
    public function withFuzzy($fuzzy): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('fuzzy', $fuzzy);
    }

    /**
     * 
     * @psalm-param scalar $fuzzyLevel
     */
    public function withFuzzyLevel($fuzzyLevel): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('fuzzyLevel', $fuzzyLevel);
    }

    /**
     * 
     * @psalm-param scalar $markMatchingVariants
     */
    public function withMarkMatchingVariants($markMatchingVariants): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('markMatchingVariants', $markMatchingVariants);
    }

    /**
     * 
     * @psalm-param scalar $staged
     */
    public function withStaged($staged): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('staged', $staged);
    }

    /**
     * 
     * @psalm-param scalar $filter
     */
    public function withFilter($filter): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('filter', $filter);
    }

    /**
     * 
     * @psalm-param scalar $filterFacets
     */
    public function withFilterFacets($filterFacets): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('filter.facets', $filterFacets);
    }

    /**
     * 
     * @psalm-param scalar $filterQuery
     */
    public function withFilterQuery($filterQuery): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('filter.query', $filterQuery);
    }

    /**
     * 
     * @psalm-param scalar $facet
     */
    public function withFacet($facet): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('facet', $facet);
    }

    /**
     * @psalm-param string $locale
     * @psalm-param scalar $text
     */
    public function withText(string $locale, $text): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam(sprintf('text.%s', $locale), $text);
    }

    /**
     * 
     * @psalm-param scalar $sort
     */
    public function withSort($sort): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('sort', $sort);
    }

    /**
     * 
     * @psalm-param scalar $limit
     */
    public function withLimit($limit): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('limit', $limit);
    }

    /**
     * 
     * @psalm-param scalar $offset
     */
    public function withOffset($offset): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('offset', $offset);
    }

    /**
     * 
     * @psalm-param scalar $withTotal
     */
    public function withWithTotal($withTotal): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

    /**
     * 
     * @psalm-param scalar $priceCurrency
     */
    public function withPriceCurrency($priceCurrency): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('priceCurrency', $priceCurrency);
    }

    /**
     * 
     * @psalm-param scalar $priceCountry
     */
    public function withPriceCountry($priceCountry): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('priceCountry', $priceCountry);
    }

    /**
     * 
     * @psalm-param scalar $priceCustomerGroup
     */
    public function withPriceCustomerGroup($priceCustomerGroup): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('priceCustomerGroup', $priceCustomerGroup);
    }

    /**
     * 
     * @psalm-param scalar $priceChannel
     */
    public function withPriceChannel($priceChannel): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('priceChannel', $priceChannel);
    }

    /**
     * 
     * @psalm-param scalar $expand
     */
    public function withExpand($expand): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('expand', $expand);
    }
}
