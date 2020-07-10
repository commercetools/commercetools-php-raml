<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importsummaries;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ImportSummary>
 */
final class ImportSummaryBuilder implements Builder
{
    /**
     * @var null|OperationStates|OperationStatesBuilder
     */
    private $states;

    /**
     * @var ?int
     */
    private $total;

    /**
     * <p>The states summary for this import summary.</p>
     *
     * @return null|OperationStates
     */
    public function getStates()
    {
        return $this->states instanceof OperationStatesBuilder ? $this->states->build() : $this->states;
    }

    /**
     * <p>The total number of import operations received for this import group.</p>
     *
     * @return null|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return $this
     */
    public function withStates(?OperationStates $states)
    {
        $this->states = $states;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotal(?int $total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStatesBuilder(?OperationStatesBuilder $states)
    {
        $this->states = $states;

        return $this;
    }

    public function build(): ImportSummary
    {
        return new ImportSummaryModel(
            $this->states instanceof OperationStatesBuilder ? $this->states->build() : $this->states,
            $this->total
        );
    }

    public static function of(): ImportSummaryBuilder
    {
        return new self();
    }
}
