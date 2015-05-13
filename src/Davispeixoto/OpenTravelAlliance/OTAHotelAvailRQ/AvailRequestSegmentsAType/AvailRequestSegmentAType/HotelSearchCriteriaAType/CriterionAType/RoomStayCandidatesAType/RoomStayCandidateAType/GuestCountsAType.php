<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\RoomStayCandidatesAType\RoomStayCandidateAType;

/**
 * Class representing GuestCountsAType
 */
class GuestCountsAType
{

    /**
     * GuestCount MUST identify the number of guests for the request. The number of
     * guests and OPTIONALLY the ages of the guests MAY be used to determine the room
     * rates based on business rules for occupancy at each property. Only the rates
     * that apply to the guest count information specified SHOULD be returned.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\RoomStayCandidatesAType\RoomStayCandidateAType\GuestCountsAType\GuestCountAType[]
     * $guestCount
     */
    private $guestCount = null;

    /**
     * Adds as guestCount
     *
     * GuestCount MUST identify the number of guests for the request. The number of
     * guests and OPTIONALLY the ages of the guests MAY be used to determine the room
     * rates based on business rules for occupancy at each property. Only the rates
     * that apply to the guest count information specified SHOULD be returned.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\RoomStayCandidatesAType\RoomStayCandidateAType\GuestCountsAType\GuestCountAType
     * $guestCount
     */
    public function addToGuestCount(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\RoomStayCandidatesAType\RoomStayCandidateAType\GuestCountsAType\GuestCountAType $guestCount
    ) {
        $this->guestCount[] = $guestCount;

        return $this;
    }

    /**
     * isset guestCount
     *
     * GuestCount MUST identify the number of guests for the request. The number of
     * guests and OPTIONALLY the ages of the guests MAY be used to determine the room
     * rates based on business rules for occupancy at each property. Only the rates
     * that apply to the guest count information specified SHOULD be returned.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuestCount($index)
    {
        return isset($this->guestCount[$index]);
    }

    /**
     * unset guestCount
     *
     * GuestCount MUST identify the number of guests for the request. The number of
     * guests and OPTIONALLY the ages of the guests MAY be used to determine the room
     * rates based on business rules for occupancy at each property. Only the rates
     * that apply to the guest count information specified SHOULD be returned.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuestCount($index)
    {
        unset($this->guestCount[$index]);
    }

    /**
     * Gets as guestCount
     *
     * GuestCount MUST identify the number of guests for the request. The number of
     * guests and OPTIONALLY the ages of the guests MAY be used to determine the room
     * rates based on business rules for occupancy at each property. Only the rates
     * that apply to the guest count information specified SHOULD be returned.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\RoomStayCandidatesAType\RoomStayCandidateAType\GuestCountsAType\GuestCountAType[]
     */
    public function getGuestCount()
    {
        return $this->guestCount;
    }

    /**
     * Sets a new guestCount
     *
     * GuestCount MUST identify the number of guests for the request. The number of
     * guests and OPTIONALLY the ages of the guests MAY be used to determine the room
     * rates based on business rules for occupancy at each property. Only the rates
     * that apply to the guest count information specified SHOULD be returned.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\RoomStayCandidatesAType\RoomStayCandidateAType\GuestCountsAType\GuestCountAType[]
     * $guestCount
     * @return self
     */
    public function setGuestCount(array $guestCount)
    {
        $this->guestCount = $guestCount;

        return $this;
    }


}

