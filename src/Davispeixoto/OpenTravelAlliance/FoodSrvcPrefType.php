<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing FoodSrvcPrefType
 *
 * Indicates preferences for type of food service facilities in a hotel.
 * XSD Type: FoodSrvcPrefType
 */
class FoodSrvcPrefType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Identifies the types of food services offered by the hotel. Refer to OpenTravel
     * Code List Main Cuisine Code (CUI).
     *
     * @property string $foodSrvcType
     */
    private $foodSrvcType = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }

        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

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
     * Gets as foodSrvcType
     *
     * Identifies the types of food services offered by the hotel. Refer to OpenTravel
     * Code List Main Cuisine Code (CUI).
     *
     * @return string
     */
    public function getFoodSrvcType()
    {
        return $this->foodSrvcType;
    }

    /**
     * Sets a new foodSrvcType
     *
     * Identifies the types of food services offered by the hotel. Refer to OpenTravel
     * Code List Main Cuisine Code (CUI).
     *
     * @param string $foodSrvcType
     * @return self
     */
    public function setFoodSrvcType($foodSrvcType)
    {
        $this->foodSrvcType = $foodSrvcType;

        return $this;
    }


}

