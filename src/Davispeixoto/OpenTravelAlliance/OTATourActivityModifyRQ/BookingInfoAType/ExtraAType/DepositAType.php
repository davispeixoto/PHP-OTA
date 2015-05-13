<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ExtraAType;

use Davispeixoto\OpenTravelAlliance\AcceptedPaymentsType;

/**
 * Class representing DepositAType
 */
class DepositAType extends AcceptedPaymentsType
{

    /**
     * The deposit amount.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityChargeType $amount
     */
    private $amount = null;

    /**
     * Gets as amount
     *
     * The deposit amount.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityChargeType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * The deposit amount.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityChargeType $amount
     * @return self
     */
    public function setAmount(\Davispeixoto\OpenTravelAlliance\TourActivityChargeType $amount)
    {
        $this->amount = $amount;

        return $this;
    }


}

