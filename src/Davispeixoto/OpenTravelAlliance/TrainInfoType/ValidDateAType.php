<?php

namespace Davispeixoto\OpenTravelAlliance\TrainInfoType;

/**
 * Class representing ValidDateAType
 */
class ValidDateAType
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


}

