<?php

namespace Davispeixoto\OpenTravelAlliance\RateUploadType;

/**
 * Class representing GuaranteePoliciesAType
 */
class GuaranteePoliciesAType
{

    /**
     * GuaranteePolicy.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GuaranteeType[] $guaranteePolicy
     */
    private $guaranteePolicy = null;

    /**
     * Adds as guaranteePolicy
     *
     * GuaranteePolicy.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GuaranteeType $guaranteePolicy
     */
    public function addToGuaranteePolicy(\Davispeixoto\OpenTravelAlliance\GuaranteeType $guaranteePolicy)
    {
        $this->guaranteePolicy[] = $guaranteePolicy;

        return $this;
    }

    /**
     * isset guaranteePolicy
     *
     * GuaranteePolicy.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuaranteePolicy($index)
    {
        return isset($this->guaranteePolicy[$index]);
    }

    /**
     * unset guaranteePolicy
     *
     * GuaranteePolicy.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuaranteePolicy($index)
    {
        unset($this->guaranteePolicy[$index]);
    }

    /**
     * Gets as guaranteePolicy
     *
     * GuaranteePolicy.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GuaranteeType[]
     */
    public function getGuaranteePolicy()
    {
        return $this->guaranteePolicy;
    }

    /**
     * Sets a new guaranteePolicy
     *
     * GuaranteePolicy.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GuaranteeType[] $guaranteePolicy
     * @return self
     */
    public function setGuaranteePolicy(array $guaranteePolicy)
    {
        $this->guaranteePolicy = $guaranteePolicy;

        return $this;
    }


}

