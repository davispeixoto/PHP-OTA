<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CriterionType
 *
 * A collection of hotel search criteria. See CriteriaType.
 * XSD Type: CriterionType
 */
class CriterionType
{

    /**
     * The hotel reference identifies either the specific hotel or the city for which
     * the availability should be performed. Either the HotelCode or the HotelCityCode
     * MUST be provided.
     *
     * @property \Davispeixoto\OpenTravelAlliance\HotelRefType $hotelRef
     */
    private $hotelRef = null;

    /**
     * The StayDateRange MUST specify the arrival and departure dates for the
     * availability request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\StayDateRangeType $stayDateRange
     */
    private $stayDateRange = null;

    /**
     * The RoomStayCandidates container allows for future expansion of the message.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RoomStayCandidatesType
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
     * @return \Davispeixoto\OpenTravelAlliance\HotelRefType
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
     * @param \Davispeixoto\OpenTravelAlliance\HotelRefType $hotelRef
     * @return self
     */
    public function setHotelRef(\Davispeixoto\OpenTravelAlliance\HotelRefType $hotelRef)
    {
        $this->hotelRef = $hotelRef;

        return $this;
    }

    /**
     * Gets as stayDateRange
     *
     * The StayDateRange MUST specify the arrival and departure dates for the
     * availability request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\StayDateRangeType
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
     * @param \Davispeixoto\OpenTravelAlliance\StayDateRangeType $stayDateRange
     * @return self
     */
    public function setStayDateRange(\Davispeixoto\OpenTravelAlliance\StayDateRangeType $stayDateRange)
    {
        $this->stayDateRange = $stayDateRange;

        return $this;
    }

    /**
     * Gets as roomStayCandidates
     *
     * The RoomStayCandidates container allows for future expansion of the message.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RoomStayCandidatesType
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
     * @param \Davispeixoto\OpenTravelAlliance\RoomStayCandidatesType
     * $roomStayCandidates
     * @return self
     */
    public function setRoomStayCandidates(\Davispeixoto\OpenTravelAlliance\RoomStayCandidatesType $roomStayCandidates)
    {
        $this->roomStayCandidates = $roomStayCandidates;

        return $this;
    }


}

