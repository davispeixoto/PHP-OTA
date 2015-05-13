<?php

namespace Davispeixoto\OpenTravelAlliance\CodeListScheduleType;

/**
 * Class representing OperationTimesAType
 */
class OperationTimesAType
{

    /**
     * Provides operating times of a facility.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CodeListScheduleType\OperationTimesAType\OperationTimeAType[]
     * $operationTime
     */
    private $operationTime = null;

    /**
     * Adds as operationTime
     *
     * Provides operating times of a facility.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CodeListScheduleType\OperationTimesAType\OperationTimeAType
     * $operationTime
     */
    public function addToOperationTime(
        \Davispeixoto\OpenTravelAlliance\CodeListScheduleType\OperationTimesAType\OperationTimeAType $operationTime
    ) {
        $this->operationTime[] = $operationTime;

        return $this;
    }

    /**
     * isset operationTime
     *
     * Provides operating times of a facility.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOperationTime($index)
    {
        return isset($this->operationTime[$index]);
    }

    /**
     * unset operationTime
     *
     * Provides operating times of a facility.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOperationTime($index)
    {
        unset($this->operationTime[$index]);
    }

    /**
     * Gets as operationTime
     *
     * Provides operating times of a facility.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CodeListScheduleType\OperationTimesAType\OperationTimeAType[]
     */
    public function getOperationTime()
    {
        return $this->operationTime;
    }

    /**
     * Sets a new operationTime
     *
     * Provides operating times of a facility.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CodeListScheduleType\OperationTimesAType\OperationTimeAType[]
     * $operationTime
     * @return self
     */
    public function setOperationTime(array $operationTime)
    {
        $this->operationTime = $operationTime;

        return $this;
    }


}

