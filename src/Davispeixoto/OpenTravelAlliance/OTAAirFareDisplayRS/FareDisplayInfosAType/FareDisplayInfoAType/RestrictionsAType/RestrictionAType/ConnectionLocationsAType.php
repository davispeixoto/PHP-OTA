<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType;

/**
 * Class representing ConnectionLocationsAType
 */
class ConnectionLocationsAType
{

    /**
     * Include or exclude connection locations.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\ConnectionLocationsAType\ConnectionLocationAType[]
     * $connectionLocation
     */
    private $connectionLocation = null;

    /**
     * Adds as connectionLocation
     *
     * Include or exclude connection locations.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\ConnectionLocationsAType\ConnectionLocationAType
     * $connectionLocation
     */
    public function addToConnectionLocation(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\ConnectionLocationsAType\ConnectionLocationAType $connectionLocation
    ) {
        $this->connectionLocation[] = $connectionLocation;

        return $this;
    }

    /**
     * isset connectionLocation
     *
     * Include or exclude connection locations.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetConnectionLocation($index)
    {
        return isset($this->connectionLocation[$index]);
    }

    /**
     * unset connectionLocation
     *
     * Include or exclude connection locations.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetConnectionLocation($index)
    {
        unset($this->connectionLocation[$index]);
    }

    /**
     * Gets as connectionLocation
     *
     * Include or exclude connection locations.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\ConnectionLocationsAType\ConnectionLocationAType[]
     */
    public function getConnectionLocation()
    {
        return $this->connectionLocation;
    }

    /**
     * Sets a new connectionLocation
     *
     * Include or exclude connection locations.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\ConnectionLocationsAType\ConnectionLocationAType[]
     * $connectionLocation
     * @return self
     */
    public function setConnectionLocation(array $connectionLocation)
    {
        $this->connectionLocation = $connectionLocation;

        return $this;
    }


}

