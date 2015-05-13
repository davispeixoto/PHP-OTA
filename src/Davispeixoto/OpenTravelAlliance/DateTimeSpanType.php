<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing DateTimeSpanType
 *
 * Used to specify a time window range by either specifying an earliest and latest
 * date for the start date and end date or by giving a date with a time period that
 * can be applied before and/or after the start date.
 * XSD Type: DateTimeSpanType
 */
class DateTimeSpanType
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
     * Specifies a time period that can be applied before and/or after the start date.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TimeInstantType $dateWindowRange
     */
    private $dateWindowRange = null;

    /**
     * The earliest and latest dates acceptable for the start date.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateTimeSpanType\StartDateWindowAType
     * $startDateWindow
     */
    private $startDateWindow = null;

    /**
     * The earliest and latest dates acceptable for the end date.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateTimeSpanType\EndDateWindowAType
     * $endDateWindow
     */
    private $endDateWindow = null;

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
     * Gets as dateWindowRange
     *
     * Specifies a time period that can be applied before and/or after the start date.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TimeInstantType
     */
    public function getDateWindowRange()
    {
        return $this->dateWindowRange;
    }

    /**
     * Sets a new dateWindowRange
     *
     * Specifies a time period that can be applied before and/or after the start date.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TimeInstantType $dateWindowRange
     * @return self
     */
    public function setDateWindowRange(\Davispeixoto\OpenTravelAlliance\TimeInstantType $dateWindowRange)
    {
        $this->dateWindowRange = $dateWindowRange;

        return $this;
    }

    /**
     * Gets as startDateWindow
     *
     * The earliest and latest dates acceptable for the start date.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateTimeSpanType\StartDateWindowAType
     */
    public function getStartDateWindow()
    {
        return $this->startDateWindow;
    }

    /**
     * Sets a new startDateWindow
     *
     * The earliest and latest dates acceptable for the start date.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateTimeSpanType\StartDateWindowAType
     * $startDateWindow
     * @return self
     */
    public function setStartDateWindow(
        \Davispeixoto\OpenTravelAlliance\DateTimeSpanType\StartDateWindowAType $startDateWindow
    ) {
        $this->startDateWindow = $startDateWindow;

        return $this;
    }

    /**
     * Gets as endDateWindow
     *
     * The earliest and latest dates acceptable for the end date.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateTimeSpanType\EndDateWindowAType
     */
    public function getEndDateWindow()
    {
        return $this->endDateWindow;
    }

    /**
     * Sets a new endDateWindow
     *
     * The earliest and latest dates acceptable for the end date.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateTimeSpanType\EndDateWindowAType
     * $endDateWindow
     * @return self
     */
    public function setEndDateWindow(
        \Davispeixoto\OpenTravelAlliance\DateTimeSpanType\EndDateWindowAType $endDateWindow
    ) {
        $this->endDateWindow = $endDateWindow;

        return $this;
    }


}

