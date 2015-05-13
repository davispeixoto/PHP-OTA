<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType;

/**
 * Class representing StayDayRoomsAType
 */
class StayDayRoomsAType
{

    /**
     * A container for the room requirements data.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType\StayDayRoomsAType\StayDayRoomAType[]
     * $stayDayRoom
     */
    private $stayDayRoom = null;

    /**
     * Adds as stayDayRoom
     *
     * A container for the room requirements data.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType\StayDayRoomsAType\StayDayRoomAType
     * $stayDayRoom
     */
    public function addToStayDayRoom(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType\StayDayRoomsAType\StayDayRoomAType $stayDayRoom
    ) {
        $this->stayDayRoom[] = $stayDayRoom;

        return $this;
    }

    /**
     * isset stayDayRoom
     *
     * A container for the room requirements data.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStayDayRoom($index)
    {
        return isset($this->stayDayRoom[$index]);
    }

    /**
     * unset stayDayRoom
     *
     * A container for the room requirements data.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStayDayRoom($index)
    {
        unset($this->stayDayRoom[$index]);
    }

    /**
     * Gets as stayDayRoom
     *
     * A container for the room requirements data.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType\StayDayRoomsAType\StayDayRoomAType[]
     */
    public function getStayDayRoom()
    {
        return $this->stayDayRoom;
    }

    /**
     * Sets a new stayDayRoom
     *
     * A container for the room requirements data.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType\StayDayRoomsAType\StayDayRoomAType[]
     * $stayDayRoom
     * @return self
     */
    public function setStayDayRoom(array $stayDayRoom)
    {
        $this->stayDayRoom = $stayDayRoom;

        return $this;
    }


}

