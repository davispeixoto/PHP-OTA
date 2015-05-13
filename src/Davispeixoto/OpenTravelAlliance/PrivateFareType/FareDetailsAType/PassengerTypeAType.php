<?php

namespace Davispeixoto\OpenTravelAlliance\PrivateFareType\FareDetailsAType;

/**
 * Class representing PassengerTypeAType
 */
class PassengerTypeAType
{

    /**
     * Passenger type code.Example: ADT
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Gets as code
     *
     * Passenger type code.Example: ADT
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Passenger type code.Example: ADT
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }


}

