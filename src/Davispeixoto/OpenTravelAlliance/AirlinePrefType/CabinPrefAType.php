<?php

namespace Davispeixoto\OpenTravelAlliance\AirlinePrefType;

/**
 * Class representing CabinPrefAType
 */
class CabinPrefAType
{

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Indicates preferred airline cabin.
     *
     * @property string $cabin
     */
    private $cabin = null;

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
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
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * Gets as cabin
     *
     * Indicates preferred airline cabin.
     *
     * @return string
     */
    public function getCabin()
    {
        return $this->cabin;
    }

    /**
     * Sets a new cabin
     *
     * Indicates preferred airline cabin.
     *
     * @param string $cabin
     * @return self
     */
    public function setCabin($cabin)
    {
        $this->cabin = $cabin;

        return $this;
    }


}

