<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType;

/**
 * Class representing HotelReservationIDsAType
 */
class HotelReservationIDsAType
{

    /**
     * The HotelReservationID MAY contain the reservation number from the requestor's
     * system.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\HotelReservationIDsAType\HotelReservationIDAType
     * $hotelReservationID
     */
    private $hotelReservationID = null;

    /**
     * Gets as hotelReservationID
     *
     * The HotelReservationID MAY contain the reservation number from the requestor's
     * system.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\HotelReservationIDsAType\HotelReservationIDAType
     */
    public function getHotelReservationID()
    {
        return $this->hotelReservationID;
    }

    /**
     * Sets a new hotelReservationID
     *
     * The HotelReservationID MAY contain the reservation number from the requestor's
     * system.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\HotelReservationIDsAType\HotelReservationIDAType
     * $hotelReservationID
     * @return self
     */
    public function setHotelReservationID(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\HotelReservationIDsAType\HotelReservationIDAType $hotelReservationID
    ) {
        $this->hotelReservationID = $hotelReservationID;

        return $this;
    }


}

