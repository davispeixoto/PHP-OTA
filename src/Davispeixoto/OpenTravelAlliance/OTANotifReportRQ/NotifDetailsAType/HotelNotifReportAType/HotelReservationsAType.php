<?php

namespace Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType;

/**
 * Class representing HotelReservationsAType
 */
class HotelReservationsAType
{

    /**
     * A hotel reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType\HotelReservationsAType\HotelReservationAType[]
     * $hotelReservation
     */
    private $hotelReservation = null;

    /**
     * Adds as hotelReservation
     *
     * A hotel reservation.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType\HotelReservationsAType\HotelReservationAType
     * $hotelReservation
     */
    public function addToHotelReservation(
        \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType\HotelReservationsAType\HotelReservationAType $hotelReservation
    ) {
        $this->hotelReservation[] = $hotelReservation;

        return $this;
    }

    /**
     * isset hotelReservation
     *
     * A hotel reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelReservation($index)
    {
        return isset($this->hotelReservation[$index]);
    }

    /**
     * unset hotelReservation
     *
     * A hotel reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelReservation($index)
    {
        unset($this->hotelReservation[$index]);
    }

    /**
     * Gets as hotelReservation
     *
     * A hotel reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType\HotelReservationsAType\HotelReservationAType[]
     */
    public function getHotelReservation()
    {
        return $this->hotelReservation;
    }

    /**
     * Sets a new hotelReservation
     *
     * A hotel reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType\HotelReservationsAType\HotelReservationAType[]
     * $hotelReservation
     * @return self
     */
    public function setHotelReservation(array $hotelReservation)
    {
        $this->hotelReservation = $hotelReservation;

        return $this;
    }


}

