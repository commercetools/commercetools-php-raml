<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Review\Review;
use Commercetools\Api\Models\Review\ReviewBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ReviewCreatedMessagePayload>
 */
final class ReviewCreatedMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var Review|?ReviewBuilder
     */
    private $review;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|Review
     */
    public function getReview()
    {
        return $this->review instanceof ReviewBuilder ? $this->review->build() : $this->review;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withReview(?Review $review)
    {
        $this->review = $review;

        return $this;
    }

    /**
     * @return $this
     */
    public function withReviewBuilder(?ReviewBuilder $review)
    {
        $this->review = $review;

        return $this;
    }

    public function build(): ReviewCreatedMessagePayload
    {
        return new ReviewCreatedMessagePayloadModel(
            $this->type,
            ($this->review instanceof ReviewBuilder ? $this->review->build() : $this->review)
        );
    }

    public static function of(): ReviewCreatedMessagePayloadBuilder
    {
        return new self();
    }
}