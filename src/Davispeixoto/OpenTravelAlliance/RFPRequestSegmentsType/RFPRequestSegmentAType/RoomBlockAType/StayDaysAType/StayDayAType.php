<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType;

/**
 * Class representing StayDayAType
 */
class StayDayAType
{

    /**
     * The number which indicates the day of the room requirements (e.g. 1, 2, 3, etc).
     *
     * @property integer $dayNumber
     */
    private $dayNumber = null;

    /**
     * Total number of guests for this day.
     *
     * @property integer $guestQuantity
     */
    private $guestQuantity = null;

    /**
     * Total number of rooms needed per day.
     *
     * @property integer $totalNumberOfUnits
     */
    private $totalNumberOfUnits = null;

    /**
     * A collection of multiple StayDayRooms.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType\StayDayRoomsAType\StayDayRoomAType[]
     * $stayDayRooms
     */
    private $stayDayRooms = null;

    /**
     * Gets as dayNumber
     *
     * The number which indicates the day of the room requirements (e.g. 1, 2, 3, etc).
     *
     * @return integer
     */
    public function getDayNumber()
    {
        return $this->dayNumber;
    }

    /**
     * Sets a new dayNumber
     *
     * The number which indicates the day of the room requirements (e.g. 1, 2, 3, etc).
     *
     * @param integer $dayNumber
     * @return self
     */
    public function setDayNumber($dayNumber)
    {
        $this->dayNumber = $dayNumber;

        return $this;
    }

    /**
     * Gets as guestQuantity
     *
     * Total number of guests for this day.
     *
     * @return integer
     */
    public function getGuestQuantity()
    {
        return $this->guestQuantity;
    }

    /**
     * Sets a new guestQuantity
     *
     * Total number of guests for this day.
     *
     * @param integer $guestQuantity
     * @return self
     */
    public function setGuestQuantity($guestQuantity)
    {
        $this->guestQuantity = $guestQuantity;

        return $this;
    }

    /**
     * Gets as totalNumberOfUnits
     *
     * Total number of rooms needed per day.
     *
     * @return integer
     */
    public function getTotalNumberOfUnits()
    {
        return $this->totalNumberOfUnits;
    }

    /**
     * Sets a new totalNumberOfUnits
     *
     * Total number of rooms needed per day.
     *
     * @param integer $totalNumberOfUnits
     * @return self
     */
    public function setTotalNumberOfUnits($totalNumberOfUnits)
    {
        $this->totalNumberOfUnits = $totalNumberOfUnits;

        return $this;
    }

    /**
     * Adds as stayDayRoom
     *
     * A collection of multiple StayDayRooms.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType\StayDayRoomsAType\StayDayRoomAType
     * $stayDayRoom
     */
    public function addToStayDayRooms(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType\StayDayRoomsAType\StayDayRoomAType $stayDayRoom
    ) {
        $this->stayDayRooms[] = $stayDayRoom;

        return $this;
    }

    /**
     * isset stayDayRooms
     *
     * A collection of multiple StayDayRooms.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStayDayRooms($index)
    {
        return isset($this->stayDayRooms[$index]);
    }

    /**
     * unset stayDayRooms
     *
     * A collection of multiple StayDayRooms.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStayDayRooms($index)
    {
        unset($this->stayDayRooms[$index]);
    }

    /**
     * Gets as stayDayRooms
     *
     * A collection of multiple StayDayRooms.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType\StayDayRoomsAType\StayDayRoomAType[]
     */
    public function getStayDayRooms()
    {
        return $this->stayDayRooms;
    }

    /**
     * Sets a new stayDayRooms
     *
     * A collection of multiple StayDayRooms.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType\StayDayRoomsAType\StayDayRoomAType[]
     * $stayDayRooms
     * @return self
     */
    public function setStayDayRooms(array $stayDayRooms)
    {
        $this->stayDayRooms = $stayDayRooms;

        return $this;
    }


}

