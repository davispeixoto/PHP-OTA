<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockRS\InvBlocksAType;

/**
 * Class representing InvBlockDatesAType
 */
class InvBlockDatesAType
{

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
     * If true, this indicates that the block has no tangible end date. The block
     * continues indefinitely.
     *
     * @property boolean $endDateExtensionIndicator
     */
    private $endDateExtensionIndicator = null;

    /**
     * Defines the absolute deadline. Either this or the offset attributes may be used.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     * $absoluteCutoff
     */
    private $absoluteCutoff = null;

    /**
     * The units of time, e.g.: days, hours, etc., that apply to the deadline.
     *
     * @property \DateInterval $offsetDuration
     */
    private $offsetDuration = null;

    /**
     * This indicates how the offset period is applied for the release back to general
     * inventory of unbooked rooms in the inventory block .
     *
     * @property string $offsetCalculationMode
     */
    private $offsetCalculationMode = null;

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
     * Gets as endDateExtensionIndicator
     *
     * If true, this indicates that the block has no tangible end date. The block
     * continues indefinitely.
     *
     * @return boolean
     */
    public function getEndDateExtensionIndicator()
    {
        return $this->endDateExtensionIndicator;
    }

    /**
     * Sets a new endDateExtensionIndicator
     *
     * If true, this indicates that the block has no tangible end date. The block
     * continues indefinitely.
     *
     * @param boolean $endDateExtensionIndicator
     * @return self
     */
    public function setEndDateExtensionIndicator($endDateExtensionIndicator)
    {
        $this->endDateExtensionIndicator = $endDateExtensionIndicator;

        return $this;
    }

    /**
     * Gets as absoluteCutoff
     *
     * Defines the absolute deadline. Either this or the offset attributes may be used.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getAbsoluteCutoff()
    {
        return $this->absoluteCutoff;
    }

    /**
     * Sets a new absoluteCutoff
     *
     * Defines the absolute deadline. Either this or the offset attributes may be used.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $absoluteCutoff
     * @return self
     */
    public function setAbsoluteCutoff(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $absoluteCutoff)
    {
        $this->absoluteCutoff = $absoluteCutoff;

        return $this;
    }

    /**
     * Gets as offsetDuration
     *
     * The units of time, e.g.: days, hours, etc., that apply to the deadline.
     *
     * @return \DateInterval
     */
    public function getOffsetDuration()
    {
        return $this->offsetDuration;
    }

    /**
     * Sets a new offsetDuration
     *
     * The units of time, e.g.: days, hours, etc., that apply to the deadline.
     *
     * @param \DateInterval $offsetDuration
     * @return self
     */
    public function setOffsetDuration(\DateInterval $offsetDuration)
    {
        $this->offsetDuration = $offsetDuration;

        return $this;
    }

    /**
     * Gets as offsetCalculationMode
     *
     * This indicates how the offset period is applied for the release back to general
     * inventory of unbooked rooms in the inventory block .
     *
     * @return string
     */
    public function getOffsetCalculationMode()
    {
        return $this->offsetCalculationMode;
    }

    /**
     * Sets a new offsetCalculationMode
     *
     * This indicates how the offset period is applied for the release back to general
     * inventory of unbooked rooms in the inventory block .
     *
     * @param string $offsetCalculationMode
     * @return self
     */
    public function setOffsetCalculationMode($offsetCalculationMode)
    {
        $this->offsetCalculationMode = $offsetCalculationMode;

        return $this;
    }


}

