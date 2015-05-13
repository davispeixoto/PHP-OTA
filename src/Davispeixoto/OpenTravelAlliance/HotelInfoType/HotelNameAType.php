<?php

namespace Davispeixoto\OpenTravelAlliance\HotelInfoType;

/**
 * Class representing HotelNameAType
 */
class HotelNameAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Concise hotel name
     *
     * @property string $hotelShortName
     */
    private $hotelShortName = null;

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
     * Gets as hotelShortName
     *
     * Concise hotel name
     *
     * @return string
     */
    public function getHotelShortName()
    {
        return $this->hotelShortName;
    }

    /**
     * Sets a new hotelShortName
     *
     * Concise hotel name
     *
     * @param string $hotelShortName
     * @return self
     */
    public function setHotelShortName($hotelShortName)
    {
        $this->hotelShortName = $hotelShortName;

        return $this;
    }


}

