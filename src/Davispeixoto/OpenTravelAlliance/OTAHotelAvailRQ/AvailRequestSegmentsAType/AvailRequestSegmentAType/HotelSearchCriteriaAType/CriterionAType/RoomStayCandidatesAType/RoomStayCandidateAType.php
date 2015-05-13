<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\RoomStayCandidatesAType;

/**
 * Class representing RoomStayCandidateAType
 */
class RoomStayCandidateAType
{

    /**
     * The BedTypeCode MAY indicate the type of bed(s) for the availability request.
     * Typical values include Double, Twin, Queen, or King. Refer to OpenTravel Code
     * List Bed Type Code (BED).
     *
     * @property string[] $bedTypeCode
     */
    private $bedTypeCode = null;

    /**
     * The non-smoking indicator, when true, indicates that only non-smoking rooms
     * SHOULD be returned in the availability response.
     *
     * @property boolean $nonSmoking
     */
    private $nonSmoking = null;

    /**
     * GuestCounts contains a collection of GuestCount elements that MUST identify the
     * number of guests for the availability request.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\RoomStayCandidatesAType\RoomStayCandidateAType\GuestCountsAType\GuestCountAType[]
     * $guestCounts
     */
    private $guestCounts = null;

    /**
     * Adds as bedTypeCode
     *
     * The BedTypeCode MAY indicate the type of bed(s) for the availability request.
     * Typical values include Double, Twin, Queen, or King. Refer to OpenTravel Code
     * List Bed Type Code (BED).
     *
     * @return self
     * @param string $bedTypeCode
     */
    public function addToBedTypeCode($bedTypeCode)
    {
        $this->bedTypeCode[] = $bedTypeCode;

        return $this;
    }

    /**
     * isset bedTypeCode
     *
     * The BedTypeCode MAY indicate the type of bed(s) for the availability request.
     * Typical values include Double, Twin, Queen, or King. Refer to OpenTravel Code
     * List Bed Type Code (BED).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBedTypeCode($index)
    {
        return isset($this->bedTypeCode[$index]);
    }

    /**
     * unset bedTypeCode
     *
     * The BedTypeCode MAY indicate the type of bed(s) for the availability request.
     * Typical values include Double, Twin, Queen, or King. Refer to OpenTravel Code
     * List Bed Type Code (BED).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBedTypeCode($index)
    {
        unset($this->bedTypeCode[$index]);
    }

    /**
     * Gets as bedTypeCode
     *
     * The BedTypeCode MAY indicate the type of bed(s) for the availability request.
     * Typical values include Double, Twin, Queen, or King. Refer to OpenTravel Code
     * List Bed Type Code (BED).
     *
     * @return string[]
     */
    public function getBedTypeCode()
    {
        return $this->bedTypeCode;
    }

    /**
     * Sets a new bedTypeCode
     *
     * The BedTypeCode MAY indicate the type of bed(s) for the availability request.
     * Typical values include Double, Twin, Queen, or King. Refer to OpenTravel Code
     * List Bed Type Code (BED).
     *
     * @param string $bedTypeCode
     * @return self
     */
    public function setBedTypeCode(array $bedTypeCode)
    {
        $this->bedTypeCode = $bedTypeCode;

        return $this;
    }

    /**
     * Gets as nonSmoking
     *
     * The non-smoking indicator, when true, indicates that only non-smoking rooms
     * SHOULD be returned in the availability response.
     *
     * @return boolean
     */
    public function getNonSmoking()
    {
        return $this->nonSmoking;
    }

    /**
     * Sets a new nonSmoking
     *
     * The non-smoking indicator, when true, indicates that only non-smoking rooms
     * SHOULD be returned in the availability response.
     *
     * @param boolean $nonSmoking
     * @return self
     */
    public function setNonSmoking($nonSmoking)
    {
        $this->nonSmoking = $nonSmoking;

        return $this;
    }

    /**
     * Adds as guestCount
     *
     * GuestCounts contains a collection of GuestCount elements that MUST identify the
     * number of guests for the availability request.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\RoomStayCandidatesAType\RoomStayCandidateAType\GuestCountsAType\GuestCountAType
     * $guestCount
     */
    public function addToGuestCounts(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\RoomStayCandidatesAType\RoomStayCandidateAType\GuestCountsAType\GuestCountAType $guestCount
    ) {
        $this->guestCounts[] = $guestCount;

        return $this;
    }

    /**
     * isset guestCounts
     *
     * GuestCounts contains a collection of GuestCount elements that MUST identify the
     * number of guests for the availability request.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuestCounts($index)
    {
        return isset($this->guestCounts[$index]);
    }

    /**
     * unset guestCounts
     *
     * GuestCounts contains a collection of GuestCount elements that MUST identify the
     * number of guests for the availability request.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuestCounts($index)
    {
        unset($this->guestCounts[$index]);
    }

    /**
     * Gets as guestCounts
     *
     * GuestCounts contains a collection of GuestCount elements that MUST identify the
     * number of guests for the availability request.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\RoomStayCandidatesAType\RoomStayCandidateAType\GuestCountsAType\GuestCountAType[]
     */
    public function getGuestCounts()
    {
        return $this->guestCounts;
    }

    /**
     * Sets a new guestCounts
     *
     * GuestCounts contains a collection of GuestCount elements that MUST identify the
     * number of guests for the availability request.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType\HotelSearchCriteriaAType\CriterionAType\RoomStayCandidatesAType\RoomStayCandidateAType\GuestCountsAType\GuestCountAType[]
     * $guestCounts
     * @return self
     */
    public function setGuestCounts(array $guestCounts)
    {
        $this->guestCounts = $guestCounts;

        return $this;
    }


}

