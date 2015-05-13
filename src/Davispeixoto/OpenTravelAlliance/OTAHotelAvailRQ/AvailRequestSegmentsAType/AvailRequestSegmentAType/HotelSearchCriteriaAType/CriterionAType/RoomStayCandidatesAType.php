<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType;

/**
 * Class representing RoomStayCandidatesAType
 */
class RoomStayCandidatesAType
{

    /**
     * The RoomStayCandidate MAY identify preferences for the room requested.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\RoomStayCandidatesAType\RoomStayCandidateAType
     * $roomStayCandidate
     */
    private $roomStayCandidate = null;

    /**
     * Gets as roomStayCandidate
     *
     * The RoomStayCandidate MAY identify preferences for the room requested.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\RoomStayCandidatesAType\RoomStayCandidateAType
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
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\RoomStayCandidatesAType\RoomStayCandidateAType
     * $roomStayCandidate
     * @return self
     */
    public function setRoomStayCandidate(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\RoomStayCandidatesAType\RoomStayCandidateAType $roomStayCandidate
    ) {
        $this->roomStayCandidate = $roomStayCandidate;

        return $this;
    }


}

