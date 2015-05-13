<?php

namespace Davispeixoto\OpenTravelAlliance\AirPricedOfferType;

/**
 * Class representing TripInsuranceAType
 */
class TripInsuranceAType
{

    /**
     * The third-party insurance product code.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * The internal airline selling component code.
     *
     * @property string $sellingComponentCode
     */
    private $sellingComponentCode = null;

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
     * Traveler information with individual insurance coverage details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\TripInsuranceAType\CoveredTravelerAType[]
     * $coveredTraveler
     */
    private $coveredTraveler = null;

    /**
     * Coverage limitations, including deductible and policy limit.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CoverageLimitType $coverageLimit
     */
    private $coverageLimit = null;

    /**
     * Plan costs.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PlanCostType $planCost
     */
    private $planCost = null;

    /**
     * Gets as code
     *
     * The third-party insurance product code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The third-party insurance product code.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as sellingComponentCode
     *
     * The internal airline selling component code.
     *
     * @return string
     */
    public function getSellingComponentCode()
    {
        return $this->sellingComponentCode;
    }

    /**
     * Sets a new sellingComponentCode
     *
     * The internal airline selling component code.
     *
     * @param string $sellingComponentCode
     * @return self
     */
    public function setSellingComponentCode($sellingComponentCode)
    {
        $this->sellingComponentCode = $sellingComponentCode;

        return $this;
    }

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
     * Adds as coveredTraveler
     *
     * Traveler information with individual insurance coverage details.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\TripInsuranceAType\CoveredTravelerAType
     * $coveredTraveler
     */
    public function addToCoveredTraveler(
        \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\TripInsuranceAType\CoveredTravelerAType $coveredTraveler
    ) {
        $this->coveredTraveler[] = $coveredTraveler;

        return $this;
    }

    /**
     * isset coveredTraveler
     *
     * Traveler information with individual insurance coverage details.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCoveredTraveler($index)
    {
        return isset($this->coveredTraveler[$index]);
    }

    /**
     * unset coveredTraveler
     *
     * Traveler information with individual insurance coverage details.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCoveredTraveler($index)
    {
        unset($this->coveredTraveler[$index]);
    }

    /**
     * Gets as coveredTraveler
     *
     * Traveler information with individual insurance coverage details.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\TripInsuranceAType\CoveredTravelerAType[]
     */
    public function getCoveredTraveler()
    {
        return $this->coveredTraveler;
    }

    /**
     * Sets a new coveredTraveler
     *
     * Traveler information with individual insurance coverage details.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\TripInsuranceAType\CoveredTravelerAType[]
     * $coveredTraveler
     * @return self
     */
    public function setCoveredTraveler(array $coveredTraveler)
    {
        $this->coveredTraveler = $coveredTraveler;

        return $this;
    }

    /**
     * Gets as coverageLimit
     *
     * Coverage limitations, including deductible and policy limit.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CoverageLimitType
     */
    public function getCoverageLimit()
    {
        return $this->coverageLimit;
    }

    /**
     * Sets a new coverageLimit
     *
     * Coverage limitations, including deductible and policy limit.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CoverageLimitType $coverageLimit
     * @return self
     */
    public function setCoverageLimit(\Davispeixoto\OpenTravelAlliance\CoverageLimitType $coverageLimit)
    {
        $this->coverageLimit = $coverageLimit;

        return $this;
    }

    /**
     * Gets as planCost
     *
     * Plan costs.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PlanCostType
     */
    public function getPlanCost()
    {
        return $this->planCost;
    }

    /**
     * Sets a new planCost
     *
     * Plan costs.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PlanCostType $planCost
     * @return self
     */
    public function setPlanCost(\Davispeixoto\OpenTravelAlliance\PlanCostType $planCost)
    {
        $this->planCost = $planCost;

        return $this;
    }


}

