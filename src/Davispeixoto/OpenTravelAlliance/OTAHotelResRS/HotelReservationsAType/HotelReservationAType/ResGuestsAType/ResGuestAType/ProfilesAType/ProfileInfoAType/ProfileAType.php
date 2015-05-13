<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType;

/**
 * Class representing ProfileAType
 */
class ProfileAType
{

    /**
     * Customer MUST provide detailed customer information for this reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType
     * $customer
     */
    private $customer = null;

    /**
     * Gets as customer
     *
     * Customer MUST provide detailed customer information for this reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * Customer MUST provide detailed customer information for this reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType
     * $customer
     * @return self
     */
    public function setCustomer(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType $customer
    ) {
        $this->customer = $customer;

        return $this;
    }


}

