<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ;

/**
 * Class representing HotelReservationsAType
 */
class HotelReservationsAType
{

    /**
     * HotelReservation MUST contain the information REQUIRED to book the reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType
     * $hotelReservation
     */
    private $hotelReservation = null;

    /**
     * Gets as hotelReservation
     *
     * HotelReservation MUST contain the information REQUIRED to book the reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType
     */
    public function getHotelReservation()
    {
        return $this->hotelReservation;
    }

    /**
     * Sets a new hotelReservation
     *
     * HotelReservation MUST contain the information REQUIRED to book the reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType
     * $hotelReservation
     * @return self
     */
    public function setHotelReservation(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType $hotelReservation
    ) {
        $this->hotelReservation = $hotelReservation;

        return $this;
    }


}

