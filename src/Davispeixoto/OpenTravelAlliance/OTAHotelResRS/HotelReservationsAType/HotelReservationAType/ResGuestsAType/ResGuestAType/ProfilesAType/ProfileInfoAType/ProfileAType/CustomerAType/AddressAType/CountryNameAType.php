<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\AddressAType;

/**
 * Class representing CountryNameAType
 */
class CountryNameAType
{

    /**
     * Code MUST specify the ISO 3166 code for a country.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Gets as code
     *
     * Code MUST specify the ISO 3166 code for a country.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Code MUST specify the ISO 3166 code for a country.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }


}

