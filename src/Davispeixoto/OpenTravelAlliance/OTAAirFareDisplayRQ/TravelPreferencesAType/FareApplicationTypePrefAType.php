<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType;

/**
 * Class representing FareApplicationTypePrefAType
 */
class FareApplicationTypePrefAType
{

    /**
     * The journey type for which fares are required can be OneWay, Return or
     * HalfReturn.
     *
     * @property string $fareApplicationType
     */
    private $fareApplicationType = null;

    /**
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Gets as fareApplicationType
     *
     * The journey type for which fares are required can be OneWay, Return or
     * HalfReturn.
     *
     * @return string
     */
    public function getFareApplicationType()
    {
        return $this->fareApplicationType;
    }

    /**
     * Sets a new fareApplicationType
     *
     * The journey type for which fares are required can be OneWay, Return or
     * HalfReturn.
     *
     * @param string $fareApplicationType
     * @return self
     */
    public function setFareApplicationType($fareApplicationType)
    {
        $this->fareApplicationType = $fareApplicationType;

        return $this;
    }

    /**
     * Gets as preferLevel
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }


}

