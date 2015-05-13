<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType;

/**
 * Class representing FareTypePrefAType
 */
class FareTypePrefAType
{

    /**
     * The type of fare required (e.g. unrestricted, excursion). Refer to the Fare
     * Qualifier OpenTravel Code list (FAQ).
     *
     * @property string $fareType
     */
    private $fareType = null;

    /**
     * Used to indicate a level of preference for a fare type.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Gets as fareType
     *
     * The type of fare required (e.g. unrestricted, excursion). Refer to the Fare
     * Qualifier OpenTravel Code list (FAQ).
     *
     * @return string
     */
    public function getFareType()
    {
        return $this->fareType;
    }

    /**
     * Sets a new fareType
     *
     * The type of fare required (e.g. unrestricted, excursion). Refer to the Fare
     * Qualifier OpenTravel Code list (FAQ).
     *
     * @param string $fareType
     * @return self
     */
    public function setFareType($fareType)
    {
        $this->fareType = $fareType;

        return $this;
    }

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for a fare type.
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
     * Used to indicate a level of preference for a fare type.
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

