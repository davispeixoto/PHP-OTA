<?php

namespace Davispeixoto\OpenTravelAlliance\RailOriginDestinationSummaryType;

use Davispeixoto\OpenTravelAlliance\LocationType;

/**
 * Class representing OriginLocationAType
 */
class OriginLocationAType extends LocationType
{

    /**
     * If true, multiple train stations within a specified city or location code may be
     * considered.
     *
     * @property boolean $multiCityStationInd
     */
    private $multiCityStationInd = null;

    /**
     * If true, alternate locations may be considered.
     *
     * @property boolean $alternateLocationInd
     */
    private $alternateLocationInd = null;

    /**
     * Gets as multiCityStationInd
     *
     * If true, multiple train stations within a specified city or location code may be
     * considered.
     *
     * @return boolean
     */
    public function getMultiCityStationInd()
    {
        return $this->multiCityStationInd;
    }

    /**
     * Sets a new multiCityStationInd
     *
     * If true, multiple train stations within a specified city or location code may be
     * considered.
     *
     * @param boolean $multiCityStationInd
     * @return self
     */
    public function setMultiCityStationInd($multiCityStationInd)
    {
        $this->multiCityStationInd = $multiCityStationInd;

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

