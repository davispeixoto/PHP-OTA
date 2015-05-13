<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRQ;

/**
 * Class representing TravelerPrefAType
 */
class TravelerPrefAType
{

    /**
     * A preference level for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Quantity of specified class code or accommodation services.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * The class of inventory controlled services available.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ClassCodeType $classCodes
     */
    private $classCodes = null;

    /**
     * Accommodation preferences.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AccommodationType $accommodation
     */
    private $accommodation = null;

    /**
     * Gets as preferLevel
     *
     * A preference level for an associated item.
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
     * A preference level for an associated item.
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
     * Gets as quantity
     *
     * Quantity of specified class code or accommodation services.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Quantity of specified class code or accommodation services.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as classCodes
     *
     * The class of inventory controlled services available.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ClassCodeType
     */
    public function getClassCodes()
    {
        return $this->classCodes;
    }

    /**
     * Sets a new classCodes
     *
     * The class of inventory controlled services available.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ClassCodeType $classCodes
     * @return self
     */
    public function setClassCodes(\Davispeixoto\OpenTravelAlliance\ClassCodeType $classCodes)
    {
        $this->classCodes = $classCodes;

        return $this;
    }

    /**
     * Gets as accommodation
     *
     * Accommodation preferences.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AccommodationType
     */
    public function getAccommodation()
    {
        return $this->accommodation;
    }

    /**
     * Sets a new accommodation
     *
     * Accommodation preferences.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AccommodationType $accommodation
     * @return self
     */
    public function setAccommodation(\Davispeixoto\OpenTravelAlliance\AccommodationType $accommodation)
    {
        $this->accommodation = $accommodation;

        return $this;
    }


}

