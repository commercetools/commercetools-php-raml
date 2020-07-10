<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importsinks;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;

interface ImportSinkPagedResponse extends JsonObject
{

    public const FIELD_LIMIT = 'limit';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_COUNT = 'count';
    public const FIELD_RESULTS = 'results';

    /**
     * <p>The maximum number of import operations returned for a page.</p>
     *
     * @return null|int
     */
    public function getLimit();

    /**
     * <p>The offset supplied by the client or the server default. It is the number of elements skipped.</p>
     *
     * @return null|int
     */
    public function getOffset();

    /**
     * <p>The actual number of results returned by this response.</p>
     *
     * @return null|int
     */
    public function getCount();

    /**
     * <p>The results for this paged response.</p>
     *
     * @return null|ImportSinkCollection
     */
    public function getResults();

    public function setLimit(?int $limit): void;

    public function setOffset(?int $offset): void;

    public function setCount(?int $count): void;

    public function setResults(?ImportSinkCollection $results): void;
}
