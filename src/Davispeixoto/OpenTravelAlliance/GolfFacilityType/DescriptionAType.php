<?php

namespace Davispeixoto\OpenTravelAlliance\GolfFacilityType;

/**
 * Class representing DescriptionAType
 */
class DescriptionAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * The guest policy at the facility.
     *
     * @property string $clubType
     */
    private $clubType = null;

    /**
     * A long description of the golf facility.
     *
     * @property string $longDesc
     */
    private $longDesc = null;

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
     * Gets as clubType
     *
     * The guest policy at the facility.
     *
     * @return string
     */
    public function getClubType()
    {
        return $this->clubType;
    }

    /**
     * Sets a new clubType
     *
     * The guest policy at the facility.
     *
     * @param string $clubType
     * @return self
     */
    public function setClubType($clubType)
    {
        $this->clubType = $clubType;

        return $this;
    }

    /**
     * Gets as longDesc
     *
     * A long description of the golf facility.
     *
     * @return string
     */
    public function getLongDesc()
    {
        return $this->longDesc;
    }

    /**
     * Sets a new longDesc
     *
     * A long description of the golf facility.
     *
     * @param string $longDesc
     * @return self
     */
    public function setLongDesc($longDesc)
    {
        $this->longDesc = $longDesc;

        return $this;
    }


}

