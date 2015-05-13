<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType;

/**
 * Class representing ProfileInfoAType
 */
class ProfileInfoAType
{

    /**
     * Profile MUST provide the details of the customer profile information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType
     * $profile
     */
    private $profile = null;

    /**
     * Gets as profile
     *
     * Profile MUST provide the details of the customer profile information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * Profile MUST provide the details of the customer profile information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType
     * $profile
     * @return self
     */
    public function setProfile(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType $profile
    ) {
        $this->profile = $profile;

        return $this;
    }


}

