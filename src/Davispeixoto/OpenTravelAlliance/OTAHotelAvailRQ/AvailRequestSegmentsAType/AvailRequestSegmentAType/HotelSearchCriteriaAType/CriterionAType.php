<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType;

/**
 * Class representing CriterionAType
 */
class CriterionAType
{

    /**
     * The hotel reference identifies either the specific hotel or the city for which
     * the availability should be performed. Either the HotelCode or the HotelCityCode
     * MUST be provided.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\HotelRefAType
     * $hotelRef
     */
    private $hotelRef = null;

    /**
     * The StayDateRange MUST specify the arrival and departure dates for the
     * availability request.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\StayDateRangeAType
     * $stayDateRange
     */
    private $stayDateRange = null;

    /**
     * The RoomStayCandidates container allows for future expansion of the message.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\RoomStayCandidatesAType
     * $roomStayCandidates
     */
    private $roomStayCandidates = null;

    /**
     * Gets as hotelRef
     *
     * The hotel reference identifies either the specific hotel or the city for which
     * the availability should be performed. Either the HotelCode or the HotelCityCode
     * MUST be provided.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\HotelRefAType
     */
    public function getHotelRef()
    {
        return $this->hotelRef;
    }

    /**
     * Sets a new hotelRef
     *
     * The hotel reference identifies either the specific hotel or the city for which
     * the availability should be performed. Either the HotelCode or the HotelCityCode
     * MUST be provided.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\HotelRefAType
     * $hotelRef
     * @return self
     */
    public function setHotelRef(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\HotelRefAType $hotelRef
    ) {
        $this->hotelRef = $hotelRef;

        return $this;
    }

    /**
     * Gets as stayDateRange
     *
     * The StayDateRange MUST specify the arrival and departure dates for the
     * availability request.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\StayDateRangeAType
     */
    public function getStayDateRange()
    {
        return $this->stayDateRange;
    }

    /**
     * Sets a new stayDateRange
     *
     * The StayDateRange MUST specify the arrival and departure dates for the
     * availability request.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\StayDateRangeAType
     * $stayDateRange
     * @return self
     */
    public function setStayDateRange(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\StayDateRangeAType $stayDateRange
    ) {
        $this->stayDateRange = $stayDateRange;

        return $this;
    }

    /**
     * Gets as roomStayCandidates
     *
     * The RoomStayCandidates container allows for future expansion of the message.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\RoomStayCandidatesAType
     */
    public function getRoomStayCandidates()
    {
        return $this->roomStayCandidates;
    }

    /**
     * Sets a new roomStayCandidates
     *
     * The RoomStayCandidates container allows for future expansion of the message.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\RoomStayCandidatesAType
     * $roomStayCandidates
     * @return self
     */
    public function setRoomStayCandidates(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\RoomStayCandidatesAType $roomStayCandidates
    ) {
        $this->roomStayCandidates = $roomStayCandidates;

        return $this;
    }


}

