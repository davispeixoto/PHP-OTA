<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType;

/**
 * Class representing ProfilesAType
 */
class ProfilesAType
{

    /**
     * The ProfileInfo container allows for future expansion of the message.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType
     * $profileInfo
     */
    private $profileInfo = null;

    /**
     * Gets as profileInfo
     *
     * The ProfileInfo container allows for future expansion of the message.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType
     */
    public function getProfileInfo()
    {
        return $this->profileInfo;
    }

    /**
     * Sets a new profileInfo
     *
     * The ProfileInfo container allows for future expansion of the message.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType
     * $profileInfo
     * @return self
     */
    public function setProfileInfo(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType $profileInfo
    ) {
        $this->profileInfo = $profileInfo;

        return $this;
    }


}

