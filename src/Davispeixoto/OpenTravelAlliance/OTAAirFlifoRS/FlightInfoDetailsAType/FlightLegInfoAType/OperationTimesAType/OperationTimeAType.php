<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\OperationTimesAType;

/**
 * Class representing OperationTimeAType
 */
class OperationTimeAType
{

    /**
     * Time or date/time an operational event happened.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $time
     */
    private $time = null;

    /**
     * Type of operational event (e.g., off-ground). References the OpenTravel Code
     * Table Other Time Type (OTT).
     *
     * @property string $operationType
     */
    private $operationType = null;

    /**
     * Describes whether the operational event time is scheduled, estimated or actual.
     *
     * @property string $timeType
     */
    private $timeType = null;

    /**
     * The reason attributed to a delay or cancellation. Refers to OpenTravel Code
     * Table Flight Delay Code (FDC).
     *
     * @property string $reasonCode
     */
    private $reasonCode = null;

    /**
     * Gets as time
     *
     * Time or date/time an operational event happened.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets a new time
     *
     * Time or date/time an operational event happened.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $time
     * @return self
     */
    public function setTime(\Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Gets as operationType
     *
     * Type of operational event (e.g., off-ground). References the OpenTravel Code
     * Table Other Time Type (OTT).
     *
     * @return string
     */
    public function getOperationType()
    {
        return $this->operationType;
    }

    /**
     * Sets a new operationType
     *
     * Type of operational event (e.g., off-ground). References the OpenTravel Code
     * Table Other Time Type (OTT).
     *
     * @param string $operationType
     * @return self
     */
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;

        return $this;
    }

    /**
     * Gets as timeType
     *
     * Describes whether the operational event time is scheduled, estimated or actual.
     *
     * @return string
     */
    public function getTimeType()
    {
        return $this->timeType;
    }

    /**
     * Sets a new timeType
     *
     * Describes whether the operational event time is scheduled, estimated or actual.
     *
     * @param string $timeType
     * @return self
     */
    public function setTimeType($timeType)
    {
        $this->timeType = $timeType;

        return $this;
    }

    /**
     * Gets as reasonCode
     *
     * The reason attributed to a delay or cancellation. Refers to OpenTravel Code
     * Table Flight Delay Code (FDC).
     *
     * @return string
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * Sets a new reasonCode
     *
     * The reason attributed to a delay or cancellation. Refers to OpenTravel Code
     * Table Flight Delay Code (FDC).
     *
     * @param string $reasonCode
     * @return self
     */
    public function setReasonCode($reasonCode)
    {
        $this->reasonCode = $reasonCode;

        return $this;
    }


}

