<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType;

/**
 * Class representing DepartureDateTimeAType
 */
class DepartureDateTimeAType
{

    /**
     * Scheduled departure date/time for flight leg.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $scheduled
     */
    private $scheduled = null;

    /**
     * Estimated departure date/time for flight leg.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $estimated
     */
    private $estimated = null;

    /**
     * Actual operational departure date/time for flight leg.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $actual
     */
    private $actual = null;

    /**
     * The reason attributed to a delay or cancellation. Refers to OpenTravel Code
     * Table Flight Delay Code (FDC).
     *
     * @property string $reasonCode
     */
    private $reasonCode = null;

    /**
     * Specifies the time when the next information will be published.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $nextAdvisoryTime
     */
    private $nextAdvisoryTime = null;

    /**
     * Gets as scheduled
     *
     * Scheduled departure date/time for flight leg.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType
     */
    public function getScheduled()
    {
        return $this->scheduled;
    }

    /**
     * Sets a new scheduled
     *
     * Scheduled departure date/time for flight leg.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $scheduled
     * @return self
     */
    public function setScheduled(\Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $scheduled)
    {
        $this->scheduled = $scheduled;

        return $this;
    }

    /**
     * Gets as estimated
     *
     * Estimated departure date/time for flight leg.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType
     */
    public function getEstimated()
    {
        return $this->estimated;
    }

    /**
     * Sets a new estimated
     *
     * Estimated departure date/time for flight leg.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $estimated
     * @return self
     */
    public function setEstimated(\Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $estimated)
    {
        $this->estimated = $estimated;

        return $this;
    }

    /**
     * Gets as actual
     *
     * Actual operational departure date/time for flight leg.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType
     */
    public function getActual()
    {
        return $this->actual;
    }

    /**
     * Sets a new actual
     *
     * Actual operational departure date/time for flight leg.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $actual
     * @return self
     */
    public function setActual(\Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $actual)
    {
        $this->actual = $actual;

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

    /**
     * Gets as nextAdvisoryTime
     *
     * Specifies the time when the next information will be published.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType
     */
    public function getNextAdvisoryTime()
    {
        return $this->nextAdvisoryTime;
    }

    /**
     * Sets a new nextAdvisoryTime
     *
     * Specifies the time when the next information will be published.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $nextAdvisoryTime
     * @return self
     */
    public function setNextAdvisoryTime(\Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $nextAdvisoryTime)
    {
        $this->nextAdvisoryTime = $nextAdvisoryTime;

        return $this;
    }


}

