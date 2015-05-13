<?php

namespace Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType;

/**
 * Class representing GroupPoliciesAType
 */
class GroupPoliciesAType
{

    /**
     * Group policy information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\GroupPoliciesAType\GroupPolicyAType[]
     * $groupPolicy
     */
    private $groupPolicy = null;

    /**
     * Adds as groupPolicy
     *
     * Group policy information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\GroupPoliciesAType\GroupPolicyAType
     * $groupPolicy
     */
    public function addToGroupPolicy(
        \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\GroupPoliciesAType\GroupPolicyAType $groupPolicy
    ) {
        $this->groupPolicy[] = $groupPolicy;

        return $this;
    }

    /**
     * isset groupPolicy
     *
     * Group policy information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGroupPolicy($index)
    {
        return isset($this->groupPolicy[$index]);
    }

    /**
     * unset groupPolicy
     *
     * Group policy information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGroupPolicy($index)
    {
        unset($this->groupPolicy[$index]);
    }

    /**
     * Gets as groupPolicy
     *
     * Group policy information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\GroupPoliciesAType\GroupPolicyAType[]
     */
    public function getGroupPolicy()
    {
        return $this->groupPolicy;
    }

    /**
     * Sets a new groupPolicy
     *
     * Group policy information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\GroupPoliciesAType\GroupPolicyAType[]
     * $groupPolicy
     * @return self
     */
    public function setGroupPolicy(array $groupPolicy)
    {
        $this->groupPolicy = $groupPolicy;

        return $this;
    }


}

