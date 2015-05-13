<?php

namespace Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType;

use Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType;

/**
 * Class representing RatePlanCandidatesAType
 */
class RatePlanCandidatesAType extends RatePlanCandidatesType
{

    /**
     * If TRUE, the rates prices in the response message must include all taxes and
     * surcharges.
     *
     * @property boolean $taxesIncludedInd
     */
    private $taxesIncludedInd = null;

    /**
     * Gets as taxesIncludedInd
     *
     * If TRUE, the rates prices in the response message must include all taxes and
     * surcharges.
     *
     * @return boolean
     */
    public function getTaxesIncludedInd()
    {
        return $this->taxesIncludedInd;
    }

    /**
     * Sets a new taxesIncludedInd
     *
     * If TRUE, the rates prices in the response message must include all taxes and
     * surcharges.
     *
     * @param boolean $taxesIncludedInd
     * @return self
     */
    public function setTaxesIncludedInd($taxesIncludedInd)
    {
        $this->taxesIncludedInd = $taxesIncludedInd;

        return $this;
    }


}

