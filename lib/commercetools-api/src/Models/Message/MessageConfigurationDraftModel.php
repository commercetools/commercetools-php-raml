<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObjectModel;

final class MessageConfigurationDraftModel extends JsonObjectModel implements MessageConfigurationDraft
{
    /**
     * @var ?int
     */
    protected $deleteDaysAfterCreation;

    /**
     * @var ?bool
     */
    protected $enabled;

    public function __construct(
        int $deleteDaysAfterCreation = null,
        bool $enabled = null
    ) {
        $this->deleteDaysAfterCreation = $deleteDaysAfterCreation;
        $this->enabled = $enabled;
    }

    /**
     * @return null|int
     */
    public function getDeleteDaysAfterCreation()
    {
        if (is_null($this->deleteDaysAfterCreation)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MessageConfigurationDraft::FIELD_DELETE_DAYS_AFTER_CREATION);
            if (is_null($data)) {
                return null;
            }
            $this->deleteDaysAfterCreation = (int) $data;
        }

        return $this->deleteDaysAfterCreation;
    }

    /**
     * @return null|bool
     */
    public function getEnabled()
    {
        if (is_null($this->enabled)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(MessageConfigurationDraft::FIELD_ENABLED);
            if (is_null($data)) {
                return null;
            }
            $this->enabled = (bool) $data;
        }

        return $this->enabled;
    }

    public function setDeleteDaysAfterCreation(?int $deleteDaysAfterCreation): void
    {
        $this->deleteDaysAfterCreation = $deleteDaysAfterCreation;
    }

    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }
}