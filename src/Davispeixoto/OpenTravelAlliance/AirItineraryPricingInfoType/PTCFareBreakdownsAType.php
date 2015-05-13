<?php

namespace Davispeixoto\OpenTravelAlliance\AirItineraryPricingInfoType;

/**
 * Class representing PTCFareBreakdownsAType
 */
class PTCFareBreakdownsAType
{

    /**
     * Per passenger type code pricing for a travel itinerary.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType[]
     * $pTCFareBreakdown
     */
    private $pTCFareBreakdown = null;

    /**
     * Adds as pTCFareBreakdown
     *
     * Per passenger type code pricing for a travel itinerary.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType $pTCFareBreakdown
     */
    public function addToPTCFareBreakdown(\Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType $pTCFareBreakdown)
    {
        $this->pTCFareBreakdown[] = $pTCFareBreakdown;

        return $this;
    }

    /**
     * isset pTCFareBreakdown
     *
     * Per passenger type code pricing for a travel itinerary.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPTCFareBreakdown($index)
    {
        return isset($this->pTCFareBreakdown[$index]);
    }

    /**
     * unset pTCFareBreakdown
     *
     * Per passenger type code pricing for a travel itinerary.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPTCFareBreakdown($index)
    {
        unset($this->pTCFareBreakdown[$index]);
    }

    /**
     * Gets as pTCFareBreakdown
     *
     * Per passenger type code pricing for a travel itinerary.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType[]
     */
    public function getPTCFareBreakdown()
    {
        return $this->pTCFareBreakdown;
    }

    /**
     * Sets a new pTCFareBreakdown
     *
     * Per passenger type code pricing for a travel itinerary.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType[] $pTCFareBreakdown
     * @return self
     */
    public function setPTCFareBreakdown(array $pTCFareBreakdown)
    {
        $this->pTCFareBreakdown = $pTCFareBreakdown;

        return $this;
    }


}

