<?php

namespace Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType;

/**
 * Class representing StayDateRoomsAType
 */
class StayDateRoomsAType
{

    /**
     * A container for the room availability data.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType[]
     * $stayDateRoom
     */
    private $stayDateRoom = null;

    /**
     * Adds as stayDateRoom
     *
     * A container for the room availability data.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType
     * $stayDateRoom
     */
    public function addToStayDateRoom(
        \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType $stayDateRoom
    ) {
        $this->stayDateRoom[] = $stayDateRoom;

        return $this;
    }

    /**
     * isset stayDateRoom
     *
     * A container for the room availability data.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStayDateRoom($index)
    {
        return isset($this->stayDateRoom[$index]);
    }

    /**
     * unset stayDateRoom
     *
     * A container for the room availability data.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStayDateRoom($index)
    {
        unset($this->stayDateRoom[$index]);
    }

    /**
     * Gets as stayDateRoom
     *
     * A container for the room availability data.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType[]
     */
    public function getStayDateRoom()
    {
        return $this->stayDateRoom;
    }

    /**
     * Sets a new stayDateRoom
     *
     * A container for the room availability data.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType[]
     * $stayDateRoom
     * @return self
     */
    public function setStayDateRoom(array $stayDateRoom)
    {
        $this->stayDateRoom = $stayDateRoom;

        return $this;
    }


}

