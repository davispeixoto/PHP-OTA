<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS;

/**
 * Class representing HotelReservationsAType
 */
class HotelReservationsAType
{

    /**
     * HotelReservation MUST specify the details of the reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType
     * $hotelReservation
     */
    private $hotelReservation = null;

    /**
     * Gets as hotelReservation
     *
     * HotelReservation MUST specify the details of the reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType
     */
    public function getHotelReservation()
    {
        return $this->hotelReservation;
    }

    /**
     * Sets a new hotelReservation
     *
     * HotelReservation MUST specify the details of the reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType
     * $hotelReservation
     * @return self
     */
    public function setHotelReservation(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType $hotelReservation
    ) {
        $this->hotelReservation = $hotelReservation;

        return $this;
    }


}

