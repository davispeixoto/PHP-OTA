<?php

namespace Davispeixoto\OpenTravelAlliance\AvailRequestSegmentsType\AvailRequestSegmentAType;

/**
 * Class representing RoomStayCandidatesAType
 */
class RoomStayCandidatesAType
{

    /**
     * Element used to identify available room products.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AvailRequestSegmentsType\AvailRequestSegmentAType\RoomStayCandidatesAType\RoomStayCandidateAType[]
     * $roomStayCandidate
     */
    private $roomStayCandidate = null;

    /**
     * Adds as roomStayCandidate
     *
     * Element used to identify available room products.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AvailRequestSegmentsType\AvailRequestSegmentAType\RoomStayCandidatesAType\RoomStayCandidateAType
     * $roomStayCandidate
     */
    public function addToRoomStayCandidate(
        \Davispeixoto\OpenTravelAlliance\AvailRequestSegmentsType\AvailRequestSegmentAType\RoomStayCandidatesAType\RoomStayCandidateAType $roomStayCandidate
    ) {
        $this->roomStayCandidate[] = $roomStayCandidate;

        return $this;
    }

    /**
     * isset roomStayCandidate
     *
     * Element used to identify available room products.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomStayCandidate($index)
    {
        return isset($this->roomStayCandidate[$index]);
    }

    /**
     * unset roomStayCandidate
     *
     * Element used to identify available room products.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomStayCandidate($index)
    {
        unset($this->roomStayCandidate[$index]);
    }

    /**
     * Gets as roomStayCandidate
     *
     * Element used to identify available room products.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AvailRequestSegmentsType\AvailRequestSegmentAType\RoomStayCandidatesAType\RoomStayCandidateAType[]
     */
    public function getRoomStayCandidate()
    {
        return $this->roomStayCandidate;
    }

    /**
     * Sets a new roomStayCandidate
     *
     * Element used to identify available room products.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AvailRequestSegmentsType\AvailRequestSegmentAType\RoomStayCandidatesAType\RoomStayCandidateAType[]
     * $roomStayCandidate
     * @return self
     */
    public function setRoomStayCandidate(array $roomStayCandidate)
    {
        $this->roomStayCandidate = $roomStayCandidate;

        return $this;
    }


}

