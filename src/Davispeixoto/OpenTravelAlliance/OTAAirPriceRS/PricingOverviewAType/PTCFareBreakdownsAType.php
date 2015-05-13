<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirPriceRS\PricingOverviewAType;

/**
 * Class representing PTCFareBreakdownsAType
 */
class PTCFareBreakdownsAType
{

    /**
     * The fare information for a specific PTC code for all of the priced itineraries.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType[]
     * $pTCFareBreakdown
     */
    private $pTCFareBreakdown = null;

    /**
     * Adds as pTCFareBreakdown
     *
     * The fare information for a specific PTC code for all of the priced itineraries.
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
     * The fare information for a specific PTC code for all of the priced itineraries.
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
     * The fare information for a specific PTC code for all of the priced itineraries.
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
     * The fare information for a specific PTC code for all of the priced itineraries.
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
     * The fare information for a specific PTC code for all of the priced itineraries.
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

