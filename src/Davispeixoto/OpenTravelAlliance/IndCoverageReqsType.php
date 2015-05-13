<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing IndCoverageReqsType
 *
 * Contains certain traveler-specific information required for quoting or booking
 * an insurance plan.
 * XSD Type: IndCoverageReqsType
 */
class IndCoverageReqsType
{

    /**
     * Estimated trip cost, or the total price of the journey for the traveler.
     *
     * @property \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\IndTripCostAType
     * $indTripCost
     */
    private $indTripCost = null;

    /**
     * Amount of flight accident protection (FAP) requested by the traveler (if offered
     * by the insurance plan).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\FlightAccidentAmountAType
     * $flightAccidentAmount
     */
    private $flightAccidentAmount = null;

    /**
     * Contains descriptions of luggage or equipment for which the traveler has
     * requested additional baggage/equipment coverage (if offered by the insurance
     * plan).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType[]
     * $coveredLuggage
     */
    private $coveredLuggage = null;

    /**
     * Contains a description of the traveler's pre-existing conditions, the diagnosis
     * date of the condition, and the date of last treatment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\PreexistingConditionsAType\PreexistingConditionAType[]
     * $preexistingConditions
     */
    private $preexistingConditions = null;

    /**
     * Gets as indTripCost
     *
     * Estimated trip cost, or the total price of the journey for the traveler.
     *
     * @return \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\IndTripCostAType
     */
    public function getIndTripCost()
    {
        return $this->indTripCost;
    }

    /**
     * Sets a new indTripCost
     *
     * Estimated trip cost, or the total price of the journey for the traveler.
     *
     * @param \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\IndTripCostAType
     * $indTripCost
     * @return self
     */
    public function setIndTripCost(\Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\IndTripCostAType $indTripCost)
    {
        $this->indTripCost = $indTripCost;

        return $this;
    }

    /**
     * Gets as flightAccidentAmount
     *
     * Amount of flight accident protection (FAP) requested by the traveler (if offered
     * by the insurance plan).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\FlightAccidentAmountAType
     */
    public function getFlightAccidentAmount()
    {
        return $this->flightAccidentAmount;
    }

    /**
     * Sets a new flightAccidentAmount
     *
     * Amount of flight accident protection (FAP) requested by the traveler (if offered
     * by the insurance plan).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\FlightAccidentAmountAType
     * $flightAccidentAmount
     * @return self
     */
    public function setFlightAccidentAmount(
        \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\FlightAccidentAmountAType $flightAccidentAmount
    ) {
        $this->flightAccidentAmount = $flightAccidentAmount;

        return $this;
    }

    /**
     * Adds as luggageItem
     *
     * Contains descriptions of luggage or equipment for which the traveler has
     * requested additional baggage/equipment coverage (if offered by the insurance
     * plan).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType
     * $luggageItem
     */
    public function addToCoveredLuggage(
        \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType $luggageItem
    ) {
        $this->coveredLuggage[] = $luggageItem;

        return $this;
    }

    /**
     * isset coveredLuggage
     *
     * Contains descriptions of luggage or equipment for which the traveler has
     * requested additional baggage/equipment coverage (if offered by the insurance
     * plan).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCoveredLuggage($index)
    {
        return isset($this->coveredLuggage[$index]);
    }

    /**
     * unset coveredLuggage
     *
     * Contains descriptions of luggage or equipment for which the traveler has
     * requested additional baggage/equipment coverage (if offered by the insurance
     * plan).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCoveredLuggage($index)
    {
        unset($this->coveredLuggage[$index]);
    }

    /**
     * Gets as coveredLuggage
     *
     * Contains descriptions of luggage or equipment for which the traveler has
     * requested additional baggage/equipment coverage (if offered by the insurance
     * plan).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType[]
     */
    public function getCoveredLuggage()
    {
        return $this->coveredLuggage;
    }

    /**
     * Sets a new coveredLuggage
     *
     * Contains descriptions of luggage or equipment for which the traveler has
     * requested additional baggage/equipment coverage (if offered by the insurance
     * plan).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType[]
     * $coveredLuggage
     * @return self
     */
    public function setCoveredLuggage(array $coveredLuggage)
    {
        $this->coveredLuggage = $coveredLuggage;

        return $this;
    }

    /**
     * Adds as preexistingCondition
     *
     * Contains a description of the traveler's pre-existing conditions, the diagnosis
     * date of the condition, and the date of last treatment.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\PreexistingConditionsAType\PreexistingConditionAType
     * $preexistingCondition
     */
    public function addToPreexistingConditions(
        \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\PreexistingConditionsAType\PreexistingConditionAType $preexistingCondition
    ) {
        $this->preexistingConditions[] = $preexistingCondition;

        return $this;
    }

    /**
     * isset preexistingConditions
     *
     * Contains a description of the traveler's pre-existing conditions, the diagnosis
     * date of the condition, and the date of last treatment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPreexistingConditions($index)
    {
        return isset($this->preexistingConditions[$index]);
    }

    /**
     * unset preexistingConditions
     *
     * Contains a description of the traveler's pre-existing conditions, the diagnosis
     * date of the condition, and the date of last treatment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPreexistingConditions($index)
    {
        unset($this->preexistingConditions[$index]);
    }

    /**
     * Gets as preexistingConditions
     *
     * Contains a description of the traveler's pre-existing conditions, the diagnosis
     * date of the condition, and the date of last treatment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\PreexistingConditionsAType\PreexistingConditionAType[]
     */
    public function getPreexistingConditions()
    {
        return $this->preexistingConditions;
    }

    /**
     * Sets a new preexistingConditions
     *
     * Contains a description of the traveler's pre-existing conditions, the diagnosis
     * date of the condition, and the date of last treatment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\PreexistingConditionsAType\PreexistingConditionAType[]
     * $preexistingConditions
     * @return self
     */
    public function setPreexistingConditions(array $preexistingConditions)
    {
        $this->preexistingConditions = $preexistingConditions;

        return $this;
    }


}

