<?php

namespace Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType;

/**
 * Class representing PetsPoliciesAType
 */
class PetsPoliciesAType
{

    /**
     * Specifies at a high level the pet policy.
     *
     * @property string $petsAllowedCode
     */
    private $petsAllowedCode = null;

    /**
     * Detailed policy information when Pets are Allowed.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PetsPoliciesAType\PetsPolicyAType[]
     * $petsPolicy
     */
    private $petsPolicy = null;

    /**
     * Gets as petsAllowedCode
     *
     * Specifies at a high level the pet policy.
     *
     * @return string
     */
    public function getPetsAllowedCode()
    {
        return $this->petsAllowedCode;
    }

    /**
     * Sets a new petsAllowedCode
     *
     * Specifies at a high level the pet policy.
     *
     * @param string $petsAllowedCode
     * @return self
     */
    public function setPetsAllowedCode($petsAllowedCode)
    {
        $this->petsAllowedCode = $petsAllowedCode;

        return $this;
    }

    /**
     * Adds as petsPolicy
     *
     * Detailed policy information when Pets are Allowed.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PetsPoliciesAType\PetsPolicyAType
     * $petsPolicy
     */
    public function addToPetsPolicy(
        \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PetsPoliciesAType\PetsPolicyAType $petsPolicy
    ) {
        $this->petsPolicy[] = $petsPolicy;

        return $this;
    }

    /**
     * isset petsPolicy
     *
     * Detailed policy information when Pets are Allowed.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPetsPolicy($index)
    {
        return isset($this->petsPolicy[$index]);
    }

    /**
     * unset petsPolicy
     *
     * Detailed policy information when Pets are Allowed.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPetsPolicy($index)
    {
        unset($this->petsPolicy[$index]);
    }

    /**
     * Gets as petsPolicy
     *
     * Detailed policy information when Pets are Allowed.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PetsPoliciesAType\PetsPolicyAType[]
     */
    public function getPetsPolicy()
    {
        return $this->petsPolicy;
    }

    /**
     * Sets a new petsPolicy
     *
     * Detailed policy information when Pets are Allowed.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PetsPoliciesAType\PetsPolicyAType[]
     * $petsPolicy
     * @return self
     */
    public function setPetsPolicy(array $petsPolicy)
    {
        $this->petsPolicy = $petsPolicy;

        return $this;
    }


}

