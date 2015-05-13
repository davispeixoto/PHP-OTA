<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing BedTypePrefType
 *
 * Indicates preferences for the size and features of hotel bed types.
 * XSD Type: BedTypePrefType
 */
class BedTypePrefType
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
     * Indicates the hotel bed type requested. Refer to OpenTravel Code List Bed Type
     * (BED).
     *
     * @property string $bedType
     */
    private $bedType = null;

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
     * Gets as bedType
     *
     * Indicates the hotel bed type requested. Refer to OpenTravel Code List Bed Type
     * (BED).
     *
     * @return string
     */
    public function getBedType()
    {
        return $this->bedType;
    }

    /**
     * Sets a new bedType
     *
     * Indicates the hotel bed type requested. Refer to OpenTravel Code List Bed Type
     * (BED).
     *
     * @param string $bedType
     * @return self
     */
    public function setBedType($bedType)
    {
        $this->bedType = $bedType;

        return $this;
    }


}

