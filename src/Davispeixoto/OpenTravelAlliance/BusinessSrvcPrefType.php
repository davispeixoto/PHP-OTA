<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing BusinessSrvcPrefType
 *
 * Indicates preferences for type of business services in a hotel.
 * XSD Type: BusinessSrvcPrefType
 */
class BusinessSrvcPrefType
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
     * Identifies the types of business services offered by the hotel. Refer to
     * OpenTravel Code ListBusiness Srvc Type (BUS).
     *
     * @property string $businessSrvcType
     */
    private $businessSrvcType = null;

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
     * Gets as businessSrvcType
     *
     * Identifies the types of business services offered by the hotel. Refer to
     * OpenTravel Code ListBusiness Srvc Type (BUS).
     *
     * @return string
     */
    public function getBusinessSrvcType()
    {
        return $this->businessSrvcType;
    }

    /**
     * Sets a new businessSrvcType
     *
     * Identifies the types of business services offered by the hotel. Refer to
     * OpenTravel Code ListBusiness Srvc Type (BUS).
     *
     * @param string $businessSrvcType
     * @return self
     */
    public function setBusinessSrvcType($businessSrvcType)
    {
        $this->businessSrvcType = $businessSrvcType;

        return $this;
    }


}

