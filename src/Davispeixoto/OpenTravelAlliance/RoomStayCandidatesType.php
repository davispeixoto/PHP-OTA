<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RoomStayCandidatesType
 *
 * A container for preferences for the room requested.
 * XSD Type: RoomStayCandidatesType
 */
class RoomStayCandidatesType
{

    /**
     * The RoomStayCandidate MAY identify preferences for the room requested.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RoomStayCandidateType
     * $roomStayCandidate
     */
    private $roomStayCandidate = null;

    /**
     * Gets as roomStayCandidate
     *
     * The RoomStayCandidate MAY identify preferences for the room requested.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RoomStayCandidateType
     */
    public function getRoomStayCandidate()
    {
        return $this->roomStayCandidate;
    }

    /**
     * Sets a new roomStayCandidate
     *
     * The RoomStayCandidate MAY identify preferences for the room requested.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoomStayCandidateType $roomStayCandidate
     * @return self
     */
    public function setRoomStayCandidate(\Davispeixoto\OpenTravelAlliance\RoomStayCandidateType $roomStayCandidate)
    {
        $this->roomStayCandidate = $roomStayCandidate;

        return $this;
    }


}

