<?php

namespace Davispeixoto\OpenTravelAlliance\PrivateFareType;

/**
 * Class representing AirportAType
 */
class AirportAType
{

    /**
     * A code used to identify a location.
     *
     * @property string $locationCode
     */
    private $locationCode = null;

    /**
     * Identifies the context of the identifying code (e.g., IATA, ARC, or internal
     * code).
     *  IATA
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * Gets as locationCode
     *
     * A code used to identify a location.
     *
     * @return string
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * Sets a new locationCode
     *
     * A code used to identify a location.
     *
     * @param string $locationCode
     * @return self
     */
    public function setLocationCode($locationCode)
    {
        $this->locationCode = $locationCode;

        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the context of the identifying code (e.g., IATA, ARC, or internal
     * code).
     *  IATA
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the context of the identifying code (e.g., IATA, ARC, or internal
     * code).
     *  IATA
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;

        return $this;
    }


}

