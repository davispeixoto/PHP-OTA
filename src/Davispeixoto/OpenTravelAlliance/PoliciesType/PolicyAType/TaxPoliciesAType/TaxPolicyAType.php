<?php

namespace Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\TaxPoliciesAType;

use Davispeixoto\OpenTravelAlliance\TaxType;

/**
 * Class representing TaxPolicyAType
 */
class TaxPolicyAType extends TaxType
{

    /**
     * Length of stay required for tax exemption.
     *
     * @property integer $nightsForTaxExemptionQuantity
     */
    private $nightsForTaxExemptionQuantity = null;

    /**
     * @property integer $taxableNightsQuantity
     */
    private $taxableNightsQuantity = null;

    /**
     * Gets as nightsForTaxExemptionQuantity
     *
     * Length of stay required for tax exemption.
     *
     * @return integer
     */
    public function getNightsForTaxExemptionQuantity()
    {
        return $this->nightsForTaxExemptionQuantity;
    }

    /**
     * Sets a new nightsForTaxExemptionQuantity
     *
     * Length of stay required for tax exemption.
     *
     * @param integer $nightsForTaxExemptionQuantity
     * @return self
     */
    public function setNightsForTaxExemptionQuantity($nightsForTaxExemptionQuantity)
    {
        $this->nightsForTaxExemptionQuantity = $nightsForTaxExemptionQuantity;

        return $this;
    }

    /**
     * Gets as taxableNightsQuantity
     *
     * @return integer
     */
    public function getTaxableNightsQuantity()
    {
        return $this->taxableNightsQuantity;
    }

    /**
     * Sets a new taxableNightsQuantity
     *
     * @param integer $taxableNightsQuantity
     * @return self
     */
    public function setTaxableNightsQuantity($taxableNightsQuantity)
    {
        $this->taxableNightsQuantity = $taxableNightsQuantity;

        return $this;
    }


}

