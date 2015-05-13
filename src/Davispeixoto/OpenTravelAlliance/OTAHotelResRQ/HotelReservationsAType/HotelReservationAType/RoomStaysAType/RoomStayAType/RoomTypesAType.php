<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType;

/**
 * Class representing RoomTypesAType
 */
class RoomTypesAType
{

    /**
     * The RoomType MAY specify bed type and smoking preferences for the reservation
     * request.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType\RoomTypeAType
     * $roomType
     */
    private $roomType = null;

    /**
     * Gets as roomType
     *
     * The RoomType MAY specify bed type and smoking preferences for the reservation
     * request.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType\RoomTypeAType
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Sets a new roomType
     *
     * The RoomType MAY specify bed type and smoking preferences for the reservation
     * request.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType\RoomTypeAType
     * $roomType
     * @return self
     */
    public function setRoomType(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType\RoomTypeAType $roomType
    ) {
        $this->roomType = $roomType;

        return $this;
    }


}

