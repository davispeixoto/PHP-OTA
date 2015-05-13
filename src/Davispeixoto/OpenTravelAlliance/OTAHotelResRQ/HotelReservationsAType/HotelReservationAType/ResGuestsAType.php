<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType;

/**
 * Class representing ResGuestsAType
 */
class ResGuestsAType
{

    /**
     * The ResGuest element allows for future expansion of the message. This element
     * MAY repeat to provide details for each guest in the booking.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType[]
     * $resGuest
     */
    private $resGuest = null;

    /**
     * Adds as resGuest
     *
     * The ResGuest element allows for future expansion of the message. This element
     * MAY repeat to provide details for each guest in the booking.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType
     * $resGuest
     */
    public function addToResGuest(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType $resGuest
    ) {
        $this->resGuest[] = $resGuest;

        return $this;
    }

    /**
     * isset resGuest
     *
     * The ResGuest element allows for future expansion of the message. This element
     * MAY repeat to provide details for each guest in the booking.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetResGuest($index)
    {
        return isset($this->resGuest[$index]);
    }

    /**
     * unset resGuest
     *
     * The ResGuest element allows for future expansion of the message. This element
     * MAY repeat to provide details for each guest in the booking.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetResGuest($index)
    {
        unset($this->resGuest[$index]);
    }

    /**
     * Gets as resGuest
     *
     * The ResGuest element allows for future expansion of the message. This element
     * MAY repeat to provide details for each guest in the booking.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType[]
     */
    public function getResGuest()
    {
        return $this->resGuest;
    }

    /**
     * Sets a new resGuest
     *
     * The ResGuest element allows for future expansion of the message. This element
     * MAY repeat to provide details for each guest in the booking.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType[]
     * $resGuest
     * @return self
     */
    public function setResGuest(array $resGuest)
    {
        $this->resGuest = $resGuest;

        return $this;
    }


}

