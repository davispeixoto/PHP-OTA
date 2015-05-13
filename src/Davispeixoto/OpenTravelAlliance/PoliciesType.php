<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PoliciesType
 *
 * Describes the policies of the hotel, such as the type of payments, or whether
 * children or pets are accepted.
 * XSD Type: PoliciesType
 */
class PoliciesType
{

    /**
     * Describes the policies of the hotel, such as the type of payments, or whether
     * children or pets are accepted.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType[] $policy
     */
    private $policy = null;

    /**
     * Adds as policy
     *
     * Describes the policies of the hotel, such as the type of payments, or whether
     * children or pets are accepted.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType $policy
     */
    public function addToPolicy(\Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType $policy)
    {
        $this->policy[] = $policy;

        return $this;
    }

    /**
     * isset policy
     *
     * Describes the policies of the hotel, such as the type of payments, or whether
     * children or pets are accepted.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPolicy($index)
    {
        return isset($this->policy[$index]);
    }

    /**
     * unset policy
     *
     * Describes the policies of the hotel, such as the type of payments, or whether
     * children or pets are accepted.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPolicy($index)
    {
        unset($this->policy[$index]);
    }

    /**
     * Gets as policy
     *
     * Describes the policies of the hotel, such as the type of payments, or whether
     * children or pets are accepted.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType[]
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * Sets a new policy
     *
     * Describes the policies of the hotel, such as the type of payments, or whether
     * children or pets are accepted.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType[] $policy
     * @return self
     */
    public function setPolicy(array $policy)
    {
        $this->policy = $policy;

        return $this;
    }


}

