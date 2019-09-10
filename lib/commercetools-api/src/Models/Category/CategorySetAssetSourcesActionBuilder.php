<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\AssetSourceCollection;
use Commercetools\Base\Builder;

/**
 * @implements Builder<CategorySetAssetSourcesAction>
 */
final class CategorySetAssetSourcesActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?AssetSourceCollection
     */
    private $sources;

    /**
     * @var ?string
     */
    private $assetId;

    /**
     * @var ?string
     */
    private $assetKey;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|AssetSourceCollection
     */
    public function getSources()
    {
        return $this->sources;
    }

    /**
     * @return null|string
     */
    public function getAssetId()
    {
        return $this->assetId;
    }

    /**
     * @return null|string
     */
    public function getAssetKey()
    {
        return $this->assetKey;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSources(?AssetSourceCollection $sources)
    {
        $this->sources = $sources;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAssetId(?string $assetId)
    {
        $this->assetId = $assetId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAssetKey(?string $assetKey)
    {
        $this->assetKey = $assetKey;

        return $this;
    }

    public function build(): CategorySetAssetSourcesAction
    {
        return new CategorySetAssetSourcesActionModel(
            $this->action,
            $this->sources,
            $this->assetId,
            $this->assetKey
        );
    }

    public static function of(): CategorySetAssetSourcesActionBuilder
    {
        return new self();
    }
}