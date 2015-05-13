<?php

namespace Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType;

/**
 * Class representing ArrivalPolicyAType
 */
class ArrivalPolicyAType
{

    /**
     * When true, return rates with a guarantee policy.
     *
     * @property boolean $guaranteePolicyIndicator
     */
    private $guaranteePolicyIndicator = null;

    /**
     * When true, return rates with a deposit policy.
     *
     * @property boolean $depositPolicyIndicator
     */
    private $depositPolicyIndicator = null;

    /**
     * When true, return rates with a hold time policy.
     *
     * @property boolean $holdTimePolicyIndicator
     */
    private $holdTimePolicyIndicator = null;

    /**
     * Gets as guaranteePolicyIndicator
     *
     * When true, return rates with a guarantee policy.
     *
     * @return boolean
     */
    public function getGuaranteePolicyIndicator()
    {
        return $this->guaranteePolicyIndicator;
    }

    /**
     * Sets a new guaranteePolicyIndicator
     *
     * When true, return rates with a guarantee policy.
     *
     * @param boolean $guaranteePolicyIndicator
     * @return self
     */
    public function setGuaranteePolicyIndicator($guaranteePolicyIndicator)
    {
        $this->guaranteePolicyIndicator = $guaranteePolicyIndicator;

        return $this;
    }

    /**
     * Gets as depositPolicyIndicator
     *
     * When true, return rates with a deposit policy.
     *
     * @return boolean
     */
    public function getDepositPolicyIndicator()
    {
        return $this->depositPolicyIndicator;
    }

    /**
     * Sets a new depositPolicyIndicator
     *
     * When true, return rates with a deposit policy.
     *
     * @param boolean $depositPolicyIndicator
     * @return self
     */
    public function setDepositPolicyIndicator($depositPolicyIndicator)
    {
        $this->depositPolicyIndicator = $depositPolicyIndicator;

        return $this;
    }

    /**
     * Gets as holdTimePolicyIndicator
     *
     * When true, return rates with a hold time policy.
     *
     * @return boolean
     */
    public function getHoldTimePolicyIndicator()
    {
        return $this->holdTimePolicyIndicator;
    }

    /**
     * Sets a new holdTimePolicyIndicator
     *
     * When true, return rates with a hold time policy.
     *
     * @param boolean $holdTimePolicyIndicator
     * @return self
     */
    public function setHoldTimePolicyIndicator($holdTimePolicyIndicator)
    {
        $this->holdTimePolicyIndicator = $holdTimePolicyIndicator;

        return $this;
    }


}

