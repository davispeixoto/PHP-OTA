<?php

namespace Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType;

/**
 * Class representing RoomBlocksAType
 */
class RoomBlocksAType
{

    /**
     * If TRUE, room blocks are accepted.
     *
     * @property boolean $availableInd
     */
    private $availableInd = null;

    /**
     * The total quantity of rooms that are available for room blocks.
     *
     * @property integer $totalRoomQty
     */
    private $totalRoomQty = null;

    /**
     * The number of days advance notice to cancel a room block.
     *
     * @property integer $cancelPeriodDays
     */
    private $cancelPeriodDays = null;

    /**
     * Rate plan type(s) associated with room block.
     *
     * @property string $rateType
     */
    private $rateType = null;

    /**
     * Room type(s) that are available for room blocks. Please use a value from the
     * OpenTravel Guest Room Information (GRI) Code List.
     *
     * @property string $roomType
     */
    private $roomType = null;

    /**
     * Date(s) the room block is not available.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $blackOutDate
     */
    private $blackOutDate = null;

    /**
     * Gets as availableInd
     *
     * If TRUE, room blocks are accepted.
     *
     * @return boolean
     */
    public function getAvailableInd()
    {
        return $this->availableInd;
    }

    /**
     * Sets a new availableInd
     *
     * If TRUE, room blocks are accepted.
     *
     * @param boolean $availableInd
     * @return self
     */
    public function setAvailableInd($availableInd)
    {
        $this->availableInd = $availableInd;

        return $this;
    }

    /**
     * Gets as totalRoomQty
     *
     * The total quantity of rooms that are available for room blocks.
     *
     * @return integer
     */
    public function getTotalRoomQty()
    {
        return $this->totalRoomQty;
    }

    /**
     * Sets a new totalRoomQty
     *
     * The total quantity of rooms that are available for room blocks.
     *
     * @param integer $totalRoomQty
     * @return self
     */
    public function setTotalRoomQty($totalRoomQty)
    {
        $this->totalRoomQty = $totalRoomQty;

        return $this;
    }

    /**
     * Gets as cancelPeriodDays
     *
     * The number of days advance notice to cancel a room block.
     *
     * @return integer
     */
    public function getCancelPeriodDays()
    {
        return $this->cancelPeriodDays;
    }

    /**
     * Sets a new cancelPeriodDays
     *
     * The number of days advance notice to cancel a room block.
     *
     * @param integer $cancelPeriodDays
     * @return self
     */
    public function setCancelPeriodDays($cancelPeriodDays)
    {
        $this->cancelPeriodDays = $cancelPeriodDays;

        return $this;
    }

    /**
     * Gets as rateType
     *
     * Rate plan type(s) associated with room block.
     *
     * @return string
     */
    public function getRateType()
    {
        return $this->rateType;
    }

    /**
     * Sets a new rateType
     *
     * Rate plan type(s) associated with room block.
     *
     * @param string $rateType
     * @return self
     */
    public function setRateType($rateType)
    {
        $this->rateType = $rateType;

        return $this;
    }

    /**
     * Gets as roomType
     *
     * Room type(s) that are available for room blocks. Please use a value from the
     * OpenTravel Guest Room Information (GRI) Code List.
     *
     * @return string
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Sets a new roomType
     *
     * Room type(s) that are available for room blocks. Please use a value from the
     * OpenTravel Guest Room Information (GRI) Code List.
     *
     * @param string $roomType
     * @return self
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;

        return $this;
    }

    /**
     * Gets as blackOutDate
     *
     * Date(s) the room block is not available.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getBlackOutDate()
    {
        return $this->blackOutDate;
    }

    /**
     * Sets a new blackOutDate
     *
     * Date(s) the room block is not available.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $blackOutDate
     * @return self
     */
    public function setBlackOutDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $blackOutDate)
    {
        $this->blackOutDate = $blackOutDate;

        return $this;
    }


}

