<?php

namespace Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType;

/**
 * Class representing PolicyInfoCodesAType
 */
class PolicyInfoCodesAType
{

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PolicyInfoCodesAType\PolicyInfoCodeAType[]
     * $policyInfoCode
     */
    private $policyInfoCode = null;

    /**
     * Adds as policyInfoCode
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PolicyInfoCodesAType\PolicyInfoCodeAType
     * $policyInfoCode
     */
    public function addToPolicyInfoCode(
        \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PolicyInfoCodesAType\PolicyInfoCodeAType $policyInfoCode
    ) {
        $this->policyInfoCode[] = $policyInfoCode;

        return $this;
    }

    /**
     * isset policyInfoCode
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPolicyInfoCode($index)
    {
        return isset($this->policyInfoCode[$index]);
    }

    /**
     * unset policyInfoCode
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPolicyInfoCode($index)
    {
        unset($this->policyInfoCode[$index]);
    }

    /**
     * Gets as policyInfoCode
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PolicyInfoCodesAType\PolicyInfoCodeAType[]
     */
    public function getPolicyInfoCode()
    {
        return $this->policyInfoCode;
    }

    /**
     * Sets a new policyInfoCode
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PolicyInfoCodesAType\PolicyInfoCodeAType[]
     * $policyInfoCode
     * @return self
     */
    public function setPolicyInfoCode(array $policyInfoCode)
    {
        $this->policyInfoCode = $policyInfoCode;

        return $this;
    }


}

