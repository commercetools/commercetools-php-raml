<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ChannelReference>
 */
final class ChannelReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $typeId;

    /**
     * @var ?string
     */
    private $id;

    /**
     * @var Channel|?ChannelBuilder
     */
    private $obj;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|Channel
     */
    public function getObj()
    {
        return $this->obj instanceof ChannelBuilder ? $this->obj->build() : $this->obj;
    }

    /**
     * @return $this
     */
    public function withTypeId(?string $typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObj(?Channel $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObjBuilder(?ChannelBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): ChannelReference
    {
        return new ChannelReferenceModel(
            $this->typeId,
            $this->id,
            ($this->obj instanceof ChannelBuilder ? $this->obj->build() : $this->obj)
        );
    }

    public static function of(): ChannelReferenceBuilder
    {
        return new self();
    }
}