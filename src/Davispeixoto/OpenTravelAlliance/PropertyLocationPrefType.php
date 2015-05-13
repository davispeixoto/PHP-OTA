<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PropertyLocationPrefType
 *
 * Indicates preferences for hotel property locations.
 * XSD Type: PropertyLocationPrefType
 */
class PropertyLocationPrefType
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
     * Identifies the propery location type. Refer to OpenTravel Code List Location
     * Category Codes (LOC).
     *
     * @property string $propertyLocationType
     */
    private $propertyLocationType = null;

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
     * Gets as propertyLocationType
     *
     * Identifies the propery location type. Refer to OpenTravel Code List Location
     * Category Codes (LOC).
     *
     * @return string
     */
    public function getPropertyLocationType()
    {
        return $this->propertyLocationType;
    }

    /**
     * Sets a new propertyLocationType
     *
     * Identifies the propery location type. Refer to OpenTravel Code List Location
     * Category Codes (LOC).
     *
     * @param string $propertyLocationType
     * @return self
     */
    public function setPropertyLocationType($propertyLocationType)
    {
        $this->propertyLocationType = $propertyLocationType;

        return $this;
    }


}

