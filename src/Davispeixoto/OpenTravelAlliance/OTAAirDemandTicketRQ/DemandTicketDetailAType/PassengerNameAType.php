<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType;

use Davispeixoto\OpenTravelAlliance\PersonNameType;

/**
 * Class representing PassengerNameAType
 */
class PassengerNameAType extends PersonNameType
{

    /**
     * Provides a unique reference to the passenger.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Used to identify the PTC code (passenger type code) for the passenger (e.g.
     * infant).
     *
     * @property string $passengerTypeCode
     */
    private $passengerTypeCode = null;

    /**
     * Gets as rPH
     *
     * Provides a unique reference to the passenger.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * Provides a unique reference to the passenger.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

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

