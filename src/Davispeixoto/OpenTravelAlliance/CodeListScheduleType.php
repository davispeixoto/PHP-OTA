<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CodeListScheduleType
 *
 * Operating or availability schedule associated with a code item.
 * XSD Type: CodeListScheduleType
 */
class CodeListScheduleType
{

    /**
     * Schedule start period.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CodeListSchedulePeriodType $start
     */
    private $start = null;

    /**
     * Period duration.Example: P2D
     *
     * @property \DateInterval $duration
     */
    private $duration = null;

    /**
     * Schedule end period.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CodeListSchedulePeriodType $end
     */
    private $end = null;

    /**
     * Fee reference ID.Example: 1Implementer: This is a reference to an @FeeRPH
     * defined in the CodeListFeeType/@FeeRPH element. This reference may be used to
     * associate a set of fee information with this schedule information.
     *
     * @property string $feeRefRPH
     */
    private $feeRefRPH = null;

    /**
     * Schedule ID.Example: 1Implementer: This is a unique ID for this set of schedule
     * information that may be referenced elsewhere in this message.
     *
     * @property string $scheduleRPH
     */
    private $scheduleRPH = null;

    /**
     * Operation times.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CodeListScheduleType\OperationTimesAType\OperationTimeAType[]
     * $operationTimes
     */
    private $operationTimes = null;

    /**
     * Gets as start
     *
     * Schedule start period.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CodeListSchedulePeriodType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * Schedule start period.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CodeListSchedulePeriodType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\CodeListSchedulePeriodType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as duration
     *
     * Period duration.Example: P2D
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * Period duration.Example: P2D
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * Schedule end period.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CodeListSchedulePeriodType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * Schedule end period.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CodeListSchedulePeriodType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\CodeListSchedulePeriodType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Gets as feeRefRPH
     *
     * Fee reference ID.Example: 1Implementer: This is a reference to an @FeeRPH
     * defined in the CodeListFeeType/@FeeRPH element. This reference may be used to
     * associate a set of fee information with this schedule information.
     *
     * @return string
     */
    public function getFeeRefRPH()
    {
        return $this->feeRefRPH;
    }

    /**
     * Sets a new feeRefRPH
     *
     * Fee reference ID.Example: 1Implementer: This is a reference to an @FeeRPH
     * defined in the CodeListFeeType/@FeeRPH element. This reference may be used to
     * associate a set of fee information with this schedule information.
     *
     * @param string $feeRefRPH
     * @return self
     */
    public function setFeeRefRPH($feeRefRPH)
    {
        $this->feeRefRPH = $feeRefRPH;

        return $this;
    }

    /**
     * Gets as scheduleRPH
     *
     * Schedule ID.Example: 1Implementer: This is a unique ID for this set of schedule
     * information that may be referenced elsewhere in this message.
     *
     * @return string
     */
    public function getScheduleRPH()
    {
        return $this->scheduleRPH;
    }

    /**
     * Sets a new scheduleRPH
     *
     * Schedule ID.Example: 1Implementer: This is a unique ID for this set of schedule
     * information that may be referenced elsewhere in this message.
     *
     * @param string $scheduleRPH
     * @return self
     */
    public function setScheduleRPH($scheduleRPH)
    {
        $this->scheduleRPH = $scheduleRPH;

        return $this;
    }

    /**
     * Adds as operationTime
     *
     * Operation times.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CodeListScheduleType\OperationTimesAType\OperationTimeAType
     * $operationTime
     */
    public function addToOperationTimes(
        \Davispeixoto\OpenTravelAlliance\CodeListScheduleType\OperationTimesAType\OperationTimeAType $operationTime
    ) {
        $this->operationTimes[] = $operationTime;

        return $this;
    }

    /**
     * isset operationTimes
     *
     * Operation times.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOperationTimes($index)
    {
        return isset($this->operationTimes[$index]);
    }

    /**
     * unset operationTimes
     *
     * Operation times.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOperationTimes($index)
    {
        unset($this->operationTimes[$index]);
    }

    /**
     * Gets as operationTimes
     *
     * Operation times.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CodeListScheduleType\OperationTimesAType\OperationTimeAType[]
     */
    public function getOperationTimes()
    {
        return $this->operationTimes;
    }

    /**
     * Sets a new operationTimes
     *
     * Operation times.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CodeListScheduleType\OperationTimesAType\OperationTimeAType[]
     * $operationTimes
     * @return self
     */
    public function setOperationTimes(array $operationTimes)
    {
        $this->operationTimes = $operationTimes;

        return $this;
    }


}

