<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType;

/**
 * Class representing FlightNumberRangeAType
 */
class FlightNumberRangeAType
{

    /**
     * The airline code of this range of flight numbers.
     *
     * @property string $airlineCode
     */
    private $airlineCode = null;

    /**
     * The start number (inclusive) of the flight number range.
     *
     * @property string $rangeStart
     */
    private $rangeStart = null;

    /**
     * The end number (inclusive) of the flight number range.
     *
     * @property string $rangeEnd
     */
    private $rangeEnd = null;

    /**
     * When true, the flight number range should be included (i.e. travel is allowed on
     * these flights). When false, the flight number range (inclusive) should be
     * excluded (i.e. travel not allowed on these flights).
     *
     * @property boolean $includeIndicator
     */
    private $includeIndicator = null;

    /**
     * Gets as airlineCode
     *
     * The airline code of this range of flight numbers.
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
     * The airline code of this range of flight numbers.
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
     * Gets as rangeStart
     *
     * The start number (inclusive) of the flight number range.
     *
     * @return string
     */
    public function getRangeStart()
    {
        return $this->rangeStart;
    }

    /**
     * Sets a new rangeStart
     *
     * The start number (inclusive) of the flight number range.
     *
     * @param string $rangeStart
     * @return self
     */
    public function setRangeStart($rangeStart)
    {
        $this->rangeStart = $rangeStart;

        return $this;
    }

    /**
     * Gets as rangeEnd
     *
     * The end number (inclusive) of the flight number range.
     *
     * @return string
     */
    public function getRangeEnd()
    {
        return $this->rangeEnd;
    }

    /**
     * Sets a new rangeEnd
     *
     * The end number (inclusive) of the flight number range.
     *
     * @param string $rangeEnd
     * @return self
     */
    public function setRangeEnd($rangeEnd)
    {
        $this->rangeEnd = $rangeEnd;

        return $this;
    }

    /**
     * Gets as includeIndicator
     *
     * When true, the flight number range should be included (i.e. travel is allowed on
     * these flights). When false, the flight number range (inclusive) should be
     * excluded (i.e. travel not allowed on these flights).
     *
     * @return boolean
     */
    public function getIncludeIndicator()
    {
        return $this->includeIndicator;
    }

    /**
     * Sets a new includeIndicator
     *
     * When true, the flight number range should be included (i.e. travel is allowed on
     * these flights). When false, the flight number range (inclusive) should be
     * excluded (i.e. travel not allowed on these flights).
     *
     * @param boolean $includeIndicator
     * @return self
     */
    public function setIncludeIndicator($includeIndicator)
    {
        $this->includeIndicator = $includeIndicator;

        return $this;
    }


}

