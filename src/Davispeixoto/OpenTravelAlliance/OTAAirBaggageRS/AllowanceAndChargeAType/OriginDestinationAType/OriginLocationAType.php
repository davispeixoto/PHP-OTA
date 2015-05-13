<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType;

use Davispeixoto\OpenTravelAlliance\LocationType;

/**
 * Class representing OriginLocationAType
 */
class OriginLocationAType extends LocationType
{

    /**
     * If true, other airports within this city may be considered (i.e., EWR, JFK when
     * origin location is LGA.)
     *
     * @property boolean $multiAirportCityInd
     */
    private $multiAirportCityInd = null;

    /**
     * If true, alternate locations may be considered.
     *
     * @property boolean $alternateLocationInd
     */
    private $alternateLocationInd = null;

    /**
     * Gets as multiAirportCityInd
     *
     * If true, other airports within this city may be considered (i.e., EWR, JFK when
     * origin location is LGA.)
     *
     * @return boolean
     */
    public function getMultiAirportCityInd()
    {
        return $this->multiAirportCityInd;
    }

    /**
     * Sets a new multiAirportCityInd
     *
     * If true, other airports within this city may be considered (i.e., EWR, JFK when
     * origin location is LGA.)
     *
     * @param boolean $multiAirportCityInd
     * @return self
     */
    public function setMultiAirportCityInd($multiAirportCityInd)
    {
        $this->multiAirportCityInd = $multiAirportCityInd;

        return $this;
    }

    /**
     * Gets as alternateLocationInd
     *
     * If true, alternate locations may be considered.
     *
     * @return boolean
     */
    public function getAlternateLocationInd()
    {
        return $this->alternateLocationInd;
    }

    /**
     * Sets a new alternateLocationInd
     *
     * If true, alternate locations may be considered.
     *
     * @param boolean $alternateLocationInd
     * @return self
     */
    public function setAlternateLocationInd($alternateLocationInd)
    {
        $this->alternateLocationInd = $alternateLocationInd;

        return $this;
    }


}

