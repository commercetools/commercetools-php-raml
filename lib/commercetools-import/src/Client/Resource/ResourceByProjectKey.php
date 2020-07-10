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

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null) {
        parent::__construct('/{projectKey}', $args, $client);
    }

    public function importSinks(): ResourceByProjectKeyImportSinks
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyImportSinks($args, $this->getClient());
    }
    public function importSummaries(): ResourceByProjectKeyImportSummaries
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyImportSummaries($args, $this->getClient());
    }
    public function categories(): ResourceByProjectKeyCategories
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCategories($args, $this->getClient());
    }
    public function prices(): ResourceByProjectKeyPrices
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyPrices($args, $this->getClient());
    }
    public function products(): ResourceByProjectKeyProducts
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProducts($args, $this->getClient());
    }
    public function productDrafts(): ResourceByProjectKeyProductDrafts
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductDrafts($args, $this->getClient());
    }
    public function productTypes(): ResourceByProjectKeyProductTypes
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductTypes($args, $this->getClient());
    }
    public function productVariants(): ResourceByProjectKeyProductVariants
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductVariants($args, $this->getClient());
    }
    public function productVariantPatches(): ResourceByProjectKeyProductVariantPatches
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductVariantPatches($args, $this->getClient());
    }

}
