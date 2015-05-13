<?php

namespace Davispeixoto\OpenTravelAlliance\RateRulesType;

/**
 * Class representing RateGuaranteeAType
 */
class RateGuaranteeAType
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
     * The starting value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * A description of the rate guarantee.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextTextType $description
     */
    private $description = null;

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
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $duration
     * @return self
     */
    public function setDuration(\Davispeixoto\OpenTravelAlliance\DurationType $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the rate guarantee.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextTextType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A description of the rate guarantee.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextTextType $description
     * @return self
     */
    public function setDescription(\Davispeixoto\OpenTravelAlliance\FormattedTextTextType $description)
    {
        $this->description = $description;

        return $this;
    }


}

