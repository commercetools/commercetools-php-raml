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
final class AssetSourceModel extends JsonObjectModel implements AssetSource
{

    /**
     * @var ?string
     */
    protected $uri;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?AssetDimensions
     */
    protected $dimensions;

    /**
     * @var ?string
     */
    protected $contentType;


    public function __construct(
        string $uri = null,
        string $key = null,
        AssetDimensions $dimensions = null,
        string $contentType = null
    ) {
        $this->uri = $uri;
        $this->key = $key;
        $this->dimensions = $dimensions;
        $this->contentType = $contentType;

    }

    /**
     * @return null|string
     */
    public function getUri()
    {
        if (is_null($this->uri)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(AssetSource::FIELD_URI);
            if (is_null($data)) {
                return null;
            }
            $this->uri = (string) $data;
        }

        return $this->uri;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(AssetSource::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * @return null|AssetDimensions
     */
    public function getDimensions()
    {
        if (is_null($this->dimensions)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(AssetSource::FIELD_DIMENSIONS);
            if (is_null($data)) {
                return null;
            }

            $this->dimensions = AssetDimensionsModel::of($data);
        }

        return $this->dimensions;
    }

    /**
     * @return null|string
     */
    public function getContentType()
    {
        if (is_null($this->contentType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(AssetSource::FIELD_CONTENT_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->contentType = (string) $data;
        }

        return $this->contentType;
    }

    public function setUri(?string $uri): void
    {
        $this->uri = $uri;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setDimensions(?AssetDimensions $dimensions): void
    {
        $this->dimensions = $dimensions;
    }

    public function setContentType(?string $contentType): void
    {
        $this->contentType = $contentType;
    }



}
