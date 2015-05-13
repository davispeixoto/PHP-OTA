<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\FlightsAType;

/**
 * Class representing FlightAType
 */
class FlightAType
{

    /**
     * The airline code of the restricted flight.
     *
     * @property string $airlineCode
     */
    private $airlineCode = null;

    /**
     * The number of the restricted flight.
     *
     * @property string $flightNumber
     */
    private $flightNumber = null;

    /**
     * When true, the flight number should be included (i.e., travel allowed on this
     * flight). When false, the flight number should be excluded (i.e., no travel
     * allowed on this flight.)
     *
     * @property boolean $includeExcludeUseInd
     */
    private $includeExcludeUseInd = null;

    /**
     * Gets as airlineCode
     *
     * The airline code of the restricted flight.
     *
     * @return string
     */
    public function getAirlineCode()
    {
        return $this->airlineCode;
    }

    /**
     * Sets a new airlineCode
     *
     * The airline code of the restricted flight.
     *
     * @param string $airlineCode
     * @return self
     */
    public function setAirlineCode($airlineCode)
    {
        $this->airlineCode = $airlineCode;

        return $this;
    }

    /**
     * Gets as flightNumber
     *
     * The number of the restricted flight.
     *
     * @return string
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    /**
     * Sets a new flightNumber
     *
     * The number of the restricted flight.
     *
     * @param string $flightNumber
     * @return self
     */
    public function setFlightNumber($flightNumber)
    {
        $this->flightNumber = $flightNumber;

        return $this;
    }

    /**
     * Gets as includeExcludeUseInd
     *
     * When true, the flight number should be included (i.e., travel allowed on this
     * flight). When false, the flight number should be excluded (i.e., no travel
     * allowed on this flight.)
     *
     * @return boolean
     */
    public function getIncludeExcludeUseInd()
    {
        return $this->includeExcludeUseInd;
    }

    /**
     * Sets a new includeExcludeUseInd
     *
     * When true, the flight number should be included (i.e., travel allowed on this
     * flight). When false, the flight number should be excluded (i.e., no travel
     * allowed on this flight.)
     *
     * @param boolean $includeExcludeUseInd
     * @return self
     */
    public function setIncludeExcludeUseInd($includeExcludeUseInd)
    {
        $this->includeExcludeUseInd = $includeExcludeUseInd;

        return $this;
    }


}

