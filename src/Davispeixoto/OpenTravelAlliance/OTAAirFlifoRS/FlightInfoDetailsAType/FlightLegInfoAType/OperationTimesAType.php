<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType;

/**
 * Class representing OperationTimesAType
 */
class OperationTimesAType
{

    /**
     * Provides information on operational events for this flight leg e.g. off-ground.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\OperationTimesAType\OperationTimeAType[]
     * $operationTime
     */
    private $operationTime = null;

    /**
     * Adds as operationTime
     *
     * Provides information on operational events for this flight leg e.g. off-ground.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\OperationTimesAType\OperationTimeAType
     * $operationTime
     */
    public function addToOperationTime(
        \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\OperationTimesAType\OperationTimeAType $operationTime
    ) {
        $this->operationTime[] = $operationTime;

        return $this;
    }

    /**
     * isset operationTime
     *
     * Provides information on operational events for this flight leg e.g. off-ground.
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
     * Provides information on operational events for this flight leg e.g. off-ground.
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
     * Provides information on operational events for this flight leg e.g. off-ground.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\OperationTimesAType\OperationTimeAType[]
     */
    public function getOperationTime()
    {
        return $this->operationTime;
    }

    /**
     * Sets a new operationTime
     *
     * Provides information on operational events for this flight leg e.g. off-ground.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\OperationTimesAType\OperationTimeAType[]
     * $operationTime
     * @return self
     */
    public function setOperationTime(array $operationTime)
    {
        $this->operationTime = $operationTime;

        return $this;
    }


}

