<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\AddressAType;

/**
 * Class representing StateProvAType
 */
class StateProvAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * StateCode MAY specify the standard code or abbreviation for the state, province,
     * or region.
     *
     * @property string $stateCode
     */
    private $stateCode = null;

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
     * Gets as stateCode
     *
     * StateCode MAY specify the standard code or abbreviation for the state, province,
     * or region.
     *
     * @return string
     */
    public function getStateCode()
    {
        return $this->stateCode;
    }

    /**
     * Sets a new stateCode
     *
     * StateCode MAY specify the standard code or abbreviation for the state, province,
     * or region.
     *
     * @param string $stateCode
     * @return self
     */
    public function setStateCode($stateCode)
    {
        $this->stateCode = $stateCode;

        return $this;
    }


}

