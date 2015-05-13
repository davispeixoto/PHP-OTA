<?php

namespace Davispeixoto\OpenTravelAlliance\InsCoverageDetailType\CoveredTripsAType;

use Davispeixoto\OpenTravelAlliance\TripFeaturesType;

/**
 * Class representing CoveredTripAType
 */
class CoveredTripAType extends TripFeaturesType
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
     * The date a deposit is due for the insurance plan.
     *
     * @property \DateTime $depositDate
     */
    private $depositDate = null;

    /**
     * The final date that full insurance plan payment is due by.
     *
     * @property \DateTime $finalPayDate
     */
    private $finalPayDate = null;

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
     * Gets as depositDate
     *
     * The date a deposit is due for the insurance plan.
     *
     * @return \DateTime
     */
    public function getDepositDate()
    {
        return $this->depositDate;
    }

    /**
     * Sets a new depositDate
     *
     * The date a deposit is due for the insurance plan.
     *
     * @param \DateTime $depositDate
     * @return self
     */
    public function setDepositDate(\DateTime $depositDate)
    {
        $this->depositDate = $depositDate;

        return $this;
    }

    /**
     * Gets as finalPayDate
     *
     * The final date that full insurance plan payment is due by.
     *
     * @return \DateTime
     */
    public function getFinalPayDate()
    {
        return $this->finalPayDate;
    }

    /**
     * Sets a new finalPayDate
     *
     * The final date that full insurance plan payment is due by.
     *
     * @param \DateTime $finalPayDate
     * @return self
     */
    public function setFinalPayDate(\DateTime $finalPayDate)
    {
        $this->finalPayDate = $finalPayDate;

        return $this;
    }


}

