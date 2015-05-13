<?php

namespace Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType;

/**
 * Class representing RatePoliciesAType
 */
class RatePoliciesAType
{

    /**
     * A rate policy description.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\RatePoliciesAType\RatePolicyAType[]
     * $ratePolicy
     */
    private $ratePolicy = null;

    /**
     * Adds as ratePolicy
     *
     * A rate policy description.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\RatePoliciesAType\RatePolicyAType
     * $ratePolicy
     */
    public function addToRatePolicy(
        \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\RatePoliciesAType\RatePolicyAType $ratePolicy
    ) {
        $this->ratePolicy[] = $ratePolicy;

        return $this;
    }

    /**
     * isset ratePolicy
     *
     * A rate policy description.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRatePolicy($index)
    {
        return isset($this->ratePolicy[$index]);
    }

    /**
     * unset ratePolicy
     *
     * A rate policy description.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRatePolicy($index)
    {
        unset($this->ratePolicy[$index]);
    }

    /**
     * Gets as ratePolicy
     *
     * A rate policy description.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\RatePoliciesAType\RatePolicyAType[]
     */
    public function getRatePolicy()
    {
        return $this->ratePolicy;
    }

    /**
     * Sets a new ratePolicy
     *
     * A rate policy description.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\RatePoliciesAType\RatePolicyAType[]
     * $ratePolicy
     * @return self
     */
    public function setRatePolicy(array $ratePolicy)
    {
        $this->ratePolicy = $ratePolicy;

        return $this;
    }


}

