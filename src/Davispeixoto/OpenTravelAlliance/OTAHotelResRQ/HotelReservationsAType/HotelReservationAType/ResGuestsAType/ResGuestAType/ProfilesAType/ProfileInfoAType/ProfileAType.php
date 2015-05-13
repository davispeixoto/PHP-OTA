<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType;

/**
 * Class representing ProfileAType
 */
class ProfileAType
{

    /**
     * Customer MUST provide detailed customer information for this reservation.
     * FastRez RECOMMENDS that at least one other piece of customer information SHOULD
     * be sent in addition to the PersonName.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType
     * $customer
     */
    private $customer = null;

    /**
     * Gets as customer
     *
     * Customer MUST provide detailed customer information for this reservation.
     * FastRez RECOMMENDS that at least one other piece of customer information SHOULD
     * be sent in addition to the PersonName.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * Customer MUST provide detailed customer information for this reservation.
     * FastRez RECOMMENDS that at least one other piece of customer information SHOULD
     * be sent in addition to the PersonName.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType
     * $customer
     * @return self
     */
    public function setCustomer(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType $customer
    ) {
        $this->customer = $customer;

        return $this;
    }


}

