<?php

namespace Davispeixoto\OpenTravelAlliance\MeetingRoomsType\MeetingRoomAType;

/**
 * Class representing AvailableCapacitiesAType
 */
class AvailableCapacitiesAType
{

    /**
     * The measureable dimensions and capacities of a meeting room.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MeetingRoomCapacityType[]
     * $meetingRoomCapacity
     */
    private $meetingRoomCapacity = null;

    /**
     * Adds as meetingRoomCapacity
     *
     * The measureable dimensions and capacities of a meeting room.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MeetingRoomCapacityType
     * $meetingRoomCapacity
     */
    public function addToMeetingRoomCapacity(
        \Davispeixoto\OpenTravelAlliance\MeetingRoomCapacityType $meetingRoomCapacity
    ) {
        $this->meetingRoomCapacity[] = $meetingRoomCapacity;

        return $this;
    }

    /**
     * isset meetingRoomCapacity
     *
     * The measureable dimensions and capacities of a meeting room.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMeetingRoomCapacity($index)
    {
        return isset($this->meetingRoomCapacity[$index]);
    }

    /**
     * unset meetingRoomCapacity
     *
     * The measureable dimensions and capacities of a meeting room.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMeetingRoomCapacity($index)
    {
        unset($this->meetingRoomCapacity[$index]);
    }

    /**
     * Gets as meetingRoomCapacity
     *
     * The measureable dimensions and capacities of a meeting room.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MeetingRoomCapacityType[]
     */
    public function getMeetingRoomCapacity()
    {
        return $this->meetingRoomCapacity;
    }

    /**
     * Sets a new meetingRoomCapacity
     *
     * The measureable dimensions and capacities of a meeting room.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MeetingRoomCapacityType[]
     * $meetingRoomCapacity
     * @return self
     */
    public function setMeetingRoomCapacity(array $meetingRoomCapacity)
    {
        $this->meetingRoomCapacity = $meetingRoomCapacity;

        return $this;
    }


}

