<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS;

/**
 * Class representing AllowanceAndChargeAType
 */
class AllowanceAndChargeAType
{

    /**
     * If true, the baggage allowance may be subject to air supplier merchandising
     * offers.
     *
     * @property boolean $offerInd
     */
    private $offerInd = null;

    /**
     * Baggage allowance by origin and destination.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType[]
     * $originDestination
     */
    private $originDestination = null;

    /**
     * The total baggage price for the entire trip (including all passengers.)
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\TotalPriceAType
     * $totalPrice
     */
    private $totalPrice = null;

    /**
     * Gets as offerInd
     *
     * If true, the baggage allowance may be subject to air supplier merchandising
     * offers.
     *
     * @return boolean
     */
    public function getOfferInd()
    {
        return $this->offerInd;
    }

    /**
     * Sets a new offerInd
     *
     * If true, the baggage allowance may be subject to air supplier merchandising
     * offers.
     *
     * @param boolean $offerInd
     * @return self
     */
    public function setOfferInd($offerInd)
    {
        $this->offerInd = $offerInd;

        return $this;
    }

    /**
     * Adds as originDestination
     *
     * Baggage allowance by origin and destination.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType
     * $originDestination
     */
    public function addToOriginDestination(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType $originDestination
    ) {
        $this->originDestination[] = $originDestination;

        return $this;
    }

    /**
     * isset originDestination
     *
     * Baggage allowance by origin and destination.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOriginDestination($index)
    {
        return isset($this->originDestination[$index]);
    }

    /**
     * unset originDestination
     *
     * Baggage allowance by origin and destination.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOriginDestination($index)
    {
        unset($this->originDestination[$index]);
    }

    /**
     * Gets as originDestination
     *
     * Baggage allowance by origin and destination.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType[]
     */
    public function getOriginDestination()
    {
        return $this->originDestination;
    }

    /**
     * Sets a new originDestination
     *
     * Baggage allowance by origin and destination.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType[]
     * $originDestination
     * @return self
     */
    public function setOriginDestination(array $originDestination)
    {
        $this->originDestination = $originDestination;

        return $this;
    }

    /**
     * Gets as totalPrice
     *
     * The total baggage price for the entire trip (including all passengers.)
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\TotalPriceAType
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Sets a new totalPrice
     *
     * The total baggage price for the entire trip (including all passengers.)
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\TotalPriceAType
     * $totalPrice
     * @return self
     */
    public function setTotalPrice(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\TotalPriceAType $totalPrice
    ) {
        $this->totalPrice = $totalPrice;

        return $this;
    }


}

