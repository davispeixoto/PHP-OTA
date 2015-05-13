<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockRQ\HotelInvBlockRequestsAType;

/**
 * Class representing HotelInvBlockRequestAType
 */
class HotelInvBlockRequestAType
{

    /**
     * Boolean Flag indicating if overbooking or allocation (defined by
     * BookingLimitMessageType) is requested.
     *
     * @property boolean $sendBookingLimit
     */
    private $sendBookingLimit = null;

    /**
     * When true, include blocks which partially fall inside the requested date range
     * but start or end outside the date range.
     *
     * @property boolean $includeAllBlocksAffectingDateRange
     */
    private $includeAllBlocksAffectingDateRange = null;

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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockRQ\HotelInvBlockRequestsAType\HotelInvBlockRequestAType\DateRangeAType
     * $dateRange
     */
    private $dateRange = null;

    /**
     * This is for creating a single block at a single hotel.
     *
     * @property \Davispeixoto\OpenTravelAlliance\InvBlockType[] $invBlock
     */
    private $invBlock = null;

    /**
     * Indicates the detail of hotel reference information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockRQ\HotelInvBlockRequestsAType\HotelInvBlockRequestAType\HotelRefAType
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
     * Gets as includeAllBlocksAffectingDateRange
     *
     * When true, include blocks which partially fall inside the requested date range
     * but start or end outside the date range.
     *
     * @return boolean
     */
    public function getIncludeAllBlocksAffectingDateRange()
    {
        return $this->includeAllBlocksAffectingDateRange;
    }

    /**
     * Sets a new includeAllBlocksAffectingDateRange
     *
     * When true, include blocks which partially fall inside the requested date range
     * but start or end outside the date range.
     *
     * @param boolean $includeAllBlocksAffectingDateRange
     * @return self
     */
    public function setIncludeAllBlocksAffectingDateRange($includeAllBlocksAffectingDateRange)
    {
        $this->includeAllBlocksAffectingDateRange = $includeAllBlocksAffectingDateRange;

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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockRQ\HotelInvBlockRequestsAType\HotelInvBlockRequestAType\DateRangeAType
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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockRQ\HotelInvBlockRequestsAType\HotelInvBlockRequestAType\DateRangeAType
     * $dateRange
     * @return self
     */
    public function setDateRange(
        \Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockRQ\HotelInvBlockRequestsAType\HotelInvBlockRequestAType\DateRangeAType $dateRange
    ) {
        $this->dateRange = $dateRange;

        return $this;
    }

    /**
     * Adds as invBlock
     *
     * This is for creating a single block at a single hotel.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\InvBlockType $invBlock
     */
    public function addToInvBlock(\Davispeixoto\OpenTravelAlliance\InvBlockType $invBlock)
    {
        $this->invBlock[] = $invBlock;

        return $this;
    }

    /**
     * isset invBlock
     *
     * This is for creating a single block at a single hotel.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInvBlock($index)
    {
        return isset($this->invBlock[$index]);
    }

    /**
     * unset invBlock
     *
     * This is for creating a single block at a single hotel.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInvBlock($index)
    {
        unset($this->invBlock[$index]);
    }

    /**
     * Gets as invBlock
     *
     * This is for creating a single block at a single hotel.
     *
     * @return \Davispeixoto\OpenTravelAlliance\InvBlockType[]
     */
    public function getInvBlock()
    {
        return $this->invBlock;
    }

    /**
     * Sets a new invBlock
     *
     * This is for creating a single block at a single hotel.
     *
     * @param \Davispeixoto\OpenTravelAlliance\InvBlockType[] $invBlock
     * @return self
     */
    public function setInvBlock(array $invBlock)
    {
        $this->invBlock = $invBlock;

        return $this;
    }

    /**
     * Gets as hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockRQ\HotelInvBlockRequestsAType\HotelInvBlockRequestAType\HotelRefAType
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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockRQ\HotelInvBlockRequestsAType\HotelInvBlockRequestAType\HotelRefAType
     * $hotelRef
     * @return self
     */
    public function setHotelRef(
        \Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockRQ\HotelInvBlockRequestsAType\HotelInvBlockRequestAType\HotelRefAType $hotelRef
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

