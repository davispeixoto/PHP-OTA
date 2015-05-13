<?php

namespace Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType;

/**
 * Class representing TaxPoliciesAType
 */
class TaxPoliciesAType
{

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\TaxPoliciesAType\TaxPolicyAType[]
     * $taxPolicy
     */
    private $taxPolicy = null;

    /**
     * Adds as taxPolicy
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\TaxPoliciesAType\TaxPolicyAType
     * $taxPolicy
     */
    public function addToTaxPolicy(
        \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\TaxPoliciesAType\TaxPolicyAType $taxPolicy
    ) {
        $this->taxPolicy[] = $taxPolicy;

        return $this;
    }

    /**
     * isset taxPolicy
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTaxPolicy($index)
    {
        return isset($this->taxPolicy[$index]);
    }

    /**
     * unset taxPolicy
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTaxPolicy($index)
    {
        unset($this->taxPolicy[$index]);
    }

    /**
     * Gets as taxPolicy
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\TaxPoliciesAType\TaxPolicyAType[]
     */
    public function getTaxPolicy()
    {
        return $this->taxPolicy;
    }

    /**
     * Sets a new taxPolicy
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\TaxPoliciesAType\TaxPolicyAType[]
     * $taxPolicy
     * @return self
     */
    public function setTaxPolicy(array $taxPolicy)
    {
        $this->taxPolicy = $taxPolicy;

        return $this;
    }


}

