<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType;

/**
 * Class representing HotelInvCountRequestAType
 */
class HotelInvCountRequestAType
{

    /**
     * Boolean Flag indicating if overbooking or allocation (defined by
     * BookingLimitMessageType) is requested.
     *
     * @property boolean $sendBookingLimit
     */
    private $sendBookingLimit = null;

    /**
     * An enumerated type defining the function of the booking limit message. Values:
     * SetLimit (Allocation), AdjustLimit (Overbooking).
     *
     * @property string $bookingLimitMessageType
     */
    private $bookingLimitMessageType = null;

    /**
     * A date or range of dates for the rate plan.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType\DateRangeAType
     * $dateRange
     */
    private $dateRange = null;

    /**
     * Collection of room stay candidates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[]
     * $roomTypeCandidates
     */
    private $roomTypeCandidates = null;

    /**
     * Indicates the detail of hotel reference information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType\HotelRefAType
     * $hotelRef
     */
    private $hotelRef = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as sendBookingLimit
     *
     * Boolean Flag indicating if overbooking or allocation (defined by
     * BookingLimitMessageType) is requested.
     *
     * @return boolean
     */
    public function getSendBookingLimit()
    {
        return $this->sendBookingLimit;
    }

    /**
     * Sets a new sendBookingLimit
     *
     * Boolean Flag indicating if overbooking or allocation (defined by
     * BookingLimitMessageType) is requested.
     *
     * @param boolean $sendBookingLimit
     * @return self
     */
    public function setSendBookingLimit($sendBookingLimit)
    {
        $this->sendBookingLimit = $sendBookingLimit;

        return $this;
    }

    /**
     * Gets as bookingLimitMessageType
     *
     * An enumerated type defining the function of the booking limit message. Values:
     * SetLimit (Allocation), AdjustLimit (Overbooking).
     *
     * @return string
     */
    public function getBookingLimitMessageType()
    {
        return $this->bookingLimitMessageType;
    }

    /**
     * Sets a new bookingLimitMessageType
     *
     * An enumerated type defining the function of the booking limit message. Values:
     * SetLimit (Allocation), AdjustLimit (Overbooking).
     *
     * @param string $bookingLimitMessageType
     * @return self
     */
    public function setBookingLimitMessageType($bookingLimitMessageType)
    {
        $this->bookingLimitMessageType = $bookingLimitMessageType;

        return $this;
    }

    /**
     * Gets as dateRange
     *
     * A date or range of dates for the rate plan.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType\DateRangeAType
     */
    public function getDateRange()
    {
        return $this->dateRange;
    }

    /**
     * Sets a new dateRange
     *
     * A date or range of dates for the rate plan.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType\DateRangeAType
     * $dateRange
     * @return self
     */
    public function setDateRange(
        \Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType\DateRangeAType $dateRange
    ) {
        $this->dateRange = $dateRange;

        return $this;
    }

    /**
     * Adds as roomTypeCandidate
     *
     * Collection of room stay candidates.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType
     * $roomTypeCandidate
     */
    public function addToRoomTypeCandidates(
        \Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType $roomTypeCandidate
    ) {
        $this->roomTypeCandidates[] = $roomTypeCandidate;

        return $this;
    }

    /**
     * isset roomTypeCandidates
     *
     * Collection of room stay candidates.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomTypeCandidates($index)
    {
        return isset($this->roomTypeCandidates[$index]);
    }

    /**
     * unset roomTypeCandidates
     *
     * Collection of room stay candidates.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomTypeCandidates($index)
    {
        unset($this->roomTypeCandidates[$index]);
    }

    /**
     * Gets as roomTypeCandidates
     *
     * Collection of room stay candidates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[]
     */
    public function getRoomTypeCandidates()
    {
        return $this->roomTypeCandidates;
    }

    /**
     * Sets a new roomTypeCandidates
     *
     * Collection of room stay candidates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[]
     * $roomTypeCandidates
     * @return self
     */
    public function setRoomTypeCandidates(array $roomTypeCandidates)
    {
        $this->roomTypeCandidates = $roomTypeCandidates;

        return $this;
    }

    /**
     * Gets as hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType\HotelRefAType
     */
    public function getHotelRef()
    {
        return $this->hotelRef;
    }

    /**
     * Sets a new hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType\HotelRefAType
     * $hotelRef
     * @return self
     */
    public function setHotelRef(
        \Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType\HotelRefAType $hotelRef
    ) {
        $this->hotelRef = $hotelRef;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

