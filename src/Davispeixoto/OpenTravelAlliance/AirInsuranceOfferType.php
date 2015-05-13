<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AirInsuranceOfferType
 *
 * Information required to request third party trip insurance.
 * XSD Type: AirInsuranceOfferType
 */
class AirInsuranceOfferType
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
     * A unique ID for this trip insurance product that may be referenced elsewhere in
     * this message.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Identifies the company providing the insurance product.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $providerCompany
     */
    private $providerCompany = null;

    /**
     * Estimated trip cost, or the total price of the journey for all travelers.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirInsuranceOfferType\TotalTripCostAType
     * $totalTripCost
     */
    private $totalTripCost = null;

    /**
     * Traveler information with individual insurance coverage details.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SearchTravelerType[] $coveredTraveler
     */
    private $coveredTraveler = null;

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
     * Gets as rPH
     *
     * A unique ID for this trip insurance product that may be referenced elsewhere in
     * this message.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A unique ID for this trip insurance product that may be referenced elsewhere in
     * this message.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as providerCompany
     *
     * Identifies the company providing the insurance product.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getProviderCompany()
    {
        return $this->providerCompany;
    }

    /**
     * Sets a new providerCompany
     *
     * Identifies the company providing the insurance product.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $providerCompany
     * @return self
     */
    public function setProviderCompany(\Davispeixoto\OpenTravelAlliance\CompanyNameType $providerCompany)
    {
        $this->providerCompany = $providerCompany;

        return $this;
    }

    /**
     * Gets as totalTripCost
     *
     * Estimated trip cost, or the total price of the journey for all travelers.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirInsuranceOfferType\TotalTripCostAType
     */
    public function getTotalTripCost()
    {
        return $this->totalTripCost;
    }

    /**
     * Sets a new totalTripCost
     *
     * Estimated trip cost, or the total price of the journey for all travelers.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirInsuranceOfferType\TotalTripCostAType
     * $totalTripCost
     * @return self
     */
    public function setTotalTripCost(
        \Davispeixoto\OpenTravelAlliance\AirInsuranceOfferType\TotalTripCostAType $totalTripCost
    ) {
        $this->totalTripCost = $totalTripCost;

        return $this;
    }

    /**
     * Adds as coveredTraveler
     *
     * Traveler information with individual insurance coverage details.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SearchTravelerType $coveredTraveler
     */
    public function addToCoveredTraveler(\Davispeixoto\OpenTravelAlliance\SearchTravelerType $coveredTraveler)
    {
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
     * @return \Davispeixoto\OpenTravelAlliance\SearchTravelerType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\SearchTravelerType[] $coveredTraveler
     * @return self
     */
    public function setCoveredTraveler(array $coveredTraveler)
    {
        $this->coveredTraveler = $coveredTraveler;

        return $this;
    }


}

