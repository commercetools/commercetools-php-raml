<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Prices;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SubRate>
 */
final class SubRateBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @var ?int
     */
    private $amount;

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null|int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAmount(?int $amount)
    {
        $this->amount = $amount;

        return $this;
    }


    public function build(): SubRate
    {
        return new SubRateModel(
            $this->name,
            $this->amount
        );
    }

    public static function of(): SubRateBuilder
    {
        return new self();
    }
}
