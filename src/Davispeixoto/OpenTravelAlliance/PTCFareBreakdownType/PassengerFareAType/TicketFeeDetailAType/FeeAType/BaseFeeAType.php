<?php

namespace Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType;

/**
 * Class representing BaseFeeAType
 */
class BaseFeeAType
{

    /**
     * The base fee amount.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * Gets as amount
     *
     * The base fee amount.
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
     * The base fee amount.
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

