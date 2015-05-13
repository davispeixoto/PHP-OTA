<?php

namespace Davispeixoto\OpenTravelAlliance\AddressType;

/**
 * Class representing BldgRoomAType
 */
class BldgRoomAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * When true, the information is a building name.
     *
     * @property boolean $bldgNameIndicator
     */
    private $bldgNameIndicator = null;

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
     * Gets as bldgNameIndicator
     *
     * When true, the information is a building name.
     *
     * @return boolean
     */
    public function getBldgNameIndicator()
    {
        return $this->bldgNameIndicator;
    }

    /**
     * Sets a new bldgNameIndicator
     *
     * When true, the information is a building name.
     *
     * @param boolean $bldgNameIndicator
     * @return self
     */
    public function setBldgNameIndicator($bldgNameIndicator)
    {
        $this->bldgNameIndicator = $bldgNameIndicator;

        return $this;
    }


}

