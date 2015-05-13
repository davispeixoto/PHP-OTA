<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PropertyAmenityPrefType
 *
 * Indicates preferences for hotel property amenities.
 * XSD Type: PropertyAmenityPrefType
 */
class PropertyAmenityPrefType
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
     * Identifies the amenities offered by the hotel. Refer to OpenTravel Code List
     * Hotel Amenity Code (HAC).
     *
     * @property string $propertyAmenityType
     */
    private $propertyAmenityType = null;

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
     * Gets as propertyAmenityType
     *
     * Identifies the amenities offered by the hotel. Refer to OpenTravel Code List
     * Hotel Amenity Code (HAC).
     *
     * @return string
     */
    public function getPropertyAmenityType()
    {
        return $this->propertyAmenityType;
    }

    /**
     * Sets a new propertyAmenityType
     *
     * Identifies the amenities offered by the hotel. Refer to OpenTravel Code List
     * Hotel Amenity Code (HAC).
     *
     * @param string $propertyAmenityType
     * @return self
     */
    public function setPropertyAmenityType($propertyAmenityType)
    {
        $this->propertyAmenityType = $propertyAmenityType;

        return $this;
    }


}

