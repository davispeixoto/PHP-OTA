<?php

namespace Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType;

/**
 * Class representing FeePoliciesAType
 */
class FeePoliciesAType
{

    /**
     * A fee that may apply to a reservation. Fees are used for non tax amounts like
     * service charges.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType[] $feePolicy
     */
    private $feePolicy = null;

    /**
     * Adds as feePolicy
     *
     * A fee that may apply to a reservation. Fees are used for non tax amounts like
     * service charges.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FeeType $feePolicy
     */
    public function addToFeePolicy(\Davispeixoto\OpenTravelAlliance\FeeType $feePolicy)
    {
        $this->feePolicy[] = $feePolicy;

        return $this;
    }

    /**
     * isset feePolicy
     *
     * A fee that may apply to a reservation. Fees are used for non tax amounts like
     * service charges.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFeePolicy($index)
    {
        return isset($this->feePolicy[$index]);
    }

    /**
     * unset feePolicy
     *
     * A fee that may apply to a reservation. Fees are used for non tax amounts like
     * service charges.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFeePolicy($index)
    {
        unset($this->feePolicy[$index]);
    }

    /**
     * Gets as feePolicy
     *
     * A fee that may apply to a reservation. Fees are used for non tax amounts like
     * service charges.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeeType[]
     */
    public function getFeePolicy()
    {
        return $this->feePolicy;
    }

    /**
     * Sets a new feePolicy
     *
     * A fee that may apply to a reservation. Fees are used for non tax amounts like
     * service charges.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeeType[] $feePolicy
     * @return self
     */
    public function setFeePolicy(array $feePolicy)
    {
        $this->feePolicy = $feePolicy;

        return $this;
    }


}

