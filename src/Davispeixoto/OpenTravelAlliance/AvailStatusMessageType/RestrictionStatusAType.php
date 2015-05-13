<?php

namespace Davispeixoto\OpenTravelAlliance\AvailStatusMessageType;

/**
 * Class representing RestrictionStatusAType
 */
class RestrictionStatusAType
{

    /**
     * @property string $restriction
     */
    private $restriction = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * When true, this indicates sell through is open and when false, this indicates
     * sell through is closed. Typically this would be used in conjunction with the
     * Status attribute to indicate that bookings may be allowed based on a trading
     * partner agreement even though one or more days are closed.
     *
     * @property boolean $sellThroughOpenIndicator
     */
    private $sellThroughOpenIndicator = null;

    /**
     * Maximum days before the arrival date for which this rate plan may be booked.
     *
     * @property \DateInterval $maxAdvancedBookingOffset
     */
    private $maxAdvancedBookingOffset = null;

    /**
     * Minimum days before the arrival date for which this rate plan may be booked.
     *
     * @property \DateInterval $minAdvancedBookingOffset
     */
    private $minAdvancedBookingOffset = null;

    /**
     * Gets as restriction
     *
     * @return string
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * Sets a new restriction
     *
     * @param string $restriction
     * @return self
     */
    public function setRestriction($restriction)
    {
        $this->restriction = $restriction;

        return $this;
    }

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets as sellThroughOpenIndicator
     *
     * When true, this indicates sell through is open and when false, this indicates
     * sell through is closed. Typically this would be used in conjunction with the
     * Status attribute to indicate that bookings may be allowed based on a trading
     * partner agreement even though one or more days are closed.
     *
     * @return boolean
     */
    public function getSellThroughOpenIndicator()
    {
        return $this->sellThroughOpenIndicator;
    }

    /**
     * Sets a new sellThroughOpenIndicator
     *
     * When true, this indicates sell through is open and when false, this indicates
     * sell through is closed. Typically this would be used in conjunction with the
     * Status attribute to indicate that bookings may be allowed based on a trading
     * partner agreement even though one or more days are closed.
     *
     * @param boolean $sellThroughOpenIndicator
     * @return self
     */
    public function setSellThroughOpenIndicator($sellThroughOpenIndicator)
    {
        $this->sellThroughOpenIndicator = $sellThroughOpenIndicator;

        return $this;
    }

    /**
     * Gets as maxAdvancedBookingOffset
     *
     * Maximum days before the arrival date for which this rate plan may be booked.
     *
     * @return \DateInterval
     */
    public function getMaxAdvancedBookingOffset()
    {
        return $this->maxAdvancedBookingOffset;
    }

    /**
     * Sets a new maxAdvancedBookingOffset
     *
     * Maximum days before the arrival date for which this rate plan may be booked.
     *
     * @param \DateInterval $maxAdvancedBookingOffset
     * @return self
     */
    public function setMaxAdvancedBookingOffset(\DateInterval $maxAdvancedBookingOffset)
    {
        $this->maxAdvancedBookingOffset = $maxAdvancedBookingOffset;

        return $this;
    }

    /**
     * Gets as minAdvancedBookingOffset
     *
     * Minimum days before the arrival date for which this rate plan may be booked.
     *
     * @return \DateInterval
     */
    public function getMinAdvancedBookingOffset()
    {
        return $this->minAdvancedBookingOffset;
    }

    /**
     * Sets a new minAdvancedBookingOffset
     *
     * Minimum days before the arrival date for which this rate plan may be booked.
     *
     * @param \DateInterval $minAdvancedBookingOffset
     * @return self
     */
    public function setMinAdvancedBookingOffset(\DateInterval $minAdvancedBookingOffset)
    {
        $this->minAdvancedBookingOffset = $minAdvancedBookingOffset;

        return $this;
    }


}

