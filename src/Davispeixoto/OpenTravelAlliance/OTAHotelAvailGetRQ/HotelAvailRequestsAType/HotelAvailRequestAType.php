<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType;

/**
 * Class representing HotelAvailRequestAType
 */
class HotelAvailRequestAType
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
     * A date or range of dates for the request criteria.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\DateRangeAType
     * $dateRange
     */
    private $dateRange = null;

    /**
     * A collection of destination system codes. These are systems for which this
     * request is targeted.
     *
     * @property string[] $destinationSystemsCode
     */
    private $destinationSystemsCode = null;

    /**
     * Collection of requested rate plans.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType[]
     * $ratePlanCandidates
     */
    private $ratePlanCandidates = null;

    /**
     * Collection of room stay candidates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[]
     * $roomTypeCandidates
     */
    private $roomTypeCandidates = null;

    /**
     * Collection of requested offers.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\OffersAType
     * $offers
     */
    private $offers = null;

    /**
     * A collection of Restriction Status values.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\RestrictionStatusCandidatesAType
     * $restrictionStatusCandidates
     */
    private $restrictionStatusCandidates = null;

    /**
     * Collection of Length of Stay elements. These LOS elements indicate what LOS
     * restrictions are to be included in the response.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\LengthsOfStayCandidatesAType
     * $lengthsOfStayCandidates
     */
    private $lengthsOfStayCandidates = null;

    /**
     * Use to request Best Available Rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\BestAvailableRateCandidateAType
     * $bestAvailableRateCandidate
     */
    private $bestAvailableRateCandidate = null;

    /**
     * Use to request Hurdle Rates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\HurdleRateCandidateAType
     * $hurdleRateCandidate
     */
    private $hurdleRateCandidate = null;

    /**
     * Use to request Delta.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\DeltaCandidateAType
     * $deltaCandidate
     */
    private $deltaCandidate = null;

    /**
     * Indicates the detail of hotel reference information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\HotelRefAType
     * $hotelRef
     */
    private $hotelRef = null;

    /**
     * Used to request rebate programs the hotel participates in.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\RebateProgramsAType
     * $rebatePrograms
     */
    private $rebatePrograms = null;

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
     * A date or range of dates for the request criteria.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\DateRangeAType
     */
    public function getDateRange()
    {
        return $this->dateRange;
    }

    /**
     * Sets a new dateRange
     *
     * A date or range of dates for the request criteria.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\DateRangeAType
     * $dateRange
     * @return self
     */
    public function setDateRange(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\DateRangeAType $dateRange
    ) {
        $this->dateRange = $dateRange;

        return $this;
    }

    /**
     * Adds as destinationSystemCode
     *
     * A collection of destination system codes. These are systems for which this
     * request is targeted.
     *
     * @return self
     * @param string $destinationSystemCode
     */
    public function addToDestinationSystemsCode($destinationSystemCode)
    {
        $this->destinationSystemsCode[] = $destinationSystemCode;

        return $this;
    }

    /**
     * isset destinationSystemsCode
     *
     * A collection of destination system codes. These are systems for which this
     * request is targeted.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDestinationSystemsCode($index)
    {
        return isset($this->destinationSystemsCode[$index]);
    }

    /**
     * unset destinationSystemsCode
     *
     * A collection of destination system codes. These are systems for which this
     * request is targeted.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDestinationSystemsCode($index)
    {
        unset($this->destinationSystemsCode[$index]);
    }

    /**
     * Gets as destinationSystemsCode
     *
     * A collection of destination system codes. These are systems for which this
     * request is targeted.
     *
     * @return string[]
     */
    public function getDestinationSystemsCode()
    {
        return $this->destinationSystemsCode;
    }

    /**
     * Sets a new destinationSystemsCode
     *
     * A collection of destination system codes. These are systems for which this
     * request is targeted.
     *
     * @param string $destinationSystemsCode
     * @return self
     */
    public function setDestinationSystemsCode(array $destinationSystemsCode)
    {
        $this->destinationSystemsCode = $destinationSystemsCode;

        return $this;
    }

    /**
     * Adds as ratePlanCandidate
     *
     * Collection of requested rate plans.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType
     * $ratePlanCandidate
     */
    public function addToRatePlanCandidates(
        \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType $ratePlanCandidate
    ) {
        $this->ratePlanCandidates[] = $ratePlanCandidate;

        return $this;
    }

    /**
     * isset ratePlanCandidates
     *
     * Collection of requested rate plans.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRatePlanCandidates($index)
    {
        return isset($this->ratePlanCandidates[$index]);
    }

    /**
     * unset ratePlanCandidates
     *
     * Collection of requested rate plans.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRatePlanCandidates($index)
    {
        unset($this->ratePlanCandidates[$index]);
    }

    /**
     * Gets as ratePlanCandidates
     *
     * Collection of requested rate plans.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType[]
     */
    public function getRatePlanCandidates()
    {
        return $this->ratePlanCandidates;
    }

    /**
     * Sets a new ratePlanCandidates
     *
     * Collection of requested rate plans.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType[]
     * $ratePlanCandidates
     * @return self
     */
    public function setRatePlanCandidates(array $ratePlanCandidates)
    {
        $this->ratePlanCandidates = $ratePlanCandidates;

        return $this;
    }

    /**
     * Adds as roomTypeCandidate
     *
     * Collection of room stay candidates.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType
     * $roomTypeCandidate
     */
    public function addToRoomTypeCandidates(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType $roomTypeCandidate
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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[]
     * $roomTypeCandidates
     * @return self
     */
    public function setRoomTypeCandidates(array $roomTypeCandidates)
    {
        $this->roomTypeCandidates = $roomTypeCandidates;

        return $this;
    }

    /**
     * Gets as offers
     *
     * Collection of requested offers.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\OffersAType
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * Sets a new offers
     *
     * Collection of requested offers.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\OffersAType
     * $offers
     * @return self
     */
    public function setOffers(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\OffersAType $offers
    ) {
        $this->offers = $offers;

        return $this;
    }

    /**
     * Gets as restrictionStatusCandidates
     *
     * A collection of Restriction Status values.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\RestrictionStatusCandidatesAType
     */
    public function getRestrictionStatusCandidates()
    {
        return $this->restrictionStatusCandidates;
    }

    /**
     * Sets a new restrictionStatusCandidates
     *
     * A collection of Restriction Status values.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\RestrictionStatusCandidatesAType
     * $restrictionStatusCandidates
     * @return self
     */
    public function setRestrictionStatusCandidates(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\RestrictionStatusCandidatesAType $restrictionStatusCandidates
    ) {
        $this->restrictionStatusCandidates = $restrictionStatusCandidates;

        return $this;
    }

    /**
     * Gets as lengthsOfStayCandidates
     *
     * Collection of Length of Stay elements. These LOS elements indicate what LOS
     * restrictions are to be included in the response.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\LengthsOfStayCandidatesAType
     */
    public function getLengthsOfStayCandidates()
    {
        return $this->lengthsOfStayCandidates;
    }

    /**
     * Sets a new lengthsOfStayCandidates
     *
     * Collection of Length of Stay elements. These LOS elements indicate what LOS
     * restrictions are to be included in the response.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\LengthsOfStayCandidatesAType
     * $lengthsOfStayCandidates
     * @return self
     */
    public function setLengthsOfStayCandidates(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\LengthsOfStayCandidatesAType $lengthsOfStayCandidates
    ) {
        $this->lengthsOfStayCandidates = $lengthsOfStayCandidates;

        return $this;
    }

    /**
     * Gets as bestAvailableRateCandidate
     *
     * Use to request Best Available Rate.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\BestAvailableRateCandidateAType
     */
    public function getBestAvailableRateCandidate()
    {
        return $this->bestAvailableRateCandidate;
    }

    /**
     * Sets a new bestAvailableRateCandidate
     *
     * Use to request Best Available Rate.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\BestAvailableRateCandidateAType
     * $bestAvailableRateCandidate
     * @return self
     */
    public function setBestAvailableRateCandidate(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\BestAvailableRateCandidateAType $bestAvailableRateCandidate
    ) {
        $this->bestAvailableRateCandidate = $bestAvailableRateCandidate;

        return $this;
    }

    /**
     * Gets as hurdleRateCandidate
     *
     * Use to request Hurdle Rates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\HurdleRateCandidateAType
     */
    public function getHurdleRateCandidate()
    {
        return $this->hurdleRateCandidate;
    }

    /**
     * Sets a new hurdleRateCandidate
     *
     * Use to request Hurdle Rates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\HurdleRateCandidateAType
     * $hurdleRateCandidate
     * @return self
     */
    public function setHurdleRateCandidate(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\HurdleRateCandidateAType $hurdleRateCandidate
    ) {
        $this->hurdleRateCandidate = $hurdleRateCandidate;

        return $this;
    }

    /**
     * Gets as deltaCandidate
     *
     * Use to request Delta.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\DeltaCandidateAType
     */
    public function getDeltaCandidate()
    {
        return $this->deltaCandidate;
    }

    /**
     * Sets a new deltaCandidate
     *
     * Use to request Delta.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\DeltaCandidateAType
     * $deltaCandidate
     * @return self
     */
    public function setDeltaCandidate(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\DeltaCandidateAType $deltaCandidate
    ) {
        $this->deltaCandidate = $deltaCandidate;

        return $this;
    }

    /**
     * Gets as hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\HotelRefAType
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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\HotelRefAType
     * $hotelRef
     * @return self
     */
    public function setHotelRef(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\HotelRefAType $hotelRef
    ) {
        $this->hotelRef = $hotelRef;

        return $this;
    }

    /**
     * Gets as rebatePrograms
     *
     * Used to request rebate programs the hotel participates in.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\RebateProgramsAType
     */
    public function getRebatePrograms()
    {
        return $this->rebatePrograms;
    }

    /**
     * Sets a new rebatePrograms
     *
     * Used to request rebate programs the hotel participates in.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\RebateProgramsAType
     * $rebatePrograms
     * @return self
     */
    public function setRebatePrograms(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\RebateProgramsAType $rebatePrograms
    ) {
        $this->rebatePrograms = $rebatePrograms;

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

