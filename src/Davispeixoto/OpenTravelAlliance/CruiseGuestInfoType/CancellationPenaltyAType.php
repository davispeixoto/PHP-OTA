<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType;

/**
 * Class representing CancellationPenaltyAType
 */
class CancellationPenaltyAType
{

    /**
     * The penalty amount for cancelling a reservation.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * Gets as amount
     *
     * The penalty amount for cancelling a reservation.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * The penalty amount for cancelling a reservation.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }


}

