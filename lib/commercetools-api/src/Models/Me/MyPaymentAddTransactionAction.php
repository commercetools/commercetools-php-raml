<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Payment\TransactionDraft;

interface MyPaymentAddTransactionAction extends MyPaymentUpdateAction
{

    public const FIELD_TRANSACTION = 'transaction';

    /**
     * @return null|TransactionDraft
     */
    public function getTransaction();

    public function setTransaction(?TransactionDraft $transaction): void;
}
