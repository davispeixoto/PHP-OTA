<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OperationSchedulesType
 *
 * Collection of operation schedules.
 * XSD Type: OperationSchedulesType
 */
class OperationSchedulesType
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
     * The OperationSchedule class defines the dates and hours of operation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OperationScheduleType[]
     * $operationSchedule
     */
    private $operationSchedule = null;

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
     * Adds as operationSchedule
     *
     * The OperationSchedule class defines the dates and hours of operation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OperationScheduleType $operationSchedule
     */
    public function addToOperationSchedule(\Davispeixoto\OpenTravelAlliance\OperationScheduleType $operationSchedule)
    {
        $this->operationSchedule[] = $operationSchedule;

        return $this;
    }

    /**
     * isset operationSchedule
     *
     * The OperationSchedule class defines the dates and hours of operation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOperationSchedule($index)
    {
        return isset($this->operationSchedule[$index]);
    }

    /**
     * unset operationSchedule
     *
     * The OperationSchedule class defines the dates and hours of operation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOperationSchedule($index)
    {
        unset($this->operationSchedule[$index]);
    }

    /**
     * Gets as operationSchedule
     *
     * The OperationSchedule class defines the dates and hours of operation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OperationScheduleType[]
     */
    public function getOperationSchedule()
    {
        return $this->operationSchedule;
    }

    /**
     * Sets a new operationSchedule
     *
     * The OperationSchedule class defines the dates and hours of operation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OperationScheduleType[]
     * $operationSchedule
     * @return self
     */
    public function setOperationSchedule(array $operationSchedule)
    {
        $this->operationSchedule = $operationSchedule;

        return $this;
    }


}

