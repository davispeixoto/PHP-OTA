<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType;

/**
 * Class representing ResGuestAType
 */
class ResGuestAType
{

    /**
     * The Profiles container allows for future expansion of the message.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType
     * $profiles
     */
    private $profiles = null;

    /**
     * Gets as profiles
     *
     * The Profiles container allows for future expansion of the message.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Sets a new profiles
     *
     * The Profiles container allows for future expansion of the message.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType
     * $profiles
     * @return self
     */
    public function setProfiles(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType $profiles
    ) {
        $this->profiles = $profiles;

        return $this;
    }


}

