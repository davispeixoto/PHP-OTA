<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType;

/**
 * Class representing RoomStaysAType
 */
class RoomStaysAType
{

    /**
     * RoomStay MUST contain the details of the Room Stay.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType
     * $roomStay
     */
    private $roomStay = null;

    /**
     * Gets as roomStay
     *
     * RoomStay MUST contain the details of the Room Stay.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType
     */
    public function getRoomStay()
    {
        return $this->roomStay;
    }

    /**
     * Sets a new roomStay
     *
     * RoomStay MUST contain the details of the Room Stay.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType
     * $roomStay
     * @return self
     */
    public function setRoomStay(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType $roomStay
    ) {
        $this->roomStay = $roomStay;

        return $this;
    }


}

