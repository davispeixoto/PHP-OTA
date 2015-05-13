<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType;

/**
 * Class representing PointOfSaleRestrictionAType
 */
class PointOfSaleRestrictionAType
{

    /**
     * When true, these points of sale are excluded from selling this rate.
     *  false
     *
     * @property boolean $excludeInd
     */
    private $excludeInd = null;

    /**
     * Identifies which IATA numbers are covered by this restriction.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $uniqueID
     */
    private $uniqueID = null;

    /**
     * Identifies which locations are covered by this restriction.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationGeneralType[] $location
     */
    private $location = null;

    /**
     * Gets as excludeInd
     *
     * When true, these points of sale are excluded from selling this rate.
     *  false
     *
     * @return boolean
     */
    public function getExcludeInd()
    {
        return $this->excludeInd;
    }

    /**
     * Sets a new excludeInd
     *
     * When true, these points of sale are excluded from selling this rate.
     *  false
     *
     * @param boolean $excludeInd
     * @return self
     */
    public function setExcludeInd($excludeInd)
    {
        $this->excludeInd = $excludeInd;

        return $this;
    }

    /**
     * Adds as uniqueID
     *
     * Identifies which IATA numbers are covered by this restriction.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    public function addToUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID[] = $uniqueID;

        return $this;
    }

    /**
     * isset uniqueID
     *
     * Identifies which IATA numbers are covered by this restriction.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUniqueID($index)
    {
        return isset($this->uniqueID[$index]);
    }

    /**
     * unset uniqueID
     *
     * Identifies which IATA numbers are covered by this restriction.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUniqueID($index)
    {
        unset($this->uniqueID[$index]);
    }

    /**
     * Gets as uniqueID
     *
     * Identifies which IATA numbers are covered by this restriction.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * Identifies which IATA numbers are covered by this restriction.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $uniqueID
     * @return self
     */
    public function setUniqueID(array $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }

    /**
     * Adds as location
     *
     * Identifies which locations are covered by this restriction.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\LocationGeneralType $location
     */
    public function addToLocation(\Davispeixoto\OpenTravelAlliance\LocationGeneralType $location)
    {
        $this->location[] = $location;

        return $this;
    }

    /**
     * isset location
     *
     * Identifies which locations are covered by this restriction.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLocation($index)
    {
        return isset($this->location[$index]);
    }

    /**
     * unset location
     *
     * Identifies which locations are covered by this restriction.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLocation($index)
    {
        unset($this->location[$index]);
    }

    /**
     * Gets as location
     *
     * Identifies which locations are covered by this restriction.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationGeneralType[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Identifies which locations are covered by this restriction.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationGeneralType[] $location
     * @return self
     */
    public function setLocation(array $location)
    {
        $this->location = $location;

        return $this;
    }


}

