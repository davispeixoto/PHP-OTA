<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelRoomListRQ;

/**
 * Class representing HotelRoomListsAType
 */
class HotelRoomListsAType
{

    /**
     * The Details which guests will occupy the rooms in a room block.
     *
     * @property \Davispeixoto\OpenTravelAlliance\HotelRoomListType[] $hotelRoomList
     */
    private $hotelRoomList = null;

    /**
     * Adds as hotelRoomList
     *
     * The Details which guests will occupy the rooms in a room block.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\HotelRoomListType $hotelRoomList
     */
    public function addToHotelRoomList(\Davispeixoto\OpenTravelAlliance\HotelRoomListType $hotelRoomList)
    {
        $this->hotelRoomList[] = $hotelRoomList;

        return $this;
    }

    /**
     * isset hotelRoomList
     *
     * The Details which guests will occupy the rooms in a room block.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelRoomList($index)
    {
        return isset($this->hotelRoomList[$index]);
    }

    /**
     * unset hotelRoomList
     *
     * The Details which guests will occupy the rooms in a room block.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelRoomList($index)
    {
        unset($this->hotelRoomList[$index]);
    }

    /**
     * Gets as hotelRoomList
     *
     * The Details which guests will occupy the rooms in a room block.
     *
     * @return \Davispeixoto\OpenTravelAlliance\HotelRoomListType[]
     */
    public function getHotelRoomList()
    {
        return $this->hotelRoomList;
    }

    /**
     * Sets a new hotelRoomList
     *
     * The Details which guests will occupy the rooms in a room block.
     *
     * @param \Davispeixoto\OpenTravelAlliance\HotelRoomListType[] $hotelRoomList
     * @return self
     */
    public function setHotelRoomList(array $hotelRoomList)
    {
        $this->hotelRoomList = $hotelRoomList;

        return $this;
    }


}

