<?php

namespace Davispeixoto\OpenTravelAlliance\PkgReservationType;

/**
 * Class representing TransactionsAType
 */
class TransactionsAType
{

    /**
     * Details of a transaction posted against a reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TransactionType[] $transaction
     */
    private $transaction = null;

    /**
     * Adds as transaction
     *
     * Details of a transaction posted against a reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TransactionType $transaction
     */
    public function addToTransaction(\Davispeixoto\OpenTravelAlliance\TransactionType $transaction)
    {
        $this->transaction[] = $transaction;

        return $this;
    }

    /**
     * isset transaction
     *
     * Details of a transaction posted against a reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTransaction($index)
    {
        return isset($this->transaction[$index]);
    }

    /**
     * unset transaction
     *
     * Details of a transaction posted against a reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTransaction($index)
    {
        unset($this->transaction[$index]);
    }

    /**
     * Gets as transaction
     *
     * Details of a transaction posted against a reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TransactionType[]
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Sets a new transaction
     *
     * Details of a transaction posted against a reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TransactionType[] $transaction
     * @return self
     */
    public function setTransaction(array $transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }


}

