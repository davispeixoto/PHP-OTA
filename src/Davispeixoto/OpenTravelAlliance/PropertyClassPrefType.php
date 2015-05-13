<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PropertyClassPrefType
 *
 * Indicates preferences for class of hotel property.
 * XSD Type: PropertyClassPrefType
 */
class PropertyClassPrefType
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
     * Identifes the classification of the property. Refer to OpenTravel Code List
     * Brand Category Code (BCC).
     *
     * @property string $propertyClassType
     */
    private $propertyClassType = null;

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
     * Gets as propertyClassType
     *
     * Identifes the classification of the property. Refer to OpenTravel Code List
     * Brand Category Code (BCC).
     *
     * @return string
     */
    public function getPropertyClassType()
    {
        return $this->propertyClassType;
    }

    /**
     * Sets a new propertyClassType
     *
     * Identifes the classification of the property. Refer to OpenTravel Code List
     * Brand Category Code (BCC).
     *
     * @param string $propertyClassType
     * @return self
     */
    public function setPropertyClassType($propertyClassType)
    {
        $this->propertyClassType = $propertyClassType;

        return $this;
    }


}

