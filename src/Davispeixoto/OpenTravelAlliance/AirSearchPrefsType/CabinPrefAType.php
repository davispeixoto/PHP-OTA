<?php

namespace Davispeixoto\OpenTravelAlliance\AirSearchPrefsType;

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
     * Defines a specific cabin sub type within the cabin type (i.e., first, business,
     * economy.) For example, Premium.
     *
     * @property string $cabinSubtype
     */
    private $cabinSubtype = null;

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

    /**
     * Gets as cabinSubtype
     *
     * Defines a specific cabin sub type within the cabin type (i.e., first, business,
     * economy.) For example, Premium.
     *
     * @return string
     */
    public function getCabinSubtype()
    {
        return $this->cabinSubtype;
    }

    /**
     * Sets a new cabinSubtype
     *
     * Defines a specific cabin sub type within the cabin type (i.e., first, business,
     * economy.) For example, Premium.
     *
     * @param string $cabinSubtype
     * @return self
     */
    public function setCabinSubtype($cabinSubtype)
    {
        $this->cabinSubtype = $cabinSubtype;

        return $this;
    }


}

