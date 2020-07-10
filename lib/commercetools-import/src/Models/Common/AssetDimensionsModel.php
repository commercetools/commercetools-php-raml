<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Common;

use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;


/**
 * @internal
 */
final class AssetDimensionsModel extends JsonObjectModel implements AssetDimensions
{

    /**
     * @var ?int
     */
    protected $w;

    /**
     * @var ?int
     */
    protected $h;


    public function __construct(
        int $w = null,
        int $h = null
    ) {
        $this->w = $w;
        $this->h = $h;

    }

    /**
     * @return null|int
     */
    public function getW()
    {
        if (is_null($this->w)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(AssetDimensions::FIELD_W);
            if (is_null($data)) {
                return null;
            }
            $this->w = (int) $data;
        }

        return $this->w;
    }

    /**
     * @return null|int
     */
    public function getH()
    {
        if (is_null($this->h)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(AssetDimensions::FIELD_H);
            if (is_null($data)) {
                return null;
            }
            $this->h = (int) $data;
        }

        return $this->h;
    }

    public function setW(?int $w): void
    {
        $this->w = $w;
    }

    public function setH(?int $h): void
    {
        $this->h = $h;
    }



}
