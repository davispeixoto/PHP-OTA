<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\ConnectionLocationsAType;

use Davispeixoto\OpenTravelAlliance\LocationType;

/**
 * Class representing ConnectionLocationAType
 */
class ConnectionLocationAType extends LocationType
{

    /**
     * When true, the connection location is allowed. When false, the connection
     * location is not allowed.
     *
     * @property boolean $includeIndicator
     */
    private $includeIndicator = null;

    /**
     * Gets as includeIndicator
     *
     * When true, the connection location is allowed. When false, the connection
     * location is not allowed.
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
     * When true, the connection location is allowed. When false, the connection
     * location is not allowed.
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

