<?php

namespace Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType;

/**
 * Class representing TotalAType
 */
class TotalAType
{

    /**
     * The total of the base fee and taxes.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * Gets as amount
     *
     * The total of the base fee and taxes.
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
     * The total of the base fee and taxes.
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

