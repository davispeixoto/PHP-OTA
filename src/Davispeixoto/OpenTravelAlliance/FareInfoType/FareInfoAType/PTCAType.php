<?php

namespace Davispeixoto\OpenTravelAlliance\FareInfoType\FareInfoAType;

/**
 * Class representing PTCAType
 */
class PTCAType
{

    /**
     * The passenger type code for this fare.
     *
     * @property string $passengerTypeCode
     */
    private $passengerTypeCode = null;

    /**
     * Gets as passengerTypeCode
     *
     * The passenger type code for this fare.
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
     * The passenger type code for this fare.
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

