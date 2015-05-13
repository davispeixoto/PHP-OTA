<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType;

/**
 * Class representing RoomRatesAType
 */
class RoomRatesAType
{

    /**
     * RoomRate MUST identify a specific room rate to be booked.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType[]
     * $roomRate
     */
    private $roomRate = null;

    /**
     * Adds as roomRate
     *
     * RoomRate MUST identify a specific room rate to be booked.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType
     * $roomRate
     */
    public function addToRoomRate(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType $roomRate
    ) {
        $this->roomRate[] = $roomRate;

        return $this;
    }

    /**
     * isset roomRate
     *
     * RoomRate MUST identify a specific room rate to be booked.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomRate($index)
    {
        return isset($this->roomRate[$index]);
    }

    /**
     * unset roomRate
     *
     * RoomRate MUST identify a specific room rate to be booked.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomRate($index)
    {
        unset($this->roomRate[$index]);
    }

    /**
     * Gets as roomRate
     *
     * RoomRate MUST identify a specific room rate to be booked.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType[]
     */
    public function getRoomRate()
    {
        return $this->roomRate;
    }

    /**
     * Sets a new roomRate
     *
     * RoomRate MUST identify a specific room rate to be booked.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType[]
     * $roomRate
     * @return self
     */
    public function setRoomRate(array $roomRate)
    {
        $this->roomRate = $roomRate;

        return $this;
    }


}

