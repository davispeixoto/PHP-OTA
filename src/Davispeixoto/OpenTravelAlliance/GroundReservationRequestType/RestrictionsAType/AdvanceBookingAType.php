<?php

namespace Davispeixoto\OpenTravelAlliance\GroundReservationRequestType\RestrictionsAType;

/**
 * Class representing AdvanceBookingAType
 */
class AdvanceBookingAType
{

    /**
     * Defines the absolute deadline. Either this or the offset attributes may be used.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $absoluteDeadline
     */
    private $absoluteDeadline = null;

    /**
     * The units of time, e.g.: days, hours, etc., that apply to the deadline.
     *
     * @property string $offsetTimeUnit
     */
    private $offsetTimeUnit = null;

    /**
     * The number of units of DeadlineTimeUnit.
     *
     * @property integer $offsetUnitMultiplier
     */
    private $offsetUnitMultiplier = null;

    /**
     * An enumerated type indicating when the deadline drop time goes into effect.
     *
     * @property string $offsetDropTime
     */
    private $offsetDropTime = null;

    /**
     * If true, advanced booking is required for this rate.
     *
     * @property boolean $requiredInd
     */
    private $requiredInd = null;

    /**
     * Gets as absoluteDeadline
     *
     * Defines the absolute deadline. Either this or the offset attributes may be used.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType
     */
    public function getAbsoluteDeadline()
    {
        return $this->absoluteDeadline;
    }

    /**
     * Sets a new absoluteDeadline
     *
     * Defines the absolute deadline. Either this or the offset attributes may be used.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $absoluteDeadline
     * @return self
     */
    public function setAbsoluteDeadline(\Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $absoluteDeadline)
    {
        $this->absoluteDeadline = $absoluteDeadline;

        return $this;
    }

    /**
     * Gets as offsetTimeUnit
     *
     * The units of time, e.g.: days, hours, etc., that apply to the deadline.
     *
     * @return string
     */
    public function getOffsetTimeUnit()
    {
        return $this->offsetTimeUnit;
    }

    /**
     * Sets a new offsetTimeUnit
     *
     * The units of time, e.g.: days, hours, etc., that apply to the deadline.
     *
     * @param string $offsetTimeUnit
     * @return self
     */
    public function setOffsetTimeUnit($offsetTimeUnit)
    {
        $this->offsetTimeUnit = $offsetTimeUnit;

        return $this;
    }

    /**
     * Gets as offsetUnitMultiplier
     *
     * The number of units of DeadlineTimeUnit.
     *
     * @return integer
     */
    public function getOffsetUnitMultiplier()
    {
        return $this->offsetUnitMultiplier;
    }

    /**
     * Sets a new offsetUnitMultiplier
     *
     * The number of units of DeadlineTimeUnit.
     *
     * @param integer $offsetUnitMultiplier
     * @return self
     */
    public function setOffsetUnitMultiplier($offsetUnitMultiplier)
    {
        $this->offsetUnitMultiplier = $offsetUnitMultiplier;

        return $this;
    }

    /**
     * Gets as offsetDropTime
     *
     * An enumerated type indicating when the deadline drop time goes into effect.
     *
     * @return string
     */
    public function getOffsetDropTime()
    {
        return $this->offsetDropTime;
    }

    /**
     * Sets a new offsetDropTime
     *
     * An enumerated type indicating when the deadline drop time goes into effect.
     *
     * @param string $offsetDropTime
     * @return self
     */
    public function setOffsetDropTime($offsetDropTime)
    {
        $this->offsetDropTime = $offsetDropTime;

        return $this;
    }

    /**
     * Gets as requiredInd
     *
     * If true, advanced booking is required for this rate.
     *
     * @return boolean
     */
    public function getRequiredInd()
    {
        return $this->requiredInd;
    }

    /**
     * Sets a new requiredInd
     *
     * If true, advanced booking is required for this rate.
     *
     * @param boolean $requiredInd
     * @return self
     */
    public function setRequiredInd($requiredInd)
    {
        $this->requiredInd = $requiredInd;

        return $this;
    }


}

