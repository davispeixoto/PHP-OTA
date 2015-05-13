<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType;

/**
 * Class representing ScheduleAType
 */
class ScheduleAType
{

    /**
     * Defines the start of a period either the day and month or the actual date.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrMonthDayType $startPeriod
     */
    private $startPeriod = null;

    /**
     * Defines the duration of a period.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * Defines the end of a period either the day and month or the actual date.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrMonthDayType $endPeriod
     */
    private $endPeriod = null;

    /**
     * The requested start time. Up to 5 may be specified for each requested date.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType[] $startTime
     */
    private $startTime = null;

    /**
     * Gets as startPeriod
     *
     * Defines the start of a period either the day and month or the actual date.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrMonthDayType
     */
    public function getStartPeriod()
    {
        return $this->startPeriod;
    }

    /**
     * Sets a new startPeriod
     *
     * Defines the start of a period either the day and month or the actual date.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrMonthDayType $startPeriod
     * @return self
     */
    public function setStartPeriod(\Davispeixoto\OpenTravelAlliance\DateOrMonthDayType $startPeriod)
    {
        $this->startPeriod = $startPeriod;

        return $this;
    }

    /**
     * Gets as duration
     *
     * Defines the duration of a period.
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
     * Defines the duration of a period.
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
     * Gets as endPeriod
     *
     * Defines the end of a period either the day and month or the actual date.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrMonthDayType
     */
    public function getEndPeriod()
    {
        return $this->endPeriod;
    }

    /**
     * Sets a new endPeriod
     *
     * Defines the end of a period either the day and month or the actual date.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrMonthDayType $endPeriod
     * @return self
     */
    public function setEndPeriod(\Davispeixoto\OpenTravelAlliance\DateOrMonthDayType $endPeriod)
    {
        $this->endPeriod = $endPeriod;

        return $this;
    }

    /**
     * Adds as startTime
     *
     * The requested start time. Up to 5 may be specified for each requested date.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $startTime
     */
    public function addToStartTime(\Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $startTime)
    {
        $this->startTime[] = $startTime;

        return $this;
    }

    /**
     * isset startTime
     *
     * The requested start time. Up to 5 may be specified for each requested date.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStartTime($index)
    {
        return isset($this->startTime[$index]);
    }

    /**
     * unset startTime
     *
     * The requested start time. Up to 5 may be specified for each requested date.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStartTime($index)
    {
        unset($this->startTime[$index]);
    }

    /**
     * Gets as startTime
     *
     * The requested start time. Up to 5 may be specified for each requested date.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType[]
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * The requested start time. Up to 5 may be specified for each requested date.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType[] $startTime
     * @return self
     */
    public function setStartTime(array $startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }


}

