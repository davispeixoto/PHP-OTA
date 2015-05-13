<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelRoomListRS;

/**
 * Class representing HotelRoomListsAType
 */
class HotelRoomListsAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\HotelRoomListType[] $hotelRoomList
     */
    private $hotelRoomList = null;

    /**
     * Adds as hotelRoomList
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
     * @return \Davispeixoto\OpenTravelAlliance\HotelRoomListType[]
     */
    public function getHotelRoomList()
    {
        return $this->hotelRoomList;
    }

    /**
     * Sets a new hotelRoomList
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

