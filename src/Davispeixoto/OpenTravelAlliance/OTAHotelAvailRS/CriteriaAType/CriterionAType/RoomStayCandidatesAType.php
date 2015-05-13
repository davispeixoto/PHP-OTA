<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\CriteriaAType\CriterionAType;

/**
 * Class representing RoomStayCandidatesAType
 */
class RoomStayCandidatesAType
{

    /**
     * The RoomStayCandidate attributes MAY identify preferences for the room
     * requested.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\CriteriaAType\CriterionAType\RoomStayCandidatesAType\RoomStayCandidateAType
     * $roomStayCandidate
     */
    private $roomStayCandidate = null;

    /**
     * Gets as roomStayCandidate
     *
     * The RoomStayCandidate attributes MAY identify preferences for the room
     * requested.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\CriteriaAType\CriterionAType\RoomStayCandidatesAType\RoomStayCandidateAType
     */
    public function getRoomStayCandidate()
    {
        return $this->roomStayCandidate;
    }

    /**
     * Sets a new roomStayCandidate
     *
     * The RoomStayCandidate attributes MAY identify preferences for the room
     * requested.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\CriteriaAType\CriterionAType\RoomStayCandidatesAType\RoomStayCandidateAType
     * $roomStayCandidate
     * @return self
     */
    public function setRoomStayCandidate(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\CriteriaAType\CriterionAType\RoomStayCandidatesAType\RoomStayCandidateAType $roomStayCandidate
    ) {
        $this->roomStayCandidate = $roomStayCandidate;

        return $this;
    }


}

