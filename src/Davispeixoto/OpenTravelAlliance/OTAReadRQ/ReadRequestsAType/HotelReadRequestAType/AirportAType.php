<?php

namespace Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\HotelReadRequestAType;

/**
 * Class representing AirportAType
 */
class AirportAType
{

    /**
     * The airport code for the location of the hotel.
     *
     * @property string $locationCode
     */
    private $locationCode = null;

    /**
     * Identifies the context of the location code, such as IATA, ARC, or internal
     * code, etc.
     *  IATA
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * The airport location name.
     *
     * @property string $airportName
     */
    private $airportName = null;

    /**
     * Gets as locationCode
     *
     * The airport code for the location of the hotel.
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
     * The airport code for the location of the hotel.
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
     * Identifies the context of the location code, such as IATA, ARC, or internal
     * code, etc.
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
     * Identifies the context of the location code, such as IATA, ARC, or internal
     * code, etc.
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

    /**
     * Gets as airportName
     *
     * The airport location name.
     *
     * @return string
     */
    public function getAirportName()
    {
        return $this->airportName;
    }

    /**
     * Sets a new airportName
     *
     * The airport location name.
     *
     * @param string $airportName
     * @return self
     */
    public function setAirportName($airportName)
    {
        $this->airportName = $airportName;

        return $this;
    }


}

