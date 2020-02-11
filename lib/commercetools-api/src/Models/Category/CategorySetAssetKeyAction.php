<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CategorySetAssetKeyAction extends CategoryUpdateAction
{

    public const FIELD_ASSET_ID = 'assetId';
    public const FIELD_ASSET_KEY = 'assetKey';

    /**
     * @return null|string
     */
    public function getAssetId();

    /**
     * <p>User-defined identifier for the asset.
     * If left blank or set to <code>null</code>, the asset key is unset/removed.</p>
     *
     * @return null|string
     */
    public function getAssetKey();

    public function setAssetId(?string $assetId): void;

    public function setAssetKey(?string $assetKey): void;
}
