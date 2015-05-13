<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TransactionType
 *
 * A monetary transaction (credit or debit) against a reservation
 * XSD Type: TransactionType
 */
class TransactionType
{

    /**
     * Specifies whether the transaction is a receipt or a refund.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Specifies whether a transaction is a credit or a debit.
     *  Credit
     *
     * @property string $creditDebitInd
     */
    private $creditDebitInd = null;

    /**
     * Provides the date and time that the transaction was posted to the relevant
     * accounting ledger.
     *
     * @property \DateTime $postingDateTime
     */
    private $postingDateTime = null;

    /**
     * Records the batch number assigened to the ledger posting.
     *
     * @property string $batchNmbr
     */
    private $batchNmbr = null;

    /**
     * A comment about this transaction.
     *
     * @property string $comment
     */
    private $comment = null;

    /**
     * The amount recorded against this transaction item.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TransactionType\AmountAType $amount
     */
    private $amount = null;

    /**
     * Gets as type
     *
     * Specifies whether the transaction is a receipt or a refund.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Specifies whether the transaction is a receipt or a refund.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as creditDebitInd
     *
     * Specifies whether a transaction is a credit or a debit.
     *  Credit
     *
     * @return string
     */
    public function getCreditDebitInd()
    {
        return $this->creditDebitInd;
    }

    /**
     * Sets a new creditDebitInd
     *
     * Specifies whether a transaction is a credit or a debit.
     *  Credit
     *
     * @param string $creditDebitInd
     * @return self
     */
    public function setCreditDebitInd($creditDebitInd)
    {
        $this->creditDebitInd = $creditDebitInd;

        return $this;
    }

    /**
     * Gets as postingDateTime
     *
     * Provides the date and time that the transaction was posted to the relevant
     * accounting ledger.
     *
     * @return \DateTime
     */
    public function getPostingDateTime()
    {
        return $this->postingDateTime;
    }

    /**
     * Sets a new postingDateTime
     *
     * Provides the date and time that the transaction was posted to the relevant
     * accounting ledger.
     *
     * @param \DateTime $postingDateTime
     * @return self
     */
    public function setPostingDateTime(\DateTime $postingDateTime)
    {
        $this->postingDateTime = $postingDateTime;

        return $this;
    }

    /**
     * Gets as batchNmbr
     *
     * Records the batch number assigened to the ledger posting.
     *
     * @return string
     */
    public function getBatchNmbr()
    {
        return $this->batchNmbr;
    }

    /**
     * Sets a new batchNmbr
     *
     * Records the batch number assigened to the ledger posting.
     *
     * @param string $batchNmbr
     * @return self
     */
    public function setBatchNmbr($batchNmbr)
    {
        $this->batchNmbr = $batchNmbr;

        return $this;
    }

    /**
     * Gets as comment
     *
     * A comment about this transaction.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A comment about this transaction.
     *
     * @param string $comment
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Gets as amount
     *
     * The amount recorded against this transaction item.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TransactionType\AmountAType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * The amount recorded against this transaction item.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TransactionType\AmountAType $amount
     * @return self
     */
    public function setAmount(\Davispeixoto\OpenTravelAlliance\TransactionType\AmountAType $amount)
    {
        $this->amount = $amount;

        return $this;
    }


}

