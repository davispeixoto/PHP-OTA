<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRS\TicketItemInfoAType;

use Davispeixoto\OpenTravelAlliance\PersonNameType;

/**
 * Class representing PassengerNameAType
 */
class PassengerNameAType extends PersonNameType
{

    /**
     * Used to identify the PTC code (passenger type code) for the passenger (e.g.
     * infant).
     *
     * @property string $passengerTypeCode
     */
    private $passengerTypeCode = null;

    /**
     * Gets as passengerTypeCode
     *
     * Used to identify the PTC code (passenger type code) for the passenger (e.g.
     * infant).
     *
     * @return string
     */
    public function getPassengerTypeCode()
    {
        return $this->passengerTypeCode;
    }

    /**
     * Sets a new passengerTypeCode
     *
     * Used to identify the PTC code (passenger type code) for the passenger (e.g.
     * infant).
     *
     * @param string $passengerTypeCode
     * @return self
     */
    public function setPassengerTypeCode($passengerTypeCode)
    {
        $this->passengerTypeCode = $passengerTypeCode;

        return $this;
    }


}

