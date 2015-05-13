<?php

namespace Davispeixoto\OpenTravelAlliance\HotelRoomListType;

/**
 * Class representing RoomStaysAType
 */
class RoomStaysAType
{

    /**
     * Details the success, failure and warnings for the RoomStay.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelRoomListType\RoomStaysAType\RoomStayAType[]
     * $roomStay
     */
    private $roomStay = null;

    /**
     * Adds as roomStay
     *
     * Details the success, failure and warnings for the RoomStay.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelRoomListType\RoomStaysAType\RoomStayAType
     * $roomStay
     */
    public function addToRoomStay(
        \Davispeixoto\OpenTravelAlliance\HotelRoomListType\RoomStaysAType\RoomStayAType $roomStay
    ) {
        $this->roomStay[] = $roomStay;

        return $this;
    }

    /**
     * isset roomStay
     *
     * Details the success, failure and warnings for the RoomStay.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomStay($index)
    {
        return isset($this->roomStay[$index]);
    }

    /**
     * unset roomStay
     *
     * Details the success, failure and warnings for the RoomStay.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomStay($index)
    {
        unset($this->roomStay[$index]);
    }

    /**
     * Gets as roomStay
     *
     * Details the success, failure and warnings for the RoomStay.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelRoomListType\RoomStaysAType\RoomStayAType[]
     */
    public function getRoomStay()
    {
        return $this->roomStay;
    }

    /**
     * Sets a new roomStay
     *
     * Details the success, failure and warnings for the RoomStay.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelRoomListType\RoomStaysAType\RoomStayAType[]
     * $roomStay
     * @return self
     */
    public function setRoomStay(array $roomStay)
    {
        $this->roomStay = $roomStay;

        return $this;
    }


}

